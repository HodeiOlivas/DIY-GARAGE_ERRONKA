import BasicMethodsToWorkWith


class Product:
    def __init__(self):
        self.idProduct = BasicMethodsToWorkWith.BasicsMethods.askstring("product's ID").upper()
        self.name = BasicMethodsToWorkWith.BasicsMethods.askstring("the product's NAME").capitalize()
        self.price = BasicMethodsToWorkWith.BasicsMethods.askfloat("the product's PRICE")
        self.description = BasicMethodsToWorkWith.BasicsMethods.askstring("product's DESCRIPTION").capitalize()

    # getter methods
    def getProductID(self):
        return self.idProduct

    def getName(self):
        return self.name

    def getPrice(self):
        return self.price

    def getDescription(self):
        return self.description

    # setter methods
    def setPrice(self):
        newProductPrice = BasicMethodsToWorkWith.BasicsMethods.askfloat("the product's NEW PRICE")
        self.price = newProductPrice

    def setDescription(self):
        newProductDescription = BasicMethodsToWorkWith.BasicsMethods.askfloat("the product's NEW DESCRIPTION")
        self.description = newProductDescription

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


