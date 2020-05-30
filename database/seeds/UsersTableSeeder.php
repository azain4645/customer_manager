<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        [
        'name' => 'あああ',
        'email' => 'test@gmail.com',
        'password' => Hash::make('test')
        ],[
        'name' => 'いいい',
        'email' => 'test2@gmail.com',
        'password' => Hash::make('test')
        ],[
        'name' => 'ううう',
        'email' => 'azain0706@gmail.com',
        'password' => Hash::make('masamiti')
        ]
      ]);
    }
}
