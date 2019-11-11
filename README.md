Informa��es do Projeto

O Projeto Loja Virtual tem como principal objetivo demonstrar uma CRUD completa para cadastro de produtos de qualquer
natureza. Esse projeto foi desenvolvido no Yii 2 PHP Framework, uma ferramenta de desenvolvimento que ajuda o desenvolvedor
com as principais ferramentas e tipos de formata��o para a sua p�gina Web ou sistema.

As principais linguagens e ferramentas encontradas e inclu�das no Yii 2 s�o: HTML5, CSS3, PHP, JavaScript, BootStrap 4.

O banco de dados utilizado foi o MySQL por ser muito utilizado e pela familiaridade da linguagem.

Os diferenciais inclusos no projeto s�o:
- Gerenciador de depend�ncias: Composer.
	Com o composer instalado � muito simples instalar o Yii 2 em um computador para desenvolvimento, bastando uma linha
de comando no Prompt de Comando. Al�m disso, � poss�vel fazer Migrations para adicionar ou remover tabelas do banco de dados.

 
Instru��es para instala��o do projeto
1 - Depois de copiar o projeto na pasta do seu servidor. Criar um banco de dados MySQL com o nome "lojaVirtual"
 ou qualquer de sua prefer�ncia.
2 - Ir na pasta .../commom/config/main-local.php e configurar a conex�o com seu banco de dados.
3 - Abrir o prompt de comando, ir na pasta raiz do projeto lojaVirtual e inserir o comando "php init" (sem aspas).
Escolha 0 [Develoment] e confirme "yes".
4 - Ainda no prompt, realize a migration das tabelas do banco, digitando o comando "php yii migrate" e confirmar.
5 - Ap�s o banco de dados estar pronto, em seu navegador web digite: localhost/lojaVirtual/frontend/web e pronto.
Agora s� � testar (adicionar, editar, visualizar ou remover registros).