-- Crear la tabla Worker
DROP TABLE "Worker";
CREATE TABLE `Worker` (
  `Worker_ID` int(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Occupation` varchar(30) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Phone_Number` int(20) NOT NULL,
  `Salary` DOUBLE(6,2) NOT NULL,
  `Start_time` TIME NOT NULL,
  `Finish_time` TIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insertar registros en la tabla Worker
INSERT INTO worker (Name, Surname, Password, Occupation, Mail, 
Phone_Number, Salary, Start_time, Finish_time) Values ("bigarren", "langile", 
"pwd2", "Mechanic", "langile.bigarren@garage.diy", 987654321, 900.20, "09:00:00", "19:00:00");

-- ################################################

-- Crear la tabla Cabin
DROP TABLE "Cabin";
CREATE TABLE `Cabin` (
  `Cabin_ID` VARCHAR(10) NOT NULL PRIMARY KEY,
  `id_worker` int(20) NOT NULL,
  `Size` DOUBLE(3,2) NOT NULL,
  `Color` varchar(20) NOT NULL,
  `Price_Hour` DOUBLE(5,2) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insertar registros en la tabla Cabin
INSERT INTO cabin (Cabin_ID, id_worker, Size, Color, Price_Hour, Description) 
Values ("C1", 2, 2.00, "Green", 25.63, "Tester cabin");

-- ################################################

-- Crear la tabla Customer
DROP TABLE "Customer";
CREATE TABLE `Customer` (
  `Username` VARCHAR(50) NOT NULL PRIMARY KEY,
  `Name` varchar(20) NOT NULL,
  `Surname` VARCHAR(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Birthday` DATE NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Phone_Number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insertar registros en la tabla Customer
INSERT INTO customer (Username, Name, Surname, Password, Birthday, Mail, Phone_Number) 
VALUES 
("user11", "primer", "cliente", "pwd1", "2020-06-03", "cliente.primer@garage.diy", 963852741);


-- ################################################

DROP TABLE "Reservation";
CREATE TABLE `Reservation` (
  `id_Reservation` int(50) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `cust_Username` varchar(50) NOT NULL,
  `id_cabin` VARCHAR(10) NOT NULL,
  `Date` DATE NOT NULL,
  `Starting_Hour` TIME NOT NULL,
  `Ending_Hour` TIME NOT NULL,
  `Amount_Hours` int(20) NOT NULL,
  `Total_Price` DOUBLE(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insertar registros en la tabla Reservation
INSERT INTO reservation (cust_Username, id_cabin, Date, 
Starting_Hour, Ending_Hour, Amount_Hours, Total_Price) 
VALUES ("user11", "C0", "2022-03-30", "9:00", "11:00", HOUR (timediff(Ending_Hour, Starting_Hour)), 15.40);


-- ################################################


DROP TABLE "Product";
CREATE TABLE `Product` (
  `id_Product` varchar(50) NOT NULL PRIMARY KEY,
  `Name` varchar(50) NOT NULL,
  `Price` DOUBLE(10,2) NOT NULL,
  `Description` VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insertar registros en la tabla Product
INSERT INTO product (id_Product, Name, Price, Description) 
VALUES ("CM11", "Carrocería Metal", 74.10, "Carrocería con acabado metálico.");


-- ################################################


DROP TABLE "Purchase";
CREATE TABLE `Purchase` (
  `id_Purchase` int(50) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `cust_Username` varchar(50) NOT NULL,
  `id_Product` varchar(50) NOT NULL,
  `Date` DATE NOT NULL,
  `Amount` int(50) NOT NULL,
  `Final_Cost` DOUBLE (10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insertar registros en la tabla Product
INSERT INTO purchase (cust_Username, id_Product, Date, Amount, Final_Cost) 
VALUES ("user11", "CM11", "2021-09-27", 3, 90);





--VALUES ("user11", "C0", "2002-03-30", "9:00", "11:00", SELECT DATEDIFF(MINUTE, @Starting_Hour, @Ending_Hour) / 60.0, 15.40);
--select timediff("11:00:00", "09:00:00")

--SELECT HOUR (timediff("11:00:00", "09:00:00"))



--insertar nueva reserva -> calculando también el total price
INSERT INTO reservation (cust_Username, id_cabin, Date, 
Starting_Hour, Ending_Hour, Amount_Hours, Total_Price) 
VALUES ("user11", "C0", "2022-03-30", "9:00", "11:00", HOUR (timediff(Ending_Hour, Starting_Hour)), 
Amount_Hours * (SELECT cabin.Price_Hour from cabin where cabin.Cabin_ID="C0"));

--c
INSERT INTO reservation (cust_Username, id_cabin, Date, 
Starting_Hour, Ending_Hour, Amount_Hours, Total_Price) 
VALUES ("user11", "C0", "2022-03-30", "9:00", "15:00", HOUR (timediff(Ending_Hour, Starting_Hour)), 
Amount_Hours * (SELECT cabin.Price_Hour from cabin INNER JOIN reservation ON cabin.Cabin_ID=reservation.id_cabin));

--- sentencia/consulta sql que calcula el valor de la reserva
SELECT (reservation.Amount_Hours * cabin.Price_Hour) as "total" from reservation INNER JOIN cabin ON reservation.id_cabin=cabin.Cabin_ID;

--- insertar nueva reserva sin introducir un valor para el total Price
INSERT INTO `reservation`(`cust_Username`, `id_cabin`, `Date`, `Starting_Hour`, `Ending_Hour`, `Amount_Hours`) 
VALUES ('user22','C0','2022-04-05','10:00','12:00','HOUR (timediff(Ending_Hour, Starting_Hour))');


--trigger casa
CREATE TRIGGER after_Reservation_Insert
BEFORE INSERT ON reservation 
FOR EACH ROW
SET reservation.Total_Price = (SELECT (reservation.Amount_Hours * cabin.Price_Hour) from reservation 
                               INNER JOIN cabin 
                               ON reservation.id_cabin=cabin.Cabin_ID);


--TXOSTENAK--
--Cuántas veces se ha vendido cada producto:
String sql = "SELECT Distinct(id_Product) as Catalogo, count(id_Product) as Recuento FROM purchase group by id_Product";

--Compras del cliente deseado:
String sql = "SELECT * FROM purchase WHERE cust_Username = ?";

--consulta para obtener registro random de una tabla (p.e.: random worker):
SELECT Worker_ID, Name FROM worker ORDER BY RAND() LIMIT 1;




---links info
https://www.freecodecamp.org/espanol/news/declaracion-sql-update/
https://www.mysqltutorial.org/select-random-records-database-table.aspx
https://www.codegrepper.com/code-examples/sql/date+greater+than+in+sql --(consultas SQL)
https://ubiq.co/database-blog/multiple-counts-with-different-conditions-in-single-mysql-query/










