<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Лаба 3 №3</title>
</head>
<body>
    <div id="form">
        <form action="save.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" required>
            <label for="category">Category</label>
            <select name="category" required>
                <?php
                $dir = opendir('categories');
                while($file = readdir($dir)) {
                    if (is_dir('categories/'.$file) && $file != '.' && $file != '..') {
                        echo "<option value=\"{$file}\">{$file}</option>";
                    }
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
            $dir = opendir('categories');
            while($category = readdir($dir)) {
                if (is_dir('categories/'.$category) && $category != '.' && $category != '..') {
                    $dir2 = opendir('categories/'.$category);
                    while($email = readdir($dir2)) {
                        if (is_dir('categories/'.$category . '/' . $email) && $email != '.' && $email != '..') {
                            $dir3 = opendir('categories/'.$category . '/' . $email);

                            while($title = readdir($dir3)) {
                                if (false === is_dir('categories/' . $category . '/' . $email . '/' . $title) && $title != '.' && $title != '..') {
                                    $description = file_get_contents('categories/' . $category . '/' . $email . '/' . $title, 'r');

                                    $title = explode('.', $title)[0];
                                    echo "<tr>";
                                    echo "<td>$category</td>";
                                    echo "<td>$email</td>";
                                    echo "<td>$title</td>";
                                    echo "<td>$description</td>";
                                    echo "</tr>";

                                }
                            }
                        }
                    }
                }
            }

            ?>
            </tbody>
        </table>
    </div>

</body>
</html>