<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="container card">
            <div class='row'>
                <div class="col-md-6">
                    <h4 class="text-center">Simulation of Group: {{$title}}</h4>
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
                            <td>{{$team->points}}</td>
                            <td>{{$team->matches_played}}</td>
                            <td>{{$team->matches_won}}</td>
                            <td>{{$team->matches_drawn}}</td>
                            <td>{{$team->matches_lost}}</td>
                            <td>{{$team->goals_difference}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class='col-md-6'>
                    <h4 class="text-center"> <span id="week">1</span>º Week predictions of championship</h4>
                </div>
            </div>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</html>
