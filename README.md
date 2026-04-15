Chirper

Projeto desenvolvido em Laravel 12 e Tailwind CSS, inspirado em uma rede social simples de microblog, onde usuários podem criar publicações rápidas chamadas Chirps.

Sobre o projeto

O Chirper é uma aplicação web onde usuários podem:

- Criar conta
- Fazer login e logout
- Publicar chirps
- Editar seus próprios posts
- Excluir seus próprios posts
- Visualizar perfil de usuários
- Ver quantidade de publicações
- Navegar por uma interface moderna e responsiva

Tecnologias utilizadas

- PHP 8.2
- Laravel 12
- Blade
- Tailwind CSS
- Vite
- SQLite

Interface

Projeto com foco em visual limpo, moderno e organizado.

Como rodar o projeto

1. Clonar repositório

git clone https://github.com/seu-usuario/chirper.git
cd chirper

2. Instalar dependências

composer install
npm install

3. Configurar ambiente

copy .env.example .env
php artisan key:generate

4. Rodar migrations

php artisan migrate

5. Iniciar projeto

php artisan serve
npm run dev

Estrutura principal

app/
resources/views/
routes/web.php
database/
public/

Aprendizados no projeto

Durante o desenvolvimento foram praticados conceitos como:

- MVC
- Rotas
- Controllers
- Models
- Relacionamentos Eloquent
- CRUD completo
- Autenticação
- Blade Templates
- Tailwind CSS
- Git e GitHub

Desenvolvido por

Mariana Rigueiro

Status

Projeto funcional e em evolução.
