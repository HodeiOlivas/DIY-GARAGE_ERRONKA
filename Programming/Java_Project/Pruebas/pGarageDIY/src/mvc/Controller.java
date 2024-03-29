/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mvc;

import myClasses.*;
import java.awt.Dimension;
import java.awt.Graphics;
import java.awt.Image;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javafx.scene.paint.Color;
import javax.swing.ImageIcon;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
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
        
        //--------------------------//
        View.JButtonGoTxostenak.addActionListener(listener);        //inicio -> button to go to the TEXTUAL report's section 
        View.JButtonGoGraphicall.addActionListener(listener);       //inicio -> button to go to the GRAPHIC report's section 
        View.JButtonVisitWebsite.addActionListener(listener);       //inicio -> button to visit the website
        
        View.JButtonPrintTxosten.addActionListener(listener);       //textual reports -> button to print/view the data
        View.JButtonReturnStart.addActionListener(listener);        //textual reports -> button to return to the starting/main menu
        
        View.JButtonClear.addActionListener(listener);              //textual reports -> clear all the fields
        View.JButtonReturnFromTable.addActionListener(listener);    //dialogTable -> button to return to Textual Reports' section
                
        View.JButtonLoginToSave.addActionListener(listener);        //textual reports -> log in as a WORKER to continue (download data)
        View.JButtonLogOut.addActionListener(listener);             //textual reports -> logout from the previously logged session
        
        View.JButtonValidateWorker.addActionListener(listener);     //textual reports -> validate worker's login to unlock the download buttons
        View.JButtonSaveUsersFile.addActionListener(listener);      //download -> save all users
        View.JButtonSaveCatalog.addActionListener(listener);        //download -> save catalog of products (all of them)
        View.JButtonSaveEntireStaff.addActionListener(listener);    //download -> save all garage's staff data
        View.JButtonSaveCabin.addActionListener(listener);          //download -> save on a file the information of the garage's cabins
        
        
        View.JButtonStartGra.addActionListener(listener);           //graphical reports -> ver contenido (en gráficos) de los informes
        View.JButtonClean.addActionListener(listener);              //graphical reports -> limpiar contenido del textArea
        View.JButtonGoBack.addActionListener(listener);             //graphical report -> volcer al menú inicial
        View.JButtonViewGraph.addActionListener(listener);          //graphic reports -> view selected report
        
        View.JCheckBoxBestTwoCustomers.addActionListener(listener); //graphic reports -> best 2 customers (reservations)
        View.JCheckBoxSortAge.addActionListener(listener);          //graphic reports -> represent graphically the difference between underage and adult customers
        View.JCheckBoxMonthlyOccupancy.addActionListener(listener); //graphic reports -> represent graphically the number of reservations made in each month
        
        View.JCheckBoxViewGraphicOnTable.addActionListener(listener);   //graphic reports -> show on a table the data of the report
        View.JButtonReturnToGraphic.addActionListener(listener);        //graphic reports -> button to close the table's dialog and return to Graphic section
                
        View.JRadioButtonFirst.addActionListener(listener);                 //graphic reports -> radio button to show FIRST BEST CUSTOMER's data
        View.JRadioButtonSecond.addActionListener(listener);                //graphic reports -> radio button to show SECOND BEST CUSTOMER's data
        View.JRadioButtonBestTwoCustomersFull.addActionListener(listener);  //graphic reports -> radio button to show the data of the TWO BEST CUSTOMER
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        String actionCommand = e.getActionCommand();
        //listenerrak entzun dezakeen eragiketa bakoitzeko. Konponenteek 'actionCommad' propietatea daukate
                
        switch (actionCommand) {
            case "Visit Website":
                Model.visitWebpage();
                //model.terminoakImprimatu();
                break;
            case "Textual Reports":
                
                //Graphicall Reports
                View.JButtonViewGraph.setEnabled(false);
                View.JButtonClean.setEnabled(false);
                
                System.out.println("Wait... The Textual Report's section is loading. \n");
                View.JFrameTextReports.setVisible(true);
                
                View.JFrameTextReports.setTitle("Manage of Textual Reports!");
                View.JFrameTextReports.setSize(750, 675);   //600,400   //900, 600
                View.JFrameTextReports.setResizable(false);
                
                break;
            case "Graphicall Reports":
                System.out.println("Wait... The Graphical Report's section is loading. \n");
                
                /*
                View.JCheckBoxBestTwoCustomers.setEnabled(false);
                View.JCheckBoxSortAge.setEnabled(false);
                View.JCheckBoxUnknownYet.setEnabled(false);
                View.JCheckBoxMonthlyOccupancy.setEnabled(false);
                */
                
                View.JFrameGraphicalReports.setVisible(true);
                View.JFrameGraphicalReports.setTitle("Manage of Graphic Reports!");
                //View.JFrameGraphicalReports.setSize(900, 606);  //600, 356
                View.JFrameGraphicalReports.setSize(900, 500);  //600, 356
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
                    
                    if (CheckboxViewOnTable.getState() == true) {
                        JDialogTextual.setSize(600, 600);
                        JDialogTextual.setVisible(true);
                        view.JTableDataOnTable.setVisible(true);
                        
                        view.JTableDataOnTable.setModel(new OccupationTableModel(Model.reservationsOfEachMonth()));

                        //view.JTableUnderage.setModel(dataModel);
                        
                        //Jtable -> model -> custom code -> new UnderageTableModela(Model.underAgeCustomers())
                        System.out.println("The requested data is being represented in a table. ");
                        
                    } else if (CheckboxViewOnTable.getState() == false) {
                        for (int i = 0; i < model.reservationsOfEachMonth().size(); ++i) {
                            JTextAreaTxostenak.setText(JTextAreaTxostenak.getText() + model.reservationsOfEachMonth().get(i).toString());
                            //JTextAreaTxostenak.setText(JTextAreaTxostenak.getText() + model.adultCustomers().get(i).toString());
                        }
                    } else {
                        JTextAreaTxostenak.setText("Something went wrong... Please, close this tab and try again. ");
                    }
                    
                    //view.JTableDataOnTable.setModel(new UnderageTableModela(Model.underAgeCustomers()));
                    
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
                        JDialogTextual.setSize(800, 600);
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
            
            

            case "Start Graphics":
                View.JFrameGraphicalReports.setSize(900, 906);  //600, 356
                View.JButtonViewGraph.setEnabled(true);
                View.JButtonClean.setEnabled(true);
                View.JCheckBoxViewGraphicOnTable.setEnabled(true);
                
                View.JCheckBoxBestTwoCustomers.setSelected(false);
                View.JCheckBoxSortAge.setSelected(false);
                View.JCheckBoxMonthlyOccupancy.setSelected(false);
                
                //View.JLabelAnimatedGif.setVisible(false);
                
                /*
                View.JCheckBoxBestTwoCustomers.setEnabled(true);
                View.JCheckBoxSortAge.setEnabled(true);
                View.JCheckBoxUnknownYet.setEnabled(true);
                View.JCheckBoxMonthlyOccupancy.setEnabled(true);
                
                View.JButtonViewGraph.setEnabled(true);
                View.JButtonClean.setEnabled(true);
                */
                break;
            
            case "View Graphic":
                                
                View.JTextAreaGraphics.setText("");
                View.JTextAreaGraphics.setEditable(false);
                JButtonViewGraph.setEnabled(true);
                
                View.JButtonViewGraph.setEnabled(false);    View.JButtonViewGraph.setSelected(false);
                
                if (!(JCheckBoxBestTwoCustomers.isSelected() || JCheckBoxSortAge.isSelected() || JCheckBoxMonthlyOccupancy.isSelected())) {
                    View.JTextAreaGraphics.setText("No report selected. Please choose one and then press the 'View' button. ");
                    JButtonViewGraph.setEnabled(true);
                }
                
                
                if (JCheckBoxBestTwoCustomers.isSelected()) {
                    View.JRadioButtonFirst.setVisible(true);                   View.JRadioButtonFirst.setEnabled(true); 
                    View.JRadioButtonSecond.setVisible(true);                  View.JRadioButtonSecond.setEnabled(true);
                    View.JRadioButtonBestTwoCustomersFull.setVisible(true);     View.JRadioButtonBestTwoCustomersFull.setEnabled(true);
                    
                    if (View.JCheckBoxViewGraphicOnTable.isSelected()) {
                        //JDialogGraphicReports
                        JDialogGraphicReports.setSize(1000, 450);    //600,450
                        JDialogGraphicReports.setVisible(true);
                        View.JTableGraphicInfo.setVisible(true);
                        
                        view.JTableGraphicInfo.setModel(new BestCustomerTableModel(Model.bestCustomers()));
                        //view.JTableDataOnTable.setModel(new OccupationTableModel(Model.reservationsOfEachMonth()));
                        
                    } else {
                        Model.drawBest2TwoCustomersFrame();
                        for (int i = 0; i < Model.bestCustomers().size(); ++i) {
                            View.JTextAreaGraphics.setText(View.JTextAreaGraphics.getText() + Model.bestCustomers().get(i).toStringExtended());  
                        }
                    }
                    
                    //disable the checkbox of all reports until the user presses the "Clean" button
                    JCheckBoxBestTwoCustomers.setEnabled(false); JCheckBoxBestTwoCustomers.setSelected(true);
                    JCheckBoxSortAge.setEnabled(false);
                    JCheckBoxMonthlyOccupancy.setEnabled(false);
                    
                    JButtonStartGra.setEnabled(false);
                    
                } else if (JCheckBoxSortAge.isSelected()) {
                    
                    if (View.JCheckBoxViewGraphicOnTable.isSelected()) {
                        JTextAreaGraphics.setText("Sorry! This report will be available in tables in future updates ");
                        JOptionPane.showMessageDialog(null,"Sorry, the 'table-version' of the requested report isn't supported yet. "
                                + "\nThis report will be available in tables in future updates. Try to view it "
                                + "\nwithout the 'table' option. \n\n", "Error",JOptionPane.WARNING_MESSAGE);
                        //view.JTableDataOnTable.setModel(new OccupationTableModel(Model.reservationsOfEachMonth()));
                        
                    } else {
                        Model.drawSortByAge();
                        
                    }
                    
                    
                    
                    //disable the checkbox of all reports until the user presses the "Clean" button
                    JCheckBoxBestTwoCustomers.setEnabled(false);    JCheckBoxBestTwoCustomers.setSelected(false);
                    JCheckBoxSortAge.setEnabled(false);             JCheckBoxSortAge.setEnabled(false);
                    JCheckBoxMonthlyOccupancy.setEnabled(false);
                    
                    JButtonStartGra.setEnabled(false);
                    
                } else if (View.JCheckBoxMonthlyOccupancy.isSelected()) {
                    
                    View.JCheckBoxViewGraphicOnTable.setEnabled(true);
                    
                    JCheckBoxBestTwoCustomers.setEnabled(false);    JCheckBoxBestTwoCustomers.setSelected(false);
                    JCheckBoxSortAge.setEnabled(false);             JCheckBoxSortAge.setEnabled(false);
                    JCheckBoxMonthlyOccupancy.setEnabled(false);
                    
                    if (View.JCheckBoxViewGraphicOnTable.isSelected()) {
                        //JDialogGraphicReports
                        View.JDialogGraphicReports.setSize(900, 450);
                        JDialogGraphicReports.setVisible(true);
                        View.JTableGraphicInfo.setVisible(true);
                        
                        view.JTableGraphicInfo.setModel(new OccupationTableModel(Model.reservationsOfEachMonth()));
                        //view.JTableDataOnTable.setModel(new OccupationTableModel(Model.reservationsOfEachMonth()));
                        
                    } else {
                        View.JTextAreaGraphics.setText("NOTE: \n" 
                                + "This report handless the folliwing operations: \n" 
                                + "\t - Get the amount of reservations made on each month \n" 
                                + "\t - Make 3 groups with different amount of reservations \n" 
                                + "\t - Sort the months into groups \n" 
                                + "\t - Count how many months are on each group \n" 
                                + "\t - Show the biggest group represented as a filled group \n" 
                                + "-----------------------------------------------------------------------------------------------------------" 
                                + "\nResume: get the an approximation of the most usual amount of reservations made monthly " 
                                );
                        Model.drawMonthlyOccupation();
                    }
                }  
                JButtonClean.setEnabled(true);
                break;
                        
            case "All Cust RB":
                if (JCheckBoxBestTwoCustomers.isSelected()) {
                    Model.drawBestTwoCustomersFull();
                }
                break;
            
            case "First Cust RB":
                if (JCheckBoxBestTwoCustomers.isSelected()) {
                    Model.drawTheFirstBestCustomer();
                }
                break;
            
            case "Second Cust RB":
                if (JCheckBoxBestTwoCustomers.isSelected()) {
                    Model.drawTheSecondBestCustomer();
                }
                break;
            
            case "Clean":   //txosten grafikoak -> vaciar el contenido del text area
                View.JRadioButtonFirst.setVisible(false);                   View.JRadioButtonFirst.setEnabled(false); 
                View.JRadioButtonSecond.setVisible(false);                  View.JRadioButtonSecond.setEnabled(false);
                View.JRadioButtonBestTwoCustomersFull.setVisible(false);    View.JRadioButtonBestTwoCustomersFull.setEnabled(false);
                
                View.JTextAreaGraphics.setText("");
                JButtonViewGraph.setEnabled(true);
                
                View.JCheckBoxBestTwoCustomers.setSelected(false);      View.JCheckBoxBestTwoCustomers.setEnabled(true);
                View.JCheckBoxSortAge.setSelected(false);               View.JCheckBoxSortAge.setEnabled(true);
                View.JCheckBoxMonthlyOccupancy.setSelected(false);      View.JCheckBoxMonthlyOccupancy.setEnabled(true);
                
                View.JCheckBoxViewGraphicOnTable.setSelected(false);    View.JCheckBoxViewGraphicOnTable.setEnabled(true);
                
                JButtonStartGra.setEnabled(true);
                
                Model.clearGraphicFrame();
                View.JFrameGraphicalReports.repaint();
                break;
            
            case "Go back to start":
                View.JTextAreaGraphics.setText("");
                View.JFrameGraphicalReports.setDefaultCloseOperation(EXIT_ON_CLOSE);
                View.JFrameGraphicalReports.dispose();
                break;
            
            case "BestTwoCustomers":
                System.out.println("Testing... ");
                View.JFrameGraphicalReports.setSize(900, 906);
                
                Model.drawBest2TwoCustomersFrame();
                break;
            
            case "Return To Graphic Section":
                View.JDialogGraphicReports.dispose();
                View.JCheckBoxViewGraphicOnTable.setSelected(false);
                JFrameGraphicalReports.repaint();
                
                break;
            
            
            case "":
                break;
            
            

        }
    }

}
