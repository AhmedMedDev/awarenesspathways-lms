@extends('layouts.master')

@push('css')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/components/cards/card.css" rel="stylesheet" type="text/css" />
    <style>
        .component-card_1 {
            width: auto;
        }

    </style>
    <link href="assets/css/elements/search.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/elements/custom-pagination.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/elements/miscellaneous.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/elements/breadcrumb.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
@endpush
@section('content')
    <!-- CONTENT AREA -->


    <div class="row">
        {{-- breadcrumbs --}}
        <div class="page-header ml-3">
            <nav class="breadcrumb-two" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Practices</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">N Codes - E Codes</a></li>
                </ol>
            </nav>
        </div>
        {{-- breadcrumbs --}}
        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-top-spacing layout-spacing">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card component-card_1">
                        <div class="card-body text-center ">
                            @for ($i = 0; $i < 10; $i++)
                                <button class="btn btn-primary w-50  mb-4 mr-2 btn-lg word"> {{ $i + 1 }} .
                                    reprehenderit</button>
                            @endfor
                            {{--  --}}
                            <div class="paginating-container pagination-solid">
                                <ul class="pagination">
                                    <li class="prev"><a href="javascript:void(0);">Prev</a></li>
                                    <li><a href="javascript:void(0);">1</a></li>
                                    <li class="active"><a href="javascript:void(0);">2</a></li>
                                    <li><a href="javascript:void(0);">3</a></li>
                                    <li class="next"><a href="javascript:void(0);">Next</a></li>
                                </ul>
                            </div>
                            {{--  --}}
                        </div>
                    </div>
                </div>
                {{--  --}}
                <div class="col-md-4">
                    <div class="card component-card_1">
                        <div class="card-body">
                            {{-- Search --}}
                            <div class="filtered-list-search mx-auto">
                                <form class="form-inline my-2 my-lg-0 justify-content-center">
                                    <div class="w-100">
                                        <input type="text" class="w-100 form-control product-search br-30" id="input-search"
                                            placeholder="Search Attendees...">
                                        <button class="btn btn-primary" type="submit"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg></button>
                                    </div>
                                </form>
                            </div>
                            {{-- Desc --}}
                            <p class="mb-4">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vero, magni eius officiis,
                                quibusdam reprehenderit eos nemo quas, minus esse ratione ipsum! Minus sapiente nemo
                                cupiditate. Fuga ut quibusdam et!
                            </p>
                            {{-- Counter --}}

                            <div class="d-flex justify-content-between align-items-center">
                                <h2>
                                    <span id="picked">0</span>
                                    /
                                    <span id="maxPicked">5</span>
                                </h2>
                                <button class="btn btn-info  btn-lg">Submit</button>
                            </div>
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
    <script src="plugins/font-icons/feather/feather.min.js"></script>
    <script>
        $('.word').on('click', function() {

            if ($(this).hasClass('btn-primary')) {
                if ( +$('#picked').text() < +$('#maxPicked').text()) {
                    $(this).removeClass('btn-primary')
                    $(this).addClass('btn-dark')
                    $('#picked').text(+$('#picked').text() + 1)
                }

            } else {
                $(this).removeClass('btn-dark')
                $(this).addClass('btn-primary')
                $('#picked').text(+$('#picked').text() - 1)
            }
        })
        feather.replace();
    </script>
@endpush
