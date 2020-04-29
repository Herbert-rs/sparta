## Requisitos

- GIT
- Docker 
- Docker Compose

## Instalação

- Clone o projeto com o comando: git clone https://github.com/WenLopes/sparta.git
- Use o arquivo .env.example e crie seu arquivo .env (copie e cole o conteúdo)
- Acesse o diretório e execute o comando: docker-compose up
- Após seus containers subirem, abra uma nova aba no terminal e acesse a linha de comando do container web com o seguinte comando: sudo docker exec -it web /bin/bash
- Instale as dependencias do Framework com o comando: composer install
- Gere uma chave para sua aplicação com comando: php artisan key:generate

Acesse seu navegador e digite: localhost.
