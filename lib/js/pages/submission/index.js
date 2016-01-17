jQuery(document).ready(function() {

    $('#btnNextToUpload').click(function() {
        $('.checklist:checked').length == $('.checklist').length
    });
    
    $('#btnNextToManuInfo').click(function(){
        if($('#manu_file').val() === ''){
            alert('error');
            return false;
        }
    });
    
});