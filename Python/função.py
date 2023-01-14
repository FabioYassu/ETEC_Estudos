a = 2
b = 1 

equacao = input("Digite a formula geral da equação linear (a * x + b): ")
print(f"\nA entrada do usuario {equacao} é do tipo {type(equacao)}")

for x in range(5):
    y = eval(equacao)
    print(f"\nResultado da equação para x = {x} é {y}")