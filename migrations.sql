CREATE TABLE users (
    user_id BIGINT(20) PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(1000) NOT NULL,
    role VARCHAR(15) NOT NULL DEFAULT 'USER',
    first_name VARCHAR(255) NOT NULL,
    middle_name VARCHAR(255) NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    address VARCHAR(255) NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`username`, `password`, `role`, `first_name`, `last_name`, `email`, `address`)
VALUES ('admin', '21232f297a57a5a743894a0e4a801fc3', 'ADMINISTRATOR', 'System', 'Administrator', 'email@domai.com', 'Capital City, Iloilo, Philippines 5000');