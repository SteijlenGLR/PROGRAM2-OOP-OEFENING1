<?php

$data = array(
    "naam" => "Jan Janssen",
    " leeftijd" => 35,
    "hobbies" => ["voetbal", "lezen", "films", ["Snelschaken", "Creatief Schaken"]],
    "adres" => [
        "straat" => "Hoofdstraat",
        "huisnummer" => 17,
        "plaats" => "Amsterdam"]
);


include_once ('views/index_view.php');