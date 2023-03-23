<?php

namespace App\Imports;

use App\Models\Powercons;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Database\Eloquent\Model;

class YourImport implements ToModel
{
    public function model(array $row)
    {
        return new powercons([
            'Time' => $row[0],
            'Punjab' => $row[1],
            'Haryana' => $row[2],
            'Rajasthan' => $row[3],
            'Delhi' => $row[4],
            'UP' => $row[5],
            'Uttarakha' => $row[6],
            'HP' => $row[7],
            'JK' => $row[8],
            'Chardigarh' => $row[9],
            'Chattisgarh' => $row[10],
            'Ghujarat' => $row[11],
            'MP' => $row[12],
            'Maharashtra' => $row[13],
            'Goa' => $row[14],
            'DNH' => $row[15],
            'Andhra_Pradesh' => $row[16],
            'Telanga' => $row[17],
            'Karnataka' => $row[18],
            'Kerala' => $row[19],
            'Tamil_Nadu' => $row[20],
            'Pondy' => $row[21],
            'Bihar' => $row[22],
            'Jhardkhand' => $row[23],
            'Odisha' => $row[24],
            'West_Bengal' => $row[25],
            'Sikkim' => $row[26],
            'Arunachal' => $row[27],
            'Assam' => $row[28],
            'Manipur' => $row[29],
            'Meghalaya' => $row[30],
            'Mizoram' => $row[31],
            'Nagaland' => $row[32],
            'Tripura' => $row[33],
            // tambahkan kolom lainnya disini
        ]);
    }
}
