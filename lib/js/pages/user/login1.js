
jQuery(document).ready(function(){
    $('#btnLogin').click(function(){
        wait();
        var username = $('#username').val();
        var password = $('#password').val();
        var user_group_id=$('#user_group_id').val();//put ur user group option button value in here
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
            data:{username:username,password:password,rememberme:rememberme,user_group_id:user_group_id},
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

