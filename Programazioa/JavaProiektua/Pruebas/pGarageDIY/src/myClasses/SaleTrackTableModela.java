/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package myClasses;

import java.util.ArrayList;
import javax.swing.table.AbstractTableModel;

/**
 *
 * @author arceredillo.adrian
 */
public class SaleTrackTableModela extends AbstractTableModel {
    
    private final String[] columnsName = {"Product code", "Appearances", "Sold units", "Earned with the product"};
    private ArrayList<SaleTrack> bestSelledProductList = new ArrayList<>();

    public SaleTrackTableModela(ArrayList<SaleTrack> datosEnArrayList) {
        this.bestSelledProductList = datosEnArrayList;
    }

    @Override
    public int getRowCount() {
        return bestSelledProductList.size();
    }

    @Override
    public int getColumnCount() {
        return columnsName.length;
    }

    @Override
    public Object getValueAt(int rowIndex, int columnIndex) {
        if (columnIndex == 0) {
            return bestSelledProductList.get(rowIndex).getCode_Product();
        } else if (columnIndex == 1) {
            return bestSelledProductList.get(rowIndex).getAppearances();
        } else if (columnIndex == 2) {
            return bestSelledProductList.get(rowIndex).getTimes_Sold();
        } else if (columnIndex == 3) {
            return bestSelledProductList.get(rowIndex).getBenefits_Prod();
        }
        
        return null;
    }
    
     @Override
    public String getColumnName(int col) {
        return columnsName[col];
    }
    
}
