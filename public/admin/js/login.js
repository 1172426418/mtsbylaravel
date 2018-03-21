    $('#login_submit').click(function(){
        $('#success').text('');
        var username=$('.username').val();
        var password=$('.password').val();
        if(username.length==''){
            $('#success').text('请输入登陆账号').css('color','red');
        }else if(password==''){
            $('#success').text('请输入登陆密码').css('color','red');
        }else{
            $.ajax({
                type:'post',
                url:"__APP__/Login/login",
                data:'username='+username+'&password='+password,
                success:function(data){
                    if(data=='no'){
                        $('#success').text('用户名或密码错误').css('color','red');
                    }else{
                        window.location.href='__APP__/Company/index.html';
                    }
                }
            })
        }
    })

        $().ready(function(){
            lbd.checkFullPageBackgroundImage();
            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });