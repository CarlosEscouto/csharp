<?php 

function init_body($page){
	switch ($page) {
		case 'home':
		return include "dash.php";
		break;
		default: include "dash.php";
		break;
	}
}