<?php
/**
 * Proje : fethiye
 * Tarih : 01.12.2014 - 17:42
 * Mail  : ulas@mail.com
 */

class MY_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //All Langs
    public function langs()
    {
        $langs  =   $this->db
                    ->select('*')
                    ->from('langs')
                    ->get()->result_array();

        return $langs;
    }

    //Seflink Function (Russian and Other All LatinLangs)
    public function seflink($link,$dil)
    {
        if($dil == 'ru')
        {
            $tr = array(
                "А"=>"a", "Б"=>"b", "В"=>"v", "Г"=>"g", "Д"=>"d",
                "Е"=>"e", "Ё"=>"yo", "Ж"=>"zh", "З"=>"z", "И"=>"i",
                "Й"=>"j", "К"=>"k", "Л"=>"l", "М"=>"m", "Н"=>"n",
                "О"=>"o", "П"=>"p", "Р"=>"r", "С"=>"s", "Т"=>"t",
                "У"=>"u", "Ф"=>"f", "Х"=>"kh", "Ц"=>"ts", "Ч"=>"ch",
                "Ш"=>"sh", "Щ"=>"sch", "Ъ"=>"", "Ы"=>"y", "Ь"=>"",
                "Э"=>"e", "Ю"=>"yu", "Я"=>"ya", "а"=>"a", "б"=>"b",
                "в"=>"v", "г"=>"g", "д"=>"d", "е"=>"e", "ё"=>"yo",
                "ж"=>"zh", "з"=>"z", "и"=>"i", "й"=>"j", "к"=>"k",
                "л"=>"l", "м"=>"m", "н"=>"n", "о"=>"o", "п"=>"p",
                "р"=>"r", "с"=>"s", "т"=>"t", "у"=>"u", "ф"=>"f",
                "х"=>"kh", "ц"=>"ts", "ч"=>"ch", "ш"=>"sh", "щ"=>"sch",
                "ъ"=>"", "ы"=>"y", "ь"=>"", "э"=>"e", "ю"=>"yu",
                "я"=>"ya", " "=>"-", "."=>"", ","=>"", "/"=>"-",
                ":"=>"", ";"=>"","—"=>"", "–"=>"-"
            );
            $cevir = strtr($link,$tr);
            return strtolower($cevir);
        }
        else
        {
            $tr = array('ş','Ş','ı','İ','ğ','Ğ','ü','Ü','ö','Ö','ç','Ç');
            $en = array('s','s','i','i','g','g','u','u','o','o','c','c');
            $link = str_replace($tr,$en,$link);
            $link = strtolower($link);
            $link = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '-', $link);
            $link = preg_replace('/[^%a-z0-9 _-]/', '-', $link);
            $link = preg_replace('/\s+/', '-', $link);
            $link = preg_replace('|-+|', '-', $link);
            $link = str_replace("--","-",$link);
            $link = trim($link, '-');
            return $link;
        }
    }
} 