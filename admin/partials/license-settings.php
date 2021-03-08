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
    <h2>
        <img src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTkuMjI3IiBoZWlnaHQ9IjQzLjI1NiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC03My44MDIgLTM4Ni4wNikiPjxnIHRyYW5zZm9ybT0ibWF0cml4KDEuNzk0OCAwIDAgMS43OTQ4IC0yNjI2LjUgLTIxMi4wNikiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmOTUwMCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+PHBhdGggZD0ibTE1MTQuNSAzMzUuODZjMC40NDI2IDAuMDU0IDEuMjM2Ni0wLjI0MzM2IDEuMDAwMiAwLjQ4OTY1djE4LjUxMWMtMC40NDI2LTAuMDU0LTEuMjM2NiAwLjI0MzM3LTEuMDAwMi0wLjQ4OTY1di0xOC41MTF6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC45OTk4Ii8+PHBhdGggZD0ibTE1MDYuMyAzNDQuNTRoMS40NzQ4djEwLjU1NWgtMS40NzQ4di0xMC41NTV6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC41MjUxIi8+PHBhdGggZD0ibTE1MjIuNCAzMzkuNzhjMC4zNzU1IDAuMTIzMSAxLjI5ODYtMC4zMDEzMyAxLjE2OTQgMC4zMjY0M3YxNC44NDNjLTAuMzc1NS0wLjEyMzExLTEuMjk4NiAwLjMwMTMzLTEuMTY5NC0wLjMyNjQzdi0xNC44NDN6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC44MzA2Ii8+PHBhdGggZD0ibTE1MzUuMSAzNTMuMjh2Mi4xNjQ5aC01LjE2NDl2LTIuMTY0OWg1LjE2NDl6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iMy44MzUxIi8+PC9nPjwvZz48L3N2Zz4K'/>
        &nbsp;Pdfcrowd API Credentials
    </h2>

    <p>
        Enter your Pdfcrowd username and API key if you have a <a href='https://pdfcrowd.com/user/account/api2-license/?ref=wordpress'>Pdfcrowd API license</a>. Leave the fields empty to run in the DEMO mode.
    </p>
    <?php if($license_status['status'] != 'active') : ?>
    <p>
        Pdfcrowd API license can be purchased by the following <a href='https://pdfcrowd.com/pricing/api/?api=v2&ref=wordpress'>link</a>. The valid license removes the demo watermark and the footer ad from the output PDF.
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-username" name="save-as-pdf-pdfcrowd[username]" value="<?php echo($username);?>" placeholder="<?php esc_attr_e('Your Pdfcrowd username, the default is demo', $this->plugin_name);?>" />
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-api_key">
                        API Key
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-api_key" name="save-as-pdf-pdfcrowd[api_key]" value="<?php echo($api_key);?>" placeholder="<?php esc_attr_e('Your Pdfcrowd API key', $this->plugin_name);?>" />
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
    <div id='save-as-pdf-pdfcrowd-lic-invalid'>
        <p class='attention'>
            Error: Your username or API key is invalid!
        </p>
        <p>
            Check them by the following buttons:<br>
            <a class='button-secondary' href='https://pdfcrowd.com/user/account/?ref=wordpress' target='blank'>Get username</a>
            <a class='button-secondary' href='https://pdfcrowd.com/user/account/api2-license/?ref=wordpress' target='blank'>Get API key</a>
            <br>
            The username and API key are case sensitive.
        </p>
    </div>
    <?php endif; ?>
</div>
