<?php
/**
 * Created by PhpStorm.
 * User: Jude
 * Date: 12/29/2016
 * Time: 9:33 PM
 */?>
 @extends('layouts.master')

    <div class="col-lg-12 contactform center">
        <div class="row">
            <input class="form-control" type="text" placeholder="Title" >
            <input class="form-control" type="text" placeholder="Manufacturer">
            <input class="form-control" type="text" placeholder="Model">
            <input class="form-control" type="text" placeholder="Country">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">JavaScript</a></li>
                </ul>
            </div>
            <textarea class="form-control" rows="5" placeholder="Description"></textarea>
            <button class="btn btn-default" style="float:right;">Send</button>
        </div>
    </div>



