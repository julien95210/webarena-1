<?php 
//Controller Arenas
//Actions index, fighter, diary, sight

App::uses('AppController', 'Controller');


class ArenasController extends AppController
	{
		//Accès à d'autres models que Arenas (Player, Fighter, Event)
		public $uses = array('Player', 'Fighter', 'Event');

		//Page d'accueil de WebArena
	    public function index()
	    {
	        die('page index');
	    }

	    //Affichage des informations du fighter
	    public function fighter()
	    {
	    	//Stocker dans la variable infos, tous les champs du Model Fighter
	        $this->set('infos', $this->Fighter->find('all'));
	    }

	    //Affichage les derniers events du player
	    public function diary()
	    {
	        die('page diary');
	    }

	    //Affichage des actions possibles du fighter (doMove, doAttack)
	    public function sight()
	    {
	        die('page sight');
	    }
	}
?>