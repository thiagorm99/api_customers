# Documentação da API

## Introdução
Esta API permite que você faça cadastro, edição, deleção e atualização de clientes.

## Autenticação
Esta API usa o esquema de autenticação básico do HTTP. Para autenticar uma solicitação, você deve incluir um cabeçalho de autorização na solicitação. O cabeçalho de autorização contém o nome do esquema de autenticação e as credenciais do usuário codificadas em base64.

#### Resposta em caso de erro da autenticação
```json
{
  "status": "Authentication Required",
  "method": "GET",
  "data": []
}
```
## Validação

### Resposta em caso de método invalido
```json
{
  "status": "Incorrect request method",
  "method": "POST",
  "data": []
}
```

## Endpoints

### GET /localhost/api_customers/get_all_customers/
Este endpoint permite que seja listado do banco de dados todos os clientes cadastrados.

#### Resposta da solicitação (json)
```json
{
  "status": "success",
  "method": "GET",
  "data": [
    {
      "id": 2,
      "first_name": "value",
      "last_name": "value",
      "address": "value",
      "city": "value",
      "phone_number": "99999999999"
    },
    {
      "id": 3,
      "first_name": "value",
      "last_name": "value",
      "address": "value",
      "city": "value",
      "phone_number": "99999999999"
    }
  ]
}
```

### GET /localhost/api_customers/get_customer_by_id/
Este endpoint permite que seja listado do banco de dados o cliente com um id especifico.

#### Modelo body da solicitação (raw)
```json
{"id": 9}
```

#### Resposta da solicitação (json)
```json
{
  "status": "success",
  "method": "GET",
  "data": [
    {
      "id": 2,
      "first_name": "value",
      "last_name": "value",
      "address": "value",
      "city": "value",
      "phone_number": "99999999999"
    }
  ]
}
```

### POST localhost/api_customers/create_customer/
Este endpoint permite que você crie um novo cliente.

#### Modelo body da solicitação (raw)
```json
{
"first_name": "value",
"last_name": "value",
"address": "value",
"city": "value",
"phone_number": "99999999999"
}
```

### PUT localhost/api_customers/update_customer/
Este endpoint permite que você atualize um cliente cadastrado.

#### Modelo body da solicitação (raw)
```json
{
"id" : 8,
"first_name": "value",
"last_name": "value",
"address": "value",
"city": "value",
"phone_number": "99999999999"
}
```

### localhost/api_customers/delete_customer/
Este endpoint permite que você exclua um cliente.

#### Modelo body da solicitação (raw)
```json
{"id": 9}
```
