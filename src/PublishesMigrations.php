<?php

namespace JimmiRobles\CatalogosSat40;

use Generator;
use Illuminate\Support\Str;

trait PublishesMigrations
{
    /**
     * Searches migrations and publishes them as assets.
     *
     * @param string $directory
     *
     * @return void
     */
    protected function registerMigrations(string $directory, $tag): void
    {
        if ($this->app->runningInConsole()) {
            $generator = function(string $directory): Generator {
                foreach ($this->app->make('files')->allFiles($directory) as $file) {
                    yield $file->getPathname() => $this->app->databasePath(
                        'migrations/' . now()->format('Y_m_d_His_') . Str::after($file->getFilename(), '00_00_00_000000')
                    );
                }
            };
            
            $this->publishes(iterator_to_array($generator($directory)), $tag);
        }
    }
}