<?php

namespace App\Imports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersImport implements ToModel ,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
    
        return new Client([
            'nom' => $row['nom'],
            'prenom' => $row['prenom'],
            'adresse' => $row['adresse'],
            'numero_telephone' => $row['numero_telephone'],
            'adresse_email' => $row['adresse_email'],
            'userID' => $row['userid'],
            
        ]);
    }
}
