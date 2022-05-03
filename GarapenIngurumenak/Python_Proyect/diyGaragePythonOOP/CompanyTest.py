import pickle
import Funct_Person
def save_object(obj, filename):
    with open('company_data.txt', 'wb') as f:
        pickle.dump(obj, f, pickle.HIGHEST_PROTOCOL)


        del obj


class Company(object):
    def __init__(self, name, value):
        self.name = name
        self.value = value

    def printS(self):
        return "\t\t-> " + str(self.name) + "," + str(self.value)


company1 = Company('banana', 40)
company2 = Company('spam', 42)

save_object(company1.printS(), "company_data.txt")




