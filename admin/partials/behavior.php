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
    <a href='#' class='save-as-pdf-pdfcrowd-expert button-secondary'>Show Parameters</a>

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
                            <input type="radio" id="save-as-pdf-pdfcrowd-button-disp-attachment" name="save-as-pdf-pdfcrowd[button_disposition]" value="attachment" <?php checked( $button_disposition, "attachment" ); ?> />
                            Download PDF
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-button-disp-inline">
                            <input type="radio" id="save-as-pdf-pdfcrowd-button-disp-inline" name="save-as-pdf-pdfcrowd[button_disposition]" value="inline" <?php checked( $button_disposition, "inline" ); ?> />
                            Open PDF in the current browser tab
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-button-disp-inline_new_tab">
                            <input type="radio" id="save-as-pdf-pdfcrowd-button-disp-inline_new_tab" name="save-as-pdf-pdfcrowd[button_disposition]" value="inline_new_tab" <?php checked( $button_disposition, "inline_new_tab" ); ?> />
                            Open PDF in a new browser tab
                        </label><br>
                    </fieldset>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_disposition</strong>"<br>Possible values: "attachment", "inline", "inline_new_tab"
                    </p>
                    <p class='description'>
                        The action which is done when the conversion button is clicked.
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd[conversion_mode]">
                        Conversion Mode
                    </label>
                </th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span>Conversion Mode</span>
                        </legend>
                        <label for="save-as-pdf-pdfcrowd-conversion-mode-auto">
                            <input type="radio" id="save-as-pdf-pdfcrowd-conversion-mode-auto" name="save-as-pdf-pdfcrowd[conversion_mode]" value="auto" <?php checked( $conversion_mode, "auto" ); ?> />
                            Auto
                            <p class='description'>
                                If web page URL is specified explicitly, the "url" mode is used otherwise "upload" mode is used.
                            </p>
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-conversion-mode-url">
                            <input type="radio" id="save-as-pdf-pdfcrowd-conversion-mode-url" name="save-as-pdf-pdfcrowd[conversion_mode]" value="url" <?php checked( $conversion_mode, "url" ); ?> />
                            Url
                            <p class='description'>
                                The web page URL is uploaded for the conversion.<br>This mode is suitable for a public website.
                            </p>
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-conversion-mode-upload">
                            <input type="radio" id="save-as-pdf-pdfcrowd-conversion-mode-upload" name="save-as-pdf-pdfcrowd[conversion_mode]" value="upload" <?php checked( $conversion_mode, "upload" ); ?> />
                            Upload
                            <p class='description'>
                                The contents of the web page is uploaded for the conversion.<br>This mode is suitable for any website, password-protected or not publicly accessible website.
                            </p>
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-conversion-mode-development">
                            <input type="radio" id="save-as-pdf-pdfcrowd-conversion-mode-development" name="save-as-pdf-pdfcrowd[conversion_mode]" value="development" <?php checked( $conversion_mode, "development" ); ?> />
                            Development
                            <p class='description'>
                                The contents of the web page and some local assets are uploaded for the conversion.<br>This mode is suitable for a website running on a localhost.<br>Local images may not appear in the converted document.
                            </p>
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-conversion-mode-content">
                            <input type="radio" id="save-as-pdf-pdfcrowd-conversion-mode-content" name="save-as-pdf-pdfcrowd[conversion_mode]" value="content" <?php checked( $conversion_mode, "content" ); ?> />
                            Content
                            <p class='description'>
                                The current HTML contents shown in the browser is sent for conversion.<br>This mode is suitable for web forms and dynamic HTML contents.
                            </p>
                        </label><br>
                    </fieldset>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>conversion_mode</strong>"<br>Possible values: "auto", "url", "upload", "development", "content"
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd[auto_use_cookies]">
                        Auto Use Cookies
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-auto-use-cookies" name="save-as-pdf-pdfcrowd[auto_use_cookies]" value="1" <?php checked( $auto_use_cookies, 1 ); ?> />
                    <p class='description'>
                        All cookies are sent automatically into the conversion process. It is suitable for a password-protected websites. These cookies are appended to the cookies defined on the "General Options" settings tab.
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-pdf-created-callback" name="save-as-pdf-pdfcrowd[pdf_created_callback]" value="<?php echo($pdf_created_callback);?>" placeholder="<?php esc_attr_e('Your function name', $this->plugin_name);?>" />
                    <div class='save-as-pdf-pdfcrowd-m-description' style='max-height: none'>
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>pdf_created_callback</strong>"
                        </p>
                        <p class='description'>
                            The callback is invoked when the output pdf is created. The callback is useful for custom actions, e.g. saving the pdf to a local folder, setting a custom HTTP response header.
                            <br/>
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
        </tbody>
    </table>
</div>
