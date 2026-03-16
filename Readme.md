# PHP Laravel Vue Inventory Management

A modern web application for managing inventory, built with Laravel and Vue.js.

## Description

This inventory management system provides a user-friendly interface for tracking and managing inventory items. It was developed as part of a Rapid Application Development (RAD) test to evaluate the efficiency of building applications using Laravel and Vue.js technologies.

## Features

- User authentication and authorization
- Inventory item management (CRUD operations)
- Dashboard for overview
- Responsive design
- API endpoints for data access

## Tech Stack

- **Backend**: Laravel (PHP)
- **Frontend**: Vue.js with TypeScript
- **SPA Framework**: Inertia.js
- **Database**: MySQL/PostgreSQL (configurable)
- **Build Tool**: Vite
- **Testing**: PHPUnit

## Installation

### Prerequisites

- PHP 8.1 or higher
- Composer
- Node.js and npm
- Database server (MySQL, PostgreSQL, etc.)

### Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/php-laravel-vue-inventory-management.git
   cd php-laravel-vue-inventory-management
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Install Node.js dependencies:
   ```bash
   npm install
   ```

4. Copy the environment file and configure:
   ```bash
   cp .env.example .env
   # Edit .env with your database credentials
   ```

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Run database migrations:
   ```bash
   php artisan migrate
   ```

7. Build assets:
   ```bash
   npm run build
   ```

8. Start the development server:
   ```bash
   php artisan serve
   ```

## Usage

- Access the application at `http://localhost:8000`
- Register a new account or log in
- Navigate to the inventory section to add, edit, or delete items

## Testing

Run the test suite:
```bash
php artisan test
```
