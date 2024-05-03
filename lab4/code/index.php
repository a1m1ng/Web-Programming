<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Лаба 4</title>
</head>
<body>
    <div id="form">
        <form action="save.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" required>
            <label for="category">Category</label>
            <select name="category" required>
                <?php
                $categories = ['bicycle', 'bike', 'cars', 'moped'];
                foreach ($categories as $category){
                    echo "<option value=\"{$category}\">{$category}</option>";
                }
                ?>
            </select>
            <label for="title">Title</label>
            <input type="text" name="title" required>
            <label for="description">Description</label>
            <textarea rows="3" name="description"></textarea>
            <input type="submit" value="Save">
        </form>
    </div>
    <div id="table">
        <table>
            <thead>
                <th>Category</th>
                <th>Email</th>
                <th>Title</th>
                <th>Description</th>
            </thead>
            <tbody>
            <?php
            $idSheet = "1pKPjQmN1Oj58rGlcJbdkSrGtDmBG_Ur5PCUL7YADzsI";
            $csv = file_get_contents('https://docs.google.com/spreadsheets/d/'.$idSheet.'/export?format=csv');
            $csv = explode("\r\n", $csv);
            $array = array_map('str_getcsv', $csv);
            foreach (array_slice($array, 1) as $r) {
                echo "<tr>";
                    foreach ($r as $item) {
                        echo "<td>$item</td>";
                    }
                echo "</tr>";
            }
            ?>

            </tbody>
        </table>
    </div>

</body>
</html>