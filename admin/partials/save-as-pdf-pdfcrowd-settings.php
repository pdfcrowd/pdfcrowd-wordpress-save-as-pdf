<?php

/**
* Partial of the clean up settings
*
*
*
* @link       https://pdfcrowd.com/wordpress/
* @since      1.0.0
*
* @package    Save_As_Pdf_Pdfcrowd
* @subpackage Save_As_Pdf_Pdfcrowd/admin/partials
*/
?>

<div id="save-as-pdf-pdfcrowd-page-setup" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">

    <h2>Page Setup</h2>


    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_size">
                        Page Size
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[page_size]">
                    <option value="A2" <?php selected($page_size, 'A2');?>>A2</option>
                    <option value="A3" <?php selected($page_size, 'A3');?>>A3</option>
                    <option value="A4" <?php selected($page_size, 'A4');?>>A4</option>
                    <option value="A5" <?php selected($page_size, 'A5');?>>A5</option>
                    <option value="A6" <?php selected($page_size, 'A6');?>>A6</option>
                    <option value="Letter" <?php selected($page_size, 'Letter');?>>Letter</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the output page size.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-page_width" name="save-as-pdf-pdfcrowd[page_width]" value="<?php if(!empty($page_width)) esc_attr_e($page_width, $this->plugin_name);?>" placeholder="8.27in" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the output page width. The safe maximum is <span class='field-value'>200in</span> otherwise some PDF viewers may be unable to open the PDF.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-page_height" name="save-as-pdf-pdfcrowd[page_height]" value="<?php if(!empty($page_height)) esc_attr_e($page_height, $this->plugin_name);?>" placeholder="11.7in" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the output page height. Use <span class='field-value'>-1</span> for a single page PDF. The safe maximum is <span class='field-value'>200in</span> otherwise some PDF viewers may be unable to open the PDF.
                            Can be -1 or specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </p>
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
                    <select name="save-as-pdf-pdfcrowd[orientation]">
                    <option value="landscape" <?php selected($orientation, 'landscape');?>>landscape</option>
                    <option value="portrait" <?php selected($orientation, 'portrait');?>>portrait</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the output page orientation.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-margin_top" name="save-as-pdf-pdfcrowd[margin_top]" value="<?php if(!empty($margin_top)) esc_attr_e($margin_top, $this->plugin_name);?>" placeholder="0.4in" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the output page top margin.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-margin_right" name="save-as-pdf-pdfcrowd[margin_right]" value="<?php if(!empty($margin_right)) esc_attr_e($margin_right, $this->plugin_name);?>" placeholder="0.4in" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the output page right margin.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-margin_bottom" name="save-as-pdf-pdfcrowd[margin_bottom]" value="<?php if(!empty($margin_bottom)) esc_attr_e($margin_bottom, $this->plugin_name);?>" placeholder="0.4in" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the output page bottom margin.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-margin_left" name="save-as-pdf-pdfcrowd[margin_left]" value="<?php if(!empty($margin_left)) esc_attr_e($margin_left, $this->plugin_name);?>" placeholder="0.4in" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the output page left margin.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </p>
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
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_margins" name="save-as-pdf-pdfcrowd[no_margins]" value="1" <?php checked( $no_margins, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Disable page margins.
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-header_url">
                        Header Url
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-header_url" name="save-as-pdf-pdfcrowd[header_url]" value="<?php if(!empty($header_url)) esc_attr_e($header_url, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Load an HTML code from the specified URL and use it as the page header. The following classes can be used in the HTML. The content of the respective elements will be expanded as follows: <ul> <li><span class='field-value'>pdfcrowd-page-count</span> - the total page count of printed pages</li> <li><span class='field-value'>pdfcrowd-page-number</span> - the current page number</li> <li><span class='field-value'>pdfcrowd-source-url</span> - the source URL of a converted document</li> </ul> The following attributes can be used: <ul> <li><span class='field-value'>data-pdfcrowd-number-format</span> - specifies the type of the used numerals <ul> <li>Arabic numerals are used by default.</li> <li>Roman numerals can be generated by the <span class='field-value'>roman</span> and <span class='field-value'>roman-lowercase</span> values</li> <ul> <li> Example: &lt;span class='pdfcrowd-page-number' data-pdfcrowd-number-format='roman'&gt;&lt;/span&gt; </li> </ul> </ul> </li> <li><span class='field-value'>data-pdfcrowd-placement</span> - specifies where to place the source URL, allowed values: <ul> <li>The URL is inserted to the content <ul> <li> Example: &lt;span class='pdfcrowd-source-url'&gt;&lt;/span&gt;<br> will produce &lt;span&gt;http://example.com&lt;/span&gt; </li> </ul> </li> <li><span class='field-value'>href</span> - the URL is set to the href attribute <ul> <li> Example: &lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href'&gt;Link to source&lt;/a&gt;<br> will produce &lt;a href='http://example.com'&gt;Link to source&lt;/a&gt; </li> </ul> </li> <li><span class='field-value'>href-and-content</span> - the URL is set to the href attribute and to the content <ul> <li> Example: &lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href-and-content'&gt;&lt;/a&gt;<br> will produce &lt;a href='http://example.com'&gt;http://example.com&lt;/a&gt; </li> </ul> </li> </ul> </li> </ul>
                            The supported protocols are http:// and https://.
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-header_html">
                        Header Html
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-header_html" name="save-as-pdf-pdfcrowd[header_html]" value="<?php if(!empty($header_html)) esc_attr_e($header_html, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Use the specified HTML code as the page header. The following classes can be used in the HTML. The content of the respective elements will be expanded as follows: <ul> <li><span class='field-value'>pdfcrowd-page-count</span> - the total page count of printed pages</li> <li><span class='field-value'>pdfcrowd-page-number</span> - the current page number</li> <li><span class='field-value'>pdfcrowd-source-url</span> - the source URL of a converted document</li> </ul> The following attributes can be used: <ul> <li><span class='field-value'>data-pdfcrowd-number-format</span> - specifies the type of the used numerals <ul> <li>Arabic numerals are used by default.</li> <li>Roman numerals can be generated by the <span class='field-value'>roman</span> and <span class='field-value'>roman-lowercase</span> values</li> <ul> <li> Example: &lt;span class='pdfcrowd-page-number' data-pdfcrowd-number-format='roman'&gt;&lt;/span&gt; </li> </ul> </ul> </li> <li><span class='field-value'>data-pdfcrowd-placement</span> - specifies where to place the source URL, allowed values: <ul> <li>The URL is inserted to the content <ul> <li> Example: &lt;span class='pdfcrowd-source-url'&gt;&lt;/span&gt;<br> will produce &lt;span&gt;http://example.com&lt;/span&gt; </li> </ul> </li> <li><span class='field-value'>href</span> - the URL is set to the href attribute <ul> <li> Example: &lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href'&gt;Link to source&lt;/a&gt;<br> will produce &lt;a href='http://example.com'&gt;Link to source&lt;/a&gt; </li> </ul> </li> <li><span class='field-value'>href-and-content</span> - the URL is set to the href attribute and to the content <ul> <li> Example: &lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href-and-content'&gt;&lt;/a&gt;<br> will produce &lt;a href='http://example.com'&gt;http://example.com&lt;/a&gt; </li> </ul> </li> </ul> </li> </ul>
                            
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-header_height" name="save-as-pdf-pdfcrowd[header_height]" value="<?php if(!empty($header_height)) esc_attr_e($header_height, $this->plugin_name);?>" placeholder="0.5in" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the header height.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-footer_url">
                        Footer Url
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-footer_url" name="save-as-pdf-pdfcrowd[footer_url]" value="<?php if(!empty($footer_url)) esc_attr_e($footer_url, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Load an HTML code from the specified URL and use it as the page footer. The following classes can be used in the HTML. The content of the respective elements will be expanded as follows: <ul> <li><span class='field-value'>pdfcrowd-page-count</span> - the total page count of printed pages</li> <li><span class='field-value'>pdfcrowd-page-number</span> - the current page number</li> <li><span class='field-value'>pdfcrowd-source-url</span> - the source URL of a converted document</li> </ul> The following attributes can be used: <ul> <li><span class='field-value'>data-pdfcrowd-number-format</span> - specifies the type of the used numerals <ul> <li>Arabic numerals are used by default.</li> <li>Roman numerals can be generated by the <span class='field-value'>roman</span> and <span class='field-value'>roman-lowercase</span> values</li> <ul> <li> Example: &lt;span class='pdfcrowd-page-number' data-pdfcrowd-number-format='roman'&gt;&lt;/span&gt; </li> </ul> </ul> </li> <li><span class='field-value'>data-pdfcrowd-placement</span> - specifies where to place the source URL, allowed values: <ul> <li>The URL is inserted to the content <ul> <li> Example: &lt;span class='pdfcrowd-source-url'&gt;&lt;/span&gt;<br> will produce &lt;span&gt;http://example.com&lt;/span&gt; </li> </ul> </li> <li><span class='field-value'>href</span> - the URL is set to the href attribute <ul> <li> Example: &lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href'&gt;Link to source&lt;/a&gt;<br> will produce &lt;a href='http://example.com'&gt;Link to source&lt;/a&gt; </li> </ul> </li> <li><span class='field-value'>href-and-content</span> - the URL is set to the href attribute and to the content <ul> <li> Example: &lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href-and-content'&gt;&lt;/a&gt;<br> will produce &lt;a href='http://example.com'&gt;http://example.com&lt;/a&gt; </li> </ul> </li> </ul> </li> </ul>
                            The supported protocols are http:// and https://.
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-footer_html">
                        Footer Html
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-footer_html" name="save-as-pdf-pdfcrowd[footer_html]" value="<?php if(!empty($footer_html)) esc_attr_e($footer_html, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Use the specified HTML as the page footer. The following classes can be used in the HTML. The content of the respective elements will be expanded as follows: <ul> <li><span class='field-value'>pdfcrowd-page-count</span> - the total page count of printed pages</li> <li><span class='field-value'>pdfcrowd-page-number</span> - the current page number</li> <li><span class='field-value'>pdfcrowd-source-url</span> - the source URL of a converted document</li> </ul> The following attributes can be used: <ul> <li><span class='field-value'>data-pdfcrowd-number-format</span> - specifies the type of the used numerals <ul> <li>Arabic numerals are used by default.</li> <li>Roman numerals can be generated by the <span class='field-value'>roman</span> and <span class='field-value'>roman-lowercase</span> values</li> <ul> <li> Example: &lt;span class='pdfcrowd-page-number' data-pdfcrowd-number-format='roman'&gt;&lt;/span&gt; </li> </ul> </ul> </li> <li><span class='field-value'>data-pdfcrowd-placement</span> - specifies where to place the source URL, allowed values: <ul> <li>The URL is inserted to the content <ul> <li> Example: &lt;span class='pdfcrowd-source-url'&gt;&lt;/span&gt;<br> will produce &lt;span&gt;http://example.com&lt;/span&gt; </li> </ul> </li> <li><span class='field-value'>href</span> - the URL is set to the href attribute <ul> <li> Example: &lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href'&gt;Link to source&lt;/a&gt;<br> will produce &lt;a href='http://example.com'&gt;Link to source&lt;/a&gt; </li> </ul> </li> <li><span class='field-value'>href-and-content</span> - the URL is set to the href attribute and to the content <ul> <li> Example: &lt;a class='pdfcrowd-source-url' data-pdfcrowd-placement='href-and-content'&gt;&lt;/a&gt;<br> will produce &lt;a href='http://example.com'&gt;http://example.com&lt;/a&gt; </li> </ul> </li> </ul> </li> </ul>
                            
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-footer_height" name="save-as-pdf-pdfcrowd[footer_height]" value="<?php if(!empty($footer_height)) esc_attr_e($footer_height, $this->plugin_name);?>" placeholder="0.5in" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the footer height.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-print_page_range" name="save-as-pdf-pdfcrowd[print_page_range]" value="<?php if(!empty($print_page_range)) esc_attr_e($print_page_range, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the page range to print.
                            A comma seperated list of page numbers or ranges.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-exclude_header_on_pages" name="save-as-pdf-pdfcrowd[exclude_header_on_pages]" value="<?php if(!empty($exclude_header_on_pages)) esc_attr_e($exclude_header_on_pages, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            The page header is not printed on the specified pages.
                            A comma seperated list of page numbers.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-exclude_footer_on_pages" name="save-as-pdf-pdfcrowd[exclude_footer_on_pages]" value="<?php if(!empty($exclude_footer_on_pages)) esc_attr_e($exclude_footer_on_pages, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            The page footer is not printed on the specified pages.
                            A comma seperated list of page numbers.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-page_numbering_offset" name="save-as-pdf-pdfcrowd[page_numbering_offset]" value="<?php if(!empty($page_numbering_offset)) esc_attr_e($page_numbering_offset, $this->plugin_name);?>" placeholder="0" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set an offset between physical and logical page numbers.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-content_area_x" name="save-as-pdf-pdfcrowd[content_area_x]" value="<?php if(!empty($content_area_x)) esc_attr_e($content_area_x, $this->plugin_name);?>" placeholder="0in" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the top left X coordinate of the content area. It's relative to the top left X coordinate of the print area.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt). It may contain a negative value.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-content_area_y" name="save-as-pdf-pdfcrowd[content_area_y]" value="<?php if(!empty($content_area_y)) esc_attr_e($content_area_y, $this->plugin_name);?>" placeholder="0in" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the top left Y coordinate of the content area. It's relative to the top left Y coordinate of the print area.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt). It may contain a negative value.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-content_area_width" name="save-as-pdf-pdfcrowd[content_area_width]" value="<?php if(!empty($content_area_width)) esc_attr_e($content_area_width, $this->plugin_name);?>" placeholder="The width of the print area." />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the width of the content area. It should be at least 1 inch.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-content_area_height" name="save-as-pdf-pdfcrowd[content_area_height]" value="<?php if(!empty($content_area_height)) esc_attr_e($content_area_height, $this->plugin_name);?>" placeholder="The height of the print area." />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the height of the content area. It should be at least 1 inch.
                            Can be specified in inches (in), millimeters (mm), centimeters (cm), or points (pt).
                        </p>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-pdf-pdfcrowd-watermark-and-background" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">

    <h2>Watermark & Background</h2>

    <p>PDF file used as a watermark or a background must exist on the file system. To apply Wordpress uploaded media use a relative path. Example:
        <br/>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-page_watermark" name="save-as-pdf-pdfcrowd[page_watermark]" value="<?php if(!empty($page_watermark)) esc_attr_e($page_watermark, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Apply the first page of the watermark PDF to every page of the output PDF.
                            The file must exist and not be empty.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-multipage_watermark" name="save-as-pdf-pdfcrowd[multipage_watermark]" value="<?php if(!empty($multipage_watermark)) esc_attr_e($multipage_watermark, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Apply each page of the specified watermark PDF to the corresponding page of the output PDF.
                            The file must exist and not be empty.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-page_background" name="save-as-pdf-pdfcrowd[page_background]" value="<?php if(!empty($page_background)) esc_attr_e($page_background, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Apply the first page of the specified PDF to the background of every page of the output PDF.
                            The file must exist and not be empty.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-multipage_background" name="save-as-pdf-pdfcrowd[multipage_background]" value="<?php if(!empty($multipage_background)) esc_attr_e($multipage_background, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Apply each page of the specified PDF to the background of the corresponding page of the output PDF.
                            The file must exist and not be empty.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-page_background_color" name="save-as-pdf-pdfcrowd[page_background_color]" value="<?php if(!empty($page_background_color)) esc_attr_e($page_background_color, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            The page background color in RGB or RGBA hexadecimal format. The color fills the entire page regardless of the margins.
                            The value must be in RRGGBB or RRGGBBAA hexadecimal format.
                        </p>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-pdf-pdfcrowd-general-options" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">

    <h2>General Options</h2>


    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-no_background">
                        No Background
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_background" name="save-as-pdf-pdfcrowd[no_background]" value="1" <?php checked( $no_background, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Do not print the background graphics.
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-disable_javascript">
                        Disable Javascript
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-disable_javascript" name="save-as-pdf-pdfcrowd[disable_javascript]" value="1" <?php checked( $disable_javascript, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Do not execute JavaScript.
                        </p>
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
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-disable_image_loading" name="save-as-pdf-pdfcrowd[disable_image_loading]" value="1" <?php checked( $disable_image_loading, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Do not load images.
                        </p>
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
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-disable_remote_fonts" name="save-as-pdf-pdfcrowd[disable_remote_fonts]" value="1" <?php checked( $disable_remote_fonts, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Disable loading fonts from remote sources.
                        </p>
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
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-block_ads" name="save-as-pdf-pdfcrowd[block_ads]" value="1" <?php checked( $block_ads, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Try to block ads. Enabling this option can produce smaller output and speed up the conversion.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-default_encoding" name="save-as-pdf-pdfcrowd[default_encoding]" value="<?php if(!empty($default_encoding)) esc_attr_e($default_encoding, $this->plugin_name);?>" placeholder="auto detect" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the default HTML content text encoding.
                            
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-http_auth_user_name">
                        Http Auth User Name
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-http_auth_user_name" name="save-as-pdf-pdfcrowd[http_auth_user_name]" value="<?php if(!empty($http_auth_user_name)) esc_attr_e($http_auth_user_name, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the HTTP authentication user name.
                            
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-http_auth_password">
                        Http Auth Password
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-http_auth_password" name="save-as-pdf-pdfcrowd[http_auth_password]" value="<?php if(!empty($http_auth_password)) esc_attr_e($http_auth_password, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the HTTP authentication password.
                            
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-use_print_media">
                        Use Print Media
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-use_print_media" name="save-as-pdf-pdfcrowd[use_print_media]" value="1" <?php checked( $use_print_media, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Use the print version of the page if available (@media print).
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-no_xpdfcrowd_header">
                        No Xpdfcrowd Header
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_xpdfcrowd_header" name="save-as-pdf-pdfcrowd[no_xpdfcrowd_header]" value="1" <?php checked( $no_xpdfcrowd_header, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Do not send the X-Pdfcrowd HTTP header in Pdfcrowd HTTP requests.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-cookies" name="save-as-pdf-pdfcrowd[cookies]" value="<?php if(!empty($cookies)) esc_attr_e($cookies, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set cookies that are sent in Pdfcrowd HTTP requests.
                            
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-verify_ssl_certificates">
                        Verify Ssl Certificates
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-verify_ssl_certificates" name="save-as-pdf-pdfcrowd[verify_ssl_certificates]" value="1" <?php checked( $verify_ssl_certificates, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Do not allow insecure HTTPS connections.
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-fail_on_main_url_error">
                        Fail On Main Url Error
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-fail_on_main_url_error" name="save-as-pdf-pdfcrowd[fail_on_main_url_error]" value="1" <?php checked( $fail_on_main_url_error, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Abort the conversion if the main URL HTTP status code is greater than or equal to 400.
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-fail_on_any_url_error">
                        Fail On Any Url Error
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-fail_on_any_url_error" name="save-as-pdf-pdfcrowd[fail_on_any_url_error]" value="1" <?php checked( $fail_on_any_url_error, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Abort the conversion if any of the sub-request HTTP status code is greater than or equal to 400 or if some sub-requests are still pending. See details in a debug log.
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-custom_javascript">
                        Custom Javascript
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-custom_javascript" name="save-as-pdf-pdfcrowd[custom_javascript]" value="<?php if(!empty($custom_javascript)) esc_attr_e($custom_javascript, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Run a custom JavaScript after the document is loaded and ready to print. The script is intended for post-load DOM manipulation (add/remove elements, update CSS, ...). In addition to the standard browser APIs, the custom JavaScript code can use helper functions from our <a href='https://pdfcrowd.com/doc/api/libpdfcrowd/'>JavaScript library</a>.
                            
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-on_load_javascript">
                        On Load Javascript
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-on_load_javascript" name="save-as-pdf-pdfcrowd[on_load_javascript]" value="<?php if(!empty($on_load_javascript)) esc_attr_e($on_load_javascript, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Run a custom JavaScript right after the document is loaded. The script is intended for early DOM manipulation (add/remove elements, update CSS, ...). In addition to the standard browser APIs, the custom JavaScript code can use helper functions from our <a href='https://pdfcrowd.com/doc/api/libpdfcrowd/'>JavaScript library</a>.
                            
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-custom_http_header">
                        Custom Http Header
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-custom_http_header" name="save-as-pdf-pdfcrowd[custom_http_header]" value="<?php if(!empty($custom_http_header)) esc_attr_e($custom_http_header, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set a custom HTTP header that is sent in Pdfcrowd HTTP requests.
                            A string containing the header name and value separated by a colon.
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-javascript_delay">
                        Javascript Delay
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-javascript_delay" name="save-as-pdf-pdfcrowd[javascript_delay]" value="<?php if(!empty($javascript_delay)) esc_attr_e($javascript_delay, $this->plugin_name);?>" placeholder="200" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Wait the specified number of milliseconds to finish all JavaScript after the document is loaded. The maximum value is determined by your API license.
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-element_to_convert">
                        Element To Convert
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-element_to_convert" name="save-as-pdf-pdfcrowd[element_to_convert]" value="<?php if(!empty($element_to_convert)) esc_attr_e($element_to_convert, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Convert only the specified element from the main document and its children. The element is specified by one or more <a href='https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Selectors'>CSS selectors</a>. If the element is not found, the conversion fails. If multiple elements are found, the first one is used.
                            
                        </p>
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
                    <select name="save-as-pdf-pdfcrowd[element_to_convert_mode]">
                    <option value="cut-out" <?php selected($element_to_convert_mode, 'cut-out');?>>cut-out - The element and its children are cut out of the document.</option>
                    <option value="remove-siblings" <?php selected($element_to_convert_mode, 'remove-siblings');?>>remove-siblings - All element's siblings are removed.</option>
                    <option value="hide-siblings" <?php selected($element_to_convert_mode, 'hide-siblings');?>>hide-siblings - All element's sibilings are hidden.</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Specify the DOM handling when only a part of the document is converted.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-wait_for_element" name="save-as-pdf-pdfcrowd[wait_for_element]" value="<?php if(!empty($wait_for_element)) esc_attr_e($wait_for_element, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Wait for the specified element in a source document. The element is specified by one or more <a href='https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Selectors'>CSS selectors</a>. The element is searched for in the main document and all iframes. If the element is not found, the conversion fails. Your API license defines the maximum wait time by "Max Delay" parameter.
                            
                        </p>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-pdf-pdfcrowd-print-resolution" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">

    <h2>Print Resolution</h2>


    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-viewport_width">
                        Viewport Width
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-viewport_width" name="save-as-pdf-pdfcrowd[viewport_width]" value="<?php if(!empty($viewport_width)) esc_attr_e($viewport_width, $this->plugin_name);?>" placeholder="1024" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the viewport width in pixels. The viewport is the user's visible area of the page.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-viewport_height" name="save-as-pdf-pdfcrowd[viewport_height]" value="<?php if(!empty($viewport_height)) esc_attr_e($viewport_height, $this->plugin_name);?>" placeholder="768" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the viewport height in pixels. The viewport is the user's visible area of the page.
                        </p>
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
                    <select name="save-as-pdf-pdfcrowd[rendering_mode]">
                    <option value="default" <?php selected($rendering_mode, 'default');?>>default - This mode is based on the standard browser print functionality.</option>
                    <option value="viewport" <?php selected($rendering_mode, 'viewport');?>>viewport - The viewport width affects the @media min-width and max-width CSS properties. This mode can be used to choose a particular version (mobile, desktop, ..) of a responsive page.</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the rendering mode.
                        </p>
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
                    <select name="save-as-pdf-pdfcrowd[smart_scaling_mode]">
                    <option value="default" <?php selected($smart_scaling_mode, 'default');?>>default - This mode is based on the standard browser print functionality.</option>
                    <option value="disabled" <?php selected($smart_scaling_mode, 'disabled');?>>disabled - No smart scaling is performed.</option>
                    <option value="viewport-fit" <?php selected($smart_scaling_mode, 'viewport-fit');?>>viewport-fit - The viewport width fits the print area width.</option>
                    <option value="content-fit" <?php selected($smart_scaling_mode, 'content-fit');?>>content-fit - The HTML contents width fits the print area width.</option>
                    <option value="single-page-fit" <?php selected($smart_scaling_mode, 'single-page-fit');?>>single-page-fit - The whole HTML contents fits the print area of a single page.</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Specifies the scaling mode used for fitting the HTML contents to the print area.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-scale_factor" name="save-as-pdf-pdfcrowd[scale_factor]" value="<?php if(!empty($scale_factor)) esc_attr_e($scale_factor, $this->plugin_name);?>" placeholder="100" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the scaling factor (zoom) for the main page area.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-header_footer_scale_factor" name="save-as-pdf-pdfcrowd[header_footer_scale_factor]" value="<?php if(!empty($header_footer_scale_factor)) esc_attr_e($header_footer_scale_factor, $this->plugin_name);?>" placeholder="100" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the scaling factor (zoom) for the header and footer.
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-jpeg_quality">
                        Jpeg Quality
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-jpeg_quality" name="save-as-pdf-pdfcrowd[jpeg_quality]" value="<?php if(!empty($jpeg_quality)) esc_attr_e($jpeg_quality, $this->plugin_name);?>" placeholder="100" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the quality of embedded JPEG images. A lower quality results in a smaller PDF file but can lead to compression artifacts.
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-convert_images_to_jpeg">
                        Convert Images To Jpeg
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[convert_images_to_jpeg]">
                    <option value="none" <?php selected($convert_images_to_jpeg, 'none');?>>none - No image conversion is done.</option>
                    <option value="opaque" <?php selected($convert_images_to_jpeg, 'opaque');?>>opaque - Only opaque images are converted to JPEG images.</option>
                    <option value="all" <?php selected($convert_images_to_jpeg, 'all');?>>all - All images are converted to JPEG images. The JPEG format doesn't support transparency so the transparent color is replaced by a PDF page background color.</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Specify which image types will be converted to JPEG. Converting lossless compression image formats (PNG, GIF, ...) to JPEG may result in a smaller PDF file.
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-image_dpi">
                        Image Dpi
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-image_dpi" name="save-as-pdf-pdfcrowd[image_dpi]" value="<?php if(!empty($image_dpi)) esc_attr_e($image_dpi, $this->plugin_name);?>" placeholder="0" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the DPI of images in PDF. A lower DPI may result in a smaller PDF file.  If the specified DPI is higher than the actual image DPI, the original image DPI is retained (no upscaling is performed). Use <span class='field-value'>0</span> to leave the images unaltered.
                        </p>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-pdf-pdfcrowd-pdf-format" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">

    <h2>PDF Format</h2>


    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-linearize">
                        Linearize
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-linearize" name="save-as-pdf-pdfcrowd[linearize]" value="1" <?php checked( $linearize, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Create linearized PDF. This is also known as Fast Web View.
                        </p>
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
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-encrypt" name="save-as-pdf-pdfcrowd[encrypt]" value="1" <?php checked( $encrypt, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Encrypt the PDF. This prevents search engines from indexing the contents.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-user_password" name="save-as-pdf-pdfcrowd[user_password]" value="<?php if(!empty($user_password)) esc_attr_e($user_password, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Protect the PDF with a user password. When a PDF has a user password, it must be supplied in order to view the document and to perform operations allowed by the access permissions.
                            
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-owner_password" name="save-as-pdf-pdfcrowd[owner_password]" value="<?php if(!empty($owner_password)) esc_attr_e($owner_password, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Protect the PDF with an owner password.  Supplying an owner password grants unlimited access to the PDF including changing the passwords and access permissions.
                            
                        </p>
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
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_print" name="save-as-pdf-pdfcrowd[no_print]" value="1" <?php checked( $no_print, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Disallow printing of the output PDF.
                        </p>
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
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_modify" name="save-as-pdf-pdfcrowd[no_modify]" value="1" <?php checked( $no_modify, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Disallow modification of the ouput PDF.
                        </p>
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
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-no_copy" name="save-as-pdf-pdfcrowd[no_copy]" value="1" <?php checked( $no_copy, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Disallow text and graphics extraction from the output PDF.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-title" name="save-as-pdf-pdfcrowd[title]" value="<?php if(!empty($title)) esc_attr_e($title, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the title of the PDF.
                            
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-subject" name="save-as-pdf-pdfcrowd[subject]" value="<?php if(!empty($subject)) esc_attr_e($subject, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the subject of the PDF.
                            
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-author" name="save-as-pdf-pdfcrowd[author]" value="<?php if(!empty($author)) esc_attr_e($author, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the author of the PDF.
                            
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-keywords" name="save-as-pdf-pdfcrowd[keywords]" value="<?php if(!empty($keywords)) esc_attr_e($keywords, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Associate keywords with the document.
                            
                        </p>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-pdf-pdfcrowd-viewer-preferences" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">

    <h2>Viewer Preferences</h2>


    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-page_layout">
                        Page Layout
                    </label>
                </th>
                <td>
                    <select name="save-as-pdf-pdfcrowd[page_layout]">
                    <option value="" <?php selected($page_layout, '');?>>-- unset --</option>
                    <option value="single-page" <?php selected($page_layout, 'single-page');?>>single-page - Display one page at a time.</option>
                    <option value="one-column" <?php selected($page_layout, 'one-column');?>>one-column - Display the pages in one column.</option>
                    <option value="two-column-left" <?php selected($page_layout, 'two-column-left');?>>two-column-left - Display the pages in two columns, with odd-numbered pages on the left.</option>
                    <option value="two-column-right" <?php selected($page_layout, 'two-column-right');?>>two-column-right - Display the pages in two columns, with odd-numbered pages on the right.</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Specify the page layout to be used when the document is opened.
                        </p>
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
                    <select name="save-as-pdf-pdfcrowd[page_mode]">
                    <option value="" <?php selected($page_mode, '');?>>-- unset --</option>
                    <option value="full-screen" <?php selected($page_mode, 'full-screen');?>>full-screen - Full-screen mode.</option>
                    <option value="thumbnails" <?php selected($page_mode, 'thumbnails');?>>thumbnails - Thumbnail images are visible.</option>
                    <option value="outlines" <?php selected($page_mode, 'outlines');?>>outlines - Document outline is visible.</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Specify how the document should be displayed when opened.
                        </p>
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
                    <select name="save-as-pdf-pdfcrowd[initial_zoom_type]">
                    <option value="" <?php selected($initial_zoom_type, '');?>>-- unset --</option>
                    <option value="fit-width" <?php selected($initial_zoom_type, 'fit-width');?>>fit-width - The page content is magnified just enough to fit the entire width of the page within the window.</option>
                    <option value="fit-height" <?php selected($initial_zoom_type, 'fit-height');?>>fit-height - The page content is magnified just enough to fit the entire height of the page within the window.</option>
                    <option value="fit-page" <?php selected($initial_zoom_type, 'fit-page');?>>fit-page - The page content is magnified just enough to fit the entire page within the window both horizontally and vertically. If the required horizontal and vertical magnification factors are different, use the smaller of the two, centering the page within the window in the other dimension.</option>
                    </select>
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Specify how the page should be displayed when opened.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-initial_page" name="save-as-pdf-pdfcrowd[initial_page]" value="<?php if(!empty($initial_page)) esc_attr_e($initial_page, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Display the specified page when the document is opened.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-initial_zoom" name="save-as-pdf-pdfcrowd[initial_zoom]" value="<?php if(!empty($initial_zoom)) esc_attr_e($initial_zoom, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Specify the initial page zoom in percents when the document is opened.
                        </p>
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
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-hide_toolbar" name="save-as-pdf-pdfcrowd[hide_toolbar]" value="1" <?php checked( $hide_toolbar, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Specify whether to hide the viewer application's tool bars when the document is active.
                        </p>
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
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-hide_menubar" name="save-as-pdf-pdfcrowd[hide_menubar]" value="1" <?php checked( $hide_menubar, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Specify whether to hide the viewer application's menu bar when the document is active.
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-hide_window_ui">
                        Hide Window Ui
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-hide_window_ui" name="save-as-pdf-pdfcrowd[hide_window_ui]" value="1" <?php checked( $hide_window_ui, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Specify whether to hide user interface elements in the document's window (such as scroll bars and navigation controls), leaving only the document's contents displayed.
                        </p>
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
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-fit_window" name="save-as-pdf-pdfcrowd[fit_window]" value="1" <?php checked( $fit_window, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Specify whether to resize the document's window to fit the size of the first displayed page.
                        </p>
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
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-center_window" name="save-as-pdf-pdfcrowd[center_window]" value="1" <?php checked( $center_window, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Specify whether to position the document's window in the center of the screen.
                        </p>
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
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-display_title" name="save-as-pdf-pdfcrowd[display_title]" value="1" <?php checked( $display_title, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Specify whether the window's title bar should display the document title. If false , the title bar should instead display the name of the PDF file containing the document.
                        </p>
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
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-right_to_left" name="save-as-pdf-pdfcrowd[right_to_left]" value="1" <?php checked( $right_to_left, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Set the predominant reading order for text to right-to-left. This option has no direct effect on the document's contents or page numbering but can be used to determine the relative positioning of pages when displayed side by side or printed n-up
                        </p>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div id="save-as-pdf-pdfcrowd-miscellaneous" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">

    <h2>Miscellaneous</h2>


    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-debug_log">
                        Debug Log
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-debug_log" name="save-as-pdf-pdfcrowd[debug_log]" value="1" <?php checked( $debug_log, 1 ); ?> />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Turn on the debug logging. Details about the conversion are stored in the debug log. The URL of the log can be obtained from the <a href='https://pdfcrowd.com/doc/api/html-to-pdf/php/#get_debug_log_url'>getDebugLogUrl</a> method or available in <a href='https://pdfcrowd.com/user/account/log/conversion/'>conversion statistics</a>.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-tag" name="save-as-pdf-pdfcrowd[tag]" value="<?php if(!empty($tag)) esc_attr_e($tag, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            Tag the conversion with a custom value. The tag is used in <a href='https://pdfcrowd.com/user/account/log/conversion/'>conversion statistics</a>. A value longer than 32 characters is cut off.
                            
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-http_proxy">
                        Http Proxy
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-http_proxy" name="save-as-pdf-pdfcrowd[http_proxy]" value="<?php if(!empty($http_proxy)) esc_attr_e($http_proxy, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            A proxy server used by Pdfcrowd conversion process for accessing the source URLs with HTTP scheme. It can help to circumvent regional restrictions or provide limited access to your intranet.
                            The value must have format DOMAIN_OR_IP_ADDRESS:PORT.
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-https_proxy">
                        Https Proxy
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-https_proxy" name="save-as-pdf-pdfcrowd[https_proxy]" value="<?php if(!empty($https_proxy)) esc_attr_e($https_proxy, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            A proxy server used by Pdfcrowd conversion process for accessing the source URLs with HTTPS scheme. It can help to circumvent regional restrictions or provide limited access to your intranet.
                            The value must have format DOMAIN_OR_IP_ADDRESS:PORT.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-client_certificate" name="save-as-pdf-pdfcrowd[client_certificate]" value="<?php if(!empty($client_certificate)) esc_attr_e($client_certificate, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            A client certificate to authenticate Pdfcrowd converter on your web server. The certificate is used for two-way SSL/TLS authentication and adds extra security.
                            The file must exist and not be empty.
                        </p>
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-client_certificate_password" name="save-as-pdf-pdfcrowd[client_certificate_password]" value="<?php if(!empty($client_certificate_password)) esc_attr_e($client_certificate_password, $this->plugin_name);?>" placeholder="" />
                    <div class='save-as-pdf-pdfcrowd-m-description'>
                        <p class='description'>
                            A password for PKCS12 file with a client certificate if it's needed.
                            
                        </p>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
