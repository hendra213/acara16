<?php
class WordCount {
    // Fungsi countwords menerima satu parameter, yaitu kalimat atau string.
    public function countWords($sentence)
    {
        // Fungsi ini menghitung jumlah kata dalam kalimat dengan cara
        // memecah kalimat menjadi array kata-kata menggunakan fungsi explode()
        // dan kemudian menghitung jumlah elemen dalam array dengan fungsi count().
        return count(explode(" ",$sentence));
    }
}
?>