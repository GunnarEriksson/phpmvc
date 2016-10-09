Redovisning
====================================

Kmom01: PHP-baserade och MVC-inspirerade
----------------------------------------

#### Vilken utvecklingsmiljö använder du?
Jag fortsätter med de verktyg som jag skaffade när jag började kursen, vilket jag
har trivts bra med. Den enda skillnaden är att jag numera använder Windows 10
istället för Windows 7, då Microsoft gjorde en tvångsuppgradering av mitt
operativsystem. Uppgraderingen gick dock bra och jag har inte haft några problem
med verktygen efter uppgraderingen.

Jag använder XAMPP som lokal server och Atom som utvecklingsverktyg. Då jag arbetar
med databasen MySQL använder jag MySQL Workbench där jag kan ta fram de olika
SQL-kommandona innan jag lägger in de i PHP-filerna. För att kommunicera med
skolans server använder jag Cygwin.

För att hålla reda på min kod och förhindra att jag förlorar all kod om min
dator går sönder, så använder jag GIT och GITHub, tillsammans med verktyget GitBash.

#### Är du bekant med ramverk sedan tidigare?
Nej, detta är första gången förutom det jag kom i kontakt med i förra kursen OOPHP.
Nu när kursen har startat, så känns det bra att man fick börja med ett enklare
ramverk i förra kursen. Även om det här ramverket är betydligt större, så känner
man igen delar av strukturen. Något som underlättar då det är mycket ta in så här
i början.

#### Är du sedan tidigare bekant med de lite mer avancerade begrepp som introduceras?
De flesta sakerna har jag erfarenhet av från andra språk som Java och C++, så det
var inte svårt att förstå. När det gäller Dependency Injections, så har jag bara
hört talas om det, så här fick jag studera det lite extra och även senare återkomma
till ämnet.

#### Din uppfattning om Anax, och speciellt Anax-MVC?
Känslan var som i förra kursen att det kändes mycket att ta in på en gång. Men
erfarenheten från förra kursen är att det kommer kännas bättre när man börjar arbeta
med ramverket.

Den uppfattning jag har nu, är att jag gillar att allt har sin plats. Att man kan
hålla HTML-kod skilt ifrån PHP-koden, något jag har tyckt varit svårt tidigare att
få till då jag har haft svårt att få till snygg kod när två olika språk ska blandas.
Jag tycker också om att man kan skriva Markdown när man bara vill ha textstycken
utan behöva lägga in HTML-taggar.

Nackdelar är att det är lite svårt att hitta i ramverket. Det blir mycket letande,
även om det börjar gå lättare nu. En annan nackdel, är att man nog kan köra fast
rejält då man har ett ramverk som kan ställa till det. Vissa fel är nog inte lätta
att hitta. Då är det lättare med ett enklare ramverk eller inget ramverk alls. Svårt
att ha kontroll över något man själv inte har gjort.

#### Allmänt om kursmomentet
Det var mycket information att ta till sig, så det var inte alldeles lätt att få grepp
om ämnet. Men efter en natts sömn och sedan gå igenom texten igen, gjorde att det
började klarna. Men jag känner att det behövs mer repetition för att det ska börja
kännas mer bekvämt.

Det jag hade bekymmer med var att lägga till en bild i markdownfilen. Ramverket
skapade en länk av bildlänken, som den gör med sidorna, vilket resulterade att index.php
lades in i bildlänken. Jag hittade i forumet att man kunde använda sig av RELURL, vilket
löste problemet.

Jag hade som vanligt lite funderingar hur kring strukturen och fick hjälp från forumet.
En rekommendation är att bryta ut katalogerna webroot och app och lägga dessa i den
aktuella kmom-katalogen, vilket gör det enklare att se vilken kod som tillhör respektive
moment. Det är då ingen risk att man skriver över något innan koden har hunnit bli rättad.
Jag tycker det hade varit bra om detta tips kunde läggas in först i kursmomentet. Att få
till bra struktur underlättar senare i kursen.


Kmom02: Kontroller och modeller
-------------------------------

#### Hur känns det att jobba med Composer?
Det gick smidigt att installera då det stod på forumet vilket av alternativen man
skulle välja om man använder Windows som operativsystem. Väl installerat, så fungerade
det utan problem att installera paket från Packagist. Jag tycker det verkar vara ett
smidigt sätt att installera paket och slippa manuellt hantera olika beroenden som
paketen har. Jag kunde dock inte låta bli att fundera på hur lätt det är att förstå
vad som är fel, om en nedladdning misslyckas. En del program kan skriva ut kryptiska
meddelanden som inte alltid är lätta att förstå.

#### Vad tror du om de paket som finns i Packagist, är det något du kan tänka dig att använda och hittade du något spännande att inkludera i ditt ramverk?
Det verkar finnas en hel del intressanta plugins som man kan ha hjälp av i framtiden,
t ex validering av formulär för att knyta an till kursavsnittet. Att slippa uppfinna
hjulet på nytt är oftast tacksamt. Fast ibland kan det ta lika lång tid att sätta
sig in i någons annans kod än att göra den själv eller hitta exakt det man söker.

#### Hur var begreppen att förstå med klasser som kontroller som tjänster som dispatchas, fick du ihop allt?
Det var ännu ett kursmoment med många nya saker att lära sig. För mig krävdes det
några dagar innan det började sätta sig så pass att jag hade en grund att stå på.
Ofta hjälper en natts sömn bäst.

Jag fick ihop något som fungerar, men jag brukar oftast fundera om man kan göra samma
sak fast på ett smartare sätt. Jag tycker ramverket fungerar bra när man anropar
frontkontrollern som sedan hämtar information och skapar en vy med innehållet.

I det här kursmomentet hade jag fyra vyer. Vyn med kommentarer och möjligheten att
skapa nya, editera och ta bort en kommentar. Sedan fanns vyerna med formulär för att
lägga till en kommentar, ändra en kommentar och till sist ett formulär att ta bort
en eller alla kommentarerna.

Min lösning var att frontkontrollern fick skapa vyn med alla kommentarer och den
andra kontrollern fick skapa de övriga vyerna. Problemet var att jag inte hittade
någon snygg lösning när det gällde att sätta titel, huvudrubrik och css-fil. Dessa
var jag tvungen att sätta igen i den andra kontrollern. Jag funderade om jag kunde
skicka tillbaka anropet till frontkontrollern, så att allt passerade där för att
slippa sätta om de ovanstående sakerna, men tyckte det inte var snyggt att skicka
med massa parametrar i anropet (t ex kommentarsid, vilket kommentarvy och vilken
typ av aktion (skapa, ändra eller ta bort)). Kanske finns det ett smart sätt så
man bara byter ut delar i vyn. I mitt fall behålla huvudrubriken och sedan byta ut
innehållet i nivån under.

#### Hittade du svagheter i koden som följde med phpmvc/comment? Kunde du förbättra något?
Det hade varit trevligt om det hade funnits några valideringsfunktioner för formulär
och att det hade funnits någon funktion för att webbadress kunde börja med http, men
letar man i Packagist så finner man nog vad man söker om man letar.

#### Allmänt om kursmomentet
Det var ännu ett klurigt kursmoment, där det var mycket nya saker att ta in. Bitarna
börjar falla på plats, men det känns som vanligt att det är först under projektet man
börjar få en djupare förståelse för hur ramverk fungerar.

Jag har funnit svar på många frågor genom att gå in koden och titta, t ex vilka
metoder det finns som man kan använda. Fast det finns fortfarande saker som pågår i
bakgrunden som jag inte förstår. Ofta kan man köra med var_dump() och exit() för att
ta reda på saker, men ibland fungerar inte det på vissa ställen i koden. Ramverk
underlättar i många situationer, men samtidigt känns det som man förlorar lite av
kontrollen när fel uppstår. Fel som ibland kan vara knepiga att hitta då en mycket
görs av ramverket, vilket gör det svårare att förstå var problemet ligger.

Jag fick problem med att validera mina formulär för att ändra och ta bort kommentarer
på Unicorn. Validatorn påstod att “No Character encoding declared at document level”
och dokumentet började med en radbrytning. Raden som dokumentet ska börja med
(doctype html) kom först några rader längre ned. Jag satt i några timmar och ringade
in felet, men det var först när jag bytte validator till https://validator.w3.org/nu/,
där jag kunde klicka i ”Source” som jag förstod var det var. Jag hade inte kontrollerat
om index i arrayen existerade innan jag satte parametrarna som ska skickas till vyn.
Det blev ingen varning utan endast en notis. Detta syntes inte på sidan, var källkod
såg bra ut, men validatorn reagerade på dessa notiser. Får undersöka om det går att
ställa in att även notiserna dyker upp när man testar sin sida. Sedan kan man ta bort
möjligheten när sidan är klar.


Kmom03: Bygg ett eget tema
--------------------------

#### Vad tycker du om CSS-ramverk i allmänhet och vilka tidigare erfarenheter har du av dem?
Att arbeta med CSS-ramverk var ett helt nytt moment för mig då jag tidigare bara arbetat
med CSS utan ramverk. Jag börjar förstå möjligheten hur man kan få en bra struktur,
speciellt då i större och mer komplexa webbsidor, än vad man hade kunnat annars. Själv
kunde jag ta bort initieringen av CSS-filen i min CommentController.php, då man länkar ihop
filerna i style.less.

Nackdelen är att det blir svårare att hitta var ifrån CSS-regeln kommer ifrån. Det är lätt
att man skriver över en regel från en annan less-fil som länkas in i style.less. Nu blev det
lite speciellt i det här momentet då man hade CSS-filer från två tidigare moment. Startar
man med ett CSS-ramverk, så blir det bättre ordning i filerna då man ser vilka specialfall
som behöver läggas till för respektive sida och vilka CSS-regler som kan vara generella.

#### Vad tycker du om LESS, lessphp och Semantic.gs?
Det var en liten tröskel för att komma in i tänket hur Less fungerar. Själva syntaxen var
inte så svår att förstå. Jag hade inga problem med lessphp, så jag saknar erfarenhet om
det skulle börja krångla. Nackdelen är, som jag tidigare nämnde, att alla CSS-regler
hamnar i en fil. Det ökar risken att man av misstag skriver över en regel om less-filerna
hamnar i fel ordning. Namngivning av id och klasser blir allt viktigare nu.

Jag gillade Semantic.gs även om det tar lite tid att förstå. Får man det att fungera, så
går det lättare att bygga upp en sidas struktur då det finns färdiga regioner att lägga
innehåll i.

Jag saknade en main-region utan en sidebar-region, vilket gjorde att main-regionen
utgjorde endast 60 % av sidan. Jag hittade inget enkelt sätt för att få main-regionen
att utgöra 100 %, så jag skapade själv en main-region (main-wide) som täcker 100 % av
sidan. Jag tyckte det gick smidigt att lägga till min egen region, så det bådar gott för
att i framtiden ändra i strukturen om så behövs.

#### Vad tycker du om gridbaserad layout, vertikalt och horisontellt?
Jag tycker det var ett bra hjälpmedel för att få till en snyggt strukturerad sida. Jag
sitter nog inte och anstränger mig att raderna ligger precis som de ska, om det inte är
så att texten i main och sidebar diffar allt för mycket. Då är jag nog mer känslig om
strukturen inte är rak i den vertikala ledden. Antagligen beroende på att det är lättar
att se om marginalerna inte ligger rakt under varandra.

#### Har du några kommentarer om Font Awesome, Bootstrap, Normalize?
Font Awesome tyckte jag mycket om. Bra och smidigt om man vill ha ikoner på sin sida.
Det var skönt att slippa spara ikoner som en bild och sedan länka till bilden för att
få ikonen att synas. Ofta fick man problem med placeringen. Jag uppdaterade mina
kommentarer från det förra momentet med några av Font Awesome ikoner. Det tog inte
lång tid att byta ut text mot ikoner.

Jag tittade endast igenom Bootstrap, men använde inget i den här övningen. Jag nöjer mig
för tillfället att lägga Bootstrap på minnet för framtida utvecklingar av webbsidor.

Normalize är tacksamt då det hjälper till att nollställa grundstilen och gör att den är
konsistent mellan olika webbläsare. Allt som hjälper till att webbsidans utseende lika
på olika webbläsare är alltid tacksamt.

#### Beskriv ditt tema, hur tänkte du när du gjorde det, gjorde du några utsvävningar?
Nej, det blev inga större utsvävningar utan jag följde hur man gjorde ett tema i övningen.
Det enda som jag saknade var en main-region, utan sido-region, som täcker 100 % av sidan.
Jag gjorde därför en main-wide som har dessa egenskaper. Behövs en main-region som täcker
hela sidan, så lägger jag bara till main-wide när jag initierar vyn.

Jag ordnade också på ett enkelt sätt så menyn blir responsive. Lite klumpig lösning då
alla alternativ kommer under varandra. Det får vänta tills nästa kurs att lösa menyn med
en rullgardinsmeny från en ikon med hjälp av JQuery.

Jag har också ändrat så hela webbsidan använder sig av det nya temat genom att använda
mallen i anax-grid istället för anax-base. Jag har tagit bort sökvägar till CSS-filerna
så att sidan bara använder sig av style.php. De enda CSS-filerna som finns kvar är två
filer som visar regionerna i grå färg samt att visa rutnätet för sidorna regioner och
typografi.

#### Antog du utmaningen som extra uppgift?
Nej, det gjorde jag inte. På grund av tidsbrist lade jag inte upp ett eget tema på
GitHub som ett eget projekt.

Däremot lade jag till så att man genom temats konfigurationsfil kan ändra färgen på
navigeringsbaren, linjer och knappar till blå färg. Det gick smidigt genom att lägga
till en parameter i html-taggen i index-filen. Parametern kan man sedan sätt i temats
konfigurationfil så att ramverket letar i en less-fil där man sparar olika teman.

#### Allmänt om kursmomentet
Det var ett roligt kursmoment där man såg fördelarna att lägga upp en struktur som man
sedan enkelt kan anropa för att lägga innehåll där man vill. Om man nu inte vill skapa
nya regioner, så kanske man funderar en gång till och använder de regioner man redan
har och på så sätt inte gör att sidorna spretar allt för mycket när det gäller utseende.

En fördel jag såg med Less, var att jag kunde ta bort initieringen av CSS-filen i mina
kontroller för kommentarer. Nu länkas dessa ihop med hjälp av style.php, vilket jag
tycker är smidigt.

Nackdelen är att det börjar blir mer komplicerat, så det är inte helt lätt att hitta
var allt ligger eller att fixa till fel när de uppstår. Ibland är felkoden inte allt
för lätt att tyda.


Kmom04: Databasdrivna modeller
------------------------------

#### Vad tycker du om formulärhantering som visas i kursmomentet?
Jag tycker det är ett smidigt sätt att skapa formulär, där man också har möjlighet att
på ett enkelt sätt lägga till olika kontroller som t ex alla obligatoriska uppgifter har
fyllts i och att uppgifter är rätt ifyllda. Det verkade inte som det var svårt att lägga
till egna kontroller, om man så behöver.

Det finns också stora möjligheter att påverka formulärets utseende på ett enkelt sätt.
Än så länge har formulärhanteringen allt jag önskar.

#### Vad tycker du om databashanteringen som visas, föredrar du kanske traditionell SQL?
Jag tycker den underlättar hanteringen av databasen. Funktionernas namn påminner mycket
om de SQL-kommandon jag har skrivit tidigare, så det var inte svårt att få hanteringen
av databasen att fungera.

Det jag tyckte var smidigast var hur man kopplade ihop namnet på modellen med namnet på
tabellen i databasen, vilket jag utnyttjade när jag lade mina kommentarer i databasen.
Det var bara att skapa en modell för varje tabell och sedan initiera ett objekt av dessa
modeller så var allt klart. Det tyckte jag var riktigt smidigt.

#### Gjorde du några vägval, eller extra saker, när du utvecklade basklassen för modeller?
Jag lade till funktionen deleteAll() som raderar alla poster i tabellen eftersom jag
tidigare hade en sådan funktion i kommentarer. När jag tittade på koden, så verkade det
först som man kunde använda delete-funktionen utan id. Detta fungerade dock inte när jag
testade och efteråt så kom jag att tänka på att det hade varit en dålig idé. Det hade
varit allt för lätt att av misstag radera allt innehåll i tabellen. Då är det bättre att
ha en funktion deleteAll(), som tydligt talar om att man raderar allt innehåll i databasen.

#### Beskriv vilka vägval du gjorde och hur du valde att implementera kommentarer i databasen.
Jag hade inga problem att uppdatera kommentarsfunktionen med formulär- och databashanteringen.
Det var riktigt kul hur smidigt man kunde lösa kommentarsfunktionen med de nya modulerna.
Tidigare hade jag skapat mina egna formulär i view-mappen där jag hade en vy för varje funktion
(lägga till en kommentar, uppdatera en kommentar och radera alla kommentarer/en kommentar).
Ny flyttade jag skapandet av formulären till katalogen HTMLForm istället och skapade formulären
enligt det nya sättet.

Kommentarsfunktionen består av två kommentarsfunktioner där varje kommunikationsfunktion sparar
sina egna kommentarer. Jag tyckte det blev smidigast om man gjorde detta i två separata tabeller
i databasen. För att koppa ihop tabellerna i databasen med ramverket, så skapade jag två
modeller, Comments1 och Comments2, som ärver från CDatabaseModel. Objekten till dessa modeller,
initieras i funktionen initialize() i CommentControllern.  Tidigare använde jag en nyckel som
talade om anropet kom från sidan comments1 eller comments2. Nyckeln sätts i anropet till
frontkontrollern via menyn och används sedan i länken till anropen av de olika funktionerna.
Jag valde att behålla nyckeln och skapade en privat metod som returnerar rätt objekt (skapades
i initialize-funktionen) beroende på nyckeln.

Det jag lade märke till var att jag fick ändra lite av min uppfattning av kontrollerns ansvar.
Tidigare trodde jag den skötte all huvudlogik, men nu flyttade logiken, som hanterar lagringen
av kommentarerna, från kontrollern till klasserna där formulären skapas. Att formulären fick
mer ansvar än tidigare, då de bara skötte utseendet och lagring av data i formuläret. Andra
klasser fick sedan sköta hanteringen där innehållet skulle lagras. Fördelen är att kontrollern
inte blir så stor som den annars kunde ha blivit, vilket är bra.

#### Gjorde du extrauppgiften? Beskriv i så fall hur du tänkte och vilket resultat du fick.
Nej, det var mycket att ta in så tiden tickade iväg och för att inte komma efter så fick
jag avstå extrauppgiften.

#### Allmänt om kursmomentet
Rent tidsmässigt var det ett omfattande moment, speciellt om man ville läsa allt som fanns
som förslag. Det har dock varit mycket lärorikt att få en inblick hur man kan arbeta när
man utvecklar webbsidor mer professionellt. Att inte uppfinna hjulet en gång till utan
använda sig av moduler som redan finns.

Jag tyckte också att modellens roll klarnade när vi lade till användandet av databas i
det här momentet.


Kmom05: Bygg ut ramverket
-------------------------

#### Var hittade du inspiration till ditt val av modul och var hittade du kodbasen som du använde?
Jag gick igenom de olika exemplen och tittade också på vad de tidigare studenterna hade gjort
för moduler. Jag kände då att det kunde vara trevligt med en modul som kan spara tid som modulen
CForm gjorde när man ska skapa formulär.

Valet blev då naturligt en modul som kan skapa en tabell då jag har använt mig av tabeller i varje
kurs hittills. Kodbasen hittade jag från kursen oophp där jag gjorde ett antal tabeller och hämtade
också inspiration från modulen CForm där man använder sig av en array för att bestämma formulärets
struktur.

Det jag är mest nöjd med, är att det gick smidigt att lägga in en funktion i arrayen som hanterar
min tabells struktur. Tack vare funktionen kan man göra ganska avancerade inställningar som t ex
lägga in HTML-kod i celler för en kolumn eller att värden passerar en funktion innan de skrivs ut.

#### Hur gick det att utveckla modulen och integrera i ditt ramverk?
Det var inga problem med att utveckla modulen då den är helt fristående från Anax MVC. Jag kunde
då utveckla modulen först innan jag anpassade modulen till ramverket. Anpassningen blev endast att
jag flyttade över koden som testar modulen till frontkontrollern.

Jag har också skapat en testsida för min me-sida, där jag visar ett exempel på en tabell med lite
förklaringar vilka inställningar man kan göra.

#### Hur gick det att publicera paketet på Packagist?
Det gick smidigt. Det var enkelt att skapa ett konto och lägga till sin modul. De instruktioner som
finns i Packagist hjälper en att få till kopplingen mellan GitHub och Packagist.

#### Hur gick det att skriva dokumentationen och testa att modulen fungerade tillsammans med Anax MVC?
Av erfarenhet vet jag att dokumentation kan ta tid. Svårigheten är att se på vad man har gjort med
nya ögon. Att försöka förstå vad som kan vara svårt för en person som träffar på modulen för första
gången.

Jag tittade på vad några tidigare studenter hade beskrivit sina moduler och utgick från det. Jag
hoppas att det blev begripligt. Jag försökte också ge olika exempel hur man kan sätta upp en tabell
i de testfiler som finns med.

Testningen gick bra. Jag laddade ned en ren Anax MVC och använde composer för att ladda ned min
modul. Flyttade frontkontrollern till webroot-katalogen och CSS-filen till CSS-katalogen. Pekade
till sidan i webbläsaren och allt fungerade som det skulle.

Jag lade till en sida på min me-sida, där jag visar ett exempel och beskriver vilka inställningar
som man kan använda sig av när man skapar en tabell med hjälp av min modul.

#### Gjorde du extrauppgiften? Beskriv i så fall hur du tänkte och vilket resultat du fick.
Ja, det gjorde jag. Några hade lagt till loggningsmodulen toeswade/log som jag tyckte verkade vara
intressant. Det verkar vara en bra modul om man skulle behöva mäta prestanda. Den gick smidigt att
ladda ner och installera. För narvande är den bortkommenterad, men skulle jag behöva använda den
när jag utvecklar, så är det lätt ordnat.

#### Allmänt om kursmomentet
Det var ett roligt moment där man fria händer att skapa en modul. Ett trevligt avbrott mot tidigare
kursmoment där man måste gå igenom ett stort antal punkter för att göra kursmomentet. Man fick en
bra förståelse hur det går till att skapa en modul och sedan lägga upp modulen så att andra
utvecklare kan använda sig av min modul. Packagist fungerar smidigt om man vill ladda ner andras
moduler eller man själv vill lägga upp en modul.


Kmom06: Verktyg och CI
----------------------

#### Var du bekant med några av dessa tekniker innan du började med kursmomentet?
Jag har inte arbetat med PHPUnit, Travis CI eller Scrutinizer tidigare. Fast jag har arbetat med
Maven, Jenkins och testat med JUnit när jag har arbetat med Java kod, så jag kände igen tanken
bakom respektive verktyg.

#### Hur gick det att göra testfall med PHPUnit?
Jag var lite osäker på hur jag skulle installera PHPUnit på min maskin och om den skulle
installeras på min lokala server också. Jag började med att följa instruktionen hur man
installerar PHPUnit på Windows. Jag läste också att tidigare studenter hade haft problem med
köra testfallen på Cygwin om man använder Windows 10, men lösningen var bara att skriva
phpunit.bat istället för bra phpunit. När jag väl gjorde det, så fungerade det utan problem.

Att skriva testfall var heller inget problem. Jag hade en modul som är helt fristående och har
bara två publika metoder. En som skapar tabellen och en metod skickar tabellen som HTML-kod.
Jag tittade på min exempeltabell när jag skrev testmetoderna och kontrollerade med Xdebug att
jag testade alla raderna i min modul.

#### Hur gick det att integrera med Travis?
Att skapa konto och koppla ihop Travis med GitHub gick lätt. Det var inte många moment som skulle
utföras och varje moment innehöll få saker, så det fungerade direkt. Det är ett verktyg helt i
min smak då det är mycket användarvänligt.

#### Hur gick det att integrera med Scrutinizer?
Även detta gick smidigt. Jag loggade in första gången med mitt GitHub-konto och då gick det lätt
att få i gång verktyget. Jag lade till scrutinizer-filen och ändrade i travis-filen, så fungerade
allt som det skulle. Koden för att lägga till en badge i min README-fil fanns tillgängligt, så
det vara bara att kopiera och klistra in kodraden i min README-fil.

Det enda som var förvirrande, var om det kostar att använda Scrutinizer eller inte. Minsta summan
är annars 49 Euro i månaden och det är lite väl dyrt om man vill använda det privat. Om det hade
varit 49 Euro om året, så hade funderat på det. Nu hittade jag en liten rad om att det ska vara
gratis om har open source-kod. Jag tycker det var ett trevligt verktyg att använda och det gav
mig några bra tips på hur jag kunde förbättra min kod.

Min kodtäckning var 99 % och kodkvaliteten var 7.89. Det enda den klagade på var komplexiteten som
var 57. Jag kan hålla med. Klasser ska vara korta och göra en sak. Det skulle nog gå att dela upp
i fler klasser, kanske en för hela tabellen, en för tabellhuvud, tabellkropp och en för tabellfot.
Jag låter dock det vara för tillfället.

#### Hur känns det att jobba med dessa verktyg, krångligt, bekvämt, tryggt? Kan du tänka dig att fortsätta använda dem?
Det kändes riktigt bra att använda samtliga verktyg. Det kändes verkligen som de tillförde något.
Jag är en stark anhängare till testdriven utveckling, så för mig var de en tillgång.

En del tycker det är onödigt och tidskrävande att skriva testfall. Om det måste skrivas testfall,
så ska helst någon annan göra det. Själv tycker jag att testfall ökar kodkvaliteten. Att skriva
testfall lite för koden, gör att man tänker två gånger och lite annorlunda när man skriver testfall
och kod. Testfallen gör att man funderar lite mer hur man kan ta sönder koden än vad man hade gjort
annars. Den största styrkan med dessa verktyg är dock när man underhåller koden. Om man inte vågar
förbättra kod, så ruttnar kod ganska snart. Finns det inga testfall, vågar man ofta inte förbättra
koden då man är rädd att införa fel. Finns det bra testfall, får man svar direkt varje gång man
vill förbättra koden.

Scrutinizer klagade på att jag hade dubbel kod och då var det inga problem att testa nya lösningar
då jag hade mina PHPUnit-testfall. Då kunde jag förbättra min kod utan att vara orolig att lägga in
ett fel, så länge testfallen gick bra.

#### Gjorde du extrauppgiften? Beskriv i så fall hur du tänkte och vilket resultat du fick.
Nej, det gjorde jag inte. Det känns som det är viktigare att jag kommer igång med projektet nu. Det
är inte helt otänkbart att jag lägger in testningen i projektet istället. Vi får se hur mycket
testning det blir, beroende på hur mycket tid projektet tar.

#### Allmänt om kursmomentet
Det här var ett roligt moment som gav en bra inblick i några bra och trevliga verktyg man kan
använda i framtiden. Ett kursmoment som visar hur man arbetar med programmering mer professionellt,
åtminstone om man arbetar på ett seriöst företag.
