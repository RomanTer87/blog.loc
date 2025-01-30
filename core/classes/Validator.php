<?php

class Validator {
    protected $errors = [];

    protected $validators_list = ['required', 'min', 'max'];

    protected $messages = [
        'required' => 'The :fieldname: field is required',
        'max' => 'The :fieldname: field must be maximum :rule_value: char',
        'min' => 'The :fieldname: field must be minimum :rule_value: char',
        

    ];

    public function validate ($data = [], $rules = []){
        foreach ($data as $field_name =>$field_value){
            if(in_array($field_name, array_keys($rules))) {
                dump($field_name);
                // проверка на наличие валидатора
                $this->checkField([
                    'fieldname' => $field_name,
                    'value' => $field_value,
                    'rules' =>$rules[$field_name]
                ]);
            }
        }
        //dump($this->errors);
        return $this;
    }

    protected function checkField($field){
       // dump($field);
       foreach($field['rules'] as $rule=> $rule_value){
            if(in_array($rule, $this->validators_list)){
               // dump($rule);
               if(!call_user_func_array([$this, $rule], [$field['value'], $rule_value])){
                    //dump($field['fieldname']);
                    $err_str = str_replace([':fieldname:', ':rule_value:'],
                    [$field['fieldname'], $rule_value],
                    $this->messages[$rule]
               );
               $this->addError($field['fieldname'],$err_str);
               }
            }
       }
  
    }

    protected function addError($field_name, $error){
        $this->errors[ $field_name ][] = $error;
    }

    protected function required($value){
        return !empty(trim($value));
    }

    protected function min($value, $rule_value){
        return mb_strlen($value, 'UTF-8')>=$rule_value;
    }

    protected function max($value, $rule_value){
        return mb_strlen($value, 'UTF-8')<=$rule_value;
    }

    public function hasErrors(){
        return !empty($this->errors);
    }

    public function listErrors($field_name){
        $errors_list = '';
            if(isset($this->errors[$field_name])){
                $errors_list.= '<div class="invalid-feedback d-block"><ul class ="list-unstyled">';
                foreach($this->errors[$field_name] as $err){
                    $errors_list .= "<li>{$err}</li>";
                }
                $errors_list.='</ul></div>';
            }
        return $errors_list;
    }
}