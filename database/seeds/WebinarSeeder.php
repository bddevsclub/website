<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class WebinarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bddevs_webinars')->insert(
            [
                'title' => 'Speaking Javascript!',
                'video_embed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/M1pS6sT9paQ" frameborder="0" allowfullscreen></iframe>',
                'description' => 'Our first session with Shihan vai',
                'date_time' => Carbon::now()
            ]
        );


        DB::table('bddevs_webinars')->insert(
            [
                'title' => 'Speaking PHP!',
                'video_embed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/M1pS6sT9paQ" frameborder="0" allowfullscreen></iframe>',
                'description' => 'Our upcoming session on PHP',
                'date_time' => Carbon::now()->addDay(7)
            ]
        );
    }
}
