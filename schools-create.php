<?php

function sinetiks_schools_create() {
    $appid = $_POST['app_id'];
    $appsecret = $_POST['app_secret'];
    $pageid = $_POST['page_id'];
    $api = $_POST['graph_api'];
    //insert
    if (isset($_POST['insert'])) {
        global $wpdb;
        $table_name = $wpdb->prefix . "school";

        $wpdb->insert(
                $table_name, //table
                array('app_id' => $appid, 'app_secret' => $appsecret, 'page_id' => $pageid, 'graph_api' => $api ), //data
                array('%s', '%s') //data format			
        );
        $message.="School inserted";
    }
    ?>
    <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/sinetiks-schools/style-admin.css" rel="stylesheet" />
    <div class="wrap">
        <h2>Add New School</h2>
        <?php if (isset($message)): ?><div class="updated"><p><?php echo $message; ?></p></div><?php endif; ?>
        <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
            <p>Facebook Page Configuration</p>
            <table class='wp-list-table widefat fixed'>
                <tr>
                    <th class="ss-th-width">Facebook App Id</th>
                    <td><input type="text" name="app_id" class="ss-field-width" autocomplete="off"/></td>
                </tr>
                <tr>
                    <th class="ss-th-width">Facebook App Secret</th>
                    <td><input type="text" name="app_secret" class="ss-field-width" autocomplete="off" /></td>
                </tr>
                <tr>
                    <th class="ss-th-width">Facebook Page Id</th>
                    <td><input type="text" name="page_id" class="ss-field-width" autocomplete="off" /></td>
                </tr>
                <tr>
                    <th class="ss-th-width">Graph Api Version</th>
                    <td><input type="text" name="graph_api" class="ss-field-width" autocomplete="off" /></td>
                </tr>
            </table>
            <input type='submit' name="insert" value='Save' class='button'>
        </form>
    </div>
    <?php
}