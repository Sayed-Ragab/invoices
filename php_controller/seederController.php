<?php 
include("ConnectController.php");
class UserSeeder extends connect_DataBase{

    public function seed(){
       
        $users = [
            [
            'name'=>'Admin',
            'email'=>'Admin@Test.Com',
            'password'=>password_hash('asdASD@123',PASSWORD_DEFAULT),
            'status' =>'مفعل',
            'roles_name'=>'admin'
            ]
        ];
     
        
    }
    
    }
 

$userSeeder = new UserSeeder();

    $userSeeder-> seed();























?>