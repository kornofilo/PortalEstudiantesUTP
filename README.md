# PortalEstudiantesGIISA
Proyecto colaborativo de ingenería de software 6 creditos.

## Documentos importantes y Notas
* Requerimientos https://docs.google.com/document/d/1T1UPW0F9RuZAqdPiDxv6mafi3EcUbuY6QPke8ZQKAWw/edit
* Para manejar el proyecto: primero pull (descargar cambios), luego hacer commit local (commit) y despues push (subir al repositorio)
* Sprint planning https://docs.google.com/spreadsheets/d/1DMm_cuHSbpDJjSlzMM8patgbWUSKS8VhNbZ_E0bolkM/edit#gid=0
* Diseños https://www.figma.com/proto/SJI6mqKydcqtkQ7qIkDzDeX8/MURO?scaling=min-zoom&redirected=1
** https://www.figma.com/proto/SJI6mqKydcqtkQ7qIkDzDeX8/MURO?scaling=min-zoom&redirected=1


## Roles del equipo
### Product owners:
* Keren, Iliana, Evelyn, Eliecer

### Scrum Master:
* Ricardo

### Team Members
* DB managers: Isaac Jiménez, Marcelo Yangúez
* Developers : Kevin Aparicio, Javier Gutierrez, Victor , Jorge Sasso,so on,. 
* Diseñadores: Keren, Iliana, Evelyn, Eliecer

## Para descargar y configurar localmente
* Descargar e instalar XAMPP https://www.apachefriends.org/download.html
* Descargar e instalar Composer https://getcomposer.org/download/
* Descargar el repositorio como Zip o clonarlo desde esta pagina.
* Descomprimir los contenidos del repositorio o clonarlos en la carpeta de instalacion de xampp (por default, c:\Xampp\htdocs)
* Cuando clonar el repositorio, abrir la terminal en la carpeta “web” del repositorio y escriben los siguientes comandos:
  _composer install_
  
  _cp .env.example .env_
  
  _php artisan key:generate_

* Abrir phpmyadmin desde xampp y crear una base de datos con el nombre "giisa"
* Abrir la carpeta "web" y navegar al archivo ".ENV" y navegar hasta DB_CONNECTION=mysql y modificar los siguientes campo:
  -DB_DATABASE=giisa
  -DB_USERNAME=root
  -DB_PASSWORD='' (O insertar los valores de la base de datos)   
* Para migrar las tablas, moverse a la carpeta ¨proyecto¨ , abrir la terminal y escribir el comando _php artisan migrate:fresh_ esto va a agregar las tablas ya creadas en el proyecto.

* Para DB y DEV: para crear una nueva migracion de tabla, entrar a la carpeta del proyecto, abrir terminal y usar el comando: phpartisan  make:migration _crear_tabla_nombreTabla --create=nombreTabla_ . luego de eso modificar los campos del ¨schema¨. luego de hacer las modificaciones de los campos ejecutar el comando _php artisan migrate:fresh_ para actualizar la base de datos.

* Ejecutar _php artisan db:seed_ para realizar las inserciones a la base de datos que son necesarias para que el sitio funcione de manera correcta (si no les funciona el comando anterior utilizar _composer dump-autoload_ primero y luego ejecutar el comando _php artisan db:seed_)

* Para levantar el proyecto, abrir xampp, iniciar apache y mysql, ir a la carpeta ¨web¨ del proyecto y ejecutar los comandos en terminal: _php artisan serve_ y abrir la pagina usando la direccion que aparece en la linea de comandos. 
