<?php

$pag='inicio';
if( !empty($_GET["pg"]) && isset($_GET["pg"])){
    $pag=$_GET["pg"];
}

switch($pag){
    case 'inicio':
        include('vista/inicio.php');
    break;
    
    case 'singUp':
        include('vista/register.php');
    break;

    case 'login':
        include('vista/login.php');
    break;

    case 'loginReclu':
        include('vista/loginReclu.php');
    break;

    case 'aspirante':
        include("vista/aspirante.php");
    break;

    case 'contacto':
        include("vista/contacto.php");
    break;

    case 'competencias':
        include("vista/competencias.php");
    break;

    case 'experiencias':
        include("vista/experiencias.php");
    break;

    case 'estudios':
        include("vista/estudios.php");
    break;

    case 'MenuReclutador':
        include("vista/MenuReclutador.php");
    break;
        
    case 'reclutador':
        include("vista/Reclutador.php");
    break;

    case 'vacante':
        include("vista/Vacante.php");
    break;

    case 'Redes':
        include("vista/RedesSocialesEmpresa.php");
    break;

    case 'perfilVacante':
        include("vista/PerfilVacante.php");
    break;
}


?>