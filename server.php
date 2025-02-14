<?php

$json_text = file_get_contents("./discs.json");
$discs = json_decode($json_text, true);
