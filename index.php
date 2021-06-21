<?php
date_default_timezone_set( 'America/São_Paulo');

$dataAgora = date(DATE_RFC822);
$nomeUsuario = "Bryan Verneck";
$nomeAtividade = "Avalia&ccedil;&atilde;o SOCPS II";

echo "Atividade: {$nomeAtividade} <br>";
echo "Nome Estudande: {$nomeUsuario} <br>";
echo "Data e hora carregamento: {$dataAgora} <br>";

