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
     git clone https://github.com/seurepositorio/projeto-laravel-docker.git
  ```
  ```
     cd projeto-laravel-docker
   ```

2. Configure o Docker Compose:

```bash
    docker-compose up -d
```

3. Copie `.env.example` para `.env` e configure as variáveis de ambiente:

```bash
   cp .env.example .env
```

## Banco de Dados

4. Execute as migrações:

```bash
   docker-compose exec app php artisan migrate
```

5. Execute os seeders:

```bash
   docker-compose exec app php artisan db:seed
```

## Executando

6. Inicie o servidor:

```bash
   docker-compose exec app php artisan serve --host=0.0.0.0 --port=8000
```

7. Acesse em [http://localhost:8000](http://localhost:8000).

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
