<?php
/**
 * Created by PhpStorm.
 * User: Jude
 * Date: 2/5/2017
 * Time: 5:23 AM
 */?>

<div id="searchAdvanced" class="container-fluid spacer mtop">
    <h3 class="text-center">Search</h3>
    <div class="row sDiv">
        <form>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="form-group">
                    <label class="sr-only" for="maker">Maker</label>
                    <select class="form-control" id="maker">
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->manufacturer}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="form-group">
                    <label class="sr-only" for="model">Model</label>
                    <select class="form-control" id="model">
                        <option>Model</option>
                        <option>All</option>
                        <option>Toyota</option>
                        <option>Honda</option>
                        <option>Nissan</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="row">
                    <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                            <label class="sr-only" for="yearfrom">Year From</label>
                            <select class="form-control" id="yearfrom">
                                <option>Year From</option>
                                <option>All</option>
                                <option>Toyota</option>
                                <option>Honda</option>
                                <option>Nissan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                            <label class="sr-only" for="yearto">Year To</label>
                            <select class="form-control" id="yearto">
                                <option>Year To</option>
                                <option>All</option>
                                <option>Toyota</option>
                                <option>Honda</option>
                                <option>Nissan</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="row">
                    <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                            <label class="sr-only" for="pricefrom">Price From</label>
                            <select class="form-control" id="pricefrom">
                                <option>Price From</option>
                                <option>All</option>
                                <option>Toyota</option>
                                <option>Honda</option>
                                <option>Nissan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                            <label class="sr-only" for="priceto">Price To</label>
                            <select class="form-control" id="priceto">
                                <option>Price To</option>
                                <option>All</option>
                                <option>Toyota</option>
                                <option>Honda</option>
                                <option>Nissan</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="form-group">
                    <label class="sr-only" for="steering">Steering</label>
                    <select class="form-control" id="steering">
                        <option>Steering</option>
                        <option>All</option>
                        <option>Toyota</option>
                        <option>Honda</option>
                        <option>Nissan</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="form-group">
                    <label class="sr-only" for="engine">Engine</label>
                    <select class="form-control" id="engine">
                        <option>Engine</option>
                        <option>All</option>
                        <option>Toyota</option>
                        <option>Honda</option>
                        <option>Nissan</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="form-group">
                    <label class="sr-only" for="type">Type</label>
                    <select class="form-control" id="type">
                        <option>Type</option>
                        <option>All</option>
                        <option>Toyota</option>
                        <option>Honda</option>
                        <option>Nissan</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="form-group">
                    <label class="sr-only" for="bodytype">Body Type</label>
                    <select class="form-control" id="bodytype">
                        <option>Body Type</option>
                        <option>All</option>
                        <option>Toyota</option>
                        <option>Honda</option>
                        <option>Nissan</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="form-group">
                    <label class="sr-only" for="fuel">Fuel</label>
                    <select class="form-control" id="fuel">
                        <option>Fuel</option>
                        <option>All</option>
                        <option>Toyota</option>
                        <option>Honda</option>
                        <option>Nissan</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="form-group">
                    <label class="sr-only" for="transmission">Transmission</label>
                    <select class="form-control" id="transmission">
                        <option>Transmission</option>
                        <option>All</option>
                        <option>Toyota</option>
                        <option>Honda</option>
                        <option>Nissan</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="row">
                    <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                            <label class="sr-only" for="mileagefrom">Mileage From</label>
                            <select class="form-control" id="mileagefrom">
                                <option>Mileage From</option>
                                <option>All</option>
                                <option>Toyota</option>
                                <option>Honda</option>
                                <option>Nissan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                            <label class="sr-only" for="mileageto">Mileage To</label>
                            <select class="form-control" id="mileageto">
                                <option>Mileage To</option>
                                <option>All</option>
                                <option>Toyota</option>
                                <option>Honda</option>
                                <option>Nissan</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="form-group">
                    <label class="sr-only" for="2wd4wd">2WD/4WD</label>
                    <select class="form-control" id="2wd4wd">
                        <option>2WD/4WD</option>
                        <option>All</option>
                        <option>Toyota</option>
                        <option>Honda</option>
                        <option>Nissan</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="form-group">
                    <label class="sr-only" for="country">Country</label>
                    <select class="form-control" id="country">
                        <option>Country</option>
                        <option>All</option>
                        <option>Toyota</option>
                        <option>Honda</option>
                        <option>Nissan</option>
                    </select>
                </div>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="search" placeholder=" Search for Make, Model, Chassis, Stock Number etc.">
                </div>
            </div>
            <div class="col-md-12 col-xs-12">
                <label class="checkbox-inline"><input type="checkbox" value="">Used</label>
                <label class="checkbox-inline"><input type="checkbox" value="">Brand New</label>
            </div>
            <div class="col-md-12 col-xs-12 text-center">
                <button type="submit" class="btn btn-default mcustom" id="bttn">Search</button>
                <button type="button" class="btn btn-default mcustom">Reset</button>
            </div>

    </div>
    </form>
</div>
</div>
<script src="{{URL::to('src/js/basic.js')}}"></script>



