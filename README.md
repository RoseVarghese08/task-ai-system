# Task Management System

A simple Laravel-based task management application that allows users to create, manage, and track tasks.

## Features

* Create new tasks
* Edit tasks
* View task list
* View single task details
* Update task status
* Task priority management
* Due date tracking
* Assign tasks to users
* API endpoints for tasks

## Tech Stack

* Laravel
* PHP
* MySQL
* Tailwind CSS
* Repository + Service Pattern

## Architecture

Controller → Service → Repository → Model

This structure separates business logic and database access, making the code clean and maintainable.

## Installation

1. Clone the repository

```bash
git clone https://github.com/yourusername/task-management-system.git
```

2. Install dependencies

```bash
composer install
npm install
```

3. Configure environment

Copy `.env.example` to `.env` and update database settings.

4. Run migrations

```bash
php artisan migrate
```

5. Start the application

```bash
php artisan serve
npm run dev


## API Endpoints

GET /api/tasks
GET /api/tasks/{id}
POST /api/tasks
PATCH /api/tasks/{id}/status

## Author

Developed as part of a Laravel machine test.
