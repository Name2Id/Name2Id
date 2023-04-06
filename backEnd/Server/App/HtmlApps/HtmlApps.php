<?php

class HtmlApps {
    private string|null $app = null;

    public function createApp ($app) {
        $this->app = $app;
    }
    public function executeApp () {
        echo $this->app;
    }
    public static function drow_down_nav_bar () {
        return "
        <div class='nav'>
            <ul>
                <li>
                    <a href=''>Name2Ids</a>
                    <ul>
                        <li>__construct ();</li>
                        <li>__construir ();</li>
                        <li>get ();</li>
                        <li>obtener ();</li>
                        <li>increase ();</li>
                        <li>incrementar ();</li>
                        <li>incrementAndprintTheCounter ();</li>
                        <li>incrementaEimprimeElContador ();</li>
                        <li>printsCounter ();</li>
                        <li>imprimeContador ();</li>
                        <li>create_card (\$class);</li>
                        <li>crear_tarjeta (\$clase);</li>
                        <li>print_card (\$card);</li>
                        <li>imprime_tarjeta (\$tarjeta);</li>
                        <li>add_card (\$card);</li>
                        <li>agregar_tarjeta (\$tarjeta);</li>
                        <li>subtract ();</li>
                        <li>restar ();</li>
                    </ul>
                </li>
                <li>
                    <a href=''>Ajax</a>
                    <ul>
                        <li>mainBlockHtmlTag ();</li>
                        <li>buttonHtmlTag ();</li>
                        <li>scriptHtmlTag ();</li>
                        <li>printAll (\$all);</li>
                    </ul>
                </li>
                <li>
                    <a href=''>HtmlApps</a>
                    <ul>
                        <li>createApp (\$app);</li>
                        <li>executeApp ();</li>
                        <li>drow_down_nav_bar ();</li>
                    </ul>
                </li>
            </ul>
        </div>
        ";
    }
}