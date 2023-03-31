<?php

$widgetOptions = array(
    "tableOptions" => array(
        "header" => array(
            "Party",
            "Councils",
            "Seats"
        )
    ),
    "sprite" => array(
        "icon" => array(
            "img" => "du" . $project["name"]["_bodyId"] . "_sprite",
            "img" => "du_er22_sprite",
            //"folder" => "du_er22_sprite",
            "alias" => array(
                /**
                 * * string adds after body 
                 * * div.du-body.du-body .du-text,
                 */
                ".du-arrow",
                /**
                 * * array adds [0] to body 
                 * * array adds [1] after body
                 * * div.du-body.du-body.du-theme-money .du-text
                 */
              // array(
              //     ".du-theme-money",
              //     ".du-text"
              // ),
            ),
        ),
        /** * /
         "icon-btn" => array(
             "img" => "du" . $project["name"]["_bodyId"] . "_sprite_btn",
             "alias" => false
            ),
            /** */
    ),
    //"sprite" => false,
    "colors" => array(
        "main" => "#a7120e",
        "up" => "#3D862C",
        "down" => "#C41230",
    ),
    "fonts" => array(
        "main" => array(
            "font-family" => '"Open Sans", sans-serif',
            "google-name" => "Open+Sans",
            "google-options-main" => "wght@",
            "google-options" => array(
                "400",
                "700",
                "800"
            )
        ),
        "sec" => array(
            "font-family" => '"Signika Negative", sans-serif',
            "google-name" => "Signika+Negative",
            "google-options-main" => "wght@",
            "google-options" => array(
                "400",
                "700"
            )
        )
    )
);
