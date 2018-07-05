<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FaturaSimples;
use FaturaSimples_Venda;

class ApiController extends Controller
{
    public function index(){

    	FaturaSimples::configure("https://exemplo.faturasimples.com.br", "akYWFw2SaFMfTSvvJ4gYAziN/KY");
		$dados = array(
		    "data" => "2018-07-05",
		    "cliente" => "ERAMO SOFTWARE",
		    "cliente_cnpj" => "17737572000150",
		    "servico" => "Desenvolvimento de Sistema",
		    "discriminacao" => "Desenvolvimento do sistema Fatura Simples",
		    "valor_venda" => 100,
		    "emissao_nfse" => FaturaSimples_Venda::EMISSAO_NFSE_EMITIR_AGORA,
		    "meio_pagamento" => "Boleto Itaú",
		    "nfse_municipio_emissao" => 2611606,
		    "nfse_item_servico" => 103,
		    "nfse_codigo_tributacao_municipio" => 6311900,
		    "nfse_inscricao_municipal" => 123456,
		    "nfse_optante_simples_nacional" => FaturaSimples_Venda::SIM,
		    "nfse_incentivador_cultural" => FaturaSimples_Venda::NAO
		);

		$new = FaturaSimples_Venda::criar($dados);
		$venda = FaturaSimples_Venda::listar();
		$data = (object) json_decode($venda);
		var_dump(json_decode($new));

    	return view('index', ['list' => json_decode($venda)]);
    }
}
