def adivinanza():
    adivinanzas = {
        'adivin1': '¿Cómo se denomina a un perro con fiebre?',
        'adivin2': 'Todos me pisan a mí, pero yo no piso a nadie; todos preguntan por mí, yo no pregunto por nadie.',
        'adivin3': 'Tengo llaves pero no cerradura. El blanco y el negro pasan por mi cintura.'
    }
    respuestas = {
        'resp1': """        A.- Fiebrerro
        B.- Hot dog
        C.- Perriebre""",
        'resp2': """        A.- Camino
        B.- Pagafantas
        C.- Agua""",
        'resp3': """        A.- Bruce Lee
        B.- Cerrajero
        C.- Kárate"""
    }
    puntuacion = 0
    
    print("Resuelve esta divinanza")
    print(adivinanzas['adivin1'])
    print(respuestas['resp1'])
    respuesta = input("Elige la opción (A, B o C): ")
    if respuesta.lower() == "b":
        print("¡Correcto! La respuesta es la B, Hot dog, Has obtenido 10 puntos")
        puntuacion = puntuacion+10
    else:
        print("Respuesta incorrecta. La respuesta correcta es B, Hot dog, has perdido 5 puntos")
        if puntuacion>=5:
            puntuacion=puntuacion-5
        
    print("Resuelve esta divinanza")
    print(adivinanzas['adivin2'])
    print(respuestas['resp2'])
    respuesta = input("Elige la opción (A, B o C): ")
    if respuesta.lower() == "a":
        print("¡Correcto! La respuesta es la A, Camino, Has obtenido 10 puntos")
        puntuacion = puntuacion+10
    else:
        print("Respuesta incorrecta. La respuesta correcta es A, Camino, has perdido 5 puntos")
        puntuacion = puntuacion-5
    
    print("Resuelve esta divinanza")
    print(adivinanzas['adivin3'])
    print(respuestas['resp3'])
    respuesta = input("Elige la opción (A, B o C): ")
    if respuesta.lower() == "c":
        print("¡Correcto! La respuesta es la C, Kárate, Has obtenido 10 puntos")
        puntuacion = puntuacion+10
    else:
        print("Respuesta incorrecta. La respuesta correcta es C, Kárate, has perdido 5 puntos")
        puntuacion = puntuacion-5
                
    print("Tu puntuación final es ", puntuacion)

if __name__ == "__main__":
    adivinanza()