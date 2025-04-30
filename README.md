<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

---

## Descripción

Este es un proyecto personal desarrollado con Laravel, diseñado para mostrar mi colección de estatuillas de Street Fighter & Planeta DeAgostini / Altaya, aquí en mi página podrás navegar según la sección que quieras visitar:
- Inicio.
- Listado de entregas.
- Personajes.
- Figuras.
- Revistas.
- Pósters.

---

## Características

- Inicio: Aquí doy una explicación general sin entrar en detalles de cada personaje.
- Listado de entregas: Organizados en orden ascendente según el número que se les otorgó al salir al mercado, podrás ver en una tabla el precio y fecha de cada personaje en México.
- Personajes: Organizados en el orden en que me gustan, verás de lado izquierdo la lista de personajes mientras de lado derecho se muestra una foto del personaje escogido con una descripción de éste.
- Figuras: Al igual que la sección anterior, organizados en el orden que me gustan verás una imagen de la figura de cada personaje con una frase.
- Revistas: De igual modo que las dos anteriores, el orden es el mismo, pero aquí verás una imagen de la portada de la revista de cada personaje con una breve frase.
- Galeria: Y para no perder el orden de las tres secciones anteriores, se mantiene, aunque aquí te muestro la foto del póster que viene en la revista de cada personaje.

---

## Requisitos

Antes de instalar este proyecto, asegúrate de contar con los siguientes requisitos:

- PHP >= 8.0
- Composer (para gestionar dependencias)
- MySQL (u otra base de datos compatible)
- Servidor local como **Laragon** o **XAMPP**
- Node.js y npm (opcional, para Laravel Mix o Vite)

---

## Instalación

Sigue estos pasos para configurar el proyecto:

1. **Clonar el repositorio**:
   ```bash
   git clone https://github.com/tuusuario/Marketplace.git

2. **Acceder al directorio del proyecto**
    Al usar Laragon la carpeta en donde yo guardé el proyecto se encuenctra en:
    ```bash
    D:\Programas\laragon\www\Marketplace

3. **Instalar las dependencias de PHP**
    ```bash
    composer install

4. **Copiar y configura el archivo de entorno**
    ```bash
    cp .env.example .env

5. **Generar la clave de la aplicación**
    ```bash
    php artisan key:generate

6. **Levanta el servidor local**
    ```bash
    php artisan serve

---

## Uso

Todo es muy intuitivo y fácil de usar. Una vez que corra el servidor ya puedes navegar por la página en http://127.0.0.1:8000/ .
