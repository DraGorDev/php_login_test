<?php
    
class Index {

    public function home() {
        include BASE_PATH . '/view/index.php';
    }

    public function indexPretraga () {
        
        if (isset($_SESSION['korisnik'])) {
            
        require_once 'model/registracijaModel.php';
        $korisnik = new RegistrujKorisnika();

        $text_input = '';

        if (isset($_POST['po_strani'])) {
            $po_strani= $_POST['po_strani'];
        }

        if (!isset($_POST['stranica'])) {
            $stranica = 1;
        } else {
            $stranica = $_POST['stranica'];
        }

        if (isset($_POST['text_input'])) {
            $text_input = trim($_POST['text_input']);
        }
            
            $korisnici = $korisnik->traziKorisnike($text_input);

            include BASE_PATH . '/view/pretragaKorisnika.php';
            
        } else {
            $greske = "Molim da se ulogujete.";
            include BASE_PATH . '/view/pretragaKorisnika.php';
        }
        
    }

    public function error() {
        include BASE_PATH . '/view/404.php';
    }
}