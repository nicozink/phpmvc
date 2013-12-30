DROP DATABASE IF EXISTS dbt_master;

CREATE DATABASE dbt_master;

GRANT ALL ON `dbt_master`.* TO 'dbt_user'@'localhost' IDENTIFIED BY 'dbt_password';
