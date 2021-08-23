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

<div id="save-as-pdf-pdfcrowd-page-setup" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">

    <h2>Page Setup</h2>
    
    <a href='#' class='save-as-pdf-pdfcrowd-expert-show button-secondary'>
        Show parameters
    </a>
    <a href='#' class='save-as-pdf-pdfcrowd-expert-hide button-secondary' style='display: none;'>
        Hide parameters
    </a>



    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_size">
                        Page Size
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[page_size]" id="save-as-pdf-pdfcrowd-page_size">
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
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>page_size</strong>"<br>Possible values: "A0", "A1", "A2", "A3", "A4", "A5", "A6", "Letter"
                        </div>
                        <div class='description'>
                            Set the output page size.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_width">
                        Page Width
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-page_width" name="save-as-pdf-pdfcrowd[page_width]" value="<?php echo($page_width); ?>" placeholder="8.27in" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>page_width</strong>"
                        </div>
                        <div class='description'>
                            Set the output page width. The safe maximum is <span class='field-value'>200in</span> otherwise some PDF viewers may be unable to open the PDF.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_height">
                        Page Height
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-page_height" name="save-as-pdf-pdfcrowd[page_height]" value="<?php echo($page_height); ?>" placeholder="11.7in" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>page_height</strong>"
                        </div>
                        <div class='description'>
                            Set the output page height. Use <span class='field-value'>-1</span> for a single page PDF. The safe maximum is <span class='field-value'>200in</span> otherwise some PDF viewers may be unable to open the PDF.
                            Can be -1 or specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-orientation">
                        Orientation
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[orientation]" id="save-as-pdf-pdfcrowd-orientation">
                    <option value="" <?php selected($orientation, '');?>>-- default --</option>
                    <option value="landscape" <?php selected($orientation, 'landscape');?>>landscape</option>
                    <option value="portrait" <?php selected($orientation, 'portrait');?>>portrait</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>orientation</strong>"<br>Possible values: "landscape", "portrait"
                        </div>
                        <div class='description'>
                            Set the output page orientation.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-margin_top">
                        Margin Top
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-margin_top" name="save-as-pdf-pdfcrowd[margin_top]" value="<?php echo($margin_top); ?>" placeholder="0.4in" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>margin_top</strong>"
                        </div>
                        <div class='description'>
                            Set the output page top margin.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-margin_right">
                        Margin Right
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-margin_right" name="save-as-pdf-pdfcrowd[margin_right]" value="<?php echo($margin_right); ?>" placeholder="0.4in" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>margin_right</strong>"
                        </div>
                        <div class='description'>
                            Set the output page right margin.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-margin_bottom">
                        Margin Bottom
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-margin_bottom" name="save-as-pdf-pdfcrowd[margin_bottom]" value="<?php echo($margin_bottom); ?>" placeholder="0.4in" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>margin_bottom</strong>"
                        </div>
                        <div class='description'>
                            Set the output page bottom margin.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-margin_left">
                        Margin Left
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-margin_left" name="save-as-pdf-pdfcrowd[margin_left]" value="<?php echo($margin_left); ?>" placeholder="0.4in" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>margin_left</strong>"
                        </div>
                        <div class='description'>
                            Set the output page left margin.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-no_margins">
                        No Margins
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_margins" name="save-as-pdf-pdfcrowd[no_margins]" value="1" <?php checked( $no_margins, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>no_margins</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Disable page margins.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-print_page_range">
                        Print Page Range
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-print_page_range" name="save-as-pdf-pdfcrowd[print_page_range]" value="<?php echo($print_page_range); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>print_page_range</strong>"
                        </div>
                        <div class='description'>
                            Set the page range to print.
                            A comma separated list of page numbers or ranges.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_numbering_offset">
                        Page Numbering Offset
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-page_numbering_offset" name="save-as-pdf-pdfcrowd[page_numbering_offset]" value="<?php echo($page_numbering_offset); ?>" placeholder="0" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>page_numbering_offset</strong>"
                        </div>
                        <div class='description'>
                            Set an offset between physical and logical page numbers.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-content_area_x">
                        Content Area X
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-content_area_x" name="save-as-pdf-pdfcrowd[content_area_x]" value="<?php echo($content_area_x); ?>" placeholder="0in" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>content_area_x</strong>"
                        </div>
                        <div class='description'>
                            Set the top left X coordinate of the content area. It is relative to the top left X coordinate of the print area.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt). It may contain a negative value.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-content_area_y">
                        Content Area Y
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-content_area_y" name="save-as-pdf-pdfcrowd[content_area_y]" value="<?php echo($content_area_y); ?>" placeholder="0in" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>content_area_y</strong>"
                        </div>
                        <div class='description'>
                            Set the top left Y coordinate of the content area. It is relative to the top left Y coordinate of the print area.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt). It may contain a negative value.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-content_area_width">
                        Content Area Width
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-content_area_width" name="save-as-pdf-pdfcrowd[content_area_width]" value="<?php echo($content_area_width); ?>" placeholder="The width of the print area." autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>content_area_width</strong>"
                        </div>
                        <div class='description'>
                            Set the width of the content area. It should be at least 1 inch.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-content_area_height">
                        Content Area Height
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-content_area_height" name="save-as-pdf-pdfcrowd[content_area_height]" value="<?php echo($content_area_height); ?>" placeholder="The height of the print area." autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>content_area_height</strong>"
                        </div>
                        <div class='description'>
                            Set the height of the content area. It should be at least 1 inch.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-css_page_rule_mode">
                        CSS Page Rule Mode
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[css_page_rule_mode]" id="save-as-pdf-pdfcrowd-css_page_rule_mode">
                    <option value="default" <?php selected($css_page_rule_mode, 'default');?>>The Pdfcrowd API page settings are preferred.</option>
                    <option value="mode1" <?php selected($css_page_rule_mode, 'mode1');?>>The converter version 18.10 mode.</option>
                    <option value="mode2" <?php selected($css_page_rule_mode, 'mode2');?>>CSS @page rule is preferred.</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>css_page_rule_mode</strong>"<br>Possible values: <ul><li>"default" - The Pdfcrowd API page settings are preferred.</li><li>"mode1" - The converter version 18.10 mode.</li><li>"mode2" - CSS @page rule is preferred.</li></ul>
                        </div>
                        <div class='description'>
                            Specifies behavior in presence of CSS @page rules. It may affect the page size, margins and orientation.
                              <br>
 It is applicable for converter version >= 20.10.
                              More Pdfcrowd <a href='https://pdfcrowd.com/doc/api/versioning/'>versioning details</a>.
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-pdf-pdfcrowd-header-and-footer" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">

    <h2>Header & Footer</h2>
    
    <a href='#' class='save-as-pdf-pdfcrowd-expert-show button-secondary'>
        Show parameters
    </a>
    <a href='#' class='save-as-pdf-pdfcrowd-expert-hide button-secondary' style='display: none;'>
        Hide parameters
    </a>


    <div>
        <span class="button-secondary" id="save-as-pdf-pdfcrowd-use-predefined-h-html">
            Set predefined header HTML
        </span>
        <span class="button-secondary" id="save-as-pdf-pdfcrowd-use-predefined-f-html">
            Set predefined footer HTML
        </span>
    </div>

    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-header_url">
                        Header URL
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-header_url" name="save-as-pdf-pdfcrowd[header_url]" value="<?php echo($header_url); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>header_url</strong>"
                        </div>
                        <div class='description'>
                            Load an HTML code from the specified URL and use it as the page header. The following classes can be used in the HTML. The content of the respective elements will be expanded as follows: <ul> <li><span class='field-value'>pdfcrowd-page-count</span> - the total page count of printed pages</li> <li><span class='field-value'>pdfcrowd-page-number</span> - the current page number</li> <li><span class='field-value'>pdfcrowd-source-url</span> - the source URL of a converted document</li> </ul> The following attributes can be used: <ul> <li><span class='field-value'>data-pdfcrowd-number-format</span> - specifies the type of the used numerals. Allowed values: <ul> <li><span class='field-value'>arabic</span> - Arabic numerals, they are used by default</li> <li><span class='field-value'>roman</span> - Roman numerals</li> <li><span class='field-value'>eastern-arabic</span> - Eastern Arabic numerals</li> <li><span class='field-value'>bengali</span> - Bengali numerals</li> <li><span class='field-value'>devanagari</span> - Devanagari numerals</li> <li><span class='field-value'>thai</span> - Thai numerals</li> <li><span class='field-value'>east-asia</span> - Chinese, Vietnamese, Japanese and Korean numerals</li> <li><span class='field-value'>chinese-formal</span> - Chinese formal numerals</li> </ul> Please contact us if you need another type of numerals.<br> Example:<br> &lt;span class='pdfcrowd-page-number' data-pdfcrowd-number-format='roman'&gt;&lt;/span&gt; </li> <li><span class='field-value'>data-pdfcrowd-placement</span> - specifies where to place the source URL. Allowed values: <ul> <li>The URL is inserted to the content <ul> <li> Example: &lt;span class='pdfcrowd-source-url'&gt;&lt;/span&gt;<br> will produce &lt;span&gt;http://example.com&lt;/span&gt; </li> </ul> </li> <li><span class='field-value'>href</span> - the URL is set to the href attribute <ul> <li> Example: &lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href'&gt;Link to source&lt;/a&gt;<br> will produce &lt;a href='http://example.com'&gt;Link to source&lt;/a&gt; </li> </ul> </li> <li><span class='field-value'>href-and-content</span> - the URL is set to the href attribute and to the content <ul> <li> Example: &lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href-and-content'&gt;&lt;/a&gt;<br> will produce &lt;a href='http://example.com'&gt;http://example.com&lt;/a&gt; </li> </ul> </li> </ul> </li> </ul>
                            The supported protocols are http:// and https://.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-header_html">
                        Header HTML
                    </label>
                </th>
                <td>
                    <textarea id="save-as-pdf-pdfcrowd-header_html" name="save-as-pdf-pdfcrowd[header_html]" placeholder="" rows=5 cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php echo($header_html); ?></textarea>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>header_html</strong>"
                        </div>
                        <div class='description'>
                            Use the specified HTML code as the page header. The following classes can be used in the HTML. The content of the respective elements will be expanded as follows: <ul> <li><span class='field-value'>pdfcrowd-page-count</span> - the total page count of printed pages</li> <li><span class='field-value'>pdfcrowd-page-number</span> - the current page number</li> <li><span class='field-value'>pdfcrowd-source-url</span> - the source URL of a converted document</li> </ul> The following attributes can be used: <ul> <li><span class='field-value'>data-pdfcrowd-number-format</span> - specifies the type of the used numerals. Allowed values: <ul> <li><span class='field-value'>arabic</span> - Arabic numerals, they are used by default</li> <li><span class='field-value'>roman</span> - Roman numerals</li> <li><span class='field-value'>eastern-arabic</span> - Eastern Arabic numerals</li> <li><span class='field-value'>bengali</span> - Bengali numerals</li> <li><span class='field-value'>devanagari</span> - Devanagari numerals</li> <li><span class='field-value'>thai</span> - Thai numerals</li> <li><span class='field-value'>east-asia</span> - Chinese, Vietnamese, Japanese and Korean numerals</li> <li><span class='field-value'>chinese-formal</span> - Chinese formal numerals</li> </ul> Please contact us if you need another type of numerals.<br> Example:<br> &lt;span class='pdfcrowd-page-number' data-pdfcrowd-number-format='roman'&gt;&lt;/span&gt; </li> <li><span class='field-value'>data-pdfcrowd-placement</span> - specifies where to place the source URL. Allowed values: <ul> <li>The URL is inserted to the content <ul> <li> Example: &lt;span class='pdfcrowd-source-url'&gt;&lt;/span&gt;<br> will produce &lt;span&gt;http://example.com&lt;/span&gt; </li> </ul> </li> <li><span class='field-value'>href</span> - the URL is set to the href attribute <ul> <li> Example: &lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href'&gt;Link to source&lt;/a&gt;<br> will produce &lt;a href='http://example.com'&gt;Link to source&lt;/a&gt; </li> </ul> </li> <li><span class='field-value'>href-and-content</span> - the URL is set to the href attribute and to the content <ul> <li> Example: &lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href-and-content'&gt;&lt;/a&gt;<br> will produce &lt;a href='http://example.com'&gt;http://example.com&lt;/a&gt; </li> </ul> </li> </ul> </li> </ul>
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-header_height">
                        Header Height
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-header_height" name="save-as-pdf-pdfcrowd[header_height]" value="<?php echo($header_height); ?>" placeholder="0.5in" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>header_height</strong>"
                        </div>
                        <div class='description'>
                            Set the header height.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-footer_url">
                        Footer URL
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-footer_url" name="save-as-pdf-pdfcrowd[footer_url]" value="<?php echo($footer_url); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>footer_url</strong>"
                        </div>
                        <div class='description'>
                            Load an HTML code from the specified URL and use it as the page footer. The following classes can be used in the HTML. The content of the respective elements will be expanded as follows: <ul> <li><span class='field-value'>pdfcrowd-page-count</span> - the total page count of printed pages</li> <li><span class='field-value'>pdfcrowd-page-number</span> - the current page number</li> <li><span class='field-value'>pdfcrowd-source-url</span> - the source URL of a converted document</li> </ul> The following attributes can be used: <ul> <li><span class='field-value'>data-pdfcrowd-number-format</span> - specifies the type of the used numerals. Allowed values: <ul> <li><span class='field-value'>arabic</span> - Arabic numerals, they are used by default</li> <li><span class='field-value'>roman</span> - Roman numerals</li> <li><span class='field-value'>eastern-arabic</span> - Eastern Arabic numerals</li> <li><span class='field-value'>bengali</span> - Bengali numerals</li> <li><span class='field-value'>devanagari</span> - Devanagari numerals</li> <li><span class='field-value'>thai</span> - Thai numerals</li> <li><span class='field-value'>east-asia</span> - Chinese, Vietnamese, Japanese and Korean numerals</li> <li><span class='field-value'>chinese-formal</span> - Chinese formal numerals</li> </ul> Please contact us if you need another type of numerals.<br> Example:<br> &lt;span class='pdfcrowd-page-number' data-pdfcrowd-number-format='roman'&gt;&lt;/span&gt; </li> <li><span class='field-value'>data-pdfcrowd-placement</span> - specifies where to place the source URL. Allowed values: <ul> <li>The URL is inserted to the content <ul> <li> Example: &lt;span class='pdfcrowd-source-url'&gt;&lt;/span&gt;<br> will produce &lt;span&gt;http://example.com&lt;/span&gt; </li> </ul> </li> <li><span class='field-value'>href</span> - the URL is set to the href attribute <ul> <li> Example: &lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href'&gt;Link to source&lt;/a&gt;<br> will produce &lt;a href='http://example.com'&gt;Link to source&lt;/a&gt; </li> </ul> </li> <li><span class='field-value'>href-and-content</span> - the URL is set to the href attribute and to the content <ul> <li> Example: &lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href-and-content'&gt;&lt;/a&gt;<br> will produce &lt;a href='http://example.com'&gt;http://example.com&lt;/a&gt; </li> </ul> </li> </ul> </li> </ul>
                            The supported protocols are http:// and https://.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-footer_html">
                        Footer HTML
                    </label>
                </th>
                <td>
                    <textarea id="save-as-pdf-pdfcrowd-footer_html" name="save-as-pdf-pdfcrowd[footer_html]" placeholder="" rows=5 cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php echo($footer_html); ?></textarea>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>footer_html</strong>"
                        </div>
                        <div class='description'>
                            Use the specified HTML as the page footer. The following classes can be used in the HTML. The content of the respective elements will be expanded as follows: <ul> <li><span class='field-value'>pdfcrowd-page-count</span> - the total page count of printed pages</li> <li><span class='field-value'>pdfcrowd-page-number</span> - the current page number</li> <li><span class='field-value'>pdfcrowd-source-url</span> - the source URL of a converted document</li> </ul> The following attributes can be used: <ul> <li><span class='field-value'>data-pdfcrowd-number-format</span> - specifies the type of the used numerals. Allowed values: <ul> <li><span class='field-value'>arabic</span> - Arabic numerals, they are used by default</li> <li><span class='field-value'>roman</span> - Roman numerals</li> <li><span class='field-value'>eastern-arabic</span> - Eastern Arabic numerals</li> <li><span class='field-value'>bengali</span> - Bengali numerals</li> <li><span class='field-value'>devanagari</span> - Devanagari numerals</li> <li><span class='field-value'>thai</span> - Thai numerals</li> <li><span class='field-value'>east-asia</span> - Chinese, Vietnamese, Japanese and Korean numerals</li> <li><span class='field-value'>chinese-formal</span> - Chinese formal numerals</li> </ul> Please contact us if you need another type of numerals.<br> Example:<br> &lt;span class='pdfcrowd-page-number' data-pdfcrowd-number-format='roman'&gt;&lt;/span&gt; </li> <li><span class='field-value'>data-pdfcrowd-placement</span> - specifies where to place the source URL. Allowed values: <ul> <li>The URL is inserted to the content <ul> <li> Example: &lt;span class='pdfcrowd-source-url'&gt;&lt;/span&gt;<br> will produce &lt;span&gt;http://example.com&lt;/span&gt; </li> </ul> </li> <li><span class='field-value'>href</span> - the URL is set to the href attribute <ul> <li> Example: &lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href'&gt;Link to source&lt;/a&gt;<br> will produce &lt;a href='http://example.com'&gt;Link to source&lt;/a&gt; </li> </ul> </li> <li><span class='field-value'>href-and-content</span> - the URL is set to the href attribute and to the content <ul> <li> Example: &lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href-and-content'&gt;&lt;/a&gt;<br> will produce &lt;a href='http://example.com'&gt;http://example.com&lt;/a&gt; </li> </ul> </li> </ul> </li> </ul>
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-footer_height">
                        Footer Height
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-footer_height" name="save-as-pdf-pdfcrowd[footer_height]" value="<?php echo($footer_height); ?>" placeholder="0.5in" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>footer_height</strong>"
                        </div>
                        <div class='description'>
                            Set the footer height.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-no_header_footer_horizontal_margins">
                        No Header Footer Horizontal Margins
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_header_footer_horizontal_margins" name="save-as-pdf-pdfcrowd[no_header_footer_horizontal_margins]" value="1" <?php checked( $no_header_footer_horizontal_margins, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>no_header_footer_horizontal_margins</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Disable horizontal page margins for header and footer. The header/footer contents width will be equal to the physical page width.
                              <br>
 It is applicable for converter version >= 20.10.
                              More Pdfcrowd <a href='https://pdfcrowd.com/doc/api/versioning/'>versioning details</a>.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-exclude_header_on_pages">
                        Exclude Header On Pages
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-exclude_header_on_pages" name="save-as-pdf-pdfcrowd[exclude_header_on_pages]" value="<?php echo($exclude_header_on_pages); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>exclude_header_on_pages</strong>"
                        </div>
                        <div class='description'>
                            The page header is not printed on the specified pages.
                            A comma separated list of page numbers.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-exclude_footer_on_pages">
                        Exclude Footer On Pages
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-exclude_footer_on_pages" name="save-as-pdf-pdfcrowd[exclude_footer_on_pages]" value="<?php echo($exclude_footer_on_pages); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>exclude_footer_on_pages</strong>"
                        </div>
                        <div class='description'>
                            The page footer is not printed on the specified pages.
                            A comma separated list of page numbers.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-header_footer_scale_factor">
                        Header Footer Scale Factor
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-header_footer_scale_factor" name="save-as-pdf-pdfcrowd[header_footer_scale_factor]" value="<?php echo($header_footer_scale_factor); ?>" placeholder="100" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>header_footer_scale_factor</strong>"
                        </div>
                        <div class='description'>
                            Set the scaling factor (zoom) for the header and footer.
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-pdf-pdfcrowd-watermark-and-background" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">

    <h2>Watermark & Background</h2>
    
    <a href='#' class='save-as-pdf-pdfcrowd-expert-show button-secondary'>
        Show parameters
    </a>
    <a href='#' class='save-as-pdf-pdfcrowd-expert-hide button-secondary' style='display: none;'>
        Hide parameters
    </a>


    <p class='clear save-as-pdf-pdfcrowd-note'>PDF file used as a watermark or a background must exist on the file system. To apply WordPress uploaded media use a relative path. Example:
        <br>
        <strong>../wp-content/uploads/2019/06/watermark.pdf</strong>
    </p>

    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_watermark">
                        Page Watermark
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-page_watermark" name="save-as-pdf-pdfcrowd[page_watermark]" value="<?php echo($page_watermark); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>page_watermark</strong>"
                        </div>
                        <div class='description'>
                            Apply the first page of the watermark PDF to every page of the output PDF.
                            The file must exist and not be empty.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_watermark_url">
                        Page Watermark URL
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-page_watermark_url" name="save-as-pdf-pdfcrowd[page_watermark_url]" value="<?php echo($page_watermark_url); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>page_watermark_url</strong>"
                        </div>
                        <div class='description'>
                            Load a watermark PDF from the specified URL and apply the first page of the watermark PDF to every page of the output PDF.
                            The supported protocols are http:// and https://.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-multipage_watermark">
                        Multipage Watermark
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-multipage_watermark" name="save-as-pdf-pdfcrowd[multipage_watermark]" value="<?php echo($multipage_watermark); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>multipage_watermark</strong>"
                        </div>
                        <div class='description'>
                            Apply each page of the specified watermark PDF to the corresponding page of the output PDF.
                            The file must exist and not be empty.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-multipage_watermark_url">
                        Multipage Watermark URL
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-multipage_watermark_url" name="save-as-pdf-pdfcrowd[multipage_watermark_url]" value="<?php echo($multipage_watermark_url); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>multipage_watermark_url</strong>"
                        </div>
                        <div class='description'>
                            Load a watermark PDF from the specified URL and apply each page of the specified watermark PDF to the corresponding page of the output PDF.
                            The supported protocols are http:// and https://.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_background">
                        Page Background
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-page_background" name="save-as-pdf-pdfcrowd[page_background]" value="<?php echo($page_background); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>page_background</strong>"
                        </div>
                        <div class='description'>
                            Apply the first page of the specified PDF to the background of every page of the output PDF.
                            The file must exist and not be empty.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_background_url">
                        Page Background URL
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-page_background_url" name="save-as-pdf-pdfcrowd[page_background_url]" value="<?php echo($page_background_url); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>page_background_url</strong>"
                        </div>
                        <div class='description'>
                            Load a background PDF from the specified URL and apply the first page of the background PDF to every page of the output PDF.
                            The supported protocols are http:// and https://.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-multipage_background">
                        Multipage Background
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-multipage_background" name="save-as-pdf-pdfcrowd[multipage_background]" value="<?php echo($multipage_background); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>multipage_background</strong>"
                        </div>
                        <div class='description'>
                            Apply each page of the specified PDF to the background of the corresponding page of the output PDF.
                            The file must exist and not be empty.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-multipage_background_url">
                        Multipage Background URL
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-multipage_background_url" name="save-as-pdf-pdfcrowd[multipage_background_url]" value="<?php echo($multipage_background_url); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>multipage_background_url</strong>"
                        </div>
                        <div class='description'>
                            Load a background PDF from the specified URL and apply each page of the specified background PDF to the corresponding page of the output PDF.
                            The supported protocols are http:// and https://.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_background_color">
                        Page Background Color
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-page_background_color" name="save-as-pdf-pdfcrowd[page_background_color]" value="<?php echo($page_background_color); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>page_background_color</strong>"
                        </div>
                        <div class='description'>
                            The page background color in RGB or RGBA hexadecimal format. The color fills the entire page regardless of the margins.
                            The value must be in RRGGBB or RRGGBBAA hexadecimal format.
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-pdf-pdfcrowd-general-options" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">

    <h2>General Options</h2>
    
    <a href='#' class='save-as-pdf-pdfcrowd-expert-show button-secondary'>
        Show parameters
    </a>
    <a href='#' class='save-as-pdf-pdfcrowd-expert-hide button-secondary' style='display: none;'>
        Hide parameters
    </a>



    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-use_print_media">
                        Use Print Media
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-use_print_media" name="save-as-pdf-pdfcrowd[use_print_media]" value="1" <?php checked( $use_print_media, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>use_print_media</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Use the print version of the page if available (@media print).
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-no_background">
                        No Background
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_background" name="save-as-pdf-pdfcrowd[no_background]" value="1" <?php checked( $no_background, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>no_background</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Do not print the background graphics.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-disable_javascript">
                        Disable JavaScript
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-disable_javascript" name="save-as-pdf-pdfcrowd[disable_javascript]" value="1" <?php checked( $disable_javascript, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>disable_javascript</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Do not execute JavaScript.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-disable_image_loading">
                        Disable Image Loading
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-disable_image_loading" name="save-as-pdf-pdfcrowd[disable_image_loading]" value="1" <?php checked( $disable_image_loading, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>disable_image_loading</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Do not load images.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-disable_remote_fonts">
                        Disable Remote Fonts
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-disable_remote_fonts" name="save-as-pdf-pdfcrowd[disable_remote_fonts]" value="1" <?php checked( $disable_remote_fonts, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>disable_remote_fonts</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Disable loading fonts from remote sources.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-load_iframes">
                        Load Iframes
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[load_iframes]" id="save-as-pdf-pdfcrowd-load_iframes">
                    <option value="all" <?php selected($load_iframes, 'all');?>>All iframes are loaded.</option>
                    <option value="same-origin" <?php selected($load_iframes, 'same-origin');?>>Only iframes with the same origin as the main page are loaded.</option>
                    <option value="none" <?php selected($load_iframes, 'none');?>>Iframe loading is disabled.</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>load_iframes</strong>"<br>Possible values: <ul><li>"all" - All iframes are loaded.</li><li>"same-origin" - Only iframes with the same origin as the main page are loaded.</li><li>"none" - Iframe loading is disabled.</li></ul>
                        </div>
                        <div class='description'>
                            Specifies how iframes are handled.
                              <br>
 It is applicable for converter version >= 20.10.
                              More Pdfcrowd <a href='https://pdfcrowd.com/doc/api/versioning/'>versioning details</a>.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-block_ads">
                        Block Ads
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-block_ads" name="save-as-pdf-pdfcrowd[block_ads]" value="1" <?php checked( $block_ads, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>block_ads</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Try to block ads. Enabling this option can produce smaller output and speed up the conversion.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-default_encoding">
                        Default Encoding
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-default_encoding" name="save-as-pdf-pdfcrowd[default_encoding]" value="<?php echo($default_encoding); ?>" placeholder="auto detect" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>default_encoding</strong>"
                        </div>
                        <div class='description'>
                            Set the default HTML content text encoding.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-locale">
                        Locale
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-locale" name="save-as-pdf-pdfcrowd[locale]" value="<?php echo($locale); ?>" placeholder="en-US" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>locale</strong>"
                        </div>
                        <div class='description'>
                            Set the locale for the conversion. This may affect the output format of dates, times and numbers.
                              <br>
 It is applicable for converter version >= 20.10.
                              More Pdfcrowd <a href='https://pdfcrowd.com/doc/api/versioning/'>versioning details</a>.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-http_auth_user_name">
                        HTTP Auth User Name
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-http_auth_user_name" name="save-as-pdf-pdfcrowd[http_auth_user_name]" value="<?php echo($http_auth_user_name); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>http_auth_user_name</strong>"
                        </div>
                        <div class='description'>
                            Set the HTTP authentication user name.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-http_auth_password">
                        HTTP Auth Password
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-http_auth_password" name="save-as-pdf-pdfcrowd[http_auth_password]" value="<?php echo($http_auth_password); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>http_auth_password</strong>"
                        </div>
                        <div class='description'>
                            Set the HTTP authentication password.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-cookies">
                        Cookies
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-cookies" name="save-as-pdf-pdfcrowd[cookies]" value="<?php echo($cookies); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>cookies</strong>"
                        </div>
                        <div class='description'>
                            Set cookies that are sent in Pdfcrowd HTTP requests.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-verify_ssl_certificates">
                        Verify SSL Certificates
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-verify_ssl_certificates" name="save-as-pdf-pdfcrowd[verify_ssl_certificates]" value="1" <?php checked( $verify_ssl_certificates, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>verify_ssl_certificates</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Do not allow insecure HTTPS connections.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-fail_on_main_url_error">
                        Fail On Main URL Error
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-fail_on_main_url_error" name="save-as-pdf-pdfcrowd[fail_on_main_url_error]" value="1" <?php checked( $fail_on_main_url_error, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>fail_on_main_url_error</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Abort the conversion if the main URL HTTP status code is greater than or equal to 400.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-fail_on_any_url_error">
                        Fail On Any URL Error
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-fail_on_any_url_error" name="save-as-pdf-pdfcrowd[fail_on_any_url_error]" value="1" <?php checked( $fail_on_any_url_error, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>fail_on_any_url_error</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Abort the conversion if any of the sub-request HTTP status code is greater than or equal to 400 or if some sub-requests are still pending. See details in a debug log.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-no_xpdfcrowd_header">
                        No X-Pdfcrowd Header
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_xpdfcrowd_header" name="save-as-pdf-pdfcrowd[no_xpdfcrowd_header]" value="1" <?php checked( $no_xpdfcrowd_header, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>no_xpdfcrowd_header</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Do not send the X-Pdfcrowd HTTP header in Pdfcrowd HTTP requests.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-custom_javascript">
                        Custom JavaScript
                    </label>
                </th>
                <td>
                    <textarea id="save-as-pdf-pdfcrowd-custom_javascript" name="save-as-pdf-pdfcrowd[custom_javascript]" placeholder="" rows=5 cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php echo($custom_javascript); ?></textarea>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>custom_javascript</strong>"
                        </div>
                        <div class='description'>
                            Run a custom JavaScript after the document is loaded and ready to print. The script is intended for post-load DOM manipulation (add/remove elements, update CSS, ...). In addition to the standard browser APIs, the custom JavaScript code can use helper functions from our <a href='https://pdfcrowd.com/doc/api/libpdfcrowd/'>JavaScript library</a>.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-on_load_javascript">
                        On Load JavaScript
                    </label>
                </th>
                <td>
                    <textarea id="save-as-pdf-pdfcrowd-on_load_javascript" name="save-as-pdf-pdfcrowd[on_load_javascript]" placeholder="" rows=5 cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php echo($on_load_javascript); ?></textarea>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>on_load_javascript</strong>"
                        </div>
                        <div class='description'>
                            Run a custom JavaScript right after the document is loaded. The script is intended for early DOM manipulation (add/remove elements, update CSS, ...). In addition to the standard browser APIs, the custom JavaScript code can use helper functions from our <a href='https://pdfcrowd.com/doc/api/libpdfcrowd/'>JavaScript library</a>.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-custom_http_header">
                        Custom HTTP Header
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-custom_http_header" name="save-as-pdf-pdfcrowd[custom_http_header]" value="<?php echo($custom_http_header); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>custom_http_header</strong>"
                        </div>
                        <div class='description'>
                            Set a custom HTTP header that is sent in Pdfcrowd HTTP requests.
                            A string containing the header name and value separated by a colon.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-javascript_delay">
                        JavaScript Delay
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-javascript_delay" name="save-as-pdf-pdfcrowd[javascript_delay]" value="<?php echo($javascript_delay); ?>" placeholder="200" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>javascript_delay</strong>"
                        </div>
                        <div class='description'>
                            Wait the specified number of milliseconds to finish all JavaScript after the document is loaded. Your API license defines the maximum wait time by "Max Delay" parameter.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-wait_for_element">
                        Wait For Element
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-wait_for_element" name="save-as-pdf-pdfcrowd[wait_for_element]" value="<?php echo($wait_for_element); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>wait_for_element</strong>"
                        </div>
                        <div class='description'>
                            Wait for the specified element in a source document. The element is specified by one or more <a href='https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Selectors'>CSS selectors</a>. The element is searched for in the main document and all iframes. If the element is not found, the conversion fails. Your API license defines the maximum wait time by "Max Delay" parameter.
                            
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
<fieldset class="save-as-pdf-pdfcrowd-fieldset">
<legend>Partial Conversion</legend>
    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-element_to_convert">
                        Element To Convert
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-element_to_convert" name="save-as-pdf-pdfcrowd[element_to_convert]" value="<?php echo($element_to_convert); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>element_to_convert</strong>"
                        </div>
                        <div class='description'>
                            Convert only the specified element from the main document and its children. The element is specified by one or more <a href='https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Selectors'>CSS selectors</a>. If the element is not found, the conversion fails. If multiple elements are found, the first one is used.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
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
                            All element's siblings are removed.
                        </label><br>
                        <label>
                            <input type="radio" value="hide-siblings"
                                   name="save-as-pdf-pdfcrowd[element_to_convert_mode]"
                                   autocomplete="off"
                                   <?php checked($element_to_convert_mode, 'hide-siblings');?>>
                            All element's siblings are hidden.
                        </label><br>
                    </fieldset>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>element_to_convert_mode</strong>"<br>Possible values: <ul><li>"cut-out" - The element and its children are cut out of the document.</li><li>"remove-siblings" - All element's siblings are removed.</li><li>"hide-siblings" - All element's siblings are hidden.</li></ul>
                        </div>
                        <div class='description'>
                            Specify the DOM handling when only a part of the document is converted. This can affect the CSS rules used.
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</fieldset>
</div>
<div id="save-as-pdf-pdfcrowd-print-resolution" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">

    <h2>Print Resolution</h2>
    
    <a href='#' class='save-as-pdf-pdfcrowd-expert-show button-secondary'>
        Show parameters
    </a>
    <a href='#' class='save-as-pdf-pdfcrowd-expert-hide button-secondary' style='display: none;'>
        Hide parameters
    </a>



    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-viewport_width">
                        Viewport Width
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-viewport_width" name="save-as-pdf-pdfcrowd[viewport_width]" value="<?php echo($viewport_width); ?>" placeholder="1024" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>viewport_width</strong>"
                        </div>
                        <div class='description'>
                            Set the viewport width in pixels. The viewport is the user's visible area of the page.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-viewport_height">
                        Viewport Height
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-viewport_height" name="save-as-pdf-pdfcrowd[viewport_height]" value="<?php echo($viewport_height); ?>" placeholder="768" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>viewport_height</strong>"
                        </div>
                        <div class='description'>
                            Set the viewport height in pixels. The viewport is the user's visible area of the page.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-rendering_mode">
                        Rendering Mode
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[rendering_mode]" id="save-as-pdf-pdfcrowd-rendering_mode">
                    <option value="default" <?php selected($rendering_mode, 'default');?>>The mode based on the standard browser print functionality.</option>
                    <option value="viewport" <?php selected($rendering_mode, 'viewport');?>>The viewport width affects the @media min-width and max-width CSS properties.</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>rendering_mode</strong>"<br>Possible values: <ul><li>"default" - The mode based on the standard browser print functionality.</li><li>"viewport" - The viewport width affects the @media min-width and max-width CSS properties. This mode can be used to choose a particular version (mobile, desktop, ..) of a responsive page.</li></ul>
                        </div>
                        <div class='description'>
                            Set the rendering mode.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-smart_scaling_mode">
                        Smart Scaling Mode
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[smart_scaling_mode]" id="save-as-pdf-pdfcrowd-smart_scaling_mode">
                    <option value="default" <?php selected($smart_scaling_mode, 'default');?>>The mode based on the standard browser print functionality.</option>
                    <option value="disabled" <?php selected($smart_scaling_mode, 'disabled');?>>No smart scaling is performed.</option>
                    <option value="viewport-fit" <?php selected($smart_scaling_mode, 'viewport-fit');?>>The viewport width fits the print area width.</option>
                    <option value="content-fit" <?php selected($smart_scaling_mode, 'content-fit');?>>The HTML contents width fits the print area width.</option>
                    <option value="single-page-fit" <?php selected($smart_scaling_mode, 'single-page-fit');?>>The whole HTML contents fits the print area of a single page.</option>
                    <option value="mode1" <?php selected($smart_scaling_mode, 'mode1');?>>Scaling mode 1 is applied.</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>smart_scaling_mode</strong>"<br>Possible values: <ul><li>"default" - The mode based on the standard browser print functionality.</li><li>"disabled" - No smart scaling is performed.</li><li>"viewport-fit" - The viewport width fits the print area width.</li><li>"content-fit" - The HTML contents width fits the print area width.</li><li>"single-page-fit" - The whole HTML contents fits the print area of a single page.</li><li>"mode1" - Scaling mode 1 is applied.</li></ul>
                        </div>
                        <div class='description'>
                            Specifies the scaling mode used for fitting the HTML contents to the print area.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-scale_factor">
                        Scale Factor
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-scale_factor" name="save-as-pdf-pdfcrowd[scale_factor]" value="<?php echo($scale_factor); ?>" placeholder="100" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>scale_factor</strong>"
                        </div>
                        <div class='description'>
                            Set the scaling factor (zoom) for the main page area.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-jpeg_quality">
                        JPEG Quality
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-jpeg_quality" name="save-as-pdf-pdfcrowd[jpeg_quality]" value="<?php echo($jpeg_quality); ?>" placeholder="100" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>jpeg_quality</strong>"
                        </div>
                        <div class='description'>
                            Set the quality of embedded JPEG images. A lower quality results in a smaller PDF file but can lead to compression artifacts.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-convert_images_to_jpeg">
                        Convert Images To JPEG
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[convert_images_to_jpeg]" id="save-as-pdf-pdfcrowd-convert_images_to_jpeg">
                    <option value="none" <?php selected($convert_images_to_jpeg, 'none');?>>No image conversion is done.</option>
                    <option value="opaque" <?php selected($convert_images_to_jpeg, 'opaque');?>>Only opaque images are converted to JPEG images.</option>
                    <option value="all" <?php selected($convert_images_to_jpeg, 'all');?>>All images are converted to JPEG images.</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>convert_images_to_jpeg</strong>"<br>Possible values: <ul><li>"none" - No image conversion is done.</li><li>"opaque" - Only opaque images are converted to JPEG images.</li><li>"all" - All images are converted to JPEG images. The JPEG format does not support transparency so the transparent color is replaced by a PDF page background color.</li></ul>
                        </div>
                        <div class='description'>
                            Specify which image types will be converted to JPEG. Converting lossless compression image formats (PNG, GIF, ...) to JPEG may result in a smaller PDF file.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-image_dpi">
                        Image DPI
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-image_dpi" name="save-as-pdf-pdfcrowd[image_dpi]" value="<?php echo($image_dpi); ?>" placeholder="0" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>image_dpi</strong>"
                        </div>
                        <div class='description'>
                            Set the DPI of images in PDF. A lower DPI may result in a smaller PDF file.  If the specified DPI is higher than the actual image DPI, the original image DPI is retained (no upscaling is performed). Use <span class='field-value'>0</span> to leave the images unaltered.
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-pdf-pdfcrowd-pdf-format" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">

    <h2>PDF Format</h2>
    
    <a href='#' class='save-as-pdf-pdfcrowd-expert-show button-secondary'>
        Show parameters
    </a>
    <a href='#' class='save-as-pdf-pdfcrowd-expert-hide button-secondary' style='display: none;'>
        Hide parameters
    </a>



    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-linearize">
                        Linearize
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-linearize" name="save-as-pdf-pdfcrowd[linearize]" value="1" <?php checked( $linearize, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>linearize</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Create linearized PDF. This is also known as Fast Web View.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-encrypt">
                        Encrypt
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-encrypt" name="save-as-pdf-pdfcrowd[encrypt]" value="1" <?php checked( $encrypt, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>encrypt</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Encrypt the PDF. This prevents search engines from indexing the contents.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-user_password">
                        User Password
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-user_password" name="save-as-pdf-pdfcrowd[user_password]" value="<?php echo($user_password); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>user_password</strong>"
                        </div>
                        <div class='description'>
                            Protect the PDF with a user password. When a PDF has a user password, it must be supplied in order to view the document and to perform operations allowed by the access permissions.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-owner_password">
                        Owner Password
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-owner_password" name="save-as-pdf-pdfcrowd[owner_password]" value="<?php echo($owner_password); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>owner_password</strong>"
                        </div>
                        <div class='description'>
                            Protect the PDF with an owner password.  Supplying an owner password grants unlimited access to the PDF including changing the passwords and access permissions.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-no_print">
                        No Print
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_print" name="save-as-pdf-pdfcrowd[no_print]" value="1" <?php checked( $no_print, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>no_print</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Disallow printing of the output PDF.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-no_modify">
                        No Modify
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_modify" name="save-as-pdf-pdfcrowd[no_modify]" value="1" <?php checked( $no_modify, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>no_modify</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Disallow modification of the output PDF.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-no_copy">
                        No Copy
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_copy" name="save-as-pdf-pdfcrowd[no_copy]" value="1" <?php checked( $no_copy, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>no_copy</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Disallow text and graphics extraction from the output PDF.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-title">
                        Title
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-title" name="save-as-pdf-pdfcrowd[title]" value="<?php echo($title); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>title</strong>"
                        </div>
                        <div class='description'>
                            Set the title of the PDF.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-subject">
                        Subject
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-subject" name="save-as-pdf-pdfcrowd[subject]" value="<?php echo($subject); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>subject</strong>"
                        </div>
                        <div class='description'>
                            Set the subject of the PDF.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-author">
                        Author
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-author" name="save-as-pdf-pdfcrowd[author]" value="<?php echo($author); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>author</strong>"
                        </div>
                        <div class='description'>
                            Set the author of the PDF.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-keywords">
                        Keywords
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-keywords" name="save-as-pdf-pdfcrowd[keywords]" value="<?php echo($keywords); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>keywords</strong>"
                        </div>
                        <div class='description'>
                            Associate keywords with the document.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-extract_meta_tags">
                        Extract Meta Tags
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-extract_meta_tags" name="save-as-pdf-pdfcrowd[extract_meta_tags]" value="1" <?php checked( $extract_meta_tags, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>extract_meta_tags</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Extract meta tags (author, keywords and description) from the input HTML and use them in the output PDF.
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-pdf-pdfcrowd-viewer-preferences" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">

    <h2>Viewer Preferences</h2>
    
    <a href='#' class='save-as-pdf-pdfcrowd-expert-show button-secondary'>
        Show parameters
    </a>
    <a href='#' class='save-as-pdf-pdfcrowd-expert-hide button-secondary' style='display: none;'>
        Hide parameters
    </a>



    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_layout">
                        Page Layout
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[page_layout]" id="save-as-pdf-pdfcrowd-page_layout">
                    <option value="" <?php selected($page_layout, '');?>>-- default --</option>
                    <option value="single-page" <?php selected($page_layout, 'single-page');?>>Display one page at a time.</option>
                    <option value="one-column" <?php selected($page_layout, 'one-column');?>>Display the pages in one column.</option>
                    <option value="two-column-left" <?php selected($page_layout, 'two-column-left');?>>Display the pages in two columns, with odd-numbered pages on the left.</option>
                    <option value="two-column-right" <?php selected($page_layout, 'two-column-right');?>>Display the pages in two columns, with odd-numbered pages on the right.</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>page_layout</strong>"<br>Possible values: <ul><li>"single-page" - Display one page at a time.</li><li>"one-column" - Display the pages in one column.</li><li>"two-column-left" - Display the pages in two columns, with odd-numbered pages on the left.</li><li>"two-column-right" - Display the pages in two columns, with odd-numbered pages on the right.</li></ul>
                        </div>
                        <div class='description'>
                            Specify the page layout to be used when the document is opened.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_mode">
                        Page Mode
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[page_mode]" id="save-as-pdf-pdfcrowd-page_mode">
                    <option value="" <?php selected($page_mode, '');?>>-- default --</option>
                    <option value="full-screen" <?php selected($page_mode, 'full-screen');?>>Full-screen mode.</option>
                    <option value="thumbnails" <?php selected($page_mode, 'thumbnails');?>>Thumbnail images are visible.</option>
                    <option value="outlines" <?php selected($page_mode, 'outlines');?>>Document outline is visible.</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>page_mode</strong>"<br>Possible values: <ul><li>"full-screen" - Full-screen mode.</li><li>"thumbnails" - Thumbnail images are visible.</li><li>"outlines" - Document outline is visible.</li></ul>
                        </div>
                        <div class='description'>
                            Specify how the document should be displayed when opened.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-initial_zoom_type">
                        Initial Zoom Type
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[initial_zoom_type]" id="save-as-pdf-pdfcrowd-initial_zoom_type">
                    <option value="" <?php selected($initial_zoom_type, '');?>>-- default --</option>
                    <option value="fit-width" <?php selected($initial_zoom_type, 'fit-width');?>>The page content is magnified just enough to fit the entire width of the page within the window.</option>
                    <option value="fit-height" <?php selected($initial_zoom_type, 'fit-height');?>>The page content is magnified just enough to fit the entire height of the page within the window.</option>
                    <option value="fit-page" <?php selected($initial_zoom_type, 'fit-page');?>>The page content is magnified just enough to fit the entire page within the window both horizontally and vertically.</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>initial_zoom_type</strong>"<br>Possible values: <ul><li>"fit-width" - The page content is magnified just enough to fit the entire width of the page within the window.</li><li>"fit-height" - The page content is magnified just enough to fit the entire height of the page within the window.</li><li>"fit-page" - The page content is magnified just enough to fit the entire page within the window both horizontally and vertically. If the required horizontal and vertical magnification factors are different, use the smaller of the two, centering the page within the window in the other dimension.</li></ul>
                        </div>
                        <div class='description'>
                            Specify how the page should be displayed when opened.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-initial_page">
                        Initial Page
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-initial_page" name="save-as-pdf-pdfcrowd[initial_page]" value="<?php echo($initial_page); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>initial_page</strong>"
                        </div>
                        <div class='description'>
                            Display the specified page when the document is opened.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-initial_zoom">
                        Initial Zoom
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-initial_zoom" name="save-as-pdf-pdfcrowd[initial_zoom]" value="<?php echo($initial_zoom); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>initial_zoom</strong>"
                        </div>
                        <div class='description'>
                            Specify the initial page zoom in percents when the document is opened.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-hide_toolbar">
                        Hide Toolbar
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-hide_toolbar" name="save-as-pdf-pdfcrowd[hide_toolbar]" value="1" <?php checked( $hide_toolbar, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>hide_toolbar</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Specify whether to hide the viewer application's tool bars when the document is active.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-hide_menubar">
                        Hide Menubar
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-hide_menubar" name="save-as-pdf-pdfcrowd[hide_menubar]" value="1" <?php checked( $hide_menubar, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>hide_menubar</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Specify whether to hide the viewer application's menu bar when the document is active.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-hide_window_ui">
                        Hide Window UI
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-hide_window_ui" name="save-as-pdf-pdfcrowd[hide_window_ui]" value="1" <?php checked( $hide_window_ui, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>hide_window_ui</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Specify whether to hide user interface elements in the document's window (such as scroll bars and navigation controls), leaving only the document's contents displayed.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-fit_window">
                        Fit Window
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-fit_window" name="save-as-pdf-pdfcrowd[fit_window]" value="1" <?php checked( $fit_window, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>fit_window</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Specify whether to resize the document's window to fit the size of the first displayed page.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-center_window">
                        Center Window
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-center_window" name="save-as-pdf-pdfcrowd[center_window]" value="1" <?php checked( $center_window, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>center_window</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Specify whether to position the document's window in the center of the screen.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-display_title">
                        Display Title
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-display_title" name="save-as-pdf-pdfcrowd[display_title]" value="1" <?php checked( $display_title, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>display_title</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Specify whether the window's title bar should display the document title. If false , the title bar should instead display the name of the PDF file containing the document.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-right_to_left">
                        Right To Left
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-right_to_left" name="save-as-pdf-pdfcrowd[right_to_left]" value="1" <?php checked( $right_to_left, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>right_to_left</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Set the predominant reading order for text to right-to-left. This option has no direct effect on the document's contents or page numbering but can be used to determine the relative positioning of pages when displayed side by side or printed n-up
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-pdf-pdfcrowd-data" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">

    <h2>Data</h2>
    
    <a href='#' class='save-as-pdf-pdfcrowd-expert-show button-secondary'>
        Show parameters
    </a>
    <a href='#' class='save-as-pdf-pdfcrowd-expert-hide button-secondary' style='display: none;'>
        Hide parameters
    </a>



    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-data_string">
                        Data String
                    </label>
                </th>
                <td>
                    <textarea id="save-as-pdf-pdfcrowd-data_string" name="save-as-pdf-pdfcrowd[data_string]" placeholder="" rows=5 cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php echo($data_string); ?></textarea>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>data_string</strong>"
                        </div>
                        <div class='description'>
                            Set the input data for template rendering. The data format can be JSON, XML, YAML or CSV.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-data_file">
                        Data File
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-data_file" name="save-as-pdf-pdfcrowd[data_file]" value="<?php echo($data_file); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>data_file</strong>"
                        </div>
                        <div class='description'>
                            Load the input data for template rendering from the specified file. The data format can be JSON, XML, YAML or CSV.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-data_format">
                        Data Format
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[data_format]" id="save-as-pdf-pdfcrowd-data_format">
                    <option value="auto" <?php selected($data_format, 'auto');?>>the data format is auto detected</option>
                    <option value="json" <?php selected($data_format, 'json');?>>json</option>
                    <option value="xml" <?php selected($data_format, 'xml');?>>xml</option>
                    <option value="yaml" <?php selected($data_format, 'yaml');?>>yaml</option>
                    <option value="csv" <?php selected($data_format, 'csv');?>>csv</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>data_format</strong>"<br>Possible values: <ul><li>"auto" - the data format is auto detected</li><li>"json"</li><li>"xml"</li><li>"yaml"</li><li>"csv"</li></ul>
                        </div>
                        <div class='description'>
                            Specify the input data format.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-data_encoding">
                        Data Encoding
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-data_encoding" name="save-as-pdf-pdfcrowd[data_encoding]" value="<?php echo($data_encoding); ?>" placeholder="utf-8" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>data_encoding</strong>"
                        </div>
                        <div class='description'>
                             Set the encoding of the data file set by <a href='https://pdfcrowd.com/doc/api/html-to-pdf/php/#set_data_file'>setDataFile</a>.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-data_ignore_undefined">
                        Data Ignore Undefined
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-data_ignore_undefined" name="save-as-pdf-pdfcrowd[data_ignore_undefined]" value="1" <?php checked( $data_ignore_undefined, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>data_ignore_undefined</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Ignore undefined variables in the HTML template. The default mode is strict so any undefined variable causes the conversion to fail. You can use <span class='field-value text-nowrap'>&#x007b;&#x0025; if variable is defined &#x0025;&#x007d;</span> to check if the variable is defined.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-data_auto_escape">
                        Data Auto Escape
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-data_auto_escape" name="save-as-pdf-pdfcrowd[data_auto_escape]" value="1" <?php checked( $data_auto_escape, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>data_auto_escape</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Auto escape HTML symbols in the input data before placing them into the output.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-data_trim_blocks">
                        Data Trim Blocks
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-data_trim_blocks" name="save-as-pdf-pdfcrowd[data_trim_blocks]" value="1" <?php checked( $data_trim_blocks, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>data_trim_blocks</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Auto trim whitespace around each template command block.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-data_options">
                        Data Options
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-data_options" name="save-as-pdf-pdfcrowd[data_options]" value="<?php echo($data_options); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>data_options</strong>"
                        </div>
                        <div class='description'>
                            Set the advanced data options:<ul><li><span class='field-value'>csv_delimiter</span> - The CSV data delimiter, the default is <span class='field-value'>,</span>.</li><li><span class='field-value'>xml_remove_root</span> - Remove the root XML element from the input data.</li><li><span class='field-value'>data_root</span> - The name of the root element inserted into the input data without a root node (e.g. CSV), the default is <span class='field-value'>data</span>.</li></ul>
                            
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-pdf-pdfcrowd-miscellaneous" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">

    <h2>Miscellaneous</h2>
    
    <a href='#' class='save-as-pdf-pdfcrowd-expert-show button-secondary'>
        Show parameters
    </a>
    <a href='#' class='save-as-pdf-pdfcrowd-expert-hide button-secondary' style='display: none;'>
        Hide parameters
    </a>



    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-debug_log">
                        Debug Log
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-debug_log" name="save-as-pdf-pdfcrowd[debug_log]" value="1" <?php checked( $debug_log, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>debug_log</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Turn on the debug logging. Details about the conversion are stored in the debug log. The URL of the log can be obtained from the <a href='https://pdfcrowd.com/doc/api/html-to-pdf/php/#get_debug_log_url'>getDebugLogUrl</a> method or available in <a href='https://pdfcrowd.com/user/account/log/conversion/'>conversion statistics</a>.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-tag">
                        Tag
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-tag" name="save-as-pdf-pdfcrowd[tag]" value="<?php echo($tag); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>tag</strong>"
                        </div>
                        <div class='description'>
                            Tag the conversion with a custom value. The tag is used in <a href='https://pdfcrowd.com/user/account/log/conversion/'>conversion statistics</a>. A value longer than 32 characters is cut off.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-http_proxy">
                        HTTP Proxy
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-http_proxy" name="save-as-pdf-pdfcrowd[http_proxy]" value="<?php echo($http_proxy); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>http_proxy</strong>"
                        </div>
                        <div class='description'>
                            A proxy server used by Pdfcrowd conversion process for accessing the source URLs with HTTP scheme. It can help to circumvent regional restrictions or provide limited access to your intranet.
                            The value must have format DOMAIN_OR_IP_ADDRESS:PORT.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-https_proxy">
                        HTTPS Proxy
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-https_proxy" name="save-as-pdf-pdfcrowd[https_proxy]" value="<?php echo($https_proxy); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>https_proxy</strong>"
                        </div>
                        <div class='description'>
                            A proxy server used by Pdfcrowd conversion process for accessing the source URLs with HTTPS scheme. It can help to circumvent regional restrictions or provide limited access to your intranet.
                            The value must have format DOMAIN_OR_IP_ADDRESS:PORT.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-client_certificate">
                        Client Certificate
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-client_certificate" name="save-as-pdf-pdfcrowd[client_certificate]" value="<?php echo($client_certificate); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>client_certificate</strong>"
                        </div>
                        <div class='description'>
                            A client certificate to authenticate Pdfcrowd converter on your web server. The certificate is used for two-way SSL/TLS authentication and adds extra security.
                            The file must exist and not be empty.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-client_certificate_password">
                        Client Certificate Password
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-client_certificate_password" name="save-as-pdf-pdfcrowd[client_certificate_password]" value="<?php echo($client_certificate_password); ?>" placeholder="" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>client_certificate_password</strong>"
                        </div>
                        <div class='description'>
                            A password for PKCS12 file with a client certificate if it is needed.
                            
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-pdf-pdfcrowd-expert" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">

    <h2>Expert</h2>
    
    <a href='#' class='save-as-pdf-pdfcrowd-expert-show button-secondary'>
        Show parameters
    </a>
    <a href='#' class='save-as-pdf-pdfcrowd-expert-hide button-secondary' style='display: none;'>
        Hide parameters
    </a>



    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-layout_dpi">
                        Layout DPI
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-layout_dpi" name="save-as-pdf-pdfcrowd[layout_dpi]" value="<?php echo($layout_dpi); ?>" placeholder="300" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>layout_dpi</strong>"
                        </div>
                        <div class='description'>
                            Set the internal DPI resolution used for positioning of PDF contents. It can help in situations when there are small inaccuracies in the PDF. It is recommended to use values that are a multiple of 72, such as 288 or 360.
                              <br>
 It is applicable for converter version >= 20.10.
                              More Pdfcrowd <a href='https://pdfcrowd.com/doc/api/versioning/'>versioning details</a>.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-contents_matrix">
                        Contents Matrix
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-contents_matrix" name="save-as-pdf-pdfcrowd[contents_matrix]" value="<?php echo($contents_matrix); ?>" placeholder="1,0,0,0,1,0" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>contents_matrix</strong>"
                        </div>
                        <div class='description'>
                            A 2D transformation matrix applied to the main contents on each page. The origin [0,0] is located at the top-left corner of the contents. The resolution is 72 dpi.
                              <br>
 It is applicable for converter version >= 20.10.
                              More Pdfcrowd <a href='https://pdfcrowd.com/doc/api/versioning/'>versioning details</a>.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-header_matrix">
                        Header Matrix
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-header_matrix" name="save-as-pdf-pdfcrowd[header_matrix]" value="<?php echo($header_matrix); ?>" placeholder="1,0,0,0,1,0" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>header_matrix</strong>"
                        </div>
                        <div class='description'>
                            A 2D transformation matrix applied to the page header contents. The origin [0,0] is located at the top-left corner of the header. The resolution is 72 dpi.
                              <br>
 It is applicable for converter version >= 20.10.
                              More Pdfcrowd <a href='https://pdfcrowd.com/doc/api/versioning/'>versioning details</a>.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-footer_matrix">
                        Footer Matrix
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-footer_matrix" name="save-as-pdf-pdfcrowd[footer_matrix]" value="<?php echo($footer_matrix); ?>" placeholder="1,0,0,0,1,0" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>footer_matrix</strong>"
                        </div>
                        <div class='description'>
                            A 2D transformation matrix applied to the page footer contents. The origin [0,0] is located at the top-left corner of the footer. The resolution is 72 dpi.
                              <br>
 It is applicable for converter version >= 20.10.
                              More Pdfcrowd <a href='https://pdfcrowd.com/doc/api/versioning/'>versioning details</a>.
                            
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-disable_page_height_optimization">
                        Disable Page Height Optimization
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-disable_page_height_optimization" name="save-as-pdf-pdfcrowd[disable_page_height_optimization]" value="1" <?php checked( $disable_page_height_optimization, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>disable_page_height_optimization</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Disable automatic height adjustment that compensates for pixel to point rounding errors.
                              <br>
 It is applicable for converter version >= 20.10.
                              More Pdfcrowd <a href='https://pdfcrowd.com/doc/api/versioning/'>versioning details</a>.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-main_document_css_annotation">
                        Main Document CSS Annotation
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-main_document_css_annotation" name="save-as-pdf-pdfcrowd[main_document_css_annotation]" value="1" <?php checked( $main_document_css_annotation, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>main_document_css_annotation</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Add special CSS classes to the main document's body element. This allows applying custom styling based on these classes:
  <ul>
    <li><span class='field-value'>pdfcrowd-page-X</span> - where X is the current page number</li>
    <li><span class='field-value'>pdfcrowd-page-odd</span> - odd page</li>
    <li><span class='field-value'>pdfcrowd-page-even</span> - even page</li>
  </ul>

                              <br>
 It is applicable for converter version >= 20.10.
                              More Pdfcrowd <a href='https://pdfcrowd.com/doc/api/versioning/'>versioning details</a>.
                        </div>
                            <div class='save-as-pdf-pdfcrowd-note'>
                                <strong>Warning:</strong> If your custom styling affects the contents area size (e.g. by using different margins, padding, border width), the resulting PDF may contain duplicit contents or some contents may be missing.
                            </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-header_footer_css_annotation">
                        Header Footer CSS Annotation
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-header_footer_css_annotation" name="save-as-pdf-pdfcrowd[header_footer_css_annotation]" value="1" <?php checked( $header_footer_css_annotation, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>header_footer_css_annotation</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Add special CSS classes to the header/footer's body element. This allows applying custom styling based on these classes:
  <ul>
    <li><span class='field-value'>pdfcrowd-page-X</span> - where X is the current page number</li>
    <li><span class='field-value'>pdfcrowd-page-count-X</span> - where X is the total page count</li>
    <li><span class='field-value'>pdfcrowd-page-first</span> - the first page</li>
    <li><span class='field-value'>pdfcrowd-page-last</span> - the last page</li>
    <li><span class='field-value'>pdfcrowd-page-odd</span> - odd page</li>
    <li><span class='field-value'>pdfcrowd-page-even</span> - even page</li>
  </ul>

                              <br>
 It is applicable for converter version >= 20.10.
                              More Pdfcrowd <a href='https://pdfcrowd.com/doc/api/versioning/'>versioning details</a>.
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-pdf-pdfcrowd-api-client-options" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">

    <h2>API Client Options</h2>
    
    <a href='#' class='save-as-pdf-pdfcrowd-expert-show button-secondary'>
        Show parameters
    </a>
    <a href='#' class='save-as-pdf-pdfcrowd-expert-hide button-secondary' style='display: none;'>
        Hide parameters
    </a>



    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-converter_version">
                        Converter Version
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[converter_version]" id="save-as-pdf-pdfcrowd-converter_version">
                    <option value="latest" <?php selected($converter_version, 'latest');?>>The latest converter version.</option>
                    <option value="20.10" <?php selected($converter_version, '20.10');?>>Version 20.10.</option>
                    <option value="18.10" <?php selected($converter_version, '18.10');?>>Version 18.10.</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>converter_version</strong>"<br>Possible values: <ul><li>"latest" - The latest converter version.</li><li>"20.10" - Version 20.10.</li><li>"18.10" - Version 18.10.</li></ul>
                        </div>
                        <div class='description'>
                            Set the converter version. Different versions may produce different output. Choose which one provides the best output for your case.
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-use_http">
                        Use HTTP
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-use_http" name="save-as-pdf-pdfcrowd[use_http]" value="1" <?php checked( $use_http, 1 ); ?> autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>use_http</strong>"<br>Possible values: 0, 1
                        </div>
                        <div class='description'>
                            Specifies if the client communicates over HTTP or HTTPS with Pdfcrowd API.
                        </div>
                            <div class='save-as-pdf-pdfcrowd-note'>
                                <strong>Warning:</strong> Using HTTP is insecure as data sent over HTTP is not encrypted. Enable this option only if you know what you are doing.
                            </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-retry_count">
                        Retry Count
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-retry_count" name="save-as-pdf-pdfcrowd[retry_count]" value="<?php echo($retry_count); ?>" placeholder="1" autocomplete="off" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <div class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>retry_count</strong>"
                        </div>
                        <div class='description'>
                            Specifies the number of retries when the 502 HTTP status code is received. The 502 status code indicates a temporary network issue. This feature can be disabled by setting to 0.
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
