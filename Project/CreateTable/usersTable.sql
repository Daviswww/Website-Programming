CREATE TABLE users (
	users_id int(11) not null AUTO_INCREMENT PRIMARY KEY,
    users_name varchar(256) not null,
    users_email varchar(256) not null,
    users_uid varchar(256) not null,
    users_pwd varchar(256) not null
);

INSERT INTO users (users_id, users_name, users_email, users_uid, users_pwd)
	VALUES ( 'Simon', 'S123@gamil.com', 'SimonHo', 'SimonHo123');