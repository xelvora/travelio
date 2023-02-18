<?php

namespace App\Exports;

use App\Models\Transaksidt;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DetailExport implements FromView,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('admin.detail.excel',[
            'detail' => Transaksidt::orderBy('created_at','DESC')->get()
        ]);
    }
}
