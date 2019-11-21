(function( $ ) {
    'use strict';

    $(function() {
        // tabs
        var $tabBoxes = $('.save-as-pdf-pdfcrowd-metaboxes'),
            $currentTab,
            $currentTabLink,
            $tabContent,
            $hash;

        // Tabs on load
        if(window.location.hash && window.location.hash.startsWith('#save-as-pdf-pdfcrowd')) {
            $hash = window.location.hash;
            $tabBoxes.addClass('hidden');
            $currentTab = $($hash).toggleClass('hidden');
            $('.nav-tab').removeClass('nav-tab-active');
            $('.nav-tab[href='+$hash+']').addClass('nav-tab-active');
        }

        //Tabs on click
        $('#save-as-pdf-pdfcrowd-nav-tab').on('click', 'a', function(e){
            e.preventDefault();
            $tabContent = $(this).attr('href');
            $('.nav-tab').removeClass('nav-tab-active');
            $tabBoxes.addClass('hidden');
            $currentTab = $($tabContent).toggleClass('hidden');
            $(this).addClass('nav-tab-active');
            if(history.pushState) {
                history.pushState(null, null, $tabContent);
            }
            else {
                location.hash = $tabContent;
            }
        });

        window.SaveAsPDFPdfcrowd = function(url, attrs, outputName) {
            console.log('conversion request');
        };

        window.SaveAsPDFPdfcrowdShowButtonPreview = function(e) {
            if(e.name == 'save-as-pdf-pdfcrowd[button_styling]') {
                if(e.value == 'theme') {
                    $('#save-as-pdf-pdfcrowd-custom-button').hide();
                    return;
                } else {
                    $('#save-as-pdf-pdfcrowd-custom-button').show();
                }
            }

            function getFormData(){
                var unindexed_array = $('#save-as-pdf-pdfcrowd-appearance :input').serializeArray();
                var indexed_array = {};

                $.map(unindexed_array, function(n, i){
                    indexed_array[n['name'].match(/\[(.*)\]/)[1]] = n['value'];
                });

                return indexed_array;
            }

            // collect values for inputs
            var style = getFormData();
            // console.log(style);

            $.ajax({
                type: 'post',
                url: ajaxurl,
                data: {
                    action: 'save_as_pdf_pdfcrowd_create_button',
                    style: style
                },
                success: function(data) {
                    $('#save-as-pdf-pdfcrowd-button-preview-content').html(data);
                },
                error: function(xhr) {
                    if(xhr.status) {
                        alert('Error ' + xhr.status + ' - ' + xhr.statusText);
                    }
                }
            });
        };

        var style_button = $("input[name='save-as-pdf-pdfcrowd[button_styling]']:checked");
        if(style_button.length) {
            window.SaveAsPDFPdfcrowdShowButtonPreview(style_button[0]);
        }

        $('#save-as-pdf-pdfcrowd-appearance :input').change(function() {
            window.SaveAsPDFPdfcrowdShowButtonPreview(this);
        });

        $('.save-as-pdf-pdfcrowd-color-field').wpColorPicker({
            change: function(event, ui) {
                $(this).val(ui.color.toString());
                window.SaveAsPDFPdfcrowdShowButtonPreview(this);
            }
        });

        $('.save-as-pdf-pdfcrowd-expert').click(function(e) {
            $('.save-as-pdf-pdfcrowd-devi').show();
            $('.save-as-pdf-pdfcrowd-expert').hide();
            return false;
        });
    });
})( jQuery );
