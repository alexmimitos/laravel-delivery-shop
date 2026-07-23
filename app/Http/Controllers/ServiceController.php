<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services');
    }

    public function show($id)
    {
        $services = [

            [
                'id' => 1,
                'name' => 'Food Delivery',
                'price' => 4.50,
                'stock' => 20
            ],

            [
                'id' => 2,
                'name' => 'Super Market Delivery',
                'price' => 6.00,
                'stock' => 15
            ],

            [
                'id' => 3,
                'name' => 'Courier',
                'price' => 5.00,
                'stock' => 5
            ],

            [
                'id' => 4,
                'name' => 'Pharmacy Delivery',
                'price' => 5.50,
                'stock' => 12
            ],

        ];

        foreach ($services as $service) {
            if ($service['id'] == $id) {
                return view ('service', ['service' => $service]);
            }
        }
    }
}
