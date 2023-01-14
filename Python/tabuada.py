def tabuada():

    
    tab = int(input('Digite um numero: '))

    for count in range(10):

        print("%d x %d = %d" % (tab, count+1, tab*(count+1)))
    
#Programa Principal
tabuada()
voltar = 1

while voltar != 2:
    voltar = int(input("Deseja ver a tabuada de outro número: \n1 - Sim \n2 - Não\n"))
    if voltar == 1:
        tabuada()
    elif voltar == 2:
        print("Até uma proxima!")

    