=== Save as PDF Plugin by PDFCrowd ===
Contributors: PDFCrowd
Tags: pdf, save as pdf, pdf download, wordpress to pdf, html to pdf
Requires PHP: 5.1
Requires at least: 4.0
Tested up to: 7.0
Stable tag: 4.6.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add a PDF download button to WordPress in minutes. Visitors can save pages or posts as PDF with one click.

== Description ==


The "Save as PDF" plugin lets you add a full-featured PDF download button to your WordPress site in minutes, without custom code or server-side PDF software. Visitors can save a page or post as PDF with one click.

You can install and test the plugin right away in fully functional demo mode. No registration is needed. When you are ready, activate a paid PDFCrowd license for production use.

Useful links:

* [WordPress plugin guide](https://pdfcrowd.com/save-as-pdf-wordpress-plugin/): setup, first test, and common workflows.
* [WordPress FAQ](https://pdfcrowd.com/faq/wordpress/): common issues, examples, licensing, and troubleshooting.
* [Option reference](https://pdfcrowd.com/save-as-pdf-wordpress-plugin/ref/): exact plugin settings.
* [Contact PDFCrowd support](https://pdfcrowd.com/contact/): help with setup or output issues.

=== Features ===

* **Easy setup:** Install from WordPress admin, activate the plugin, and test the button in demo mode.
* **One-click PDF download:** Let visitors save pages or posts as PDF.
* **Modern page rendering:** Supports current HTML, CSS, images, and JavaScript.
* **Flexible button placement:** Show the button automatically or place it manually where needed.
* **Customizable button appearance:** Configure button text, icon, layout, and style.
* **Flexible output settings:** Adjust PDF layout, page size, margins, headers, footers, and other output options from WordPress admin.
* **Selected-content conversion:** Convert the full page or a selected part of the page.
* **Output cleanup:** Remove headers, sidebars, cookie banners, popups, ads, or other unwanted page parts from the generated PDF.
* **No PDF software to install on your server:** PDF generation runs through PDFCrowd.


== Installation ==

= Automatic installation =

1. In WordPress admin, go to **Plugins > Add New**.
2. Search for "Save as PDF by PDFCrowd".
3. Click **Install Now**, then **Activate**.
4. Go to **Settings > Save as PDF** to review button placement and output settings.

= ZIP upload =

1. Download the "Save as PDF" plugin ZIP file.
2. In WordPress admin, go to **Plugins > Add New > Upload Plugin**.
3. Choose the ZIP file and click **Install Now**.
4. Click **Activate Plugin**.

= After activation =

The "Save as PDF" button appears automatically wherever it is enabled in the plugin settings. Go to **Settings > Save as PDF** to review button placement, button text, and output settings.

Test the button on one post or page that you can safely use.

For layout, page size, selected-content, or login/staging adjustments, see [Adjust the PDF Result](https://pdfcrowd.com/save-as-pdf-wordpress-plugin/#adjust-pdf-result).

For button or PDF generation problems, see [Troubleshooting](https://pdfcrowd.com/save-as-pdf-wordpress-plugin/#troubleshooting).

== Frequently Asked Questions ==

= Can I test the plugin before buying a PDFCrowd license? =

Yes. You can install and test the plugin right away in fully functional demo mode. No registration is needed. When you are ready, activate a paid PDFCrowd license for production use.

= Does PDF generation happen on my WordPress server? =

No. PDF generation runs through PDFCrowd, so your WordPress host does not need PDF generation software installed.

= Where can I find the full WordPress plugin documentation? =

Useful links:

* [WordPress plugin guide](https://pdfcrowd.com/save-as-pdf-wordpress-plugin/): setup, first test, and common workflows.
* [WordPress FAQ](https://pdfcrowd.com/faq/wordpress/): common issues, examples, licensing, and troubleshooting.
* [Option reference](https://pdfcrowd.com/save-as-pdf-wordpress-plugin/ref/): exact plugin settings.

= How can I contact support? =

If you need help with setup, output adjustments, or troubleshooting, [contact PDFCrowd support](https://pdfcrowd.com/contact/). We are happy to help you configure the plugin for your WordPress site.

== Changelog ==

= 4.6.0 =
* New "Conformance" option - produce the output PDF at the specified PDF/A conformance level.
* New "Attachments" option - embed one or more files as attachments in the output PDF.
* New "Tagged PDF" option - create a tagged PDF for accessibility and content reflow.

= 4.5.8 =
* Updated the readme file.
* Fixed the vertical alignment of option labels in the plugin settings.

= 4.5.7 =
* Added ABSPATH guards, switched to wp_safe_redirect to pass Plugin Check.

= 4.5.6 =
* Fixed CVE-2026-0862 by avoiding the use of an empty key for encryption.

= 4.5.5 =
* Enhanced descriptions of plugin options.

[See changelog for all versions](https://raw.githubusercontent.com/pdfcrowd/pdfcrowd-wordpress-save-as-pdf/master/changelog.txt).
