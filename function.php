<?php

function connexion() {
    mysql_connect ($_SERVER["SERVER_NAME"],"root","");
    mysql_select_db("oversoon");
}

function check_login($login) {
    $requete = mysql_query("select role from membres where login = \"$login\"");
    $nombre_ligne = mysql_num_rows($requete);
    return $nombre_ligne;
}

function code($texte) {
//Smileys
    $texte = str_replace(':D ', '<img src="/images/smileys/heureux.gif" title="heureux" alt="heureux" />', $texte);
    $texte = str_replace(':lol: ', '<img src="/images/smileys/lol.gif" title="lol" alt="lol" />', $texte);
    $texte = str_replace(':triste:', '<img src="/images/smileys/triste.gif" title="triste" alt="triste" />', $texte);
    $texte = str_replace(':frime:', '<img src="/images/smileys/cool.gif" title="cool" alt="cool" />', $texte);
    $texte = str_replace(':rire:', '<img src="/images/smileys/rire.gif" title="rire" alt="rire" />', $texte);
    $texte = str_replace(':s', '<img src="/images/smileys/confus.gif" title="confus" alt="confus" />', $texte);
    $texte = str_replace(':O', '<img src="/images/smileys/choc.gif" title="choc" alt="choc" />', $texte);
    $texte = str_replace(':question:', '<img src="/images/smileys/question.gif" title="?" alt="?" />', $texte);
    $texte = str_replace(':exclamation:', '<img src="/images/smileys/exclamation.gif" title="!" alt="!" />', $texte);

    //Mise en forme du texte
    //gras
    $texte = preg_replace('`\[g\](.+)\[/g\]`isU', '<strong>$1</strong>', $texte);
    //italique
    $texte = preg_replace('`\[i\](.+)\[/i\]`isU', '<em>$1</em>', $texte);
    //soulign�
    $texte = preg_replace('`\[s\](.+)\[/s\]`isU', '<u>$1</u>', $texte);
    //lien
    $texte = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $texte);
    //etc., etc.

    //On retourne la variable texte
    return $texte;
}

function deconnexion(){
    mysql_close();
}

function pluriel($chaine,$nombreDonnees){

    if($nombreDonnees > 1){
        $chaine = $chaine."s";
    }
    return $chaine;
}
?>
