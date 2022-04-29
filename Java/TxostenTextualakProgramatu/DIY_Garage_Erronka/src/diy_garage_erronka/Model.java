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
import java.time.LocalDate;
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
        pstmt.setString(1, "Juan34");
        ResultSet rs = pstmt.executeQuery();

        System.out.println(pstmt);
    }

    public static ArrayList<Purchases> purchasesOfDesiredCustomer() {

        String sql = "SELECT * FROM purchases WHERE Id_customer = ?";  //añadir: limit X
        ArrayList<Purchases> comprasClienteDeseado = new ArrayList<>();
        Scanner input = new Scanner(System.in);
        ResultSet rs = null;

        Scanner in = new Scanner(System.in);
        try (Connection conn = connect2();
                PreparedStatement pstmt = conn.prepareStatement(sql)) {

            System.out.print("Show the purchases of the customer (enter cust. username): ");
            String desiredCustomer = input.next();
            pstmt.setString(1, desiredCustomer);
            rs = pstmt.executeQuery();

            System.out.println("\nPurchases of the desired Customer: ");
            System.out.println("====================================================================================================================");
            System.out.printf("%-10s %10s %20s %25s %20s %25s\n", "Purchase ID", "Username", "Product", "Date", "Amount", "Total Price");
            System.out.println("--------------------------------------------------------------------------------------------------------------------");
            int numeroCompras = 0;
            int totalPrice = 0;
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
                ++numeroCompras;
                totalPrice = (int) (totalPrice + rs.getDouble("Final_cost"));
            }
            System.out.println("- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ");

            System.out.println("Number of purchases: " + numeroCompras);
            System.out.println("Total price of all purchases: " + totalPrice + "€");

            rs.close();

        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }

        return comprasClienteDeseado;
    }

    public String underAgeCustomersString() {
        System.out.println("");
        System.out.println("");
        System.out.println("");

        String sql = "SELECT * FROM customer ORDER BY customer.Birthday desc";  
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
                            rs.getString("id_customer"), rs.getString("Name"), rs.getString("Surname"), rs.getString("Password"),
                            LocalDate.parse(rs.getString("Birthday")), rs.getString("Mail"), rs.getInt("Phone_Number"));

                    underageCustomers.add(underCustomer);

                    System.out.printf("%-10s %10s %15s %15s %15s %-20s %20d \n",
                            rs.getString("id_customer"),
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

    public static void main(String[] args) {
        Model app = new Model();

        app.purchasesOfDesiredCustomer();

        app.underAgeCustomersString();

    }

}
