# BACKUP
Repositório da disciplina 'Tópicos Avançados de Engenharia de Software'

## Objetivo
Realizar cópias de segurança de informações recebidas, para que as mesmas possam ser restaurados em caso da perda dos dados originais.

## Funcionalidades
### Entrada: arquivo Json
Salvar backup: Recebe um arquivo json com as informações que o usuário quer guardar e armazena o id do backup, a data do backup, o tamanho do arquivo e o arquivo em si. 

Lista backups realizados: lista todos os backups correspondentes realizados.

Remover backup: Recebe chave primária do arquivo de backup (id) e exclui o registro do backup correspondente. 

### Saída: arquivo Json recuperado
Restaurar backup escolhido: Recebe chave primária de arquivo (id) do usuário e retorna o arquivo Json escolhido na listagem.


## Requisições
### POST backup/
arquivoJson:  {...}    Arquivo contém o que o usuário gostaria de armazenar.\
retorno { id: x, data: y, tamanhoArquivo: z, feedback: {codigo: x, mensagem: “y”}}
 
### GET restaura/{id}
retorno { arquivoJson: { … }, feedback: {codigo: x, mensagem: “y”}}
 
### UPDATE atualiza/
{ id: x, arquivoJson: {...} }      Usuário passa qual id gostaria de atualizar e com qual arquivo.\
retorno { id: x, data: y, tamanhoArquivo: z, feedback }
 
### DELETE apaga/{id}
retorno { id:x, feedback }
 
### GET lista/{}
retorno { backups [ { id: x, data: y, tamanhoArquivo: z, arquivoJson: { … } }, ... ] }
