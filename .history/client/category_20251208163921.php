<select class="form-control" name="category" id="category">
    <option value="">Select A Category</option>
    <?php
include('./configuration/db.php');
$query="select * from category";
$result=$conn->query($query);
foreach($result as $row){
    echo $name=$row['name'];
    echo $id=$row['id'];
}
    ?>
</select>