from Reservation import Reservation
from Customer import Customer
from Worker import Worker
from Product import Product
import Func_Reservations, Func_Customer, Func_Worker

"""
import Func_Customer
import Func_Reservations
import Func_Worker
from Customer import Customer
from Reservation import Reservation
from Worker import Worker
"""


def reservationsMenu():
    choiceReservation = 0
    listReservations = []
    while not (choiceReservation == 5):
        print("\n\t1. Create a new reservation: ")
        print("\t2. Save the reservations' list on a FILE: ")
        print(
            "\t3. Delete a reservation from the File and List: ")  # clear the txt, delete the desired reservation from
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
        print("\t2. Save the customers' list on a FILE: ")
        print("\t3. Delete a customer from the FILE and LIST: ")
        print("\t4. Read all the customers' data: ")  # print/view the content of the txt file
        print("\t5. Go Back ")
        choiceCustomer = int(input("\n\tWhat do you want to do about Customers? "))

        if choiceCustomer == 1:
            print()
            eachCustomer = Customer()  # create the new Customer
            # Funct_Person.saveCustomer(eachCustomer.printExtended(), "customerInfo.txt")
            print()
            listCustomers.append(eachCustomer)  # add it to the Customer's list
            Func_Customer.viewListCustomers(listCustomers)  # print/view all the Customers of the list
            print("--------------------------------")
            """
            Try:"customerInfo.txt"
                - after the created reservation is added to the list, clear the txt file
                - save on the txt file the whole list of reservations
            """

        elif choiceCustomer == 2:
            # Funct_Person.saveCustomerListOnFile(listCustomers, "customerInfo.txt")
            Func_Customer.clearCustomersFile("customerInfo.txt")
            for cust in listCustomers:
                Func_Customer.saveCustomer(cust.printExtended(), "customerInfo.txt")
            print("--------------------------------")

        elif choiceCustomer == 3:
            Func_Customer.viewListCustomers(listCustomers)  # print/view all the Customers of the list
            Func_Customer.deleteCustomer(listCustomers)
            Func_Customer.viewListCustomers(listCustomers)  # print/view all the Customers of the list
            Func_Customer.clearCustomersFile("customerInfo.txt")  # erase the text file
            for cust in listCustomers:
                # Funct_Person.saveCustomerListAfterChanges(cust.printExtended(), "customerInfo.txt")
                Func_Customer.saveCustomer(cust.printExtended(), "customerInfo.txt")
            print("--------------------------------")

        elif choiceCustomer == 4:
            print()
            Func_Customer.readCustomers()

        elif choiceCustomer == 5:
            break;


def workersMenu():
    choiceWorker = 0
    listWorkers = []
    while not (choiceWorker == 5):
        print("\n\t1. Create a new worker: ")
        print("\t2. Save the workers' list on a FILE: ")
        print("\t3. Delete a worker from the FILE and LIST: ")
        print("\t4. Read all the workers' data: ")  # print/view the content of the txt file
        print("\t5. Go Back ")
        choiceWorker = int(input("\n\tWhat do you want to do about Workers? "))

        if choiceWorker == 1:
            print()
            eachWorker = Worker()  # create the new Customer
            # Funct_Person.saveCustomer(eachCustomer.printExtended(), "customerInfo.txt")
            print()
            listWorkers.append(eachWorker)  # add it to the Customer's list
            Func_Worker.viewListWorkers(listWorkers)  # print/view all the Customers of the list
            print("--------------------------------")
            """
            Try:"customerInfo.txt"
                - after the created reservation is added to the list, clear the txt file
                - save on the txt file the whole list of reservations
            """
        elif choiceWorker == 2:
            Func_Worker.clearWorkersFile("workerInfo.txt")
            for work in listWorkers:
                Func_Worker.saveWorker(work.printWorkerExtended(), "workerInfo.txt")
            print("--------------------------------")

        elif choiceWorker == 3:
            Func_Worker.viewListWorkers(listWorkers)  # show all the Workers of the list (BEFORE delete)
            Func_Worker.deleteWorker(listWorkers)  # delete the user's wanted worker from the list
            Func_Worker.viewListWorkers(listWorkers)  # show all the Workers of the list (AFTER delete)
            Func_Worker.clearWorkersFile("workerInfo.txt")  # erase the text file
            for work in listWorkers:
                Func_Worker.saveWorker(work.printWorkerExtended(), "workerInfo.txt")
            print("--------------------------------")

        elif choiceWorker == 4:
            print()
            Func_Worker.readWorkers()

        elif choiceWorker == 5:
            break


def productsMenu():
    choiceProduct = 0
    listProducts = []
    while not (choiceProduct == 5):
        print("\n\t1. Create a new product: ")
        print("\t2. Save the products' list on a FILE: ")
        print("\t3. Delete a product from the FILE and LIST: ")
        print("\t4. Read all the products' data: ")  # print all the information of products' text file
        print("\t5. Go Back ")
        choiceProduct = int(input("\n\tWhat do you want to do about Products? "))

# main menu
choiceStart = "0"
while not (choiceStart == -1):
    print("\n1. Reservations: ")
    print("2. Customer: ")
    print("3. Worker: ")
    print("4. Products: ")
    print("5. Exit ")
    choiceStart = int(input("\nWhat do you want to do? "))

    if choiceStart == 1:
        reservationsMenu()

    elif choiceStart == 2:
        customersMenu()

    elif choiceStart == 3:
        workersMenu()

    elif choiceStart == 5:
        break;

    print("---------------")
