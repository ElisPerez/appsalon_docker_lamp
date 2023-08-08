   CREATE TABLE IF NOT EXISTS services (
          id INT (11) NOT NULL AUTO_INCREMENT,
          name VARCHAR(60) NOT NULL,
          price DECIMAL(6, 2) NOT NULL,
          PRIMARY KEY (id)
          );

SHOW TABLES;

DESCRIBE services;