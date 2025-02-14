<?php

$json_text = file_get_contents("./discs.json");
$discs = json_decode($json_text, true);

if (isset($_POST['titolo'], $_POST['autore'], $_POST['anno'], $_POST['url'])) {
    $newDisc = [
        "titolo" => $_POST['titolo'],
        "autore" => $_POST['autore'],
        "anno" => $_POST['anno'],
        "url" => $_POST['url']
    ];
    $discs[] = $newDisc;

    $json_text_updated = json_encode($discs, JSON_PRETTY_PRINT);

    if (file_put_contents("./discs.json", $json_text_updated) === false) {
        die("errore scrittura json");
    } else {
        echo "album aggiunto con successo";
        header("Location: ./index.php");
    }
}
