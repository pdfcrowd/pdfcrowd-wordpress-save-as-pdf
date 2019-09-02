<?php

/**
* Partial of the clean up settings
*
*
*
* @link       https://pdfcrowd.com/save-as-pdf-image-wordpress-plugin/
* @since      1.0.0
*
* @package    Save_As_Pdf_Pdfcrowd
* @subpackage Save_As_Pdf_Pdfcrowd/admin/partials
*/
?>

<div id="save-as-pdf-pdfcrowd-license-settings" class="wrap metabox-holder save-as-pdf-pdfcrowd-metaboxes">
    <h2><img src='https://pdfcrowd.com/static/images/icon1.png'/>&nbsp;Pdfcrowd API Credentials</h2>

    <p>
        Enter your Pdfcrowd username and API key if you have a <a href='https://pdfcrowd.com/user/account/api2-license/?ref=wordpress'>Pdfcrowd API license</a>. Leave the fields empty to run in a demo mode.
    </p>
    <?php if($license_status['status'] != 'active') : ?>
    <p>
        Pdfcrowd API license can be purchased by the following <a href='https://pdfcrowd.com/pricing/api/?api=v2&ref=wordpress'>link</a>.
    </p>
    <?php endif; ?>

    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-username">
                        Username
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-username" name="save-as-pdf-pdfcrowd[username]" value="<?php if(!empty($username)) esc_attr_e($username, $this->plugin_name);?>" placeholder="<?php esc_attr_e('Your Pdfcrowd username', $this->plugin_name);?>" />
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-api_key">
                        API Key
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-api_key" name="save-as-pdf-pdfcrowd[api_key]" value="<?php if(!empty($api_key)) esc_attr_e($api_key, $this->plugin_name);?>" placeholder="<?php esc_attr_e('Your Pdfcrowd API key', $this->plugin_name);?>" />
                </td>
            </tr>
        </tbody>
    </table>
    <?php if($license_status['status'] != 'error') : ?>
    <h3>Pdfcrowd API License Details</h3>
    <?php endif; ?>
    <?php if($license_status['status'] == 'active' || $license_status['status'] == 'canceled' || $license_status['status'] == '') : ?>
    <table>
        <tr>
            <td>Product:</td>
            <td class='save-as-pdf-pdfcrowd-lic-stat'><?php echo $license_status['product']; ?></td>
        </tr>
        <tr>
            <td>Status:</td>
            <td class='save-as-pdf-pdfcrowd-lic-stat'><?php echo $license_status['status']; ?></td>
        </tr>
        <?php if(isset($license_status['credits'])) : ?>
        <tr>
            <td>Remaining credits:</td>
            <td class='save-as-pdf-pdfcrowd-lic-stat <?php if($license_status['credits'] <= 0) echo 'attention' ?>
'><?php echo number_format_i18n($license_status['credits']); ?></td>
        </tr>
        <?php endif; ?>
    </table>
    <?php elseif($license_status['status'] == 'invalid') : ?>
    <p>
        Your Pdfcrowd username or <a href='https://pdfcrowd.com/user/account/api2-license/?ref=wordpress'>API key</a> is invalid.
    </p>
    <?php endif; ?>
</div>
