<?php

$pag='inicio';
if( !empty($_GET["pg"]) && isset($_GET["pg"])){
    $pag=$_GET["pg"];
}

switch($pag){
    case 'inicio':
        include('modals/modalInicio.php');
    break;
    
    case 'singUp':
        include('modals/secundaryModal.php');
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

    case 'MenuReclutador':
        include("vista/MenuReclutador.php");
    break;
        
    case 'reclutador':
        include("vista/Reclutador.php");
    break;

    case 'crearVacante':
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