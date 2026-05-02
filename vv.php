foreach ($to as $t):
                ?>
                <input type="radio" name="grn" value="<?php echo $t ?>" 
                <?php if(isset($_POST["grn"]) and $_POST["grn"]==$t) echo "checked" ?>
                <?php echo $t?>><?php echo $t ?>
                <?php endforeach  ?>