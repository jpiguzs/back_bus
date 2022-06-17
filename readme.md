# Prueba Backend José Piguz

Proyecto Para demostrar los conocimientos en PHP Y El framawork Laravel.
# Tecnologías usadas

Laravel: 5.5, PHP 7.0,MySQL 8
# Requerimientos

 PHP 7.0,MySQL, Composer, Postman

## Pasos para instalar
### Paso 1
clona o descarga este repositorio 

### Paso 2: Dirígete a la carpeta y Ejecuta el siguiente comando

```bash
composer install 
```

### Paso 3: modifica tu configura tu archivo .env
```bash
DB_DATABASE=busDB
DB_USERNAME=root
DB_PASSWORD=
```
### Paso 4: genera una nueva key
```bash
php artisan key:generate
```
### Paso 5: Migrar y Generar datos de Pruebas
```bash
php artisan migrate:fresh --seed
```
### Paso 6: Correr el servidor
```bash
php artisan serve
```
## Como usar 
### Días del calendario que el usuario posee reservados, los días reservados pueden conseguirse en formato de rango como también días sueltos;
Abrimos en postman la siguiente ruta
```bash
http://localhost:8000/api/reservations/35
```
35 es el id de usuarios puede ser cualquiera de la base de datos.

podemos pasar parámetros de filtrado.
```bash
dia especifico a consultar
date=2021-12-17 

rango de fecha
from= 2021-12-17
to= 2021-12-24

ids de las rutas de no colocarlas tomará en cuanta todas las rutas
routes_ids = [1,2,3]
```
### Si la capacidad de la ruta no está completamente ocupada ;
```bash
http://localhost:8000/api/services
```
como parámetro opcional podemos enviar el id de las rutas, por defecto trae todas
```bash
routes_ids = [1,2,3]
```
### Mostrar los días de calendario no disponibles ;
```bash
http://localhost:8000/api/disabled_days
```
```bash
routes_ids = [1,2,3]
```
