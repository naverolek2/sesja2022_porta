<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <div id="calosc">
    <main>
        <div id="gora">
            <h3>Ryby zamieszkujące rzeki</h3>
            <!-- Skrypt 1 -->
            <?php
            $db = new mysqli('localhost', 'root', '', 'wedkowanie2');
            $q = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby INNER JOIN lowisko ON lowisko.Ryby_id = ryby.id WHERE lowisko.rodzaj = 3;";
            $result = $db->query($q);
            echo "<ol>";
            while ($row = mysqli_fetch_row($result)) {
                echo "<li>$row[0] $row[1] $row[2]</li>";
            }
            echo "</ol>";
            ?>
            
        </div>
        <div id="dol">
            <h3>Ryby drapieżne naszych wód</h3>
            <table>
                <tr>
                    <th>L.p</th>
                    <th>Gatunek</th>
                    <th>Wystepowanie</th>
                </tr>
                <!-- Skrypt 2 -->
            <?php
            $q = "SELECT ryby.id, ryby.nazwa, ryby.wystepowanie FROM ryby where ryby.styl_zycia = 1;";
            $result = $db->query($q);
            while ($row = mysqli_fetch_row($result)) {
                echo "<tr><td>$row[0]</td> <td>$row[1]</td> <td>$row[2]</td></tr>";
            }

            $db->close();
            ?>
        
            </table>
        </div>
    </main>
    <aside>
        <img src="ryba1.jpg" alt="Sum"><br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </aside>

    </div>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>