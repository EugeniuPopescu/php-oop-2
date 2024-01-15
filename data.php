<?php

require_once __DIR__ . "/models/Bowl.php";
require_once __DIR__ . "/models/Carriers.php.php";
require_once __DIR__ . "/models/Food.php";
require_once __DIR__ . "/models/Game.php";

$products = [
    new Bowl(
        "Ciotola",
        "9.90 €",
        "https://www.animaliapet.it/immagini/ecommerce/Aggiungi-corpo-del-testo---2023-04-14T120411353.jpg",
        "Versione pesante, con anello in plastica antiscivolo.",
        new Category("Roditori"),
        "Trixie Ciotola In Acciaio Inox Anti-scivolo"
    ),
    new Carriers(
        "Box",
        "49.90 €",
        "https://www.animaliapet.it/immagini/ecommerce/8010690150147.jpg",
        "Molto pratica, la toilette per gatti in resina termoplastica Prima è dotata di tutto il necessario per assicurare al vostro gatto grande privacy e tranquillità durante i bisogni quotidiani.",
        new Category("Gatti"),
        "Box/Toilette per gatti"
    ),
    new Food(
        "Mangime",
        "4.90 €",
        "https://www.animaliapet.it/immagini/ecommerce/Aggiungi-corpo-del-testo---2023-05-02T170817836.jpg",
        "Mangime composto per esotici.",
        new Category("Uccelli"),
        "Composizione: miglio paglierino, miglio bianco"
    ),
    new Game(
        "Palla con corda",
        "11.90 €",
        "https://www.animaliapet.it/immagini/ecommerce/4011905347257.jpg",
        "Il giocattolo Trixie CityStyle è il regalo perfetto per il tuo amico peloso. Divertente, resistente ed ecologico, garantisce ore di divertimento mentre ti prendi cura della salute del pianeta. Non esitare e unisciti all'iniziativa eco-friendly di Trixie. Il tuo cane ti ringrazierà ed anche il pianeta!",
        new Category("Cani"),
        "Palla di tessuto con corda"
    )
];
