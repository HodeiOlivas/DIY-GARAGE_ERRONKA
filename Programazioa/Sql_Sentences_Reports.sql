
-- TR/R1
-- TR/R2
-- TR/R3
-- TR/R4
-- TR/R5
-- TR/R6

	-- get the THREE customers with the oldest reservation date
	SELECT id_Reservation, cust_Username, MAX(Date) as Last_Reservation 
	FROM reservation GROUP BY cust_Username ORDER by Last_Reservation desc limit 2;

	-- obtener la última compra más vieja de los 3 clientes que más tiempo hacen que no reservan
	-- returning the customer's data
	SELECT id_Reservation, cust_Username, MAX(Date) as Last_Reservation 
	FROM reservation WHERE Date < cast((now()) as date) 
	GROUP BY cust_Username ORDER by Last_Reservation desc limit 3;
	
	--returning the reservation's data
	SELECT * 
	FROM reservation WHERE Date < cast((now()) as date) 
	GROUP BY cust_Username ORDER by Date desc limit 3;

	
	-- pre final version of the sql sentence
		-- returning reservation's data
		SELECT reservation.id_Reservation as Reservation_Code, reservation.cust_Username, 
		MAX(reservation.Date) as Last_Reservation, customer.Name, customer.Surname
		FROM reservation, customer
		WHERE reservation.cust_Username = customer.Username and 
		reservation.Date < cast((now()) as date) 
		GROUP BY cust_Username ORDER by Last_Reservation desc limit 3;
		
		-- returning customer's data
		SELECT 
		MAX(reservation.Date) as Last_Reservation,
		customer.* 
		FROM reservation, customer
		WHERE reservation.cust_Username = customer.Username and 
		reservation.Date < cast((now()) as date) 
		GROUP BY cust_Username ORDER by Date desc limit 3;
		
		-- returning reservation's and customer's data mixed
		SELECT 
		reservation.id_Reservation as Reservation_Code, 
		MAX(reservation.Date) as Last_Reservation, 
		customer.Username, customer.Name, customer.Surname 
		FROM reservation, customer
		WHERE reservation.cust_Username = customer.Username and 
		reservation.Date < cast((now()) as date) 
		GROUP BY cust_Username ORDER by Last_Reservation desc limit 3;
	
	-- final version of sql sentence
		SELECT 
		reservation.id_Reservation as Reservation_Code, 
		MAX(reservation.Date) as Last_Reservation, 
		customer.Username, customer.Name, customer.Surname, 
        DATEDIFF(now(), MAX(reservation.Date)) as Days_Passed 
		FROM reservation, customer
		WHERE reservation.cust_Username = customer.Username and 
		reservation.Date < cast((now()) as date) 
		GROUP BY cust_Username ORDER by Days_Passed desc limit 3;	
	
	-- sql sentence calculating the amount of days since the last reservation of the customers
		