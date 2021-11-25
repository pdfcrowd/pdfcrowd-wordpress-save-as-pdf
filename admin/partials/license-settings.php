<?php

/**
* Partial of the API license settings
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
        Quick Setup
    </h2>
    <p>
        Save as PDF by Pdfcrowd offers 180+ settings.
        The setup wizard will help you to configure the most common ones.
        <div id="save-as-pdf-pdfcrowd-wizard-run" class="button-secondary"
             onclick="return save_as_pdf_pdfcrowd_submit_action('wizard');">
            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogIDxnIHRyYW5zZm9ybT0ic2NhbGUoMC4xOCAwLjE4KSI+CiAgICA8ZyB0cmFuc2Zvcm09InJvdGF0ZSg0NSAxODguOTkgNDMuOTQxKSI+CiAgICAgIDxnIGlkPSJhIj4KICAgICAgICA8cmVjdCB4PSI5NC44ODEiIHk9IjEyMS42NyIgd2lkdGg9IjEzLjA5NiIgaGVpZ2h0PSI5NC44ODEiIGZpbGw9IiM3MDgwOTAiIHN0eWxlPSJwYWludC1vcmRlcjpub3JtYWwiLz4KICAgICAgICA8cGF0aCBkPSJtNzguMDQzIDkzLjM0MSA0OC4xMDktMC41MzQ1NC00MC42MjUgMzEuMDAzIDE3LjEwNS00OS43MTIgMTQuMTY1IDQ5LjE3OHoiIGZpbGw9IiNmNWJjMTEiLz4KICAgICAgPC9nPgogICAgPC9nPgogIDwvZz4KPC9zdmc+Cg==">
            Run wizard
        </div>
    </p>
    <h3 style='margin-top: 2em'>
        API License
    </h3>

    <h3>
        License
    </h3>
    <div>
        <p>
            <label for="save-as-pdf-pdfcrowd-lic-demo">
                <input type="radio" id="save-as-pdf-pdfcrowd-lic-demo" name="save-as-pdf-pdfcrowd[license_type]" value="demo" <?php checked( $license_type, "demo" ); ?> autocomplete="off" />
                <span style="font-weight: bold">
                    Demo
                </span>
            </label>
             - prints DEMO text over the output
        </p>
        <p>
            <label for="save-as-pdf-pdfcrowd-lic-regular">
                <input type="radio" id="save-as-pdf-pdfcrowd-lic-regular" name="save-as-pdf-pdfcrowd[license_type]" value="regular" <?php checked( $license_type, "regular" ); ?> autocomplete="off" />
                <span style="font-weight: bold">
                    License
                </span>
            </label>
            <span id="save-as-pdf-pdfcrowd-lic-reg-ac">
                <a class="button-secondary"
                   href="https://pdfcrowd.com/user/sign_up/?pid=api-trial2&ref=wordpress">
                    Free trial
                </a> or
                <a class="button-secondary"
                   href="https://pdfcrowd.com/pricing/api/?api=v2&ref=wordpress">
                    Purchase
                </a>
            </span>
        </p>
    </div>
    <div id="save-as-pdf-pdfcrowd-lic-cred" class="hidden">
        <table>
            <tbody>
                <tr>
                    <td>
                        <label for="save-as-pdf-pdfcrowd-username">
                            Username
                        </label>
                    </td>
                    <td>
                        <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-username" name="save-as-pdf-pdfcrowd[username]" value="<?php echo($username);?>" placeholder="<?php esc_attr_e('Your Pdfcrowd username', $this->plugin_name);?>" autocomplete="off" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="save-as-pdf-pdfcrowd-api_key">
                            API Key
                        </label>
                    </td>
                    <td>
                        <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-api_key" name="save-as-pdf-pdfcrowd[api_key]" value="<?php echo($api_key);?>" placeholder="<?php esc_attr_e('Your Pdfcrowd API key', $this->plugin_name);?>" autocomplete="off" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        You can find your license credentials in your
                        <a href='https://pdfcrowd.com/user/account/api2-license/?ref=wordpress' target='blank'>
                            Pdfcrowd account
                        </a>
                    </td>
                </tr>
            <?php if($license_status) :?>
                <?php if($license_status['status'] == 'active' || $license_status['status'] == 'canceled' || $license_status['status'] == '') : ?>
                    <tr>
                        <td></td>
                        <td id="save-as-pdf-pdfcrowd-lic-stats">
                            <p>
                                License:
                                <span class='save-as-pdf-pdfcrowd-lic-stat'>
                                    <?php echo $license_status['product']; ?>
                                </span>
                            </p>
                            <p>
                                Status:
                                <span class='save-as-pdf-pdfcrowd-lic-stat'>
                                    <?php echo $license_status['status']; ?>
                                </span>
                            </p>
                            <?php if(isset($license_status['credits'])) : ?>
                                <p>
                                    Remaining credits:
                                    <span class='save-as-pdf-pdfcrowd-lic-stat <?php if($license_status['credits'] <= 0) echo 'attention' ?>'>
                                        <?php echo number_format_i18n($license_status['credits']); ?>
                                    </span>
                                </p>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php elseif($license_status['status'] == 'invalid') : ?>
                    <tr>
                        <td id="save-as-pdf-pdfcrowd-lic-invalid" colspan=2
                            class="align-center">
                            <p class='attention'>
                                Error: Entered username or API key is not valid!
                            </p>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
