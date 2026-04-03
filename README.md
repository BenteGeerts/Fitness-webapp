# Fitness Webapp

A gamified fitness tracking web application built with Laravel. Users can create and track workout programs, earn achievements and rewards, and compete with friends — with optional Google and Microsoft account login.

## Features

- **Training Programs** — Create, manage, and log custom workout programs with exercise weight progression tracking
- **Exercise Library** — Browse categorized exercises with history tracking
- **Gamification** — Earn diamonds, unlock achievements, maintain streaks, collect power-ups, and level up through a virtual companion system
- **Social** — Add friends and share progress
- **OAuth Login** — Sign in with Google or Microsoft
- **Google Fit Integration** — Connect your Google Fit account to sync fitness data
- **Responsive UI** — Built with Bootstrap 5

## Tech Stack

| Layer | Technology |
|---|---|
| Backend | PHP 8.0.2+, Laravel 9 |
| Frontend | Blade, Livewire 2, Vite, Bootstrap 5 |
| Database | MySQL (Eloquent ORM) |
| Auth | Laravel Sanctum, Laravel Socialite (Google, Microsoft) |
| Charts | Chart.js |
| Testing | PHPUnit |

## Requirements

- PHP 8.0.2+
- Composer
- Node.js & npm
- MySQL 5.7+

## Installation

```bash
# Clone the repository
git clone <repo-url>
cd Fitness-webapp

# Install dependencies
composer install
npm install

# Set up environment
cp .env.example .env
php artisan key:generate
```

Configure your `.env` file:

```env
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Optional: OAuth (Google / Microsoft)
GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
GOOGLE_REDIRECT_URI=

MICROSOFT_CLIENT_ID=
MICROSOFT_CLIENT_SECRET=
MICROSOFT_REDIRECT_URI=
```

```bash
# Run migrations (and optionally seed sample data)
php artisan migrate
php artisan db:seed  # optional

# Build frontend assets
npm run build
```

## Running Locally

```bash
# Start the Laravel dev server
php artisan serve

# In a separate terminal, start Vite for hot-reloading
npm run dev
```

The app will be available at `http://localhost:8000`.

## Testing

```bash
php artisan test
```

## Project Structure

```
app/
  Http/Controllers/   # Route controllers
  Http/Livewire/      # Livewire components
  Models/             # Eloquent models
  Services/           # Business logic (e.g. Google Fit API)
  Traits/             # Reusable logic (streaks, diamonds, auth, etc.)
database/
  migrations/         # Database migrations
  seeders/
resources/
  views/              # Blade templates
  js/                 # JavaScript
  scss/               # Stylesheets
routes/
  web.php             # Web routes
  api.php             # API routes (Sanctum-protected)
```
