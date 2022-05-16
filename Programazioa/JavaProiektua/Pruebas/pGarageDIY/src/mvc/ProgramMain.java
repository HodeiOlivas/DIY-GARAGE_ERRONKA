/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mvc;

import java.util.Scanner;

/**
 *
 * @author arceredillo.adrian
 */
public class ProgramMain {
    public static void main(String[] args) {
        
        View view = View.visualizarGUI();
        
        Model model = new Model();
        
        Controller controller = new Controller(model, view);
        
        //inicio pruebas
        //ordenar los Customer por edad (descendente)
        //model.underAgeCustomersString();
        
        //clientes menores de edad
        
        
        //ver compras cliente
        //System.out.println(model.purchasesOfDesiredCustomer("user22"));
        System.out.println("");
        
        
        //ver cabinas más reservadas
        
        //ver los productos más vendidos (ventas y ganancias)
        System.out.println("- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ");
        System.out.println("En cuantas compras aparece cada producto");
        //model.mostSoldProducts();
        
        System.out.println("\n########################################\n");
        
    }
}
