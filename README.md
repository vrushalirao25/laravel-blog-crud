# Blog

A modern blog platform built with Laravel 11 featuring complete CRUD operations for content management.

## Prerequisites

Before you begin, ensure you have the following installed:
- PHP 8.2 or higher
- Composer
- Node.js and npm
- MySQL or another supported database
- Git

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/vrushalirao25/laravel-blog-crud.git
cd laravel-blog-crud
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 3. Environment Setup

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Database Configuration

1. **Start MySQL service:**
   ```bash
   sudo systemctl start mysql
   sudo systemctl status mysql
   ```

2. **Create database:**
   ```bash
   mysql -u root -p
   ```
   
   In MySQL console:
   ```sql
   CREATE DATABASE blog;
   EXIT;
   ```

3. **Configure `.env` file:**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=blog
   DB_USERNAME=root
   DB_PASSWORD=your_password_here
   ```

### 5. Run Migrations

```bash
php artisan migrate
```

## Running the Application

```bash
# Start the development server
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## Docker Alternative (Optional)

If you prefer using Docker for your database:

1. Start MySQL container and access phpMyAdmin at `http://localhost:8080`
2. Create your database through the phpMyAdmin interface
3. Update your `.env` file accordingly

## Verification

Check if everything is set up correctly:

```bash
# Check migration status
php artisan migrate:status

# List all routes
php artisan route:list
```

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).

## Support

If you encounter any issues during installation, please check:
1. PHP and Composer versions meet requirements
2. Database connection settings in `.env`
3. All migrations have run successfully
4. Node.js dependencies are installed
