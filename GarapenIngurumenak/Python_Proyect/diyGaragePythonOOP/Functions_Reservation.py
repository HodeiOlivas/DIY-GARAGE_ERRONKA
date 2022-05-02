import now as now

from Reservation import Reservation
import BasicMethodsToWorkWith
from datetime import datetime
import datetime


# Create an object of the Reservation class
print("\n#####################################")
print("### Testing the Reservation class ###")
print("#####################################")
print("--------------------------------")
print("Create a new Customer: ")


from datetime import datetime

fmt = '%H:%M:%S'
d1 = datetime.strptime('18:35:22', fmt)
d2 = datetime.strptime('19:00:00', fmt)

totalSeconds = (d2-d1).total_seconds()
hoursRentedThis = totalSeconds/3600

print(hoursRentedThis)

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


reservation1 = Reservation()
reservation1.printReservation()
print("----------------")


reservation1.setCabin()
print()
reservation1.printReservation()


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


#https://stackoverflow.com/questions/1831410/how-to-compare-times-of-the-day
#https://www.adamsmith.haus/python/answers/how-to-add-hours-to-the-current-time-in-python#:~:text=Use%20datetime.&text=now()%20to%20get%20the,convert%20hours%20to%20a%20datetime.




