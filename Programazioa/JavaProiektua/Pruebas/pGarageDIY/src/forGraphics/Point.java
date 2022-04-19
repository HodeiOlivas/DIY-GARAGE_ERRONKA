/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package forGraphics;

import java.awt.Color;
import java.awt.Graphics;
import java.util.Scanner;

/**
 *
 * @author arceredillo.adrian
 */
public class Point implements Drawable {
    
    private int x;
    private int y;
    private static int sortutakoPuntuak = 0;
    
    
    /**
     * Constructor por defecto. 
     */
    public Point() {
        this.x = 0;
        this.y = 0;
        ++sortutakoPuntuak;
    }
    
    
    public Point(int x, int y) {
        this.x = x;
        this.y = y;
        ++sortutakoPuntuak;
    }
    
    public int getX() {
        return x;
    }
    
    public int getY() {
        return y;
    }
    
    public static int getSortutakoPuntuak() {
        return sortutakoPuntuak;
    }
    
    public void setX(int x) {
        this.x = x;
    }
    
    public void setY(int y) {
        this.y = y;
    }
    
        
    @Override
    public void drawTest() {
        System.out.println(this.toString() + " puntua GUI baten marraztua izan da. ");
    }
    
    @Override
    public int hashCode() {
        int hash = 7;
        return hash;
    }
    
    
    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final Point other = (Point) obj;
        if (this.x != other.x) {
            return false;
        }
        if (this.y != other.y) {
            return false;
        }
        return true;
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

    
    public void drawTest1() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
    
}
