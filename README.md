
### DESCRIPTION

El proyecto consta de un proyecto todo en uno, se tiene un backend con PHP 8.2.16 y en la carpeta "./vite/" está el desarrollo del proyecto FrontEnd (ReactJS).

### INSTALL PROJECT
Para instalar el proyecto se hace uso de Docker para una facil instalación:

Construir contenedores.
```bash
docker compose up -d --build
```
Entrar al contenedor de Docker.
```bash
docker exec -it -u lion e-solutions-app bash
```
Instalar dependencias de Composer.
```bash
composer install
```
Despues de instalar las dependencias se debe reiniciar el contenedor para que tome toda la configuración.
```bash
# para salir del contenedor debe presionarse "ctrl + D"
docker compose down
```
Volver a construir contenedores.
```bash
docker compose up -d --build
```
Volver a entrar al contenedor de Docker.
```bash
docker exec -it -u lion e-solutions-app bash
```
Ejecutar Migraciones (crean la estructura de base de datos).
```bash
php lion migrate:fresh
```
Ejecutar proyecto FrontEnd(ReactJS).
```bash
cd vite/e-solutions/ && npm install && npm run dev
```

#### ------------------------------------------------------------------------------------------------------------------------------

### INIT PROJECT

Abrir URLS:
```txt
# PHPMyAdmin:
http://127.0.0.1:8080
```
```txt
# FrontEnd:
http://127.0.0.1:5173
```
Si se requiere explorar la API tienen los siguientes enlaces:
```txt
POST - http://127.0.0.1:8000/api/users
GET - http://127.0.0.1:8000/api/users
PUT - http://127.0.0.1:8000/api/users/{id}
DELETE - http://127.0.0.1:8000/api/users/{id}
```
Si se requiere explorar la API por medio de postman ejecute el comando para generar una coleccion de postman, tenga en cuenta que si se ejecuta el API desde postman deben enviarsen todos los parametros requeridos para el funcionamiento base del API.
```bash
php lion route:postman
```
