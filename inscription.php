<?php
session_name('admin');
@session_start();
?>
<div class="title">Inscription</div>
<hr style="margin-left:15px;margin-right:10px;" size="1"/>
<div id="contentInscription">
    <form action="action/inscriptionAction.php" method="post" name="formulaire" onsubmit="return confirmeFormulaire();" >
        <fieldset>
            <legend>Informations personnelles</legend>
            <p>
                <label for="form_nom">Nom:</label>
                <input type="text" id="form_nom" name="nom" class="form"/>
            </p>
            <p>
                <label for="form_prenom">Pr&eacute;nom:</label>
                <input type="text" id="form_prenom" name="prenom" class="form"/>
            </p>
            <p>
                <label for="form_gender">Sexe:</label>
                <select id="form_gender" name="gender" class="select"><option value="H">Homme</option><option value="F">Femme</option></select>
            </p>
            <p>
                <label for="form_day">Date de naissance:</label>
                <input type="text" id="form_day" name="day" class="birthday" maxlength="2"/> /<input type="text" name="month" class="birthday" maxlength="2" id="form_month"/> /<input type="text" name="year" class="year" maxlength="4" id="form_year"/>
            </p>
        </fieldset>
        <fieldset>
            <legend>Compte</legend>
            <p>
                <label for="form_login">Identifiant:</label>
                <input type="text" id="form_login" name="login" class="form"/>
            </p>
            <p>
                <label for="form_password">Mot de passe:</label>
                <input type="password" id="form_password" name="password" class="form"/>
            </p>
            <p>
                <label for="form_password2">Confirmer le mot de passe:</label>
                <input type="password" id="form_password2" name="password2" class="form"/>
            </p>
            <p>
                <label for="form_mail">Adresse email:</label>
                <input type="text" id="form_mail" name="mail" class="form"/>
            </p>
        </fieldset>
        <fieldset>
            <legend>Forum</legend>
            <p>
                <label for="form_signature">Signature:</label>
                <input type="text" id="form_signature" name="signature" class="form"/>
            </p>
            <p>
                <label for="form_avatar">Avatar:</label>
                <input type="text" id="form_avatar" name="avatar" class="form"/>
            </p>
        </fieldset> 

        <p style="text-align:right">
            <input type="submit" name="submit" class="submit" value="Soumettre" />
            <input type="reset" name="reset" class="reset"/>
        </p>
    </form>
</div>


