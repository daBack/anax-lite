<?php

$navbar = [
    "home" => [
        "text" => "Home",
        "route" => $urlHome = $app->url->create("home")
    ],
    "about" => [
        "text" => "About",
        "route" => $urlAbout = $app->url->create("about")
    ],
    "reports" => [
        "text" => "Reports",
        "route" => $urlReport = $app->url->create("report")
    ]
];

foreach ($navbar as $value) {
    echo "<a href='" . $value['route'] . "'>" . $value['text'] . "</a>";
}
