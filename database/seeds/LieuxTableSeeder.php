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

      $lieux[] = array(
          'lieu'       => 'ici mon premier titre',
          'content'     => 'ici le premier contenu',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'name_image' => null,
          'new_name_image' => null,
          'path_image' => null,
          // 'status'      => 'actif',
          // 'user_id'     => 2,
        );

      DB::table('lieux')->insert($lieux);
    }
}
