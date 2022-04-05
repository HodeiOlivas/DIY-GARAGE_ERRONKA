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
public class SaleTrack {
    
    private String code_Product;
    private int appearances;
    private int times_Sold;
    private double benefits_Prod;
    
    
    public SaleTrack() {
        
    }
    
    public SaleTrack(String code_Product, int appearances, int times_Sold, double benefits_Prod) {
        this.code_Product = code_Product;
        this.appearances = appearances;
        this.times_Sold = times_Sold;
        this.benefits_Prod = benefits_Prod;
    }

    public String getCode_Product() {
        return code_Product;
    }

    public int getAppearances() {
        return appearances;
    }

    public int getTimes_Sold() {
        return times_Sold;
    }

    public double getBenefits_Prod() {
        return benefits_Prod;
    }

    @Override
    public String toString() {
        return "\nProdict code:  \t\t" + this.getCode_Product() + 
               "\nAppearances on pur.:  \t" + this.getAppearances() + 
               "\nSold units:  \t\t" + this.getTimes_Sold() + 
               "\nEarned with the product:  \t" + this.getBenefits_Prod() +
                "\n--------------------------------------------------x--------------------------------------------------";
    }
    
    
    
}
