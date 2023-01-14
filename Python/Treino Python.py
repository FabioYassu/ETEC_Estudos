texto = "Aprendendo Python na displina de LP"

print(f"Tamanhodp texto = {len(texto)}")
print(f"Python in texto = {'Python' in texto}")
print(f"Quatidade de y no texto = {texto.count('y')}")
print(f"As 5 primeiras letras são: {texto[0:9]}")


texto = "Aprendendo Python na displina de LP"

print(f"texto = {texto}")
print(f"Tamanho do texto = {len(texto)}\n")

palavra = texto.split(' ')
print(f"palavra = {palavra}")
print(f"Tamanho de palavra = {len(palavra)}")


vogais = ['a','e','i','o','u'] 

for vogal in vogais:
	print(f'posição = {vogais.index(vogal)}, valor = {vogal}')
	
linguagens = ["Pyhton", "Java", "JavaScript","C","C#", "C++", "Swift", "Go", "Kotlin"]
#linguagens = '''Python Java JavaScript C C# C++ Swift Go Kotlin'''.split()

print("Antes da listcomp", linguagens)

linguagens = [item.lower() for item in linguagens]

print("\n Depois da listcomp = ", linguagens)

## --- BUILT'IN MAP ----
print("Exemplo")
ling = '''Python Java JavaScript c C# C++ Swift Go Kotlin'''.split()

nova_lista = map(lambda x: x.lower(), ling)
print(f"A nova lista é = {nova_lista}\n")

nova_lista = list(nova_lista)
print(f"Agora sim, a nova lista é = {nova_lista}")


num = list(range(0,22))
num_par = list(filter(lambda x: x % 2 == 0, num))
num_impar = list(filter(lambda x: x % 2 != 0, num))

print(num_par)
print(num_impar)

#--- TUPLAS --- imutavel

vogais = ('a', 'e', 'i', 'o', 'u')
print(f"Tipo do objeto vogais = {type(vogais)}")

for p, x in enumerate(vogais):
  print(f"posição = {p}, valor = {x}")
  
  
#--- SET --- construtor

v1 ={'aeiou'} #sem uso do Set
print(type(v1), v')
v2 = set ('aeiouaaaaaa') # Set com string
print(type(v2), v2)
v3 = set(['a','e','i','o','u']) # Set com lista
print(type(v3), v3)
v4 = set(('a','e','i','o','u')) # set com tupla
print(type(v4), v4)

print(set('banana'))

#--- Obejto Mapping ---

#Ex1 -Criação de dicionario vazio, com atribução posterior de chave e valor

dici1={}
dici1['nome']="Fabio"
dici1['idade']=30

#Ex2 - Criação de dicionario usando um par elementos na mforma, chave : valor

dici2 = {'nome': 'Fabio', 'idade':30}

#Ex3 - Criação de dicionario com lista de tuplas, Cada tupla representa um par chave : valor

dici3 = dict([('nome', 'Fabio'), ('idade', 30)])

#Ex4 - Criação de dicionario com função built-in zip() e duas listas, uma com as chaves e outra com os valores

dici4 = dict(zip(['nome','idade'],["Fabio", 30]))

print(dici1 == dici2 == dici3 == dici4)
print(dici1)
print(dici2)
print(dici3)
print(dici4)

#--- ARRAY NumPy --- matrizes

import numpy
matriz1_1 = numpy.array([1,2,3]) #Cria matriz 1 linha e 1 coluna
matriz2_2 = numpy.array([[1,1],[3,4]]) # Cria matriz 2 linhas e 2 colunas
matriz3_2 = numpy.array([[1,2],[3,4],[4,6]]) # Cria matriz 3 linhas e 2 colunas
matriz2_3 = numpy.array([[1,2,3],[4,5,6]]) # Cria matriz 2 linhas e 3 colunas
print(type(matriz1_1))
print('\n matriz1_1 =\n ', matriz1_1)
print('\n matriz2_2 =\n ', matriz2_2)
print('\n matriz3_2 =\n ', matriz3_2)
print('\n matriz2_3 =\n ', matriz2_3)

#--- Busca Binaria ---

def executar_busca_binaria(lista, valor):
  minimo = 0
  maximo = len(lista) - 1
  while minimo <= maximo:
    #Encontra o elemento que divide a lista ao meio
    meio = (minimo + maximo) // 2
    # Verifica se o valor esta a esquerda ou direita do valor central
    if valor < lista[meio]:
      maximo = meio - 1
    elif valor > lista[meio]:
      minimo = meio + 1
    else:
        return True # Se o valor for encontrado para aqui
  return False # Se chegar até aqui, significa que o valor não foi encontrado
      
lista = list(range(1, 20))

print(lista)

print('\n' , executar_busca_binaria(lista=lista, valor=10))
print('\n' , executar_busca_binaria(lista=lista, valor=20))











