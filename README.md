
# Testing API using PHP - reminder
## The Process:
- Hello World to make sure my PHP environment is okay. Page clients.php   
-- https://www.php.net/manual/en/tutorial.firstpage.php
- I have a MySQL database, but How to connect to that?  
-- https://www.php.net/manual/en/mysqlinfo.api.choosing.php  
-- https://www.php.net/manual/en/book.mysqli.php
- Creating database tables for testing  
-- I'll use GUID as PK. What's the size? echo uniqid() - 13 characters  
-- Primary key syntax   
-- Test the connection and first select
- Adding headers and a simple 200 response on my clients.php  
- Testing on Postman  
- On clients.php, transforming data from the database to json object  
-- Extracting data from the dataset https://www.php.net/manual/en/class.mysqli-result.php  
- How to response properly? I'll use the $_SERVER to check HTTP Verbs and $_REQUEST to know if there is an id or not. SELECT ALL OR SPECIFIC ONE   
- Environment variables to store secret key such as USERNAME and  PASSWORD. My PHP has multiple customers on the host service. I can't use php.ini. I'll create a specific file named autoloader.php  
-- https://www.php.net/manual/en/configuration.file.php  
- Okay. I have a MVP here: smartplansp.com.br/api/clients.php  
- Next steps will be:  
-- Authentication with JSON Web Token  
-- Other HTTP Verbs: POST, PUT, DELETE
