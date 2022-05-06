import os
import pickle
import csv
from Product import Product
import BasicMethodsToWorkWith


def saveProduct(obj, filename):
    with open(filename, 'ab') as outp:  # Overwrites any existing file.
        pickle.dump(obj, outp, pickle.HIGHEST_PROTOCOL)


def readProductsFile():
    if os.path.exists("productInfo.pkl"):
        inp = open("productInfo.pkl", 'rb')
        objectsProd = []
        cont = 1
        while cont == 1:
            try:
                objectsProd.append(pickle.load(inp))
            except EOFError:
                print()
                cont = 0
        for prod in objectsProd:
            Product.printProduct(prod)
        print("\t--------------------------------")
        print("\tFounded " + str(len(objectsProd)) + " products. \n")
    else:
        print("No files founded with that name...")


def deleteProduct():
    if os.path.exists("productInfo.pkl"):
        inp = open("productInfo.pkl", 'rb')
        objectsProd = []
        cont = 1
        while cont == 1:
            try:
                objectsProd.append(pickle.load(inp))
            except EOFError:
                cont = 0
        print()
        for prod in objectsProd:
            Product.printProduct(prod)

        print("\t--------------------------------")
        prodDeleteId = BasicMethodsToWorkWith.BasicsMethods.askstring("the ID of the desired Product")
        inp.close()
        os.remove("productInfo.pkl")
        for prod in objectsProd:
            if Product.getProductID(prod) != prodDeleteId:
                saveProduct(prod, "productInfo.pkl")
        readProductsFile()
        print()
    else:
        print("No files founded with that name...")


