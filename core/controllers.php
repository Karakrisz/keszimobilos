<?php

function homeController()
{

    $shops = [
        "fot" => [
            "phone" => "+36706315068",
            "name" => "Full GSM Fót",
            "cim" => "2151 Fót, Fehérkő utca 1."
        ],
        "dunakeszi" => [
            "phone" => "+36706314672",
            "name" => "Full GSM Dunakeszi",
            "cim" => "2120 Dunakeszi, Nádas utca 6."
        ],
        "igbdunakeszi" => [
            "phone" => " +36708842082",
            "name" => "IGB Dunakeszi",
            "cim" => "2120 Dunakeszi, Nádas utca 6."
        ],
    ];

    if (array_key_exists("shop", $_SESSION)) {
        $shop = $shops[$_SESSION["shop"]];
    } else {
        return [
            "redirect:/shop", []
        ];
    }

    return [
        "home",
        [
            "title" => $shop["name"],
            "shop" => $shop
        ]
    ];
}

function shopController()
{


    if (array_key_exists("shop", $_SESSION)) {
        return [
            "redirect:/", []
        ];
    }


    return [
        "shop",
        [
            "title" => "Válassz Üzleteink közül"
        ]
    ];
}

function shopParamsController($params)
{
    $_SESSION["shop"] = $params["shop"];
    return [
        "redirect:/",
        []
    ];
}

function shopSessionController()
{
    $shop_session  = $_POST['event'];
    $_SESSION["shop"] = $shop_session;
    return [
        "redirect:/shop/$shop_session/",
        []
    ];
}


function notFoundController()
{
    return [
        "404", [
            "title" => "A keresett oldal nem található."
        ]
    ];
}


// unset($_SESSION["shop"]);
