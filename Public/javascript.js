$(document).ready(function () {
    
    //delete patient Button
    $('.delPaBtn').click(function (event) {
        event.preventDefault(); 
        var passedID=$(this).data('id');
        $('.confDel').attr("href","Delete.php?id="+ passedID);
    });

    // login Button effects
    $(".login").click(function(event){
        event.preventDefault();
        $("#loginDiv").css('visibility', 'visible');
        $("#titleDiv").css('visibility','hidden');
        $(this).css('visibility','hidden');
    });

    //livesearch
    $('body').on('keyup', '#search', function(){
        $("table").hide('slow');
        var searchQuery = $(this).val();
        $.ajax({
            type: "POST",
            url: "",
            data: {
                searchQuery: searchQuery,
            },
            dataType: "json",
            success: function(res){
                // $.each(res, function(index, patient){
                //     patientList =``

                //     $('#searchList').append(patientList);
                // });
            }
        });
        if ($(this).val() == "") {
            $("table").show('slow');
        }
});



   //edit patients option 
    $('.input-group-edit').click(function (event) {
        event.preventDefault();
        debugger;
        
        var atrId =  $(this).attr('id');
        var justId = $(this).attr('id').slice(4).trim();
        var nameTx = 'name_' + justId;
        var emailTx = 'email_' + justId;
        var addressTx = 'address_' + justId;
        var pnTx = 'pn_' + justId;
        var mcTx = 'mc_' + justId;
        var btTx = 'bt_' + justId;
        var currRow = 'row_' + justId;
        debugger;
        
        inBtn = $(this)[0].firstElementChild.id;
        debugger;
        if (inBtn == 'btnEdit_' + justId){
            var buttonEdit = 'btnEdit_' + justId;
            $('')
            $('#'+buttonEdit).prop('innerHTML', 'Save');
            $('#'+buttonEdit).css('background-color', 'black');
            $('#'+buttonEdit).attr("id","btnSave_"+justId);
            $('#'+nameTx).prop('readonly', false);
            $('#'+emailTx).prop('readonly', false);
            $('#'+addressTx).prop('readonly', false);
            $('#'+pnTx).prop('readonly', false);
            $('#'+mcTx).prop('readonly', false);
            $('#'+btTx).prop('readonly', false);
            $('.cl_'+justId).css('background-color', 'white');
        }
        else{
            var buttonSave = 'btnSave_' + justId;
            $('#'+buttonSave).prop('innerHTML', 'Edit');
            $('#'+buttonSave).css('background-color', 'grey');
            $('#'+buttonSave).attr("id","btnEdit_"+justId);
            $('#'+nameTx).prop('readonly', true);
            $('#'+emailTx).prop('readonly', true);
            $('#'+addressTx).prop('readonly', true);
            $('#'+pnTx).prop('readonly', true);
            $('#'+mcTx).prop('readonly', true);
            $('#'+btTx).prop('readonly', true);
            $('.cl_'+justId).css('background-color', 'rgb(197, 233, 223)');

            varName = $('#'+nameTx)[0].value;
            varEmail = $('#'+emailTx)[0].value;
            varAddress = $('#'+addressTx)[0].value;
            varPhone_number = $('#'+pnTx)[0].value;
            varMedical_condition = $('#'+mcTx)[0].value;
            varBlood_type = $('#'+btTx)[0].value;
            debugger;
            $.ajax({

                type: "POST",
                url: "Update.php?id="+justId+"&name="+varName+"&email="+varEmail+"&address="+varAddress+"&phone_number="+varPhone_number+"&medical_condition="+varMedical_condition+"&blood_type="+varBlood_type,
                success: function(data) {
                },
                error: function() {
                    alert('There was some error performing the AJAX call!');
                }
                }
              );
        }

        


        
    });

});