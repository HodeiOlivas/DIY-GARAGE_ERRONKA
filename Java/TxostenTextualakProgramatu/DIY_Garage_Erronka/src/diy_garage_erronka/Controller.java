/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package diy_garage_erronka;

import Jframeak.TextualReports;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.text.View;
import static Jframeak.TextualReports.*;

/**
 *
 * @author olivas.hodei
 */
public class Controller implements ActionListener {

    private Model model;

    private TextualReports reports;

    public Controller(Model model, TextualReports reports) {

        this.model = model;
        this.reports = reports;
        gehituActionListener(this);
    }

    private void gehituActionListener(ActionListener listener) {

// GUIaren konponente guztien listenerra
//--------------------------------------//
        TextualReports.jButtonClear.addActionListener(listener);
        TextualReports.JComboBozTxostenak.addActionListener(listener);
        TextualReports.jButtonClear.addActionListener(listener);
        TextualReports.jButtonGoBack.addActionListener(listener);
        TextualReports.jButtonLogin.addActionListener(listener);
        TextualReports.jButtonViewTxostenak.addActionListener(listener);
        TextualReports.jComboCustomers.addActionListener(listener);
        TextualReports.jTextFieldDate.addActionListener(listener);
        TextualReports.jTextareaTxostenak.addActionListener(listener);

    }

    @Override
    public void actionPerformed(ActionEvent e) {

    }

}
