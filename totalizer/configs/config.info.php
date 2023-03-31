<?php

$widgetInfo = array(
    'widget' => array(
        array(
            'name' => 'Description',
            'data' => array(
                'Council totalizer'
            )
        ),
        'widget' => array(
            'name' => 'Widget',
            'data' => array()
        )
    ),
    'Widget Live' => array(
        'Widget Live' => array(
            'name' => 'Links',
            'data' => array(
                array(
                    'title' => 'Preview',
                    'url' => 'https://reachdata.live/preview/list.php',
                ),
                array(
                    'title' => 'Preview2',
                    'url' => 'https://docs.google.com/spreadsheets/d/1GZqsCgXYL7G2wOlJnq9t5fpvBwst9G61Niu9o4VZ8j0/edit#gid=0',
                ),
            )
        )
    ),
    'History' => array(
        /* * /
        array(
            'name' => 'Updated',
            'data' => array(
                array(
                    'title' => 'CN - something else was done',
                    'date' => '2022/06/14',
                ),
                array(
                    'title' => 'CN - something was done',
                    'date' => '2022/06/09',
                    )
                    /** * /
            ),
        ),
        /* */
        array(
            'name' => 'Updated',
            'data' => array(
                array(
                    'title' => 'CN - Updated form older version',
                    'date' => '2023/03/28',
                )
            ),
        ),

    ),
    'other' => array(
        array(
            'name' => 'Coder',
            'data' => array(
                'Carlos Nóvoa',
            ),
        ),
        array(
            'name' => 'Journalist',
            'data' => array(
                'Journalist a',
                'Journalist b',
            ),
        ),
        array(
            'name' => 'Designer',
            'data' => array(
                'Designer',
            ),
        ),
        array(
            'name' => 'Resources',
            'data' => array(
                array(
                    'title' => 'Google Folder with images',
                    'url' => 'https://drive.google.com/drive/folders/1hUIJttqC8RaHlQVnJBD96toufD1wLGa8',
                ),
            ),
        ),
        array(
            'name' => 'Data Source',
            'data' => array(
                array(
                    'title' => 'Google sheet',
                    'url' => 'https://docs.google.com/spreadsheets/d/1GZqsCgXYL7G2wOlJnq9t5fpvBwst9G61Niu9o4VZ8j0/edit#gid=0',
                ),
                'Other source',
                'sdfsdfsdf',
            ),
        ),
        array(
            'name' => 'Obs',
            'data' => array(
                'Helpful info',
            ),
        ),
    ),
    /** * /
    'extra' => array(
        array(
            'name' => 'How to update',
            'data' => array(
                "Clone the <b>dataunit-fans_footballer_of_the_year</b> repository",
                "Go to file <b>`./configs/config.versions.php`</b> and add a new version:",
                array(
                    "code" =>
                    '$versions["<current year>"] = array(' . "\n"
                        . '    "id" => "<current year>",' . "\n"
                        . '    "name" => "Fans\' Footballer of the Year",' . "\n"
                        . '    "closingDate" => "<date the poll closes>"' . "\n"
                        . ');',
                ),
                'Create a new file called <b>`./data/du_fans_footballer_<current_year>_data.json`</b> and insert the data from:',
                array(
                    'title' => 'Google Sheets',
                    'url' => 'https://docs.google.com/spreadsheets/d/1df5C9DbIC9h-0wSGZclFeTJIRZPPirkGHQFb45p62lA/edit#gid=664204016',
                ),
                'Aquire player images and put them into the designate <b>`./img/player/<current year>/`</b> folder.',
                'Once you have done these steps. Generate a new <b>.html, .js, and .css</b> file using the new version, and upload the <b>generated files, .json, and images</b> to the S3 bucket.'
            ),
        ),
    ),
    /** */
);
