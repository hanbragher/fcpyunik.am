<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nationality;
use App\Player;
use App\Positions;
use App\Season;
use App\Statuses;
use App\Teams;
use App\Person;
use App;
use App\Category;
use App\Formats;
use App\Item;

class TestController extends Controller
{
    public function test(){

        dump(App::getLocale());

        //stanal voreve nationality
        echo Nationality::find(1)->hy_nationality.'<br>';

        //vor seasozy inch xaxacoxner uni
        $season_player = Season::find(1)->player;
        foreach($season_player as $spl){
            dump($spl->hy_name);
        }
        //vor statusy inch playerner uni
        $status_player = Statuses::find(1)->player->get();
        foreach($status_player as $stpl){
            dump($stpl->ru_name);
        }

        //vor teamy inch playerner uni
        $team_player = Teams::find(1)->player->get();
        foreach($team_player as $tpl){
            dump($tpl->en_name);
        }


//////////
        //stanal xaxacoxic informacia
        echo Player::find(1)->hy_name.'<br>';


        //vor playery inch nationality uni
        $player_nationality = Player::find(1)->nationality;
        foreach($player_nationality as $pln){
            dump($pln->hy_nationality);
        }

        //vor playery inch season uni
        $player_season = Player::find(1)->seasons;
        foreach($player_season as $pls){
            dump($pls->season);
        }
        //erb acnvel xaxacoxy
        echo Player::find(1)->birthday.'<br>';

        //qani tarekana xaxacoxy
        echo \Carbon\Carbon::parse(Player::find(1)->birthday)->diffInYears(date_create('now')).'<br>';;//diffForHumans(date_create('now'));

        //xaxacoxy inch timica
        echo Player::find(1)->teams->hy_team.'<br>';;

        //xaxacoxi statusy
        echo Player::find(1)->statuses->hy_status.'<br>';

        //xaxacoxi position
        echo Player::find(1)->positions->hy_position.'<br>';
//////////

//////////
        //stanal personic informacia
        echo Person::find(1)->hy_name.'<br>';

        //vor paersony inch nationality uni
        $person_nationality = Person::find(1)->nationality;
        foreach($person_nationality as $pn){
            dump($pn->hy_nationality);
        }

        //personi cnndyan tivy
        echo Person::find(1)->birthday.'<br>';

        //qani tarekana persony
        echo \Carbon\Carbon::parse(Person::find(1)->birthday)->diffInYears(date_create('now')).'<br>';
        //diffForHumans(date_create('now'));

        //persony inch timica
        echo Person::find(1)->teams->hy_team.'<br>';;

        //personi position
        echo Person::find(1)->positions->hy_position.'<br>';

//////////

        //stanal voreve position
        echo Positions::find(1)->ru_position.'<br>';

        //stanal voreve season
        echo Season::find(1)->season.'<br>';

        //stanal voreve status
        echo Statuses::find(1)->hy_status.'<br>';

        //stanal voreve team
        echo Teams::find(1)->ru_team.'<br>';

    }

    public function item_test(){
        //stanal voreve categoria
        dump(Category::find(1)->hy_category);

        //stanal voreve format
        dump(Formats::find(1)->ru_format);

        //stanal voreve item
        dump(item::find(1)->get());

        //stanal voreve formati itemnery
        dump(Formats::find(1)->items()->get());

        //stanal voreve categoriayi itemnery
        dump(Category::find(1)->items()->get());

        //stanal voreve itemi categorianery
        dump(Item::find(1)->categories()->get());


    }
}
