=== Save as PDF plugin by Pdfcrowd ===
Contributors: Pdfcrowd
Tags: pdf, print, save, page, save to pdf, save as pdf, convert to pdf, pdf print, pdf button, pdf widget, pdf plugin, pdfcrowd, html, page as pdf
Requires PHP: 5.1
Requires at least: 4.0
Tested up to: 6.4
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Let your visitors save pages as PDF in a single click. Reliable, fast and highly customizable.

== Description ==

The Save as PDF plugin is easy to use. Just install the plugin and activate it. The plugin puts a "Save as PDF" button in your web pages. The button enables to save the current web page (the default), or only a part of the page or an arbitrary page in one click.

The plugin internally uses the Pdfcrowd API web service. The Pdfcrowd API is a professional solution for converting web pages and HTML documents to PDF and various image formats.


The plugin is highly customizable, you can:
* customize the button style, text and icon
* choose between the "screen" and "print" layout (CSS @media)
* convert password-protected pages
* convert pages with data in forms
* create interactive PDF forms
* customize page size and margins, page orientation, header and footer, run custom JavaScript, add a watermark, and many more ...

You can customize the plugin on the Settings page.


**Shortcodes**

The **[save_as_pdf_pdfcrowd]** shortcode places a button in the web page. Clicking the button downloads the page as PDF.

The enclosing **[block_save_as_pdf_pdfcrowd]** shortcode downloads just the enclosed part of the page as PDF. To style the part, include CSS rules inside the block shortcode.

The shortcodes can customize the button style and conversion output by overriding the settings specified on the plugin Settings page.

For example, to change the page size to Letter and create a red button use:

`[save_as_pdf_pdfcrowd page_size='letter' button_background_color='red']`


**Create Button in PHP**

The conversion button can be created directly in your PHP code with the **create_save_as_pdf_pdfcrowd_button**($options = array()) function.

`<?php

create_save_as_pdf_pdfcrowd_button(array(
    'page_size' => 'letter',
    'button_text' => 'Save as Letter'));

?>`


**Button CSS Customization**

The button style can be customized also by setting CSS properties on the save-as-pdf-pdfcrowd-button-wrap or save-as-pdf-pdfcrowd-button classes.

`.save-as-pdf-pdfcrowd-button {
    font-family: Georgia;
}`


**Output**

The output PDF can be either downloaded or opened directly in the browser. This can be configured with the "Button Click Action" option.

The output file name is generated automatically or can be specified in custom options, e.g.

`[save_as_pdf_pdfcrowd output_name='my-page.pdf' button_background_color='red']`


**Support**

Please contact us on support@pdfcrowd.com us if you need any help.
We recommend that you check our [FAQ](https://pdfcrowd.com/faq/). It contains answers to many common questions.

Pdfcrowd [API Playground](https://pdfcrowd.com/playground/) may help you to configure the plugin, create a [shortcode](https://pdfcrowd.com/playground/html-to-pdf/?lang=wf-wpscode) or a [function call](https://pdfcrowd.com/playground/html-to-pdf/?lang=wf-wpfunc).

== Installation ==

1. Go to your WordPress backend, search for "Save as PDF by Pdfcrowd" and then click "Install". Or you can download the save-as-pdf-pdfcrowd.zip file and unzip it.
2. If you downloaded the zip, upload the save-as-pdf-pdfcrowd folder into wp-content/plugins folder.
3. Activate the plugin.

== Licensing ==

The plugin runs in the demo by default. It is fully functional but adds a watermark and Pdfcrowd branding over the content.

You can purchase a Pdfcrowd [API license](https://pdfcrowd.com/user/account/api2-license/?ref=wordpress) to remove the demo watermark and Pdfcrowd branding. To activate the license, enter your Pdfcrowd username and your API key in the plugin settings on the License tab.

A single Pdfcrowd API license can be used for both our plugins on multiple WordPress websites. Moreover, the API license enables you to use the [Pdfcrowd conversion API](https://pdfcrowd.com/api/) directly.

== Frequently Asked Questions ==

= Can I convert password-protected pages? =

Yes, set "Conversion Mode" to "upload", "content" or "development" on the Settings|Behavior page or enable HTTP Basic Authentication for your site or choose other methods for accessing your pages (Client Certificate, Custom Cookies, Custom HTTP Headers).

= Can I convert my localhost or dynamic pages? =

Yes, set "Conversion Mode" to "upload", "content" or "development" on the Settings|Behavior page.

= Can I convert data entered into a form? =

Yes, set "Conversion Mode" to "content" on the Settings|Behavior page.

= Are my data safe? =

Yes, Pdfcrowd is GDPR compliant. All data for the conversion are kept only for the time necessary to efficiently process the conversion and then permanently deleted.

= My page is not printed correctly. What should I do? =

The first thing to try is to play with the following configuration settings: "Conversion Mode", "Viewport Width", "Wiewport Height", "Rendering Mode" and "Smart Scaling Mode". If it does not help, contact us at support@pdfcrowd.com.

= How to exclude some parts of a web page? =

Add "pdfcrowd-remove" or "pdfcrowd-hide" CSS class to the HTML elements you want to remove or hide. Another option is to remove them using custom Javascript code set in the "Custom Javascript" option.

= How to print HTML form with user data? =

Use Conversion Mode - Content. If the data is still missing, it is probably reset by some caching mechanism on your site. Try disabling the cache for the page or check Disable JavaScript option on the plugin Expert Settings - General Options section.

= Can you help me? =

Yes, Pdfcrowd support (support@pdfcrowd.com) is more than happy to help you with any issue you may have.

== Screenshots ==

1. Default button appearance.
2. Sample of settings.

== Changelog ==

= 3.1.0 =
* New "Max Loading Time" expert option to set the load time for the page and its assets. 

= 3.0.1 =
* Minor update in the plugin documentation.

= 3.0.0 =
* Revamped the plugin settings page, now featuring Basic and Expert modes.
* Added controls to filter options and display only the changed ones.
* Added notification of unsaved changes.

= 2.17.0 =
* New "Error Page" option to define custom error page.

= 2.16.1 =
* Fix XSS on the Appearance section of plugin settings.

= 2.16.0 =
* New "Custom CSS" option to apply custom CSS to the input HTML document.

= 2.15.1 =
* Fix PDF callback function can access email_to field.
* Fix deprecation warnings for PHP 8.2.7.

= 2.15.0 =
* New "Remove Blank Pages" option to choose which empty pages should be removed from the output PDF.

= 2.14.1 =
* Retry conversion on error 503.
* Deprecated string interpolation in PHP code was replaced.

= 2.14.0 =
* Removed deprecated options "Auto Use Cookies" and "Use HTTP".

= 2.13.0 =
* New "The whole HTML contents fits the print area of a single page with respect to the page height/width ratio." mode for "Smart Scaling Mode" option.

= 2.12.0 =
* New "readability-v4" mode for "Readability Enhancements" option.
* Minor text update in plugin settings.

= 2.11.0 =
* Update: Images can be used as a watermark and a background in Save as PDF plugin.
* New: added "email_to" record to $data['options'] argument of PDF Created Callback
* Minor Update: text in plugin settings.

= 2.10.0 =
* New "readability-v2" and "readability-v3" modes for "Readability Enhancements" option.
* Minor text update in plugin settings.

= 2.9.4 =
* Minor update of documentation links.

= 2.9.3 =
* Minor update of the text of the error message.

= 2.9.2 =
* Minor text update in plugin settings.

= 2.9.1 =
* Fix: Auto Use Cookies option is applied to Conversion Mode Content.
* Fix: Use Mobile User Agent option is applied to Conversion Mode Upload.

= 2.9.0 =
* New "Enable PDF Forms" option to convert HTML forms to fillable PDF forms.
* Minor update in error messages.

= 2.8.1 =
* Improved: Automatic conversion retry on HTTP status codes 429 and 430.

= 2.8.0 =
* New "Auto Detect Element To Convert" option to detect the main contents automatically.
* New "Readability Enhancements" option to emphasize the main contents.
* New "pdfcrowd-source-title" CSS class available for header and footer HTML.
* Minor documentation updates.

= 2.7.1 =
* Minor update - error messages added for status code 432 and 483.

= 2.7.0 =
* New "Use Mobile User Agent" option to use a mobile user agent for the conversion.

= 2.6.2 =
* Minor fix - the hyperlinks to the Pdfcrowd API documentation have been updated.

= 2.6.1 =
* Minor update in links to the documentation.

= 2.6.0 =
* New "URL Lookup" option. It allows to choose how to retrieve URLs for the Conversion Mode-URL.
* New "Diagnostics" option. It allows a developer to print some useful data.
* Minor fix and text updates in plugin settings.

= 2.5.1 =
* Fix of the plugin options saving.

= 2.5.0 =
* New "Indicator Timeout" option to set the maximum time the conversion indicator is displayed.
* Minor fix in the indicator code.

= 2.4.1 =
* "HTTP Auth User Name", "HTTP Auth Password", "Cookies", "Fail On Main URL Error" and "Fail On Any URL Error" options are applied for "Conversion Mode - Upload" too.
* Fixes multiple line warning.
* Minor code cleanup.

= 2.4.0 =
* New "Extract Meta Tags" option to use input HTML meta tag in the output PDF.
* Set the default value of "Conversion Mode" to "URL".
* "Hide parameters" button added in plugin admin settings.

= 2.3.0 =
* New "Email From" option.
* The default value of "Conversion Mode" is "URL".
* The "Conversion Mode" and "Automatically use cookies" options have been moved to a new "Mode" settings category.

= 2.2.1 =
* Predefined header and footer are available in plugin settings.
* Minor documentation and error message changes.

= 2.2.0 =
* New "Email Cc" option.
* New "Email Bcc" option.
* New "Button Id" option.
* New "Hide Button in HTML" option.
* Fixes in email button disposition.

= 2.1.1 =
* New configuration wizard.

= 2.1.0 =
* New "User-Created Drawings" option for the "Content" conversion mode. It helps to capture user-created canvas drawings.
* New "Output Name" option - specifies the output filename directly in plugin settings. It can still be rewritten with a shortcode or PHP function.
* Fixed UTF-8 output filename for MS Edge.
* Fixed error in "Send PDF via e-mail"

= 2.0.0 =
* New "Converter Version" option - specifies the version of the internal Pdfcrowd converter. Details about Pdfcrowd [versioning](https://pdfcrowd.com/api/versioning/).
* New "Load Iframes" option - specifies how iframes are handled.
* New "Locale" option - specifies the locale for conversions.
* New value "Send PDF via e-mail" added to the "Button Click Action" options. It sends the output file via customized e-mail using these settings:
    * Email Recipient
    * Email Subject
    * Email Message
    * Email Dialogs
* New "No Header Footer Horizontal Margins" - disables horizontal margins for header and footer.
* New "Css Page Rule Mode" - specifies behavior in presence of CSS @page rules.
* New options category "Expert" - options for fine-tuning of PDF output:
    * "Layout Dpi" - sets the internal DPI used for positioning of PDF contents.
    * "Contents Matrix" - sets a 2D transformation matrix that is applied to the main contents on each page.
    * "Header Matrix" - sets a 2D transformation matrix that is applied to the header contents.
    * "Footer Matrix" - sets a 2D transformation matrix that is applied to the footer contents.
    * "Disable Page Height Optimization" - disables automatic height adjustment for best fit.
    * "Header Footer Css Annotation" - adds special CSS classes into header/footer for page number detection.
    * "Main Document Css Annotation" - adds special CSS classes into header/footer for page number detection.
* New value "inline" for the button position - it is useful for placing the button inside a text.
* More detailed debug log information.
* Improved the plugin localization.

= 1.11.0 =
* New "Button Text Translation" option - allows to use translation for the button text.

= 1.10.0 =
* New "Change on Mouse Over" option - highlights the button when the mouse pointer is hovering over it.
* Fixed issue with external link to plugin settings section.

= 1.9.1 =
* Fixed issue with missing assets in the plugin setup.

= 1.9.0 =
* New "Conversion in Progress Indicator" option - a customizable visual indicator is shown when the conversion is in progress.
* Fixed issue with the button appearence in MS Edge.

= 1.8.1 =
* Improved the converted page URL detection.

= 1.8.0 =
* Improved handling of lazy loaded images.
* Fixed the issue with the converted page URL when some third party WP plugins are used.

= 1.7.0 =
* New value "open PDF in a new browser tab" for the "Button Click Action" option.
* Minor change of descriptions for values in the "Button Click Action" option.

= 1.6.0 =
* Added support for parameters in the page URL.
* Added support for missing protocol in links.
* Added function pdfcrowd_save_as_pdf($options). It's useful for acccessing Pdfcrowd API directly.

= 1.5.0 =
* Added HTML template rendering with custom JSON, XML, YAML and CSV data.

= 1.4.1 =
* Button to reset settings to default values was added to plugin settings page.
* Fix demo license usage.

= 1.4.0 =
* Added a convertion mode "content" to convert the current HTML contents shown in the browser.
* Minified JavaScript files for faster page load.

= 1.3.0 =
* Added an option to convert local file by the shortcode or the function call.
* Fix of multiline shortcode parameters.

= 1.2.2 =
* Refactor description in plugin settings.
* Added a flag describing the button creation mode.

= 1.2.1 =
* Fix of conversion auto mode.

= 1.2.0 =
* New value "auto" for the Conversion Mode.
* New option "Auto Use Cookies" for an automatic use of the current cookies for the conversion.
* Avoid double-click on the conversion button.
* Better error message for error code 452.

= 1.1.0 =
* New option "Custom HTML" which allows to specify custom HTML for the conversion button.
* New option "PDF Created Callback" which allows to manipulate with the output file.
* New option "Conversion Mode". The "Run in DEV Mode" option was removed, you can use the "Conversion Mode" values "url" or "development" instead.
* New options: Page Watermark Url, Multipage Watermark Url, Page Background Url, Multipage Background Url.
* Improved conversion of password-protected pages.
* Admin settings reordered.

= 1.0.1 =
* Fixed issue with missing input when create_save_as_pdf_pdfcrowd_button is used.

= 1.0.0 =
* Initial version
