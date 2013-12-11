<?php

class AuthView{
	
	public function show($template, $data=array()) {
		$template = "views/${template}.inc";
		if (file_exists($templatePath)){
			include $templatePath;
		}	
		
	}
	
	
}
	
	