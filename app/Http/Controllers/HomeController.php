<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        // User information
        $name = 'Alex';
        $city = 'Kozani';
        $profession = 'Delivery Service';
        $age = 37;


        // Products
        $products = [
            [
                'name' => 'Laptop',
                'price' => 1200,
                'stock' => 15
            ],

            [
                'name' => 'Mouse',
                'price' => 30,
                'stock' => 0
            ],

            [
                'name' => 'Keyboard',
                'price' => 80,
                'stock' => 8
            ]

        ];


        return view('home', [
            'name' => $name,
            'city' => $city,
            'profession' => $profession,
            'age' => $age,
            'products' => $products,
        ]);
    }
}
