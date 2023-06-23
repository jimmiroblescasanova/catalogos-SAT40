<?php 

namespace JimmiRobles\CatalogosSat40;

use Illuminate\Support\ServiceProvider;

class CatalogosServiceProvider extends ServiceProvider
{
    use PublishesMigrations; 

    public  function boot()
    {
        $this->registerMigrations(__DIR__ . '/../database/migrations', 'catalogos-sat-40-migrations');

        $this->publishes([
            __DIR__.'/../database/seeders/' => database_path('seeders/'),
        ], 'catalogos-sat-40-seeds');

        $this->publishes([
            __DIR__.'/../storage/catalogos-sat-40/' => storage_path('catalogos-sat-40/'),
        ], 'catalogos-sat-40-assets');
    }
}