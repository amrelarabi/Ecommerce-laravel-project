# Laravel E-commerce Backend API

A scalable e-commerce backend system built with Laravel, focusing on API-driven architecture, payment processing, and business logic.

## Key Features

- Authentication system (user & admin roles)
- Product and category management
- Shopping cart and order processing
- RESTful API design
- Payment integration (Stripe, PayPal)
- Admin dashboard with order tracking and statistics
- Session-based cart handling
- Database seeding for demo data

## Tech Stack

- PHP (Laravel)
- MySQL
- REST APIs
- Stripe API
- PayPal API

## Project Highlights

- Designed modular backend architecture for scalability
- Implemented full e-commerce workflow (cart → checkout → payment → order)
- Integrated real-world payment gateways with test environment
- Built API-first structure for frontend/mobile integration
- Optimized database interactions and relationships

## How to Run

1. Clone the repository
git clone https://github.com/amrelarabi/Ecommerce-laravel-project.git

cd Ecommerce-laravel-project

2. Install dependencies
composer install

4. Setup environment
cp .env.example .env
php artisan key:generate

6. Configure database in .env
DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=

7. Run migrations and seed data
php artisan migrate --seed

8. Start the server
php artisan serve

Open in browser
http://127.0.0.1:8000

Admin Access
Email admin@ecommerce.com

Password admin

## Demo Credentials

Admin login:

- Email: admin@ecommerce.com  
- Password: admin  

## Payment Testing

Use Stripe test cards:  
https://stripe.com/docs/testing#cards
