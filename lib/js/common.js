jQuery(document).ready(function(){
    $('.datepicker').datepicker({
        dateFormat:'yy-mm-dd',
        changeMonth:true,
        changeYear:true,
        yearRange:"-100:+100"
    });
    
    $('.logout').click(function(){
        var msg = "All the unsaved data will be lost. Are you sure?";
        messagebox("Warning",msg,"yesno");
        $('#btnYes').unbind('click');//Remove all previouse click bindings 
        $('#btnYes').click(function(){
            $.ajax({
                url:'../user/Logout',
                type:'POST',
                dataType:'json',
                cache:false,
                async:false,
                data:{},
                success:function(data){
                    if(data.status==true)
                    {
                        wait();
                        window.location='../user/login';
                    }
                }
            });
        });
    });
  
    var page_url = window.location.href;
    var page_parts = page_url.split('/');
    //console.log(page_parts);
    var active_page = page_parts[4];
    $('#MainMenu li').removeClass('active');
    $('#MainMenu li[page="'+active_page+'"]').addClass('active');
    
    $('#ProfilePic').click(function(){
        $('#ModelProfilePicUpload').modal({show:true});
    });

    $('#btnSaveProfilePic').click(function(e){
        var formObj = new FormData();
        formObj.append('profile_pic',$('#profile_pic')[0].files[0]);
        formObj.append('dummy_data','aaa');
        $.ajax({
            url:'../user/profilepicupload',
            type:'POST',
            dataType:'json',
            cache:true,
            async:false,
            processData: false,   
            contentType: false,
            data:formObj,
            success:function(jsonData){
                $('#ProfilePic').attr('src','../images/profile_pic/'+jsonData.image_name);
                 $('#ModelProfilePicUpload').modal('hide');
                 e.preventDefault();
            }
        });
        e.preventDefault();
    });
});


function wait()
{
    $('#WaitBox').modal({show:true});
}
function closewait()
{
    $('#WaitBox').modal('hide');
}

function showalert(type,text,duration)
{
    switch(type)
    {
        case "warning":
            $('#WarningAlert .alert-text').text(text);
            $('#WarningAlert').show(1000);
            if(duration>0)
            {
                setTimeout(function(){
                    $('#WarningAlert').hide(1000);
                },duration);
            }
            break;
        case "success":
            $('#SuccessAlert .alert-text').text(text);
            $('#SuccessAlert').show(1000);
            if(duration>0)
            {
                setTimeout(function(){
                    $('#SuccessAlert').hide(1000);
                },duration);
            }
            break;
        case "error":
            $('#DangerAlert .alert-text').text(text);
            $('#DangerAlert').show(1000);
            if(duration>0)
            {
                setTimeout(function(){
                    $('#DangerAlert').hide(1000);
                },duration);
            }
            break;
    }
}

function messagebox(title,message,type)
{      
    /* Hide the decision buttons on load*/
    $('#btnYes,#btnOK,#btnNo,#btnCancel').hide();
    
    $('#PopupAlertTitle').text(title);
    $('#PopupModalMessage').html(message);
    
    switch(type)
    {
        case "ok":
            $('#btnOK').show();
            break;
        case "yesno":
            $('#btnYes,#btnNo').show();
            break;
        case "okcancel":
            $('#btnOK,#btnCancel').show();
            break;
    }
    
    $('#PopupAlert').modal({show:true});
}


function validate(parent)
{
    var is_form_valid = true; //Assume form is valid
    
    //Loop through each textbox inside the parent & validate
    $(parent+' input[type="text"][validate="true"]').each(function(){
         var pattern = $(this).attr('match');
         var txtvalue = $(this).val();
         
        /*var regexPattern = new RegExp(pattern,["i"]); 
        -- Commented due to case insesitive validation has been added via Regex*/
         var regexPattern = new RegExp(pattern);
         var is_matched = regexPattern.exec(txtvalue);
         if(is_matched==null)
         {
             //Pattern is not matched.
             is_form_valid=false;
             var error = $(this).attr('error');
             $(this).next('div .error').html(error).show(1000);
         }
         else{
             $(this).next('div .error').html("").hide(1000);
         }
    });
    
    //Loop through each textarea inside the parent & validate
    $(parent+' textarea[validate="true"]').each(function(){
         var pattern = $(this).attr('match');
         var txtvalue = $(this).val();
         
        /*var regexPattern = new RegExp(pattern,["i"]); 
        -- Commented due to case insesitive validation has been added via Regex*/
         var regexPattern = new RegExp(pattern);
         var is_matched = regexPattern.exec(txtvalue);
         if(is_matched==null)
         {
             //Pattern is not matched.
             is_form_valid=false;
             var error = $(this).attr('error');
             $(this).next('div .error').html(error).show(1000);
         }
         else{
             $(this).next('div .error').html("").hide(1000);
         }
    });
    
    //Validate Dropdown
    $(parent+' select[validate="true"]').each(function(){
        var value = $(this).val();
        if(value==0)
        {
            is_form_valid=false;
            var error = $(this).attr('error');
            $(this).next('div .error').html(error).show(1000);
        }
        else{
             $(this).next('div .error').html("").hide(1000);
         }
    });
        
    //Validate Radios
    $(parent+' input[type="radio"][validate="true"]').each(function(){
        var name=$(this).prop('name');
        var count = $('input[type="radio"][name="'+name+'"]:checked').length;
        if(count==0)
        {
            is_form_valid=false;
            var error = $(this).attr('error');
            $(this).next('div .error').html(error).show(1000);
        }
        else{
           $(this).next('div .error').html("").hide(1000); 
        }
    });
    
    //Validate Checkbox
    $(parent+' input[type="checkbox"][validate="true"]').each(function(){
        var name=$(this).prop('name');
        var count = $('input[type="checkbox"][name="'+name+'"]:checked').length;
        if(count==0)
        {
            is_form_valid=false;
            var error = $(this).attr('error');
            $(this).next('div .error').html(error).show(1000);
        }
        else{
           $(this).next('div .error').html("").hide(1000); 
        }
    });
    
    return is_form_valid;
}







