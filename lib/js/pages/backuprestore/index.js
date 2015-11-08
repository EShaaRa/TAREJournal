jQuery(document).ready(function(){
    $('#btnBackup').click(function(){
        $.ajax({
            url:'../backuprestore/backup',
            type:'POST',
            dataType:'json',
            cache:false,
            success:function(data){
                $('#dbbackupdownload').attr('href','../'+data.filename);
                $('#dbbackupdownload').html('Click Here to Download the Backup File');
            }
        });
    });
    
    $('#btnRestore').click(function(){
        var formobj = new FormData();
        formobj.append('dbrestorefile',$('#dbrestorefile')[0].files[0]);
        wait();
        $.ajax({
            url:'../backuprestore/restore',
            type:'POST',
            dataType:'json',
            cache:false,
            async:false,
            data:formobj,
            processData:false,
            contentType:false,
            success:function(){
                closewait();
                messagebox('Restore Success','Your Database has been successfully restored','ok');
            }
        });
    });
});