# Laravel Contact App

A contact manager, is a tool that enables users to easily store and find contact information,
such as names, email , and telephone numbers.

Tech:

**Frontend:** [TailwindCSS](https://tailwindcss.com/) , [Bootstrap](https://getbootstrap.com/) , [Livewire](https://laravel-livewire.com/)


**Backend:** [Laravel](https://laravel.com/) , [Jetstream](https://jetstream.laravel.com/2.x/introduction.html)

## Documentation

* [Requires](#requires)
* [Installation](#installation)
* [Configuration](#configuration)
* [Run Locally](#runlocally)





### Requires


- PHP 8+
- MySql / MariaDB
- Apache
- Composer
## Installation

Clone the project:

```bash
git clone https://github.com/fhrvrdr/Laravel-contact-app.git
```
Go to the project directory:
```bash
cd Laravel-contact-app
```
Install dependencies:
```bash
composer install
```

## Configuration

Create .env file:
```bash
cp .env.example .env
```

Update Database Configration:
```bash
...
DB_DATABASE=laravel_demo
DB_USERNAME=demo
DB_PASSWORD=demo123456
...

```

## Run Locally
Install npm dependencies:
```bash
npm install
npm run dev
```
Run Migrations:
```bash
php artisan migrate
```
Start the server:
```bash
php artisan serve
```
