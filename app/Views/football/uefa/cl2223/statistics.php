<div class="col-12">
    <div class="card card-primary card-tabs">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-body">
                            <table id="2324" class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th width="500px">Player (Club)</th>
                                        <th>Play</th>
                                        <th>Goal (Pen)</th>
                                        <th>Assist</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    function StatsCL2324() {
        //* 23/24
        $.ajax({
            "url": "https://api.football-data.org/v4/competitions/CL/scorers",
            "method": "GET",
            "headers": {
                "X-Auth-Token": "a5dfda30456c43b4b0ab0cd28a442b16"
            },
            "data": {
                "season": "2022",
                "limit": "20"
            },
            success: function(result) {
                // console.log(result);
                let scorer = result.scorers;
                let tbodyContent = '';
                // console.log(scorer);

                $.each(scorer, function(i, data) {
                    tbodyContent += `
                        <tr class="text-center">
                            <td>${i + 1}</td>
                            <td>${data.player.name} (${data.team.name})</td>
                            <td>${data.playedMatches}</td>
                            <td>${data.goals} (${data.penalties ?? 0})</td>
                            <td>${data.assists ?? 0}</td>
                        </tr>
                    `;
                });
                $('#2324 tbody').html(tbodyContent);
            }
        });
    };

    $(document).ready(function() {
        StatsCL2324();
    });
</script>

<script>
    $("#2324").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "paging": false,
        "searching": false,
        "ordering": false,
        "info": false,
    });
</script>