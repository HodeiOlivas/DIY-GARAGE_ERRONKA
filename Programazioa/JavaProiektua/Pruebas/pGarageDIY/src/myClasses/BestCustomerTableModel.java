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
public class BestCustomerTableModel extends AbstractTableModel {
    
    private final String[] columnsName = {"Num. Reservations", "Total Money Paid (€) ", "Booking Time (h)", "Top Reservation (€)"};
    private ArrayList<BestCustomer> premiumCustData = new ArrayList<>();
    
    
    public BestCustomerTableModel(ArrayList<BestCustomer> premiumCustData) {
        this.premiumCustData = premiumCustData;
    }

    
    @Override
    public int getRowCount() {
        return premiumCustData.size();
    }
    
    @Override
    public int getColumnCount() {
        return columnsName.length;
    }
    
    @Override
    public Object getValueAt(int rowIndex, int columnIndex) {
        if (columnIndex == 0) {
            return premiumCustData.get(rowIndex).getNumReservations();
        } else if (columnIndex == 1) {
            return premiumCustData.get(rowIndex).getTotalPaid();
        } else if (columnIndex == 2) {
            return premiumCustData.get(rowIndex).getBookingTime();
        } else if (columnIndex == 3) {
            return premiumCustData.get(rowIndex).getTopReservationPrice();
        } 
        
        return null;
    }
    
    
}
