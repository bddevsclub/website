<?php

namespace App\Http\Controllers;

use App\Models\FacebookGroup;
use App\Models\Webinar;
use Carbon\Carbon;


class IndexController extends Controller
{

    public function getIndex()
    {
        $lastWebinar = Webinar::where('date_time', '<', Carbon::now())
            ->orderBy('id', 'desc')
            ->first();

        $nextWebinars = Webinar::where('date_time', '>', Carbon::now())->get();

        $groups = FacebookGroup::all();

        return view('index/home',
            [
                'last_webinar' => $lastWebinar,
                'next_webinars' => $nextWebinars,
                'groups' => $groups
            ]
        );
    }



}
