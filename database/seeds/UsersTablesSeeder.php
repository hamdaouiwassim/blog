<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    }
}
User::create([
    'name'            => 'administrateur',
    'email'           => 'admin@gmail.com',
    'password'        => Hash::make('admin123'),
    'remember_token'  => str_random(10),

  ]);