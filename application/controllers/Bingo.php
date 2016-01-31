<?php

/**
 * Our Bingo. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->data['pagebody'] = 'justone'; // this is the view we want shown
        // Use first() to pull the information from Quotes.php array
        $source = $this->quotes->get(5);

        // Set specific data to desired elements
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];

        $this->render();
    }

    function wise() {
        $this->data['pagebody'] = 'justone'; // this is the view we want shown
        // Use first() to pull the information from Quotes.php array
        $source = $this->quotes->get(6);

        // Set specific data to desired elements
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];

        $this->render();
    }

}

/* End of file Bingo.php */
/* Location: application/controllers/Welcome.php */