@extends('layouts.master')

@push('css')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/components/cards/card.css" rel="stylesheet" type="text/css" />
    <style>
        .component-card_1 {
            width: 30rem;
        }
    </style>
    <link href="assets/css/elements/miscellaneous.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/elements/breadcrumb.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
@endpush

@section('content')
    <!-- CONTENT AREA -->


    <div class="row ">
        {{-- breadcrumbs --}}
        <div class="page-header ml-3 w-100">
            <nav class="breadcrumb-two" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/index">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Practices</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Wheel Of Life</a></li>
                </ol>
            </nav>
            <a href="./wheel-of-life">
                <button class="btn btn-info btn-lg mr-4">Undo</button>
            </a>
        </div>
        {{-- breadcrumbs --}}
        <div class="col-12 layout-top-spacing layout-spacing ">
            <div class="row justify-content-center">
                {{--  --}}
                <div class="col-12">
                    <div class="card component-card_1">
                        <div class="card-body">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
                {{--  --}}
            </div>
        </div>
    </div>


    <!-- CONTENT AREA -->
@endsection
@push('js')

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('myChart');
        var ctx = document.getElementById('myChart').getContext('2d');
        var ctx = $('#myChart');
        var ctx = 'myChart';
        var ctx = document.getElementById('myChart');
        let result = localStorage.getItem('wheel-chart');
        var myChart = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: [
                    'Red',
                    'Green',
                    'Yellow',
                    'Grey',
                    'Blue',
                    'Burble',
                    'Fan',
                    'Black',
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: result,
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(75, 192, 192)',
                        'rgb(255, 205, 86)',
                        'rgb(201, 203, 207)',
                        'rgb(54, 162, 235)',
                        '#5c1ac3',
                        '#ffe1e2',
                        '#e2a03f',
                    ]
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endpush
