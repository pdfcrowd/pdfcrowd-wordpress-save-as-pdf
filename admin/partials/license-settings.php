<?php

/**
* Partial of the clean up settings
*
*
*
* @link       https://pdfcrowd.com/wordpress/
* @since      1.0.0
*
* @package    Save_As_Pdf_Pdfcrowd
* @subpackage Save_As_Pdf_Pdfcrowd/admin/partials
*/
?>

<div id="save-as-pdf-pdfcrowd-license-settings" class="wrap metabox-holder save-as-pdf-pdfcrowd-metaboxes">
    <h2><img src='https://pdfcrowd.com/static/images/icon1.png'/>&nbsp;Pdfcrowd API Credentials</h2>

    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-username">
                        Pdfcrowd Username
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-username" name="save-as-pdf-pdfcrowd[username]" value="<?php if(!empty($username)) esc_attr_e($username, $this->plugin_name);?>" placeholder="<?php esc_attr_e('Your Pdfcrowd username', $this->plugin_name);?>" />
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-api_key">
                        Pdfcrowd API Key
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-api_key" name="save-as-pdf-pdfcrowd[api_key]" value="<?php if(!empty($api_key)) esc_attr_e($api_key, $this->plugin_name);?>" placeholder="<?php esc_attr_e('Your Pdfcrowd API key', $this->plugin_name);?>" />
                </td>
            </tr>
        </tbody>
    </table>
    <?php if($license_status != 'demo') : ?>
    <p class='save-as-pdf-pdfcrowd-warning'>
        Note: Pdfcrowd API license stays active if Save as PDF plugin is deleted. Visit <a href='https://pdfcrowd.com/user/account/api2-license/'>Pdfcrowd API License</a> to check your license.
    </p>
    <?php else : ?>
    <p>
        This plugin requires Pdfcrowd API license. Demo license is used by default but it displays the ads watermark and allows a limited number of coversions.
    </p>
    <p>
        You can obtain own Pdfcrowd API license by the following link:
        <a href='https://pdfcrowd.com/user/sign_up/?pid=api-trial2'>https://pdfcrowd.com/user/sign_up/?pid=api-trial2</a>
    </p>
    <?php endif; ?>
</div>
