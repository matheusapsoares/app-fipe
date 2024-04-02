## Description
Aplicação que lista, cria, edita e exclui dados gerados pelo script de geração dos dados via API FIPE
### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
<br>
[Git](https://git-scm.com)
<br>
[Docker](https://www.docker.com/)

Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

## Installation
```bash
# Clone este repositório
$ git clone <https://github.com/matheusapsoares/app-fipe.git>

# Acesse a pasta do projeto no terminal/cmd
$ cd app-fipe

# Crie o arquivo .env e adicione os dados de banco de dados
$ cp .env.example .env

# Rode o comando abaixo para criar os containers APP(Laravel), NGINX, MYSQL e REDIS
$ docker-compose up -d
```
## Execution
```bash
# Abra o navegador e entre no endereço abaixo
http://localhost
```
