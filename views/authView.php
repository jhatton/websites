<?php

class AuthView{
	
	public function show($template, $data=array()) {
		$template = "view/${template}.inc";
		if (file_exists($templatePath)){
			include $template;
		}	
		
	}
	
	
}
	
	