<?php
date_default_timezone_set( 'America/São_Paulo');

$dataAgora = date(DATE_RFC822);
$nomeUsuario = "Bryan Verneck";

echo "Nome Estudande: {$nomeUsuario} <br>";
echo "Data e hora carregamento: {$dataAgora} <br>";

