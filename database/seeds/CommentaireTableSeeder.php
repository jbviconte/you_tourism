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
          'commentaire'       => 'La Pointe de la Rozel',
          'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a erat mollis,  sodales risus vitae, tincidunt dui. Nam vitae vestibulum erat. Aliquam viverra ante odio, et volutpat metus rutrum non. Etiam condimentum mauris vitae eleifend eleifend. Sed vehicula porttitor lorem, ut dapibus elit iaculis scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean vel luctus nisi, sed pharetra odio. Fusce auctor feugiat diam eu eleifend.             Suspendisse       potenti. Curabitur iaculis augue in turpis suscipit rutrum. Sed vehicula nisl enim, ac faucibus arcu imperdiet ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam faucibus eu odio eget sagittis.',
          'user_id'     => 2,
          'lieu_id'     => 6,
          'created_at'  => $date->format('Y-m-d H:i:s'),
        );
        DB::table('commentaire')->insert($commentaires);
    }
}
