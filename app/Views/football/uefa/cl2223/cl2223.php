<div class="col-12">
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <!-- //* Group Stage -->
                <li class="nav-item">
                    <a class="nav-link disabled" id="custom-tabs-one-group-tab" data-toggle="pill" href="#custom-tabs-one-group" role="tab" aria-controls="custom-tabs-one-group" aria-selected="true">Group Stage</a>
                </li>
                <!-- //* Round of 16 -->
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-ro16-tab" data-toggle="pill" href="#custom-tabs-one-ro16" role="tab" aria-controls="custom-tabs-one-ro16" aria-selected="false">Round of 16</a>
                </li>
                <!-- //* Quarter Final -->
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-qf-tab" data-toggle="pill" href="#custom-tabs-one-qf" role="tab" aria-controls="custom-tabs-one-qf" aria-selected="false">Quarter Final</a>
                </li>
                <!-- //* Semi Final -->
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-sf-tab" data-toggle="pill" href="#custom-tabs-one-sf" role="tab" aria-controls="custom-tabs-one-sf" aria-selected="false">Semi Final</a>
                </li>
                <!-- //* Final -->
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-final-tab" data-toggle="pill" href="#custom-tabs-one-final" role="tab" aria-controls="custom-tabs-one-final" aria-selected="false">Final</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <!-- //* Group Stage -->
                <div class="tab-pane fade" id="custom-tabs-one-group" role="tabpanel" aria-labelledby="custom-tabs-one-group-tab">
                    <?php $groups = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H']; ?>
                    <div class="row">
                        <?php foreach ($groups as $group) { ?>
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h1 class="card-title">
                                            Group <?= $group ?>
                                        </h1>
                                    </div>
                                    <div class="card-body">
                                        <table id="custom-tabs-one-<?php echo strtolower($group); ?>" class="table table-bordered table-responsive">
                                            <thead>
                                                <tr class="text-center">
                                                    <th style="border: none;" width="1px"></th>
                                                    <th>No</th>
                                                    <th width="500px">Tim</th>
                                                    <th>M</th>
                                                    <th>M</th>
                                                    <th>S</th>
                                                    <th>K</th>
                                                    <th>GM</th>
                                                    <th>GK</th>
                                                    <th>SG</th>
                                                    <th>Poin</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!-- //* Round Of 16 -->
                <div class="tab-pane fade show active" id="custom-tabs-one-ro16" role="tabpanel" aria-labelledby="custom-tabs-one-ro16-tab">
                    <?php $ro16s = ['1', '2']; ?>
                    <div class="row">
                        <?php foreach ($ro16s as $key => $ro16) { ?>
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h1 class="card-title">
                                            Round of 16 Leg <?= $ro16 ?>
                                        </h1>
                                    </div>
                                    <div class="card-body">
                                        <table id="custom-tabs-one-ro16-<?php echo strtolower($ro16); ?>" class="table table-bordered table-responsive">
                                            <thead>
                                                <tr class="text-center">
                                                    <th width="500px">Tim</th>
                                                    <th>S</th>
                                                    <th>-</th>
                                                    <th>S</th>
                                                    <th width="500px">Tim</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!-- //* Quarter Final -->
                <div class="tab-pane fade" id="custom-tabs-one-qf" role="tabpanel" aria-labelledby="custom-tabs-one-qf-tab">
                    <?php $qfs = ['1', '2']; ?>
                    <div class="row">
                        <?php foreach ($qfs as $key => $qf) { ?>
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h1 class="card-title">
                                            Quarter Final Leg <?= $qf ?>
                                        </h1>
                                    </div>
                                    <div class="card-body">
                                        <table id="custom-tabs-one-qf-<?php echo strtolower($qf); ?>" class="table table-bordered table-responsive">
                                            <thead>
                                                <tr class="text-center">
                                                    <th width="500px">Tim</th>
                                                    <th>S</th>
                                                    <th>-</th>
                                                    <th>S</th>
                                                    <th width="500px">Tim</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!-- //* Semi Final -->
                <div class="tab-pane fade" id="custom-tabs-one-sf" role="tabpanel" aria-labelledby="custom-tabs-one-sf-tab">
                    <?php $sfs = ['1', '2']; ?>
                    <div class="row">
                        <?php foreach ($sfs as $key => $sf) { ?>
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h1 class="card-title">
                                            Semi Final Leg <?= $sf ?>
                                        </h1>
                                    </div>
                                    <div class="card-body">
                                        <table id="custom-tabs-one-sf-<?php echo strtolower($sf); ?>" class="table table-bordered table-responsive">
                                            <thead>
                                                <tr class="text-center">
                                                    <th width="500px">Tim</th>
                                                    <th>S</th>
                                                    <th>-</th>
                                                    <th>S</th>
                                                    <th width="500px">Tim</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!-- //* Final -->
                <div class="tab-pane fade" id="custom-tabs-one-final" role="tabpanel" aria-labelledby="custom-tabs-one-final-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h1 class="card-title">
                                        Final
                                    </h1>
                                </div>
                                <div class="card-body">
                                    <table id="custom-tabs-one-final" class="table table-bordered table-responsive">
                                        <thead>
                                            <tr class="text-center">
                                                <th width="500px">Tim</th>
                                                <th>S</th>
                                                <th>-</th>
                                                <th>S</th>
                                                <th width="500px">Tim</th>
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
    function Group(group) {
        $.ajax({
            url: 'https://api.football-data.org/v4/competitions/CL/standings',
            method: 'GET',
            dataType: 'JSON',
            headers: {
                "X-Auth-Token": "a5dfda30456c43b4b0ab0cd28a442b16"
            },
            success: function(result) {
                if (result && result.standings) {
                    let table = result.standings.find(standing => standing.group === `Group ${group}`);
                    if (table) {
                        let tbodyContent = '';

                        $.each(table.table, function(i, data) {
                            let rowClass = (i == 0 || i == 1) ? 'bg-blue color-palette' : (i == 2) ? 'bg-orange color-palette' : '';

                            tbodyContent += `
                            <tr class="text-center">
                                <td style="border: none;" class="${rowClass}"></td>
                                <td>${data.position}</td>
                                <td>${data.team.name}</td>
                                <td>${data.playedGames}</td>
                                <td>${data.won}</td>
                                <td>${data.draw}</td>
                                <td>${data.lost}</td>
                                <td>${data.goalsFor}</td>
                                <td>${data.goalsAgainst}</td>
                                <td>${data.goalDifference}</td>
                                <td>${data.points}</td>
                            </tr>
                        `;
                        });

                        let groupId = `#custom-tabs-one-${group.toLowerCase()} tbody`;
                        $(groupId).html(tbodyContent);
                    }
                }
            }
        });
    }

    function RO16() {
        $.ajax({
            url: 'https://api.football-data.org/v4/competitions/CL/matches?stage=LAST_16&season=2022',
            method: 'GET',
            dataType: 'JSON',
            headers: {
                "X-Auth-Token": "a5dfda30456c43b4b0ab0cd28a442b16"
            },
            success: function(result) {
                // console.log(result.matches)
                if (result && result.matches) {
                    let matches = result.matches;

                    displayMatches(matches.slice(0, 8), 'Leg 1', '#custom-tabs-one-ro16-1 tbody');

                    displayMatches(matches.slice(8, 16), 'Leg 2', '#custom-tabs-one-ro16-2 tbody');
                }
            }
        });
    }

    function QF() {
        $.ajax({
            url: 'https://api.football-data.org/v4/competitions/CL/matches?stage=QUARTER_FINALS&season=2022',
            method: 'GET',
            dataType: 'JSON',
            headers: {
                "X-Auth-Token": "a5dfda30456c43b4b0ab0cd28a442b16"
            },
            success: function(result) {
                // console.log(result.matches)
                if (result && result.matches) {
                    let matches = result.matches;

                    displayMatches(matches.slice(0, 4), 'Leg 1', '#custom-tabs-one-qf-1 tbody');

                    displayMatches(matches.slice(4, 8), 'Leg 2', '#custom-tabs-one-qf-2 tbody');
                }
            }
        });
    }

    function SF() {
        $.ajax({
            url: 'https://api.football-data.org/v4/competitions/CL/matches?stage=SEMI_FINALS&season=2022',
            method: 'GET',
            dataType: 'JSON',
            headers: {
                "X-Auth-Token": "a5dfda30456c43b4b0ab0cd28a442b16"
            },
            success: function(result) {
                // console.log(result.matches)
                if (result && result.matches) {
                    let matches = result.matches;

                    displayMatches(matches.slice(0, 2), 'Leg 1', '#custom-tabs-one-sf-1 tbody');

                    displayMatches(matches.slice(2, 4), 'Leg 2', '#custom-tabs-one-sf-2 tbody');
                }
            }
        });
    }

    function Final() {
        $.ajax({
            url: 'https://api.football-data.org/v4/competitions/CL/matches?stage=FINAL&season=2022',
            method: 'GET',
            dataType: 'JSON',
            headers: {
                "X-Auth-Token": "a5dfda30456c43b4b0ab0cd28a442b16"
            },
            success: function(result) {
                // console.log(result.matches[0])
                let match = result.matches[0];
                let tbodyContent = '';

                tbodyContent += `
                    <tr class="text-center">
                        <td>${match.homeTeam.name}</td>
                        <td>${match.score.fullTime.home !== null ? match.score.fullTime.home : '0'}</td>
                        <td>-</td>
                        <td>${match.score.fullTime.away !== null ? match.score.fullTime.away : '0'}</td>
                        <td>${match.awayTeam.name}</td>
                    </tr>
                `;

                $('#custom-tabs-one-final tbody').html(tbodyContent);
            }
        });
    }

    function displayMatches(matches, leg, tableId) {
        let tbodyContent = '';

        matches.forEach(function(match) {
            tbodyContent += `
                <tr class="text-center">
                    <td>${match.homeTeam.name}</td>
                    <td>${match.score.fullTime.home !== null ? match.score.fullTime.home : '0'}</td>
                    <td>-</td>
                    <td>${match.score.fullTime.away !== null ? match.score.fullTime.away : '0'}</td>
                    <td>${match.awayTeam.name}</td>
                </tr>
            `;
        });

        $(tableId).html(tbodyContent);
    }

    $(document).ready(function() {
        // ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'].forEach(function(group) {
        //     Group(group);
        // });
        RO16();
        QF();
        SF();
        Final()
    });
</script>