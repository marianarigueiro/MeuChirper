# Chirper

Projeto desenvolvido em **Laravel 12**, **Blade** e **Tailwind CSS**, baseado no projeto inicial do bootcamp Laravel Chirper, porém expandido com novas funcionalidades, melhorias visuais e personalizações próprias.

O sistema simula uma rede social de microblog, onde usuários podem publicar mensagens curtas chamadas **Chirps**, visualizar perfis e interagir com uma interface moderna e organizada.

---

# Sobre o Projeto

Este projeto foi criado com foco em aprendizado prático de desenvolvimento web utilizando Laravel, aplicando conceitos essenciais como:

* Arquitetura MVC
* CRUD completo
* Rotas
* Controllers
* Models
* Relacionamentos com Eloquent ORM
* Autenticação de usuários
* Blade Templates
* Estilização com Tailwind CSS
* Organização de projeto real
* Versionamento com Git e GitHub
* Deploy em ambiente real

---

# Funcionalidades

## Autenticação

* Cadastro de usuários
* Login
* Logout
* Sessão autenticada

## Publicações (Chirps)

* Criar novo post
* Editar post próprio
* Excluir post próprio
* Listagem de posts em ordem cronológica

## Perfil de Usuário

* Página de perfil individual
* Nome do usuário
* E-mail
* Data de entrada na plataforma
* Quantidade total de posts
* Avatar com inicial do nome
* Lista de posts daquele usuário

## Interface

* Layout moderno
* Componentes organizados
* Design responsivo
* Estilização personalizada com Tailwind CSS

---

# Melhorias em relação ao projeto padrão do Bootcamp

O projeto original do bootcamp Laravel Chirper foi utilizado como base, porém recebeu diversas modificações e expansões.

## Alterações implementadas

### Interface totalmente personalizada

* Novo visual
* Cards modernos
* Melhor espaçamento
* Tipografia ajustada
* Melhor experiência visual

### Sistema de Perfil

O projeto padrão não possuía perfil completo de usuário.

Foi criado:

* Página `/profile/{id}`
* Estatísticas do usuário
* Exibição de informações pessoais
* Histórico de posts

### Autenticação personalizada

Parte do sistema foi adaptada manualmente para reforçar o aprendizado sobre autenticação e sessões.

### Organização própria de rotas

Rotas reorganizadas para melhor estrutura.

### Expansão do CRUD

Controle de permissões para:

* Apenas dono editar post
* Apenas dono excluir post

### Deploy em produção

Aplicação publicada utilizando **Laravel Cloud**, permitindo acesso online ao projeto em ambiente real.

---

# Tecnologias Utilizadas

```txt
PHP 8.2
Laravel 12
Blade
Tailwind CSS
Vite
SQLite
Git
GitHub
Laravel Cloud
```

---

# Estrutura do Projeto

```txt
app/
 ├── Http/Controllers
 ├── Models

resources/
 └── views/
      ├── layouts
      ├── auth
      ├── chirps

routes/
 └── web.php

database/
public/
```

---

# Como Executar o Projeto Localmente

## 1. Clonar repositório

```bash
git clone https://github.com/seu-usuario/chirper.git
cd chirper
```

## 2. Instalar dependências

```bash
composer install
npm install
```

## 3. Configurar ambiente

```bash
copy .env.example .env
php artisan key:generate
```

## 4. Rodar banco de dados

```bash
php artisan migrate
```

## 5. Iniciar aplicação

```bash
php artisan serve
npm run dev
```

---

# Deploy

O projeto também foi publicado em produção utilizando **Laravel Cloud**, demonstrando conhecimento em hospedagem e entrega de aplicações Laravel.

---

# Aprendizados Aplicados

Durante o desenvolvimento foram praticados:

* CRUD real em Laravel
* Relacionamento User x Chirps
* Middleware de autenticação
* Sessões
* Segurança básica
* Blade Templates
* Layout responsivo
* Estruturação de projeto profissional
* Git e GitHub
* Deploy em nuvem

---

# Próximas Melhorias Futuras

* Curtidas em posts
* Comentários
* Upload de foto de perfil
* Sistema de seguidores
* Busca de usuários
* Tema escuro
* Paginação

---

# Desenvolvido por

**Mariana Rigueiro**

Estudante de Desenvolvimento de Sistemas.

---

# Status

Projeto funcional, publicado online e em constante evolução.
