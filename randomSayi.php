<?php
    function hesapla($x){ // istedigimiz yuzde alma islemini yapan fonk.
             return $x + ( $x * ( ($x%10)/100 ) );
    }
    function sayiOlustur($sayi){ // 10 adet birbirinden farklı rastgele sayı oluşturan fonksiyon
        $sayilar = []; // 10 adet random sayi atadigimiz dizi
        $islenmisSayilar = []; // random sayilarin fonksiyona gönderilten sonra ki halini tutan dizi
        for ($i = 0; $i < $sayi; $i++) {
            while (true) {
                $randomSayi = rand(100, 999); // random sayi
                if (!in_array($randomSayi, $sayilar)) {
                    $sayilar[$i] = "Üretilen Sayı:".$randomSayi;
                    $islenmisSayilar[$i] = "İşlenmiş Sayı:".hesapla($randomSayi);
                    break;
                }
            }
        }
        return array_combine($sayilar,$islenmisSayilar);
    }
    echo "<pre>";
    print_r(sayiOlustur(10));
?>