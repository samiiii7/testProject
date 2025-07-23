<?php

class user_validater{
    private $data;
    private $error = [];
    private static $fields = ['username', 'email'];

    public function __construct($post_data){
        $this->data = $post_data;
    }
    public function validateForm(){
        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field field is required");
                return;
            }
        }
        $this->validateUsername();
        $this->validateEmail();
        return $this->error;
    }
    private function validateUsername(){
        $val = trim($this->data['username']);
        if(empty($val)){
            $this->addError('username', 'Username is required');
        } else {
            if(!preg_match('/^[a-zA-Z0-9_]{6,12}$/', $val) ){
                $this->addError('username', 'Username is invalid');
            }
        }
    }
    private function validateEmail(){
        $val = trim($this->data['email']);
        if(empty($val)){
            $this->addError('email', 'Email is required');
        } else {
            if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
                $this->addError('email', 'Email is invalid');
            }
        }
    }
    private function addError($key, $value){
        $this->error[$key] = $value;
    }

}
