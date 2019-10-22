<?php
session_start();
require_once"configBD.php";

if(isset($_SESSION['nomeDoUsuario']))
{//logado

}else{//se não, redirecionar p index 
    header("location:index.php");
}