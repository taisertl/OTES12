# BACKUP
Projeto da disciplina de Tópicos Avançados de Engenharia de Software

## Objetivo

Serviço Rest que se conecta através de um banco de dados e fornece operações Post, Get, Delete e Put para um serviço de backup no qual realiza cópias de segurança de informações recebidas através de um arquivo Json. Além disso possibilitar atualizar, restaurar e remover este backup. Assim como, listar a lista de todos os backups realizados. 


## Funcionalidades

### Realizar backup
Recebe um arquivo Json com as informações que o usuário quer guardar e armazena o id do backup, a data do backup, o tamanho do arquivo e o arquivo em si. 

### POST backup/
#### body
{
  "arquivo": {...}
}

####exemplo
{
  "arquivo": {"aula": "tópicos eng soft", "dia": "terça"}
}

retorno { id: x, data: y, tamanhoArquivo: z, arquivo: {...}}
OBS: guarde o id do Backup, pois será necessário para restaurar, atualizar e excluir

### Atualiza backup
Recebe chave primária do arquivo de backup (id) já existente e um arquivo Json. Substitui o arquivo com o id que o usuário passou pelo arquivo novo.

### PUT /backup/"id"
#### body
{
  "arquivo": {...}
}

retorno {feedback}

### Desfazer atualização backup
Recebe chave primária de um backup (id) que foi atualizado e restaura as informações antigas.

### PUT /backup/desfazer/put/"id"
retorno {feedback}

### Remover backup
Recebe chave primária do arquivo de backup (id) e exclui o registro do backup correspondente. 

### DELETE /backup/"id"
retorno {feedback}

### Desfazer exclusão do backup
Recebe chave primária de um backup (id) que foi excluído e restaura o backup.

### POST /backup/desfazer/delete/"id"
retorno { id: x, data: y, tamanhoArquivo: z, arquivo: {...}}

### Restaurar backup específico
Recebe chave primária de arquivo (id) do usuário e retorna o arquivo escolhido.

### GET /backup/"id"
retorno { id: x, data: y, tamanhoArquivo: z, arquivo: {...}}

### Lista backups realizados
lista todos os backups correspondentes realizados.

### GET backups/
retorno { backups [ { id: x, data: y, tamanhoArquivo: z, arquivoJson: { … } }, ... ] }


