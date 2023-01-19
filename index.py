# Uittesten voor programma
import random

lijst = ["1","2","3","4","5"]

z = random.choice(lijst)

cijfer = input("")

while cijfer != z:
    print("probeer opnieuw")
    cijfer = input("")

print("goed zo")



# cijfer2 = input("Is de persoon een man? ")
# valid_inputs = ["ja","nee"]
# while cijfer2 not in valid_inputs:
#     cijfer2 = input("Try again ")

# if cijfer2 == "ja":
#     print("ja")
# else:
#     print("nee")