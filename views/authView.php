<?php

class AuthView{
	
	// if page exist then show it
	public function show($template, $data=array()) {
		$template = "views/${template}.inc";
		if (file_exists($templatePath)){
			include $templatePath;
		}	
		
	}
	
	
}
	
	