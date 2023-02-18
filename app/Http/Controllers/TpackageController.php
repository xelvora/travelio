<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tpackage;

class TpackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package = Tpackage::latest()->paginate('5');

        return view('admin.package.index', [
            'packages' => $package,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package.create',[
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Tpackage $package)
    {
        $request->validate([
            'title' => ['required'],
            'slug' => ['required'],
            'location' => ['required'],
            'about' => ['required'],
            'featured_event' => ['required'],
            'language' => ['required'],
            'foods' => ['required'],
            'depature_date' => ['required'],
            'featured_event' => ['required'],
            'duration' => ['required'],
            'type' => ['required'],
            'price' => ['required'],
        ]);

        $store = $request->all();
        $package->create($store);

        return to_route('package.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tpackage $package)
    {
        return view('admin.package.view',[
            'title' => 'Detail Tpackage',
            'package' => $package
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tpackage $package)
    {
        return view('admin.package.edit',[
            'package' => $package,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tpackage $package)
    {
        $request->validate([
            'title' => ['required'],
            'slug' => ['required'],
            'location' => ['required'],
            'about' => ['required'],
            'featured_event' => ['required'],
            'language' => ['required'],
            'foods' => ['required'],
            'depature_date' => ['required'],
            'featured_event' => ['required'],
            'duration' => ['required'],
            'type' => ['required'],
            'price' => ['required'],
        ]);

        $update = $request->all();
        $package->update($update);

        return to_route('package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tpackage $package)
    {
        $package->delete();

        return to_route('package.index');
    }
}
