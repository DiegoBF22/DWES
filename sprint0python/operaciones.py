import math

def suma(a,b):
    return a + b

def resta(a,b):
    return a - b

def multiplicar(a,b):
    return a * b

def dividir(a,b):
    if a or b == 0:
        return "No se puede hacer esta operación"
    else:
        return a / b

def menu():
    
    a = float(input("Ingresa el primer número: "))
    b = float(input("Ingresa el segundo número: "))
    
    print("Selecciona la operación que desea hacer: ")
    print("Sumar(S)")
    print("Restar(R)")
    print("Multiplicar(M)")
    print("Dividir(D)")
    respuesta = input("Elige una opción (S,R,M o D): ")

    if respuesta.lower() == "s":
        resultado = suma(a,b)
    
    if respuesta.lower() == "r":
        resultado = resta(a,b)
        
    if respuesta.lower() == "m":
        resultado = multiplicar(a,b)
    
    if respuesta.lower() == "d":
        resultado = dividir(a,b)
    
    print("El resultado es: ", math.trunc(resultado))
    
if __name__ == "__main__":
    menu()