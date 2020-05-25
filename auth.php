<?php
//Авторизация и тд
class auth extends mysqlo{
   function test($login,$password){
     $query = mysqlo::query("SELECT * FROM users WHERE username = :u",["u" => $login]);
     $options = [
      'cost' => 12,
      'salt' => $query['salt'],
     ];
     $hash = password_hash($password, PASSWORD_BCRYPT, $options);
     return [
        'sus' => ($query['password'] == $hash),
        'user' => $query
     ];
   }
   function prov( array $ses){
    if(time() - $ses['time'] > 900)
     return 0;
    if(mysqlo::query("SELECT * FROM users WHERE username = :u AND token = :t",['t' => $ses['token'],'u' => $ses['username']]) == false)
     return 0;
    return 1;
   }
   function login($login,$password){
      $s = $this->test($login,$password);
      //if($s['sus']){
         $token = random_md5();
         mysqlo::query("UPDATE users SET token = :t WHERE username = :u",['t' => $token,'u' => $s['username']]);
         $_SESSION['mimbol'] = [
            'token' => $token,
            'username' => $s['username'],
            'time' => time(),
         ];
      //}
   }
   function exit(){
     unset($_SESSION['mimbol']);
   }
   function getsalt(){
      return random_bytes(11);
   }
}