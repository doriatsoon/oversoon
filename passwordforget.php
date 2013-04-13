<?php
//on démarre la session
session_name('admin');
@session_start();

?>
<div class="title">Mot de passe oubli&eacute;</div>
<hr style="margin-left:15px;margin-right:10px;" size="1"/>
<div id="contentInscription">
    <form action="action/passwordForgetAction.php" method="post" name="formulaire" onsubmit="return confirmeFormulairePassword();" >
        <fieldset>
            <legend>Compte</legend>
            <p>
                <label for="form_login">Identifiant:</label>
                <input type="text" id="form_login" name="login" class="form"/>
            </p>
            <p>
                <label for="form_mail">Adresse email:</label>
                <input type="text" id="form_mail" name="mail" class="form"/>
            </p>
        </fieldset>
        <p style="text-align:right">
            <input type="submit" name="submit" class="submit" value="Soumettre" />
            <input type="reset" name="reset" class="reset"/>
        </p>
    </form>
</div>

