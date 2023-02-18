<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Exports\BarangExport;
use App\Http\Requests\FotoRequest;
use App\Models\Foto;
use App\Models\Tpackage;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foto = Foto::latest()->with('package')->paginate(5);
        return view('admin.foto.index',[
            'fotos' => $foto,
            'title' => 'Table Foto'
        ]);

        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $foto = Foto::with('package')->get();
        $package = Tpackage::with('foto')->get();

        return view('admin.foto.create',[
            'title' => 'Create Foto',
            'foto' => $foto,
            'package' => $package,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Store(FotoRequest $request){
        $data = new Foto;
        $data->title = $request->title;
        $data->foto = $request->foto;

        // if ($request->file('foto')) {
        //    $file = $request->file('foto');

        //    $filename = date('YmdHi').$file->getClientOriginalName();
        //    $file->move(public_path('upload/admin_images'),$filename);
        //    $data['foto'] = $filename;
        // }
        if ($image = $request->file('foto')) {
            $destinationPath = '/upload/admin_images';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $model['foto'] = "$profileImage";
        }
        $data->save();

        $notification = array(
            'message' => 'Profil Admin Berhasil di Ganti',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.foto.index')->with($notification);

    }// End Method

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Foto $foto)
    {
        return view('admin.foto.view', [
            'title' => 'Detail Foto',
            'foto' => $foto,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response,
     */
    public function edit(Foto $foto)
    {
        $bookings = Foto::with('package')->get();
        $package = Tpackage::with('foto')->get();

        return view('admin.foto.edit',[
            'title' => 'Edit Foto',
            'foto' => $foto,
            'bookings' => $bookings,
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
    public function update(FotoRequest $request, Foto $foto)
    {


        $update = $request->validated();
        $foto->update($update);

        return redirect()->route('foto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foto $foto)
    {
        $foto->delete();
        return redirect()->route('foto.index');
    }

}
