<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CatalogosSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsosCfdiSeeder::class);
        $this->call(FormaPagosSeeder::class);
        $this->call(MetodoPagosSeeder::class);
        $this->call(RegimenFiscalesSeeder::class);
    }
}
