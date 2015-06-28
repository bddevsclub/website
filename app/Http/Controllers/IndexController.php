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

        return view('home', [
            'last_webinar' => $lastWebinar,
            'next_webinars' => $nextWebinars,
            'groups' => $groups
        ]);
    }

    public function getWebinar($id)
    {
        $webinar = Webinar::find($id);

        if ($webinar) {
            return view('webinar', [
                'webinar' => $webinar
            ]);
        } else {
            abort(404);
        }


    }


}
