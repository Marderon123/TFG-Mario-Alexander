@extends('adminlte::page')
@section('title', 'ConsulTS')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="row col-12">
    <div class="info-box bg-gray row col-4">
        <span class="info-box-icon"><i class="fa fa-comments"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Comments</span>
            <span class="info-box-number">41,410</span>
            <div class="progress">
                <div class="progress-bar" style="width: 90%"></div>
            </div>
            <span class="progress-description">
                90% Increase in 2 months
            </span>
        </div>
    </div>
    <div class="info-box bg-teal row col-4">
        <span class="info-box-icon"><i class="fa fa-thumbs-up"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Likes</span>
            <span class="info-box-number">41,410</span>
            <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
            </div>
            <span class="progress-description">
                50% Increase in 20 Days
            </span>
        </div>
    </div>
    <div class="info-box bg-purple row col-4">
        <span class="info-box-icon"><i class="fa fa-calendar-alt"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Events</span>
            <span class="info-box-number">41,410</span>
            <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
            </div>
            <span class="progress-description">
                70% Increase in 30 Days
            </span>
        </div>
    </div>
</div>
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
