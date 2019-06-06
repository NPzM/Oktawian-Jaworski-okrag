<?php
    /**
     * Funkcja rysująca okrąg w konsoli
     * w konsoli podajemy promień jaki ma mieć okrąg
     */
    function  okrag($promien)
    {
        /**
         * @var int stosunek rozpatrywanych połozeń znaków na konsoli, który jest prawie równy dwa
         */
        $pixel = 2;

        // ruch poziomy
        for ($i = -$promien; $i <= $promien; $i++)
        {
            // ruch pionowy
            for ($j = -$promien; $j <= $promien; $j++)
            {
                // wyrównanie szerokości z wysokością położenia w celu równego wstawiania znaków na okręgu
                $wynik = (($i*$pixel)/$promien)*(($i*$pixel)/$promien) + ($j/$promien)*($j/$promien);

                // przybliżony wynik położenia znaku w konsoli
                if ($wynik >0.97 && $wynik<1.12)
                {
                    echo "+";
                }
                else
                {
                    echo " ";
                }
            }
            echo "\n";
        }
    }

echo "Podaj promien: ";
$handle = fopen ("php://stdin","r");
$promien = fgets($handle);

okrag((int)$promien);
?>
