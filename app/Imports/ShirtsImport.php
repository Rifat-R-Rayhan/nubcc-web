<?php

namespace App\Imports;

use App\Models\Shirt;
use Maatwebsite\Excel\Concerns\ToModel;

class ShirtsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Shirt([
            //
        ]);
    }
}
