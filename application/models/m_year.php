<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_Year entities
 */
use application\models\Entities\E_Year;

class M_Year extends MY_Model {
	var $facility;

	function __construct() {
		parent::__construct();
	}

	public function getAllYears() {
		try{
		$year = $this -> em -> getRepository('models\Entities\e_year')->findAll();
		//$query->setParameter('fname','%'.$options['keyword'].'%');

		$results = $year;

		// die(var_dump($this->formRecords));
		var_dump($results) ;
			
		}catch(Exception $ex){
			//do nothing
			die($ex->getMessage());
		}
		
	}

	public function setMFLCode() {

	}

}//end of class M_Autocomplete
