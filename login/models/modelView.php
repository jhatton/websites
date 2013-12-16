<?php

class modelView {

	public function __construct() {
	}
	
	public function getPages($pageTitle='', $data=array()){
		include $pageTitle;
	}
}