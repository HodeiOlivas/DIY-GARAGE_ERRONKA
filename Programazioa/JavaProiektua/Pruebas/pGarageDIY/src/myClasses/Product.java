/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package myClasses;

/**
 *
 * @author arceredillo.adrian
 */
public class Product {
    
    private String id_Product;
    private String name;
    private double Price;
    private String description;
    
    
    public Product () {
        
    }

    
    public Product(String id_Product, String name, double Price, String description) {
        this.id_Product = id_Product;
        this.name = name;
        this.Price = Price;
        this.description = description;
    }
    
    public String getId_Product() {
        return id_Product;
    }
    
    public void setId_Product(String id_Product) {
        this.id_Product = id_Product;
    }
    
    public String getName() {
        return name;
    }
    
    public void setName(String name) {
        this.name = name;
    }
    
    public double getPrice() {
        return Price;
    }
    
    public void setPrice(double Price) {
        this.Price = Price;
    }
    
    public String getDescription() {
        return description;
    }
    
    public void setDescription(String description) {
        this.description = description;
    }
    
    
    
    
}
