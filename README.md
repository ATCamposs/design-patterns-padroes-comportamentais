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

  