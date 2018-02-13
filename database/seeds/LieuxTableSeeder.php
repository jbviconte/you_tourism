<?php

use Illuminate\Database\Seeder;

class LieuxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $lieux = [];
      $date = New DateTime();

      DB::table('lieux')->insert($lieux);
    }
}
