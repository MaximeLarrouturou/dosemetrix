
 <?php
/*
	********************************************************************************************
	CONFIGURATION
	********************************************************************************************
*/
// destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
$destinataire = 'mlarrouturou@mediametrie.fr';

// copie ? (envoie une copie au visiteur)
$copie = 'oui';

// Action du formulaire (si votre page a des paramètres dans l'URL)
// si cette page est index.php?page=contact alors mettez index.php?page=contact
// sinon, laissez vide
$form_action = '';

// Messages de confirmation du mail
$message_envoye = "Votre message nous est bien parvenu !";
$message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP.";

// Message d'erreur du formulaire
$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";

/*
	********************************************************************************************
	FIN DE LA CONFIGURATION
	********************************************************************************************
*/

/*
 * cette fonction sert à nettoyer et enregistrer un texte
 */
function Rec($text)
{
	$text = htmlspecialchars(trim($text), ENT_QUOTES);
	if (1 === get_magic_quotes_gpc())
	{
		$text = stripslashes($text);
	}

	$text = nl2br($text);
	return $text;
};

/*
 * Cette fonction sert à vérifier la syntaxe d'un email
 */
function IsEmail($email)
{
	$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
	return (($value === 0) || ($value === false)) ? false : true;
}

// formulaire envoyé, on récupère tous les champs.
$nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
$prenom     = (isset($_POST['prenom']))     ? Rec($_POST['prenom'])     : '';
$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
$titre   = (isset($_POST['titre']))   ? Rec($_POST['titre'])   : '';
$entreprise   = (isset($_POST['entreprise']))   ? Rec($_POST['entreprise'])   : '';
$telephone   = (isset($_POST['telephone']))   ? Rec($_POST['telephone'])   : '';
$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';

// On va vérifier les variables et l'email ...
$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
$err_formulaire = false; // sert pour remplir le formulaire en cas d'erreur si besoin

if (isset($_POST['envoi']))
{
	if (($nom != '') && ($prenom != '') && ($email != '') && ($titre != '') && ($titre != '') && ($entreprise != '') && ($telephone != '') && ($message != ''))
	{
		// les 4 variables sont remplies, on génère puis envoie le mail
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'From:'.$nom.' '.$prenom.'  <'.$email.'>' . "\r\n" .
				'Reply-To:'.$email. "\r\n" .
				'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
				'Content-Disposition: inline'. "\r\n" .
				'Content-Transfer-Encoding: 7bit'." \r\n" .
				'X-Mailer:PHP/'.phpversion();

		// envoyer une copie au visiteur ?
		if ($copie == 'oui')
		{
			$cible = $destinataire.';'.$email;
		}
		else
		{
			$cible = $destinataire;
		};

		// Remplacement de certains caractères spéciaux
		$message = str_replace("&#039;","'",$message);
		$message = str_replace("&#8217;","'",$message);
		$message = str_replace("&quot;",'"',$message);
		$message = str_replace('<br>','',$message);
		$message = str_replace('<br />','',$message);
		$message = str_replace("&lt;","<",$message);
		$message = str_replace("&gt;",">",$message);
		$message = str_replace("&amp;","&",$message);

		// Envoi du mail
		$num_emails = 0;
		$tmp = explode(';', $cible);
		foreach($tmp as $email_destinataire)
		{
			if (mail($email_destinataire, $titre, $message, $headers))
				$num_emails++;
		}

		if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1)))
		{
			echo '<p class="send">'.$message_envoye.'</p>';
		}
		else
		{
			echo '<p>'.$message_non_envoye.'</p>';
		};
	}
	else
	{
		// une des 3 variables (ou plus) est vide ...
		echo '<p class="error">'.$message_formulaire_invalide.'</p>';
		$err_formulaire = true;
	};
}; // fin du if (!isset($_POST['envoi']))

if (($err_formulaire) || (!isset($_POST['envoi'])))
{
	// afficher le formulaire
	echo '
	<form id="contact" method="post" action="'.$form_action.'">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col"> 
                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="nom" name="nom" value="'.stripslashes($nom).'">
                            <label class="mdl-textfield__label" for="nom">First name<sup>*</sup></label>
                          </div>   
                        </div>
                        <div class="mdl-cell mdl-cell--6-col"> 
                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="prenom" name="prenom" value="'.stripslashes($prenom).'">
                            <label class="mdl-textfield__label" for="prenom">Name<sup>*</sup></label>
                          </div>                            
                        </div>                        
                    </div> 

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col"> 
                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="titre" name="titre" value="'.stripslashes($titre).'">
                            <label class="mdl-textfield__label" for="titre">Title</label>
                          </div>                            
                        </div>
                        <div class="mdl-cell mdl-cell--6-col">    
                           <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="entreprise" name="entreprise" value="'.stripslashes($entreprise).'">
                            <label class="mdl-textfield__label" for="entreprise">Company<sup>*</sup></label>
                          </div>                        
                        </div>                        
                    </div>

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col">  
                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="email" name="email">
                            <label class="mdl-textfield__label" for="email">Email<sup>*</sup></label>
                          </div>                           
                        </div>
                        <div class="mdl-cell mdl-cell--6-col">  
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telephone" name="telephone" value="'.stripslashes($telephone).'">
                                <label class="mdl-textfield__label" for="telephone">Phone<sup>*</sup></label>
                                <span class="mdl-textfield__error">Input is not a number!</span>
                            </div>                          
                        </div>                        
                    </div>

                      <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col">  
                            <div class="mdl-textfield mdl-js-textfield message mdl-js-textfield--floating-label">
                                <textarea class="mdl-textfield__input" type="text" rows= "3" id="message" name="message">'.stripslashes($message).'</textarea>
                                <label class="mdl-textfield__label" for="message">Message<sup>*</sup></label>
                            </div>                          
                        </div>   
                    </div>

                      <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col">
                            <button type="submit" name="envoi" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Send Email</button>                         
                        </div>   
                    </div> 
                   </form>';
};
?>