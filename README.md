## Sobre o Projeto
O objetivo desse projeto é criar uma API Rest de um museu. 

## Disciplinas

Estão envolvidas as disciplinas de Construção de Software e Tecnologias Web dentro desse projeto.

## Linguagens

Laravel, php 7.4

## Ferramentas 

Uma das ferramentas que pode ser utilizada para testar a API é o Postman.

## Como iniciar
Para dar inicio ao projeto, é necessário rodar o seguinte comando:

```bash
php artisan serve
```

## Rotas

Para saber quais rotas foram implementadas, deve usar o comando:

```bash
 php artisan route:list
```
E será exibido as rotas no console:

```bash
+--------+----------+-------------------+------+----------------------------------------------+------------+
| Domain | Method   | URI               | Name | Action                                       | Middleware |
+--------+----------+-------------------+------+----------------------------------------------+------------+
|        | GET|HEAD | api/obra          |      | App\Http\Controllers\ObraController@index    | api        |
|        | POST     | api/obra          |      | App\Http\Controllers\ObraController@store    | api        |
|        | GET|HEAD | api/obra/{obra}   |      | App\Http\Controllers\ObraController@show     | api        |
|        | PUT      | api/obra/{obra}   |      | App\Http\Controllers\ObraController@update   | api        |
|        | DELETE   | api/obra/{obra}   |      | App\Http\Controllers\ObraController@destroy  | api        |
|        | GET|HEAD | api/secao         |      | App\Http\Controllers\SecaoController@index   | api        |
|        | POST     | api/secao         |      | App\Http\Controllers\SecaoController@store   | api        |
|        | GET|HEAD | api/secao/{secao} |      | App\Http\Controllers\SecaoController@show    | api        |
|        | PUT      | api/secao/{secao} |      | App\Http\Controllers\SecaoController@update  | api        |
|        | DELETE   | api/secao/{secao} |      | App\Http\Controllers\SecaoController@destroy | api        |
|        | GET|HEAD | api/user          |      | Closure                                      | api        |
|        |          |                   |      |                                              | auth:api   |
+--------+----------+-------------------+------+----------------------------------------------+------------+
```