
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>csv化テスト</title>
<link type="text/css" rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="js/script.js"></script>
</head>
<body>
  <div class="container">
    <h1>tableをcsvに</h1>
    <div id="table">
        <table>
                                      <tr>
                                        <th>時間枠</th>
                                        <th>時間(各2時間)</th>
                                        <th>平日</th>
                                        <th>土・日・祝</th>
                                      </tr>
                                      <tr>
                                        <td>1</td>
                                        <td>9:30-11:30</td>
                                        <td>8,000円</td>
                                        <td>10,000円</td>
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>11:30-13:30</td>
                                        <td>8,000円</td>
                                        <td>10,000円</td>
                                      </tr>
                                      <tr>
                                        <td>3</td>
                                        <td>13:30-15:30</td>
                                        <td>8,000円</td>
                                        <td>12,000円</td>
                                      </tr>
                                      <tr>
                                        <td>4</td>
                                        <td>15:30-17:30</td>
                                        <td>8,000円</td>
                                        <td>12,000円</td>
                                      </tr>
                                      <tr>
                                        <td>5</td>
                                        <td>17:30-19:30</td>
                                        <td>8,000円</td>
                                        <td>12,000円</td>
                                      </tr>
                                      <tr>
                                        <td>6</td>
                                        <td>19:30-21:30</td>
                                        <td>8,000円</td>
                                        <td>12,000円</td>
                                      </tr>
                                    </table>
    </div>
    
    <button id="convert" type="button">変換</button>
    <form id="convertform" action="csv.php" method="post">
      <input id="tabledata" type="hidden" name="data" value=""/>
      <input id="toconvert" type="submit" value="ダウンロード"/>
    </form>

  </div>


</body>
</html>