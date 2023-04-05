<?php

interface Name2IdsI {
    #private int $the_counter_and_the_accumulator = 0; 
    #private int $el_contador_y_el_acumulador = 0; 
    public function __construct();
    public function __construir ();
    public function get ();
    public function obtener ();
    public function increase ();
    public function incrementar ();
    public function incrementAndprintTheCounter ();
    public function incrementaEimprimeElContador ();
    public function printsCounter ();
    public function imprimeContador ();
    public function create_card ($class);
    public function crear_tarjeta ($clase);
    public function print_card ($card);
    public function imprime_tarjeta ($tarjeta);
    public function add_card ($card);
    public function agregar_tarjeta ($tarjeta);
    public function subtract ();
    public function restar ();
}