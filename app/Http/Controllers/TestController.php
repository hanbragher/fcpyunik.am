<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nationalities;
use App\Players;

class TestController extends Controller
{
    public function test(){

        //stanal voreve nationality
        echo Nationalities::find(1)->hy_nationality;

        echo Players::find(1)->birthday;

        echo \Carbon\Carbon::parse(Players::find(1)->birthday)->diffInYears(date_create('now'));//diffForHumans(date_create('now'));


    }
}
