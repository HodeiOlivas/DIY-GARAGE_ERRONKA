import BasicMethodsToWorkWith
from Reservation import Reservation
from Person import Person
from Customer import Customer
from Worker import Worker
import Func_Reservations
import Funct_Person
from Person import Person


def reservationsMenu():
    choiceReservation = 0
    listReservations = []
    while not (choiceReservation == 4):
        print("\n\t1. Create and Save new reservation: ")
        print("\t2. Delete reservation: ")              #clear the txt, delete the desired reservation from the list, save the list again on the txt
        print("\t3. Read all the reservations: ")       #print/view the content of the txt file
        print("\t4. Go Back ")
        choiceReservation = int(input("\n\tWhat do you want to do about Reservations? "))

        if choiceReservation == 1:
            print()
            eachReservation = Reservation()                        #create the new Reservation
            listReservations.append(eachReservation)               #add it to the Reservation's list
            """
            Try:
                - after the created reservation is added to the list, clear the txt file
                - save on the txt file the whole list of reservations
            """
            Func_Reservations.saveReservation(eachReservation.printReservation(), "reservationInfo.txt")       #save the reservation on a text file (.txt)
            print("--------------------------------")

        elif choiceReservation == 2:
            print()
            print("opcion dos")

        elif choiceReservation == 3:
            print()
            Func_Reservations.readReservations()
            print("--------------------------------")

        elif choice == 4:
            break;



def customersMenu():
    choiceCustomer = 0
    listCustomers = []
    while not (choiceCustomer == 5):
        print("\n\t1. Create a new customer: ")
        print("\t2. Save the customer's list on a FILE: ")
        print("\t3. Delete customer File and List: ")
        print("\t4. Read all the customer's data: ")  # print/view the content of the txt file
        print("\t5. Go Back ")
        choiceCustomer = int(input("\n\tWhat do you want to do about Customer? "))

        if choiceCustomer == 1:
            print()
            eachCustomer = Customer()                        #create the new Customer
            #Funct_Person.saveCustomer(eachCustomer.printExtended(), "customerInfo.txt")
            print()
            listCustomers.append(eachCustomer)                  #add it to the Customer's list
            Funct_Person.viewListCustomers(listCustomers)       #print/view all the Customers of the list
            print("--------------------------------")
            """
            Try:"customerInfo.txt"
                - after the created reservation is added to the list, clear the txt file
                - save on the txt file the whole list of reservations
            """

        elif choiceCustomer == 2:
            #Funct_Person.saveCustomerListOnFile(listCustomers, "customerInfo.txt")
            for cust in listCustomers:
                Funct_Person.saveCustomer(cust.printExtended(), "customerInfo.txt")
            print("--------------------------------")

        elif choiceCustomer == 3:
            Funct_Person.viewListCustomers(listCustomers)           # print/view all the Customers of the list
            Funct_Person.deleteCustomer(listCustomers)
            Funct_Person.viewListCustomers(listCustomers)           # print/view all the Customers of the list
            Funct_Person.clearCustomersFile("customerInfo.txt")     #erase the text file
            for cust in listCustomers:
                #Funct_Person.saveCustomerListAfterChanges(cust.printExtended(), "customerInfo.txt")
                Funct_Person.saveCustomer(cust.printExtended(), "customerInfo.txt")
            print("--------------------------------")

        elif choiceCustomer == 4:
            print("Waiting to read all Customer list's data... ")

        elif choiceCustomer == 5:
            break;


choice = "0"

while not (choice == -1):
    print("\n1. Reservations: ")
    print("2. Customer: ")
    print("3. Worker: ")
    print("4. Products: ")
    print("5. Exit ")
    choice = int(input("\nWhat do you want to do? "))

    if choice == 1:
        reservationsMenu()

    elif choice == 2:
        customersMenu()

    elif choice == 5:
        break;



    print("---------------")