<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Http\Requests\TransaksidtRequest;
use App\Models\Transaksidt;
use App\Models\Transaksi;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Exports\DetailExport;

class TransaksidtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = Transaksidt::latest()->with('transaksi')->paginate(5);
        return view('admin.detail.index',[
            'details' => $detail,
            'title' => 'Table Transaksidt'
        ]);

        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detail = Transaksidt::with('transaksi')->get();
        $transaksi = Transaksi::with('detail')->get();

        return view('admin.detail.create',[
            'title' => 'Create Transaksidt',
            'detail' => $detail,
            'transaksi' => $transaksi,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransaksidtRequest $request)
    {

        $store = $request->validated();
        Transaksidt::create($store);

        return redirect()->route('detail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksidt $detail)
    {
        return view('admin.detail.view', [
            'title' => 'Detail Transaksidt',
            'detail' => $detail,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response,
     */
    public function edit(Transaksidt $detail)
    {
        $details = Transaksidt::with('transaksi')->get();
        $transaksi = Transaksi::with('detail')->get();

        return view('admin.detail.edit',[
            'title' => 'Edit Transaksidt',
            'detail' => $detail,
            'details' => $details,
            'transaksi' => $transaksi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransaksidtRequest $request, Transaksidt $detail)
    {


        $update = $request->validated();
        $detail->update($update);

        return redirect()->route('detail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksidt $detail)
    {
        $detail->delete();
        return redirect()->route('detail.index');
    }

    public function pdf()
    {
        $detail = Transaksidt::all();
        $pdf = PDF::loadView('admin.detail.pdf', ['detail'=>$detail]);
        return $pdf->download('laporan.pdf');
        return $pdf->stream();
    }

    public function excel()
    {
        return Excel::download(new DetailExport, 'laporan.xlsx');
    }
}
