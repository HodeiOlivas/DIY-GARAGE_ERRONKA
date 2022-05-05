#import csv
import pickle
from Worker import Worker
import BasicMethodsToWorkWith


def createWorker():
    worker = Worker()


def saveWorker(obj, filename):
    with open(filename, 'ab') as outp:  # Overwrites any existing file.
        pickle.dump(obj, outp, pickle.HIGHEST_PROTOCOL)


def readWorkers():
    """
    with open("workerInfo.txt", 'r') as outp:  # Overwrites any existing file.
        lines = outp.readlines()
        print(lines)
    """
    with open("workerInfo.txt") as outp:
        linesWorkers = outp.readline()
        counter = 1
        while linesWorkers:
            print("Line {}: {}".format(counter, linesWorkers.strip()))
            linesWorkers = outp.readline()
            counter += 1


def saveWorkerListOnFile(workerList, filename):
    with open(filename, 'ab') as outp:  # Overwrites any existing file.
        pickle.dump(workerList, outp, pickle.HIGHEST_PROTOCOL)


def viewListWorkers(workerList):
    for work in workerList:
        Worker.printWorker(work)
    print()


def deleteWorker(workerList):
    workerDeleteID = BasicMethodsToWorkWith.BasicsMethods.askinteger("the ID of the desired Worker")
    for work in workerList:
        if Worker.getWorkerID(work) == workerDeleteID:
            workerList.remove(work)
    print()


def clearWorkersFile(filename):
    open(filename, 'w').close()


def saveWorkerListAfterChanges(work, filename):
    with open(filename, 'ab') as outp:  # Overwrites any existing file.
        pickle.dump(work, outp, pickle.HIGHEST_PROTOCOL)


