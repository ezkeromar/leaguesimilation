<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
        <style>
            .card {
                padding-bottom: 10px;
            }
            .actionBlock, .hide {
                display: none;
            }
            .active .actionBlock {
                display: block !important;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="card active">
                <div class='row'>
                    <div class="col-md-6">
                        <h4 class="text-center">Week <span class='week'>0</span> Simulation of Group: {{$title}} <span class="final hide">Final</span></h4>
                        <input class="groupId" type="hidden" value="{{$id}}" />
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Teams</th>
                                <th scope="col">PTS</th>
                                <th scope="col">P</th>
                                <th scope="col">W</th>
                                <th scope="col">D</th>
                                <th scope="col">L</th>
                                <th scope="col">GD</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($teams as $team)
                                <tr>
                                <th>{{$team->title}}</th>
                                <td class="points">-</td>
                                <td class="MPlayed">-</td>
                                <td class="MWon">-</td>
                                <td class="MDrawn">-</td>
                                <td class="MLost">-</td>
                                <td class='GDiff'>-</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class='col-md-6 matchrescont'>
                        <h4 class="text-center">Matches results</h4>
                        <div class="row matchres active">
                            <span class="col-md-3 teamatitle"></span>
                            <span class="col-md-3 teamares"></span>
                            <span class="col-md-3 teambres"></span>
                            <span class="col-md-3 teambtitle"></span>
                        </div>
                    </div>
                </div>
                <div class='actionBlock'>
                    <button data-week="0" type="button" class="btn btn-success play">Play</button>
                    <button data-week="0" type="button" class="btn btn-success next-week">Next week</button>
                </div>
            </div>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $( document ).ready(function() {
            $('body').on('click', '.play', function () {
                // $.get( "/final-result", function( data ) {
                // });
            })

            $('body').on('click', '.next-week', function () {
                let group = $('.active .groupId').val()
                let week = $('.active .play').data('week')
                week = parseInt(week+1)
                $('.card').removeClass('active')
                $('.card:first-child').clone().addClass('active').appendTo('.container');
                $('.active .week').html(week)
                $('.active .play').data('week', week)
                $('.active .next-week').data('week', week)
                $.get( "/next-week", { week: week, goup: group })
                    .done(function( data ) {
                    if(data != undefined) {
                        for (let i = 0; i < data.matches.length; i++) {
                            $('.card.active .active .teamatitle').html(data.matches[i].team_a)
                            $('.card.active .active .teambtitle').html(data.matches[i].team_b)
                            $('.card.active .active .teamares').html(data.matches[i].result_a)
                            $('.card.active .active .teambres').html(data.matches[i].result_b)
                            $('.card.active .matchres').removeClass('active')
                            if(i < data.matches.length-1) {
                                $('.card.active .matchres').clone().addClass('active').appendTo('.card.active .matchrescont');
                            }
                        }
                        if(data.final == true) {
                            $('.card.active .final').removeClass('hide')
                            $('.card').removeClass('active')
                        }
                        // $('.active .points').html(data.x)
                        // $('.active .MPlayed').html(data.x)
                        // $('.active .MWon').html(data.x)
                        // $('.active .MDrawn').html(data.x)
                        // $('.active .MLost').html(data.x)
                        // $('.active .GDiff').html(data.x)
                    }
                });
            })
        });
    </script>
</html>
