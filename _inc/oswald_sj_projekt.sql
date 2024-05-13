-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: So 11.Máj 2024, 16:01
-- Verzia serveru: 10.4.32-MariaDB
-- Verzia PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `oswald_sj_projekt`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `message` text NOT NULL,
  `acceptance` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `acceptance`) VALUES
(4, 'test1', 'test@test.test', '  test     ', 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `godot_accordion`
--

CREATE TABLE `godot_accordion` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `godot_accordion`
--

INSERT INTO `godot_accordion` (`id`, `title`, `text`) VALUES
(1, 'Obdobie Closed-Source (2001–2014)', 'Juan \'reduz\' Linietsky a Ariel \'punto\' Manzur spoluzaložili spoločnosť Codenix v roku 1999, konzultačnú spoločnosť pre vývoj hier. Už v roku 2001 začali pracovať na engine-i s kódovým názvom \"Larvotor\", ktorý bol licencovaný tretím stranám v Argentíne. Počas nasledujúcich desiatich rokov bol engine premenovaný na \"Legacy\", \"NG3D\", \"Larvita\" a nakoniec na \"Godot\". Názov \"Godot\" bol zvolený kvôli jeho vzťahu k divadelnej hre Samuela Becketta Čakanie na Godota, pretože reprezentuje nekonečné túžby po pridávaní nových funkcií do enginu, ktoré by ho priblížili k vyčerpávajúcemu produktu, ale nikdy sa to nedosiahne. Linietsky a Manzur sa pridali k spoločnosti OKAM a spolupracovali so viacerými štúdiami v období uzavretého zdrojového kódu vrátane Square Enix. Linietsky naznačil, že ich práca bola vtedy ovplyvnená politickou a ekonomickou nestabilitou v Argentíne.'),
(2, 'Éra voľného a Open-Source softvéru (2014 - súčasnosť)', 'K roku 2014 plánoval Linietsky odísť z Argentíny a uvoľnil zdrojový kód pre Godot verejnosti na platforme GitHub pod licenciou MIT. Godot sa pripojil k organizácii Software Freedom Conservancy (SFC) 4. novembra 2015. 22. júna 2016 získal Godot ocenenie \"Mission Partners\" vo výške 20 000 dolárov od Mozilla Open Source Support (MOSS), ktoré bolo určené na pridanie podpory pre WebSockets, WebAssembly a WebGL 2.0.\r\n\r\n                Aktualizácia 3.0 pre Godot zahŕňala riešenie dlhého zoznamu požadovaných funkcií, ktoré vyžadovali výraznú prepracovanie enginu, čo bolo v období uzavretého zdrojového kódu nemožné z dôvodu komerčných obmedzení. S podporou Miguela de Icazu získal Godot v roku 2017 dar vo výške 24 000 dolárov od Microsoftu na implementáciu jazyka C# ako skriptovacieho jazyka v Godote. Bola spustená platforma Patreon, vďaka ktorej mohli Linietsky a Verschelde pracovať na projekte na plný úväzok. Verzia 3.0 bola uvedená na trh v roku 2018. Aktualizácia 3.1 pridala renderovač OpenGL ES 2.0 zameraný na mobilné zariadenia, pretože v tom čase bola podpora ES 3.0 zo strany výrobcov obmedzená.\r\n\r\n                V roku 2019 boli založené dva tímy, pričom tím Linietského sa zameral na vetvu Vulkan (následne vydanú ako 4.0), a tím Verschelde pokračoval v aktualizáciách pre vetvu 3.x. Linietsky naznačil, že problémom bolo, že vetva 3.x bola vytvorená so staršími architektonickými princípmi, ako sú jednojadrové procesory. Preto bola úmyslom prebudovať jadrové architektúry pre 4.0 a zohľadniť moderné princípy.\r\n\r\n                V roku 2020 získal Godot ocenenie vo výške 250 000 dolárov od spoločnosti Epic Games na vylepšenie grafického renderovania a jazyka GDScript, ktorý bol použitý na financovanie Linietského a Georgea Marquesa na dva roky a uvoľnenie finančných prostriedkov z donácií na iné účely. Godot tiež získal granty od Reality Labs spoločnosti Meta Platforms v rokoch 2020 a 2021. Vetva 4.0 bola vydávaná vo forme alfy na začiatku roku 2022 a bola v priebehu roka doladená. V auguste Linietsky a niekoľko ďalších členov tímu Godot založili spoločnosť W4 Games, ktorá ponúka komerčné služby založené na enginu, vrátane portov na konzoly, ktoré nemôžu byť zahrnuté do jeho open-source kódového základu. V novembri Godot oznámil plány prechodu zo SFC na vlastnú novovytvorenú Godot Foundation.\r\n\r\n                Plné vydanie aktualizácie 4.0 s podporou Vulkanu sa uskutočnilo v roku 2023, ako aj príchod Godot enginu na platformu Epic Games Store. Verzia na platforme Epic je identická s ostatnými z hľadiska obsahu a licencie, pričom platforma slúži len ako distribučný kanál a na aktualizácie. V septembri spoločnosť Unity Technologies oznámila zásadné zmeny v licencovaní pre Unity engine vrátane pridania \"poplatkov za spustenie\", ktoré by účtovali používateľov pri inštalácii hier v Unity. V dôsledku toho darovala spoločnosť Re-Logic 100 000 dolárov Godotu a ďalej oznámila, že bude prispievať 1 000 dolárov mesačne, aby podporila open-source alternatívu k Unity.');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `godot_carousel`
--

CREATE TABLE `godot_carousel` (
  `id` int(11) NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `godot_carousel`
--

INSERT INTO `godot_carousel` (`id`, `picture`) VALUES
(1, '../assets/img/godot1.png'),
(2, '../assets/img/godot2.webp'),
(3, '../assets/img/godot3.png');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `godot_container`
--

CREATE TABLE `godot_container` (
  `id` int(11) NOT NULL,
  `pros` text NOT NULL,
  `cons` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `godot_container`
--

INSERT INTO `godot_container` (`id`, `pros`, `cons`) VALUES
(1, 'Open-source: Prístup k celému zdrojovému kódu umožňuje prispôsobenie a vývoj podľa komunity.', 'Obmedzené zdroje: V porovnaní s niektorými inými enginmi môže mať Godot menší obchod s prostriedkami a menej tretích strán ponúkajúcich zdroje.'),
(2, 'Multiplatformovosť: Podporuje viaceré platformy ako Windows, macOS, Linux, Android, iOS a web, čo zjednodušuje distribúciu.', 'Krivka učenia: Aj keď je priateľský pre začiatočníkov, ovládnutie pokročilejších funkcií môže vyžadovať čas a úsilie.'),
(3, 'Jednoduchosť použitia: Intuitívne rozhranie a skriptovací jazyk (GDScript) zjednodušujú vývoj hier pre začiatočníkov.', 'Adoptácia na trhu: Nie je tak široko prijímaný ako niektoré iné enginy, čo môže viesť k menšiemu množstvu zdieľaných zdrojov a podpory komunity.'),
(4, 'Engine je ľahký, čo vedie k rýchlejšiemu načítaniu a lepšej výkonnosti, najmä na zariadeniach s nižšími špecifikáciami.', 'Iba GDScript: Hoci je výkonný, GDScript môže obmedziť vývojárov, ktorí uprednostňujú prácu s inými programovacími jazykmi.'),
(5, 'Aktívna komunita: Oddaná a rastúca komunita poskytuje podporu, návody a zdroje pre užívateľov.', 'Výkon pri veľkých projektoch: Manipulácia s veľkými projekty môže spôsobiť výkonnostné problémy v porovnaní s niektorými inými enginmi.'),
(6, 'Vizuálne programovanie: Ponúka vizuálny systém programovania okrem kódovania, čo umožňuje neprogramátorom vytvárať hry.', 'Menej zabudovaných nástrojov: Môže chýbať niektoré špecializované zabudované nástroje dostupné v iných enginoch pre špecifické úlohy.'),
(7, 'Podpora 2D a 3D: Schopný pracovať s 2D aj 3D vývojom hier s integrovanými nástrojmi pre obidva typy hier.', 'Optimalizácia pre mobilné zariadenia: Aj keď sa zlepšuje, optimalizácia pre mobilné zariadenia môže potrebovať ďalšie vylepšenia pre určité typy zariadení.'),
(8, 'Pravidelné aktualizácie: Neustále vylepšenia a aktualizácie prinášajú nové funkcie a zlepšenia do enginu.', 'Pipeline pre zdroje: Pracovný postup pre import a manipuláciu so zdrojmi môže byť menej prepracovaný v porovnaní s inými enginmi.'),
(9, 'Fyzikálny engine: Integrovaný fyzikálny engine zjednodušuje implementáciu realistických fyzikálnych efektov.', 'Veľkosť komunity: Aj keď rastie, komunita môže byť menšia v porovnaní s etablovanými enginmi, čo ovplyvňuje dostupnú podporu.'),
(10, 'Bez licenčných poplatkov: Žiadne licenčné poplatky, čo umožňuje vývojárom zarábať plné zisky z ich hier.', '----');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `godot_pricing`
--

CREATE TABLE `godot_pricing` (
  `id` int(11) NOT NULL,
  `edition` text NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `godot_pricing`
--

INSERT INTO `godot_pricing` (`id`, `edition`, `price`) VALUES
(1, 'Licencia', 'Zdarma');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `unity_accordion`
--

CREATE TABLE `unity_accordion` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `unity_accordion`
--

INSERT INTO `unity_accordion` (`id`, `title`, `text`) VALUES
(1, 'Unity 2.0 (2007)', 'Unity 2.0 bolo uvedené na trh v roku 2007 s približne 50 novými funkciami. verzia obsahovala optimalizovaný terénny engine pre detailné 3D prostredia, dynamické tiene v reálnom čase, smerové svetlá a reflektory, prehrávanie videa a ďalšie funkcie. verzia tiež pridala funkcie, vďaka ktorým mohli vývojári ľahšie spolupracovať. Obsahovala sieťovú vrstvu pre vývojárov na vytváranie hier pre viacerých hráčov založenú na protokole User Datagram Protocol, ktorá ponúkala preklad sieťových adries, synchronizáciu stavu a volanie vzdialených procedúr. Keď spoločnosť Apple v roku 2008 spustila svoj obchod App Store, Unity rýchlo pridalo podporu pre iPhone. Niekoľko rokov bol engine na iPhone bezkonkurenčný a stal sa známym medzi vývojármi hier pre iOS.'),
(2, 'Unity 3.0 (2010)', 'Unity 3.0 bolo uvedené na trh v septembri 2010 a obsahovalo funkcie rozširujúce grafické funkcie enginu pre stolové počítače a herné konzoly. Okrem podpory Androidu obsahovalo Unity 3 okrem iného integráciu nástroja Beast Lightmap od spoločnosti Illuminate Labs, odložené vykresľovanie, zabudovaný editor stromov, natívne vykresľovanie písma, automatické UV mapovanie a zvukové filtre. V roku 2012 VentureBeat napísal: \"Len málo spoločností prispelo k toku nezávisle produkovaných hier tak ako Unity Technologies. Viac ako 1,3 milióna vývojárov používa jej nástroje na vytváranie gee-whiz grafiky vo svojich hrách pre iOS, Android, konzoly, PC a webové hry. Unity chce byť engine pre multiplatformové hry, bodka. V prieskume časopisu Game Developer z mája 2012 sa Unity označil za najlepší herný engine pre mobilné platformy.'),
(3, 'Unity 4.0 (2012)', 'V novembri 2012 spoločnosť Unity Technologies dodala Unity 4.0. Táto verzia pridala podporu DirectX 11 a Adobe Flash, nové animačné nástroje s názvom Mecanim a prístup k náhľadu pre Linux.\r\n\r\n            V roku 2013 spoločnosť Facebook integrovala softvérovú vývojovú sadu pre hry využívajúce herný engine Unity, ktorá obsahovala nástroje umožňujúce sledovanie reklamných kampaní a hĺbkové prepojenie, pri ktorom boli používatelia priamo prepojení z príspevkov na sociálnych sieťach na konkrétne časti v hrách, a jednoduché zdieľanie obrázkov v hrách. v roku 2016 spoločnosť Facebook vyvinula novú platformu pre počítačové hry so systémom Unity. Unity poskytovalo podporu pre herné platformy Facebooku a vývojári Unity mohli rýchlejšie exportovať a publikovať hry na Facebooku.'),
(4, 'Unity 5 (2015)', 'The Verge povedal o vydaní Unity 5 v roku 2015: \"Unity začalo s cieľom urobiť vývoj hier univerzálne prístupným. Unity 5 je dlho očakávaným krokom k tejto budúcnosti.V Unity 5 engine vylepšil osvetlenie a zvuk. Prostredníctvom WebGL mohli vývojári Unity pridať svoje hry do kompatibilných webových prehliadačov bez toho, aby hráči potrebovali zásuvné moduly. Unity 5.0 ponúklo globálne osvetlenie v reálnom čase, náhľady svetelných máp, Unity Cloud, nový zvukový systém a fyzikálny engine Nvidia PhysX 3.3. Unity 5.0 ponúka aj nové funkcie. Piata generácia enginu Unity tiež predstavila Cinematic Image Effects, ktoré pomáhajú, aby hry Unity vyzerali menej genericky. 5.6 Unity pridalo nové efekty osvetlenia a častíc, aktualizovalo celkový výkon enginu a pridalo natívnu podporu pre Nintendo Switch, Facebook Gameroom, Google Daydream a grafické API Vulkan.');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `unity_carousel`
--

CREATE TABLE `unity_carousel` (
  `id` int(11) NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `unity_carousel`
--

INSERT INTO `unity_carousel` (`id`, `picture`) VALUES
(1, '../assets/img/unity1.png'),
(2, '../assets/img/unity2.png'),
(3, '../assets/img/unity3.png');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `unity_container`
--

CREATE TABLE `unity_container` (
  `id` int(11) NOT NULL,
  `pros` text NOT NULL,
  `cons` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `unity_container`
--

INSERT INTO `unity_container` (`id`, `pros`, `cons`) VALUES
(1, 'Veľká komunitná podpora a rozsiahla dokumentácia pre začiatočníkov.', 'Obmedzenia výkonu pre grafiku vyššej úrovne kvôli svojej architektúre.'),
(2, 'Vývoj na rôznych platformách vrátane mobilných zariadení, stolových počítačov, konzol a AR/VR.', 'Tazšie učenie pre pokročilé funkcie a optimalizácie.'),
(3, 'Obchod s Assetmi ponúka široký sortiment predpripravených assetov a doplnkov pre rýchly vývoj.', 'Obmedzené grafické schopnosti v porovnaní s Unreal Engine priamo zo základu.'),
(4, 'Jednoduché používateľské rozhranie a vizuálny editor pre rýchle prototypovanie.', 'Nástroje vstavané do enginu môžu byť menej robustné v porovnaní s Unreal pre určité funkcionality.'),
(5, 'Vhodný pre nezávislých vývojárov a malé tímy vďaka nižšej vstupnej bariére.', 'Kvalita grafiky môže vyžadovať dodatočné úsilie a optimalizáciu.'),
(6, 'Silná podpora pre vývoj 2D hier.', 'Licenčné poplatky alebo podiel zo zisku pre komerčné projekty prekračujúce určité hranice.'),
(7, 'Prispôsobivosť a flexibilita pre tvorbu hier v 2D aj 3D.', 'Sieťové a multiplayerové funkcie môžu vyžadovať riešenia tretích strán.'),
(8, 'Podpora pre programovací jazyk C#, ktorý je známy svojou jednoduchosťou.', 'Náročnejšie pre fotorealistické renderovanie a filmové zážitky.'),
(9, 'Pravidelné aktualizácie a zlepšenia na základe spätnej väzby užívateľov.', 'Vyžaduje doplnkové pluginy alebo rozšírenia pre niektoré pokročilé funkcie.'),
(10, 'Škálovateľnosť pre jednoduché aj komplexné projekty.', 'Aktualizácie môžu prinášať problémy s kompatibilitou so existujúcimi projektmi.');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `unity_pricing`
--

CREATE TABLE `unity_pricing` (
  `id` int(11) NOT NULL,
  `edition` text NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `unity_pricing`
--

INSERT INTO `unity_pricing` (`id`, `edition`, `price`) VALUES
(1, 'Student', 'Zdarma'),
(2, 'Personal', 'Zdarma'),
(3, 'Unity Pro', '170€ Mesačne/1 877€ Ročne'),
(4, 'Unity Enterprise', 'Kontaktujte <a href=\"https://unity.com/pricing#plans-enterprise\">Unity</a>'),
(5, 'Unity Industry', '414€ Mesačne/4 554€ Ročne');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `unreal_accordion`
--

CREATE TABLE `unreal_accordion` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `unreal_accordion`
--

INSERT INTO `unreal_accordion` (`id`, `title`, `text`) VALUES
(1, 'Prvá Generácia', 'Prvá generácia Unreal Engine bola vyvinutá Timom Sweeneyom, zakladateľom spoločnosti Epic Games. Po vytvorení editačných nástrojov pre jeho shareware hry ZZT (1991) a Jill of the Jungle (1992), Sweeney začal v roku 1995 písať engine pre výrobu hry, ktorá neskôr vznikla ako first-person shooter známy ako Unreal. Po niekoľkých rokoch vývoja sa engine prvýkrát predstavil pri uvedení hry v roku 1998, aj keď MicroProse a Legend Entertainment mali už oveľa skôr prístup k tejto technológii a licencovali ju v roku 1996. Podľa rozhovoru napísal Sweeney 90 percent kódu v engine, vrátane grafiky, nástrojov a systému pre pripojenie sietí.\r\n\r\n                Pôvodne sa engine úplne spoliehal na softvérové vykresľovanie, čo znamenalo, že výpočty grafiky vykonávala centrálne spracovávajúca jednotka (CPU). Avšak v priebehu času dokázal využívať možnosti poskytované dedikovanými grafickými kartami, s dôrazom na API Glide, špeciálne navrhnuté pre 3dfx akcelerátory. Hoci bola podpora pre OpenGL a Direct3D, uvádzali pomalší výkon v porovnaní s Glide kvôli ich nedostatočnému riadeniu textúr v danom období. Sweeney sa osobitne vyjadril o kvalite ovládačov OpenGL pre spotrebiteľský hardware, opisujúc ich ako \"extrémne problematické, chybné a netestované\", a označil kód implementácie za \"strašný\" na rozdiel od jednoduchšej a čistejšej podpory pre Direct3D. Pokiaľ ide o zvuk, Epic využíval Galaxy Sound System, softvér vytvorený v assembleri, ktorý integroval technológie EAX a Aureal a umožňoval používanie tracker hudby, čo poskytlo dizajnérom úrovní flexibilitu v tom, ako sa hudba hrala v konkrétnom bode na mapách. Steve Polge, autor doplnku Reaper Bots pre Quake, naprogramoval systém umelej inteligencie na základe znalostí, ktoré získal u svojho predchádzajúceho zamestnávateľa IBM pri navrhovaní routerových protokolov.'),
(2, 'Unreal Engine 2', 'V októbri informovala stránka IGN na základe rozhovoru so spoločnosťou Voodoo Extreme, že Sweeney robí výskum pre svoj engine nasledujúcej generácie. S vývojom začatým o rok neskôr, druhá verzia sa predstavila v roku 2002 s hrou America\'s Army, bezplatným multiplayerovým strieľačom vyvinutým armádou USA ako nástroj pre nábor. Krátko potom by Epic vydal Unreal Championship pre Xbox, jeden z prvých hier využívajúcich službu Xbox Live od Microsoftu.\r\n\r\n                Aj keď táto generácia bola založená na svojom predchodcovi, videli sme významný pokrok v oblasti vykresľovania, ako aj nové vylepšenia v sade nástrojov. Engine bol schopný spúšťať úrovne takmer 100-krát podrobnejšie ako tie v hre Unreal, integroval rôzne funkcie, vrátane nástroja pre kinematografické úpravy, časticových systémov, exportných doplnkov pre 3D Studio Max a Maya a systému skeletálnej animácie, ktorý bol prvýkrát predstavený v verzii pre PlayStation 2 hry Unreal Tournament. Okrem toho bola používateľská rozhranie pre UnrealEd prepísaná v jazyku C++ s využitím sady nástrojov wxWidgets, o ktorej Sweeney povedal, že vtedy bola \"najlepšou dostupnou vecou\".\r\n\r\n                Epic využívala fyzikálny engine Karma, softvér od tretej strany od štúdia Math Engine so sídlom vo Veľkej Británii, na riadenie fyzikálnych simulácií, ako sú kolízie hráčov typu ragdoll a ľubovoľná dynamika tuhých tiel. S Unreal Tournament 2004 bola úspešne implementovaná hratelnosť s vozidlami, umožňujúca boj na veľkú vzdialenosť. Zatiaľ čo Unreal Tournament 2003 mal podporu pre fyziku vozidiel cez engine Karma, čo demonštroval testovací mapu s \"náhle zostrojeným vozidlom\", až kým Psyonix nepoužil modifikáciu základného kódu od Epic, hra nedostala úplne vykódované vozidlá. Impresionovaní ich úsilím sa Epic rozhodol zahrnúť toto do svojho nástupcu ako oficiálny herný mód pod názvom Onslaught tým, že najal Psyonix ako dodávateľa. Psyonix neskôr vyvinula hru Rocket League, ktorá bola v roku 2019 odkúpená Epicom.\r\n\r\n                Špecializovaná verzia UE2 nazývaná UE2X bola navrhnutá pre hru Unreal Championship 2: The Liandri Conflict na platforme pôvodného Xboxu a obsahovala optimalizácie špecifické pre túto konzolu. V marci 2011 odhalilo Ubisoft Montreal, že UE2 úspešne bežal na hernom systéme Nintendo 3DS vo hre Tom Clancy\'s Splinter Cell 3D. \"3DS je výkonný a dokážeme na tejto konzole spustiť Unreal Engine, čo je pomerne impozantné pre prenosné zariadenie, a 3D neovplyvňuje výkon (vďaka mojim úžasným programátorom),\" uviedol Ubisoft.'),
(3, 'Unreal Engine 3', 'Obrázky z Unreal Engine 3 boli prezentované v júli 2004, v čase, keď bol engine už viac ako 18 mesiacov vo vývoji. Engine bol založený na prvej generácii, ale obsahoval nové funkcie. \"Základné architektonické rozhodnutia viditeľné pre programátorov v objektovo orientovanom návrhu, prístupe k skriptovaniu založenom na dátach a pomerne modulárnemu prístupu k podsystémom zostali [zo Unreal Engine 1]. Ale časti hry, ktoré sú skutočne viditeľné pre hráčov - renderovanie, fyzikálny systém, zvukový systém a nástroje - sú všetky viditeľne nové a dramaticky výkonnejšie,\" povedal Sweeney. Na rozdiel od Unreal Engine 2, ktorý stále podporoval fixnú funkčnú pipeline, bol Unreal Engine 3 navrhnutý tak, aby využíval plne programovateľný hardvér shaderov. Všetky výpočty osvetlenia a tieňovania sa vykonávali na úrovni pixelov, namiesto na úrovni vrcholov. Z hľadiska vykresľovania poskytoval Unreal Engine 3 podporu pre renderer s gama-korekciou vysokého dynamického rozsahu. Prvé hry vydané s použitím Unreal Engine 3 boli Gears of War pre Xbox 360 a RoboBlitz pre Windows, ktoré boli obidve vydané 7. novembra 2006.\r\n\r\n                Pôvodne podporoval Unreal Engine 3 len platformy Windows, PlayStation 3 a Xbox 360, pričom iOS (prvýkrát demonštrované s Epic Citadel) a Android boli pridané neskôr v roku 2010, pričom Infinity Blade bol prvým titulom pre iOS a Dungeon Defenders prvým titulom pre Android. V roku 2011 bolo oznámené, že engine bude podporovať Adobe Flash Player 11 prostredníctvom hardvérovo akcelerovaných API pre Stage 3D a že sa používa v dvoch hrách pre Wii U, Batman: Arkham City a Aliens: Colonial Marines. V roku 2013 sa Epic spojil s Mozillou, aby priniesli Unreal Engine 3 na web; s použitím podjazyka asm.js a kompilátora Emscripten sa im podarilo portovať engine za štyri dni.'),
(4, 'Unreal Engine 4', 'V auguste 2005 Mark Rein, viceprezident spoločnosti Epic Games, odhalil, že vývoj Unreal Engine 4 prebiehal už dva roky. \"Ľudia si to neuvedomujú, ale sme už dva roky do vývoja Unreal Engine 4. Určite ešte nemáme kompletný tím, je to len jeden chlap a asi si viete tipnúť, kto to je,\" povedal C&VG. V rozhovore na začiatku roku 2008 Sweeney uviedol, že prakticky jedinou osobou pracujúcou na engine bol on sám, avšak potvrdil, že jeho výskumné a vývojové oddelenie sa začne neskôr v tom istom roku rozširovať a bude vyvíjať engine paralelne s Unreal Engine 3. \"V niektorých ohľadoch pripomíname firmu vyvíjajúcu hardvér so svojím generatívnym vývojom technológií. Budeme mať tím vyvíjajúci Unreal Engine 3 ešte niekoľko rokov a tím, ktorý sa začne pripravovať na Unreal Engine 4. A potom, keď začne prechod na nasledujúcu generáciu, presunieme všetkých tam. V skutočnosti vyvíjame súčasne paralelne pre viaceré generácie,\" povedal.\r\n\r\n                V februári 2012 Rein vyhlásil: \"Ľudia budú neskôr tento rok šokovaní, keď uvidia Unreal Engine 4.\" Epic odhalil UE4 obmedzenému počtu účastníkov na Game Developers Conference 2012 a video enginu demonštrované technickým umelcom Alanom Willardom bolo zverejnené pre verejnosť 7. júna 2012 na GameTrailers TV. Jednou z hlavných plánovaných funkcií pre UE4 bola real-time globálna iluminácia pomocou voxel cone tracing, eliminujúca predvypočítané osvetlenie. Avšak táto funkcia, nazvaná Sparse Voxel Octree Global Illumination (SVOGI) a predstavená v deme Elemental, bola nahradená podobným, ale menej výpočtovo náročným algoritmom z dôvodu obáv o výkon. UE4 tiež zahŕňa nový vizuálny systém skriptovania \"Blueprints\" (nástupca \"Kismet\" z UE3), ktorý umožňuje rýchly vývoj herného logického systému bez použitia kódu a znižuje rozdiel medzi technickými umelcami, dizajnérmi a programátormi.');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `unreal_carousel`
--

CREATE TABLE `unreal_carousel` (
  `id` int(11) NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `unreal_carousel`
--

INSERT INTO `unreal_carousel` (`id`, `picture`) VALUES
(1, '../assets/img/unreal1.png'),
(2, '../assets/img/unreal2.png'),
(3, '../assets/img/unreal3.png');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `unreal_container`
--

CREATE TABLE `unreal_container` (
  `id` int(11) NOT NULL,
  `pros` text NOT NULL,
  `cons` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `unreal_container`
--

INSERT INTO `unreal_container` (`id`, `pros`, `cons`) VALUES
(1, 'Úžasné grafické schopnosti a fotorealistický rendering priamo zo základu.', 'Tažší na naučenie, najmä pre začiatočníkov a ľudí bez programátorského zázemia.'),
(2, 'Výkonný vizuálny skriptovací nástroj (Blueprints) pre ľudí bez programátorského zázemia.', 'Môže byť pre niektorých preplnený množstvom funkcií a zložitosťou.'),
(3, 'Robustný a funkčne bohatý súbor nástrojov pre vývoj hier.', 'Menej vhodný pre vývoj 2D hier v porovnaní s Unity.'),
(4, 'Vstavané fyzikálne a renderingové systémy pre vysokokvalitnú grafiku.', 'Vyššie nároky na systémové prostriedky, čo môže ovplyvniť výkon na slabších zariadeniach.'),
(5, 'Pokročilé osvetlenie a efekty častíc pre pohlcujúce zážitky.', 'Väčšie súbory a dlhšie načítanie projektov.'),
(6, 'Silný dôraz na vývoj hier typu AAA.', 'Obmedzený výber assetov v porovnaní s Unity Asset Store.'),
(7, 'Absencia podielu zo zisku do určitého prahu pre komerčné projekty.', 'Vyžaduje silnejšiu hardvérovú výbavu pre plynulý vývoj.'),
(8, 'Rozsiahla dokumentácia a vzdelávacie zdroje.', 'Skriptovanie pomocou Blueprintov môže mať obmedzenia pre veľmi komplexné systémy.'),
(9, 'Silné sieťové schopnosti pre multiplayerové hry.', 'Prispôsobovanie a úpravy môžu vyžadovať hlbšie znalosti v jazyku C++.'),
(10, 'Nepretržité aktualizácie a vylepšenia podporované spoločnosťou Epic Games.', 'Problémy s optimalizáciou výkonu pre menej skúsených vývojárov.');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `unreal_pricing`
--

CREATE TABLE `unreal_pricing` (
  `id` int(11) NOT NULL,
  `edition` text NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `unreal_pricing`
--

INSERT INTO `unreal_pricing` (`id`, `edition`, `price`) VALUES
(1, 'Štandartná Licencia', 'Zdarma'),
(2, 'Enterprise Licencia', '1 500$ za 1 osobu/rok'),
(3, 'Vlastná Licencia', 'Kontaktujte <a href=\"https://www.unrealengine.com/en-US/license\">Unreal Engine</a>');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`) VALUES
(1, 'admin@admin.test', '21232f297a57a5a743894a0e4a801fc3', 1),
(9, 'test@test.test', '098f6bcd4621d373cade4e832627b4f6', 0),
(10, 'user@user.test', 'ee11cbb19052e40b07aac0ca060c23ee', 0);

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `godot_accordion`
--
ALTER TABLE `godot_accordion`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `godot_carousel`
--
ALTER TABLE `godot_carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `godot_container`
--
ALTER TABLE `godot_container`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `godot_pricing`
--
ALTER TABLE `godot_pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `unity_accordion`
--
ALTER TABLE `unity_accordion`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `unity_carousel`
--
ALTER TABLE `unity_carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `unity_container`
--
ALTER TABLE `unity_container`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `unity_pricing`
--
ALTER TABLE `unity_pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `unreal_accordion`
--
ALTER TABLE `unreal_accordion`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `unreal_carousel`
--
ALTER TABLE `unreal_carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `unreal_container`
--
ALTER TABLE `unreal_container`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `unreal_pricing`
--
ALTER TABLE `unreal_pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `godot_accordion`
--
ALTER TABLE `godot_accordion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pre tabuľku `godot_carousel`
--
ALTER TABLE `godot_carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `godot_container`
--
ALTER TABLE `godot_container`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `godot_pricing`
--
ALTER TABLE `godot_pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pre tabuľku `unity_accordion`
--
ALTER TABLE `unity_accordion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `unity_carousel`
--
ALTER TABLE `unity_carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `unity_container`
--
ALTER TABLE `unity_container`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `unity_pricing`
--
ALTER TABLE `unity_pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `unreal_accordion`
--
ALTER TABLE `unreal_accordion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `unreal_carousel`
--
ALTER TABLE `unreal_carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `unreal_container`
--
ALTER TABLE `unreal_container`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `unreal_pricing`
--
ALTER TABLE `unreal_pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
