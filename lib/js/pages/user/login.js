
jQuery(document).ready(function(){
    $('#btnLogin').click(function(){
        wait();
        var username = $('#username').val();
        var password = $('#password').val();
        var remembermecount = $('#remember:checked').length;
        var rememberme=false;
        if(remembermecount>0)
            rememberme=true;
        
        $.ajax({
            url:'../user/Authenticate',
            type:'POST',
            dataType:'json',
            async:false,
            cache:false,
            data:{username:username,password:password,rememberme:rememberme},
            success:function(data){
               if(data.status==true)
               {
                   window.location='../dashboard/index';
               }
               else{
                   closewait();
                   $('#LoginErrorMessage').show(500);
               }
            }
        });
    });
});

