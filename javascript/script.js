$(document).ready(function() {
    page.init();
    popin.init();
});


function pageload(hash) {
    //if hash value exists, run the ajax
    if (hash) {
        getPage();
    }
}

function getPage() {
    //generate the parameter for the php script
    var data = 'page=' + document.location.hash.replace(/^.*#/, '');
    $.ajax({
        url: "loader.php",
        type: "GET",
        data: data,
        cache: false,
        success: function(file) {
            $.ajax({
                url: file,
                type: "GET",
                cache: false,
                success: function(html) {
                    popin.close();
                    //hide the progress bar
                    $('#loading').hide();

                    //add the content retrieved from ajax and put it in the #content div
                    $('#center').html(html);

                    //display the body with fadeIn transition
                    $('#center').fadeIn('slow');
                }
            });
        }
    });
}

page = {
    init: function() {
        //Check if url hash value exists (for bookmark)
        $.history.init(pageload);

        //highlight the selected link
        $('a[href=' + document.location.hash + ']').addClass('selected');

        //Seearch for link with REL set to ajax
        $('a[rel=ajax]').click(function() {

            //grab the full url
            var hash = this.href;

            //remove the # value
            hash = hash.replace(/^.*#/, '');

            //for back button
            $.history.load(hash);

            //clear the selected class and add the class class to the selected link
            $('a[rel=ajax]').removeClass('selected');
            $(this).addClass('selected');

            $("#popin").fadeOut(500, function() {
                $("#popin").remove();
            })

            //hide the content and show the progress bar
            $('#center').hide();
            $('#loading').show();

            //run the ajax
            page.getPage();


            //cancel the anchor tag behaviour
            return false;
        });
    }

}

popin = {
    init: function() {
        popin.opacite = 0.7;
        popin.duree = 1000;
        $("a.popin").click(function() {
            popin.open();
            return false;
        });

        $("a#connect_in_menu").click(function() {
            popin.open();
            return false;
        });

        $(window).resize(popin.redim);
    },
    open: function() {
        $("body").append("<div id=\"popin\"><div id=\"popin_aplat\"></div><div id=\"popin_loader\"></div><div id=\"popin_conteneur\"><div id=\"popin_relative\"><div id=\"popin_close\"></div><div id=\"popin_contenu\"><form action=\"action/authentificationAction.php?page=" + document.location.hash.replace('#', '') + "\" method=\"post\"><table id=\"table_connect\" style=\"width:450px;padding:90px;\"><tr><td style=\"text-align:left;width:30%;padding-left:15px;\">Login:</td><td style=\"text-align:left;width:70%;\"><input type=\"text\" name=\"login\"/></td></tr><tr><td style=\"text-align:left;width:30%;padding-left:15px;\">Pass:</td><td style=\"text-align:left;width:70%;\"><input type=\"password\" name=\"pass\"/></td></tr><tr><td style=\"text-align:left;width:30%;padding-left:15px;\">Connexion:</td><td style=\"text-align:left;width:50%;\"><input type=\"submit\" value=\"Me connecter\"/></td></tr><tr><td style=\"text-align:left;width:50%;\"><a href=\"#inscription\" rel=\"ajax\" style=\"text-decoration:none;color:#003322;\">Inscription</a></td><td><a href=\"#mdpforget\" rel=\"ajax\" style=\"text-decoration:none;color:#003322;\">Mot de passe oubli&eacute;</a></td></tr></table></form></div></div></div></div>");
        $("#popin_conteneur").hide();
        $("#popin_loader").hide().fadeIn();
        $("#popin_aplat").css('opacity', 0).fadeTo(500, popin.opacite);
        $("#popin_close").click(popin.close);
        $("#popin_aplat").click(popin.close);
        popin.anim();
    },
    anim: function() {
        $("#popin_conteneur").show();
        popin.largeur = $("#popin_contenu").width();
        popin.hauteur = $("#popin_contenu").height();
        popin.redim();

        $("#popin_loader").fadeOut();
        $("#popin_contenu #table_connect").hide();
        $("#popin_contenu").animate({width: popin.largeur}, popin.duree / 2).animate({height: popin.hauteur}, popin.duree / 2, "easeOutQuad", function() {
            $("#popin_close").fadeIn();
            $("#popin_contenu #table_connect").fadeIn();
        });

    },
    redim: function() {
        $("#popin_conteneur").css("left", (popin.windowW() - popin.largeur) / 2 + "px");
        $("#popin_conteneur").css("top", (popin.windowH() - popin.hauteur) / 2 + "px");
    },
    close: function() {
        $("#popin").fadeOut(500, function() {
            $("#popin").remove();
        })
    },
    windowH: function() {
        if (window.innerHeight)
            return window.innerHeight;
        else {
            return $(window).height();
        }
    },
    windowW: function() {
        if (window.innerWidth)
            return window.innerWidth;
        else {
            return $(window).width();
        }
    }
}

// Permet de changer la couleur des lignes du listing films
function changeColor(ligne) {
    ligne.style.backgroundColor = '#FFE9D2';
}

function colorDefault(ligne, etat) {
    if (etat === 'pair') {
        ligne.style.background = '#D2D2FF';
    } else {
        ligne.style.background = 'transparent';
    }
}