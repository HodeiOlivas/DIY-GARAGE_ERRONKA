import pickle
import csv
from Reservation import Reservation
import BasicMethodsToWorkWith
from datetime import datetime


def createAReservation():
    reservation = Reservation()


def saveReservation(obj, filename):
    with open(filename, 'ab') as outp:  # Overwrites any existing file.
        pickle.dump(obj, outp, pickle.HIGHEST_PROTOCOL)


# save_object(obj, 'reservationInfo.txt')


def readReservations():
    """
    with open("reservationInfo.txt", 'r') as outp:  # Overwrites any existing file.
    lines = outp.readlines()
    print(lines)
    """
    with open("reservationInfo.txt") as outp:
        linesRes = outp.readline()
        counter = 1
        while linesRes:
            print("Line {}: {}".format(counter, linesRes.strip()))
            linesRes = outp.readline()
            counter += 1


def saveReservationListOnFile(resList, filename):
    with open(filename, 'ab') as outp:  # Overwrites any existing file.
        pickle.dump(resList, outp, pickle.HIGHEST_PROTOCOL)


def viewListReservations(resList):
    for res in resList:
        Reservation.printReservation(res)
    print()


def deleteReservation(resList):
    # resDeleteResId = BasicMethodsToWorkWith.BasicsMethods.askstring("the ID of the Reservation you want to delete ")
    resDateUser = BasicMethodsToWorkWith.BasicsMethods.askdate("the DATE of the RESERVATION you want to DELETE ")
    resDateToDelete = datetime.strptime(resDateUser, "%d-%m-%Y").date()

    for res in resList:
        if Reservation.getDate(res) == resDateToDelete:
            resList.remove(res)
    print()


def clearReservationsFile(filename):
    open(filename, 'w').close()


def saveReservationListAfterChanges(res, filename):
    with open(filename, 'ab') as outp:  # Overwrites any existing file.
        pickle.dump(res, outp, pickle.HIGHEST_PROTOCOL)
