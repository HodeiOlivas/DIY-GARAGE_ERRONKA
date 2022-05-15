/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package diy_garage_erronka;

import java.time.LocalDate;

/**
 *
 * @author olivas.hodei
 */
class Purchases {
    
     private static int id_Pur = 1;
    
    private int id_Purchase;
    private String cust_Username;
    private String id_Product;
    /*private ArrayList<Integer> id_ProductLista = new ArrayList<>();*/
    private LocalDate date;
    private int amount;
    private double final_Cost;
    
    
    public Purchases() {
        
    }

    public Purchases(String cust_Username, String id_product, LocalDate date, 
            int amount, double final_Cost) {
        
        this.id_Purchase = id_Pur++;
        this.cust_Username = cust_Username;
        this.id_Product = id_product;
        this.date = date;
        this.amount = amount;
        this.final_Cost = final_Cost;
    }
    
    
    public Purchases(String cust_Username, String id_product, LocalDate date, 
            int amount) {
        
        this.id_Purchase = id_Pur++;
        this.cust_Username = cust_Username;
        this.id_Product = id_product;
        this.date = date;
        this.amount = amount;
    }

    Purchases(String string) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
    
    
    /*
    public Purchase(String cust_Username, ArrayList id_ProductLista, LocalDate date, 
            int amount, double final_Cost) {
        
        this.id_Purchase = id_Pur++;
        this.cust_Username = cust_Username;
        this.id_ProductLista = id_ProductLista;
        this.date = date;
        this.amount = amount;
        this.final_Cost = final_Cost;
    }
    */

    public int getId_Purchase() {
        return id_Purchase;
    }
    
    /*
    public void setId_Purchase(int id_Purchase) {
        this.id_Purchase = id_Purchase;
    }
    */
    
    public String getUser_cust() {
        return cust_Username;
    }
    
    public void setUser_cust(String user_cust) {
        this.cust_Username = user_cust;
    }
    
    public String getId_product() {
        return id_Product;
    }
    
    public void setId_product(String id_Product) {
        this.id_Product = id_Product;
    }
    
    public LocalDate getDate() {
        return date;
    }
    
    public void setDate(LocalDate date) {
        this.date = date;
    }
    
    public int getAmount() {
        return amount;
    }
    
    public void setAmount(int amount) {
        this.amount = amount;
    }
    
    public double getFinal_Cost() {
        return final_Cost;
    }
    
    public void setFinal_Cost(double final_Cost) {
        this.final_Cost = final_Cost;
    }
    
    
    public String toString() {
        return "\npurchase [id:" + this.getId_Purchase() + ", customer:" + this.getUser_cust() + 
                ", product: " + this.getId_product() + ", date: " + this.getDate() + 
                ", amount: " + this.getAmount() + ", total: " + this.getFinal_Cost() + "]";
    }
    
    
    public String toStringForTextArea() {
        return "\nUsername:  \t" + this.getUser_cust() + 
                "\nProduct: \t" + this.getId_product() + 
                "\nDate:  \t" + this.getDate() + 
                "\nAmount:  \t" + this.getAmount() +
                "\nTotal cost:  \t" + this.getFinal_Cost() +
                "\n--------------------------------------------------x--------------------------------------------------";
    }
}
