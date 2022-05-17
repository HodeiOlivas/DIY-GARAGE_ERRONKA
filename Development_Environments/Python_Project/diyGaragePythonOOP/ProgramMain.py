from Reservation import Reservation
from Customer import Customer
from Worker import Worker
from Product import Product
import Func_Reservations, Func_Customer, Func_Worker, Func_Product

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
    while not (choiceReservation == 5):
        print("\n\t1. Create a new reservation: ")
        print("\t2. Delete a reservation: ")
        print("\t3. Update/modify a reservation: ")
        print("\t4. Read all the reservations' data: ")
        print("\t5. Go Back ")
        choiceReservation = int(input("\n\tWhat do you want to do about Reservations? "))

        if choiceReservation == 1:
            print()
            eachReservation = Reservation()
            Func_Reservations.saveReservation(eachReservation, "reservationInfo.pkl")
            print()
            print("--------------------------------")

        elif choiceReservation == 2:
            Func_Reservations.deleteReservation()
            print("--------------------------------")

        elif choiceReservation == 3:
            Func_Reservations.updateReservation()
            print("--------------------------------")

        elif choiceReservation == 4:
            # Func_Reservations.readReservationsFile()
            Func_Reservations.readReservationsFile()
            print("--------------------------------")

        elif choiceReservation == 5:
            break;


def customersMenu():
    choiceCustomer = 0
    while not (choiceCustomer == 5):
        print("\n\t1. Create a new customer: ")
        print("\t2. Delete a customer: ")
        print("\t3. Update/modify a customer's phone number: ")
        print("\t4. Read all the customers' data: ")  # print/view the content of the txt file
        print("\t5. Go Back ")
        choiceCustomer = int(input("\n\tWhat do you want to do about Customers? "))

        if choiceCustomer == 1:
            print()
            eachCustomer = Customer()   # create the new Customer
            Func_Customer.saveCustomer(eachCustomer, "customerInfo.pkl")
            print()
            print("--------------------------------")

        elif choiceCustomer == 2:
            Func_Customer.deleteCustomer()
            print("--------------------------------")

        elif choiceCustomer == 3:
            Func_Customer.updateCustomer()
            print("--------------------------------")

        elif choiceCustomer == 4:
            Func_Customer.readCustomersFile()
            print("--------------------------------")

        elif choiceCustomer == 5:
            break


def workersMenu():
    choiceWorker = 0
    while not (choiceWorker == 5):
        print("\n\t1. Create a new worker: ")
        print("\t2. Delete a worker: ")
        print("\t3. Update/modify a worker's occupation: ")
        print("\t4. Read all the workers' data: ")  # print/view the content of the txt file
        print("\t5. Go Back ")
        choiceWorker = int(input("\n\tWhat do you want to do about Workers? "))

        if choiceWorker == 1:
            print()
            eachWorker = Worker()  # create the new Worker
            Func_Worker.saveWorker(eachWorker, "workerInfo.pkl")
            print()
            print("--------------------------------")
        elif choiceWorker == 2:
            Func_Worker.deleteWorker()
            print("--------------------------------")

        elif choiceWorker == 3:
            Func_Worker.updateWorker()
            print("--------------------------------")

        elif choiceWorker == 4:
            Func_Worker.readWorkersFile()
            print("--------------------------------")

        elif choiceWorker == 5:
            break


def productsMenu():
    choiceProduct = 0
    while not (choiceProduct == 5):
        print("\n\t1. Create a new product: ")
        print("\t2. Delete a product: ")
        print("\t3. Update/modify a product's price: ")
        print("\t4. Read all the products' data: ")  # print/view the content of the txt file
        print("\t5. Go Back ")
        choiceProduct = int(input("\n\tWhat do you want to do about Products? "))

        if choiceProduct == 1:
            print()
            eachProduct = Product()  # create the new Worker
            Func_Product.saveProduct(eachProduct, "productInfo.pkl")
            print()
            print("--------------------------------")
        elif choiceProduct == 2:
            Func_Product.deleteProduct()
            print("--------------------------------")

        elif choiceProduct == 3:
            Func_Product.updateProduct()
            print("--------------------------------")

        elif choiceProduct == 4:
            Func_Product.readProductsFile()
            print("--------------------------------")

        elif choiceProduct == 5:
            break


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
        print("a")

    elif choiceStart == 2:
        customersMenu()

    elif choiceStart == 3:
        workersMenu()

    elif choiceStart == 4:
        productsMenu()

    elif choiceStart == 5:
        break;

    print("---------------")
