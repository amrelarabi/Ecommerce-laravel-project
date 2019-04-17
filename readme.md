# ecommerce
Laravel ecommerce project  
# How to run  
To run the project as a developer you should:  
1. Edit .env file setting the database info  
  DB_CONNECTION=mysql  
  DB_HOST=127.0.0.1  
  DB_PORT=3306  
  DB_DATABASE=ecommerce  
  DB_USERNAME=root  
  DB_PASSWORD=  
2. Run migrate and seeding command   
  From cmd in the project file run   
  php artisan migrate --seed  
  This command create database tables and fields,  
  and create dummy products,  
  and admin login credentials.  
3. Now you can access the admin area using:  
  email : admin@ecommerce.com  
  password : admin  
4. test payment proccess  
  You can test payment process using one of this test cards:  
  https://stripe.com/docs/testing#cards  
  With any email, expire date and CVC  
