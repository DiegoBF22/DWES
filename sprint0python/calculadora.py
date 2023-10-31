import math
import operaciones

def menu():
    seguir = "s"
    while seguir == "s":
        a = float(input("Ingresa el primer número: "))
        b = float(input("Ingresa el segundo número: "))
        
        print("Selecciona la operación que desea hacer: ")
        print("Sumar(S)")
        print("Restar(R)")
        print("Multiplicar(M)")
        print("Dividir(D)")
        respuesta = input("Elige una opción (S,R,M o D): ")

        if respuesta.lower() == "s":
            resultado = operaciones.suma(a,b)
        
        if respuesta.lower() == "r":
            resultado = operaciones.resta(a,b)
            
        if respuesta.lower() == "m":
            resultado = operaciones.multiplicar(a,b)
        
        if respuesta.lower() == "d":
            resultado = operaciones.dividir(a,b)
        
        print("El resultado es: ", math.trunc(resultado))
        
        seguir = input("¿Quieres hacer más operaciones? (s/n): ")
        if seguir.lower() != 's':
            break
        
if __name__ == "__main__":
    menu()