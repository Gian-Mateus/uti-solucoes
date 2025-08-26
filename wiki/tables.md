# Explicação das tabelas

Aqui uma breve descrição da ideia inicial de cada tabela, suas funções, relacionamentos e objetivos.

## SystemUser
É onde os usuários (técnicos, colaboradores) serão guardados e usados para autenticação.

## ClientUser
É onde os usuários (clientes para abrir chamados e verificar históricos) serão guardados e usados para autenticação.

## UsersClient
É onde será guardado as informações dos Usuários dos clientes no AD (Active Directory)

## Tickets
Será guardado as informações dos chamados. Tem uma relação polimórfica com <strong>Client</strong> e <strong>PreClient</strong>.

## PreClient
Representa os "clientes" que entraram em contato solicitando um chamado pela primeira vez, sem contato prévio, através do site.

## Client
Onde será guardado os dados do cliente que já é cadastrado ou que possui contrato.