<html>
    <head>
        <title>JavaScript</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/css.css">
        <script src="js/js.js"></script>
    </head>
    <body>
        <div class="head"><div class="name">JavaScript</div></div> 
        <div style="padding: 25px;"></div>
        <div class="vidstup">
        <table>
            <tr>
                <td style="vertical-align: top;">
                
                <div class="content_block">
                <a href="js_if_else.php"><li><b>Розгалуження</b></li></a>
                <a href="js_if_else_rand.php"><li><b>Розгалуження (рандом)</b></li></a>
                <a href="js_while_for_rand.php"><li><b>Цикли (рандом)</b></li></a>
                </div>
                
                </td>
                
                <td style="vertical-align: top;">
                
                
                    <center class="rozd"><p><b style="font-size: 22px;">Роки, починаючи з <script>document.write(year);</script> до 2021</b><br>(Цикли)</p>
                    
                    <div id="link"><b>Рандомний рік: <script>document.write(year);</script></b></div>
                    
                    <script>
                        for (; year <= 2021; year++) { 
                            document.write('<span id="link">'+year+'</span> ');
                        }
                    </script>
                    
                </td>
            </tr>
        </table> 
        </div>
        <div class="foot">
            <a href="index.html">Головна</a>
            <a href="contact.html">Контакти</a>
            <a href="js_if_else.html">JavaScript</a>
            <p><b>&copy; Роман Бойчук</b>, Матем-21</p>
        </div>
    </body> 
</html>
