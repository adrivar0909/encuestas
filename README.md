Servicio de encuestas online
============================

Este proyecto es una aplicacion web para realizar encuestas a través de la web 
sin necesitad de instalar aplicaciones ni plugins para el cliente.


Framework Utilizado
-------------------

La aplicación se desarrolló utilizando el framework Yii 2.0


Motivacion
------------

Este proyecto fue realizado como 2do. parcial para la materia de Ingenieria de Software II 
de la Facultado de Ingenieria en Ciencias de la Computación y Telecomunicaciones


Instalación
------------

Clonar el proyecto completo en un directorio del servidor es suficiente.
Para mejor información, revise [como instalar un proyecto Yii.](http://www.yiiframework.com/doc/guide/1.1/en/quickstart.installation)

Configuración
-------------

### Base de datos

Editar el archivo `config/db.php` con sus datos respectivos:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```
