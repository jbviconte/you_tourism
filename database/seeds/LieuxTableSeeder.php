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
          'content'     => 'La pointe du Rozel, parfois dénommée aussi cap du Rozel, est un promontoire rocheux du département de la Manche, situé sur la commune du Rozel.
                            Elle offre un superbe point de vue sur l\'anse de Sciotot et sur Surtainville
                            Une statue de Maris Stella (étoile de mer), dite aussi « Vierge des marins », œuvre de Joseph Bataille, y a été installée.',
          'created_at'  => $date->format('Y-m-d H:i:s'),
          'adresse'     => 'la commune du Rozel',
          'name_image' => "rozel.jpg",
          'new_name_image' => "rozel.jpg",
          'path_image' => 'images',
          'status'      => 'publish',
          'user_id'     => 1,
        );

      $lieux[] = array(
            'lieu'       => 'La Hague',
            'content'     => 'La Hague, avec son cap de la Hague à la pointe nord-ouest, est une presqu\'île française sur la péninsule du Cotentin au nord-ouest du département de la Manche.',
            'created_at'  => $date->format('Y-m-d H:i:s'),
            'adresse'  => 'La Hague au Cotentin',
            'name_image' => "la-hague.jpg",
            'new_name_image' => "la-hague.jpg",
            'path_image' => 'images',
            'status'      => 'publish',
            'user_id'     => 1,
          );

        $lieux[] = array(
            'lieu'       => 'La Pointe du Hoc',
            'content'     => 'Prise d’assaut le matin du 6 juin par les Rangers du Colonel Rudder, c’est l\'un des points forts des fortifications allemandes sur la côte. Aujourd\'hui, ce lieu évoque ce qu’était une batterie d’artillerie avec son poste de direction de tir, ses casemates, ses abris… ',
            'created_at'  => $date->format('Y-m-d H:i:s'),
            'adresse'   => 'CRICQUEVILLE-EN-BESSIN',
            'name_image' => "la-pointe-du-hoc.jpg",
            'new_name_image' => "la-pointe-du-hoc.jpg",
            'path_image' => 'images',
            'status'      => 'publish',
            'user_id'     => 1,
          );

        $lieux[] = array(
            'lieu'       => 'La colline aux Oiseaux',
            'content'     => 'Le parc de la Colline aux oiseaux est un lieu de détente et de loisirs pour ses 380 000 visiteurs annuels. Il invite aussi à la découverte avec la roseraie, l\'étiquetage des plantes ainsi que la ferme normande, le labyrinthe ou la maison positive… Des animations y sont proposées sur les thèmes du jardinage et de l\'éducation à l\'environnement.
                              C’est également un « jardin d’essais » permettant l’expérimentation des aménagements paysagers de la ville.',
            'created_at'  => $date->format('Y-m-d H:i:s'),
            'adresse'   => 'Nord-Ouest de Caen',
            'name_image' => "la-colline-aux-oiseaux.jpg",
            'new_name_image' => "la-colline-aux-oiseaux.jpg",
            'path_image' => 'images',
            'status'      => 'publish',
            'user_id'     => 1,
          );

        $lieux[] = array(
            'lieu'       => 'St Germain de la Coudre',
            'content'     => 'Dotée d\'un riche patrimoine culturel et historique, notamment avec son Eglise du XIIIème siècle mais aussi avec le Manoir de la Fresnaye du XIVème siècle, notre commune parvient à allier richesse du passé et vision vers l\'avenir.',
            'created_at'  => $date->format('Y-m-d H:i:s'),
            'adresse'     => 'St Germain de la Coudre',
            'name_image' => "st-germain-de-la-coudre.jpg",
            'new_name_image' => "st-germain-de-la-coudre.jpg",
            'path_image' => 'images',
            'status'      => 'publish',
            'user_id'     => 1,
          );

        $lieux[] = array(
            'lieu'       => 'Le Vieux-Moulin',
            'content'     => 'Le Vieux Moulin est le dernier témoin des moulins ayant existé à cet endroit. Devenu simple maison à colombages, il est construit vers le xvie siècle, à cheval sur deux des piles du pont médiéval du xiie siècle qui, en traversant la Seine à hauteur de l\'île du Talus sur laquelle il prenait appui, reliait la commune de Vernonnet à celle de Vernon (rattachement de la première à la seconde en 1804).',
            'created_at'  => $date->format('Y-m-d H:i:s'),
            'adresse'     => 'Vernon',
            'name_image' => "le-moulin-de-vernon.jpg",
            'new_name_image' => "le-moulin-de-vernon.jpg",
            'path_image' => 'images',
            'status'      => 'publish',
            'user_id'     => 1,
          );

        $lieux[] = array(
            'lieu'       => 'Veules-les-Roses',
            'content'     => 'Laissez-vous séduire par l’un des plus beaux villages de Normandie qui allie, au fil des 1149 mètres de la Veules, tous les charmes de la mer et de la campagne.
                              Écoutez chanter l’eau dans les roues des moulins, promenez-vous dans les sentes qui bordent la Veules, découvrez le cresson aux sources, choisissez vos produits de la mer au retour des pêcheurs, profitez de la plage de sable fin à marée basse, des embruns de l’estacade et du panorama sur les falaises.',
            'created_at'  => $date->format('Y-m-d H:i:s'),
            'adresse'     => 'Veules-les-Roses',
            'name_image' => "Veules-les-roses.jpg",
            'new_name_image' => "Veules-les-roses.jpg",
            'path_image' => 'images',
            'status'      => 'no publish',
            'user_id'     => 1,
          );

        $lieux[] = array(
            'lieu'       => 'Theatre Romain',
            'content'     => 'Le « théâtre » romain de Lillebonne, identifié en 1764 par le comte de Caylus, a été acquis par le Conseil général de la Seine- Maritime en 1818. Dégagé entre 1822 et 1840, il a été classé parmi les Monuments historiques en 1840. Ce monument de spectacle constitué de structures concentriques et radiales présente la particularité d’associer une arène et un bâtiment de scène. Trois époques de construction sont actuellement lisibles dans les vestiges. Les dernières campagnes de fouilles réalisées de 2007 à 2010 dans les zones est et sud de l’édifice ont permis d’identifier en partie les deux derniers états et de dater leur construction.',
            'created_at'  => $date->format('Y-m-d H:i:s'),
            'adresse'     => 'Lillebonne',
            'name_image' => "theatre-romain-lillebone.jpg",
            'new_name_image' => "theatre-romain-lillebone.jpg",
            'path_image' => 'images',
            'status'      => 'publish',
            'user_id'     => 1,
          );

      DB::table('lieux')->insert($lieux);
    }
}
