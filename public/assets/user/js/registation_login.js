$(document).ready(function(){
    

    $('.login_submit').click(function () {
        var login_email = $('.login_email').val();
        var login_password = $('.login_password').val();
        var token = $('.token').attr('content');
        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        var url = $('.url').attr('data-url');
        if(login_email == "" || !pattern.test(login_email)){
            $('.login_email').addClass('red')
        }else {
            $('.login_email').removeClass('red')
        }
        if(login_password == ""){
            $('.login_password').addClass('red')
        }else{
            $('.login_password').removeClass('red')
        }
        if(login_email == "" || !pattern.test(login_email) || login_password == ""){

        }else{
            $.ajax({
                url: '/user/login-modal',
                type: 'post',
                data:{_token:token,email:login_email,password:login_password},
                success: function(data)
                {
                    if(data.error == 'success'){
                        window.location.assign(url);
                    }else{
                        alert('error')
                    }
                }
            });
        }
    })



})