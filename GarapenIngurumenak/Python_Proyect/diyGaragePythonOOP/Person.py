# super class

import BasicMethodsToWorkWith


class Person:
    # def __init__(self, name, surname, password, phone_Number):
    def __init__(self):
        self.name = BasicMethodsToWorkWith.BasicsMethods.askstring("your NAME").capitalize()
        self.surname = BasicMethodsToWorkWith.BasicsMethods.askstring("your SURNAME").capitalize()
        self.password = BasicMethodsToWorkWith.BasicsMethods.askstring("your PASSWORD")
        self.mail = str(self.surname.lower()) + str(".") + str(self.name.lower()) + str("@garage.diy")
        self.phone_Number = BasicMethodsToWorkWith.BasicsMethods.askPhoneNumber()

    def getName(self):
        return self.name

    def getSurname(self):
        return self.surname

    def getPassword(self):
        return self.password

    def getMail(self):
        return self.mail

    def getPassword(self):
        return self.password

    def getPhoneNumber(self):
        return self.phone_Number

    """
        It doesnt make much sence to change the main user data (like: Username, Name, Surname, Birthday); so 
        we will only give the user the option to modify/change those that may vary over time.

            -> Fixed data: Name, Surname, Mail
            -> Variable data: Password, phone_Number
        """

    def setPassword(self):
        self.password = BasicMethodsToWorkWith.BasicsMethods.askstring("your NEW PASSWORD")
        # self.password = input("Forgotten password? Enter a new one: ")

    def setPhoneNumber(self):
        # self.phone_Number = int(input("Have you changed your contact number? Enter the new one: "))
        self.phone_Number = BasicMethodsToWorkWith.BasicsMethods.askinteger("your NEW PHONE NUMBER")


    def print(self):
        print(self.name, self.surname, self.password, self.mail, self.phone_Number)
