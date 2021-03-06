<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = [];
        $date = Carbon::now();

        $users[] = array(
          'name' => 'azert',
          'email' => 'azert@live.fr',
          'password' => bcrypt('azerty'),
          'role' => 'admin',
          'created_at' => $date
        );

        $users[] = array(
          'name' => 'azerty',
          'email' => 'azerty@live.com',
          'password' => bcrypt('azerty'),
          'role' => 'inscrit',
          'created_at' => $date
        );

        $users[] = array(
          'name' => 'antoine',
          'email' => 'quidelantoine@gmail.com',
          'password' => bcrypt('michel'),
          'role' => 'admin',
          'created_at' => $date
        );

        $users[] = array(
          'name' => 'Quentin',
          'email' => 'lorentzquentin@hotmail.fr',
          'password' => bcrypt('123456'),
          'role' => 'admin',
          'created_at' => $date
        );

        DB::table('users')->insert($users);
    }
}
