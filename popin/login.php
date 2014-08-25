<div id="authentification" class="reveal-modal small center" data-reveal>
    <h2>Connectez-vous</h2>
    <form action="action/authentificationAction.php?page=accueil" method="post">
        <div class="row">
          <div class="large-6 columns">
              <input type="text" placeholder="Login" name="login" />
          </div>
            <div class="large-6 columns">
              <input type="password" placeholder="Password" name="pass"/>
          </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
                <input type="submit" class="button" value="Me connecter"/>
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
                <a href="" data-reveal-id="forgotten-password" class="secondary">Mot de passe oublié ?</a>
            </div>
        </div>
    </form>
    <a class="close-reveal-modal">&#215;</a>
</div>


<div id="forgotten-password" class="reveal-modal small center" data-reveal>
    <h2>Mot de passe oublié</h2>
    <form action="action/passwordForgetAction.php" method="post">
        <div class="row">
            <div class="large-12 columns">
              <input type="email" placeholder="Email" name="mail"/>
          </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
                <input type="submit" class="button" value="Envoyer"/>
            </div>
        </div>
    </form>
    <a class="close-reveal-modal">&#215;</a>
</div>