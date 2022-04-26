/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mvc;

import forGraphics.Rectangle;
import myClasses.*;
import java.awt.Color;
import java.awt.Dimension;
import java.awt.Graphics;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.table.DefaultTableModel;
import static mvc.View.*;
//import static mvc.View.*;
//import model.Model;

/**
 *
 * @author arceredillo.adrian
 */
public class Controller implements ActionListener {
    
    //variables to modify/change the color of the terminal's output text/data.
    public static final String ANSI_PURPLE_BACKGROUND = "\u001B[45m";
    public static final String ANSI_RED = "\u001B[3m";

    private Model model;
    private View view;
    private Graphics gGraphics;

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
        
        View.JButtonClear.addActionListener(listener);  //textual reports -> clear all the fields
        
        View.JButtonReturnFromTable.addActionListener(listener);    //dialogTable -> button to return to Textual Reports' section
                
        View.JButtonLoginToSave.addActionListener(listener);    //textual reports -> log in as a WORKER to continue (download data)
        View.JButtonLogOut.addActionListener(listener); //textual reports -> logout from the previously logged session
        
        View.JButtonValidateWorker.addActionListener(listener); //textual reports -> validate worker's login to unlock the download buttons
        View.JButtonSaveUsersFile.addActionListener(listener);  //download -> save all users
        View.JButtonSaveCatalog.addActionListener(listener);    //download -> save catalog of products (all of them)
        View.JButtonSaveEntireStaff.addActionListener(listener);    //download -> save all garage's staff data
        View.JButtonSaveCabin.addActionListener(listener);      //download -> save on a file the information of the garage's cabins
        
        
        View.JButtonStartGra.addActionListener(listener);  //graphical reports -> ver contenido (en gráficos) de los informes
        View.JButtonClean.addActionListener(listener);  //graphical reports -> limpiar contenido del textArea
        View.JButtonGoBack.addActionListener(listener);   //graphical report -> volcer al menú inicial
        View.JButtonViewGraph.addActionListener(listener);  //graphic reports -> view selected report
        
        View.JCheckBoxBestTwoCustomers.addActionListener(listener); //graphic reports -> best 2 customers (reservations)
        
        
        /*
        View.JRadioButtonBestTwoCustomers.addActionListener(listener);  //graphical reports -> data of the best 2 customers (in terms of reservations)
        View.JRadioButtonBestTwo.addActionListener(listener);
        */
        
        
        
        
        

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
                View.JFrameTextReports.setSize(750, 675);   //600,400   //900, 600
                View.JFrameTextReports.setResizable(false);

                break;
            case "Graphicall Reports":
                System.out.println("Wait... The Graphical Report's section is loading. \n");
                View.JFrameGraphicalReports.setVisible(true);
                View.JFrameGraphicalReports.setTitle("Create a New Customer!");
                View.JFrameGraphicalReports.setSize(900, 606);  //600, 356
                View.JFrameGraphicalReports.setResizable(false);
                
                
                break;

            case "View Txostena":   //txosten textualak ikusi
                JTextAreaTxostenak.setText("");
                if (JComboBoxTxostenak.getSelectedIndex() == 0) {
                    JTextAreaTxostenak.setText("");
                    JTextAreaTxostenak.setText("Please, select a report and then press the 'View' button. ");
                    //System.out.println("No report selected");

                } else if (JComboBoxTxostenak.getSelectedIndex() == 1) {
                    JTextFieldTodaysDate.setEditable(true);
                    JTextFieldTodaysDate.setEnabled(true);
                    
                    System.out.println("Today's occupation report selected.");
                    //JTextAreaTxostenak.setText("Searching the occupation of " + "'" + JTextFieldTodaysDate.getText() + "'" + ". ");
                    
                } else if (JComboBoxTxostenak.getSelectedIndex() == 2) {
                                        
                    if (CheckboxViewOnTable.getState() == true) {
                        JDialogTextual.setSize(600, 600);
                        JDialogTextual.setVisible(true);
                        view.JTableDataOnTable.setVisible(true);
                        
                        view.JTableDataOnTable.setModel(new UnderageTableModela(Model.underAgeCustomers()));

                        //view.JTableUnderage.setModel(dataModel);
                        
                        //Jtable -> model -> custom code -> new UnderageTableModela(Model.underAgeCustomers())
                        System.out.println("The requested data is being represented in a table. ");
                        
                    } else if (CheckboxViewOnTable.getState() == false) {
                        for (int i = 0; i < model.underAgeCustomers().size(); ++i) {
                            JTextAreaTxostenak.setText(JTextAreaTxostenak.getText() + model.underAgeCustomers().get(i).toString());
                            //JTextAreaTxostenak.setText(JTextAreaTxostenak.getText() + model.adultCustomers().get(i).toString());
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
                        view.JTableDataOnTable.setVisible(true);
                        
                        //view.JTableUnderage.setModel(new DesiredPurchaseTableModela(Model.purchasesOfDesiredCustomer(JTextFieldUsernameUser.getText())));
                        view.JTableDataOnTable.setModel(new DesiredPurchaseTableModela(model.purchasesOfDesiredCustomer(ChoiceCustomer.getSelectedItem())));
                        System.out.println(ChoiceCustomer.getSelectedItem());
                        
                        
                        System.out.println("The requested data is being represented in a table. ");
                        
                    } else if (CheckboxViewOnTable.getState() == false) {
                        
                        if (view.ChoiceCustomer.getSelectedIndex() == 0) {
                            //view.CheckboxViewOnTable.setEnabled(false);
                            System.out.println("Please, select a customer to continue! ");
                            JTextAreaTxostenak.setText("Please, select a customer to continue! ");
                            //JTextAreaTxostenak.setText("Please, select a customer to continue! ");
                        } else {
                            //view.CheckboxViewOnTable.setEnabled(true);
                            for (int i = 0; i < model.purchasesOfDesiredCustomer(ChoiceCustomer.getSelectedItem()).size(); ++i) {
                                JTextAreaTxostenak.setText(JTextAreaTxostenak.getText() + model.purchasesOfDesiredCustomer(ChoiceCustomer.getSelectedItem()).get(i).toStringForTextArea());
                            }
                        }
                    } else {
                        JTextAreaTxostenak.setText("Something went wrong... Please, close this tab and try again. ");
                    }

                } else if (JComboBoxTxostenak.getSelectedIndex() == 4) {
                    for (int i = 0; i < Model.rushHourCabin().size(); ++i) {
                        JTextAreaTxostenak.setText(JTextAreaTxostenak.getText() + Model.rushHourCabin().get(i));
                    }

                } else if (JComboBoxTxostenak.getSelectedIndex() == 5) {
                    JTextFieldTodaysDate.setEditable(false);    JTextFieldTodaysDate.setEnabled(false);
                    
                    if (CheckboxViewOnTable.getState() == true) {
                        JDialogTextual.setSize(600, 600);
                        JDialogTextual.setVisible(true);
                        view.JTableDataOnTable.setVisible(true);
                        
                        view.JTableDataOnTable.setModel(new SaleTrackTableModela(Model.mostSoldProducts()));
                        
                        System.out.println("The requested data is being represented in a table. ");
                        
                    } else if (CheckboxViewOnTable.getState() == false) {
                        for (int i = 0; i < model.mostSoldProducts().size(); ++i) {
                            JTextAreaTxostenak.setText(JTextAreaTxostenak.getText() + model.mostSoldProducts().get(i).toString());
                        }
                    } else {
                        JTextAreaTxostenak.setText("Something went wrong... Please, close this tab and try again. ");
                    }
                    
                } else if (JComboBoxTxostenak.getSelectedIndex() == 6) {
                    System.out.println("Three Least Frequent Customers");
                    
                    if (CheckboxViewOnTable.getState() == true) {
                        JDialogTextual.setSize(900, 600);
                        JDialogTextual.setVisible(true);
                        view.JTableDataOnTable.setVisible(true);
                        
                        view.JTableDataOnTable.setModel(new FrequentCustomerTableModel(Model.oldestThreeCustomersBooking()));
                        
                    } else if (CheckboxViewOnTable.getState() == false) {
                        for (int i = 0; i < model.oldestThreeCustomersBooking().size(); ++i) {
                            JTextAreaTxostenak.setText(JTextAreaTxostenak.getText() + model.oldestThreeCustomersBooking().get(i).toString());
                        }
                    } else {
                        JTextAreaTxostenak.setText("Something went wrong... Please, close this tab and try again. ");
                    }
                    
                    Model.oldestThreeCustomersBooking();
                    
                    
                }
                
                else {
                    JTextFieldTodaysDate.setEditable(false);
                    JTextFieldTodaysDate.setEnabled(false);
                    JSpinnerCustomerId.setEnabled(false);
                }
                
                //System.out.println("\nData provided by DIY HALAB garage! \n");
                System.out.println(ANSI_PURPLE_BACKGROUND + "Data provided by DIY HALAB garage!" + ANSI_RED + "\n" + "\n----------------");
                break;
            
            case "Clear":
                
                CheckboxViewOnTable.setEnabled(true);
                
                JComboBoxTxostenak.setSelectedIndex(0);
                CheckboxViewOnTable.setState(false);
                JSpinnerCustomerId.setValue(0);
                ChoiceCustomer.select(0);
                JTextAreaTxostenak.setText("");
                JTextFieldTodaysDate.setText("");
                
                break;
            
            case "Return to textual reports":
                view.JDialogTextual.dispose();
                view.CheckboxViewOnTable.setState(false);
                view.JComboBoxTxostenak.setSelectedIndex(0);
                break;
            
            
            
            case "Validate":
                for (int i = 0; i < Model.getAllWorkers().size(); ++i) {
                    if ((Model.getAllWorkers().get(i).getName().toLowerCase().equals(JTextFieldWorkerNameUser.getText().toLowerCase())) 
                            && (Model.getAllWorkers().get(i).getSurname().toLowerCase().equals(JTextFieldWorkerSurnameUser.getText().toLowerCase()))
                            && (Model.getAllWorkers().get(i).getPassword().equals(String.valueOf(JPasswordFieldPasswordUser.getPassword())))) {
                        
                        JTextAreaSaveProcessInstructor.setText("Loged as: " + Model.getAllWorkers().get(i).getName() + " " + Model.getAllWorkers().get(i).getSurname());
                        JButtonLogOut.setEnabled(true);
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
                        JButtonSaveCabin.setEnabled(false);
                    }
                }
                //&& (Model.getAllCustomers().get(i).getPassword().equals(String.valueOf(JPasswordFieldPasswordUser.getPassword())))
                
                break;
            
            case "Logout":
                JButtonLogOut.setEnabled(false);
                JTextFieldWorkerNameUser.setText(""); JTextFieldWorkerNameUser.setEnabled(false); JTextFieldWorkerNameUser.setEditable(false);
                JTextFieldWorkerSurnameUser.setText(""); JTextFieldWorkerSurnameUser.setEnabled(false);  JTextFieldWorkerSurnameUser.setEditable(false);
                JPasswordFieldPasswordUser.setText(""); JPasswordFieldPasswordUser.setEnabled(false);   JPasswordFieldPasswordUser.setEditable(false);
                
                JButtonValidateWorker.setEnabled(false);
                
                JTextAreaSaveProcessInstructor.setText(""); JTextAreaSaveProcessInstructor.setEnabled(false); JTextAreaSaveProcessInstructor.setEditable(false);
                
                JButtonSaveUsersFile.setEnabled(false);
                JButtonSaveCatalog.setEnabled(false);
                JButtonSaveEntireStaff.setEnabled(false);
                JButtonSaveCabin.setEnabled(false);
                
                break;
            
            case "Customer Registration":
                String strCustomersHistory = "";
                for (int i = 0; i < Model.getAllCustomers().size(); ++i) {
                    strCustomersHistory = strCustomersHistory + Model.getAllCustomers().get(i).toStringExtended();
                }
                Model.saveCustomersToFile(strCustomersHistory);
                JTextAreaSaveProcessInstructor.setText("Downloading all registered customers' data on a file." + "\n\n" + "Successfully Completed!");
                break;
            
            case "Download Catalog":
                String strProductCatalog = "";
                for (int i = 0; i < Model.getAllProducts().size(); ++i) {
                    strProductCatalog = strProductCatalog + Model.getAllProducts().get(i).toStringTextArea();
                }
                Model.saveCatalogToFile(strProductCatalog);
                JTextAreaSaveProcessInstructor.setText("A detailed catalog of all our products will be ready soon." + "\n\n" + "Downloading... \nSaved!");
                break;
            
            case "Entire Staff":
                String strGarageStaff = "";
                for (int i = 0; i < Model.getAllWorkers().size(); ++i) {
                    strGarageStaff = strGarageStaff + Model.getAllWorkers().get(i).toStringExtended();
                }
                Model.saveStaffToFile(strGarageStaff);
                JTextAreaSaveProcessInstructor.setText("Downloading all staff's data (except passwords)..." + "\n\n" + "Completed!!");
                break;
            
            case "Cabin Structure":
                String strAllCabins = "";
                for (int i = 0; i < Model.getAllCabins().size(); ++i) {
                    strAllCabins = strAllCabins + Model.getAllCabins().get(i).toStringCabinData();
                }
                Model.saveCabinsToFile(strAllCabins);
                JTextAreaSaveProcessInstructor.setText("Basic information of Garage's cabins is saved on file. " + "\n\n" + "Go check it!");
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
            
            

            case "Start Graphics":   //txosten grafikoak -> ver datos en forma de gráficos
                System.out.println("hola 111"); 
                View.JFrameGraphicalReports.setSize(900, 906);  //600, 356
                //Model.graphicDrawing();
                
                
                
                break;
            
            case "View Graphic":
                View.JTextAreaGraphics.setText("");
                View.JTextAreaGraphics.setEditable(false);
                JButtonViewGraph.setEnabled(false);
                
                if (JCheckBoxBestTwoCustomers.isSelected()) {
                    
                    System.out.println("mejores");
                                        
                    Model.drawBest2original();
                    
                    //disable the checkbox of all reports until the user presses the "Clean" button
                    JCheckBoxBestTwoCustomers.setEnabled(false); JCheckBoxBestTwoCustomers.setSelected(false);
                    JCheckBoxSortAge.setEnabled(false);
                    
                    JButtonStartGra.setEnabled(false);
                    
                } else if (JCheckBoxSortAge.isSelected()) {
                    
                    Model.drawSortByAge();
                    
                    //disable the checkbox of all reports until the user presses the "Clean" button
                    JCheckBoxBestTwoCustomers.setEnabled(false); JCheckBoxBestTwoCustomers.setSelected(false);
                    JCheckBoxSortAge.setEnabled(false);
                    
                    JButtonStartGra.setEnabled(false);
                }
                else {
                    System.out.println("no mejores");
                    View.JFrameGraphicalReports.repaint();
                }
                
                
                JButtonClean.setEnabled(true);
                break;
            
            case "Clean":   //txosten grafikoak -> vaciar el contenido del text area
                View.JTextAreaGraphics.setText("");
                JButtonViewGraph.setEnabled(true);
                
                JCheckBoxBestTwoCustomers.setSelected(false);
                JCheckBoxBestTwoCustomers.setEnabled(true);
                
                JCheckBoxSortAge.setSelected(false);
                JCheckBoxSortAge.setEnabled(true);
                
                JButtonStartGra.setEnabled(true);
                /*View.JFrameGraphicalReports.repaint();
                JLabelReportANumReservations.setVisible(false);
                JLabelReportATotalPaid.setVisible(false); 
                JLabelReportABookingTime.setVisible(false);
                
                JRadioButtonBestTwoCustomers.setSelected(false);
                ButtonGroupGraphReports.clearSelection();*/
                
                Model.clearGraphicFrame();
                
                //repaint();
                break;
            case "Go back to start":
                //View.JFrameGraphicalReports.dispose();
                
                View.JFrameGraphicalReports.setDefaultCloseOperation(EXIT_ON_CLOSE);
                break;
            
            case "BestTwoCustomers":
                //String premiumCustomers = "";
                System.out.println("Testing... ");
                //Model.clearGraphicFrame();
                View.JFrameGraphicalReports.setSize(900, 906);
                
                Model.drawBest2original();
                
                break;
            
            case "Best 2":
                System.out.println("testing 2");
                
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
