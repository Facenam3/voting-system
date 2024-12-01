$(document).ready(function(){

    fetchCategory();
    fetchEmployees();

    $('#addVote').submit(function(e){
        e.preventDefault();
        let addVote = $(this).serialize();
        let submitButton = $(this).find('input[type="submit"]');

        submitButton.prop('disabled', true);
        // console.log(addVote);
        $.ajax({
            method: 'POST',
            url: 'insert_votes.php',
            data: addVote,
            dataType: 'json',
            success: function(response){
                console.log(response);
            },
            complete: function () {
                $('#addVote')[0].reset();
                submitButton.prop('disabled', false);
            }
        });
    });
});

function fetchCategory(){
    $.ajax({
        method: 'POST',
        url: "fetch_category.php",
        success: function(response){
            // console.log(response);
            $("#category_id").html(response);
        }
    });
}

function fetchEmployees(){
    $.ajax({
        method: "POST",
        url: 'fetch_employee.php',
        success: function(response){
            // console.log(response);
            $("#employee_id").html(response);
        }
    });
}