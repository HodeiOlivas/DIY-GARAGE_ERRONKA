from Person import Person
import BasicMethodsToWorkWith
from _datetime import datetime

"""
print(datetime.now().strftime('%d%m%y'))
"""


class Customer(Person):
    def __init__(self):
        Person.__init__(self)

        self.username = BasicMethodsToWorkWith.BasicsMethods.askstring("username")
        self.birthday = BasicMethodsToWorkWith.BasicsMethods.askdate("your birthday")
        # self.birthday = datetime.strptime(birthday, '%d-%m-%Y').date()
        # self.mail = str(self.surname.lower()) + str(".") + str(self.name.lower()) + str("@garage.diy")

    def getUsername(self):
        return self.username

    def getName(self):
        return self.name

    def getSurname(self):
        return self.surname

    def getPassword(self):
        return self.password

    def getBirthday(self):
        # print(datetime.now().strftime('%d/%m/%Y'))
        # print(datetime.strptime(self.birthday, '%d-%m-%Y')).date()
        return self.birthday

    def getMail(self):
        return self.mail

    def getPhoneNumber(self):
        return self.phone_Number

    """
    It doesnt make much sence to change the main user data (like: Username, Name, Surname, Birthday); so 
    we will only give the user the option to modify/change those that may vary over time.
    
        -> Fixed data: Username, Name, Surname, Birthday, Mail
        -> Variable data: Password, phone_Number
    """

    def setPassword(self):
        # self.password = input("Forgotten password? Enter a new one: ")
        self.password = BasicMethodsToWorkWith.BasicsMethods.askstring("your NEW PASSWORD")

    def setPhone_Number(self):
        newPhoneNumber = Person.setPhoneNumber()
        self.phone_Number = newPhoneNumber

    def printCustomer(self):
        print("\t-> " + self.username + ", " + self.name + ", " + self.surname + ", " + self.password + ", " + str(
            self.birthday) + ", " + self.mail + ", " + str(self.phone_Number))

    def printExtended(self):
        print(str("Username: ") + str(self.username),
              str("\nName: ") + str(self.name),
              str("\nSurname: ") + str(self.surname),
              str("\nPassword: ") + str(self.password),
              str("\nBirthday: ") + str(self.birthday),
              str("\nMail: ") + str(self.mail),
              str("\nPhone Number: ") + str(self.phone_Number))

    # def setAbizena(self):
    #     self.abizena = input("Enter the value of the surname: ")
    #
    # def setMobile(self):
    #     self.mobile = int(input("Enter the value of the mobile phone: "))
    #
    # def print(self):
    #     print(self.dni, self.izena, self.abizena, self.mobile)
