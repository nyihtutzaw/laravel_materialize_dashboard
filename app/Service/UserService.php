<?php 
    namespace App\Service;
    use App\User;
    class UserService 
    {
        public static function getUserByToken($token)
        {   
            $model=User::where("token",$token)->first();
            return $model;
        }
    }
    

?>