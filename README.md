# KFC Test - Laravel Project

Este proyecto es una prueba basada en Laravel.

Requerimientos:

- [Composer](https://getcomposer.org/download/)
- [Git](https://git-scm.com/)
- [Node.js y NPM](https://nodejs.org/)
- [Xampp PHP 8.1 o superior](https://www.apachefriends.org/es/download.html)

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

### 4. Levantar el proyecto (XAMPP)

Activar apache en el panel de control 
y para acceder al proyecto colocar en el url del navegador:
```bash
localhost/kfc_test/public/
```

### 5. Variable .env
No es necesario configurarla ya que se ha incluido en el proyecto al solo haber modificado la APP_URL y tener lo demás por defecto.