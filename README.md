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

# Memento

Problema:

Sem violar o encapsulamento, capturar e externalizar um estado interno de um objeto, de maneira que o objeto possa ser restaurado para esse estado mais tarde.

Aplicabilidade:
 - Um instantâneo(porções do) estado de um objeto, devem ser alvo de maneira que possam ser restaurados para esse estadeo mais tarde.
 - Uma interface direta para obtenção do estado exporia detalhes da implementação e romperia o encapsulamento do objeto.

# Observer

Problema:

Definir uma dependencia "um-para-muitos" entre objetos, de uma maneira que quando um objeto muda de estado, todos os seus dependentes são notificados e atualizados automaticamente.

Aplicabilidade:
 - Quando uma abstração tem dois aspectos, um dependente do outro. Encapsular esses aspectos em objetos separados, permite-se variá-los e reutilizá-los independentemente;
 - Quando uma mudança em um objeto exige mudanças em outros, e você não sabe quantos objetos necessitam ser mudados.
 - Quando um objeto deveria ser capaz de notificar outros objetos sem fazer hipóteses, ou usar informações sobre quem são esses objetos. Em outras palavras, você não quer que esses objetos sejam fortemente acoplados.

# State

Problema:

Permite a um objeto alterar seu comportamento quando o seu estado interno muda. O objeto parecerá ter mudado sua classe.

Aplicabilidade:

 - O comportamento de um objeto depende do estado e ele pode mudar o seu comportamento em tempo de execução dependendo desse estado.
 - Operações tem comandos condicionais grantes, de várias alternativas, que dependem do estado do objeto. Esse estado é normalmente representado por uma ou mais constantes enumeradas. Frequentemente, várias operações conterão essa mesma estrutura condicional. O padrão State coloca cada ramo do comando adicional em uma classe separada. Isso permite tratar o estado do objeto propriamente dito, que pode variar independente de outros objetos.
 
# Strategy

Problema:

Definir uma familia de algoritmos, encapsular cada uma delas e torna-las intercambiáveis. O Strategy permite que o algoritmo varia independentemente dos clientes que o utilizam.

Aplicabilidade:

 - Muitas classes relacionadas diferem somente no seu comportamento. As estratégias fornecem uma maneira de configurar uma classe com um dentre muitos comportamentos.
  - Você necessita de variantes de um algoritmo. Por exemplo, pode definir algoritmos que refletem diferentes soluções de compromisso entre espaço/tempo. As estratégias podem ser usadas quando essas variantes são implementadas como uma hierarquia de classes de algoritmos.
  - Um algoritmo usa dados dos quais os clientes não deveriam ter conhecimento. Use o padrão Strategy para evitar a exposição de estruturas de dados complexas, específicas do algoritmo;
  - Uma classe define muitos comportamentos, e estes aparecem em suas operações como multiplos comandos condicionais da linguagem. Em vez de usar muitos comandos condicionais, mova os ramos condicionais relacionados para sua própria classe Strategy.
  