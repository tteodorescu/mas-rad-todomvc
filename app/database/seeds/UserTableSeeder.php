<?php
 
class UserTableSeeder extends Seeder
{
  public function run()
  {
    $faker = Faker\Factory::create();
 
    for ($i = 0; $i < 100; $i++)
    {
      $user = User::create(array(
        'username' => $faker->userName,
        'name' => $faker->firstName,
        'email' => $faker->email,
        'password' => $faker->word
      ));
    }  
  }
}
