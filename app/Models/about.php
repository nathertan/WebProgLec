<?php

namespace App\Models;

class about{
    private static $data = [
        [
            "nim" => "2440006186",
            "nama" => "Giovanni Chandra",
            "email" => "giovanni.chandra@binus.ac.id"
        ],
        [
            "nim" => "2440013134",
            "nama" => "Shannya Maureen M",
            "email" => "shannya.michelia@binus.ac.id"
        ],
        [
            "nim" => "2440050350",
            "nama" => "Nathanael Dihyan",
            "email" => "nathanael.dihyan@binus.ac.id"
        ],
        [
            "nim" => "2440094472",
            "nama" => "Vivianit Indyca Vica",
            "email" => "vivianit.vica@binus.ac.id"
        ],
        [
            "nim" => "2440108332",
            "nama" => "Azizah Nabilah Anwar",
            "email" => "azizah.anwar@binus.ac.id"
        ]
    ];

    public static function all(){
        return collect(self::$data);
    }
}