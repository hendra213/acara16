<?php
use PHPUnit\Framework\TestCase;

require_once "wordcount.php";

class simpletest extends TestCase{
    public function testCountWords(){
        $wc = new WordCount();
        $TestSentence = "My name is Joko";
         // Memanggil fungsi countwords dengan kalimat contoh dan menyimpan hasilnya.
        $WordCount = $wc->countwords($TestSentence);
        // Menggunakan assert untuk memeriksa apakah hasil pengujian sesuai dengan yang diharapkan.
        $this->assertEquals(4, $WordCount);
    }
}