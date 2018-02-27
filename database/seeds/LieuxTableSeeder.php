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
          'lieu'           => 'La Pointe de la Rozel',
          'adresse'        => '50340 Le Rozel',
          'content'        => "Le Rozel doit son nom aux roseaux qui poussent en abondance sur le territoire de la commune.
                               Du haut du relief qui descend vers le village du Rozel, la vue est splendide.
                               Elle englobe le bourg qui s'étend du chateau à l'église, le bord de mer et la falaise du Pou.",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "rozel.jpg",
          'new_name_image' => "rozel.jpg",
          'path_image'     => 'images',
          'status'         => 'no publish',
          'user_id'        => 1,
       );

      $lieux[] = array(
          'lieu'           => 'La Hague',
          'adresse'        => '50440 La Hague',
          'content'        => "Dans les baies de Quervière ou d'Ecalgrain, face à la mer et au phare de Goury, en haut des falaises granitiques de Jobourg, 128 mètres au-dessus du niveau de la mer, dans les dunes de Biville, entre bruyères et ajoncs,
                               en longeant les murets de pierre typiques de cette « Petite Irlande », on nage en plein bonheur !
                               Séjourner dans la Hague dans le Cotentin, c'est aussi profiter de trésors cachés jusque dans les charmants hameaux où se blottissent les maisons jamais bien hautes, pour mieux se protéger des tempêtes",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "la-hague.jpg",
          'new_name_image' => "la-hague.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
       );

      $lieux[] = array(
          'lieu'           => 'La Pointe du Hoc',
          'adresse'        => '14450 Criqueville-en-Bessin',
          'content'        => "Prise d’assaut le matin du 6 juin par les Rangers du Colonel Rudder, c’est l'un des points forts des fortifications allemandes sur la côte.
                               Aujourd'hui, ce lieu évoque ce qu’était une batterie d’artillerie avec son poste de direction de tir, ses casemates, ses abris…",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "la-pointe-du-hoc.jpg",
          'new_name_image' => "la-pointe-du-hoc.jpg",
          'path_image'     => 'images',
          'status'         => 'no publish',
          'user_id'        => 1,
        );

      $lieux[] = array(
          'lieu'           => 'La colline aux Oiseaux',
          'adresse'        => '14000 Caen',
          'content'        => "Le parc de la colline aux oiseaux, à Caen, a été créé à l'occasion du 50ème anniversaire du débarquement.
                               Situé sur une ancienne décharge, c'est un bel exemple de réhabilitation.
                               De nombreux jardins à thème le composent (labyrinthe en buis et ifs, vivaces, jardins d\'essais floraux...).",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "la-colline-aux-oiseaux.jpg",
          'new_name_image' => "la-colline-aux-oiseaux.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
        );

      $lieux[] = array(
          'lieu'           => "Bagnoles-de-l'Orne",
          'adresse'        => '61140 Bagnoles-de-l\'orne',
          'content'        => "Bagnoles de l’Orne est une station verte de vacances située au sud-est de la Normandie, dans le département de l’Orne fait de bocage et de forêt, de haras et de châteaux.
                               Niché au cœur de 7000 ha de forêt et du Parc Naturel régional Normandie-Maine, c’est une station thermale.",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "bagnoles-de-l-orne.jpg",
          'new_name_image' => "bagnoles-de-l-orne.jpg",
          'path_image'     => 'images',
          'status'         => 'no publish',
          'user_id'        => 1,
       );

      $lieux[] = array(
          'lieu'           => 'St Germain de la Coudre',
          'adresse'        => '61130, St Germain de la Coudre',
          'content'        => "Charmante petite ville typique du departement de l'Orne, Saint Germain de la Coudre se situe dans l'arriere pays Ornais.
                               Peu peuplée et tres verdoyante, elle proposera d'agreables balades estivales et ensoleillées",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "st-germain-de-la-coudre.jpg",
          'new_name_image' => "st-germain-de-la-coudre.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
      );

      $lieux[] = array(
          'lieu'           => "Pont-Audemer",
          'adresse'        => '27500, Pont-Audemer',
          'content'        => "Bienvenue à Pont-Audemer! Située à l'ouest du département de l'Eure, à 20 mn d'Honfleur, la ville bénéficie d'une situation privilégiée au coeur de la Haute-Normandie.
                               Aux détours des ruelles et impasses moyenâgeuses, venez découvrir les maisons à pans de bois se mirant dans les canaux. Bon séjour!",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "Pont-Audemer.jpg",
          'new_name_image' => "Pont-Audemer.jpg",
          'path_image'     => 'images',
          'status'         => 'no publish',
          'user_id'        => 1,
       );

      $lieux[] = array(
          'lieu'           => 'Le Moulin de Vernon',
          'adresse'        => '27200, Vernon',
          'content'        => "Nombreux sont les visiteurs de Vernon ou de Giverny qui traversent la Seine et qui remarquent, près du pont, une curieuse bâtisse ancienne perchée en équilibre au-dessus de l'eau.
                               On l'appelle le Vieux Moulin et, si les feuillages ne sont pas trop épais, derrière cet ancien moulin, ils devinent également les tours d'un château médiéval...",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "le-moulin-de-vernon.jpg",
          'new_name_image' => "le-moulin-de-vernon.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
        );

      $lieux[] = array(
          'lieu'           => 'Veules-les-Roses',
          'adresse'        => '76980, Veules-les-Roses',
          'content'        => "Niché depuis le IVe siècle au creux d’une valleuse débouchant sur la mer, Veules-les-Roses est l’un des plus anciens villages du Pays de Caux.
                               Lieu de villégiature très prisé au XIXème siècle, notamment par des artistes tels que Victor Hugo, son bord de mer et ses ruelles au charme intemporel continuent d’attirer les amoureux des belles choses",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "Veules-les-roses.jpg",
          'new_name_image' => "Veules-les-roses.jpg",
          'path_image'     => 'images',
          'status'         => 'no publish',
          'user_id'        => 1,
        );

     $lieux[] = array(
          'lieu'           => 'Theatre Romain de Lillebonne',
          'adresse'        => '76170, Lillebonne',
          'content'        => "Le théâtre romain de Lillebonne, identifié en 1764 par le comte de Caylus, a été acquis par le Conseil général de la Seine- Maritime en 1818.
                               Dégagé entre 1822 et 1840, il a été classé parmi les Monuments historiques en 1840.
                               Ce monument de spectacle constitué de structures concentriques et radiales présente la particularité d’associer une arène et un bâtiment de scène.",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "theatre-romain-lillebone.jpg",
          'new_name_image' => "theatre-romain-lillebone.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
       );

     $lieux[] = array(
          'lieu'           => 'Côte Fleurie',
          'adresse'        => 'Côte Fleurie, Normandie',
          'content'        => "Au XIVème siècle, les bains de mer ont rendues célèbre les côtes du Calvados et le Pays d’Auge si verdoyant. Les jardins des villas bordant la mer lui valent le surnom de côte Fleurie.
                               Des planches de Deauville au charme intemporel de Cabourg, des villas Belle Epoque d’Houlgate à l’ambiance typique du port d’Honfleur, découvrez cette côte fleurie que tant de peintres ont immortalisée.",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "cote-fleurie.jpg",
          'new_name_image' => "cote-fleurie.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
       );

      $lieux[] = array(
          'lieu'           => 'Fontaine sous jouy',
          'adresse'        => '27120, Fontaine sous jouy',
          'content'        => "Lové dans la verte et fraîche vallée de l’Eure, le village typique de Fontaine Sous Jouy vaut assurément le détour.
                               Pour quelques heures de balades ou un séjour reposant, profitez des authentiques colombages normands, de la beauté des paysages et d’escapades nautiques sur la rivière qui alimente encore le moulin !",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "fontaine-sous-jouy.jpg",
          'new_name_image' => "fontaine-sous-jouy.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
        );

      $lieux[] = array(
          'lieu'           => 'Mortain',
          'adresse'        => '50140, Mortain',
          'content'        => "Amoureux de nature et de randonnée, vous ne pouvez pas manquer le décor bucolique de Mortain et ses cascades réputées, au cœur de la Manche. Vous y verrez aussi des merveilles architecturales témoignant d’un passé médiéval prestigieux,
                               comme la Collégiale Saint-Evroult fondée au XIème siècle par l’un des frères de Guillaume le Conquérant.",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "Mortain.jpg",
          'new_name_image' => "Mortain.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
        );

      $lieux[] = array(
          'lieu'           => 'Ile de Tatihou',
          'adresse'        => '50550, Saint-Vaast-la-Hougue',
          'content'        => "Une véritable invitation au voyage ! Port d’attache des troupes de Guillaume le Conquérant partant conquérir l’Angleterre,
                               l’ile de Tatihou tient son nom des Vikings installés en Normandie. Paradis des oiseaux, elle offre une nature préservée. Charmante halte fortifiée, vous y respirerez le grand air manchot.",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "Tatihou.jpg",
          'new_name_image' => "Tatihou.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
        );

      $lieux[] = array(
          'lieu'           => 'Honfleur',
          'adresse'        => '14600, Honfleur',
          'content'        => "Qui n’a jamais entendu parler d’Honfleur ? Chargée d’histoire avec son port de cap-horniers et son vieux bassin, c’est le port emblème de la Côte Fleurie.
                               On s’y balade de galeries en jardins où sont célébrés tant de peintres, d’écrivains et de scientifiques qui l’ont aimé. Sans oublier ses charmantes ruelles pavées, ses plages et sa gastronomie.",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "Honfleur.jpg",
          'new_name_image' => "Honfleur.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
        );

      $lieux[] = array(
          'lieu'           => 'Giverny',
          'adresse'        => '27620, Giverny',
          'content'        => "C’est ici que vécut Claude Monet pendant plus de quarante ans. Giverny a magistralement inspiré le grand peintre et il est toujours aussi émouvant aujourd\’hui de pénétrer dans ses célèbres tableaux en admirant les nymphéas depuis le pont japonais de son jardin.
                               Haut-lieu de l’impressionnisme, Giverny est une visite incontournable en Normandie.",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "Giverny.jpeg",
          'new_name_image' => "Giverny.jpeg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
        );

      $lieux[] = array(
          'lieu'           => 'Etretat',
          'adresse'        => '76790, Etretat',
          'content'        => "C’est l’un des plus beaux écrins naturels de la Côte d’Albâtre et de Normandie. Un lieu où l’on est en prise directe avec la nature. La beauté sauvage des sentiers surplombant ses vertigineuses falaises vous laisseront de forts souvenirs.
                               Un décor mystérieux de mer et de landes qui n’a pas manqué d’attirer le fameux Arsène Lupin de Maurice Leblanc.",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "Etretat.jpg",
          'new_name_image' => "Etretat.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
        );

      $lieux[] = array(
          'lieu'           => 'Bayeux',
          'adresse'        => '14400, Bayeux',
          'content'        => "Point de chute idéal pour découvrir les plages du débarquement, Bayeux la médiévale regorge de petits trésors historiques et d’un patrimoine surprenant au milieu duquel siège bien sûr la tapisserie de la Reine Mathilde.
                               Seul témoignage visuel de l’épopée de Guillaume le Conquérant vers l’Angleterre et incroyablement préservée, elle est aussi une fabuleuse machine à remonter le temps…",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "Bayeux.jpg",
          'new_name_image' => "Bayeux.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
        );

      $lieux[] = array(
          'lieu'           => 'Colleville Sur Mer',
          'adresse'        => '14710, Colleville Sur Mer',
          'content'        => "Port de pêche accueillant, Colleville Sur Mer fourmille de vie et d’histoire. Vous y dégusterez une cuisine gastronomique fortement inspirée de la mer et profiterez du bocage normand de l’arrière-pays.
                               Abriant l’émouvant cimetière américain, hommage aux soldats tombés pendant la campagne de Normandie, elle reste un passage incontournable vers Omaha Beach et les plages du débarquement.",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "Colleville.jpg",
          'new_name_image' => "Colleville.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
        );

      $lieux[] = array(
          'lieu'           => 'La suisse normande',
          'adresse'        => 'La suisse normande, Normandie',
          'content'        => "Cela vous paraîtra incroyable mais… il y a des montagnes en Normandie ! Vous les découvrirez en Suisse Normande, dans le département de l’Orne. Prisé des amateurs de parapentes et photographes de tout poil,
                               la région vous offre une riche palette de paysages : forêts profondes, rivières, ciels changeants et villages minuscules suspendus dans le temps. N’oubliez pas d’y voir la chambre aux fées de la majestueuse Roche-d’Oëtre.",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "Suisse normande.jpg",
          'new_name_image' => "Suisse normande.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
        );

      $lieux[] = array(
          'lieu'           => 'Ouistreham riva bella',
          'adresse'        => '14150, Ouistreham',
          'content'        => "A la fois port de pêche, de plaisance et charmante station balnéaire, voici Ouistreham-Riva Bella.
                               A l’avant-poste des Plages du Débarquement, appréciez ses multiples visages : bourg médiéval, criée et vieux port, vastes plages familiales et base de départ des ferrys vers la Grande-Bretagne.
                               Un lieu idéal pour des vacances sportives, ludiques ou gastronomiques en famille ou entre amis.",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "Ouistreham.jpg",
          'new_name_image' => "Ouistreham.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
        );

      $lieux[] = array(
          'lieu'           => 'Courseulles Sur Mer',
          'adresse'        => '14470, Courseulles Sur Mer',
          'content'        => "Au cœur du circuit des Plages du Débarquement, Courseulles Sur Mer est l’une des perles de la Côte de Nacre.
                               Lieu de villégiature prisé des parisiens dès l’arrivée des Bains de mer, elle a su préserver l’identité d’un village de pêcheurs tout en accueillant de jolies villas de style Art déco qui surplombent toujours la mer.
                               C’est aussi à Courseulles que l’on rend hommage aux canadiens débarqués à Juno Beach, si chers au cœur des normands, dans le cimetière qui leur est dédié.",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "Courseulles.jpg",
          'new_name_image' => "Courseulles.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
        );

      $lieux[] = array(
          'lieu'           => 'Jumièges',
          'adresse'        => '76480, Jumièges',
          'content'        => "Victor Hugo surnommait l’abbatiale de Jumièges et son parc aux arbres centenaires « La plus belle ruine de France ».
                               Malgré les assauts des Vikings et la Guerre de Cent Ans, ces immenses vestiges bordant la Seine sont devenus un centre artistique et culturel international de premier plan.
                               L’abbaye de Jumièges vous ouvre les portes d’autres précieuses balades : Abbaye de Saint-Wandrille, route des fruits ou encore maison et musée de Victor Hugo à Villequier.",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "Jumieges.jpg",
          'new_name_image' => "Jumieges.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
        );

      $lieux[] = array(
          'lieu'           => 'Fécamp',
          'adresse'        => '76400, Fécamp',
          'content'        => "Comme sa voisine Etretat, Fécamp n’a cessé d’inspirer peintres et écrivains, tant l’humeur du ciel et de la mer y est changeante.
                               Mais Fécamp est d’abord un foisonnant port de pêche qui offre aussi de longues plages et tous les avantages d’être la capitale de la Côte d’Albâtre.
                               Sans oublier la multitude de petites stations balnéaires et sentiers bucoliques typiques du Pays-de-Caux qui l’entourent.",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "Fecamp.jpg",
          'new_name_image' => "Fecamp.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
        );

      $lieux[] = array(
          'lieu'           => 'Duclair',
          'adresse'        => '76480, Duclair',
          'content'        => "A quelques kilomètres de Rouen, surplombée par le château du Taillis, Duclair est vraiment fille de la Seine.
                               Faisant corps avec les méandres du fleuve, cette jolie bourgade est une escale naturelle pour les croisières fluviales.
                               Verdoyante et réputée pour ses grands chefs et son fameux canard, elle est aussi au cœur de la route des Abbayes et sur la route des fruits.",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "Duclair.jpg",
          'new_name_image' => "Duclair.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
        );

      $lieux[] = array(
          'lieu'           => 'Mortemer',
          'adresse'        => '60490, Mortemer',
          'content'        => "S’il est bien un lieu historique et plein de légendes, c’est l’Abbaye de Mortemer.
                               Désirée par le premier duc de Normandie, elle trône au cœur de la forêt de Lyons depuis le XIIème siècle.",
          'created_at'     => $date->format('Y-m-d H:i:s'),
          'name_image'     => "Mortemer.jpg",
          'new_name_image' => "Mortemer.jpg",
          'path_image'     => 'images',
          'status'         => 'publish',
          'user_id'        => 1,
        );

      DB::table('lieux')->insert($lieux);
    }
}
