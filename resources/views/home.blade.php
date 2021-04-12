@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel Uploading</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<!-- Styles -->
<style>
.container {
margin-top:2%;
}
</style>
</head>
<body>

<h1>Welcome!</h1>
<h1>{{ auth()->user()->name }}</h1>


<form action="http://localhost/my_laravel_project/public/multiuploads" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
<label for="Product Name">Product Name</label>
<input type="text" name="name" class="form-control"  placeholder="Product Name" >
</div>
<label for="Product Name">Product photos (can attach more than one):</label>
<br />
<input type="file" class="form-control" name="photos[]" multiple />
<br /><br />
<input type="submit" class="btn btn-primary" value="Upload" />
</form>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<canvas id="myChart_one" ></canvas>
<canvas id="myChart_two" ></canvas>
<canvas id="myChart_three"></canvas>

<script type="text/javascript">
    var ctx = document.getElementById('myChart_one');
    var myChart = new Chart(ctx, {
        type: 'polarArea',
        data: {
            labels: ["HTML", "CSS", "JS"],
            datasets: [
                { lable: 'Progress of project',
                data: [11, 10, 8],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(75, 192, 192)',
                    'rgb(255, 205, 86)'
                ],
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });


    var ctx_two = document.getElementById('myChart_two');
    var myChart_two = new Chart(ctx_two, {
        type: 'doughnut',
        data: {
            labels: ["work", "done"],
            datasets: [
                { lable: 'Progress of project',
                data: [11, 10],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(75, 192, 192)',
                ],
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

    var ctx_three = document.getElementById('myChart_three');
    var myChart_three = new Chart(ctx_three, {
        "type": "line",
        "data": {
            "labels": ["January", "February", "March", "April"],
            "datasets": [
                { "lable": 'Projects',
                "data": [20, 18, 22, 10],
                "fill": false, 
                "borderColor": "rgb(255, 99, 132)",
                "lineTension":0.1
                    
                }
            ]
        },
        options: {}
    });
  
</script>
</body>
</html>
@endsection
