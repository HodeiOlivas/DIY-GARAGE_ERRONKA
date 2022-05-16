import BasicMethodsToWorkWith
from datetime import datetime, date
import datetime

allCabins = ["C0", "C1", "C2", "C3", "C4"]
allCabinsPrice = [25.63, 45.10, 30, 95.60, 71.80]
map(float, allCabinsPrice)


class Reservation:
    # def __init__(self, name, surname, password, phone_Number):
    def __init__(self):
        self.idReservation = BasicMethodsToWorkWith.BasicsMethods.askinteger("your Reservation's ID")
        self.custUsername = BasicMethodsToWorkWith.BasicsMethods.askstring \
            ("the reservations customer's Username").capitalize()

        # reservation's cabin - validate user entered data for reservation's CABIN
        validCabin = 1
        while validCabin == 1:
            cabinUser = BasicMethodsToWorkWith.BasicsMethods.askstring \
                ("the reservation's Cabin: " + "\n\t\t" + str(allCabins)).capitalize()
            if cabinUser not in allCabins:
                print("\t->No result found for the specified Cabin. Try again! \n")
            else:
                self.cabin = cabinUser
                validCabin = 0

        # reservation's date - validate user entered DATE for the reservation
        validDate = 1
        while validDate == 1:
            limitDateOld = datetime.datetime.strptime("01-01-2000", "%d-%m-%Y").date()
            resDateUser = BasicMethodsToWorkWith.BasicsMethods.askdate("your Reservation's Date: ")
            dateReservation = datetime.datetime.strptime(resDateUser, "%d-%m-%Y").date()

            if dateReservation < limitDateOld:
                print("\t->You can't make a reservation with a Date before " + str(limitDateOld) + "\n")
            else:
                self.date = dateReservation
                validDate = 0

        # garage's opening and closing hours
        now = datetime.datetime.now()
        openGarage = now.replace(hour=9, minute=00, second=0, microsecond=0).strptime("9:00:00", "%H:%M:%S")
        closeGarage = now.replace(hour=19, minute=00, second=0, microsecond=0).strptime("19:00:00", "%H:%M:%S")

        # validate STARTING hour
        validStartHour = 1
        while validStartHour == 1:
            resStartUser = BasicMethodsToWorkWith.BasicsMethods.asktime("the Reservation's Start Time")
            if resStartUser < openGarage:
                print("\t->You can't make a reservation whose starting hour is before than the Garage's opening. Try "
                      "again! \n")
            else:
                self.start_time = resStartUser
                validStartHour = 0

        # validate/calculate the AMOUNT OF HOURS
        validAmountHours = 1
        while validAmountHours == 1:
            amountHoursUser = BasicMethodsToWorkWith.BasicsMethods.askinteger(
                "the amount of hours of the reservation (max: 2)")
            if amountHoursUser > 2:
                print("\t->You can't make a reservation bigger than 2 hours. Try again! \n")
            else:
                self.amountHours = amountHoursUser
                validAmountHours = 0

        # validate/calculate FINISHING hour
        validFinishHour = 1
        while validFinishHour == 1:
            hours = self.amountHours
            hoursReserved = datetime.timedelta(hours=hours)
            resFinishUser = self.start_time + hoursReserved

            if resFinishUser > closeGarage:
                print("\t\tThe duration of the reservation exceeds the daily hours available. Try again! ")
                self.finish_time = closeGarage

                fmt = '%H:%M:%S'
                d1 = datetime.datetime.strptime(str(self.getStartingHour()), fmt)
                d2 = datetime.datetime.strptime('19:00:00', fmt)

                totalSeconds = (d2 - d1).total_seconds()
                hoursRentedDecimal = totalSeconds / 3600
                print("Due to your reservation request ends after the closing time, "
                      "you can stay until we close: %.1f" % hoursRentedDecimal)

                self.amountHours = format(hoursRentedDecimal, '.1f')
                validFinishHour = 0
            else:
                self.finish_time = resFinishUser
                validFinishHour = 0

        # calculate the TOTAL PRICE of the reservation
        for i in allCabins:
            if i == self.cabin:
                cabin = allCabins.index(i) + 1
                price = allCabinsPrice[cabin - 1]

                totalPriceFullDecimals = (float(price) * float(self.amountHours))
                self.totalPrice = round(totalPriceFullDecimals, 2)

    # getter methods
    def getReservationID(self):
        return self.idReservation

    def getCustUsername(self):
        return self.custUsername

    def getCabinID(self):
        return self.cabin

    def getDate(self):
        return self.date

    def getStartingHour(self):
        return self.start_time.time()

    def getFinishHour(self):
        return self.finish_time.time()

    def getAmountHours(self):
        return self.amountHours

    def getTotalPrice(self):
        return self.totalPrice

    """
    There will be setters for the following attributes: 
        - Cabin
        - Date
        - Starting hour
    """

    def setCabin(self):
        validCabin = 1
        while validCabin == 1:
            cabinUser = BasicMethodsToWorkWith.BasicsMethods.askstring("the reservation's Cabin: " + "\n\t\t" + str(
                allCabins)).capitalize()

            if cabinUser not in allCabins:
                print("No result found for the specified Cabin. Try again! ")
            else:
                self.cabin = cabinUser
                validCabin = 0

    def setDate(self):
        validDate = 1
        while validDate == 1:

            limitDateOld = datetime.datetime.strptime("01-01-2000", "%d-%m-%Y").date()
            resDateUser = BasicMethodsToWorkWith.BasicsMethods.askdate("the reservation's NEW DATE: ")
            dateReservation = datetime.datetime.strptime(resDateUser, "%d-%m-%Y").date()

            if dateReservation < limitDateOld:
                print("\tYou can't make a reservation with a DATE before " + str(limitDateOld) + ".\n")
            else:
                self.date = dateReservation
                validDate = 0

    def setStartHour(self):
        now = datetime.datetime.now()
        openGarage = now.replace(hour=9, minute=00, second=0, microsecond=0).strptime("9:00:00", "%H:%M:%S")
        validStartHour = 1
        while validStartHour == 1:
            resStartUser = BasicMethodsToWorkWith.BasicsMethods.asktime("the Reservation's Start Time")
            if resStartUser < openGarage:
                print("You can't make a reservation whose Starting Hour is before the Garage's opening. Try again! ")
            else:
                self.start_time = resStartUser
                validStartHour = 0

    """def printReservation(self):
        print("reservation id." + str(self.getReservationID()))"""

    def printReservation(self):
        print("\t-> " + str(self.getReservationID()) + ", " +
              str(self.custUsername) + ", " +
              str(self.cabin) + ", " +
              str(self.date) + ", " +
              str(self.start_time) + ", " +
              str(self.getFinishHour()) + ", " +
              str(self.amountHours) + ", " +
              str(self.totalPrice) + "€"
              )

    """
        def printReservation(self):
        print("\t-> " + str(self.getReservationID()) + ", " +
              str(self.custUsername) + ", " +
              str(self.cabin) + ", " +
              str(self.date) + ", " +
              str(self.start_time) + ", " +
              str(self.getFinishHour()) + ", " +
              str(self.amountHours) + ", " +
              str(self.totalPrice)
              )
    """

    def viewReservation(self):
        return str("\nReservation ID: ") + str(self.idReservation) + ", " + str(
            "Customer: ") + str(self.custUsername) + ", " + str("\nCabin: ") + str(
            self.cabin) + ", " + str("Date: ") + str(self.date) + ", " + str(
            "\nStart Hour: ") + str(self.getStartingHour()) + ", " + str(
            "Finish Hour: ") + str(self.getFinishHour()) + ", " + str(
            "\nAmount Hours: ") + str(self.amountHours) + ", " + str(
            "Total Price: ") + str(self.totalPrice) + "\n--------------------------------------------- \n"
