<?php

namespace JimmiRobles\CatalogosSat40\Models;

use Illuminate\Database\Eloquent\Model;

class RegimenFiscal extends Model
{
    protected $guarded = [];

    protected $table = 'regimen_fiscales';

    public static function findByDescription(string $description)
    {
        return self::where('description', $description)->first();
    }

    public static function onlyPM()
    {
        return self::where('moral', 'Si');
    }
}
