@extends('layouts.master')

@push('css')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/components/cards/card.css" rel="stylesheet" type="text/css" />
    <style>
        .component-card_1 {
            width: auto;
        }

        <style>.card {
            background-color: #000;
            font-family: 'Roboto', sans-serif;
            background: #e0e6ed;
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
@section('content')
    <!-- CONTENT AREA -->


    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-top-spacing layout-spacing">
            <div class="row justify-content-center">

                <div class="col-md-4">
                    {{--  --}}
                    <div class="card component-card_1">
                        <div class="card-body">
                            <div class="container">
                                <div class="range-slider">
                                    <span id="rs-bullet" class="rs-label">0</span>
                                    <input id="rs-range-line" class="rs-range" type="range" value="0" min="0"
                                        max="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                </div>

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
            rangeBullet.style.left = (bulletPosition * 358) + "px";
        }
    </script>
@endpush
