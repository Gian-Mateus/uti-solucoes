# JSON Structures in Database Migrations

This document outlines the expected JSON structures for fields defined as `json` in the database migration files.

## clients table

### emails
<code>
{
    "emails": [
        {
            "contato": "Fulano de tal,
            "email": "fulanodetal@empresa.com.br"
        }
    ]
}
</code>

### phones
<code>
{
    "phones": [
        {
            "phone": '4733328676', 
            "whatsApp": true
        }, 
        {
            "phone": '4733328676', 
            "whatsApp": false
        }
    ]
}
</code>

A JSON array of objects, where each object represents a contact email with a contact person's name and the email address.

## pre-clients table

### phones
<code>
{
    "phones": [
        {
            "phone": '4733328676', 
            "whatsApp": true
        }, 
        {
            "phone": '4733328676', 
            "whatsApp": false
        }
    ]
}
</code>

## email table

### providers
<code>
{
    "providers":[
        {
            "name": "Gmail",
            "description": "Conta Google - Gmail",
            "incoming": {
                "protocol": "IMAP",
                "host": "imap.gmail.com",
                "port": 993,
                "encryption": "SSL/TLS",
                "authentication": true,
                "username": "seu_email@gmail.com",
                "password": "sua_senha_ou_senha_de_aplicativo"
            },
            "incoming_pop3": {
                "protocol": "POP3",
                "host": "pop.gmail.com",
                "port": 995,
                "encryption": "SSL/TLS",
                "authentication": true,
                "username": "seu_email@gmail.com",
                "password": "sua_senha_ou_senha_de_aplicativo"
            },
            "outgoing": {
                "protocol": "SMTP",
                "host": "smtp.gmail.com",
                "port": 465,
                "encryption": "SSL/TLS",
                "authentication": true,
                "username": "seu_email@gmail.com",
                "password": "sua_senha_ou_senha_de_aplicativo"
            }
        },
        {
            "name": "Outlook.com",
            "description": "Conta da Microsoft - Outlook.com, Hotmail, Live",
            "incoming": {
                "protocol": "IMAP",
                "host": "imap-mail.outlook.com",
                "port": 993,
                "encryption": "SSL/TLS",
                "authentication": true,
                "username": "seu_email@outlook.com",
                "password": "sua_senha"
            },
            "incoming_pop3": {
                "protocol": "POP3",
                "host": "pop-mail.outlook.com",
                "port": 995,
                "encryption": "SSL/TLS",
                "authentication": true,
                "username": "seu_email@outlook.com",
                "password": "sua_senha"
            },
            "outgoing": {
                "protocol": "SMTP",
                "host": "smtp-mail.outlook.com",
                "port": 587,
                "encryption": "STARTTLS",
                "authentication": true,
                "username": "seu_email@outlook.com",
                "password": "sua_senha"
            }
        }
    ]
}
</code>

