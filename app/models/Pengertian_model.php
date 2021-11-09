<?php 

class Pengertian_model {
    private $pengertian = [
        [
            "pengertian" => "Dalam mengembangkan sebuah website, dibutuhkan framework yang tepat agar website menjadi optimal. Nah, salah satu framework yang cukup populer adalah Laravel.

                            Dikarenakan kepopulerannya, Laravel kerap kali menjadi pilihan web developer dalam mengembangkan situs web. 
                            
                            Sebab, framework ini mempunyai keuntungan yang besar, khususnya bagi website. 
                            
                            Nah, seperti apa sih pengertian Laravel? Apa saja keuntungan menggunakannya? Jangan khawatir, di bawah ini Glints akan menjelaskannya kepadamu."
        ],          
        [
            "pengertian" => "Dilansir dari Updivision, Laravel adalah framework yang akan membantumu dalam memaksimalkan penggunaan PHP dalam proses pengembangan website.

                            Seperti yang kita tahu, PHP merupakan salah satu bahasa pemrograman yang dinamis dalam mengembangkan situs web.
                            
                            Nah, adanya Laravel membuat PHP menjadi bahasa pemrograman yang lebih sederhana, aman, dan cepat.
                            
                            Secara garis besar, Laravel memiliki beragam fitur yang membantumu untuk cepat dalam pengembangan website.
                            
                            Fitur-fitur tersebut seperti Template Engine, Modularity, dan Routing.
                            
                            Laravel sepenuhnya berada di sisi server PHP. Dalam artian lain, Laravel adalah backend. Dengan demikian, kamu dapat membuat aplikasi fullstack menggunakan Laravel."
        ]
    ];
    public function getPengertianLaravel()
    { 
        return $this->pengertian;
    }
    
}