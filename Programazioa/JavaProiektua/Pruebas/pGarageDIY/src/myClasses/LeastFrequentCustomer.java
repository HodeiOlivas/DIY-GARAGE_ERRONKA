/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package myClasses;

import java.time.LocalDate;

/**
 *
 * @author arceredillo.adrian
 */
public class LeastFrequentCustomer extends Customer {
    
    /*
    private String usernameCust;
    private String nameCust;
    private String surnameCust;
    private int daysPassed;
    */
    
    private int codeReservation;            //CODE of the last reservation of the customer
    private LocalDate lastReservation;      //DATE of the last reservation of the customer
    private int daysPassed;                 //DAYS PASSED since the last reservation of the customer
    
    
    public LeastFrequentCustomer(int codeReservation, LocalDate lastReservation, 
            String username, String name, String surname, int daysPassed) {
        
        super(username, name, surname);
        this.codeReservation = codeReservation;
        this.lastReservation = lastReservation;
        this.daysPassed = daysPassed;
        
    }
    
    /**
     * This subclass' goal is to get the data of the desired "objects"; so there's 
     * no reason to modify or change values from it. This is why this subclass 
     * doesn't contain Setters.
     * 
     * @return 
     */

    public int getCodeReservation() {
        return codeReservation;
    }
    
    public LocalDate getLastReservation() {
        return lastReservation;
    }
    
    public int getDaysPassed() {
        return daysPassed;
    }
    
    
    public String toString() {
        
        return "\nReservation Code: " + this.getCodeReservation() + ",\t\tLast Reservation: " + this.getLastReservation() + 
                "\nUsername: " + super.getUsername() + ",\t\tName: " + super.getName() + 
                //"\nSurname: " + super.getSurname() + ",\t\tDays Passed: " + this.getDaysPassed() + 
                "\nDays Passed: " + this.getDaysPassed() + ",\t\tSurname: " + super.getSurname() + 
                "\n -------------------------------------------------- xx ---------------------------------------------------";
        
    }
    
    
    public String toStringExtended() {
        return "";
    }
    
    
    
    
}
