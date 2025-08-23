## Breadcrumbs

This project uses [diglactic/laravel-breadcrumbs](https://github.com/diglactic/laravel-breadcrumbs) for navigation breadcrumbs.

### Installation

Install the package via Composer:

```sh
composer require diglactic/laravel-breadcrumbs
```

### How to use:

1. **Define breadcrumbs** in `routes/breadcrumbs.php`:

    ```php
    Breadcrumbs::for('home', function ($trail) {
        $trail->push('Home', route('home'));
    });
    Breadcrumbs::for('products.index', function ($trail) {
        $trail->parent('home');
        $trail->push('Products', route('products.index'));
    });
    ```

2. **Render breadcrumbs** in your Blade views (usually in your layout):

    ```blade
    @if (Breadcrumbs::has())
        {{ Breadcrumbs::render() }}
    @endif
    ```

3. **Customize the view** (optional):
    ```sh
    php artisan vendor:publish --tag=breadcrumbs-views
    ```
    Then edit the published file in `resources/views/vendor/breadcrumbs/`.

For more details, see the [official documentation](https://github.com/diglactic/laravel-breadcrumbs).

# Project Setup

Follow these steps to set up and run this Laravel project:

## Requirements

-   PHP 8.x or higher
-   Composer
-   Node.js & npm
-   SQLite (or your preferred database)

## Installation

1. **Clone the repository:**

    ```sh
    git clone <your-repo-url>
    cd laravel-ecommerce-001
    ```

2. **Install PHP dependencies:**

    ```sh
    composer install
    ```

3. **Install Node.js dependencies:**

    ```sh
    npm install
    ```

4. **Copy the environment file:**

    ```sh
    cp .env.example .env
    ```

    Edit `.env` and set your database and other environment variables as needed.

5. **Generate the application key:**

    ```sh
    php artisan key:generate
    ```

6. **Run migrations and seeders:**

    ```sh
    php artisan migrate --seed
    ```

7. **Build frontend assets:**
   For development:

    ```sh
    npm run dev
    ```

    For production:

    ```sh
    npm run build
    ```

8. **Create a storage symlink (for file uploads):**

    ```sh
    php artisan storage:link
    ```

9. **Start the development server:**

    ```sh
    php artisan serve
    ```

    Visit the URL shown in your terminal (usually http://127.0.0.1:8000).

## Troubleshooting

-   Make sure your PHP, Composer, Node.js, and npm versions meet the requirements.
-   Check your `.env` file for correct database and app settings.
-   If you change frontend code, re-run `npm run dev` or `npm run build`.
-   For any issues, check the Laravel and Node.js error logs.
