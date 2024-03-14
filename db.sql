CREATE DATABASE todo_list_db;

USE todo_list_db;

CREATE TABLE IF NOT EXISTS task(
	id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(255),
    completed BOOL NOT NULL DEFAULT 0
);