<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phylum = $_POST["phylum"];
    $gender = $_POST["gender"];
    echo "$name";
    echo "$phylum";
    echo "$gender";
    exit;
}
?>
