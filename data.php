<?php

require_once __DIR__ . "/models/Bowl.php";
require_once __DIR__ . "/models/Carriers.php";
require_once __DIR__ . "/models/Food.php";
require_once __DIR__ . "/models/Game.php";

// categorie
$cats = new Category("Gatti");
$rodents = new Category("Roditori");
$birds = new Category("Uccelli");
$dogs = new Category("Cani");


$products = [
    new Bowl(
        "Ciotola",
        "9.90 €",
        "https://www.animaliapet.it/immagini/ecommerce/Aggiungi-corpo-del-testo---2023-04-14T120411353.jpg",
        "Versione pesante, con anello in plastica antiscivolo.",
        $rodents,
        "Trixie Ciotola In Acciaio Inox Anti-scivolo"
    ),
    new Carriers(
        "Box",
        "49.90 €",
        "https://www.animaliapet.it/immagini/ecommerce/8010690150147.jpg",
        "Molto pratica, la toilette per gatti in resina termoplastica Prima ",
        $cats,
        "Box/Toilette per gatti"
    ),
    new Food(
        "Mangime",
        "4.90 €",
        "https://www.animaliapet.it/immagini/ecommerce/Aggiungi-corpo-del-testo---2023-05-02T170817836.jpg",
        "Mangime composto per esotici.",
        $birds,
        "Composizione: miglio paglierino, miglio bianco"
    ),
    new Game(
        "Palla con corda",
        "11.90 €",
        "https://www.animaliapet.it/immagini/ecommerce/4011905347257.jpg",
        "Divertente, resistente ed ecologico, garantisce ore di divertimento mentre ti prendi cura della salute del pianeta.",
        $dogs,
        "Palla di tessuto con corda"
    )
];
