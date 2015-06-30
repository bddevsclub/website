<?php

namespace App\Http\Controllers;

use App\Models\FacebookGroup;
use Illuminate\Http\Request;

use App\Http\Requests;


class FacebookGroupController extends Controller
{
    protected $attributePrefix = "fbgroup";

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
        $this->validateRequest($request, [
            'name'  => 'required',
            'url'   => 'required'
        ]);

        FacebookGroup::create($this->requestToAttributes($request));

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
        $attributes = $this->modelToAttributes($fbgroup);
        return view('fbgroup.edit', ['fbgroup' => $attributes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(FacebookGroup $fbgroup, Request $request)
    {
        $this->validateRequest($request, [
            'name'  => 'required',
            'url'   => 'required'
        ]);

        $fbgroup->update($this->requestToAttributes($request));

        return redirect(route('fbgroup.index'));
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

        return redirect(route('fbgroup.index'));
    }
}
