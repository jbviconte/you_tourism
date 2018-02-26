<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommentaireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $commentaires = [];
      $date = New DateTime();

      $commentaires[] = array(
          
        );
        DB::table('commentaire')->insert($commentaires);
    }
}
