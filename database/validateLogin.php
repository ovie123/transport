<?php 

function validateLogin($post){


$errors = array();


if(empty($post['username'])){
  array_push($errors, "Username is required");
}
if(empty($post['password'])){
  array_push($errors, 'Password is required');
}

return $errors;

    }



