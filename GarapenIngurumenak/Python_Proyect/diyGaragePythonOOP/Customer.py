from Person import Person
import BasicMethodsToWorkWith
from datetime import datetime
from _datetime import datetime


class Customer(Person):
    def __init__(self):
        Person.__init__(self)

        self.username = BasicMethodsToWorkWith.BasicsMethods.askstring("username")
        custBirthdayUser = BasicMethodsToWorkWith.BasicsMethods.askdate("your birthday's date ")
        custBirthday = datetime.strptime(custBirthdayUser, "%d-%m-%Y").date()
        self.birthday = custBirthday

    def getUsername(self):
        return self.username

    def getBirthday(self):
        return self.birthday

    """
    It doesnt make much sence to change the main user data (like: Username, Name, Surname, Birthday); so 
    we will only give the user the option to modify/change those that may vary over time.
    
        -> Fixed data: Username, Name, Surname, Birthday, Mail
        -> Variable data: phone_Number
    """

    def setPhone_Number(self):
        newPhoneNumber = Person.setPhoneNumber()
        self.phone_Number = newPhoneNumber

    def printCustomer(self):
        print("\t-> " + str(self.username) + ", " +
              str(self.name) + ", " +
              str(self.surname) + ", " +
              str(self.password) + ", " +
              str(self.birthday) + ", " +
              str(self.mail) + ", " +
              str(self.phone_Number)
              )

    def printExtended(self):
        return str("\nUsername: ") + str(self.username) + ", " + str("Name: ") + str(self.name) + ", " + str(
            "Surname: ") + str(self.surname) + ", " + str("Password: ") + str(self.password) + ", " + str(
            "\nBirthday: ") + str(self.birthday) + ", " + str("Mail: ") + str(self.mail) + ", " + str(
            "Phone Number: ") + str(self.phone_Number) + "\n--------------------------------------------- \n"


