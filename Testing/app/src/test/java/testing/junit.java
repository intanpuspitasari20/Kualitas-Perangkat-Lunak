package testing;

import org.junit.Test;//mengimpor kelas Test dari paket org.junit. Kelas Test digunakan untuk menandai metode sebagai metode pengujian.
import static org.junit.Assert.*;//impor statis (static import statement) yang mengimpor semua metode statis dari kelas Assert yang ada dalam paket org.junit. Ini memungkinkan Anda menggunakan metode pengujian seperti assertEquals tanpa menuliskan Assert sebelumnya.

public class junit {

    @Test//digunakan untuk menandai metode subtraction_isCorrect sebagai metode pengujian. Metode yang ditandai dengan anotasi @Test akan dijalankan saat Anda menjalankan tes unit.
    public void subtraction_isCorrect(){//Ini adalah deklarasi metode. Metode ini disebut subtraction_isCorrect, dan dideklarasikan sebagai metode publik (public) yang tidak mengembalikan nilai (void). Ini adalah metode pengujian yang akan memeriksa apakah pengurangan berfungsi dengan benar.
        int result = 5-3;//Ini adalah pernyataan yang menghitung hasil pengurangan 5 - 3 dan menyimpan hasilnya dalam variabel result.
        assertEquals(2,result);//Ini adalah asert (assertion) menggunakan metode assertEquals. Ini memeriksa apakah nilai yang diharapkan adalah 2 (parameter pertama) dan apakah result (parameter kedua) sama. Jika hasil pengurangan benar, tes lulus; jika tidak, tes gagal.
    }
}
