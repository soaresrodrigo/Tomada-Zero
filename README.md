# Tomada Zero
O tomada zero, nasceu para facilitar o gerenciamento de filme, direção e seu respectivo elenco.

## O que eu posso gerenciar com ele?

- Filmes
- Classificação
- Funcionários [ Atores, Diretores e Diretores que também atuam ]
- Elenco do filme

## Como funciona o processo?
1. Cadastre as classificações gerais do filme.
2. Cadastre o funcionário e informe o cargo dele.
3. Cadastre o filme, informando o nome, descrição, direção e sua classificação.
4. Depois do filme cadastrado, adicione os atores (Obs.: Os atores só podem ser atores ou diretores que atuam, tipo o mito Stan Lee) 

## E se eu informar algo errado?
Todo o fluxo permite a atualização e remoção, fique tranquilo.

## Pronto(a) para aprender as rotas? Vamos lá!

<span style="color:#3498db;">CLASSIFICAÇÕES</span><br>
<span style="color:#e74c3c;">FUNÇÃO:: </span>Cadastrar classificação do filme
<span style="color:#e74c3c;">MÉTODO:: </span>POST
<span style="color:#e74c3c;">ROTA:: </span><span style="color:#666;">{{base_url}}</span>/api/classificacoes
<!-- <hr> -->
| Campo | Tipo| Descrição | Obrigatório | Padrão |
| :---: | :---: | :---: | :---: |:---: |
| name | string | Nome da classificação | Sim | Nenhum
| description | string | Descrição da classificação | Sim | Nenhum
<br>
<hr>
<hr>
<br>

<span style="color:#3498db;">FUNCIONÁRIOS</span>
<span style="color:#e74c3c;">FUNÇÃO:: </span>Cadastrar funcionário
<span style="color:#e74c3c;">MÉTODO:: </span>POST
<span style="color:#e74c3c;">ROTA:: </span><span style="color:#666;">{{base_url}}</span>/api/funcionarios
<!-- <hr> -->
| Campo | Tipo| Descrição | Obrigatório |Padrão |
| :---: | :---: | :---: | :---: | :---: |
| name | string | Nome do funcionário | Sim | Nenhum
| office | enum('actor', 'director', 'both') | Cargo do funcionário [actor = 'Ator' / director = 'Diretor/ both = 'Ator e Diretor'] | Sim | actor
| birthday | date | Data de aniversário do funcionário | Não | Nenhum
| height | float | Altura do funcionário | Não | Nenhum
<br>
<hr>
<hr>
<br>

<span style="color:#3498db;">FILMES</span>
<span style="color:#e74c3c;">FUNÇÃO:: </span>Cadastrar filme
<span style="color:#e74c3c;">MÉTODO:: </span>POST
<span style="color:#e74c3c;">ROTA:: </span><span style="color:#666;">{{base_url}}</span>/api/filmes
<!-- <hr> -->
| Campo | Tipo| Descrição | Obrigatório |Padrão |
| :---: | :---: | :---: | :---: | :---: |
| name | string | Nome do filme | Sim | Nenhum
| description | string| Descrição do filme | Sim | Nenhum
| classification_id | integer | Identificador da classificação | Sim | Nenhum
| release | date | Data de lançamento do filme | Não | Nenhum
| director_id | integer | Identificado do diretor | Não | Nenhum
<br>
<hr>
<hr>
<br>

<span style="color:#3498db;">ATORES</span>
<span style="color:#e74c3c;">FUNÇÃO:: </span>Cadastrar ator ou atriz
<span style="color:#e74c3c;">MÉTODO:: </span>POST
<span style="color:#e74c3c;">ROTA:: </span><span style="color:#666;">{{base_url}}</span>/api/atores
<!-- <hr> -->
| Campo | Tipo| Descrição | Obrigatório |Padrão |
| :---: | :---: | :---: | :---: | :---: |
| name | string | Nome do filme | Sim | Nenhum
| description | string| Descrição do filme | Sim | Nenhum
| classification_id | integer | Identificador da classificação | Sim | Nenhum
| release | date | Data de lançamento do filme | Não | Nenhum
| director_id | integer | Identificado do diretor | Não | Nenhum