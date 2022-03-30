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
public class ObjetosDePrueba {
    public static void main(String[] args) {
        
        //Create worker
        LocalTime lt1 = LocalTime.parse("09:00:00");
        LocalTime lt2 = LocalTime.parse("19:00:00");
        Worker w1 = new Worker("Primer", "Trabajador", "pwd1", "Mechanic", "trabajador.primer@garage.diy", 123456789, 
                    1200.25, lt1, lt2); System.out.println(w1.toString());
        
        
        //Create customer
        //Create cabin
        //Create reservation
        
        
    }
}
