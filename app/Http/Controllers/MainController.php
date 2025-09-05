<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        // get all the products data
        // $results = Product::all();

        // $results = Product::all()->toArray();

        // return the array results as an stdClass objects array
        //$results = $this->ArrayOfObjects(Product::all()->toArray());
        //$this->showData($results);

        // get products ordered by name
        /* $results = Product::orderBy('product_name')
                            ->get()
                            ->toArray(); */

        // get the first three products
        // $results = Product::limit(3)->get()->toArray();
        // $this->showData($results);

        // find by id
        $results = Product::find(10)->toArray();
        $this->showData($results);
    }

    private function showData($data)
    {
        echo '<pre>';
        print_r($data);
    }

    private function ArrayOfObjects($data)
    {
        $tmp = [];
        foreach($data as $key => $value)
        {
            $tmp[] = (object) $value;
        }

        return $tmp;
    }
}
