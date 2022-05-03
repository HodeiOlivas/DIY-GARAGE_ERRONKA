"""
Leer un archivo txt y decir lo siguiente:
    - pedirle al usuario que especifique el nombre del fitxero que se va a leer

    - contar cuántas veces aparece la palabra qye nosotros digamos
    - imprimir la última fila del fichero
    - sustituir una palabra por otra (replace)
    - el usuario introducirá una letra, y todas las letras que no sean la del usuario, se cambiarán por "*" -> user = 'a' / "kaixo mutil" -> "*a*** *****"
"""

import csv

from csv import reader

with open('employee.txt', mode='r') as f:   #with oper -> sartu fitxategiaren izena
    lerroak = f.readlines()
    aukera = "0"

    while not (aukera == -1):
        print("\n1. Contar X palabra en el fichero: ")
        print("2. Imprimir la última fila del fichero: ")
        print("3. Sustituir una palabra por otra. ")
        print("4. Introducir X letra y cambiar el resto por asteriscos. ")
        print("5. Cambiar cada letra por la siguiente (hola -> ipmb) ")
        aukera = int(input("\nSartu aukera bat:"))

        if aukera == 1:
            palabra = input("\nQué palabra quieres buscar? ")
            numPalabra = 0
            for i in lerroak:
                numPalabra += i.count(palabra)
            print("La palabra elegida aparece " + str(numPalabra) + " veces. ")
        elif (aukera == 2):
            print(lerroak[len(lerroak) - 1])
        elif (aukera == 3): #buscar soldataAldatu()
            cambio = input("Sartu ordezkatu nahi duzun hitza: ")
            nuevaPalabra = input("Sartu hitz berria: ")
            for i in lerroak:
                print(i.replace(cambio, nuevaPalabra))
        elif (aukera == 4):
            letraUser = input("Qué letra quieres mantener? ")
            print("La letra es: " + str(letraUser))
            for i in lerroak:
                for j in range(len(i)):
                    if i[j] == " ":
                        print(" ",end=" ")
                    elif i[j] != letraUser:
                        print("*",end=" ")
                    elif i[j] == letraUser:
                        print(letraUser, end=" ")
                print()
        elif (aukera == 5):
            for i in lerroak:
                for j in range(len(i)):
                    if i[j] == " ":
                        print(" ",end="")
                    elif i[j] == "z":
                        siguiente = chr(97)
                        print(str(siguiente),end="")
                    elif i[j] == "Z":
                        siguiente = chr(65)
                        print(str(siguiente),end="")
                    elif i[j] != "z" or i[j] != "Z":
                        actualAsci = ord(i[j])
                        siguiente = chr(actualAsci + 1)
                        print(str(siguiente),end="")
                    else:
                        print(i[j],end="")
                print()

        print("---------------")



"""
ver todos los datos -> una vez cambiados
line_count = 0
        for row in csv_reader:
            if line_count == 0:
                print(f'\nColumn names are {", ".join(row)}')
                line_count += 1
            print(
                f'\t{row["Zbki"]}, Bere adina: {row["Adina"]}, {row["Generoa"]}, {row["Soldata"]}, {row["Hileko_gastuak"]}, {row["Lanpostua"]}, {row["Kirola"]}, {row["Izena"]}, {row["Abizeba"]}, {row["Herria"]}.')
            line_count += 1
        print(f'Processed {line_count} lines.')
"""