# Donation Recording Website — Bina Salamah Foundation

A web-based donation recording and foundation information system developed for **Bina Salamah Foundation**, a social organization focused on supporting orphans and underprivileged communities.

This project aims to improve donation data management, simplify administrative activities, and provide accessible information about the foundation, its programs, and activities.

The application provides a public-facing website and an administrative dashboard for managing donation records and foundation activities.

## Features

* **Donation Information** — Provides donation details, bank account information, and a convenient copy-to-clipboard feature.
* **Donation Management** — Create, read, update, and delete donation records.
* **Activity Management** — Manage foundation activities and publications.
* **Dashboard Overview** — Provides a summary of recorded donation and activity data.

## Tech Stack

| Technology     | Purpose                            |
| -------------- | ---------------------------------- |
| PHP            | Backend programming language       |
| Laravel        | Backend web framework              |
| MySQL          | Relational database                |
| Blade          | Server-side templating             |
| Tailwind CSS   | User interface styling             |
| Laravel Breeze | Admin authentication               |

## Getting Started

Make sure you have installed:

* PHP (compatible with the Laravel version used)
* Composer
* MySQL
* Node.js and npm
* Git
* XAMPP or another local development environment

### Installation

**1. Clone the repository**

```bash
git clone https://github.com/iffahkr/web_bina_salamah.git
```

**2. Navigate to the project directory**

```bash
cd YOUR-REPOSITORY
```

**3. Install PHP dependencies**

```bash
composer install
```

**4. Install frontend dependencies**

```bash
npm install
```

**5. Create the environment configuration**

```bash
cp .env.example .env
```

For Windows Command Prompt, you can use:

```cmd
copy .env.example .env
```

**6. Generate the application key**

```bash
php artisan key:generate
```

**7. Configure the database**

Create a MySQL database, then update the following variables in your `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=
```

Adjust the database credentials according to your local environment.

**8. Run database migrations**

```bash
php artisan migrate
```

**9. Create the storage symbolic link**

```bash
php artisan storage:link
```

**10. Build frontend assets**

```bash
npm run build
```

**11. Start the Laravel development server**

```bash
php artisan serve
```

Open the application in your browser:

```text
http://127.0.0.1:8000
```

For frontend development with Vite hot reload, run the following command in a separate terminal:

```bash
npm run dev
```

## Project Background

This project was developed as part of an undergraduate thesis in Informatics Engineering.

**Project Title:**
*Design and Development of a Donation Recording Website for Bina Salamah Foundation Using the Laravel Framework.*

**Development Methodology:** Rapid Application Development (RAD).
