@extends('layouts.master')

@push('css')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/components/cards/card.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/elements/miscellaneous.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/elements/breadcrumb.css" rel="stylesheet" type="text/css" />
    <link href="plugins/bootstrap-range-Slider/bootstrap-slider.css" rel="stylesheet" type="text/css">
    <style>
        .component-card_1 {
            width: auto;
        }
    </style>
    <!--  END CUSTOM STYLE FILE  -->
@endpush
@php
$wheel[0] = 'Health';
$wheel[1] = 'Friends & Family';
$wheel[2] = 'Fun, Leisure & Recreation';
$wheel[3] = 'Wealth';
$wheel[4] = 'Relationship';
$wheel[5] = 'Learning & Personal Growth';
$wheel[6] = 'Possessions';
$wheel[7] = 'Career';
@endphp
@section('content')
    <!-- CONTENT AREA -->


    <div class="row ">
        {{-- breadcrumbs --}}
        <div class="page-header ml-3 w-100">
            <nav class="breadcrumb-two" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Practices</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Wheel Of Life</a></li>
                </ol>
            </nav>
            <a href="./wheel-of-result">
                <button class="btn btn-info btn-lg mr-4">Submit</button>
            </a>
        </div>
        {{-- breadcrumbs --}}
        <div class="col-12 layout-top-spacing layout-spacing justify-content-center">
            <div class="row ">
                {{--  --}}
                @for ($i = 0; $i < 8; $i++)
                    <div class="col-md-6 p-4">
                        <div class="card component-card_1">
                            <div class="card-body">
                                <h5 class="card-title">{{ $wheel[$i] }}</h5>
                                <div class="custom-progress top-right progress-up" style="width: 100%">
                                    <div class="range-count"><span class="range-count-number" data-rangecountnumber="0">0</span> <span class="range-count-unit">%</span></div>
                                    <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="0">
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
                {{--  --}}
            </div>
        </div>
    </div>


    <!-- CONTENT AREA -->
@endsection
@push('js')
    <script src="plugins/bootstrap-range-Slider/bootstrap-rangeSlider.js"></script>
@endpush
