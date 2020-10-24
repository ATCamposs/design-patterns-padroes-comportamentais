# design-patterns-padroes-comportamentais

*Chains of Responsibility*

Problema:

Evitar acoplamento do remetente de uma solicitação ao seu receptor, ao dar a mais de um objeto a oportunidade de tratar a solicitação. Encadear os objetos receptores, passando a solicitação o longo da cadeia até que um objeto a trate.

Aplicabilidade:

 - Mais de um objeto pode tratar uma solicitação e o objeto que a tratará não é conhecido a priori. O objeto que trata a solicitação deve ser escolhido automaticamente.
 - Você quer emitir uma solicitação para um dentre vários objetos, sem especificar explicitamente o receptor.
 - O conjunto de objetos que pode tratar uma solicitação deveria ser especificado dinamicamente.
