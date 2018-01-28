$( document ).ready(function() {

    $('.add-to-cart').on('click',function(){
        var id =$(this).data('id');
       // console.log(URL);
        $.ajax({
            url:URL+"/shop/add-to-cart",
            type:"GET",
            dataType: "html",
            data:{id:$(this).data('id')},
            success:function(response){
              //  location.reload();
console.log(response);

            }

        });
    })
});