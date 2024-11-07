# 🌐 Cadlog System

O **Cadlog System** é um sistema simples e eficaz de cadastro e login, desenvolvido em PHP utilizando a arquitetura **MVC** (Model-View-Controller). Foi projetado para facilitar a criação e autenticação de usuários de forma segura e eficiente, atendendo às necessidades de gerenciamento de acessos em diferentes níveis.

---

## 🏛️ Arquitetura

A aplicação é organizada em três camadas principais:

- **Model**: Gerencia a interação com o banco de dados.
- **View**: Apresenta as interfaces que os usuários interagem.
- **Controller**: Controla as ações entre as Views e os Models.

---

## ⚙️ Funcionalidades

O **Cadlog System** oferece as seguintes funcionalidades essenciais:

- **Cadastro de Usuários**: Registre novos usuários de forma simples.
- **Login e Logout**: Acesso seguro às contas e encerramento de sessões.
- **Gerenciamento de Sessões**: Controle automático de sessões, garantindo personalização e segurança.

---

## ✏️ Funcionalidade de Edição de Usuário

Agora é possível **editar os dados de usuários** diretamente no **Cadlog System**. A funcionalidade permite alterar informações como **nome**, **e-mail** e **perfil** (Admin, Gestor, Colaborador).

### Como Funciona:
- **Edição de Dados**: Os campos são pré-preenchidos com os dados atuais do usuário, permitindo uma atualização fácil.
- **Alteração de Perfil**: É possível alterar o perfil do usuário, ajustando as permissões automaticamente.
- **Atualização no Banco de Dados**: As alterações são salvas no banco de dados e refletidas imediatamente.
- **Feedback**: Após a edição, o usuário é redirecionado para a lista de usuários com as mudanças aplicadas.

---

## 🌟 Acessos e Permissões

Após o login, os usuários são redirecionados com base no seu perfil, que determina os tipos de acesso e permissões disponíveis:

- **Admin**: Acesso completo, gerencia usuários e configurações.
- **Gestor**: Acesso moderado, gerencia sua equipe e acompanha tarefas.
- **Colaborador**: Acesso limitado, visualiza e atualiza suas próprias tarefas.

---

## 🗄️ Banco de Dados

O sistema utiliza um banco de dados **MySQL** para armazenar as informações dos usuários.  
**Arquivo de configuração**: `database.sql`.

### Estrutura da Tabela `usuarios`

| Campo        | Descrição                                   |
|--------------|---------------------------------------------|
| **id**       | Identificador único                         |
| **nome**     | Nome do usuário                             |
| **email**    | Endereço de e-mail                         |
| **senha**    | Senha (armazenada de forma segura)         |
| **perfil**   | Tipo de usuário (admin, gestor, colaborador)|
| **created_at**| Data de criação do registro                |

---

## 📥 Instruções de Instalação

1. **Clone o repositório**:
   ```bash
   git clone https://github.com/larissassk/cadlog-system.git
   cd cadlog-system
   
2. Importe o banco de dados: Execute o database.sql no MySQL.



3. Configure a conexão: Atualize as credenciais no arquivo de configuração.



4. Inicie o servidor: Use o XAMPP ou outro servidor local e acesse http://localhost/cadlog-system.

---
## 🛠️ Tecnologias Utilizadas

- **PHP**: Backend do sistema.
- **MySQL**: Banco de dados.
- **HTML/CSS**: Interface do usuário (Views).

---

## ✍️ Feito por

- **Larissa Manrique**  
  [LinkedIn](https://www.linkedin.com/in/larissa-manrique/)

- Com instruções do **Leonardo Rocha**  
  [LinkedIn](https://www.linkedin.com/in/leonardossrocha/)
