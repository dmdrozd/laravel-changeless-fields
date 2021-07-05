# laravel-changeless-fields
Laravel package for adding changeless fields to Eloquent models

## Installation
First, require the package using Composer:

`composer require dmdrozd/laravel-changeless-fields`

## Example
### Eloquent model class
```
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

class SomeModel extends BaseModel
{
    use HasChangelessFields;

    protected array $changeless = [
        'name',
    ];
}
```

### Trying to update SomeModel
```
<?php

// code

SomeModel::query()
    ->update(['name' => 'Changeless name']);

// code
```

trying to update changeless field throw `UpdateChangelessFieldsException`
