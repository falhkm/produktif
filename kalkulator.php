m <?php
class kalkulator {
    var $pejumlahan1;
    var $pejumlahan2;
    function __construct($angka1,$angka2) {
        $this->pejumlahan1 = $angka1;
        $this->pejumlahan2 = $angka2;
    }
    function get_kalkulator() {
        return $this->pejumlahan1 + $this->pejumlahan2;
    }
}

?>