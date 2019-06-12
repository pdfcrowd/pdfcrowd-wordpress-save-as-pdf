(function( $ ) {
    'use strict';

    window.SaveAsPDFPdfcrowd = function(options) {
        $("<form class='save-as-pdf-pdfcrowd-post-form' enctype='application/x-www-form-urlencoded' method='post' action='" +
          ajaxurl + "'><input type='hidden' name='options' value='" + options
          + "'><input type='hidden' name='action' value='save_as_pdf_pdfcrowd'></form>").appendTo('body').submit();
    };
})( jQuery );
