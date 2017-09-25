$(document).ready(function () {
    console.log('Document ready');
});

function test() {
    Enter();
    console.log('fixNavBar');
}
function initpage() {
    $('#footer').css('display','block');
}
function initApp() {
    if($('#zoneNews').html()==''){
        alert('c\'est vide');
    }
    console.log('initApp');
    // $('#footer').css('display','none');
    $('#bg').css('max-height', $(window).height());
    $('#bg').css('max-width', $(window).width());
    console.log('Size Adapt');
    // showAdvise();
    getHours();
}

/*
 *******heures d'ouvertures*****
 */
function getHours() {
    window.console.log("gethours in");

    $.get('nosheures', function (ret) {
        console.log('gethours ajax in');
        determineOuverture(ret);
        console.log(ret);
    });
}

function determineOuverture(ret) {
    $('#ouvertureLabel').empty();
    var tab_jour = new Array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    var today = new Date();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    var row = "";
    for (i = 0; i < ret.length; i++) {
        if (ret[i].day == tab_jour[today.getDay()]) {
            window.console.log('day: ' + ret[i].day +
                ',  heure: ' + time + ', start: ' + ret[i].startTime +
                ', end: ' + ret[i].endTime);
            if (ret[i].startTime == ret[i].endTime) {
                row += 'Nous sommes actuellement <strong>Fermé</strong>';
                window.console.log('jour de fermeture');
            }
            else {
                if (time > ret[i].startTime && time < ret[i].endTime) {
                    row += "Nous sommes actuellement <strong>Ouvert</strong> jusqu'à " + ret[i].endTime;
                    window.console.log('dans les heures');
                }
                else {
                    row += 'Nous sommes actuellement <strong>Fermé</strong>';
                    window.console.log('en dehors des heures');
                }
            }
        }
    }
    $('#ouvertureLabel').append(row);
}

/*
 *******HomePage******
 */


function Enter() {

    //Détermine la hauteur de l'ecran'
    var height = $(window).height() - $('#navBar').height();
    // slide Top de la navBar
    $("#navBar").css("transform", 'translateY(-' + height + 'px)');
    // slide down duBackground apres timeout
    setTimeout('$( "#bg" ).css("transform","translateY(75em)");', 1200);
    //fixe la position des éléments au top.
    $('.navbar-brand').css({
        'margin-bottom': '0em',
        'padding-top': '3em'
    });
    $('.navbar').css('opacity', '1');
    $('#btnEnter').hide();
    $('#footer').css('display','block');
    $('#navbar').removeClass('navbar-fixed-bottom');
    $('#navbar').addClass('navbar-fixed-top');
}

/*
 *****Sandwich*****
 */

function hideSlide() {
    $("#slideAll").css("transform", "translateY(-33em)");
    $("#menuBt").css("transform", "translateY(-22em)");
    $("#zoneProduit").css("transform", "translateY(-20em)");

    setTimeout(function () {
        $('#listProduit').show();
        $('#zoneAdvise').css('top','-19em');
        $('.loader').css('visibility','hidden');
    }, 1700);
}

function listSandwich() {
    window.console.log("listProduit in");
    $('.loader').css('visibility','visible');

    $.get('nossandwiches', function (ret) {
        console.log(ret);
        async:false;
        listSandwichCallBack(ret);
    });
}

function listSandwichCallBack(ret) {
    window.console.log("listSandwichCallBack");

    $('#listProduit').empty();
    $('#listProduit').hide();
    $('#MainSlide').empty();

    hideSlide();

    makeTableSandwich($("#listProduit"), ret);
}


function makeTableSandwich(container, ret) {
    window.console.log("makeTable start");

    var i;
    var cpt;
    var listFamille = ret['lesFamilles'];
    var lesComposants = ret['lesComposants'];
    var listProduit = ret['lesSandwiches'];
// alert(typeof(listFamille));
    var row = "<h1>Nos Sandwiches</h1>" +
        "<table class='table table-condensed'>" +
        '<tr>' +
        '<td style="width: 30%"></td>' +
        '<td style="width: 50%"></td>' +
        '<td class="prixTitre" style="width: 10%;text-decoration: underline">prix 1/3</td>' +
        '<td class="prixTitre" style="width: 10%;text-decoration: underline ">prix 1/2</td>' +
        '</tr>' +
        '</table>';

    for (i = 0; i < listFamille.length; i++) {
        row += "<h3 style='text-decoration: underline'>Les " + listFamille[i].nom + " :</h3>";
        row += "<table class='table table-condensed col-lg-12'>";

        for (cpt = 0; cpt < listProduit.length; cpt++) {
            if (listProduit[cpt].familleSandwiche_id === listFamille[i].id) {
                row += "<tr>" +
                    "<td style='width: 30%'><h4>" + listProduit[cpt].nom + "</h4></td>" +
                    "<td style='width: 50%'><h6>" + lesIngredients(lesComposants[listProduit[cpt].id]) + " </h6></td>" +
                    "<td class='tdPrix' style='width: 10%'><p>" + listProduit[cpt].prixTiers + "€</p></td>" +
                    "<td class='tdPrix' style='width: 10%'><p>" + listProduit[cpt].prixDemi + "€</p></td>" +
                    "</tr>";
            }
        }
        row += "</table>"
    }

    row += "    <button class='btn btn-default pull-right' onclick='downloadFile()'>Télécharger la liste</button>";
    window.console.log("makeTable finish");

    return container.append(row);
}

/*
 ***** les Plats préparés  *****
 */

function listPlatPrepare() {
    window.console.log("listProduit in");
    $('.loader').css('visibility','visible');

    $.get('nosplatsprepare', function (ret) {
        console.log(ret);
        listPlatPrepareCallBack(ret);
    });
}

function listPlatPrepareCallBack(ret) {
    window.console.log("listPlatPrepareCallBack");

    $('#listProduit').empty();
    $('#MainSlide').empty();
    makeTablePlatPrepare($("#listProduit"), ret);
    hideSlide();

    // $('#listProduit').show();
}

function makeTablePlatPrepare(container, ret) {
    window.console.log("makeTable start");

    var i;
    var cpt;
    var listFamille = ret['lesFamilles'];
    var lesUnites = ret['lesUnitesDeVente'];
    var listProduit = ret['lesPlats'];
    listFamille = controleListFamille(listFamille, listProduit);

    var row = "<h1>Aujourd'hui dans nos comptoires</h1>" +
        "<table class='table table-condensed'>" +
        '<tr>' +
        '<td style="width: 30%"><h3></h3></td>' +
        '<td style="width: 50%"><h4></h4></td>' +
        '<td class="prixTitre" style="width: 20%;text-decoration: underline ">Prix</td>' +
        '</tr>' +
        '</table>';

    for (i = 0; i < listFamille.length; i++) {

        row += "<h3 style='text-decoration: underline'>" + listFamille[i].nom + " :</h3>";
        row += "<table class='table table-condensed col-lg-12'>";

        for (cpt = 0; cpt < listProduit.length; cpt++) {
            if (listProduit[cpt].id_famille === listFamille[i].id) {
                row += "<tr>" +
                    "<td style='width: 30%'><h4>" + listProduit[cpt].nom + "</h4></td>" +
                    "<td style='width: 40%'><h6>" + listProduit[cpt].description + "</h6></td>" +
                    "<td  style='width: 20%'><div ><p class='tdPrix' style='display: inline-block'>" + listProduit[cpt].prix + "€</p><p  style='display: inline-block'>/" + lUnites(lesUnites, listProduit[cpt].id_uniteVente) + "</p></div></td>" +
                    "</tr>";
            }
        }
        row += "</table>"
    }

    row += "    <button class='btn btn-default pull-right' onclick='downloadFile()'>Télécharger la liste</button>";
    window.console.log("makeTable finish");

    return container.append(row);
}

/*
******************* les Buffets **************************
 */

function listBuffet() {
    window.console.log("listProduit in");
    $('.loader').css('visibility','visible');

    $.get('nosBuffets', function (ret) {
        console.log(ret);
        listBuffetCallBack(ret);
    });
}

function listBuffetCallBack(ret) {
    window.console.log("listBuffetCallBack");

    $('#listProduit').empty();
    $('#MainSlide').empty();
    makeTableBuffet($("#listProduit"), ret);
    hideSlide();

    // $('#listProduit').show();
}

function makeTableBuffet(container, ret) {
    window.console.log("makeTable start");
    var row="<h2>Nos Buffets</h2>";
    var lesBuffets = ret['buffet'];
    var laSession = ret['lesImages'];
    console.log(lesBuffets);
    for(i=0;i<lesBuffets.length;i++)
    {
        var roleNom = lesBuffets[i].nom;
        var titreImage = roleNom + "Image";
        var nomDuRole = titreImage.replace(/\s/g, '');
        // var nomImage= "buffet_poisson.jpg";
        var nomImage= laSession[nomDuRole];
        window.console.log("makeTableBuffet image =" + nomImage);
        // alert(image);
        var image='"image/'+nomImage+'"';
        row+='<div class="col-lg-4 buffetCard">'+
                '<div class="card">'+
                    '<img class="card-img-top" src='+image+'  alt="Card image cap">'+
                    '<div class="card-block">'+
                        '<div class="card-text">'+
                            '<table>'+
                                '<tr><h1>'+lesBuffets[i].nom +' </h1></tr>'+
                                '<tr><p>'+lesBuffets[i].description+'</p></tr>'+
                                '<tr><h3 class="pull-right">'+lesBuffets[i].prix+'/Personne</h3></tr>'+
                            '</table>'+
                    ' </div>'+
                '</div>'+
            '</div>'+
            '</div>';
    }
    row += "    <button class='btn btn-default pull-right' onclick='downloadFile()'>Télécharger la liste</button>";

    row+=   '<div class="col-lg-12"><div class="alert alert-warning">'+
            '<strong>Attention!</strong> la composition et le prix des buffets sont donnés à titre indicatif.'+
            'Merci de nous contater pour obtenir un devis personnifié'+
            '</div>'+
            '</div>';
    window.console.log("makeTable finish");

    return container.append(row);
}


/*
 ***** les Ingrédients *****
 */
function lesIngredients(list) {
    var retVal = "";
    for (i = 0; i < list.length; i++) {
        if (i != list.length - 1)
            retVal += list[i].nom + ",";
        else
            retVal += list[i].nom + ".";
    }
    return retVal;
}

/*
 ***** les Unités de Vente  *****
 */

function lUnites(lesUnites, id) {
    var retVal = "";

    for (i = 0; i < lesUnites.length; i++) {
        if (i == id - 1) {
            retVal = lesUnites[i].nom;
        }
    }

    return retVal
}

/*
 ******contrôle listeFamille******
 */

function controleListFamille(listFamille, listProduit) {

    // var retVal=[];
    for (i = 0; i < listFamille.length; i++) {
        cpt = 0
        for (j = 0; j < listProduit.length; j++) {
            if (listProduit[j].id_famille == listFamille[i].id) {
                cpt++
            }
        }
        if (cpt = 0) {
            listFamille.delete(listFamille[i]);
        }
    }
    return listFamille;
}

/*
**********Divers*************
 */

// function resetAffichage() {
//     $( "#zoneProduit" ).css("transform","translateY(39em)");
//     setTimeout('    $( "#menuBt" ).css("transform","translateX(-7em)");',1000);
//     setTimeout("$('#listProduit').hide();",1000);
// }

function downloadFile() {
    var doc = new jsPDF();
    doc.fromHtml($('#listProduit').get(0),20,30,{
        width:500});
    doc.save('a4.pdf')
}

function showAdvise(){
    window.console.log('showAdvise');
    $.get('adviseList', function (ret) {
        console.log(ret);
        fillZoneAdvise(ret);
    });
}

function fillZoneAdvise(ret) {
    $('#zoneAdvise').empty();

    var listAdvise=ret['lesAvis'];
    var row = "<h2>C'est vous qui le dites...</h2>";
    for(i=0;i<listAdvise.length;i++ )
    {
        var identifiantRating= "#"+listAdvise[i].id ;
        row+= '<div class="col-lg-4 adviseCard" > ' +
     '<div class="card">' +
        '<div class="card-block">' +
         '<div class="card-text textBlock" >' +
                '<div class="headCard"><h3>' + listAdvise[i].userName +' </h3> de <h4>'+listAdvise[i].localite+'</h4> '+
                '<input id="' + listAdvise[i].id +'" value="' + listAdvise[i].note +'" class="rating"   data-size="xs" ></div><hr>'+   //The Star Rating input (DisplayOnly)
                '<div><p>' + listAdvise[i].message + '</p></div>' +
        ' </div>' +
        '</div>' +
        '</div>' +
     '</div>';
    }
    console.log('showAdise finish');
    $("#zoneAdvise").append(row);
}


    setInterval(function(){
       showAdvise();
    },10000);
