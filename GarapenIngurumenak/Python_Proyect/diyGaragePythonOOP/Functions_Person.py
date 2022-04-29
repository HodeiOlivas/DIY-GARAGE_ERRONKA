from Customer import Customer
import BasicMethodsToWorkWith

"""
    Test the whole data of the Person class. (create new, view object's data/ modify/change values of it/ delete the object)
        -> superclass: Person
        -> sub classes: Customer, Worker
"""

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

listCustomers.append(Customer())    #create a new Customer object and add it to the list at the same time


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
