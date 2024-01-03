<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Laravel Test Task

## Pulling and Running a GitHub Project in a Docker Container

Follow these steps to pull a Laravel project from GitHub and run the application in a Docker container. Ensure that Docker is already installed on your system.

### Step 1: Clone the GitHub Repository

``` git clone git@github.com:trokhymenko/test_task.git ```

### Step 2: Navigate to the Project Directory

``` cd test_task ```

Navigate to the directory created by the git clone command.

### Step 3: Copy example of environment file

``` cp .env.exmpale .env ```


### Step 4: Run the Docker Container

``` docker compose up ```

### Step 5: Run the Docker Command line and Install all requirements

```composer install```

```php artisan migrate```

```php artisan import-trips```

### Step 5: Access the Application
Open a web browser or make requests to the specified host and port to access the running application.

```http request
http://localhost
```

Congratulations! You have successfully pulled a project from GitHub and run it in a Docker container.

### Step 6: Rn Tests
```shell
php artisan test
```
