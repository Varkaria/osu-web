<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'require_login' => 'Увійдіть, щоб продовжити.',
    'require_verification' => 'Будь ласка, пройдіть перевірку, щоб продовжити.',
    'restricted' => "Не можна це робити поки ваші права обмежені.",
    'silenced' => "Не можна робити це поки заглушений.",
    'unauthorized' => 'Доступ заборонено.',

    'beatmap_discussion' => [
        'destroy' => [
            'is_hype' => 'Не можна відмінити хайп.',
            'has_reply' => 'Не можна видалити дискусію з відповідями',
        ],
        'nominate' => [
            'exhausted' => 'Ти досяг твого ліміту номінацій за день, спробуй завтра.',
            'full_bn_required' => 'Ви повинні бути повноправним номінатором, щоб додати цю карту на кваліфікацію.',
            'full_bn_required_hybrid' => 'Ви повинні бути повноправним номінатором, щоб номінувати карти з більш ніж одним режимом гри.',
            'incorrect_state' => 'Помилка під час виконання цих дій, спробуйте оновити сторінку.',
            'owner' => "Не можна номінувати власну біткарту.",
        ],
        'resolve' => [
            'not_owner' => 'Тільки автор теми та власник біткарти може завершити спір.',
        ],

        'store' => [
            'mapper_note_wrong_user' => 'Тільки власник біткарти або номінатор/член групи QAT може залишати нотатки для картерів.',
        ],

        'vote' => [
            'limit_exceeded' => 'Будь ласка, зачекайте деякий час перед повторним голосуванням',
            'owner' => "Не можна голосувати в власному обговоренні.",
            'wrong_beatmapset_state' => 'Можна голосувати тільки в обговореннях очікуючих біткарт.',
        ],
    ],

    'beatmap_discussion_post' => [
        'destroy' => [
            'not_owner' => 'Ви можете видаляти тільки свої пости.',
            'resolved' => 'Ви не можете видаляти пости в вирішених обговореннях.',
            'system_generated' => 'Не можна видаляти автоматично згенеровані пости.',
        ],

        'edit' => [
            'not_owner' => 'Тільки автор може редагувати публікацію.',
            'resolved' => 'Ви не можете редагувати пости в вирішених обговореннях.',
            'system_generated' => 'Неможливо редагувати автоматично згенеровану публікацію.',
        ],

        'store' => [
            'beatmapset_locked' => 'Обговорення цієї карти закриті.',
        ],
    ],

    'chat' => [
        'blocked' => 'Неможливо надіслати повідомлення користувачу, який заблокував вас або якого заблокували ви.',
        'friends_only' => 'Користувач заблокував повідомлення від користувачів не зі списку друзів.',
        'moderated' => 'В даний момент канал модерується.',
        'no_access' => 'У вас немає доступу до цього каналу.',
        'restricted' => 'Заглушені, обмежені, заблоковані користувачі не можуть надсилати повідомлення.',
    ],

    'comment' => [
        'update' => [
            'deleted' => "Неможливо редагувати видалену публікацію.",
        ],
    ],

    'contest' => [
        'voting_over' => 'Ви не можете змінити свій вибір після закінчення періоду голосування.',
    ],

    'forum' => [
        'moderate' => [
            'no_permission' => 'Відсутній дозвіл на модерацію даного форуму.',
        ],

        'post' => [
            'delete' => [
                'only_last_post' => 'Можливо видалити лише останню публікацію.',
                'locked' => 'Неможливо видалити публікацію в заблокованій темі.',
                'no_forum_access' => 'Потрібний доступ до запитаного форуму.',
                'not_owner' => 'Тільки автор може видалити дану публікацію.',
            ],

            'edit' => [
                'deleted' => 'Неможливо редагувати видалену публікацію.',
                'locked' => 'Публікація захищена від змін.',
                'no_forum_access' => 'Потрібний доступ до запитаного форуму.',
                'not_owner' => 'Тільки автор може редагувати дану публікацію.',
                'topic_locked' => 'Неможливо редагувати публікацію в заблокованій темі.',
            ],

            'store' => [
                'play_more' => 'Пограйте в гру, перш ніж писати що-небудь на форумі. Якщо у вас проблеми з грою, спробуйте написати про це на форумі «Допомоги і підтримки».',
                'too_many_help_posts' => "Перш ніж ви зможете створювати додаткові пости, ви повинні пограти в гру довше. Якщо у вас є проблеми з грою, напишіть нам на support@ppy.sh", // FIXME: unhardcode email address.
            ],
        ],

        'topic' => [
            'reply' => [
                'double_post' => 'Будь ласка, відредагуйте ваше останнє повідомлення замість повторної публікації.',
                'locked' => 'Не можна відповісти в закритій темі.',
                'no_forum_access' => 'Потрібний доступ до запитаного форуму.',
                'no_permission' => 'Недостатньо прав для відповіді.',

                'user' => [
                    'require_login' => 'Будь ласка, увійдіть, щоб продовжити.',
                    'restricted' => "Не можна відповісти поки аккаунт обмежений.",
                    'silenced' => "Не можна відповісти поки ви заглушені.",
                ],
            ],

            'store' => [
                'no_forum_access' => 'Потрібний доступ до запитаного форуму.',
                'no_permission' => 'Недостатньо прав на створення нової теми.',
                'forum_closed' => 'Не можна публікувати поки форум закритий.',
            ],

            'vote' => [
                'no_forum_access' => 'Потрібний доступ до запитаного форуму.',
                'over' => 'Опитування закінчено і відповідати в ньому вже не можна.',
                'play_more' => 'Вам потрібно пограти ще, перед тим як голосувати на форумі.',
                'voted' => 'Міняти свою відповідь заборонено.',

                'user' => [
                    'require_login' => 'Увійдіть, щоб проголосувати.',
                    'restricted' => "Не можна голосувати поки аккаунт обмежений.",
                    'silenced' => "Не можна голосувати поки заглушений.",
                ],
            ],

            'watch' => [
                'no_forum_access' => 'Необхідний доступ до запитуваного форуму.',
            ],
        ],

        'topic_cover' => [
            'edit' => [
                'uneditable' => 'Вказана невірна обкладинка.',
                'not_owner' => 'Тільки автор теми може міняти обкладинку.',
            ],
            'store' => [
                'forum_not_allowed' => 'Цей форум не підтримує теми обкладинки.',
            ],
        ],

        'view' => [
            'admin_only' => 'Тільки адміністратор може переглядати цей форум.',
        ],
    ],

    'user' => [
        'page' => [
            'edit' => [
                'locked' => 'Сторінку користувача заблоковано.',
                'not_owner' => 'Можна редагувати лише власну сторінку.',
                'require_supporter_tag' => 'необхідний osu!supporter.',
            ],
        ],
    ],
];
