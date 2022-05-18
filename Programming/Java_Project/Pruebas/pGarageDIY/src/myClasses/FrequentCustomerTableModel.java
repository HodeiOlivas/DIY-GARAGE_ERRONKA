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
public class FrequentCustomerTableModel extends AbstractTableModel {
    
    private final String[] columnsName = {"Reservation Code", "Last Reservation ", "Username", "Name", "Surname", "Days Passed"};
    private ArrayList<LeastFrequentCustomer> infrequentlyCustomers = new ArrayList<>();

    public FrequentCustomerTableModel(ArrayList<LeastFrequentCustomer> leastFrequentCustomers) {
        this.infrequentlyCustomers = leastFrequentCustomers;
    }

    @Override
    public int getRowCount() {
        return infrequentlyCustomers.size();
    }

    @Override
    public int getColumnCount() {
        return columnsName.length;
    }

    @Override
    public Object getValueAt(int rowIndex, int columnIndex) {
        if (columnIndex == 0) {
            return infrequentlyCustomers.get(rowIndex).getCodeReservation();
        } else if (columnIndex == 1) {
            return infrequentlyCustomers.get(rowIndex).getLastReservation();
        } else if (columnIndex == 2) {
            return infrequentlyCustomers.get(rowIndex).getUsername();
        } else if (columnIndex == 3) {
            return infrequentlyCustomers.get(rowIndex).getName();
        } else if (columnIndex == 4) {
            return infrequentlyCustomers.get(rowIndex).getSurname();
        } else if (columnIndex == 5) {
            return infrequentlyCustomers.get(rowIndex).getDaysPassed();
        }
        
        return null;
    }
    
    
    @Override
    public String getColumnName(int col) {
        return columnsName[col];
    }
    
    
}
