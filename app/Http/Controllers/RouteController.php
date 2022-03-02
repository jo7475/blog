<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function main(){
        $name=array(
            'title'=>'yohanes',
            'services'=>['man','woman','both'],
        );
        return view('pages.main')->with($name);
    }
}
