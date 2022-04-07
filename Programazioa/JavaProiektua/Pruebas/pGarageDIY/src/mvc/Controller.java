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
        View.JButtonSaveUsersFile.addActionListener(listener);   //textual reports -> botón para guardar el contenido del text area en un fichero

        View.JButtonViewGra.addActionListener(listener);  //graphical reports -> ver contenido (en gráficos) de los informes
        View.JButtonClean.addActionListener(listener);  //graphical reports -> limpiar contenido del textArea
        View.JButtonGoBack.addActionListener(listener);   //graphical report -> volcer al menú inicial
        
        View.JButtonClear.addActionListener(listener);  //textual reports -> clear all the fields
        
        View.JButtonReturnFromTable.addActionListener(listener);    //dialogTable -> button to return to Textual Reports' section
        
        
        View.JButtonLoginToSave.addActionListener(listener);    //textual reports -> log in as a WORKER to continue (download data)
        View.JButtonValidateWorker.addActionListener(listener); //textual reports -> validate worker's login to unlock the download buttons
        View.JButtonSaveUsersFile.addActionListener(listener);  //download -> save all users
        View.JButtonSaveCatalog.addActionListener(listener);    //download -> save catalog of products (all of them)
        View.JButtonSaveEntireStaff.addActionListener(listener);    //download -> save all garage's staff data
        
        

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
                View.JFrameTextReports.setSize(900, 800);   //600,400   //900, 600
                View.JFrameTextReports.setResizable(false);

                break;
            case "Graphicall Reports":
                System.out.println("Wait... The Graphical Report's section is loading. \n");
                View.JFrameGraphicalReports.setVisible(true);
                View.JFrameGraphicalReports.setTitle("Create a New Customer!");
                View.JFrameGraphicalReports.setSize(600, 356);  //600, 356
                View.JFrameGraphicalReports.setResizable(false);
                break;

            case "View Txostena":   //txosten textualak ikusi
                JTextAreaTxostenak.setText("");
                if (JComboBoxTxostenak.getSelectedIndex() == 0) {
                    JTextAreaTxostenak.setText("");
                    System.out.println("No report selected");

                } else if (JComboBoxTxostenak.getSelectedIndex() == 1) {
                    JTextFieldTodaysDate.setEditable(true);
                    JTextFieldTodaysDate.setEnabled(true);
                    
                    
                    
                    System.out.println("Today's occupation report selected.");
                    //JTextAreaTxostenak.setText("Searching the occupation of " + "'" + JTextFieldTodaysDate.getText() + "'" + ". ");
                    
                } else if (JComboBoxTxostenak.getSelectedIndex() == 2) {
                                        
                    if (CheckboxViewOnTable.getState() == true) {
                        JDialogTextual.setSize(600, 600);
                        JDialogTextual.setVisible(true);
                        view.JTableUnderage.setVisible(true);
                        
                        view.JTableUnderage.setModel(new UnderageTableModela(Model.underAge()));

                        //view.JTableUnderage.setModel(dataModel);
                        
                        //Jtable -> model -> custom code -> new UnderageTableModela(Model.underAge())
                        System.out.println("The requested data is being represented in a table. ");
                        
                    } else if (CheckboxViewOnTable.getState() == false) {
                        for (int i = 0; i < model.underAge().size(); ++i) {
                            JTextAreaTxostenak.setText(JTextAreaTxostenak.getText() + model.underAge().get(i).toString());
                        }
                    } else {
                        JTextAreaTxostenak.setText("Something went wrong... Please, close this tab and try again. ");
                    }

                    System.out.println("underage");

                } else if (JComboBoxTxostenak.getSelectedIndex() == 3) {
                    //ChoiceCustomer.setEnabled(false);
                    
                    if (CheckboxViewOnTable.getState() == true) {
                        JDialogTextual.setSize(900, 600);
                        JDialogTextual.setVisible(true);
                        view.JTableUnderage.setVisible(true);
                        
                        //view.JTableUnderage.setModel(new DesiredPurchaseTableModela(Model.purchasesOfDesiredCustomer(JTextFieldUsernameUser.getText())));
                        view.JTableUnderage.setModel(new DesiredPurchaseTableModela(model.purchasesOfDesiredCustomer(ChoiceCustomer.getSelectedItem())));
                        System.out.println(ChoiceCustomer.getSelectedItem());
                        
                        
                        System.out.println("The requested data is being represented in a table. ");
                        
                    } else if (CheckboxViewOnTable.getState() == false) {
                        /*for (int i = 0; i < model.purchasesOfDesiredCustomer(JTextFieldUsernameUser.getText()).size(); ++i) {
                            JTextAreaTxostenak.setText(JTextAreaTxostenak.getText() + model.purchasesOfDesiredCustomer(JTextFieldUsernameUser.getText()).get(i).toStringForTextArea());
                        }*/
                        
                        for (int i = 0; i < model.purchasesOfDesiredCustomer(ChoiceCustomer.getSelectedItem()).size(); ++i) {
                            JTextAreaTxostenak.setText(JTextAreaTxostenak.getText() + model.purchasesOfDesiredCustomer(ChoiceCustomer.getSelectedItem()).get(i).toStringForTextArea());
                        }
                        
                    } else {
                        JTextAreaTxostenak.setText("Something went wrong... Please, close this tab and try again. ");
                    }

                } else if (JComboBoxTxostenak.getSelectedIndex() == 4) {
                    //JSpinnerCustomerId.setEnabled(true);
                    JTextFieldTodaysDate.setEditable(false);    JTextFieldTodaysDate.setEnabled(false);
                    
                    System.out.println("desired customer's purchases");

                } else if (JComboBoxTxostenak.getSelectedIndex() == 5) {
                    JTextFieldTodaysDate.setEditable(false);    JTextFieldTodaysDate.setEnabled(false);
                    
                    if (CheckboxViewOnTable.getState() == true) {
                        JDialogTextual.setSize(600, 600);
                        JDialogTextual.setVisible(true);
                        view.JTableUnderage.setVisible(true);
                        
                        view.JTableUnderage.setModel(new SaleTrackTableModela(Model.mostSoldProducts()));
                        
                        System.out.println("The requested data is being represented in a table. ");
                        
                    } else if (CheckboxViewOnTable.getState() == false) {
                        for (int i = 0; i < model.mostSoldProducts().size(); ++i) {
                            JTextAreaTxostenak.setText(JTextAreaTxostenak.getText() + model.mostSoldProducts().get(i).toString());
                        }
                    } else {
                        JTextAreaTxostenak.setText("Something went wrong... Please, close this tab and try again. ");
                    }
                    
                } else {
                    JTextFieldTodaysDate.setEditable(false);
                    JTextFieldTodaysDate.setEnabled(false);
                    JSpinnerCustomerId.setEnabled(false);
                }

                System.out.println("Ver informes. \n");
                break;
            
            case "Clear":
                JComboBoxTxostenak.setSelectedIndex(0);
                CheckboxViewOnTable.setState(false);
                JSpinnerCustomerId.setValue(0);
                ChoiceCustomer.select(0);
                JTextAreaTxostenak.setText("");
                JTextFieldTodaysDate.setText("");
                
                break;
            
            case "Return to textual reports":
                view.JDialogTextual.dispose();
                break;
            
            case "Validate":
                for (int i = 0; i < Model.getAllWorkers().size(); ++i) {
                    if ((Model.getAllWorkers().get(i).getName().toLowerCase().equals(JTextFieldWorkerNameUser.getText().toLowerCase())) 
                            && (Model.getAllWorkers().get(i).getSurname().toLowerCase().equals(JTextFieldWorkerSurnameUser.getText().toLowerCase()))
                            && (Model.getAllWorkers().get(i).getPassword().equals(String.valueOf(JPasswordFieldPasswordUser.getPassword())))) {
                        
                        JTextAreaSaveProcessInstructor.setText("Loged as: " + Model.getAllWorkers().get(i).getName() + " " + Model.getAllWorkers().get(i).getSurname());
                        JButtonSaveUsersFile.setEnabled(true);
                        JButtonSaveCatalog.setEnabled(true);
                        JButtonSaveEntireStaff.setEnabled(true);
                        JButtonSaveCabin.setEnabled(true);
                        
                        JTextAreaSaveProcessInstructor.setEnabled(true);
                        break;
                        
                    } else {
                        JTextAreaSaveProcessInstructor.setText("Login failed... Wrong name, surname or password. ");
                        JButtonSaveUsersFile.setEnabled(false);
                        JButtonSaveCatalog.setEnabled(false);
                        JButtonSaveEntireStaff.setEnabled(false);
                    }
                }
                //&& (Model.getAllCustomers().get(i).getPassword().equals(String.valueOf(JPasswordFieldPasswordUser.getPassword())))
                
                break;
            
            case "Customer Registration":
                String strCustomersHistory = "";
                
                for (int i = 0; i < Model.getAllCustomers().size(); ++i) {
                    strCustomersHistory = strCustomersHistory + Model.getAllCustomers().get(i).toStringExtended();
                }
                Model.saveCustomersToFile(strCustomersHistory);
                JTextAreaSaveProcessInstructor.setText("All registered customers' data is being saved on a file. ");
                break;
            
            case "Download Catalog":
                String strProductCatalog = "";
                
                for (int i = 0; i < Model.getAllProducts().size(); ++i) {
                    strProductCatalog = strProductCatalog + Model.getAllProducts().get(i).toStringTextArea();
                }
                Model.saveCatalogToFile(strProductCatalog);
                JTextAreaSaveProcessInstructor.setText("A detailed catalog of all our products will be ready soon." + "\n" + "Downloading... Saved!");
                break;
            
            case "Entire Staff":
                String strGarageStaff = "";
                for (int i = 0; i < Model.getAllWorkers().size(); ++i) {
                    strGarageStaff = strGarageStaff + Model.getAllWorkers().get(i).toStringExtended();
                }
                Model.saveStaffToFile(strGarageStaff);
                JTextAreaSaveProcessInstructor.setText("The file with all staff's data (no passwords shown) is already saved. " + "\n" + "Downloading... Saved!");
                break;
            
            case "Go back": //menu nagusira bueltatu
                View.JFrameTextReports.dispose();
                break;
            
            case "Login":
                JButtonValidateWorker.setEnabled(true);
                JTextFieldWorkerNameUser.setEnabled(true); JTextFieldWorkerNameUser.setEditable(true);
                JTextFieldWorkerSurnameUser.setEnabled(true);  JTextFieldWorkerSurnameUser.setEditable(true);
                JPasswordFieldPasswordUser.setEnabled(true);   JPasswordFieldPasswordUser.setEditable(true);
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
