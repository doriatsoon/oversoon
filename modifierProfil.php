<?php
//on démarre la session
session_name('admin');
@session_start();
include 'function.php';

//s'il y a un message pour l'utilisateur on l'affiche
if (isset($_SESSION['messageUser'])) {
    $messageUser = $_SESSION['messageUser'];
    unset($_SESSION['messageUser']);
} else {
    $messageUser = "";
}

//récupération de l'id du user--------------------------------------------------
$id = $_SESSION['id'];

//connexion à la base-----------------------------------------------------------
connexion();

//on va chercher les informations concernant le user----------------------------
$sql = "select id,nom,prenom,login,birthday,role,activation,email,genre,inscription from membres where id = \"$id\"";
$query = mysql_query($sql);
$row = mysql_fetch_assoc($query);

//récupérationd des informations concernant le user dans le forum---------------
$sqlForum = "select membre_signature,membre_avatar from forum_membres where membre_pseudo = '" . $row['login'] . "'";
$queryForum = mysql_query($sqlForum);
$rowForum = mysql_fetch_assoc($queryForum);

//on récupère la date de naissance: jour,mois,annee
if($row['birthday'] != null) {
    $explodeString = explode("/", $row['birthday']);
    $jour = $explodeString[0];
    $mois = $explodeString[1];
    $annee = $explodeString[2];
}
?>

<div class="title">Modifier votre profil</div>
<hr style="margin-left:15px;margin-right:10px;" size="1"/>
<div id="contentInscription">
    <form id="modifyProfilForm">
        <fieldset>
            <legend>Informations personnelles</legend>
            <p>
                <label for="form_nom">Nom:</label>
                <input type="text" id="form_nom" name="nom" class="form" value="<?php echo $row['nom']; ?>"/>
            </p>
            <p>
                <label for="form_prenom">Pr&eacute;nom:</label>
                <input type="text" id="form_prenom" name="prenom" class="form" value="<?php echo $row['prenom']; ?>"/>
            </p>
            <p>
                <label for="form_gender">Sexe:</label>
                <select id="form_gender" name="gender" class="select">
                    <option <?php if ($row['genre'] == "H") echo "selected=\"selected\""; ?> value="H">Homme</option>
                    <option <?php if ($row['genre'] == "F") echo "selected=\"selected\""; ?> value="F">Femme</option>
                </select>
            </p>
            <p>
                <label for="form_day">Date de naissance:</label>
                <input type="text" id="form_day" name="day" class="birthday" maxlength="2" value="<?php echo $jour; ?>"/> /<input type="text" name="month" class="birthday" maxlength="2" id="form_month" value="<?php echo $mois; ?>"/> /<input type="text" name="year" class="year" maxlength="4" id="form_year" value="<?php echo $annee; ?>"/>
            </p>
        </fieldset>
        <fieldset>
            <legend>Compte</legend>
            <p>
                <label for="form_login">Identifiant:</label>
                <input type="text" id="form_login" name="login" class="form" value="<?php echo $row['login']; ?>"/>
            </p>
            <p>
                <label for="form_mail">Adresse email:</label>
                <input type="text" id="form_mail" name="mail" class="form" value="<?php echo $row['email']; ?>"/>
            </p>                                                        
        </fieldset>
        <fieldset>
            <legend>Forum</legend>
            <p>
                <label for="form_signature">Signature:</label>
                <input type="text" id="form_signature" name="signature" class="form" value="<?php echo $rowForum['membre_signature']; ?>"/>
            </p>
            <p>
                <label for="form_avatar">Avatar:</label>
                <input type="text" id="form_avatar" name="avatar" class="form" value="<?php echo $rowForum['membre_avatar']; ?>"/>
            </p>
        </fieldset>
        <p style="text-align:right">
            <input type="button" name="submit" class="submit" id="submitModifyProfil" value="Soumettre" />
            <input type="reset" name="reset" class="reset"/>
        </p>
    </form>
</div>
