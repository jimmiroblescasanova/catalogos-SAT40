<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use JimmiRobles\CatalogosSat40\Models\FormaPago;

class FormaPagosSeeder extends Seeder
{
    public function run()
    {
        $json = File::get(storage_path('catalogos-sat-40/c_FormaPago.json'));

        $data = json_decode($json, true);

        foreach ($data as $item) {
            FormaPago::create($item);
        }
    }
}
