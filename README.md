# UuidColumn

Easily start using UUID within your Laravel application, rathern than the default auto incrementing ID.

## Install with Composer

```
composer require mykemeynell/laraveluuid
```


## Usage

1. Add a UUID column into your migration, for example the default "create users" migration.

```php

use ...;

class CreateUsersTable extends Migration
{
  // Include the UuidColumn trait into your migration class.
  // This will give you access to the necessary method to easily 
  // create the appropriate column.
  use \UuidColumn\Concern\UuidColumn;


  public function up()
  {
    Schema::create('users', function(Blueprint $table) {
    
      // Calling the createUuidColumn() method will add the column into your migration.
      // You can migrate this normally with PHP Artisan.
      $this->createUuidColumn($table, 'id);
      
      ...
    
```

2. Add the ```HasUUidObserver``` trait to your Model. For example, on the default User model at ```app/User.php```.

```php

use ...;
use UuidColumn\Concern\HasUuidObserver;

class User extends Authenticatable
{
    use ..., HasUuidObserver;
    
    ...
```

3. You'll need to change the defaults in the model to reflect the new key type and behaviour:

```php

class User extends Authenticatable
{
    ...
    
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
    
    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';
    
    ...

```

That's it! When new records are created, a new UUID4 string will be set at the ID.
