# Test Driven Development (TDD) workshop

## Purpose 

To explore and practice TDD in a way that simulates tasks in the real world. 

## Getting set up

The steps to get set up are: 

* Get a copy (or _'clone'_ in Git speak) of this repository on your development machine.
* Install dependencies:
    * We need the PHPUnit library to run our PHP tests
    * We'll use the [Composer](https://github.com/nationalarchives/tna-base) dependency manager to install PHPUnit most easily.
    
### Steps

* **If you haven't previously installed Composer on your development machine** follow step 2.7.1 from the README for [tna-base](https://github.com/nationalarchives/tna-base)
* Using Terminal, navigate to the root of this repository and type `composer install`. This command instructs Composer to read the contents of the `composer.json` file and install the dependencies listed there (which in our case is PHPUnit only)
* Once the dependencies are installed you will be able to run PHPUnit Tests by typing `vendor/bin/phpunit -c phpunit.xml` (Note: there are several ways of automating this - including a way for PhpStorm to run your tests automatically. I'd suggest looking into these but, for our purposes today, this command line runner should be fine).

## A quick overview of the files

* `phpunit.xml` is the configuration file used by PHPUnit. It basically says:
    * our tests are within files ending with `Test.php` within the tests directory
    * `bootstrap.php` should be loaded before test execution

* `ExampleTest.php` is simply an example of some PHPUnit tests
* `WorkshopTest.php` is where we will write our tests
* `composer.json` lists our Composer dependencies (this is where Composer looks when you type `composer install`)
* `.travis.yml` is used by Travis Continuous Integration (CI) to describe what it needs to do in order to run our tests

### The tasks 

The following tasks have been 

# URL splitting

Develop a class, function or set of functions which decompose a given URL into its constituents. For example, given the URL `http://www.nationalarchives.gov.uk/news`, it should return: 

* The protocol: 'http'
* The domain: 'www.nationalarchives.gov.uk'
* The path: '/news'

If the argument passed to the URL is not properly formatted the function should fail gracefully (in some way). 

For example: 

```php
\\ If you were to opt for individual functions, a get_path() function might look like this
$path = get_path('http://www.nationalarchives.gov.uk/news') \\ $path should be '\news'
```

```php
\\ While another version might return an array representing the parts
$url = deconstruct('http://www.nationalarchives.gov.uk/news') \\ $url["path"] would be '\news'

```

```php
\\ An object oriented approach might be 
$url = new Deconstructor('http://www.nationalarchives.gov.uk/news') \\ $url->path would be '\news'

```