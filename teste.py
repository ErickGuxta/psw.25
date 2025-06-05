#Criando uma classe Cachorro
class Cachorro:
    def __init__(self, nome, raca):
        self.nome = nome
        self.raca = raca

    def latir(self):
        print(f"{self.nome} está latindo!")

#Criando dois objetos a partir da classe Cachorro
cachorro1 = Cachorro("Rex", "Labrador")
cachorro2 = Cachorro("Bella", "Poodle")

#Chamando o método latir para cada objeto
cachorro1.latir() #saída: Rex está latindo!
cachorro2.latir() #saída: Bella está latindo!

