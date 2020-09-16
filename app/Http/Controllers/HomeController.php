<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function index(){
        // dd("OK");
        Excel::load('data.xlsx', function ($reader) {
            dd($reader->toArray());
            foreach ($reader->toArray() as $row) {
               
            }
        });
    }
}
