<?php

/**
* Partial of the mode settings
*
*
*
* @link       https://pdfcrowd.com/save-as-pdf-image-wordpress-plugin/
* @since      2.3.0
*
* @package    Save_As_Pdf_Pdfcrowd
* @subpackage Save_As_Pdf_Pdfcrowd/admin/partials
*/
?>

<div id="save-as-pdf-pdfcrowd-mode" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">
    <h2>Mode</h2>
    <a href='#' class='save-as-pdf-pdfcrowd-expert button-secondary'>Show parameters</a>
    <p>
       The following settings affect the selection of the HTML source for conversion. By combining the parameters appropriately, you will get the desired output.
    </p>

    <table class="form-table">
        <tbody>
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
                        <label for="save-as-pdf-pdfcrowd-conversion-mode-auto">
                            <input type="radio" id="save-as-pdf-pdfcrowd-conversion-mode-auto" name="save-as-pdf-pdfcrowd[conversion_mode]" value="auto" <?php checked( $conversion_mode, "auto" ); ?> autocomplete="off" />
                            Auto
                        </label>
                        </p>
                        <p class='description'>
                            If web page URL is specified explicitly, the "url" mode is used otherwise "upload" mode is used.
                        </p>
                    </fieldset>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>conversion_mode</strong>"<br>Possible values: "url", "upload", "content", "development", "auto"
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
        </tbody>
    </table>
</div>
