<?php /**
 * Admin Panel General Setting.
 * @package Shila */
$shila_backtop = get_option( 'shila_backtop' );
$shila_excerpt = get_option( 'shila_excerpt' );
if($_POST['shila_backtop'] != ''){
    update_option( 'shila_backtop', $_POST['shila_backtop'] );
} if($_POST['shila_excerpt'] != ''){
    update_option('shila_excerpt', $_POST['shila_excerpt']);
} ?>
<h2 class="shila_setting">General Setting</h2>
<form action="" method="post" class="shila_general">
    <div class="shila_select">
        <label for="shila_backtop">Back to Top</label>
        <select name="shila_backtop" id="shila_backtop">
            <option value=""> Chose </option>
            <option value="active" <?php if($shila_backtop == 'active'){ echo 'selected';} ?>>Active</option>
            <option value="false" <?php if($shila_backtop == 'false'){ echo 'selected';} ?>>Non Active</option>
        </select>
    </div>
    <div class="shila_excerpt">
        <label for="shila_excerpt">The Excerpt Length</label>
        <input type="text" name="shila_excerpt" id="shila_excerpt" value="<?php echo $shila_excerpt; ?>">
    </div>
    <input type="submit" value="Save">
</form>