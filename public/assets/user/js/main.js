$(document).ready(function () {
    $('.search_all').keypress(function(e){
        if(e.keyCode == 13)
        {
            $('#search_all').submit();
        }
    })


    $('.comment_btn').click(function(){
		$(this).prop('disabled',true)
    	var comment = $(this).prev().val();
		var category_id = $('.params_comment').attr('data-category');
		var page_id = $('.params_comment').attr('data-page');
		var user_id = $('.params_comment').attr('data-user');
		var token = $('.params_comment').attr('content');
		if(user_id == ""){
			$("#myModal").modal();
		}else{
			if (comment == "") {
				$('.comment_area').addClass('red');
			}else{
				$('.comment_area').removeClass('red');
				$.ajax({
					url: '/user/comment',
					type: 'post',
					data:{_token:token,category_id:category_id,page_id:page_id,user_id:user_id,comment:comment},
					success: function(data)
					{
						location.reload();
					}
				});

			}
		}

    })

})