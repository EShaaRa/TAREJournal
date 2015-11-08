jQuery(document).ready(function() {
    $('#btnSubmit').click(function() {
        wait();
        window.location = '../dashboard/index';
    });
    
});
function cb1_click()
{
    if(document.getElementById("cb1").checked === true)
    {
        alert(1);
    }
}


$('#btnSubmit').click(function() {
        if (validate('#frmRegister')) {
            var first_name = $('#txtFirstName').val();
            var TP = $('#txtTP').val();
            var address = $('#txtAddress').val();
            $.ajax({
                url: '../user/SaveNewUser',
                type: 'POST',
                dataType: 'json',
                cache: false,
                async: false,
                data: {name: first_name, mobile: TP, address: address},
                success: function(data) {
                    if (data.status === true)
                    {
                        if (isNaN(data.userID))
                            showalert('error', 'This user is already exists in the system', 5000);
                        else
                            $('#txtUserID').val(data.UserID);
                    }
                }
            });
        }
    }
