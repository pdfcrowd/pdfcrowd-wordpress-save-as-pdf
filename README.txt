=== Save as PDF Plugin by PDFCrowd ===
Contributors: PDFCrowd
Tags: pdf, save as pdf, pdf download, wordpress to pdf, html to pdf
Requires PHP: 5.1
Requires at least: 4.0
Tested up to: 7.0
Stable tag: 4.5.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add a Save as PDF button to WordPress posts, pages, and selected content. Visitors can download content as PDF in one click.

== Description ==


The "Save as PDF" plugin is the WordPress-native way to add PDF download buttons to posts, pages, and selected content. Visitors can download a WordPress page or post as PDF in one click, and you can configure button placement and PDFCrowd conversion settings in the WordPress admin area.

The plugin can be tested in demo mode. Production output without the PDFCrowd watermark and branding requires a PDFCrowd license.

=== Features ===

* **WordPress-native PDF download button:** Add a Save as PDF button to posts, pages, and selected content.
* **Automatic or manual placement:** Show the button automatically, place it with a shortcode, or add it from PHP.
* **Selected-content conversion:** Convert the full page or only the content enclosed by the block shortcode.
* **Customizable button appearance:** Configure button text, icon, layout, style, and placement.
* **PDFCrowd conversion settings:** Control PDF layout, page size, margins, headers, footers, and other conversion options from WordPress admin.
* **Cloud PDF generation:** Generate PDFs through PDFCrowd without installing a server-side PDF library on your WordPress host.


== Usage ==

Once activated, the "Save as PDF" button will automatically appear on eligible content according to your settings. Users can click the button to download the current page as a PDF file.

To manually add the "Save as PDF" button to specific pages or posts, use the following shortcode:

**[save_as_pdf_pdfcrowd]**

To add a button for selected content, wrap that content in the block shortcode:

**[block_save_as_pdf_pdfcrowd]**
Selected content
**[/block_save_as_pdf_pdfcrowd]**

For additional methods of adding the button to your pages, please refer to the [Getting Started Guide](https://pdfcrowd.com/save-as-pdf-wordpress-plugin/#how-to-use).

== Customization ==

The plugin offers various customization options accessible through the WordPress admin area. You can change the PDF generation settings and button appearance. For more detailed customization, please refer to the plugin [option reference](https://pdfcrowd.com/save-as-pdf-wordpress-plugin/ref/).

== Licensing ==

By default, the plugin operates in demo mode. Demo mode is fully functional, but adds a watermark and PDFCrowd branding to the generated PDF.

To remove the demo watermark and PDFCrowd branding, purchase a [PDFCrowd license](https://pdfcrowd.com/pricing/api/?api=v2&ref=wordpress). Activate the license by entering your PDFCrowd username and key in the plugin settings under the License tab.

A PDFCrowd license can be used across multiple WordPress websites for our [plugins](https://pdfcrowd.com/save-as-pdf-image-wordpress-plugin/). It also grants direct access to the [PDFCrowd API](https://pdfcrowd.com/api/) for custom application integrations.

== Basic Troubleshooting ==

If the default plugin output does not meet your requirements, consider adjusting the following settings individually. You may need to activate the "Expert Settings" option to access some of these features.

* **Mode > Conversion Mode:** Try switching it to either "Upload" or "Content".
* **Print Resolution > Content Viewport Width:** Experiment with different widths to see which yields the best result.
* **Print Resolution > Content Fit Mode:** Different scaling modes can significantly alter the PDF's page layout.
* **Print Resolution > Content Viewport Height:** Increase this value, for example, to 50000, to see if it improves the output.
== Support ==

Please [contact us](https://pdfcrowd.com/contact/) or write to support@pdfcrowd.com if you need any help. We will be happy to assist you with configuring the plugin to ensure its output meets your needs.

Plugin links:

* [Guide](https://pdfcrowd.com/save-as-pdf-wordpress-plugin/)
* [Option Reference](https://pdfcrowd.com/save-as-pdf-wordpress-plugin/ref/)
* [FAQ](https://pdfcrowd.com/faq/wordpress/)

== About us ==

PDFCrowd provides cloud document conversion APIs and integrations for developers, website owners, WordPress sites, and automation workflows.

== Installation ==

1. **Upload Plugin:** Download the "Save as PDF" plugin ZIP file. In your WordPress dashboard, navigate to **Plugins > Add New > Upload Plugin**. Choose the ZIP file you downloaded and click **Install Now**.
2. **Activate Plugin:** After the installation is complete, click **Activate Plugin** to start using "Save as PDF" on your site.
3. **Configure Settings:** Go to the "Save as PDF" settings page to customize the button appearance and conversion settings.

== Frequently Asked Questions ==

= How can I activate the license? =

1. Purchase a [PDFCrowd license plan](https://pdfcrowd.com/pricing/api/?api=v2&ref=wordpress) that matches your usage level.
2. Activate the license by entering your PDFCrowd username and key in the "License" tab of the plugin settings.

= Can I use the plugin without a PDFCrowd license? =

Yes. The plugin can be tested in demo mode. Demo mode is fully functional, but the generated PDF includes a watermark and PDFCrowd branding. A PDFCrowd license is required to remove the watermark and branding.

= How does the plugin work? =

The plugin uses the PDFCrowd [HTML to PDF API](https://pdfcrowd.com/api/html-to-pdf-api/), a cloud conversion service. When a visitor clicks the button, the plugin sends either the page URL or the HTML content to PDFCrowd. PDFCrowd processes the request and returns the generated PDF file.

This approach has several benefits:

* **Performance:** Conversion does not consume your WordPress server's CPU or memory.
* **Scalability:** Cloud conversion can handle traffic spikes without adding conversion load to your site.
* **Reliability:** PDFCrowd's conversion infrastructure is maintained separately from your WordPress hosting environment.

= Can I choose where the button appears? =

Yes. You can configure automatic button placement in the plugin settings, add the button with a shortcode, or create the button from PHP.

= Can I convert only part of a page? =

Yes. Use the block shortcode to place the button around selected content. The plugin can convert the enclosed block instead of the whole page.

= Where can I find more information about the plugin? =

* [Guide](https://pdfcrowd.com/save-as-pdf-wordpress-plugin/): Provides basic information about the plugin.
* [Option Reference](https://pdfcrowd.com/save-as-pdf-wordpress-plugin/ref/): Offers a detailed reference for plugin options, including examples.
* [FAQ](https://pdfcrowd.com/faq/wordpress/): An extensive plugin FAQ is available on our website.
* [Contact Us](https://pdfcrowd.com/contact/): If you need any assistance, we're here to help.


== Changelog ==

= 4.5.8 =
* Updated the readme file.
* Fixed the vertical alignment of option labels in the plugin settings.

= 4.5.7 =
* Added ABSPATH guards, switched to wp_safe_redirect to pass Plugin Check.

= 4.5.6 =
* Fixed CVE-2026-0862 by avoiding the use of an empty key for encryption.

= 4.5.5 =
* Enhanced descriptions of plugin options.

= 4.5.4 =
* Fixed: Prevent undefined AJAX URL by reliably exposing admin-ajax.php, avoiding clashes with third-party plugins.

[See changelog for all versions](https://raw.githubusercontent.com/pdfcrowd/pdfcrowd-wordpress-save-as-pdf/master/changelog.txt).
