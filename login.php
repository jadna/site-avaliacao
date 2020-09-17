<?php

    $db = new SQLite3('avaliacao.db');

    $login = $_POST['login'];
    $entrar = $_POST['entrar'];
    $senha = md5($_POST['senha']);
    $connect = mysqli_connect('localhost','root','', 'avaliacao');
    //$db = mysqli_select_db($connect, 'avaliacao');

    

    if (isset($entrar)) {

        #$verifica = mysqli_query($connect, "SELECT * FROM usuarios WHERE login ='$login' AND senha = '$senha'") or die("erro ao selecionar");
        #$verifica = $db->prepare("SELECT * FROM usuarios WHERE login ='$login' AND senha = '$senha'") or die("erro ao selecionar");

        $statement = $db->prepare('SELECT * FROM usuarios WHERE login = ? AND senha = ?') or die("erro ao selecionar");
        $statement->bindValue(1, $login);
        $statement->bindValue(2, $senha);
        $result = $statement->execute();

        $res = $result->fetchArray(SQLITE3_ASSOC);

        if ($res == false){
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='login.html';</script>";

        }else{
            setcookie("login",$login);
            header("Location:index.html");
        }
    }

?>