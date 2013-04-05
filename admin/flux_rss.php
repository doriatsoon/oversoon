<?php
function &init_news_rss(&$xml_file)
{
        $root = $xml_file->create_element("rss"); //création de l'element
        $root->set_attribute("version", "2.0"); //on lui ajoute un attribut
        $root = $xml_file->append_child($root); //on l'insère dans le noeud parent (ici root qui est "rss")
       
        $channel = $xml_file->create_element("channel");
        $channel = $root->append_child($channel);
               
        $desc = $xml_file->create_element("description");
        $desc = $channel->append_child($desc);
        $text_desc = $xml_file->create_text_node("Partage de connaissances en tout genre"); //on insère du texte entre les balies <description></description>
        $text_desc = $desc->append_child($text_desc);
       
        $link = $xml_file->create_element("link");
        $link = $channel->append_child($link);
        $text_link = $xml_file->create_text_node("http://www.bougiemind.info");
        $text_link = $link->append_child($text_link);
       
        $title = $xml_file->create_element("title");
        $title = $channel->append_child($title);
        $text_title = $xml_file->create_text_node("Bougie'S mind");
        $text_title = $title->append_child($text_title);
       
        return $channel;
}
 
function add_news_node(&$parent, $root, $titre, $acteur, $annee)
{
        $item = $parent->create_element("item");
        $item = $root->append_child($item);
       
        $title = $parent->create_element("title");
        $title = $item->append_child($title);
        $text_title = $parent->create_text_node($titre);
        $text_title = $title->append_child($text_title);
       
       
        $author = $parent->create_element("author");
        $author = $item->append_child($author);
        $text_author = $parent->create_text_node($acteur);
        $text_author = $author->append_child($text_author);
       
}
 
function rebuild_rss()
{
        //On se connecte à la BDD
        mysql_connect("oversoon.sql.free.fr", "oversoon", "leibniz");
        mysql_select_db("oversoon");
 
        //On récupère les news
        $nws = mysql_query("SELECT titre, acteur, annee FROM film ORDER BY titre DESC LIMIT 0 OFFSET 10");
 
        //On crée le fichier XML
        $xml_file = domxml_new_doc("1.0");
 
        //On initialise le fichier XML pour le flux RSS
        $channel = init_news_rss($xml_file);
 
        //On ajoute chaque news au fichier RSS
        while($news = mysql_fetch_assoc($nws))
        {
                echo $news['titre'];
                add_news_node($xml_file, $channel, $news['titre'], $news['acteur'], $news['annee']);
        }
       
        //On écrit le fichier
        $xml_file->dump_file("news_FR_flux.xml");
}
?>
