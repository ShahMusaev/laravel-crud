## Установка
git clone https://github.com/ShahMusaev/laravel-crud
 
cd laravel-crud/deploy/docker/compose

docker-compose up --build -d

docker exec -it php-fpm bash

composer install 

php artisan migrate --seed
