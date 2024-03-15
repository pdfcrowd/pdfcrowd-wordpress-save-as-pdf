<?php

/**
* Partial of the behavior settings
*
*
*
* @link       https://pdfcrowd.com/save-as-pdf-wordpress-plugin/
* @since      1.0.0
*
* @package    Save_As_Pdf_Pdfcrowd
* @subpackage Save_As_Pdf_Pdfcrowd/admin/partials
*/
?>

 <div id="save-as-pdf-pdfcrowd-behavior"
      class="save-as-pdf-pdfcrowd-category-wrap">
  <div class="save-as-pdf-pdfcrowd-heading-wrap">
    <h2>Behavior</h2>
  </div>

    <table class="form-table">
        <tbody>
          <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
              data-default="attachment">
                <th scope="row">
                  Button Click Action
                </th>
                <td>
                  <div class="save-as-pdf-pdfcrowd-devi save-as-pdf-pdfcrowd-mb-2">
                    Shortcode and function parameter: "<strong>button_disposition</strong>"<br>Possible values: "attachment", "inline", "inline_new_tab", "email"
                  </div>
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
                    <div class='save-as-pdf-pdfcrowd-description'>
                      The action that is performed when the button is clicked.
                    </div>
                </td>
          </tr>
    </table>
    <fieldset class="save-as-pdf-pdfcrowd-fieldset save-as-pdf-pdfcrowd-email-details">
      <legend>Email Details</legend>
      <table class="form-table">
          <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
              data-default="">
                <th>
                    <label for="save-as-pdf-pdfcrowd-email-from">
                      Email From
                    </label>
                </th>
                <td>
                  <input
                    type="text"
                    class="regular-text"
                    id="save-as-pdf-pdfcrowd-email-from"
                    data-parent-opt="#save-as-pdf-pdfcrowd-button-disp-email"
                    name="save-as-pdf-pdfcrowd[email_from]"
                    value="<?php echo($email_from);?>" placeholder="<?php esc_attr_e('Sender address', $this->plugin_name);?>" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-description'>
                      The sender email. It can be empty if specified in your mailer plugin.
                    </div>
                    <div class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>email_from</strong>"
                    </div>
                </td>
            </tr>
          <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
              data-default="user">
                <th scope="row">
                  Email Recipient
                </th>
                <td>
                  <div class="save-as-pdf-pdfcrowd-devi save-as-pdf-pdfcrowd-mb-2">
                    Shortcode and function parameter: "<strong>email_recipient</strong>"<br>Possible values: "user", "prompt", "address"
                  </div>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span>Email Recipient</span>
                        </legend>
                        <label for="save-as-pdf-pdfcrowd-er-user">
                          <input
                            type="radio"
                            id="save-as-pdf-pdfcrowd-er-user"
                            name="save-as-pdf-pdfcrowd[email_recipient]"
                            data-parent-opt="#save-as-pdf-pdfcrowd-button-disp-email"
                            value="user" <?php checked( $email_recipient, "user" ); ?>  autocomplete="off" >
                            The address of the logged in user, otherwise prompt for an email address
                        </label>
                        <br>
                        <label for="save-as-pdf-pdfcrowd-er-prompt">
                          <input
                            type="radio"
                            id="save-as-pdf-pdfcrowd-er-prompt"
                            name="save-as-pdf-pdfcrowd[email_recipient]"
                            data-parent-opt="#save-as-pdf-pdfcrowd-button-disp-email"
                            value="prompt" <?php checked( $email_recipient, "prompt" ); ?>  autocomplete="off" >
                            Prompt for an email address
                        </label>
                        <br>
                        <label for="save-as-pdf-pdfcrowd-er-address">
                          <input
                            type="radio"
                            id="save-as-pdf-pdfcrowd-er-address"
                            name="save-as-pdf-pdfcrowd[email_recipient]"
                            data-parent-opt="#save-as-pdf-pdfcrowd-button-disp-email"
                            value="address" <?php checked( $email_recipient, "address" ); ?>  autocomplete="off" >
                            Email address
                              <input
                                id="save-as-pdf-pdfcrowd-er-email-address"
                                type="text"
                                data-parent-opt="#save-as-pdf-pdfcrowd-er-address"
                                class="regular-text save-as-pdf-pdfcrowd-text-for-radio" name="save-as-pdf-pdfcrowd[email_recipient_address]" value="<?php echo($email_recipient_address);?>" placeholder="<?php esc_attr_e('info@example.com', $this->plugin_name);?>" autocomplete="off">
                                <div class='save-as-pdf-pdfcrowd-devi save-as-pdf-pdfcrowd-nested-dsc'>
                                    Shortcode and function parameter: "<strong>email_recipient_address</strong>"
                                </div>
                        </label>
                        <br>
                    </fieldset>
                    <div class='save-as-pdf-pdfcrowd-description'>
                      Choose how to get the recipient's email. It can be dynamic or fixed. The fixed value may contain either a single email address or a comma-separated list of email addresses.
                    </div>
                </td>
            </tr>
          <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
              data-default="">
                <th>
                    <label for="save-as-pdf-pdfcrowd-email-cc">
                      Email Cc
                    </label>
                </th>
                <td>
                  <input
                    type="text"
                    class="regular-text"
                    id="save-as-pdf-pdfcrowd-email-cc"
                    name="save-as-pdf-pdfcrowd[email_cc]"
                    data-parent-opt="#save-as-pdf-pdfcrowd-button-disp-email"
                    value="<?php echo($email_cc);?>" placeholder="<?php esc_attr_e('Carbon copy address', $this->plugin_name);?>" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-description'>
                      Additional recipients who will receive a copy of the email. It can be either a single email address or a comma-separated list of email addresses.
                    </div>
                    <div class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>email_cc</strong>"
                    </div>
                </td>
            </tr>
          <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
              data-default="">
                <th>
                    <label for="save-as-pdf-pdfcrowd-email-bcc">
                      Email Bcc
                    </label>
                </th>
                <td>
                  <input
                    type="text"
                    class="regular-text"
                    id="save-as-pdf-pdfcrowd-email-bcc"
                    name="save-as-pdf-pdfcrowd[email_bcc]"
                    data-parent-opt="#save-as-pdf-pdfcrowd-button-disp-email"
                    value="<?php echo($email_bcc);?>" placeholder="<?php esc_attr_e('Blind carbon copy address', $this->plugin_name);?>" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-description'>
                      Additional recipients who will receive a copy of the email without revealing their email addresses to the other recipients. It can be either a single email address or a comma-separated list of email addresses.
                    </div>
                    <div class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>email_bcc</strong>"
                    </div>
                </td>
            </tr>
          <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
              data-default="{{site}} - {{title}} PDF">
                <th>
                    <label for="save-as-pdf-pdfcrowd-email-subject">
                      Email Subject
                    </label>
                </th>
                <td>
                  <input
                    type="text"
                    class="regular-text"
                    id="save-as-pdf-pdfcrowd-email-subject"
                    name="save-as-pdf-pdfcrowd[email_subject]"
                    data-parent-opt="#save-as-pdf-pdfcrowd-button-disp-email"
                    value="<?php echo($email_subject);?>" placeholder="<?php esc_attr_e('Your subject', $this->plugin_name);?>" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-description'>
                       <div> The email subject template. The template may contain predefined variables enclosed in <code>{{ }}</code> that are dynamically expanded. Available variables are: </div> <ul> <li>site - site name</li> <li>site_url - site url</li> <li>title - current page title</li> </ul> <div> Available variables for logged in user: </div> <ul> <li>user_name - user's login name</li> <li>user_first_name - user's first name</li> <li>user_last_name - user's last name</li> <li>user_display_name - user's display name</li> </ul> <div class='small-text'> If you need custom variables in the template, place <em>Save as</em> button into your code by PHP method with the template argument. </div>
                    </div>
                    <div class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>email_subject</strong>"
                    </div>
                </td>
            </tr>
          <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
              data-default="%3Cp%3EDear%20%7B%7Buser_first_name%7D%7D%20%7B%7Buser_last_name%7D%7D%2C%3C/p%3E%0A%3Cp%3EPlease%2C%20find%20%7B%7Btitle%7D%7D%20attached.%3C/p%3E%0A%3Cp%3EBest%20Regards%2C%3Cbr%3E%0A%3Ca%20href%3D%22%7B%7Bsite_url%7D%7D%22%3E%7B%7Bsite%7D%7D%3C/a%3E%3C/p%3E">
                <th>
                    <label for="save-as-pdf-pdfcrowd-email-message">
                      Email Message
                    </label>
                </th>
                <td>
                  <textarea
                    id="save-as-pdf-pdfcrowd-email-message"
                    name="save-as-pdf-pdfcrowd[email_message]"
                    data-parent-opt="#save-as-pdf-pdfcrowd-button-disp-email"
                    rows=5
                    <?php if(!current_user_can('unfiltered_html')) echo('readonly'); ?>
                    cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="<?php esc_attr_e('Your email message', $this->plugin_name);?>"><?php echo(esc_html($email_message)); ?></textarea>
                    <div class='save-as-pdf-pdfcrowd-description'>
                       <div> The email message template. HTML tags may be used in it. The template may contain predefined variables enclosed in <code>{{ }}</code> that are dynamically expanded. Available variables are: </div> <ul> <li>site - site name</li> <li>site_url - site url</li> <li>title - current page title</li> </ul> <div> Available variables for logged in user: </div> <ul> <li>user_name - user's login name</li> <li>user_first_name - user's first name</li> <li>user_last_name - user's last name</li> <li>user_display_name - user's display name</li> </ul> <div class='small-text'> If you need custom variables in the template, place <em>Save as</em> button into your code by PHP method with the template argument. </div>
                    </div>
                    <div class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>email_message</strong>"
                    </div>
                </td>
            </tr>
          <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
              data-default="modal">
                <th scope="row">
                  Email Dialogs
                </th>
                <td>
                  <div class="save-as-pdf-pdfcrowd-devi save-as-pdf-pdfcrowd-mb-2">
                    Shortcode and function parameter: "<strong>email_dialogs</strong>"<br>Possible values: "system", "modal", "none", "custom"
                  </div>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span>Email Dialogs</span>
                        </legend>
                        <label for="save-as-pdf-pdfcrowd-edlg-system">
                          <input
                            type="radio"
                            id="save-as-pdf-pdfcrowd-edlg-system"
                            name="save-as-pdf-pdfcrowd[email_dialogs]"
                            data-parent-opt="#save-as-pdf-pdfcrowd-button-disp-email"
                            value="system" <?php checked( $email_dialogs, "system" ); ?> autocomplete="off" />
                            System dialogs
                        </label>
                        <br>
                        <label for="save-as-pdf-pdfcrowd-edlg-modal">
                          <input
                            type="radio"
                            id="save-as-pdf-pdfcrowd-edlg-modal"
                            name="save-as-pdf-pdfcrowd[email_dialogs]"
                            data-parent-opt="#save-as-pdf-pdfcrowd-button-disp-email"
                            value="modal" <?php checked( $email_dialogs, "modal" ); ?> autocomplete="off" />
                            Predefined modal dialogs
                        </label>
                        <br>
                        <label for="save-as-pdf-pdfcrowd-edlg-none">
                          <input
                            type="radio"
                            id="save-as-pdf-pdfcrowd-edlg-none"
                            name="save-as-pdf-pdfcrowd[email_dialogs]"
                            data-parent-opt="#save-as-pdf-pdfcrowd-button-disp-email"
                            value="none" <?php checked( $email_dialogs, "none" ); ?> autocomplete="off" />
                            No dialogs
                        </label>
                        <br>
                        <label for="save-as-pdf-pdfcrowd-edlg-custom">
                          <input
                            type="radio"
                            id="save-as-pdf-pdfcrowd-edlg-custom"
                            name="save-as-pdf-pdfcrowd[email_dialogs]"
                            data-parent-opt="#save-as-pdf-pdfcrowd-button-disp-email"
                            value="custom" <?php checked( $email_dialogs, "custom" ); ?> autocomplete="off" />
                            Custom dialogs
                              <input
                                type="text"
                                class="regular-text save-as-pdf-pdfcrowd-text-for-radio"
                                id="save-as-pdf-pdfcrowd-custom-edlg"
                                name="save-as-pdf-pdfcrowd[email_custom_dialogs]"
                                data-parent-opt="#save-as-pdf-pdfcrowd-edlg-custom"
                                value="<?php echo($email_custom_dialogs);?>" placeholder="<?php esc_attr_e('Your JavaScript object name, e.g. mySaveAsPDFPdfcrowdEmailDialogs', $this->plugin_name);?>" style="min-width: 500px" autocomplete="off"/>
                            <div class="save-as-pdf-pdfcrowd-nested-dsc">
                                <div class="save-as-pdf-pdfcrowd-description">
                                  <div>
                                    The name of a JavaScript object that implements the following callbacks:
                                  </div>
                                  <ul>
                                    <li>success() - invoked after the email has been sent</li>
                                    <li>fail() - invoked when the conversion or sending the email has failed</li>
                                    <li>prompt(cb) - should show an email address prompt, the entered email address is then passed to cb.</li>
                                  </ul>
                                  <div>
                                    Example:
                                  </div>
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
                                <div class='save-as-pdf-pdfcrowd-devi'>
                                  Shortcode and function parameter: "<strong>email_custom_dialogs</strong>"<br>Possible values: your JavaScript function name
                                </div>
                            </div>
                        </label>
                        <br>
                    </fieldset>
                    <div class='save-as-pdf-pdfcrowd-description'>
                      Specify how to display a dialog when the mail configuration requires it. Such cases are Success dialog, Error dialog and Prompt dialog for recipient email.
                    </div>
                </td>
          </tr>
      </table>
    </fieldset>
    <table class="form-table">
          <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
              data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-output-name">
                      Output Name
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-output-name" name="save-as-pdf-pdfcrowd[output_name]" value="<?php echo($output_name);?>" placeholder="<?php esc_attr_e('Output filename', $this->plugin_name);?>" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-description'>
                      The name of the output file. The name may not be specified and will be automatically created according to the page URL.
                    </div>
                    <div class='save-as-pdf-pdfcrowd-devi'>
                      Shortcode and function parameter: "<strong>output_name</strong>"
                    </div>
                </td>
            </tr>
          <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
              data-default="">
                <th scope="row">
                  <label for="save-as-pdf-pdfcrowd-pdf-created-callback">
                      PDF Created Callback
                  </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-pdf-created-callback" name="save-as-pdf-pdfcrowd[pdf_created_callback]" value="<?php echo($pdf_created_callback);?>" placeholder="<?php esc_attr_e('Your function name', $this->plugin_name);?>" autocomplete="off" />
                    <div class="save-as-pdf-pdfcrowd-description">
                        <div>
    Specify the name of your PHP function to be invoked
    when the output pdf is created.
    <br>
    The callback function is useful for custom actions,
    e.g. saving the pdf to a local
    folder, setting a custom HTTP response header,
    collecting email entered by user.
    <br>
    The callback function must be accessible to the
    plugin, with the recommended location being either
    the functions.php file or within the page contents.
    <br>
    Return <strong>true</strong> from your custom callback if you wish to skip the default functionality. The default functionality depends on the Button Click Action option and is either an HTTP response or email with the created pdf.
</div> <div>
    The callback must be a valid PHP function name. The function <strong>must</strong> accept 1 argument - an array with keys:
</div> <ul>
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
                      <div>
                        Example for a custom callback saving the file to the upload folder:
                      </div>
                      <pre>&lt;?php
function save_to_local($data) {
    if(!$data['error']) {
        wp_upload_bits($data['file_name'], null, $data['output']);
    }
}
?&gt;</pre>
                    </div>
                    <div class='save-as-pdf-pdfcrowd-devi'>
                      Shortcode and function parameter: "<strong>pdf_created_callback</strong>"
                    </div>
                </td>
            </tr>
          <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
              data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-custom-data">
                      Custom Data
                    </label>
                </th>
                <td>
                    <textarea id="save-as-pdf-pdfcrowd-custom-data" name="save-as-pdf-pdfcrowd[custom_data]"
                    rows=5
                    <?php if(!current_user_can('unfiltered_html')) echo('readonly'); ?>
                    cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="<?php esc_attr_e('Your custom data', $this->plugin_name);?>"><?php echo(esc_html($custom_data)); ?></textarea>
                    <div class="save-as-pdf-pdfcrowd-description">
                      <div>
    Data assigned to the button.
    They are sent to the PDF Created Callback method and are accessible in the callback options['custom_data'] field.
</div> <div>
  Dynamic data may be used when the button is created by shortcode or function call.
</div>
                      <div>
                        Example for assigning the current post ID and user email in JSON format with the conversion button created by a PHP function call:
                      </div>
                      <pre>&lt;?php
echo create_save_as_pdf_pdfcrowd_button(
    array('custom_data' => json_encode(
        array('post_id' => get_the_ID(),
              'user_email' => wp_get_current_user()->user_email))));
?&gt;</pre>
                    </div>
                    <div class='save-as-pdf-pdfcrowd-devi'>
                      Shortcode and function parameter: "<strong>custom_data</strong>"
                    </div>
                </td>
            </tr>
          <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
              data-default="">
              <th scope="row">
                <label for="save-as-pdf-pdfcrowd-error-page">
                  Error Page
                </label>
              </th>
              <td>
                <div>
                  <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-error-page" name="save-as-pdf-pdfcrowd[error_page]" value="<?php echo($error_page);?>" placeholder="<?php esc_attr_e('URL or slug', $this->plugin_name);?>" autocomplete="off" />
                </div>
                <div class="save-as-pdf-pdfcrowd-description">
                  <div>
  Webpage used when the plugin raises an error.
  You can specify either a URL or a WordPress page slug name.
  If left empty, the default error page will be shown.
</div> <div>
  The details about the error can be accessed via
  <code>$_GET['error-code']</code>,
  <code>$_GET['error-message']</code> and
  <code>$_GET['error-details']</code>.
</div>
                  <div>Example page:</div>
                  <pre>&lt;h1&gt;Download Error&lt;/h1&gt;
&lt;p&gt;
    Something wrong happened. Error Code:
    &lt;?php
    echo sanitize_text_field($_GET['error-code']);
    ?&gt;
&lt;/p&gt;
&lt;p class="error"&gt;
    Message:
    &lt;?php
    echo !empty($_GET['error-message'])
        ? sanitize_text_field(stripslashes($_GET['error-message']))
        : 'An unknown error occurred.';
    ?&gt;
&lt;/p&gt;</pre>
                </div>
                <div class='save-as-pdf-pdfcrowd-devi'>
                  Shortcode and function parameter: "<strong>error_page</strong>"
                </div>
              </td>
            </tr>
        </tbody>
    </table>
</div>
