# Uittesten voor programma
import random

def printBord(bord):
    # print(bord)
    for rij in bord: 
        # print(rij)
        for persoon in rij:
            printPersoon = "{0} {1} {2}".format(persoon["naam"], persoon["geslcaht"], persoon["kleur"])
            print(printPersoon)

piet = {
    "geslcaht" : "man",
    "kleur" : "blauw",
    "beschikbaarheid" : True,
    "target" : False,
    "naam" : "piet"
}

jan = {
    "geslcaht" : "man",
    "kleur" : "rood",
    "beschikbaarheid" : True,
    "target" : False,
    "naam" : "jan"
}

anna = {
    "geslcaht" : "vrouw",
    "kleur" : "blauw",
    "beschikbaarheid" : True,
    "target" : False,
    "naam" : "anna"
}

chantal = {
    "geslcaht" : "vrouw",
    "kleur" : "rood",
    "beschikbaarheid" : True,
    "target" : False,
    "naam" : "chantal"
}

rij1 = [piet, jan]
rij2 = [anna, chantal]
# rij1 = [1, 2]
# rij2 = [3, 4]
kolom = [rij1, rij2]

targetRij = random.choice(kolom)
targetPersoon = random.choice(targetRij)
targetPersoon["target"] = True

# print(targetPersoon)
kolom2 = printBord(kolom)