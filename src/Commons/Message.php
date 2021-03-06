<?php

namespace Chiara\Commons;

class Message{

	private $type;
	private $text;
	private $level;
	private $description;
	private $buttons;
	private $field;
	private $timestamp;
	
	const EMERG   = 0;  // Emergency: system is unusable
	const ALERT   = 1;  // Alert: action must be taken immediately
	const CRIT    = 2;  // Critical: critical conditions
	const ERR     = 3;  // Error: error conditions
	const WARN    = 4;  // Warning: warning conditions
	const NOTICE  = 5;  // Notice: normal but significant condition
	const INFO    = 6;  // Informational: informational messages
	const DEBUG   = 7;  // Debug: debug messages
	const SUCCESS = 8;  // Debug: debug messages
	
	const TYPE_FAST		= 'fast';
	const TYPE_FIELD	= 'field';
	const TYPE_OVERLAY	= 'overlay';
	
    public function __construct($text, $level, $type, $description, $buttons, $field){
    	$this->type  		= $type;
        $this->text  		= $text;
        $this->level	 	= $level;
        $this->description 	= $description;
        $this->buttons 		= $buttons;
        $this->field		= $field;
        $this->timestamp 	= time();
    }

 	public function create($text, $level=UserMessage::INFO, $type=self::TYPE_FAST, $description='', $buttons=array(), $field=null){
    	return new Message($text, $level, $type, $description, $buttons, $field);
    }
    
    
    public function getText(){
    	return $this->text;
    }
    
    public function setText($value){
    	$this->text = $value;
    }
    
    public function getTimestamp(){
    	return $this->timestamp;
    }
    
    public function getLevel(){
    	return $this->level;
    }
    
    public function setLevel($value){
    	$this->level = $value;
    }
    
    public function getDescription(){
    	return $this->description;
    }
    
    public function setDescription($value){
    	$this->description = $value;
    }
    
    public function getButtons(){
    	return $this->buttons;
    }
    
    public function setButtons($value){
    	$this->buttons = $value;
    }
    
    public function getType(){
    	return $this->type;
    }
    
    public function setType($value){
    	$this->type = $value;
    }
    
    public function getField(){
    	return $this->field;
    }
    
    public function setField($value){
    	$this->field = $value;
    }
    
    
}

