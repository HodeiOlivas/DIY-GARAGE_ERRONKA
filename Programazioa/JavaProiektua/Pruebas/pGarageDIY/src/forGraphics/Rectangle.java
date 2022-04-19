/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package forGraphics;

import java.awt.Color;
import java.awt.Graphics;
import java.util.ArrayList;
import java.util.Arrays;

/**
 *
 * @author arceredillo.adrian
 */
public class Rectangle implements Drawable {
    
    private Point erpinBat;
    private Point kontrakoErpina;
    
    
    public Rectangle(Point erpina, Point kontrakoErpina) {
        this.erpinBat = erpina;
        this.kontrakoErpina = kontrakoErpina;
        
    }
    
    public Rectangle(int x1, int y1, int x2, int y2) {
        erpinBat = new Point(x1, y1);
        kontrakoErpina = new Point(x2, y2);
        
    }
    
    public Point getErpinBat() {
        return erpinBat;
    }
    
    public Point getKontrakoErpina() {
        return kontrakoErpina;
    }
    
    
    public Point[] getLauErpinenArraya() {
        Point[] lauErpinak = new Point[4];
        lauErpinak[0] = this.erpinBat;
        lauErpinak[1] = new Point(this.kontrakoErpina.getX(), this.erpinBat.getY());
        lauErpinak[2] = this.kontrakoErpina;
        lauErpinak[3] = new Point(this.erpinBat.getX(), this.kontrakoErpina.getY());
        
        return lauErpinak;
    }
    
    
    public ArrayList<Point> getLauErpinenArrayLista() {
        ArrayList<Point> erpinenLista = new ArrayList<>();
        erpinenLista.add(this.erpinBat);
        erpinenLista.add(new Point(this.kontrakoErpina.getX(), this.erpinBat.getY()));
        erpinenLista.add(this.kontrakoErpina);
        erpinenLista.add(new Point(this.erpinBat.getX(), this.kontrakoErpina.getY()));
        
        return erpinenLista;
    }
    
    @Override
    public String toString() {
        return Arrays.toString(this.getLauErpinenArraya());
    }

        
    /*@Override*/
    public void drawTest(Graphics g) {
        //g.setColor(Color.red);
        
        g.drawLine(this.getErpinBat().getX(), this.getErpinBat().getY(), this.getKontrakoErpina().getX(), this.getErpinBat().getY());
        g.drawLine(this.getKontrakoErpina().getX(), this.getErpinBat().getY(), this.getKontrakoErpina().getX(), this.getKontrakoErpina().getY());
        g.drawLine(this.getKontrakoErpina().getX(), this.getKontrakoErpina().getY(), this.getErpinBat().getX(), this.getKontrakoErpina().getY());
        g.drawLine(this.getErpinBat().getX(), this.getKontrakoErpina().getY(), this.getErpinBat().getX(), this.getErpinBat().getY());
        
    }

    @Override
    public void drawTest() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
    
}
