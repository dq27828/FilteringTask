<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="filtering.php" method="POST">  
        <h2>Filter reviews </h2>
    <label for="rating">Order by rating:</label>
        <select name="rating" id="rating">
            <option value="highest" <?php if(isset($_POST['rating']) && $_POST['rating'] == "highest") {echo "selected";} ?> >Highest first</option>
            <option value="lowest" <?php if(isset($_POST['rating']) && $_POST['rating'] == "lowest") {echo "selected";} ?>>Lowest first</option>
        </select>

    <label for="mrating">Minimum rating</label>
        <select name="mrating" id="mrating">
            <option value="1" <?php if(isset($_POST['mrating']) && $_POST['mrating'] == "1") {echo "selected";} ?>>1</option>
            <option value="2" <?php if(isset($_POST['mrating']) && $_POST['mrating'] == "2") {echo "selected";} ?>>2</option>
            <option value="3" <?php if(isset($_POST['mrating']) && $_POST['mrating'] == "3") {echo "selected";} ?>>3</option>
            <option value="4" <?php if(isset($_POST['mrating']) && $_POST['mrating'] == "4") {echo "selected";} ?>>4</option>
            <option value="5" <?php if(isset($_POST['mrating']) && $_POST['mrating'] == "5") {echo "selected";} ?>>5</option>
        </select>

    <label for="date">Order by date</label>
        <select name="date" id="date">
            <option value="newest" <?php if(isset($_POST['date']) && $_POST['date'] == "newest") {echo "selected";} ?> >Newest first</option>
            <option value="oldest" <?php if(isset($_POST['date']) && $_POST['date'] == "oldest") {echo "selected";} ?>>Oldest first</option>
        </select>

    <label for="text">Prioritize by text</label>
        <select name="text" id="text">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
        <input type="submit" name="filter" value="Filter">
    </form>

    
</body>
</html>