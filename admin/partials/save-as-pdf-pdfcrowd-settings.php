<?php

/**
* Partial of the clean up settings
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

<?php if(get_option('save_as_pdf_pdfcrowd_error_code')) : ?>
<div class='notice notice-error'><p><strong>
<?php esc_html_e(get_option('save_as_pdf_pdfcrowd_error_code')) ?>
 <a href="https://pdfcrowd.com/faq/how-to-resolve-plugin-license-errors/" target="_blank">Resolve</a> this issue.</strong></p></div>
<?php endif; ?>

<div
  id="save-as-pdf-pdfcrowd-settings-set"
  class="save-as-pdf-pdfcrowd-metaboxes">

  <div
    id="save-as-pdf-pdfcrowd-quick-setup"
    class="save-as-pdf-pdfcrowd-basic-input save-as-pdf-pdfcrowd-category-wrap">
    <div class="save-as-pdf-pdfcrowd-heading-wrap save-as-pdf-pdfcrowd-basic-heading-wrap">
      <h2>Quick Setup</h2>
    </div>
    <div class="save-as-pdf-pdfcrowd-not-filtered save-as-pdf-pdfcrowd-description">
      The quick setup wizard will help you to configure the most
      common settings.
    </div>
    <table>
      <tr class="save-as-pdf-pdfcrowd-set-group">
        <th style="font-weight: normal; padding: .5em 0;">
          <label>
            <div id="save-as-pdf-pdfcrowd-wizard-run"
                 class="button-secondary"
                 onclick="return save_as_pdf_pdfcrowd_submit_action('wizard');">
                 Run Quick Setup
            </div>
          </label>
        </th>
      </tr>
    </table>
  </div>

  <?php
   require_once('appearance.php');
   require_once('behavior.php');
   require_once('mode.php');
   ?>


   <div id="save-as-pdf-pdfcrowd-api-settings">
     <div id="save-as-pdf-pdfcrowd-page-setup"
          class="save-as-pdf-pdfcrowd-category-wrap">
       <div class="save-as-pdf-pdfcrowd-heading-wrap save-as-pdf-pdfcrowd-basic-heading-wrap">
         <h2>Page Setup</h2>
       </div>


           <table class="form-table">
        <tbody>
            <tr class="save-as-pdf-pdfcrowd-set-group "
                data-default="A4">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_size">
                        Page Size
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[page_size]" id="save-as-pdf-pdfcrowd-page_size" autocomplete="off">
                    <option value="" <?php selected($page_size, '');?>>-- default --</option>
                    <option value="A0" <?php selected($page_size, 'A0');?>>A0</option>
                    <option value="A1" <?php selected($page_size, 'A1');?>>A1</option>
                    <option value="A2" <?php selected($page_size, 'A2');?>>A2</option>
                    <option value="A3" <?php selected($page_size, 'A3');?>>A3</option>
                    <option value="A4" <?php selected($page_size, 'A4');?>>A4</option>
                    <option value="A5" <?php selected($page_size, 'A5');?>>A5</option>
                    <option value="A6" <?php selected($page_size, 'A6');?>>A6</option>
                    <option value="Letter" <?php selected($page_size, 'Letter');?>>Letter</option>
                    </select>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the output page size using standard formats (A4, Letter, A3, etc.). Use A4 for international documents, Letter for US-based content, or larger sizes like A3 for posters and presentations.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>page_size</strong>"<br>Possible values: "A0", "A1", "A2", "A3", "A4", "A5", "A6", "Letter"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group "
                data-default="8.27in">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_width">
                        Page Width
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-page_width"
                        name="save-as-pdf-pdfcrowd[page_width]"
                        value="<?php esc_attr_e($page_width); ?>"
                        placeholder="8.27in" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set custom page dimensions when standard sizes don't fit your needs. Useful for banners, receipts, custom forms, or when matching specific printing equipment.
The safe maximum is <code>200in</code> - larger sizes may fail to open in some PDF viewers. For standard sizes like A4 or Letter, use the predefined page size option instead.

                              The value must be specified in inches 'in', millimeters 'mm', centimeters 'cm', pixels 'px', or points 'pt'.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>page_width</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group "
                data-default="11.7in">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_height">
                        Page Height
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-page_height"
                        name="save-as-pdf-pdfcrowd[page_height]"
                        value="<?php esc_attr_e($page_height); ?>"
                        placeholder="11.7in" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set custom page height for specific formats like receipts, banners, or legal documents. Set to <code>"-1"</code> for a single-page PDF that expands to fit all content vertically - ideal for web pages, infographics, or documents where page breaks are undesirable.
The safe maximum is <code>200in</code> otherwise some viewers cannot open the PDF. For standard sizes, use the predefined page size option instead.

                              The value must be -1 or specified in inches 'in', millimeters 'mm', centimeters 'cm', pixels 'px', or points 'pt'.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>page_height</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group "
                data-default="portrait">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-orientation">
                        Orientation
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[orientation]" id="save-as-pdf-pdfcrowd-orientation" autocomplete="off">
                    <option value="" <?php selected($orientation, '');?>>-- default --</option>
                    <option value="landscape" <?php selected($orientation, 'landscape');?>>landscape</option>
                    <option value="portrait" <?php selected($orientation, 'portrait');?>>portrait</option>
                    </select>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the output page orientation to portrait or landscape. Use landscape for wide content like spreadsheets, charts, or dashboards. Use portrait for standard documents and text-heavy content.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>orientation</strong>"<br>Possible values: "landscape", "portrait"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group "
                data-default="0.4in">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-margin_top">
                        Margin Top
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-margin_top"
                        name="save-as-pdf-pdfcrowd[margin_top]"
                        value="<?php esc_attr_e($margin_top); ?>"
                        placeholder="0.4in" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Control white space at the top of the page. Increase for header space, formal documents, or annotation room (e.g., 1in or more). Decrease to maximize content area or fit more content (e.g., 5mm to 10mm).
Default 0.4in balances readability with space efficiency. Set to 0 for full-bleed designs. Affects where content starts and where headers appear.

                              The value must be specified in inches 'in', millimeters 'mm', centimeters 'cm', pixels 'px', or points 'pt'.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>margin_top</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group "
                data-default="0.4in">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-margin_right">
                        Margin Right
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-margin_right"
                        name="save-as-pdf-pdfcrowd[margin_right]"
                        value="<?php esc_attr_e($margin_right); ?>"
                        placeholder="0.4in" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Control white space on the right edge of the page. Increase for binding/hole-punch clearance or note-taking space (e.g., 1in or more). Decrease to fit wider content (e.g., 5mm to 10mm).
Default 0.4in balances readability with space efficiency. Set to 0 for full-bleed designs. Affects where content wraps and text line length.

                              The value must be specified in inches 'in', millimeters 'mm', centimeters 'cm', pixels 'px', or points 'pt'.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>margin_right</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group "
                data-default="0.4in">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-margin_bottom">
                        Margin Bottom
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-margin_bottom"
                        name="save-as-pdf-pdfcrowd[margin_bottom]"
                        value="<?php esc_attr_e($margin_bottom); ?>"
                        placeholder="0.4in" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Control white space at the bottom of the page. Increase for footer space, page numbers, or formal documents (e.g., 1in or more). Decrease to fit more content per page (e.g., 5mm to 10mm).
Default 0.4in balances readability with space efficiency. Set to 0 for full-bleed designs. Affects where content ends and where footers appear.

                              The value must be specified in inches 'in', millimeters 'mm', centimeters 'cm', pixels 'px', or points 'pt'.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>margin_bottom</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group "
                data-default="0.4in">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-margin_left">
                        Margin Left
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-margin_left"
                        name="save-as-pdf-pdfcrowd[margin_left]"
                        value="<?php esc_attr_e($margin_left); ?>"
                        placeholder="0.4in" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Control white space on the left edge of the page. Increase for binding/hole-punch clearance or note-taking space (e.g., 1in or more). Decrease to fit wider content (e.g., 5mm to 10mm).
Default 0.4in balances readability with space efficiency. Set to 0 for full-bleed designs. Affects where content starts horizontally and text line length.

                              The value must be specified in inches 'in', millimeters 'mm', centimeters 'cm', pixels 'px', or points 'pt'.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>margin_left</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-no_margins">
                        No Margins
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_margins" name="save-as-pdf-pdfcrowd[no_margins]" value="1" <?php checked( $no_margins, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Disable all page margins to use the entire page area. Use this for full-bleed designs where content should extend to the page edges, such as posters, certificates, or branded materials.
Combine with custom CSS to ensure your content fills the page properly.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>no_margins</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-print_page_range">
                        Print Page Range
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-print_page_range"
                        name="save-as-pdf-pdfcrowd[print_page_range]"
                        value="<?php esc_attr_e($print_page_range); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the page range to print when you only need specific pages from the conversion. Use this to extract individual pages (e.g., "2"), specific ranges (e.g., "3-7"), or combinations (e.g., "1,4-6,last"). Ideal for creating excerpts from long documents or excluding cover pages from batch processing.
                              A comma separated list of page numbers or ranges. Special strings may be used, such as 'odd', 'even' and 'last'.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>print_page_range</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group "
                data-default="medium">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-content_viewport_width">
                        Content Viewport Width
                    </label>
                </th>
                <td>
                    <div class="save-as-pdf-pdfcrowd-editable-select">
                    <select id="save-as-pdf-pdfcrowd-content_viewport_width-s-wrap" autocomplete="off">
                    <option value="" <?php selected($content_viewport_width, '');?>>-- default --</option>
                    <option value="balanced" <?php selected($content_viewport_width, 'balanced');?>>balanced</option>
                    <option value="small" <?php selected($content_viewport_width, 'small');?>>small</option>
                    <option value="medium" <?php selected($content_viewport_width, 'medium');?>>medium</option>
                    <option value="large" <?php selected($content_viewport_width, 'large');?>>large</option>
                    <option value="extra-large" <?php selected($content_viewport_width, 'extra-large');?>>extra-large</option>
                    <option value="pixel width" <?php selected($content_viewport_width, 'pixel width');?> data-custom="number_value">pixel width</option>
                    </select>
                    <div class="save-as-pdf-pdfcrowd-ed-sel-input-wrap">
                    <input type="text"
                           class="regular-text"
                           name="save-as-pdf-pdfcrowd[content_viewport_width]"
                           id="save-as-pdf-pdfcrowd-content_viewport_width"
                           value="<?php esc_attr_e($content_viewport_width); ?>"
                           placeholder="Enter custom number"
                           autocomplete="off">
                    <span style="margin-left: .5rem">px</span>
                    </div>
                    </div>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the viewport width for formatting the HTML content when generating a PDF. Use this to control how responsive designs render - prevent mobile styles from applying when you want desktop layout, or ensure content appears at the right width.
Specify a viewport width to control content rendering, ensuring it mimics the appearance on various devices or matches specific design requirements.

                          </div>
                            <br>Possible values: <ul><li>"balanced" - The smart option to adjust the viewport width dynamically to fit the print area, ensuring an optimal layout.</li><li>"small" - A compact layout where less text fits on each PDF page, ideal for detailed sections or mobile views.</li><li>"medium" - A balanced amount of text per page, striking a good compromise between readability and content density.</li><li>"large" - A broader layout that accommodates more text per page, perfect for reducing page count and enhancing flow.</li><li>"extra-large" - Maximize the text per page, creating a spacious and content-rich PDF, akin to a widescreen experience.</li><li>A precise viewport width in pixels, such as <code>1024px</code>, to tailor the PDF's text density to your specific requirements. The value must be in the range 96-65000px.</li></ul>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>content_viewport_width</strong>"<br>Possible values: "balanced", "small", "medium", "large", "extra-large", "specific numerical value"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="auto">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-content_viewport_height">
                        Content Viewport Height
                    </label>
                </th>
                <td>
                    <div class="save-as-pdf-pdfcrowd-editable-select">
                    <select id="save-as-pdf-pdfcrowd-content_viewport_height-s-wrap" autocomplete="off">
                    <option value="" <?php selected($content_viewport_height, '');?>>-- default --</option>
                    <option value="auto" <?php selected($content_viewport_height, 'auto');?>>auto</option>
                    <option value="large" <?php selected($content_viewport_height, 'large');?>>large</option>
                    <option value="pixel height" <?php selected($content_viewport_height, 'pixel height');?> data-custom="number_value">pixel height</option>
                    </select>
                    <div class="save-as-pdf-pdfcrowd-ed-sel-input-wrap">
                    <input type="text"
                           class="regular-text"
                           name="save-as-pdf-pdfcrowd[content_viewport_height]"
                           id="save-as-pdf-pdfcrowd-content_viewport_height"
                           value="<?php esc_attr_e($content_viewport_height); ?>"
                           placeholder="Enter custom number"
                           autocomplete="off">
                    <span style="margin-left: .5rem">px</span>
                    </div>
                    </div>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the viewport height for formatting the HTML content when generating a PDF. Specify a viewport height to enforce loading of lazy-loaded images and affect vertical positioning of absolutely positioned elements within the content.
                          </div>
                            <br>Possible values: <ul><li>"auto" - The height of the print area is used. For most pages, this is sufficient. Use "large" or custom values for pages with extensive lazy-loaded content.</li><li>"large" - Value suitable for documents with extensive lazy-loaded content.</li><li>A specific numerical value, such as <code>10000px</code>, to set as the window height, allowing precise control based on the document's requirements.</li></ul>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>content_viewport_height</strong>"<br>Possible values: "auto", "large", "specific numerical value"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="auto">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-content_fit_mode">
                        Content Fit Mode
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[content_fit_mode]" id="save-as-pdf-pdfcrowd-content_fit_mode" autocomplete="off">
                    <option value="" <?php selected($content_fit_mode, '');?>>-- default --</option>
                    <option value="auto" <?php selected($content_fit_mode, 'auto');?>>auto</option>
                    <option value="smart-scaling" <?php selected($content_fit_mode, 'smart-scaling');?>>smart-scaling</option>
                    <option value="no-scaling" <?php selected($content_fit_mode, 'no-scaling');?>>no-scaling</option>
                    <option value="viewport-width" <?php selected($content_fit_mode, 'viewport-width');?>>viewport-width</option>
                    <option value="content-width" <?php selected($content_fit_mode, 'content-width');?>>content-width</option>
                    <option value="single-page" <?php selected($content_fit_mode, 'single-page');?>>single-page</option>
                    <option value="single-page-ratio" <?php selected($content_fit_mode, 'single-page-ratio');?>>single-page-ratio</option>
                    </select>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Specify the mode for fitting the HTML content to the print area by upscaling or downscaling it. Use this to prevent content from being cut off at page edges or to enable smart scaling of oversized content.
                          </div>
                            <br>Possible values: <ul><li>"auto" - Automatic mode</li><li>"smart-scaling" - Smartscaling to fit more content into the print area.</li><li>"no-scaling" - No scaling is performed. Content may be cut off if it exceeds page boundaries. Use for pixel-perfect output.</li><li>"viewport-width" - The viewport width fits the print area width.</li><li>"content-width" - The HTML content width fits the print area width.</li><li>"single-page" - The entire HTML content fits the print area of a single page.</li><li>"single-page-ratio" - The entire HTML content fits the print area of a single page, maintaining the aspect ratio of the page height and width.</li></ul>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>content_fit_mode</strong>"<br>Possible values: "auto", "smart-scaling", "no-scaling", "viewport-width", "content-width", "single-page", "single-page-ratio"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="trailing">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-remove_blank_pages">
                        Remove Blank Pages
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[remove_blank_pages]" id="save-as-pdf-pdfcrowd-remove_blank_pages" autocomplete="off">
                    <option value="trailing" <?php selected($remove_blank_pages, 'trailing');?>>trailing</option>
                    <option value="all" <?php selected($remove_blank_pages, 'all');?>>all</option>
                    <option value="none" <?php selected($remove_blank_pages, 'none');?>>none</option>
                    </select>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Specify which blank pages to exclude from the output document to create cleaner PDFs. Use <code>"trailing"</code> to remove empty pages at the end caused by page break issues. Use <code>"all"</code> to remove blank pages throughout the document when converting content with formatting quirks. Helps eliminate unwanted white pages from the final output.
                          </div>
                            <br>Possible values: <ul><li>"trailing" - Trailing blank pages are removed from the document.</li><li>"all" - All empty pages are removed from the document.</li><li>"none" - No blank page is removed from the document.</li></ul>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>remove_blank_pages</strong>"<br>Possible values: "trailing", "all", "none"
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
     </div>
     <div id="save-as-pdf-pdfcrowd-header-and-footer"
          class="save-as-pdf-pdfcrowd-category-wrap">
       <div class="save-as-pdf-pdfcrowd-heading-wrap ">
         <h2>Header & Footer</h2>
       </div>

         <div
           style="margin-top: 1em"
           class="save-as-pdf-pdfcrowd-not-filtered save-as-pdf-pdfcrowd-adv-input">
           <div>
             <span class="button-secondary" id="save-as-pdf-pdfcrowd-use-predefined-h-html">
               Set predefined header HTML
             </span>
             <span class="button-secondary" id="save-as-pdf-pdfcrowd-use-predefined-f-html">
               Set predefined footer HTML
             </span>
           </div>
         </div>

           <table class="form-table">
        <tbody>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-header_url">
                        Header URL
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-header_url"
                        name="save-as-pdf-pdfcrowd[header_url]"
                        value="<?php esc_attr_e($header_url); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Load an HTML code from the specified URL and use it as the page header. The following classes can be used in the HTML. The content of the respective elements will be expanded as follows: <ul> <li><code>pdfcrowd-page-count</code> - the total page count of printed pages</li> <li><code>pdfcrowd-page-number</code> - the current page number</li> <li><code>pdfcrowd-source-url</code> - the source URL of the converted document</li> <li><code>pdfcrowd-source-title</code> - the title of the converted document</li> </ul> The following attributes can be used: <ul> <li><code>data-pdfcrowd-number-format</code> - specifies the type of the used numerals. Allowed values: <ul> <li><code>arabic</code> - Arabic numerals, they are used by default</li> <li><code>roman</code> - Roman numerals</li> <li><code>eastern-arabic</code> - Eastern Arabic numerals</li> <li><code>bengali</code> - Bengali numerals</li> <li><code>devanagari</code> - Devanagari numerals</li> <li><code>thai</code> - Thai numerals</li> <li><code>east-asia</code> - Chinese, Vietnamese, Japanese and Korean numerals</li> <li><code>chinese-formal</code> - Chinese formal numerals</li> </ul> Example:<br> <code>&lt;span class='pdfcrowd-page-number' data-pdfcrowd-number-format='roman'&gt;&lt;/span&gt;</code> </li> <li><code>data-pdfcrowd-placement</code> - specifies where to place the source URL. Allowed values: <ul> <li>The URL is inserted to the content <ul> <li> Example: <code>&lt;span class='pdfcrowd-source-url'&gt;&lt;/span&gt;</code><br> will produce <code>&lt;span&gt;http://example.com&lt;/span&gt;</code> </li> </ul> </li> <li><code>href</code> - the URL is set to the href attribute <ul> <li> Example: <code>&lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href'&gt;Link to source&lt;/a&gt;</code><br> will produce <code>&lt;a href='http://example.com'&gt;Link to source&lt;/a&gt;</code> </li> </ul> </li> <li><code>href-and-content</code> - the URL is set to the href attribute and to the content <ul> <li> Example: <code>&lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href-and-content'&gt;&lt;/a&gt;</code><br> will produce <code>&lt;a href='http://example.com'&gt;http://example.com&lt;/a&gt;</code> </li> </ul> </li> </ul> </li> </ul>
                              Supported protocols are http:// and https://.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>header_url</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-header_html">
                        Header HTML
                    </label>
                </th>
                <td>
                    <textarea id="save-as-pdf-pdfcrowd-header_html" name="save-as-pdf-pdfcrowd[header_html]" placeholder=""
                    rows=5
                    <?php if(!current_user_can('unfiltered_html')) echo 'readonly'; ?>
                    cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php esc_html_e($header_html); ?></textarea>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the HTML header content with custom styling and dynamic page numbers. Use this to add page numbers, document titles, author names, dates, or company branding to the top of every page. Supports full HTML/CSS for complete design control.
Use special CSS classes like <code>pdfcrowd-page-number</code> and <code>pdfcrowd-page-count</code> for dynamic content. Ideal for reports, invoices, and professional documents.
 The following classes can be used in the HTML. The content of the respective elements will be expanded as follows: <ul> <li><code>pdfcrowd-page-count</code> - the total page count of printed pages</li> <li><code>pdfcrowd-page-number</code> - the current page number</li> <li><code>pdfcrowd-source-url</code> - the source URL of the converted document</li> <li><code>pdfcrowd-source-title</code> - the title of the converted document</li> </ul> The following attributes can be used: <ul> <li><code>data-pdfcrowd-number-format</code> - specifies the type of the used numerals. Allowed values: <ul> <li><code>arabic</code> - Arabic numerals, they are used by default</li> <li><code>roman</code> - Roman numerals</li> <li><code>eastern-arabic</code> - Eastern Arabic numerals</li> <li><code>bengali</code> - Bengali numerals</li> <li><code>devanagari</code> - Devanagari numerals</li> <li><code>thai</code> - Thai numerals</li> <li><code>east-asia</code> - Chinese, Vietnamese, Japanese and Korean numerals</li> <li><code>chinese-formal</code> - Chinese formal numerals</li> </ul> Example:<br> <code>&lt;span class='pdfcrowd-page-number' data-pdfcrowd-number-format='roman'&gt;&lt;/span&gt;</code> </li> <li><code>data-pdfcrowd-placement</code> - specifies where to place the source URL. Allowed values: <ul> <li>The URL is inserted to the content <ul> <li> Example: <code>&lt;span class='pdfcrowd-source-url'&gt;&lt;/span&gt;</code><br> will produce <code>&lt;span&gt;http://example.com&lt;/span&gt;</code> </li> </ul> </li> <li><code>href</code> - the URL is set to the href attribute <ul> <li> Example: <code>&lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href'&gt;Link to source&lt;/a&gt;</code><br> will produce <code>&lt;a href='http://example.com'&gt;Link to source&lt;/a&gt;</code> </li> </ul> </li> <li><code>href-and-content</code> - the URL is set to the href attribute and to the content <ul> <li> Example: <code>&lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href-and-content'&gt;&lt;/a&gt;</code><br> will produce <code>&lt;a href='http://example.com'&gt;http://example.com&lt;/a&gt;</code> </li> </ul> </li> </ul> </li> </ul>
                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>header_html</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="0.5in">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-header_height">
                        Header Height
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-header_height"
                        name="save-as-pdf-pdfcrowd[header_height]"
                        value="<?php esc_attr_e($header_height); ?>"
                        placeholder="0.5in" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the header height to allocate space for header content and prevent overlap with main content. Increase this if your header text is getting cut off or overlapping with page content. Must be large enough to accommodate your header HTML including any multi-line text or images.
                              The value must be specified in inches 'in', millimeters 'mm', centimeters 'cm', pixels 'px', or points 'pt'.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>header_height</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-footer_url">
                        Footer URL
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-footer_url"
                        name="save-as-pdf-pdfcrowd[footer_url]"
                        value="<?php esc_attr_e($footer_url); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Load an HTML code from the specified URL and use it as the page footer. The following classes can be used in the HTML. The content of the respective elements will be expanded as follows: <ul> <li><code>pdfcrowd-page-count</code> - the total page count of printed pages</li> <li><code>pdfcrowd-page-number</code> - the current page number</li> <li><code>pdfcrowd-source-url</code> - the source URL of the converted document</li> <li><code>pdfcrowd-source-title</code> - the title of the converted document</li> </ul> The following attributes can be used: <ul> <li><code>data-pdfcrowd-number-format</code> - specifies the type of the used numerals. Allowed values: <ul> <li><code>arabic</code> - Arabic numerals, they are used by default</li> <li><code>roman</code> - Roman numerals</li> <li><code>eastern-arabic</code> - Eastern Arabic numerals</li> <li><code>bengali</code> - Bengali numerals</li> <li><code>devanagari</code> - Devanagari numerals</li> <li><code>thai</code> - Thai numerals</li> <li><code>east-asia</code> - Chinese, Vietnamese, Japanese and Korean numerals</li> <li><code>chinese-formal</code> - Chinese formal numerals</li> </ul> Example:<br> <code>&lt;span class='pdfcrowd-page-number' data-pdfcrowd-number-format='roman'&gt;&lt;/span&gt;</code> </li> <li><code>data-pdfcrowd-placement</code> - specifies where to place the source URL. Allowed values: <ul> <li>The URL is inserted to the content <ul> <li> Example: <code>&lt;span class='pdfcrowd-source-url'&gt;&lt;/span&gt;</code><br> will produce <code>&lt;span&gt;http://example.com&lt;/span&gt;</code> </li> </ul> </li> <li><code>href</code> - the URL is set to the href attribute <ul> <li> Example: <code>&lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href'&gt;Link to source&lt;/a&gt;</code><br> will produce <code>&lt;a href='http://example.com'&gt;Link to source&lt;/a&gt;</code> </li> </ul> </li> <li><code>href-and-content</code> - the URL is set to the href attribute and to the content <ul> <li> Example: <code>&lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href-and-content'&gt;&lt;/a&gt;</code><br> will produce <code>&lt;a href='http://example.com'&gt;http://example.com&lt;/a&gt;</code> </li> </ul> </li> </ul> </li> </ul>
                              Supported protocols are http:// and https://.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>footer_url</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-footer_html">
                        Footer HTML
                    </label>
                </th>
                <td>
                    <textarea id="save-as-pdf-pdfcrowd-footer_html" name="save-as-pdf-pdfcrowd[footer_html]" placeholder=""
                    rows=5
                    <?php if(!current_user_can('unfiltered_html')) echo 'readonly'; ?>
                    cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php esc_html_e($footer_html); ?></textarea>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the HTML footer content with custom styling and dynamic page numbers. Use this to add page numbers, copyright notices, document dates, or company information to the bottom of every page. Supports full HTML/CSS for complete design control.
Use special CSS classes like <code>pdfcrowd-page-number</code> and <code>pdfcrowd-page-count</code> for dynamic content. Ideal for contracts, reports, and official documents.
 The following classes can be used in the HTML. The content of the respective elements will be expanded as follows: <ul> <li><code>pdfcrowd-page-count</code> - the total page count of printed pages</li> <li><code>pdfcrowd-page-number</code> - the current page number</li> <li><code>pdfcrowd-source-url</code> - the source URL of the converted document</li> <li><code>pdfcrowd-source-title</code> - the title of the converted document</li> </ul> The following attributes can be used: <ul> <li><code>data-pdfcrowd-number-format</code> - specifies the type of the used numerals. Allowed values: <ul> <li><code>arabic</code> - Arabic numerals, they are used by default</li> <li><code>roman</code> - Roman numerals</li> <li><code>eastern-arabic</code> - Eastern Arabic numerals</li> <li><code>bengali</code> - Bengali numerals</li> <li><code>devanagari</code> - Devanagari numerals</li> <li><code>thai</code> - Thai numerals</li> <li><code>east-asia</code> - Chinese, Vietnamese, Japanese and Korean numerals</li> <li><code>chinese-formal</code> - Chinese formal numerals</li> </ul> Example:<br> <code>&lt;span class='pdfcrowd-page-number' data-pdfcrowd-number-format='roman'&gt;&lt;/span&gt;</code> </li> <li><code>data-pdfcrowd-placement</code> - specifies where to place the source URL. Allowed values: <ul> <li>The URL is inserted to the content <ul> <li> Example: <code>&lt;span class='pdfcrowd-source-url'&gt;&lt;/span&gt;</code><br> will produce <code>&lt;span&gt;http://example.com&lt;/span&gt;</code> </li> </ul> </li> <li><code>href</code> - the URL is set to the href attribute <ul> <li> Example: <code>&lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href'&gt;Link to source&lt;/a&gt;</code><br> will produce <code>&lt;a href='http://example.com'&gt;Link to source&lt;/a&gt;</code> </li> </ul> </li> <li><code>href-and-content</code> - the URL is set to the href attribute and to the content <ul> <li> Example: <code>&lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href-and-content'&gt;&lt;/a&gt;</code><br> will produce <code>&lt;a href='http://example.com'&gt;http://example.com&lt;/a&gt;</code> </li> </ul> </li> </ul> </li> </ul>
                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>footer_html</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="0.5in">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-footer_height">
                        Footer Height
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-footer_height"
                        name="save-as-pdf-pdfcrowd[footer_height]"
                        value="<?php esc_attr_e($footer_height); ?>"
                        placeholder="0.5in" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the footer height to allocate space for footer content and prevent overlap with main content. Increase this if your footer text is getting cut off or overlapping with page content. Must be large enough to accommodate your footer HTML including any multi-line text or images.
                              The value must be specified in inches 'in', millimeters 'mm', centimeters 'cm', pixels 'px', or points 'pt'.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>footer_height</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-no_header_footer_horizontal_margins">
                        No Header Footer Horizontal Margins
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_header_footer_horizontal_margins" name="save-as-pdf-pdfcrowd[no_header_footer_horizontal_margins]" value="1" <?php checked( $no_header_footer_horizontal_margins, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Disable horizontal page margins for header and footer. The header/footer contents width will be equal to the physical page width.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>no_header_footer_horizontal_margins</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-exclude_header_on_pages">
                        Exclude Header On Pages
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-exclude_header_on_pages"
                        name="save-as-pdf-pdfcrowd[exclude_header_on_pages]"
                        value="<?php esc_attr_e($exclude_header_on_pages); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                             The page header content is not printed on the specified pages. To remove the entire header area, use the <a href="#set_conversion_config">conversion config</a>.
                              A comma separated list of page numbers.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>exclude_header_on_pages</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-exclude_footer_on_pages">
                        Exclude Footer On Pages
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-exclude_footer_on_pages"
                        name="save-as-pdf-pdfcrowd[exclude_footer_on_pages]"
                        value="<?php esc_attr_e($exclude_footer_on_pages); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                             The page footer content is not printed on the specified pages. To remove the entire footer area, use the <a href="#set_conversion_config">conversion config</a>.
                              A comma separated list of page numbers.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>exclude_footer_on_pages</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="100">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-header_footer_scale_factor">
                        Header Footer Scale Factor
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-header_footer_scale_factor"
                        name="save-as-pdf-pdfcrowd[header_footer_scale_factor]"
                        value="<?php esc_attr_e($header_footer_scale_factor); ?>"
                        placeholder="100" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the scaling factor (zoom) for the header and footer.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>header_footer_scale_factor</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="0">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_numbering_offset">
                        Page Numbering Offset
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-page_numbering_offset"
                        name="save-as-pdf-pdfcrowd[page_numbering_offset]"
                        value="<?php esc_attr_e($page_numbering_offset); ?>"
                        placeholder="0" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the numbering offset for page numbers in header/footer HTML to continue page numbering from a previous document. Use this when generating document sections separately - for example, if you have already generated pages 1-10, set offset to 10. The next section will then start numbering at page 11.
Essential for multi-part reports or book chapters.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>page_numbering_offset</strong>"
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
     </div>
     <div id="save-as-pdf-pdfcrowd-watermark-and-background"
          class="save-as-pdf-pdfcrowd-category-wrap">
       <div class="save-as-pdf-pdfcrowd-heading-wrap ">
         <h2>Watermark & Background</h2>
       </div>


           <table class="form-table">
        <tbody>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_watermark">
                        Page Watermark
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-page_watermark"
                        name="save-as-pdf-pdfcrowd[page_watermark]"
                        value="<?php esc_attr_e($page_watermark); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Apply the first page of a watermark PDF to every page of the output PDF. Use this to add transparent overlays like "DRAFT" stamps, security markings, or branding elements that appear on top of content. Ideal for confidential document marking or adding protective overlays. Absolute or relative filepath can be used. To apply WordPress uploaded media use e.g. ../wp-content/uploads/2019/06/your-file.pdf.
                              The file must exist and not be empty.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>page_watermark</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_watermark_url">
                        Page Watermark URL
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-page_watermark_url"
                        name="save-as-pdf-pdfcrowd[page_watermark_url]"
                        value="<?php esc_attr_e($page_watermark_url); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Load a file from the specified URL and apply the file as a watermark to each page of the output PDF. A watermark can be either a PDF or an image. If a multi-page file (PDF or TIFF) is used, the first page is used as the watermark.
                              Supported protocols are http:// and https://.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>page_watermark_url</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-multipage_watermark">
                        Multipage Watermark
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-multipage_watermark"
                        name="save-as-pdf-pdfcrowd[multipage_watermark]"
                        value="<?php esc_attr_e($multipage_watermark); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Apply each page of a watermark PDF to the corresponding page of the output PDF. Use this for page-specific watermarks where different pages need different overlays - for example, different approval stamps per department.
If the watermark has fewer pages than the output, the last watermark page is repeated for remaining pages.
 Absolute or relative filepath can be used. To apply WordPress uploaded media use e.g. ../wp-content/uploads/2019/06/your-file.pdf.
                              The file must exist and not be empty.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>multipage_watermark</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-multipage_watermark_url">
                        Multipage Watermark URL
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-multipage_watermark_url"
                        name="save-as-pdf-pdfcrowd[multipage_watermark_url]"
                        value="<?php esc_attr_e($multipage_watermark_url); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Load a file from the specified URL and apply each page of the file as a watermark to the corresponding page of the output PDF. A watermark can be either a PDF or an image.
                              Supported protocols are http:// and https://.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>multipage_watermark_url</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_background">
                        Page Background
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-page_background"
                        name="save-as-pdf-pdfcrowd[page_background]"
                        value="<?php esc_attr_e($page_background); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Apply the first page of a background PDF to every page of the output PDF. Use this to add letterheads, branded templates, or decorative backgrounds that appear behind your content. Backgrounds appear beneath content, while watermarks layer on top.
Perfect for adding company letterheads to reports or applying branded templates to dynamically generated content.
 Absolute or relative filepath can be used. To apply WordPress uploaded media use e.g. ../wp-content/uploads/2019/06/your-file.pdf.
                              The file must exist and not be empty.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>page_background</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_background_url">
                        Page Background URL
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-page_background_url"
                        name="save-as-pdf-pdfcrowd[page_background_url]"
                        value="<?php esc_attr_e($page_background_url); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Load a file from the specified URL and apply the file as a background to each page of the output PDF. A background can be either a PDF or an image. If a multi-page file (PDF or TIFF) is used, the first page is used as the background.
                              Supported protocols are http:// and https://.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>page_background_url</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-multipage_background">
                        Multipage Background
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-multipage_background"
                        name="save-as-pdf-pdfcrowd[multipage_background]"
                        value="<?php esc_attr_e($multipage_background); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Apply each page of a background PDF to the corresponding page of the output PDF. Use this for page-specific backgrounds where each page needs a different template - for example, different letterheads for front and back pages.
If the background has fewer pages than the output, the last background page is repeated for remaining pages.
 Absolute or relative filepath can be used. To apply WordPress uploaded media use e.g. ../wp-content/uploads/2019/06/your-file.pdf.
                              The file must exist and not be empty.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>multipage_background</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-multipage_background_url">
                        Multipage Background URL
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-multipage_background_url"
                        name="save-as-pdf-pdfcrowd[multipage_background_url]"
                        value="<?php esc_attr_e($multipage_background_url); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Load a file from the specified URL and apply each page of the file as a background to the corresponding page of the output PDF. A background can be either a PDF or an image.
                              Supported protocols are http:// and https://.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>multipage_background_url</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_background_color">
                        Page Background Color
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-page_background_color"
                        name="save-as-pdf-pdfcrowd[page_background_color]"
                        value="<?php esc_attr_e($page_background_color); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set a solid background color for all pages, filling the entire page area including margins. Useful for creating branded PDFs with corporate colors, highlighting draft documents, or improving readability with off-white backgrounds.
Supports transparency with RGBA format - use semi-transparent colors for subtle effects without obscuring content. Format as RGB (FF0000) or RGBA (FF000080) hexadecimal.

                              The value must be in RRGGBB or RRGGBBAA hexadecimal format.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>page_background_color</strong>"
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
     </div>
     <div id="save-as-pdf-pdfcrowd-general-options"
          class="save-as-pdf-pdfcrowd-category-wrap">
       <div class="save-as-pdf-pdfcrowd-heading-wrap save-as-pdf-pdfcrowd-basic-heading-wrap">
         <h2>General Options</h2>
       </div>


           <table class="form-table">
        <tbody>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-use_print_media">
                        Use Print Media
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-use_print_media" name="save-as-pdf-pdfcrowd[use_print_media]" value="1" <?php checked( $use_print_media, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Use the print version of the page if available via <code>@media</code> print CSS rules. Enable this when converting websites that have print-optimized styles. Many sites hide navigation, ads, and sidebars in print mode.
Produces cleaner PDFs by using the design the website creator intended for printing.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>use_print_media</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-no_background">
                        No Background
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_background" name="save-as-pdf-pdfcrowd[no_background]" value="1" <?php checked( $no_background, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Do not print the background graphics to create printer-friendly PDFs. Use this when documents will be physically printed to save ink costs and improve readability.
Removes background colors, images, and patterns while preserving text and foreground content. Particularly useful for documents with dark backgrounds or decorative elements.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>no_background</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-disable_javascript">
                        Disable JavaScript
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-disable_javascript" name="save-as-pdf-pdfcrowd[disable_javascript]" value="1" <?php checked( $disable_javascript, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Do not execute JavaScript during conversion. Use this to improve conversion speed when JavaScript is not needed, prevent dynamic content changes, or avoid security risks from untrusted scripts.
Note that disabling JavaScript means lazy-loaded images and AJAX content will not load.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>disable_javascript</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-disable_image_loading">
                        Disable Image Loading
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-disable_image_loading" name="save-as-pdf-pdfcrowd[disable_image_loading]" value="1" <?php checked( $disable_image_loading, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Do not load images during conversion to create text-only PDFs. Use this to significantly speed up conversion, reduce file size, or create accessible text-focused documents.
Ideal for converting documentation where images are not needed, reducing bandwidth usage, or creating lightweight PDFs for email distribution.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>disable_image_loading</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-disable_remote_fonts">
                        Disable Remote Fonts
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-disable_remote_fonts" name="save-as-pdf-pdfcrowd[disable_remote_fonts]" value="1" <?php checked( $disable_remote_fonts, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Disable loading fonts from remote sources. Use this to speed up conversion by avoiding font download delays, ensure consistent rendering with system fonts, or work around font loading failures.
Note that text will fall back to system fonts, which may change the document's appearance.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>disable_remote_fonts</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input save-as-pdf-pdfcrowd-deprecated"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-use_mobile_user_agent">
                        Use Mobile User Agent
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-use_mobile_user_agent" name="save-as-pdf-pdfcrowd[use_mobile_user_agent]" value="1" <?php checked( $use_mobile_user_agent, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Use a mobile user agent when making requests to the source URL.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>use_mobile_user_agent</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="all">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-load_iframes">
                        Load Iframes
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[load_iframes]" id="save-as-pdf-pdfcrowd-load_iframes" autocomplete="off">
                    <option value="all" <?php selected($load_iframes, 'all');?>>all</option>
                    <option value="same-origin" <?php selected($load_iframes, 'same-origin');?>>same-origin</option>
                    <option value="none" <?php selected($load_iframes, 'none');?>>none</option>
                    </select>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Specifies how iframes are handled during conversion. Use <code>"all"</code> to include all embedded content (videos, maps, widgets). Use <code>"same-origin"</code> to include only content from the same domain for security purposes. Use <code>"none"</code> to exclude all iframes for faster conversion and to avoid third-party content issues.
Disabling iframes can significantly improve performance and reliability.

                          </div>
                            <br>Possible values: <ul><li>"all" - All iframes are loaded.</li><li>"same-origin" - Only iframes with the same origin as the main page are loaded.</li><li>"none" - Iframe loading is disabled.</li></ul>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>load_iframes</strong>"<br>Possible values: "all", "same-origin", "none"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-block_ads">
                        Block Ads
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-block_ads" name="save-as-pdf-pdfcrowd[block_ads]" value="1" <?php checked( $block_ads, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Automatically block common advertising networks and tracking scripts during conversion, producing cleaner PDFs with faster conversion times. Filters out third-party ad content, analytics beacons, and ad network resources.
Ideal for converting news sites, blogs, or any ad-heavy content where ads distract from the main message. May occasionally block legitimate third-party content - disable if critical third-party resources are missing.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>block_ads</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="auto detect">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-default_encoding">
                        Default Encoding
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-default_encoding"
                        name="save-as-pdf-pdfcrowd[default_encoding]"
                        value="<?php esc_attr_e($default_encoding); ?>"
                        placeholder="auto detect" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Specify the character encoding when the HTML lacks proper charset declaration or has incorrect encoding. Prevents garbled text for non-English content, especially legacy pages without UTF-8 encoding.
Set to <code>"utf-8"</code> for modern content, <code>"iso-8859-1"</code> for Western European legacy pages, or other encodings for specific regional content. Only needed when auto-detection fails and you see corrupted characters in the output.

                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>default_encoding</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="en-US">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-locale">
                        Locale
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-locale"
                        name="save-as-pdf-pdfcrowd[locale]"
                        value="<?php esc_attr_e($locale); ?>"
                        placeholder="en-US" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the locale for the conversion to control regional formatting of dates, times, and numbers. Use this when converting content for specific regions - for example, set to <code>"en-US"</code> for MM/DD/YYYY dates and comma thousand separators, or <code>"de-DE"</code> for DD.MM.YYYY dates and period thousand separators.
Essential for financial reports, invoices, or localized content.

                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>locale</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-http_auth_user_name">
                        HTTP Auth User Name
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-http_auth_user_name"
                        name="save-as-pdf-pdfcrowd[http_auth_user_name]"
                        value="<?php esc_attr_e($http_auth_user_name); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the HTTP authentication user name. Required to access protected web pages or staging environments.
                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>http_auth_user_name</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-http_auth_password">
                        HTTP Auth Password
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-http_auth_password"
                        name="save-as-pdf-pdfcrowd[http_auth_password]"
                        value="<?php esc_attr_e($http_auth_password); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the HTTP authentication password. Required to access protected web pages or staging environments.
                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>http_auth_password</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-cookies">
                        Cookies
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-cookies"
                        name="save-as-pdf-pdfcrowd[cookies]"
                        value="<?php esc_attr_e($cookies); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set HTTP cookies to be included in all requests made by the converter to access authenticated or session-based content. Use this when converting pages that require login, maintain user sessions, or personalize content based on cookies.
Essential for converting member-only areas, dashboards, or any content behind cookie-based authentication. Format as semicolon-separated name=value pairs.

                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>cookies</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-verify_ssl_certificates">
                        Verify SSL Certificates
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-verify_ssl_certificates" name="save-as-pdf-pdfcrowd[verify_ssl_certificates]" value="1" <?php checked( $verify_ssl_certificates, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Enforce SSL certificate validation for secure connections, preventing conversions from sites with invalid certificates. Enable when converting from production sites with valid certificates to ensure security.
When disabled, allows conversion from any HTTPS site regardless of certificate validity - including development servers with self-signed certificates, internal corporate sites with expired certificates, or local testing environments.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>verify_ssl_certificates</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-fail_on_main_url_error">
                        Fail On Main URL Error
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-fail_on_main_url_error" name="save-as-pdf-pdfcrowd[fail_on_main_url_error]" value="1" <?php checked( $fail_on_main_url_error, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Abort the conversion if the HTTP status code of the main URL is greater than or equal to 400 (client/server errors). Use this in automated workflows to catch broken URLs or authentication failures early rather than producing invalid PDFs. Ensures your system does not silently generate error page PDFs when source content is unavailable.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>fail_on_main_url_error</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-fail_on_any_url_error">
                        Fail On Any URL Error
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-fail_on_any_url_error" name="save-as-pdf-pdfcrowd[fail_on_any_url_error]" value="1" <?php checked( $fail_on_any_url_error, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Abort the conversion if any sub-request (images, stylesheets, scripts) fails with HTTP 400+ errors. Use this for strict quality control when all assets must load successfully.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>fail_on_any_url_error</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-no_xpdfcrowd_header">
                        No X-Pdfcrowd Header
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_xpdfcrowd_header" name="save-as-pdf-pdfcrowd[no_xpdfcrowd_header]" value="1" <?php checked( $no_xpdfcrowd_header, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Do not send the X-Pdfcrowd HTTP header in HTTP requests made by the converter. Use this if your target server blocks or logs requests with this header, or for privacy when you do not want sites to know you are using PDFCrowd. Some security systems may block requests with non-standard headers.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>no_xpdfcrowd_header</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="default">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-css_page_rule_mode">
                        CSS Page Rule Mode
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[css_page_rule_mode]" id="save-as-pdf-pdfcrowd-css_page_rule_mode" autocomplete="off">
                    <option value="default" <?php selected($css_page_rule_mode, 'default');?>>default</option>
                    <option value="mode1" <?php selected($css_page_rule_mode, 'mode1');?>>mode1</option>
                    <option value="mode2" <?php selected($css_page_rule_mode, 'mode2');?>>mode2</option>
                    </select>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Specifies behavior in the presence of CSS <code>@page</code> rules to control which settings take precedence. Use <code>"default"</code> to prioritize API settings over CSS rules, ensuring consistent output regardless of input HTML. Use <code>"mode2"</code> to respect CSS <code>@page</code> rules for print-optimized HTML.
This solves conflicts when CSS tries to override your API page setup.

                          </div>
                            <br>Possible values: <ul><li>"default" - The PDFCrowd API page settings are preferred.</li><li>"mode1" - The converter version 18.10 mode. Use for backward compatibility with legacy conversion behavior.</li><li>"mode2" - CSS @page rule is preferred. Use when your HTML has print-optimized @page rules that should override API settings.</li></ul>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>css_page_rule_mode</strong>"<br>Possible values: "default", "mode1", "mode2"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group "
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-custom_css">
                        Custom CSS
                    </label>
                </th>
                <td>
                    <textarea id="save-as-pdf-pdfcrowd-custom_css" name="save-as-pdf-pdfcrowd[custom_css]" placeholder=""
                    rows=5
                    <?php if(!current_user_can('unfiltered_html')) echo 'readonly'; ?>
                    cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php esc_html_e($custom_css); ?></textarea>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Apply custom CSS to the input HTML document to modify the visual appearance and layout of your content dynamically. Use this to override default styles, adjust spacing, change fonts, or fix layout issues without modifying the source HTML.
Use <code>!important</code> in your CSS rules to prioritize and override conflicting styles.

                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>custom_css</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group "
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-custom_javascript">
                        Custom JavaScript
                    </label>
                </th>
                <td>
                    <textarea id="save-as-pdf-pdfcrowd-custom_javascript" name="save-as-pdf-pdfcrowd[custom_javascript]" placeholder=""
                    rows=5
                    <?php if(!current_user_can('unfiltered_html')) echo 'readonly'; ?>
                    cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php esc_html_e($custom_javascript); ?></textarea>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Run a custom JavaScript after the document is loaded and ready to print. Use this to modify page content before conversion, remove unwanted elements, or trigger specific page states. The script is intended for post-load DOM manipulation (add/remove elements, update CSS, ...).
In addition to the standard browser APIs, the custom JavaScript code can use helper functions from our <a href='https://pdfcrowd.com/api/libpdfcrowd/'>JavaScript library</a>.

                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>custom_javascript</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-on_load_javascript">
                        On Load JavaScript
                    </label>
                </th>
                <td>
                    <textarea id="save-as-pdf-pdfcrowd-on_load_javascript" name="save-as-pdf-pdfcrowd[on_load_javascript]" placeholder=""
                    rows=5
                    <?php if(!current_user_can('unfiltered_html')) echo 'readonly'; ?>
                    cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php esc_html_e($on_load_javascript); ?></textarea>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Run a custom JavaScript right after the document is loaded. The script is intended for early DOM manipulation (add/remove elements, update CSS, ...). In addition to the standard browser APIs, the custom JavaScript code can use helper functions from our <a href='https://pdfcrowd.com/api/libpdfcrowd/'>JavaScript library</a>.
                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>on_load_javascript</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-custom_http_header">
                        Custom HTTP Header
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-custom_http_header"
                        name="save-as-pdf-pdfcrowd[custom_http_header]"
                        value="<?php esc_attr_e($custom_http_header); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set a custom HTTP header to be included in all requests made by the converter. Use this to pass authentication tokens to protected sites, add tracking headers for analytics, or provide API keys for accessing private content.
Essential when converting content from APIs or internal systems that require special headers for access control.

                              A string containing the header name and value separated by a colon.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>custom_http_header</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="200">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-javascript_delay">
                        JavaScript Delay
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-javascript_delay"
                        name="save-as-pdf-pdfcrowd[javascript_delay]"
                        value="<?php esc_attr_e($javascript_delay); ?>"
                        placeholder="200" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Wait the specified number of milliseconds to finish all JavaScript after the document is loaded. Use this to ensure lazy-loaded images, AJAX content, or animations complete before conversion. Your license defines the maximum wait time by "Max Delay" parameter.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>javascript_delay</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-wait_for_element">
                        Wait For Element
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-wait_for_element"
                        name="save-as-pdf-pdfcrowd[wait_for_element]"
                        value="<?php esc_attr_e($wait_for_element); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Wait for the specified element in a source document. Use this when specific dynamic content must be ready before conversion, avoiding unnecessary delays from a fixed JavaScript delay. The element is specified by one or more <a href='https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Selectors'>CSS selectors</a>. The element is searched for in the main document and all iframes.
If the element is not found, the conversion fails. Your license defines the maximum wait time by the "Max Delay" parameter.

                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>wait_for_element</strong>"
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
         <fieldset class="save-as-pdf-pdfcrowd-fieldset">
           <legend>Partial Conversion</legend>
               <table class="form-table">
        <tbody>
            <tr class="save-as-pdf-pdfcrowd-set-group "
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-element_to_convert">
                        Element To Convert
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-element_to_convert"
                        name="save-as-pdf-pdfcrowd[element_to_convert]"
                        value="<?php esc_attr_e($element_to_convert); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Convert only the specified element from the main document and its children. Use this to extract specific portions of a page (like article content) while excluding navigation, headers, footers, or sidebars. The element is specified by one or more <a href='https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Selectors'>CSS selectors</a>. If the element is not found, the conversion fails. If multiple elements are found, the first one is used.
                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>element_to_convert</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="cut-out">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-element_to_convert_mode">
                        Element To Convert Mode
                    </label>
                </th>
                <td>
                    <fieldset id="save-as-pdf-pdfcrowd-element_to_convert_mode">
                        <legend class="screen-reader-text">
                            <span>Element To Convert Mode</span>
                        </legend>
                        <label>
                            <input type="radio" value="cut-out"
                                   name="save-as-pdf-pdfcrowd[element_to_convert_mode]"
                                   autocomplete="off"
                                   <?php checked($element_to_convert_mode, 'cut-out');?>>
                            The element and its children are cut out of the document.
                        </label><br>
                        <label>
                            <input type="radio" value="remove-siblings"
                                   name="save-as-pdf-pdfcrowd[element_to_convert_mode]"
                                   autocomplete="off"
                                   <?php checked($element_to_convert_mode, 'remove-siblings');?>>
                            All element's siblings are removed from the DOM.
                        </label><br>
                        <label>
                            <input type="radio" value="hide-siblings"
                                   name="save-as-pdf-pdfcrowd[element_to_convert_mode]"
                                   autocomplete="off"
                                   <?php checked($element_to_convert_mode, 'hide-siblings');?>>
                            All element's siblings are hidden using display:none.
                        </label><br>
                    </fieldset>
                    </select>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Control how CSS styles are applied when converting only part of a page. The <code>"cut-out"</code> option extracts the element into a new document root, which may break CSS selectors like <code>"body > div"</code>. The <code>"remove-siblings"</code> option keeps the element in its original DOM position but deletes other elements, preserving descendant selectors. The <code>"hide-siblings"</code> option keeps all elements but hides non-selected ones with <code>display:none</code>, preserving all CSS context.

                          </div>
                            <br>Possible values: <ul><li>"cut-out" - The element and its children are cut out of the document.</li><li>"remove-siblings" - All element's siblings are removed from the DOM. Keeps target element in position but may break descendant CSS selectors.</li><li>"hide-siblings" - All element's siblings are hidden using display:none. Preserves CSS context while hiding non-target content.</li></ul>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>element_to_convert_mode</strong>"<br>Possible values: "cut-out", "remove-siblings", "hide-siblings"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-auto_detect_element_to_convert">
                        Auto Detect Element To Convert
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-auto_detect_element_to_convert" name="save-as-pdf-pdfcrowd[auto_detect_element_to_convert]" value="1" <?php checked( $auto_detect_element_to_convert, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            The main HTML element for conversion is detected automatically. Use this when you want to extract article or main content without knowing the exact CSS selector, automatically excluding navigation and sidebars.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>auto_detect_element_to_convert</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="none">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-readability_enhancements">
                        Readability Enhancements
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[readability_enhancements]" id="save-as-pdf-pdfcrowd-readability_enhancements" autocomplete="off">
                    <option value="none" <?php selected($readability_enhancements, 'none');?>>none</option>
                    <option value="readability-v1" <?php selected($readability_enhancements, 'readability-v1');?>>readability-v1</option>
                    <option value="readability-v2" <?php selected($readability_enhancements, 'readability-v2');?>>readability-v2</option>
                    <option value="readability-v3" <?php selected($readability_enhancements, 'readability-v3');?>>readability-v3</option>
                    <option value="readability-v4" <?php selected($readability_enhancements, 'readability-v4');?>>readability-v4</option>
                    </select>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Automatically enhance the input HTML to improve readability by removing clutter and reformatting content. Use this when converting web pages with excessive navigation, ads, or sidebars that distract from the main content.
Different versions (<code>v1-v4</code>) use progressively aggressive algorithms - start with <code>"v1"</code> and increase if more cleanup is needed. Ideal for converting blog posts, articles, or documentation into clean PDFs.

                          </div>
                            <br>Possible values: <ul><li>"none" - No enhancements are used.</li><li>"readability-v1" - Version 1 of the enhancements is used. Basic cleanup for simple pages with moderate clutter.</li><li>"readability-v2" - Version 2 of the enhancements is used. More aggressive cleanup for pages with more ads and navigation.</li><li>"readability-v3" - Version 3 of the enhancements is used. Strong cleanup for heavily cluttered pages with multiple sidebars.</li><li>"readability-v4" - Version 4 of the enhancements is used. Maximum cleanup for extremely cluttered pages. May remove some content.</li></ul>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>readability_enhancements</strong>"<br>Possible values: "none", "readability-v1", "readability-v2", "readability-v3", "readability-v4"
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
         </fieldset>
     </div>
     <div id="save-as-pdf-pdfcrowd-print-resolution"
          class="save-as-pdf-pdfcrowd-category-wrap">
       <div class="save-as-pdf-pdfcrowd-heading-wrap ">
         <h2>Print Resolution</h2>
       </div>


           <table class="form-table">
        <tbody>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input save-as-pdf-pdfcrowd-deprecated"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-viewport_width">
                        Viewport Width
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-viewport_width"
                        name="save-as-pdf-pdfcrowd[viewport_width]"
                        value="<?php esc_attr_e($viewport_width); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the viewport width in pixels.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>viewport_width</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input save-as-pdf-pdfcrowd-deprecated"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-viewport_height">
                        Viewport Height
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-viewport_height"
                        name="save-as-pdf-pdfcrowd[viewport_height]"
                        value="<?php esc_attr_e($viewport_height); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the viewport height in pixels.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>viewport_height</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input save-as-pdf-pdfcrowd-deprecated"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-rendering_mode">
                        Rendering Mode
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[rendering_mode]" id="save-as-pdf-pdfcrowd-rendering_mode" autocomplete="off">
                    <option value="" <?php selected($rendering_mode, '');?>>-- unset --</option>
                    <option value="default" <?php selected($rendering_mode, 'default');?>>default</option>
                    <option value="viewport" <?php selected($rendering_mode, 'viewport');?>>viewport</option>
                    </select>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the rendering mode of the page, allowing control over how content is displayed.
                          </div>
                            <br>Possible values: <ul><li>"default" - The mode based on the standard browser print functionality.</li><li>"viewport" - Adapts the rendering according to the specified viewport width, influencing the <code>@media (min-width)</code> and <code>@media (max-width)</code> CSS properties. This mode is ideal for previewing different responsive designs of a web page, such as mobile or desktop views, by choosing the appropriate viewport size.</li></ul>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>rendering_mode</strong>"<br>Possible values: "default", "viewport"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input save-as-pdf-pdfcrowd-deprecated"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-smart_scaling_mode">
                        Smart Scaling Mode
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[smart_scaling_mode]" id="save-as-pdf-pdfcrowd-smart_scaling_mode" autocomplete="off">
                    <option value="" <?php selected($smart_scaling_mode, '');?>>-- unset --</option>
                    <option value="default" <?php selected($smart_scaling_mode, 'default');?>>default</option>
                    <option value="disabled" <?php selected($smart_scaling_mode, 'disabled');?>>disabled</option>
                    <option value="viewport-fit" <?php selected($smart_scaling_mode, 'viewport-fit');?>>viewport-fit</option>
                    <option value="content-fit" <?php selected($smart_scaling_mode, 'content-fit');?>>content-fit</option>
                    <option value="single-page-fit" <?php selected($smart_scaling_mode, 'single-page-fit');?>>single-page-fit</option>
                    <option value="single-page-fit-ex" <?php selected($smart_scaling_mode, 'single-page-fit-ex');?>>single-page-fit-ex</option>
                    <option value="mode1" <?php selected($smart_scaling_mode, 'mode1');?>>mode1</option>
                    </select>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Specify the scaling mode used for fitting the HTML contents to the print area.
                          </div>
                            <br>Possible values: <ul><li>"default" - The mode based on the standard browser print functionality.</li><li>"disabled" - No smart scaling is performed.</li><li>"viewport-fit" - The viewport width fits the print area width.</li><li>"content-fit" - The HTML contents width fits the print area width.</li><li>"single-page-fit" - The whole HTML contents fits the print area of a single page.</li><li>"single-page-fit-ex" - The whole HTML contents fits the print area of a single page with respect to the page height/width ratio.</li><li>"mode1" - Scaling mode 1 is applied. Legacy scaling behavior for backward compatibility.</li></ul>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>smart_scaling_mode</strong>"<br>Possible values: "default", "disabled", "viewport-fit", "content-fit", "single-page-fit", "single-page-fit-ex", "mode1"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="100">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-scale_factor">
                        Scale Factor
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-scale_factor"
                        name="save-as-pdf-pdfcrowd[scale_factor]"
                        value="<?php esc_attr_e($scale_factor); ?>"
                        placeholder="100" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the scaling factor (zoom) for the main page area to fit content better. Use values below 100% to shrink oversized content that is getting cut off at page edges. Use values above 100% to enlarge small content for better readability.
Common use cases include shrinking wide tables to fit (70-80%), or enlarging mobile-optimized layouts for desktop PDFs (120-150%).

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>scale_factor</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="100">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-jpeg_quality">
                        JPEG Quality
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-jpeg_quality"
                        name="save-as-pdf-pdfcrowd[jpeg_quality]"
                        value="<?php esc_attr_e($jpeg_quality); ?>"
                        placeholder="100" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the quality of embedded JPEG images to balance file size and visual quality. Use 100% for archival documents or when image quality is critical. Use 70-85% for web distribution to significantly reduce file size with minimal visible quality loss.
Use lower values (50-60%) only when file size is more important than image clarity.
Common artifacts below 60% include blockiness and color banding.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>jpeg_quality</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="none">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-convert_images_to_jpeg">
                        Convert Images To JPEG
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[convert_images_to_jpeg]" id="save-as-pdf-pdfcrowd-convert_images_to_jpeg" autocomplete="off">
                    <option value="none" <?php selected($convert_images_to_jpeg, 'none');?>>none</option>
                    <option value="opaque" <?php selected($convert_images_to_jpeg, 'opaque');?>>opaque</option>
                    <option value="all" <?php selected($convert_images_to_jpeg, 'all');?>>all</option>
                    </select>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Specify which image types will be converted to JPEG to reduce PDF file size. Use <code>"opaque"</code> to convert only non-transparent images (safe for most documents). Use <code>"all"</code> to convert everything including transparent images (transparent areas become white).
Use <code>"none"</code> to preserve original image formats.
Ideal for reducing file size when distributing large image-heavy PDFs via email or web.

                          </div>
                            <br>Possible values: <ul><li>"none" - No image conversion is done.</li><li>"opaque" - Only opaque images are converted to JPEG images.</li><li>"all" - All images are converted to JPEG images. The JPEG format does not support transparency so the transparent color is replaced by a PDF page background color.</li></ul>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>convert_images_to_jpeg</strong>"<br>Possible values: "none", "opaque", "all"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="0">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-image_dpi">
                        Image DPI
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-image_dpi"
                        name="save-as-pdf-pdfcrowd[image_dpi]"
                        value="<?php esc_attr_e($image_dpi); ?>"
                        placeholder="0" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the DPI of images in PDF to control resolution and file size. Use 300 DPI for professional printing, 150 DPI for everyday documents, 96 DPI for screen-only viewing, or 72 DPI for web distribution.
Lower DPI creates smaller files but reduces image quality. Use 0 to preserve original image resolution.
Note that this only downscales - it will not upscale low-resolution images.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>image_dpi</strong>"
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
     </div>
     <div id="save-as-pdf-pdfcrowd-pdf-format"
          class="save-as-pdf-pdfcrowd-category-wrap">
       <div class="save-as-pdf-pdfcrowd-heading-wrap ">
         <h2>PDF Format</h2>
       </div>


           <table class="form-table">
        <tbody>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-enable_pdf_forms">
                        Enable PDF Forms
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-enable_pdf_forms" name="save-as-pdf-pdfcrowd[enable_pdf_forms]" value="1" <?php checked( $enable_pdf_forms, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Convert HTML forms to fillable PDF forms that users can complete in PDF readers. Use this to create interactive PDFs from HTML forms.
Ideal for creating fillable applications, surveys, or order forms that work offline. Details can be found in the <a href='https://pdfcrowd.com/blog/create-fillable-pdf-form/'>blog post</a>.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>enable_pdf_forms</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-linearize">
                        Linearize
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-linearize" name="save-as-pdf-pdfcrowd[linearize]" value="1" <?php checked( $linearize, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Create linearized PDF. This is also known as Fast Web View. Use this to optimize PDFs for progressive download, allowing users to start viewing the first page while the rest downloads.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>linearize</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-encrypt">
                        Encrypt
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-encrypt" name="save-as-pdf-pdfcrowd[encrypt]" value="1" <?php checked( $encrypt, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Encrypt the PDF to prevent search engines from indexing the contents and add an extra layer of security. Use this for confidential documents, internal reports, or any content you do not want appearing in search results.
Combine with a password to require authentication for viewing, or just use encryption alone to prevent indexing while keeping the PDF publicly readable.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>encrypt</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-user_password">
                        User Password
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-user_password"
                        name="save-as-pdf-pdfcrowd[user_password]"
                        value="<?php esc_attr_e($user_password); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Protect the PDF with a user password to restrict who can open and view the document. Recipients must enter this password to view the PDF. Use this for confidential documents, sensitive data, or content distribution where you want to control access.
Combine with permission flags to restrict what users can do after opening.

                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>user_password</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-owner_password">
                        Owner Password
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-owner_password"
                        name="save-as-pdf-pdfcrowd[owner_password]"
                        value="<?php esc_attr_e($owner_password); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Protect the PDF with an owner password for administrative control. This password allows changing permissions, passwords, and document restrictions - like a master key. Use different user and owner passwords to give recipients restricted access while retaining full control.
The owner password should be kept confidential and different from the user password.

                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>owner_password</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-no_print">
                        No Print
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_print" name="save-as-pdf-pdfcrowd[no_print]" value="1" <?php checked( $no_print, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Disallow printing of the output PDF to protect sensitive content. Use this for confidential documents, copyrighted materials, or preview versions you want to restrict.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>no_print</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-no_modify">
                        No Modify
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_modify" name="save-as-pdf-pdfcrowd[no_modify]" value="1" <?php checked( $no_modify, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Disallow modification of the output PDF to maintain document integrity. Use this for official documents, contracts, or records that should not be altered after creation. Prevents recipients from editing content, adding annotations, or extracting pages.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>no_modify</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-no_copy">
                        No Copy
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_copy" name="save-as-pdf-pdfcrowd[no_copy]" value="1" <?php checked( $no_copy, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Disallow text and graphics extraction from the output PDF to protect copyrighted content. Use this for ebooks, proprietary documents, or materials where you want to prevent easy copying and redistribution.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>no_copy</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-title">
                        Title
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-title"
                        name="save-as-pdf-pdfcrowd[title]"
                        value="<?php esc_attr_e($title); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the title of the PDF that appears in PDF reader title bars and document properties. Use descriptive titles for better organization and searchability in document management systems.
This metadata helps users identify documents when multiple PDFs are open and improves accessibility for screen readers.

                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>title</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-subject">
                        Subject
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-subject"
                        name="save-as-pdf-pdfcrowd[subject]"
                        value="<?php esc_attr_e($subject); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the subject of the PDF to categorize or summarize the document content. Use this to add searchable metadata for document management systems, improve organization in large PDF libraries, or provide context about the document's purpose.
Appears in PDF properties dialog.

                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>subject</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-author">
                        Author
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-author"
                        name="save-as-pdf-pdfcrowd[author]"
                        value="<?php esc_attr_e($author); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the author of the PDF for attribution and document tracking. Use this to identify who created the document, important for official documents, reports, or publications.
This metadata appears in PDF properties and helps with document management and version control.

                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>author</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-keywords">
                        Keywords
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-keywords"
                        name="save-as-pdf-pdfcrowd[keywords]"
                        value="<?php esc_attr_e($keywords); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Associate keywords with the document to improve searchability in document management systems. Use relevant terms that describe the content, making it easier to find documents later.
Separate multiple keywords with commas. Particularly useful for large document repositories or DAM systems.

                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>keywords</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-extract_meta_tags">
                        Extract Meta Tags
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-extract_meta_tags" name="save-as-pdf-pdfcrowd[extract_meta_tags]" value="1" <?php checked( $extract_meta_tags, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Extract meta tags (author, keywords and description) from the input HTML and automatically populate PDF metadata. Use this when converting web pages that already have proper HTML meta tags, saving you from manually setting title, author, and keywords.
Ideal for automated conversion workflows where source HTML is well-structured.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>extract_meta_tags</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
     </div>
     <div id="save-as-pdf-pdfcrowd-viewer-preferences"
          class="save-as-pdf-pdfcrowd-category-wrap">
       <div class="save-as-pdf-pdfcrowd-heading-wrap ">
         <h2>Viewer Preferences</h2>
       </div>


           <table class="form-table">
        <tbody>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_layout">
                        Page Layout
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[page_layout]" id="save-as-pdf-pdfcrowd-page_layout" autocomplete="off">
                    <option value="" <?php selected($page_layout, '');?>>-- default --</option>
                    <option value="single-page" <?php selected($page_layout, 'single-page');?>>single-page</option>
                    <option value="one-column" <?php selected($page_layout, 'one-column');?>>one-column</option>
                    <option value="two-column-left" <?php selected($page_layout, 'two-column-left');?>>two-column-left</option>
                    <option value="two-column-right" <?php selected($page_layout, 'two-column-right');?>>two-column-right</option>
                    </select>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Control how pages appear when the PDF opens in viewers that respect these preferences. <code>"single-page"</code> for focused reading one page at a time. <code>"one-column"</code> for continuous scrolling like a web page. <code>"two-column-left"</code> for book-like layouts with odd pages on left (international standard). <code>"two-column-right"</code> for magazines with odd pages on right.

                          </div>
                            <br>Possible values: <ul><li>"single-page" - Display one page at a time.</li><li>"one-column" - Display the pages in one column.</li><li>"two-column-left" - Display the pages in two columns, with odd-numbered pages on the left.</li><li>"two-column-right" - Display the pages in two columns, with odd-numbered pages on the right.</li></ul>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>page_layout</strong>"<br>Possible values: "single-page", "one-column", "two-column-left", "two-column-right"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_mode">
                        Page Mode
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[page_mode]" id="save-as-pdf-pdfcrowd-page_mode" autocomplete="off">
                    <option value="" <?php selected($page_mode, '');?>>-- default --</option>
                    <option value="full-screen" <?php selected($page_mode, 'full-screen');?>>full-screen</option>
                    <option value="thumbnails" <?php selected($page_mode, 'thumbnails');?>>thumbnails</option>
                    <option value="outlines" <?php selected($page_mode, 'outlines');?>>outlines</option>
                    </select>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Control the initial display mode when the PDF opens. <code>"full-screen"</code> for presentations and kiosk displays where you want an immersive experience. <code>"thumbnails"</code> for long documents where visual page navigation is helpful. <code>"outlines"</code> for structured documents with bookmarks/table of contents.

                          </div>
                            <br>Possible values: <ul><li>"full-screen" - Full-screen mode.</li><li>"thumbnails" - Thumbnail images are visible.</li><li>"outlines" - Document outline is visible.</li></ul>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>page_mode</strong>"<br>Possible values: "full-screen", "thumbnails", "outlines"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-initial_zoom_type">
                        Initial Zoom Type
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[initial_zoom_type]" id="save-as-pdf-pdfcrowd-initial_zoom_type" autocomplete="off">
                    <option value="" <?php selected($initial_zoom_type, '');?>>-- default --</option>
                    <option value="fit-width" <?php selected($initial_zoom_type, 'fit-width');?>>fit-width</option>
                    <option value="fit-height" <?php selected($initial_zoom_type, 'fit-height');?>>fit-height</option>
                    <option value="fit-page" <?php selected($initial_zoom_type, 'fit-page');?>>fit-page</option>
                    </select>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Control how the PDF is initially zoomed when opened.

                          </div>
                            <br>Possible values: <ul><li>"fit-width" - The page content is magnified just enough to fit the entire width of the page within the window.</li><li>"fit-height" - The page content is magnified just enough to fit the entire height of the page within the window.</li><li>"fit-page" - The page content is magnified just enough to fit the entire page within the window both horizontally and vertically. If the required horizontal and vertical magnification factors are different, use the smaller of the two, centering the page within the window in the other dimension.</li></ul>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>initial_zoom_type</strong>"<br>Possible values: "fit-width", "fit-height", "fit-page"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-initial_page">
                        Initial Page
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-initial_page"
                        name="save-as-pdf-pdfcrowd[initial_page]"
                        value="<?php esc_attr_e($initial_page); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Display the specified page when the document is opened.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>initial_page</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-initial_zoom">
                        Initial Zoom
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-initial_zoom"
                        name="save-as-pdf-pdfcrowd[initial_zoom]"
                        value="<?php esc_attr_e($initial_zoom); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Specify the initial page zoom in percents when the document is opened.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>initial_zoom</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-hide_toolbar">
                        Hide Toolbar
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-hide_toolbar" name="save-as-pdf-pdfcrowd[hide_toolbar]" value="1" <?php checked( $hide_toolbar, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Hide the viewer's toolbar when the PDF is opened to provide a cleaner, more focused reading experience. Use this for presentations, kiosk displays, or immersive reading where you want minimal UI distractions.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>hide_toolbar</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-hide_menubar">
                        Hide Menubar
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-hide_menubar" name="save-as-pdf-pdfcrowd[hide_menubar]" value="1" <?php checked( $hide_menubar, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Hide the viewer's menu bar when the PDF is opened for a cleaner interface. Use this for kiosk mode, presentations, or embedded PDFs where you want to minimize UI elements.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>hide_menubar</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-hide_window_ui">
                        Hide Window UI
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-hide_window_ui" name="save-as-pdf-pdfcrowd[hide_window_ui]" value="1" <?php checked( $hide_window_ui, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Hide user interface elements like scroll bars and navigation controls when the PDF opens. Use this for presentation mode, digital signage, or embedded PDFs where you want the most minimal interface possible.
Combines with other UI hiding options for full-screen immersive viewing.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>hide_window_ui</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-fit_window">
                        Fit Window
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-fit_window" name="save-as-pdf-pdfcrowd[fit_window]" value="1" <?php checked( $fit_window, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Resize the PDF viewer window to fit the size of the first displayed page when opened. Use this to ensure the PDF opens at an appropriate size rather than filling the entire screen.
Particularly useful for small documents, forms, or certificates that look better at actual size.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>fit_window</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-center_window">
                        Center Window
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-center_window" name="save-as-pdf-pdfcrowd[center_window]" value="1" <?php checked( $center_window, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Position the PDF viewer window in the center of the screen when opened. Use this with window resizing to create a professional, centered display for forms, certificates, or small documents.
Improves the initial viewing experience by avoiding corner-positioned windows.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>center_window</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-display_title">
                        Display Title
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-display_title" name="save-as-pdf-pdfcrowd[display_title]" value="1" <?php checked( $display_title, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Display the title of the HTML document in the PDF viewer's title bar instead of the filename. Use this to show more descriptive titles when PDFs are opened - particularly useful when the filename is cryptic or auto-generated.
Improves user experience by showing meaningful document names.

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>display_title</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-right_to_left">
                        Right To Left
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-right_to_left" name="save-as-pdf-pdfcrowd[right_to_left]" value="1" <?php checked( $right_to_left, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the predominant reading order for text to right-to-left. This option has no direct effect on the document's contents or page numbering but can be used to determine the relative positioning of pages when displayed side by side or printed n-up.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>right_to_left</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
     </div>
     <div id="save-as-pdf-pdfcrowd-data"
          class="save-as-pdf-pdfcrowd-category-wrap">
       <div class="save-as-pdf-pdfcrowd-heading-wrap ">
         <h2>Data</h2>
       </div>


           <table class="form-table">
        <tbody>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-data_string">
                        Data String
                    </label>
                </th>
                <td>
                    <textarea id="save-as-pdf-pdfcrowd-data_string" name="save-as-pdf-pdfcrowd[data_string]" placeholder=""
                    rows=5
                    <?php if(!current_user_can('unfiltered_html')) echo 'readonly'; ?>
                    cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php esc_html_e($data_string); ?></textarea>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the input data for template rendering. The data format can be JSON, XML, YAML or CSV.
                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_string</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-data_file">
                        Data File
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-data_file"
                        name="save-as-pdf-pdfcrowd[data_file]"
                        value="<?php esc_attr_e($data_file); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Load the input data for template rendering from the specified file. The data format can be JSON, XML, YAML or CSV.
                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_file</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="auto">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-data_format">
                        Data Format
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[data_format]" id="save-as-pdf-pdfcrowd-data_format" autocomplete="off">
                    <option value="auto" <?php selected($data_format, 'auto');?>>auto</option>
                    <option value="json" <?php selected($data_format, 'json');?>>json</option>
                    <option value="xml" <?php selected($data_format, 'xml');?>>xml</option>
                    <option value="yaml" <?php selected($data_format, 'yaml');?>>yaml</option>
                    <option value="csv" <?php selected($data_format, 'csv');?>>csv</option>
                    </select>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Specify the input data format. Use <code>"auto"</code> for automatic detection or explicitly set to JSON, XML, YAML, or CSV when format is known.
                          </div>
                            <br>Possible values: <ul><li>"auto" - The data format is auto-detected.</li><li>"json"</li><li>"xml"</li><li>"yaml"</li><li>"csv"</li></ul>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_format</strong>"<br>Possible values: "auto", "json", "xml", "yaml", "csv"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="utf-8">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-data_encoding">
                        Data Encoding
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-data_encoding"
                        name="save-as-pdf-pdfcrowd[data_encoding]"
                        value="<?php esc_attr_e($data_encoding); ?>"
                        placeholder="utf-8" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                             Set the encoding of the data file set by <a href='https://pdfcrowd.com/api/html-to-pdf-php/ref/#set_data_file'>setDataFile</a>.
                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_encoding</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-data_ignore_undefined">
                        Data Ignore Undefined
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-data_ignore_undefined" name="save-as-pdf-pdfcrowd[data_ignore_undefined]" value="1" <?php checked( $data_ignore_undefined, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Ignore undefined variables in the HTML template. The default mode is strict so any undefined variable causes the conversion to fail. You can use <span class='field-value text-nowrap'>&#x007b;&#x0025; if variable is defined &#x0025;&#x007d;</span> to check if the variable is defined.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_ignore_undefined</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-data_auto_escape">
                        Data Auto Escape
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-data_auto_escape" name="save-as-pdf-pdfcrowd[data_auto_escape]" value="1" <?php checked( $data_auto_escape, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Auto escape HTML symbols in the input data before placing them into the output.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_auto_escape</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-data_trim_blocks">
                        Data Trim Blocks
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-data_trim_blocks" name="save-as-pdf-pdfcrowd[data_trim_blocks]" value="1" <?php checked( $data_trim_blocks, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Auto trim whitespace around each template command block.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_trim_blocks</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-data_options">
                        Data Options
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-data_options"
                        name="save-as-pdf-pdfcrowd[data_options]"
                        value="<?php esc_attr_e($data_options); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the advanced data options as comma separated <code>key=value</code> pairs:<ul><li><code>csv_delimiter</code> - The CSV data delimiter, the default is <code>,</code>.</li><li><code>xml_remove_root</code> - Remove the root XML element from the input data.</li><li><code>data_root</code> - The name of the root element inserted into the input data without a root node (e.g. CSV), the default is <code>data</code>.</li></ul>
                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>data_options</strong>"
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
     </div>
     <div id="save-as-pdf-pdfcrowd-miscellaneous"
          class="save-as-pdf-pdfcrowd-category-wrap">
       <div class="save-as-pdf-pdfcrowd-heading-wrap ">
         <h2>Miscellaneous</h2>
       </div>


           <table class="form-table">
        <tbody>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-debug_log">
                        Debug Log
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-debug_log" name="save-as-pdf-pdfcrowd[debug_log]" value="1" <?php checked( $debug_log, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Turn on debug logging to troubleshoot conversion issues. Details about the conversion process, including resource loading, rendering steps, and error messages are stored in the debug log. Use this when conversions fail or produce unexpected results. The debug log is available in <a href='https://pdfcrowd.com/user/account/log/conversion/'>conversion statistics</a>.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>debug_log</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-tag">
                        Tag
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-tag"
                        name="save-as-pdf-pdfcrowd[tag]"
                        value="<?php esc_attr_e($tag); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Tag the conversion with a custom value for tracking and analytics. Use this to categorize conversions by customer ID, document type, or business unit. The tag appears in <a href='https://pdfcrowd.com/user/account/log/conversion/'>conversion statistics</a>. A value longer than 32 characters is cut off.
                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>tag</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-http_proxy">
                        HTTP Proxy
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-http_proxy"
                        name="save-as-pdf-pdfcrowd[http_proxy]"
                        value="<?php esc_attr_e($http_proxy); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            A proxy server used by the conversion process for accessing the source URLs with HTTP scheme. This can help circumvent regional restrictions or provide limited access to your intranet.
                              The value must have format DOMAIN_OR_IP_ADDRESS:PORT.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>http_proxy</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-https_proxy">
                        HTTPS Proxy
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-https_proxy"
                        name="save-as-pdf-pdfcrowd[https_proxy]"
                        value="<?php esc_attr_e($https_proxy); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            A proxy server used by the conversion process for accessing the source URLs with HTTPS scheme. This can help circumvent regional restrictions or provide limited access to your intranet.
                              The value must have format DOMAIN_OR_IP_ADDRESS:PORT.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>https_proxy</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-client_certificate">
                        Client Certificate
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-client_certificate"
                        name="save-as-pdf-pdfcrowd[client_certificate]"
                        value="<?php esc_attr_e($client_certificate); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            A client certificate to authenticate the converter on your web server. The certificate is used for two-way SSL/TLS authentication (mutual TLS) and adds extra security. Use this when converting content from servers that require client certificate authentication for access.
                              The file must exist and not be empty.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>client_certificate</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-client_certificate_password">
                        Client Certificate Password
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-client_certificate_password"
                        name="save-as-pdf-pdfcrowd[client_certificate_password]"
                        value="<?php esc_attr_e($client_certificate_password); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            A password for the PKCS12 file with a client certificate if the certificate file is password-protected.
                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>client_certificate_password</strong>"
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
     </div>
     <div id="save-as-pdf-pdfcrowd-tweaks"
          class="save-as-pdf-pdfcrowd-category-wrap">
       <div class="save-as-pdf-pdfcrowd-heading-wrap ">
         <h2>Tweaks</h2>
       </div>


           <table class="form-table">
        <tbody>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="300">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-layout_dpi">
                        Layout DPI
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-layout_dpi"
                        name="save-as-pdf-pdfcrowd[layout_dpi]"
                        value="<?php esc_attr_e($layout_dpi); ?>"
                        placeholder="300" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the internal DPI resolution used for positioning of PDF contents. It can help in situations where there are small inaccuracies in the PDF. It is recommended to use values that are a multiple of 72, such as 288 or 360.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>layout_dpi</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="0in">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-content_area_x">
                        Content Area X
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-content_area_x"
                        name="save-as-pdf-pdfcrowd[content_area_x]"
                        value="<?php esc_attr_e($content_area_x); ?>"
                        placeholder="0in" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the top left X coordinate of the content area. It is relative to the top left X coordinate of the print area.
                              The value must be specified in inches 'in', millimeters 'mm', centimeters 'cm', pixels 'px', or points 'pt'. It may contain a negative value.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>content_area_x</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="0in">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-content_area_y">
                        Content Area Y
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-content_area_y"
                        name="save-as-pdf-pdfcrowd[content_area_y]"
                        value="<?php esc_attr_e($content_area_y); ?>"
                        placeholder="0in" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the top left Y coordinate of the content area. It is relative to the top left Y coordinate of the print area.
                              The value must be specified in inches 'in', millimeters 'mm', centimeters 'cm', pixels 'px', or points 'pt'. It may contain a negative value.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>content_area_y</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="The width of the print area.">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-content_area_width">
                        Content Area Width
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-content_area_width"
                        name="save-as-pdf-pdfcrowd[content_area_width]"
                        value="<?php esc_attr_e($content_area_width); ?>"
                        placeholder="The width of the print area." autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the width of the content area. It should be at least 1 inch.
                              The value must be specified in inches 'in', millimeters 'mm', centimeters 'cm', pixels 'px', or points 'pt'.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>content_area_width</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="The height of the print area.">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-content_area_height">
                        Content Area Height
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-content_area_height"
                        name="save-as-pdf-pdfcrowd[content_area_height]"
                        value="<?php esc_attr_e($content_area_height); ?>"
                        placeholder="The height of the print area." autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the height of the content area. It should be at least 1 inch.
                              The value must be specified in inches 'in', millimeters 'mm', centimeters 'cm', pixels 'px', or points 'pt'.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>content_area_height</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="1,0,0,0,1,0">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-contents_matrix">
                        Contents Matrix
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-contents_matrix"
                        name="save-as-pdf-pdfcrowd[contents_matrix]"
                        value="<?php esc_attr_e($contents_matrix); ?>"
                        placeholder="1,0,0,0,1,0" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            A 2D transformation matrix applied to the main contents on each page. The origin [0,0] is located at the top-left corner of the contents. The resolution is 72 dpi.
                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>contents_matrix</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="1,0,0,0,1,0">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-header_matrix">
                        Header Matrix
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-header_matrix"
                        name="save-as-pdf-pdfcrowd[header_matrix]"
                        value="<?php esc_attr_e($header_matrix); ?>"
                        placeholder="1,0,0,0,1,0" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            A 2D transformation matrix applied to the page header contents. The origin [0,0] is located at the top-left corner of the header. The resolution is 72 dpi.
                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>header_matrix</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="1,0,0,0,1,0">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-footer_matrix">
                        Footer Matrix
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-footer_matrix"
                        name="save-as-pdf-pdfcrowd[footer_matrix]"
                        value="<?php esc_attr_e($footer_matrix); ?>"
                        placeholder="1,0,0,0,1,0" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            A 2D transformation matrix applied to the page footer contents. The origin [0,0] is located at the top-left corner of the footer. The resolution is 72 dpi.
                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>footer_matrix</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-disable_page_height_optimization">
                        Disable Page Height Optimization
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-disable_page_height_optimization" name="save-as-pdf-pdfcrowd[disable_page_height_optimization]" value="1" <?php checked( $disable_page_height_optimization, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Disable automatic height adjustment that compensates for pixel to point rounding errors.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>disable_page_height_optimization</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-main_document_css_annotation">
                        Main Document CSS Annotation
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-main_document_css_annotation" name="save-as-pdf-pdfcrowd[main_document_css_annotation]" value="1" <?php checked( $main_document_css_annotation, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Add special CSS classes to the main document's body element. This allows applying custom styling based on these classes:
  <ul>
    <li><code>pdfcrowd-page-X</code> - where X is the current page number</li>
    <li><code>pdfcrowd-page-odd</code> - odd page</li>
    <li><code>pdfcrowd-page-even</code> - even page</li>
  </ul>

                          </div>
                              <div class='save-as-pdf-pdfcrowd-note'>
                                <strong>Warning:</strong> If your custom styling affects the contents area size (e.g. by using different margins, padding, border width), the resulting PDF may contain duplicit contents or some contents may be missing.
                              </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>main_document_css_annotation</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-header_footer_css_annotation">
                        Header Footer CSS Annotation
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-header_footer_css_annotation" name="save-as-pdf-pdfcrowd[header_footer_css_annotation]" value="1" <?php checked( $header_footer_css_annotation, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Add special CSS classes to the header/footer's body element. This allows applying custom styling based on these classes:
  <ul>
    <li><code>pdfcrowd-page-X</code> - where X is the current page number</li>
    <li><code>pdfcrowd-page-count-X</code> - where X is the total page count</li>
    <li><code>pdfcrowd-page-first</code> - the first page</li>
    <li><code>pdfcrowd-page-last</code> - the last page</li>
    <li><code>pdfcrowd-page-odd</code> - odd page</li>
    <li><code>pdfcrowd-page-even</code> - even page</li>
  </ul>

                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>header_footer_css_annotation</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-max_loading_time">
                        Max Loading Time
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-max_loading_time"
                        name="save-as-pdf-pdfcrowd[max_loading_time]"
                        value="<?php esc_attr_e($max_loading_time); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the maximum time for loading the page and its resources. After this time, all requests will be considered successful. This can be useful to ensure that the conversion does not timeout. Use this method if there is no other way to fix page loading.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>max_loading_time</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-conversion_config">
                        Conversion Config
                    </label>
                </th>
                <td>
                    <textarea id="save-as-pdf-pdfcrowd-conversion_config" name="save-as-pdf-pdfcrowd[conversion_config]" placeholder=""
                    rows=5
                    <?php if(!current_user_can('unfiltered_html')) echo 'readonly'; ?>
                    cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php esc_html_e($conversion_config); ?></textarea>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            <p id="json-format">
Configure conversion via JSON. The configuration defines various page settings for individual PDF pages or ranges of pages. It provides flexibility in designing each page of the PDF, giving control over each page's size, header, footer, etc. If a page or parameter is not explicitly specified, the system will use the default settings for that page or attribute. If a JSON configuration is provided, the settings in the JSON will take precedence over the global options.
</p>

<p>
The structure of the JSON must be:
</p>
<ul>
  <li><em>pageSetup</em>: An array of objects where each object defines the configuration for a specific page or range of pages. The following properties can be set for each page object:
    <ul>
      <li>
      <em>pages</em>:
        A comma-separated list of page numbers or ranges.
        Special strings may be used, such as <code>odd</code>, <code>even</code>, and <code>last</code>.
        For example:
      <ul>
      <li><em>1-</em>: from page 1 to the end of the document</li>
      <li><em>2</em>: only the 2nd page</li>
      <li><em>2,4,6</em>: pages 2, 4, and 6</li>
      <li><em>2-5</em>: pages 2 through 5</li>
      <li><em>odd,2</em>: the 2nd page and all odd pages</li>
      </ul>
      </li>
      <li><em>pageSize</em>: The page size (optional).
      Possible values: A0, A1, A2, A3, A4, A5, A6, Letter.
      </li>
      <li><em>pageWidth</em>: The width of the page (optional).</li>
      <li><em>pageHeight</em>: The height of the page (optional).</li>
      <li><em>marginLeft</em>: Left margin (optional).</li>
      <li><em>marginRight</em>: Right margin (optional).</li>
      <li><em>marginTop</em>: Top margin (optional).</li>
      <li><em>marginBottom</em>: Bottom margin (optional).</li>
      <li>
      <em>displayHeader</em>: Header appearance (optional). Possible values:
      <ul>
      <li><em>none</em>: completely excluded</li>
      <li><em>space</em>: only the content is excluded, the space is used</li>
      <li><em>content</em>: the content is printed (default)</li>
      </ul>
      </li>
      <li>
      <em>displayFooter</em>: Footer appearance (optional). Possible values:
      <ul>
      <li><em>none</em>: completely excluded</li>
      <li><em>space</em>: only the content is excluded, the space is used</li>
      <li><em>content</em>: the content is printed (default)</li>
      </ul>
      </li>
      <li><em>headerHeight</em>: Height of the header (optional).</li>
      <li><em>footerHeight</em>: Height of the footer (optional).</li>
      <li><em>orientation</em>: Page orientation, such as "portrait" or "landscape" (optional).</li>
      <li><em>backgroundColor</em>: Page background color in RRGGBB or RRGGBBAA hexadecimal format (optional).</li>
    </ul>
  </li>
</ul>

<p>
Dimensions may be empty, 0 or specified in inches <code>"in"</code>, millimeters <code>"mm"</code>, centimeters <code>"cm"</code>, pixels <code>"px"</code>, or points <code>"pt"</code>.
</p>

                              
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>conversion_config</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-conversion_config_file">
                        Conversion Config File
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-conversion_config_file"
                        name="save-as-pdf-pdfcrowd[conversion_config_file]"
                        value="<?php esc_attr_e($conversion_config_file); ?>"
                        placeholder="" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Configure the conversion process via JSON file. See details of the <a href="#json-format">JSON string</a>. Absolute or relative filepath can be used. To apply WordPress uploaded media use e.g. ../wp-content/uploads/2019/06/your-file.json.
                              The file must exist and not be empty.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>conversion_config_file</strong>"
                        </div>
                </td>
            </tr>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="latest-chrome-desktop">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-converter_user_agent">
                        Converter User Agent
                    </label>
                </th>
                <td>
                    <div class="save-as-pdf-pdfcrowd-editable-select">
                    <select id="save-as-pdf-pdfcrowd-converter_user_agent-s-wrap" autocomplete="off">
                    <option value="chrome-desktop" <?php selected($converter_user_agent, 'chrome-desktop');?>>chrome-desktop</option>
                    <option value="chrome-mobile" <?php selected($converter_user_agent, 'chrome-mobile');?>>chrome-mobile</option>
                    <option value="latest-chrome-desktop" <?php selected($converter_user_agent, 'latest-chrome-desktop');?>>latest-chrome-desktop</option>
                    <option value="latest-chrome-mobile" <?php selected($converter_user_agent, 'latest-chrome-mobile');?>>latest-chrome-mobile</option>
                    <option value="custom string" <?php selected($converter_user_agent, 'custom string');?> data-custom="string_value">custom string</option>
                    </select>
                    <div class="save-as-pdf-pdfcrowd-ed-sel-input-wrap">
                    <input type="text"
                           class="regular-text"
                           name="save-as-pdf-pdfcrowd[converter_user_agent]"
                           id="save-as-pdf-pdfcrowd-converter_user_agent"
                           value="<?php esc_attr_e($converter_user_agent); ?>"
                           placeholder="Enter custom string"
                           autocomplete="off">
                    </div>
                    </div>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Specify the User-Agent HTTP header that will be used by the converter when a request is made to the converted web page.
                          </div>
                            <br>Possible values: <ul><li>"chrome-desktop" - The user-agent for desktop chrome corresponding to the converter used.</li><li>"chrome-mobile" - The user-agent for mobile chrome corresponding to the converter used.</li><li>"latest-chrome-desktop" - The user-agent of the recently released Chrome browser on desktops.</li><li>"latest-chrome-mobile" - The user-agent of the recently released Chrome browser on mobile devices.</li><li>A custom string for the user agent.</li></ul>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>converter_user_agent</strong>"<br>Possible values: "chrome-desktop", "chrome-mobile", "latest-chrome-desktop", "latest-chrome-mobile", "specific string value"
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
     </div>
     <div id="save-as-pdf-pdfcrowd-api-client-options"
          class="save-as-pdf-pdfcrowd-category-wrap">
       <div class="save-as-pdf-pdfcrowd-heading-wrap ">
         <h2>API Client Options</h2>
       </div>


           <table class="form-table">
        <tbody>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="24.04">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-converter_version">
                        Converter Version
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[converter_version]" id="save-as-pdf-pdfcrowd-converter_version" autocomplete="off">
                    <option value="24.04" <?php selected($converter_version, '24.04');?>>24.04</option>
                    <option value="20.10" <?php selected($converter_version, '20.10');?>>20.10</option>
                    <option value="18.10" <?php selected($converter_version, '18.10');?>>18.10</option>
                    </select>
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Set the converter version. Different versions may produce different output. Choose which one provides the best output for your case.
                          </div>
                            <br>Possible values: <ul><li>"24.04" - Version 24.04.</li><li>"20.10" - Version 20.10.</li><li>"18.10" - Version 18.10.</li></ul>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>converter_version</strong>"<br>Possible values: "24.04", "20.10", "18.10", "latest"
                        </div>
                </td>
            </tr>
            <?php if($enable_cookies_opt): ?>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-use_http">
                        Use HTTP
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-use_http" name="save-as-pdf-pdfcrowd[use_http]" value="1" <?php checked( $use_http, 1 ); ?> autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Specify whether to use HTTP or HTTPS when connecting to the PDFCrowd API.
                          </div>
                              <div class='save-as-pdf-pdfcrowd-note'>
                                <strong>Warning:</strong> Using HTTP is insecure as data sent over HTTP is not encrypted. Enable this option only if you know what you are doing.
                              </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>use_http</strong>"<br>Possible values: 0, 1
                        </div>
                </td>
            </tr>
            <?php endif; ?>
            <tr class="save-as-pdf-pdfcrowd-set-group save-as-pdf-pdfcrowd-adv-input"
                data-default="1">
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-retry_count">
                        Retry Count
                    </label>
                </th>
                <td>
                      <input
                        type="text"
                        class="regular-text"
                        id="save-as-pdf-pdfcrowd-retry_count"
                        name="save-as-pdf-pdfcrowd[retry_count]"
                        value="<?php esc_attr_e($retry_count); ?>"
                        placeholder="1" autocomplete="off" />
                        <div class="save-as-pdf-pdfcrowd-description">
                          <div>
                            Specify the number of automatic retries when a 502 or 503 HTTP status code is received. The status code indicates a temporary network issue. This feature can be disabled by setting to 0.
                          </div>
                        </div>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>retry_count</strong>"
                        </div>
                </td>
            </tr>
        </tbody>
    </table>
     </div>
   </div>

   <div id="save-as-pdf-pdfcrowd-no-filter-res"
        class="save-as-pdf-pdfcrowd-no-setting-res">
     No setting name matches.
   </div>

   <div id="save-as-pdf-pdfcrowd-no-changes"
        class="save-as-pdf-pdfcrowd-no-setting-res">
     No setting is changed.
   </div>
</div>
