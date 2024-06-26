## Career Gunawan
0 [My Career](https://careergunawaan.000webhostapp.com/)
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Frontend
![image](https://github.com/ugunNet21/BOOKS_API_LARAVEL9/assets/45864165/a9ebf7c5-c1d6-499c-a210-b16438066f72)

## Dashboard admin

![image](https://github.com/ugunNet21/BOOKS_API_LARAVEL9/assets/45864165/2f843924-a86c-4498-a4a6-da820285b354)


## Image POSTMAN

![image](https://github.com/ugunNet21/BOOKS_API_LARAVEL9/assets/45864165/3961096c-2343-4657-9602-5bf6416ff59d)


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
## Guide API
# Laravel Books API

Laravel Books API is a simple API for managing book data.

## Table of Contents

- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
  - [Running the Application](#running-the-application)
- [Usage](#usage)
  - [Endpoints](#endpoints)
  - [Examples](#examples)
- [Contributing](#contributing)
- [License](#license)

## Getting Started

### Prerequisites

Make sure you have the following software installed on your machine:

- [PHP](https://www.php.net/) (>= 7.4)
- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/) (>= 8)
- [MySQL](https://www.mysql.com/) or another supported database

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/ugunNet21/BOOKS_API_LARAVEL9.git

Navigate to the project folder:

```bash

cd laravel-books-api
Install dependencies:
```
```bash
composer install
Copy the .env.example file to create a new .env file:
```
```bash
cp .env.example .env
Configure your database connection in the .env file.
```
Generate the application key:

```bash
php artisan key:generate
Running the Application
Run the migration to set up the database tables:
```
```bash
php artisan migrate
Start the development server:
```
```bash
php artisan serve
Visit http://localhost:8000 in your browser to access the API.
```
## Usage
Endpoints :
```bash
GET /api/books: Get all books.
```
```bash
GET /api/books/{id}: Get a single book by ID.
```
```bash
POST /api/books: Create a new book.
```
```bash
PUT /api/books/{id}: Update a book by ID.
```
```bash
DELETE /api/books/{id}: Delete a book by ID.
```

## Examples
Get all books
```bash
curl http://localhost:8000/api/books
```

Get a single book
```bash
curl http://localhost:8000/api/books/1
```
Create a new book
```bash
curl -X POST -H "Content-Type: application/json" -d '{"judul":"Sample Book","pengarang":"John Doe","tanggal_publikasi":"2022-01-01"}' http://localhost:8000/api/books
```
Update a book
```bash
curl -X PUT -H "Content-Type: application/json" -d '{"judul":"Updated Book"}' http://localhost:8000/api/books/1
```
Delete a book
```bash
curl -X DELETE http://localhost:8000/api/books/1
```
## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
