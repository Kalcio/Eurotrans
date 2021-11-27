<p align="center"><a href="" target="_blank"><img src="/public/vendor/adminlte/dist/img/LogoTrasparente.png" width="400"></a></p>

## Sobre la aplicación web

La aplicación web EuroTrans BD, es una página la cual se encuentra conectada a una BD en MYSQL, en esta se puede tener control total a los datos de esta.

## Desarrollo

La aplicación web se encuentra desarrollada en el lenguaje de programación PHP, utilizando el framework Laravel. Para la construcción de la página se utilizaron diferentes plantillas, como AdminLTE y Jetstream.

## Requisitos
Para poder levantar la página son necesarios cieros requisitos de software:
1. XAMPP 8.0.13
2. PHP 8.0.13 (versiones posteriores pueden que no funcione)
4. Editor de código (VS code)

## Levantar Proyecto

Para poder hacer funcionar el proyecto es necesario seguir los siguientes pasos:

1. Clonar el repositorio 
   ```sh
   git clone https://github.com/Kalcio/eurotrans.git
   ```
2. Instalar Composer
   ```sh
   composer install
   ```
3. Copiar archivo .env
   ```sh
   copy .env.example .env
   ```
4. Crear la BD en phpmyadmin o modificar información de la base de datos en el archivo env
   ```sh
   DB_DATABASE=eurotrans
   ```
5. Generar la key
   ```sh
   php artisan key:generate
   ```
6. Migrar las tablas
   ```sh
   php artisan migrate
   ```
6. Ejecutar la página
   ```sh
   php artisan serve
   ```

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
