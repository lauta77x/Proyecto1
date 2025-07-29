CREATE TABLE Users (
    ci char(8) PRIMARY KEY,
    first_name varchar(30) NOT NULL,
    last_name varchar(30) NOT NULL,
    age int NOT NULL CHECK (age >= 1 AND age <= 100),
    mail varchar(50) UNIQUE NOT NULL,
    phone varchar(15) NOT NULL,
    passwrd varchar(255) NOT NULL 
);