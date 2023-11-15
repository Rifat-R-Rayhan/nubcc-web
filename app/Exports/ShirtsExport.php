<?php

namespace App\Exports;

use App\Models\Shirt;
use Maatwebsite\Excel\Concerns\FromCollection;

class ShirtsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Shirt::all();
    }
}
