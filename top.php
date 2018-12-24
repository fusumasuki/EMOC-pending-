<?php
session_start();  
?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
            <h1> 映画リスト </h1>
            <table>
            <tr>
            <td>タイトル</td>
            <td><b>ワクワク度 </b></td>
            <td><b>ほっこり度</b></td>
            <td><b>ドキドキ度</b></td>
            <td><b>しょんぼり度</b></td>
            <td><b>イライラ度</b></td></tr>

            <?php
                function h($str) { return htmlspecialchars($str, ENT_QUOTES, "UTF-8"); }
            $db = new PDO("sqlite:movie.sqlite");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $result=$db->prepare("SELECT * FROM evaluation where user_id=?");
            $result->execute(array($_SESSION["id"]));
                for($i = 0; $row=$result->fetch(); ++$i ){  
                    $title=$db->prepare("SELECT * FROM movie where id = ?");
            $title->execute(array($row['movie_id']));
                for($i = 0; $row2=$title->fetch(); ++$i ){          
                    echo "<tr>";
                    echo "<td>". h($row2['title']). "</td>";
                    echo "<td>". h($row['excite']). "</td>";
                    echo "<td>". h($row['relax']). "</td>";
                    echo "<td>". h($row['fear']). "</td>";
                    echo "<td>". h($row['sad']). "</td>";
                    echo "<td>". h($row['anger']). "</td>";
                    echo "</tr>";
            }
        }
            ?>
            </table>   
            <a href="search.php">記事投稿</a>          
            </body>
            </html>
            