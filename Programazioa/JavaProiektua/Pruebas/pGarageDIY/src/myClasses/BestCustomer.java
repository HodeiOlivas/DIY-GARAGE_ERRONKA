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
public class BestCustomer {
    
    private String usernameCustomer;    //username of the customer
    private int bookingTime;            //amount of hours of reservations
    private int numReservations;        //amount of reservations of the customer
    private double totalPaid;           //total paid by the customer
    private double topReservationPrice;      //the price of the best reservation of the customer
    
    
    public BestCustomer() {
        
    }
    
    public BestCustomer(String usernameCustomer, int bookingTime, double totalPaid) {
        this.usernameCustomer = usernameCustomer;
        this.bookingTime = bookingTime;
        this.totalPaid = totalPaid;  
    }
    
    public BestCustomer(String usernameCustomer, int bookingTime, int numReservations, double totalPaid, double topReservationPrice) {
        this.usernameCustomer = usernameCustomer;
        this.bookingTime = bookingTime;
        this.numReservations = numReservations;
        this.totalPaid = totalPaid;  
        this.topReservationPrice = topReservationPrice;
    }
    
    
    public String getUsernameCustomer() {
        return usernameCustomer;
    }
    
    public int getBookingTime() {
        return bookingTime;
    }
    
    public int getNumReservations() {
        return numReservations;
    }
    
    public double getTotalPaid() {
        return totalPaid;
    }
    
    public double getTopReservationPrice() {
        return topReservationPrice;
    }
    
    @Override
    public String toString() {
        
        return "\n\t\tUsername: " + this.getUsernameCustomer() + 
               "\n\tBooking Time: " + this.getBookingTime() + " h." +
               "        Total paid: " + this.getTotalPaid() + " €" + 
               "\n\n--------------------------------------------------xx---------------------------------------------------" + "\n\n";
    }
    
    public String toStringExtended() {
        
        return "\n\tUsername: " + this.getUsernameCustomer() + 
               "\n\tBooking Time: " + this.getBookingTime() + 
               "        Num. Reservations: " + this.getNumReservations() + 
               "\n\tTotal paid: " + this.getTotalPaid() + " €" + 
               "    Top Reservation: " + this.getTopReservationPrice() + " €" + 
               "\n\n--------------------------------------------------xx---------------------------------------------------" + "\n\n";
    }
    
}
