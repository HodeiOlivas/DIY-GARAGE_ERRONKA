import pickle
import csv
from Customer import Customer
import BasicMethodsToWorkWith


def createCustomer():
    customer = Customer()


def saveCustomer(obj, filename):
    with open(filename, 'ab') as outp:  # Overwrites any existing file.
        pickle.dump(obj, outp, pickle.HIGHEST_PROTOCOL)


# save_object(obj, 'customerInfo.txt')


def readCustomers():
    """
    with open("customerInfo.txt", 'r') as outp:  # Overwrites any existing file.
        lines = outp.readlines()
        print(lines)
    """
    with open("customerInfo.txt") as outp:
        linesCust = outp.readline()
        counter = 1
        while linesCust:
            print("Line {}: {}".format(counter, linesCust.strip()))
            linesCust = outp.readline()
            counter += 1


def saveCustomerListOnFile(custList, filename):
    with open(filename, 'ab') as outp:  # Overwrites any existing file.
        pickle.dump(custList, outp, pickle.HIGHEST_PROTOCOL)


def viewListCustomers(custList):
    for cust in custList:
        Customer.printCustomer(cust)
    print()


def deleteCustomer(custList):
    custDeleteUsername = BasicMethodsToWorkWith.BasicsMethods.askstring("the USERNAME of the desired Customer")

    for cust in custList:
        if Customer.getUsername(cust) == custDeleteUsername:
            custList.remove(cust)
    print()


"""
This function will save on a File the content of the list of customer, once the needed changes are done. For 
example, if you want to delete a customer from the list, you will also need to delete from the file. So this 
function will override the data of the file with the new values of the list of customers.

    -> to override the file: 'wb'
"""

def clearCustomersFile(filename):
    open(filename, 'w').close()

def saveCustomerListAfterChanges(cust, filename):
    with open(filename, 'ab') as outp:  # Overwrites any existing file.
        pickle.dump(cust, outp, pickle.HIGHEST_PROTOCOL)
