# Ecommerce
Laravel ecommerce project.
# How to run  
To run the project as a developer you should:  
1. Create file and name it .env
copy the contents of this file https://github.com/laravel/laravel/blob/master/.env.example
to your .env file then run this command : 
 php artisan key:generate 
 to generate key to your project
 Edit .env file to set the database credentials for example this credentials for xampp localhost:  
  DB_CONNECTION=mysql  
  DB_HOST=127.0.0.1  
  DB_PORT=3306  
  DB_DATABASE=ecommerce  
  DB_USERNAME=root  
  DB_PASSWORD=  
Where ecommerce is database name   
2. Run   
  <code>composer install </code>
  then run
  Run migrate and seeding command:   
  Open your CMD in windows write this command  
  run  
  <code>cd path_to_your_project_file</code>  
  Then run  
  <code>php artisan migrate --seed </code>
  This command create database tables and fields, create dummy products and admin login credentials.  
  Then run  
  <code>php artisan serve </code>
  To start the server.  
  This command create database tables and fields, create dummy products and admin login credentials.   
  Then run  
  <code>php artisan serve</code>
  To start the server.
3. Now you can access the admin area using this credentials:  
  email : admin@ecommerce.com  
  password : admin  
4. Test payment proccess  
  You can test payment process using one of this test cards:  
  https://stripe.com/docs/testing#cards  
  With any email, expire date and CVC.
# About the project
## Main parts  
  ⦁	Registration system  
  ⦁	CRUD of products and categories  
  ⦁	Dashboard of admin  
  ⦁	Shopping cart  
  ⦁	Payment methods  
### Registration system  
The system allows users to:  
  ⦁	creating their own accounts with their names and emails with default role as user.  
  ⦁	user can no access the admin area only users can access the frontend.  
  ⦁	Add products to cart and checkout.  
### CRUD of products and categories  
In admin area admin can Create, read, update and delete of products and categories.  
### Dashboard of admin  
In admin area the admin can see the orders with their details such as products, quantities, Date of order and so on.  
Admin can also see some statistics such as the number of orders, products, registered customers, most viewed products/categories, conversion rate (number of orders/ number of views) of products and so on.  
### Shopping cart  
The shopping cart functionality is essential part of the frontend of the system, We implemented it using sessions.   
User can:   
  ⦁	Add/remove product to/from the cart  
  ⦁	Increase/decrease the quantity of the same product in the cart  
### Payment methods
#### We implemented the main payment functionality using stripe (https://stripe.com/docs) Which Offers great docs and docs, it accepts the payment of many card such as Visa, Mastercard.  
#### We also added paypal getway payment method.
