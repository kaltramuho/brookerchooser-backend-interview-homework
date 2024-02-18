# Laravel A/B Testing System

This provides a simple yet powerful A/B testing system. It allows you to create tests with multiple variants and assign these variants to user sessions based on predefined targeting ratios.

## Features

- Create and manage A/B tests with multiple variants.
- Assign variants to user sessions based on targeting ratios.
- Start and stop tests; once stopped, a test cannot be restarted.
- Support for multiple concurrent A/B tests.
- Middleware for consistent session handling across A/B variants.
- Database seeders for easy initialization of example data.

## Installation

### Prerequisites

- Laravel 8.x or newer.
- PHP 7.3 or newer.

### Step-by-Step Installation

1. **Clone the Repository:**

   ```
   git clone https://github.com/kaltramuho/brookerchooser-backend-interview-homework.git
   cd brookerchooser-backend-interview-homework
   ```

2. **Install Dependencies:**

   ```
   composer install
   ```

3. **Set Up Environment:**

   Copy `.env.example` to `.env` and configure your database settings.

   ```
   cp .env.example .env
   ```

4. **Generate Application Key:**

   ```
   php artisan key:generate
   ```

5. **Run Migrations:**

   ```
   php artisan migrate
   ```

6. **Seed the Database:**

   To add example tests and variants:

   ```
   php artisan db:seed
   ```

## Usage

### Managing A/B Tests

- Access the admin dashboard at `/admin/tests` to view, start, and stop tests.
- Use the `TestSeeder` and `VariantSeeder` for initial example data.

### Middleware Integration

- The `AssignVariant` middleware automatically assigns a variant to each session.