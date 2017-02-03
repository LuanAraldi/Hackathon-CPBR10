@extends('layouts.app')

@section('content')
    <body>
            <div class="content">
                <div class="banner-principal">
                    <h1 class="titulo-principal">Economize dinheiro ajudando o meio ambiente!</h1>
                    <p>Com a <strong>moeda verde</strong>, você agora é <strong>recompensado</strong> por suas <strong>ações</strong>.</p>
                    <p>No descarte do seu <strong>lixo reciclável</strong>, você recebe <strong>pontos</strong> no seu <strong>cartão mais</strong></strong>.</p>
                    <h2><strong>Ajude</strong> o planeta! Ajude <strong>você</strong>!</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 caixa-inicio-clara">
                            <p class="texto-caixas"><strong>Florestas tropicais</strong> costumavam cobrir cerca de <strong>15% da área terrestre</strong> do planeta.</p>
                            <p class="texto-caixas"><strong>Hoje</strong>, apenas <strong>7%</strong></p>
                        </div>
                        <div class="col-md-3 caixa-inicio-escura">
                            <p class="texto-caixas">De acordo com estimativas da <strong>ONU</strong>, cerca de <strong>12 milhões</strong> de hectares de terras agrícolas são <strong>degradados</strong> seriamente todos os anos</p>
                        </div>
                        <div class="col-md-3 caixa-inicio-clara">
                            <p class="texto-caixas"><strong>Ambientalistas</strong> afirmam que, na <strong>Amazônia</strong>, uma área de aproximadamente <strong>50 mil km²</strong> é atingida por <strong>queimadas</strong> no período de um ano.</strong></p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 caixa-inicio-escura">
                            <p class="texto-caixas"><strong>Florestas tropicais</strong> costumavam cobrir cerca de <strong>15% da área terrestre</strong> do planeta.</p>
                            <p class="texto-caixas"><strong>Hoje</strong>, apenas <strong>7%</strong></p>
                        </div>
                        <div class="col-md-3 caixa-inicio-clara">
                            <p class="texto-caixas">De acordo com estimativas da <strong>ONU</strong>, cerca de <strong>12 milhões</strong> de hectares de terras agrícolas são <strong>degradados</strong> seriamente todos os anos</p>
                        </div>
                        <div class="col-md-3 caixa-inicio-escura">
                            <p class="texto-caixas"><strong>Ambientalistas</strong> afirmam que, na <strong>Amazônia</strong>, uma área de aproximadamente <strong>50 mil km²</strong> é atingida por <strong>queimadas</strong> no período de um ano.</strong></p>
                        </div>
                    </div>
                </div>
                <div class="imagens-principal"></div>
                @if (Auth::check())
                    <div class="links">
                        <a href="/historico">Histórico</a>
                        <a href="/locais_coleta">Locais de Coleta</a>
                        <a href="/dicas_descarte">Dicas de Descarte</a>
                    </div>
                @endif
            </div>
    </body>
@endsection
