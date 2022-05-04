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
    while not (choiceReservation == 5):
        print("\n\t1. Create a new reservation: ")
        print("\t2. Save the reservation's list on a FILE: ")
        print("\t3. Delete customer from the File and List: ")  # clear the txt, delete the desired reservation from
        # the list, save the list again on the txt
        print("\t4. Read all the reservations: ")  # print/view the content of the txt file
        print("\t5. Go Back ")
        choiceReservation = int(input("\n\tWhat do you want to do about Reservations? "))

        if choiceReservation == 1:
            print()
            eachReservation = Reservation()  # create the new Reservation
            print()
            listReservations.append(eachReservation)  # add it to the Reservation's list
            Func_Reservations.viewListReservations(listReservations)  # show the user the whole Reservation's list

            print("--------------------------------")

        elif choiceReservation == 2:
            # Funct_Person.saveCustomerListOnFile(listCustomers, "customerInfo.txt")
            Func_Reservations.clearReservationsFile("reservationInfo.txt")
            for res in listReservations:
                Func_Reservations.saveReservation(res.viewReservation(), "reservationInfo.txt")

            print("--------------------------------")

        elif choiceReservation == 3:
            Func_Reservations.viewListReservations(listReservations)  # print/view all the Customers of the list
            Func_Reservations.deleteReservation(listReservations)
            Func_Reservations.viewListReservations(listReservations)  # print/view all the Customers of the list
            Func_Reservations.clearReservationsFile("reservationInfo.txt")  # erase the text file
            for res in listReservations:
                Func_Reservations.saveReservation(res.viewReservation(), "reservationInfo.txt")
            print("--------------------------------")

        elif choiceReservation == 4:
            print()
            Func_Reservations.readReservations()

        elif choiceReservation == 5:
            break;


def customersMenu():
    choiceCustomer = 0
    listCustomers = []
    while not (choiceCustomer == 5):
        print("\n\t1. Create a new customer: ")
        print("\t2. Save the customer's list on a FILE: ")
        print("\t3. Delete customer from the FILE and LIST: ")
        print("\t4. Read all the customer's data: ")  # print/view the content of the txt file
        print("\t5. Go Back ")
        choiceCustomer = int(input("\n\tWhat do you want to do about Customer? "))

        if choiceCustomer == 1:
            print()
            eachCustomer = Customer()  # create the new Customer
            # Funct_Person.saveCustomer(eachCustomer.printExtended(), "customerInfo.txt")
            print()
            listCustomers.append(eachCustomer)  # add it to the Customer's list
            Funct_Person.viewListCustomers(listCustomers)  # print/view all the Customers of the list
            print("--------------------------------")
            """
            Try:"customerInfo.txt"
                - after the created reservation is added to the list, clear the txt file
                - save on the txt file the whole list of reservations
            """

        elif choiceCustomer == 2:
            # Funct_Person.saveCustomerListOnFile(listCustomers, "customerInfo.txt")
            Funct_Person.clearCustomersFile("customerInfo.txt")
            for cust in listCustomers:
                Funct_Person.saveCustomer(cust.printExtended(), "customerInfo.txt")
            print("--------------------------------")

        elif choiceCustomer == 3:
            Funct_Person.viewListCustomers(listCustomers)  # print/view all the Customers of the list
            Funct_Person.deleteCustomer(listCustomers)
            Funct_Person.viewListCustomers(listCustomers)  # print/view all the Customers of the list
            Funct_Person.clearCustomersFile("customerInfo.txt")  # erase the text file
            for cust in listCustomers:
                # Funct_Person.saveCustomerListAfterChanges(cust.printExtended(), "customerInfo.txt")
                Funct_Person.saveCustomer(cust.printExtended(), "customerInfo.txt")
            print("--------------------------------")

        elif choiceCustomer == 4:
            print()
            Funct_Person.readCustomers()

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
