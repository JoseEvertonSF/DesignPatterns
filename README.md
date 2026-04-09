
# Design Patterns

Implementação dos Design Patterns na prática com base no refactoring guru. A ideia é utilizar os padrões em situações que encontradas no dia a dia para fixar o aprendizado.


## Padrões Criacionais

Fornecem vários mecanismos de criação de objetos, que aumentam a flexibilidade e reutilização do código já existente.

| Nome | Propósito |
| ---- | --------- |
| Factory Method | Fornece uma interface para criar objetos em uma superclasse, mas permite que as subclasses alterem o tipo de objetos que serão criados.
| Abstract Factory | Permite que você crie famílias de objetos relacionados sem ter que especificar suas classes concretas.
| Builder | Permite construir objetos complexos passo a passo. Diferentes representações de um objeto podem ser produzidas usando o mesmo código de construção.
| Prototype | Permite que você cope objetos existentes sem fazer seu código ficar dependente de suas classe.
| Singleton | Permite a você garantir que uma classe tenha apenas uma instância, enquanto provê um ponto de acesso global para essa instância.

## Padrões Estruturais

Explicam como montar objetos e classes em estruturas maiores mas ainda mantendo essas estruturas flexíveis e eficientes.

| Nome | Propósito |
| ---- | --------- |
| Adapter | Permite objetos com interfaces incompatíveis colaborarem entre si.
| Bridge  | Permite que você divida uma classe grande ou um conjunto de classes intimamente ligadas em duas hierarquias separadas—abstração e implementação—que podem ser desenvolvidas independentemente umas das outras.
| Composite | Permite que você componha objetos em estruturas de árvores e então trabalhe com essas estruturas como se elas fossem objetos individuais
| Decorator | Permite que você acople novos comportamentos para objetos ao colocá-los dentro de invólucros de objetos que contém os comportamentos
| Facade | Fornece uma interface simplificada para uma biblioteca, um framework, ou qualquer conjunto complexo de classes.
| Flyweight | Permite colocar mais objetos na quantidade de RAM disponível ao compartilhar partes comuns de estado entre os múltiplos objetos ao invés de manter todos os dados em cada objeto.
| Proxy | Permite que você forneça um substituto ou um espaço reservado para outro objeto

## Padrões Comportamentais

Voltados aos algoritmos e a designação de responsabilidades entre objetos.

| Nome | Propósito |
| ---- | --------- |
| Chain of Responsability | Permite que você passe pedidos por uma corrente de handlers. Ao receber um pedido, cada handler decide se processa o pedido ou o passa adiante para o próximo handler na corrente.
| Command | Transforma um pedido em um objeto independente que contém toda a informação sobre o pedido. Essa transformação permite que você parameterize métodos com diferentes pedidos, atrase ou coloque a execução do pedido em uma fila, e suporte operações que não podem ser feitas.
| Iterator | Permite a você percorrer elementos de uma coleção sem expor as representações dele (lista, pilha, árvore, etc.)
| Mediator | Permite que você reduza as dependências caóticas entre objetos. O padrão restringe comunicações diretas entre objetos e os força a colaborar apenas através do objeto mediador
| Memento | Permite que você salve e restaure o estado anterior de um objeto sem revelar os detalhes de sua implementação
| Observer | Permite que você defina um mecanismo de assinatura para notificar múltiplos objetos sobre quaisquer eventos que aconteçam com o objeto que eles estão observando.
| State | Permite que um objeto altere seu comportamento quando seu estado interno muda. Parece como se o objeto mudasse de classe
| Strategy | Permite que você defina uma família de algoritmos, coloque-os em classes separadas, e faça os objetos deles intercambiáveis.
| Template Method | Define o esqueleto de um algoritmo na superclasse mas deixa as subclasses sobrescreverem etapas específicas do algoritmo sem modificar sua estrutura.
| Visitor | Permite que você separe algoritmos dos objetos nos quais eles operam.

