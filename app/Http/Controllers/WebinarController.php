<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Webinar;

class WebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $webinarLists = Webinar::all();
        return view('webinar/index', ['webinars' => $webinarLists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('webinar/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'video_embed' => 'required',
            'date_time' => 'required|date',
        ]);

        Webinar::create($request->all());

        return redirect(route('webinar.index'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show(Webinar $webinar)
    {
        return view('webinar/show', ['webinar' => $webinar]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit(Webinar $webinar)
    {
        return view('webinar/edit', ['webinar' => $webinar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(Webinar $webinar, Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'video_embed' => 'required',
            'date_time' => 'required|date',
        ]);

        $webinar->update($request->all());

        return redirect(route('webinar.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy(Webinar $webinar)
    {
        $webinar->delete();
        return redirect(route('webinar.index'));
    }
}
