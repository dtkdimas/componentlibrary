<?php

class Component_model{
    private $tahun = '2023';
    private $codepenlink = 'https://codepen.io/Dimas-Septiandi-the-solid/embed/xxQebeX?default-tab=&theme-id=dark';
    private $kategori = [
        [
            "id" => "1",
            "tahun" => "2023",
            "grup_component" => "Navbar",
            "nama_component" => "Default Navbar",
            "iframe_codepen" => "link"
        ],
        [
            "id" => "2",
            "tahun" => "2023",
            "grup_component" => "Navbar",
            "nama_component" => "Navbar with CTA Button",
            "iframe_codepen" => "link"
        ],
        [
            "id" => "3",
            "tahun" => "2023",
            "grup_component" => "Navbar",
            "nama_component" => "Navbar with Login Button",
            "iframe_codepen" => "link"
        ]
    ]

    public function getTahun(){
        return $this->tahun;
    }

    public function getCodepenLink(){
        return $this->codepenlink;
    }
    
    public function getAllKomponen(){
        return $this->kategori;
    }
}