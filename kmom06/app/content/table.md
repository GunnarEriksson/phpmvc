Tabellen är genererad av min egenutvecklade modul CHTMLTable. Tabelldata skickas in
som en multidimensionell associativ array, men koden kan lätt ändras till att ta
emot tabelldata i form av ett objekt som innehåller en associativ array.

Tabellen kan konfigureras enligt följande:

* CSS id för tabellen. Grundvärdet är html-table.

* CSS klass för tabellen.

* Rubrik (caption-tag).


Celler i kolumn kan konfigureras enligt följande:

* Titel. Sätter man ingen titel används namnet på nyckeln i tabelldatan.

* Cell av typ footer.

* Lägga in ett värde i footer-cellen.

* Sätta i hop celler (colspan-tag).

* Använda funktioner för att hantera cellvärden. Gör det möjligt att lägga till
HTML-kod eller använda sig av algoritmer för att sätta värden för en kolumn.


Modulen finns på Packagist: <https://packagist.org/packages/guer/chtmltable>
