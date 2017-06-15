<?php
/**
 * Created by PhpStorm.
 * User: Jude
 * Date: 12/19/2016
 * Time: 4:50 AM
 */?>
@extends('layouts.spec')

@section('title')
    @endsection


@section('content')

    <div id="stockMain" class="container-fluid spacer">
        <div class="row">
            <div class="col-lg-3 col-md-4 hidden-sm hidden-xs">

                <div class="stockFilter sDiv">
                    <form>
                        <div class="topbar"></div>
                        <h3 class="text-center">Filter By</h3>
                        <div class="stockFilterSec">
                            <label for="priceslider"><h4>Price ( USD )</h4></label>
                            <br>
                            <input class="sliderInput" type="text" id="priceslider">
                            <div id="slider-1"></div>
                        </div>
                        <div class="stockFilterSec">
                            <label for="yearslider"><h4>Year</h4></label>
                            <br>
                            <input class="sliderInput" type="text" id="yearslider">
                            <div id="slider-2"></div>
                        </div>
                        <div class="stockFilterSec">
                            <label for="engineslider"><h4>Engine ( cc )</h4></label>
                            <br>
                            <input class="sliderInput" type="text" id="engineslider">
                            <div id="slider-3"></div>
                        </div>
                        <div class="stockFilterSec">
                            <h4>Body Type</h4>
                            <ul>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Car</label></li>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">SUV</label></li>
                            </ul>
                            <ul>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Van</label></li>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Bike</label></li>
                            </ul>
                            <ul>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Bus</label></li>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Truck</label></li>
                            </ul>
                            <ul>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Pickup</label></li>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Machinery</label></li>
                            </ul>
                            <ul>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Boat</label></li>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Other</label></li>
                            </ul>
                        </div>
                        <div class="stockFilterSec">
                            <h4>Steering</h4>
                            <ul>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Left Hand</label></li>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Right Hand</label></li>
                            </ul>
                        </div>
                        <div class="stockFilterSec">
                            <h4>Transmission</h4>
                            <ul>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Automatic</label></li>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Manual</label></li>
                            </ul>
                        </div>
                        <div class="stockFilterSec">
                            <h4>Fuel</h4>
                            <ul>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Diesel</label></li>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Diesel/Hybrid</label></li>
                            </ul>
                            <ul>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">CNG</label></li>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Electric</label></li>
                            </ul>
                            <ul>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Gasoline</label></li>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Gasoline/LPG</label></li>
                            </ul>
                            <ul>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">LPG</label></li>
                                <li><label class="checkbox-inline"><input type="checkbox" value="">Hybrid</label></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-xs-12">

           @if(!empty($vehicles))
           @foreach($vehicles->chunk(1) as $vehicleChunk)
                <div class="stockItem container-fluid sBox2">
                    <div class="row spacer2">
                        @foreach($vehicleChunk as $vehicle)
                            <div class="col-md-4 col-sm-5 col-xs-12 stockItemImg">
                                <a href=""><img class="img-thumbnail" src="{{$vehicle->image_path}}" alt=""></a>
                            </div>
                            <div class="col-md-8 col-sm-7 col-xs-12 stockItemInfo">
                                <div class="row">
                                    <div class="stockItemInfoH">
                                        <a href=""><h3>{{$vehicle->tite}}</h3></a>
                                        <h4>Now On Sale</h4>
                                    </div>
                                    <div class="col-lg-8 col-xs-12">
                                        <ul>
                                            <li>Stock No. #14222</li>
                                            <li data-toggle="tooltip" title="Engine">{{$vehicle->engine}}CC</li>
                                            <li data-toggle="tooltip" title="Fuel">{{$vehicle->fuel}}</li>
                                            <li data-toggle="tooltip" title="Transmission">{{$vehicle->transmission}}</li>
                                            <li data-toggle="tooltip" title="Drive">{{$vehicle->steering}}</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-xs-12 stockItemInfoP">
                                        <h4 >FOB Price</h4><h3>{{$vehicle->price}} USD</h3>
                                        <button type="button" class="btn btn-default mcustom"  onclick=window.location='{{URL::route('showItem',['id' => $vehicle->id])}}'>VIEW DETAILS</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                            @endforeach

               @endforeach
               @endif




            </div>
        </div>
    </div>


@endsection

@section('scripts')
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>--}}

    <script>

        $(document).ready(function(){
            $.widget.bridge('uitooltip', $.ui.tooltip);
            $.widget.bridge('uibutton', $.ui.button);
            $('[data-toggle="tooltip"]').tooltip();
        });

        $(function() {
            $( "#slider-1" ).slider({
                range:true,
                min: 0,
                max: 50000,
                values: [ 10000, 25000 ],
                slide: function( event, ui ) {
                    $( "#priceslider" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                }
            });
            $( "#priceslider" ).val( "$" + $( "#slider-1" ).slider( "values", 0 ) +
                    " - $" + $( "#slider-1" ).slider( "values", 1 ) );
        });

        $(function() {
            $( "#slider-2" ).slider({
                range:true,
                min: 0,
                max: 50000,
                values: [ 10000, 25000 ],
                slide: function( event, ui ) {
                    $( "#yearslider" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                }
            });
            $( "#yearslider" ).val( "$" + $( "#slider-2" ).slider( "values", 0 ) +
                    " - $" + $( "#slider-2" ).slider( "values", 1 ) );
        });

        $(function() {
            $( "#slider-3" ).slider({
                range:true,
                min: 0,
                max: 50000,
                values: [ 10000, 25000 ],
                slide: function( event, ui ) {
                    $( "#engineslider" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                }
            });
            $( "#engineslider" ).val( "$" + $( "#slider-3" ).slider( "values", 0 ) +
                    " - $" + $( "#slider-3" ).slider( "values", 1 ) );
        });


    </script>
    @endsection
