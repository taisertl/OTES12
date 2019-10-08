# BACKUP
Projeto da disciplina de Tópicos Avançados de Engenharia de Software

## Objetivo

Serviço Rest que se conecta através de um banco de dados e fornece operações Post, Get, Delete e Put para um serviço de backup no qual realiza cópias de segurança de informações recebidas através de um arquivo Json. Além disso possibilitar atualizar, restaurar e remover este backup. Assim como, listar a lista de todos os backups realizados. 


## Funcionalidades

Entrada: arquivo Json
### Realizar backup
Recebe um arquivo Json com as informações que o usuário quer guardar e armazena o id do backup, a data do backup, o tamanho do arquivo e o arquivo em si. 

#### POST backup/
arquivoJson:  {...}\
retorno { id: x, data: y, tamanhoArquivo: z, feedback: {codigo: x, mensagem: “y”}}

### Atualiza backup
Recebe chave primária do arquivo de backup (id) já existente e um arquivo Json. Substitui o arquivo com o id que o usuário passou pelo arquivo novo.

#### PUT atualiza/
{ id: x, arquivoJson: {...} }\
retorno { id: x, data: y, tamanhoArquivo: z, feedback }

### Lista backups realizados
lista todos os backups correspondentes realizados.

#### GET lista/{}
retorno { backups [ { id: x, data: y, tamanhoArquivo: z, arquivoJson: { … } }, ... ] }

### Remover backup
Recebe chave primária do arquivo de backup (id) e exclui o registro do backup correspondente. 

#### DELETE apaga/{id:int}
retorno { id:x, feedback }

Saída: arquivo Json recuperado\
### Restaurar backup escolhido
Recebe chave primária de arquivo (id) do usuário e retorna o arquivo Json escolhido na listagem.

#### GET restaura/{id:int}
retorno { arquivoJson: { … }, feedback: {codigo: x, mensagem: “y”}}

