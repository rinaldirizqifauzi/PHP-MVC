<?php 

class Keunggulan_model {
    private $keunggulan = [
        [
            "keunggulan" => "Laravel adalah framework aplikasi web kontemporer, open source dan digunakan secara luas untuk perancangan aplikasi web yang cepat dan mudah.Laravel dibuat oleh Taylor Otwell pada tahun 2011. Framework ini dibuat untuk pengembangan aplikasi website dimana mengikuti arsitektur MVC (model view controller).

                            MVC itu sendiri adalah sebuah pendekatan perangkat lunak yang memisahkan aplikasi logika dari presentasi. MVC memisahkan aplikasi berdasarkan komponen- komponen aplikasi, seperti : manipulasi data, controller, dan user interface."
        ],          
        [
            "keunggulan" => "Dilansir dari Updivision, Laravel adalah framework yang akan membantumu dalam memaksimalkan penggunaan PHP dalam proses pengembangan website.

                            Seperti yang kita tahu, PHP merupakan salah satu bahasa pemrograman yang dinamis dalam mengembangkan situs web.
                            
                            Nah, adanya Laravel membuat PHP menjadi bahasa pemrograman yang lebih sederhana, aman, dan cepat.
                            
                            Secara garis besar, Laravel memiliki beragam fitur yang membantumu untuk cepat dalam pengembangan website.
                            
                            Fitur-fitur tersebut seperti Template Engine, Modularity, dan Routing.
                            
                            Laravel sepenuhnya berada di sisi server PHP. Dalam artian lain, Laravel adalah backend. Dengan demikian, kamu dapat membuat aplikasi fullstack menggunakan Laravel."
        ]
    ];
    public function getPembukaan()
    { 
        return $this->keunggulan;
    }
    
}