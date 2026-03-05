# Task Management API

RESTful API untuk sistem manajemen tugas (Task Management) menggunakan Laravel dan MySQL.  
API ini memungkinkan pengguna untuk membuat, membaca, memperbarui, dan menghapus tugas, serta mengelompokkan tugas berdasarkan kategori.

---

## 🚀 Tech Stack

- Laravel
- PHP 8+
- MySQL
- Composer

---

## 📦 Installation Guide

### 1. Clone Repository

git clone https://github.com/MetaNurA/inagata_technical_test.git  
cd inagata_technical_test

### 2. Install Dependencies

composer install

### 3. Setup Environment File

cp .env.example .env

Lalu sesuaikan konfigurasi database di file `.env`:

DB_CONNECTION=mysql  
DB_DATABASE=task_api  
DB_USERNAME=root  
DB_PASSWORD=

### 4. Generate Application Key

php artisan key:generate

### 5. Run Migration

php artisan migrate

### 6. Run Server

php artisan serve

Akses API di:

http://127.0.0.1:8000/api/tasks

---

# 📌 API Endpoints

## 📂 Categories

| Method | Endpoint |
|--------|----------|
| GET | /api/categories |
| POST | /api/categories |
| GET | /api/categories/{category} |
| PUT / PATCH | /api/categories/{category} |
| DELETE | /api/categories/{category} |

---

## 📝 Tasks

| Method | Endpoint |
|--------|----------|
| GET | /api/tasks |
| POST | /api/tasks |
| GET | /api/tasks/{task} |
| PUT / PATCH | /api/tasks/{task} |
| DELETE | /api/tasks/{task} |

---

# 🔎 Filtering & Pagination

### Filter by Status

GET /api/tasks?status=to-do

### Filter by Category

GET /api/tasks?category_id=1

### Pagination

GET /api/tasks?page=1

Pagination menggunakan Laravel built-in pagination.

---

# ✅ Validation Rules

### Task Validation

- title → required
- status → must be one of: to-do, in-progress, done
- category_id → must exist in categories table

Validation diterapkan menggunakan `$request->validate()` pada controller.

---

# 🧠 Features Implemented

- CRUD Tasks
- CRUD Categories
- Task Filtering (status & category)
- Pagination
- Input Validation
- Task–Category Relationship (belongsTo)

---

# 📚 API Documentation

Postman Collection:  
(https://solar-crescent-577666.postman.co/workspace/My-Workspace~8880a8d2-f86c-4234-8b03-5a447393cb7f/collection/44254511-9c91f9b2-6737-4723-9882-9bf67e2d1289?action=share&creator=44254511)

---

# 🎥 Video Demo

Link Video:
https://drive.google.com/file/d/1a6t-aiwU4FP24cS1ziJ8159UyL8xxTZ8/view?usp=sharing

---

# 👨‍💻 Author

META NUR ARFIYA
Backend Developer Technical Test
