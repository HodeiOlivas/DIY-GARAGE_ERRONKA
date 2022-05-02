import time

from Person import Person
import BasicMethodsToWorkWith
from datetime import datetime, time

allOccupations = ["Mechanic", "Painter", "Inspector"]

class Worker:
    def __init__(self):
        Person.__init__(self)

        self.worker_ID = BasicMethodsToWorkWith.BasicsMethods.askinteger("your Worker's ID")

        validOccupation = 1
        while validOccupation == 1:
            occupationUser = BasicMethodsToWorkWith.BasicsMethods.askstring("your OCCUPATION: " + "\n\t\t" + str(allOccupations)).capitalize()
            if occupationUser not in allOccupations:
                print("No result found for the specified occupation. Try again! ")
            else:
                #self.occupation = BasicMethodsToWorkWith.BasicsMethods.askstring("your OCCUPATION: " + "\n\t\t" + str(allOccupations)).capitalize()
                self.occupation = occupationUser
                validOccupation = 0

        validSalary = 1
        while validSalary == 1:
            salaryUser = BasicMethodsToWorkWith.BasicsMethods.askfloat("your SALARY")
            if salaryUser > 1500:
                print("The first salary cant be bigger than 1500.00 €. ")
            else:
                # self.salary = BasicMethodsToWorkWith.BasicsMethods.askfloat("your SALARY")
                self.salary = salaryUser
                validSalary = 0

        self.start_time = BasicMethodsToWorkWith.BasicsMethods.asktime("the time you START working ('hh:mm'): ")
        self.finish_time = BasicMethodsToWorkWith.BasicsMethods.asktime("the time you FINISH working ('hh:mm'): ")

    """
        def Worker(self, worker_ID, name, surname, password, occupation, phone_number, salary, start_time,
                 finish_time):
        self.worker_ID = worker_ID
        self.name = name
        self.surname = surname
        self.password = password
        self.occupation = occupation
        self.mail = str(self.surname.lower()) + str(".") + str(self.name.lower()) + str("@garage.diy")
        self.phone_number = phone_number
        self.salary = salary
        self.start_time = start_time
        self.finish_time = finish_time
    """


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

    def getFinishtHour(self):
        return self.finish_time

    """
    start with the setters
    """

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
