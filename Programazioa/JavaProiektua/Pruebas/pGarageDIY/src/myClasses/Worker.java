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
    
    
    
}
