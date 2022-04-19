/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package forGraphics;

import forGraphics.Drawable;
import java.awt.Color;
import java.awt.Graphics;
import java.util.Scanner;

/**
 *
 * @author arceredillo.adrian
 */
public class BuildGraphPoint implements Drawable {
    
    private int x;
    private int y;
    
    
    /**
     * Constructor por defecto. 
     */
    public BuildGraphPoint() {
        this.x = 0;
        this.y = 0;
    }
    
    
    public BuildGraphPoint(int x, int y) {
        this.x = x;
        this.y = y;
    }
    
    public int getX() {
        return x;
    }
    
    public int getY() {
        return y;
    }
    
    /*
    public static int getSortutakoPuntuak() {
        return sortutakoPuntuak;
    }
    */
    
    public void setX(int x) {
        this.x = x;
    }
    
    public void setY(int y) {
        this.y = y;
    }
    
    
    
    @Override
    public String toString() {
        return "(" + this.getX() + ", " + this.getY() + ")";
    }
    
    @Override
    public void drawTest() {
        System.out.println(this.toString() + " puntua GUI baten marraztua izan da. ");
    }
    
    
    
    
    /**
     * Método Gehigarria para representar en un GUI los puntos que 
     * vayamos creando; en este caso, los puntos se crearán donde 
     * el usuario haga clic. 
     * 
     * @param g 
     */
    public void drawTest(Graphics g) {
        g.setColor(Color.red);
        g.drawString(this.toString(), x, y - 5);
        g.fillOval(x, y, 5, 5);
    }
    
    
}
