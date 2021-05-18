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

<div id="save-as-pdf-pdfcrowd-behavior" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">
    <h2>Behavior</h2>
    <a href='#' class='save-as-pdf-pdfcrowd-expert button-secondary'>Show parameters</a>

    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    Button Click Action
                </th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span>Button Click Action</span>
                        </legend>
                        <label for="save-as-pdf-pdfcrowd-button-disp-attachment">
                            <input type="radio" id="save-as-pdf-pdfcrowd-button-disp-attachment" name="save-as-pdf-pdfcrowd[button_disposition]" value="attachment" <?php checked( $button_disposition, "attachment" ); ?> autocomplete="off" />
                            Download PDF
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-button-disp-inline">
                            <input type="radio" id="save-as-pdf-pdfcrowd-button-disp-inline" name="save-as-pdf-pdfcrowd[button_disposition]" value="inline" <?php checked( $button_disposition, "inline" ); ?> autocomplete="off" />
                            Open PDF in the current browser tab
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-button-disp-inline_new_tab">
                            <input type="radio" id="save-as-pdf-pdfcrowd-button-disp-inline_new_tab" name="save-as-pdf-pdfcrowd[button_disposition]" value="inline_new_tab" <?php checked( $button_disposition, "inline_new_tab" ); ?> autocomplete="off" />
                            Open PDF in a new browser tab
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-button-disp-email">
                            <input type="radio" id="save-as-pdf-pdfcrowd-button-disp-email" name="save-as-pdf-pdfcrowd[button_disposition]" value="email" <?php checked( $button_disposition, "email" ); ?> autocomplete="off" />
                            Send PDF via email. A configured outgoing mail server is required (e.g. <a href="https://wordpress.org/plugins/wp-mail-smtp/">WP Mail SMTP</a>).
                        </label><br>
                    </fieldset>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_disposition</strong>"<br>Possible values: "attachment", "inline", "inline_new_tab", "email"
                    </p>
                    <p class='description'>
                        The action which is done when the conversion button is clicked.
                    </p>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-email-details">
                <th scope="row">
                    Email Recipient
                </th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span>Email Recipient</span>
                        </legend>
                        <label for="save-as-pdf-pdfcrowd-er-user">
                            <input type="radio" id="save-as-pdf-pdfcrowd-er-user" name="save-as-pdf-pdfcrowd[email_recipient]" value="user" <?php checked( $email_recipient, "user" ); ?>  autocomplete="off" >
                            The address of the logged in user, otherwise prompt for an email address
                        </label>
                        <br>
                        <label for="save-as-pdf-pdfcrowd-er-prompt">
                            <input type="radio" id="save-as-pdf-pdfcrowd-er-prompt" name="save-as-pdf-pdfcrowd[email_recipient]" value="prompt" <?php checked( $email_recipient, "prompt" ); ?>  autocomplete="off" >
                            Prompt for an email address
                        </label>
                        <br>
                        <label for="save-as-pdf-pdfcrowd-er-address">
                            <input type="radio" id="save-as-pdf-pdfcrowd-er-address" name="save-as-pdf-pdfcrowd[email_recipient]" value="address" <?php checked( $email_recipient, "address" ); ?>  autocomplete="off" >
                            Email address
                            <input id="save-as-pdf-pdfcrowd-er-email-address" type="text" class="regular-text save-as-pdf-pdfcrowd-text-for-radio" name="save-as-pdf-pdfcrowd[email_recipient_address]" value="<?php echo($email_recipient_address);?>" placeholder="<?php esc_attr_e('info@example.com', $this->plugin_name);?>" autocomplete="off">
                            <div style='padding-left: 2em;'>
                                <p class='save-as-pdf-pdfcrowd-devi'>
                                    Shortcode & function parameter: "<strong>email_recipient_address</strong>"
                                </p>
                            </div>
                        </label>
                        <br>
                    </fieldset>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>email_recipient</strong>"<br>Possible values: "user", "prompt", "address"
                    </p>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-email-details">
                <th>
                    <label for="save-as-pdf-pdfcrowd-email-cc">
                        Email Cc
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-email-cc" name="save-as-pdf-pdfcrowd[email_cc]" value="<?php echo($email_cc);?>" placeholder="<?php esc_attr_e('Carbon copy address', $this->plugin_name);?>" autocomplete="off" />
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>email_cc</strong>"
                    </p>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-email-details">
                <th>
                    <label for="save-as-pdf-pdfcrowd-email-bcc">
                        Email Bcc
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-email-bcc" name="save-as-pdf-pdfcrowd[email_bcc]" value="<?php echo($email_bcc);?>" placeholder="<?php esc_attr_e('Blind carbon copy address', $this->plugin_name);?>" autocomplete="off" />
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>email_bcc</strong>"
                    </p>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-email-details">
                <th>
                    <label for="save-as-pdf-pdfcrowd-email-subject">
                        Email Subject
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-email-subject" name="save-as-pdf-pdfcrowd[email_subject]" value="<?php echo($email_subject);?>" placeholder="<?php esc_attr_e('Your subject', $this->plugin_name);?>" autocomplete="off" />
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>email_subject</strong>"
                    </p>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
    <p class="description">
        The email subject template. The template may contain predefined variables enclosed in {{ }} that are dynamically expanded. Available variables are:
    </p>
    <ul>
        <li>site - site name</li>
        <li>site_url - site url</li>
        <li>title - current page title</li>
        <span>The following variables are available only if the recipient is currently logged in: </span>
        <li>user_name - user's login name</li>
        <li>user_first_name - user's first name</li>
        <li>user_last_name - user's last name</li>
        <li>user_display_name - user's display name</li>
    </ul>
    <p class="small-text">
       If you need custom variables in the template, place "Save as" button into your code by PHP method with the template argument.
    </p>
</div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-email-details">
                <th>
                    <label for="save-as-pdf-pdfcrowd-email-message">
                        Email Message
                    </label>
                </th>
                <td>
                    <textarea id="save-as-pdf-pdfcrowd-email-message" name="save-as-pdf-pdfcrowd[email_message]" rows=5 cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="<?php esc_attr_e('Your email message', $this->plugin_name);?>"><?php echo($email_message); ?></textarea>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>email_message</strong>"
                    </p>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
    <p class="description">
        The email message template. The template may contain predefined variables enclosed in {{ }} that are dynamically expanded. Available variables are:
    </p>
    <ul>
        <li>site - site name</li>
        <li>site_url - site url</li>
        <li>title - current page title</li>
        <span>The following variables are available only if the recipient is currently logged in: </span>
        <li>user_name - user's login name</li>
        <li>user_first_name - user's first name</li>
        <li>user_last_name - user's last name</li>
        <li>user_display_name - user's display name</li>
    </ul>
    <p class="small-text">
       If you need custom variables in the template, place "Save as" button into your code by PHP method with the template argument.
    </p>
</div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-email-details">
                <th scope="row">
                    Email Dialogs
                </th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span>Email Dialogs</span>
                        </legend>
                        <label for="save-as-pdf-pdfcrowd-edlg-system">
                            <input type="radio" id="save-as-pdf-pdfcrowd-edlg-system" name="save-as-pdf-pdfcrowd[email_dialogs]" value="system" <?php checked( $email_dialogs, "system" ); ?> autocomplete="off" />
                            System dialogs
                        </label>
                        <br>
                        <label for="save-as-pdf-pdfcrowd-edlg-modal">
                            <input type="radio" id="save-as-pdf-pdfcrowd-edlg-modal" name="save-as-pdf-pdfcrowd[email_dialogs]" value="modal" <?php checked( $email_dialogs, "modal" ); ?> autocomplete="off" />
                            Predefined modal dialogs
                        </label>
                        <br>
                        <label for="save-as-pdf-pdfcrowd-edlg-none">
                            <input type="radio" id="save-as-pdf-pdfcrowd-edlg-none" name="save-as-pdf-pdfcrowd[email_dialogs]" value="none" <?php checked( $email_dialogs, "none" ); ?> autocomplete="off" />
                            No dialogs
                        </label>
                        <br>
                        <label for="save-as-pdf-pdfcrowd-edlg-custom">
                            <input type="radio" id="save-as-pdf-pdfcrowd-edlg-custom" name="save-as-pdf-pdfcrowd[email_dialogs]" value="custom" <?php checked( $email_dialogs, "custom" ); ?> autocomplete="off" />
                            Custom dialogs
                            <input type="text" class="regular-text save-as-pdf-pdfcrowd-text-for-radio" id="save-as-pdf-pdfcrowd-custom-edlg" name="save-as-pdf-pdfcrowd[email_custom_dialogs]" value="<?php echo($email_custom_dialogs);?>" placeholder="<?php esc_attr_e('Your JavaScript object name, e.g. mySaveAsPDFPdfcrowdEmailDialogs', $this->plugin_name);?>" style="width: 70%" autocomplete="off"/>
                            <div class="save-as-pdf-pdfcrowd-m-description" style="padding-left: 2em">
                                <p class='save-as-pdf-pdfcrowd-devi'>
                                    Shortcode & function parameter: "<strong>email_custom_dialogs</strong>"<br>Possible values: your JavaScript function name
                                </p>
                                <p class="description">
                                    The name of a JavaScript object that implements the following callbacks:
                                </p>
                                <ul>
                                   <li>success() - invoked after the email has been sent</li>
                                   <li>fail() - invoked when the conversion or sending the email has failed</li>
                                   <li>prompt(cb) - should show an email address prompt, the entered email address is then passed to cb.</li>
                                </ul>
                                <p class="description" style="">
                                    Example:
                                </p>
                                <pre>window.mySaveAsPDFPdfcrowdEmailDialogs = {
    success: function() {
        jQuery('#my-ok-dialog').show();
    },
    fail: function(error) {
        alert('email failed ' +
              (error ? error.code + ' ' + error.message : ''));
    },
    prompt: function(converter_callback) {
        var email = prompt('enter email');
        if(email) {
            converter_callback(email);
        }
    }
};</pre>
                            </div>
                        </label>
                        <br>
                    </fieldset>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>email_dialogs</strong>"<br>Possible values: "system", "modal", "none", "custom"
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-output-name">
                        Output Name
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-output-name" name="save-as-pdf-pdfcrowd[output_name]" value="<?php echo($output_name);?>" placeholder="<?php esc_attr_e('Output filename', $this->plugin_name);?>" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>output_name</strong>"
                        </p>
                        <p class='description'>
                            The name of the output file. The name may not be specified and will be automatically created according to the page URL.
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    Conversion Mode
                </th>
                <td>
                    <fieldset id="save-as-pdf-pdfcrowd-conversion_mode">
                        <legend class="screen-reader-text">
                            <span>Conversion Mode</span>
                        </legend>
                        <p>
                        <label for="save-as-pdf-pdfcrowd-conversion-mode-auto">
                            <input type="radio" id="save-as-pdf-pdfcrowd-conversion-mode-auto" name="save-as-pdf-pdfcrowd[conversion_mode]" value="auto" <?php checked( $conversion_mode, "auto" ); ?> autocomplete="off" />
                            Auto
                        </label>
                        </p>
                        <p class='description'>
                            If web page URL is specified explicitly, the "url" mode is used otherwise "upload" mode is used.
                        </p>
                        <p>
                        <label for="save-as-pdf-pdfcrowd-conversion-mode-url">
                            <input type="radio" id="save-as-pdf-pdfcrowd-conversion-mode-url" name="save-as-pdf-pdfcrowd[conversion_mode]" value="url" <?php checked( $conversion_mode, "url" ); ?> autocomplete="off" />
                            URL
                        </label>
                        </p>
                        <p class='description'>
                            The web page URL is uploaded for the conversion.<br>This mode is suitable for a public website.
                        </p>
                        <p>
                        <label for="save-as-pdf-pdfcrowd-conversion-mode-upload">
                            <input type="radio" id="save-as-pdf-pdfcrowd-conversion-mode-upload" name="save-as-pdf-pdfcrowd[conversion_mode]" value="upload" <?php checked( $conversion_mode, "upload" ); ?> autocomplete="off" />
                            Upload
                        </label>
                        </p>
                        <p class='description'>
                            The contents of the web page is uploaded for the conversion.<br>This mode is suitable for any website, password-protected or not publicly accessible website.
                        </p>
                        <p>
                        <label for="save-as-pdf-pdfcrowd-conversion-mode-development">
                            <input type="radio" id="save-as-pdf-pdfcrowd-conversion-mode-development" name="save-as-pdf-pdfcrowd[conversion_mode]" value="development" <?php checked( $conversion_mode, "development" ); ?> autocomplete="off" />
                            Development
                        </label>
                        </p>
                        <p class='description'>
                            The contents of the web page and some local assets are uploaded for the conversion.<br>This mode is suitable for a website running on a localhost.<br>Local images may not appear in the converted document.
                        </p>
                        <p>
                        <label for="save-as-pdf-pdfcrowd-conversion-mode-content">
                            <input type="radio" id="save-as-pdf-pdfcrowd-conversion-mode-content" name="save-as-pdf-pdfcrowd[conversion_mode]" value="content" <?php checked( $conversion_mode, "content" ); ?> autocomplete="off" />
                            Content
                        </label>
                        </p>
                        <p class='description'>
                            The current HTML contents shown in the browser is sent for conversion.<br>This mode is suitable for web forms and dynamic HTML contents.<br>This mode is not suitable for cached pages.
                        </p>
                        <div id="save-as-pdf-pdfcrowd-cm-content-options" class="save-as-pdf-pdfcrowd-sub-option">
                            <input type="checkbox" id="save-as-pdf-pdfcrowd-button-user-drawings" name="save-as-pdf-pdfcrowd[button_user_drawings]" value="1" <?php checked( $button_user_drawings, 1 ); ?> autocomplete="off" />
                            <p>
                            <label for="save-as-pdf-pdfcrowd-button-user-drawings">
                                User-Created Drawings
                            </label>
                            </p>
                            <p class="description" style="margin-top: -0.3em;">
                                Enable this option if you want to capture user-created canvas drawings.
                            </p>
                            <p class='save-as-pdf-pdfcrowd-devi'>
                                Shortcode & function parameter: "<strong>button_user_drawings</strong>"<br>Possible values: 0, 1
                            </p>
                        </div>
                    </fieldset>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>conversion_mode</strong>"<br>Possible values: "auto", "url", "upload", "development", "content"
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-auto-use-cookies">
                        Auto Use Cookies
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-auto-use-cookies" name="save-as-pdf-pdfcrowd[auto_use_cookies]" value="1" <?php checked( $auto_use_cookies, 1 ); ?> autocomplete="off" />
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>auto_use_cookies</strong>"<br>Possible values: 0, 1
                    </p>
                    <p class='description'>
                        All cookies are sent automatically into the conversion process. It is suitable for a password-protected website. These cookies are appended to the cookies defined on the "General Options" settings tab.
                    </p>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="save-as-pdf-pdfcrowd-pdf-created-callback">
                        PDF Created Callback
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-pdf-created-callback" name="save-as-pdf-pdfcrowd[pdf_created_callback]" value="<?php echo($pdf_created_callback);?>" placeholder="<?php esc_attr_e('Your function name', $this->plugin_name);?>" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>pdf_created_callback</strong>"
                        </p>
                        <p class='description'>
                            This PHP callback is invoked when the output pdf is created. The callback is useful for custom actions, e.g. saving the pdf to a local folder, setting a custom HTTP response header.
                            <br>
                            Return <strong>true</strong> from your custom callback if you wish to skip the default functionality. The default functionality returns the created pdf to the client in an HTTP response.
                        </p>
                        <p class='description'>
                            The callback must be a valid PHP function name. The function <strong>must</strong> accept 1 argument - an array with keys:
                        </p>
                        <ul>
                            <li>
                                output - the generated pdf data
                            </li>
                            <li>
                                options - options used for the conversion
                            </li>
                            <li>
                                file_name - the pdf filename
                            </li>
                            <li>
                                error - <i>null</i> for a successful conversion otherwise WP_Error
                            </li>
                        </ul>
                        <p class='description'>
                            Example for a custom callback saving the file to the upload folder:
                            <pre>function save_to_local($data) {
    if(!$data['error']) {
        wp_upload_bits($data['file_name'], null, $data['output']);
    }
}</pre>
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-custom-data">
                        Custom Data
                    </label>
                </th>
                <td>
                    <textarea id="save-as-pdf-pdfcrowd-custom-data" name="save-as-pdf-pdfcrowd[custom_data]" rows=5 cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="<?php esc_attr_e('Your custom data', $this->plugin_name);?>"><?php echo($custom_data); ?></textarea>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>custom_data</strong>"
                    </p>
                    <p class='description'>
                        Data assigned to the conversion button.
                        They are sent to the PDF Created Callback method and are accessible in the callback options['custom_data'] field.
                    </p>
                    <p class='description'>
                        Dynamic data may be used when the button is created by shortcode or function call. Example for assigning the current post ID and user email in JSON format with the conversion button created by a PHP function call:
                        <pre>&lt;? echo create_save_as_pdf_pdfcrowd_button(
    array('custom_data' => json_encode(
        array('post_id' => get_the_ID(),
              'user_email' => wp_get_current_user()->user_email)))); ?&gt;</pre>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
