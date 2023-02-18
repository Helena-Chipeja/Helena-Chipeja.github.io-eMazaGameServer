<main>
    <section class="hero">
        <div class="container">
            <div class="hero-inner">
                <div class="hero-copy">
                    <h1 class="hero-title mt-0">
                        Bem vindo ao servidor de eMazaGame
                    </h1>
                    <p class="hero-paragraph">
                        Este servidor processa todas as informações utilizadas no aplicativo eMazaGame. Somente usuários permitidos tem acesso a área restrita neste servidor.
                    </p>
                    <div class="hero-cta">
                        <a class="button button-primary" href="https://play.google.com/store/apps/details?id=explicador.co.mz&hl=pt&gl=US" target="_blank">Baixar o aplicativo</a>
                        @if(auth()->check())
                        <a class="button" href="/admin/profile">Perfil</a>
                        @else
                        <a class="button" href="/admin">Perfil</a>
                        @endif
                    </div>
                </div>
                <div class="hero-figure anime-element">
                    <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
                        <rect width="528" height="396" style="fill:transparent;" />
                    </svg>
                    <div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
                    <div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
                    <div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
                    <div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
                    <div class="hero-figure-box hero-figure-box-05"></div>
                    <div class="hero-figure-box hero-figure-box-06"></div>
                    <div class="hero-figure-box hero-figure-box-07"></div>
                    <div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
                    <div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
                    <div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="features section">
        <div class="container">
            <div class="features-inner section-inner has-bottom-divider">
                <div class="features-wrap">
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img
                                    src="{{ asset('template/dist/images/feature-icon-01.svg')}}"
                                    alt="Feature 01"
                                    style="width: 90px; height: 70px"
                                >
                            </div>
                            <h4 class="feature-title mt-24">
                                Aprenda Laravel
                            </h4>
                            <p class="text-sm mb-0">
                                Através de eMazaGame podes aprender tudo o que precisas. Aprenda, desde línguas, matemática, tecnologia e outras ciências exactas e puras de forma divertida usando este aplicativo.Baixe Agora!!
                            </p>
                        </div>
                    </div>
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img src="{{ asset('template/dist/images/feature-icon-04.svg')}}" alt="Feature 02">
                            </div>

                            <h4 class="feature-title mt-24">
                            Aprendizagem Baseada em Jogos
                            </h4>
                            <p class="text-sm mb-0">
                                Com a nossa abordagem única, os alunos adotam a aprendizagem à medida que respondem as perguntas, promovendo a aprendizagem clara, ativa e uma mentalidade de crescimento.

                            </p>

                        </div>
                    </div>
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img
                                    src="{{ asset('template/dist/images/feature-icon-03.svg')}}"
                                    alt="Feature 01"
                                    style="width: 95px; height: 70px"
                                >
                            </div>
                            <h4 class="feature-title mt-24">
                            Desenvolvimento Profissional
                            </h4>
                            <p class="text-sm mb-0">
                            Aprenda as habilidades para melhorar seu desenvolvimento profissional . Ganhe até 40 horas de crédito a qualquer momento, a partir de qualquer dispositivo.
                            </p>
                        </div>
                    </div>
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img
                                    src="{{ asset('template/dist/images/feature-icon-02.svg')}}"
                                    alt="Feature 01"
                                    style="width: 70px; height: 65px"
                                >
                            </div>

                            <h4 class="feature-title mt-24">

                                Aprenda Linguas
                            </h4>
                            <p class="text-sm mb-0">
                            Fica fácil criar o hábito de aprender idiomas com recursos que parecem de jogo! No site você terá acesso gratuito a exercícios, lições e testes que podem ajudá-lo a aprender linguas.
                        </div>
                    </div>
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img
                                    src="{{ asset('template/dist/images/feature-icon-05.svg')}}"
                                    alt="Feature 01"
                                    style="width: 98px; height: 105px"
                                >
                            </div>

                            <h4 class="feature-title mt-24">
                                Estude para o Exame
                            </h4>
                            <p class="text-sm mb-0">
                            O eMazaGame é o jogo de perguntas e respostas perfeito pra você se preparar para o exame e concursos.
                            Você não precisa ficar horas estudando diversos conteúdos, com o eMazaGame você descomplica seus estudos de forma rápida e precisa, e ainda aprende enquanto se diverte.

                            </p>
                        </div>
                    </div>
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <div class="feature-icon">
                                <img
                                    src="{{ asset('template/dist/images/feature-icon-06.svg')}}"
                                    alt="Feature 01"
                                    style="width: 95px; height: 90px"
                                >
                            </div>

                            <h4 class="feature-title mt-24">
                                Aprenda e Divirta-se!
                            </h4>
                            <p class="text-sm mb-0">
                            Esta seção é dedicada ao aprendizado de um jeito descontraído, estimulando a capacidade de interpretação do conteúdo a partir de jogos. Estude brincando!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing section">
        <div class="container-sm">
            <div class="pricing-inner section-inner">
                <div class="pricing-header text-center">
                    <h2 class="section-title mt-0">Aplicativo com preços acessíveis</h2>
                    <p class="section-paragraph mb-0">Cada recurso foi cuidadosamente considerado para fornecer uma experiência maravilhosa ao desenvolvedor.</p>

                </div>
                <div class="pricing-tables-wrap">
                    <div class="pricing-table">
                        <div class="pricing-table-inner is-revealing">
                            <div class="pricing-table-main">
                                <div class="pricing-table-header pb-24">
                                    <div class="pricing-table-price"><span class="pricing-table-price-currency h2"></span><span class="pricing-table-price-amount h1">Gratuito</span><span class="text-xs">/sempre</span></div>
                                </div>
                                <div class="pricing-table-features-title text-xs pt-24 pb-24">Todos recursos básicos</div>
                                <ul class="pricing-table-features list-reset text-xs">
                                    <li>
                                        <span>Templates</span>
                                    </li>
                                    <li>
                                        <span>Base de dados</span>
                                    </li>
                                    <li>
                                        <span>API's</span>
                                    </li>
                                    <li>
                                        <span>...</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="pricing-table-cta mb-8">
                                <a class="button button-primary button-shadow button-block" href="#">Começar</a>
                            </div>
                        </div>
                    </div>

                    <div class="pricing-table">
                        <div class="pricing-table-inner is-revealing">
                            <div class="pricing-table-main">
                                <div class="pricing-table-header pb-24">
                                    <div class="pricing-table-price"><span class="pricing-table-price-currency h2">MT</span><span class="pricing-table-price-amount h1">129</span><span class="text-xs">/mês</span></div>
                                </div>
                                <div class="pricing-table-features-title text-xs pt-24 pb-24">Todos conteudos completos</div>
                                <ul class="pricing-table-features list-reset text-xs">
                                    <li>
                                        <span>Base de dados</span>
                                    </li>
                                    <li>
                                        <span>Filas </span>
                                    </li>
                                    <li>
                                        <span>WebSockets</span>
                                    </li>
                                    <li>
                                        <span>Autenticação</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="pricing-table-cta mb-8">
                                <a class="button button-primary button-shadow button-block" href="#">Comprar agora</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="cta section">
        <div class="container">
            <div class="cta-inner section-inner">
                <h3 class="section-title mt-0">Que tal baixar agora?</h3>
                <div class="cta-cta">
                    <a class="button button-primary button-wide-mobile" href="#">Baixar agora</a>
                </div>
            </div>
        </div>
    </section>
</main>
