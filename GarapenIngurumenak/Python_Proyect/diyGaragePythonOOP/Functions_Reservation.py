import pickle
import csv
from Reservation import Reservation
import BasicMethodsToWorkWith
from datetime import datetime
import datetime

# save data on txt
# https://www.geeksforgeeks.org/reading-writing-text-files-python/
# https://www.pythontutorial.net/python-basics/python-write-csv-file/

"""
listStrings = ["hello", "how", "are", "you"]

f = open("reservationInfo.txt", "w")  # this code will save the Reservation list in a txt file
for item in listStrings:
    f.write(item + "\n")
f.close()

f = open("reservationInfo.txt", "r")  # this code allows the user to read the content/info of the file
print(f.read())
"""

"""
    f = open("reservationInfo.txt", "w")
    f.write(str(listStrings))
    #f.write("Woops! I have deleted the content!")
    f.close()
    
    #open and read the file after the appending:
    f = open("reservationInfo.txt", "r")
    print(f.read())
"""

listReservations = []

# Create an object of the Reservation class
print("\n#####################################")
print("### Testing the Reservation class ###")
print("#####################################")
print("-------------------------------------")
print("Create a new Reservation: ")
print("-------------------------------------")

from datetime import datetime

"""
fmt = '%H:%M:%S'
d1 = datetime.strptime('18:35:22', fmt)
d2 = datetime.strptime('19:00:00', fmt)

totalSeconds = (d2 - d1).total_seconds()
hoursRentedThis = totalSeconds / 3600

print(hoursRentedThis)
"""

# create new Reservation objects
reservation1 = Reservation()  # create the first Reservation
reservation1.printReservation()

# save the info of reservation1 ona txt file
#BasicMethodsToWorkWith.BasicsMethods.save_object(reservation1, 'reservationInfo.txt')

# https://stackoverflow.com/questions/48013744/pickle-module-in-python-and-text-files

print()
print("-------------------------------------")

reservation2 = Reservation()  # create the second Reservation
reservation2.printReservation()
print()

print("-------------------------------------")
print("Update/modify the FIRST Reservation: ")
print("-------------------------------------")
"""
oldDate = reservation1.getDate()  # get the reservation's date BEFORE update/modify
reservation1.setDate()  # specify the new date for the reservation
newDate = reservation1.getDate()  # get the reservation's date AFTER update/modify
print("\t\tOLD date: " + str(oldDate))
print("\t\tNEW date: " + str(newDate))
print()
reservation1.printReservation()
"""

# create new Reservation objects and add them to the list called "listReservations"
print("-------------------------------------")
print("After the updates, add the Reservations made to the list called 'listReservations': ")
print("-------------------------------------")
listReservations.append(reservation1)
listReservations.append(reservation2)
for rent in listReservations:
    rent.printReservation()
print()

for rent in listReservations:
    BasicMethodsToWorkWith.BasicsMethods.save_object(rent, 'reservationInfo.txt')
    rent.printReservation()
print()
#BasicMethodsToWorkWith.BasicsMethods.save_object(reservation1, 'reservationInfo.txt')


print("--------------------------------------------")

print("Delete one of the Reservations of the list: ")
print("--------------------------------------------")
print("Reservation list BEFORE delete: ")  # show the reservations of the list BEFORE deleting
for rent in listReservations:
    rent.printReservation()
print()

resDeleteUser = BasicMethodsToWorkWith.BasicsMethods.askinteger("the Reservation ID. The reservation will be removed!")
for eachReservation in listReservations:
    if eachReservation.getReservationID() == resDeleteUser:
        listReservations.remove(eachReservation)
        print("\n\tThe selected Reservation has been successfully deleted! ")

print()
for rent in listReservations:
    rent.printReservation()
print()

"""
allCabins = ["C0", "C1", "C2", "C3", "C4"]
cabinConcrete = "C1"

allCabinsPrice = [25.63, 45.10, 30, 95.60, 71.80]
map(float, allCabinsPrice)

#print(allCabins.index(cabinConcrete) + 1)
#print(allCabinsPrice[allCabins.index(cabinConcrete) + 1])

for i in allCabins:
    if i == cabinConcrete:
        cabin = allCabins.index(i) + 1
        print(cabin)

        price = allCabinsPrice[cabin - 1]
        print(price)

        totalPrice = price * 2
        print(totalPrice)
        
        #print(allCabinsPrice[allCabins.index(cabinConcrete) + 1])
"""

# https://stackoverflow.com/questions/1831410/how-to-compare-times-of-the-day
# https://www.adamsmith.haus/python/answers/how-to-add-hours-to-the-current-time-in-python#:~:text=Use%20datetime.&text=now()%20to%20get%20the,convert%20hours%20to%20a%20datetime.


"""
hora1 = BasicMethodsToWorkWith.BasicsMethods.asktime("the 1 Reservation's Start Time")
hora2 = BasicMethodsToWorkWith.BasicsMethods.asktime("the 2 Reservation's Start Time")
now1 = datetime.datetime.now()
openGarage = now1.replace(hour=9, minute=00, second=0, microsecond=0).strptime("9:00:00", "%H:%M:%S")

print(hora1)
print(openGarage)

hours = 2
hoursAdded = datetime.timedelta(hours = hours)

resFinishUser = hora1 + hoursAdded

print(resFinishUser)
#print(openGarage.__format__("%H:%M:%S"))
if hora1 < openGarage:
    print("La Hora 1 es más grande! ")
else:
    print("La Hora 2 es más grande! ")
"""
