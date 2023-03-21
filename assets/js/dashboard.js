let dataJson;
let dataObj;

const listCaen = {
    '0111': 'Cultivarea cerealelor (exclusiv orez), plantelor leguminoase și a plantelor producătoare de semințe oleaginoase',
    '0112': 'Cultivarea orezului',
    '0113': 'Cultivarea legumelor și a pepenilor, a rădăcinoaselor și tuberculilor',
    '0114': 'Cultivarea trestiei de zahăr',
    '0115': 'Cultivarea tutunului',
    '0116': 'Cultivarea plantelor pentru fibre textile',
    '0119': 'Cultivarea altor plante din culturi nepermanente',
    '0121': 'Cultivarea strugurilor',
    '0122': 'Cultivarea fructelor tropicale si subtropicale',
    '0123': 'Cultivarea fructelor citrice',
    '0124': 'Cultivarea fructelor semintoase si samburoase',
    '0125': 'Cultivarea fructelor arbuștilor fructiferi, capsunilor, nuciferilor si a altor pomi fructiferi',
    '0126': 'Cultivarea fructelor oleaginoase',
    '0127': 'Cultivarea plantelor pentru prepararea băuturilor',
    '0128': 'Cultivarea condimentelor, plantelor aromatice, medicinale si a plantelor de uz farmaceutic',
    '0129': 'Cultivarea altor plante permanente',
    '0130': 'Cultivarea plantelor pentru inmultire',
    '0141': 'Creșterea bovinelor de lapte',
    '0142': 'Creșterea altor bovine',
    '0143': 'Creșterea cailor si a altor cabaline',
    '0144': 'Creșterea camilelor si a camelidelor',
    '0145': 'Creșterea ovinelor si caprinelor',
    '0146': 'Creșterea porcinelor',
    '0147': 'Creșterea pasarilor',
    '0149': 'Creșterea altor animale',
    '0150': 'Activități in ferme mixte (cultura vegetala combinata cu creșterea animalelor)',
    '0161': 'Activități auxiliare pentru producția vegetala',
    '0162': 'Activități auxiliare pentru creșterea animalelor',
    '0163': 'Activități după recoltare',
    '0164': 'Pregatirea semințelor',
    '0170': 'Vanatoare,capturarea cu capcane a vanatului si activități de servicii anexe vanatorii',
    '0210': 'Silvicultura si alte activități forestiere',
    '0220': 'Exploatarea forestiera',
    '0230': 'Colectarea produselor forestiere nelemnoase din flora spontana',
    '0240': 'Activități de servicii anexe silviculturii',
    '0311': 'Pescuitul maritim',
    '0312': 'Pescuitul in ape dulci',
    '0321': 'Acvacultura maritima',
    '0322': 'Acvacultura in ape dulci',
    '0510': 'Extracția carbunelui superior (PCS=&gt;23865 kJ/kg)',
    '0520': 'Extracția carbunelui inferior (PCS',
    '0610': 'Extracția petrolului brut',
    '0620': 'Extracția gazelor naturale',
    '0710': 'Extracția minereurilor feroase',
    '0721': 'Extracția minereurilor de uraniu si toriu',
    '0729': 'Extracția altor minereuri metalifere neferoase',
    '0811': 'Extracția pietrei ornamentale si a pietrei pentru construcții, extracția pietrei calcaroase, ghipsului, cretei si a ardeziei',
    '0812': 'Extracția pietrisului si nisipului; extracția argilei si caolinului',
    '0891': 'Extracția mineralelor pentru industria chimica si a ingrasamintelor naturale',
    '0892': 'Extracția turbei',
    '0893': 'Extracția sarii',
    '0899': 'Alte activități extractive n.c.a.',
    '0910': 'Activități de servicii anexe extracției petrolului brut si gazelor naturale',
    '0990': 'Activități de servicii anexe pentru extracția mineralelor',
    '1011': 'Prelucrarea si conservarea carnii',
    '1012': 'Prelucrarea si conservarea carnii de pasare',
    '1013': 'Fabricarea produselor din carne (inclusiv din carne de pasare)',
    '1020': 'Prelucrarea si conservarea pestelui, crustaceelor si molustelor',
    '1031': 'Prelucrarea si conservarea cartofilor',
    '1032': 'Fabricarea sucurilor de fructe si legume',
    '1039': 'Prelucrarea si conservarea fructelor si legumelor n.c.a.',
    '1041': 'Fabricarea uleiurilor si grasimilor',
    '1042': 'Fabricarea margarinei si a altor produse comestibile similare',
    '1051': 'Fabricarea produselor lactate si a branzeturilor',
    '1052': 'Fabricarea inghetatei',
    '1061': 'Fabricarea produselor de morarit',
    '1062': 'Fabricarea amidonului si a produselor din amidon',
    '1071': 'Fabricarea painii; fabricarea prajiturilor si a produselor proaspete de patiserie',
    '1072': 'Fabricarea biscuitilor si piscoturilor; fabricarea prajiturilor si a produselor conservate de patiserie',
    '1073': 'Fabricarea macaroanelor, taiteilor, cus-cus-ului si a altor produse fainoase similare',
    '1081': 'Fabricarea zaharului',
    '1082': 'Fabricarea produselor din cacao, a ciocolatei si a produselor zaharoase',
    '1083': 'Prelucrarea ceaiului si cafelei',
    '1084': 'Fabricarea condimentelor si ingredientelor',
    '1085': 'Fabricarea de mancaruri preparate',
    '1086': 'Fabricarea preparatelor alimentare omogenizate si alimentelor dietetice',
    '1089': 'Fabricarea altor produse alimentare n.c.a.',
    '1091': 'Fabricarea preparatelor pentru hrana animalelor de ferma',
    '1092': 'Fabricarea preparatelor pentru hrana animalelor de companie',
    '1101': 'Distilarea, rafinarea si mixarea băuturilor alcoolice',
    '1102': 'Fabricarea vinurilor din struguri',
    '1103': 'Fabricarea cidrului si a altor vinuri din fructe',
    '1104': 'Fabricarea altor bauturi nedistilate, obținute prin fermentare',
    '1105': 'Fabricarea berii',
    '1106': 'Fabricarea maltului',
    '1107': 'Producția de bauturi racoritoare nealcoolice; producția de ape minerale si alte ape imbuteliate',
    '1200': 'Fabricarea produselor din tutun',
    '1310': 'Pregatirea fibrelor si filarea fibrelor textile',
    '1320': 'Producția de tesaturi',
    '1330': 'Finisarea materialelor textile',
    '1391': 'Fabricarea de metraje prin tricotare sau crosetare',
    '1392': 'Fabricarea de articole confectionate din textile (cu excepția imbracamintei si lenjeriei de corp)',
    '1393': 'Fabricarea de covoare si mochete',
    '1394': 'Fabricarea de odgoane, franghii, sfori si plase',
    '1395': 'Fabricarea de textile netesute si articole din acestea, cu excepția confectiilor de imbracaminte',
    '1396': 'Fabricarea de articole tehnice si industriale din textile',
    '1399': 'Fabricarea altor articole textile n.c.a.',
    '1411': 'Fabricarea articolelor de imbracaminte din piele',
    '1412': 'Fabricarea de articole de imbracaminte pentru lucru',
    '1413': 'Fabricarea altor articole de imbracaminte (exclusiv lenjeria de corp)',
    '1414': 'Fabricarea de articole de lenjerie de corp',
    '1419': 'Fabricarea altor articole de imbracaminte si accesorii n.c.a.',
    '1420': 'Fabricarea articolelor din blana',
    '1431': 'Fabricarea prin tricotare sau crosetare a ciorapilor si articolelor de galanterie',
    '1439': 'Fabricarea prin tricotare sau crosetare a altor articole de imbracaminte',
    '1511': 'Tăbăcirea si finisarea pieilor; prepararea si vopsirea blanurilor',
    '1512': 'Fabricarea articolelor de voiaj si marochinarie si a articolelor de harnasament',
    '1520': 'Fabricarea incaltamintei',
    '1610': 'Tăierea si rindeluirea lemnului',
    '1621': 'Fabricarea de furnire si a panourilor de lemn',
    '1622': 'Fabricarea parchetului asamblat in panouri',
    '1623': 'Fabricarea altor elemente de dulgherie si tamplarie, pentru construcții',
    '1624': 'Fabricarea ambalajelor din lemn',
    '1629': 'Fabricarea altor produse din lemn; fabricarea articolelor din pluta, paie si din alte materiale vegetale impletite',
    '1711': 'Fabricarea celulozei',
    '1712': 'Fabricarea hârtiei si cartonului',
    '1721': 'Fabricarea hârtiei si cartonului ondulat si a ambalajelor din hartie si carton',
    '1722': 'Fabricarea produselor de uz gospodaresc si sanitar, din hartie sau carton',
    '1723': 'Fabricarea articolelor de papetarie',
    '1724': 'Fabricarea tapetului',
    '1729': 'Fabricarea altor articole din hârtie și carton n.c.a',
    '1811': 'Tiparirea ziarelor',
    '1812': 'Alte activități de tiparire n.c.a.',
    '1813': 'Servicii pregatitoare pentru pretiparire',
    '1814': 'Legatorie si servicii conexe',
    '1820': 'Reproducerea inregistrarilor',
    '1910': 'Fabricarea produselor de cocserie',
    '1920': 'Fabricarea produselor obținute din prelucrarea titeiului',
    '2011': 'Fabricarea gazelor industriale',
    '2012': 'Fabricarea colorantilor si a pigmentilor',
    '2013': 'Fabricarea altor produse chimice anorganice, de baza',
    '2014': 'Fabricarea altor produse chimice organice, de baza',
    '2015': 'Fabricarea ingrasamintelor si produselor azotoase',
    '2016': 'Fabricarea materialelor plastice in forme primare',
    '2017': 'Fabricarea cauciucului sintetic in forme primare',
    '2020': 'Fabricarea pesticidelor si a altor produse agrochimice',
    '2030': 'Fabricarea vopselelor, lacurilor, cernelii tipografice si masticurilor',
    '2041': 'Fabricarea sapunurilor, detergentilor si a produselor de intretinere',
    '2042': 'Fabricarea parfumurilor si a produselor cosmetice (de toaleta)',
    '2051': 'Fabricarea explozivilor',
    '2052': 'Fabricarea cleiurilor',
    '2053': 'Fabricarea uleiurilor esentiale',
    '2059': 'Fabricarea altor produse chimice n.c.a.',
    '2060': 'Fabricarea fibrelor sintetice si artificiale',
    '2110': 'Fabricarea produselor farmaceutice de baza',
    '2120': 'Fabricarea preparatelor farmaceutice',
    '2211': 'Fabricarea anvelopelor si a camerelor de aer; reșaparea si refacerea anvelopelor',
    '2219': 'Fabricarea altor produse din cauciuc',
    '2221': 'Fabricarea placilor, foliilor, tuburilor si profilelor din material plastic',
    '2222': 'Fabricarea articolelor de ambalaj din material plastic',
    '2223': 'Fabricarea articolelor din material plastic pentru construcții',
    '2229': 'Fabricarea altor produse din material plastic',
    '2311': 'Fabricarea sticlei plate',
    '2312': 'Prelucrarea si fasonarea sticlei plate',
    '2313': 'Fabricarea articolelor din sticla',
    '2314': 'Fabricarea fibrelor din sticla',
    '2319': 'Fabricarea de sticlarie tehnica',
    '2320': 'Fabricarea de produse refractare',
    '2331': 'Fabricarea placilor si dalelor din ceramica',
    '2332': 'Fabricarea cărămizilor, tiglelor si a altor produse pentru construcții, din argila arsa',
    '2341': 'Fabricarea articolelor ceramice pentru uz gospodaresc si ornamental',
    '2342': 'Fabricarea de obiecte sanitare din ceramica',
    '2343': 'Fabricarea izolatorilor si pieselor izolante din ceramica',
    '2344': 'Fabricarea altor produse tehnice din ceramica',
    '2349': 'Fabricarea altor produse ceramice n.c.a.',
    '2351': 'Fabricarea cimentului',
    '2352': 'Fabricarea varului si ipsosului',
    '2361': 'Fabricarea produselor din beton pentru construcții',
    '2362': 'Fabricarea produselor din ipsos pentru construcții',
    '2363': 'Fabricarea betonului',
    '2364': 'Fabricarea mortarului',
    '2365': 'Fabricarea produselor din azbociment',
    '2369': 'Fabricarea altor articole din beton, ciment si ipsos',
    '2370': 'Tăierea, fasonarea si finisarea pietrei',
    '2391': 'Fabricarea de produse abrazive',
    '2399': 'Fabricarea altor produse din minerale nemetalice, n.c.a.',
    '2410': 'Producția de metale feroase sub forme primare si de feroaliaje',
    '2420': 'Producția de tuburi, tevi, profile tubulare si accesorii pentru acestea, din otel',
    '2431': 'Tragere la rece a barelor',
    '2432': 'Laminare la rece a benzilor inguste',
    '2433': 'Producția de profile obținute la rece',
    '2434': 'Trefilarea firelor la rece',
    '2441': 'Producția metalelor pretioase',
    '2442': 'Metalurgia aluminiului',
    '2443': 'Producția plumbului, zincului si cositorului',
    '2444': 'Metalurgia cuprului',
    '2445': 'Producția altor metale neferoase',
    '2446': 'Prelucrarea combustibililor nucleari',
    '2451': 'Turnarea fontei',
    '2452': 'Turnarea otelului',
    '2453': 'Turnarea metalelor neferoase usoare',
    '2454': 'Turnarea altor metale neferoase',
    '2511': 'Fabricarea de construcții metalice si parti componente ale structurilor metalice',
    '2512': 'Fabricarea de usi si ferestre din metal',
    '2521': 'Producția de radiatoare si cazane pentru incalzire centrala',
    '2529': 'Producția de rezervoare, cisterne si containere metalice',
    '2530': 'Producția generatoarelor de aburi (cu excepția cazanelor pentru incalzire centrala)',
    '2540': 'Fabricarea armamentului si muniției',
    '2550': 'Fabricarea produselor metalice obținute prin deformare plastica; metalurgia pulberilor',
    '2561': 'Tratarea si acoperirea metalelor',
    '2562': 'Operatiuni de mecanica generala',
    '2571': 'Fabricarea produselor de taiat',
    '2572': 'Fabricarea articolelor de feronerie',
    '2573': 'Fabricarea uneltelor',
    '2591': 'Fabricarea de recipienti, containere si alte produse similare din otel',
    '2592': 'Fabricarea ambalajelor usoare din metal',
    '2593': 'Fabricarea articolelor din fire metalice; fabricarea de lanturi si arcuri',
    '2594': 'Fabricarea de suruburi, buloane si alte articole filetate; fabricarea de nituri si saibe',
    '2599': 'Fabricarea altor articole din metal n.c.a.',
    '2611': 'Fabricarea subansamblurilor electronice (module)',
    '2612': 'Fabricarea altor componente electronice',
    '2620': 'Fabricarea calculatoarelor si a echipamentelor periferice',
    '2630': 'Fabricarea echipamentelor de comunicații',
    '2640': 'Fabricarea produselor electronice de larg consum',
    '2651': 'Fabricarea de instrumente si dispozitive pentru masura, verificare, control, navigație',
    '2652': 'Producția de ceasuri',
    '2660': 'Fabricarea de echipamente pentru radiologie, electrodiagnostic si electroterapie',
    '2670': 'Fabricarea de instrumente optice si echipamente fotografice',
    '2680': 'Fabricarea suporților magnetici si optici destinați inregistrarilor',
    '2711': 'Fabricarea motoarelor, generatoarelor si transformatoarelor electrice',
    '2712': 'Fabricarea aparatelor de distributie si control a electricitatii',
    '2720': 'Fabricarea de acumulatori si baterii',
    '2731': 'Fabricarea de cabluri cu fibra optica',
    '2732': 'Fabricarea altor fire si cabluri electrice si electronice',
    '2733': 'Fabricarea dispozitivelor de conexiune pentru fire si cabluri electrice si electronice',
    '2740': 'Fabricarea de echipamente electrice de iluminat',
    '2751': 'Fabricarea de aparate electrocasnice',
    '2752': 'Fabricarea de echipamente casnice neelectrice',
    '2790': 'Fabricarea altor echipamente electrice',
    '2811': 'Fabricarea de motoare si turbine (cu excepția celor pentru avioane, autovehicule si motociclete)',
    '2812': 'Fabricarea de motoare hidraulice',
    '2813': 'Fabricarea de pompe si compresoare',
    '2814': 'Fabricarea de articole de robinetarie',
    '2815': 'Fabricarea lagarelor, angrenajelor, cutiilor de viteza si a elementelor mecanice de transmisie',
    '2821': 'Fabricarea cuptoarelor, furnalelor si arzatoarelor',
    '2822': 'Fabricarea echipamentelor de ridicat si manipulat',
    '2823': 'Fabricarea mașinilor si echipamentelor de birou (exclusiv fabricarea calculatoarelor si a echipamentelor periferice)',
    '2824': 'Fabricarea mașinilor-unelte portabile actionate electric',
    '2825': 'Fabricarea echipamentelor de ventilatie si frigorifice, exclusiv a echipamentelor de uz casnic',
    '2829': 'Fabricarea altor masini si utilaje de utilizare generala n.c.a.',
    '2830': 'Fabricarea mașinilor si utilajelor pentru agricultura si exploatari forestiere',
    '2841': 'Fabricarea utilajelor si a mașinilor-unelte pentru prelucrarea metalului',
    '2849': 'Fabricarea altor masini-unelte n.c.a.',
    '2891': 'Fabricarea utilajelor pentru metalurgie',
    '2892': 'Fabricarea utilajelor pentru extracție si construcții',
    '2893': 'Fabricarea utilajelor pentru prelucrarea produselor alimentare, băuturilor si tutunului',
    '2894': 'Fabricarea utilajelor pentru industria textila, a imbracamintei si a pielariei',
    '2895': 'Fabricarea utilajelor pentru industria hârtiei si cartonului',
    '2896': 'Fabricarea utilajelor pentru prelucrarea maselor plastice si a cauciucului',
    '2899': 'Fabricarea altor masini si utilaje specifice n.c.a.',
    '2910': 'Fabricarea autovehiculelor de transport rutier',
    '2920': 'Producția de caroserii pentru autovehicule; fabricarea de remorci si semiremorci',
    '2931': 'Fabricarea de echipamente electrice si electronice pentru autovehicule si pentru motoare de autovehicule',
    '2932': 'Fabricarea altor piese si accesorii pentru autovehicule si pentru motoare de autovehicule',
    '3011': 'Construcția de nave si structuri plutitoare',
    '3012': 'Construcția de ambarcatiuni sportive si de agrement',
    '3020': 'Fabricarea materialului rulant',
    '3030': 'Fabricarea de aeronave si nave spatiale',
    '3040': 'Fabricarea vehiculelor militare de lupta',
    '3091': 'Fabricarea de motociclete',
    '3092': 'Fabricarea de biciclete si de vehicule pentru invalizi',
    '3099': 'Fabricarea altor mijloace de transport n.c.a.',
    '3101': 'Fabricarea de mobila pentru birouri si magazine',
    '3102': 'Fabricarea de mobila pentru bucatarii',
    '3103': 'Fabricarea de saltele si somiere',
    '3109': 'Fabricarea de mobila n.c.a.',
    '3211': 'Baterea monedelor',
    '3212': 'Fabricarea bijuteriilor si articolelor similare din metale si pietre pretioase',
    '3213': 'Fabricarea imitatiilor de bijuterii si articole similare',
    '3220': 'Fabricarea instrumentelor muzicale',
    '3230': 'Fabricarea articolelor pentru sport',
    '3240': 'Fabricarea jocurilor si jucariilor',
    '3250': 'Fabricarea de dispozitive, aparate si instrumente medicale si stomatologice',
    '3291': 'Fabricarea maturilor si periilor',
    '3299': 'Fabricarea altor produse manufacturiere n.c.a.',
    '3311': 'Repararea articolelor fabricate din metal',
    '3312': 'Repararea mașinilor',
    '3313': 'Repararea echipamentelor electronice si optice',
    '3314': 'Repararea echipamentelor electrice',
    '3315': 'Repararea si intretinerea navelor si bărcilor',
    '3316': 'Repararea si intretinerea aeronavelor si navelor spatiale',
    '3317': 'Repararea si intretinerea altor echipamente de transport n.c.a.',
    '3319': 'Repararea altor echipamente',
    '3320': 'Instalarea mașinilor si echipamentelor industriale',
    '3511': 'Producția de energie electrica',
    '3512': 'Transportul energiei electrice',
    '3513': 'Distributia energiei electrice',
    '3514': 'Comercializarea energiei electrice',
    '3521': 'Producția gazelor',
    '3522': 'Distributia combustibililor gazosi, prin conducte',
    '3523': 'Comercializarea combustibililor gazosi, prin conducte',
    '3530': 'Furnizarea de abur si aer conditionat',
    '3600': 'Captarea, tratarea si distributia apei',
    '3700': 'Colectarea si epurarea apelor uzate',
    '3811': 'Colectarea deseurilor nepericuloase',
    '3812': 'Colectarea deseurilor periculoase',
    '3821': 'Tratarea si eliminarea deseurilor nepericuloase',
    '3822': 'Tratarea si eliminarea deseurilor periculoase',
    '3831': 'Demontarea (dezasamblarea) mașinilor si echipamentelor scoase din uz pentru recuperarea materialelor',
    '3832': 'Recuperarea materialelor reciclabile sortate',
    '3900': 'Activități si servicii de decontaminare',
    '4110': 'Dezvoltare (promovare) imobiliara',
    '4120': 'Lucrari de construcții a cladirilor rezidentiale si nerezidentiale',
    '4211': 'Lucrari de construcții a drumurilor si autostrazilor',
    '4212': 'Lucrari de construcții a cailor ferate de suprafata si subterane',
    '4213': 'Construcția de poduri si tuneluri',
    '4221': 'Lucrari de construcții a proiectelor utilitare pentru fluide',
    '4222': 'Lucrari de construcții a proiectelor utilitare pentru electricitate si telecomunicații',
    '4291': 'Construcții hidrotehnice',
    '4299': 'Lucrari de construcții a altor proiecte ingineresti n.c.a',
    '4311': 'Lucrari de demolare a construcțiilor',
    '4312': 'Lucrari de pregatire a terenului',
    '4313': 'Lucrari de foraj si sondaj pentru construcții',
    '4321': 'Lucrari de instalatii electrice',
    '4322': 'Lucrari de instalatii sanitare, de incalzire si de aer conditionat',
    '4329': 'Alte lucrari de instalatii pentru construcții',
    '4331': 'Lucrari de ipsoserie',
    '4332': 'Lucrari de tamplarie si dulgherie',
    '4333': 'Lucrari de pardosire si placare a peretilor',
    '4334': 'Lucrari de vopsitorie, zugraveli si montari de geamuri',
    '4339': 'Alte lucrari de finisare',
    '4391': 'Lucrari de invelitori, sarpante si terase la construcții',
    '4399': 'Alte lucrari speciale de construcții n.c.a.',
    '4511': 'Comerț cu autoturisme si autovehicule usoare (sub 3,5 tone)',
    '4519': 'Comerț cu alte autovehicule',
    '4520': 'Intretinerea si repararea autovehiculelor',
    '4531': 'Comerț cu ridicata de piese si accesorii pentru autovehicule',
    '4532': 'Comerț cu amănuntul de piese si accesorii pentru autovehicule',
    '4540': 'Comerț cu motociclete, piese si accesorii aferente; intretinerea si repararea motocicletelor',
    '4611': 'Intermedieri in comerțul cu materii prime agricole, animale vii, materii prime textile si cu semifabricate',
    '4612': 'Intermedieri in comerțul cu combustibili, minereuri, metale si produse chimice pentru industrie',
    '4613': 'Intermedieri in comerțul cu material lemnos si materiale de construcții',
    '4614': 'Intermedieri in comerțul cu masini, echipamente industriale, nave si avioane',
    '4615': 'Intermedieri in comerțul cu mobila, articole de menaj si de fierarie',
    '4616': 'Intermedieri in comerțul cu textile, confectii din blana, incaltaminte si articole din piele',
    '4617': 'Intermedieri in comerțul cu produse alimentare, bauturi si tutun',
    '4618': 'Intermedieri in comerțul specializat in vânzarea produselor cu caracter specific, n.c.a.',
    '4619': 'Intermedieri in comerțul cu produse diverse',
    '4621': 'Comerț cu ridicata al cerealelor, semințelor, furajelor si tutunului neprelucrat',
    '4622': 'Comerț cu ridicata al florilor si al plantelor',
    '4623': 'Comerț cu ridicata al animalelor vii',
    '4624': 'Comerț cu ridicata al blanurilor, pieilor brute si al pieilor prelucrate',
    '4631': 'Comerț cu ridicata al fructelor si legumelor',
    '4632': 'Comerț cu ridicata al carnii si produselor din carne',
    '4633': 'Comerț cu ridicata al produselor lactate, oualor, uleiurilor si grasimilor comestibile',
    '4634': 'Comerț cu ridicata al băuturilor',
    '4635': 'Comerț cu ridicata al produselor din tutun',
    '4636': 'Comerț cu ridicata al zaharului, ciocolatei si produselor zaharoase',
    '4637': 'Comerț cu ridicata cu cafea, ceai, cacao si condimente',
    '4638': 'Comerț cu ridicata specializat al altor alimente, inclusiv peste, crustacee si moluste',
    '4639': 'Comerț cu ridicata nespecializat de produse alimentare, bauturi si tutun',
    '4641': 'Comerț cu ridicata al produselor textile',
    '4642': 'Comerț cu ridicata al imbracamintei si incaltamintei',
    '4643': 'Comerț cu ridicata al aparatelor electrice de uz gospodaresc, al aparatelor de radio si televizoarelor',
    '4644': 'Comerț cu ridicata al produselor din ceramica, sticlarie, si produse de intretinere',
    '4645': 'Comerț cu ridicata al produselor cosmetice si de parfumerie',
    '4646': 'Comerț cu ridicata al produselor farmaceutice',
    '4647': 'Comerț cu ridicata al mobilei, covoarelor si a articolelor de iluminat',
    '4648': 'Comerț cu ridicata al ceasurilor si bijuteriilor',
    '4649': 'Comerț cu ridicata al altor bunuri de uz gospodaresc',
    '4651': 'Comerț cu ridicata al calculatoarelor, echipamentelor periferice si software- ului',
    '4652': 'Comerț cu ridicata de componente si echipamente electronice si de telecomunicații',
    '4661': 'Comerț cu ridicata al mașinilor agricole, echipamentelor si furniturilor',
    '4662': 'Comerț cu ridicata al mașinilor- unelte',
    '4663': 'Comerț cu ridicata al mașinilor pentru industria miniera si construcții',
    '4664': 'Comerț cu ridicata al mașinilor pentru industria textila si al mașinilor de cusut si de tricotat',
    '4665': 'Comerț cu ridicata al mobilei de birou',
    '4666': 'Comerț cu ridicata al altor masini si echipamente de birou',
    '4669': 'Comerț cu ridicata al altor masini si echipamente',
    '4671': 'Comerț cu ridicata al combustibililor solizi, lichizi si gazosi si al produselor derivate',
    '4672': 'Comerț cu ridicata al metalelor si minereurilor metalice',
    '4673': 'Comerț cu ridicata al materialului lemnos si al materialelor de construcții si echipamentelor sanitare',
    '4674': 'Comerț cu ridicata al echipamentelor si furniturilor de fierarie pentru instalatii sanitare si de incalzire',
    '4675': 'Comerț cu ridicata al produselor chimice',
    '4676': 'Comerț cu ridicata al altor produse intermediare',
    '4677': 'Comerț cu ridicata al deseurilor si resturilor',
    '4690': 'Comerț cu ridicata nespecializat',
    '4711': 'Comerț cu amănuntul in magazine nespecializate, cu vânzare predominanta de produse alimentare, bauturi si tutun',
    '4719': 'Comerț cu amănuntul in magazine nespecializate, cu vânzare predominanta de produse nealimentare',
    '4721': 'Comerț cu amănuntul al fructelor si legumelor proaspete, in magazine specializate',
    '4722': 'Comerț cu amănuntul al carnii si al produselor din carne, in magazine specializate',
    '4723': 'Comerț cu amănuntul al pestelui, crustaceelor si molustelor, in magazine specializate',
    '4724': 'Comerț cu amănuntul al painii, produselor de patiserie si produselor zaharoase, in magazine specializate',
    '4725': 'Comerț cu amănuntul al băuturilor, in magazine specializate',
    '4726': 'Comerț cu amănuntul al produselor din tutun, in magazine specializate',
    '4729': 'Comerț cu amănuntul al altor produse alimentare, in magazine specializate',
    '4730': 'Comerț cu amănuntul al carburantilor pentru autovehicule in magazine specializate',
    '4741': 'Comerț cu amănuntul al calculatoarelor, unitatilor periferice si software-ului in magazine specializate',
    '4742': 'Comerț cu amănuntul al echipamentului pentru telecomunicații in magazine specializate',
    '4743': 'Comerț cu amănuntul al echipamentului audio/video in magazine specializate',
    '4751': 'Comerț cu amănuntul al textilelor, in magazine specializate',
    '4752': 'Comerț cu amănuntul al articolelor de fierarie, al articolelor din sticla si a celor pentru vopsit, in magazine specializate',
    '4753': 'Comerț cu amănuntul al covoarelor, carpetelor, tapetelor si a altor acoperitoare de podea, in magazine specializate',
    '4754': 'Comerț cu amănuntul al articolelor si aparatelor electrocasnice, in magazine specializate',
    '4759': 'Comerț cu amănuntul al mobilei, al articolelor de iluminat si al articolelor de uz casnic n.c.a., in magazine specializate',
    '4761': 'Comerț cu amănuntul al cartilor, in magazine specializate',
    '4762': 'Comerț cu amănuntul al ziarelor si articolelor de papetarie, in magazine specializate',
    '4763': 'Comerț cu amănuntul al discurilor si benzilor magnetice cu sau fără inregistrari audio/video , in magazine specializate',
    '4764': 'Comerț cu amănuntul al echipamentelor sportive, in magazine specializate',
    '4765': 'Comerț cu amănuntul al jocurilor si jucariilor, in magazine specializate',
    '4771': 'Comerț cu amănuntul al imbracamintei, in magazine specializate',
    '4772': 'Comerț cu amănuntul al incaltamintei si articolelor din piele, in magazine specializate',
    '4773': 'Comerț cu amănuntul al produselor farmaceutice, in magazine specializate',
    '4774': 'Comerț cu amănuntul al articolelor medicale si ortopedice, in magazine specializate',
    '4775': 'Comerț cu amănuntul al produselor cosmetice si de parfumerie, in magazine specializate',
    '4776': 'Comerț cu amănuntul al florilor, plantelor si semințelor, comerț cu amănuntul al animalelor de companie si a hranei pentru acestea, in magazine specializate',
    '4777': 'Comerț cu amănuntul al ceasurilor si bijuteriilor, in magazine specializate',
    '4778': 'Comerț cu amănuntul al altor bunuri noi, in magazine specializate',
    '4779': 'Comerț cu amănuntul al bunurilor de ocazie vandute prin magazine',
    '4781': 'Comerț cu amănuntul al produselor alimentare, băuturilor si produselor din tutun efectuat prin standuri, chioșcuri si piete',
    '4782': 'Comerț cu amănuntul al textilelor, imbracamintei si incaltamintei efectuat prin standuri, chioșcuri si piete',
    '4789': 'Comerț cu amănuntul prin standuri, chioșcuri si piete al altor produse',
    '4791': 'Comerț cu amănuntul prin intermediul caselor de comenzi sau prin Internet',
    '4799': 'Comerț cu amănuntul efectuat in afara magazinelor, standurilor, chioșcurilor si piețelor',
    '4910': 'Transporturi interurbane de călători pe calea ferata',
    '4920': 'Transporturi de marfa pe calea ferata',
    '4931': 'Transporturi urbane, suburbane si metropolitane de călători',
    '4932': 'Transporturi cu taxiuri',
    '4939': 'Alte transporturi terestre de călători n.c.a',
    '4941': 'Transporturi rutiere de marfuri',
    '4942': 'Servicii de mutare',
    '4950': 'Transporturi prin conducte',
    '5010': 'Transporturi maritime si costiere de pasageri',
    '5020': 'Transporturi maritime si costiere de marfa',
    '5030': 'Transporturi de pasageri pe cai navigabile interioare',
    '5040': 'Transportul de marfa pe cai navigabile interioare',
    '5110': 'Transporturi aeriene de pasageri',
    '5121': 'Transporturi aeriene de marfa',
    '5122': 'Transporturi spatiale',
    '5210': 'Depozitări',
    '5221': 'Activități de servicii anexe pentru transporturi terestre',
    '5222': 'Activități de servicii anexe transportului pe apa',
    '5223': 'Activități de servicii anexe transporturilor aeriene',
    '5224': 'Manipulari',
    '5229': 'Alte activități anexe transporturilor',
    '5310': 'Activități poștale desfășurate sub obligativitatea serviciului universal',
    '5320': 'Alte activități poștale si de curier',
    '5510': 'Hoteluri si alte facilități de cazare similare',
    '5520': 'Facilități de cazare pentru vacante si perioade de scurta durata',
    '5530': 'Parcuri pentru rulote, campinguri si tabere',
    '5590': 'Alte servicii de cazare',
    '5610': 'Restaurante',
    '5621': 'Activități de alimentatie (catering) pentru evenimente',
    '5629': 'Alte servicii de alimentatie n.c.a.',
    '5630': 'Baruri si alte activități de servire a băuturilor',
    '5811': 'Activități de editare a cartilor',
    '5812': 'Activități de editare de ghiduri, compendii, liste de adrese si similare',
    '5813': 'Activități de editare a ziarelor',
    '5814': 'Activități de editare a revistelor si periodicelor',
    '5819': 'Alte activități de editare',
    '5821': 'Activități de editare a jocurilor de calculator',
    '5829': 'Activități de editare a altor produse software',
    '5911': 'Activități de productie cinematografica, video si de programe de televiziune',
    '5912': 'Activități de post-productie cinematografica, video si de programe de televiziune',
    '5913': 'Activități de distributie a filmelor cinematografice, video si a programelor de televiziune',
    '5914': 'Proiectia de filme cinematografice',
    '5920': 'Activități de realizare a inregistrarilor audio si activități de editare muzicala',
    '6010': 'Activități de difuzare a programelor de radio',
    '6020': 'Activități de difuzare a programelor de televiziune',
    '6110': 'Activități de telecomunicații prin retele cu cablu',
    '6120': 'Activități de telecomunicații prin retele fără cablu (exclusiv prin satelit)',
    '6130': 'Activități de telecomunicații prin satelit',
    '6190': 'Alte activități de telecomunicații',
    '6201': 'Activități de realizare a soft-ului la comanda (software orientat client)',
    '6202': 'Activități de consultanta in tehnologia informatiei',
    '6203': 'Activități de management (gestiune si exploatare) a mijloacelor de calcul',
    '6209': 'Alte activități de servicii privind tehnologia informatiei',
    '6311': 'Prelucrarea datelor, administrarea paginilor web si activități conexe',
    '6312': 'Activități ale portalurilor web',
    '6391': 'Activități ale agențiilor de stiri',
    '6399': 'Alte activități de servicii informationale n.c.a.',
    '6411': 'Activități ale bancii centrale (nationale)',
    '6419': 'Alte activități de intermedieri monetare',
    '6420': 'Activități ale holdingurilor',
    '6430': 'Fonduri mutuale si alte entități financiare similare',
    '6491': 'Leasing financiar',
    '6492': 'Alte activități de creditare',
    '6499': 'Alte intermedieri financiare n.c.a.',
    '6511': 'Activități de asigurări de viata',
    '6512': 'Alte activități de asigurări (exceptand asigurările de viata)',
    '6520': 'Activități de reasigurare',
    '6530': 'Activități ale fondurilor de pensii (cu excepția celor din sistemul public de asigurări sociale)',
    '6611': 'Administrarea piețelor financiare',
    '6612': 'Activități de intermediere a tranzactiilor financiare',
    '6619': 'Activități auxiliare intermedierilor financiare, exclusiv activități de asigurări si fonduri de pensii',
    '6621': 'Activități de evaluare a riscului de asigurare si a pagubelor',
    '6622': 'Activități ale agenților si broker-ilor de asigurări',
    '6629': 'Alte activități auxiliare de asigurări si fonduri de pensii',
    '6630': 'Activități de administrare a fondurilor',
    '6810': 'Cumpararea si vânzarea de bunuri imobiliare proprii',
    '6820': 'Inchirierea si subinchirierea bunurilor imobiliare proprii sau inchiriate',
    '6831': 'Agentii imobiliare',
    '6832': 'Administrarea imobilelor pe baza de comision sau contract',
    '6910': 'Activități juridice',
    '6920': 'Activități de contabilitate si audit financiar; consultanta in domeniul fiscal',
    '7010': 'Activități ale directiilor (centralelor), birourilor administrative centralizate',
    '7021': 'Activități de consultanta in domeniul relatiilor publice si al comunicarii',
    '7022': 'Activități de consultanta pentru afaceri si management',
    '7111': 'Activități de arhitectura',
    '7112': 'Activități de inginerie si consultanta tehnica legate de acestea',
    '7120': 'Activități de testari si analize tehnice',
    '7211': 'Cercetare - dezvoltare in biotehnologie',
    '7219': 'Cercetare- dezvoltare in alte stiinte naturale si inginerie',
    '7220': 'Cercetare- dezvoltare in stiinte sociale si umaniste',
    '7311': 'Activități ale agențiilor de publicitate',
    '7312': 'Servicii de reprezentare media',
    '7320': 'Activități de studiere a pieței si de sondare a opiniei publice',
    '7410': 'Activități de design specializat',
    '7420': 'Activități fotografice',
    '7430': 'Activități de traducere scrisă si orala (interpreti)',
    '7490': 'Alte activități profesionale, stiintifice si tehnice n.c.a.',
    '7500': 'Activități veterinare',
    '7711': 'Activități de inchiriere si leasing cu autoturisme si autovehicule rutiere usoare',
    '7712': 'Activități de inchiriere si leasing cu autovehicule rutiere grele',
    '7721': 'Activități de inchiriere si leasing cu bunuri recreationale si echipament sportiv',
    '7722': 'Inchirierea de casete video si discuri (CD-uri, DVD-uri)',
    '7729': 'Activități de inchiriere si leasing cu alte bunuri personale si gospodaresti n.c.a.',
    '7731': 'Activități de inchiriere si leasing cu masini si echipamente agricole',
    '7732': 'Activități de inchiriere si leasing cu masini si echipamente pentru construcții',
    '7733': 'Activități de inchiriere si leasing cu masini si echipamente de birou (inclusiv calculatoare)',
    '7734': 'Activități de inchiriere si leasing cu masini si echipamente de transport pe apa',
    '7735': 'Activități de inchiriere si leasing cu masini si echipamente de transport aerian',
    '7739': 'Activități de inchiriere si leasing cu alte masini, echipamente si bunuri tangibile n.c.a.',
    '7740': 'Leasing cu bunuri intangibile (exclusiv financiare)',
    '7810': 'Activități ale agențiilor de plasare a forței de munca',
    '7820': 'Activități de contractare, pe baze temporare, a personalului',
    '7830': 'Servicii de furnizare si management a forței de munca',
    '7911': 'Activități ale agențiilor turistice',
    '7912': 'Activități ale tur-operatorilor',
    '7990': 'Alte servicii de rezervare si asistenta turistica',
    '8010': 'Activități de protectie si garda',
    '8020': 'Activități de servicii privind sistemele de securizare',
    '8030': 'Activități de investigații',
    '8110': 'Activități de servicii suport combinate',
    '8121': 'Activități generale de curatenie a cladirilor',
    '8122': 'Activități specializate de curatenie',
    '8129': 'Alte activități de curatenie',
    '8130': 'Activități de intretinere peisagistica',
    '8211': 'Activități combinate de secretariat',
    '8219': 'Activități de fotocopiere, de pregatire a documentelor si alte activități specializate de secretariat',
    '8220': 'Activități ale centrelor de intermediere telefonica (call center)',
    '8230': 'Activități de organizare a expozitiilor, targurilor si congreselor',
    '8291': 'Activități ale agențiilor de colectare si a birourilor (oficiilor) de raportare a creditului',
    '8292': 'Activități de ambalare',
    '8299': 'Alte activități de servicii suport pentru intreprinderi n.c.a.',
    '8411': 'Servicii de administratie publica generala',
    '8412': 'Reglementarea activităților organismelor care presteaza servicii in domeniul ingrijirii sanatatii, invatamantului, culturii si al altor activități sociale, exclusiv protectia sociala',
    '8413': 'Reglementarea si eficientizarea activităților economice',
    '8421': 'Activități de servicii externe',
    '8422': 'Activități de aparare nationala',
    '8423': 'Activități de justitie',
    '8424': 'Activități de ordine publica si de protectie civila',
    '8425': 'Activități de lupta impotriva incendiilor si de prevenire a acestora',
    '8430': 'Activități de protectie sociala obligatorie',
    '8510': 'Invatamant preșcolar',
    '8520': 'Invatamant primar',
    '8531': 'Invatamant secundar general',
    '8532': 'Invatamant secundar, tehnic sau profesional',
    '8541': 'Invatamant superior non- universitar',
    '8542': 'Invatamant superior universitar',
    '8551': 'Invatamant in domeniul sportiv si recreational',
    '8552': 'Invatamant in domeniul cultural (limbi straine, muzica, teatru, dans, arte plastice, etc.)',
    '8553': 'Scoli de conducere (pilotaj)',
    '8559': 'Alte forme de invatamant n.c.a.',
    '8560': 'Activități de servicii suport pentru invatamant',
    '8610': 'Activități de asistenta spitaliceasca',
    '8621': 'Activități de asistenta medicala generala',
    '8622': 'Activități de asistenta medicala specializata',
    '8623': 'Activități de asistenta stomatologica',
    '8690': 'Alte activități referitoare la sanatatea umana',
    '8710': 'Activități ale centrelor de ingrijire medicala',
    '8720': 'Activități ale centrelor de recuperare psihica si de dezintoxicare, exclusiv spitale',
    '8730': 'Activități ale caminelor de bătrâni si ale caminelor pentru persoane aflate in incapacitate de a se ingriji singure',
    '8790': 'Alte activități de asistenta sociala, cu cazare n.c.a.',
    '8810': 'Activități de asistenta sociala, fără cazare, pentru bătrâni si pentru persoane aflate in incapacitate de a se ingriji singure',
    '8891': 'Activități de ingrijire zilnica pentru copii',
    '8899': 'Alte activități de asistenta sociala, fără cazare, n.c.a.',
    '9001': 'Activități de interpretare artistica (spectacole)',
    '9002': 'Activități suport pentru interpretare artistica (spectacole)',
    '9003': 'Activități de creație artistica',
    '9004': 'Activități de gestionare a salilor de spectacole',
    '9101': 'Activități ale bibliotecilor si arhivelor',
    '9102': 'Activități ale muzeelor',
    '9103': 'Gestionarea monumentelor, cladirilor istorice si a altor obiective de interes turistic',
    '9104': 'Activități ale gradinilor zoologice, botanice si ale rezervatiilor naturale',
    '9200': 'Activități de jocuri de noroc si pariuri',
    '9311': 'Activități ale bazelor sportive',
    '9312': 'Activități ale cluburilor sportive',
    '9313': 'Activități ale centrelor de fitness',
    '9319': 'Alte activități sportive',
    '9321': 'Bâlciuri si parcuri de distracții',
    '9329': 'Alte activități recreative si distractive n.c.a.',
    '9411': 'Activități ale organizatiilor economice si patronale',
    '9412': 'Activități ale organizatiilor profesionale',
    '9420': 'Activități ale sindicatelor salariatilor',
    '9491': 'Activități ale organizatiilor religioase',
    '9492': 'Activități ale organizatiilor politice',
    '9499': 'Activități ale altor organizatii n.c.a.',
    '9511': 'Repararea calculatoarelor si a echipamentelor periferice',
    '9512': 'Repararea echipamentelor de comunicații',
    '9521': 'Repararea aparatelor electronice de uz casnic',
    '9522': 'Repararea dispozitivelor de uz gospodaresc si a echipamentelor pentru casa si gradina',
    '9523': 'Repararea incaltamintei si a articolelor din piele',
    '9524': 'Repararea mobilei si a furniturilor casnice',
    '9525': 'Repararea ceasurilor si a bijuteriilor',
    '9529': 'Repararea articolelor de uz personal si gospodaresc n.c.a.',
    '9601': 'Spalarea si curatarea (uscata) articolelor textile si a produselor din blana',
    '9602': 'Coafura si alte activități de infrumusetare',
    '9603': 'Activități de pompe funebre si similare',
    '9604': 'Activități de intretinere corporala',
    '9609': 'Alte activități de servicii n.c.a.',
    '9700': 'Activități ale gospodariilor private in calitate de angajator de personal casnic',
    '9810': 'Activități ale gospodariilor private de producere de bunuri destinate consumului propriu',
    '9820': 'Activități ale gospodariilor private de producere de servicii pentru scopuri proprii',
    '9900': 'Activități ale organizatiilor si organismelor extrateritoriale'
};


function setMaxHeight(ids) {
    // initialize max height to 0
    let maxHeight = 0;

    // loop through each id and get its height
    ids.forEach((id) => {
        const element = document.getElementById(id);
        const height = element.clientHeight;

        // update max height if current element is taller
        if (height > maxHeight) {
            maxHeight = height;
        }
    });

    // set all elements' height to max height
    ids.forEach((id) => {
        const element = document.getElementById(id);
        element.style.height = maxHeight + "px";
    });
}

function startTimer() {
    // check if local storage has a previous time value
    let prevTime = localStorage.getItem("timeOnPage") || 0;

    // convert previous time to number and start timer
    let time = Number(prevTime);
    let timer = setInterval(() => {
        // increment time and format display
        time++;
        const hours = Math.floor(time / 3600);
        const minutes = Math.floor((time % 3600) / 60);
        const seconds = time % 60;
        const formattedTime = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        if (document.getElementById("timer")) {
            document.getElementById("timer").innerHTML = formattedTime;
        }

        // save current time to local storage
        localStorage.setItem("timeOnPage", time);
    }, 1000);
}



var request = {};
var pairs = location.search.substring(1).split('&');
for (var i = 0; i < pairs.length; i++) {
    var pair = pairs[i].split('=');
    request[pair[0]] = pair[1];
}


if (window.localStorage.dataObj) {
    dataObj = JSON.parse(window.localStorage.dataObj);

    // temp we add if check for login
    if (window.location.pathname !== "/area4u" && window.location.pathname !== "/area4u.php") {
        populatePage();
    }

} else if (request['cui']) {
    fetchAuth(request['cui']);
} else {

    // temp we add if check for login
    if (window.location.pathname !== "/area4u" && window.location.pathname !== "/area4u.php") {

        let codulCUI = prompt("Te rog sa introduci codul CUI:", "");
        if (codulCUI == null || codulCUI == "") {
            window.location.href = window.location.href;
        } else {
            window.location.href = window.location.href + `?cui=${codulCUI}`;
        }
        console.log(window.location.pathname);
    }
}


console.log(request['cui']);


// CUI 38911092
function fetchAuth(cuiValue) {

    renderLoadingModal('Datele se incarca...');

    // (A) URL & CREDENTIALS
    var url = `https://api.raport.ai/cui?cui=${cuiValue}`
    // (B) FETCH WITH HTTP AUTH

    fetch(url)

        // (C) SERVER RESPONSE
        .then((result) => {
            if (result.status != 200) { throw new Error("Bad Server Response"); }
            return result.text();
        })
        .then((response) => {
            //   document.getElementById("demoShow").innerHTML = response;
            dataJson = response;
            if (dataJson.DateGenerale = undefined && (window.location.pathname !== "/area4u" && window.location.pathname !== "/area4u.php")) {
                let codulCUI = prompt("Te rog sa introduci codul CUI:", "");
                if (codulCUI == null || codulCUI == "") {
                    window.location.href = window.location.href;
                } else {
                    window.location.href = window.location.href + `?cui=${codulCUI}`;
                }
                return;
            }
            window.localStorage.setItem('dataObj', dataJson);
            dataObj = JSON.parse(dataJson);
            console.log(dataObj);

            document.addEventListener("DOMContentLoaded", function () {
                console.log('loaded!');
            });

            // temp we add if check for login
            if (window.location.pathname !== "/area4u" && window.location.pathname !== "/area4u.php") {
                populatePage();
            }

            // all html rendering goes here
            // populatePage();

        })

        // (D) HANDLE ERRORS (OPTIONAL)
        .catch((error) => {
            console.log(error);
            localStorage.removeItem('dataObj');
            alert('CUI gresit')
            window.location.href = window.location.origin;
        });
}

function populatePage() {

    // show Monica forst modal
    showVideoMonica(localStorage.displayedModal1);

    try {
        removeLoadingModal();
    } catch (e) {
        console.log(e);
    }

    function findAdministrator(id) {
        const positionName = dataObj.asociatiAdministratoriCuLegaturilvl2.asociatiAdministratori.administratori[id].functie;
        if (positionName.includes('administrator')) {
            return dataObj.asociatiAdministratoriCuLegaturilvl2.asociatiAdministratori.administratori[id];
        } else {
            const idplus = id + 1; // increment id by 1 using the + operator instead of ++ 
            console.log(idplus);
            return findAdministrator(idplus); // add return statement to ensure the function returns a value
        }
    };


    try {

        const administrator = findAdministrator(0);

        const loggedName = document.getElementById('loggedName');
        loggedName.innerHTML = administrator.nume;
        const loggedPosition = document.getElementById('loggedPosition');
        loggedPosition.innerHTML = 'Administrator';

        const loggedNameProfile = document.getElementById('loggedNameProfile');
        if (loggedNameProfile) {

            loggedNameProfile.innerHTML = administrator.nume;
            const loggedPositionProfile = document.getElementById('loggedPositionProfile');
            loggedPositionProfile.innerHTML = 'Administrator';

            const adresa = document.getElementById('adresa');
            adresa.innerHTML = administrator.adresa;
            document.getElementById('numeBuletin').value = administrator.nume;

            const dataNastere = document.getElementById('dataNastere');
            dataNastere.innerHTML = administrator.dataNastere.slice(8, 10) + '.' + administrator.dataNastere.slice(5, 7) + '.' + administrator.dataNastere.slice(0, 4);
        }


        // debug
        console.log(dataObj)

        // temp we render here all DOOM elements
        const name = document.getElementById('name');
        d.element('dash').innerHTML = dataObj.DateGenerale.nume;
        d.element('nameAdmin').innerHTML = administrator.nume;
        if (name) {
            name.innerHTML = `${dataObj.DateGenerale.nume} - Administrator: ${administrator.nume}`;
            const chartSituatieFianciara = document.getElementById('grafic-situatie-financiara');
            chartSituatieFianciara.innerHTML = `Situatie finaciara ${dataObj.DateGenerale.nume}`;

            const blockCA = document.getElementById('cifra-de-afaceri');
            blockCA.innerHTML = parseFloat(dataObj.detalii_grafice.grafice_cifra_de_afaceri.data.pop().y).toLocaleString('en-US');;

            const blockProfit = document.getElementById('profit-actual');
            blockProfit.innerHTML = parseFloat(dataObj.detalii_grafice.grafice_profit_pierdere.data.pop().y).toLocaleString('en-US');

            const mapAnaf = document.getElementById('mapAnaf');
            const addresAnaf = encodeURIComponent(dataObj.DateGenerale.adresa);
            mapAnaf.innerHTML = '<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=' + addresAnaf + '&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>';

            const locuriMunca = document.getElementById('locuri-munca');
            locuriMunca.innerHTML = dataObj.Bilanturi[0].numar_mediu_angajati;

            const codCAEN = document.getElementById('cod-caen');
            codCAEN.innerHTML = dataObj.Bilanturi[0].cod_caen;
            const numeCAEN = document.getElementById('nume-caen');
            numeCAEN.innerHTML = listCaen[codCAEN.innerHTML];

            const activeTotale = document.getElementById('active-totale');
            const activeTotaleData = parseFloat(dataObj.Bilanturi[0].active_circulante) + parseFloat(dataObj.Bilanturi[0].active_imobilizate);
            activeTotale.innerHTML = activeTotaleData.toLocaleString('en-US')


            const nrStocuri = document.getElementById('nr-stocuri');
            nrStocuri.innerHTML = parseFloat(dataObj.Bilanturi[0].stocuri).toLocaleString('en-US');

            const casaConturi = document.getElementById('casa-conturi');
            casaConturi.innerHTML = parseFloat(dataObj.Bilanturi[0].casa_si_conturi_la_banci).toLocaleString('en-US');

            const capitalTotal = document.getElementById('capital-total');
            capitalTotal.innerHTML = parseFloat(dataObj.Bilanturi[0].capital_total).toLocaleString('en-US');

            const dateGenerale = document.getElementById('dateGenerale');
            dateGenerale.innerHTML = `
    <span>
    <h4>Detalii generale</h4><br>
    CUI: <h6>${dataObj.DateGenerale.cui}</h6><br>
    Nr. de înmatriculare: <h6>${dataObj.DateGenerale.cod_inmatriculare}</h6><br>
    Obiect activitate MFINANȚE: <h6>${dataObj.Bilanturi[0].cod_caen} - ${listCaen[codCAEN.innerHTML]}</h6> <br><br>

    <h4>Adresă</h4>
    Localitate: <h6>${dataObj.DateGenerale.localitate}</h6>
    Județ: <h6>${dataObj.DateGenerale.judet}</h6>
    Sediu social (RECOM/MFINANȚE): <h6>${dataObj.DateGenerale.adresa}</h6>
    Domiciliu fiscal (ANAF): <h6>${dataObj.DateGenerale.adresa_anaf}</h6>

    </span>
    `;

            const dateNow = document.getElementById('dateNow');
            const today = new Date();
            const day = today.getDate().toString().padStart(2, '0');
            const month = (today.getMonth() + 1).toString().padStart(2, '0');
            const year = today.getFullYear().toString();
            dateNow.innerHTML = `Log in ${day}/${month}/${year}`;


            // BLOCKS HEIGHT IN DASHBOARD

            // carduri 4 prima linie
            const ids0 = ["card1", "card2", "card3", "card4"];
            // blocurile de exemplu date generale
            const ids1 = ["cardExemplu", "cardDateGenerale"];
            // harta si asociatii
            const ids2 = ["cardAF", "cardAsoc"];
            // rentabilitatea si situatia fnanciara
            const ids3 = ["cardRA", "cardSF"];
            // carduri cu banci si prognoza meteo
            const ids4 = ['card-1', 'card-2', 'card-3']

            setMaxHeight(ids0);
            setMaxHeight(ids1);
            setMaxHeight(ids2);
            setMaxHeight(ids3);
            setMaxHeight(ids4);


            const chartAsociati = dataObj.asociatiAdministratoriCuLegaturilvl2.asociatiAdministratori.asociati;
            const listNameAsociati = [];
            const listCotaAsociati = [];

            for (const asoc in chartAsociati) {
                listNameAsociati.push(chartAsociati[asoc].nume);
                listCotaAsociati.push(parseFloat(chartAsociati[asoc].procentaj));

            };

            // pie chart
            var options8 = {
                chart: {
                    width: 500,
                    type: 'pie',
                },
                series: listCotaAsociati,
                labels: listNameAsociati,
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 400
                        },
                        legend: {
                            show: false
                        }
                    }
                }],
                colors: [CubaAdminConfig.primary, CubaAdminConfig.secondary, '#51bb25', '#a927f9', '#f8d62b']
            }

            var chart8 = new ApexCharts(
                document.querySelector("#piechart"),
                options8
            );

            chart8.render();

            // basic area chart
            const chartProdMunc = dataObj.Bilanturi;
            const listNrAngaj = [];
            const listAni = [];

            function roundOf(n, p) {
                const n1 = n * Math.pow(10, p + 1);
                const n2 = Math.floor(n1 / 10);
                if (n1 >= (n2 * 10 + 5)) {
                    return (n2 + 1) / Math.pow(10, p);
                }
                return n2 / Math.pow(10, p);
            }

            for (const prod in chartProdMunc) {
                roundOf(listNrAngaj.unshift(parseInt(chartProdMunc[prod].cifra_de_afaceri_neta) / parseInt(chartProdMunc[prod].numar_mediu_angajati))).toFixed(2);
                roundOf(listAni.unshift(chartProdMunc[prod].an)).toFixed(2);;
            };

            var options = {
                chart: {
                    height: 350,
                    type: 'area',
                    zoom: {
                        enabled: false
                    },
                    toolbar: {
                        show: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'straight'
                },
                series: [{
                    name: "STOCK ABC",
                    data: listNrAngaj
                }],
                labels: listAni,
                xaxis: {
                    type: 'yeartime',
                },
                yaxis: {
                    opposite: true
                },
                legend: {
                    horizontalAlign: 'left'
                },
                colors: [CubaAdminConfig.primary]

            }

            var chart = new ApexCharts(
                document.querySelector("#basic-apex"),
                options
            );

            chart.render();


            // situatiile financiare
            constSitFin = [];
            const chartDataCA = dataObj.detalii_grafice.grafice_cifra_de_afaceri.data;
            const chartDataPP = dataObj.detalii_grafice.grafice_profit_pierdere.data;
            const chartDataDa = dataObj.detalii_grafice.grafice_datorii.data;

            // for (const pP in chartDataPP) {



            // };

            const minLen = Math.min(chartDataCA.length, chartDataPP.length, chartDataDa.length);
            console.log(`lungimea minima e de: ${minLen}`);

            for (i = 0; i < minLen; i++) {
                console.log(i);
                const temp = {
                    x: `${chartDataCA[i].an}`,
                    y: parseInt(chartDataCA[i].y),
                    z: parseInt(chartDataPP[i].y),
                    a: parseInt(chartDataDa[i].y)
                };

                constSitFin.push(temp);
            }


            "use strict";
            var morris_chart = {
                init: function () {
                    Morris.Bar({
                        element: "morris-simple-bar-chart",
                        data: constSitFin,
                        xkey: "x",
                        ykeys: ["y", "z", "a"],
                        barColors: [CubaAdminConfig.primary, "#51bb25", CubaAdminConfig.secondary],
                        labels: ["Cifra de afaceri", "Profit", "Datorii"]
                    })
                }
            };
            (function ($) {
                "use strict";
                morris_chart.init()
            })(jQuery);
        }

    } catch (error) {
        console.log(error);
    }






};

function showVideoMonica(displayedModal1) {
    if (!displayedModal1) {
        localStorage.setItem("displayedModal1", true);
        swal({
            content: {
                element: "div",
                attributes: {
                    innerHTML: `
                <div id="monicaModal1" class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myLargeModalLabel">Monica</h4>
                  <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                </div>
                <div class="modal-body dark-modal">
                  <video src="https://cdn.discordapp.com/attachments/1051098546281132052/1087391236182261812/Clip_video_WhatsApp_2023-03-20_la_16.55.53.mp4" controls="" style="width: 100%;"></video>
                </div>
              </div>
                `,
                },
            },
            customClass: {
                width: "90%",
            },
            buttons: {
                confirm: "Am inteles",
            }
        })
            .then((value) => {
                const monica1 = document.getElementById("monicaModal1");
                monica1.parentNode.removeChild(monica1);
                console.log(monica1);
            });
    }
}
