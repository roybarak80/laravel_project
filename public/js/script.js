$( document ).ready(function() {

    $('.add-to-cart').on('click',function(){
console.log(CURRENT_URL+"/add-to-cart");

        $.ajax({
            url:BASE_URL+"shop/add-to-cart",
            type:"GET",
            dataType: "html",
            data:{id:$(this).data('id')},
            success:function(response){
             ///   location.reload();


            }

        });

    });
});