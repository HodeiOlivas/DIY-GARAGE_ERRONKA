/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mvc;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

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
    
    
    public void customersAge() {
        String sql = "SELECT * FROM customer ORDER BY customer.Birthday desc";
        
        try (Connection conn = connect();
             Statement stmt  = conn.createStatement();
             ResultSet rs    = stmt.executeQuery(sql)){
            
            
            System.out.println("Clasified by Customer's birthday/age: ");
            System.out.println("==========================================================================================================================");
            System.out.printf("%-10s %20s %25s %10s %-25s %20s %20s \n", "Username", "Name", "Surname", "Password", "Birthday", "Mail", "Phone Number");
            System.out.println("--------------------------------------------------------------------------------------------------------------------------");
            while (rs.next()) {
                /*System.out.println("\t" + rs.getInt("idClientes") +  "\t" + 
                               rs.getString("Nombre") + "\t\t" +
                               rs.getString("Apellido") + "\t\t" + 
                               rs.getInt("Edad") + "\t" + rs.getString("Mail") + "\t\t" + rs.getInt("Telefono") + "\t");*/
                System.out.printf("%-10s %-10s \n", 
                        rs.getString("Username"),
                        rs.getString("Birthday"));
                /*
                System.out.printf("%-10s %20s %25.2f %10s\n", 
                        rs.getString("id_produktua"), 
                        rs.getString("Izena"), 
                        rs.getDouble("Prezioa"), 
                        rs.getString("Deskribapena"));*/
                
            }
            System.out.println("- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ");
            
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }
        
    }
    
    
    public void terminoakImprimatu(){
        String sql = "SELECT * FROM langilea";
        //String sql2 = "SELECT * FROM tbltabla1";
        int numRegistros = 0;   //guardará el número/cantidad de registros 
        
        
        try (Connection conn = connect();
             Statement stmt  = conn.createStatement();
             ResultSet rs    = stmt.executeQuery(sql)){
            
            // loop through the result set
            /*System.out.println("\n\t" + DB + " datubasearen datuak: ");
            System.out.println("\t================================");*/
            System.out.println("CUSTOMER HISTORY: ");
            System.out.println("==========================================================================================================================");
            System.out.printf("%-10s %20s %25s %10s %-25s %20s \n", "Cust. id", "Customer's Name", "Customer's Surname", "Age", "Mail", "Phone Number");
            System.out.println("--------------------------------------------------------------------------------------------------------------------------");
            while (rs.next()) {
                /*System.out.println("\t" + rs.getInt("idClientes") +  "\t" + 
                               rs.getString("Nombre") + "\t\t" +
                               rs.getString("Apellido") + "\t\t" + 
                               rs.getInt("Edad") + "\t" + rs.getString("Mail") + "\t\t" + rs.getInt("Telefono") + "\t");*/
                System.out.printf("%-10s %-10s \n", 
                        rs.getInt("langile_ID"),
                        rs.getString("langile_izena"));
                /*
                System.out.printf("%-10s %20s %25.2f %10s\n", 
                        rs.getString("id_produktua"), 
                        rs.getString("Izena"), 
                        rs.getDouble("Prezioa"), 
                        rs.getString("Deskribapena"));*/
                ++numRegistros;
            }
            System.out.println("- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ");
            System.out.println("\tGuztira: " + numRegistros + " elementu. \n");
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }
    }
    
    
}
