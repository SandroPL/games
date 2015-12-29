<?php
App::uses('AppController', 'Controller');
/**
 * Records Controller
 *
 * @property Record $Record
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class RecordsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');
	
	public $uses = array('UserAbility','Record',"Dificult");

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function game(){
		$options = array(
			"conditions"=>array(
				"user_id"=>$this->Auth->user("id")
			),
			"fields"=>array("ability_id"),
			"contain"=>array(
				"Ability"=>array(
					"fields"=>"nombre"
				)
			)
		);
		$ab = $this->UserAbility->find("all",$options);
		//pr($ab);
		//die();
		$this->set("ab",$ab);
	}

	public function ranking(){
		$options = array(
			"order"=>"puntaje DESC",
			"limit"=>7,
			"fields"=>array("ability1","ability2","ability3","puntaje"),
			"contain"=>array(
				"UserTrophy"=>array(
					"Trophy"=>array(
						"fields"=>"nombre"
					)
				),
				"User"=>array(
					"fields"=>array("username")
				),
				"Dificult"=>array(
					"fields"=>"nombre"
				)
			)
		);
		$record = $this->Record->find("all",$options);
		$ab1 = $this->Record->query("SELECT nombre FROM abilities WHERE id = '{$record[0]['Record']['ability1']}'");
		$ab2 = $this->Record->query("SELECT nombre FROM abilities WHERE id = '{$record[0]['Record']['ability2']}'");
		$ab3 = $this->Record->query("SELECT nombre FROM abilities WHERE id = '{$record[0]['Record']['ability3']}'");
		//pr($record);
		//die();
		$this->set("record",$record);
		$this->set("ab1",$ab1);
		$this->set("ab2",$ab2);
		$this->set("ab3",$ab3);
	}

	public function register(){
		$this->autoRender = false;
		if ($this->request->is('ajax')) {
			//pr($this->request->data);
			//die();
			$this->Record->create();
			if($this->Record->save($this->request->data)){
				echo "habilidades guradadas";
			}
		}
	}

	public function dif(){
		if ($this->request->is('ajax')) {
			$lasarus = $this->Record->query("SELECT id FROM records WHERE user_id ='{$this->request->data["Record"]["user_id"]}' order by id DESC limit 1");
			//pr($lasarus);
			//die();
			$this->Record->id = $lasarus[0]["records"]["id"];
			if($this->Record->save($this->request->data))
				echo "dificultad guardada";

			$dificult = $this->Record->query("SELECT * FROM dificults WHERE id = '{$this->request->data["Record"]["dificult_id"]}'");
			//pr($dificult);
			//die();
			$this->render("game");
			$this->set("abc",$dificult);
		}
	}

}