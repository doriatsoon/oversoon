$(document).ready(function() {
    page.init();
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
                    page.show(html);
                }
            });
        }
    });
}

form = {
    init: function() {
        $("#submitModifyProfil").click(function() {
            $.ajax({
                url: "action/modifierProfilAction.php",
                type: "POST",
                error: function(html) {
                    alert(html);
                },
                success: function(html) {
                    $("#modifyProfilForm").hide();
                    $('#modifyProfilForm').html(html);
                    $('#modifyProfilForm').fadeIn('slow');
                }
            });
        });
    }
};

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
            });

            //hide the content and show the progress bar
            $('#center').hide();
            $('#loading').show();

            //run the ajax
            getPage();


            //cancel the anchor tag behaviour
            return false;
        });
    },
    show: function(html) {
        //popin.close();
        //hide the progress bar
        $('#loading').hide();

        //add the content retrieved from ajax and put it in the #content div
        $('#center').hide();
        $('#center').html(html);

        if ($("#submitModifyProfil")) {
            form.init();
        }

        //display the body with fadeIn transition
        $('#center').fadeIn('slow');
    }
};

// Permet de changer la couleur des lignes du listing films
function changeColor(ligne) {
    ligne.style.backgroundColor = '#FFE9D2';
}

function colorDefault(ligne, etat) {
    if (etat === 'pair') {
        ligne.style.background = '#E6E9ED';
    } else {
        ligne.style.background = 'transparent';
    }
}