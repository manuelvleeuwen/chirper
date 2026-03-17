# Chirper (Demo)

A small “micro-blog” demo application where users can register, log in, and post short messages (“chirps”).

This project is based on the official [Laravel Bootcamp](https://laravel.com/learn/getting-started-with-laravel) tutorial and is intended for learning and demonstration purposes.

## Features

- Username-based registration and login
- Create and view your own chirps
- Basic rate limiting on auth and posting routes
- SQLite database

## Demo / data retention notice

This is a public demo application.

- **Do not use a real username or password** (use something you wouldn’t reuse elsewhere).
- All data (user information and chirps) is wiped on deploy, which is scheduled daily.
- Do not post sensitive or private information.

## Tech stack

- Laravel (PHP)
- Blade templates
- SQLite
- Tailwind CSS
- Vite (asset bundling)

## Getting started (local development)

### Requirements

- PHP (version compatible with your Laravel install)
- Composer
- Node.js + npm (if you build frontend assets)
- SQLite

### Install

```bash
composer install
npm install
```

### Configure environment

Copy `.env.example` to `.env` and generate an app key:

```bash
cp .env.example .env
php artisan key:generate
```

### Setup database

Create the SQLite file (if needed) and run migrations:

```bash
touch database/database.sqlite
php artisan migrate
```

### Run the app

```bash
php artisan serve
```

Then visit the URL shown in your terminal.

## Credits

- Built with **Laravel**: https://laravel.com
- Tutorial foundation from the official **Laravel Bootcamp**: https://bootcamp.laravel.com

## License

MIT — see `LICENSE`.