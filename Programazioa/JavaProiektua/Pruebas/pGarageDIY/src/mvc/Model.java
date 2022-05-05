/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mvc;

import java.awt.Color;
import java.awt.Graphics;
import java.io.PrintWriter;
import java.io.*;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.time.LocalTime;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Random;
import java.util.Scanner;
import java.util.logging.Level;
import java.util.logging.Logger;

import mvc.View.*;
import myClasses.*;
import forGraphics.*;
import java.sql.Date;
import java.text.SimpleDateFormat;
import java.time.format.DateTimeFormatter;
import java.util.Locale;

//import myClasses.*;
/**
 *
 * @author arceredillo.adrian
 */
public class Model {

    private final String DB = "db/db_pruebagarage1.db";
    //private static final String DB = "src/db/Hiztegia.db";

    private Connection connect() throws SQLException {

        // SQLite connection string
        //String url = "jdbc:sqlite:" + DB;
        //String url = "jdbc:mariadb://localhost:3307/dbpruebagarage";
        //String url = "jdbc:mariadb://localhost:3307/dbPrueba";
        String url = "jdbc:mysql://localhost:3306/db_pruebagarage1";
        //String url = "jdbc:sqlite:" + DB;

        Connection conn = null;
        /*Connection conn = DriverManager.getConnection(
        "jdbc:mysql://localhost:3306/dbpruebagarage", 
        "root", 
        "");
         */
        try {
            conn = DriverManager.getConnection(url, "root", "");
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }
        return conn;
    }

    private static Connection connect2() {
        // SQLite connection string
        String url = "jdbc:mysql://localhost:3306/db_pruebagarage1";
        //String url = "jdbc:sqlite:" + DB;

        Connection conn = null;
        try {
            //conn = DriverManager.getConnection(url);
            conn = DriverManager.getConnection(url, "root", "");
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }
        return conn;
    }

    public String underAgeCustomersString() {
        String sql = "SELECT * FROM customer ORDER BY customer.Birthday desc";  //añadir: limit X
        ArrayList<Customer> underageCustomers = new ArrayList<>();

        try (Connection conn = connect();
                Statement stmt = conn.createStatement();
                ResultSet rs = stmt.executeQuery(sql)) {

            LocalDate fechaActual = LocalDate.now();
            System.out.println("Fecha actual: " + fechaActual);

            LocalDate fechaLimite = fechaActual.minusYears(18);
            System.out.println("Para ser mayor de edad: " + fechaLimite);

            System.out.println("\nUnderage customers: ");
            System.out.println("==========================================================================================================================");
            System.out.printf("%-10s %10s %15s %15s %15s %-20s %20s \n", "Username", "Name", "Surname", "Password", "Birthday", "Mail", "Phone Number");
            System.out.println("--------------------------------------------------------------------------------------------------------------------------");

            while (rs.next()) {

                LocalDate fechaCustomer = LocalDate.parse(rs.getString("Birthday"));

                if (fechaCustomer.isAfter(fechaLimite)) {
                    Customer underCustomer = new Customer(
                            rs.getString("Username"), rs.getString("Name"), rs.getString("Surname"), rs.getString("Password"),
                            LocalDate.parse(rs.getString("Birthday")), rs.getString("Mail"), rs.getInt("Phone_Number"));

                    underageCustomers.add(underCustomer);

                    System.out.printf("%-10s %10s %15s %15s %15s %-20s %20d \n",
                            rs.getString("Username"),
                            rs.getString("Name"),
                            rs.getString("Surname"),
                            rs.getString("Password"),
                            rs.getString("Birthday"),
                            rs.getString("Mail"),
                            rs.getInt("Phone_Number"));
                }

            }
            System.out.println("- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ");
            System.out.println(underageCustomers.toString());
            System.out.println("");

        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }

        return underageCustomers.toString();
    }

    public static ArrayList<Customer> underAgeCustomers() {
        String sql = "SELECT * FROM customer ORDER BY customer.Birthday desc";  //añadir: limit X
        ArrayList<Customer> underageCustomers = new ArrayList<>();

        try (Connection conn = connect2();
                Statement stmt = conn.createStatement();
                ResultSet rs = stmt.executeQuery(sql)) {

            LocalDate fechaActual = LocalDate.now();
            System.out.println("Fecha actual: " + fechaActual);

            LocalDate fechaLimite = fechaActual.minusYears(18);
            System.out.println("Para ser mayor de edad: " + fechaLimite);

            System.out.println("\nUnderage customers: ");
            System.out.println("==========================================================================================================================");
            System.out.printf("%-10s %10s %15s %15s %15s %-20s %20s \n", "Username", "Name", "Surname", "Password", "Birthday", "Mail", "Phone Number");
            System.out.println("--------------------------------------------------------------------------------------------------------------------------");

            while (rs.next()) {

                LocalDate fechaCustomer = LocalDate.parse(rs.getString("Birthday"));

                if (fechaCustomer.isAfter(fechaLimite)) {
                    Customer underCustomer = new Customer(
                            rs.getString("Username"), rs.getString("Name"), rs.getString("Surname"), rs.getString("Password"),
                            LocalDate.parse(rs.getString("Birthday")), rs.getString("Mail"), rs.getInt("Phone_Number"));

                    underageCustomers.add(underCustomer);

                    System.out.printf("%-10s %10s %15s %15s %15s %-20s %20d \n",
                            rs.getString("Username"),
                            rs.getString("Name"),
                            rs.getString("Surname"),
                            rs.getString("Password"),
                            rs.getString("Birthday"),
                            rs.getString("Mail"),
                            rs.getInt("Phone_Number"));
                }
            }
            System.out.println("- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ");
            System.out.println(underageCustomers.toString());
            System.out.println("");

        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }

        return underageCustomers;
    }

    public static ArrayList<Purchase> purchasesOfDesiredCustomer(String desiredCustomer) {

        String sql = "SELECT * FROM purchase WHERE cust_Username = ?";  //añadir: limit X
        ArrayList<Purchase> comprasClienteDeseado = new ArrayList<>();

        ResultSet rs = null;

        try (Connection conn = connect2();
                PreparedStatement pstmt = conn.prepareStatement(sql)) {

            pstmt.setString(1, desiredCustomer);
            rs = pstmt.executeQuery();

            System.out.println("\nPurchases of the desired Customer: ");
            System.out.println("====================================================================================================================");
            System.out.printf("%-10s %10s %20s %25s %20s %25s\n", "Purchase ID", "Username", "Product", "Date", "Amount", "Total");
            System.out.println("--------------------------------------------------------------------------------------------------------------------");

            while (rs.next()) {
                //Purchase cadaCompra = new Purchase(rs.getString("cust_Username"), rs.getString("prod_ID"), rs.getDate("Date").toLocalDate(), rs.getInt("Amount"), rs.getDouble("Final_Cost"));
                Purchase cadaCompra = new Purchase(rs.getString("cust_Username"), rs.getString("prod_ID"),
                        rs.getDate("Date").toLocalDate(), rs.getInt("Amount"), rs.getDouble("Final_Cost"));

                comprasClienteDeseado.add(cadaCompra);

                System.out.printf("%-10d %10s %20s %25s %20d %25.2f \n",
                        rs.getInt("id_Purchase"),
                        rs.getString("cust_Username"),
                        rs.getString("prod_ID"),
                        rs.getDate("Date").toLocalDate(),
                        rs.getInt("Amount"),
                        rs.getDouble("Final_Cost"));
            }
            System.out.println("- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ");
            System.out.println(comprasClienteDeseado.toString());

            rs.close();

        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }

        return comprasClienteDeseado;
    }

    public static ArrayList<SaleTrack> /*void*/ mostSoldProducts() {
        String sql = "SELECT Distinct(prod_ID) as Catalogo, "
                + "count(prod_ID) as Recuento, "
                + "SUM(Amount) as Vendidos,  "
                + "SUM(purchase.amount * product.Price) as Total FROM purchase INNER JOIN product "
                + "ON (purchase.prod_ID = product.id_Product) group by prod_ID order by Total desc"; //añadir limit X

        ArrayList<SaleTrack> bestSelledProducts = new ArrayList<>();

        try (Connection conn = connect2();
                Statement stmt = conn.createStatement();
                ResultSet rs = stmt.executeQuery(sql);) {
            System.out.printf("%-10s %30s %30s %30s \n", "Product Name", "Appearance on purchases", "Sold units", "Earned with the product");
            System.out.println("----------------------------------------------------------------------------------------------------------");

            while (rs.next()) {

                SaleTrack prodHistorial = new SaleTrack(rs.getString("Catalogo"), rs.getInt("Recuento"), rs.getInt("Vendidos"), rs.getDouble("Total"));

                bestSelledProducts.add(prodHistorial);

                //compradosProd.add(rs.getString("Catalogo"));    
                System.out.printf("%12s %30d %30d %30.2f \n",
                        rs.getString("Catalogo"),
                        rs.getInt("Recuento"),
                        rs.getInt("Vendidos"),
                        rs.getDouble("Total")
                );
            }
            System.out.println(bestSelledProducts.toString());

        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }

        return bestSelledProducts;
    }
    
    //-------------------------//
    //seguir con los métodos para guardar contenido en ficheros
    
    public static String /*static ArrayList<String>*/ registrosArrayList() {
        ArrayList<String> regTerminoak = new ArrayList<>();
        String taula = "Terminoak";
        String sql = "SELECT * FROM " + taula;

        String guardarFile = "../StreamekinLanean/HiztegiaFromDB.txt";

        try (Connection conn = connect2();
                Statement stmt = conn.createStatement();
                ResultSet rs = stmt.executeQuery(sql);
                PrintWriter out = new PrintWriter(guardarFile)) {

            String cadaRegistro = "";
            while (rs.next()) {
                cadaRegistro = "id: " + rs.getInt("id") + ", Euskaraz: " + rs.getString("euskaraz") + ", Gazteleraz: " + rs.getString("gazteleraz");
                regTerminoak.add(cadaRegistro);
                out.println(cadaRegistro);
            }
        } catch (Exception ex) {
            System.out.println(ex.getMessage());
        }

        return regTerminoak.toString();

    }
    
    
    public static ArrayList<Customer> getAllCustomers() {
        
        ArrayList<Customer> allRegisteredCustomers = new ArrayList<>();
        String sql = "SELECT * FROM customer";
        
        try (Connection conn = connect2();
                Statement stmt = conn.createStatement();
                ResultSet rs = stmt.executeQuery(sql);
                ){
            while (rs.next()) {
                Customer everyCustomer = new Customer(
                            rs.getString("Username"), rs.getString("Name"), rs.getString("Surname"), rs.getString("Password"),
                            LocalDate.parse(rs.getString("Birthday")), rs.getString("Mail"), rs.getInt("Phone_Number"));
                
                allRegisteredCustomers.add(everyCustomer);
            }
            
        } catch (Exception ex) {
            System.out.println(ex.getMessage());
        }

        return allRegisteredCustomers;

    }
    
    
    public static void saveCustomersToFile(String contentAllCustomers){
        BufferedReader inputStream = null;
        PrintWriter outputStream = null;
        
        try {
            outputStream = new PrintWriter(new FileWriter("../pGarageDIY/CustomerHistory.txt"));
            outputStream.print(contentAllCustomers);
        } catch (IOException ex) {
            Logger.getLogger(Model.class.getName()).log(Level.SEVERE, null, ex);
        } finally {
            if (outputStream != null) {
                outputStream.close();
            }
        }
    }    
    
    
    
    public static ArrayList<Product> getAllProducts() {
        
        ArrayList<Product> allProductCatalog = new ArrayList<>();
        String sql = "SELECT * FROM product";
        
        try (Connection conn = connect2();
                Statement stmt = conn.createStatement();
                ResultSet rs = stmt.executeQuery(sql);
                ){
            while (rs.next()) {
                Product everyProduct = new Product(
                            rs.getString("id_Product"), rs.getString("Name"), rs.getDouble("Price"), rs.getString("Description"));
                
                allProductCatalog.add(everyProduct);
            }
            
        } catch (Exception ex) {
            System.out.println(ex.getMessage());
        }

        return allProductCatalog;
    }
    
    
    
    public static void saveCatalogToFile(String contentAllProducts){
        BufferedReader inputStream = null;
        PrintWriter outputStream = null;
        
        try {
            outputStream = new PrintWriter(new FileWriter("../pGarageDIY/ProductCatalog.txt"));
            outputStream.print(contentAllProducts);
        } catch (IOException ex) {
            Logger.getLogger(Model.class.getName()).log(Level.SEVERE, null, ex);
        } finally {
            if (outputStream != null) {
                outputStream.close();
            }
        }
    } 
    
    
    public static ArrayList<Worker> getAllWorkers() {
        
        ArrayList<Worker> allRegisteredWorkers = new ArrayList<>();
        String sql = "SELECT * FROM worker";
        
        try (Connection conn = connect2();
                Statement stmt = conn.createStatement();
                ResultSet rs = stmt.executeQuery(sql);
                ){

            while (rs.next()) {
                Worker everyWorker = new Worker(
                            rs.getInt("Worker_ID"), rs.getString("Name"), rs.getString("Surname"), rs.getString("Password"), rs.getString("Occupation"), rs.getString("Mail"),
                            rs.getInt("Phone_Number"), rs.getDouble("Salary"), rs.getTime("Start_time").toLocalTime(), rs.getTime("Finish_time").toLocalTime());
                
                allRegisteredWorkers.add(everyWorker);
            }
        } catch (Exception ex) {
            System.out.println(ex.getMessage());
        }

        return allRegisteredWorkers;

    }
    
    
    public static void saveStaffToFile(String contentAllWorkers){
        BufferedReader inputStream = null;
        PrintWriter outputStream = null;
        
        try {
            outputStream = new PrintWriter(new FileWriter("../pGarageDIY/GarageStaff.txt"));
            outputStream.print(contentAllWorkers);
        } catch (IOException ex) {
            Logger.getLogger(Model.class.getName()).log(Level.SEVERE, null, ex);
        } finally {
            if (outputStream != null) {
                outputStream.close();
            }
        }
    }
    
    
    public static ArrayList<Cabin> getAllCabins() {
        
        ArrayList<Cabin> allCabins = new ArrayList<>();
        String sql = "SELECT * FROM cabin";
        
        try (Connection conn = connect2();
                Statement stmt = conn.createStatement();
                ResultSet rs = stmt.executeQuery(sql);
                ){

            while (rs.next()) {
                
                Cabin everyCabin = new Cabin(WorkArea.valueOf(rs.getString("Cabin_ID")), Model.getRandomWorker(Model.getAllWorkers()), rs.getDouble("Size"), rs.getString("Color"), rs.getDouble("Price_Hour"), rs.getString("Description"));
                
                allCabins.add(everyCabin);
                
            }
        } catch (Exception ex) {
            System.out.println(ex.getMessage());
        }

        return allCabins;
    }
    
    
    public static void saveCabinsToFile(String contentAllCabins){
        BufferedReader inputStream = null;
        PrintWriter outputStream = null;
        
        try {
            outputStream = new PrintWriter(new FileWriter("../pGarageDIY/CabinStructure.txt"));
            outputStream.print(contentAllCabins);
        } catch (IOException ex) {
            Logger.getLogger(Model.class.getName()).log(Level.SEVERE, null, ex);
        } finally {
            if (outputStream != null) {
                outputStream.close();
            }
        }
    }
    
    
    public static ArrayList<String> rushHourCabin() {
        /*String sql = "SELECT Distinct(id_cabin) as Cabin, "
                + "SCOUNT(*) as cantMorning FROM reservation where Ending_Hour <= '13:00:00' group by id_cabin"; //añadir limit X*/
        
        /*String sql = "SELECT Distinct(id_cabin) as Cabin, "
                + "COUNT(*) as cantMorning FROM reservation where Ending_Hour >= '15:00:00' group by id_cabin"; //añadir limit X*/
        /* DONE
        String sql = "select count(*) as Cabin,"
                + "count(case when Ending_Hour <= '13:00:00' then 1 else null end) as cantMorning "
                + "FROM reservation;";
        */
        String sql = "select DISTINCT(id_cabin) as Cabin,"
                + "count(case when Ending_Hour <= '13:00:00' then 1 else null end) as cantMorning,"
                + "count(case when Starting_Hour >= '15:00:00' then 1 else null end) as cantAfternoon "
                + "FROM reservation group by id_cabin;";

        ArrayList<String> morningReservations = new ArrayList<>();

        try (Connection conn = connect2();
                Statement stmt = conn.createStatement();
                ResultSet rs = stmt.executeQuery(sql);) {
            
            String rentMorning = "";
            while (rs.next()) {
                //"--------------------------------------------------" + rs.getString("Cabin") + "--------------------------------------------------"
                morningReservations.add("\n");
                rentMorning = "   |----------------------------------------------  " + rs.getString("Cabin") + "  -----------------------------------------------| " +  //3 spaces
                        "\n\t\t Morning: " + rs.getInt("cantMorning") + 
                        "\n\t\tAfternoon: " + rs.getInt("cantAfternoon") + "\n";
                
                morningReservations.add(rentMorning);
            }
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }

        return morningReservations;
    }
    
    
    /**
     * Method created to asign a random customer to a cabin which is just created. (the 
     * cabin needs at least one worker; so this method allows us to asign random worker.)
     * @param list
     * @return 
     */
    public static Worker getRandomWorker(ArrayList<Worker> listOfWorkers)
    {
        Random rand = new Random();
        return listOfWorkers.get(rand.nextInt(listOfWorkers.size()));
    }
    
    
    /**
     * Option 1.1 - Select the best 2 customer (in terms of most money paid in reservations)
     * Option 1.2 - Select the 3 best reservations (depending on the generated money)
     * Option 2 - Select the 3 biggest Total Prices of the reservation's table
     */
    public static ArrayList<String> biggestTotalPricesReservations() {  
        
        ArrayList<String> bestTwoCustomers = new ArrayList<>();    //option 1.1
        String sql = "SELECT cust_Username, SUM(Amount_Hours) as ReservedHours, SUM(Total_Price) as eachPaid "
                + "FROM reservation group by cust_Username order by eachPaid desc limit 2;";
        
        try (Connection conn = connect2();
                Statement stmt = conn.createStatement();
                ResultSet rs = stmt.executeQuery(sql);) {
            
            String bestCust = "";
            String customerUsername = "";
            while (rs.next()) {
                //"--------------------------------------------------" + rs.getString("Cabin") + "--------------------------------------------------"
                bestTwoCustomers.add("\n");
                bestCust = 
                        //"\n\t\tUsername: " + rs.getString("cust_Username") + 
                        "\t\tUsername: " + rs.getString("cust_Username") + 
                        "\n\tBooking time: " + rs.getInt("ReservedHours") + " hours " +                          
                        "       Total paid: " + rs.getDouble("eachPaid") + " €" + 
                        "\n\n--------------------------------------------------xx---------------------------------------------------" + "\n\n";
                customerUsername = rs.getString("cust_Username");
                /*
                bestCust = 
                        "\n\t\t Username: " + rs.getString("cust_Username") + 
                        "\n\t\t Booking time: " + rs.getInt("ReservedHours") + " hours " +  
                        "\n\t\tTotal paid: " + rs.getDouble("eachPaid") + 
                        "\n--------------------------------------------------xx---------------------------------------------------" + "\n";
                */
                bestTwoCustomers.add(bestCust);         //add into the arraylist the basic data of those customers
                bestTwoCustomers.add(customerUsername); //add also, the 2 usernames of the best 2 customers
                
                System.out.println(bestCust);
                System.out.println(customerUsername);
            }
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }
        return bestTwoCustomers;
    }
    
    
    public static ArrayList<BestCustomer> bestCustomers() {  
        
        ArrayList<BestCustomer> premiumCustomers = new ArrayList<>();    //option 1.1
        
        String sql = "SELECT cust_Username as Customer, SUM(Amount_Hours) as 'Booking Time', "
                + "COUNT(id_Reservation) as 'Num. Reservations', SUM(Total_Price) as Total, "
                + "MAX(Total_Price) as 'Top Reservation' "
                + "FROM reservation group by cust_Username order by Total desc limit 2;";
        
        /*
        String sql2 = "SELECT cust_Username as Customer,  SUM(Amount_Hours) as 'Booking Time', SUM(Total_Price) as 'Total Paid', MAX(Total_Price) as 'Top Reservation'"
                + "FROM reservation group by cust_Username order by eachPaid desc limit 2;";
        */
        
        try (Connection conn = connect2();
                Statement stmt = conn.createStatement();
                ResultSet rs = stmt.executeQuery(sql);) {
            
            while (rs.next()) {
                
                BestCustomer premCust = new BestCustomer(rs.getString("Customer"), rs.getInt("Booking Time"), rs.getInt("Num. Reservations"),
                                                                rs.getDouble("Total"), rs.getDouble("Top Reservation"));
                
                premiumCustomers.add(premCust);
                System.out.println(premCust);
            }
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }
        return premiumCustomers;
    }
    
    /**
     * Returning ArrayList<String> Method
     * 
     * This method returns an ArrayList made of Strings with the desired data. Returning a String ArrayList 
     * allows the user to change the GUI's textArea's content easier than using an ArrayList of other certain 
     * class. 
     * 
     * Later, we'll transform this method into one that returns an ArrayList of the class/object we are 
     * looking for (in this case, an object from the Reservation class).
     * 
     * @return 
     */
    public static ArrayList<String> oldestThreeCustomersBookingString() {
        
        ArrayList<String> theNewests = new ArrayList<>();
                
        String sql = "SELECT \n" +
                "reservation.id_Reservation as Reservation_Code, \n" +
                "MAX(reservation.Date) as Last_Reservation, \n" +
                "customer.Username, customer.Name, customer.Surname, \n" +
                "DATEDIFF(now(), MAX(reservation.Date)) as Days_Passed \n" +
                "FROM reservation, customer\n" +
                "WHERE reservation.cust_Username = customer.Username and \n" +
                "reservation.Date < cast((now()) as date) \n" +
                "GROUP BY cust_Username ORDER by Days_Passed desc limit 3;";
        
        try (Connection conn = connect2();
                Statement stmt = conn.createStatement();
                ResultSet rs = stmt.executeQuery(sql);) {
            
            String leastFrequentCustomer = "";
            String newestReservation = "";
            
            while (rs.next()) {
                
            }
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }
        
        return theNewests;
    }
    
    /**
     * Returning ArrayList<LeastFrequentCustomer> Method
     * 
     * This method returns an ArrayList made of objects belonging to the Customer's 
     * subclass called LeastFrequentCustomer. 
     * 
     * This subclass will be quite similar to his father class. In adittion to the 
     * father class' main attributes, the LeastFrequentCustome class will have some 
     * other ones like:
     * 
     *  -> Other attributes: codeReservation, lastReservation, daysPassed
     * 
     * @return 
     */
    public static ArrayList<LeastFrequentCustomer> oldestThreeCustomersBooking() {
        
        //option 1 -> reservation_ID, username, date of last reservation of him/her
        //option 2 -> reservation.* (full data of the last reservation of the 3 customers)
        //option 3 -> custoemr.* (full data of the least 3 frequent customers)
        //option 4 -> username, name, surname, amount of days since the last reservation
        
        ArrayList<LeastFrequentCustomer> theNewests = new ArrayList<>();
                        
        String sql = "SELECT \n" +
"		reservation.id_Reservation as Reservation_Code, \n" +
"		MAX(reservation.Date) as Last_Reservation, \n" +
"		customer.Username as UsernameCust, customer.Name as NameCust, customer.Surname as SurnameCust, \n" +
"               DATEDIFF(now(), MAX(reservation.Date)) as Days_Passed \n" +
"		FROM reservation, customer\n" +
"		WHERE reservation.cust_Username = customer.Username and \n" +
"		reservation.Date < cast((now()) as date) \n" +
"		GROUP BY cust_Username ORDER by Days_Passed desc limit 3;";
        
        try (Connection conn = connect2();
                Statement stmt = conn.createStatement();
                ResultSet rs = stmt.executeQuery(sql);) {
            
            while (rs.next()) {
                
                LeastFrequentCustomer infrequentlyCustomer = new LeastFrequentCustomer(
                        rs.getInt("Reservation_Code"), LocalDate.parse(rs.getString("Last_Reservation")),
                        rs.getString("UsernameCust"), rs.getString("NameCust"), rs.getString("SurnameCust"),
                        rs.getInt("Days_Passed")
                        );
                
                theNewests.add(infrequentlyCustomer);
                
            }
            System.out.println(theNewests.toString());
            
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }
        
        return theNewests;
    }
    
    
    public static void clearGraphicFrame() {
        View.ButtonGroupGraphReports.clearSelection();
        
    }
    
    public static void drawBest2original() {
        
        String explanationStr = "NOTE: \n"
                + "This report gets the data of the 2 customers who have spent the most money (Total Paid) in reservations! ";
             
        Graphics g0 = View.JFrameGraphicalReports.getGraphics();
        g0.drawLine(100, 775, 100, View.JFrameGraphicalReports.getHeight() / 2);
        g0.drawLine(100, 775, 775, 775);    //g0.drawLine(100, 825, 825, 825);

        g0.drawString("Num. Reservations", 150, View.JFrameGraphicalReports.getHeight() / 2);
        g0.drawString("Total Money Paid", 315, View.JFrameGraphicalReports.getHeight() / 2);
        g0.drawString("Booking time", 490, View.JFrameGraphicalReports.getHeight() / 2);    //g0.drawString("Booking time", 550, 500);
        g0.drawString("Top Reservation", 650, View.JFrameGraphicalReports.getHeight() / 2); //g0.drawString("Top Reservation", 700, 500);

        g0.drawString("First cust.: ", 310, 800);   //g0.drawString("First cust.: " + Model.biggestTotalPricesReservations().get(2), 125, 800);
        g0.setColor(Color.blue);
        g0.drawString(Model.bestCustomers().get(0).getUsernameCustomer(), 370, 800);
        g0.setColor(Color.black);

        g0.drawString("Second cust.: ", 460, 800);  //g0.drawString("Second cust.: ", 300, 800);
        g0.setColor(Color.red);
        g0.drawString(Model.bestCustomers().get(1).getUsernameCustomer(), 550, 800);    //g0.drawString(Model.bestCustomers().get(1).getUsernameCustomer(), 210, 820);    

        g0.setColor(Color.black);
        g0.drawString(explanationStr, 130, 845);
        
        //draw an square to show the report's explanation inside
        g0.drawRect(75, 830, 725, 20);

        //calculate values for the graphic
        //number of reservations
        int c1NumReservations = Model.bestCustomers().get(0).getNumReservations();
        int c2NumReservations = Model.bestCustomers().get(1).getNumReservations();

        //total paid
        int c1totalPaid = (int) Model.bestCustomers().get(0).getTotalPaid();
        int c2totalPaid = (int) Model.bestCustomers().get(1).getTotalPaid();

        //booking time
        int c1BookingTime = Model.bestCustomers().get(0).getBookingTime();
        int c2BookingTime = Model.bestCustomers().get(1).getBookingTime();

        //top reservation
        int c1topReservation = (int) Model.bestCustomers().get(0).getTopReservationPrice();
        int c2topReservation = (int) Model.bestCustomers().get(1).getTopReservationPrice();

        System.out.println("first :" + c1NumReservations);
        System.out.println("second :" + c2NumReservations);

        //-------------------------------------
        //bars of NUMBER OF RESERVATIONS
        int firstTopLimitNumRes = 775 - (c1NumReservations * 10);
        int secondTopLimitNumRes = 775 - (c2NumReservations * 10);

        System.out.println(firstTopLimitNumRes);
        System.out.println(secondTopLimitNumRes);

        if (firstTopLimitNumRes < 500) {    //first customer
            g0.setColor(Color.blue);    
            g0.fillRect(180, 775 - 250, 20, 250);

        } else {
            g0.setColor(Color.blue);
            g0.fillRect(180, 775 - (c1NumReservations * 10), 20, c1NumReservations * 10);
            g0.drawLine(100, 775, 180, firstTopLimitNumRes);
        }

        if (secondTopLimitNumRes < 500) {   //second customer
            g0.setColor(Color.red);
            g0.fillRect(210, 775 - 250, 20, 250);
        } else {
            g0.setColor(Color.red);
            g0.fillRect(210, 775 - (c2NumReservations * 10), 20, c2NumReservations * 10);
        }

        //bars of TOTAL PAID
        g0.setColor(Color.blue);
        g0.fillRect(335, 775 - c1totalPaid, 20, c1totalPaid);  //(x, y, anchura, valor deseado del usuario)
        g0.drawLine(200, 775 - (c1NumReservations * 10), 335, 775 - c1totalPaid);
        //g0.drawLine(200, 775 - (c1NumReservations * 30), 335, 775 - c1totalPaid);

        g0.setColor(Color.red);
        g0.fillRect(365, 775 - c2totalPaid, 20, c2totalPaid);

        //bars of BOOKING TIME
        int firstTopLimitBookingTime = 775 - (c1BookingTime * 20);
        int secondTopLimitBookingTime = 775 - (c2BookingTime * 20);

        System.out.println(firstTopLimitBookingTime);
        System.out.println(secondTopLimitBookingTime);

        if (firstTopLimitBookingTime < 500) {   //first customer
            g0.setColor(Color.blue);
            g0.fillRect(510, 775 - 250, 20, 250);

        } else {
            g0.setColor(Color.blue);
            g0.fillRect(510, 775 - (c1BookingTime * 20), 20, c1BookingTime * 20);
            g0.drawLine(355, 775 - c1totalPaid, 510, 775 - (c1BookingTime * 20));
        }

        if (secondTopLimitBookingTime < 500) {  //second customer
            g0.setColor(Color.red);
            g0.fillRect(540, 775 - 250, 20, 250);
        } else {
            g0.setColor(Color.red);
            g0.fillRect(540, 775 - (c2BookingTime * 20), 20, c2BookingTime * 20);
        }

        //bars of TOP RESERVATION
        int firstTopLimitBestReservation = 775 - c1topReservation;
        int secondTopLimitBestReservation = 775 - c2topReservation;

        System.out.println(firstTopLimitBestReservation);
        System.out.println(secondTopLimitBestReservation);

        if (firstTopLimitBookingTime > 500) {   //first customer
            g0.setColor(Color.blue);
            g0.fillRect(680, 775 - c1topReservation, 20, c1topReservation);
            g0.drawLine(530, 775 - (c1BookingTime * 20), 680, 775 - c1topReservation);

        } else {
            g0.setColor(Color.blue);
            g0.fillRect(680, 775 - 250, 20, 250);

        }

        if (secondTopLimitBestReservation > 500) {
            g0.setColor(Color.red);    //second customer
            g0.fillRect(710, 775 - c2topReservation, 20, c2topReservation);

        } else {
            g0.setColor(Color.red);    //second customer
            g0.fillRect(710, 775 - 250, 20, 250);
        }


        //-------------------------------------

        /*
        //bars of NUMBER OF RESERVATIONS
        if (c1NumReservations > c2NumReservations) {

            g0.setColor(Color.blue);    //first customer
            g0.fillRect(180, 775 - (c1NumReservations * 30), 20, c1NumReservations * 30);

            g0.setColor(Color.red);    //second customer
            g0.fillRect(210, 775 - (c2NumReservations * 30), 20, c2NumReservations * 30);


        } else if (c1NumReservations < c2NumReservations) {
            g0.setColor(Color.blue);    //first customer
            g0.fillRect(180, 775 - (c1NumReservations * 30), 20, c1NumReservations * 30);
            g0.drawLine(100, 775, 180, 775 - (c1NumReservations * 30));

            g0.setColor(Color.red);    //second customer
            g0.fillRect(210, 775 - (c2NumReservations * 30), 20, c2NumReservations * 30);
        }

        //bars of TOTAL PAID
        g0.setColor(Color.blue);
        g0.fillRect(335, 775 - c1totalPaid, 20, c1totalPaid);  //(x, y, anchura, valor deseado del usuario)
        g0.drawLine(200, 775 - (c1NumReservations * 30), 335, 775 - c1totalPaid);

        //g0.fillRect(175, 775-90, 20, 90);  //(x, y, anchura, precio)

        g0.setColor(Color.red);
        g0.fillRect(365, 775 - c2totalPaid, 20, c2totalPaid);


        //bars of BOOKING TIME
        if (c1BookingTime > c2BookingTime) {
            g0.setColor(Color.blue);
            g0.fillRect(510, 775 - (c1BookingTime * 30), 20, c1BookingTime * 30);

            g0.setColor(Color.red);
            g0.fillRect(540, 775 - (c2BookingTime * 30), 20, c2BookingTime * 30);

        } else if (c1BookingTime < c2BookingTime) {
            g0.setColor(Color.blue);
            g0.fillRect(510, 775 - (c1BookingTime * 30), 20, c1BookingTime * 30);
            g0.drawLine(355, 775 - c1totalPaid, 510, 775 - (c1BookingTime * 30));

            g0.setColor(Color.red);
            g0.fillRect(540, 775 - (c2BookingTime * 30), 20, c2BookingTime * 30);
        }


        //bars of TOP RESERVATION
        if (c1topReservation > c2topReservation) {

            g0.setColor(Color.blue);    //first customer
            g0.fillRect(680, 775 - c1topReservation, 20, c1topReservation);
            g0.drawLine(530, 775 - (c1BookingTime * 30), 680, 775 - c1topReservation);

            g0.setColor(Color.red);    //second customer
            g0.fillRect(710, 775 - c2topReservation, 20, c2topReservation);


        } else if (c1topReservation < c2topReservation) {
            g0.setColor(Color.blue);    //first customer
            g0.fillRect(680, 775 - c1topReservation, 20, c1topReservation);
            //g0.drawLine(530, 775 - (c1BookingTime * 30), 680, 775 - c1topReservation);

            g0.setColor(Color.red);    //second customer
            g0.fillRect(710, 775 - c2topReservation, 20, c2topReservation);
        }
        */

        //System.out.println(c1totalPaid);
        System.out.println("First graphic report: Best two customers (reservations) ");

            
            
            
    }
    
    
    public static ArrayList<Customer> adultCustomers() {
        String sql = "SELECT * FROM customer ORDER BY customer.Birthday desc";  //añadir: limit X
        ArrayList<Customer> adultCustomers = new ArrayList<>();

        try (Connection conn = connect2();
                Statement stmt = conn.createStatement();
                ResultSet rs = stmt.executeQuery(sql)) {

            LocalDate fechaActual = LocalDate.now();
            System.out.println("Fecha actual: " + fechaActual);

            LocalDate fechaLimite = fechaActual.minusYears(18);
            System.out.println("Para ser mayor de edad: " + fechaLimite);

            System.out.println("\nUnderage customers: ");
            System.out.println("==========================================================================================================================");
            System.out.printf("%-10s %10s %15s %15s %15s %-20s %20s \n", "Username", "Name", "Surname", "Password", "Birthday", "Mail", "Phone Number");
            System.out.println("--------------------------------------------------------------------------------------------------------------------------");

            while (rs.next()) {

                LocalDate fechaCustomer = LocalDate.parse(rs.getString("Birthday"));

                if (!fechaCustomer.isAfter(fechaLimite)) {
                    Customer underCustomer = new Customer(
                            rs.getString("Username"), rs.getString("Name"), rs.getString("Surname"), rs.getString("Password"),
                            LocalDate.parse(rs.getString("Birthday")), rs.getString("Mail"), rs.getInt("Phone_Number"));

                    adultCustomers.add(underCustomer);

                    System.out.printf("%-10s %10s %15s %15s %15s %-20s %20d \n",
                            rs.getString("Username"),
                            rs.getString("Name"),
                            rs.getString("Surname"),
                            rs.getString("Password"),
                            rs.getString("Birthday"),
                            rs.getString("Mail"),
                            rs.getInt("Phone_Number"));
                }
            }
            System.out.println("- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ");
            System.out.println(adultCustomers.toString());
            System.out.println("");

        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }

        return adultCustomers;
    }
    
    
    public static void drawSortByAge() {
        
        View.JCheckBoxViewGraphicOnTable.setEnabled(false);
        
        Graphics g1 = View.JFrameGraphicalReports.getGraphics();
        //g1.drawLine(300, 700, 100, 700);

        int amountUnderage = Model.underAgeCustomers().size();
        int amountAdults = Model.adultCustomers().size();

        int totalCustomers = amountUnderage + amountAdults;

        System.out.println(amountUnderage);
        System.out.println(amountAdults);
        System.out.println("Total customers: " + totalCustomers);
        //System.out.println("The biggest group is: " + theBiggestGroup);

        System.out.println("----");            


        int portionsUnderage = (360 * amountUnderage) / totalCustomers;  //int prueba1 = 360 * (amountUnderage / totalCustomers);
        System.out.println("afwf" + portionsUnderage);

        int portionsAdults = (360 * amountAdults) / totalCustomers;  //int prueba1 = 360 * (amountUnderage / totalCustomers);
        System.out.println("afwf" + portionsAdults);

        //g1.fillArc(350, 700, 100, 100, 0, 360 - (360 * (amountUnderage / totalCustomers)));

        //g1.setColor(Color.orange);  g1.fillArc(350, 500, 100, 100, 90, portionsUnderage);   //g1.fillArc(350, 500, 150, 100, 90, portionsUnderage);
        g1.setColor(Color.orange);  g1.fillArc(100, 500, 300, 300, 90, portionsUnderage);   //g1.fillArc(350, 500, 150, 100, 90, portionsUnderage);
        
        //show amount of UNDERAGE customers
        g1.setColor(Color.black); g1.drawString("➜ Number of ", 500, 550);
        g1.setColor(Color.orange); g1.drawString("underage ", 580, 550);
        g1.setColor(Color.black); g1.drawString("customers: " + amountUnderage, 640, 550);
        
        //show amount of ADULTS customers
        g1.setColor(Color.black); g1.drawString("➜ Number of ", 500, 570);
        g1.setColor(Color.blue); g1.drawString("adult ", 580, 570);
        g1.setColor(Color.black); g1.drawString("customers: " + amountAdults, 615, 570);
        
        View.JTextAreaGraphics.setText("Underage: " + amountUnderage + "\nAdults: " + amountAdults);

        int startAngleAdults = 360 - (360 - (90 + portionsUnderage));
        int angleAdults = 90 + (360 - (90 + portionsUnderage));
        g1.setColor(Color.blue);
        //g1.fillArc(350, 500, 100, 100, startAngleAdults, angleAdults);    //g1.fillArc(350, 500, 150, 100, 360 - (360 - 306), 90 + (360 - 306));
        g1.fillArc(100, 500, 300, 300, startAngleAdults, angleAdults);    //g1.fillArc(350, 500, 150, 100, 360 - (360 - 306), 90 + (360 - 306));
        
        g1.setColor(Color.BLACK);
        g1.drawLine(75, 480, 825, 480);
        g1.drawLine(75, 480, 75, 850);
        g1.drawLine(75, 850, 825, 850);
        g1.drawLine(825, 850, 825, 480);
        
    }
    
    
    public static ArrayList<MonthOccupation> reservationsOfEachMonth() {
        
        String sql = "select MONTHNAME(Date) as Month, count(Date) as Occupation, sum(Total_Price) as 'Earned per month' from reservation GROUP BY Month ORDER BY Month(Date) asc;";
        
        //String sql2 = "select MONTHNAME(STR_TO_DATE(Month(Date),'%m')) as Month, count(Date) as 'Occupation', sum(Total_Price) as 'Earned per month' from reservation group by Month(Date)";
        //String sql3 = "select MONTHNAME(STR_TO_DATE(Month(Date),'%m')) as Month, count(Date) as Amount from reservation group by Month(Date)";        
        //String sql4 = "select MONTHNAME(STR_TO_DATE(Month(Date),'%m')), count(Date) from reservation where cust_Username = 'user22' group by Month(Date)";
        
        ArrayList<MonthOccupation> reservationsOfCertainMonth = new ArrayList<>();
        
        try (Connection conn = connect2();
                Statement stmt = conn.createStatement();
                ResultSet rs = stmt.executeQuery(sql)) {

            while (rs.next()) {
                
                MonthOccupation dataMonth = new MonthOccupation(
                        rs.getString("Month"),
                        rs.getInt("Occupation"),
                        rs.getDouble("Earned per month"));
                
                //System.out.println(dataMonth);
                
                reservationsOfCertainMonth.add(dataMonth);
                
            }
            
            System.out.println("- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ");
            //System.out.println(adultCustomers.toString());
            System.out.println("");
            //System.out.println(reservationsOfCertainMonth);
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }
        
        return reservationsOfCertainMonth;
    }
    
    
    public static void drawMonthlyOccupation() {
        
        Graphics g2 = View.JFrameGraphicalReports.getGraphics();
        
        ArrayList<MonthOccupation> twoOrLess = new ArrayList<>();
        ArrayList<MonthOccupation> moreTwoLessFive = new ArrayList<>();
        ArrayList<MonthOccupation> fiveOrMore = new ArrayList<>();
        
        //Model.reservationsOfEachMonth();
        for (int i = 0; i < Model.reservationsOfEachMonth().size(); ++i) {
            if (Model.reservationsOfEachMonth().get(i).getAmountOfReservationsMonth() <= 2) {
                System.out.println("Two or less: ");
                //System.out.println(Model.reservationsOfEachMonth().get(i));
                twoOrLess.add(Model.reservationsOfEachMonth().get(i));
                
            } else if ((Model.reservationsOfEachMonth().get(i).getAmountOfReservationsMonth() > 2) && 
                       (Model.reservationsOfEachMonth().get(i).getAmountOfReservationsMonth() < 5)) {
                
                System.out.println("More than 2 - Less than 5: ");
                System.out.println(Model.reservationsOfEachMonth().get(i));
                moreTwoLessFive.add(Model.reservationsOfEachMonth().get(i));
                
            } else if (Model.reservationsOfEachMonth().get(i).getAmountOfReservationsMonth() >= 5) {
                System.out.println("More than 5: ");
                System.out.println(Model.reservationsOfEachMonth().get(i));
                fiveOrMore.add(Model.reservationsOfEachMonth().get(i));
            }
        }
        
        //draw the Pyramid (using lines)
        //g2.drawPolygon(new int[] {100, 300, 500}, new int[] {750, 500, 750}, 3);
        
        //values of BOTTOM's polygon -> months with 2 reservation or less
        int[] xPointsBottom = {95, 150, 450, 505};
        int[] yPointsBottom = {865, 760, 760, 865};
        
        //values of MIDDLE's polygon -> months with more than 2 reservations, but less than 5
        int[] xPointsMiddle = {155, 205, 395, 445};
        int[] yPointsMiddle = {740, 635, 635, 740};
        
        //values of TOP's triangle -> months with more than 2 reservations, but less than 5
        int[] xPointsTop = {210, 295, 390};
        int[] yPointsTop = {615, 460, 615};
        
        
        System.out.println("Months classified by amount of reservations: ");
        System.out.println(twoOrLess);
        System.out.println(moreTwoLessFive);
        System.out.println(fiveOrMore);
        
        
        //3D effect (bottom with middle)
        g2.drawLine(150, 760, 180, 740);
        g2.drawLine(450, 760, 420, 740);
        //3D effect (middle with top)
        g2.drawLine(205, 635, 235, 615);
        g2.drawLine(395, 635, 365, 615);
        //extra line (filled bot's piece)
        
        
        
        if ((twoOrLess.size() > moreTwoLessFive.size()) && (twoOrLess.size() > fiveOrMore.size())) {
            g2.setColor(Color.BLACK);           g2.drawPolygon(xPointsTop, yPointsTop, 3);
            g2.setColor(Color.BLACK);           g2.drawPolygon(xPointsMiddle, yPointsMiddle, 4);
            g2.setColor(Color.lightGray);       g2.fillPolygon(xPointsBottom, yPointsBottom, 4);  
            //paint the filled piece's outline black
            g2.setColor(Color.BLACK);           g2.drawPolygon(xPointsBottom, yPointsBottom, 4); 
            
        } else if ((moreTwoLessFive.size() > twoOrLess.size()) && (moreTwoLessFive.size() > fiveOrMore.size())) {
            g2.setColor(Color.BLACK);           g2.drawPolygon(xPointsTop, yPointsTop, 3);
            g2.setColor(Color.LIGHT_GRAY);      g2.fillPolygon(xPointsMiddle, yPointsMiddle, 4);
            g2.setColor(Color.BLACK);           g2.drawPolygon(xPointsBottom, yPointsBottom, 4);
            //paint the filled piece's outline black
            g2.setColor(Color.BLACK);           g2.drawPolygon(xPointsMiddle, yPointsMiddle, 4); 
            
        } else if ((fiveOrMore.size() > twoOrLess.size()) && (fiveOrMore.size() > moreTwoLessFive.size())) {
            g2.setColor(Color.LIGHT_GRAY);      g2.fillPolygon(xPointsTop, yPointsTop, 3);
            g2.setColor(Color.BLACK);           g2.drawPolygon(xPointsMiddle, yPointsMiddle, 4);
            g2.setColor(Color.BLACK);           g2.drawPolygon(xPointsBottom, yPointsBottom, 4);
            //paint the filled piece's outline black
            g2.setColor(Color.BLACK);           g2.drawPolygon(xPointsTop, yPointsTop, 4); 
            
        } else {
            g2.setColor(Color.BLACK);           g2.drawPolygon(xPointsTop, yPointsTop, 3);
            g2.setColor(Color.BLACK);           g2.drawPolygon(xPointsMiddle, yPointsMiddle, 4);
            g2.setColor(Color.BLACK);           g2.drawPolygon(xPointsBottom, yPointsBottom, 4);
        }
        
        //create an arrayList for each group (saving on it the names of the months)
        ArrayList<String> topMonthsNames = new ArrayList<>();
        ArrayList<String> middleMonthsNames = new ArrayList<>();
        ArrayList<String> bottomMonthsNames = new ArrayList<>();
        
        //save the TOP group's month's names
        for (int i = 0; i < fiveOrMore.size(); ++i) {
            topMonthsNames.add(fiveOrMore.get(i).getMonth());
        }
        //save the MIDDLE group's month's names
        for (int i = 0; i < moreTwoLessFive.size(); ++i) {
            middleMonthsNames.add(moreTwoLessFive.get(i).getMonth());
        }
        //save the BOTTOM group's month's names
        for (int i = 0; i < twoOrLess.size(); ++i) {
            bottomMonthsNames.add(twoOrLess.get(i).getMonth());
        }
        
        //show reservation ranges
        //piece of TOP
        g2.setColor(Color.GRAY);
        g2.drawString("➜ res >= 5 ", 273, 610);
        g2.drawString("➜ 2 < res < 5 ", 269, 735);
        g2.drawString("➜ res <= 2 ", 271, 860);
        
        
        
        //draw lines to show the months of each group
        g2.drawLine(350, 530, 800, 530);    //line TOP piece/group
        g2.drawLine(435, 690, 800, 690);    //line TOP piece/group
        g2.drawLine(505, 830, 800, 830);    //line TOP piece/group
        
        
        //draw or show the month's name of each group (saved on String)
        String topMonthsStr = "";
        String middleMonthsStr = "";
        String bottomMonthsStr = "";
        
        //months TOP
        for (int i = 0; i < topMonthsNames.size(); ++i) {
            if (i == 0) {
                topMonthsStr = topMonthsNames.get(i);
            } else {
                topMonthsStr = topMonthsStr + ", " + topMonthsNames.get(i);
            }
        }
        
        //months MIDDLE
        for (int i = 0; i < middleMonthsNames.size(); ++i) {
            if (i == 0) {
                middleMonthsStr = middleMonthsNames.get(i);
            } else {
                middleMonthsStr = middleMonthsStr + ", " + middleMonthsNames.get(i);
            }
        }
        
        //months BOTTOM
        for (int i = 0; i < bottomMonthsNames.size(); ++i) {
            if (i == 0) {
                bottomMonthsStr = bottomMonthsNames.get(i);
            } else {
                bottomMonthsStr = bottomMonthsStr + ", " + bottomMonthsNames.get(i);
            }
        }
        
        //view the months' names on the frame
        g2.drawString(topMonthsStr, 550, 520);      //g2.drawString("Months: ", 500, 520);
        g2.drawString(middleMonthsStr, 550, 680);   //g2.drawString("Months: ", 500, 680);
        g2.drawString(bottomMonthsStr, 550, 820);   //g2.drawString("Months: ", 500, 820);   
        
        //draw the square which contains the "graphic representation"
        g2.drawLine(75, 440, 825, 440);
        g2.drawLine(75, 440, 75, 880);
        g2.drawLine(75, 880, 825, 880);
        g2.drawLine(825, 880, 825, 440);
        
    }
    
    
    public static void visitWebpage() {
        //url of the website we want to connect to
        String webUrl = "http://localhost/phpDAM1/loginAzalpenak/index2.php";
        try {
            java.awt.Desktop.getDesktop().browse(java.net.URI.create(webUrl));
        }
        catch (java.io.IOException e) {
            System.out.println(e.getMessage());
        }
    }
    
}


/*
SELECT SUM(productos.precio * stock.cantidad) FROM productos
INNER JOIN stock
ON (productos.id_producto = stock.id_producto)


SELECT SUM(purchase.amount * product.Price) FROM purchase
INNER JOIN product
ON (purchase.prod_ID = product.id_Product)
*/


