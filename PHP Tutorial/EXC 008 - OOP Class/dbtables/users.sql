CREATE TABLE users(
	user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
	user_uid varchar(256) not null,
	user_pwd varchar(256) not null
);

INSERT INTO users (user_uid, user_pwd) VALUES 
('Davis', 'test123'),
('Kevin', 'test123'),
('Leo', 'test123');