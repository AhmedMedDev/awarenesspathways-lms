@extends('layouts.master')

@push('css')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/components/cards/card.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/elements/miscellaneous.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/elements/breadcrumb.css" rel="stylesheet" type="text/css" />
    <style>
        .component-card_1 {
            width: auto;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .box-minmax {
            margin-top: 30px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            font-size: 20px;
            color: #FFFFFF;
        }

        .box-minmax span:first-child {
            margin-left: 10px;
        }

        .range-slider {
            width: 100%;
        }

        .rs-range {
            margin-top: 29px;
            width: 100%;
            -webkit-appearance: none;
        }

        .rs-range:focus {
            outline: none;
        }

        .rs-range::-webkit-slider-runnable-track {
            width: 100%;
            height: 1px;
            cursor: pointer;
            box-shadow: none;
            background: #4361ee;
            border-radius: 0px;
            border: 0px solid #010101;
        }

        .rs-range::-moz-range-track {
            width: 100%;
            height: 1px;
            cursor: pointer;
            box-shadow: none;
            background: #ffffff;
            border-radius: 0px;
            border: 0px solid #010101;
        }

        .rs-range::-webkit-slider-thumb {
            box-shadow: none;
            border: 0px solid #ffffff;
            box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.25);
            height: 42px;
            width: 22px;
            border-radius: 22px;
            background: #3b3f5c;
            cursor: pointer;
            -webkit-appearance: none;
            margin-top: -20px;
        }

        .rs-range::-moz-range-thumb {
            box-shadow: none;
            border: 0px solid #ffffff;
            box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.25);
            height: 42px;
            width: 22px;
            border-radius: 22px;
            background: rgba(255, 255, 255, 1);
            cursor: pointer;
            -webkit-appearance: none;
            margin-top: -20px;
        }

        .rs-range::-moz-focus-outer {
            border: 0;
        }

        .rs-label {

            position: relative;
            transform-origin: center center;
            display: block;
            width: 75px;
            height: 75px;
            background: transparent;
            border-radius: 50%;
            line-height: 30px;
            text-align: center;
            font-weight: bold;
            padding-top: 22px;
            box-sizing: border-box;
            border: 2px solid #3b3f5c;
            margin-top: 20px;
            margin-left: -26px;
            color: #4361ee;
            font-style: normal;
            font-weight: normal;
            font-size: 25px;
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
@endphp
@section('content')
    <!-- CONTENT AREA -->


    <div class="row ">
        {{-- breadcrumbs --}}
        <div class="page-header ml-3">
            <nav class="breadcrumb-two" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Practices</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">BaseLine</a></li>
                </ol>
            </nav>
        </div>
        {{-- <button class="btn btn-info btn-lg ml-3">Submit</button> --}}
        {{-- breadcrumbs --}}
        <div class="col-12 layout-top-spacing layout-spacing justify-content-center">
            <div class="row ">
                {{--  --}}
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-md-6 p-4">
                        <div class="card component-card_1">
                            <div class="card-body">
                                <h5 class="card-title">{{ $wheel[$i] }}</h5>
                                <div class="container">
                                    <div class="range-slider">
                                        {{-- <span id="rs-bullet" class="rs-label">0</span> --}}
                                        <input id="rs-range-line" class="rs-range" type="range" value="0" min="0"
                                            max="100">
                                    </div>
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
    <script>
        var rangeSlider = document.getElementById("rs-range-line");
        var rangeBullet = document.getElementById("rs-bullet");

        rangeSlider.addEventListener("input", showSliderValue, false);

        function showSliderValue() {
            rangeBullet.innerHTML = rangeSlider.value;
            var bulletPosition = (rangeSlider.value / rangeSlider.max);
            // rangeBullet.style.left = (bulletPosition * 358) + "px";
        }
    </script>
@endpush
