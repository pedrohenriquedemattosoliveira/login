<?php
include 'Contato.class.php';

$conecta = $contato = new Contato();

if(!$conecta){
    echo "Erro ao conectar ao banco de dados";


}

    else{
    echo"<h1>Conectado ao banco de dados</h1>";
    }
?>