<?php
// File : WordCount.php
class WordCount{
    public function countWords($sentence){//ni adalah deklarasi metode countWords dalam kelas WordCount. Metode ini menerima satu parameter yaitu $sentence, yang seharusnya berisi sebuah string (kalimat) yang akan dihitung jumlah kata-katanya.
        return count(explode(" ",$sentence));//explode(" ", $sentence): Ini memecah string $sentence menjadi sebuah array dengan menggunakan spasi sebagai pemisah. Hasilnya adalah sebuah array yang berisi kata-kata dari kalimat.
                                             //ount(...): Ini menghitung jumlah elemen dalam array yang dihasilkan oleh explode, yaitu jumlah kata dalam kalimat.
                                             //return ...;: Hasil perhitungan di atas dikembalikan sebagai nilai dari metode countWords.
    }
}
?>