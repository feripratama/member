# Member
Member packages for Task Management

## Install :
```bash
$ composer require bantenprov/member:dev-master
```

## Edit `app/config.php`
```php
'providers' => [
        App\Providers\RouteServiceProvider::class,
        
        //...
        Bantenprov\Member\MemberServiceProvider::class,
```
