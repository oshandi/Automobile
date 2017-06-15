<?php
/**
 * Created by PhpStorm.
 * User: Jude
 * Date: 12/19/2016
 * Time: 4:26 AM
 */?>

@extends('layouts.master')

@section('title')
    @endsection

@section('content')
    <div id="itemView" class="container-fluid spacer mtop sDiv">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="row">
                    <div class="col-xs-12 itemViewName">
                        <div class="topbar"></div>
                        <div class="itemViewNameH">
                            <h3 class="text-center">{{$vehicleItem->title}}</h3>
                        </div>

                    </div>

                    <div class="col-xs-12 itemViewInfo sBox2">
                        <div id ="infoH1" class="itemViewInfoH">
                            <span><h4>Details</h4></span>
                        </div>

                        <div id="infoSec1" class="row itemViewInfoSec">

                            <div class="col-sm-6 col-xs-12">
                                <div class="row ">
                                    <div class="col-xs-5">
                                        <ul>
                                            <li><span>Stock No.</span></li>
                                            <li><span>Model</span></li>
                                            <li><span>Grade</span></li>
                                            <li><span>Mileage</span></li>
                                            <li><span>Transmission</span></li>
                                            <li><span>Steering</span></li>
                                            <li><span>Seats</span></li>
                                            <li><span>Color</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-7 ">
                                        <ul>
                                            <li>{{$vehicleItem->id}}</li>
                                            <li>{{$vehicleItem->model}}</li>
                                            <li>110</li>
                                            <li>{{$vehicleItem->mileage}}</li>
                                            <li>{{$vehicleItem->transmission}}</li>
                                            <li>{{$vehicleItem->steering}}</li>
                                            <li>{{$vehicleItem->seats}}</li>
                                            <li>{{$vehicleItem->color}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="col-xs-5 ">
                                        <ul>
                                            <li><span>Make</span></li>
                                            <li><span>Reg.Year</span></li>
                                            <li><span>Chassis</span></li>
                                            <li><span>Engine</span></li>
                                            <li><span>Fuel</span></li>
                                            <li><span>Drive</span></li>
                                            <li><span>Doors</span></li>
                                            <li><span>Location</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-7 ">
                                        <ul>
                                            <li>{{$vehicleItem->manufacturer}}</li>
                                            <li>{{$vehicleItem->model_year}}</li>
                                            <li>HCPUTD</li>
                                            <li>{{$vehicleItem->engine}}cc</li>
                                            <li>{{$vehicleItem->fuel}}</li>
                                            <li>{{$vehicleItem->drive}}</li>
                                            <li>{{$vehicleItem->doors}}</li>
                                            <li>{{$vehicleItem->country}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 itemViewInfo sBox2">
                        <div id ="infoH2" class="itemViewInfoH"><h4>Interior</h4></div>

                        <div id="infoSec2" class="row itemViewInfoSec">

                            <div class="col-sm-6 col-xs-12">
                                <div class="row ">
                                    <div class="col-xs-5">
                                        <ul>
                                            <li><span>Stock No.</span></li>
                                            <li><span>Model</span></li>
                                            <li><span>Grade</span></li>
                                            <li><span>Mileage</span></li>
                                            <li><span>Transmission</span></li>
                                            <li><span>Steering</span></li>
                                            <li><span>Seats</span></li>
                                            <li><span>Color</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-7 ">
                                        <ul>
                                            <li>xxx119</li>
                                            <li>Defender</li>
                                            <li>110</li>
                                            <li>xxxxx</li>
                                            <li>Manual</li>
                                            <li>Right Hand</li>
                                            <li>2</li>
                                            <li>Green</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="col-xs-5 ">
                                        <ul>
                                            <li><span>Make</span></li>
                                            <li><span>Reg.Year</span></li>
                                            <li><span>Chassis</span></li>
                                            <li><span>Engine</span></li>
                                            <li><span>Fuel</span></li>
                                            <li><span>Drive</span></li>
                                            <li><span>Doors</span></li>
                                            <li><span>Location</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-7 ">
                                        <ul>
                                            <li>Land Rover</li>
                                            <li>2013</li>
                                            <li>HCPUTD</li>
                                            <li>2,200 cc</li>
                                            <li>Diesel</li>
                                            <li>4WD</li>
                                            <li>2</li>
                                            <li>United Kingdom</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 itemViewInfo sBox2">
                        <div id ="infoH3" class="itemViewInfoH"><h4>Exterior</h4></div>
                        <div id="infoSec3" class="row itemViewInfoSec">

                            <div class="col-sm-6 col-xs-12">
                                <div class="row ">
                                    <div class="col-xs-5">
                                        <ul>
                                            <li><span>Stock No.</span></li>
                                            <li><span>Model</span></li>
                                            <li><span>Grade</span></li>
                                            <li><span>Mileage</span></li>
                                            <li><span>Transmission</span></li>
                                            <li><span>Steering</span></li>
                                            <li><span>Seats</span></li>
                                            <li><span>Color</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-7 ">
                                        <ul>
                                            <li>xxx119</li>
                                            <li>Defender</li>
                                            <li>110</li>
                                            <li>xxxxx</li>
                                            <li>Manual</li>
                                            <li>Right Hand</li>
                                            <li>2</li>
                                            <li>Green</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="col-xs-5 ">
                                        <ul>
                                            <li><span>Make</span></li>
                                            <li><span>Reg.Year</span></li>
                                            <li><span>Chassis</span></li>
                                            <li><span>Engine</span></li>
                                            <li><span>Fuel</span></li>
                                            <li><span>Drive</span></li>
                                            <li><span>Doors</span></li>
                                            <li><span>Location</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-7 ">
                                        <ul>
                                            <li>Land Rover</li>
                                            <li>2013</li>
                                            <li>HCPUTD</li>
                                            <li>2,200 cc</li>
                                            <li>Diesel</li>
                                            <li>4WD</li>
                                            <li>2</li>
                                            <li>United Kingdom</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 itemViewInfo sBox2">
                        <div id ="infoH4" class="itemViewInfoH"><h4>Equipment</h4></div>

                        <div id="infoSec4" class="row itemViewInfoSec">

                            <div class="col-sm-6 col-xs-12">
                                <div class="row ">
                                    <div class="col-xs-5">
                                        <ul>
                                            <li><span>Stock No.</span></li>
                                            <li><span>Model</span></li>
                                            <li><span>Grade</span></li>
                                            <li><span>Mileage</span></li>
                                            <li><span>Transmission</span></li>
                                            <li><span>Steering</span></li>
                                            <li><span>Seats</span></li>
                                            <li><span>Color</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-7 ">
                                        <ul>
                                            <li>xxx119</li>
                                            <li>Defender</li>
                                            <li>110</li>
                                            <li>xxxxx</li>
                                            <li>Manual</li>
                                            <li>Right Hand</li>
                                            <li>2</li>
                                            <li>Green</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="col-xs-5 ">
                                        <ul>
                                            <li><span>Make</span></li>
                                            <li><span>Reg.Year</span></li>
                                            <li><span>Chassis</span></li>
                                            <li><span>Engine</span></li>
                                            <li><span>Fuel</span></li>
                                            <li><span>Drive</span></li>
                                            <li><span>Doors</span></li>
                                            <li><span>Location</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-7 ">
                                        <ul>
                                            <li>Land Rover</li>
                                            <li>2013</li>
                                            <li>HCPUTD</li>
                                            <li>2,200 cc</li>
                                            <li>Diesel</li>
                                            <li>4WD</li>
                                            <li>2</li>
                                            <li>United Kingdom</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 itemViewInfo sBox2">
                        <div id ="infoH5" class="itemViewInfoH"><h4>Other</h4></div>

                        <div id="infoSec5" class="row itemViewInfoSec">

                            <div class="col-sm-6 col-xs-12">
                                <div class="row ">
                                    <div class="col-xs-5">
                                        <ul>
                                            <li><span>Stock No.</span></li>
                                            <li><span>Model</span></li>
                                            <li><span>Grade</span></li>
                                            <li><span>Mileage</span></li>
                                            <li><span>Transmission</span></li>
                                            <li><span>Steering</span></li>
                                            <li><span>Seats</span></li>
                                            <li><span>Color</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-7 ">
                                        <ul>
                                            <li>xxx119</li>
                                            <li>Defender</li>
                                            <li>110</li>
                                            <li>xxxxx</li>
                                            <li>Manual</li>
                                            <li>Right Hand</li>
                                            <li>2</li>
                                            <li>Green</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="col-xs-5 ">
                                        <ul>
                                            <li><span>Make</span></li>
                                            <li><span>Reg.Year</span></li>
                                            <li><span>Chassis</span></li>
                                            <li><span>Engine</span></li>
                                            <li><span>Fuel</span></li>
                                            <li><span>Drive</span></li>
                                            <li><span>Doors</span></li>
                                            <li><span>Location</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-7 ">
                                        <ul>
                                            <li>Land Rover</li>
                                            <li>2013</li>
                                            <li>HCPUTD</li>
                                            <li>2,200 cc</li>
                                            <li>Diesel</li>
                                            <li>4WD</li>
                                            <li>2</li>
                                            <li>United Kingdom</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-xs-12 text-center ">
                <div id="thumbnailCarousel" class="carousel slide" data-ride="carousel">
                    <div class='carousel-outer'>

                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="img-responsive" src="{{URL::to('src/img/1.jpeg')}}" alt="">
                            </div>

                            <div class="item">
                                <img class="img-responsive" src="{{URL::to('src/img/2.jpeg')}}" alt="">
                            </div>

                            <div class="item">
                                <img class="img-responsive" src="{{URL::to('src/img/3.jpeg')}}" alt="">
                            </div>

                            <div class="item">
                                <img class="img-responsive" src="{{URL::to('src/img/4.jpeg')}}" alt="">
                            </div>
                        </div>

                        <a class="left carousel-control" href="#thumbnailCarousel" data-slide="prev"><span class='glyphicon glyphicon-chevron-left'></span></a>
                        <a class="right carousel-control" href="#thumbnailCarousel" data-slide="next"><span class='glyphicon glyphicon-chevron-right'></span></a>
                    </div>

                    <ol class='carousel-indicators customThumbnailBar'>
                        <li data-target="#thumbnailCarousel" data-slide-to="0" class="active"><img class="img-responsive" src="img/1thumb.jpeg" alt='' /></li>
                        <li data-target="#thumbnailCarousel" data-slide-to="1"><img class="img-responsive" src="{{URL::to('src/img/2thumb.jpeg')}}" alt="" /></li>
                        <li data-target="#thumbnailCarousel" data-slide-to="2"><img class="img-responsive" src="{{URL::to('src/img/3thumb.jpeg')}}" alt="" /></li>
                        <li data-target="#thumbnailCarousel" data-slide-to="3"><img class="img-responsive" src="{{URL::to('src/img/4thumb.jpeg')}}" alt="" /></li>

                    </ol>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    <script>
        $(document).ready(function(){
            $('#thumbnailCarousel').carousel({
                interval: 2600
            });

        });

        $(document).ready(function(){
            $('#infoH1').on('click', function(event) {
                $('#infoSec1').fadeToggle(500);
            });

            $('#infoSec2').hide();
            $('#infoH2').on('click', function(event) {
                $('#infoSec2').fadeToggle(500);
            });

            $('#infoSec3').hide();
            $('#infoH3').on('click', function(event) {
                $('#infoSec3').fadeToggle(500);
            });

            $('#infoSec4').hide();
            $('#infoH4').on('click', function(event) {
                $('#infoSec4').fadeToggle(500);
            });

            $('#infoSec5').hide();
            $('#infoH5').on('click', function(event) {
                $('#infoSec5').fadeToggle(500);
            });
        });

        $(document).ready(function() {
            $(".customThumbnailBar").customThumbnailBar({axis:"x"});
        });

    </script>
    @endsection
