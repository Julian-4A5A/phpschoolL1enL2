{"filter":false,"title":"hawi.php","tooltip":"/L2/periode1/hawi.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":73,"column":65},"end":{"row":73,"column":66},"action":"insert","lines":["="],"id":272}],[{"start":{"row":73,"column":66},"end":{"row":73,"column":67},"action":"insert","lines":[" "],"id":273}],[{"start":{"row":73,"column":67},"end":{"row":73,"column":68},"action":"insert","lines":["$"],"id":274}],[{"start":{"row":73,"column":67},"end":{"row":73,"column":68},"action":"remove","lines":["$"],"id":275},{"start":{"row":73,"column":67},"end":{"row":73,"column":76},"action":"insert","lines":["$Voornaam"]}],[{"start":{"row":73,"column":66},"end":{"row":73,"column":67},"action":"remove","lines":[" "],"id":276}],[{"start":{"row":76,"column":24},"end":{"row":76,"column":56},"action":"remove","lines":["code to be executed if n=label2;"],"id":277},{"start":{"row":76,"column":24},"end":{"row":76,"column":98},"action":"insert","lines":["$Update = \"UPDATE $tablename set Voornaam=$Voornaam WHERE ID=$GenoemdeID\";"]}],[{"start":{"row":79,"column":56},"end":{"row":79,"column":130},"action":"insert","lines":["$Update = \"UPDATE $tablename set Voornaam=$Voornaam WHERE ID=$GenoemdeID\";"],"id":278}],[{"start":{"row":79,"column":24},"end":{"row":79,"column":56},"action":"remove","lines":["code to be executed if n=label3;"],"id":279}],[{"start":{"row":76,"column":57},"end":{"row":76,"column":58},"action":"remove","lines":["V"],"id":280}],[{"start":{"row":76,"column":57},"end":{"row":76,"column":58},"action":"remove","lines":["o"],"id":281}],[{"start":{"row":76,"column":57},"end":{"row":76,"column":58},"action":"remove","lines":["o"],"id":282}],[{"start":{"row":76,"column":57},"end":{"row":76,"column":58},"action":"remove","lines":["r"],"id":283}],[{"start":{"row":76,"column":57},"end":{"row":76,"column":58},"action":"insert","lines":["a"],"id":284}],[{"start":{"row":76,"column":58},"end":{"row":76,"column":59},"action":"insert","lines":["c"],"id":285}],[{"start":{"row":76,"column":58},"end":{"row":76,"column":59},"action":"remove","lines":["c"],"id":286}],[{"start":{"row":76,"column":57},"end":{"row":76,"column":58},"action":"remove","lines":["a"],"id":287}],[{"start":{"row":76,"column":57},"end":{"row":76,"column":58},"action":"insert","lines":["A"],"id":288}],[{"start":{"row":76,"column":58},"end":{"row":76,"column":59},"action":"insert","lines":["c"],"id":289}],[{"start":{"row":76,"column":57},"end":{"row":76,"column":63},"action":"remove","lines":["Acnaam"],"id":290},{"start":{"row":76,"column":57},"end":{"row":76,"column":67},"action":"insert","lines":["Achternaam"]}],[{"start":{"row":79,"column":57},"end":{"row":79,"column":65},"action":"remove","lines":["Voornaam"],"id":291},{"start":{"row":79,"column":57},"end":{"row":79,"column":58},"action":"insert","lines":["E"]}],[{"start":{"row":79,"column":57},"end":{"row":79,"column":58},"action":"remove","lines":["E"],"id":292},{"start":{"row":79,"column":57},"end":{"row":79,"column":62},"action":"insert","lines":["Email"]}],[{"start":{"row":79,"column":64},"end":{"row":79,"column":72},"action":"remove","lines":["Voornaam"],"id":293},{"start":{"row":79,"column":64},"end":{"row":79,"column":65},"action":"insert","lines":["E"]}],[{"start":{"row":79,"column":63},"end":{"row":79,"column":65},"action":"remove","lines":["$E"],"id":294},{"start":{"row":79,"column":63},"end":{"row":79,"column":69},"action":"insert","lines":["$Email"]}],[{"start":{"row":76,"column":69},"end":{"row":76,"column":74},"action":"remove","lines":["Voorn"],"id":295},{"start":{"row":76,"column":69},"end":{"row":76,"column":70},"action":"insert","lines":["A"]}],[{"start":{"row":76,"column":68},"end":{"row":76,"column":73},"action":"remove","lines":["$Aaam"],"id":296},{"start":{"row":76,"column":68},"end":{"row":76,"column":79},"action":"insert","lines":["$Achternaam"]}],[{"start":{"row":83,"column":24},"end":{"row":83,"column":78},"action":"remove","lines":["code to be executed if n is different from all labels;"],"id":297},{"start":{"row":83,"column":24},"end":{"row":83,"column":98},"action":"insert","lines":["$Update = \"UPDATE $tablename set Voornaam=$Voornaam WHERE ID=$GenoemdeID\";"]}],[{"start":{"row":83,"column":24},"end":{"row":83,"column":98},"action":"remove","lines":["$Update = \"UPDATE $tablename set Voornaam=$Voornaam WHERE ID=$GenoemdeID\";"],"id":298},{"start":{"row":83,"column":24},"end":{"row":83,"column":72},"action":"insert","lines":["echo \"Error Update\". $GenoemdeID . $conn->error;"]}],[{"start":{"row":63,"column":11},"end":{"row":63,"column":67},"action":"remove","lines":[" $Update = \"UPDATE $tablename set WHERE ID=$GenoemdeID\";"],"id":299}],[{"start":{"row":64,"column":16},"end":{"row":64,"column":38},"action":"remove","lines":["$conn->query($Update);"],"id":300}],[{"start":{"row":85,"column":12},"end":{"row":85,"column":34},"action":"insert","lines":["$conn->query($Update);"],"id":301}],[{"start":{"row":65,"column":16},"end":{"row":69,"column":21},"action":"remove","lines":["if ($conn->query($sql) === TRUE) {","                    echo $GenoemdeID. \" Geupadatet successfully\";","                } else {","                    echo \"Error Update\". $GenoemdeID . $conn->error;","                }    "],"id":302}],[{"start":{"row":67,"column":25},"end":{"row":67,"column":26},"action":"remove","lines":[")"],"id":303},{"start":{"row":67,"column":24},"end":{"row":67,"column":25},"action":"insert","lines":[")"]}],[{"start":{"row":67,"column":26},"end":{"row":67,"column":27},"action":"remove","lines":[" "],"id":304}],[{"start":{"row":67,"column":25},"end":{"row":67,"column":26},"action":"remove","lines":["n"],"id":305}],[{"start":{"row":67,"column":24},"end":{"row":67,"column":25},"action":"insert","lines":["$"],"id":306}],[{"start":{"row":67,"column":25},"end":{"row":67,"column":26},"action":"insert","lines":["u"],"id":307}],[{"start":{"row":67,"column":26},"end":{"row":67,"column":27},"action":"insert","lines":["p"],"id":308}],[{"start":{"row":67,"column":27},"end":{"row":67,"column":28},"action":"insert","lines":["d"],"id":309}],[{"start":{"row":67,"column":28},"end":{"row":67,"column":29},"action":"insert","lines":["a"],"id":310}],[{"start":{"row":67,"column":29},"end":{"row":67,"column":30},"action":"insert","lines":["t"],"id":311}],[{"start":{"row":67,"column":30},"end":{"row":67,"column":31},"action":"insert","lines":["e"],"id":312}],[{"start":{"row":67,"column":31},"end":{"row":67,"column":32},"action":"insert","lines":[" "],"id":313}],[{"start":{"row":67,"column":31},"end":{"row":67,"column":32},"action":"remove","lines":[" "],"id":314}],[{"start":{"row":67,"column":31},"end":{"row":67,"column":32},"action":"insert","lines":["p"],"id":315}],[{"start":{"row":67,"column":32},"end":{"row":67,"column":33},"action":"insert","lines":["l"],"id":316}],[{"start":{"row":67,"column":33},"end":{"row":67,"column":34},"action":"insert","lines":["e"],"id":317}],[{"start":{"row":67,"column":34},"end":{"row":67,"column":35},"action":"insert","lines":["k"],"id":318}],[{"start":{"row":74,"column":30},"end":{"row":74,"column":31},"action":"remove","lines":["3"],"id":319}],[{"start":{"row":74,"column":29},"end":{"row":74,"column":30},"action":"remove","lines":["l"],"id":320}],[{"start":{"row":74,"column":28},"end":{"row":74,"column":29},"action":"remove","lines":["e"],"id":321}],[{"start":{"row":74,"column":27},"end":{"row":74,"column":28},"action":"remove","lines":["b"],"id":322}],[{"start":{"row":74,"column":26},"end":{"row":74,"column":27},"action":"remove","lines":["a"],"id":323}],[{"start":{"row":74,"column":25},"end":{"row":74,"column":26},"action":"remove","lines":["l"],"id":324}],[{"start":{"row":77,"column":22},"end":{"row":77,"column":23},"action":"remove","lines":["."],"id":325}],[{"start":{"row":77,"column":21},"end":{"row":77,"column":22},"action":"remove","lines":["."],"id":326}],[{"start":{"row":77,"column":20},"end":{"row":77,"column":21},"action":"remove","lines":["."],"id":327}],[{"start":{"row":66,"column":16},"end":{"row":67,"column":0},"action":"remove","lines":["",""],"id":328}],[{"start":{"row":66,"column":16},"end":{"row":66,"column":20},"action":"remove","lines":["    "],"id":329}],[{"start":{"row":66,"column":16},"end":{"row":66,"column":20},"action":"remove","lines":["    "],"id":330}],[{"start":{"row":66,"column":16},"end":{"row":66,"column":20},"action":"remove","lines":["    "],"id":331}],[{"start":{"row":66,"column":12},"end":{"row":66,"column":16},"action":"remove","lines":["    "],"id":332}],[{"start":{"row":66,"column":8},"end":{"row":66,"column":12},"action":"remove","lines":["    "],"id":333}],[{"start":{"row":66,"column":4},"end":{"row":66,"column":8},"action":"remove","lines":["    "],"id":334}],[{"start":{"row":66,"column":0},"end":{"row":66,"column":4},"action":"remove","lines":["    "],"id":335}],[{"start":{"row":65,"column":16},"end":{"row":66,"column":0},"action":"remove","lines":["",""],"id":336}],[{"start":{"row":65,"column":12},"end":{"row":65,"column":16},"action":"remove","lines":["    "],"id":337}],[{"start":{"row":65,"column":8},"end":{"row":65,"column":12},"action":"remove","lines":["    "],"id":338}],[{"start":{"row":65,"column":4},"end":{"row":65,"column":8},"action":"remove","lines":["    "],"id":339}],[{"start":{"row":65,"column":0},"end":{"row":65,"column":4},"action":"remove","lines":["    "],"id":340}],[{"start":{"row":64,"column":16},"end":{"row":65,"column":0},"action":"remove","lines":["",""],"id":341}],[{"start":{"row":64,"column":12},"end":{"row":64,"column":16},"action":"remove","lines":["    "],"id":342}],[{"start":{"row":64,"column":8},"end":{"row":64,"column":12},"action":"remove","lines":["    "],"id":343}],[{"start":{"row":64,"column":4},"end":{"row":64,"column":8},"action":"remove","lines":["    "],"id":344}],[{"start":{"row":64,"column":0},"end":{"row":64,"column":4},"action":"remove","lines":["    "],"id":345}],[{"start":{"row":63,"column":11},"end":{"row":64,"column":0},"action":"remove","lines":["",""],"id":346}],[{"start":{"row":62,"column":27},"end":{"row":62,"column":37},"action":"remove","lines":["$tablename"],"id":347},{"start":{"row":62,"column":27},"end":{"row":62,"column":67},"action":"insert","lines":["$tablename,$Voornaam,$Voornaam,$Voornaam"]}],[{"start":{"row":62,"column":80},"end":{"row":62,"column":81},"action":"insert","lines":[","],"id":348}],[{"start":{"row":62,"column":81},"end":{"row":62,"column":82},"action":"insert","lines":[" "],"id":349}],[{"start":{"row":62,"column":82},"end":{"row":62,"column":83},"action":"insert","lines":["$"],"id":350}],[{"start":{"row":62,"column":83},"end":{"row":62,"column":84},"action":"insert","lines":["u"],"id":351}],[{"start":{"row":62,"column":82},"end":{"row":62,"column":84},"action":"remove","lines":["$u"],"id":352},{"start":{"row":62,"column":82},"end":{"row":62,"column":93},"action":"insert","lines":["$updateplek"]}],[{"start":{"row":75,"column":42},"end":{"row":75,"column":43},"action":"insert","lines":[" "],"id":353}],[{"start":{"row":56,"column":8},"end":{"row":60,"column":37},"action":"remove","lines":["function Insert_table($tablename,$Voornaam,$Voornaam,$Voornaam){","            $Toevoegen = \"INSERT INTO $tablename","            (Voornaam, Achternaam, Email) ","            VALUES ('$Voornaam', '$Achternaam' , $Email)\";","            $conn->query($Toevoegen);"],"id":354}],[{"start":{"row":44,"column":12},"end":{"row":48,"column":37},"action":"insert","lines":["function Insert_table($tablename,$Voornaam,$Voornaam,$Voornaam){","            $Toevoegen = \"INSERT INTO $tablename","            (Voornaam, Achternaam, Email) ","            VALUES ('$Voornaam', '$Achternaam' , $Email)\";","            $conn->query($Toevoegen);"],"id":355}],[{"start":{"row":49,"column":8},"end":{"row":50,"column":0},"action":"insert","lines":["",""],"id":356},{"start":{"row":50,"column":0},"end":{"row":50,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":45,"column":12},"end":{"row":45,"column":16},"action":"insert","lines":["    "],"id":357}],[{"start":{"row":46,"column":12},"end":{"row":46,"column":16},"action":"insert","lines":["    "],"id":359}],[{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"insert","lines":["    "],"id":360}],[{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"insert","lines":["    "],"id":361}],[{"start":{"row":46,"column":16},"end":{"row":46,"column":20},"action":"insert","lines":["    "],"id":362}],[{"start":{"row":45,"column":28},"end":{"row":45,"column":29},"action":"remove","lines":[" "],"id":363},{"start":{"row":45,"column":28},"end":{"row":46,"column":0},"action":"insert","lines":["",""]},{"start":{"row":46,"column":0},"end":{"row":46,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":46,"column":16},"end":{"row":46,"column":20},"action":"insert","lines":["    "],"id":364}],[{"start":{"row":23,"column":8},"end":{"row":24,"column":0},"action":"insert","lines":["$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);",""],"id":365}],[{"start":{"row":38,"column":11},"end":{"row":38,"column":29},"action":"remove","lines":["var_dump($Table) ;"],"id":366}],[{"start":{"row":49,"column":57},"end":{"row":49,"column":58},"action":"insert","lines":["'"],"id":367}],[{"start":{"row":49,"column":64},"end":{"row":49,"column":65},"action":"insert","lines":["'"],"id":368}],[{"start":{"row":44,"column":13},"end":{"row":45,"column":0},"action":"insert","lines":["",""],"id":369},{"start":{"row":45,"column":0},"end":{"row":45,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":45,"column":12},"end":{"row":46,"column":0},"action":"insert","lines":["",""],"id":370},{"start":{"row":46,"column":0},"end":{"row":46,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":40,"column":35},"end":{"row":40,"column":36},"action":"remove","lines":["="],"id":371}],[{"start":{"row":40,"column":35},"end":{"row":40,"column":36},"action":"insert","lines":["="],"id":372}],[{"start":{"row":54,"column":8},"end":{"row":63,"column":10},"action":"remove","lines":["function Read_table($tablename){","            $read = $conn->prepare(\"SELECT * FROM $tablename\");","            ","                 $conn->query($read);","                 ","                    foreach ($read->fetchAll(PDO::FETCH_ASSOC) as $row) ","                    {","            echo  '<tr>' . '<td>'. $row['ID']  . '</td><td>'. '<td>'. $row['Voornaam']  . '</td><td>' . $row['Achternaam'] . '</td><td>' . $row['Email'] . '</td>' . '</tr>';","            ","        }}"],"id":373}]]},"ace":{"folds":[],"scrolltop":660,"scrollleft":0,"selection":{"start":{"row":77,"column":8},"end":{"row":85,"column":9},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":46,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1474550092000,"hash":"d60caa9d7e9575fa2cc65b2ae21ed0538eb737f8"}