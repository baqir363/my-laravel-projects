<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class UserExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings():array
    {
        return["UserName","Email","Usertype"];
    }
    public function collection()
    {
        return User::select("name","email","usertype")->where('usertype','user')->get();
    }
}
