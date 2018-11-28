<html>
<head>
    <title>Formulier</title>
    <link href="form.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <nav>
        <a href="./index.php">Er heerst paniek</a>
        <a href="./onkunde.php">Onkunde</a>
    </nav>
    <form method="post" action="paniek.php">
        <p>
            <label>welk dier zou je nooit als huisdier willen hebben?</label>
            <input type="text" name="pet" />
        </p>
    
        <p>
            <label>Wie is de belangerijkste persoon in je leven?</label>
            <input type="text" name="person" />
        </p>
        <p>
            <label>In welk land zou je graag willen wonen?</label>
            <input type="text" name="land" />
        </p>
        <p>
            <label>Wat doe je als je je verveeld?</label>
            <input type="text" name="borred" />
        </p>
        <p>
            <label>Met welk speelgoed speelde ja als kind het meest?</label>
            <input type="text" name="toy" />
        </p>
        <p>
            <label>Bij welke docent spijbel je het liefst?</label>
            <input type="text" name="school" />
        </p>
        <p>
            <label>als je €100.000,- had, wat zou je kopen?</label>
            <input type="text" name="money" />
        </p>
        <p>
            <label>Wat is je favoriete bezigheid?</label>
            <input type="text" name="time" />
        </p>
    
        <p>
            <label>&nbsp;</label>
            <input type="submit" value="Versturen" />
        </p>
    </form>
</body>
</html>