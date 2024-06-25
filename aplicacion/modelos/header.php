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
            
            $filePath = APP . 'modelos/menu.json';

            if (file_exists($filePath)) {
                $jsonContent = file_get_contents($filePath);
                $datos = json_decode($jsonContent, true);

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
