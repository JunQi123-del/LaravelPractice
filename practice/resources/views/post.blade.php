<!DOCTYPE html>
<title> MyBlog </title>
<link rel="stylesheet" href="/app.css">
<script src="/app.js"></script>
<body>

 <article>
    <h1> My first post</h1>
    <p>
    Hello Everyone,

I am new in laravel and ubantu. i am trying to migrate my database using php artisan migrate command but i get error. i have already created a database/database.sqlite file. my .env file DB_CONNECTION=sqlite

BROADCAST_DRIVER=log CACHE_DRIVER=file QUEUE_CONNECTION=sync SESSION_DRIVER=file SESSION_LIFETIME=120

Error:- PHP Warning: PHP Startup: Unable to load dynamic library 'pdo_sqlite' (tried: /usr/lib/php/20170718/pdo_sqlite (/usr/lib/php/20170718/pdo_sqlite: cannot open shared object file: No such file or directory), /usr/lib/php/20170718/pdo_sqlite.so (/usr/lib/php/20170718/pdo_sqlite.so: cannot open shared object file: No such file or directory)) in Unknown on line 0
    </p>
 </article>
 <a href="/">Go Back</a>
 </html>