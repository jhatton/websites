<?php

	class pageView{

	public function showHeader($pageTitle=''){
		include "views/header.inc";
	}
	public function showFooter() {
		include "views/footer.inc";
	}	 
	
	public function showDB($rows){
		include "views/get.inc";	
	}

}

?>
