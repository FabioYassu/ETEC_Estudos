
from unittest import result


calc = int(input('selecione uma operação 1- soma 2- subtração: '))
a = int(input('Digite um valor : '))
b = int(input('Digite segundo valor : '))

if calc == 1:
    r = a + b    
    print(f"{a} - {b} = {r}")
elif calc == 2:
    r = a - b 
    print(f"{a} - {b} = {r}")
elif calc >= 3:
    print("valor invalido")    
