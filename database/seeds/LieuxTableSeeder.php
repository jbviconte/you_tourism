<?php

use Illuminate\Database\Seeder;
use App\Service\PathUpload;

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
          'lieu'       => 'La Pointe de la Rozel',
          'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a erat mollis, sodales risus vitae, tincidunt dui. Nam vitae vestibulum erat. Aliquam viverra ante odio, et volutpat metus rutrum non. Etiam condimentum mauris vitae eleifend eleifend. Sed vehicula porttitor lorem, ut dapibus elit iaculis scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean vel luctus nisi, sed pharetra odio. Fusce auctor feugiat diam eu eleifend. Suspendisse potenti. Curabitur iaculis augue in turpis suscipit rutrum. Sed vehicula nisl enim, ac faucibus arcu imperdiet ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam faucibus eu odio eget sagittis.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'name_image' => "rozel.jpg",
          'new_name_image' => "rozel.jpg",
          'path_image' => 'images',
          'status'      => 'no publish',
          'user_id'     => 2,
        );

        $lieux[] = array(
            'lieu'       => 'La Hague',
            'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a erat mollis, sodales risus vitae, tincidunt dui. Nam vitae vestibulum erat. Aliquam viverra ante odio, et volutpat metus rutrum non. Etiam condimentum mauris vitae eleifend eleifend. Sed vehicula porttitor lorem, ut dapibus elit iaculis scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean vel luctus nisi, sed pharetra odio. Fusce auctor feugiat diam eu eleifend. Suspendisse potenti. Curabitur iaculis augue in turpis suscipit rutrum. Sed vehicula nisl enim, ac faucibus arcu imperdiet ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam faucibus eu odio eget sagittis.',
            'created_at'  => $date->format('Y-m-d H:i:s'),
            'name_image' => "la-hague.jpg",
            'new_name_image' => "la-hague.jpg",
            'path_image' => 'images',
            'status'      => 'publish',
            'user_id'     => 2,
          );

          $lieux[] = array(
              'lieu'       => 'La Pointe du Hoc',
              'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a erat mollis, sodales risus vitae, tincidunt dui. Nam vitae vestibulum erat. Aliquam viverra ante odio, et volutpat metus rutrum non. Etiam condimentum mauris vitae eleifend eleifend. Sed vehicula porttitor lorem, ut dapibus elit iaculis scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean vel luctus nisi, sed pharetra odio. Fusce auctor feugiat diam eu eleifend. Suspendisse potenti. Curabitur iaculis augue in turpis suscipit rutrum. Sed vehicula nisl enim, ac faucibus arcu imperdiet ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam faucibus eu odio eget sagittis.',
              'created_at'  => $date->format('Y-m-d H:i:s'),
              'name_image' => "La-pointe-du-hoc.jpg",
              'new_name_image' => "La-pointe-du-hoc.jpg",
              'path_image' => 'images',
              'status'      => 'no publish',
              'user_id'     => 2,
            );

            $lieux[] = array(
                'lieu'       => 'La colline aux Oiseaux',
                'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a erat mollis, sodales risus vitae, tincidunt dui. Nam vitae vestibulum erat. Aliquam viverra ante odio, et volutpat metus rutrum non. Etiam condimentum mauris vitae eleifend eleifend. Sed vehicula porttitor lorem, ut dapibus elit iaculis scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean vel luctus nisi, sed pharetra odio. Fusce auctor feugiat diam eu eleifend. Suspendisse potenti. Curabitur iaculis augue in turpis suscipit rutrum. Sed vehicula nisl enim, ac faucibus arcu imperdiet ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam faucibus eu odio eget sagittis.',
                'created_at'  => $date->format('Y-m-d H:i:s'),
                'name_image' => "la-colline-aux-oiseaux.jpg",
                'new_name_image' => "la-colline-aux-oiseaux.jpg",
                'path_image' => 'images',
                'status'      => 'publish',
                'user_id'     => 2,
              );

              $lieux[] = array(
                  'lieu'       => 'Bagnoles-de-l\'Orne',
                  'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a erat mollis, sodales risus vitae, tincidunt dui. Nam vitae vestibulum erat. Aliquam viverra ante odio, et volutpat metus rutrum non. Etiam condimentum mauris vitae eleifend eleifend. Sed vehicula porttitor lorem, ut dapibus elit iaculis scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean vel luctus nisi, sed pharetra odio. Fusce auctor feugiat diam eu eleifend. Suspendisse potenti. Curabitur iaculis augue in turpis suscipit rutrum. Sed vehicula nisl enim, ac faucibus arcu imperdiet ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam faucibus eu odio eget sagittis.',
                  'created_at'  => $date->format('Y-m-d H:i:s'),
                  'name_image' => "bagnoles-de-l-orne.jpg",
                  'new_name_image' => "bagnoles-de-l-orne.jpg",
                  'path_image' => 'images',
                  'status'      => 'no publish',
                  'user_id'     => 2,
                );

                $lieux[] = array(
                    'lieu'       => 'St Germain de la Coudre',
                    'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a erat mollis, sodales risus vitae, tincidunt dui. Nam vitae vestibulum erat. Aliquam viverra ante odio, et volutpat metus rutrum non. Etiam condimentum mauris vitae eleifend eleifend. Sed vehicula porttitor lorem, ut dapibus elit iaculis scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean vel luctus nisi, sed pharetra odio. Fusce auctor feugiat diam eu eleifend. Suspendisse potenti. Curabitur iaculis augue in turpis suscipit rutrum. Sed vehicula nisl enim, ac faucibus arcu imperdiet ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam faucibus eu odio eget sagittis.',
                    'created_at'  => $date->format('Y-m-d H:i:s'),
                    'name_image' => "st-germain-de-la-coudre.jpg",
                    'new_name_image' => "st-germain-de-la-coudre.jpg",
                    'path_image' => 'images',
                    'status'      => 'publish',
                    'user_id'     => 2,
                  );

                  $lieux[] = array(
                      'lieu'       => 'Pont-Audemer',
                      'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a erat mollis, sodales risus vitae, tincidunt dui. Nam vitae vestibulum erat. Aliquam viverra ante odio, et volutpat metus rutrum non. Etiam condimentum mauris vitae eleifend eleifend. Sed vehicula porttitor lorem, ut dapibus elit iaculis scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean vel luctus nisi, sed pharetra odio. Fusce auctor feugiat diam eu eleifend. Suspendisse potenti. Curabitur iaculis augue in turpis suscipit rutrum. Sed vehicula nisl enim, ac faucibus arcu imperdiet ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam faucibus eu odio eget sagittis.',
                      'created_at'  => $date->format('Y-m-d H:i:s'),
                      'name_image' => "Pont-Audemer.jpg",
                      'new_name_image' => "Pont-Audemer.jpg",
                      'path_image' => 'images',
                      'status'      => 'no publish',
                      'user_id'     => 2,
                    );

                    $lieux[] = array(
                        'lieu'       => 'Le Moulin de Vernon',
                        'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a erat mollis, sodales risus vitae, tincidunt dui. Nam vitae vestibulum erat. Aliquam viverra ante odio, et volutpat metus rutrum non. Etiam condimentum mauris vitae eleifend eleifend. Sed vehicula porttitor lorem, ut dapibus elit iaculis scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean vel luctus nisi, sed pharetra odio. Fusce auctor feugiat diam eu eleifend. Suspendisse potenti. Curabitur iaculis augue in turpis suscipit rutrum. Sed vehicula nisl enim, ac faucibus arcu imperdiet ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam faucibus eu odio eget sagittis.',
                        'created_at'  => $date->format('Y-m-d H:i:s'),
                        'name_image' => "le-moulin-de-vernon.jpg",
                        'new_name_image' => "le-moulin-de-vernon.jpg",
                        'path_image' => 'images',
                        'status'      => 'publish',
                        'user_id'     => 2,
                      );

                      $lieux[] = array(
                          'lieu'       => 'Veules-les-Roses',
                          'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a erat mollis, sodales risus vitae, tincidunt dui. Nam vitae vestibulum erat. Aliquam viverra ante odio, et volutpat metus rutrum non. Etiam condimentum mauris vitae eleifend eleifend. Sed vehicula porttitor lorem, ut dapibus elit iaculis scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean vel luctus nisi, sed pharetra odio. Fusce auctor feugiat diam eu eleifend. Suspendisse potenti. Curabitur iaculis augue in turpis suscipit rutrum. Sed vehicula nisl enim, ac faucibus arcu imperdiet ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam faucibus eu odio eget sagittis.',
                          'created_at'  => $date->format('Y-m-d H:i:s'),
                          'name_image' => "Veules-les-roses.jpg",
                          'new_name_image' => "Veules-les-Roses.jpg",
                          'path_image' => 'images',
                          'status'      => 'no publish',
                          'user_id'     => 2,
                        );

                        $lieux[] = array(
                            'lieu'       => 'Theatre Romain de Lillebone',
                            'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a erat mollis, sodales risus vitae, tincidunt dui. Nam vitae vestibulum erat. Aliquam viverra ante odio, et volutpat metus rutrum non. Etiam condimentum mauris vitae eleifend eleifend. Sed vehicula porttitor lorem, ut dapibus elit iaculis scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean vel luctus nisi, sed pharetra odio. Fusce auctor feugiat diam eu eleifend. Suspendisse potenti. Curabitur iaculis augue in turpis suscipit rutrum. Sed vehicula nisl enim, ac faucibus arcu imperdiet ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam faucibus eu odio eget sagittis.',
                            'created_at'  => $date->format('Y-m-d H:i:s'),
                            'name_image' => "theatre-romain-lillebone.jpg",
                            'new_name_image' => "theatre-romain-lillebone.jpg",
                            'path_image' => 'images',
                            'status'      => 'publish',
                            'user_id'     => 2,
                          );

      DB::table('lieux')->insert($lieux);
    }
}
