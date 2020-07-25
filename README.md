

## Sobre o Projeto

O projeto foi desenvolvido par avaliação para o cargo de programador BACK-END, para empresa Sorocabacom. O projeto tem o intuito de demostrar o nivel do programador com o Framework Laravel.

## Detalhes do Projeto

Projto foi desenvolvido em:

-Framework Laravel
-JavaScript usando gerenciador de pacotes node
-O banco de dados com SQLite
-Bootstrap para a interface do sistema

## Configuração do Projeto

Após de fazer o git clone do repositorio clonar o arquivo .env.example e renomear para .env .

Usar comandos:
- composer update 
- php artisan key:generate

Neste repositorio terá o banco de dados (SQLite) e as imagnes que já foram cadastradas.  Mas se for necessario começar com a aplicação limpa, é só usar o comando de apagar as tabelas e imediatamente criar (opicional apagar as imagnes do repositorio storage/app/public/img):

- php artisan migrate:rollback
- php artisan migrate

Se for trocar o banco é so colocar as credencias no arquivo .env e usar o comando de criação do banco:

- php artisan migrate

