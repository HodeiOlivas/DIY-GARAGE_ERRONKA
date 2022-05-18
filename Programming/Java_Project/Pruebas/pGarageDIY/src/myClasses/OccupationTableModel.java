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
public class OccupationTableModel extends AbstractTableModel {
    
    private final String[] columnsName = {"Month", "Occupations (res.)", "Earned per month (€)"};
    private ArrayList<MonthOccupation> monthsWithReservations = new ArrayList<>();
    
    
    public OccupationTableModel(ArrayList<MonthOccupation> dataOnArrayList) {
        this.monthsWithReservations = dataOnArrayList;
    }
    

    @Override
    public int getRowCount() {
        return monthsWithReservations.size();
    }

    @Override
    public int getColumnCount() {
        return columnsName.length;
    }

    @Override
    public Object getValueAt(int rowIndex, int columnIndex) {
        if (columnIndex == 0) {
            return monthsWithReservations.get(rowIndex).getMonth();
        } else if (columnIndex == 1) {
            return monthsWithReservations.get(rowIndex).getAmountOfReservationsMonth();
        } else if (columnIndex == 2) {
            return monthsWithReservations.get(rowIndex).getTotalEarnedPerMonth();
        } 
        
        return null;
    }
    
    
    @Override
    public String getColumnName(int col) {
        return columnsName[col];
    }
    
}
