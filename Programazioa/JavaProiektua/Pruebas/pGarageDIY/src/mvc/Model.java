/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mvc;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Scanner;
import myClasses.Purchase;

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
        String sql = "SELECT * FROM customer ORDER BY customer.Birthday desc";  //añadir: limit X
        
        try (Connection conn = connect();
             Statement stmt  = conn.createStatement();
             ResultSet rs    = stmt.executeQuery(sql)){
            
            
            System.out.println("Clasified by Customer's birthday/age: ");
            System.out.println("==========================================================================================================================");
            System.out.printf("%-10s %20s %25s %20s %25s %20s %20s \n", "Username", "Name", "Surname", "Password", "Birthday", "Mail", "Phone Number");
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
    
    
    public void underAgeCustomers() {
        
    }
    
    
    public String purchasesOfDesiredCustomer(String desiredCustomer) {
        
        String sql = "SELECT * FROM purchase WHERE cust_Username = ?";  //añadir: limit X
        ArrayList<Purchase> comprasClienteDeseado = new ArrayList<>();
        
        //PreparedStatement pstmt = null;
        ResultSet rs = null;
        
        try (Connection conn = connect();
               PreparedStatement pstmt = conn.prepareStatement(sql)
                ){
            
            pstmt.setString(1, desiredCustomer);
            rs = pstmt.executeQuery();
            
            System.out.println("Purchases of the desired Customer: ");
            System.out.println("====================================================================================================================");
            System.out.printf("%-10s %10s %20s %25s %20s %25s\n", "Purchase ID", "Username", "Product", "Date", "Amount", "Total");
            System.out.println("--------------------------------------------------------------------------------------------------------------------");
            
            
            while (rs.next()) {
                Purchase cadaCompra = new Purchase(rs.getString("cust_Username"), rs.getString("id_Product"), rs.getDate("Date").toLocalDate(), rs.getInt("Amount"), rs.getDouble("Final_Cost"));
                comprasClienteDeseado.add(cadaCompra);
                
                System.out.printf("%-10d %10s %20s %25s %20d %25.2f \n",
                        rs.getInt("id_Purchase"),
                        rs.getString("cust_Username"),
                        rs.getString("id_Product"),
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
        
        return comprasClienteDeseado.toString();
    }
    
    
    
    
    public void mostSoldProducts(String desiredProduct){
        String sql = "SELECT count(DISTINCT id_Product) FROM purchase";  //añadir: limit X
        ArrayList<Purchase> comprasClienteDeseado = new ArrayList<>();
        
        //PreparedStatement pstmt = null;
        //ResultSet rs = null;
        
        try (Connection conn = connect();
                Statement stmt  = conn.createStatement();
                ResultSet rs = stmt.executeQuery(sql)
                ){
            
            //pstmt.setString(1, desiredProduct);
            //rs = pstmt.executeQuery();
            
            System.out.println("Purchases of the desired Customer: ");
            System.out.println("====================================================================================================================");
            System.out.printf("%-10s %10s %20s %25s %20s %25s\n", "Purchase ID", "Username", "Product", "Date", "Amount", "Total");
            System.out.println("--------------------------------------------------------------------------------------------------------------------");
            
            
            while (rs.next()) {
                
                int num;
                num = rs.getInt(1);
                System.out.println(num);
            }
            System.out.println("- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ");
            
            rs.close();
            
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }
        
        
    } 
}
