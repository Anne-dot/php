<?php

/*
Kirjuta programm, mis teisendab kasutaja poolt kroonides sisestatud summa eurodesse 
ja väljastab ümardatud tulemuse.
*/

$userAmount = $_GET['amount'];

$amountInEuros = $userAmount/15.6466;

echo($amountInEuros);
?>
