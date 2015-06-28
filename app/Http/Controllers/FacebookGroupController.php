<?php

namespace App\Http\Controllers;

use App\Models\FacebookGroup;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FacebookGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $groupList = FacebookGroup::all();

        return view('fbgroup.index', compact('groupList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('fbgroup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required',
            'url'   => 'required'
        ]);

        FacebookGroup::create($request->all());

        return redirect('/fbgroup');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(FacebookGroup $fbgroup)
    {
        return view('fbgroup.edit', compact('fbgroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(FacebookGroup $fbgroup, Request $request)
    {
        $this->validate($request, [
            'name'  => 'required',
            'url'   => 'required'
        ]);

        $fbgroup->update($request->all());

        return redirect('/fbgroup');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(FacebookGroup $fbgroup)
    {
        $fbgroup->delete();

        return redirect('/fbgroup');
    }
}
