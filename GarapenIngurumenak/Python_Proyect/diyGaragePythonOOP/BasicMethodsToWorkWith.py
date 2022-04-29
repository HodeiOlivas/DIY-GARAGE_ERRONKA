

class BasicsMethods():

    @staticmethod
    def askPhoneNumber():
        newNumber = int(input("\tSpecify your contact/phone number: "))
        return newNumber

    @staticmethod
    def askdate( n):
        date1 = input("\tEnter the value of " + n + " ('dd-mm-yyyy'): ")
        return date1

    @staticmethod
    def askinteger( n):
        a = int(input("\tEnter a value of " + n + ": "))
        return a

    @staticmethod
    def askstring( n):
        a = input("\tEnter a value of " + n + ": ")
        return a


