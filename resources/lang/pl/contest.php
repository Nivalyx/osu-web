<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'header' => [
        'small' => 'Rywalizacja na więcej sposobów niż tylko klikanie w kółka.',
        'large' => 'Konkursy społeczności',
    ],

    'index' => [
        'nav_title' => 'lista',
    ],

    'voting' => [
        'over' => 'Głosowanie dla tego konkursu zostało zakończone',
        'login_required' => 'Zaloguj się, aby zagłosować!',

        'best_of' => [
            'none_played' => "Wygląda na to, że żadna z beatmap kwalifikujących się do tego konkursu nie została przez ciebie zagrana.",
        ],

        'button' => [
            'add' => 'Zagłosuj',
            'remove' => 'Cofnij głos',
            'used_up' => 'Nie masz już więcej głosów',
        ],
    ],
    'entry' => [
        '_' => 'zgłoszenie',
        'login_required' => 'Zaloguj się, aby uczestniczyć w tym konkursie.',
        'silenced_or_restricted' => 'Nie możesz uczestniczyć w konkursach podczas uciszenia bądź blokady konta.',
        'preparation' => 'Ten konkurs jest obecnie przygotowywany. Czekaj cierpliwie!',
        'over' => 'Dziękujemy za zgłoszenia! Przesyłanie prac zakończyło się i wkrótce rozpocznie się głosowanie.',
        'limit_reached' => 'Osiągnięto limit zgłoszeń dla tego konkursu',
        'drop_here' => 'Tutaj umieść swoje zgłoszenie',
        'download' => 'Pobierz plik .osz',
        'wrong_type' => [
            'art' => 'Jedynie pliki o rozszerzeniach .jpg czy .png są dozwolone w tym konkursie.',
            'beatmap' => 'Jedynie pliki o rozszerzeniu .osu są dozwolone w tym konkursie.',
            'music' => 'Jedynie pliki o rozszerzeniu .mp3 są dozwolone w tym konkursie.',
        ],
        'too_big' => 'Maksymalna wielkość zgłoszeń dla tego konkursu to :limit.',
    ],
    'beatmaps' => [
        'download' => 'Pobierz zgłoszenie',
    ],
    'vote' => [
        'list' => 'głosy',
        'count' => ':count_delimited głos|:count_delimited głosy|:count_delimited głosów',
        'points' => ':count_delimited punkt|:count_delimited punkty|:count_delimited punktów',
    ],
    'dates' => [
        'ended' => 'Zakończony :date',
        'ended_no_date' => '',

        'starts' => [
            '_' => 'Data rozpoczęcia: :date',
            'soon' => 'wkrótce™',
        ],
    ],
    'states' => [
        'entry' => 'Otwarty na zgłoszenia',
        'voting' => 'Głosowanie',
        'results' => 'Wyniki',
    ],
];
