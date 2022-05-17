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

    def printProduct(self):
        print("\t-> " + str(self.idProduct) + ", " +
              str(self.name) + ", " +
              str(self.price) + ", " +
              str(self.description)
              )

    def printExtendedProd(self):
        return str("\nProduct ID: ") + str(self.idProduct) + ", " + str("Name: ") + str(self.name) + ", " + str(
            "Price: ") + str(self.price) + ", " + str("Description: ") + str(
            self.description) + "\n--------------------------------------------- \n "


