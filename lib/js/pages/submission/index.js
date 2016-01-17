jQuery(document).ready(function() {

    $('#btnNextToManuInfo').click(function() {
        if ($('#manu_file').val() === '') {
            alert('Please fill this form to move forward');
            return false;
        }
    });

    $('#btnAddAuthor').click(function() {
        var data = $('#authorForm').serializeArray();
        $.ajax({
            type: "POST",
            dataType: "json",
            url: '../../model/submission/_authorInfo.php',
            data: data,
            success: function(d) {

                if (d.status == true) {
                    alert('Author added');
                    $('#btnNextToValidate').removeAttr('disabled');
                    $('#reset').trigger('click');
                    showFields();
                } else {
                    alert('Corresponding author already exists for your manuscript.');
                    $('#reset').trigger('click');
                    $('.showCa, #cdBlock').remove();
                    $('#btnNextToValidate').removeAttr('disabled');
                }
            }
        });
    });

});