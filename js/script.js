$(document).ready(function(){

    fetchCategory();
    fetchEmployees();
    fetchTopVoters();
    fetchWinners()
    fetchVotes();

    
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
                if(response.error){
                    $('#alert').show();
                    $("#alert_message").html(response.message);
                } else {
                    $('#alert').show();
                    $('#alert_message').html(response.message);
                }
            },
            complete: function () {
                $('#addVote')[0].reset();
                submitButton.prop('disabled', false);
            }
        });
    });

     
});

let currentPage = 1;
const limit = 10;

function fetchVotes(page = 1) {
    $.ajax({
        method: 'POST',
        url: 'fetch_votes.php',
        data: { page, limit },
        success: function (response) {
            const data = JSON.parse(response);
            const votes = data.votes;
            const totalPages = data.totalPages;

            let rows = '';
            votes.forEach(vote => {
                rows += `
                    <tr>
                        <td>${vote.employee_name}</td>
                        <td>${vote.category_name}</td>
                        <td>${vote.voted_by}</td>
                        <td>${vote.votes_count}</td>
                        <td>${vote.comment.substring(0, 30)}</td>
                        <td>${vote.timestamp}</td>
                    </tr>
                `;
            });
            $("#tbody").html(rows);

            let paginationHTML = `
                <li class="page-item ${page === 1 ? 'disabled' : ''}">
                    <a class="page-link" href="#" data-page="${page - 1}">Previous</a>
                </li>
            `;
            for (let i = 1; i <= totalPages; i++) {
                paginationHTML += `
                    <li class="page-item ${page === i ? 'active' : ''}">
                        <a class="page-link" href="#" data-page="${i}">${i}</a>
                    </li>
                `;
            }
            paginationHTML += `
                <li class="page-item ${page === totalPages ? 'disabled' : ''}">
                    <a class="page-link" href="#" data-page="${page + 1}">Next</a>
                </li>
            `;
            $(".pagination").html(paginationHTML);

            currentPage = page;
        }
    });
}

$(document).on('click', '.pagination a', function (e) {
    e.preventDefault();
    const page = $(this).data('page');
    if (page) {
        fetchVotes(page);
    }
});

function fetchWinners(){
    $.ajax({
        method: "POST",
        url: "fetch_winners.php",
        dataType: "json",
        success: function (response) {
            const winners = response.winners;

            // console.log(winners);
            let rows = '';
            winners.forEach(winner => {
                rows += `
                    <tr>
                        <td>${winner.winner_name}</td>
                        <td>${winner.category_name}</td>
                        <td>${winner.total_votes}</td>
                    </tr>
                `
            });
            $("#winnertBody").html(rows);
        }
    });
}

function fetchTopVoters() {
    $.ajax({
        method: "POST",
        url: "fetch_topvoters.php",
        dataType: "json",
        success: function(response){

            console.log(response);
            const voters = response.voters;

            let rows = '';
            voters.forEach(voter => {
                rows += `
                    <tr>
                        <td>${voter.voter_name}</td>
                        <td>${voter.vote_count}</td>
                    </tr>
                `;
            })
            $("#votertBody").html(rows);
        }
    });
}

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