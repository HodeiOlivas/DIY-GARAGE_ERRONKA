import os
import pickle
import csv
from Worker import Worker
import BasicMethodsToWorkWith


def saveWorker(obj, filename):
    with open(filename, 'ab') as outp:  # Overwrites any existing file.
        pickle.dump(obj, outp, pickle.HIGHEST_PROTOCOL)


def readWorkersFile():
    if os.path.exists("workerInfo.pkl"):
        inp = open("workerInfo.pkl", 'rb')
        objectsWorker = []
        cont = 1
        while cont == 1:
            try:
                objectsWorker.append(pickle.load(inp))
            except EOFError:
                print()
                cont = 0
        for work in objectsWorker:
            Worker.printWorker(work)
        print("\t--------------------------------")
        print("\tFounded " + str(len(objectsWorker)) + " workers. \n")
    else:
        print("No files founded with that name...")


def deleteWorker():
    if os.path.exists("workerInfo.pkl"):
        inp = open("workerInfo.pkl", 'rb')
        objectsWorker = []
        cont = 1
        while cont == 1:
            try:
                objectsWorker.append(pickle.load(inp))
            except EOFError:
                cont = 0
        print()
        for work in objectsWorker:
            Worker.printWorker(work)

        print("\t--------------------------------")
        workerDeleteId = BasicMethodsToWorkWith.BasicsMethods.askinteger("the ID of the desired Customer")
        inp.close()
        os.remove("workerInfo.pkl")
        for work in objectsWorker:
            if Worker.getWorkerID(work) != workerDeleteId:
                saveWorker(work, "workerInfo.pkl")
        readWorkersFile()
        print()
    else:
        print("No files founded with that name...")


