## DADOS DO PROJETO

**Curso:** Curso de Laravel 5.5 - Agência de Aviões 

**Instituição:** Especializa TI

---
### Andamento das Aulas

**Feito**
**Modulo**: 10
**Aula**: 16

---

### Comandos

```

php artisan make:model Models\\Brand -m

php artisan make:model Models\\Plane -m

php artisan make:model Models\\State -m

php artisan make:model Models\\City -m

php artisan make:model Models\\Airport -m

php artisan make:model Models\\Flight -m

php artisan make:model Models\\Reserve -m

php artisan make:controller Panel\\PanelController

php artisan make:controller Site\\SiteController

php artisan make:auth

php artisan make:controller Panel\\BrandController --resource

php artisan make:seeder StatesTableSeeder

php artisan make:seeder CitiesTableSeeder

php artisan make:request BrandStoreUpdateFormRequest

composer require "laravelcollective/html":"^5.4.0"

php artisan make:request PlaneStoreUpdateFormRequest

php artisan make:controller Panel\\StateController

php artisan make:controller Panel\\FlightController --resource

composer dump-autoload

php artisan storage:link

php artisan make:request StoreUpdateFlightFormRequest

php artisan make:request UpdateStoreAirportFormRequest

php artisan make:controller Panel\\UserController --resource

php artisan make:request StoreUpdateUserFormRequest

php artisan make:controller Panel\\ReserveController

php artisan make:request StoreReserveFormRequest

php artisan make:rule CheckAvailableFlight

php artisan make:request UpdateProfileUserFormRequest

php artisan make:middleware CheckIfIsAdmin

```


## Anotações

```
Foi incluído no provider AppServiceProvider a linha 
Schema::defaultStringLength(191);

Foram incluídas as linhas abaixo na configuração do MySQL
'modes'  => [
                'ONLY_FULL_GROUP_BY',
                'STRICT_TRANS_TABLES',
                'NO_ZERO_IN_DATE',
                'NO_ZERO_DATE',
                'ERROR_FOR_DIVISION_BY_ZERO',
                'NO_ENGINE_SUBSTITUTION',
            ],

```