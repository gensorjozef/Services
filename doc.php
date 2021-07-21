<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <title>Zadanie 6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
<div class="card bg-light ">
    <article class="card-body mx-auto" style="max-width: 1000px">
        <h4>Zobrazenie sviatkov na Slovensku, Česku</h4>
        <p><strong>Endpoint:</strong></p>
        <p>https://wt53.fei.stuba.sk/zad6/getHoliday.php?</p>
        <p><strong>Vstup:</strong></p>
        <p>type, možnosti: "sk_holiday", "cz_holiday"</p>
        <p><strong>Použitie:</strong></p>
        <p>https://wt53.fei.stuba.sk/zad6/getHoliday.php?type=sk_holiday</p>
        <p><strong>Odpoveď:</strong></p>
        <p><code>
                [
                {
                "id": "1",
                "day_id": "1",
                "country_id": "4",
                "type": "sk_holiday",
                "value": "Deň vzniku Slovenskej republiky",
                "day": "1",
                "month": "1"
                },
                {
                "id": "6",
                "day_id": "6",
                "country_id": "4",
                "type": "sk_holiday",
                "value": "Zjavenie Pána (Traja králi a vianočný sviatok pravoslávnych kresťanov)",
                "day": "6",
                "month": "1"
                },
                {
                "id": "122",
                "day_id": "122",
                "country_id": "4",
                "type": "sk_holiday",
                "value": "Sviatok práce",
                "day": "1",
                "month": "5"
                },
                {
                "id": "129",
                "day_id": "129",
                "country_id": "4",
                "type": "sk_holiday",
                "value": "Deň víťazstva nad fašizmom",
                "day": "8",
                "month": "5"
                },
                {
                "id": "187",
                "day_id": "187",
                "country_id": "4",
                "type": "sk_holiday",
                "value": "Sviatok svätého Cyrila a Metoda",
                "day": "5",
                "month": "7"
                },
                {
                "id": "242",
                "day_id": "242",
                "country_id": "4",
                "type": "sk_holiday",
                "value": "Výročie Slovenského národného povstania",
                "day": "29",
                "month": "8"
                },
                {
                "id": "245",
                "day_id": "245",
                "country_id": "4",
                "type": "sk_holiday",
                "value": "Deň ústavy Slovenskej republiky",
                "day": "1",
                "month": "9"
                },
                {
                "id": "259",
                "day_id": "259",
                "country_id": "4",
                "type": "sk_holiday",
                "value": "Sedembolestná Panna Mária",
                "day": "15",
                "month": "9"
                },
                {
                "id": "306",
                "day_id": "306",
                "country_id": "4",
                "type": "sk_holiday",
                "value": "Sviatok všetkých svätých",
                "day": "1",
                "month": "11"
                },
                {
                "id": "322",
                "day_id": "322",
                "country_id": "4",
                "type": "sk_holiday",
                "value": "Deň boja za slobodu a demokraciu",
                "day": "17",
                "month": "11"
                },
                {
                "id": "359",
                "day_id": "359",
                "country_id": "4",
                "type": "sk_holiday",
                "value": "Štedrý deň",
                "day": "24",
                "month": "12"
                },
                {
                "id": "360",
                "day_id": "360",
                "country_id": "4",
                "type": "sk_holiday",
                "value": "Prvý sviatok vianočný",
                "day": "25",
                "month": "12"
                },
                {
                "id": "361",
                "day_id": "361",
                "country_id": "4",
                "type": "sk_holiday",
                "value": "Druhý sviatok vianočný",
                "day": "26",
                "month": "12"
                }
                ]
            </code></p>
        <hr>
        <h4>Zobrazenie pamätných dní na Slovensku</h4>
        <p><strong>Endpoint:</strong></p>
        <p>https://wt53.fei.stuba.sk/zad6/getHoliday.php?</p>
        <p><strong>Vstup:</strong></p>
        <p>type, možnosti: "sk_pamat"</p>
        <p><strong>Použitie:</strong></p>
        <p>https://wt53.fei.stuba.sk/zad6/getHoliday.php?type=sk_pamat</p>
        <p><strong>Odpoveď:</strong></p>
        <p><code>
                [
                {
                "id": "85",
                "day_id": "85",
                "country_id": "4",
                "type": "sk_pamat",
                "value": "Deň zápasu za ľudské práva",
                "day": "25",
                "month": "3"
                },
                {
                "id": "104",
                "day_id": "104",
                "country_id": "4",
                "type": "sk_pamat",
                "value": "Deň nespravodlivo stíhaných",
                "day": "13",
                "month": "4"
                },
                {
                "id": "125",
                "day_id": "125",
                "country_id": "4",
                "type": "sk_pamat",
                "value": "Výročie úmrtia M.R. Štefánika",
                "day": "4",
                "month": "5"
                },
                {
                "id": "159",
                "day_id": "159",
                "country_id": "4",
                "type": "sk_pamat",
                "value": "Výročie Memoranda národa slovenského",
                "day": "7",
                "month": "6"
                },
                {
                "id": "187",
                "day_id": "187",
                "country_id": "4",
                "type": "sk_pamat",
                "value": "Deň zahraničných Slovákov",
                "day": "5",
                "month": "7"
                },
                {
                "id": "199",
                "day_id": "199",
                "country_id": "4",
                "type": "sk_pamat",
                "value": "Výročie Deklarácie o zvrchovanosti Slovenskej republiky",
                "day": "17",
                "month": "7"
                },
                {
                "id": "217",
                "day_id": "217",
                "country_id": "4",
                "type": "sk_pamat",
                "value": "Deň Matice slovenskej",
                "day": "4",
                "month": "8"
                },
                {
                "id": "263",
                "day_id": "263",
                "country_id": "4",
                "type": "sk_pamat",
                "value": "Deň prvého verejného vystúpenia Slovenskej národnej rady",
                "day": "19",
                "month": "9"
                },
                {
                "id": "280",
                "day_id": "280",
                "country_id": "4",
                "type": "sk_pamat",
                "value": "Deň obetí Dukly",
                "day": "6",
                "month": "10"
                },
                {
                "id": "301",
                "day_id": "301",
                "country_id": "4",
                "type": "sk_pamat",
                "value": "Deň černovskej tragédie",
                "day": "27",
                "month": "10"
                },
                {
                "id": "303",
                "day_id": "303",
                "country_id": "4",
                "type": "sk_pamat",
                "value": "Deň narodenia Ľudovíta Štúra",
                "day": "29",
                "month": "10"
                },
                {
                "id": "304",
                "day_id": "304",
                "country_id": "4",
                "type": "sk_pamat",
                "value": "Výročie Deklarácie slovenského národa",
                "day": "30",
                "month": "10"
                },
                {
                "id": "305",
                "day_id": "305",
                "country_id": "4",
                "type": "sk_pamat",
                "value": "Deň reformácie",
                "day": "31",
                "month": "10"
                },
                {
                "id": "365",
                "day_id": "365",
                "country_id": "4",
                "type": "sk_pamat",
                "value": "Deň vyhlásenia Slovenska za samostatnú cirkevnú provinciu",
                "day": "30",
                "month": "12"
                }
                ]
            </code></p>
        <hr>
        <h4>Zobrazenie menín pre dátum</h4>
        <p><strong>Endpoint:</strong></p>
        <p>https://wt53.fei.stuba.sk/zad6/getDateFromName.php?</p>
        <p><strong>Vstup:</strong></p>
        <p>day,month</p>
        <p><strong>Použitie:</strong></p>
        <p>https://wt53.fei.stuba.sk/zad6/getDateFromName.php?day=19&month=03</p>
        <p><strong>Odpoveď:</strong></p>
        <p><code>
                [
                {
                "id": "1",
                "day_id": "79",
                "country_id": "1",
                "type": "name",
                "value": "Bánk",
                "title": "Maďarsko",
                "code": "HU"
                },
                {
                "id": "1",
                "day_id": "79",
                "country_id": "1",
                "type": "name",
                "value": "József",
                "title": "Maďarsko",
                "code": "HU"
                },
                {
                "id": "2",
                "day_id": "79",
                "country_id": "2",
                "type": "name",
                "value": "Bogdana",
                "title": "Poľsko",
                "code": "PL"
                },
                {
                "id": "2",
                "day_id": "79",
                "country_id": "2",
                "type": "name",
                "value": "Jozefa",
                "title": "Poľsko",
                "code": "PL"
                },
                {
                "id": "3",
                "day_id": "79",
                "country_id": "3",
                "type": "name",
                "value": "Josev",
                "title": "Rakúsko",
                "code": "AT"
                },
                {
                "id": "3",
                "day_id": "79",
                "country_id": "3",
                "type": "name",
                "value": "Nährv. Jesu",
                "title": "Rakúsko",
                "code": "AT"
                },
                {
                "id": "4",
                "day_id": "79",
                "country_id": "4",
                "type": "name",
                "value": "Jozef",
                "title": "Slovensko",
                "code": "SK"
                },
                {
                "id": "4",
                "day_id": "79",
                "country_id": "4",
                "type": "name",
                "value": "Sibyla",
                "title": "Slovensko",
                "code": "SK"
                },
                {
                "id": "5",
                "day_id": "79",
                "country_id": "5",
                "type": "name",
                "value": "Josef",
                "title": "Česko",
                "code": "CZ"
                }
                ]
            </code></p>
        <hr>
        <h4>Zobrazenie dátumov pre meno a krajinu</h4>
        <p><strong>Endpoint:</strong></p>
        <p>https://wt53.fei.stuba.sk/zad6/getDateFromName.php?</p>
        <p><strong>Vstup:</strong></p>
        <p>country_id,value</p>
        <p><strong>Použitie:</strong></p>
        <p>https://wt53.fei.stuba.sk/zad6/getNameFromDate.php?country_id=4&value=jozef</p>
        <p><strong>Odpoveď:</strong></p>
        <p><code>
                [
                {
                "id": "79",
                "day_id": "79",
                "country_id": "4",
                "type": "name",
                "value": "Jozef",
                "day": "19",
                "month": "3"
                },
                {
                "id": "219",
                "day_id": "219",
                "country_id": "4",
                "type": "name",
                "value": "Jozefína",
                "day": "6",
                "month": "8"
                },
                {
                "id": "219",
                "day_id": "219",
                "country_id": "4",
                "type": "name",
                "value": "Jozefa",
                "day": "6",
                "month": "8"
                }
                ]
            </code></p>
        <hr>
        <h4>Pridanie mena do kalendára</h4>
        <p><strong>Endpoint:</strong></p>
        <p>https://wt53.fei.stuba.sk/zad6/addName.php?</p>
        <p><strong>Vstup:</strong></p>
        <p>day,month,value</p>
        <p><strong>Použitie:</strong></p>
        <p>https://wt53.fei.stuba.sk/zad6/addName.php?day=01&month=01&value=Arnošt</p>
        <p><strong>Odpoveď:</strong></p>
        <p><code>
                {
                "status": "success"
                }
            </code></p>
    </article>
</div>
</body>
</html>
