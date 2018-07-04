<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FaturaSimples;
use FaturaSimples_Venda;

class ApiController extends Controller
{
    public function index(){

    	FaturaSimples::configure("https://ailson.faturasimples.com.br", "bE03cppte2yyy3nGYIxhGAJaDww");
		$dados = array(
		    "data" => "2014-09-10",
		    "cliente" => "ERAMO SOFTWARE",
		    "cliente_cnpj" => "17737572000150",
		    "servico" => "Desenvolvimento de Sistema",
		    "discriminacao" => "Desenvolvimento do sistema Fatura Simples%0ADurante o Período de 01/09/2014 a 30/09/2015",
		    "valor_venda" => 1313.22,
		    "emissao_nfse" => FaturaSimples_Venda::EMISSAO_NFSE_EMITIR_AGORA,
		    "meio_pagamento" => "Depósito",
		    "nfse_municipio_emissao" => 2611606,
		    "nfse_item_servico" => 103,
		    "nfse_codigo_tributacao_municipio" => 6311900,
		    "nfse_inscricao_municipal" => 123456,
		    "nfse_optante_simples_nacional" => FaturaSimples_Venda::SIM,
		    "nfse_incentivador_cultural" => FaturaSimples_Venda::NAO
		);

		$venda = FaturaSimples_Venda::listar();
		$data = (object) json_decode($venda);
		// var_dump($data);

    	return view('index', ['list' => json_decode($venda)]);
    }
}
