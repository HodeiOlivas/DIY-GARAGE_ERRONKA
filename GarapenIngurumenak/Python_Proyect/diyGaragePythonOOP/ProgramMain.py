import BasicMethodsToWorkWith
from Reservation import Reservation
import Func_Reservations
from Person import Person


def reservationsMenu():
    choiceReservation = 0
    listReservations = []
    while not (choiceReservation == 4):
        print("\n\t1. Create and Save new reservation: ")
        print("\t2. Delete reservation: ")              #clear the txt, delete the desired reservation from the list, save the list again on the txt
        print("\t3. Read all the reservations: ")       #print/view the content of the txt file
        print("\t4. Go Back ")
        choiceReservation = int(input("\n\tWhat do you want to do about Reservations? "))

        if choiceReservation == 1:
            print()
            eachReservation = Reservation()                        #create the new Reservation
            listReservations.append(eachReservation)                                        #add it to the Reservation's list
            """
            Try:
                - after the created reservation is added to the list, clear the txt file
                - save on the txt file the whole list of reservations
            """
            Func_Reservations.saveReservation(eachReservation, "reservationInfo.txt")       #save the reservation on a text file (.txt)
            print("--------------------------------")

        elif choiceReservation == 2:
            print()
            print("opcion dos")

        elif choiceReservation == 3:
            print()
            Func_Reservations.readReservations()
            print("--------------------------------")

        elif choice == 4:
            break;


choice = "0"

while not (choice == -1):
    print("\n1. Reservations: ")
    print("2. Products: ")
    print("3. Worker: ")
    print("4. Customer: ")
    print("5. Exit ")
    choice = int(input("\nWhat do you want to do? "))

    if choice == 1:
        reservationsMenu()

    elif choice == 2:
        print("opcion dos")

    elif choice == 5:
        break;



    print("---------------")