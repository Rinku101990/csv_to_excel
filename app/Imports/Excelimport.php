<?php

namespace App\Imports;
use App\Models\Exxcel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Exxcel([
            'productsId'            => $row[0],
            'productTime'           => $row[1],
            'serviceId_FK'          => $row[2],
            'ProductPlanDuration'   => $row[3],
            'productsSubject'       => $row[4],
            'productsGrade'         => $row[5],
            'productsPrice'         => $row[6],
            'discount_price'        => $row[7],
            'productBoard'          => $row[8],
        ]);
    }
}