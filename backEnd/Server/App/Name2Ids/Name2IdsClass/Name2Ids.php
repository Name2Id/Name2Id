<?php

/**
 * Summary of Name2Ids
 */
class Name2Ids implements Name2IdsI {
    //el contador y el acumulador
    private int $the_counter_and_the_accumulator = -1; 
    private int $el_contador_y_el_acumulador = -1;
    /**
     * Summary of __construct
     * @return void
     */
    public function __construct() {
        $this->the_counter_and_the_accumulator = 0;
        $this->__construir();
    }
    /**
     * Summary of __construir
     * @return void
     */
    public function __construir () {
        $this->el_contador_y_el_acumulador = 0;
    }
    public function get () {#Obtener
        return $this->the_counter_and_the_accumulator;
    }
    public function obtener () {#get
        return $this->el_contador_y_el_acumulador;
    }
    public function increase () {
        $this->the_counter_and_the_accumulator += 1;
    }
    public function incrementar () {
        $this->el_contador_y_el_acumulador = $this->obtener() + 1;
    }
    /**
     * Summary of incrementAndprintTheCounter
     * @return void
     */
    public function incrementAndprintTheCounter () {
        $this->increase();
        echo $this->get();
    }
    public function incrementaEimprimeElContador () {
        $this->incrementar();
        echo $this->obtener();
    }
    /**
     * Summary of printsCounter
     * @return void
     */
    public function printsCounter () {
        echo $this->get();
    }
    /**
     * Summary of imprimeContador
     * @return void
     */
    public function imprimeContador () {
        echo $this->obtener();
    }

    public function create_card ($class) {
        #26-44 lines from index.php old code
        //this is the fresh ... new 
        $hash_id_md5 = hash('md5',get_class($class));
        $hash_id_sha256 = hash('sha256',$this->get());
        $this->increase();
        $card = '
        <section class="container">
            <div class="card">
                <h5>card number <i class="fa-solid fa-hashtag"></i> '.
                $this->get().'</h5>
                <figure>
                    <img src="./img/Name2Ids.avif">
                </figure>
                <div class="contenido">
                    <h2>block id <i class="fa-solid fa-arrow-down"></i></h2>'.
                    '<p>'.$hash_id_md5.'</p>'.
                    '<h3>object id <i class="fa-solid fa-arrow-down"></i></h3>'.
                    '<p>'.$hash_id_sha256.'</p>'.
                    '<h4>class name <i class="fa-solid fa-arrow-right"></i>'.
                    get_class($class).'</h4>
                </div>
            </div>
        </section>';
        return $card;
    }
    #here ... code
    public function crear_tarjeta ($clase) {
        #26-44 lineas from index.php old code
        //this is the fresh ... new 
        $hash_id_md5 = hash('md5',get_class($clase));
        $hash_id_sha256 = hash('sha256',$this->get());
        $this->incrementar();
        $tarjeta = '
        <section class="container">
            <div class="card">
                <h5>numero de tarjeta <i class="fa-solid fa-hashtag"></i> '.
                $this->obtener().'</h5>
                <figure>
                    <img src="./img/img3.jpg">
                </figure>
                <div class="contenido">
                    <h2>id del bloque <i class="fa-solid fa-arrow-down"></i></h2>'.
                    '<p>'.$hash_id_md5.'</p>'.
                    '<h3>id del objeto <i class="fa-solid fa-arrow-down"></i></h3>'.
                    '<p>'.$hash_id_sha256.'</p>'.
                    '<h4>nombre de la clase <i class="fa-solid fa-arrow-right"></i>'.
                    get_class($clase).'</h4>
                </div>
            </div>
        </section>';
        return $tarjeta;
    }
    public function print_card ($card) {
        echo $card;
    }
    public function imprime_tarjeta ($tarjeta) {
        echo $tarjeta;
    }
    public function add_card ($card) {
        $this->print_card($this->create_card($card));
    }
    public function agregar_tarjeta ($tarjeta) {
        $this->imprime_tarjeta($this->crear_tarjeta($tarjeta));
    }
    public function subtract () {
        $this->the_counter_and_the_accumulator -= 1;
    }
    public function restar () {
        $this->el_contador_y_el_acumulador -= 1;
    }
}