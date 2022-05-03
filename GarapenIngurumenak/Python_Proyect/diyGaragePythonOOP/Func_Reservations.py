import pickle
import csv
from Reservation import Reservation


def createAReservation():
    reservation = Reservation()


def saveReservation(obj, filename):
    with open(filename, 'ab') as outp:  # Overwrites any existing file.
        pickle.dump(obj, outp, pickle.HIGHEST_PROTOCOL)
#save_object(obj, 'reservationInfo.txt')


def readReservations():
    with open("reservationInfo.txt", 'r') as outp:  # Overwrites any existing file.
        lerroak = outp.readlines()
        print(lerroak)




