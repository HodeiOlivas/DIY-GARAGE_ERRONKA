DROP TABLE Worker;
CREATE TABLE Worker (
	id_worker INTEGER PRIMARY KEY AUTOINCREMENT,
	Name VARCHAR(20),
	Surname VARCHAR(20),
	Password VARCHAR(50),
	Occupation VARCHAR(50),
	Mail VARCHAR(50),
	Phone_Number INTEGER,
	Salary DOUBLE(4,2),
	Start_time TIME,
	Finish_time TIME);

INSERT INTO Worker VALUES (null, "primer", "trabajador", 
"pwd1", "Mechanic", "trabajador.primer@garage.diy", 123456789, 1500, 9:00, 19:00);

INSERT INTO Worker (Name, Surname, Password, Occupation, Mail, Phone_Number, Salary, Start_time, Finish_time) 
VALUES ("segundo", "langile","pwd1", "Mechanic", 
"trabajador.primer@garage.diy", 123456789, 1500, 9:00, 19:00);

--INSERT INTO TERMINOAK (euskaraz, gazteleraz) VALUES ("marrubia", "fresa");
	
	