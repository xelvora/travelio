<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Http\Requests\TransaksiRequest;
use App\Models\Transaksi;
use App\Models\Tpackage;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::latest()->with('package')->paginate(5);
        return view('admin.transaksi.index',[
            'transaksis' => $transaksi,
            'title' => 'Table Transaksi'
        ]);

        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi = Transaksi::with('package')->get();
        $package = Tpackage::with('transaksi')->get();

        return view('admin.transaksi.create',[
            'title' => 'Create Transaksi',
            'transaksi' => $transaksi,
            'package' => $package,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransaksiRequest $request)
    {

        $store = $request->validated();
        Transaksi::create($store);

        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        return view('admin.transaksi.view', [
            'title' => 'Detail Transaksi',
            'transaksi' => $transaksi,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response,
     */
    public function edit(Transaksi $transaksi)
    {
        $transaksis = Transaksi::with('package')->get();
        $package = Tpackage::with('transaksi')->get();

        return view('admin.transaksi.edit',[
            'title' => 'Edit Transaksi',
            'transaksi' => $transaksi,
            'transaksis' => $transaksis,
            'package' => $package
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransaksiRequest $request, Transaksi $transaksi)
    {


        $update = $request->validated();
        $transaksi->update($update);

        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }

}
