/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package myClasses;

/**
 *
 * @author AdriAlex
 */
public class Cabin {
    
    private WorkArea id_cabin;
    private int id_assistant;
    private double size;
    private String color;
    private double price_Hour;
    private String description;
    
    public Cabin() {
        
    }
    
    public Cabin(WorkArea id_cabin, Worker w1, double size, String color, double price_Hour, String description) {
        
        this.id_cabin = id_cabin;
        this.id_assistant = w1.getId_worker();
        this.size = size;
        this.color = color;
        this.price_Hour = price_Hour;
        this.description = description;
        
    }
    
    public WorkArea getId_cabin() {
        return id_cabin;
    }
    
    public void setId_cabin(WorkArea id_cabin) {
        this.id_cabin = id_cabin;
    }
    
    public int getId_assistant() {
        return id_assistant;
    }
    
    public void setId_assistant(int id_assistant) {
        this.id_assistant = id_assistant;
    }
    
    public double getSize() {
        return size;
    }
    
    public void setSize(double size) {
        this.size = size;
    }
    
    public String getColor() {
        return color;
    }
    
    public void setColor(String color) {
        this.color = color;
    }
    
    public double getPrice_Hour() {
        return price_Hour;
    }
    
    public void setPrice_Hour(double price_Hour) {
        this.price_Hour = price_Hour;
    }
    
    public String getDescription() {
        return description;
    }
    
    public void setDescription(String description) {
        this.description = description;
    }

    @Override
    public String toString() {
        return "Cabin{" + "id_cabin=" + id_cabin + ", id_assistant=" + id_assistant + 
                ", size=" + size + ", color=" + color + ", price_Hour=" + price_Hour + ", description=" + description + '}';
    }
    
    
    
    
            
    
}
