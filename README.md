# PHP Sample – Property Filter By ShazZ

This is a small PHP code sample I created for my application to AgentFire.
It demonstrates clean, framework-free PHP with validation and a PHPUnit test.

**Features**

- Simple findHouses() function to filter properties by city and max price

- JSON response output for easy API-style usage

- PHPUnit test to verify the function works correctly

- Composer setup for easy dependency management

- Clear, commented code that is easy to understand

**Run the Code**

- Clone or download this repo.

- Start the built-in PHP server:

- php -S 127.0.0.1:8080 houses.php


**Open in your browser:**

Before running in the browser, make sure the check if another app owns the port on your PC:

netstat -ano | findstr :8080

If you see a PID, kill it:

taskkill /PID <PID> /F

http://127.0.0.1:8080/houses.php

Then re-run the PHP server.

**You should see JSON like:**

[{"id":1,"city":"Austin","price":300000}]

**Run the Tests**

Install dependencies (this will download PHPUnit ^11.5):

composer install


**Run PHPUnit:**

On Windows (PowerShell):

vendor\bin\phpunit.bat


**Expected output:**

OK (1 test, 2 assertions)

# Notes

This project is for demo purposes only as part of the interview process.

It is written with PHP 8.x and PHPUnit 11.x in mind.

No external frameworks are used; only Composer + PHPUnit.
