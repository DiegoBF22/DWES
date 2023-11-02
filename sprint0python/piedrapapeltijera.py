import random

jugadas = {
        'jug1': 'Piedra',
        'jug2': 'Papel',
        'jug3': 'Tijera'
    }


def selecJugada(jugadas):
    return random.choice(list(jugadas.values()))

puntuacion = 0

for i in range(1,6,1):
    
    respuestaIA = selecJugada(jugadas)
    print(respuestaIA)
    respuesta = input("Selecciona la jugada (piedra, papel o tijera): ")
    
    
    if respuesta.lower() == "piedra" and respuestaIA.lower() == "tijera":
        print("Has ganado, piedra gana a tijera")
        puntuacion = puntuacion + 1
    else:
        if respuesta.lower() == "papel" and respuestaIA.lower() == "piedra":
            print("Has ganado, papel gana a piedra")
            puntuacion = puntuacion + 1
        else:
            if respuesta.lower() == "tijera" and respuestaIA.lower() == "papel":
                print("Has ganado, tijera gana a papel")
                puntuacion = puntuacion + 1
            else:
                if respuesta.lower() == respuestaIA.lower():
                    print("Habéis empatado, esto no afectará a la puntuación")
                    puntuacion = puntuacion + 1
                else:
                    print("Has perdido, ", respuestaIA, " gana a ", respuesta)
                    puntuacion = puntuacion - 1

if puntuacion >= 3:
    print("Enhorabuena, has ganado con una puntuación de ", puntuacion, " puntos")
else:
    print("Has perdido, no has conseguido ganar 3 rondas de piedra, papel y tijera")
