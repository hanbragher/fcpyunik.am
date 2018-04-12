<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /*DB::table('positions')->insert(
            [
                'hy_position' => 'Պաշտպան',
                'ru_position' => 'Защитник',
                'en_position' => 'Defender',
            ]);

        DB::table('statuses')->insert(
            [
                'hy_status' => 'Հիմնական',
                'ru_status' => 'Оснавной',
                'en_status' => 'Main',
            ]);

        DB::table('teams')->insert(
            [
                'hy_team' => 'Փյունիկ',
                'ru_team' => 'Пюник',
                'en_team' => 'Pyunik',
            ]);

        DB::table('seasons')->insert(
            [
                'season' => '2015-2016',
            ]);

        DB::table('nationalities')->insert(
            [
                'hy_nationality' => 'Հայ',
                'ru_nationality' => 'Армянин',
                'en_nationality' => 'Armenian',
            ]);

        DB::table('persons')->insert(
            [
                'hy_name' => 'Վահագն Օրդանյան',
                'ru_name' => 'Ваагн Орданян',
                'en_name' => 'Vahagn Ordanyan',
                'birthday' => '05.06.1960',
                'position_id' => 1,
                'team_id' => 1,
            ]);

        DB::table('players')->insert(
            [
                'hy_name' => 'Սերոբ Գրիգորյան',
                'ru_name' => 'Сероб Григорян',
                'en_name' => 'Serob Grigoryan',
                'birthday' => '04.02.1995',
                'team_id' => 1,
                'status_id' => 1,
                'position_id' => 1,
            ]);

        DB::table('player_season')->insert(
            [
                'player_id' => 1,
                'season_id' => 1,
            ]);

        DB::table('player_nationality')->insert(
            [
                'player_id' => 1,
                'nationality_id' => 1,
            ]);

        DB::table('person_nationality')->insert(
            [
                'person_id' => 1,
                'nationality_id' => 1,
            ]);
*/

        DB::table('categories')->insert(
            [
                'hy_category' => 'Լուրեր',
                'ru_category' => 'Новости',
                'en_category' => 'News',
            ]);



        DB::table('formats')->insert(
            [
                'hy_format' => 'Ֆոտո',
                'ru_format' => 'Фото',
                'en_format' => 'Photo',
            ]);

        DB::table('items')->insert(
            [
                'hy_title' => 'վեռնագիռ',
                'ru_title' => 'Заголовок',
                'en_title' => 'Title',

                'hy_content' => 'կոնտենտ',
                'ru_content' => 'квнтент',
                'en_content' => 'content',

                'format_id' => 1,
            ]);

        DB::table('item_category')->insert(
            [
                'item_id' => 1,
                'category_id' =>1,
            ]);


    }
}
