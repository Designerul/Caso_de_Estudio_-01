<h1 align="center">Proyecto CSDIGITAL</h1>
<h2 align="center">Cambiamos a Bootstrap 5 Todo</h2>
<p align="center">Proyecto laboral donde desarrollaremos un sistema que logre administrar vendedores, los cuales realizarán llamadas a distintos concesionarios (asignados al usuario) y se puedan generar sus métricas (KPI), por día o semana. También será posible que el vendedor pueda capturar información obtenida en las llamadas.</p>


<h3>Cosas importantes</h3>
Laravel collective para los formularios
Mas informacion:
https://laravelcollective.com/docs/6.x/html

Como se paso a Bootstrap 5 el proyecto:
https://www.youtube.com/watch?v=tdJ3-gUQxSU

Como se cambio el lenguaje del proyecto:
https://www.youtube.com/watch?v=SzAsEWiKJh8

<br><b>(Esto de momento no)</b><br>
Para la parte de los paises usamos esto de momento
Mas informacion:
https://github.com/khsing/laravel-world
1. composer require khsing/world
2. php artisan vendor:publish --force --provider="Khsing\World\WorldServiceProvider"
composer dump-autoload
php artisan world:init

<br><b>(Esto de momento no)</b><br>
No recuerdo para que usabamos esta parte de imprimir en consola pero aqui la voy a dejas:
1. composer require leanadmin/console-log

## Requerimientos
* `PHP` >= 8.1
* `Jetstream`
* `MariaDB`
* `Node` >= v14.16.1
* `Bootstrap` = 5
* `Laravel Collective` = 6.x (Se puede agregar con: composer require laravelcollective/html)

## Instalación
1. Clonar el proyecto
    ```bash
    git clone https://github.com/Designerul/dw_csdigital_boostrap_5.git
    cd csdigital
    ```
2. Instalar dependencias de PHP
    ```bash
    composer install
    ```
    Y también dependencias de JavaScript
    ```bash
    npm install && npm run dev
    ```

3. Crear archivo de configuración propio y generar llave
    ```bash
    copy .env.example .env
    php artisan key:generate
    ```

4. Configurar la base de datos en el archivo ``.env``

5. Ejecutar las migraciones y el seeder
    ```bash
    php artisan migrate --seed
    ```
    
## Ramas en Git
<p align="center"> Las ramas se utilizan para desarrollar requerimientos específicos del proyecto. Así puedes trabajar en una funcionalidad sin modificar directamente el proyecto principal. Puedes cambiar entre ramas, por lo que si no es necesario terminar una funcionalidad para comenzar otra, puedes trabajar en una nueva o existente rama. Esto último hace bastante útil el uso de ramas en proyectos colaborativos. </p>
    
1. Crear y moverse a una rama
    ```
    git checkout -b nombre_nueva_rama
    ```
    
2. Dentro de la rama hacer las modificaciones necesarias en el código.
    

3. Puedes hacer commits dentro de la rama (cambios o actualizaciones a esa funcionalidad).
    
    3.1. Agrega los archivos que deseas trackea.
  
        
        git add nombre_archivo nombre_otro_archivo
        
       
    3.2. O puedes agregar todos los archivos nuevos o modificados.
   
        
        git add .
        
        
    3.3. Realiza un commit y agrega un comentario respecto al cambio.
   
        
        git commit -m mensaje_commit
        
        
4. Una vez terminada la funcionalidad de dicha rama, debes tener tu repositorio local actualizado (estando aún en la rama, no hagas checkout a otra o a main). Utiliza el siguiente comando para actualizarlo.
    ```
    git pull
    ```
    
5. Ahora publica tus cambios en el repositorio remoto.
    ```
    git push --set-upstream origin nombre_rama
    ```
    
6. Una vez publicados los cambios, se creará la rama en el repositorio remoto, puedes verla entrando al repositorio de github. Además, te aparecerá la opción de mezclar (merge) dicha rama con la rama main. Para esto deberás crear una pull request. Si no existen colisiones en el código, será muy fácil hacer el merge.
    Todo este punto se puede hacer utilizando la interfaz de github.
    

7. Cuando hayas mezclado la rama con la rama main, regresa a la rama main con el comando.
    ```
    git checkout main
    ```
    
8. Trae los cambios (la rama main actualizada con la rama que mezclaste) a tu repositorio local.
    ```
    git pull
    ```

