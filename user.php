<?php
class user extends auth{
 public $user;
 function __construct(){
    $this->user = $_SESSION['mimbol'];
    if(logg()){
      $group = mysqlo::query("SELECT * FROM `groups` WHERE `id` = :group_id1", ['group_id1' => $this->user['user_group']]);
      $this->user += [
        'group' => $group['name'],
        'rusgroup' => $group['rusname'],
      ];
    }else{
     $this->user = [];
    }
    
 }
 function logg(){
  if($this->user == []){
   return false;
  }else{
   return true;
  }
 }

}