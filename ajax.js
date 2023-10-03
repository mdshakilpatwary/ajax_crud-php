jQuery(document).ready(function(){


jQuery(document).on("click",".save",function(){
   
    let name = jQuery('.name').val();
    let phone = jQuery('.phone').val();
    let email = jQuery('.email').val();
    let status= jQuery('.status').val();
    if(name === ""){
        jQuery('.name').addClass('is-invalid');
    }
    else if(phone === ""){
        jQuery('.phone').addClass('is-invalid');
    }
    else if(email === ""){
        jQuery('.email').addClass('is-invalid');
    }
    else if(status === ""){
        jQuery('.status').addClass('is-invalid');
    }
    else{
        jQuery('.name').addClass('is-valid');
        jQuery('.phone').addClass('is-valid');
        jQuery('.email').addClass('is-valid');
        jQuery('.status').addClass('is-valid');
    }
    jQuery.ajax({
        url:'function.php',
        type:'GET',
        data:{
            'name':name,
            'phone':phone,
            'email':email,
            'status':status,
            'call':'insert'
        },
        success: function(pro){
            jQuery('.message').html(pro);
        }
    });
});
    show();
function show(){
 jQuery.ajax({
    url:'function.php',
    type:'GET',
    data:{
        'call':'show'
    },
    success: function(pro){

        jQuery('.myTable').html(pro);
    }
 })

}
jQuery(document).on("click","#activeid",function(){
    
    alert("okay");
});
jQuery(document).on("click",".inactiveid",function(){
    
    alert("okay");
});

});