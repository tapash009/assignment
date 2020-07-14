Project Setup
---------------
This project was created in Laravel v7.<br>
Please follow the instruction below to setup the project<br>

**1. Git pull**<br>
`git clone https://github.com/tapash009/assignment.git`

**2. Environment Files**<br>
This package ships with a .env.example file in the root of the project. You must rename this file to just .env<br>
`Note: Make sure you have hidden files shown on your system.`

**3. Composer**<br>
Laravel project dependencies are managed through the PHP Composer tool. The first step is to install the dependencies by navigating into your project in terminal and typing this command:<br>
`composer install`

**4. Create Database**<br>
You must create your database on your server and on your .env file update the following lines:<br>
`DB_CONNECTION=mysql`<br>
 `DB_HOST=127.0.0.1`<br>
 `DB_PORT=3306`<br>
 `DB_DATABASE=homestead`<br>
 `DB_USERNAME=homestead`<br>
 `DB_PASSWORD=secret`<br>
 
 **5. Artisan Commands**<br>
 The first thing we are going to so is set the key that Laravel will use when doing encryption.
 `php artisan key:generate`<br>
 You should see a green message stating your key was successfully generated. As well as you should see the `APP_KEY` variable in your .env file reflected.<br> 
 
 
 **6. Create Database Tables**<br>
 We are going to run the built in migrations to create the database tables <br>
 `php artisan migrate`
 
 You Have completed with the project setup!
 
