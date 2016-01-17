jQuery(document).ready(function() {
    
    $('#btnNextToManuInfo').click(function(){
        if($('#manu_file').val() === ''){
            alert('Please fill this form to move forward');
            return false;
        }
    });
    
});