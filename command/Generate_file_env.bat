cd..
del .env
copy .env.example .env
php artisan key:generate
pause