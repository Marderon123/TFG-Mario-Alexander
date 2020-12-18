@extends('adminlte::page')
@section('title', 'ConsulTS')

@section('content_header')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Graphics</h1>
    <button href="" type="button" class="btn btn-primary btn-lg">
        <i class="fas fa-plus-circle fa-sm text-white-50"></i> Add
    </button>
</div>
@stop

@section('content')
<div class="row col-12">
    <div class="row col-6">
        <canvas id="myChart"></canvas>
    </div>
    <div class="row col-6">
        <canvas id="myRadarChart"></canvas>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: '#20B2AA',
                borderColor: 'B0C4DE',
                data: [0, 10, 5, 2, 20, 30, 45]
            }]
        },

        // Configuration options go here
        options: {}
    });
</script>
<script>
    var ctx = document.getElementById('myRadarChart').getContext('2d');
    let myRadarChart = new Chart(ctx, {
        type: 'radar',
        data: {
            datasets: [{
                label: 'First dataset',
                backgroundColor: 'orange',
                data: [-30, 20, 60, 80]
            }],
            labels: ['January', 'February', 'March', 'April']
        },
        options: {
            scale: {
                ticks: {
                    suggestedMin: 50,
                    suggestedMax: 100
                }
            }
        }
    });
</script>
@stop
