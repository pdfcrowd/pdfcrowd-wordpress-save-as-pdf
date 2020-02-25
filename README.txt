=== Save as PDF plugin by Pdfcrowd ===
Contributors: Pdfcrowd
Tags: pdf, print, save, page, save to pdf, save as pdf, convert to pdf, pdf print, pdf button, pdf widget, pdf plugin, pdfcrowd, html, page as pdf
Requires PHP: 5.1
Requires at least: 4.0
Tested up to: 5.3.2
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Let your visitors save pages as PDF in a single click. Reliable, fast and highly customizable.

== Description ==

The Save as PDF plugin is easy to use. Just install the plugin and activate it. The plugin puts a "Save to Pdf" button in your web pages. The button enables to save the current web page (the default), or only a part of the page or an arbitrary page in one click.

The plugin internally uses the Pdfcrowd API web service. The Pdfcrowd API is a professional solution for converting web pages and HTML documents to PDF and various image formats.


The plugin is highly customizable, you can:
* customize the button style, text and icon
* choose between the "screen" and "print" layout (CSS @media)
* convert password-protected pages
* customize page size and margins, page orientation, header and footer, run custom JavaScript, add a watermark, and many more ...

You can customize the plugin on the Settings page.


**Shortcodes**

The **[save_as_pdf_pdfcrowd]** shortcode places a button in the web page. Clicking the button downloads the page as PDF.

The enclosing **[block_save_as_pdf_pdfcrowd]** shortcode downloads the enclosed part of the page as PDF.

The shortcodes can customize the button style and the conversion output by overriding the settings specified on the plugin Settings page.

For example, to change the page size to Letter and create a red button use:

`[save_as_pdf_pdfcrowd page_size='letter' button_background_color='red']`


**Create Button in PHP**

The conversion button can be created directly in your PHP code with the **create_save_as_pdf_pdfcrowd_button**($options = array()) function.

`<?php create_save_as_pdf_pdfcrowd_button(array('page_size' => 'letter', 'button_hidden' => 0)); ?>`


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

Pdfcrowd [API playground](https://pdfcrowd.com/playground/) may help you to create the [shortcode](https://pdfcrowd.com/playground/html-to-pdf/?lang=wf-wpscode) or the [function call](https://pdfcrowd.com/playground/html-to-pdf/?lang=wf-wpfunc).

== Installation ==

1. Go to your WordPress backend, search for "Save as PDF by Pdfcrowd" and then click "Install". Or you can download the save-as-pdf-pdfcrowd.zip file and unzip it.
2. If you downloaded the zip, upload the save-as-pdf-pdfcrowd folder into wp-content/plugins folder.
3. Activate the plugin.

== Pdfcrowd License ==

The plugin does not require any registrations. It is fully functional, the free version just adds a watermark over the content.

A valid Pdfcrowd [API license](https://pdfcrowd.com/user/account/api2-license/?ref=wordpress) removes the demo watermark. To enable the API license on the plugin, just enter your Pdfcrowd username and the API key in the plugin settings in the Pdfcrowd API Credentials tab.

A single Pdfcrowd [API license](https://pdfcrowd.com/user/account/api2-license/?ref=wordpress) can be used for both our plugins on multiple WordPress websites. Moreover, the API license enables you to use Pdfcrowd [conversion API](https://pdfcrowd.com/doc/api/) directly.

== Frequently Asked Questions ==

= Can I convert password-protected pages? =

Yes, set "Conversion Mode" to "upload" or "development" on the Settings page or enable HTTP Basic Authentication for your site or choose other methods for accessing your pages (Client Certificate, Custom Cookies, Custom HTTP Headers).

= Can I convert my localhost pages? =

Yes, set "Conversion Mode" to "upload" or "development" on the Settings page.

= Are my data safe? =

Yes, Pdfcrowd is GDPR compliant. All data for the conversion are kept only for the time necessary to efficiently process the conversion and then permanently deleted.

More answers can be found on [Pdfcrowd FAQ](https://pdfcrowd.com/faq/) page.

== Screenshots ==

1. Default button appearance.
2. Sample of settings.

== Changelog ==

= 1.4.0 =
* Added a convertion mode "content" to convert the current HTML contents shown in the browser.
* Minified JavaScript files for faster page load.

= 1.3.0 =
* Added an option to convert local file by the shortcode or the function call.
* Fix of multiline shortcode parameters.

= 1.2.2 =
* Refactor description in the plugin settings.
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
