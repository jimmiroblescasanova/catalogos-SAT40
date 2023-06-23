<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use JimmiRobles\CatalogosSat40\Models\UsoCfdi;

class UsosCfdiSeeder extends Seeder
{
    public function run()
    {
        $json = File::get(storage_path('catalogos-sat-40/c_UsoCFDI.json'));

        $data = json_decode($json, true);

        foreach ($data as $item) {
            UsoCfdi::create($item);
        }
    }
}
