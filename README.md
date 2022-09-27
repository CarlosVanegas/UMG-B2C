# UMG-B2C

Proyecto Seminario de Analisis de Sistemas.

Software especializado para gestionar y coordinar todos los recursos, información y las funciones de la empresa en bases de datos almacenadas.

 
![version](https://img.shields.io/badge/version-1.0.0-blue.svg)
![license](https://img.shields.io/badge/license-MIT-blue.svg)
[![GitHub issues open](https://img.shields.io/github/issues/creativetimofficial/soft-ui-dashboard-laravel.svg)](https://github.com/creativetimofficial/soft-ui-dashboard-laravel/issues?q=is%3Aopen+is%3Aissue)
[![GitHub issues closed](https://img.shields.io/github/issues-closed-raw/creativetimofficial/soft-ui-dashboard-laravel.svg)](https://github.com/creativetimofficial/soft-ui-dashboard-laravel/issues?q=is%3Aissue+is%3Aclosed)
 
  
 
## Instalación

1. Descomprimir el archivo descargado
2. Copia y pega la carpeta **UMG-B2C** en tu carpeta de **proyectos**. Cambie el nombre de la carpeta al nombre de su proyecto
3. Ejcecutar en la terminal el comando `composer install`
4. Copiar `.env.example` en `.env` y actualicé las configuraciones (principalmente la configuración de la base de datos)
5. En tu ejecución de terminal`php artisan key:generate`
6. Ejecutar `php artisan migrate --seed` para crear las tablas de la base de datos y sembrar las tablas de roles y usuarios
7. Ejecutar `php artisan storage:link` para crear el enlace simbólico de almacenamiento (dentro del storage)

 
## Versiones de Lenguaje
 
 | Laravel 9 | php 8.1.10 |
  
## Estructura de Archivo
```
app
├── Console
│   └── Kernel.php
├── Exceptions
│   └── Handler.php
├── Http
│   ├── Controllers
│   │   └── ChangePasswordController.php
│   │   └──Controller.php
│   │   └──HomeController.php
│   │   └──InfoUserController.php
│   │   └──RegisterController.php
│   │   └──ResetController.php
│   │   └──SessionController.php
│   ├── Kernel.php
│   └── Middleware
│       ├── Authenticate.php
│       ├── EncryptCookies.php
│       ├── PreventRequestsDuringMaintenance.php
│       ├── RedirectIfAuthenticated.php
│       ├── TrimStrings.php
│       ├── TrustHosts.php
│       ├── TrustProxies.php
│       └── VerifyCsrfToken.php
├── Models
│   └── User.php
├── Policies
│   └── UsersPolicy.php
├── Providers
│   ├── AppServiceProvider.php
│   ├── AuthServiceProvider.php
│   ├── BroadcastServiceProvider.php
│   ├── EventServiceProvider.php
│   └── RouteServiceProvider.php
config
├── app.php
├── auth.php
├── broadcasting.php
├── cache.php
├── cors.php
├── database.php
├── filesystems.php
├── hashing.php
├── logging.php
├── mail.php
├── queue.php
├── sanctum.php
├── services.php
├── session.php
├── view.php
|       
database
|   ├──factories
|   |       UserFactory.php
|   |       
|   ├──migrations
|   |       2014_10_12_000000_create_users_table.php
|   |       2014_10_12_100000_create_password_resets_table.php
|   |       2019_08_19_000000_create_failed_jobs_table.php
|   |       2019_12_14_000001_create_personal_access_tokens_table.php
|   |       
|   └──seeds
|           DatabaseSeeder.php
|           UserSeeder.php
|           
+---public
|   |   .htaccess
|   |   favicon.ico
|   |   index.php
|   |   
|   +---css
|   |       app.css
|   |       soft-ui-dashboard.css
|   +---js
|   |       app.js
|   |       
|   +---assets
|   |       demo.css
|   |       docs-soft.css
|   |       docs.js
|   |
|   |   +---css
|   |   |   |   nucleo-icons.css
|   |   |   |   nucleo-svg.css
|   |   |   |   soft-ui-dashboard.css
|   |   |   |   soft-ui-dashboard.css.map
|   |   |   └── soft-ui-dashboard.min.css
|   |   |                                 
|   +---+---js
|           |   soft-ui--dashboard.js
|           |   soft-ui--dashboard.js.map
|           |   soft-ui--dashboard.min.js
|           |   
|           +---core
|                   bootstrap.bundle.min.js
|                   bootstrap.min.js
|                   popper.min.js
|                    
+---resources
|   +---lang
|   |   \---en
|   |           auth.php
|   |           pagination.php
|   |           passwords.php
|   |           validation.php
|   |           
|   \---views
|       |                 
|       +---components
|       |       fixed-plugins.blade.php
|       |      
|       +---laravel-example
|       |        user-management.blade.php
|       |        user-profile.blade.php
|       |      
|       +---layouts
|       |   |   
|       |   +---footers
|       |   |   |
|       |   |   +--auth
|       |   |   |     footer.blade.php
|       |   |   +--guest
|       |   |         footer.blade.php
|       |   |
|       |   +---navbars
|       |       |  app.blade.php
|       |       |
|       |       +--auth
|       |       |     nav-rtl.blade.php
|       |       |     nav.blade.php
|       |       |     sidebar-rtl.blade.php
|       |       |     sidebar.blade.php
|       |       +--guest
|       |       |     nav.blade.php
|       |       |     
|       |       +--user_type
|       |           auth.blade.php
|       |           guest.blade.php
|       |           
|       +---session
|       |   |   login-session.blade.php
|       |   |   register.blade.php
|       |   |   
|       |   +---reset-password
|       |           resetPassword.blade.php
|       |           sendEmail.blade.php
|       |       
|       billing.blade.php
|       dashboard.blade.php
|       profile.blade.php
|       rtl.blade.php
|       static-sign-in.blade.php
|       static-sign-up.blade.php
|       tables.blade.php
|       virtual-reality.blade.php
|                      
+---routes
|       api.php
|       channels.php
|       console.php
|       web.php
```
