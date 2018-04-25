

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

![front](https://user-images.githubusercontent.com/32627919/39277032-2aee2e8c-48c2-11e8-9b6e-1d7ad89ce11a.PNG)

![front2](https://user-images.githubusercontent.com/32627919/39277034-2b142736-48c2-11e8-8ce1-f1e531c2b359.PNG)