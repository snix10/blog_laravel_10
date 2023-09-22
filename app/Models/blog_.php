<?php

namespace App\Models;



class blog 
{
   private static  $blogs = [
        [
            "judul" => "judul satu",
            "slug"       =>"judul-satu",
            "subjudul" => "subjudul satu",
            "isi"   => "isi satu Lorem ipsum dolor sit amet, consectetur adipisicing elit. At modi hic est numquam omnis soluta! Quo molestiae ex eos odio. Rem corporis facilis itaque voluptatum nemo, aut dolor. Autem debitis vitae obcaecati maiores! Tempore possimus quasi adipisci recusandae dolor beatae voluptatem placeat praesentium expedita, nemo libero aperiam laudantium, sunt reiciendis. Veritatis sit nulla, porro ipsum est eaque nesciunt. Aliquid qui velit magnam, ea corporis, odio adipisci voluptatem consectetur libero nihil impedit laudantium ipsa fugiat exercitationem earum doloremque molestiae esse veritatis?"
        ],
        [
            "judul" => "judul kedua",
            "slug"       =>"judul-dua",
            "subjudul" => "subjudul kedua",
            "isi"   => "isi kedua Lorem ipsum dolor sit amet, consectetur adipisicing elit. At modi hic est numquam omnis soluta! Quo molestiae ex eos odio. Rem corporis facilis itaque voluptatum nemo, aut dolor. Autem debitis vitae obcaecati maiores! Tempore possimus quasi adipisci recusandae dolor beatae voluptatem placeat praesentium expedita, nemo libero aperiam laudantium, sunt reiciendis. Veritatis sit nulla, porro ipsum est eaque nesciunt. Aliquid qui velit magnam, ea corporis, odio adipisci voluptatem consectetur libero nihil impedit laudantium ipsa fugiat exercitationem earum doloremque molestiae esse veritatis?"
        ],
        [
            "judul" => "judul kjckjsnckjsc",
            "slug"       =>"judul-tiga",
            "subjudul" => "lkscdlksnjlkjsnkjsnksjncdkj",
            "isi"   => "isi kedua Lorem ipsum dolor sit amet, consectetur adipisicing elit. At modi hic est numquam omnis soluta! Quo molestiae ex eos odio. Rem corporis facilis itaque voluptatum nemo, aut dolor. Autem debitis vitae obcaecati maiores! Tempore possimus quasi adipisci recusandae dolor beatae voluptatem placeat praesentium expedita, nemo libero aperiam laudantium, sunt reiciendis. Veritatis sit nulla, porro ipsum est eaque nesciunt. Aliquid qui velit magnam, ea corporis, odio adipisci voluptatem consectetur libero nihil impedit laudantium ipsa fugiat exercitationem earum doloremque molestiae esse veritatis?"
        ]
        ];


        public static function all()
        {
            return self::$blogs;
        }
        public static function find($blog) {
             $blogs = self::$blogs;
             $blo = []; 
             foreach ($blogs as $b) {
                if ($b["slug"] === $blog) {
                    $blo = $b;
                }
            }
                return $blo;
            }
          
}