<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Практическое задание. Старт в PHP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
  <div>
    <h4>Таблица истинности PHP</h4>
    <table class="table table-bordered">
      <tr id="col">
        <th scope="col">A</th>
        <th scope="col">B</th>
        <th scope="col">!A</th>
        <th scope="col">A || B</th>
        <th scope="col">A && B</th>
        <th scope="col">A xor B</th>
      </tr>
      </thead>
      <tbody>
        <tr>
          <td>0</td>
          <td>0</td>
          <td>
            <?php
            $a = 0;
            echo !$a;    // 0 это false, с оператором не будет true, это 1
            ?>
          </td>
          <td>
            <?php $a = 0;
            $b = 0;
            echo $a || $b; // а = 0 и b = 0, вернет = 0, а 0 это false или пустая строка
            ?>
          </td>
          <td>
            <?php $a = 0;
            $b = 0;
            echo $a && $b; // а = 0 и b = 0, вернет = 0, а 0 это false или пустая строка
            ?>
          </td>
          <td>
            <?php $a = 0;
            $b = 0;
            echo $a xor $b; // а = 0 и b = 0, вернет = 0, а 0 это false или пустая строка
            ?>
          </td>
        </tr>
        <tr>
          <td>0</td>
          <td>1</td>
          <td>
            <?php
            $a = 0;
            echo !$a;    // 0 это false, с оператором не будет true, это 1
            ?>
          </td>
          <td>
            <?php $a = 0;
            $b = 1;
            echo $a || $b; // а = 0 и b = 1, вернет = 1
            ?>
          </td>
          <td>
            <?php $a = 0;
            $b = 1;
            echo $a && $b; // а = 0 и b = 1, вернет = 0
            ?>
          </td>
          <td>
            <?php $a = 0;
            $b = 1;
            echo $a xor $b; // а = 0 и b = 1, вернет = 1
            ?>
          </td>
        </tr>
        <tr>
          <td>1</td>
          <td>0</td>
          <td>
            <?php
            $a = 1;
            echo !$a;    // вернет 0 или пустая строка
            ?>
          </td>
          <td>
            <?php $a = 1;
            $b = 0;
            echo ($a || $b); // а = 1 и b = 0, вернет = 1
            ?>
          </td>
          <td>
            <?php $a = 1;
            $b = 0;
            echo ($a && $b); // а = 1 и b = 0, вернет = 0
            ?>
          </td>
          <td>
            <?php $a = 1;
            $b = 0;
            echo ($a xor $b); // а = 1 и b = 0, вернет = 1
            ?>
        </tr>
        <tr>
          <td>1</td>
          <td>1</td>
          <td>
            <?php
            $a = 1;
            echo !$a;    // вернет 0 или пустая строка
            ?>
          </td>
          <td>
            <?php $a = 1;
            $b = 1;
            echo ($a || $b); // а = 1 и b = 1, вернет = 1
            ?>
          </td>
          <td>

            <?php
            $a = 1;
            $b = 1;
            echo ($a && $b);    // вернет = 1, потому что оба true
            ?>
          </td>
          <td>
            <?php $a = 1;
            $b = 1;
            echo ($a xor $b); // а = 1 и b = 1, вернет = 0
            ?>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div>
    <h4>Гибкое сравнение в PHP</h4>
    <table class="table table-bordered">
      <tr id="col">
        <td></td>
        <td>true</td>
        <td>false</td>
        <td>1</td>
        <td>0</td>
        <td>-1</td>
        <td>"1"</td>
        <td>null</td>
        <td>"php"</td>
      </tr>
      </thead>

      <tr>
        <td id="col">true</td>
        <td>
          <?php echo true == true; ?>
        </td>
        <td>
          <?php echo true == false; ?>
        </td>
        <td>
          <?php echo true == 1; ?>
        </td>
        <td>
          <?php echo true == 0; ?>
        </td>
        <td>
          <?php echo true == -1; ?>
        </td>
        <td>
          <?php echo true == "1"; ?>
        </td>
        <td>
          <?php echo true == null; ?>
        </td>
        <td>
          <?php echo true == "php"; ?>
        </td>
      </tr>
      <tr>
        <td id="col">false</td>
        <td>
          <?php echo false == true; ?>
        </td>
        <td>
          <?php echo false == false; ?>
        </td>
        <td>
          <?php echo false == 1; ?>
        </td>
        <td>
          <?php echo false == 0; ?>
        </td>
        <td>
          <?php echo false == -1; ?>
        </td>
        <td>
          <?php echo false == "1"; ?>
        </td>
        <td>
          <?php echo false == null; ?>
        </td>
        <td>
          <?php echo false == "php"; ?>
        </td>
      </tr>
      <tr>
        <td id="col">1</td>
        <td>
          <?php echo 1 == true; ?>
        </td>
        <td>
          <?php echo 1 == false; ?>
        </td>
        <td>
          <?php echo 1 == 1; ?>
        </td>
        <td>
          <?php echo 1 == 0; ?>
        </td>
        <td>
          <?php echo 1 == -1; ?>
        </td>
        <td>
          <?php echo 1 == "1"; ?>
        </td>
        <td>
          <?php echo 1 == null; ?>
        </td>
        <td>
          <?php echo 1 == "php"; ?>
        </td>
      </tr>
      <tr>
        <td id="col">0</td>
        <td>
          <?php echo 0 == true; ?>
        </td>
        <td>
          <?php echo 0 == false; ?>
        </td>
        <td>
          <?php echo 0 == 1; ?>
        </td>
        <td>
          <?php echo 0 == 0; ?>
        </td>
        <td>
          <?php echo 0 == -1; ?>
        </td>
        <td>
          <?php echo 0 == "1"; ?>
        </td>
        <td>
          <?php echo 0 == null; ?>
        </td>
        <td>
          <?php echo 0 == "php"; ?>
        </td>
      </tr>
      <tr>
        <td id="col">-1</td>
        <td>
          <?php echo -1 == true; ?>
        </td>
        <td>
          <?php echo -1 == false; ?>
        </td>
        <td>
          <?php echo -1 == 1; ?>
        </td>
        <td>
          <?php echo -1 == 0; ?>
        </td>
        <td>
          <?php echo -1 == -1; ?>
        </td>
        <td>
          <?php echo -1 == "1"; ?>
        </td>
        <td>
          <?php echo -1 == null; ?>
        </td>
        <td>
          <?php echo -1 == "php"; ?>
        </td>
      </tr>
      <tr>
        <td id="col">"1"</td>
        <td>
          <?php echo "1" == true; ?>
        </td>
        <td>
          <?php echo "1" == false; ?>
        </td>
        <td>
          <?php echo "1" == 1; ?>
        </td>
        <td>
          <?php echo "1" == 0; ?>
        </td>
        <td>
          <?php echo "1" == -1; ?>
        </td>
        <td>
          <?php echo "1" == "1"; ?>
        </td>
        <td>
          <?php echo "1" == null; ?>
        </td>
        <td>
          <?php echo "1" == "php"; ?>
        </td>
      </tr>
      <tr>
        <td id="col">null</td>
        <td>
          <?php echo null == true; ?>
        </td>
        <td>
          <?php echo null == false; ?>
        </td>
        <td>
          <?php echo null == 1; ?>
        </td>
        <td>
          <?php echo null == 0; ?>
        </td>
        <td>
          <?php echo null == -1; ?>
        </td>
        <td>
          <?php echo null == "1"; ?>
        </td>
        <td>
          <?php echo null == null; ?>
        </td>
        <td>
          <?php echo null == "php"; ?>
        </td>
      </tr>
      <tr>
        <td id="col">"php"</td>
        <td>
          <?php echo "php" == true; ?>
        </td>
        <td>
          <?php echo "php" == false; ?>
        </td>
        <td>
          <?php echo "php" == 1; ?>
        </td>
        <td>
          <?php echo "php" == 0; ?>
        </td>
        <td>
          <?php echo "php" == -1; ?>
        </td>
        <td>
          <?php echo "php" == "1"; ?>
        </td>
        <td>
          <?php echo "php" == null; ?>
        </td>
        <td>
          <?php echo "php" == "php"; ?>
        </td>
      </tr>
    </table>
    <span>
      Гибкое сравнение - сначала значения пытаются преобразовывать к одному типу и тогда уже сравнивать, например строка "1" будет равна числу 1 или булевому true, также как false равно 0 или null.
    </span>
  </div>
  <div>
    <h4>Жёсткое сравнение в PHP</h4>

    <table class="table table-bordered">

      <tr id="col">
        <td></td>
        <td>true</td>
        <td>false</td>
        <td>1</td>
        <td>0</td>
        <td>-1</td>
        <td>"1"</td>
        <td>null</td>
        <td>"php"</td>
      </tr>
      </thead>

      <tr>
        <td id="col">true</td>
        <td>
          <?php echo true === true; ?>
        </td>
        <td>
          <?php echo true === false; ?>
        </td>
        <td>
          <?php echo true === 1; ?>
        </td>
        <td>
          <?php echo true === 0; ?>
        </td>
        <td>
          <?php echo true === -1; ?>
        </td>
        <td>
          <?php echo true === "1"; ?>
        </td>
        <td>
          <?php echo true === null; ?>
        </td>
        <td>
          <?php echo true === "php"; ?>
        </td>
      </tr>
      <tr>
        <td id="col">false</td>
        <td>
          <?php echo false === true; ?>
        </td>
        <td>
          <?php echo false === false; ?>
        </td>
        <td>
          <?php echo false === 1; ?>
        </td>
        <td>
          <?php echo false === 0; ?>
        </td>
        <td>
          <?php echo false === -1; ?>
        </td>
        <td>
          <?php echo false === "1"; ?>
        </td>
        <td>
          <?php echo false === null; ?>
        </td>
        <td>
          <?php echo false === "php"; ?>
        </td>
      </tr>
      <tr>
        <td id="col">1</td>
        <td>
          <?php echo 1 === true; ?>
        </td>
        <td>
          <?php echo 1 === false; ?>
        </td>
        <td>
          <?php echo 1 === 1; ?>
        </td>
        <td>
          <?php echo 1 === 0; ?>
        </td>
        <td>
          <?php echo 1 === -1; ?>
        </td>
        <td>
          <?php echo 1 === "1"; ?>
        </td>
        <td>
          <?php echo 1 === null; ?>
        </td>
        <td>
          <?php echo 1 === "php"; ?>
        </td>
      </tr>
      <tr>
        <td id="col">0</td>
        <td>
          <?php echo 0 === true; ?>
        </td>
        <td>
          <?php echo 0 === false; ?>
        </td>
        <td>
          <?php echo 0 === 1; ?>
        </td>
        <td>
          <?php echo 0 === 0; ?>
        </td>
        <td>
          <?php echo 0 === -1; ?>
        </td>
        <td>
          <?php echo 0 === "1"; ?>
        </td>
        <td>
          <?php echo 0 === null; ?>
        </td>
        <td>
          <?php echo 0 === "php"; ?>
        </td>
      </tr>
      <tr>
        <td id="col">-1</td>
        <td>
          <?php echo -1 === true; ?>
        </td>
        <td>
          <?php echo -1 === false; ?>
        </td>
        <td>
          <?php echo -1 === 1; ?>
        </td>
        <td>
          <?php echo -1 === 0; ?>
        </td>
        <td>
          <?php echo -1 === -1; ?>
        </td>
        <td>
          <?php echo -1 === "1"; ?>
        </td>
        <td>
          <?php echo -1 === null; ?>
        </td>
        <td>
          <?php echo -1 === "php"; ?>
        </td>
      </tr>
      <tr>
        <td id="col">"1"</td>
        <td>
          <?php echo "1" === true; ?>
        </td>
        <td>
          <?php echo "1" === false; ?>
        </td>
        <td>
          <?php echo "1" === 1; ?>
        </td>
        <td>
          <?php echo "1" === 0; ?>
        </td>
        <td>
          <?php echo "1" === -1; ?>
        </td>
        <td>
          <?php echo "1" === "1"; ?>
        </td>
        <td>
          <?php echo "1" === null; ?>
        </td>
        <td>
          <?php echo "1" === "php"; ?>
        </td>
      </tr>
      <tr>
        <td id="col">null</td>
        <td>
          <?php echo null === true; ?>
        </td>
        <td>
          <?php echo null === false; ?>
        </td>
        <td>
          <?php echo null === 1; ?>
        </td>
        <td>
          <?php echo null === 0; ?>
        </td>
        <td>
          <?php echo null === -1; ?>
        </td>
        <td>
          <?php echo null === "1"; ?>
        </td>
        <td>
          <?php echo null === null; ?>
        </td>
        <td>
          <?php echo null === "php"; ?>
        </td>
      </tr>
      <tr>
        <td id="col">"php"</td>
        <td>
          <?php echo "php" === true; ?>
        </td>
        <td>
          <?php echo "php" === false; ?>
        </td>
        <td>
          <?php echo "php" === 1; ?>
        </td>
        <td>
          <?php echo "php" === 0; ?>
        </td>
        <td>
          <?php echo "php" === -1; ?>
        </td>
        <td>
          <?php echo "php" === "1"; ?>
        </td>
        <td>
          <?php echo "php" === null; ?>
        </td>
        <td>
          <?php echo "php" === "php"; ?>
        </td>
      </tr>
    </table>
    <span>
      Жесткое сравнении - сравнение идет сначала по типу, а потом уже по значению.
    </span>
  </div>
</body>

</html>