<div class="col-12">
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <!-- //* 2023/2024 -->
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-2324-tab" data-toggle="pill" href="#custom-tabs-one-2324" role="tab" aria-controls="custom-tabs-one-group" aria-selected="true">23/24</a>
                </li>
                <!-- //* 2022/2023 -->
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-2223-tab" data-toggle="pill" href="#custom-tabs-one-2223" role="tab" aria-controls="custom-tabs-one-2223" aria-selected="false">22/23</a>
                </li>
                <!-- //* 2021/2022 -->
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-2122-tab" data-toggle="pill" href="#custom-tabs-one-2122" role="tab" aria-controls="custom-tabs-one-2122" aria-selected="false">21/22</a>
                </li>
                <!-- //* 2020/2021 -->
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-2021-tab" data-toggle="pill" href="#custom-tabs-one-2021" role="tab" aria-controls="custom-tabs-one-2021" aria-selected="false">20/21</a>
                </li>
                <!-- //* 2019/2020 -->
                <li class="nav-item">
                    <a class="nav-link disabled" id="custom-tabs-one-1920-tab" data-toggle="pill" href="#custom-tabs-one-1920" role="tab" aria-controls="custom-tabs-one-1920" aria-selected="false">19/20</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <!-- //* 2023/2024 -->
                <div class="tab-pane fade show active" id="custom-tabs-one-2324" role="tabpanel" aria-labelledby="custom-tabs-one-2324-tab">
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
                <!-- //* 2022/2023 -->
                <div class="tab-pane fade" id="custom-tabs-one-2223" role="tabpanel" aria-labelledby="custom-tabs-one-2223-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-body">
                                    <table id="2223" class="table table-bordered">
                                        <thead>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th width="500px">Player</th>
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
                <!-- //* 2021/2022 -->
                <div class="tab-pane fade" id="custom-tabs-one-2122" role="tabpanel" aria-labelledby="custom-tabs-one-2122-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-body">
                                    <table id="2122" class="table table-bordered">
                                        <thead>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th width="500px">Player</th>
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
                <!-- //* 2020/2021 -->
                <div class="tab-pane fade" id="custom-tabs-one-2021" role="tabpanel" aria-labelledby="custom-tabs-one-2021-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-body">
                                    <table id="2021" class="table table-bordered">
                                        <thead>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th width="500px">Player</th>
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
                <!-- //* 2019/2020 -->
                <div class="tab-pane fade" id="custom-tabs-one-1920" role="tabpanel" aria-labelledby="custom-tabs-one-1920-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-body">
                                    <table id="1920" class="table table-bordered">
                                        <thead>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th width="500px">Player</th>
                                                <th>Play</th>
                                                <th>Goal (Pen)</th>
                                                <th>Assist</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function StatsPL() {
        //* 23/24
        $.ajax({
            "url": "https://api.football-data.org/v4/competitions/SA/scorers",
            "method": "GET",
            "headers": {
                "X-Auth-Token": "a5dfda30456c43b4b0ab0cd28a442b16"
            },
            "data": {
                "season": "2023",
                "limit": "20"
            },
            success: function(result) {
                // console.log(result);
                let scorer = result.scorers;
                let tbodyContent = '';
                console.log(scorer);

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
                $('#custom-tabs-one-2324 tbody').html(tbodyContent);
            }
        });
        //* 22/23
        $.ajax({
            "url": "https://api.football-data.org/v4/competitions/SA/scorers",
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
                console.log(scorer);

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
                $('#custom-tabs-one-2223 tbody').html(tbodyContent);
            }
        });
        //* 21/22
        $.ajax({
            "url": "https://api.football-data.org/v4/competitions/SA/scorers",
            "method": "GET",
            "headers": {
                "X-Auth-Token": "a5dfda30456c43b4b0ab0cd28a442b16"
            },
            "data": {
                "season": "2021",
                "limit": "20"
            },
            success: function(result) {
                // console.log(result);
                let scorer = result.scorers;
                let tbodyContent = '';
                console.log(scorer);

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
                $('#custom-tabs-one-2122 tbody').html(tbodyContent);
            }
        });
        //* 20/21
        $.ajax({
            "url": "https://api.football-data.org/v4/competitions/SA/scorers",
            "method": "GET",
            "headers": {
                "X-Auth-Token": "a5dfda30456c43b4b0ab0cd28a442b16"
            },
            "data": {
                "season": "2020",
                "limit": "20"
            },
            success: function(result) {
                // console.log(result);
                let scorer = result.scorers;
                let tbodyContent = '';
                console.log(scorer);

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
                $('#custom-tabs-one-2021 tbody').html(tbodyContent);
            }
        });
        //* 19/20
        // $.ajax({
        //     url: 'https://api-football-standings.azharimm.dev/leagues/eng.1/standings',
        //     method: 'GET',
        //     dataType: 'JSON',
        //     data: {
        //         'season': '2019',
        //         'sort': 'asc'
        //     },
        //     success: function(result) {
        //         if (result) {
        //             let standings = result.data.standings;
        //             let tbodyContent = '';

        //             $.each(standings, function(i, data) {
        //                 let rowClass = (i == 0 || i == 1 || i == 2 || i == 3) ? 'bg-blue color-palette' : (i == 4 || i == 5) ? 'bg-orange color-palette' : (i == 17 || i == 18 || i == 19 ? 'bg-red color-palette' : '');

        //                 tbodyContent += `
        //                     <tr class="text-center">
        //                         <td style="border: none;" class="${rowClass}"></td>
        //                         <td>${i + 1}</td>
        //                         <td>${data.team.displayName}</td>
        //                         <td>${data.stats[0].displayValue}</td>
        //                         <td>${data.stats[7].displayValue}</td>
        //                         <td>${data.stats[6].displayValue}</td>
        //                         <td>${data.stats[1].displayValue}</td>
        //                         <td>${data.stats[5].displayValue}</td>
        //                         <td>${data.stats[4].displayValue}</td>
        //                         <td>${data.stats[2].displayValue}</td>
        //                         <th>${data.stats[3].displayValue}</th>
        //                     </tr>
        //                 `;
        //             });
        //             $('#custom-tabs-one-1920 tbody').html(tbodyContent);
        //         };
        //     }
        // });
    };

    $(document).ready(function() {
        StatsPL();
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
    $("#2223").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "paging": false,
        "searching": false,
        "ordering": false,
        "info": false,
    });
    $("#2122").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "paging": false,
        "searching": false,
        "ordering": false,
        "info": false,
    });
    $("#2021").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "paging": false,
        "searching": false,
        "ordering": false,
        "info": false,
    });
    $("#1920").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "paging": false,
        "searching": false,
        "ordering": false,
        "info": false,
    });
</script>