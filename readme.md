## DADOS DO PROJETO

**Curso:** Curso de Laravel 5.5 - Agência de Aviões 

**Instituição:** Especializa TI

---
### Andamento das Aulas

**Feito**
**Modulo**: 2
**Aula**: 2

---

### Comandos

```

php artisan make:model Models\\Brand -m

php artisan make:model Models\\Plane -m



```


## Anotações


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

