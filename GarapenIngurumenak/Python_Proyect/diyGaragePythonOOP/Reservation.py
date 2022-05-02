
import BasicMethodsToWorkWith
from datetime import datetime, date

allCabins = ["C0", "C1", "C2", "C3", "C4"]
"""
lst = ['4', '-5', '5.763', '6.423', '-5', '-6.77', '10']
>>> map(float, lst)
"""
allCabinsPrice = ['25.63', '45.10', '30', '95.60', '71.80']
map(float, allCabinsPrice)

class Reservation:
    # def __init__(self, name, surname, password, phone_Number):
    def __init__(self):
        self.idReservation = BasicMethodsToWorkWith.BasicsMethods.askinteger("your Reservation's ID")
        self.custUsername = BasicMethodsToWorkWith.BasicsMethods.askstring("the reservations customer's Username").capitalize()

        validCabin = 1
        while validCabin == 1:
            cabinUser = BasicMethodsToWorkWith.BasicsMethods.askstring("the reservation's Cabin: " + "\n\t\t" + str(allCabins)).capitalize()
            if cabinUser not in allCabins:
                print("No result found for the specified Cabin. Try again! ")
            else:
                #self.cabin = BasicMethodsToWorkWith.BasicsMethods.askstring("the reservation's Cabin: " + "\n\t\t" + str(allCabins)).capitalize()
                self.cabin = cabinUser
                validOccupation = 0


        validDate = 1
        while validDate == 1:
            today = date.today()
            limitDateOld = datetime.strftime("01-01-2000", "%d-%m-%Y")
            resDateUser = BasicMethodsToWorkWith.BasicsMethods.askdate("your Reservation's Date: ")
            resDate = datetime.strftime(resDateUser, "%d-%m-%Y")
            if resDate < limitDateOld:
                print("You cant make a reservation with a Date before " + str(limitDateOld))
            else:
                self.date = resDate
                validDate = 0


        validAmountHours = 1
        while validAmountHours == 1:
            amountHoursUser = BasicMethodsToWorkWith.BasicsMethods.askinteger("the amount of hours of the reservation (max: 2)")
            if amountHoursUser > 2:
                print("You can't make a reservation bigger than 3 hours. Try again!")
            else:
                self.amountHours = amountHoursUser
                validAmountHours = 0


        #starting hour / ending hour / amount of hours of the reservation
        now = datetime.datetime.now()
        openGarage = now.replace(hour=9, minute=00, second=0, microsecond=0)
        closeGarage = now.replace(hour=19, minute=00, second=0, microsecond=0)

        resStartUser = BasicMethodsToWorkWith.BasicsMethods.asktime("the Reservation's Start Time")
        print(resStartUser.time())

        validStartHour = 1
        while validStartHour == 1:
            resStartUser = BasicMethodsToWorkWith.BasicsMethods.asktime("the Reservation's Start Time")
            if resStartUser < openGarage:
                print("You cant make a reservation whose Start Hour is before the Garage's openning. Try again! ")
            else:

                hours = self.amountHours
                hoursReserved = datetime.timedelta(hours = hours)

                resFinishUser = resStartUser + hoursReserved

                if resFinishUser > closeGarage:
                    print("The duration of the reservation exceeds the daily hours available. Try again! ")
                else:
                    self.start_time = resStartUser
                    self.finish_time = resFinishUser
                    validStartHour = 0

        #total price of the reservation
        self.totalPrice


        #self.start_time = BasicMethodsToWorkWith.BasicsMethods.asktime("the time you START working ('hh:mm'): ")
        #self.finish_time = BasicMethodsToWorkWith.BasicsMethods.asktime("the time you FINISH working ('hh:mm'): ")



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
        self.phone_Number = int(input("Have you changed your contact number? Enter the new one: "))
        # self.phone_Number = int(input("Have you changed your contact number? Enter the new one: "))

    def print(self):
        print(self.name, self.surname, self.password, self.mail, self.phone_Number)

