 <HTML>
<HEAD>
<TITLE> Voici une page contenant du Javascript</TITLE>
<SCRIPT language="JavaScript">
<!--

Normal1 = new Image();
Normal1.src = "bouton1.gif";     /* premier graphique standard  */
Highlight1 = new Image();
Highlight1.src = "bouton1h.gif";
function alerte(){
alert("Voici un message d'alerte!");
}
function affiche(){
window.document.test.champ_text.value = 'Le javascript fonctionne';
}
function test2(){
x = window.document.test.adresse.value;
var t = x.indexOf('@');
var tt = x.indexOf('.');
if (t == -1){
alert("Veuillez entrer une adresse mail correcte!");
}
else if (tt == -1)
{
alert("Veuillez entrer une adresse mail correcte!");
}
else {
alert("Votre adresse est correcte");
}
}
function change(){
x = window.document.test.coco.value;
var ch = x.toString().toUpperCase();
window.document.test.write(ch.big());
window.document.test.coco.value = ch;
}
function reboot(){
window.document.test.coco.value = 'Cliquer';
}
function change_image(image_no,objet_image) {
 window.document.images[image_no].src = objet_image.src;
}
// -->
</SCRIPT>
</HEAD>

<BODY>
<form name="test">
<input type="button" onClick="javascript:alerte();" value="Alerte" id="toto"/>
<br/>
<input type="text" size="24" value="Essai du javascript" name="champ_text"/>
<input type="submit" onClick="javascript:affiche();" value=" Envoyer"/>
<input type="text" name="adresse" />
<input type="button" onClick="javascript:test2();" value="Email"/>
<input type="button" name="coco" onMouseOver="javascript:change()" value="Cliquer" onMouseOut="javascript:reboot()"/>
<a href="index.htm"
   onMouseOver="change_image(0,Highlight1)"
   onMouseOut="change_image(0,Normal1)"><img src="bouton1.gif"
   width="130" height="30" border="0" alt="accueil"></a><br>

</form>
<br/>

</BODY>
</HTML>