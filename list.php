<?php

    include 'config.php';

    $sql = "SELECT * FROM task";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            ?>
             <li>
                    <span class="text"><?php echo $row['title']; ?></span>
                    <span  class="removeBtn icon" data-id = "<?php echo $row['id']; ?>">D</span>
                </li>

                <?php
               
            }
            echo '<div class="pending-text">You have ' . mysqli_num_rows($result) . ' pending task.</div>';
    }else{
        echo '<li><span class="text">No Record available</span></li>';
    }
?>