from random import sample

def embaralhar():


    wordle = str(input('Digite algo: '))
    suffle = sample(wordle,len(wordle))
    result = ''.join(suffle)
    print(result)

# Programa Principal
embaralhar()
voltar = 1

while voltar != 2:
    voltar = int(input("Deseja testar outra palavra: \n1 - Sim \n2 - Não\n"))
    if voltar == 1:
        embaralhar()
    elif voltar == 2:
        print("Até uma proxima!")




    

