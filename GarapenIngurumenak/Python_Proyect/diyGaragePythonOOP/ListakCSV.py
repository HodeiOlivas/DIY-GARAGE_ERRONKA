
from datetime import datetime, date
import csv

from csv import reader




with open('employee.txt', mode='r') as csv_file:
    csv_reader = reader(csv_file)#csv.DictReader(csv_file)
    listaCsv = list(csv_reader)

#imprimir nombre concreto
def izenaBilatu():
    with open('employee.txt', mode='r') as csv_file:
        csv_reader = csv.DictReader(csv_file)
        line_count = 0
        izenaUser = input("Sartu langilearen izena: ").capitalize()
        for row in csv_reader:
            if line_count == 0:

                line_count += 1

            if row["Izena"] == izenaUser:
                print(f'\t{row["Izena"]}, {row["Abizeba"]}, {row["Soldata"]}\n ')

            line_count += 1


def nomberApellidoDelNum23():
    with open('employee.txt', mode='r') as csv_file:
        csv_reader = csv.DictReader(csv_file)
        line_count = 0
        #input
        for row in csv_reader:
            if line_count == 0:

                line_count += 1
            if row["Adina"] == "23":
                print(f'\tBere datuak: {row["Izena"]}, {row["Abizeba"]}, {row["Adina"]}')

            line_count += 1


def soldataAldatu():
    with open('employee.txt', mode='r') as csv_file:
        csv_reader = csv.DictReader(csv_file)
        line_count = 0
        numero = input("Sartu langilearen zenbakia: ").capitalize()
        for row in csv_reader:
            if line_count == 0:

                line_count += 1
            if row["Zbki"] == numero:
                print(f'\t{row["Izena"]}, {row["Abizeba"]}, {row["Soldata"]}\n ')

                sueldo = int(input("Sartu soldata berria: "))



                row["Soldata"] = sueldo
                print(f'\t{row["Izena"]}, {row["Abizeba"]}, {row["Soldata"]}\n ')



#buscar la forma de cambiar un dato de la lista desde este archivo
#p.e.: el usuario cambiará el nombre del trabajador que tenga X sueldo

def verTodosLosLangiles():
    with open('employee.txt', mode='r') as csv_file:
        csv_reader = csv.DictReader(csv_file)
        line_count = 0
        for row in csv_reader:
            if line_count == 0:
                print(f'\nColumn names are {", ".join(row)}')
                line_count += 1
            print(
                f'\t{row["Zbki"]}, Bere adina: {row["Adina"]}, {row["Generoa"]}, {row["Soldata"]}, {row["Hileko_gastuak"]}, {row["Lanpostua"]}, {row["Kirola"]}, {row["Izena"]}, {row["Abizeba"]}, {row["Herria"]}.')
            line_count += 1
        print(f'Processed {line_count} lines.')



def sueldoSuperiorA():
    with open('employee.txt', mode='r') as csv_file:
        csv_reader = csv.DictReader(csv_file)
        line_count = 0
        sueldoUser = input("Sartu soldata bat: ")
        for row in csv_reader:
            if line_count == 0:

                line_count += 1

            if row["Soldata"] > sueldoUser:
                print(f'\t{row["Izena"]}, {row["Abizeba"]}, {row["Soldata"]}\n ')

            line_count += 1


def pruebaSolMax():
    maxSoldata = "0"
    langilea = 0
    for i in range(1, len(listaCsv)):
        if listaCsv[i][3] > maxSoldata:
            maxSoldata = listaCsv[i][3]
            langilea = i
            #print(soldMax, f'\t{row["Izena"]}, {row["Abizeba"]} ')
    print(listaCsv[langilea][7] + " " + listaCsv[langilea][8] + " " + listaCsv[langilea][3])  #[langilea] = fila; [7] = columna deseada



def pruebaSolMin():
    minSoldata = listaCsv[1][3]
    langilea = 0
    for i in range(1, len(listaCsv)):
        if listaCsv[i][3] < minSoldata:
            minSoldata = listaCsv[i][3]
            langilea = i
            #print(soldMax, f'\t{row["Izena"]}, {row["Abizeba"]} ')
    print(listaCsv[langilea][7] + " " + listaCsv[langilea][8] + " " + listaCsv[langilea][3])



def ordenarPorEdades(): #ordenar por edades de MENOR a MAYOR
    masJoven = listaCsv[1][1]
    masViejo = listaCsv[1][1]
    edades = list()
    for i in range(1, len(listaCsv)):
        edades.append(listaCsv[i][1])
    print('Ordenatu gabe: ' + str(edades))

    #utilizando el metodo burbuja - #https://cdklhph.wordpress.com/2015/08/08/ordenamiento-burbuja/
    for i in range(1, len(edades)):
        for j in range(0, len(edades) - i):
            if (edades[j + 1] < edades[j]):
                aux = edades[j];
                edades[j] = edades[j + 1];
                edades[j + 1] = aux;
    print('Ordenatuta: ' + str(edades))
    #https://sites.google.com/site/fernandoagomezf/programacion-en-c/tips-de-programador-c/algoritmos/ordenacion-de-arrays-metodo-de-la-burbuja



def kirolikEz():
    with open('employee.txt', mode='r') as csv_file:
        csv_reader = csv.DictReader(csv_file)
        line_count = 0
        #input
        for row in csv_reader:
            if line_count == 0:

                line_count += 1
            if row["Kirola"] == "Inoiz ez":
                print(f'\tBere datuak: {row["Izena"]}, {row["Abizeba"]}, {row["Adina"]}')

            line_count += 1



#primera prueba con fechas
""" 
enlaces info: 
https://stackabuse.com/converting-strings-to-datetime-in-python/ 
https://stackoverflow.com/questions/55259313/print-the-local-date-and-time-in-python
https://stackoverflow.com/questions/4436957/pythonic-difference-between-two-dates-in-years
"""
def pruebaLeerDatakLista():
    dateTimeString = listaCsv[1][10]
    print('Obtener el dato de la lista: ' + dateTimeString)

    dateTimeObjeto = datetime.strptime(dateTimeString, '%Y/%m/%d')
    print('Cambiar el dato de tipo String a tipo Datetime: ' + dateTimeString)



#leer fechas de la lista
def leerFechasLista():
    fechasNacimiento = list()
    for i in range(1, len(listaCsv)):
        fechasNacimiento.append(listaCsv[i][10])

    print('Jaiotze datak: ' + str(fechasNacimiento))


#calcular edad de cada trabajador
def calcularEdades():
    langilea = input("Sartu langile baten ID-a: ")
    data = listaCsv[int(langilea)][10]  #variable tipo String

    # p.e.: "1962/06/25"
    urtea = data[0:4]   #1962
    hilabetea = data[5:7]   #06
    eguna = data[8:10]  #25

    urtebetetzea = date(int(urtea), int(hilabetea), int(eguna)) #generar una variable date casteando datos
    today = date.today()
    print(today)

    age = today.year - urtebetetzea.year
    # si el mes actual es MENOR que el del cumpleaños, TODAVÍA NO ha cumplido (edad - 1)
    if today.month < urtebetetzea.month:
        age -= 1
    # si el mes actual es IGUAL que el del cumpleaños, pero el día actual es mayor, TODAVÍA NO ha cumplido (edad - 1)
    elif today.month == urtebetetzea.month and today.day < urtebetetzea.day:
        age -= 1
    print("Adina: " + str(age))




#lista de listas:
#bilatutakoa = [langilea for langilea in datuak if langilea[9] = 'Eibar']


aukera = "afwff"
salir = False



while(aukera != 'k'):
    print('-----------')
    print('MENUA')
    print('-----------')
    print('a) Ikusi langile guztiak. ')
    print('b) Adierazi 23 urte dituen langilearen izena eta abizena.')
    print('c) Langile bat bilatu (sartu izena): ' )
    print('d) Soldata bat baino handiagoak direnak (sartu soldata bat)')
    print('e) Soldata HANDIENA bistaratu (+ izena))')
    print('f) Soldata TXIKIENA bistaratu (+ izena))')
    print('g) Kirola egiten ez dutenen lanpostua eta herria ')
    print('h) Txikienetik zaharrenera ordenatu ')
    print('i) Soldata igo ')
    print('j) Adierazitako langile baten ADINA kalkulatu ')
    print('k) Irten')

    print()

    aukera = input('Elige una opción: ')


    if (aukera == 'a'):
        print()
        verTodosLosLangiles()
        print('---------------------------------------------------------')
        print()

    elif (aukera == 'b'):
         nomberApellidoDelNum23()
         print('---------------------------------------------------------')
         print()

    elif (aukera == 'c'):
         izenaBilatu()
         print('---------------------------------------------------------')
         print()

    elif (aukera == 'd'):
         sueldoSuperiorA()
         print('---------------------------------------------------------')
         print()

    elif (aukera == 'e'):
         pruebaSolMax()
         print('---------------------------------------------------------')
         print()

    elif (aukera == 'f'):
         pruebaSolMin()
         print('---------------------------------------------------------')
         print()

    elif (aukera == 'g'):
         kirolikEz()
         print('---------------------------------------------------------')
         print()

    elif (aukera == 'h'):
         ordenarPorEdades()
         print('---------------------------------------------------------')
         print()

    elif (aukera == 'i'):
         soldataAldatu()
         print('---------------------------------------------------------')
         print()

    elif (aukera == 'j'):
         calcularEdades()
         print('---------------------------------------------------------')
         print()

    elif (aukera == 'k'):
        print()
        print("Saliendo...\nFIN. ")
        break

    else:
        print('No se ha encontrado la opcion. ')
        print()



#https://realpython.com/python-csv/