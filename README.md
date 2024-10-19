# KFC Test - Laravel Project

Este proyecto es una prueba basada en Laravel.

Requerimientos:

- [Composer](https://getcomposer.org/download/)
- [Git](https://git-scm.com/)
- [Node.js y NPM](https://nodejs.org/)
- [PHP 8.1 o superior](https://www.php.net/downloads)
- [Xampp PHP 8.1 o superior (opcional)](https://www.apachefriends.org/es/download.html)


## Pasos para levantar el proyecto

### 1. Clonar el repositorio

```bash
git clone https://github.com/SabianB/kfc_test.git
```
### 2. Instalar dependencias

```bash
cd kfc_test
composer install
npm install
```

### 3. Generar una clave con artisan (si no se ha generado).
```bash
php artisan key:generate
```

### 4. Levantar el proyecto (php artisan)

En la ruta del proyecto ejecutar la siguiente linea:
```bash
php artisan serve
```
Esto ejecutara el servidor en el puerto 8000 de localhost, podemos acceder mediante:
```bash
http://127.0.0.1:8000/
```

### 5. Levantar el proyecto (XAMPP)

Activar apache en el panel de control, colocar el proyecto en:
```bash
xampp/htdocs/
```
resultado esperado:
```bash
xampp/htdocs/kfc_test/
```
y para acceder al proyecto colocar en el url del navegador:
```bash
localhost/kfc_test/public/
```

### 6. Variable .env
No es necesario configurarla ya que se ha incluido en el proyecto al solo haber modificado la APP_URL y tener lo demás por defecto.