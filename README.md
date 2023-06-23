# Este paquete incluye las migraciones necesarias para los catalogos del CFDI 4.0

## Installation

You can install the package via composer:

```bash
composer require jimmiroblescasanova/catalogos-sat40
```

Publicar las migraciones:

```bash
php artisan vendor:publish --tag="catalogos-sat40-migrations"
php artisan migrate
```

Publicar los seeds: 

```bash
php artisan vendor:publish --tag="catalogos-sat40-seeds"
```

Copiar los archivos json que contienen los catalogos:

```bash
php artisan vendor:publish --tag="catalogos-sat40-assets"
```

Ejecutar los seed para llenar las tablas: 
```bash
php artisan db:seed --class=CatalogosSeeder
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
