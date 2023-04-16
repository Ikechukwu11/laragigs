<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Listing;
class DatabaseSeeder extends Seeder
{
  /**
  * Seed the application's database.
  *
  * @return void
  */
  public function run() {
    $user = User::factory()->create([
      'name' => 'Kekesmovic',
      'email' => 'kekesmovic@gmail.com',
        'password'=>bcrypt('123456')
    ]);

    Listing::factory(10)->create(['user_id' => $user->id]);

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
  }
}
