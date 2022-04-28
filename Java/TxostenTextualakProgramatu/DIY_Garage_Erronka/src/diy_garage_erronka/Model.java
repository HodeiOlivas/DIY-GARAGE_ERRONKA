/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package diy_garage_erronka;

import static java.lang.System.in;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Scanner;
import javax.swing.JOptionPane;
import java.sql.ResultSet;
import static jdk.nashorn.tools.ShellFunctions.input;

/**
 *
 * @author olivas.hodei
 */
public class Model {

    // private String driver = "com.mysql.jdbc.Driver";
    private String cadenaConeccion = "jdbc:mysql://127.0.0.1/db_diy_garage";
    private String usuario = "root";
    private String contraseña = "";
    public Connection con;

    Model() {
        try {
            //  Class.forName(driver);
            con = DriverManager.getConnection(cadenaConeccion, usuario, contraseña);
            JOptionPane.showMessageDialog(null, "Conectado con la DB");
        } catch (Exception e) {

            JOptionPane.showMessageDialog(null, "No se ha podido establecer una conexión con la DB" + e.getMessage());
        }

    }
     private static Connection connect2() {
        // SQLite connection string
        String url = "jdbc:mysql://localhost:3306/db_diy_garage";
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
/*
    public void CustomerPurchases() {

        String sql = "SELECT *  FROM purchases";
        int aukera = 0;
        Scanner in = new Scanner(System.in);
        try (Connection con = this.con;
                Statement stmt = con.createStatement();
                ResultSet rs = stmt.executeQuery(sql)) {
            System.out.print("Show the purchases of the customer (enter cust.id): ");
            aukera = in.nextInt();

            for (int i = 0; i < aukera || i > aukera; i++) {

            }

            System.out.println("");
            System.out.println("    ->This customer's purchases are:");
            System.out.println("");
            System.out.println("PURCHASE'S INVOICE:");
            System.out.println("===================================================================================");
            System.out.println(("Cust.ID") + "\t" + "\t" + ("Customer")
                    + "\t" + (" ProductID") + "\t"
                    + ("  Date") + "\t" + ("      Amount") + "\t" + (" Final Cost"));
            System.out.println("-----------------------------------------------------------------------------------");
            while (rs.next()) {
                System.out.println(rs.getInt("Id_Purchase") + "\t" + "\t"
                        + rs.getString("Id_customer") + "\t" + "\t" + "\t"
                        + rs.getInt("Id_product") + "\t"
                        + rs.getDate("Date") + "\t"
                        + rs.getInt("Amount") + "\t"
                        + rs.getInt("Final_cost"));
              
               
            }
             rs.close();
                stmt.close();
        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }
        System.out.println("- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -");
        System.out.println("Number of purchases:");
     
    
 */
      public void CustomerPurchases() throws SQLException {
         String sql = "SELECT * FROM purchases WHERE Id_customer = ?";
PreparedStatement pstmt = con.prepareStatement(sql);
pstmt.setString( 1, "Juan34");
ResultSet rs = pstmt.executeQuery();
          
           System.out.println(pstmt);
      }
      
      
      
      public static ArrayList<Purchases> purchasesOfDesiredCustomer(String desiredCustomer) {

        String sql = "SELECT * FROM purchases WHERE Id_customer = ?";  //añadir: limit X
        ArrayList<Purchases> comprasClienteDeseado = new ArrayList<>();
        Scanner input =new Scanner (System.in);
        ResultSet rs = null;
         
        Scanner in = new Scanner(System.in);
        try (Connection conn = connect2();
                PreparedStatement pstmt = conn.prepareStatement(sql)) {
           
            pstmt.setString(1, desiredCustomer);
            rs = pstmt.executeQuery();
            System.out.print("Show the purchases of the customer (enter cust. username): ");
            desiredCustomer = input.next();
            System.out.println("\nPurchases of the desired Customer: ");
            System.out.println("====================================================================================================================");
            System.out.printf("%-10s %10s %20s %25s %20s %25s\n", "Purchase ID", "Username", "Product", "Date", "Amount", "Total");
            System.out.println("--------------------------------------------------------------------------------------------------------------------");

            while (rs.next()) {
                //Purchase cadaCompra = new Purchase(rs.getString("cust_Username"), rs.getString("prod_ID"), rs.getDate("Date").toLocalDate(), rs.getInt("Amount"), rs.getDouble("Final_Cost"));
                Purchases cadaCompra = new Purchases(rs.getString("Id_customer"), rs.getString("Id_product"),
                        rs.getDate("Date").toLocalDate(), rs.getInt("Amount"), rs.getDouble("Final_cost"));

                comprasClienteDeseado.add(cadaCompra);

                System.out.printf("%-10d %10s %20s %25s %20d %25.2f \n",
                        rs.getInt("Id_Purchase"), rs.getString("Id_customer"),
                        rs.getString("Id_product"),
                        rs.getDate("Date").toLocalDate(),
                        rs.getInt("Amount"),
                        rs.getDouble("Final_cost"));
                        
            }
            System.out.println("- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ");
            

            rs.close();

        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }

        return comprasClienteDeseado;
    }
    
       public static void main(String[] args) throws SQLException {
        Model app = new Model();
        app.purchasesOfDesiredCustomer("Juan34");
        
    }

 

    
}

