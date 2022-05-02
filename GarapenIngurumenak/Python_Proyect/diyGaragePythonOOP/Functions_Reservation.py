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

reservation1 = Reservation()



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


#https://stackoverflow.com/questions/1831410/how-to-compare-times-of-the-day
#https://www.adamsmith.haus/python/answers/how-to-add-hours-to-the-current-time-in-python#:~:text=Use%20datetime.&text=now()%20to%20get%20the,convert%20hours%20to%20a%20datetime.

current_date_and_time = datetime.datetime.now()
print(current_date_and_time.__format__("%H:%M"))


hours = 9
hours_added = datetime.timedelta(hours = hours)

future_date_and_time = current_date_and_time + hours_added
print(future_date_and_time)



now = datetime.datetime.now()
openGarage = now.replace(hour=9, minute=00, second=0, microsecond=0)
closeGarage = now.replace(hour=19, minute=00, second=0, microsecond=0)

pruebaUser = BasicMethodsToWorkWith.BasicsMethods.asktime("time")
print(pruebaUser.time())

if pruebaUser.time() < openGarage.time():
    print("menor")
else:
    print("mayor")

