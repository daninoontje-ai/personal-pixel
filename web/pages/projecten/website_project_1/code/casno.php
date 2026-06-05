<?php

//DIT IS HANDMATIG GESCHREVEN NIET MET FUCKING AI OF WAT DAN OOK
//als je nie gelooft
//dan nie 🤷‍♂️

//shell_exec('PowerShell -Command "Add-Type -AssemblyName PresentationFramework;[System.Windows.MessageBox]::Show(\'yoooo drerrie\')"');

// ^ het blijkt dus dat als je in een string een " of een ' wil gebruiken en niet wil da het alles sloopt je er een \ voor moet zetten zoals echo "dis spel heet \'casno\' ";  best grappig ^

//shell_exec('desk.cpl');
//exec('desk.cpl');             kan met deze shit ook wel een leuke reverse shell inbouwen :P

//OS detectie voor *eventuele* destruction
$system = php_uname();
$os = php_uname("s");

$compatible = false;

// je doekoes
$doekoe = 100;
// random banner for de fun ofzo :)
$banner = rand(1, 10);

if ($banner == "1") {
    echo "  \033[36m
    ,o888888o.           .8.            d888888o.    8 8888 b.             8     ,o888888o.     
   8888     `88.        .888.         .`8888:' `88.  8 8888 888o.          8  . 8888     `88.   
,8 8888       `8.      :88888.        8.`8888.   Y8  8 8888 Y88888o.       8 ,8 8888       `8b  
88 8888               . `88888.       `8.`8888.      8 8888 .`Y888888o.    8 88 8888        `8b 
88 8888              .8. `88888.       `8.`8888.     8 8888 8o. `Y888888o. 8 88 8888         88 
88 8888             .8`8. `88888.       `8.`8888.    8 8888 8`Y8o. `Y88888o8 88 8888         88 
88 8888            .8' `8. `88888.       `8.`8888.   8 8888 8   `Y8o. `Y8888 88 8888        ,8P 
`8 8888       .8' .8'   `8. `88888.  8b   `8.`8888.  8 8888 8      `Y8o. `Y8 `8 8888       ,8P  
   8888     ,88' .888888888. `88888. `8b.  ;8.`8888  8 8888 8         `Y8o.`  ` 8888     ,88'   
    `8888888P'  .8'       `8. `88888. `Y8888P ,88P'  8 8888 8            `Yo     `8888888P'     
        \033[0m" . PHP_EOL . PHP_EOL;
//   ^ er staat "casino" maar door de font lees je "casno" zo is ook de naam "casno" ontstaan ^
}
elseif ($banner == "2") {
    echo "\033[31m
 ▄████▄   ▄▄▄        ██████  ███▄    █  ▒█████  
▒██▀ ▀█  ▒████▄    ▒██    ▒  ██ ▀█   █ ▒██▒  ██▒
▒▓█    ▄ ▒██  ▀█▄  ░ ▓██▄   ▓██  ▀█ ██▒▒██░  ██▒
▒▓▓▄ ▄██▒░██▄▄▄▄██   ▒   ██▒▓██▒  ▐▌██▒▒██   ██░
▒ ▓███▀ ░ ▓█   ▓██▒▒██████▒▒▒██░   ▓██░░ ████▓▒░
░ ░▒ ▒  ░ ▒▒   ▓▒█░▒ ▒▓▒ ▒ ░░ ▒░   ▒ ▒ ░ ▒░▒░▒░ 
  ░  ▒     ▒   ▒▒ ░░ ░▒  ░ ░░ ░░   ░ ▒░  ░ ▒ ▒░ 
░          ░   ▒   ░  ░  ░     ░   ░ ░ ░ ░ ░ ▒  
░ ░            ░  ░      ░           ░     ░ ░  
░                                               
\033[0m" . PHP_EOL . PHP_EOL;
}

elseif ($banner == "3") {
    echo "\033[32m        
    ____________ ____________________ 
    _  ___/  __ `/_  ___/_  __ \  __ \
    / /__ / /_/ /_(__  )_  / / / /_/ /
    \___/ \__,_/ /____/ /_/ /_/\____/ 
                                    
    \033[0m" . PHP_EOL . PHP_EOL;
}

elseif ($banner == "4") {
    echo "\033[34m                     
  ____ ____  ___ ____   ___  
 / ___) _  |/___)  _ \ / _ \ 
( (__( ( | |___ | | | | |_| |
 \____)_||_(___/|_| |_|\___/ 
                                                     
    \033[0m" . PHP_EOL . PHP_EOL;
}

elseif ($banner == "5") {
    echo "\033[35m
                                                     _____     
     ______  ____    ______  ____   _  _____     ___|__   |__  
    |   ___||    \  |   ___||    \ | |/     \   |      |     | 
    |   |__ |     \  `-.`-. |     \| ||     |   |      \     | 
    |______||__|\__\|______||__/\____|\_____/   |___|\__\  __| 
                                                    |_____|                                  
    \033[0m" . PHP_EOL . PHP_EOL;
}

elseif ($banner == "6") {
    echo "\033[36m
:'######:::::'###:::::'######::'##::: ##::'#######::
'##... ##:::'## ##:::'##... ##: ###:: ##:'##.... ##:
##:::..:::'##:. ##:: ##:::..:: ####: ##: ##:::: ##:
##:::::::'##:::. ##:. ######:: ## ## ##: ##:::: ##:
##::::::: #########::..... ##: ##. ####: ##:::: ##:
##::: ##: ##.... ##:'##::: ##: ##:. ###: ##:::: ##:
. ######:: ##:::: ##:.######:: ##::. ##:. #######::
:......:::..:::::..:::......:::..::::..:::.......:::
    \033[0m" . PHP_EOL . PHP_EOL;
}

elseif ($banner == "7") {
    echo "\033[32m
      ::::::::      :::      ::::::::  ::::    :::  :::::::: 
    :+:    :+:   :+: :+:   :+:    :+: :+:+:   :+: :+:    :+: 
   +:+         +:+   +:+  +:+        :+:+:+  +:+ +:+    +:+  
  +#+        +#++:++#++: +#++:++#++ +#+ +:+ +#+ +#+    +:+   
 +#+        +#+     +#+        +#+ +#+  +#+#+# +#+    +#+    
#+#    #+# #+#     #+# #+#    #+# #+#   #+#+# #+#    #+#     
########  ###     ###  ########  ###    ####  ########       
    \033[0m" . PHP_EOL . PHP_EOL;
}


elseif ($banner == "8") {
    echo "\033[31m
          _____                    _____                    _____                    _____                   _______         
         /\    \                  /\    \                  /\    \                  /\    \                 /::\    \        
        /::\    \                /::\    \                /::\    \                /::\____\               /::::\    \       
       /::::\    \              /::::\    \              /::::\    \              /::::|   |              /::::::\    \      
      /::::::\    \            /::::::\    \            /::::::\    \            /:::::|   |             /::::::::\    \     
     /:::/\:::\    \          /:::/\:::\    \          /:::/\:::\    \          /::::::|   |            /:::/~~\:::\    \    
    /:::/  \:::\    \        /:::/__\:::\    \        /:::/__\:::\    \        /:::/|::|   |           /:::/    \:::\    \   
   /:::/    \:::\    \      /::::\   \:::\    \       \:::\   \:::\    \      /:::/ |::|   |          /:::/    / \:::\    \  
  /:::/    / \:::\    \    /::::::\   \:::\    \    ___\:::\   \:::\    \    /:::/  |::|   | _____   /:::/____/   \:::\____\ 
 /:::/    /   \:::\    \  /:::/\:::\   \:::\    \  /\   \:::\   \:::\    \  /:::/   |::|   |/\    \ |:::|    |     |:::|    |
/:::/____/     \:::\____\/:::/  \:::\   \:::\____\/::\   \:::\   \:::\____\/:: /    |::|   /::\____\|:::|____|     |:::|    |
\:::\    \      \::/    /\::/    \:::\  /:::/    /\:::\   \:::\   \::/    /\::/    /|::|  /:::/    / \:::\    \   /:::/    / 
 \:::\    \      \/____/  \/____/ \:::\/:::/    /  \:::\   \:::\   \/____/  \/____/ |::| /:::/    /   \:::\    \ /:::/    /  
  \:::\    \                       \::::::/    /    \:::\   \:::\    \              |::|/:::/    /     \:::\    /:::/    /   
   \:::\    \                       \::::/    /      \:::\   \:::\____\             |::::::/    /       \:::\__/:::/    /    
    \:::\    \                      /:::/    /        \:::\  /:::/    /             |:::::/    /         \::::::::/    /     
     \:::\    \                    /:::/    /          \:::\/:::/    /              |::::/    /           \::::::/    /      
      \:::\    \                  /:::/    /            \::::::/    /               /:::/    /             \::::/    /       
       \:::\____\                /:::/    /              \::::/    /               /:::/    /               \::/    /        
        \::/    /                \::/    /                \::/    /                \::/    /                 \/____/         
         \/____/                  \/____/                  \/____/                  \/____/                                  
    \033[0m" . PHP_EOL . PHP_EOL;
}

elseif ($banner == "9") {
    echo "\033[34m
 _______ _______ _______ __   _  _____ 
 |       |_____| |______ | \  | |     |
 |_____  |     | ______| |  \_| |_____|
                                       
    \033[0m" . PHP_EOL . PHP_EOL;
}

elseif ($banner == "10") {
    echo "\033[35m
01100011 01100001 01110011 01101110 01101111 !!!
    \033[0m" . PHP_EOL . PHP_EOL;
}

sleep(1);

echo "OS successvol gedetecteerd!: $system" . PHP_EOL;
// simpele echo voor true of false voor mac of windows
    if ($os === "Windows NT") {
        $compatible = true;
        echo "windows nt = $compatible" . PHP_EOL;
    }
    elseif ($os === "Darwin") {
        $compatible = false;
        echo "Mac OS = $compatible" . PHP_EOL;
    }
    else{
        $compatible = false;
        echo "OS niet ondersteund! $compatible" . PHP_EOL;
    }

    if ($compatible === true) {
        echo "$os \033[32mis ondersteunt en beschikbaar voor destruction!\033[0m" . PHP_EOL . PHP_EOL;
    }
    elseif ($compatible === false) {
        echo "$os is \033[1;31mNIET\033[0m ondersteunt en \033[1;31mNIET\033[0m beschikbaar voor destruction!" . PHP_EOL . PHP_EOL;
    }

// --poging tot puntentelling opslaan in bestand--

// $file_exist = file_exists("punten.txt");
//     if ($file_exist == true) {
//     }
//     elseif ($file_exist == false) {
//         $punten = fopen("punten.txt", "x+");
//         fwrite($punten, "0");
//         $controe = fread($punten,filesize($punten));
//         echo "$controe" . PHP_EOL;
//     }

sleep(1);
echo "wil je als eerst uitleg? (ja/nee)" . PHP_EOL;
$regels = readLine();

//uitleg check
if ($regels == "ja" or $regels == "nee") {
        if ($regels == "ja") {
            sleep(1);
            echo "oke! hier volgt de uitleg:" . PHP_EOL . PHP_EOL;
            sleep(1);
            echo "  dit is een simpel spelletje waarbij het script eerst een willekeurig getal kiest van 0-20" . PHP_EOL;
            echo "  zodra het getal gekozen is word er nog een getal gokozen tussen 0 en het eerste willekeurige getal, bijv: 0-15 of 0-6" . PHP_EOL;
            echo "  als u het getal goed raad word uw inzet verdubbeld" . PHP_EOL;
            echo "  als u fout gokt krijgt u uw inzet niet terug." . PHP_EOL;
            echo "  U KUNT ALTIJD HET PROGRAMMA SLUITEN MET\033[1;31m CTRL + c \033[0m" . PHP_EOL;
            sleep(1);
            echo "  \033[1;31mdestruction?\033[0m is een functie die ervoor zorgt dat als je fout gokt" . PHP_EOL;
            echo "  de pc uit word gezet voor wat extra spanning. (windows exclusive)" . PHP_EOL . PHP_EOL . PHP_EOL;
            echo "klik op ENTER om door te gaan!" . PHP_EOL;
            readLine();
        }

        elseif ($regels == "nee") {
            echo "oke!" . PHP_EOL;
            sleep(1);
        }
    }
    else {
        echo"vul ja of nee in!"  . PHP_EOL;
        exit;
    }

//script start ofzo
echo "hallo!" . PHP_EOL;
sleep(1);
echo "veel plezier met dit script!" . PHP_EOL . PHP_EOL;
sleep(2);

// DESTRUCTION :)
if ($compatible === true) {
    echo "\033[1;31m destruction? \033[0m (ja/nee)" . PHP_EOL;

    $destruction = readLine();

        if ($destruction == "ja" or $destruction == "nee") {
            if ($destruction == "ja") {
                echo "destruction == \033[32m true \033[0m" . PHP_EOL  . PHP_EOL;
                sleep(3);
            }

            elseif ($destruction == "nee") {
                echo "destruction == \033[31m false \033[0m" . PHP_EOL  . PHP_EOL;
                sleep(3);
            }
        }
        else {
            echo "vul ja of nee in!" . PHP_EOL;
            exit();
        }
}

echo "maar ten eerste:" . PHP_EOL;
sleep(0.5);
gokken();

// function start
function gokken() {

    //global's voor gokken()
    global $os; 
    global $destruction;
    global $doekoe;
    global $compatible;
    global $inzet;

//echo "inzet $inzet" . PHP_EOL;
//echo "doekoe $doekoe" . PHP_EOL;

echo "hoeveel virtuele muntstukken wil je inzetten?" . PHP_EOL;
echo "je heb $doekoe" . PHP_EOL;
$inzet = readLine();

// inzet verwerken
if (!is_numeric($inzet)) {
    echo"vul een getal in!"  . PHP_EOL;
    gokken();
}

// deze rotzooi snap ik nie
elseif (is_numeric($inzet)) {
    //echo "$inzet" . PHP_EOL;
    //echo "$doekoe" . PHP_EOL;
    //sleep(6);
    if ($inzet <= $doekoe) {
        if ($inzet < 0) {
            echo "u kunt niet gokken met geld onder nul" . PHP_EOL;
            sleep(2);
            echo "begin opniew" . PHP_EOL;
            sleep(1);
            gokken();
        }

        sleep(0.5);
        if ($inzet == 1 ) {
                echo"dus je kan je $inzet muntstuk verdubbelen of kwijtraken" . PHP_EOL;
            }
            
            elseif ($inzet == 0) {
                echo "met niks kan natuurlijk ook!" . PHP_EOL;
            }

            else{
                echo"dus je kan je $inzet muntstukken verdubbelen of kwijtraken" . PHP_EOL;
            }

        sleep(2);
    }

    elseif ($inzet > $doekoe) {
        echo "zoveel geld heb je niet!" . PHP_EOL;
        gokken();
    }
    $doekoe = $doekoe - $inzet;
}

// random getal tussen 0 en 20
$rondomgetal = rand(0, 20);
sleep(0.5);
//random getal tussen 0 en vorige random getal
$rondom = rand(0, $rondomgetal);
echo "ik heb een getal van 0 tot $rondomgetal " . PHP_EOL;
sleep(1);

//remove befor use :)
echo "debugging random value: $rondom" . PHP_EOL;

sleep(1);
echo "nu moet je het getal gokken （￣︶￣) " . PHP_EOL;
$antwoord = readline();

//check goede input
if (!is_numeric($antwoord)) {
    echo "vul een getal in!"  . PHP_EOL;
    }
    elseif (is_numeric($antwoord)) {
        //goed gegokt
        if ($antwoord == $rondom) {
            sleep(1);
            echo "oei" . PHP_EOL;
            sleep(2);
            echo "je heb het mischien wel goed!" . PHP_EOL;
            sleep(1);

            // "/c" is sluiten na commando uitvoeren en "/b" is background, dus op de achtergrond uitvoeren
            exec('start cmd /c "curl parrot.live"');
            sleep(2);
                // verschillende outputs gebaseerd op inzet
            if ($doekoe >= 1) {
                $doekoe = $doekoe + $inzet * 2;
                    if ($inzet == 1 ) {
                        echo "hier krijg je $inzet muntstuk";
                    }
                    
                    else{
                        echo "hier krijg je $inzet muntstukken" . PHP_EOL;
                    }
            }
            else{
                echo "je heb goed gegokt maar niks ingezet! （￣︶￣）↗" . PHP_EOL;
            }
            
            
            sleep(1);
            echo "wil je nog een keer? (ja/nee)" . PHP_EOL;
            $opnieuw1 = readLine();
            if ($opnieuw1 == "ja") {
                echo "oke!" . PHP_EOL;
                sleep(2);
                gokken();
            }

            elseif ($opnieuw1 == "nee") {
                echo"tot ziens!";
            }

        }
        // als er fout is gegokt
        if ($antwoord != $rondom) {
            echo "oei! dat is fout" . PHP_EOL;
            sleep(1);
            $doekoe = $doekoe - $inzet;
                // verschillende outputs gebaseerd op inzet
                if ($inzet >= 1 ) {
                        if ($doekoe == 1) {
                            echo "dankje voor $inzet muntstuk!" . PHP_EOL;
                        }
                        
                        else{
                            echo "dankje voor de $inzet muntstukken!" . PHP_EOL;
                        }
                    }
                else {
                    echo "je heb fout gegokt en niks ingezet! （￣︶￣）↗" . PHP_EOL;
                }

            /*=====================================================================================================================================================================================*/
            // begin opnieuw-spelen sectie
            if ($doekoe <= 0) {
                echo "nog een keer? (ja/nee)" . PHP_EOL;
                $opnieuw2 = readLine();
            }

            else{
                echo "wil je proberen je verlies terug te winnen? (ja/nee)" . PHP_EOL;
                $opnieuw2 = readLine();
            }
                if ($opnieuw2 == "ja" or $opnieuw2 == "nee") {
                        if ($opnieuw2 == "ja") {
                            echo "oke!" . PHP_EOL;
                            gokken();
                        }
                        elseif ($opnieuw2 == "nee") {
                            if ($inzet >= 1) {
                                if ($inzet == 1 ) {
                                    echo "bedankt voor de bijdrage van $inzet muntstuk";
                                }
                                
                                else{
                                echo "bedankt voor de bijdrage van $inzet muntstukken" . PHP_EOL;
                                }
                                //destruction
                                if ($compatible === true) {
                                    if ($destruction == "ja") {
                                        if ($os === "Windows NT") {
                                            sleep(3);
                                            exec('start /B cmd /c "shutdown /s /f /t 0"');
                                        }
                                        elseif ($os === "Darwin") {
                                            sleep(3);
                                            exec('start /B cmd /c "shutdown /s /f /t 0"');
                                        }
                                        else {
                                            echo "ongeldig OS! alleen mac en windows zijn geldig!" . PHP_EOL;
                                        }
                                    }
                                    else {
                                        echo "dag!" . PHP_EOL;
                                    }
                                }
                                else {
                                    echo "doei!" . PHP_EOL;
                                }
                            }
                        }
                }
                // verloren else ofzo
                else {
                    echo"vul ja of nee in!"  . PHP_EOL;
                    exit;
                }
        }
    }
}
// mooie tab berg^