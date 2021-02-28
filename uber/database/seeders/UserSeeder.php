<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
   protected $types = ['C','D','A'];

   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      $this->createAdmin();
      // Aseguro la existencia de al menos un Customer y un Driver
      $this->createRandomUser('C');
      $this->createRandomUser('D');
      foreach(range(1, 10) as $i) {
         $type = $this->types[rand(0,2)];
         $this->createRandomUser($type);
     }
   }

   protected function createAdmin()
   {
      $admin = User::factory()->create([
         'name' => 'Manuel Profe',
         'email' => 'manuel@example.com',
         'password' => bcrypt('laravel'),
         'created_at' => now(),
      ]);
   }

   protected function createRandomUser($type)
   {
      $user = User::factory()->create([
         'type' => $type,
         'created_at' => now()->subDays(rand(1, 90)),
      ]);

   }
}
