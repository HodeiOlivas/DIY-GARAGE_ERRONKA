
#super class

class Worker:
    def __init__(self, worker_ID, name, surname, password, occupation, mail, phone_number, salary, start_time, finish_time):
        self.worker_ID = worker_ID
        self.name = name
        self.surname = surname
        self.password = password
        self.occupation = occupation
        self.mail = mail
        self.phone_number = phone_number
        self.salary = salary
        self.start_time = start_time
        self.finish_time = finish_time



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

    def setMail(self):
        self.id = input("Enter the value of the id: ")

    def setname(self):
        self.name = input("Enter the value of the name: ")

    def setsurname(self, h):
        self.surname = h











