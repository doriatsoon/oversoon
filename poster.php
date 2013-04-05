<?php
//Cette fonction doit être appelée avant tout code html
session_name('admin');
session_start();
$balises = true;
//On donne ensuite un titre à la page, puis on appelle notre fichier debut.php
$titre = "Poster";

//On se connecte a la base de données
include("function.php");
connexion();

//Qu'est ce qu'on veut faire ? poster, répondre ou éditer ?
$action = htmlspecialchars($_GET['action']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">    
    <head>        
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />        
      <title>Oversoon.fr</title>        
      <link href="css/styles.css" rel="stylesheet" type="text/css" /> 
      <script>
function bbcode(bbdebut, bbfin)
{
var input = window.document.formulaire.message;
input.focus();
if(typeof document.selection != 'undefined')
{
var range = document.selection.createRange();
var insText = range.text;
range.text = bbdebut + insText + bbfin;
range = document.selection.createRange();
if (insText.length == 0)
{
range.move('character', -bbfin.length);
}
else
{
range.moveStart('character', bbdebut.length + insText.length + bbfin.length);
}
range.select();
}
else if(typeof input.selectionStart != 'undefined')
{
var start = input.selectionStart;
var end = input.selectionEnd;
var insText = input.value.substring(start, end);
input.value = input.value.substr(0, start) + bbdebut + insText + bbfin + input.value.substr(end);
var pos;
if (insText.length == 0)
{
pos = start + bbdebut.length;
}
else
{
pos = start + bbdebut.length + insText.length + bbfin.length;
}
input.selectionStart = pos;
input.selectionEnd = pos;
}
 
else
{
var pos;
var re = new RegExp('^[0-9]{0,3}$');
while(!re.test(pos))
{
pos = prompt("insertion (0.." + input.value.length + "):", "0");
}
if(pos > input.value.length)
{
pos = input.value.length;
}
var insText = prompt("Veuillez taper le texte");
input.value = input.value.substr(0, pos) + bbdebut + insText + bbfin + input.value.substr(pos);
}
}
function smilies(img)
{
window.document.formulaire.message.value += '' + img + '';
}
</script>   
    </head>
    <body>        
      <div id="page">            
        <div id="bando">                
          <div id="bienvenue">Administration de Oversoon
          </div>            
        </div>            
        <div id="barremenu">                
          <ul>                    
            <li>
            <a href="index.php">Accueil</a>
            </li>                    
            <li>
            <a href="videos.php">Vid&eacute;oth&egrave;que</a>
            </li>                    
            <li>
            <a href="membres.php">Membres</a>
            </li>                    
            <li>
            <a href="news.php">News</a>
            </li>                    
            <li>
            <a href="forum.php" class="active">Forum</a>
            </li>                
          </ul>            
        </div>            
        <!-- Si l'utilisateur est pas connecte -->            
<?php
    if(!isset($_SESSION['login'])){ 
?> 
            
        <div id="centre">                
          <div class="title">
            <a href ="forum.php" style="text-decoration:none;color:black;">Forum</a> > <?php echo stripslashes(htmlspecialchars($data1['forum_name']));?>
          </div>               
          <hr style="margin-left:15px;margin-right:10px;margin-bottom:50px;" size="1"/>                
          <div style="text-align:left;width:20%;margin-left:15px;display:inline;float:left;position:relative;">                    
            <img src="images/icons/ti-2dialog-error-80x80.gif"/>                
          </div>                
          <div style="text-align:left;width:75%;margin-top:35px;font-weight:bold;color:red;display:inline;float:left;position:relative;">                    
            Vous devez &ecirc;tre connect&eacute; pour acc&eacute;der au forum.              
          </div>            
        </div>                             
<?php
    }else{   
?>
         <div id="centre">             
          <div class="title">           
    <?php
    //Si on veut poster un nouveau topic, la variable f se trouve dans l'url,
    //On récupère certaines valeurs
        if (isset($_GET['f'])){
            $forum = (int) $_GET['f'];
            $requete1 = mysql_query('
            SELECT forum_name, auth_view, auth_post, auth_topic, auth_annonce, auth_modo
            FROM forum_forum
            WHERE forum_id ="'.$forum.'"') or die(mysql_error());
            $data1 = mysql_fetch_array($requete1);
    ?>
              
     <a href ="./forum.php" style="text-decoration:none;color:black;">Forum</a> > 
     <a href="./voirforum.php?f=<?php echo ''.$forum.''; ?>" style="text-decoration:none;color:black;"><?php echo stripslashes(htmlspecialchars($data1['forum_name'])); ?></a> >
     Nouveau topic
 
<?php
    }
 
    //Sinon c'est un nouveau message, on a la variable t et
    //On récupère f grâce à une requête
        else if (isset($_GET['t'])){
            $topic = (int) $_GET['t'];
            $requete1 = mysql_query('
            SELECT topic_titre, forum_topic.forum_id,
            forum_name, auth_view, auth_post, auth_topic, auth_annonce, auth_modo
            FROM forum_topic
            LEFT JOIN forum_forum ON forum_forum.forum_id = forum_topic.forum_id
            WHERE topic_id ="'.$topic.'"')or die(mysql_error());
            $data1 = mysql_fetch_array($requete1);
            $forum = $data1['forum_id'];
?>
 

<a href ="./forum.php" style="text-decoration:none;color:black;">Forum</a> >
<a href="./voirforum.php?f=<?php echo $data1['forum_id'] ?>" style="text-decoration:none;color:black;"><?php echo stripslashes(htmlspecialchars($data1['forum_name'])); ?></a> >
<a href="./voirtopic.php?t=<?php echo $topic ?>" style="text-decoration:none;color:black;"><?php echo stripslashes(htmlspecialchars($data1['topic_titre'])); ?></a> >
Poster une réponse
<?php
        }
 
    //Enfin sinon c'est au sujet de la modération(on verra plus tard en détail)
    //On ne connait que le post, il faut chercher le reste
    else if (isset ($_GET['p'])){
        $post = (int) $_GET['p'];
        $requete1 = mysql_query('
        SELECT post_createur, forum_post.topic_id, topic_titre, forum_topic.forum_id,
        forum_name, auth_view, auth_post, auth_topic, auth_annonce, auth_modo
        FROM forum_post
        LEFT JOIN forum_topic ON forum_topic.topic_id = forum_post.topic_id
        LEFT JOIN forum_forum ON forum_forum.forum_id = forum_topic.forum_id
        WHERE forum_post.post_id ="'.$post.'"')or die(mysql_error());
        $data1 = mysql_fetch_array($requete1);
        $topic = $data1['topic_id'];
        $forum = $data1['forum_id'];
?>
 
<a href ="./forum.php" style="text-decoration:none;color:black;">Forum</a> >
<a href="./voirforum.php?f=<?php echo $forum ?>" style="text-decoration:none;color:black;"><?php echo stripslashes(htmlspecialchars($data1['forum_name'])); ?></a> >
<a href="./voirtopic.php?t=<?php echo $topic ?>" style="text-decoration:none;color:black;"><?php echo stripslashes(htmlspecialchars($data1['topic_titre'])); ?></a>
<?php
    }
?> 
          </div>                
          <hr style="margin-left:15px;margin-right:10px;" size="1"/>                
          <div id="content">                  
            <div id="corps_forum"> 
 
 
<?php
switch($action)
{
    case "repondre": //Premier cas on souhaite répondre
?>

 
<form method="post" action="action/postok.php?action=repondre&amp;t=<?php echo $topic ?>" name="formulaire" style="margin-left:15px;margin-right:10px;">
 
<fieldset><legend>Mise en forme</legend>
<input type="button" id="gras" name="gras" value="Gras" onClick="javascript:bbcode('[g]', '[/g]');return(false)" />
<input type="button" id="italic" name="italic" value="Italic" onClick="javascript:bbcode('[i]', '[/i]');return(false)" />
<input type="button" id="souligné" name="souligné" value="Souligné" onClick="javascript:bbcode('[s]', '[/s]');return(false)" />
<input type="button" id="lien" name="lien" value="Lien" onClick="javascript:bbcode('[url]', '[/url]');return(false)" />
<br /><br />
<img src="./images/smileys/heureux.gif" title="heureux" alt="heureux" onClick="javascript:smilies(' :D ');return(false)" />
<img src="./images/smileys/lol.gif" title="lol" alt="lol" onClick="javascript:smilies(' :lol: ');return(false)" />
<img src="./images/smileys/triste.gif" title="triste" alt="triste" onClick="javascript:smilies(' :triste: ');return(false)" />
<img src="./images/smileys/cool.gif" title="cool" alt="cool" onClick="javascript:smilies(' :frime: ');return(false)" />
<img src="./images/smileys/rire.gif" title="rire" alt="rire" onClick="javascript:smilies(' XD ');return(false)" />
<img src="./images/smileys/confus.gif" title="confus" alt="confus" onClick="javascript:smilies(' :s ');return(false)" />
<img src="./images/smileys/choc.gif" title="choc" alt="choc" onClick="javascript:smilies(' :o ');return(false)" />
<img src="./images/smileys/question.gif" title="?" alt="?" onClick="javascript:smilies(' :interrogation: ');return(false)" />
<img src="./images/smileys/exclamation.gif" title="!" alt="!" onClick="javascript:smilies(' :exclamation: ');return(false)" />
</fieldset>
 
<fieldset><legend>Message</legend><textarea cols="73.6" rows="8" id="message" name="message"></textarea></fieldset>
<p align="center">
<input type="submit" name="submit" value="Envoyer" />
<input type="reset" name = "Effacer" value = "Effacer"/>
</p></form>
<?php
    break;
     
    case "nouveautopic":
?>
 
<form method="post" action="action/postok.php?action=nouveautopic&amp;f=<?php echo $forum ?>" name="formulaire" style="margin-left:15px;margin-right:10px;">
 
<fieldset><legend>Titre</legend>
<input type="text" size="80" id="titre" name="titre" /></fieldset>
 
<fieldset><legend>Mise en forme</legend>
<input type="button" id="gras" name="gras" value="Gras" onClick="javascript:bbcode('[g]', '[/g]');return(false)" />
<input type="button" id="italic" name="italic" value="Italic" onClick="javascript:bbcode('[i]', '[/i]');return(false)" />
<input type="button" id="souligné" name="souligné" value="Souligné" onClick="javascript:bbcode('[s]', '[/s]');return(false)" />
<input type="button" id="lien" name="lien" value="Lien" onClick="javascript:bbcode('[url]', '[/url]');return(false)" />
<br /><br />
<img src="images/smileys/heureux.gif" title="heureux" alt="heureux" onClick="javascript:smilies(':D');return(false)" />
<img src="images/smileys/lol.gif" title="lol" alt="lol" onClick="javascript:smilies(':lol:');return(false)" />
<img src="images/smileys/triste.gif" title="triste" alt="triste" onClick="javascript:smilies(':triste:');return(false)" />
<img src="images/smileys/cool.gif" title="cool" alt="cool" onClick="javascript:smilies(':frime:');return(false)" />
<img src="images/smileys/rire.gif" title="rire" alt="rire" onClick="javascript:smilies('XD');return(false)" />
<img src="images/smileys/confus.gif" title="confus" alt="confus" onClick="javascript:smilies(':s');return(false)" />
<img src="images/smileys/choc.gif" title="choc" alt="choc" onClick="javascript:smilies(':O');return(false)" />
<img src="images/smileys/question.gif" title="?" alt="?" onClick="javascript:smilies(':interrogation:');return(false)" />
<img src="images/smileys/exclamation.gif" title="!" alt="!" onClick="javascript:smilies(':exclamation:');return(false)" /></fieldset>
 
<fieldset style="width:96.7%;"><legend>Message</legend>
<textarea cols="73.5" rows="8" id="message" name="message"></textarea>
<label><input type="radio" name="mess" value="Annonce" />Annonce</label>
<label><input type="radio" name="mess" value="Message" checked="checked" />Topic</label>
</fieldset>
<p align="center">
<input type="submit" name="submit" value="Envoyer" />
<input type="reset" name = "Effacer" value = "Effacer" /></p>
</form>
<?php
        break;
         
        //D'autres cas viendront s'ajouter ici par la suite

case "edit": //Si on veut éditer le post
//On récupère la valeur de p
$post = (int) $_GET['p'];
 
//On lance enfin notre requête
 
$requete2 = mysql_query('
SELECT post_createur, post_texte, auth_modo
FROM forum_post
LEFT JOIN forum_forum ON forum_post.post_forum_id = forum_forum.forum_id
WHERE post_id='.$post.'');
$data2 = mysql_fetch_assoc($requete2);
$text_edit = $data2['post_texte'];
//on utilise la fonction créée dans le fichier fonction (pensez à l'inclure)
 
//Ensuite on vérifie que le membre a le droit d'être ici (soit le créateur soit un modo/admin)
 
if (!$_SESSION['login'] )
{
// Si cette condition n'est pas remplie ça va barder :o
echo'<p>Vous n\'avez aucun droit d\'être ici</p></div></body></html>';
exit();
}
else //Sinon ça roule et on affiche la suite
{
//Le formulaire de postage
?>
<form method="post" action="action/postok.php?action=edit&amp;p=<?php echo $post ?>" name="formulaire" style="margin-left:15px;margin-right:10px;">
<fieldset><legend>Mise en forme</legend>
<input type="button" id="gras" name="gras" value="Gras" onClick="javascript:bbcode('[g]', '[/g]');return(false)" />
<input type="button" id="italic" name="italic" value="Italic" onClick="javascript:bbcode('[i]', '[/i]');return(false)" />
<input type="button" id="souligné" name="souligné" value="Souligné" onClick="javascript:bbcode('[s]', '[/s]');return(false)" />
<input type="button" id="lien" name="lien" value="Lien" onClick="javascript:bbcode('[url]', '[/url]');return(false)" />
<br /><br />
<img src="./images/smileys/heureux.gif" title="heureux" alt="heureux" onClick="javascript:smilies(':D');return(false)" />
<img src="./images/smileys/lol.gif" title="lol" alt="lol" onClick="javascript:smilies(':lol:');return(false)" />
<img src="./images/smileys/triste.gif" title="triste" alt="triste" onClick="javascript:smilies(':triste:');return(false)" />
<img src="./images/smileys/cool.gif" title="cool" alt="cool" onClick="javascript:smilies(':frime:');return(false)" />
<img src="./images/smileys/rire.gif" title="rire" alt="rire" onClick="javascript:smilies('XD');return(false)" />
<img src="./images/smileys/confus.gif" title="confus" alt="confus" onClick="javascript:smilies(':s');return(false)" />
<img src="./images/smileys/choc.gif" title="choc" alt="choc" onClick="javascript:smilies(':O');return(false)" />
<img src="./images/smileys/question.gif" title="?" alt="?" onClick="javascript:smilies(':interrogation:');return(false)" />
<img src="./images/smileys/exclamation.gif" title="!" alt="!" onClick="javascript:smilies(':exclamation:');return(false)" /></fieldset>
 
<fieldset><legend>Message</legend><textarea cols="80" rows="8" id="message" name="message">
<?php echo $text_edit  ?>
</textarea></fieldset>
<p>
<input type="submit" name="submit" value="Editer !" />
<input type="reset" name = "Effacer" value = "Effacer"/></p>
</form>
<?php
}
break; //Fin de ce cas :o



        default: //Si jamais c'est aucun de ceux là c'est qu'il y a eu un problème :o
        echo '<p>Cette action est impossible</p>';
    }    //Fin du switch
?>


</div>
</div>
</div>
<?php } ?>
<div id="menuDroite">                
          <?php if(!isset($_SESSION['login'])){?>                
          <div class="title">Se connecter
          </div>                
          <hr style="margin-left:15px;margin-right:10px;" size="1"/>                
          <div class="contentDroite">                    
            <form action="action/authentificationAction.php" method="post">                        
              <table style="width:100%;">                            
                <tr>                                
                  <td style="text-align:left;width:30%;padding-left:15px;">Login:</td>                                
                  <td style="text-align:left;width:70%;">
                    <input type="text" name="login"/></td>                            
                </tr>                            
                <tr>                                
                  <td style="text-align:left;width:30%;padding-left:15px;">Pass:</td>                                
                  <td style="text-align:left;width:70%;">
                    <input type="password" name="pass"/></td>                            
                </tr>                            
                <tr>                                
                  <td style="text-align:left;width:30%;padding-left:15px;">Connexion:</td>                                
                  <td style="text-align:left;width:70%;">
                    <input type="submit" value="Me connecter"/></td>                            
                </tr>                        
              </table>                    
            </form>                
          </div>                
          <?php } else{?>                
          <div class="title">Espace membre
          </div>                
          <hr style="margin-left:15px;margin-right:10px;" size="1"/>                
          <div class="contentDroite">                                      
            <!-- Cas ou l'utilisateur est admin-->                    
            <table style="width:100%;">                        
              <tr>                            
                <td style="padding-left:15px;">
                  <img src="images/icons/cc-kuser-32x32.gif" alt="user"/></td>                            
                <td style="text-align:left;width:90%;">
                  <?php echo $_SESSION['prenom'];echo " (".$_SESSION['role'].")"?></td>                        
              </tr>                        
              <tr>                            
                <td style="text-align:left;width:50%;padding-left:10px;" colspan="2">
                  <a href="action/deconnexionAction.php" style="text-decoration:none;color:#003322;">
                    <img src="images/icons/ti-system-log-out-32x32.gif" title="Se d&eacute;connecter" alt="Se d&eacute;connecter"/></a></td>                        
              </tr>                    
            </table>                                
          </div>                             
          <?php } ?>            
        </div>                     
      </div>
      <div id="basPage">                             
        <div class="content">                
          <p align="center" class="maj">                    
            <a href="planSite.php" class="lienPagination">Plan du site</a> | 
            <a href="mentionslegales.php" class="lienPagination">Mentions l&eacute;gales</a>                                        
          </p>                                 
          <p align="center" style="margin-top:20px;">                    
            <a href="http://validator.w3.org/check?uri=referer">
              <img src="http://www.w3.org/Icons/valid-xhtml10-blue" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>                    
            <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/2.0/fr/">
              <img alt="Creative Commons License" style="border-width:0" src="http://creativecommons.org/images/public/somerights20.png" /></a>                
          </p>            
        </div>        
      </div>
</body>
</html>


