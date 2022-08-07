<?php /**
 * Admin Panel General Setting.
 * @package Shila */
if($_POST['shila_backtop'] != ''){
    update_option( 'shila_backtop', $_POST['shila_backtop'] );
} if($_POST['shila_excerpt'] != ''){
    update_option('shila_excerpt', $_POST['shila_excerpt']);
} ?>
<div class="shila_admin_container">
    <h2 class="shila_setting">General Setting</h2>
    <form action="" method="post" class="shila_general">
        <table>
            <tbody>
                <tr>
                    <td><label for="shila_backtop">Back to Top :</label></td>
                    <td>
                        <select name="shila_backtop" id="shila_backtop">
                            <option value=""> Chose </option>
                            <option value="active" <?php if(get_option('shila_backtop') == 'active'){ echo 'selected';} ?>>Active</option>
                            <option value="false" <?php if(get_option('shila_backtop') == 'false'){ echo 'selected';} ?>>Non Active</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="shila_excerpt">Excerpt Length :</label></td>
                    <td><input type="text" name="shila_excerpt" id="shila_excerpt" value="<?php echo get_option('shila_excerpt'); ?>"></td>
                </tr>
                <tr>
                    <td><input class="tombol_save" type="submit" value="Save"></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>