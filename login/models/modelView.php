<?php

class modelView {

	public function __constract() {
	}
	
	public function getPages($pageTitle='', $data=array()){
		include $pageTitle;
	}
}