# Projeto -> Driver Management Platform

O Projeto Driver Management Platform** é uma solução completa de gerenciamento de cadastros de motoristas, desenvolvida para simplificar e otimizar o processo de gerenciamento de informações e dados relacionados a motoristas. Este sistema oferece uma ampla gama de recursos e funcionalidades projetados para atender às necessidades de empresas e organizações que dependem da gestão eficiente de seus motoristas.

## Descrição do Projeto

Em um mundo onde a mobilidade é fundamental, a gestão de motoristas desempenha um papel crítico em várias indústrias, desde empresas de transporte até serviços de entrega. O projeto Driver Management Drivers é uma resposta a essa necessidade, oferecendo uma plataforma confiável e robusta para o gerenciamento de motoristas.

### Principais Características

- **Cadastro de Motoristas**: O sistema permite o registro de informações detalhadas de motoristas, incluindo nome, CPF, número de telefone e outras informações relevantes.

- **Pesquisa Avançada**: Uma funcionalidade de pesquisa avançada facilita a localização rápida de motoristas com base em critérios específicos, como nome ou CPF.

- **Atualização de Dados**: Os dados dos motoristas podem ser facilmente atualizados conforme necessário, com verificações para evitar duplicatas de CPF ou números de telefone.

- **Registro de Transportes**: A plataforma permite associar motoristas a veículos, tornando o gerenciamento de frotas mais eficiente.

- **Autenticação de Administração**: A autenticação de administradores garante que apenas pessoal autorizado possa acessar e gerenciar os dados dos motoristas.

- **Exclusão Segura**: A opção de exclusão segura garante que os registros de motoristas sejam gerenciados com segurança, evitando a perda acidental de informações.
- **Integração com Slack para Leitura de Logs**: O projeto oferece a capacidade de integração com o Slack para a leitura de logs do lado do servidor. Isso permite que administradores monitorem o sistema em tempo real, recebendo notificações e registros de atividades diretamente no Slack.

- **Documentação Completa**: O projeto inclui documentação detalhada das rotas e serviços disponíveis, facilitando a integração com outras aplicações.

  ---------------------------------------------------------------------------------------------------------------------------

## Vantagens do Uso do Slack no Lado do Servidor
  - A integração com o Slack no lado do servidor oferece várias vantagens significativas para o gerenciamento de aplicativos e sistemas:
  
  - Monitoramento em Tempo Real: O Slack fornece notificações em tempo real, permitindo que os administradores recebam informações críticas no momento em que ocorrem. Isso é particularmente valioso para identificar problemas imediatos e tomar medidas proativas.
  
  - Centralização das Comunicações: A integração com o Slack centraliza as comunicações relacionadas ao sistema em um só lugar, facilitando o acesso a logs, alertas e mensagens relevantes.
  
  - Notificações Personalizadas: Os administradores podem configurar notificações personalizadas para eventos específicos, o que permite um nível mais alto de controle sobre o que é monitorado e reportado.
  
  - Colaboração Eficiente: Com a capacidade de compartilhar informações em canais Slack, a colaboração entre equipes de administração e desenvolvimento se torna mais eficiente, facilitando a solução de problemas e a tomada de decisões.
  
  - Registro de Histórico: Os registros do Slack são arquivados e podem ser facilmente acessados para referência futura, o que é útil para fins de auditoria, revisão e documentação.
  
  - Escalabilidade: O Slack é escalável e pode acomodar sistemas de todos os tamanhos, tornando-o adequado para empresas em crescimento.
  
  - Notificações Multicanais: Os administradores podem direcionar notificações para canais específicos, garantindo que a equipe certa receba informações relevantes.
  
- No contexto do projeto "Driver Management Platform", a integração com o Slack no lado do servidor oferece uma camada adicional de segurança, monitoramento e colaboração. Isso permite que os administradores acompanhem e gerenciem a atividade do sistema de forma mais eficaz, mantendo a integridade dos dados e respondendo rapidamente a eventos críticos. Além disso, o Slack se destaca como uma plataforma confiável para a comunicação e o gerenciamento de logs, tornando-o uma escolha inteligente para qualquer aplicativo que requer monitoramento em tempo real e notificações instantâneas.

Este projeto é uma solução valiosa para empresas que precisam gerenciar uma força de trabalho de motoristas eficiente e segura. Com uma interface intuitiva e funcionalidades abrangentes, o Driver Management Drivers simplifica o processo de registro, pesquisa e atualização de informações de motoristas, contribuindo para um gerenciamento mais eficaz e um melhor controle sobre as operações.
.

```markdown
# Projeto Laravel com Docker Compose

## Requisitos

- Docker
- Docker Compose
- Git
- Composer
```
## Configuração


1. Clone o repositório:

  ```
     git clone https://github.com/Josenilsonfariasx/driver-management-platform-api
  ```
  ```
     cd BACKEND
   ```

2. Instale as dependencias:

```bash
    composer install
```

3. Configure o docker:

```bash
    docker-compose up -d 
```

4. Copie `.env.example` para `.env` e configure as variáveis de ambiente:

```bash
   cp .env.example .env
```

5. Configure o database com o banco de dados padrao do laravel e docker .env:

```bash
	DB_CONNECTION=mysql
	DB_HOST=mysql
	DB_PORT=3306
	DB_DATABASE=backend
	DB_USERNAME=sail
	DB_PASSWORD=password
```

# Com o docker rodando em um terminal abra outro terminal e digite os seguintes comandos

```bash
    docker exec -it backend_laravel.test_1 /bin/sh
```

## Banco de Dados

4. Execute as migrações:

```bash
    php artisan migrate
```

5. Execute os seeders:

```bash
   php artisan db:seed
```

## Executando

7. Acesse em
```bash
   http://localhost:8000
```

---------------------------------------------------------------------------
# Possiveis erros na instalação do projeto
- Fique atento as permissões da sua maquina, o repositorio deve conter todas as permissões
- Fique atento ao detalhe que o docker tem que ta em execução para que voce faça os comandos como por exemplo php artisan migrate/php artisan db:seed
---------------------------------------------------------------------------
---------------------------------------------------------------------------
## Caso queira integrar slack ao projeto
[assista este video](https://www.youtube.com/watch?v=FuNZCdv8u-o)

---------------------------------------------------------------------------
## Dependências

- Laravel Framework
- Docker e Docker Compose

## Licença

MIT License

## Contato

- [GMAIL](fariaslwork@gmail.com)
- [LINKEDIN](https://www.linkedin.com/in/josenilsonfariasx/)

## Referências

- [Documentação do Laravel](https://laravel.com/docs)
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)


-----------------------------------------------------------------------------------------------------------
# Documentação API


Rotas de Driver

GET

    /drivers - Retorna uma lista de todos os motoristas.
    /drivers/{id}/info - Retorna as informações de um motorista específico, com base no seu ID.
    /drivers/search/{name} - Retorna uma lista de motoristas com base no seu nome.
    /drivers/search/cpf/{cpf} - Retorna uma lista de motoristas com base no seu CPF.
    /drivers/search/plate/{plate} - Retorna o motorista associado à placa do transporte fornecida.



POST

    /drivers - Cria um novo motorista.
    
Exemplo de Criação

    {
    "name": "me2_soft",
    "cpf": "098122132",
    "telephone": "9897467152",
    "password": "me2Softwares!31"
    } 

Possiveis erros

    {
	"errors": "There is already a person with this CPF.",
	"errors": "There is already a person with this number from telephone.",
	"errors": {
		"name": "The name field is required.",
		"cpf":  "The cpf field is required.",
		"telephone":  "The telephone field is required.",
		"password":   "The password field is required.",
	  }
    }



PUT

    /drivers/{id} - Atualiza as informações de um motorista existente.

A rota de edição pode ser alterado 1 campo ou todos os campos a baixo

    {
    "name": "Josenilsona",
    "cpf": "09739350d72",
    "telephone": "731313138"
    } 


DELETE

    /drivers/{uuid} - Deleta um motorista existente.
Possivel erro passando uuid nao existente

    {
	"errors": "Driver not found"
    }

Exemplo de uso

# Retornar as informações de um motorista específico, com base no seu ID
    http://localhost:8000/drivers/1/info

# Retornar uma lista de motoristas com base no seu nome
    http://localhost:8000/drivers/search/John%20Doe

# Retornar uma lista de motoristas com base no seu CPF
    http://localhost:8000/drivers/search/cpf/12345678900

# Retornar o motorista associado à placa do transporte fornecida
    http://localhost:8000/drivers/search/plate/ABC-1234

---------------------------------------------------------------------------------------------------------

## Rotas de Transporte

POST

    /transport - Cria um novo transporte.

PUT

    /transport/{id} - Atualiza as informações de um transporte existente.

DELETE

    /transport/{id} - Deleta um transporte existente.

Exemplo de uso

# Criar um novo transporte e nao esqueça de fornecer o id do motorista dono do carro
    {
	"plate":"besta123",
	"brand":"fiat",
	"model":"palio",
	"year":"1920",
	"driver_id": "uuid_do_motorista"
    } 
Possiveis erros

     {
	   "errors": "Motorista não encontrado.
     "errors": "Já existe um transporte com esta placa.
     }


# Atualizar as informações de um transporte existente podendo passar apenas um campo ou todos

    {
	"plate":"abc122",
	"brand":"Ferrari",
	"model":"X",
	"year":"2029"
    }
    
Possiveis erros

      {
	   "errors": "Motorista não encontrado.
     "errors": "Já existe um transporte com esta placa.
     }

# Deletar um transporte existente
    http://localhost:8000/transport/1

Rotas de Admin

POST

    /auth/login - Autentica um administrador e retorna um token JWT.

Exemplo de uso

# Autentica um administrador e retorna um token JWT
    {
	"name":"me2_soft",
	"password":"me2-teste"
    } 

Todas as rotas exigem autenticação, exceto a rota /auth/login.

## :Autor
  <table>
    <tr>
      <td align="center">
        <a href="http://github.com/Josenilsonfariasx">
          <img src="https://i.imgur.com/SgdMMR7.png" width="100px;" alt="Foto de Tati Alves no GitHub"/><br>
          <sub>
            <b>Josenilson Farias</b>
          </sub>
        </a>
      </td>
    </tr>
  </table>

## :dart: driver-management-platform-api
