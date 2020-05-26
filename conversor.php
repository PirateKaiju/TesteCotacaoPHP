<?php

    require_once "CotacaoHandler.php";

    /*class Conversor{

        
    }*/

    $cotacao = new CotacaoHandler();

    echo 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=' . "08-02-2019" .'&$top=100&$skip=0&$format=json&$select=cotacaoCompra';

    echo $cotacao->getDollarValue();




?>