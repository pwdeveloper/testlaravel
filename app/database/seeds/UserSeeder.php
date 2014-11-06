<?php
 
class UserSeeder
  extends DatabaseSeeder
{
  public function run()
  {
    $users = [
      [
        "username" => "peter.mulder",
        "password" => Hash::make("k40pk!41Ew"),
        "email"    => "peter.william.mulder@gmail.com"
      ]
    ];
  
    foreach ($users as $user) {
      User::create($user);
    }
  }
}