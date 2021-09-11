<?php
$negara  = array(

    array('Benua Asia', 'Jepang', 'Tokyo', 'Kyoto', 'Osaka', 'Tateyama', 'Kawaguchhi', 
                   'Arab saudi', 'Riyadh', 'Mekkah', 'Jeddah', 'Madinah', 'Tabuk',
                   'Indonesia', 'Jakarta', 'Bandung', 'Bogor', 'Semarang', 'Surabaya'),

    array('Benua Afrika' =>'Mesir', 'Kairo', 'Banha', 'Asyun', 'Aswan', 'Akhmin',
                      'Maroko', 'Rabat', 'Marrkech', 'Fes', 'Meknes', 'Ifrane',
                      'Afrika Selatan', 'Cape town', 'Nelspruit', 'Johanesburg', 'Kimberley', 'Durban'),                 
    
    array( 'Benua Australia' => 'Australia', 'Sidney', 'Perth', 'Melbourne', 'Darwin', 'Canberra',
                          'Selandia Baru', 'Auckland', 'Wellington', 'Hamilton', 'Rotorua', 'Napier',
                          'Fiji', 'Suva', 'Savusavu', 'Labasa', 'Levuka', 'Lautoka'),

    array( 'Benua Eropa' => 'Belanda' , 'Amsterdam', 'Den Haag', 'Roterrdam', 'Arnhem', 'Breda',
                     'Inggris','London', 'Manchester', 'Oxford', 'York', 'Liverpool',
                     'Italia', 'Roma', 'Milan', 'Venesia', 'Napoli', 'Bologna')
    
    
);
    


 foreach ($negara as $key => $value): {
     echo "<li>";
     echo "  $value[0]  $value[1]   $value[2], $value[3],  $value[4], $value[5] $value[6],";
     echo "<br>";
     echo "<li>";
     echo "  $value[7]   $value[8],  $value[9], $value[10], $value[11], $value[12],";
     echo "<br>";
     echo "<li>";
     echo " $value[13], $value[14] $value[15]  $value[16]";
     echo "<br>";
     echo "<br>";
     

}
        endforeach?>

        </li>
    
