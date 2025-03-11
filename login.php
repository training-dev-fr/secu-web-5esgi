<?php
    $bdd = new PDO("mysql:host=localhost;dbname=secu", "root", "");
    $req = $bdd->query("SELECT * FROM user WHERE email='" . $_POST['email'] . "'");
    var_dump($req->fetchAll());