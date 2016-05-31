# Drupal 8 Log utility tool

Simple based Symfony2 service class for logging from anywhere in your Drupal 8 customs modules.

## Installation
1. Download the PHP Class file `Log.php` in your `module/src/Service` custom module folder.
2. Change the namespace with your custom module name
3. Declare it as a service in your module `module/module.services.yml`
    

## Configuation
In `Log.php` line 6 and 7 change constant variable with your custom values : 
  - `LOG_FILE`  : Absolute path to your custom log file (if it does not exist then it will be created)
  - `LOG_EMAIL` : Email address will be sent logs

## To log
### In file
    \Drupal::service('module.log')->file('My first log write in my custom log file');
    
### By mail
    \Drupal::service('module.log')->mail('My first log send by mail');

## Contribute
Any contribution is welcome
