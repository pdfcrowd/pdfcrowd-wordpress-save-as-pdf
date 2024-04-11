=== Save as PDF Plugin by Pdfcrowd ===
Contributors: Pdfcrowd
Tags: pdf conversion, web to pdf, content export, pdf widget, printable content
Requires PHP: 5.1
Requires at least: 4.0
Tested up to: 6.5
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Enable visitors to download your webpages as PDF with just one click.

== Description ==


The "Save as PDF" plugin adds a convenient button to your WordPress website, allowing visitors to save the content of the webpage as a PDF file with just a click. This plugin is perfect for users who wish to read your content offline or share it easily with others. Whether it's articles, posts, or product pages, "Save as PDF" ensures your website's content is accessible in a widely used format.

=== Features ==

* **Easy to Use:** A simple, intuitive button on your webpage allows users to save content as a PDF.
* **Customizable Button:** Customize the appearance and placement of the 'Save as PDF' button to match your website's design.
* **High-Quality PDFs:** Generates high-quality PDF documents that maintain the original layout and styling of your webpages.
* **Shortcode Support:** Easily add the 'Save as PDF' button anywhere on your site with a simple shortcode.



== Usage ==

Once activated, the "Save as PDF" button will automatically appear on all eligible content according to your settings. Users can click this button to  save the current page as a PDF file.

To manually add the "Save as PDF" button to specific pages or posts, use the following shortcode:

**[save_as_pdf_pdfcrowd]**

For additional methods of adding the button to your pages, please refer to the [Getting Started Guide](https://pdfcrowd.com/save-as-pdf-wordpress-plugin/#how-to-use).

== Customization ==

The plugin offers various customization options accessible through the WordPress admin panel. You can change the PDF generation settings and button appearance. For more detailed customization, please refer to the plugin [option reference](https://pdfcrowd.com/save-as-pdf-wordpress-plugin/ref/).

== Licensing ==

The plugin operates in demo mode by default. While fully functional, it adds a watermark and Pdfcrowd branding over the content.

To remove the demo watermark and Pdfcrowd branding, you can purchase an [API license](https://pdfcrowd.com/pricing/api/?api=v2&ref=wordpress). Activate the license by entering your Pdfcrowd username and API key in the plugin settings under the License tab.

A Pdfcrowd API license is versatile, allowing use across multiple WordPress websites for our [plugins](https://pdfcrowd.com/save-as-pdf-image-wordpress-plugin/). Additionally, the API license grants direct access to the [Pdfcrowd API](https://pdfcrowd.com/api/) for broader range of applications.


== Basic Troubleshooting ==

If the default plugin output does not meet your requirements, consider adjusting the following settings individually. You may need to activate the "Expert Settings" option to access some of these features.

* **Mode > Conversion Mode:** Try switching it to either "Upload" or "Content".
* **Print Resolution > Viewport Width:** Experiment with different widths to see which yields the best result.
* **Print Resolution > Viewport Height:** Increase this value, for example, to 50000, to see if it improves the output.
* **Print Resolution > Smart Scaling Mode:** Different scaling modes can significantly alter the PDF's page layout.
* **Print Resolution > Rendering Mode:** This setting also impacts the layout of the PDF page.
== Support ==

Please [contact us](https://pdfcrowd.com/contact/) or write to support@pdfcrowd.com if you need any help. We will be happy to assist you with configuring the plugin to ensure its output meets your needs.


Plugin links:

* [Guide](https://pdfcrowd.com/save-as-pdf-wordpress-plugin/)
* [Option Reference](https://pdfcrowd.com/save-as-pdf-wordpress-plugin/ref/)
* [FAQ](https://pdfcrowd.com/faq/wordpress/)

== About us ==

The plugin is provided by [Pdfcrowd](https://pdfcrowd.com/), established in 2009 as a pioneer in the field of online conversion services. Over the years, we have served hundreds of thousands of users worldwide, constantly evolving our technology to meet the needs of our customers.


== Installation ==

1. **Upload Plugin:** Download the "Save as PDF" plugin ZIP file. In your WordPress dashboard, navigate to **`'Plugins > Add New > Upload Plugin'`**. Choose the ZIP file you downloaded and click **`'Install Now'`**.
2. **Activate Plugin:** After the installation is complete, click Activate Plugin to start using "Save as PDF" on your site.
3. **Configure Settings:** Go to the "Save as PDF" settings page to customize the button's appearance and functionality according to your preference.



== Frequently Asked Questions ==


= How can I activate the license? =

1. Purchase an [API license plan](https://pdfcrowd.com/pricing/api/?api=v2&ref=wordpress) that matches your usage level.
2. Activate the license by entering your Pdfcrowd username and API key in the "License" tab of the plugin settings.

= How does the plugin work? =

The plugin operates by leveraging the Pdfcrowd [HTML to PDF API](https://pdfcrowd.com/api/html-to-pdf-api/), a service that runs entirely in the cloud. This means that when you use the plugin to convert a web page into a PDF, the conversion process is handled on Pdfcrowd's servers, not on your server or device. This approach has several benefits:

* **Performance:** Offloading the conversion process to the cloud means that it doesn't consume your server's resources, ensuring your website's performance remains unaffected.
* **Scalability:** Cloud-based conversion can easily handle spikes in demand without any degradation in service, making it ideal for websites of any size.
* **Reliability:** Pdfcrowd's servers are optimized for high availability and reliability, ensuring your conversion needs are met with consistent quality.


In essence, the plugin sends a request to the Pdfcrowd API with either the URL or the HTML content of the page you wish to convert. The API then processes this request, converts the page into a PDF, and returns the PDF file. This streamlined, cloud-based approach makes adding PDF functionality to your WordPress site both efficient and effective.

= Where can I find more information about the plugin? =

* [Guide](https://pdfcrowd.com/save-as-pdf-wordpress-plugin/): Provides basic information about the plugin.
* [Option Reference](https://pdfcrowd.com/save-as-pdf-wordpress-plugin/ref/): Offers a detailed reference for plugin options, including examples.
* [FAQ](https://pdfcrowd.com/faq/wordpress/) - An extensive plugin FAQ is available on our website.
* [Contact Us](https://pdfcrowd.com/contact/) - If you need any assistance, we're here to help!




== Changelog ==

= 3.2.3 =
* Fix an issue when the error in a plugin option is displayed.
* Updated the readme file.

= 3.2.2 =
* Fix an issue with entering invalid HTML into the textarea plugin options.

= 3.2.1 =
* Fix XSS in the button preview in the plugin settings.

= 3.2.0 =
* Fix XSS in the Custom HTML options of the plugin settings.
* Fix warning in the debug log in case of error.

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
* Fix XSS on the Appearance section of the plugin settings.

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
