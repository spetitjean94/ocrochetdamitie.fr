<?php
if(isset($_POST['envoyer']))
{
	$to = 'a.tsotsoulis@ocrochetdamitie.fr';
	$from = $mail;
  	$objet = 'Formulaire';
  	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
  	$ville = $_POST['ville'];
  	$mail = $_POST['mail'];
  	$message = $_POST['message'];
  
if(empty($nom))
{

	echo 'Le champ Nom est vide !';

}
if(empty($prenom))
{

	echo 'Le champ Prénom est vide !';

}
if(empty($ville))
{

	echo 'Le champ Ville est vide !';

}  
if(empty($mail))
{

	echo 'Le champ E-Mail est vide !';

}
if(empty($message))
{

	echo 'Le champ Message est vide !';

} 
else
{
	$msg  = "Nom : ".$nom."<br/>Prénom : ".$prenom."<br/>Ville : ".$ville."<br/>E-Mail : ".$mail."<br/>Message : ".$message;
  	
  
  	$mailheaders = "From: $mail\n";
	$mailheaders .= "MIME-version: 1.0\n";
	$mailheaders .= "Content-type: text/html; charset= utf-8\n";
  
  if(mail($to, $objet, $msg, $mailheaders)){

		echo '<p>Votre message a bien été envoyé.<br /><a href="index.html">Retour</a></p>';
    			

			}

			//si il y a une erreur lors de l'envoi

			else{

				echo '<p>Votre message n\'a pas été envoyé.<br /><a href="index.html">Retour</a></p>';
              
   }
 }	
}
?>