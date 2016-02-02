jQuery(document).ready(function() {

    $('#btnNextToManuInfo').click(function() {
        if ($('#manu_file').val() === '') {
            alert('Please fill this form to move forward');
            return false;
        }

    });

    $('#cbCa').click(function() {
        var code = ' <tr><td>&nbsp;</td></tr>' +
                ' <tr class="showCa">' +
                '<td>Title*</td>' +
                ' <td>' +
                '<select name="ca_title">' +
                ' <option value="Dr">Dr</option>' +
                '<option value="Prof">Prof</option>' +
                '<option value="Mr">Mr</option>' +
                '<option value="Mrs">Mrs</option>' +
                '<option value="Miss">Miss</option>' +
                '</select>' +
                ' </td>' +
                '</tr>' +
                '<tr class="showCa"><td>&nbsp;</td></tr>' +
                '<tr class="showCa">' +
                ' <td>Telephone *</td>' +
                '<td>' +
                '<input type="text" class="form-control" name="ca_mobile" placeholder="Please enter with counry code" validate="true" match="^[0-9]+$" error="Please Enter a valid mobile number" required="">' +
                ' </td>' +
                ' </tr>' +
                '<tr class="showCa"><td>&nbsp;</td></tr>' +
                '<tr class="showCa">' +
                '<td>Personal Address *</td>' +
                ' <td>' +
                '<input type="text" class="form-control" name="ca_addr" placeholder="" required="">' +
                '</td>' +
                '</tr></div>';

        if ($('#cbCa').prop('checked')) {
            
            $('#tblInfo').append(code);
            
        } else {

            $('#otherParts').empty();
        }
    });

    $('#btnAddAuthor').click(function() {
        var errors = 0;
    $('#authorForm td :input').each(function(key,value){
        if($(this)[0].validity.valid == false){
         errors++; 
        }

    });
    
    if(errors >0){
            alert('error');
    }
     

//        var data = $('#authorForm').serializeArray();
//        $.ajax({
//            type: "POST",
//            dataType: "json",
//            url: '../../model/submission/_authorInfo.php',
//            data: data,
//            success: function(d) {
//
//                if (d.status == true) {
//                    alert('Author added');
//                    $('#btnNextToValidate').removeAttr('disabled');
//                    $('#reset').trigger('click');
//                    showFields();
//                } else {
//                    alert('Corresponding author already exists for your manuscript.');
//                    $('#reset').trigger('click');
//                    $('.showCa, #cdBlock').remove();
//                    $('#btnNextToValidate').removeAttr('disabled');
//                }
//            }
//        });
    });

});