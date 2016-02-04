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
        $('#authorForm td :input').each(function(key, value) {
            if ($(this)[0].validity.valid == false) {
                errors++;
            }

        });

        if (errors > 0) {
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

    var enteredEmails = [];
    var num = 1;

    $('#btnAddAuthor').click(function(e) {

        if ($('#frmAuthor')[0].checkValidity()) {
            var fname = $('input[name=fname]').val();
            var mname = $('input[name=mname]').val();
            var lname = $('input[name=lname]').val();
            var email = $('input[name=email]').val();
            var uni = $('input[name=uni]').val();

            if ($.inArray(email, enteredEmails) != -1) {
                alert('The author with this email already added');
            } else {

                enteredEmails.push(email);

                var row = '';
                row += '<tr data-id="' + num + '">';
                row += '<td><input type="text"  name="au_fname[]" required="" value="' + fname + '"</td>';
                row += '<td><input type="text" name="au_mname[]" value="' + mname + '"</td>';
                row += '<td><input type="text" name="au_lname[]" required="" value="' + lname + '"</td>';
                row += '<td><input type="email" name="au_email[]" required="" readonly value="' + email + '"</td>';
                row += '<td><input type="text" name="au_uni[]" required="" value="' + uni + '"</td>';
                row += '<td></td>';
                row += '<td><button onclick="deleteRow(' + num + ')"><span class="glyphicon glyphicon-remove"></span></button></td></tr>';

                num++;

                $('#tbodayAuthorDetails').append(row);
                $('#btnCancel').trigger('click');

            }

        }

        e.preventDefault();
    });
    
    $('#btnNextToValidate').off();
    $('#btnNextToValidate').click(function(){
        var data = $('#confirmAuth').serializeArray();
        
        $.ajax({
            method : 'post',
            url : '../../model/submission/_authorInfo.php',
            data : data,
            dataType : 'json',
            success : function(res){
                console.log(res);
                
                if(res.status == true){
                 
                 
                 location.replace('validate.php');
                }
            }
        });
        
    });


});


function deleteRow(num) {
    
    if(confirm("Are you sure?")){
    $('tr[data-id=' + num + ']').remove();
    
    }
}