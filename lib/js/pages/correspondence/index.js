jQuery(document).ready(function(){
    $('#btnSendSMS').click(function(){
        var mobile_no = $('#smsNo').val();
        var message = $('#smsBody').val();
        $.ajax({
            url:'../correspondence/sendsms',
            type:'POST',
            dataType:'json',
            cache:false,
            async:false,
            data:{mobile:mobile_no,msg:message},
            success:function(data){
                messagebox("SMS Sent","Your sms has been submitted to SMS gateway","ok"); 
            }
        });
    });
    
    $('#btnSendEmail').click(function(){
        var to = $('#emailTo').val();
        var from  = $('#emailFrom').val();
        var subject  = $('#emailSubject').val();
        var message = CKEDITOR.instances.emailBody.getData();
        $.ajax({
            url:'../correspondence/sendemail',
            type:'POST',
            dataType:'json',
            cache:false,
            async:false,
            data:{to:to,from:from,subject:subject,message:message},
            success:function(data){
                messagebox("Mail Sent","Your email has been submitted to SMPT gateway","ok");
            }
        });
    });
});
