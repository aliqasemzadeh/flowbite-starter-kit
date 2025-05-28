# Flowbite Starter Kit

A modern, responsive starter kit for Laravel applications built with Flowbite, Tailwind CSS, and Livewire.

## About Flowbite Starter Kit

Flowbite Starter Kit is a comprehensive boilerplate for Laravel applications that combines the power of Laravel with modern frontend technologies. It provides a solid foundation for building web applications with a beautiful UI, interactive components, and a complete authentication system out of the box.

## Features

- **Modern UI Components** - Built with Flowbite and Tailwind CSS
- **Interactive UI** - Powered by Livewire v3 and WireUI
- **Complete Authentication System**
  - Login and Registration
  - Password Reset
  - Email Verification
  - Password Confirmation
- **User Dashboard**
- **User Profile Management**
- **Dark Mode Support**
- **Localization Ready**
- **Responsive Design**
- **Documented Components** - See the [docs/components](docs/components) directory

## Technologies Used

- **Backend**
  - Laravel 12
  - PHP 8.2+
- **Frontend**
  - Flowbite 3.1.2
  - Tailwind CSS 4.1.6
  - Livewire 3.6
  - WireUI 2.4
  - Vite 6.2.4

## Installation

1. Clone the repository
   ```bash
   git clone https://github.com/yourusername/flowbite-starter-kit.git
   cd flowbite-starter-kit
   ```

2. Install PHP dependencies
   ```bash
   composer install
   ```

3. Install NPM dependencies
   ```bash
   npm install
   ```

4. Create a copy of the .env file
   ```bash
   cp .env.example .env
   ```

5. Generate an application key
   ```bash
   php artisan key:generate
   ```

6. Configure your database in the .env file
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=flowbite_starter_kit
   DB_USERNAME=root
   DB_PASSWORD=
   ```

7. Run migrations
   ```bash
   php artisan migrate
   ```

8. Build assets
   ```bash
   npm run build
   ```

## Development

To start the development server:

```bash
php artisan serve
```

To compile assets and watch for changes:

```bash
npm run dev
```

For a convenient development experience, you can use the custom composer script:

```bash
composer dev
```

This will start the Laravel server, queue worker, and Vite development server concurrently.

## Testing

Run the test suite with:

```bash
composer test
```

## License

The Flowbite Starter Kit is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
