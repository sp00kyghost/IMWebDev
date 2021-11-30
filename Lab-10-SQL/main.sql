CREATE TABLE employees (
  firstname varchar(20),
  lastname varchar(20),
  age integer,
  title varchar(75),
  salary integer
);
INSERT INTO employees(firstname, lastname, age, title, salary)
VALUES ("Seth", "Prevott", 25, "Programmer", 1337000),
("Madison", "Valdez", 23, "Programmer", 1337000),
("Brady", "Johnson", 26, "Football Legend", 1337000),
("Bryce", "Lockwood", 24, "Absolute Legend", 1337000),
("John", "Ekstrom", 24, "THE Legend.", 1337000);

CREATE TABLE company(
id int,
compname varchar(75),
lastname varchar(20)
);
INSERT INTO company(id, lastname, compname)
VALUES (1, "Prevott", "Google"),
(1, "Valdez", "Google"),
(2, "Johnson", "Patriots Football Team"),
(3, "Lockwood", "Just a living legend"),
(4, "Ekstrom", "Just a walking legend");
SELECT firstname, lastname FROM employees WHERE lastname="Prevott"
UNION
SELECT id, compname FROM company WHERE lastname="Prevott";