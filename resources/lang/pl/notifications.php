<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'all_read' => 'Wszystkie powiadomienia przeczytane!',
    'mark_read' => 'Wyczyść :type',
    'none' => 'Brak powiadomień',
    'see_all' => 'zobacz wszystkie powiadomienia',

    'filters' => [
        '_' => 'wszystkie',
        'user' => 'profil',
        'beatmapset' => 'beatmapy',
        'forum_topic' => 'forum',
        'news_post' => 'aktualności',
        'build' => 'kompilacje',
        'channel' => 'czat',
    ],

    'item' => [
        'beatmapset' => [
            '_' => 'Beatmapa',

            'beatmapset_discussion' => [
                '_' => 'Dyskusja beatmapy',
                'beatmapset_discussion_lock' => 'Tworzenie dyskusji dla beatmapy „:title” zostało zablokowane.',
                'beatmapset_discussion_lock_compact' => 'Dyskusja została zablokowana',
                'beatmapset_discussion_post_new' => 'Nowy post w dyskusji „:title” od użytkownika :username: „:content”',
                'beatmapset_discussion_post_new_empty' => 'Nowy post od użytkownika :username dla beatmapy „:title”',
                'beatmapset_discussion_post_new_compact' => 'Nowy post od użytkownika :username',
                'beatmapset_discussion_post_new_compact_empty' => 'Nowy post od użytkownika :username',
                'beatmapset_discussion_unlock' => 'Tworzenie dyskusji dla beatmapy „:title” zostało odblokowane.',
                'beatmapset_discussion_unlock_compact' => 'Dyskusja została odblokowana',
            ],

            'beatmapset_problem' => [
                '_' => 'Problem z zakwalifikowaną beatmapą',
                'beatmapset_discussion_qualified_problem' => 'Problem zgłoszony przez użytkownika :username dla beatmapy „:title”: „:content”',
                'beatmapset_discussion_qualified_problem_empty' => 'Problem zgłoszony przez użytkownika :username dla beatmapy „:title”',
                'beatmapset_discussion_qualified_problem_compact' => 'Problem zgłoszony przez użytkownika :username: „:content”',
                'beatmapset_discussion_qualified_problem_compact_empty' => 'Problem zgłoszony przez użytkownika :username',
            ],

            'beatmapset_state' => [
                '_' => 'Status beatmapy został zmieniony',
                'beatmapset_disqualify' => 'Beatmapa „:title” została zdyskwalifikowana przez użytkownika :username.',
                'beatmapset_disqualify_compact' => 'Beatmapa została zdyskwalifikowana',
                'beatmapset_love' => 'Beatmapa „:title” uzyskała status ulubionej społeczności od użytkownika :username.',
                'beatmapset_love_compact' => 'Beatmapa uzyskała status ulubionej społeczności',
                'beatmapset_nominate' => 'Beatmapa „:title” została nominowana przez użytkownika :username.',
                'beatmapset_nominate_compact' => 'Beatmapa została nominowana',
                'beatmapset_qualify' => 'Beatmapa „:title” uzyskała wystarczającą liczbę nominacji i została zakwalifikowana.',
                'beatmapset_qualify_compact' => 'Beatmapa została zakwalifikowana',
                'beatmapset_rank' => 'Beatmapa „:title” uzyskała status rankingowy',
                'beatmapset_rank_compact' => 'Beatmapa uzyskała status rankingowy',
                'beatmapset_reset_nominations' => 'Nominacja beatmapy „:title” została zresetowana',
                'beatmapset_reset_nominations_compact' => 'Nominacja została zresetowana',
            ],

            'comment' => [
                '_' => 'Nowy komentarz',

                'comment_new' => 'Użytkownik :username napisał komentarz pod „:title”: „:content”',
                'comment_new_compact' => 'Użytkownik :username napisał komentarz: „:content”',
            ],
        ],

        'channel' => [
            '_' => 'Czat',

            'channel' => [
                '_' => 'Nowa wiadomość',
                'pm' => [
                    'channel_message' => ':username pisze: „:title”',
                    'channel_message_compact' => ':title',
                    'channel_message_group' => 'od użytkownika :username',
                ],
            ],
        ],

        'build' => [
            '_' => 'Zmiany',

            'comment' => [
                '_' => 'Nowy komentarz',

                'comment_new' => 'Użytkownik :username napisał komentarz pod „:title”: „:content”',
                'comment_new_compact' => 'Użytkownik :username napisał komentarz: „:content”',
            ],
        ],

        'news_post' => [
            '_' => 'Aktualności',

            'comment' => [
                '_' => 'Nowy komentarz',

                'comment_new' => 'Użytkownik :username napisał komentarz pod „:title”: „:content”',
                'comment_new_compact' => 'Użytkownik :username napisał komentarz: „:content”',
            ],
        ],

        'forum_topic' => [
            '_' => 'Wątek na forum',

            'forum_topic_reply' => [
                '_' => 'Nowa odpowiedź na forum',
                'forum_topic_reply' => 'Użytkownik :username odpowiedział w wątku „:title”',
                'forum_topic_reply_compact' => 'Użytkownik :username odpowiedział',
            ],
        ],

        'legacy_pm' => [
            '_' => 'Skrzynka odbiorcza starego forum',

            'legacy_pm' => [
                '_' => '',
                'legacy_pm' => ':count_delimited nieprzeczytana wiadomość|:count_delimited nieprzeczytane wiadomości|:count_delimited nieprzeczytanych wiadomości',
            ],
        ],

        'user_achievement' => [
            '_' => 'Medale',

            'user_achievement_unlock' => [
                '_' => 'Nowy medal',
                'user_achievement_unlock' => 'Odblokowano medal „:title”!',
                'user_achievement_unlock_compact' => 'Odblokowano medal „:title”!',
            ],
        ],
    ],
];
