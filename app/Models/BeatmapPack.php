<?php

/**
 *    Copyright 2015-2017 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace App\Models;

use App\Models\Beatmap;
use App\Models\Beatmapset;
use App\Models\Score\Best;
use Auth;
use DB;

class BeatmapPack extends Model
{
    const DEFAULT_TYPE = 'standard';
    private static $tagMappings = [
        'standard' => 'S',
        'theme' => 'T',
        'artist' => 'A',
        'chart' => 'R',
    ];

    protected $table = 'osu_beatmappacks';
    protected $primaryKey = 'pack_id';

    protected $dates = ['date'];
    public $timestamps = false;

    public function items()
    {
        return $this->hasMany(BeatmapPackItem::class, 'pack_id');
    }

    public function beatmapsets()
    {
        $setsTable = (new Beatmapset)->getTable();
        $itemsTable = (new BeatmapPackItem)->getTable();

        return Beatmapset::query()
            ->join($itemsTable, "{$itemsTable}.beatmapset_id", '=', "{$setsTable}.beatmapset_id")
            ->where("{$itemsTable}.pack_id", '=', $this->pack_id);
    }

    public function beatmapsetsWithBestScores($mode)
    {
        $beatmapsetTable = (new Beatmapset)->getTable();
        $beatmapsTable = (new Beatmap)->getTable();
        $scoreBestTable = (new $mode)->getTable();
        $user_id = Auth::id();

        if (Auth::check()) {
            $counts = DB::raw("(SELECT count(*)
                                FROM {$scoreBestTable}
                                WHERE {$scoreBestTable}.user_id = {$user_id}
                                AND {$scoreBestTable}.beatmap_id IN (
                                    SELECT {$beatmapsTable}.beatmap_id
                                    FROM {$beatmapsTable}
                                    WHERE {$beatmapsTable}.beatmapset_id = {$beatmapsetTable}.beatmapset_id
                                )) as count");
        } else {
            $counts = DB::raw('(SELECT 0) as count');
        }

        return $this->beatmapsets()->select("{$beatmapsetTable}.*", $counts);
    }

    public function beatmapsetsWithBestOsuScores()
    {
        return $this->beatmapsetsWithBestScores(Best\Osu::class);
    }

    public function beatmapsetsWithBestFruitsScores()
    {
        return $this->beatmapsetsWithBestScores(Best\Fruits::class);
    }

    public function beatmapsetsWithBestManiaScores()
    {
        return $this->beatmapsetsWithBestScores(Best\Mania::class);
    }

    public function beatmapsetsWithBestTaikoScores()
    {
        return $this->beatmapsetsWithBestScores(Best\Taiko::class);
    }

    public function downloadUrls()
    {
        $array = [];
        foreach (explode(',', $this->url) as $url) {
            preg_match('@^https?://(?<host>[^/]+)@i', $url, $matches);
            $array[] = [
                'url' => $url,
                'host' => $matches['host'],
            ];
        }

        return $array;
    }

    public static function getPacks($type)
    {
        if (!in_array($type, array_keys(static::$tagMappings), true)) {
            return;
        }

        static $packIdSortable = ['standard', 'chart'];

        $tag = static::$tagMappings[$type];
        $packs = static::where('tag', 'like', "{$tag}%");
        if (in_array($type, $packIdSortable, true)) {
            $packs->orderBy('pack_id', 'desc');
        } else {
            $packs->orderBy('name', 'asc');
        }

        return $packs;
    }
}
