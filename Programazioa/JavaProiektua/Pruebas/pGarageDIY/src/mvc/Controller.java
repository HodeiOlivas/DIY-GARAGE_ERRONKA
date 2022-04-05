/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mvc;

import myClasses.*;
import java.awt.Color;
import java.awt.Dimension;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import static mvc.View.*;
//import static mvc.View.*;
//import model.Model;


/**
 *
 * @author arceredillo.adrian
 */
public class Controller implements ActionListener {
    
    private Model model;
    private View view;
    
    /*
    public Controller(Model model, View view) {
        this.model = model;
        this.view = view;
        gehituActionListener(this);       
    }
    */
    
    public Controller(Model model, View view) {
        this.model = model;
        this.view = view;
        gehituActionListener(this);       
    }
    
    
    private void gehituActionListener(ActionListener listener) {
        //GUIaren konponente guztiei gehitu listenerra
        
        View.JButtonProbarDBConection.addActionListener(listener);    //botón para comprobar la conexión a la db
        //--------------------------//
        View.JButtonGoTxostenak.addActionListener(listener);  //inicio -> botón para ver txostenak textuales
        View.JButtonGoGraphicall.addActionListener(listener); //inicio -> botón para ver los informes gráficos 
        
        View.JButtonPrintTxosten.addActionListener(listener); //textual reports -> botón para ver/imprimir los datos
        View.JButtonReturnStart.addActionListener(listener);  //textual reports -> botón para volver al menú inicial
        View.JButtonSaveInFile.addActionListener(listener);   //textual reports -> botón para guardar el contenido del text area en un fichero
        
        View.JButtonViewGra.addActionListener(listener);  //graphical reports -> ver contenido (en gráficos) de los informes
        View.JButtonClean.addActionListener(listener);  //graphical reports -> limpiar contenido del textArea
        View.JButtonGoBack.addActionListener(listener);   //graphical report -> volcer al menú inicial
        
        
    }
    
    
    @Override
    public void actionPerformed(ActionEvent e) {
        String actionCommand = e.getActionCommand();
        //listenerrak entzun dezakeen eragiketa bakoitzeko. Konponenteek 'actionCommad' propietatea daukate
        switch (actionCommand) {
            case "Probar DB":
                //model.terminoakImprimatu();
                break;
            case "Textual Reports":
                System.out.println("Wait... The Textual Report's section is loading. \n");
                View.JFrameTextReports.setVisible(true);
                View.JFrameTextReports.setTitle("Create a New Customer!");
                View.JFrameTextReports.setSize(600, 400);
                View.JFrameTextReports.setResizable(false);
                
                break;
            case "Graphicall Reports":
                System.out.println("Wait... The Graphical Report's section is loading. \n");
                View.JFrameGraphicalReports.setVisible(true);
                View.JFrameGraphicalReports.setTitle("Create a New Customer!");
                View.JFrameGraphicalReports.setSize(600, 356);
                View.JFrameGraphicalReports.setResizable(false);
                break;
            
            case "View Txostena":   //txosten textualak ikusi
                JTextAreaTxostenak.setText("");
                if (JComboBoxTxostenak.getSelectedIndex() == 0) {
                    JTextAreaTxostenak.setText("Please, select a report to continue... ");
                    System.out.println("No report selected");
                    
                } else if (JComboBoxTxostenak.getSelectedIndex() == 1) {
                    JTextAreaTxostenak.setText("Enter desired date on the right. ");
                    //poner método de "today's occupation"
                    JTextFieldTodaysDate.setEditable(true);
                    JTextFieldTodaysDate.setEnabled(true);
                    System.out.println("Today's occupation report selected.");
                    
                } else if (JComboBoxTxostenak.getSelectedIndex() == 2) {
                    
                    for (int i = 0; i < model.underAge().size(); ++i) {
                        JTextAreaTxostenak.setText(JTextAreaTxostenak.getText() + model.underAge().get(i).toString());
                    }
                    System.out.println("underage");
                    
                } else if (JComboBoxTxostenak.getSelectedIndex() == 3) {
                    //JSpinnerCustomerId.setEnabled(true);
                    JTextFieldUsernameUser.setEditable(true);
                    JTextFieldUsernameUser.setEnabled(true);
                    
                    for (int i = 0; i < model.purchasesOfDesiredCustomer(JTextFieldUsernameUser.getText()).size(); ++i) {
                        JTextAreaTxostenak.setText(JTextAreaTxostenak.getText() + model.purchasesOfDesiredCustomer(JTextFieldUsernameUser.getText()).get(i).toStringForTextArea());
                    }
                    
                    System.out.println("desired customer's purchases");
                    
                } else if (JComboBoxTxostenak.getSelectedIndex() == 4) {
                    //JSpinnerCustomerId.setEnabled(true);
                    JTextFieldUsernameUser.setEditable(false); JTextFieldUsernameUser.setEnabled(false);
                    JTextFieldTodaysDate.setEditable(false); JTextFieldTodaysDate.setEnabled(false);
                    
                    //model.purchasesOfDesiredCustomer(JTextFieldUsernameUser.getText());
                    
                    System.out.println("desired customer's purchases");
                    
                } else if (JComboBoxTxostenak.getSelectedIndex() == 5) {
                    //JSpinnerCustomerId.setEnabled(true);
                    JTextFieldUsernameUser.setEditable(false); JTextFieldUsernameUser.setEnabled(false);
                    JTextFieldTodaysDate.setEditable(false); JTextFieldTodaysDate.setEnabled(false);
                    
                    for (int i = 0; i < model.mostSoldProducts().size(); ++i) {
                        JTextAreaTxostenak.setText(model.mostSoldProducts().toString());
                    }
                    
                    System.out.println("desired customer's purchases");
                    
                } else {
                    
                    JTextFieldTodaysDate.setEditable(false);
                    JTextFieldTodaysDate.setEnabled(false);
                    JSpinnerCustomerId.setEnabled(false);
                    JTextFieldUsernameUser.setEditable(false);
                    JTextFieldUsernameUser.setEnabled(false);
                }
                
                
                
                System.out.println("Ver informes. \n");
                break;
            case "Save":
                System.out.println("Guardando contenido en un fichero...\n");
                break;
            case "Go back": //menu nagusira bueltatu
                View.JFrameTextReports.dispose();
                break;
            
            case "View Graphics":   //txosten grafikoak -> ver datos en forma de gráficos
                System.out.println("Ver los datos en forma de gráficos. ");
                break;
            case "Clean":   //txosten grafikoak -> vaciar el contenido del text area
                View.JTextAreaGraphics.setText("Please, choose the report you want to represent");
                break;
            case "Go back to start":
                View.JFrameGraphicalReports.dispose();
                break;
            /*
            case "New Client":
                System.out.println("Has pulsado el botón 'New Client'");
                view.JDialogTerminoaGehitu.setVisible(true);
                view.JDialogTerminoaGehitu.setTitle("Create a New Customer!");
                view.JDialogTerminoaGehitu.setSize(400, 400);
                view.JDialogTerminoaGehitu.setResizable(false);
                
                //view.JDialogTerminoaGehitu.repaint();
                break;
            
            case "HIZTEGIA IMPRIMATU":
                //JTextAreaHiztegiaIkusi.setEnabled(true);
                
                JTextAreaHiztegiaIkusi.setText("a");
                //JTextAreaHiztegiaIkusi.setEnabled(false);
                
                JTextAreaHiztegiaIkusi.setEnabled(true);
                JTextAreaHiztegiaIkusi.setEditable(false);
                JTextAreaHiztegiaIkusi.setSelectedTextColor(Color.RED);
                model.terminoakImprimatu();
                
                JTextAreaHiztegiaIkusi.setText(model.verRegistrosTodos());
                
                //System.out.println(model.verRegistrosTodos());
                break;
            
            case "HIZTEGIA JTABLEAN":
                //JDialog2Table.setEnabled(true);
                view.JDialog2Table.setSize(600, 600);
                view.JDialog2Table.setResizable(true);
                view.JDialog2Table.setVisible(true);
                view.JDialogTerminoaGehitu.setTitle("HITZA GEHITU");
                
                break;
            */  
            case "GEHITU":
                /*
                System.out.println("'GEHITU' botoia sakatu duzu. ");
                Terminoa t1 = new Terminoa(view.JTextFieldHitzaEus.getText(), view.JTextFieldHitzaGaz.getText());
                //Terminoa t1 = new Terminoa(Integer.valueOf(view.JTextFieldId.getText()), view.JTextFieldHitzaEus.getText(), view.JTextFieldHitzaGaz.getText());
                view.JTextFieldHitzaEus.setText("");
                view.JTextFieldHitzaGaz.setText("");
                view.JTextFieldId.setText("");
                model.terminoaGehitu2(t1);
                */
                break;
            
            case "ATZERA":
                //view.JDialogTerminoaGehitu.dispose();
                break;
            
            case "IRTEN":
                //JTextAreaHiztegiaIkusi.setEnabled(true);
                view.dispose();
                break;
            
            case "Hitz hau bakarrik":
                //JTextFieldEusUser.setEnabled(true);
                //JTextFieldGazUser.setEnabled(true);
                break;
            
            case "CLIENTES":
                System.out.println("a");
                //model.terminoakImprimatu();
                break;
                
            case "GEHITU CLIENT":
                /*
                System.out.println("'ADD' botoia sakatu duzu. ");
                Terminoa nuevoCliente = new Terminoa(view.JTextFieldNombre.getText(), 
                        view.JTextFieldApellido.getText(),
                        Integer.valueOf(view.JTextFieldEdad.getText()),
                        Integer.valueOf(view.JTextFieldTelefono.getText()));
                view.JTextFieldNombre.setText("");
                view.JTextFieldApellido.setText("");
                view.JTextFieldEdad.setText("");
                view.JTextFieldTelefono.setText("");
                model.terminoaGehitu2(nuevoCliente);
                break;
            */
            
            case "ITZULI":
                /*
                String apellidoUser = view.JTextFieldApellidoUser.getText();
                int edadUser = Integer.valueOf(view.JTextFieldEdadUser.getText());
                System.out.println(model.traducirPalabra(apellidoUser, edadUser));
                */
                //JTextFieldGazUser
                /*
                String enEuskera = JTextFieldEusUser.getText();
                System.out.println(model.traducirPalabra(enEuskera));
                JTextFieldEusUser.setText("");
                                
                view.JTextFieldGazUser.setText(model.traducirPalabra(enEuskera));
                //view.JTextFieldGazUser.setText(palabraTraducida);
                */
                break;
            
        }
    }
    
    
    
}

