# tabela-de-usuarios
Desafio de criação de um CRUD simples proposto por https://github.com/dinaerteneto. Este projeto além de exibir uma tabela com registros de usuários armazenados em um banco de dados MySQl, também permite adicionar um novo registro, editar dados de um registro e apagar um registro.  

## Tecnologias utilizadas: 
Foram utilizadas as tecnologias HTML e o framework Bootstrap para estruturação e estilização da aplicação. 
Para o processamento de dados, validação de formulários e ações de exibir, inserir, editar e deletar registros, foram usadas as tecnologias JavaScript (validação) e PHP (validação, processamento e ações) 
## Instalação
É necessário baixar os arquivos disponíveis neste repositório.  
Para utilizar esta aplicação é necessário ter um servidor PHP local e um servidor MySQL via Docker rodando na máquina. Para isto eu utilizei o Windows Subsystem For Linux (wsl) e instalei o PHP neste sistema. Abaixo você verá algumas instruções rápidas de como eu fiz: 

### Instalando o WSL e o Docker
Este repositório: https://github.com/codeedu/wsl2-docker-quickstart ensina sobre o que é, como instalar e como configurar o WSL e o Docker na sua máquina.

### Instalando o PHP
Após instalar e configurar o wsl, abra seu terminal ubuntu e siga estes passos: 
1. Atualize os pacotes do sistema digitando o seguinte código no terminal: sudo apt update
2. Em seguida, instale o PHP e alguns módulos com o seguinte comando: sudo apt install php libapache2-mod-php php-mysql
Isso instalará o PHP, o módulo apache para PHP e o suporte ao MySQL
3. Após a conclusão da instalação, verifique se o PHP foi instalado corretamente executando o comando: php -v (isso exibirá a versão do php instalada no sistema)

## Como usar 
Após fazer todo o processo de instalação e inicialização do servidor e do banco de dados, basta abrir a aplicação no seu navegador e usufruir de suas funcionalidades!

## Situação do projeto
Projeto finalizado.
