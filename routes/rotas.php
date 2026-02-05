<?php

include "./controller/controlador.php";

$URL = parse_url( $_SERVER ['REQUEST_URI'], PHP_URL_PATH);
echo $URL;

if($URL == "/canil-senai02/"){
    mainPage();
}
else if ($URL == "/canil-senai02/gatos"){
    gatosPage();

}

else if ($URL == "/canil-senai02/cachorros"){
    cachorrosPage();
    
}


else if ($URL == "/canil-senai02/peixes"){
    peixesPage();
    
}

else if ($URL == "/canil-senai02/passaros"){
    passarosPage();
    
}

else if ($URL == "/canil-senai02/pesquisa"){
    Pesquisapage();
}

else {
    echo "NOT FOUND!!!";
}
?>




