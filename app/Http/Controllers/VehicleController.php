<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class VehicleController extends Controller
{
    //stock page's initial method included on load for populating dropdown of advance search
    public function getAllCars(){
        $vehicle = Vehicle::all();
    //populate car brands in advanced search
        $brands = Vehicle::all()->unique("manufacturer");
        return view('vehicles.stock',['vehicles'=>$vehicle,'brands'=>$brands]);
    }


    //View by item ID
    public function getProduct($id){
        $vehicle = Vehicle::find($id);
        return view('vehicles.itemView',['vehicleItem'=>$vehicle]);

    }

    // search Page's initial method on load
    public function searchCar(){

        $brands = Vehicle::all()->unique("manufacturer");
        return view('vehicles.search',['brands'=>$brands]);

    }

    public function viewCars(Request $request){       //for normal search option

        $manufacturer = $request['maker'];
        $model = $request['model'];
        $yearfrom = $request['yearfrom'];
        $yearto = $request['yearto'];
        $search = $request['search']; //by Keyword

        $brands = Vehicle::all()->unique("manufacturer"); //on page load populate advance search method's car brands dropwdown

        $q = Vehicle::query(); //for querying the table

        if($manufacturer && !empty($manufacturer)){
            $q->where('manufacturer','LIKE','%'.$manufacturer.'%' )->orWhere( 'title','LIKE','%'.$manufacturer.'%');

        }

        if($model && !empty($model)){
            $q->where('model','LIKE','%'.$model.'%' )->orWhere( 'title','LIKE','%'.$model.'%');
        }

        if(!empty($yearfrom) && !empty($yearto)){
            $q->whereBetween('model_year',array($yearfrom,$yearto) )->get();
        }

//     for searching by keyword in any column
        if($search && !empty($search)){
            $q->where('manufacturer','LIKE','%'.$search.'%' )
                ->orWhere( 'title','LIKE','%'.$search.'%')->orWhere('model','LIKE','%'.$search.'%');
        }

        $results = $q->get();
        return view('vehicles.stock',['vehicles'=>$results,'brands'=>$brands]);

    }
}
