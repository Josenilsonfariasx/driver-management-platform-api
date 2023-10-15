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

2. Configure o Docker Compose:

```bash
    docker-compose up -d
```

3. Copie `.env.example` para `.env` e configure as variáveis de ambiente:

```bash
   cp .env.example .env
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
