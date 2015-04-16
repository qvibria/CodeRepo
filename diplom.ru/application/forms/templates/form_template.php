<form action="<?php echo $action; ?>" 
      method="<?php echo $method; ?>">
    <?php
    foreach($fields as $field){
        $field->render();
    }
    ?>
</form>

