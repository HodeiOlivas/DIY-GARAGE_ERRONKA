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
        
        Model model = new Model();
        
        //inicio pruebas
        //ordenar los Customer por edad (descendente)
        model.customersAge();
        
        //clientes menores de edad
        
        
        //ver compras cliente
        model.purchasesOfDesiredCustomer("user22");
        System.out.println("");
        
        
        //ver cabinas más reservadas
        
        //ver los productos más vendidos (ventas y ganancias)
        model.mostSoldProducts("CM11");
        
    }
}
