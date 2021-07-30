# Jarvis COVID-19 & Vaccination Analytics

##### A COVID-19 Analytical Mapper

## How to Setup Locally

1. Fork the project

2. Clone GitHub repository for this project locally
   `git clone <URL OF THE FORKED REPO>`

3. Navigate to local repository
   `cd covid19-analytical-mapper`

4. Only optional. Checkout from the current branch and create a new one.
   `git checkout -b <branch_name>`

5. Install composer dependencies
   `composer install`

6. Install npm dependencies
   `npm install`

7. Create a copy of .env file
   `cp .example.env .env`

8. Generate an app encryption key
   ` php artisan key:generate`

9. Create an empty database with MySQL
