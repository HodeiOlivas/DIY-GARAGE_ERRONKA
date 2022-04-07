/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package myClasses;

import java.time.LocalTime;

/**
 *
 * @author AdriAlex
 */
public class Worker {
    
    private static int id_Work = 1;
    
    private int id_worker;
    private String name;
    private String surname;
    private String password;
    private String occupation;
    private String mail;
    private int phone_Number;
    private double salary;
    private LocalTime start_Time;
    private LocalTime finish_Time;
    
    
    public Worker() {
        
    }
    
    public Worker (/*int id_worker,*/ String name, String surname, String password,
            String occupation, String mail, int phone_Number, double salary, 
            LocalTime start_Time, LocalTime finish_Time) {
        
        //this.id_worker = id_worker;
        this.id_worker = id_Work++;
        this.name = name;
        this.surname = surname;
        this.password = password;
        this.occupation = occupation;
        this.mail = mail;
        this.phone_Number = phone_Number;
        this.salary = salary;
        this.start_Time = start_Time;
        this.finish_Time = finish_Time;
        
    }
    
    public Worker (int id_worker, String name, String surname, String password,
            String occupation, String mail, int phone_Number, double salary, 
            LocalTime start_Time, LocalTime finish_Time) {
        
        this.id_worker = id_worker;
        this.name = name;
        this.surname = surname;
        this.password = password;
        this.occupation = occupation;
        this.mail = mail;
        this.phone_Number = phone_Number;
        this.salary = salary;
        this.start_Time = start_Time;
        this.finish_Time = finish_Time;
        
    }
    
    
    
    public int getId_worker() {
        return id_worker;
    }
    
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
    
    public String getOccupation() {
        return occupation;
    }
    
    public void setOccupation(String occupation) {
        this.occupation = occupation;
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
    
    public double getSalary() {
        return salary;
    }
    
    public void setSalary(double salary) {
        this.salary = salary;
    }
    
    public LocalTime getStart_Time() {
        return start_Time;
    }
    
    public void setStart_Time(LocalTime start_Time) {
        this.start_Time = start_Time;
    }
    
    public LocalTime getFinish_Time() {
        return finish_Time;
    }
    
    public void setFinish_Time(LocalTime finish_Time) {
        this.finish_Time = finish_Time;
    }
    
    
    public String toString() {
        return "Worker: \n[id: " + this.getId_worker() + ", full name: " + this.getName() + " " + this.getSurname() + 
                ", password: " + this.getPassword() + ", occupation: " + this.getOccupation() + ", mail: " + this.getMail() + 
                ", phone number: " + this.getPhone_Number() + ", salary: " + this.getSalary() + 
                ", start time: " + this.getStart_Time().toString() + ", finish time: " + this.getFinish_Time() + "]";
    }
    
    
    
    public String toStringExtended() {
        return /*"\nWorker ID: " + this.getId_worker() + */
                "\nName: " + this.getName() + "\tSurname: " + this.getSurname() + 
                "\nOccupation: " + this.getOccupation() + "\tSalary: " + this.getSalary() + 
                "\nMail: " + this.getMail() + "\tPhone: " + this.getPhone_Number() + 
                "\nStart Time: " + this.getStart_Time() + "\tFinish Time: " + this.getFinish_Time() + 
                "\n--------------------------------------------------x--------------------------------------------------";
       
    }
    
    
    
}
