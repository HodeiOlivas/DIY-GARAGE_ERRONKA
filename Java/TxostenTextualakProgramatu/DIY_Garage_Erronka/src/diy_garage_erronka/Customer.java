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
class Customer {
    
     private String username;
    private String name;
    private String surname;
    private String password;
    private LocalDate birthday;
    private String mail;
    private int phone_Number;
    
    
    public Customer() {
        
    }
    
    public Customer(String username, String name, String surname) {
        this.username = username;
        this.name = name;
        this.surname = surname;
    }
    
    public Customer(String username, String name, String surname, String password, 
            LocalDate birthday, String mail, int phone_Number) {
        
        this.username = username;
        this.name = name;
        this.surname = surname;
        this.password = password;
        this.birthday = birthday;
        this.mail = mail;
        this.phone_Number = phone_Number;
    }
    

    public String getUsername() {
        return username;
    }
    
    /*
    public void setUsername(String username) {  //ezingo da username aldatu; behin gordeta, behin betirako baita
        this.username = username;
    }
    */
    
    public String getName() {
        return name;
    }
    
    public void setName(String name) {
        this.name = name;
    }
    
    public String getSurname() {
        return surname;
    }
    
    public void setSurname(String surname) {
        this.surname = surname;
    }
    
    public String getPassword() {
        return password;
    }
    
    public void setPassword(String password) {
        this.password = password;
    }
    
    public LocalDate getBirthday() {
        return birthday;
    }
    
    public void setBirthday(LocalDate birthday) {
        this.birthday = birthday;
    }
    
    public String getMail() {
        return mail;
    }
    
    public void setMail(String mail) {
        this.mail = mail;
    }
    
    public int getPhone_Number() {
        return phone_Number;
    }
    
    public void setPhone_Number(int phone_Number) {
        this.phone_Number = phone_Number;
    }
    
    public String toString() {
        return "\nUsername: \t" + this.getUsername() + 
                "\nFull name:  \t" + this.getName() + " " + this.getSurname() + 
                "\nBirthday:  \t" + this.getBirthday() + 
                "\n--------------------------------------------------xx--------------------------------------------------";
                   
        /*
        -----------------------------------------------------------------------------------------------------
        --------------------------------------------------x--------------------------------------------------
        */
    }
    
    public String toStringExtended() {
        return "\nUsername: " + this.getUsername() + ",\tPassword: " + this.getPassword() + "," +
                "\nName: " + this.getName() + ",\tSurname: " + this.getSurname() + "," +
                "\nBirthday: " + this.getBirthday() + ",\tPhone: " + this.getPhone_Number() + "," +
                "\nMail: " + this.getMail() +                 
                "\n--------------------------------------------------x--------------------------------------------------";
       
    }
    
    
    
}
