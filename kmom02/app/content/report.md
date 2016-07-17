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
