<?php
/**
 * Created by PhpStorm.
 * User: Jude
 * Date: 12/19/2016
 * Time: 2:29 AM
 */?>

<nav class="navbar navbar-inverse navbar-fixed-top" id="nav-custom-style" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#NavbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="{{route('home')}}"><img src="img/logo.png" alt=""></a>
        </div>

        <div class="collapse navbar-collapse" id="NavbarCollapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="{{route('stock')}}">Stock</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a id="searchbtn" href="#home"><i class="fa fa-search"></i> Search</a></li>
            </ul>
        </div>

    </div>
</nav>

<div id="searchbar" class="container-fluid popupSearch">
    <form class="form-inline" action="{{route('vehicles.results')}}" method="post">
        <div class="form-group">
            <label class="sr-only" for="maker">Maker</label>
            <select class="form-control" id="maker" name="maker">
                <option>Maker</option>
                <option>All</option>
                <option>Toyota</option>
                <option>Honda</option>
                <option>Nissan</option>
            </select>
        </div>
        <div class="form-group">
            <label class="sr-only" for="model">Model</label>
            <select class="form-control" id="model" name="model">
                <option>Model</option>
                <option>All</option>
                <option>Toyota</option>
                <option>Honda</option>
                <option>Nissan</option>
            </select>
        </div>
        <div class="form-group">
            <label class="sr-only" for="yearfrom">Year From</label>
            <select class="form-control" id="yearfrom" name="yearfrom">
                <option>Year From</option>
                <option>All</option>
                <option>Toyota</option>
                <option>Honda</option>
                <option>Nissan</option>
            </select>
        </div>
        <div class="form-group">
            <label class="sr-only" for="yearto">Year To</label>
            <select class="form-control" id="yearto" name="yearto">
                <option>Year To</option>
                <option>All</option>
                <option>Toyota</option>
                <option>Honda</option>
                <option>Nissan</option>
            </select>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="search" placeholder=" Search by Keywords">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default" style="opacity:1;"><i class="fa fa-search"></i></button>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-default" style="opacity:1;">More</button>
        </div>
        <div class="form-group">
            <button id="searchbtnclose" type="button" class="btn btn-default" style="opacity:1;"><i class="fa fa-times"></i></button>
        </div>
        {{csrf_field()}}
    </form>

</div>
<script src="{{URL::to('src/js/basic.js')}}"></script>