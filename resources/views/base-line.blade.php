@extends('layouts.master')

@push('css')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/elements/search.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
@endpush
@section('content')
    <!-- CONTENT AREA -->


    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-top-spacing layout-spacing">
            <div class="row justify-content-center">
                {{--  --}}
                <div class="col-md-8">
                    <div class="card component-card_1">
                        <div class="card-body">
                            @for ($i = 0; $i < 10; $i++)
                                <div class="custom-control custom-radio mb-4">
                                    <input type="radio" id="customRadio{{$i}}" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio{{$i}}">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure sed itaque error unde velit ut eos aut ipsum </label>
                                </div>
                            @endfor
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
                                        <input type="text" class="w-100 form-control product-search br-30" id="input-search" placeholder="Search Attendees...">
                                        <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                                    </div>
                                </form>
                            </div>
                            {{-- Desc --}}
                            <p class="mb-4">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vero, magni eius officiis, quibusdam reprehenderit eos nemo quas, minus esse ratione ipsum! Minus sapiente nemo cupiditate. Fuga ut quibusdam et!
                            </p>
                            {{-- Counter --}}

                            <div class="d-flex justify-content-between align-items-center">
                                <h2>136 / 152</h2>
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
@endpush
