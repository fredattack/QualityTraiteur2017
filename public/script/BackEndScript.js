/**
 * Created by fred on 29-08-17.
 */

$.ajaxSetup({
    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});

function upDateProduct(res){
   console.log("upDateProduct");
    var token= "<?php echo csrf_token(); ?>";
    var myJsonData = {id: res}
     $.ajax({
        url: 'publierPlat',
        type: 'GET',
        data: {  id: res },
         dataType:'html',
        success: function(response)
        {
           console.log('updateProduct ok' + response );

        },
         error: function (xhr, b, c) {
             console.log("xhr=" + xhr + " b=" + b + " c=" + c);
         }
    });

}

function upDatePhoto(idRole,idPhoto){
    console.log("upDatePhoto");
    idRole=idRole['value'];
    $.ajax({
        url: 'publierRole',
        type: 'GET',
        data: {  id: idPhoto, role:idRole },
        dataType:'html',
        success: function(response)
        {
            console.log('upDatePhoto ok id:' + response );

        },
        error: function (xhr, b, c) {
            console.log("xhr=" + xhr + " b=" + b + " c=" + c);
        }
    });
}

function addSlide(val) {
// alert(val);
    console.log("add slide");
    var token= "<?php echo csrf_token(); ?>";
    $.ajax({
        url: 'addSlide',
        type: 'GET',
         data: {  val: val },
        dataType:'html',
        success: function(response)
        {

            console.log('add slide' + response );
            location.reload();

        },
        error: function (xhr, b, c) {
            console.log("xhr=" + xhr + " b=" + b + " c=" + c);
        }
    });
}

function addGallery(val) {
// alert(val);
    console.log("addGallery");
    var token= "<?php echo csrf_token(); ?>";
    $.ajax({
        url: 'addGallerie',
        type: 'GET',
        data: {  val: val },
        dataType:'html',
        success: function(response)
        {

            console.log('addGallery ' + response );
            location.reload();

        },
        error: function (xhr, b, c) {
            console.log("xhr=" + xhr + " b=" + b + " c=" + c);
        }
    });
}
