<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Company;
use Illuminate\Support\Str;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function () {
    return Str::random(32);
});

$router->get('/companies', 'CompanyController@index');
$router->post('companies/create', 'CompanyController@create');
$router->put('companies/{id}/edit', 'CompanyController@update');
$router->delete('companies/{id}', 'CompanyController@destroy');

$router->get('/employees', 'EmployeeController@index');
$router->post('employees/create', 'EmployeeController@create');
$router->put('employees/{id}/edit', 'EmployeeController@update');
$router->delete('employees/{id}', 'EmployeeController@destroy');

$router->get('/projects', 'ProjectController@index');
$router->post('projects/create', 'ProjectController@create');
$router->put('projects/{id}/edit', 'ProjectController@update');
$router->delete('projects/{id}', 'ProjectController@destroy');

$router->get('/photos', 'ApiController@photos');
$router->get('/todos', 'ApiController@todos');
