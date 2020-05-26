<?php

    class CotacaoHandler{


        public function getDollarValue(){
            //TODO: MAKE IT ACCEPT DIFFERENT DATES

            $query_url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='.'\'08-02-2019\''.'&$top=100&$skip=0&$format=json&$select=cotacaoCompra';

            //$query_url = 'https://www.google.com';
            $json_dados_dolar_compra = file_get_contents($query_url);

            return $json_dados_dolar_compra;




        }


    }


?>