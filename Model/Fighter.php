<?php

App::uses('AppModel', 'Model');


	class Fighter extends AppModel 
	{

		public function doMove($fighterId, $direction)
		{
			//récupérer la position et fixer l'id de travail
			$datas = $this->read(null, $fighterId);

			switch ($direction)
			{
				case 'north':
					$this->set('coordinate_y', $datas['Fighter']['coordinate_y'] + 1);
				break;

				case 'south':
					$this->set('coordinate_y', $datas['Fighter']['coordinate_y'] - 1);
				break;

				case 'east':
					$this->set('coordinate_x', $datas['Fighter']['coordinate_x'] + 1);
				break;

				case 'west':
					$this->set('coordinate_x', $datas['Fighter']['coordinate_x'] - 1);
				break;

				default:
					echo "Direction inconnue";
			}

                //@todo: ajouter délimitation du terrain
                //@todo: ajouter message case occupée

                //sauver la modif
                $this->save();
                return true;
        }



	}

?>