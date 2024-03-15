# Laravel_Blog_Eljesa
Hi thi is my version of the laravel blog.

This blog's starter code was cloned from : https://github.com/codewithdary/laravel-8-complete-blog.git

This blog is about all things nail health and how to find the best nail technician for you.

Enjoy!

Here's how you access this project:

Step 1:
Clone the github repo into your VS code, or any compiler!
/**If it does not work from the web git use the desktop version**/

Step 2:
Make your own git repo with the name of the project and copy and paste all the files in there.
TIP: use desktop github

Step 3:
Make sure you have : 
PHP 7.3 or higher 
Node 12.13.0 or higher 

Step 4:
# Access the folder via the terminal
cd laravel-8-complete-blog
# Configure the env file
cp .env.example .env
# Install composer
composer install
# Set up php artisan
php artisan key:generate
php artisan cache:clear
php artisan config:clear
php artisan serve //use this to deploy the webpage

Step 5:
# Create the database and establish a connection
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
(for this projects contact page a separate database was set up)
# Migrate the tables
php artisan migrate

Step 6:
# Installing and configuring tailwind
/**use these commands**/
composer require laravel-frontend-presets/tailwindcss --dev
php artisan ui tailwindcss --auth
npm remove laravel-mix
npm install laravel-mix --save-dev
npm install cross-env --save-dev

npm run watch //run this command to render the tailwind css


# Tutorials followed:
https://www.youtube.com/watch?v=Rqo_1TV7wQs

# All styling and editing was done using the official tailwind website and the examples in the blog website.

# To access this project run the command:
php artisan serve
npm run watch

# Thank you for taking the time to read this file!
