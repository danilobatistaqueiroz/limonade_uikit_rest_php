

# SETUP THE ENVIRONMENT

___

### Setup the Postgresql

connect to database as postgres administrator:

psql -d postgres -U postgres

create database limonadedb;

create user limonadeadm WITH PASSWORD '123';

grant all privileges on database limonadedb to limonadeadm;

___

connect do database as limonadeadm:

psql -d limonadedb -U limonadeadm

create table users (id serial primary key, name varchar(100), email varchar(100), phone varchar(25), age int, password varchar(255));


---

### Setup the Front

https://notifyjs.com/

http://github.hubspot.com/vex/

https://getuikit.com/docs/

https://limonade-php.github.io/

vex-js

vex-dialog


____

### Running the application

in the webroot start the server: php -S localhost:9090

in the browser type: http://localhost:9090/public/index.php

____

### Screenshots

![front5](https://user-images.githubusercontent.com/32627919/39315520-3af082ae-494d-11e8-8d6a-e862ba732057.PNG)

![front6](https://user-images.githubusercontent.com/32627919/39315521-3b284d38-494d-11e8-81b4-ac73503ddbf8.PNG)

![front7](https://user-images.githubusercontent.com/32627919/39315522-3b4bf210-494d-11e8-8ea4-5b19e4018cdb.PNG)

![front8](https://user-images.githubusercontent.com/32627919/39315523-3b6d6526-494d-11e8-85d3-d14f4852a436.PNG)