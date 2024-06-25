<?php
final class Modelos_Header extends Modelo
{
	protected $_db = null;

	public function iniciarDb($db) {
    	if (!$this->_db) {
			$this->_db = $db;
        }
    }
    public function getMenu(){
        $response = array();
		try {
            $datos = array();

            $lista = array('localhost', '127.0.0.1');
			if(in_array($_SERVER['HTTP_HOST'], $lista)) {
                $stasis = 'http://localhost/carena';
			} else {
                $stasis = 'https://saevalcas.mx/carena';
			}

            $filePath = APP . 'modelos/menu.json';

            if (file_exists($filePath)) {
                $jsonContent = file_get_contents($filePath);
                $datos = json_decode($jsonContent, true);

                // NIVEL 1
                for ($i=0; $i < count($datos); $i++) { 
                    if($datos[$i]['ref']){
                        $datos[$i]['ref'] = str_replace('STASIS', $stasis, $datos[$i]['ref']);
                    }

                    if(isset($datos[$i]['menu'])){

                        // NIVEL 2
                        for ($j=0; $j < count($datos[$i]['menu']); $j++) { 
                            if($datos[$i]['menu'][$j]['ref']){
                                $datos[$i]['menu'][$j]['ref'] = str_replace('STASIS', $stasis, $datos[$i]['menu'][$j]['ref']);
                            }
        
                            if(isset($datos[$i]['menu'][$j]['menu'])){
                                // NIVEL 3
                                for ($k=0; $k < count($datos[$i]['menu'][$j]['menu']); $k++) { 
                                    if($datos[$i]['menu'][$j]['menu'][$k]['ref']){
                                        $datos[$i]['menu'][$j]['menu'][$k]['ref'] = str_replace('STASIS', $stasis, $datos[$i]['menu'][$j]['menu'][$k]['ref']);
                                    }
                
                                    if(isset($datos[$i]['menu'][$j]['menu'][$k]['menu'])){
                                        // NIVEL 4
                                        for ($l=0; $l < count($datos[$i]['menu'][$j]['menu'][$k]['menu']); $l++) { 
                                            if($datos[$i]['menu'][$j]['menu'][$k]['menu'][$l]['ref']){
                                                $datos[$i]['menu'][$j]['menu'][$k]['menu'][$l]['ref']= str_replace('STASIS', $stasis, $datos[$i]['menu'][$j]['menu'][$k]['menu'][$l]['ref']);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                
                if ($datos === null) {
                    $response = array('type' => 'error', 'msj' => 'ERROR JSON DECODE', 'datos' => $datos);
                }else{
                    $response = $datos;
                }
            }
            
        } catch (\Throwable $th) {
            $response = array('type' => 'error', 'msj' => 'ERROR - '.$$th, 'data' => $th);
        } catch (\Exception $e) {
            $response = array('type' => 'error', 'msj' => 'ERROR - '.$$e, 'data' => $e);
        }
        return $response;
    }
}
