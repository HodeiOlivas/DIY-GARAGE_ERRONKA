from Customer import Customer
from Worker import Worker
import BasicMethodsToWorkWith
from datetime import datetime
import datetime

"""
# time_obj = datetime.strptime("09:15:20", "%H:%M:%S").time()
date = '20:52'
datem = datetime.datetime.strptime(date, "%H:%M")
print(str(datem.hour) + str(":") + str(datem.minute))
print("--------------------------------")

"""

# -----------------------------------------------------

listCustomers = []

# Create an object of the super class
print("\n##################################")
print("### Testing the Customer class ###")
print("##################################")
print("--------------------------------")
print("Create a new Customer: ")

customerA = Customer()
print()
customerA.printCustomer()
print()
listCustomers.append(customerA)

listCustomers.append(Customer())  # create a new Customer object and add it to the list at the same time

print("--------------------------------")
print("View/search specific Customer on a list of them: \n")
print("Within a list of Customers, view a specific one: \n")

for item in listCustomers:
    item.printCustomer()
print()

desiredCustomerUsername = BasicMethodsToWorkWith.BasicsMethods.askstring(" the desired Customer's Username").lower()

for item in listCustomers:
    if item.getUsername().lower() == desiredCustomerUsername:
        item.printCustomer()
        break;

# create and update/modify an object of the Customer class
print("--------------------------------")
print("Create a new Customer and update/modify it: \n")
customerC = Customer()
print()
customerC.printCustomer()
print()

oldPassword = customerC.getPassword()
customerC.setPassword()

print()
print("\t\tOLD password: " + str(oldPassword))
print("\t\tNEW password: " + customerC.getPassword() + "\n")
customerC.printCustomer()

listCustomers.append(customerC)

print("--------------------------------")
print("Ask the user for a specific Customer and delete it: \n")

for item in listCustomers:
    item.printCustomer()
print()

customerToDelete = BasicMethodsToWorkWith.BasicsMethods.askstring("the Customer you want to delete (Username) ").lower()

for eachCustomer in listCustomers:
    if eachCustomer.getUsername().lower() == customerToDelete:
        listCustomers.remove(eachCustomer)
        print("\nThe selected Customer has been successfully deleted! ")

print()
for item in listCustomers:
    item.printCustomer()
print()

print("\n\n##################################")
print("### Testing the Worker class ###")
print("##################################")
print("--------------------------------")
print("Create a new Worker: ")

listWorkers = []

worker1 = Worker()
worker1.printWorker()
listWorkers.append(worker1)

"""
print("\nCreate new Customer:\n")
customer1 = Customer("user11", "First", "Customer", "pwd1", "19-09-1992", 987654321)
customer1.print()
print("----------------")
customer1.printExtended()
print("----------------")

#change values (example: password) of the object
oldPassword = customer1.getPassword()
customer1.setPassword()

print("\tOld password: " + str(oldPassword))
print("\tNew password: " + customer1.getPassword())



# p2.setname()    #este método pide un parámetro (String) al usuario
# p2.setsurname("gomez")  #recibe un String
# p2.print()
"""

print("--------------------------------")
