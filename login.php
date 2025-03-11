<?php
    $bdd = new PDO("mysql:host=localhost;dbname=secu", "root", "");
    $req = $bdd->prepare("SELECT * FROM user WHERE email=?");
    $req->execute(array($_POST['email']));
    $user = $req->fetch();
    if($user === false){
        echo "{\"error\": \"login or password invalid\"}";
    }else{
        if($user['password'] == $_POST["password"]){
            echo json_encode($user);
        }else{
            echo "{\"error\": \"login or password invalid\"}";
        }
    }