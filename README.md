# 🌐 Cadlog System

<p align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="Linguagem PHP">
  <img src="https://img.shields.io/badge/MySQL-00758F?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/MVC-Architecture-brightgreen" alt="Arquitetura MVC">
</p>

## 📑 Índice
- 🔹 [**Introdução**](#introdução)
- 🏛️ [**Arquitetura**](#arquitetura)
- ⚙️ [**Funcionalidades**](#funcionalidades)
- 🔑 [**Acessos e Permissões**](#acessos-e-permissões)
- 📝 [**Edição e Exclusão de Usuários**](#edição-e-exclusão-de-usuários)
- 🗄️ [**Banco de Dados**](#banco-de-dados)
- ⚡ [**Instalação**](#instalação)
- 💻 [**Tecnologias**](#tecnologias)
- ✍️ [**Feito por**](#feito-por)

---

<a name="introdução"></a>
O **Cadlog System** é um sistema simples e eficaz de cadastro e login, desenvolvido em PHP utilizando a arquitetura **MVC** (Model-View-Controller). Foi projetado para facilitar a criação e autenticação de usuários de forma segura e eficiente, atendendo às necessidades de gerenciamento de acessos em diferentes níveis.

---

<a name="arquitetura"></a>
## Arquitetura

🏛️ A aplicação é organizada em três camadas principais, conforme o padrão **Model-View-Controller (MVC)**.

- **Model**: Gerencia a interação com o banco de dados.
- **View**: Apresenta as interfaces que os usuários interagem.
- **Controller**: Controla as ações entre as Views e os Models.

---

<a name="funcionalidades"></a>
## Funcionalidades

⚙️ O **Cadlog System** oferece as seguintes funcionalidades essenciais:

| Recurso | Descrição | Demonstração |
| :--- | :--- | :--- |
| **Cadastro de Usuários** | Registre novos usuários de forma simples. | <img src="img/cad.png" width="250px" alt="Tela de Cadastro"/> |
| **Login e Logout** | Acesso seguro às contas e encerramento de sessões. | <img src="img/login.png" width="250px" alt="Tela de Login"/> |
| **Gerenciamento de Sessões** | Controle automático de sessões e personalização baseada em perfil. | <img src="img/tipos-usuarios.png" width="250px" alt="Tipos de Usuários no Sistema"/> |

---

<a name="acessos-e-permissões"></a>
## Acessos e Permissões

Após o login, os usuários são redirecionados com base no seu perfil, que determina os tipos de acesso e permissões disponíveis.

| Perfil | Nível de Acesso | Visualizar Lista | Editar Registros | Excluir Registros | Demonstração |
| :--- | :--- | :--- | :--- | :--- | :--- |
| **Admin** | Completo | ✅ Sim | ✅ Sim | ✅ Sim | <img src="img/adm.png" width="250px" alt="Perfil Admin"/> |
| **Gestor** | Moderado | ✅ Sim | ✅ Sim | ❌ Não | <img src="img/gestor.png" width="250px" alt="Perfil Gestor"/> |
| **Colaborador** | Limitado | ❌ Não | ❌ Não | ❌ Não | <img src="img/colab.png" width="250px" alt="Perfil Colaborador"/> |

---

<a name="edição-e-exclusão-de-usuários"></a>
## Edição e Exclusão de Usuários

### Edição de Usuário
Agora é possível editar os dados dos usuários no Cadlog System. Você pode alterar:

- **Nome**
- **E-mail**
- **Perfil** (Admin, Gestor, Colaborador)

#### Como Funciona:
- **Edição de Dados**: Os campos são pré-preenchidos com as informações atuais.
- **Alteração de Perfil**: Permite alterar o perfil do usuário, ajustando as permissões automaticamente.
- **Atualização no Banco de Dados**: As alterações são salvas no banco de dados e aplicadas imediatamente.
- **Feedback**: Após a edição, o usuário é redirecionado para a lista de usuários com as mudanças aplicadas.

### Exclusão de Usuário
Agora também é possível excluir usuários do sistema.

#### Como Funciona:
- O usuário pode ser excluído **permanentemente**.
- A exclusão requer **confirmação** para evitar erros.
- Após a exclusão, a lista de usuários é **atualizada** automaticamente.

---

<a name="banco-de-dados"></a>
## Banco de Dados

🗄️ O sistema utiliza um banco de dados **MySQL** para armazenar as informações dos usuários.
**Arquivo de configuração**: `database.sql`.

### Estrutura da Tabela `usuarios`

| Campo | Descrição |
| :--- | :--- |
| **id** | Identificador único |
| **nome** | Nome do usuário |
| **email** | Endereço de e-mail |
| **senha** | Senha (**armazenada de forma segura** utilizando `password_hash()`) |
| **perfil** | Tipo de usuário (admin, gestor, colaborador) |
| **created_at** | Data de criação do registro |

---

<a name="instalação"></a>
## Instalação

1.  **Clone o repositório**:
    ```bash
    git clone [https://github.com/larissassk/cadlog-system.git](https://github.com/larissassk/cadlog-system.git)
    cd cadlog-system
    ```
2.  **Importe o banco de dados**: Execute o `database.sql` no MySQL.
3.  **Configure a conexão**: Atualize as credenciais no arquivo de configuração.
4.  **Inicie o servidor**: Use o XAMPP ou outro servidor local e acesse `http://localhost/cadlog-system`.

---

<a name="tecnologias"></a>
## Tecnologias

- **PHP**: Backend do sistema.
- **MySQL**: Banco de dados.
- **HTML/CSS**: Interface do usuário (Views).

---

<a name="feito-por"></a>
## ✍️ Feito por

- **Larissa Manrique**
  [LinkedIn](https://www.linkedin.com/in/larissa-manrique/)

- Com instruções do **Leonardo Rocha**
  [LinkedIn](https://www.linkedin.com/in/leonardossrocha/)
