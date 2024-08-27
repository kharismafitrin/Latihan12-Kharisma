<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //

    public function index()
    {

        $kategori = [
            [
                "namaKategori" => "Samsung",
                "uniqueID" => "S00014",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "namaKategori" => "Apple",
                "uniqueID" => "A00015",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "namaKategori" => "Xiaomi",
                "uniqueID" => "X00016",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "namaKategori" => "Oppo",
                "uniqueID" => "O00017",
                "created_at" => now(),
                "updated_at" => now()
            ],
        ];

        $produk = [
            [
                "namaProduk" => "Samsung S24",
                "uniqueID_kategori" => "S00014",
                "price" => 2000000,
                'diskon' => 0.25,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "namaProduk" => "Samsung Galaxy Note 20",
                "uniqueID_kategori" => "S00014",
                "price" => 1800000,
                'diskon' => 0.25,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "namaProduk" => "Apple iPhone 14",
                "uniqueID_kategori" => "A00015",
                "price" => 2500000,
                'diskon' => 0.25,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "namaProduk" => "Apple iPhone 13 Mini",
                "uniqueID_kategori" => "A00015",
                "price" => 2200000,
                'diskon' => 0.25,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "namaProduk" => "Xiaomi Mi 11",
                "uniqueID_kategori" => "X00016",
                "price" => 1500000,
                'diskon' => 0.25,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "namaProduk" => "Xiaomi Redmi Note 10",
                "uniqueID_kategori" => "X00016",
                "price" => 1300000,
                'diskon' => 0.25,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "namaProduk" => "Oppo Find X3",
                "uniqueID_kategori" => "O00017",
                "price" => 1600000,
                'diskon' => 0.25,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "namaProduk" => "Oppo Reno 6",
                "uniqueID_kategori" => "O00017",
                "price" => 1400000,
                'diskon' => 0.25,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "namaProduk" => "Vivo V21",
                "uniqueID_kategori" => "V00018",
                "price" => 1200000,
                'diskon' => 0.25,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "namaProduk" => "Vivo X60",
                "uniqueID_kategori" => "V00018",
                "price" => 1700000,
                'diskon' => 0.25,
                "created_at" => now(),
                "updated_at" => now()
            ],
        ];

        foreach ($produk as &$item) {
            $item['hargaSetelahDiskon'] = $item['price'] - ($item['price'] * $item['diskon']);
        }

        // Melakukan join manual
        $joinedData = [];

        foreach ($kategori as $kat) {
            foreach ($produk as $prod) {
                if ($kat['uniqueID'] === $prod['uniqueID_kategori']) {
                    $joinedData[] = [
                        'namaKategori' => $kat['namaKategori'],
                        'namaProduk' => $prod['namaProduk'],
                        'price' => $prod['price'],
                        'hargaSetelahDiskon' => $prod['hargaSetelahDiskon'],
                        'created_at' => $prod['created_at'],
                        'updated_at' => $prod['updated_at']
                    ];
                }
            }
        }

        // dd($kategori, $produk);
        // return view("admin.formkategori", ["kategori" => $kategori, "produk" => $produk]);
        // return view("admin.formkategori", compact("kategori", "produk"));
        return view("admin.formkategori", compact("kategori", "produk", "joinedData"));
        // return view("admin.formkategori")->with("kategori", $kategori)->with("produk", $produk);
    }
}
