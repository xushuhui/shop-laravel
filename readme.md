npm install && npm run watch -poll

```shell
php artisan tinker
>>> factory(App\Models\UserAddress::class, 3)->create(['user_id' => 1])
```

php artisan db:seed --class=ProductsSeeder