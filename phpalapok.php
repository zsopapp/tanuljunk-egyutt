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

    <h2 class="php">Tipus modositasa TIPUSATALAKITASSAL</h2>
    
    <?php
        print '----------------------------- <br />';
        print 'Double >> Integer<br />';
        $tizedesszam = 3.18;
        $egesszam = (integer) $tizedesszam;
        print gettype ($egesszam) . '<br />'; //A sortores egy sorba kerul az utasitassal
        print var_dump ($egesszam) . '<br />';
        print $egesszam . '<br />';
        print '----------------------------- <br />';
        print 'Double >> String <br />';
        $karakterlanc = (string) $tizedesszam;
        print gettype ($karakterlanc) .'<br />';
        print var_dump ($karakterlanc) . 'Zarojelben a karakterek szama <br />'; 
        print $karakterlanc . '<br />';
        print '----------------------------- <br />';
        print 'Double >> Boolean <br />';
        $logikaivaltozo = (boolean) $tizedesszam;
        print gettype ($logikaivaltozo) . '<br />';
        print var_dump ($logikaivaltozo) . '<br />';
        ?>
        <?php
        $tizedes_szam = 3.14;
        print gettype ( $tizedes_szam );
        print ($tizedes_szam);
        print '<br />';
        $atakitott = (integer) $tizedes_szam;
        print gettype ( $atakitott );
        print ( $atakitott );
    ?>
    
    <h2 class="php">A tipus atalakitas egyeb modszerei</h2>
    
    <?php
        $tizedes_szam = 3.14;
        print gettype ( $tizedes_szam );
        print ($tizedes_szam);
        print '<br />';
        $atakitott = intval ( $tizedes_szam );
        print gettype ( $atakitott );
        print ( $atakitott );
    ?>
    
    <h2 class="php">Aritmetikai muveletek</h2>
    
    <?php
        print 'Ket valtozot deklaralunk, $ot es $harom';
        print '<br />';
        $ot = 5;
        $harom = 3;
        print 'Ot meg harom az egyenlo: ' . ($ot + $harom);
        print '<br />';
        print 'Otszor harom az egyenlo: ' . ($ot * $harom);
        print '<br />';
        print 'Ot minusz harom az egyenlo: ' . ($ot - $harom);
        print '<br />';
        print 'Ot osztva harommal az egyenlo: ' . ($ot / $harom);
        print '<br />';
        print 'Maradekkepzes: ' . ($ot % $harom);
        print '<br />';
        print 'Bevezetunk egy harmadik valtozot $eredmeny ami $ot es $harom osszege';
        print '<br />';
        $eredmeny = ($ot+$harom);
        /*Eloszor mindig be kell vezetnunk "deklaralnunk kell" a valtozot
        es csak azutan tudunk erteket adni neki"*/
        print var_dump ($eredmeny);
    ?>
    
    <h2 class="php">Osszefuzes</h2>
    
    <?php
        $szo1 = 'A php';
        $szo2 ='egy remek';
        $szo3 = 'programozasi nyelv!';
        print 'Ime a harom valtozo egymas utan:'." $szo1 $szo2 $szo3";
        /* A pont az osszefuzesben segit. Az egyes idezojelbe tett karakterlanc
        nem kerul feldolgozasra csak kiiratasra. Ami viszont kettos idezojelben van
        azt a PHP feldolgozza.*/
    ?>
    
    <h2 class="php">Osszetett ertekado muveletek</h2>

    <?php
        print 'Az osszetett ertekado muveletek egy hagyomanyos muveleti jelbol es az <br />
        azt koveto egyenlosegjelbol allnak. Pl.: <br />';
        $x = 4;
        print var_dump ($x) . '<br />';
        $x += 4;
        print var_dump ($x) . '<br />';
        print 'Ertekado muvelet eseten tehat ismernunk kell a valtozo erteket aminek ujabb erteket adunk. <br />
        Jelen esetben ez $x = 4. Igy is novelhetnenek $x erteket: <br />
        $x = $x + 4. Erteke igy $x-nek 8. Oszetett ertekado muvelettel <br />
        $x = 4;<br />
        $x +=4; ugyszinten 8 <br />';
        print 'Vagyis ennek alapjan ha $x = ' . $x = 4 . '<br />';
        print 'haromszor negy az = ' . $x *= 3;
    ?>
    
    <h2 class="php">Osszehasonlito muveletek</h2>
    
    <?php
        print 'Az osszehasonlito muveletek a tenyezokon vizsgalatokat vegeznek<br />
        es logikai ertekkel ternek vissza. Ertekuk tehat "true" lesz ha a feltetelezett</br />
        viszony fennall es "false" ha nem. Ez a tipusu kifejezes az olyan vezerlesi<br />
        szerkezetekben hasznos mint az "if" vagy a "while" utasitasok.<br />
        Az alabbi peldakban $x erteke minden esetben 4.<br />';
        $x = 4;
        print var_dump ($x == 5) . '<br />'; // A ket ertek megegyezik?
        print var_dump ($x != 5) . '<br />'; // A ket ertek nem egyenlo?
        print var_dump ($x === 5) . '<br />'; // A ket ertek tipusa es erteke megyeggyezik?
        print var_dump ($x < 5) . '<br />'; // A valtozo erteke kisebb mint 5?
        print var_dump ($x > 5) . '<br />'; // A valtozo erteke nagyobb mint 5?
        print var_dump ($x <= 5) . '<br />'; // A valtozo erteke kisebb vagy egyenlo mint 5?
        print var_dump ($x >= 5) . '<br />'; // A valtozo ertekenagyobb vagy egyenlo mint 5?
    ?>
    
    <h2 class="php">Osszehasonlito kifejezesek letrehozasa logikai muveletekkel</h2>
    
    <?php
        print 'A <b>logikai muveleti jelek</b> logikai ertekeken vegeznek muveleteket. Pl.: <br />';
        print '$x = 7';
        print '( $x > 2 ) && ( $x < 15 ) <br />';
        $x = 7;
        print 'Mivel a bal es a jobb tenyezo is igaz azeredmeny: ';
        print var_dump ( $x > 2 ) && ( $x < 15 );
        print '<br />';
        print 'Logikai muveleti jelek: <br />';
        print '<b>II</b> : vagy, a bal vagy a jobb tenyezo igaz <br />';
        print '<b>or</b> : vagy, a bal vagy a jobb tenyezo igaz <br />';
        print '<b>xor</b> : kizaro vagy, vagy a bal vagy a jobb tenyezo igaz de csak az egyikuk <br />';
        print '<b>&&</b> : es, a bal es a jobb tenyezo is igaz <br />';
        print '<b>and</b> : es, a bal es a jobb tenyezo is igaz <br />';
        print '<b>!</b> : nem, az egyetlen tenyezo hamis <br />';
    ?>
    
    <h2 class="php">Egesz tipusu valtozok ertekenek automatikus novelese vagy csokkentese</h2>
    
    <?php
        print 'A PHP programpzas soran gyakran kerulunk olyan helyzetbe, hogy egy egesz<br />
        tipusu valtozo erteket egyel novelni vagy csokkenteni kell. <br />
        Ez jellemzoen akkor szokott elofordulni amikor egy ciklusban szamolunk valamit. <br />
        Ket modjat mar ismerjuk. <br />';
        print 'Novelhetjuk osszeado muveleti jellel: $x = 4, $x = ($x + 1) <br />';
        print $x = 4 .'<br />';
        print $x = ($x + 1) . '<br />';
        print 'Vagy novelhetjuk osszetett ertekado muvelettel: $x = 4 ,$x +=1. $x erteke eggyel no.<br />';
        print $x = 4 . '<br />';
        print $x += 1 .'<br />';
        print '<br />Az eredmeny mindket esetben modositja $x erteket, $x-be bele kerul.<br />
        mivel az ilyen kifejezesek nagyon gyakoriak a PHP kulonleges muveleteket biztosit <br />
        az egesz tipusu valtozok eggyel torteno novelesere ill. csokkentesere. <br />
        Ezeket a muveleteket nevezzuk <b>utotagos csokkentesnek, novelesnek</b>
        Az utotagkent hasznalt novelo muveleti jel a valtozo neve utani ket ++ jelbol all <br />
        $x = 4, $x++ viszont mar 5. <br />';
        $x = 4;
        $x++;
        print $x;
        print '<br />Hasonlokeppen ket -- jelet irunk a valtozo neve utan ha csokkentunk eggyel. <br />
        $x = 4, $x-- viszont mar 3. <br />';
        $x = 4;
        $x--;
        print $x;
    ?>
    <br />
    <?php
        $x = 3;
        print var_dump ($x++ < 4); // $x erteke meg mindig harom
        print var_dump ($x); // $x erteke mar 4
    ?>
    <br />
    <?php
        print 'Egyes esetekben szukseg lehet ra, hogy a valtozo erteke meg a kiertekeles elott <br />
        csokkenjen van nojon. Ilyen esetekben a muveleti jelek a valtozo ele kerulnek.<br />';
        $x = 3;
        print var_dump (++$x < 4) .'<br />';
        print var_dump ($x) . '<br />';
    ?>
    
    <h2 class="php">Allandok (konstansok)</h2>
    
    <?php
        define ( "FELHASZNALO" , "Abigail" );
        print 'Udvozlom kedves ' . FELHASZNALO;
    ?>
    
    <?php
        define ( "FELHASZNALO" , "Abigail" , true );
    ?>
    
    <h2 class="php">Az "if" utasitas</h2>
    
    <?php
        $elegedett = "nagyon";
        if ( $elegedett == "nagyon") {
            print "Orulunk, hogy elegedett szolgaltatasunkkal!";
        }
    ?>
    
    <?php
        $elegedett = 8;
        if ( $elegedett < 10 ) {
            print "A szam erteke kisebb mint 10";
        }
    ?>
    
    <h2 class="php">Az "if" utasitas "else" aga</h2>
    
    <?php
        $elegedett = "nagyon";
        if ( $elegedett == "nagyon") {
            print "Orulunk hogy elegedett szolgaltatasunkkal.";
        } else {
            print "Kerjuk ertekelje szolgaltatasunkat!";
        }
    ?>
    
        <?php
        // $elegedett = "nagyon";
        if ( $elegedett == "nagyon") {
            print "Orulunk hogy elegedett szolgaltatasunkkal.";
        } else {
            print "Kerjuk ertekelje szolgaltatasunkat!";
        }
    ?>
    
    <h2 class="php">Az "if" utasitas "elseif" aga</h2>
    
    <?php
		$t=date("H");
                
			if (($t>="9") && ($t<="10")) { echo "Ne legyel hulye, dolgozz!"; }
				elseif (($t>="10") && ($t<="11")) { echo "Nemsoka jon az ebed";}
				elseif ($t="16") { echo "Vege a munkaidonek, mehetsz haza";}
				elseif (($t>"16") && ($t<"22")) { echo "Szabad foglalkozas, azt csinalsz amit akarsz";}
					else { echo "Itt az ido eltenni magad holnapra" ;}				
	?>
    
    <h2 class="php">A "switch" utasitas</h2>
    
    <?php
        $eredeti = "malna";
        
            switch ($eredeti) {
                
                case "malna": // Abban az esetben ha $eredeti erteke malna
                    echo "A " . "$eredeti" . " is egy gyumolcs"; // ird ki ezt
                    break;
                case "szolo"; // Abban az ha $eredeti erteke szolo
                    echo "A " . "$eredeti" . " is finom gyumolcs"; // ird ki ezt
                    break;
                case "citrom": // Abban az ha $eredeti erteke citrom
                    echo "A " . "$eredeti" . " nagyon savanyu de az is gyumolcs";
                    break;
                default: // Ha semmi sincs megadva
                    echo "Valamit meg kell adnod"; // Akkor ird ki ezt
    
                    }
            
    ?>
    
    //Masik pelda ugyanerre
    
    <?php
    $gondoltam = 7;
    $tipp = 10;
    
            switch ($gondoltam) {
                    case ($tipp < $gondoltam):
                            echo "Nagyobbra gondoltam";
                            break;
                    case ($tip == $gondoltam):
                            echo "Igen, kitalaltad!";
                            break;
                    default :
                            echo "Kisebbre gondoltam";
            }
    ?>
    
    <h2 class="php">A ? muvelet</h2>
    
    <?php
    $tipp = 10;
    
    $talalt = "Gratulalok eltalaltad!";
    $nemtalalt = "Nen erre a szamra gondoltam";
    
    $szoveg = ($tipp == 7) ?$talalt : $nemtalalt;
    print "$szoveg";
    ?>
    
    <h2 class="php">A "while" ciklus</h2>
    
    <?php
        $szamlalo = 1 ;
        // $szamlalo erteke 1
            while ( $szamlalo <=12 ) {
            // Amig szamlalo erteke kisebb vagy egyenlo mint 12
                echo "$szamlalo ketszerese " . ($szamlalo * 2) . "<br />" ;
                // Addig ird ki a szoveget majd szamlalo erteket szorozd meg kettovel
                $szamlalo++;
                // Vegul szamlalo ertekehez adj hozza egyet 
            }
    ?>

    <h2 class="php">A "do .. while" ciklus</h2>
    
    <?php
        $szam = 1;
        // $szam valtozo erteke 1
            do {
                print "Vegrehajtasok szama: $szam <br />\n";
                $szam++;
                // Ez a programresz mindenkeppen lefut de ...
            } while ( $szam > 200 && $szam < 400 );
            // $szam erteke csak akkor fog eggyel megnoni ha kezdeti erteke 200 es 400 kozott van
    ?>
    
    <h2 class="php">A "for" ciklus</h2>
    
    <?php
        for ( $szamlalo = 1; $szamlalo <= 12; $szamlalo++ ) {
            print "$szamlalo ketszerese " . ( $szamlalo*2) . "<br />";
        }
    ?>
    
    <h2 class="php">A "for" Ciklus elhagyasa "break" utasitas segitsegevel</h2>
    
    <?php
	/* $szamlalo erteke 1-el indul. Ha szamlalo erteke kisebb vagy egyenlo 10
	akkor szamlalo erteket noveld eggyel */
	for ( $szamlalo = -1; $szamlalo <= 10; $szamlalo++ ) {
	    $eredmeny = 4000/$szamlalo;
	    print "4000 $szamlalo reszre osztva $eredmeny<br />";
	    }
    ?>
	
    <?php
	$szamlalo = -4; 
	    for ( ; $szamlalo <= 10; $szamlalo++ ) {
		if ( $szamlalo == 0 )
		break;
		} {
		    $eredmeny = 4000 / $szamlalo;
		    print "4000 $szamlalo reszre osztva $eredmeny<br />";
		}
    ?>
    
    <h2 class="php">A continue utasitas</h2>
    
    <?php
    $szamlalo = -4; 
        for ( ; $szamlalo <= 10; $szamlalo++ ) {
            if ( $szamlalo == 0 ) {
            continue;
        } 
            $seged = 4000 / $szamlalo;
            print "4000 $szamlalo reszre osztva $seged<br />";
        }
    ?>
    
    <h2 class="php">Egymasba agyazott ciklusok</h2>
    
    <?php
    print "<table border = 1 >\n" ;
    for ( $y = 1 ; $y <= 12; $y++ ) {
        print "<tr>\n";
        for ( $x = 1; $x <= 12; $x++ ) {
            print "\t<td>";
            print ( $x*$y);
            print "</td>\n";
        }
        print "</tr>\n";
    }
    print "</table>\n";
    ?>
    
    <h2 class="php">Kodblokkok es bongeszobe irt kimenet</h2>
    
    <?php
    $ar_megjelenit = true;
    
        if ( $ar_megjelenit ); {
            print "<table border=\"1\">";
            print "<tr><td colspan =\"3\">";
            print "A mai arak dollarban";
            print "</td></tr><tr>";
            print "<td>14</td><td>32</td><td>71</td>";
            print "</tr></table>";
        }
    ?>

    <?php
        $ar_megjelenit = true;
        if ( $ar_megjelenit ); {
        ?>
        <table border= "1">
        <tr><td colspan= "3">Amai arak dollarban</td></tr><tr>
        <td>14</td><td>32</td><td>71</td>
        </tr></table>
        <?php
        }
    ?>
    
    <h2 class="php">Fuggvenyek letrehozasa</h2>
    
    <?php
    
        function osszead ($szam1, $szam2) {
                echo ($szam1 + $szam2) . "<br />";
        }
        
        osszead (4,5);
        osszead (10,5);
        osszead (20,5);
    
    ?>
    
    <h2 class="php">Ertek visszaadasa sajat fuggvenyekbol</h2>
    
    <?php
        function osszeadas ( $elsoszam, $masodikszam) {
            $eredmeny = $elsoszam + $masodikszam . '<br />' ;
            return $eredmeny;
        }
        print osszeadas ( 3, 5 );
        print osszeadas ( 9, 7 );
        print osszeadas ( 10, 5 );
        print osszeadas ( 2, 15 );
        ?>
        
    <?php
        function osszeszoroz ( $szorzando1, $szorzando2 ) {
            $szorzat = $szorzando1 * $szorzando2 . '<br />' ;
            return $szorzat;
        }
        print osszeszoroz ( 3, 5 );
        print osszeszoroz ( 9, 7 );
        print osszeszoroz( 10, 5 );
        print osszeszoroz ( 2, 15 );
    ?>
</body>
</html>
