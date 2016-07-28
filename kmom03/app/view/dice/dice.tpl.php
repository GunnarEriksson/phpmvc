<h1>Tärningsspelet 100</h1>

<h2>Regler</h2>
<p>I tärningsspelet 100 gäller det att samla ihop poäng för att komma först till 100.
Du kastar i varje omgång en tärning tills du väljer att stanna och spara poängen eller
det dyker upp en etta och du förlorar alla poäng som du inte har sparat i rundan.</p>
<?= $dice ?>
<p>Poäng: <?= $accumulatedScore ?></p>
<p>Sparade poäng: <?= $savedScore ?></p>
<p>Meddelande: <?= $message ?></p>
<ul class="button">
    <li><a href='<?=$this->url->create("dice?newGame")?>'>Nytt spel</a></li>
    <li><a href='<?=$this->url->create("dice?savePoints")?>'>Spara poäng</a></li>
    <li><a href='<?=$this->url->create("dice?rollDice")?>'>Kasta tärning</a></li>
</ul>
