<?php 
//Controller Arenas

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
	        die('page fighter');
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