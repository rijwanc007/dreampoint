$(document).on('click','.wishlist_cart',function(){
    let pid = $(this).data('id');
    $.ajax({
        url : '/wishlist/' + pid,
        method: 'GET',
        success: function (data){
            $('#header').load(location.href+' #header');
            if(data == 'yes'){
                toastr.success('your wishlist added successfully');
            }
            else{
                toastr.success('your wishlist removed successfully');
            }
        }
    })
});
