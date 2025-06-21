<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('emails', function(Blueprint $table){
            $table->id();
            $table->json('providers');
            /*
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
                },
            ]
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emails');
    }
};
