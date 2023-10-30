def adivinanza():
    print("Resuelve esta divinanza")
    print("¿Cómo se denomina a un perro con fiebre?")
    print("A.- Fiebrerro")
    print("B.- Hot dog")
    print("C.- Perriebre")
    
    respuesta = input("Elige la opción (A, B o C): ")
    
    if respuesta.lower() == "B":
        print("¡Correcto! La respuesta es la B, Hot dog")
    else:
        print("Respuesta incorrecta. La respuesta correcta es B, Hot dog")

if __name__ == "__main__":
    adivinanza()