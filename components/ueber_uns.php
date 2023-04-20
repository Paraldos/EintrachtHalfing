<?php 

class Vorstand {
    function __construct(public string $name, public string $position) {}
}

$Vorstaende = [
    new Vorstand("Paul Anner jun.", "1. Schützenmeister"),
    new Vorstand("Christa Schuster", "2. Schützenmeister"),
    new Vorstand("Corinna Hillbrecht", "1. Kassier"),
    new Vorstand("Claus Kaulisch", "2. Kassier / Beisitzer"),
    new Vorstand("Doris Beyer", "SChriftführer"),
    new Vorstand("Thomas Anner", "Sportleiter"),
    new Vorstand("Benedikt Leitgeb", "Fähnrich"),
    new Vorstand("Josef Lipp", "Zeugwart"),
    new Vorstand("Marc Beyer", "Jugendleiter"),
    new Vorstand("Christa Schuster", "Damenleiterin"),
    new Vorstand("Sepp Schuster sen.", "Ehrenschützenmeister"),
    new Vorstand("Hans Aicher", "Ehrenschützenmeister"),
];

?>

<section id="ueber_uns">
    <h1>Über Uns</h1>

    <article>
        <img class="unser_logo" src="./img/Logo_SGHalfing.png" alt="" />
    </article>

    <article id="mitmachen">
        <h2>Mitmachen</h2>
        <p>
        Sie finden uns in der "Heinrich-Beslmeisl-Halle" in der Holzhamer
        Straße 6. Über den Seiteneingang im Angerweg kommen Sie über die
        Treppe in den Keller zu uns.
        </p>
        <p>Von Oktober bis Ostern schießen wir regelmäßig Freitags.</p>
        <p>- Schüler und Jugendliche ab 17:30 Uhr</p>
        <p>- Schützen ab 19:00 Uhr</p>
        <p>
        Neulinge und solche, die es werden wollen, sind immer Willkommen
        </p>
    </article>
    
    <article id="vorstand">
        <h2>Vorstand</h2>

        <figure>
            <img src="./img/vorstand_small.jpg" alt="Foto des Vorstands 2019" />
            <figcaption>Bild von 2019</figcaption>
        </figure>
        <div class="grid_vorstand">
            <?php foreach ($Vorstaende AS $vorstand) :?>
                <div>
                    <p><?php echo $vorstand->name ?></p>
                    <p><?php echo $vorstand->position ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </article>

    <article id="vereinsfoto">
        <h2>Vereinsfoto</h2>
        <h4>
        Aufgenommen anlässlich der 50 jährigen Fahnenweihe im Jahr 2017
        </h4>
        <figure>
            <img src="./img/vereinsfoto_small.jpg" alt="Vereinsfoto von 2017" />
            <figcaption>Veröffentlichung mit freundlicher Genehmigung der Firma Foto Winkler</figcaption>
        </figure>
    </article>

    <article id="freunde">
        <h2>Freunde und Bekannte</h2>
        <ul>
        <li>
            <a href="http://www.chiemgau-prien.de/"
            ><img src="./img/Logo_GauChimgau.png" alt="" />
            <p>Schützengau Chiemgau Prien</p>
            </a>
        </li>
        <li>
            <a href="https://www.halfing.de/startseite-halfing"
            ><img src="./img/Logo_Halfing.png" alt="" />
            <p>Gemeinde Halfing</p>
            </a>
        </li>
        <li>
            <a href="http://www.jungschuetzen-eggstaett.de/"
            ><img src="./img/Logo_JungschuetzenEggstaett.png" alt="" />
            <p>Jungschützen Eggstätt</p>
            </a>
        </li>
        </ul>
    </article>

</section>