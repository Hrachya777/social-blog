$(document).ready(function(){

    $(".glyphicon-star").on("click",function(){
        var rating_val = $(".caption").children().text();
        var token = $('.rate_hidden').attr('content');
        var page_id = $('.rate_hidden').attr('data-pageid');
        var category_id = $('.rate_hidden').attr('data-categoryid');
        if(token && page_id && category_id){
            $.ajax({
                url: '/user/rating',
                type: 'post',
                data:{_token:token,rating:rating_val,page_id:page_id,category_id:category_id},
                success: function(data)
                {
                    if(data.status == 'true'){
                        $('.rating').hide('1000');
                        
                    }else{
                        alert("error")
                    }
                }
            });
        }else {
            $("#myModal").modal();
        }
    });


})