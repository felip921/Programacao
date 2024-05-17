# Programacao
curl -s "https://laravel.build/Programacao?with=mysql,redis" | bash

cd Programacao
./vendor/bin/sail up
./vendor/bin/sail artisan migrate

breeze
 
 composer require laravel/breeze --dev
 php artisan breeze:install

docker/sail/shell
    php artisan migrate