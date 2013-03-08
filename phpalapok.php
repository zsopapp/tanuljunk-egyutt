<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>PHP alapok</title>
    <style>
        h2.php {
            color: red;
            text-align: center;
            }
    </style>
</head>
<body>
    
    <h2 class="php">Valtozok bevezetese es egy muvelet a valtozokkal</h2>
    
    <?php
        $szam1 = 8;
        $szam2 = 4;
        print ($szam1 + $szam2);
    ?>
    
    <h2 class="php">A valtozo tipusanak lekerdezese: gettype()</h2>
    
    <?php
        $proba; // Bevezetes ertekadas nelkul. Csinaltunk proba valtozot de nem adtunmk neki erteket
        print gettype( $proba ); // NULL. Ez lesz az ertek amit vissza ad gettype lekerdezes utan
        print "<br />"; // HTML sortores beszurasa
        $proba = 5; // Egesz szam erteket adunk a valtozonak
        print gettype( $proba ); // A proba erteke 5 vagyis egesz szam, INTEGER
        print "<br />"; // HTML sortores beszurasa
        $proba = Ot_leirva; // Szoveget tarolunk a valtozoban
        print gettype( $proba ); // A valtozoban tarolt szoveget adja vissza, STRING
        print "<br />"; // HTML sortores beszurasa
        $proba = 5.0; // Lebegopontos szamot tarolunk a valtozoban, adunk meg erteknek
        print gettype( $proba ); // A valtozoban tarolt DOUBLE erteket adja vissza
        print "<br />";
        $proba = true; // Megadhatjuk hogy a valtozo erteke igaz vagy hamis legyen
        print gettype( $proba ); // A valtozo erteke igaz BOOLEAN
        print "<br>";
    ?>
    
    <h2 class="php">Tipusinformacio megjelenitese: var_dump()</h2>
    
    <?php
        $proba = 8;
        var_dump ( $proba );
    ?>
    
    <h2 class="php">Tipus MODOSITAS: settype()</h2>
    
    <?php
        $tizedes_szam = 3.14 ; // A valtozo tipusa double
        print gettype ( $tizedes_szam ); // Lekerdezzuk a gettype segitsegevel
        print "<br />";
        settype ( $tizedes_szam, int ); // Atalakitkjuk egesz szamma, integer
        print gettype ( $tizedes_szam ); // Lekerdezes utan mar csak a tizedes pont elotti erteket latjuk
    ?>
    
    <?php
        print 'Bevezetunk egy uj "Double" valtozot $tizedesszam neven, erteke 3.18';
        $tizedesszam = 3.18;
        print "<br />";
        var_dump ($tizedesszam);
        print '<br />';
        print 'Most a settype segitsegevel a double-t integer-re alakitom';
        print '<br />';
        settype ($tizedesszam, int);
        print 'Az ertek ' . $tizedesszam . ' lett.';
        print '<br />';
        print 'Ezt most most double-ra alakitok majd ujra lekerdezem';
        print '<br />';
        settype ($tizedesszam, double);
        print 'Az ertek ' . $tizedesszam . 'lett';
        print '<br />';
        print 'Most pedig szovegge "string" alakitom';
        settype ($tizedesszam, string);
        print '<br />';
        print gettype ($tizedesszam);
        print '<br />';
        print 'Vegul logikai tipusuva alakitom';
        settype ($tizedesszam, bool);
        print '<br />';
        print gettype ($tizedesszam);
        print '<br />';
        // Az alabbi sorban egybol a valtozot iratom ki
        print ($tizedesszam);
        /* Ha egy logikai valtozo tartalmat iratjuk ki es az ertek nagyobb mint 0
          akkor eredmeny keppen 1-et kapunk.*/
    ?>

</body>
</html>
