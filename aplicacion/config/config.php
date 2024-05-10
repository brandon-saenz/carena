<?php 
// Ejemplo: http://localhost/
$lista = array('localhost', '127.0.0.1');
if(in_array($_SERVER['HTTP_HOST'], $lista)) {
	$config['base_url']						= 'http://localhost/devvalcas/carena';
	$config['openpay_production_mode']		= false;
	$config['openpay_sandbox_mode_js']		= 'true';
	$config['openpay_merchant_id']			= 'mkbx4mcmpt7ptigpxp19';
	$config['openpay_private_key']			= 'sk_9a0e14de64b54c7cb90da2511c98f2f8';
	$config['openpay_public_key']			= 'pk_5261a77f8bfa4f439e86f960a094ce6c';
	$config['openpay_url']					= 'https://sandbox-dashboard.openpay.mx';
	$config['openpay_api_url']				= 'https://sandbox-api.openpay.mx';
	$config['openpay_bearer_token']			= 'c2tfOWEwZTE0ZGU2NGI1NGM3Y2I5MGRhMjUxMWM5OGYyZjg6';
	setlocale(LC_MONETARY, '');
} else {
	$config['base_url']						= 'https://saevalcas.mx/carena';
	$config['openpay_production_mode']		= true;
	$config['openpay_sandbox_mode_js']		= 'false';
	$config['openpay_merchant_id']			= 'm7aci0xq2pyewsqdhy9r';
	$config['openpay_private_key']			= 'sk_3b3ded4ccf584eab9b4dd9536b4db4f3';
	$config['openpay_public_key']			= 'pk_82384048ef5f4be6acd702903e7c38df';
	$config['openpay_url']					= 'https://dashboard.openpay.mx';
	$config['openpay_api_url']				= 'https://api.openpay.mx';
	$config['openpay_bearer_token']			= 'c2tfM2IzZGVkNGNjZjU4NGVhYjliNGRkOTUzNmI0ZGI0ZjM6';
	setlocale(LC_MONETARY, 'en_US');
}

// $config['controlador_default']	= 'login';
$config['controlador_default']	= 'main';
$config['controlador_error']	= 'error';