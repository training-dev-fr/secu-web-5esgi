<?php
    $bdd = new PDO("mysql:host=localhost;dbname=secu", "root", "");
    $req = $bdd->prepare("SELECT * FROM user WHERE email=?");
    $req->execute(array($_POST['email']));
    $user = $req->fetch();
    if($user['password'] == $_POST["password"]){
        echo json_encode($req->fetchAll());
    }else{
        echo "{error: \"login or password invalid_\"}";
    }