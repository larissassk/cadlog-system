# Cadlog System

**Cadlog System** é um sistema de cadastro e login desenvolvido em PHP com a arquitetura **MVC** (Model-View-Controller). O sistema tem como objetivo facilitar a criação, autenticação e gerenciamento de usuários de forma eficiente.

## Arquitetura

O sistema segue a arquitetura MVC, dividindo a aplicação em três partes principais:

- **Model**: Responsável pelo gerenciamento e manipulação dos dados, conectando-se ao banco de dados.
- **View**: Exibe as interfaces para o usuário final, permitindo a interação com o sistema.
- **Controller**: Faz a mediação entre a View e o Model, processando as solicitações dos usuários e atualizando os dados conforme necessário.

## Funcionalidades

O **Cadlog System** oferece as seguintes funcionalidades:

- **Cadastro de usuários**: Permite que novos usuários se registrem no sistema.
  ![Cadastro](img/tela-cadastro)  
- **Login e logout**: Usuários podem acessar suas contas com credenciais válidas e encerrar suas sessões com segurança.
-   ![Cadastro](img/tela-login)  
- **Gerenciamento de sessões**: As sessões dos usuários são gerenciadas para manter a segurança e a personalização.
- **Banco de dados integrado**: Um banco de dados MySQL é utilizado para armazenar as informações dos usuários, com o arquivo de configuração `database.sql`.

## Tecnologias Utilizadas

- **PHP**: Linguagem principal para o desenvolvimento do backend.
- **MySQL**: Banco de dados para armazenamento das informações.
- **HTML/CSS**: Para a criação das interfaces do usuário (Views).


## Feito por

- **Larissa Manrique**
- **Com instruções de** Leonardo Rocha
