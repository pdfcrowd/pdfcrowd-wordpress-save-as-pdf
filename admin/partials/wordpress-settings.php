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

<div id="save-as-pdf-pdfcrowd-wordpress-settings" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">
    <h2>WordPress Settings</h2>
    <button class='save-as-pdf-pdfcrowd-expert button-secondary'>Show Parameters</button>

    <table class="form-table">
        <tbody>
            <tr>
                <th>
                    Show Button on
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-button-on-home" name="save-as-pdf-pdfcrowd[button_on_home]" value="1" <?php checked( $button_on_home, 1 ); ?> /><label for="save-as-pdf-pdfcrowd-button-on-home">Home page<br/></label>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-button-on-front" name="save-as-pdf-pdfcrowd[button_on_front]" value="1" <?php checked( $button_on_front, 1 ); ?> /><label for="save-as-pdf-pdfcrowd-button-on-front">Front page<br/></label>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-button-on-pages" name="save-as-pdf-pdfcrowd[button_on_pages]" value="1" <?php checked( $button_on_pages, 1 ); ?> /><label for="save-as-pdf-pdfcrowd-button-on-pages">Other pages<br/></label>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-button-on-posts" name="save-as-pdf-pdfcrowd[button_on_posts]" value="1" <?php checked( $button_on_posts, 1 ); ?> /><label for="save-as-pdf-pdfcrowd-button-on-posts">Posts<br/></label>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-button-on-categories" name="save-as-pdf-pdfcrowd[button_on_categories]" value="1" <?php checked( $button_on_categories, 1 ); ?> /><label for="save-as-pdf-pdfcrowd-button-on-categories">Category pages<br/></label>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-button-on-taxonomies" name="save-as-pdf-pdfcrowd[button_on_taxonomies]" value="1" <?php checked( $button_on_taxonomies, 1 ); ?> /><label for="save-as-pdf-pdfcrowd-button-on-taxonomies">Taxonomy pages<br/></label>
                </td>
            </tr>
            <tr>
                <th>
                    Run in DEV MODE
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-dev-mode" name="save-as-pdf-pdfcrowd[dev_mode]" value="1" <?php checked( $dev_mode, 1 ); ?> />
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>dev_mode</strong>"<br/>Possible values: 0, 1
                        <br/>
                        Hint: Use DEV MODE if you run on localhost or your pages are not accessible.
                    </p>
                </td>
            </tr>
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
                            save PDF
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-button-disp-inline">
                            <input type="radio" id="save-as-pdf-pdfcrowd-button-disp-inline" name="save-as-pdf-pdfcrowd[button_disposition]" value="inline" <?php checked( $button_disposition, "inline" ); ?> />
                            open PDF inside the browser
                        </label><br>
                    </fieldset>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_disposition</strong>"<br/>Possible values: "attachment", "inline"
                    </p>
                </td>
            </tr>
            <tr>
                <th>
                    Hide Button in Output PDF
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-button-hidden" name="save-as-pdf-pdfcrowd[button_hidden]" value="1" <?php checked( $button_hidden, 1 ); ?> />
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_hidden</strong>"<br/>Possible values: 0, 1
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    Button Image
                </th>
                <td id='save-as-pdf-pdfcrowd-images'>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span>Button Image</span>
                        </legend>
                        <label for="save-as-pdf-pdfcrowd-images/pdf1.svg">
                            <input type="radio" id="save-as-pdf-pdfcrowd-images/pdf1.svg" name="save-as-pdf-pdfcrowd[button_image]" value="images/pdf1.svg" <?php checked( $button_image, "images/pdf1.svg" ); ?> />
                        <img src="https://cdn.pdfcrowd.com/images/pdf1.svg"/>
                        </label>&nbsp;&nbsp;&nbsp;
                        <label for="save-as-pdf-pdfcrowd-images/pdf2.svg">
                            <input type="radio" id="save-as-pdf-pdfcrowd-images/pdf2.svg" name="save-as-pdf-pdfcrowd[button_image]" value="images/pdf2.svg" <?php checked( $button_image, "images/pdf2.svg" ); ?> />
                        <img src="https://cdn.pdfcrowd.com/images/pdf2.svg"/>
                        </label>&nbsp;&nbsp;&nbsp;
                        <label for="save-as-pdf-pdfcrowd-images/pdf3.svg">
                            <input type="radio" id="save-as-pdf-pdfcrowd-images/pdf3.svg" name="save-as-pdf-pdfcrowd[button_image]" value="images/pdf3.svg" <?php checked( $button_image, "images/pdf3.svg" ); ?> />
                        <img src="https://cdn.pdfcrowd.com/images/pdf3.svg"/>
                        </label>&nbsp;&nbsp;&nbsp;
                        <label for="save-as-pdf-pdfcrowd-images/pdf4.svg">
                            <input type="radio" id="save-as-pdf-pdfcrowd-images/pdf4.svg" name="save-as-pdf-pdfcrowd[button_image]" value="images/pdf4.svg" <?php checked( $button_image, "images/pdf4.svg" ); ?> />
                        <img src="https://cdn.pdfcrowd.com/images/pdf4.svg"/>
                        </label>&nbsp;&nbsp;&nbsp;
                        <label for="save-as-pdf-pdfcrowd-images/pdfcrowd.png">
                            <input type="radio" id="save-as-pdf-pdfcrowd-images/pdfcrowd.png" name="save-as-pdf-pdfcrowd[button_image]" value="images/pdfcrowd.png" <?php checked( $button_image, "images/pdfcrowd.png" ); ?> />
                        <img src="https://cdn.pdfcrowd.com/images/pdfcrowd.png"/>
                        </label>&nbsp;&nbsp;&nbsp;
                        <label for="save-as-pdf-pdfcrowd-custom-image">
                            <input type="radio" id="save-as-pdf-pdfcrowd-custom-image" name="save-as-pdf-pdfcrowd[button_image]" value="custom_image" <?php checked( $button_image, "custom_image" ); ?> />
                            Custom Image URL
                            <input id="save-as-pdf-pdfcrowd-custom-image-url" type="text" class="clear regular-text" name="save-as-pdf-pdfcrowd[button_image_url]" value="<?php if(!empty($button_image_url)) esc_attr_e($button_image_url, $this->plugin_name);?>">
                            <div class='save-as-pdf-pdfcrowd-m-description' style='padding-left: 2em'>
                                <p class='description'>
                                    Examples:
                                    <ul>
                                        <li>
                                            https://www.adobe.com/content/dam/acom/en/legal/images/badges/PDF_24.png
                                        </li>
                                        <li>
                                            /wp/wp-content/uploads/save_as_pdf.png
                                        </li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        </label>
                    </fieldset>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_image_url</strong>"
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-button-image-width">
                        Button Image Width
                    </label>
                </th>
                <td>
                    <input type="number" class="small-text" min="6" id="save-as-pdf-pdfcrowd-button-image-width" name="save-as-pdf-pdfcrowd[button_image_width]" value="<?php echo $button_image_width ?>" />px
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_image_width</strong>"<br/>Possible values: any numeric value
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-button-image-height">
                        Button Image Height
                    </label>
                </th>
                <td>
                    <input type="number" class="small-text" min="6" id="save-as-pdf-pdfcrowd-button-image-height" name="save-as-pdf-pdfcrowd[button_image_height]" value="<?php echo $button_image_height ?>" />px
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_image_height</strong>"<br/>Possible values: any numeric value
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-button-text">
                        Button Text
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-button-text" name="save-as-pdf-pdfcrowd[button_text]" value="<?php if(!empty($button_text)) esc_attr_e($button_text, $this->plugin_name);?>" placeholder="<?php esc_attr_e('Your text', $this->plugin_name);?>" />
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_text</strong>"
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    Button Display Format
                </th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span>Button Display Format</span>
                        </legend>
                        <label for="save-as-pdf-pdfcrowd-image-text">
                            <input type="radio" id="save-as-pdf-pdfcrowd-image-text" name="save-as-pdf-pdfcrowd[button_format]" value="image-text" <?php checked( $button_format, "image-text" ); ?> />
                            image-text
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-text-image">
                            <input type="radio" id="save-as-pdf-pdfcrowd-text-image" name="save-as-pdf-pdfcrowd[button_format]" value="text-image" <?php checked( $button_format, "text-image" ); ?> />
                            text-image
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-image">
                            <input type="radio" id="save-as-pdf-pdfcrowd-image" name="save-as-pdf-pdfcrowd[button_format]" value="image" <?php checked( $button_format, "image" ); ?> />
                            image
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-text">
                            <input type="radio" id="save-as-pdf-pdfcrowd-text" name="save-as-pdf-pdfcrowd[button_format]" value="text" <?php checked( $button_format, "text" ); ?> />
                            text
                        </label><br>
                    </fieldset>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_format</strong>"<br/>Possible values: "image-text", "text-image", "image", "text"
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    <hr/>
    <h2>Button Positioning</h2>
    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd[button_position]">Destination</label>
                </th>
                <td>
                    <select id="save-as-pdf-pdfcrowd[button_position]" name="save-as-pdf-pdfcrowd[button_position]">
                    <option value="below" <?php selected($button_position, 'below');?>>below content</option>
                    <option value="above" <?php selected($button_position, 'above');?>>above content</option>
                    <option value="left" <?php selected($button_position, 'left');?>>left to content</option>
                    <option value="right" <?php selected($button_position, 'right');?>>right to content</option>
                    </select>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_position</strong>"<br/>Possible values: "below", "above", "left", "right"
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd[button_alignment]">Alignment</label>
                </th>
                <td>
                    <select id="save-as-pdf-pdfcrowd[button_alignment]" name="save-as-pdf-pdfcrowd[button_alignment]">
                    <option value="" <?php selected($button_alignment, '');?>>-- unset --</option>
                    <option value="start" <?php selected($button_alignment, 'start');?>>start</option>
                    <option value="center" <?php selected($button_alignment, 'center');?>>center</option>
                    <option value="left" <?php selected($button_alignment, 'left');?>>left</option>
                    <option value="right" <?php selected($button_alignment, 'right');?>>right</option>
                    <option value="end" <?php selected($button_alignment, 'end');?>>end</option>
                    </select>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_alignment</strong>"<br/>Possible values: "", "start", "center", "left", "right", "end"
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    Margin
                </th>
                <td style="margin-top: 0; margin-bottom: 0;">
                    <table class="save-as-pdf-pdfcrowd-inner-table">
                        <tr>
                            <td>
                                top <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-margin-top" name="save-as-pdf-pdfcrowd[button_margin_top]" value="<?php echo $button_margin_top ?>" />px
                            </td>
                            <td>
                                right <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-margin-right" name="save-as-pdf-pdfcrowd[button_margin_right]" value="<?php echo $button_margin_right ?>" />px
                            </td>
                        </tr>
                        <tr>
                            <td>
                                bottom <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-margin-bottom" name="save-as-pdf-pdfcrowd[button_margin_bottom]" value="<?php echo $button_margin_bottom ?>" />px
                            </td>
                            <td>
                                left <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-margin-left" name="save-as-pdf-pdfcrowd[button_margin_left]" value="<?php echo $button_margin_left ?>" />px
                            </td>
                        </tr>
                    </table>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_margin_left", "button_margin_right", "button_margin_top", "button_margin_bottom</strong>"<br/>Possible values: any numeric value
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    <hr/>
    <h2>Button Styling</h2>
    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    Styling is
                </th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span>Button Styling</span>
                        </legend>
                        <label for="save-as-pdf-pdfcrowd-st-theme">
                            <input type="radio" id="save-as-pdf-pdfcrowd-st-theme" name="save-as-pdf-pdfcrowd[button_styling]" value="theme" <?php checked( $button_styling, "theme" ); ?> />
                            defined by your theme
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-st-custom">
                            <input type="radio" id="save-as-pdf-pdfcrowd-st-custom" name="save-as-pdf-pdfcrowd[button_styling]" value="custom" <?php checked( $button_styling, "custom" ); ?> />
                            custom
                        </label>
                    </fieldset>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_styling</strong>"<br/>Possible values: "theme", "custom"
                        <br/>
                        Hint: The style can be changed by the CSS rule .save-as-pdf-pdfcrowd-button too.<br/>
                        Example: insert the following line into your CSS<br/>
                        .save-as-pdf-pdfcrowd-button { font-style: italic; }
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    <div id='save-as-pdf-pdfcrowd-custom-button'>
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="save-as-pdf-pdfcrowd-button-text-size">
                            Text Size
                        </label>
                    </th>
                    <td>
                        <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-text-size" name="save-as-pdf-pdfcrowd[button_text_size]" value="<?php echo $button_text_size ?>" />px
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>button_text_size</strong>"<br/>Possible values: any numeric value
                        </p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="save-as-pdf-pdfcrowd-button-text-weight">
                            Text Weight
                        </label>
                    </th>
                    <td>
                        <select name="save-as-pdf-pdfcrowd[button_text_weight]">
                            <option value="normal" <?php selected($button_text_weight, 'normal');?>>normal</option>
                            <option value="bold" <?php selected($button_text_weight, 'bold');?>>bold</option>
                            <option value="bolder" <?php selected($button_text_weight, 'bolder');?>>bolder</option>
                            <option value="lighter" <?php selected($button_text_weight, 'lighter');?>>lighter</option>
                            <option value="100" <?php selected($button_text_weight, '100');?>>100</option>
                            <option value="200" <?php selected($button_text_weight, '200');?>>200</option>
                            <option value="300" <?php selected($button_text_weight, '300');?>>300</option>
                            <option value="400" <?php selected($button_text_weight, '400');?>>400</option>
                            <option value="500" <?php selected($button_text_weight, '500');?>>500</option>
                            <option value="600" <?php selected($button_text_weight, '600');?>>600</option>
                            <option value="700" <?php selected($button_text_weight, '700');?>>700</option>
                            <option value="800" <?php selected($button_text_weight, '800');?>>800</option>
                            <option value="900" <?php selected($button_text_weight, '900');?>>900</option>
                        </select>
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>button_text_weight</strong>"<br/>Possible values: any CSS font-weight
                        </p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="save-as-pdf-pdfcrowd-text-color">
                            Text Color
                        </label>
                    </th>
                    <td>
                        <input type="text" class="save-as-pdf-pdfcrowd-color-field" id="save-as-pdf-pdfcrowd-button-text-color" name="save-as-pdf-pdfcrowd[button_text_color]" value="<?php echo $button_text_color;?>" data-default-color="#fff" />
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>button_text_color</strong>"<br/>Possible values: any HTML color code
                        </p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="save-as-pdf-pdfcrowd-background-color">
                            Background Color
                        </label>
                    </th>
                    <td>
                        <input type="text" class="save-as-pdf-pdfcrowd-color-field" id="save-as-pdf-pdfcrowd-button-background-color" name="save-as-pdf-pdfcrowd[button_background_color]" value="<?php if(!empty($button_background_color)) esc_attr_e($button_background_color, $this->plugin_name);?>" data-default-color="#007bff" />
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>button_background_color</strong>"<br/>Possible values: any HTML color code
                        </p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="save-as-pdf-pdfcrowd-border-color">
                            Border Color
                        </label>
                    </th>
                    <td>
                        <input type="text" class="save-as-pdf-pdfcrowd-color-field" id="save-as-pdf-pdfcrowd-button-border-color" name="save-as-pdf-pdfcrowd[button_border_color]" value="<?php if(!empty($button_border_color)) esc_attr_e($button_border_color, $this->plugin_name);?>" data-default-color="#007bff" />
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>button_border_color</strong>"<br/>Possible values: any HTML color code
                        </p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="save-as-pdf-pdfcrowd-border-style">
                            Border Style
                        </label>
                    </th>
                    <td>
                        <select name="save-as-pdf-pdfcrowd[button_border_style]">
                            <option value="dotted" <?php selected($button_border_style, 'dotted');?>>dotted</option>
                            <option value="dashed" <?php selected($button_border_style, 'dashed');?>>dashed</option>
                            <option value="solid" <?php selected($button_border_style, 'solid');?>>solid</option>
                            <option value="double" <?php selected($button_border_style, 'double');?>>double</option>
                            <option value="groove" <?php selected($button_border_style, 'groove');?>>groove</option>
                            <option value="ridge" <?php selected($button_border_style, 'ridge');?>>ridge</option>
                            <option value="inset" <?php selected($button_border_style, 'inset');?>>inset</option>
                            <option value="outset" <?php selected($button_border_style, 'outset');?>>outset</option>
                            <option value="none" <?php selected($button_border_style, 'none');?>>none</option>
                            <option value="hidden" <?php selected($button_border_style, 'hidden');?>>hidden</option>
                        </select>
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>button_border_style</strong>"<br/>Possible values: "dotted", "dashed", "solid", "double", "groove", "ridge", "inset", "outset", "none", "hidden"
                        </p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="save-as-pdf-pdfcrowd-button-border-width">
                            Button Border Width
                        </label>
                    </th>
                    <td>
                        <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-border-width" name="save-as-pdf-pdfcrowd[button_border_width]" value="<?php echo $button_border_width ?>" />px
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>button_border_width</strong>"<br/>Possible values: any numeric value
                        </p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Padding
                    </th>
                    <td style="padding-top: 0; padding-bottom: 0;">
                        <table class="save-as-pdf-pdfcrowd-inner-table">
                            <tr>
                                <td>
                                    top <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-padding-top" name="save-as-pdf-pdfcrowd[button_padding_top]" value="<?php echo $button_padding_top ?>" />px
                                </td>
                                <td>
                                    right <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-padding-right" name="save-as-pdf-pdfcrowd[button_padding_right]" value="<?php echo $button_padding_right ?>" />px
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    bottom <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-padding-bottom" name="save-as-pdf-pdfcrowd[button_padding_bottom]" value="<?php echo $button_padding_bottom ?>" />px
                                </td>
                                <td>
                                    left <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-padding-left" name="save-as-pdf-pdfcrowd[button_padding_left]" value="<?php echo $button_padding_left ?>" />px
                                </td>
                            </tr>
                        </table>
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>button_padding_left", "button_padding_right", "button_padding_top", "button_padding_bottom</strong>"<br/>Possible values: any numeric value
                        </p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="save-as-pdf-pdfcrowd-button-radius">
                            Radius
                        </label>
                    </th>
                    <td>
                        <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-radius" name="save-as-pdf-pdfcrowd[button_radius]" value="<?php echo $button_radius ?>" />px
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>button_radius</strong>"<br/>Possible values: any numeric value
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr/>
        <h3>Button Quick Preview</h3>
        <div id='save-as-pdf-pdfcrowd-button-preview-content'>
        </div>
        <hr style='clear: both'/>
    </div>
</div>
