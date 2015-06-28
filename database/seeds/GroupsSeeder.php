<?php

use Illuminate\Database\Seeder;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bddevs_fbgroups')->insert(
            [
                'name' => 'phpXperts',
                'url' => 'https://www.facebook.com/groups/pxperts/'

            ]
        );


        DB::table('bddevs_fbgroups')->insert(
            [
                'name' => 'Laravel Bangladesh',
                'url' => 'http://laravelbd.com'

            ]
        );

        DB::table('bddevs_fbgroups')->insert(
            [
                'name' => 'Talk.js',
                'url' => 'http://talkjs.net'

            ]
        );

        DB::table('bddevs_fbgroups')->insert(
            [
                'name' => 'Python Bangladesh / PyCharmers',
                'url' => 'http://pybd.org'

            ]
        );


    }
}
