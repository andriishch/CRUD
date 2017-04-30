<!-- Удаляем -->
<h1>Удаляем</h1>
<form action="delete.php?id=<?php echo $id;?>" method="post">
    <label for="name">Name:</label> <input type="text" name="name" value="<?=$row['name'];?>"><br>
    <label for="description:">Description</label><input type="text" name="description" value="<?=$row['description'];?>"><br>
    <label for="created_at:">Creat</label><input type="text" name="created_at" value="<?=$row['created_at'];?>"><br>
    <input type="hidden" name="id" value="<?php echo $id; ?>"
    <br>
    <input type="submit" value="Delete me">
</form>