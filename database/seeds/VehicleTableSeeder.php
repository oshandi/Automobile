<?php

use Illuminate\Database\Seeder;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $vehicle = new \App\Vehicle([
        'image_path'=>'..',
        'title'=>'Mustang',
        'manufacturer'=>'Ford',
        'model'=>'94Ford',
        'country'=>'US',
        'fuel'=>'Petrol',
        'transmission'=>'Manual',
        'steering'=>'Left',
        'category'=>'Car',
        'body_type'=>'sports',
        'v_condition'=>'brand new',
        'mileage'=>1111,
        'model_year'=>1994,
        'drive'=>'2WD',
        'price'=>1000000,
        'color'=>'Blue',
        'seats'=>2,
        'doors'=>2,
        'engine'=>6000,
        'description'=>'Mustang the beast'
    ]);

        $vehicle->save();


        $vehicle = new \App\Vehicle([
            'image_path'=>'..',
            'title'=>'Mustang',
            'manufacturer'=>'Ford',
            'model'=>'94Ford',
            'country'=>'US',
            'fuel'=>'Petrol',
            'transmission'=>'Manual',
            'steering'=>'Left',
            'category'=>'Car',
            'body_type'=>'sports',
            'v_condition'=>'brand new',
            'mileage'=>1111,
            'model_year'=>1994,
            'drive'=>'2WD',
            'price'=>1000000,
            'color'=>'Blue',
            'seats'=>2,
            'doors'=>2,
            'engine'=>6000,
            'description'=>'Mustang the beast'
        ]);

        $vehicle->save();



        $vehicle = new \App\Vehicle([
            'image_path'=>'..',
            'title'=>'Mustang',
            'manufacturer'=>'Ford',
            'model'=>'94Ford',
            'country'=>'US',
            'fuel'=>'Petrol',
            'transmission'=>'Manual',
            'steering'=>'Left',
            'category'=>'Car',
            'body_type'=>'sports',
            'v_condition'=>'brand new',
            'mileage'=>1111,
            'model_year'=>1994,
            'drive'=>'2WD',
            'price'=>1000000,
            'color'=>'Blue',
            'seats'=>2,
            'doors'=>2,
            'engine'=>6000,
            'description'=>'Mustang the beast'
        ]);

        $vehicle->save();





        $vehicle = new \App\Vehicle([
            'image_path'=>'..',
            'title'=>'Mustang',
            'manufacturer'=>'Ford',
            'model'=>'94Ford',
            'country'=>'US',
            'fuel'=>'Petrol',
            'transmission'=>'Manual',
            'steering'=>'Left',
            'category'=>'Car',
            'body_type'=>'sports',
            'v_condition'=>'brand new',
            'mileage'=>1111,
            'model_year'=>1994,
            'drive'=>'2WD',
            'price'=>1000000,
            'color'=>'Blue',
            'seats'=>2,
            'doors'=>2,
            'engine'=>6000,
            'description'=>'Mustang the beast'
        ]);

        $vehicle->save();





        $vehicle = new \App\Vehicle([
            'image_path'=>'..',
            'title'=>'Mustang',
            'manufacturer'=>'Ford',
            'model'=>'94Ford',
            'country'=>'US',
            'fuel'=>'Petrol',
            'transmission'=>'Manual',
            'steering'=>'Left',
            'category'=>'Car',
            'body_type'=>'sports',
            'v_condition'=>'brand new',
            'mileage'=>1111,
            'model_year'=>1994,
            'drive'=>'2WD',
            'price'=>1000000,
            'color'=>'Blue',
            'seats'=>2,
            'doors'=>2,
            'engine'=>6000,
            'description'=>'Mustang the beast'
        ]);

        $vehicle->save();




        $vehicle = new \App\Vehicle([
            'image_path'=>'src/img/vehicle.jpg',
            'title'=>'Mustang',
            'manufacturer'=>'Ford',
            'model'=>'94Ford',
            'country'=>'US',
            'fuel'=>'Petrol',
            'transmission'=>'Manual',
            'steering'=>'Left',
            'category'=>'Car',
            'body_type'=>'sports',
            'v_condition'=>'brand new',
            'mileage'=>1111,
            'model_year'=>1994,
            'drive'=>'2WD',
            'price'=>1000000,
            'color'=>'Blue',
            'seats'=>2,
            'doors'=>2,
            'engine'=>6000,
            'description'=>'Mustang the beast'
        ]);

        $vehicle->save();

    }
}
