public class Pessoa 
{
    String nome;

    // Constructor
    public Pessoa(String nome) {
        this.nome = nome;
    }

    //Método
    public void apresentar() {
        System.out.println(
            "Olá, meu nome é " + this.nome
        );
    }
}

public class Main {
    public static void main(String[] args) {
        Pessoa p1 = new Pessoa("João");
        p1.apresentar();
    }
}


