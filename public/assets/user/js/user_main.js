$(document).ready(function(){

	//===========================echo
	// Echo.channel('chat-room.1')
	// 	.listen('ChatMessageWasReceived', (e) => {
	// 	    //console.log(e.user, e.chatMessage);
		    
	// 	    $('.number').html(e.chatMessage.message)
	// 	});
	//========================end echo

   

	$('.youtube_autoplay').click(function(){
		var check = $(this).attr('checked');
		var token = $(this).attr('content');
		var id = $('.video_url').val();
		var url = $('.edit_youtube').attr('src');
		var auto = $(this).attr('data-src');
		
		if (check){
			$(this).attr('checked',false);

			var autoplay_string = '?autoplay=1';
			var final_url = url.replace('?autoplay=1','');
			var numb = '0';

			$.ajax({
	            url: '/ab-admin/youtube-autoplay',
	            type: 'post',
				data:{_token:token,video:final_url,id:id,autoplay:numb},
	            success: function(data)
	            {   
	            	$('.edit_youtube').attr('src',data.video);
	            }
	        });
		}else{
			$(this).attr('checked','checked');
			//$(this).attr('disabled', true)
			var final_url = url+auto;
			var numb = '1';

			$.ajax({
	            url: '/ab-admin/youtube-autoplay',
	            type: 'post',
				data:{_token:token,video:final_url,id:id,autoplay:numb},
	            success: function(data)
	            {   
	            	$('.edit_youtube').attr('src',data.video);
	            }
	        });
		}
	})

	$('.show_info').click(function(){
		var check = $(this).attr('checked');
		var token = $(this).attr('content');
		var id = $('.video_url').val();
		var url = $('.edit_youtube').attr('src');
		var auto = $(this).attr('data-src');

		if (check) {
			$(this).attr('checked',false);
			var autoplay_string = '?&showinfo=0&';
			var final_url = url.replace('?&showinfo=0&','');
			var numb = '0';

			$.ajax({
	            url: '/ab-admin/youtube-autoplay',
	            type: 'post',
				data:{_token:token,video:final_url,id:id,info:numb},
	            success: function(data)
	            {   
	            	$('.edit_youtube').attr('src',data.video) 
	            }
	        });
		}else{
			$(this).attr('checked','checked');
			var final_url = url+auto;
			var numb = '1';

			$.ajax({
	            url: '/ab-admin/youtube-autoplay',
	            type: 'post',
				data:{_token:token,video:final_url,id:id,info:numb},
	            success: function(data)
	            {   
	            	$('.edit_youtube').attr('src',data.video) 
	            }
	        });
		}
	})

	$('.show_panel').click(function(){
		var check = $(this).attr('checked');
		var token = $(this).attr('content');
		var id = $('.video_url').val();
		var url = $('.edit_youtube').attr('src');
		var auto = $(this).attr('data-src');

		if (check) {
			$(this).attr('checked',false);
			var numb = '0';

			var autoplay_string = '?&controls=0&';
			var final_url = url.replace('?&controls=0&','')
			$.ajax({
	            url: '/ab-admin/youtube-autoplay',
	            type: 'post',
				data:{_token:token,video:final_url,id:id,panel:numb},
	            success: function(data)
	            {   
	            	$('.edit_youtube').attr('src',data.video) 
	            }
	        });
		}else{
			$(this).attr('checked','checked');
			var final_url = url+auto;
			var numb = '1';

			$.ajax({
	            url: '/ab-admin/youtube-autoplay',
	            type: 'post',
				data:{_token:token,video:final_url,id:id,panel:numb},
	            success: function(data)
	            {   
	            	$('.edit_youtube').attr('src',data.video) 
	            }
	        });
		}	
	})


	//change user avatar
	$('.change_user_avatar').click(function () {
		$('.user_avatar_inp').trigger('click');
	})

	$('.user_avatar_inp').change(function (event) {
		 files = event.target.files;
		event.stopPropagation();
		event.preventDefault();
		var data = new FormData();
		var token = $('.user_avatar_inp').attr('content');
		data.append('file', files[0]);
		data.append('_token',token);
		$.ajax({
			url: '/user/change-user-avatar',
			type: 'post',
			data: data,
			cache: false,
			dataType: 'json',
			processData: false,
			contentType: false,
			cache: false,
			dataType: 'json',
			processData: false,
			contentType: false,
			success: function(data)
			{
				if(data.error == 'success'){
					src = '/assets/user/user_profile_avatar/' + data.image;
					$('.change_user_avatar').attr('src',src);
				}else{
					alert('error')
				}
			}
		});
	})




	//end change user avatar





	

})
