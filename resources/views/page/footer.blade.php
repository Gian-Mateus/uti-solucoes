<footer class="bg-base-300">
    <div class="w-full bg-secondary/85 flex justify-evenly px-10 items-center text-base-content">
        <div class="flex font-bold uppercase">
            Nos siga nas redes sociais:
        </div>
        <ul class="flex justify-center gap-4 p-4">
            <li>
                {{-- Facebook --}}
                <a href="https://www.facebook.com/share/1F46kZkFqR/" target="_blank" class="hover:text-base-100 transition-all duration-300 ease-in">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook-icon lucide-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                </a>
            </li>
            <li>
                {{-- Instagram --}}
                <a href="https://www.instagram.com/utisolucoes?igsh=MW96MHlrYnR3bmpjbw==" target="_blank" class="hover:text-base-100 transition-all duration-300 ease-in"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram-icon lucide-instagram"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg></a>
            </li>
            <li>
                {{-- WhatsApp --}}
                <a href="https://wa.me/554733328676?text=Ol%C3%A1%2C%0AEncontrei%20seu%20n%C3%BAmero%20pelo%20site%20e%20gostaria%20de%20saber%20mais%20dos%20seus%20servi%C3%A7os." target="_blank" class="hover:text-base-100 transition-all duration-300 ease-in">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                </a>
            </li>
        </ul>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 px-12 py-10 bg-secondary/80 gap-y-4">
        <figure class="w-48 row-span-2 md:row-auto">
            <img src="/logo.png" alt="Logo UTI Soluções">
        </figure>

        <div>
            <h4 class="text-lg font-bold uppercase mb-4">Serviços</h4>
            <ul>
                <li>
                    <span>Manutenção e instalação de:</span>
                    <ul class="indent-2">
                        <li>Computadores</li>
                        <li>Servidores</li>
                    </ul>
                </li>
                <li>
                    Infraestrutura de redes
                </li>
                <li>
                    Venda de acessórios <br> eletrônicos
                </li>
                <li>
                    E muito +
                </li>
            </ul>
        </div>

        <div>
            <h4 class="text-lg font-bold uppercase mb-4">Link rápidos</h4>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="#services">Principais serviços</a>
                </li>
                <li>
                    <a href="#about">Sobre nós</a>
                </li>
                <li>
                    <a href="/ticket">Abrir chamado</a>
                </li>
            </ul>
        </div>

        <div class="md:-ml-12">
            <h4 class="text-lg font-bold uppercase mb-4">Contato</h4>
            <ul class="flex flex-col gap-2">
                <li class="flex items-center gap-2">
                    {{-- WhatsApp --}}
                    <svg class="-ml-0.5" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                    <a href="https://wa.me/554733328676?text=Ol%C3%A1%2C%0AEncontrei%20seu%20n%C3%BAmero%20pelo%20site%20e%20gostaria%20de%20saber%20mais%20dos%20seus%20servi%C3%A7os." target="_blank">
                        (47) 3332-8676
                    </a>
                </li>
                <li class="flex items-center gap-2">
                    {{-- Mail --}}
                    <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail-icon lucide-mail"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
                    <a href="mailto:contato@utisolucoes.com.br" target="_blank">
                        contato@utisolucoes.com.br
                    </a>
                </li>
                <li>
                    <a href="https://maps.app.goo.gl/TTDSaBt6ZLiRKqEM9" class="grid grid-cols-[auto_1fr] gap-2 items-start">
                        <div>
                            {{-- Map Pin --}}
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin-icon lucide-map-pin"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div class="flex flex-col">
                            <span>Loja 1:</span>
                            <span>R. Anfilóquio Nunes Píres - Bela Vista, Gaspar - SC, 89114-442</span>
                        </div>
                    </a>
                    <a href="https://maps.app.goo.gl/7SYS5Uys9GvSoyar8" class="grid grid-cols-[auto_1fr] gap-2">
                        <div>
                            {{-- Map Pin --}}
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin-icon lucide-map-pin"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div class="flex flex-col">
                            <span>Loja 2:</span>
                            <span>R. Industrial José Beduschi, 23 - Centro, Gaspar - SC, 89110-001</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <span class="text-xs block text-center py-2 bg-secondary/80">© 2025 UTI Soluções em Informática. Todos os direitos reservados.</span>
</footer>
