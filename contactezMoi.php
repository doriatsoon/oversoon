<?php
//on démarre la session
session_name('admin');
@session_start();

//s'il y a un message pour l'utilisateur on l'affiche
if (isset($_SESSION['messageUser'])) {
    $messageUser = $_SESSION['messageUser'];
    unset($_SESSION['messageUser']);
} else {
    $messageUser = "";
}

//récupération de l'id du membre
if (isset($_SESSION['id'])) {
    $idMembre = $_SESSION['id'];
}
?>

<div class="title">Contactez-moi</div>
<hr style="margin-left:15px;margin-right:10px;" size="1" />
<div id="contentInscription">
    <form action="action/contactezMoiAction.php" method="post" name="formulaire" onsubmit="return confirmeFormulaire();" >
        <fieldset>
            <legend>Compte</legend>
            <p>
                <label for="form_login">Identifiant:</label>
                <input type="text" id="form_login" name="login" class="form" />
            </p>
            <p>
                <label for="form_mail">Adresse email:</label>
                <input type="text" id="form_mail" name="mail" class="form" />
            </p>
        </fieldset>
        <fieldset>
            <legend>Message</legend>
            <p>
                <label for="form_titre">Titre du message:</label>
                <input type="text" id="form_titre" name="titre" class="form" />
            </p>
            <p>
                <label for="form_message">Message:</label>
                <textarea  id="form_message" name="message" class="form" rows="" cols=""></textarea>
            </p>
        </fieldset>
        <p style="text-align:right">
            <input type="submit" name="submit" class="submit" value="Soumettre" />
            <input type="reset" name="reset" class="reset" />
        </p>
    </form>
</div>
