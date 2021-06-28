create TABLE users
(
id int AUTO_INCREMENT not null,
name varchar(50) not null,
lastname varchar(50) not null,
email varchar(100) not null,
password varchar(256) not null,
created_at timestamp default current_timestamp,
update_at timestamp default current_timestamp,
PRIMARY KEY(id)
)ENGINE= INNODB;