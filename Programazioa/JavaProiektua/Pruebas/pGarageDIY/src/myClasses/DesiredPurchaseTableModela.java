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
public class DesiredPurchaseTableModela extends AbstractTableModel {
    
    private final String[] columnsName = {"Purchase ID", "Cust. Username", "Product", "Date", "Amount", "Total"};
    private ArrayList<Purchase> purchasesOfDesiredCustomer = new ArrayList<>();

    public DesiredPurchaseTableModela(ArrayList<Purchase> datosEnArrayList) {
        this.purchasesOfDesiredCustomer = datosEnArrayList;
    }

    @Override
    public int getRowCount() {
        return purchasesOfDesiredCustomer.size();
    }

    @Override
    public int getColumnCount() {
        return columnsName.length;
    }
    
    
    @Override
    public Object getValueAt(int rowIndex, int columnIndex) {
        if (columnIndex == 0) {
            return purchasesOfDesiredCustomer.get(rowIndex).getId_Purchase();
        } else if (columnIndex == 1) {
            return purchasesOfDesiredCustomer.get(rowIndex).getUser_cust();
        } else if (columnIndex == 2) {
            return purchasesOfDesiredCustomer.get(rowIndex).getId_product();
        } else if (columnIndex == 3) {
            return purchasesOfDesiredCustomer.get(rowIndex).getDate();
        } else if (columnIndex == 4) {
            return purchasesOfDesiredCustomer.get(rowIndex).getAmount();
        } else if (columnIndex == 5) {
            return purchasesOfDesiredCustomer.get(rowIndex).getFinal_Cost();
        }
        
        return null;
    }
    
    
    
    @Override
    public String getColumnName(int col) {
        return columnsName[col];
    }
    
}



/*
DesiredPurchaseTableModela
*/