<?php
/**
 * Created by PhpStorm.
 * User: Jude
 * Date: 12/19/2016
 * Time: 1:23 AM
 */?>

@extends('layouts.master')

@section('title')
    Hash
    @endsection


@section('content')
    <header id="home">
        <div id="myCarousel" class="carousel slide banner-slider" data-ride="carousel">
            <div class='carousel-outer'>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{URL::to('src/img/1.jpeg')}}" alt="">
                    </div>

                    <div class="item">
                        <img src="{{URL::to('src/img/2.jpeg')}}" alt="">
                    </div>

                    <div class="item">
                        <img src="{{URL::to('src/img/3.jpeg')}}" alt="">
                    </div>

                    <div class="item">
                        <img src="{{URL::to('src/img/4.jpeg')}}" alt="">
                    </div>
                </div>

                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class='glyphicon glyphicon-chevron-left'></span></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class='glyphicon glyphicon-chevron-right'></span></a>
            </div>
        </div>
    </header>

    <div class="topbar"></div>
    <div id="about"  class="container-fluid spacer ">
        <h2 class="text-center">Welcome</h2>
        <p class="about">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.


            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>

        <button id="aboutMoreBtn" type="button" class="btn btn-default" data-toggle="modal" data-target="#aboutModal" style="float:right;">Read More</button>

        <div id="aboutModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">


                <div class="modal-content">
                    <div class="topbar"></div>

                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" style="color: #fff;"><i class="fa fa-times" aria-hidden="true"></i></button>
                        <h4 class="modal-title text-center">Company Name</h4>
                    </div>
                    <div class="modal-body spacer">
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                            Lorem ipsum dolor sit amet, ea epicurei convenire pro, ipsum noluisse ne est. Has et ridens audire, adhuc habemus nusquam ad mei, numquam feugait delectus ne duo. Te eam persecuti honestatis. Eu graecis vivendum vituperata nam. Wisi decore disputationi est ut, cu sit adipiscing dissentias, mea no conceptam theophrastus suscipiantur.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div id="services"  class="clearfix grid" >
        <figure class="effect-bubba">
            <img src="{{URL::to('src/img/20.jpg')}}" alt="">
            <figcaption>
                <h2>Our <span>Services</span></h2>
            </figcaption>
        </figure>
        <figure class="effect-bubba">
            <img src="{{URL::to('src/img/21.jpeg')}}" alt="">
            <figcaption>
                <h2>Our <span>Services</span></h2>
            </figcaption>
        </figure>
        <figure class="effect-bubba">
            <img src="{{URL::to('src/img/20.jpg')}}" alt="">
            <figcaption>
                <h2>Our <span>Services</span></h2>
            </figcaption>
        </figure>
        <figure class="effect-bubba">
            <img src="{{URL::to('src/img/21.jpeg')}}" alt="">
            <figcaption>
                <h2>Our <span>Services</span></h2>
            </figcaption>
        </figure>
        <figure class="effect-bubba">
            <img src="{{URL::to('src/img/20.jpg')}}" alt="">
            <figcaption>
                <h2>Our <span>Services</span></h2>
            </figcaption>
        </figure>
        <figure class="effect-bubba">
            <img src="{{URL::to('src/img/21.jpeg')}}" alt="">
            <figcaption>
                <h2>Our <span>Services</span></h2>
            </figcaption>
        </figure>
        <figure class="effect-bubba">
            <img src="{{URL::to('src/img/20.jpg')}}" alt="">
            <figcaption>
                <h2>Our <span>Services</span></h2>
            </figcaption>
        </figure>
        <figure class="effect-bubba">
            <img src="{{URL::to('src/img/21.jpeg')}}" alt="">
            <figcaption>
                <h2>Our <span>Services</span></h2>
            </figcaption>
        </figure>


    </div>

    @endsection

@section('scripts')


    @endsection