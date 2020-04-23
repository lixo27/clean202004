## Clean Starter Package

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non lectus viverra, laoreet mauris vehicula, congue diam. Maecenas pretium lectus ac dui aliquam, id convallis ex consequat. Nam eu porta est. 

### Hosting as your own repository

Aenean a scelerisque erat, vel interdum mauris. Praesent ultrices placerat ante, eget dictum ipsum facilisis eget.

```
"repositories": [
    {
        "type": "path",
        "url": "/develop/homestead/projects/clean202004"
    }
]
```

### Installation

Aenean a scelerisque erat, vel interdum mauris. Praesent ultrices placerat ante, eget dictum ipsum facilisis eget.

```bash
composer require lixo27/clean202004
```

### Running Migrations

Aenean a scelerisque erat, vel interdum mauris. Praesent ultrices placerat ante, eget dictum ipsum facilisis eget.

```bash
php artisan migrate
```

### Running Seeders

Aenean a scelerisque erat, vel interdum mauris. Praesent ultrices placerat ante, eget dictum ipsum facilisis eget.

```bash
php artisan db:seed --class=Clean\\CustomerSeeder
php artisan db:seed --class=Clean\\EmployeeSeeder
php artisan db:seed --class=Clean\\ProductSeeder
php artisan db:seed --class=Clean\\SaleSeeder
```

### Public Assets

Aenean a scelerisque erat, vel interdum mauris. Praesent ultrices placerat ante, eget dictum ipsum facilisis eget.

```bash
php artisan vendor:publish --tag=clean-public
```
