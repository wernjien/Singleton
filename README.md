# Singleton
PHP Singleton trait.

## Usage
```php
class Foo
{
    use Singleton;

    public function __construct()
    {
        // ...
    }

    public static function __callStatic($method, $arguments)
    {
        $instance = static::getInstance();

        // ...
    }
}
```
