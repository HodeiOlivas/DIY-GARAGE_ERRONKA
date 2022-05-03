import datetime
import pickle


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
    def asktime(n):
        timeUser = input("\tEnter the value of " + n + " ('hh:mm'): ")
        timeValue = datetime.datetime.strptime(timeUser, "%H:%M")
        #print(str(timeValue.hour) + str(":") + str(timeValue.minute))
        #a = str(timeValue.hour) + str(":") + str(timeValue.minute)
        #print(timeValue.__format__("%H:%M"))
        a = timeValue.__format__("%H:%M")
        return timeValue

    @staticmethod
    def askinteger( n):
        a = int(input("\tEnter a value of " + n + ": "))
        return a

    @staticmethod
    def askfloat(n):
        a = float(input("\tEnter a value of " + n + ": "))
        return a

    @staticmethod
    def askstring( n):
        a = input("\tEnter a value of " + n + ": ")
        return a



    @staticmethod
    def save_object(obj, filename):
        with open("reservationInfo.txt", 'ab') as outp:  # Overwrites any existing file.
            pickle.dump(obj, outp, pickle.HIGHEST_PROTOCOL)
    #save_object(obj, 'reservationInfo.txt')

"""
Link of info to work with dates and time:
    https://www.codegrepper.com/code-examples/python/python+datetime+strptime+hour+minute+second
"""