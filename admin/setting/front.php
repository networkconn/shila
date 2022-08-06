<?php /**
 * Front Page Setting for Shila Theme.
 * @package Shila */
if($_POST['shila_hero'] != ''){
    update_option('shila_hero', $_POST['shila_hero']);
} if($_POST['shila_sec_1'] != ''){
    update_option('shila_sec_1', $_POST['shila_sec_1']);
} if($_POST['shila_sec_2'] != ''){
    update_option('shila_sec_2', $_POST['shila_sec_2']);
} if($_POST['shila_sec_3'] != ''){
    update_option('shila_sec_3', $_POST['shila_sec_3']);
} if($_POST['shila_sec_4'] != ''){
    update_option('shila_sec_4', $_POST['shila_sec_4']);
} if($_POST['shila_sec_5'] != ''){
    update_option('shila_sec_5', $_POST['shila_sec_5']);
} if($_POST['shila_sec_6'] != ''){
    update_option('shila_sec_6', $_POST['shila_sec_6']);
} if($_POST['shila_sec_7'] != ''){
    update_option('shila_sec_7', $_POST['shila_sec_7']);
} if($_POST['shila_sec_8'] != ''){
    update_option('shila_sec_8', $_POST['shila_sec_8']);
} if($_POST['shila_sec_9'] != ''){
    update_option('shila_sec_9', $_POST['shila_sec_9']);
} ?>
<h2 class="shila_setting">Front Page Setting</h2>
<form action="" method="post" class="sila_front">
    <!-- Hero Chose -->
    <section>
        <label for="shila_hero">Hero Active?</label>
        <select name="shila_hero" id="shila_hero">
            <option value=""> Select </option>
            <option value="active" <?php if(get_option('shila_hero') == 'active'){echo 'selected';} ?>>Active</option>
            <option value="false" <?php if(get_option('shila_hero') == 'false'){echo 'selected';} ?>>Non Active</option>
        </select>
    </section>

    <!-- Section 1 -->
    <section>
        <label for="shila_sec_1">Section 1</label>
        <select name="shila_sec_1" id="shila_sec_1">
            <option value="false" <?php if(get_option('shila_sec_1') == 'false'){
                echo 'selected';
            } ?>>false</option>
            <?php
                $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                    <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                        <?php if(get_option('shila_sec_1') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                            echo 'selected';
                        } ?>>
                        <?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                    </option>
                <?php } ?>
        </select>
    </section>

    <!-- Section 2 -->
    <section>
        <label for="shila_sec_2">Section 2</label>
        <select name="shila_sec_2" id="shila_sec_2">
            <option value="false" <?php if(get_option('shila_sec_2') == 'false'){
                echo 'selected';
            } ?>>false</option>
            <?php
                $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                    <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                        <?php if(get_option('shila_sec_2') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                            echo 'selected';
                        } ?>>
                        <?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                    </option>
                <?php } ?>
        </select>
    </section>

    <!-- Section 3 -->
    <section>
        <label for="shila_sec_3">Section 3</label>
        <select name="shila_sec_3" id="shila_sec_3">
            <option value="false" <?php if(get_option('shila_sec_3') == 'false'){
                echo 'selected';
            } ?>>false</option>
            <?php
                $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                    <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                        <?php if(get_option('shila_sec_3') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                            echo 'selected';
                        } ?>>
                        <?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                    </option>
                <?php } ?>
        </select>
    </section>

    <!-- Section 4 -->
    <section>
        <label for="shila_sec_4">Section 4</label>
        <select name="shila_sec_4" id="shila_sec_4">
            <option value="false" <?php if(get_option('shila_sec_4') == 'false'){
                echo 'selected';
            } ?>>false</option>
            <?php
                $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                    <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                        <?php if(get_option('shila_sec_4') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                            echo 'selected';
                        } ?>>
                        <?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                    </option>
                <?php } ?>
        </select>
    </section>

    <!-- Section 5 -->
    <section>
        <label for="shila_sec_5">Section 5</label>
        <select name="shila_sec_5" id="shila_sec_5">
            <option value="false" <?php if(get_option('shila_sec_5') == 'false'){
                echo 'selected';
            } ?>>false</option>
            <?php
                $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                    <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                        <?php if(get_option('shila_sec_5') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                            echo 'selected';
                        } ?>>
                        <?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                    </option>
                <?php } ?>
        </select>
    </section>

    <!-- Section 6 -->
    <section>
        <label for="shila_sec_6">Section 6</label>
        <select name="shila_sec_6" id="shila_sec_6">
            <option value="false" <?php if(get_option('shila_sec_6') == 'false'){
                echo 'selected';
            } ?>>false</option>
            <?php
                $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                    <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                        <?php if(get_option('shila_sec_6') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                            echo 'selected';
                        } ?>>
                        <?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                    </option>
                <?php } ?>
        </select>
    </section>

    <!-- Section 7 -->
    <section>
        <label for="shila_sec_7">Section 7</label>
        <select name="shila_sec_7" id="shila_sec_7">
            <option value="false" <?php if(get_option('shila_sec_7') == 'false'){
                echo 'selected';
            } ?>>false</option>
            <?php
                $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                    <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                        <?php if(get_option('shila_sec_7') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                            echo 'selected';
                        } ?>>
                        <?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                    </option>
                <?php } ?>
        </select>
    </section>

    <!-- Section 8 -->
    <section>
        <label for="shila_sec_8">Section 8</label>
        <select name="shila_sec_8" id="shila_sec_8">
            <option value="false" <?php if(get_option('shila_sec_8') == 'false'){
                echo 'selected';
            } ?>>false</option>
            <?php
                $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                    <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                        <?php if(get_option('shila_sec_8') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                            echo 'selected';
                        } ?>>
                        <?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                    </option>
                <?php } ?>
        </select>
    </section>

    <!-- Section 9 -->
    <section>
        <label for="shila_sec_9">Section 9</label>
        <select name="shila_sec_9" id="shila_sec_9">
            <option value="false" <?php if(get_option('shila_sec_9') == 'false'){
                echo 'selected';
            } ?>>false</option>
            <?php
                $categories = get_categories('hide_empty=0');
                $mx_categories = array();
                foreach ($categories as $mx_cat) { ?>
                    <option value="<?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>"
                        <?php if(get_option('shila_sec_9') == ($mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name)){
                            echo 'selected';
                        } ?>>
                        <?php echo $mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name; ?>
                    </option>
                <?php } ?>
        </select>
    </section>

    <input type="submit" value="Save">
</form>