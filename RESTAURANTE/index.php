<?php
$data = 'TAPAS
ENSALADAS
TOSTAS
Anchoas con tomate (und)
1,80€
Tomate, ventresca y cebollitas
9,00€
Chorizo criollo
6,00€
Croquetas de pollo de corral y
1,80€
jamón ibérico (und)
Buñuelos de bacalao (und)
1,90€
Burrata, rúcula y tomate seco
Ensalada de pasta y verduritas
Brotes tiernos, pollo, miel y mostaza
900 9,00€
Jamón, rúcula, queso y
7,00€
tomate seco
9,00€
Sardina ahumada y escalibada
6,00€
9,00€
Boquerones en vinagre con
5,50€
aceitunas rellenas
Ensaladilla rusa
6,50€
ARROCES
Ensaladilla de sepia
8,00€
Min. 2 personas.
Sepia con mayonesa
00
9,00€
Esgarraet
6,50€
HUEVOS CON...
Elige seco o meloso
Pollo de corral y setas
12,00€
Oreja con emulsión de mery
6,50€
Huevos rotos con chistorra
10,00€
Marinero.
12,00€
Patatas bravas
Morro al momento
5,00€
Huevos rotos con jamón
10,00€
Fideua Marinera
12,00€
6,00€
Huevo a baja temperatura
10,00€
Rabo de cerdo
6,00€
parmentier y boletus
Fingers de pollo de corral
8,00€
Calamar de playa con crema de
13,00€
CARNES Y PESCADOS
boniato
Entrecot argentino (375gr.)
16,00€
Güeña, morcilla de torás, trinchat
de col, patata paja y huevo de
codorniz
8,00€
Embutidos de toras a la parrilla
9,00€
Calamarcito con ajetes confitados
8,00€
Callos con garbanzos y chorizo
9,00€
Pata de pulpo a la parrilla con
0013,00€
parmentier
BOCADILLOS Y
HAMBURGUESAS
Chivito
lomo, lechuga, mayonesa, bacón y tomate
Calamares
Chuletitas de cordero de toras
15,00€
Bacalao a la plancha o rebozado
con pisto
13,00€
6,00€
6,00€
Jamón Ibérico
14,00€
Ternera
000 7,00€
Quesos Manchegos
0 12,00€
POSTRES
Ternera, cebolla caramelizada y queso brie
Calamar a la romana con mayonesa
7,50€
Pollo
6,00€
Tarta de queso
5,00€
de jengibre y lima
Pollo, huevo, mayonesa Hoisin y lechuga
Coulant de chocolate
5,00€
Embutido de toráscon patatas a
lo pobre
6,00€
Tatin de manzana
5,00€';

// Create a new XML document
$doc = new DOMDocument('1.0');

// Create the root element
$root = $doc->createElement('menu');
$root = $doc->appendChild($root);

// Create the sections
$sections = explode("\n", str_replace("\n\n", "\n", $data));
foreach ($sections as $section) {
    $section = trim($section);
    if (!empty($section)) {
        $sectionElements = explode("\n", $section);
        $title = array_shift($sectionElements);
        $title = $doc->createElement(htmlspecialchars($title));
        $title = $root->appendChild($title);

        foreach ($sectionElements as $item) {
            $item = trim($item);
            if (!empty($item)) {
                $element = $doc->createElement('item');
                $element = $title->appendChild($element);

                $name = $doc->createTextNode($item);
                $name = $element->appendChild($name);
            }
        }
    }
}

// Save the XML document to a file
$doc->save('menu.xml');
?>