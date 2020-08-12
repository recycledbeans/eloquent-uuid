# Eloquent UUID

A quick and easy way to use UUID primary keys in Laravel Eloquent models.

### Installation

Simply require the package with composer to add it to your Laravel application.

```shell script
composer require recycledbeans/eloquent-uuid
```

### Usage

Make sure your migrations use the `uuid()` field type and that the field is set as the primary key.

```php
Schema::create('documents', function (Blueprint $table) {
    $table->uuid('id')->primary();
    $table->timestamps();
});
``` 

Then use the `UUID` trait in your Eloquent models to ensure your models automatically get UUIDs.

```php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use RecycledBeans\EloquentUUID\UUID;

class Document extends Model
{
    use UUID;
}
```
