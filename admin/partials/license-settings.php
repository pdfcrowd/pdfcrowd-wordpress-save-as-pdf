<?php

/**
* Partial of the PDFCrowd license settings
*
*
*
* @link       https://pdfcrowd.com/save-as-pdf-wordpress-plugin/
* @since      1.0.0
*
* @package    Save_As_Pdf_Pdfcrowd
* @subpackage Save_As_Pdf_Pdfcrowd/admin/partials
*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div
  id="save-as-pdf-pdfcrowd-license-settings"
  class="save-as-pdf-pdfcrowd-metaboxes save-as-pdf-pdfcrowd-tab-content hidden">
    <div>
        <div>
            <label for="save-as-pdf-pdfcrowd-lic-demo">
                <input type="radio" id="save-as-pdf-pdfcrowd-lic-demo" name="save-as-pdf-pdfcrowd[license_type]" value="demo" <?php checked( $license_type, "demo" ); ?> autocomplete="off" />
                <span style="font-weight: bold">
                    Demo
                </span>
            </label>
             - Places a demo watermark and PDFCrowd branding on the output.
        </div>
        <div>
            <label for="save-as-pdf-pdfcrowd-lic-regular">
                <input type="radio" id="save-as-pdf-pdfcrowd-lic-regular" name="save-as-pdf-pdfcrowd[license_type]" value="regular" <?php checked( $license_type, "regular" ); ?> autocomplete="off" />
                <span style="font-weight: bold">
                    Commercial
                </span>
            </label>
            - <span id="save-as-pdf-pdfcrowd-lic-reg-ac">
                <a class="button-secondary"
                   href="https://pdfcrowd.com/user/sign_up/?pid=api-trial2&ref=wordpress">
                    Free trial
                </a> or
                <a class="button-secondary"
                   href="https://pdfcrowd.com/pricing/api/?api=v2&ref=wordpress">
                    Purchase
                </a>
            </span>
        </div>
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
                      <input type="text"
                             class="regular-text"
                             id="save-as-pdf-pdfcrowd-username"
                             name="save-as-pdf-pdfcrowd[username]"
                             value="<?php esc_attr_e($username); ?>"
                             placeholder="<?php esc_attr_e('Your PDFCrowd username', $this->plugin_name);?>"
                             autocomplete="off" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="save-as-pdf-pdfcrowd-api_key">
                            Key
                        </label>
                    </td>
                    <td>
                      <input type="text"
                             class="regular-text"
                             id="save-as-pdf-pdfcrowd-api_key"
                             name="save-as-pdf-pdfcrowd[api_key]"
                             value="<?php esc_attr_e($api_key); ?>"
                             placeholder="<?php esc_attr_e('Your PDFCrowd WordPress key', $this->plugin_name);?>"
                             autocomplete="off" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        You can find the PDFCrowd WordPress key in your
                        <a href='https://pdfcrowd.com/user/account/wordpress/?ref=wordpress' target='blank'>PDFCrowd account</a>.
                    </td>
                </tr>
            <?php if($license_status) :?>
                <?php if($license_status['status'] == 'active' || $license_status['status'] == 'canceled' || $license_status['status'] == '') : ?>
                    <tr>
                        <td></td>
                        <td id="save-as-pdf-pdfcrowd-lic-stats">
                            <div>
                                License:
                                <span class='save-as-pdf-pdfcrowd-lic-stat'>
                                    <?php esc_html_e($license_status['product']); ?>
                                </span>
                            </div>
                            <div>
                                Status:
                                <span class='save-as-pdf-pdfcrowd-lic-stat'>
                                    <?php esc_html_e($license_status['status']); ?>
                                </span>
                            </div>
                            <?php if(isset($license_status['credits'])) : ?>
                                <div>
                                    Remaining credits:
                                    <span class='save-as-pdf-pdfcrowd-lic-stat <?php if($license_status['credits'] <= 0) echo 'attention' ?>'>
                                        <?php esc_html_e(number_format_i18n($license_status['credits'])); ?>
                                    </span>
                                </div>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php elseif($license_status['status'] == 'invalid') : ?>
                    <tr>
                        <td id="save-as-pdf-pdfcrowd-lic-invalid" colspan=2
                            class="align-center">
                            <div class='attention'>
                                Error: Entered username or key is not valid!
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
