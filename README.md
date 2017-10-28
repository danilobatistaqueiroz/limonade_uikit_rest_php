

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