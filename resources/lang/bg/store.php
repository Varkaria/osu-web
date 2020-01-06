<?php

/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
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

return [
    'admin' => [
        'warehouse' => 'Склад',
    ],

    'cart' => [
        'checkout' => 'Разплащане',
        'more_goodies' => 'Искам да проверя още артикули преди да приключа с поръчката си',
        'shipping_fees' => 'транспортни такси',
        'title' => 'Количка за пазаруване',
        'total' => 'общо',

        'errors_no_checkout' => [
            'line_1' => 'Ох не, изникнаха проблеми с количката ви, спирайки разплащането!',
            'line_2' => 'Премахнете или актуализирайте артикулите отгоре, за да продължите.',
        ],

        'empty' => [
            'text' => 'Вашата количка е празна.',
            'return_link' => [
                '_' => 'Върнете се до :link за други придобивки!',
                'link_text' => 'списъка с артикули',
            ],
        ],
    ],

    'checkout' => [
        'cart_problems' => 'Ох не, изникнаха проблеми с количката ви!',
        'cart_problems_edit' => 'Щракнете тук, за да го редактирате.',
        'declined' => 'Плащането бе отменено.',
        'delayed_shipping' => 'В момента сме затрупани с поръчки! Добре доши сте да поставите вашата поръчка, но очаквайте **допълнително 1-2 седмици закъснение** докато настигнем с вече съществуващите поръчки.',
        'old_cart' => 'Вашата количка изглежда е с изтекъл срок и бе възобновена, моля опитайте отново.',
        'pay' => 'Разплатете се с PayPal',

        'has_pending' => [
            '_' => 'Имате незавършени разплащания. Кликнете :link , за да ги видите.',
            'link_text' => 'тук',
        ],

        'pending_checkout' => [
            'line_1' => 'Предишно разплашане бе започнато и незавършено.',
            'line_2' => 'Възстановете вашето разплащане, като изберете метод на плащане.',
        ],
    ],

    'discount' => 'спести :percent%',

    'invoice' => [
        'echeck_delay' => 'Вие заплатихте чрез eCheck, което може да отнеме до 10 дена от страна на PayPal за потвърждение на плащането!',
        'status' => [
            'processing' => [
                'title' => 'Вашето заплащане все още не е потвърдено!',
                'line_1' => 'Ако вече сте заплатили, тогава все още очакваме потвърждение за заплащането. Моля презаредете страницата след минута или две!',
                'line_2' => [
                    '_' => 'Ако възникне проблем по време на разплащането, :link',
                    'link_text' => 'кликнете тук, за да възстановите вашето разплащане',
                ],
            ],
        ],
    ],

    'order' => [
        'paid_on' => 'Поръчка направена на :date',

        'invoice' => 'Преглед на фактурата',
        'no_orders' => 'Нямате поръчки за преглед.',
        'resume' => 'Продължи разплащането',

        'item' => [
            'display_name' => [
                'supporter_tag' => ':name за :username (:duration)',
            ],
            'quantity' => 'Количество',
        ],

        'not_modifiable_exception' => [
            'cancelled' => 'Не можете да променяте вашата поръчка, защото тя бе отменена.',
            'checkout' => 'Не можете да променяте вашата поръчка докато тя се обработва.', // checkout and processing should have the same message.
            'default' => 'Тази поръчка не може да се изменя',
            'delivered' => 'Не можете да променяте вашата поръчка, защото тя вече е доставена.',
            'paid' => 'Не можете да променяте вашата поръчка, защото тя вече е платена.',
            'processing' => 'Не можете да променяте вашата поръчка докато тя се обработва.',
            'shipped' => 'Не можете да променяте вашата поръчка, защото тя вече е изпратена.',
        ],

        'status' => [
            'cancelled' => 'Отменено',
            'checkout' => 'Подготовка',
            'delivered' => 'Доставено',
            'paid' => 'Платено',
            'processing' => 'Изчакване на потвърждение',
            'shipped' => 'В движение',
        ],
    ],

    'product' => [
        'name' => 'Име',

        'stock' => [
            'out' => 'Този артикул не е в наличност в момента. Моля проверете отново по-късно!',
            'out_with_alternative' => 'За съжаление този артикул не е в наличност. Моля използвайте падащото меню да избере друг или проверете отново по-късно!',
        ],

        'add_to_cart' => 'Добави в количката',
        'notify' => 'Изпрати ми известие, когато отново е в наличност!',

        'notification_success' => 'вие ще бъдете уведомени, когато презаредим тези артикули. щракнете :link за отказ',
        'notification_remove_text' => 'тук',

        'notification_in_stock' => 'Този артикул вече е в наличност!',
    ],

    'supporter_tag' => [
        'gift' => 'подари на играч',
        'require_login' => [
            '_' => 'Трябва да сте :link , за да закупите osu!supporter !',
            'link_text' => 'влезли в профила си',
        ],
    ],

    'username_change' => [
        'check' => 'Въведете потребителско име, за да проверите наличността му!',
        'checking' => 'Проверка за наличност на :username...',
        'require_login' => [
            '_' => 'Трябва да сте :link , за да промените името си!',
            'link_text' => 'влезли в профила си',
        ],
    ],
];
