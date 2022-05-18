/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package myClasses;

import java.time.LocalDate;
import java.time.LocalTime;

/**
 *
 * @author AdriAlex
 */
public class Reservation {
    
    private static int id_Res = 1;
    
    private int id_reservation;
    private String cust_username;
    private WorkArea id_cabin;
    private LocalDate date;
    private LocalTime starting_Hour;
    private LocalTime ending_Hour;
    private int amount_Hours;
    private double total_Price;
    
    
    public Reservation() {
        
    }
    
    
    public Reservation(/*int id_reservation,*/ Customer c1, WorkArea id_cabin, LocalDate date,
            LocalTime starting_Hour, LocalTime ending_Hour, int amount_Hours, double total_Price) {
        
        //this.id_reservation = id_reservation;
        this.id_reservation = id_Res++;
        this.cust_username = c1.getUsername();
        this.id_cabin = id_cabin;
        this.date = date;
        this.starting_Hour = starting_Hour;
        this.ending_Hour = ending_Hour;
        this.amount_Hours = amount_Hours;   //C1
        this.total_Price = total_Price;
        
    }
    
    public int getId_reservation() {
        return id_reservation;
    }
    
    /*
    public void setId_reservation(int id_reservation) {
        this.id_reservation = id_reservation;
    }
    */
    
    public String getCust_username() {
        return cust_username;
    }
    
    public void setCust_username(String cust_username) {
        this.cust_username = cust_username;
    }
    
    public WorkArea getId_cabin() {
        return id_cabin;
    }
    
    public void setId_cabin(WorkArea id_cabin) {
        this.id_cabin = id_cabin;
    }
    
    public LocalDate getDate() {
        return date;
    }
    
    public void setDate(LocalDate date) {
        this.date = date;
    }
    
    public LocalTime getStarting_Hour() {
        return starting_Hour;
    }
    
    public void setStarting_Hour(LocalTime starting_Hour) {
        this.starting_Hour = starting_Hour;
    }
    
    public LocalTime getEnding_Hour() {
        return ending_Hour;
    }
    
    public void setEnding_Hour(LocalTime ending_Hour) {
        this.ending_Hour = ending_Hour;
    }
    
    public int getAmount_Hours() {
        return amount_Hours;
    }
    
    public void setAmount_Hours(int amount_Hours) {
        this.amount_Hours = amount_Hours;
    }
    
    public double getTotal_Price() {
        return total_Price;
    }
    
    public void setTotal_Price(double total_Price) {
        this.total_Price = total_Price;
    }

    @Override
    public String toString() {
        return "Reservation{" + "id_reservation=" + id_reservation + ", cust_username=" + cust_username + 
                ", id_cabin=" + id_cabin + ", date=" + date + ", starting_Hour=" + starting_Hour + ", ending_Hour=" + ending_Hour + 
                ", amount_Hours=" + amount_Hours + ", total_Price=" + total_Price + '}';
    }
    
    
    
    
    
}

/*
CONCEPTS:

C1 - Difference between 2 LocalTimes in hours:

    LocalTime lt1 = LocalTime.parse("10:15:30");
    LocalTime lt2 = LocalTime.parse("12:21:30");
    System.out.println("The first LocalTime is: " + lt1);
    System.out.println("The second LocalTime is: " + lt2);
    System.out.println("\nThe difference between two LocalTimes in hours is: " + lt1.until(lt2, ChronoUnit.HOURS));
------------------------------------------------

*/