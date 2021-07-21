Úlohy:

1.	Vytvorte webovú službu (klientsku a aj serverovú stranu), ktorá bude poskytovať informácie o meninách osôb na základe priloženého xml dokumentu. Jednotlivé metódy API nech umožňujú:
a.	na základe zadaného dátumu získať informáciu, kto má v daný deň meniny na Slovensku, resp. v niektorom inom uvedenom štáte;
b.	na základe uvedeného mena a štátu získať informáciu, kedy má osoba s týmto menom meniny v danom štáte;
c.	získať zoznam všetkých sviatkov na Slovensku (element <SKsviatky>) spolu s dňom, na ktorý tieto sviatky pripadajú;
d.	získať zoznam všetkých sviatkov v Čechách (element <CZsviatky>) spolu s dňom, na ktorý tieto sviatky pripadajú;
e.	získať zoznam všetkých pamätných dní na Slovensku (element <SKdni>) spolu s dňom, na ktorý tieto dni pripadajú;
f.	vložiť nové meno do kalendára (element <SKd>) k určitému dňu.
2.	Webovú službu vytvorte pomocou jednej z nasledujúcich alternatív: XML-RPC, JSON-RPC, SOAP alebo REST. Pri zadaní sa bude kontrolovať, či funkcionalita stránky je robená naozaj pomocou zvolenej webovej služby. Pri REST službe si dajte záležať na tom, aby boli skutočne dodržané zásady RESTU.
3.	Klientska strana aplikácie by mala umožňovať zadávať vstupné údaje vo forme formulára. Na web stránke nezabudnite popísať API vytvorenej služby. V prípade, že vytvoríte WSDL dokument pre SOAP, tak stačí, keď namiesto ručného popisu API iba vizualizujete jednotlivé metódy služby pomocou nejakého voľne dostupného wsdl viewera. Kto však má záujem, môže ručne popísať API aj vtomto prípade.
4.	Údaje z xml dokumentu si je možné predspracovať podľa vlastných preferencií (t.j. je možné ich aj vložiť do databázy). Dôležité je len to, aby informácie poskytované prostredníctvom služby boli konzistentné s dodaným súborom (t.j. nehľadajte si vlastný zdroj na Internete).
