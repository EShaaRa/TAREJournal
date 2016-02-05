jQuery(document).ready(function() {


    $('#btnNextToManuInfo').click(function() {
        if ($('#manu_file').val() === '') {
            alert('Please upload neccessary files');
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
                row += '<td class="edit" data-attr="fname">' + fname + '</td>';
                row += '<td  class="edit mname" data-attr="mname">' + mname + '</td>';
                row += '<td class="edit" data-attr="lname">' + lname + '</td>';
                row += '<td data-attr="email">' + email + '</td>';
                row += '<td class="edit" data-attr="uni">' + uni + '</td>';
                row += '<td></td>';
                row += '<td><button onclick="deleteRow(' + num + ')"><span class="glyphicon glyphicon-remove"></span></button></td></tr>';

                num++;

                $('#tbodayAuthorDetails').append(row);
                $('#btnCancel').trigger('click');
                $('.edit').editable({
                    emptytext: '',
                    validate: function(value) {
                        if ($(this).hasClass('mname') == false) {
                            if ($.trim(value) == '') {
                                return 'This field is required';
                            }

                        }

                    }
                });


            }

        } else {
            alert('Please check the deatils agian');
        }

        e.preventDefault();
    });

    $('#btnNextToValidate').off();
    $('#btnNextToValidate').click(function() {
        var au_fname = [];
        var au_mname = [];
        var au_lname = [];
        var au_email = [];
        var au_uni = [];

        $('td[data-attr=fname]').each(function(i, val) {
            var value = $(val).text();
            au_fname.push(value)

        });

        $('td[data-attr=mname]').each(function(i, val) {
            var value = $(val).text();
            au_mname.push(value)

        });

        $('td[data-attr=lname]').each(function(i, val) {
            var value = $(val).text();
            au_lname.push(value)

        });

        $('td[data-attr=email]').each(function(i, val) {
            var value = $(val).text();
            au_email.push(value)

        });

        $('td[data-attr=uni]').each(function(i, val) {
            var value = $(val).text();
            au_uni.push(value)

        });
        $.ajax({
            method: 'post',
            url: '../../model/submission/_authorInfo.php',
            data: {au_fname: au_fname, au_mname: au_mname, au_lname: au_lname, au_email: au_email, au_uni: au_uni},
            dataType: 'json',
            success: function(res) {
                console.log(res);

                if (res.status == true) {


                    location.replace('validate.php');
                }
            }
        });

    });

    $('#btnValidateSubmit').click(function(e) {
        var data = $('#formValidate').serializeArray();

        $.ajax({
            method: 'post',
            url: '../../model/submission/_validate.php',
            data: data,
            dataType: 'json',
            success: function(res) {
                console.log(res);

                if (res.status == true) {

                    $('#vlidateModalBody').html('Menuscript was successfully submitted!');
                    $('#successModal').modal('show');
                  
                  
                }
            }
        });

        e.preventDefault();
    });

    $('#btnValidationAbort').click(function() {
        if (confirm('Are you sure you want to cancel the submission?')) {
            $.post('../../model/submission/_abort.php', function(res) {
                if (res == true) {

                    $('input[type=text]').val('');

                    $('#vlidateModalBody').html('Menuscript was deleted!');
                    $('#successModal').modal('show');
                        $('#successModal').modal('show');
                    setTimeout(function() {
                        location.replace('../dashboard/author.php');
                    }, 3)

                }
            });

        }
    });

});


function deleteRow(num) {

    if (confirm("Are you sure?")) {
        $('tr[data-id=' + num + ']').remove();

    }
}