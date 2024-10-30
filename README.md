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

<div style="display: flex; justify-content: space-around; align-items: flex-start;">

  <div style="text-align: center; margin: 10px; width: 150px;">
    <strong>Cadastro de Usuários</strong><br>
    Registre novos usuários de forma simples.<br>
    <img src="img/cad.png" width="150px" />
  </div>

  <div style="text-align: center; margin: 10px; width: 150px;">
    <strong>Login e Logout</strong><br>
    Acesso seguro às contas e encerramento de sessões.<br>
    <img src="img/login.png" width="150px" />
  </div>

  <div style="text-align: center; margin: 10px; width: 150px;">
    <strong>Gerenciamento de Sessões</strong><br>
    Controle automático de sessões, garantindo personalização e segurança.<br>
    <img src="img/tipos-usuarios.png" width="150px" />
  </div>

</div>

---

## 🌟 Acessos e Permissões

Após o login, os usuários são redirecionados com base no seu perfil, que determina os tipos de acesso e permissões disponíveis:

<div style="display: flex; justify-content: space-around; align-items: flex-start;">

  <div style="text-align: center; margin: 10px; width: 150px;">
    <strong>Admin</strong><br>
    <em>Acesso completo</em><br>
    Gerencia usuários e configurações.<br>
    <img src="img/adm.png" width="150px" />
  </div>

  <div style="text-align: center; margin: 10px; width: 150px;">
    <strong>Gestor</strong><br>
    <em>Acesso moderado</em><br>
    Gerencia sua equipe e acompanha tarefas.<br>
    <img src="img/gestor.png" width="150px" />
  </div>

  <div style="text-align: center; margin: 10px; width: 150px;">
    <strong>Colaborador</strong><br>
    <em>Acesso limitado</em><br>
    Visualiza e atualiza suas próprias tarefas.<br>
    <img src="img/colab.png" width="150px" />
  </div>

</div>

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
| **perfil**   | Tipo de usuário (admin, gestor, colaborador) |
| **created_at**| Data de criação do registro                |

---

## 📥 Instruções de Instalação

1. **Clone o repositório**:
   ```bash
   git clone https://github.com/larissassk/cadlog-system.git
   cd cadlog-system
   
2. Importe o banco de dados:
Abra o database.sql no seu cliente MySQL (como phpMyAdmin) e execute-o para criar as tabelas necessárias.

3. Configure o arquivo de conexão:
Certifique-se de que as credenciais do banco de dados estão corretas no arquivo de configuração do sistema.

5. Inicie o servidor:
Utilize o XAMPP ou outro servidor local para executar o sistema e acesse http://localhost/cadlog-system.

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

---
