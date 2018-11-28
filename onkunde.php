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
    <form method="post" action="text.php">
        <p>
            <label>Wat zou je graag willen kunnen?</label>
            <input type="text" name="can" />
        </p>
    
        <p>
            <label>Met welke persoon kun je goed opschieten?</label>
            <input type="text" name="per" />
        </p>
        <p>
            <label>Wat is je favoriete getal?</label>
            <input type="text" name="num" />
        </p>
        <p>
            <label>Wat heb je altijd bij je als je op vakantie gaat?</label>
            <input type="text" name="holliday" />
        </p>
        <p>
            <label>Wat is je beste persoonlijke eigenshap?</label>
            <input type="text" name="good" />
        </p>
        <p>
            <label>Wat is je slechtste persoonlijke eigenshap?</label>
            <input type="text" name="bad" />
        </p>
        <p>
            <label>Wat is het ergste dat je kan overkomen?</label>
            <input type="text" name="worest" />
        </p>
   
        <p>
            <label>&nbsp;</label>
            <input type="submit" value="Versturen" />
        </p>
    </form>
</body>
</html>