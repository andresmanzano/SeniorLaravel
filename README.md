# <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logo" width="50" align="center"> Proyecto Laravel 12

<p align="center">
  Bienvenido al proyecto Laravel 12. Esta guía te proporcionará los pasos necesarios para clonar el repositorio e inicializar una instancia local de la aplicación.
</p>

## <ins>✨ Requisitos Previos</ins>

Asegúrate de tener instalado lo siguiente en tu sistema:

* **<ins>PHP</ins>** (versión compatible con Laravel 12) - [Sitio Oficial](https://www.php.net/downloads.php)
* **<ins>Composer</ins>** (gestor de dependencias de PHP) - [Sitio Oficial](https://getcomposer.org/download/)
* **<ins>Node.js</ins>** (entorno de ejecución de JavaScript) - [Sitio Oficial](https://nodejs.org/)
* **<ins>npm</ins>** (gestor de paquetes de Node.js, usualmente instalado con Node.js)
* **<ins>Git</ins>** (sistema de control de versiones) - [Sitio Oficial](https://git-scm.com/downloads)
* **<ins>Base de Datos</ins>** (MySQL, PostgreSQL, SQLite u otro compatible con Laravel) - [Documentación de Laravel](https://laravel.com/docs/{{Illuminate\Foundation\Application::VERSION}}/database)

## <ins> Pasos para Desplegar e Inicializar el Proyecto</ins>

Sigue estos pasos para obtener una copia funcional del proyecto en tu máquina local:

### <ins>1. 📥 Clonar el Repositorio</ins>

Abre tu terminal o línea de comandos y navega hasta el directorio donde deseas clonar el proyecto. Luego, ejecuta el siguiente comando, reemplazando `<URL_DEL_REPOSITORIO>` con la URL real del repositorio Git:


git clone https://github.com/andresmanzano/SeniorLaravel.git
cd <nombre_del_proyecto>

### <ins>2. ⚙️ Instalar las Dependencias de Composer</ins>

Laravel utiliza Composer para gestionar sus dependencias de PHP. Ejecuta el siguiente comando dentro del directorio del proyecto para descargar e instalar todas las librerías necesarias:

composer install

### <ins>3. 📄 Copiar el Archivo de Entorno (.env)</ins>

Laravel utiliza un archivo .env para la configuración sensible, como la conexión a la base de datos. Copia el archivo de ejemplo .env.example a .env:

cp .env.example .env

### <ins>4. 🔑 Generar la Clave de la Aplicación</ins>

Laravel requiere una clave de aplicación única para garantizar la seguridad. Genera una nueva clave utilizando el siguiente comando:

php artisan key:generate

### <ins>5. 💾 Configurar la Base de Datos</ins>

Abre el archivo .env con un editor de texto y configura las credenciales de la base de datos en las siguientes variables:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_la_base_de_datos
DB_USERNAME=nombre_de_usuario_de_la_base_de_datos
DB_PASSWORD=contraseña_de_la_base_de_datos

### <ins>6. 🏃‍♂️ Ejecutar las Migraciones (Opcional)</ins>

El proyecto incluye migraciones de base de datos para crear las tablas, ejecútalas con el siguiente comando:

php artisan migrate

Puedes agregar el flag --seed si también deseas ejecutar los seeders para poblar la base de datos con datos de prueba:

php artisan migrate --seed

### <ins>7. <img src="https://nodejs.org/static/images/logos/nodejs-new-pantone-black.svg" alt="Node.js Logo" width="20" align="center"> Instalar las Dependencias de Node.js</ins>

El frontend del proyecto puede utilizar Node.js y npm para gestionar sus dependencias (como Tailwind CSS, Vue.js, React, etc.). Ejecuta el siguiente comando dentro del directorio del proyecto para instalar estas dependencias:

npm install

### <ins>8. 📦 Compilar los Activos del Frontend</ins>

Una vez que las dependencias de Node.js estén instaladas, puedes compilar los activos del frontend (CSS, JavaScript, etc.) utilizando el siguiente comando para el modo de desarrollo:

npm run dev

o para entrono de produccion:

npm run build

### <ins>9. Iniciar el Servidor de Desarrollo de Laravel</ins>

Laravel incluye un servidor de desarrollo ligero que puedes utilizar para probar tu aplicación localmente. Ejecuta el siguiente comando:

php artisan serve

### ¡Listo!

Con estos pasos, deberías tener una instancia local del proyecto Laravel 12 corriendo en tu máquina. Recuerda consultar la documentación específica del proyecto para cualquier configuración adicional o instrucciones particulares.

<hr>

<p align="center">
¡Disfruta desarrollando con Laravel 12!
</p>
