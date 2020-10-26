# design-patterns-padroes-comportamentais

# Chains of Responsibility

Problema:

Evitar acoplamento do remetente de uma solicitação ao seu receptor, ao dar a mais de um objeto a oportunidade de tratar a solicitação. Encadear os objetos receptores, passando a solicitação o longo da cadeia até que um objeto a trate.

Aplicabilidade:

 - Mais de um objeto pode tratar uma solicitação e o objeto que a tratará não é conhecido a priori. O objeto que trata a solicitação deve ser escolhido automaticamente.
 - Você quer emitir uma solicitação para um dentre vários objetos, sem especificar explicitamente o receptor.
 - O conjunto de objetos que pode tratar uma solicitação deveria ser especificado dinamicamente.

# Command

Problema:

Encapsular uma solicitação como um objeto, desta forma, permitindo parametrizar clientes com diferentes solicitações, enfileirar ou fazer o registro(log) de solicitações e suportar operações que podem ser desfeitas.

Aplicabilidade:

 - Parametrizar objetos por uma ação a ser executada. Você pode expressar tal parametrização numa linguagem procedural através de uma função callback, ou seja, uma função que é registrada em algum lugar para ser chamada em um momento mais tarde. Os commands são uma substituição orientada a objetos para callbacks.
 - Especificar, enfileirar e executar solicitações em tempos diferentes. Um objeto Command pode ter um tempo de vida independente da solicitação original. Se o receptor de uma solicitação pode ser representado de uma maneira independente do espaço de endereçamento, então você pode transferir um objeto command para a solicitação para um processo diferente e lá atender a solicitação.
 - Suportar desfazer operações. A operação execute, de um Command pode armazenar estados para reverter seus efeitos no próprio command. A interface de Command deve ter uma operação Unexecute, que reverte os efeitos de uma chamada anterior de Execute. Os comandos executados são armazenados em uma lista histórica. O nível ilimitado de desfazer e refazer operações é obtido percorrendo esta lista para trás e para frente, chamando operações Unexecute e Execute respectivamente.

 # Interpreter

 Problema:

 Dada uma linguagem, definir uma representação para sua gramática juntamente com um interpretador que usa a representação para interpretar sentenças dessa linguagem.

 Aplicabilidade:

  - A gramática é simples. Para gramáticas complexas, a hierarquia de classes para a gramática se torna o grande e incontrolável. Em tais casos, ferramentas tais como geradores de analisadores são uma alternativa melhor. Elas podem interpretar expressões sem a construção de arvores sintáticas abstratas, oque pode economizar espaço, e, possivelmente, tempo.
  - A eficiência não é uma preocupação crítica. Os interpretadores mais eficientes normalmente são implementados pela interpretação direta de árvores de analise sintática, mas pela sua tradução para uma outra forma. Por exemplo, expressões regulares são frequentemente transformadas em máquinas de estado. Porém mesmo assim, o tradutor poderia ser interpretado pelo padrão interpreter, sendo o padrão ainda aplicado.

# Iterator

Problema:

Fornecer um meio de acessar, sequencialmente, os elementos de um objeto agregado sem expor sua representação subjacente.

Aplicabilidade:

 - Para acessar os conteudos de um objeto agregado sem expor a sua representação interna.
 - Para suportar multiplos recursos de um objeto agregado.
 - Para fornecer uma interface uniforme que percorra diferentes estruturas agregadas (ou seja, para suportar a iteração polimorfica).
 
# Mediator

Problema:
Definir um objeto que encapsula a forma como um conjunto de objetos interage. O mediator promove o acoplamento fraco ao evitar que os objetos refiram uns aos outros explicitamente e permite variar suas interações independentemente.

Aplucabilidade:

 - Um conjunto de objetos se comunica de maneiras bem definidas, porém complexas. As interdependências resultantes são desestruturadas e difíceis de entender.
  - A reutilização de um objeto é dificil porque ele referencia e se comunica com muitos outros objetos.
  - Um comportamento que está distribuido entre várias classes deveria ser customizável, ou adaptável. sem excessiva especialização da subclasse.

