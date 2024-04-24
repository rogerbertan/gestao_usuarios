# Gestão de Usuários

Este é um projeto simples de exemplo para demonstrar uma aplicação web para gerenciar usuários.

## Configuração do Ambiente

Antes de executar a aplicação, certifique-se de ter os seguintes requisitos instalados:

- PHP
- Servidor Apache
- Servidor MySQL
- Navegador da Web

### Configuração do Banco de Dados

1. Certifique-se de ter o servidor MySQL em execução.
2. Importe o arquivo SQL `db/criar_banco.sql` para criar a estrutura do banco de dados e a tabela de usuários.

## Instalação

1. Clone este repositório para o seu computador:
git clone https://github.com/seu-usuario/gestao_usuarios.git

2. Navegue até o diretório do projeto:
cd gestao_usuarios

3. Copie os arquivos para o diretório do seu servidor web (por exemplo, `htdocs` no Apache).

4. Abra o navegador da web e visite `http://localhost/index.php` para acessar a aplicação.

## Funcionalidades

- `index.php`: Lista todos os usuários cadastrados.
- `add.php`: Permite adicionar um novo usuário.
- `edit.php`: Permite editar um usuário existente.
- `delete.php`: Permite excluir um usuário.
