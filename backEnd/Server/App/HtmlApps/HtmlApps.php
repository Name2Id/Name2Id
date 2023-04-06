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
                        <li><a href=''>__construct ();</a></li>
                        <li><a href=''>__construir ();</a></li>
                        <li><a href=''>get ();</a></li>
                        <li><a href=''>obtener ();</a></li>
                        <li><a href=''>increase ();</a></li>
                        <li><a href=''>incrementar ();</a></li>
                        <li><a href=''>incrementAndprintTheCounter ();</a></li>
                        <li><a href=''>incrementaEimprimeElContador ();</a></li>
                        <li><a href=''>printsCounter ();</a></li>
                        <li><a href=''>imprimeContador ();</a></li>
                        <li><a href=''>create_card (\$class);</a></li>
                        <li><a href=''>crear_tarjeta (\$clase);</a></li>
                        <li><a href=''>print_card (\$card);</a></li>
                        <li><a href=''>imprime_tarjeta (\$tarjeta);</a></li>
                        <li><a href=''>add_card (\$card);</a></li>
                        <li><a href=''>agregar_tarjeta (\$tarjeta);</a></li>
                        <li><a href=''>subtract ();</a></li>
                        <li><a href=''>restar ();</a></li>
                    </ul>
                </li>
                <li>
                    <a href=''>Ajax</a>
                    <ul>
                        <li><a href=''>mainBlockHtmlTag ();</a></li>
                        <li><a href=''>buttonHtmlTag ();</a></li>
                        <li><a href=''>scriptHtmlTag ();</a></li>
                        <li><a href=''>printAll (\$all);</a></li>
                    </ul>
                </li>
                <li>
                    <a href=''>HtmlApps</a>
                    <ul>
                        <li><a href=''>createApp (\$app);</a></li>
                        <li><a href=''>executeApp ();</a></li>
                        <li><a href=''>drow_down_nav_bar ();</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        ";
    }
}