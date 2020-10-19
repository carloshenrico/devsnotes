DEVSNOTES: (Sistema de anotações simples)



LIBERAR ACESSOS NO HEADER:

- header("Access-Control-Allow-Origin: *"); //PERMITIR OUTRO SITE FAZER UMA REQUISIÇÃO NA MINHA API
- header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); //PERMITIR MÉTODOS DE REQUISIÇÃO
- header("Content-Type: application/json"); //INFORMANDO O TIPO DE RETORNO


O que o projeto precisa fazer?

- Listar as anotações
- Pegar as informações da anotações
- Inserir uma anotação nova
- Atualizar uma anotação
- Deletar uma anotação
 
Qual a estrutura de dados?

- local para armazenar as anotações
-- id
-- title
-- body

Quais os endpoints?

- (METODO) /url (PARAMETROS)

- (GET) /api/notes - /api/getall.php
- (GET) /api/note/id - /api/get.php?id=123
- (POST) /api/note (TITLE, BODY) - /api/insert.php
- (PUT) /api/note/id (TITLE, BODY) /api/update.php?id=123
- (DELETE) /api/note/id - /api/delete.php (ID)