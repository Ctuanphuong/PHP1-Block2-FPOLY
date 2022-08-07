<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="n-n.php" method="GET">
      <label for="">Họ tên</label>
      <input type="text" name="name" placeholder="Nhập họ tên..." />
      <br />
      <label for="">Sở thích:</label>
      <fieldset>
        <input type="checkbox" name="sothich[]" value="1" />Bóng đá <br>
        <input type="checkbox" name="sothich[]" value="2" />Nghe nhạc <br>
        <input type="checkbox" name="sothich[]" value="3" />Bơi lội <br>
        <input type="checkbox" name="sothich[]" value="4" />Xem phim <br>
      </fieldset>
      <br />
      <label for="">Quốc tịch:</label>
      <select name="quoctich[]" multiple id="">
        <option value="84">Việt Nam</option>
        <option value="49">Đức</option>
        <option value="39">Italy</option>
        <option value="351">Portugal</option>
      </select>
      <br>
      <button type="submit">Submit</button>
    </form>
  </body>
</html>
