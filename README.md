## Pets

<b>Listagem</b> <br>
Endpoint: /api/pets<br>
Método: GET<br>
Resposta no formato JSON<br>
<br>
<table>
    <head>
        <th>Parâmetro</th>
        <th>Tipo</th>
        <th>Obrigatório</th>
        <th>Descrição</th>
    </head>
    <body>
        <tr>
            <td>page</td>  
            <td>Integer</td>  
            <td>Não</td>   
            <td>Parâmetro usado controlar a paginação. O valor passado definirá qual página será ser exibida.</td>
        </tr>
        <tr>
            <td>nome</td>  
            <td>String</td>   
            <td>Não</td>   
            <td>Filtra os resultados para procurar um registro contendo a string passada como valor.</td>
        </tr>
    </body>
</table>
<br>Os parâmetros devem ser passador por querystring<br>
<br>
<b>Exibição</b> <br>
Endpoint: /api/pets/{id}<br>
Método: GET<br>
Resposta no formato JSON<br>
<br>
<table>
    <head>
        <th>Parâmetro</th>
        <th>Tipo</th>
        <th>Obrigatório</th>
        <th>Descrição</th>
    </head>
    <body>
        <tr>
            <td>id</td>  
            <td>Integer</td>   
            <td>Sim</td>   
            <td>Busca o registro contendo o ID informado.</td>
        </tr>
    </body>
</table>

<br>
<b>Inserção</b> <br>
Endpoint: /api/pets/<br>
Método: POST<br>
Resposta no formato JSON<br>
<br>
<table>
    <head>
        <th>Parâmetro</th>
        <th>Tipo</th>
        <th>Obrigatório</th>
        <th>Descrição</th>
    </head>
    <body>
        <tr>
            <td>nome</td> 
            <td>String</td>    
            <td>Sim</td>   
            <td>Nome do pet à ser adicionado. Deve possuir no mínimo 2 caracteres.</td>
        </tr>
        <tr>
            <td>especie</td> 
            <td>String</td>    
            <td>Sim</td>   
            <td>Espécie do pet representado pelo caracter. "C" para cão e "G" para gato.</td>
        </tr>
    </body>
</table>

<br>
<b>Atualização</b> <br>
Endpoint: /api/pets/{id}<br>
Método: PUT<br>
Resposta no formato JSON<br>
<br>
<table>
    <head>
        <th>Parâmetro</th>
        <th>Tipo</th>
        <th>Obrigatório</th>
        <th>Descrição</th>
    </head>
    <body>
        <tr>
            <td>id</td> 
            <td>Integer</td>    
            <td>Sim</td>   
            <td>ID do registro do pet que será atualizado.</td>
        </tr>
        <tr>
            <td>nome</td> 
            <td>String</td>    
            <td>Sim</td>   
            <td>Nome do pet à ser adicionado. Deve possuir no mínimo 2 caracteres.</td>
        </tr>
        <tr>
            <td>especie</td> 
            <td>String</td>    
            <td>Sim</td>   
            <td>Espécie do pet representado pelo caracter. "C" para cão e "G" para gato.</td>
        </tr>
    </body>
</table>
<br>Os parâmetros devem ser passador por querystring<br>
<br>
<b>Remoção</b> <br>
Endpoint: /api/pets/{id}<br>
Método: DELETE<br>
Resposta no formato JSON<br>
<br>
<table>
    <head>
        <th>Parâmetro</th>
        <th>Tipo</th>
        <th>Obrigatório</th>
        <th>Descrição</th>
    </head>
    <body>
        <tr>
            <td>id</td> 
            <td>Integer</td>    
            <td>Sim</td>   
            <td>ID do registro do pet que será removido.</td>
        </tr>
    </body>
</table>

## Atendimentos

<b>Listagem</b> <br>
Endpoint: /api/atendimentos<br>
Método: GET<br>
Resposta no formato JSON<br>
<br>
<table>
    <head>
        <th>Parâmetro</th>
        <th>Tipo</th>
        <th>Obrigatório</th>
        <th>Descrição</th>
    </head>
    <body>
        <tr>
            <td>page</td>  
            <td>Integer</td>  
            <td>Não</td>   
            <td>Parâmetro usado controlar a paginação. O valor passado definirá qual página será ser exibida.</td>
        </tr>
    </body>
</table>
<br>Os parâmetros devem ser passador por querystring<br>
<br>
<b>Exibição</b> <br>
Endpoint: /api/atendimentos/{id}<br>
Método: GET<br>
Resposta no formato JSON<br>
<br>
<table>
    <head>
        <th>Parâmetro</th>
        <th>Tipo</th>
        <th>Obrigatório</th>
        <th>Descrição</th>
    </head>
    <body>
        <tr>
            <td>id</td>  
            <td>Integer</td>   
            <td>Sim</td>   
            <td>Busca o registro contendo o ID informado.</td>
        </tr>
    </body>
</table>

<br>
<b>Inserção</b> <br>
Endpoint: /api/atendimentos/<br>
Método: POST<br>
Resposta no formato JSON<br>
<br>
<table>
    <head>
        <th>Parâmetro</th>
        <th>Tipo</th>
        <th>Obrigatório</th>
        <th>Descrição</th>
    </head>
    <body>
        <tr>
            <td>pet_id</td> 
            <td>Integer</td>    
            <td>Sim</td>   
            <td>ID do pet a ser cadastrado no atendimento. Deve ser um ID existente nos registro de pets.</td>
        </tr>
        <tr>
            <td>data_atendimento</td> 
            <td>Date</td>    
            <td>Sim</td>   
            <td>Data do atendimento. Deve estar no formato "Y-m-d" e ter um valor maior ou igual à data atual.</td>
        </tr>
        <tr>
            <td>descricao</td> 
            <td>Text</td>    
            <td>Não</td>   
            <td>Texto contendo a descrição do atendimento.</td>
        </tr>
    </body>
</table>

<br>
<b>Atualização</b> <br>
Endpoint: /api/atendimentos/{id}<br>
Método: PUT<br>
Resposta no formato JSON<br>
<br>
<table>
    <head>
        <th>Parâmetro</th>
        <th>Tipo</th>
        <th>Obrigatório</th>
        <th>Descrição</th>
    </head>
    <body>
        <tr>
            <td>pet_id</td> 
            <td>Integer</td>    
            <td>Sim</td>   
            <td>ID do pet a ser cadastrado no atendimento. Deve ser um ID existente nos registro de pets.</td>
        </tr>
        <tr>
            <td>data_atendimento</td> 
            <td>Date</td>    
            <td>Sim</td>   
            <td>Data do atendimento. Deve estar no formato "Y-m-d" e ter um valor maior ou igual à data atual.</td>
        </tr>
        <tr>
            <td>descricao</td> 
            <td>Text</td>    
            <td>Não</td>   
            <td>Texto contendo a descrição do atendimento.</td>
        </tr>
    </body>
</table>
<br>Os parâmetros devem ser passador por querystring<br>
<br>
<b>Remoção</b> <br>
Endpoint: /api/atendimentos/{id}<br>
Método: DELETE<br>
Resposta no formato JSON<br>
<br>
<table>
    <head>
        <th>Parâmetro</th>
        <th>Tipo</th>
        <th>Obrigatório</th>
        <th>Descrição</th>
    </head>
    <body>
        <tr>
            <td>id</td> 
            <td>Integer</td>    
            <td>Sim</td>   
            <td>ID do registro do atendimento que será removido.</td>
        </tr>
    </body>
</table>
