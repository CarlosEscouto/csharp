<?php 
class controleDash{
	private $listaCol1 = array();
	private $listaCol2 = array();
	private $listaCol3 = array();
	private $listaCol4 = array();

	function filtraColunas($array){
		foreach ($array as $key => $card) {
			switch ($card['posX']) {
				case 1:
					$this->listaCol1[] = $card;
					break;
				case 2:
					$this->listaCol2[] = $card;
					break;
				case 3:
					$this->listaCol3[] = $card;
					break;
				case 4:
					$this->listaCol4[] = $card;
					break;
			}
		}
	}

	function leitorCards($coluna){
		switch ($coluna) {
			case 1:
				$listaDeCards = $this->listaCol1;
				break;
			case 2:
				$listaDeCards = $this->listaCol2;
				break;
			case 3:
				$listaDeCards = $this->listaCol3;
				break;
			case 4:
				$listaDeCards = $this->listaCol4;
				break;
		}
		foreach ($listaDeCards as $key => $card) {
			include 'card_'.$card['id'].'.php';
		}
	}
}
