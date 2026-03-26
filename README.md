# Booking Tour Web

A comprehensive web application for travel management, allowing users to browse destinations, book tours, and manage travel experiences. The platform includes a robust admin panel for managing content, users, and orders.

## Features
- **Tour Booking**: Streamlined process for users to book domestic and international tours.
- **Destination Management**: Detailed listings for various travel destinations.
- **User Accounts**: Secure registration and login, including Google OAuth integration.
- **Interactive Reviews**: Users can comment on and review tours.
- **Admin Dashboard**: Comprehensive tools for managing income, tours, schedules, users, and orders.

## Technologies Used
- **Backend**: Laravel, PHP
- **Frontend**: Vite, Axios
- **Database**: MySQL
- **Authentication**: Laravel Sanctum, Laravel Socialite
- **HTTP Client**: Guzzle

## Installation & Setup

### Prerequisites
- **PHP** (v8.1 or higher)
- **Composer**
- **Node.js** and **NPM**
- **MySQL**

### Step-by-Step Guide
1. **Clone the repository**
   ```bash
   git clone https://github.com/bichle04/laravel-travel-web.git
   cd laravel-travel-web
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Configure Environment**
   - Copy the example environment file:
     ```bash
     cp .env.example .env
     ```
   - Open `.env` and update your database credentials (DB_DATABASE, DB_USERNAME, DB_PASSWORD).

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations**
   ```bash
   php artisan migrate
   ```

6. **Build Frontend Assets**
   ```bash
   npm run build
   ```

7. **Run the Application**
   - Start the Laravel development server:
     ```bash
     php artisan serve
     ```
   - In a separate terminal, start the Vite development server:
     ```bash
     npm run dev
     ```
   The application should be accessible at `http://localhost:8000`.
