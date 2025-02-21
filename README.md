# Sistema de Cadastro CRUD com PHP e MySQL
Sistema básico de Cadastro (CRUD - Criar, Ler, Atualizar e Deletar) utilizando PHP e MySQL.

## Pré-requisitos
Ambiente de Desenvolvimento: Você precisará de um servidor web (como XAMPP, WAMP ou MAMP) com PHP e MySQL instalados.
Editor de Código: Escolha um editor de código de sua preferência (como VS Code, Sublime Text, Atom, etc.).
Conhecimentos Básicos: Familiaridade com HTML, CSS e lógica de programação básica (variáveis, estruturas de controle, funções, etc.).

### Passo 1: Configurando o Banco de Dados MySQL
Acesse o phpMyAdmin: Abra o phpMyAdmin (geralmente acessível via http://localhost/phpmyadmin) no seu navegador.
Crie um Novo Banco de Dados: Clique em "Novo" no menu lateral e dê um nome ao seu banco de dados (ex: cadastro_usuarios). Clique em "Criar".
Crie a Tabela users: importe o arquivo sql.sql no banco de dados *cadastro_usuarios* no phpMyAdmin.

### Passo 3: Salvar arquivos do repositório
Baixe os arquivos do reposório e salve-os dentro de uma pasta (ex: sistema-de-cadasto). Geralmente essa pasta ficará dentro de *public_html* no seu servidor.

### Passo 4: Configurando usuário e senha do MySQL
Substitua seu_usuario e sua_senha pelas suas credenciais do MySQL no arquivo *init.php*.

### Passo 5: Testando o Sistema
Abra o arquivo *index.php* no seu navegador (ex: http://localhost/sistema-de-cadasto/index.php).
Clique em "Cadastrar Usuário" para adicionar novos usuários.
Na listagem, clique em "Editar" para modificar um usuário existente ou em "Remover" para excluí-lo.

## Importante
Esse sistema é simplesmente para testar as funcionalidade básicas CRUD (Criar, Ler, Atualizar e Deletar) usando PHP e MySQL. 
Não é recomendodo usar em produção. Use somente para estudos.
