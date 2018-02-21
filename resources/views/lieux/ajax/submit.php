<?php

// report d'erreurs:
error_reporting(E_ALL^E_NOTICE);

include "connect.php";
include "comment.class.php";

/*
/	Le tableau est informé par le data
/	data qui lui est renseigné par les commentaires
/	ou messages d'erreurs
/*/

$arr = array();
$validates = Comment::validate($arr);

if($validates)
{
	/* Aucune erreur, on insere en base de données */

	mysql_query("INSERT INTO commentaire(commentaire, content, user_id, lieu_id, created_at)
			VALUES (
				'".$arr['commentaire']."',
				'".$arr['content']."',
				'".$arr['user_id']."',
				'".$arr['lieu_id']."',
				'".$arr['created_at']."'
			)");

	$arr['dt'] = date('r',time());
	$arr['id'] = mysql_insert_id();

	/* Envoie un email pour informer de l'ajout d'un commentaire */

	$msg = "Un nouveau commentaire a &eacute;t&eacute; ajout&eacute; sur you_Tourism!
	Nom : ".$arr['commentaire']."
	Email : ".$arr['email'].";
	Page = ".$arr['id_page'].";
	Commentaire = ".$arr['content'];

	mail('romainrichard7627@gmail.com','Nouveau commentaire',$msg);

	/*
	/	Le data de $arr est echappé de mysql query,
	/	mais nous avons besoin des données non-echappées, on applique donc,
	/	stripslashes (qui supprime les antislashs d'une chaine)
  / a tous les elements du tableau
	/*/

	$arr = array_map('stripslashes',$arr);

	$insertedComment = new Comment($arr);

	/* production des balises du commentaire fraichement inseré */

	echo json_encode(array('status'=>1,'html'=>$insertedComment->markup()));

}
else
{
	/* production des messages d'erreurs */
	echo '{"status":0,"errors":'.json_encode($arr).'}';
}

?>
