<?php

$crossConfigOptions = array();
$crossConfigOptions['appOptions'] = array(
    'refrsh' => array(
        'rate' => 2 * 60 * 1000,
        'updMsg' => 20000,
        'start' => 20230305,
        'end' => 20230416
    )
);
if ($local && isset($testOptions['speedUp']) && !!$testOptions['speedUp']) {
    $crossConfigOptions['appOptions']['refrsh'] = array(
        'rate' => 3000,
        'updMsg' => 500,
        'start' => 20230305,
        'end' => 20230416
    );
}

$crossConfigOptions['parties'] = array(
    'ind' => array(
        'main' => '0',
        'name' => array(
            'full' => 'Independent',
            'cur' => 'Independent',
            'shrt' => 'Ind'
        ),
        'colors' => array(
            'main' => '#afafaf',
            'main-dark' => '#8c8c8b',
            'main-text' => '#ffffff',
            'text-light' => '#8c8c8b',
            'text-dark' => '#8c8c8b'
        )
    ),
    'oth' => array(
        'main' => '1',
        'alias' => array('o'),
        'name' => array(
            'full' => 'Other',
            'cur' => 'Other',
            'shrt' => 'Oth'
        ),
        'colors' => array(
            'main' => '#afafaf',
            'main-dark' => '#8c8c8b',
            'main-text' => '#ffffff',
            'text-light' => '#8c8c8b',
            'text-dark' => '#8c8c8b'
        )
    ),
    'spk' => array(
        'main' => '0',
        'name' => array(
            'full' => 'Speaker',
            'cur' => 'Speaker',
            'shrt' => 'Speaker'
        ),
        'colors' => array(
            'main' => '#afafaf',
            'main-dark' => '#8c8c8b',
            'main-text' => '#ffffff',
            'text-light' => '#8c8c8b',
            'text-dark' => '#8c8c8b'
        )
    ),
    'con' => array(
        'main' => '1',
        'name' => array(
            'full' => 'Conservative Party',
            'cur' => 'Conservative',
            'shrt' => 'Con'
        ),
        'icon' => array(
            'dt' => array(
                'hold' => '0px -120px',
                'gain' => '-30px -120px'
            ),
            'mob' => array(
                'hold' => '-60px -210px',
                'gain' => '-90px -210px'
            )
        ),
        'colors' => array(
            'main' => '#0098D9',
            'main-dark' => '#007bae',
            'main-text' => '#ffffff',
            'text-light' => '#0098D9',
            'text-dark' => '#0098D9'
        )
    ),
    'dup' => array(
        'main' => '1',
        'name' => array(
            'full' => 'Democratic Unionist Party',
            'cur' => 'DUP',
            'shrt' => 'DUP'
        ),
        'colors' => array(
            'main' => '#C8292B',
            'main-dark' => '#580000',
            'main-text' => '#ffffff',
            'text-light' => '#C8292B',
            'text-dark' => '#C8292B'
        )
    ),
    'grn' => array(
        'main' => '1',
        'alias' => array('green', 'gr'),
        'name' => array(
            'full' => 'Green Party',
            'cur' => 'Greens',
            'shrt' => 'Grn'
        ),
        'icon' => array(
            'dt' => array(
                'hold' => '0px -240px',
                'gain' => '-30px -240px'
            ),
            'mob' => array(
                'hold' => '-120px -240px',
                'gain' => '-150px -240px'
            )
        ),
        'colors' => array(
            'main' => '#6ab023',
            'main-dark' => '#5a8129',
            'main-text' => '#ffffff',
            'text-light' => '#6ab023',
            'text-dark' => '#6ab023'
        )
    ),
    'lab' => array(
        'main' => '1',
        'name' => array(
            'full' => 'Labour Party',
            'cur' => 'Labour',
            'shrt' => 'Lab'
        ),
        'icon' => array(
            'dt' => array(
                'hold' => '0px -150px',
                'gain' => '-30px -150px'
            ),
            'mob' => array(
                'hold' => '-60px -240px',
                'gain' => '-90px -240px'
            )
        ),
        'colors' => array(
            'main' => '#DA1500',
            'main-dark' => '#980e25',
            'main-text' => '#ffffff',
            'text-light' => '#DA1500',
            'text-dark' => '#DA1500'
        )
    ),
    'lib_dems' => array(
        'main' => '1',
        'alias' => array(
            'ld',
            'lib_dem',
            'lib-dem',
            'lib-dems'
        ),
        'name' => array(
            'full' => 'Liberal Democrats',
            'cur' => 'Lib Dems',
            'shrt' => 'LD'
        ),
        'icon' => array(
            'dt' => array(
                'hold' => '0px -210px',
                'gain' => '-30px -210px'
            ),
            'mob' => array(
                'hold' => '-120px -210px',
                'gain' => '-150px -210px'
            )
        ),
        'colors' => array(
            'main' => '#FBD500',
            'main-dark' => '#bb930e',
            'main-text' => '#000000',
            'text-light' => '#FBD500',
            'text-dark' => '#000000'
        )
    ),
    'pc' => array(
        'main' => '1',
        'alias' => array('plaid'),
        'name' => array(
            'full' => 'Plaid Cymru',
            'cur' => 'Plaid Cymru',
            'shrt' => 'PC'
        ),
        'icon' => array(
            'dt' => array(
                'hold' => '-180px -240px',
                'gain' => '-210px -240px'
            ),
            'mob' => array(
                'hold' => '-240px -150px',
                'gain' => '-270px -150px'
            )
        ),
        'colors' => array(
            'main' => '#3F8428',
            'main-dark' => '#285E1F',
            'main-text' => '#ffffff',
            'text-light' => '#3F8428',
            'text-dark' => '#3F8428'
        )
    ),
    'snp' => array(
        'main' => '1',
        'name' => array(
            'full' => 'Scottish National Party',
            'cur' => 'SNP',
            'shrt' => 'SNP'
        ),
        'colors' => array(
            'main' => '#F3ED49',
            'main-dark' => '#B3AD09',
            'main-text' => '#000000',
            'text-light' => '#F3ED49',
            'text-dark' => '#000000'
        )
    ),
    'sdlp' => array(
        'main' => '1',
        'name' => array(
            'full' => 'SDLP',
            'cur' => 'SDLP',
            'shrt' => 'SDLP'
        ),
        'colors' => array(
            'main' => '#669966',
            'main-dark' => '#265926',
            'main-text' => '#ffffff',
            'text-light' => '#669966',
            'text-dark' => '#669966'
        )
    ),
    'sf' => array(
        'main' => '1',
        'name' => array(
            'full' => 'Sinn Féin',
            'cur' => 'Sinn Féin',
            'shrt' => 'SF'
        ),
        'colors' => array(
            'main' => '#006837',
            'main-dark' => '#001800',
            'main-text' => '#ffffff',
            'text-light' => '#006837',
            'text-dark' => '#006837'
        )
    ),
    'ukip' => array(
        'main' => '1',
        'name' => array(
            'full' => 'UKIP',
            'cur' => 'UKIP',
            'shrt' => 'UKIP'
        ),
        'icon' => array(
            'dt' => array(
                'hold' => '0px -180px',
                'gain' => '-30px -180px'
            ),
            'mob' => array(
                'hold' => '-60px -270px',
                'gain' => '-90px -270px'
            )
        ),
        'colors' => array(
            'main' => '#772889',
            'main-dark' => '#451e52',
            'main-text' => '#f2e930',
            'text-light' => '#f2e930',
            'text-dark' => '#772889'
        )
    ),
    'uup' => array(
        'main' => '1',
        'name' => array(
            'full' => 'UUP',
            'cur' => 'UUP',
            'shrt' => 'UUP'
        ),
        'colors' => array(
            'main' => '#0066CC',
            'main-dark' => '#00268C',
            'main-text' => '#ffffff',
            'text-light' => '#ffffff',
            'text-dark' => '#0066CC'
        )
    ),
    'bp' => array(
        'main' => '1',
        'name' => array(
            'full' => 'Brexit Party',
            'cur' => 'Brexit Party',
            'shrt' => 'BP'
        ),
        'colors' => array(
            'main' => '#5CBDD3',
            'main-dark' => '#0C6D7F',
            'main-text' => '#ffffff',
            'text-light' => '#ffffff',
            'text-dark' => '#000000'
        )
    ),
    'tusc' => array(
        'main' => '0',
        'name' => array(
            'full' => 'Trade Unionist and Socialist Coalition',
            'cur' => 'TUSC',
            'shrt' => 'TUSC'
        ),
        'icon' => array(
            'dt' => array(
                'hold' => '-180px -210px',
                'gain' => '-210px -210px'
            ),
            'mob' => array(
                'hold' => '-240px -120px',
                'gain' => '-270px -120px'
            )
        ),
        'colors' => array(
            'main' => '#ec008c',
            'main-dark' => '#AA0063',
            'main-text' => '#000000',
            'text-light' => '#ffffff',
            'text-dark' => '#000000'
        )
    ),
    'alliance' => array(
        'main' => '1',
        'name' => array(
            'full' => 'Alliance Party',
            'cur' => 'Alliance',
            'shrt' => 'Alliance'
        ),
        'colors' => array(
            'main' => '#F4C72E',
            'main-dark' => 'DFB71E',
            'main-text' => '#ffffff',
            'text-light' => '#F4C72E',
            'text-dark' => '#F4C72E'
        )
    ),
    'abolish' => array(
        'main' => '1',
        'name' => array(
            'full' => 'Abolish The Welsh Assembly',
            'cur' => 'Abolish',
            'shrt' => 'Abolish'
        ),
        'colors' => array(
            'main' => '#4b0406',
            'main-dark' => '#3b0000',
            'main-text' => '#ffffff',
            'text-light' => '#4b0406',
            'text-dark' => '#4b0406'
        )
    ),
);

$crossConfigOptions['partyConfig'] = array(
    'mainParties' => array()
);
$crossConfigOptions['partyColors'] = array();
foreach ($crossConfigOptions['parties'] as $partyKey => $partyValue) {
    if ($partyValue['main'] == 1) {
        $crossConfigOptions['partyConfig']['mainPartyKeys'][] = $partyKey;
        $crossConfigOptions['partyConfig']['mainParties'][$partyKey] = array(
            'nameClass' => $partyKey,
            'txt' => $partyValue['name']['cur'],
            'full' => $partyValue['name']['full'],
            'n' => $partyValue['name']['cur'],
            's' => $partyValue['name']['shrt']
        );
        if (isset($partyValue['alias'])) {
            foreach ($partyValue['alias'] as $partyAlias) {
                $crossConfigOptions['partyConfig']['mainParties'][$partyAlias] = $crossConfigOptions['partyConfig']['mainParties'][$partyKey];
            }
        }
    }
    $crossConfigOptions['partyColors'][$partyKey] = array(
        'main' => $partyValue['colors']['main'],
        'main_txt' => $partyValue['colors']['main'],
        'contrast' => $partyValue['colors']['main-text']
    );
    if (isset($partyValue['alias'])) {
        foreach ($partyValue['alias'] as $partyAlias) {
            $crossConfigOptions['partyColors'][$partyAlias] = $crossConfigOptions['partyColors'][$partyKey];
        }
    }
}
