<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twoje BMI</title>
    <link rel="stylesheet" href="styl3.css">
</head>

<body>
    <div id="naglowek">
        <div id="logo">
            <img src="wzor.png" alt="wzór BMI">
        </div>

        <div id="baner">
            <h1>Oblicz swoje BMI</h1>
        </div>
    </div>

    <div id="gluwny">
        <table>
            <tr>
                <th>Interptetacja BMI</th>
                <th>Wartość minimalna</th>
                <th>Wartość maksymalna</th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </table>

    </div>

    <div id="podzial">

        <div id="lewy">Podaj wagę i wzrost
            <form action="bmi.php" method="post">
                Waga: <input type="number" min="1" name="waga">
                Wzrost: <input type="number" min="1" name="wzrost">
                <button type="submit">Oblicz i zapamientaj wynik</button>
            </form>
        </div>

        <div id="prawy"><img src="rys1.png" alt="cwiczenia"></div>

    </div>

    <div id="stopka">Autor: 86123019619 <a href="kwerendy.txt">Zobacz kwerendy</a></div>



</body>

</html>