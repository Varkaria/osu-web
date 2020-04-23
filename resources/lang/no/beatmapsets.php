<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'availability' => [
        'disabled' => 'Dette beatmappet er for øyeblikket ikke tilgjengelig for nedlastning.',
        'parts-removed' => 'Deler av dette beatmappet har blitt fjernet etter forespørsel av skaperen eller en tredjepart rettighetshaver.',
        'more-info' => 'Klikk her for mer informasjon.',
    ],

    'index' => [
        'title' => 'Beatmapsliste',
        'guest_title' => 'Beatmaps',
    ],

    'panel' => [
        'download' => [
            'all' => '',
            'video' => '',
            'no_video' => '',
            'direct' => '',
        ],
    ],

    'show' => [
        'discussion' => 'Diskusjon',

        'details' => [
            'favourite' => 'Marker dette beatmapsettet som en favoritt',
            'logged-out' => 'Du må logge inn før du kan laste ned beatmaps!',
            'mapped_by' => 'mappet av :mapper',
            'unfavourite' => 'Fjern dette beatmapsettet som en favoritt',
            'updated_timeago' => 'sist oppdatert :timeago',

            'download' => [
                '_' => 'Last ned',
                'direct' => '',
                'no-video' => 'uten Video',
                'video' => 'med Video',
            ],

            'login_required' => [
                'bottom' => 'for å få tilgang til flere funksjoner',
                'top' => 'Logg inn',
            ],
        ],

        'details_date' => [
            'approved' => '',
            'loved' => '',
            'qualified' => '',
            'ranked' => '',
            'submitted' => '',
            'updated' => '',
        ],

        'favourites' => [
            'limit_reached' => 'Du har lagt til for mange beatmaps som favoritter! Vennligst fjern noen av favorittene dine før du prøver igjen.',
        ],

        'hype' => [
            'action' => 'Hype denne mappen hvis du likte å spille den, for å hjelpe den å nå <strong>Rangert</strong> status.',

            'current' => [
                '_' => 'Dette mappet er for øyeblikket :status.',

                'status' => [
                    'pending' => 'ventende',
                    'qualified' => 'kvalifisert',
                    'wip' => 'under konstruksjon',
                ],
            ],

            'disqualify' => [
                '_' => '',
                'button_title' => '',
            ],

            'report' => [
                '_' => '',
                'button' => '',
                'button_title' => '',
                'link' => '',
            ],
        ],

        'info' => [
            'description' => 'Beskrivelse',
            'genre' => 'Sjanger',
            'language' => 'Språk',
            'no_scores' => 'Data blir fortsatt kalkulert...',
            'points-of-failure' => 'Feilpunkter',
            'source' => 'Kilde',
            'success-rate' => 'Suksessrate',
            'tags' => 'Stikkord',
            'unranked' => 'Urangert beatmap',
        ],

        'scoreboard' => [
            'achieved' => 'oppnådd :when',
            'country' => 'Landsrangering',
            'friend' => 'Vennerangering',
            'global' => 'Global Rangering',
            'supporter-link' => 'Klikk <a href=":link">her</a> for å se alle de fancy funskjonene du får tildelt!',
            'supporter-only' => 'Du må være en osu!supporter for å ha tilgang til venne- og landsrangering!',
            'title' => 'Poengliste',

            'headers' => [
                'accuracy' => 'Presisjon',
                'combo' => 'Maks Kombo',
                'miss' => 'Bom',
                'mods' => 'Modifikasjoner',
                'player' => 'Spiller',
                'pp' => '',
                'rank' => 'Rang',
                'score_total' => 'Total Poengsum',
                'score' => 'Poengsum',
            ],

            'no_scores' => [
                'country' => 'Ingen fra landet ditt har satt en poengsum på denne mappen enda!',
                'friend' => 'Ingen av vennene dine har satt en poengsum på denne mappen enda!',
                'global' => 'Ingen poengsummer enda. Kanskje du skulle prøve å sette noen?',
                'loading' => 'Laster poengsummer...',
                'unranked' => 'Urangert beatmap.',
            ],
            'score' => [
                'first' => 'I ledelsen',
                'own' => 'Ditt beste',
            ],
        ],

        'stats' => [
            'cs' => 'Sirkel Størrelse',
            'cs-mania' => 'Antall Tangenter',
            'drain' => 'HP avløp',
            'accuracy' => 'Presisjon',
            'ar' => 'Tilnærmingsrate',
            'stars' => 'Vanskelighetsgrad (*)',
            'total_length' => 'Lengde',
            'bpm' => 'BPM',
            'count_circles' => 'Antall Sirkler',
            'count_sliders' => 'Antall Glidere',
            'user-rating' => 'Brukervurderinger',
            'rating-spread' => 'Vurderingsskjema',
            'nominations' => 'Nominasjoner',
            'playcount' => 'Spillforsøk',
        ],

        'status' => [
            'ranked' => '',
            'approved' => '',
            'loved' => '',
            'qualified' => '',
            'wip' => '',
            'pending' => '',
            'graveyard' => '',
        ],
    ],
];
