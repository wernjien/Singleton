# Singleton
PHP Singleton trait.

## Usage
```php
class Foo
{
    use SingletonTrait;

    public static function __callStatic($name, $arguments)
    {
        $instance = static::getInstance();

        // ...
    }
}
```
