<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Como instalar o projeto
- Clonar;
- Executar comando composer install;
- Executar as migrations do banco MySQL com o comando php artisan migrate;

## Endpoints

- http://127.0.0.1:8000/api/pets (get/post)
- http://127.0.0.1:8000/api/pets/{id} (put/delete/get)
- http://127.0.0.1:8000/api/atendimentos (get/post)
- http://127.0.0.1:8000/api/atendimentos/{id} (put/delete/get)

## Tests

- vendor\bin\phpunit --filter lista_pets
- vendor\bin\phpunit --filter can_create_pets
- vendor\bin\phpunit --filter can_update_pets
- vendor\bin\phpunit --filter can_delete_pets
- vendor\bin\phpunit --filter can_show_pets
- vendor\bin\phpunit --filter lista_atendimentos
- vendor\bin\phpunit --filter can_create_atendimentos
- vendor\bin\phpunit --filter can_update_atendimentos
- vendor\bin\phpunit --filter can_delete_atendimentos
- vendor\bin\phpunit --filter can_show_atendimentos
