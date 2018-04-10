<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nationalities;
use App\Players;
use App\Positions;
use App\Seasons;
use App\Statuses;
use App\Teams;
use App\Persons;

class TestController extends Controller
{
    public function test(){

        //stanal voreve nationality
        echo Nationalities::find(1)->hy_nationality.'<br>';

        //vor seasozy inch xaxacoxner uni
        $season_player = Seasons::find(1)->players;
        foreach($season_player as $spl){
            dump($spl->hy_name);
        }

        //vor statusy inch playerner uni
        $status_player = Statuses::find(1)->players->get();
        foreach($status_player as $stpl){
            dump($stpl->hy_name);
        }


        //vor teamy inch playerner uni
        $team_player = Teams::find(1)->players->get();
        foreach($team_player as $tpl){
            dump($tpl->hy_name);
        }


//////////
        //stanal xaxacoxic informacia
        echo Players::find(1)->hy_name.'<br>';

        //vor playery inch nationality uni
        $player_nationality = Players::find(1)->nationalities;
        foreach($player_nationality as $pln){
            dump($pln->hy_nationality);
            //dump($pln->ru_nationality);
            //dump($pln->en_nationality);
        }

        //vor playery inch season uni
        $player_season = Players::find(1)->seasons;
        foreach($player_season as $pls){
            dump($pls->season);

        }

        //erb acnvel xaxacoxy
        echo Players::find(1)->birthday.'<br>';

        //qani tarekana xaxacoxy
        echo \Carbon\Carbon::parse(Players::find(1)->birthday)->diffInYears(date_create('now')).'<br>';;//diffForHumans(date_create('now'));

        //xaxacoxy inch timica
        echo Players::find(1)->teams->hy_team.'<br>';;

        //xaxacoxi statusy
        echo Players::find(1)->statuses->hy_status.'<br>';

        //xaxacoxi position
        echo Players::find(1)->positions->hy_position.'<br>';
//////////

//////////
        //stanal personic informacia
        echo Persons::find(1)->hy_name.'<br>';

        //vor paersony inch nationality uni
        $person_nationality = Persons::find(1)->nationalities;
        foreach($person_nationality as $pn){
            dump($pn->hy_nationality);
            //dump($pn->ru_nationality);
            //dump($pn->en_nationality);
        }

        //personi cnndyan tivy
        echo Persons::find(1)->birthday.'<br>';

        //qani tarekana persony
        echo \Carbon\Carbon::parse(Persons::find(1)->birthday)->diffInYears(date_create('now')).'<br>';;//diffForHumans(date_create('now'));

        //persony inch timica
        echo Persons::find(1)->teams->hy_team.'<br>';;

        //personi position
        echo Persons::find(1)->positions->hy_position.'<br>';

//////////

        //stanal voreve position
        echo Positions::find(1)->ru_position.'<br>';

        //stanal voreve season
        echo Seasons::find(1)->season.'<br>';

        //stanal voreve status
        echo Statuses::find(1)->hy_status.'<br>';

        //stanal voreve team
        echo Teams::find(1)->ru_team.'<br>';

    }
}
