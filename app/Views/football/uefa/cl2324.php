<div class="col-12">
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <!-- //* Group Stage -->
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-group-tab" data-toggle="pill" href="#custom-tabs-one-group" role="tab" aria-controls="custom-tabs-one-group" aria-selected="true">Group Stage</a>
                </li>
                <!-- //* Round of 16 -->
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-ro16-tab" data-toggle="pill" href="#custom-tabs-one-ro16" role="tab" aria-controls="custom-tabs-one-ro16" aria-selected="false">Round of 16</a>
                </li>
                <!-- //* Quarter Final -->
                <li class="nav-item">
                    <a class="nav-link disabled" id="custom-tabs-one-qf-tab" data-toggle="pill" href="#custom-tabs-one-qf" role="tab" aria-controls="custom-tabs-one-qf" aria-selected="false">Quarter Final</a>
                </li>
                <!-- //* Semi Final -->
                <li class="nav-item">
                    <a class="nav-link disabled" id="custom-tabs-one-sf-tab" data-toggle="pill" href="#custom-tabs-one-sf" role="tab" aria-controls="custom-tabs-one-sf" aria-selected="false">Semi Final</a>
                </li>
                <!-- //* Final -->
                <li class="nav-item">
                    <a class="nav-link disabled" id="custom-tabs-one-final-tab" data-toggle="pill" href="#custom-tabs-one-final" role="tab" aria-controls="custom-tabs-one-final" aria-selected="false">Final</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <!-- //* Group Stage -->
                <div class="tab-pane fade show active" id="custom-tabs-one-group" role="tabpanel" aria-labelledby="custom-tabs-one-group-tab">
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
                <div class="tab-pane fade" id="custom-tabs-one-ro16" role="tabpanel" aria-labelledby="custom-tabs-one-ro16-tab">
                    <?php $groups = ['1', '2', '3', '4', '5', '6', '7', '8']; ?>
                    <div class="row">
                        <?php foreach ($groups as $key => $group) { ?>
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h1 class="card-title">
                                            Round of 16 <?= $group ?>
                                        </h1>
                                    </div>
                                    <div class="card-body">
                                        <table id="custom-tabs-one-<?php echo strtolower($group); ?>" class="table table-bordered table-responsive">
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
            </div>
        </div>
    </div>
</div>

<script>
    function Group(group) {
        $.ajax({
            url: 'https://livescore-api.com/api-client/leagues/table.json',
            method: 'GET',
            dataType: 'JSON',
            data: {
                'key': 'Hd9jQdHLWBmXENVk',
                'secret': '9sRzz0InbuYPnUn47woXJ5JGG5DlSzF1',
                'competition_id': '244',
                'group': group,
            },
            success: function(result) {
                if (result) {
                    let table = result.data.table;
                    let tbodyContent = '';

                    $.each(table, function(i, data) {
                        let rowClass = (i == 0 || i == 1) ? 'bg-blue color-palette' : (i == 2) ? 'bg-orange color-palette' : '';

                        tbodyContent += `
                            <tr class="text-center">
                                <td style="border: none;" class="${rowClass}"></td>
                                <td>${i + 1}</td>
                                <td>${data.name}</td>
                                <td>${data.matches}</td>
                                <td>${data.won}</td>
                                <td>${data.drawn}</td>
                                <td>${data.lost}</td>
                                <td>${data.goals_scored}</td>
                                <td>${data.goals_conceded}</td>
                                <td>${data.goal_diff}</td>
                                <td>${data.points}</td>
                            </tr>
                        `;
                    });

                    let groupId = `#custom-tabs-one-${group.toLowerCase()}`;
                    $(`${groupId} tbody`).html(tbodyContent);
                }
            }
        });
    }

    $(document).ready(function() {
        ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'].forEach(function(group) {
            Group(group);
        });
    });
</script>