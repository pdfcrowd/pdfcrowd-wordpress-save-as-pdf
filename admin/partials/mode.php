<?php

/**
* Partial of the mode settings
*
*
*
* @link       https://pdfcrowd.com/save-as-pdf-wordpress-plugin/
* @since      2.3.0
*
* @package    Save_As_Pdf_Pdfcrowd
* @subpackage Save_As_Pdf_Pdfcrowd/admin/partials
*/
?>

 <div id="save-as-pdf-pdfcrowd-mode"
      class="save-as-pdf-pdfcrowd-category-wrap">
   <div class="save-as-pdf-pdfcrowd-heading-wrap save-as-pdf-pdfcrowd-basic-heading-wrap">
     <h2>Mode</h2>
   </div>

    <table class="form-table">
        <tbody>
          <tr class="save-as-pdf-pdfcrowd-set-group"
              data-default="url">
                <th scope="row">
                  Conversion Mode
                </th>
                <td>
                    <div class="save-as-pdf-pdfcrowd-devi save-as-pdf-pdfcrowd-mb-2">
                        Shortcode and function parameter: "<strong>conversion_mode</strong>"<br>Possible values: "url", "upload", "content", "development", "auto"
                    </div>
                    <fieldset id="save-as-pdf-pdfcrowd-conversion_mode">
                        <legend class="screen-reader-text">
                            <span>Conversion Mode</span>
                        </legend>
                        <div>
                        <label for="save-as-pdf-pdfcrowd-conversion-mode-url">
                            <input type="radio" id="save-as-pdf-pdfcrowd-conversion-mode-url" name="save-as-pdf-pdfcrowd[conversion_mode]" value="url" <?php checked( $conversion_mode, "url" ); ?> autocomplete="off" />
                            URL
                        </label>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-description save-as-pdf-pdfcrowd-nested-dsc'>
                           The web page URL is uploaded for the conversion.<br>This mode is suitable for a public website.
                        </div>
                        <div>
                        <label for="save-as-pdf-pdfcrowd-conversion-mode-upload">
                            <input type="radio" id="save-as-pdf-pdfcrowd-conversion-mode-upload" name="save-as-pdf-pdfcrowd[conversion_mode]" value="upload" <?php checked( $conversion_mode, "upload" ); ?> autocomplete="off" />
                            Upload
                        </label>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-description save-as-pdf-pdfcrowd-nested-dsc'>
                           The contents of the web page is uploaded for the conversion.<br>This mode is suitable for any website, password-protected or not publicly accessible website.
                        </div>
                        <div>
                        <label for="save-as-pdf-pdfcrowd-conversion-mode-content">
                            <input type="radio" id="save-as-pdf-pdfcrowd-conversion-mode-content" name="save-as-pdf-pdfcrowd[conversion_mode]" value="content" <?php checked( $conversion_mode, "content" ); ?> autocomplete="off" />
                            Content
                        </label>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-description save-as-pdf-pdfcrowd-nested-dsc'>
                           The current HTML contents shown in the browser is sent for conversion.<br>This mode is suitable for web forms and dynamic HTML contents.<br>It is recommended to check <a href="#" onclick="jQuery('#nav-save-as-pdf-pdfcrowd-general-options').click();">Disable JavaScript</a> option too or disable WordPress caching.
                        </div>
                          <div id="save-as-pdf-pdfcrowd-cm-content-options"
                               class="save-as-pdf-pdfcrowd-sub-option">
                               <input
                                 type="checkbox"
                                 id="save-as-pdf-pdfcrowd-button-user-drawings"
                                 name="save-as-pdf-pdfcrowd[button_user_drawings]"
                                 data-parent-opt="#save-as-pdf-pdfcrowd-conversion-mode-content"
                                 value="1" <?php checked( $button_user_drawings, 1 ); ?> autocomplete="off" />
                             <label for="save-as-pdf-pdfcrowd-button-user-drawings"
                                    style="margin: 0 !important">
                                User-Created Drawings
                            </label>
                            <div class="save-as-pdf-pdfcrowd-nested-dsc">
                               <div class="save-as-pdf-pdfcrowd-description">
                                Enable this option if you want to capture user-created canvas drawings.
                               </div>
                               <div class='save-as-pdf-pdfcrowd-devi'>
                                 Shortcode and function parameter: "<strong>button_user_drawings</strong>"<br>Possible values: 0, 1
                               </div>
                            </div>
                        </div>
                        <div>
                        <label for="save-as-pdf-pdfcrowd-conversion-mode-development">
                            <input type="radio" id="save-as-pdf-pdfcrowd-conversion-mode-development" name="save-as-pdf-pdfcrowd[conversion_mode]" value="development" <?php checked( $conversion_mode, "development" ); ?> autocomplete="off" />
                            Development
                        </label>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-description save-as-pdf-pdfcrowd-nested-dsc'>
                           The contents of the web page and some local assets are uploaded for the conversion.<br>This mode is suitable for a website which is not accessible from the Internet (e.g. localhost).<br>Local images and some CSS may not appear in the converted document.
                        </div>
                        <div>
                        <label for="save-as-pdf-pdfcrowd-conversion-mode-auto">
                            <input type="radio" id="save-as-pdf-pdfcrowd-conversion-mode-auto" name="save-as-pdf-pdfcrowd[conversion_mode]" value="auto" <?php checked( $conversion_mode, "auto" ); ?> autocomplete="off" />
                            Auto
                        </label>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-description save-as-pdf-pdfcrowd-nested-dsc'>
                           If web page URL is specified explicitly, the "url" mode is used otherwise "upload" mode is used.
                        </div>
                    </fieldset>
                    <div class="save-as-pdf-pdfcrowd-description">
                      Specify the source for the conversion to PDF.
                    </div>
                </td>
            </tr>
          <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
              data-default="auto">
                <th scope="row">
                  URL Lookup
                </th>
                <td>
                    <div class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>url_lookup</strong>"<br>Possible values: "auto", "location", "permalink"
                    </div>
                    <fieldset id="save-as-pdf-pdfcrowd-url-lookup">
                        <legend class="screen-reader-text">
                            <span>URL Lookup</span>
                        </legend>
                        <div>
                        <label for="save-as-pdf-pdfcrowd-url-lookup-auto">
                            <input type="radio" id="save-as-pdf-pdfcrowd-url-lookup-auto" name="save-as-pdf-pdfcrowd[url_lookup]" value="auto" <?php checked( $url_lookup, "auto" ); ?> autocomplete="off" />
                            Auto
                        </label>
                        </div>
                        <div>
                        <label for="save-as-pdf-pdfcrowd-url-lookup-location">
                            <input type="radio" id="save-as-pdf-pdfcrowd-url-lookup-location" name="save-as-pdf-pdfcrowd[url_lookup]" value="location" <?php checked( $url_lookup, "location" ); ?> autocomplete="off" />
                            Location
                        </label>
                        </div>
                        <div>
                        <label for="save-as-pdf-pdfcrowd-url-lookup-permalink">
                            <input type="radio" id="save-as-pdf-pdfcrowd-url-lookup-permalink" name="save-as-pdf-pdfcrowd[url_lookup]" value="permalink" <?php checked( $url_lookup, "permalink" ); ?> autocomplete="off" />
                            Permalink
                        </label>
                        </div>
                    </fieldset>
                    <div class='save-as-pdf-pdfcrowd-description'>
                      It allows to choose how to retrieve URLs for the Conversion Mode-URL. It is suitable for a website using different location than permalink.
                    </div>
                </td>
            </tr>
            <?php if($enable_cookies_opt): ?>
          <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
              data-default="0">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-auto-use-cookies">
                        Auto Use Cookies
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-auto-use-cookies" name="save-as-pdf-pdfcrowd[auto_use_cookies]" value="1" <?php checked( $auto_use_cookies, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-description'>
                        All cookies are sent automatically into the conversion process. It is suitable for a password-protected website. These cookies are appended to the
                        <a href="#" onclick="jQuery('#nav-save-as-pdf-pdfcrowd-general-options').click();">
                            Cookies
                        </a>
                        option.
                    </div>
                    <div class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>auto_use_cookies</strong>"<br>Possible values: 0, 1
                    </div>
                </td>
            </tr>
            <?php endif; ?>
          <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
              data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-diagnostics">
                      Diagnostics
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-diagnostics" name="save-as-pdf-pdfcrowd[diagnostics]" value="1" <?php checked( $diagnostics, 1 ); ?> autocomplete="off" />
                    <div class="save-as-pdf-pdfcrowd-description">
                      <div>
  <strong>Warning:</strong>
  for developers only
</div> <div>
  Diagnostics data is displayed above the button.
  It helps to identify the issue with the button appearance or
  the conversion process.
</div>
                    </div>
                    <div class='save-as-pdf-pdfcrowd-devi'>
                      Shortcode and function parameter: "<strong>diagnostics</strong>"<br>Possible values: 0, 1
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
