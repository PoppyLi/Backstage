<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function p($data = NULL){
	if(empty($data)){
		return false;
	}
	
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}