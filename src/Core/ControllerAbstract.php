<?php

namespace Chiara\Core;

abstract class ControllerAbstract{
	
	public function __construct(){
		
		$methods = get_class_methods($this);
		
		$this->init();
		
	}
	
	public function init(){}
	
	public function forward($act, $ctrl=null){
		Router::forward($act, $ctrl==null ? get_class($this) : $ctrl);
	}
	
	public function redirect($act, $ctrl=null){
		Router::redirect($act, $ctrl==null ? get_class($this) : $ctrl);
	}
	
	public function getParamPost($name, $default){
		if(isset($_POST[$name])) return $_POST[$name];
		return $default;
	}
	
	public function getParamGet($name, $default){
		if(isset($_GET[$name])) return $_GET[$name];
		return $default;
	}
	
	public function getParam($name, $default=null){
		return Http::getParam($name, $default);
	}
	
	public function getFile($name){
		if(isset($_FILES[$name])) return $_FILES[$name];
		return false;
	}
	
	public function setParam($name, $value){
		$_POST[$name] = $value;
	}
	
	public function setParamPost($name, $value){
		$_POST[$name] = $value;
	}
	
	public function setParamGet($name, $value){
		$_GET[$name] = $value;
	}
	
}
