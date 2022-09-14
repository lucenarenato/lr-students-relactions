# Laravel 8 - Students

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About 

- Validação
- Um pra um -> ClienteControlador
- Um pra muitos
- muitos pra muitos

```
+--------+-----------+------------------------------+-----------------+-------------------------------------------------+------------+
| Domain | Method    | URI                          | Name            | Action                                          | Middleware |
+--------+-----------+------------------------------+-----------------+-------------------------------------------------+------------+
|        | GET|HEAD  | /                            | index           | Closure                                         | web        |
|        | GET|HEAD  | api/alocacao                 |                 | Closure                                         | api        |
|        | GET|HEAD  | api/alocacao/{p}/{d}         |                 | Closure                                         | api        |
|        | GET|HEAD  | api/categorias               |                 | Closure                                         | api        |
|        | GET|HEAD  | api/categorias/all           |                 | Closure                                         | api        |
|        | GET|HEAD  | api/clientes                 |                 | Closure                                         | api        |
|        | GET|HEAD  | api/desalocar/{p}/{d}        |                 | Closure                                         | api        |
|        | GET|HEAD  | api/desenvolvedores          |                 | Closure                                         | api        |
|        | GET|HEAD  | api/desenvolvedores/{id}     |                 | Closure                                         | api        |
|        | GET|HEAD  | api/enderecos                |                 | Closure                                         | api        |
|        | GET|HEAD  | api/produtos                 |                 | Closure                                         | api        |
|        | GET|HEAD  | api/produtos/adicionar/{cat} |                 | Closure                                         | api        |
|        | GET|HEAD  | api/produtos/insert          |                 | Closure                                         | api        |
|        | GET|HEAD  | api/produtos/remover         |                 | Closure                                         | api        |
|        | GET|HEAD  | api/projetos                 |                 | Closure                                         | api        |
|        | GET|HEAD  | api/user                     |                 | Closure                                         | api        |
|        |           |                              |                 |                                                 | auth:api   |
|        | GET|HEAD  | categorias/all               |                 | Closure                                         | web        |
|        | POST      | cliente                      | cliente.store   | App\Http\Controllers\ClienteControlador@store   | web        |
|        | GET|HEAD  | cliente                      | cliente.index   | App\Http\Controllers\ClienteControlador@index   | web        |
|        | GET|HEAD  | cliente/create               | cliente.create  | App\Http\Controllers\ClienteControlador@create  | web        |
|        | DELETE    | cliente/{cliente}            | cliente.destroy | App\Http\Controllers\ClienteControlador@destroy | web        |
|        | PUT|PATCH | cliente/{cliente}            | cliente.update  | App\Http\Controllers\ClienteControlador@update  | web        |
|        | GET|HEAD  | cliente/{cliente}            | cliente.show    | App\Http\Controllers\ClienteControlador@show    | web        |
|        | GET|HEAD  | cliente/{cliente}/edit       | cliente.edit    | App\Http\Controllers\ClienteControlador@edit    | web        |
|        | GET|HEAD  | clientes                     |                 | Closure                                         | web        |
|        | GET|HEAD  | clientes/insert              |                 | Closure                                         | web        |
|        | GET|HEAD  | desenvolvedores              |                 | Closure                                         | web        |
|        | GET|HEAD  | desenvolvedores/{id}         |                 | Closure                                         | web        |
|        | GET|HEAD  | enderecos                    |                 | Closure                                         | web        |
|        | GET|HEAD  | welcome                      |                 | Closure                                         | web        |
+--------+-----------+------------------------------+-----------------+-------------------------------------------------+------------+
```

- Renato Lucena - 2022
