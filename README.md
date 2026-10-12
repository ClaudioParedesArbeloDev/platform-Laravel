<h1 align="center">Code & Lens · Plataforma educativa (v2 · Laravel 11)</h1>

<p align="center">
  Plataforma de cursos con chat en tiempo real · Course platform with real-time chat
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/Laravel_11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" />
  <img src="https://img.shields.io/badge/Livewire_3-FB70A9?style=for-the-badge&logo=livewire&logoColor=white" />
  <img src="https://img.shields.io/badge/Laravel_Reverb-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" />
  <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" />
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" />
</p>

<p align="center">
  <a href="#-español">Español</a> · <a href="#-english">English</a>
</p>

> 📌 Esta es la **segunda versión** de la plataforma de Code & Lens. Versión actual: **[platform-laravel-taildwind](https://github.com/ClaudioParedesArbeloDev/platform-laravel-taildwind)** · Primera versión (MERN): **[platform-JS](https://github.com/ClaudioParedesArbeloDev/platform-JS)**

---

## 🇪🇸 Español

### Qué es

Reescritura en **Laravel** de la plataforma educativa de Code & Lens: cursos con clases y alumnos, blog con comentarios y "me gusta", y **chat en tiempo real** entre alumnos y docentes usando **Laravel Reverb** (WebSockets) y componentes **Livewire**.

### Funcionalidades

- Catálogo de cursos, inscripción y gestión de alumnos por curso.
- Clases por curso y entrega de trabajos.
- Panel de alumno ("Mi camino") y panel de administración.
- Blog con comentarios y "me gusta" en tiempo real (Livewire).
- **Chat en vivo** con eventos de broadcasting sobre Reverb.
- Login con usuario/contraseña y con **Google** (Socialite); recuperación de contraseña.
- Avatares de usuario procesados con Intervention Image.
- Sitio bilingüe español / inglés.

### Instalación

```bash
git clone https://github.com/ClaudioParedesArbeloDev/platform-Laravel.git
cd platform-Laravel
composer install && npm install
# crear .env (base de datos, Google OAuth, Reverb)
php artisan key:generate
php artisan migrate
php artisan reverb:start      # servidor WebSocket
composer run dev              # o: php artisan serve + npm run dev
```

---

## 🇬🇧 English

### What it is

The **Laravel** rewrite of the Code & Lens learning platform: courses with classes and students, a blog with comments and likes, and **real-time chat** between students and teachers powered by **Laravel Reverb** (WebSockets) and **Livewire** components.

### Features

- Course catalogue, enrolment and per-course student management.
- Classes and homework submission.
- Student progress page and admin dashboard.
- Blog with live comments and likes (Livewire).
- **Live chat** using broadcast events over Reverb.
- Email/password and **Google** sign-in (Socialite); password reset.
- User avatars processed with Intervention Image.
- Bilingual Spanish / English UI.

### Setup

```bash
composer install && npm install
# create .env (database, Google OAuth, Reverb)
php artisan key:generate && php artisan migrate
php artisan reverb:start
composer run dev
```

---

<p align="center">
  Hecho por / Built by <a href="https://github.com/ClaudioParedesArbeloDev"><b>Claudio Paredes Arbelo</b></a> · <a href="https://www.claudioparedes.site">Code & Lens Solutions</a>
</p>
