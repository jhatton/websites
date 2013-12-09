<?php

	class pageView{

	public function showHeader($pageTitle=''){
		include "header.inc";
	}
	public function showFooter() {
		include "footer.inc";
	}	 
	
	public function showDB($rows){
		include "get.inc";	
	}

}

?>
