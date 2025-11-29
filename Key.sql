CREATE TABLE users(
 id INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(50),
 password VARCHAR(50),
 banned INT DEFAULT 0
);

CREATE TABLE keys(
 id INT AUTO_INCREMENT PRIMARY KEY,
 license_key VARCHAR(100),
 status VARCHAR(10)
);

INSERT INTO keys(license_key,status) VALUES("TEST-KEY-123","active");
