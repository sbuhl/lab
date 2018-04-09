<?php

function dd($data){
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}

function authorized($age){
	if($age > 18) {
		echo 'Vous pouvez entrer';
	}else{
		echo 'Vous êtes trop jeunes, revenez plus tard';
	}

}