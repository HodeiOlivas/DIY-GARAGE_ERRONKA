import os
import pickle
import csv
from Customer import Customer
import BasicMethodsToWorkWith


def saveCustomer(obj, filename):
    with open(filename, 'ab') as outp:  # Overwrites any existing file.
        pickle.dump(obj, outp, pickle.HIGHEST_PROTOCOL)


def readCustomersFile():
    if os.path.exists("customerInfo.pkl"):
        inp = open("customerInfo.pkl", 'rb')
        objectsCust = []
        cont = 1
        while cont == 1:
            try:
                objectsCust.append(pickle.load(inp))
            except EOFError:
                print()
                cont = 0
        for cust in objectsCust:
            Customer.printCustomer(cust)
            # print(st.group)ç
        print("\t--------------------------------")
        print("\tFounded " + str(len(objectsCust)) + " customers. \n")
    else:
        print("No files founded with that name...")


def deleteCustomer():
    if os.path.exists("customerInfo.pkl"):
        inp = open("customerInfo.pkl", 'rb')
        objectsCust = []
        cont = 1
        while cont == 1:
            try:
                objectsCust.append(pickle.load(inp))
            except EOFError:
                cont = 0
        print()
        for cust in objectsCust:
            Customer.printCustomer(cust)

        print("\t--------------------------------")
        custDeleteUsername = BasicMethodsToWorkWith.BasicsMethods.askstring("the USERNAME of the desired Customer")
        inp.close()
        os.remove("customerInfo.pkl")
        for cust in objectsCust:
            if Customer.getUsername(cust) != custDeleteUsername:
                saveCustomer(cust, "customerInfo.pkl")
        readCustomersFile()
        print()
    else:
        print("No files founded with that name...")


def updateCustomer():
    if os.path.exists("customerInfo.pkl"):
        inp = open("customerInfo.pkl", 'rb')
        objectsCust = []
        cont = 1
        while cont == 1:
            try:
                objectsCust.append(pickle.load(inp))
            except EOFError:
                cont = 0
        print()
        for cust in objectsCust:
            Customer.printCustomer(cust)
        print("\t--------------------------------")
        desCustUpdateUsername = BasicMethodsToWorkWith.BasicsMethods.askstring("the Username of the desired Customer")
        inp.close()
        os.remove("customerInfo.pkl")
        for cust in objectsCust:
            if Customer.getUsername(cust) != desCustUpdateUsername:
                saveCustomer(cust, "customerInfo.pkl")
            else:
                Customer.setPhoneNumber(cust)
                Customer.printCustomer(cust)
                saveCustomer(cust, "customerInfo.pkl")
        readCustomersFile()
        print()
    else:
        print("No files founded with that name...")
