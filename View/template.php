<?php

foreach ($rows as $el){
    echo $el['name'].'</br>';
    echo '<a href="edit.php?id='.$el['id'].'">Edit</a></br>';
    echo '<a href="delete.php?id='.$el['id'].'">Delete</a></br>';
}