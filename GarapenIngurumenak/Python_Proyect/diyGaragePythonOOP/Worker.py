import time

# import Func_Worker
from Person import Person
import BasicMethodsToWorkWith
from datetime import datetime, time

allOccupations = ["Mechanic", "Painter", "Inspector"]


class Worker:
    def __init__(self):
        Person.__init__(self)

        self.worker_ID = BasicMethodsToWorkWith.BasicsMethods.askinteger("your Worker's ID")

        # validate the user entered value/data for the Worker's OCCUPATION
        validOccupation = 1
        while validOccupation == 1:
            occupationUser = BasicMethodsToWorkWith.BasicsMethods.askstring(
                "your OCCUPATION: " + "\n\t\t" + str(allOccupations)).capitalize()
            if occupationUser not in allOccupations:
                print("No result found for the specified occupation. Try again! \n")
            else:
                self.occupation = occupationUser
                validOccupation = 0

        # validate the user entered value/data for the Worker's SALARY
        validSalary = 1
        while validSalary == 1:
            salaryUser = BasicMethodsToWorkWith.BasicsMethods.askfloat("worker's SALARY")
            if salaryUser > 1500:
                print("The first salary cant be bigger than 1500.00 €. ")
            else:
                self.salary = salaryUser
                validSalary = 0

        # specify the STARTING and FINISHING time of working
        self.start_time = BasicMethodsToWorkWith.BasicsMethods.asktime("the time you START working").time()
        self.finish_time = BasicMethodsToWorkWith.BasicsMethods.asktime("the time you FINISH working").time()

    # getter methods
    def getWorkerID(self):
        return self.worker_ID

    def getName(self):
        return self.name

    def getSurname(self):
        return self.surname

    def getPassword(self):
        return self.password

    def getOccupation(self):
        return self.occupation

    def getMail(self):
        return self.mail

    def getPhoneNum(self):
        return self.phone_number

    def getSalary(self):
        return self.salary

    def getStartHour(self):
        return self.start_time

    def getFinishHour(self):
        return self.finish_time

    """
    It doesnt make much sence to change the main user data (like: Username, Name, Surname, Birthday); so 
    we will only give the user the option to modify/change those that may vary over time.

        -> Fixed data: Worker ID, Name, Surname, Mail
        -> Variable data: Salary, Occupation, Start Time, Finish Time, Password, Phone Number, 
    """

    # setter methods
    def setSalary(self):
        self.salary = BasicMethodsToWorkWith.BasicsMethods.askfloat("your new Salary: ")

    def setOccupation(self):
        self.occupation = BasicMethodsToWorkWith.BasicsMethods.askstring("your new OCCUPATION: ")

    def setStartTime(self):
        self.start_time = BasicMethodsToWorkWith.BasicsMethods.asktime("your new working START TIME ('hh:mm'): ")

    def setFinishTime(self):
        self.finish_time = BasicMethodsToWorkWith.BasicsMethods.asktime("your new working FINISH TIME ('hh:mm'): ")

    def printWorker(self):
        print("\t-> " + str(self.worker_ID) + ", " +
              str(self.name) + ", " +
              str(self.surname) + ", " +
              str(self.password) + ", " +
              str(self.occupation) + ", " +
              str(self.mail) + ", " +
              str(self.phone_Number) + ", " +
              str(self.salary) + ", " +
              str(self.start_time) + ", " +
              str(self.finish_time)
              )

    def printWorkerExtended(self):
        return str("\nWorker ID: ") + str(self.worker_ID) + ", " + str("Name: ") + str(self.name) + ", " + str(
            "Surname: ") + str(self.surname) + ", " + str("Password: ") + str(self.password) + ", " + str(
            "\nOccupation: ") + str(self.occupation) + ", " + str("Mail: ") + str(self.mail) + ", " + str(
            "Phone Number: ") + str(self.phone_Number) + str("\nSalary: ") + str(self.salary) + ", " + str(
            "Start Working: ") + str(self.start_time) + ", " + str("Finish Working: ") + str(self.finish_time) + str(
            "\n--------------------------------------------- \n ")
