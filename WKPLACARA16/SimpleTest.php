<?php
//path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php SimpleTest.php
//butuh framework PHPUnit
//impor kelas
use PHPUnit\Framework\TestCase;//mengimpor kelas TestCase dari framework PHPUnit, yang nantinya akan digunakan sebagai dasar untuk membuat kasus pengujian (test case).

//class yang mau di test.mengimpor file WordCount.php, yang berisi definisi dari kelas WordCount yang akan diuji.
require_once "WordCount.php"; //requere_once digunakan untuk mengimpor file dan memastikan bahwa file tersebut hanya akan diimpor satu kali. 

// class untuk run testig.
class SimpleTest extends TestCase {//extends digunakan untuk membuat pewarisan (inheritance) antara kelas. Dengan kata kunci extends, kelas anak (subclass atau derived class) dapat "mewarisi" properti (variabel) dan metode (fungsi) dari kelas orangtua (superclass atau base class)
    public function testCountWords(){
        $Wc = new WordCount();//mendefinisikan metode testCountWords, yang akan menjadi kasus pengujian untuk menguji metode countWords dari kelas WordCount

        //kita masukkan parameter 4 kata yang harusnya dapat output 4.
        $TestSentence = "My name is Joko";//embuat variabel $TestSentence yang berisi kalimat "My name is Joko" yang akan digunakan sebagai input untuk metode countWords.
        $WordCount = $Wc->countWords($TestSentence);//Memanggil metode countWords pada objek $Wc dengan argumen $TestSentence dan menyimpan hasilnya dalam variabel $WordCount.

        //Memeriksa apakah nilai yang dikembalikan oleh metode countWords (disimpan dalam $WordCount) sama dengan 4. Jika sama, tes akan berhasil; jika tidak, tes akan gagal.
        $this->assertEquals(4, $WordCount);//assertEquals adalah sebuah metode yang digunakan dalam framework pengujian seperti PHPUnit untuk memeriksa apakah dua nilai atau ekspresi adalah sama.

    

    }
}
?>