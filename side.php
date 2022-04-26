<div class="card mt-5">
    <div class="card-header">Popular News</div>
    <div class="card-bordy p-0 ">
        <div class="list-group list-group-flash">
            <?php
            $data=mysqli_query($connect,"select * from posts ORDER BY views DESC LIMIT 10");
            while($row=mysqli_fetch_array($data)){
                $title=$row['title'];
                echo "<a href='' class='list-group-item list-group-item-action small text-truncate'>$title</a>";
            }
                ?>
        </div>
    </div>
</div>