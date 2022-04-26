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
 * @author AdriAlex
 */
public class UnderageTableModela extends AbstractTableModel {
    
    
    private final String[] columnsName = {"Username", "Name", "Surname", "Birthday"};
    private ArrayList<Customer> underageCustomersList = new ArrayList<>();

    public UnderageTableModela(ArrayList<Customer> dataSavedOnArraylist) {
        this.underageCustomersList = dataSavedOnArraylist;
    }

    @Override
    public int getRowCount() {
        return underageCustomersList.size();
    }

    @Override
    public int getColumnCount() {
        return columnsName.length;
    }

    @Override
    public Object getValueAt(int rowIndex, int columnIndex) {
        if (columnIndex == 0) {
            return underageCustomersList.get(rowIndex).getUsername();
        } else if (columnIndex == 1) {
            return underageCustomersList.get(rowIndex).getName();
        } else if (columnIndex == 2) {
            return underageCustomersList.get(rowIndex).getSurname();
        } else if (columnIndex == 3) {
            return underageCustomersList.get(rowIndex).getBirthday();
        }
        
        return null;
    }
    
    /**
     * Mediante este método cambiaremos los nombres de las columnas de 
     * la tabla, poniendo los valores que a nosotros nos interesen. 
     * 
     * @param col
     * @return 
     */
    @Override
    public String getColumnName(int col) {
        return columnsName[col];
    }
    
}
