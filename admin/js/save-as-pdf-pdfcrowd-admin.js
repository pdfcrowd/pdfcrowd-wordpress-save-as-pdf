(function(a){a(function(){const i=a("#save-as-pdf-pdfcrowd-settings-cfg-area");if(!i.length){return}i.find("select.save-as-pdf-pdfcrowd-basic-input").css("min-width",i.find("select.save-as-pdf-pdfcrowd-adv-input").css("width"));const q=a("#save-as-pdf-pdfcrowd-admin-settings");const x=q.find("#save-as-pdf-pdfcrowd-settings-set");const r=x.find(".save-as-pdf-pdfcrowd-category-wrap");const c=q.find("#save-as-pdf-pdfcrowd-button-preview");const g=q.find("#save-as-pdf-pdfcrowd-options-filter");const t=q.find("#save-as-pdf-pdfcrowd-show-button-preview");const d=q.find(".save-as-pdf-pdfcrowd-dirty-flag");let initial_set=true;let expert_mode=false;let tabBoxes=a(".save-as-pdf-pdfcrowd-metaboxes");let currentTab=q.find(".nav-tab").first();const k="save-as-pdf-pdfcrowd-expert";const m="save-as-pdf-pdfcrowd-description";const j="save-as-pdf-pdfcrowd-preview";const n="save-as-pdf-pdfcrowd-shortcode";let preview_wanted=true;const h=a("#wpadminbar");let sticky_el=null;if(h.length&&h.css("position")==="fixed"){const o=a("body").css("background-color");const v=o!=="rgba(0, 0, 0, 0)"?o:"#f0f0f1";sticky_el=a("#save-as-pdf-pdfcrowd-sticky").first();sticky_el.css("position","sticky").css("z-index",1000).css("top",h[0].getBoundingClientRect().bottom).css("background-color",v)}a("#save-as-pdf-pdfcrowd-switch-wrap label").css("font-size",g.css("font-size"));function e(z,y){let timeoutId;return function(){const B=this;const A=arguments;clearTimeout(timeoutId);timeoutId=setTimeout(function(){z.apply(B,A)},y)}}function u(L){const D=i.find("#"+L+"clear-filter");const M=i.find("#"+L+"changes-only-toggle");function y(S){q.find("."+S).removeClass(S)}function R(S){y(L+"hidden-set");y(L+"input-hi");y(L+"must-visible");q.removeClass(L+"filter-applied");q.find("#"+L+"options-filter-icon").show()}function A(S){g.val("");D.hide();if(S){Q(g)}}function z(){i.find("#save-as-pdf-pdfcrowd-filter-group select").val("")}function C(S,T){localStorage.setItem(S,T?"1":"0")}function F(U,W,T){const S=U.is(":checked");const V=q.find(W);if(S){V.show()}else{V.hide()}C(T,S);return S}t.change(function(){preview_wanted=F(a(this),"#"+L+"button-preview",j);if(preview_wanted){window.SaveAsPDFPdfcrowdShowButtonPreview(this)}});q.find("#"+L+"sc-params").change(function(S){F(a(this),"."+L+"devi",n)});i.find("#"+L+"comments-toggle").change(function(){F(a(this),a("."+L+"description"),m)});q.find("#save-as-pdf-pdfcrowd-settings-toggle").click(function(){A(true);y(L+"must-visible");z();expert_mode=a(this).is(":checked");if(expert_mode){q.addClass(L+"expert-mode").removeClass(L+"basic-mode");const S=q.find("#"+L+"settings-set-nav").text("Expert Settings");if(!currentTab.is(":visible")){S.click()}}else{q.addClass(L+"basic-mode").removeClass(L+"expert-mode");q.find("#"+L+"settings-set-nav").text("Basic Settings")}C(k,expert_mode);K()});i.find("."+L+"categories-filter").change(function(){A();M.prop("checked","").change();R();const U=a(this).val();let first_el;if(U){r.addClass(L+"hidden-set");first_el=a("#"+U).removeClass(L+"hidden-set").get(0);a(this).addClass(L+"input-hi")}else{first_el=r.removeClass(L+"hidden-set").get(0)}if(sticky_el){const V=first_el.getBoundingClientRect().y;const S=a("html").first();const T=sticky_el[0].getBoundingClientRect().bottom;if(V<T){S.scrollTop(S.scrollTop()-(T-V+10))}}});function K(){q.removeClass(L+"no-changes");if(M.is(":checked")){A(true);N();q.addClass(L+"changes-only");let no_changes=true;q.find("."+L+"category-wrap").each(function(){const S=a(this);if(S.find("."+L+"set-group").is(":visible")){S.find("> ."+L+"heading-wrap").addClass(L+"must-visible");no_changes=false}});if(no_changes){q.addClass(L+"no-changes")}}else{q.removeClass(L+"changes-only")}}M.change(function(){K()});function I(S){if(S){q.find("#save-as-pdf-pdfcrowd-settings-toggle").click()}}function N(){q.find("."+L+"categories-filter").prop("selectedIndex",0);r.removeClass(L+"hidden-set")}function Q(U){R();N();q.removeClass(L+"no-filter-res");const T=U.val();if(T){q.find("#"+L+"options-filter-icon").hide()}else{q.find("#"+L+"options-filter-icon").show()}const V=T.trim();if(V.length){if(M.is(":checked")){M.click()}q.addClass(L+"filter-applied");U.addClass(L+"input-hi");D.show();const S=new RegExp(V.replaceAll(" ","\\s*"),"im");let count=0;x.find("."+L+"set-group > th").each(function(){const W=a(this);if(S.test(W.text())){W.parent().removeClass(L+"not-filtered");if(W.is(":visible")){count++;W.closest("."+L+"category-wrap").find("> ."+L+"heading-wrap").addClass(L+"must-visible")}}else{W.parent().addClass(L+"not-filtered")}});if(!count){q.addClass(L+"no-filter-res")}}else{D.hide();x.find("."+L+"set-group").removeClass(L+"not-filtered")}}const O=e(Q,100);g.on("input",function(){O(a(this))});D.click(function(){A(true)});let prev_values=null;function H(U){if(prev_values){const V=U.attr("type");const T=U.attr("name");const S=prev_values.get(T);let value;if(V=="checkbox"){value=U.is(":checked")?"1":null}else{value=U.val()}if(V=="radio"){q.find('input[name="'+T+'"]').removeClass(L+"is-changed")}if(S!=value){U.addClass(L+"is-changed");d.show()}else{U.removeClass(L+"is-changed");if(!q.find("."+L+"is-changed").length){d.hide()}}}}function E(U){if(U.hasClass("wp-picker-default")){return}let is_default=false;const T=U.closest("."+L+"set-group");const W=U.attr("type");H(U);if(W!="radio"||U.is(":checked")){if(W==="radio"){T.find(":input").removeClass(L+"not-default-set")}const V=decodeURIComponent(T.data("default"));let value="";const S=U.data("parent-opt");let parent_opt=S?a(S):null;if(parent_opt&&!parent_opt.is(":checked")){return}if(W=="checkbox"){if(U.is(":checked")){value="1"}}else{value=U.val();if(!value&&!U.data("empty-is-not-def")&&W!="radio"){value=V}}if(value==V){U.removeClass(L+"not-default-set");if(!T.find("."+L+"not-default-set").length){T.removeClass(L+"not-default-set")}}else{U.addClass(L+"not-default-set");T.addClass(L+"not-default-set")}if(parent_opt&&parent_opt.is(":input")){E(parent_opt)}if(!initial_set){K()}}}a("."+L+"color-field").wpColorPicker({change:function(S,T){a(this).val(T.color.toString());E(a(this));window.SaveAsPDFPdfcrowdShowButtonPreview(this)}});x.find(":input").change(function(){E(a(this))}).change();const P=e(E,200);x.find('input[type="text"], textarea').on("input",function(){P(a(this))});a("#"+L+"license-settings :input").change(function(){E(a(this))});prev_values=new FormData(a("#save-as-pdf-pdfcrowd-options")[0]);function J(T,S){const U=i.find(S);if(localStorage.getItem(T)==="1"){U.click()}else{U.change()}}function G(S){if(localStorage.getItem(S)===null){C(S,true)}}q.find("[data-parent-opt]").focus(function(){const S=a(a(this).data("parent-opt"));if(!S.prop("checked")){S.prop("checked",true)}});const B=new URLSearchParams(window.location.search);I(localStorage.getItem(k)==="1"||B.get("expert")==="1");G(m);G(j);J(m,"#"+L+"comments-toggle");J(j,"#"+L+"show-button-preview");J(n,"#"+L+"sc-params")}q.find("#save-as-pdf-pdfcrowd-nav-tab").on("click","a",function(z){z.preventDefault();const y=a(this).attr("href");a(".nav-tab").removeClass("nav-tab-active");tabBoxes.addClass("hidden");currentTab=a(y).toggleClass("hidden");a(this).addClass("nav-tab-active");if(history.pushState){history.pushState(null,null,y)}else{location.hash=y}if(y=="#save-as-pdf-pdfcrowd-settings-set"){i.show();if(preview_wanted){c.show()}}else{i.hide();c.hide()}});q.find("#save-as-pdf-pdfcrowd-close-preview").click(function(){t.click()});u("save-as-pdf-pdfcrowd-");if(window.location.hash&&window.location.hash.startsWith("#save-as-pdf-pdfcrowd")){const l=a('a.nav-tab[href="'+window.location.hash+'"]');if(l.length===1){l.click()}else{let elem=a(window.location.hash);if(elem.hasClass("save-as-pdf-pdfcrowd-category-wrap")){elem=elem.find(".save-as-pdf-pdfcrowd-heading-wrap")}if(elem.length){if(!elem.is(":visible")&&!expert_mode){q.find("#save-as-pdf-pdfcrowd-settings-toggle").click()}elem[0].scrollIntoView()}}}window.SaveAsPDFPdfcrowd=function(z,B,y,A){if(!y.indicator||window.pdfcrowdConversionInProgress){return}setTimeout(function(){window.pdfcrowdConversionInProgress=false;window.SaveAsPDFPdfcrowdIndicators.functionFromName(y.indicator)(false,A)},4000);window.SaveAsPDFPdfcrowdIndicators.functionFromName(y.indicator)(true,A);console.log("conversion request");window.pdfcrowdConversionInProgress=true};window.SaveAsPDFPdfcrowdShowButtonPreview=function(B){if(B.name=="save-as-pdf-pdfcrowd[button_styling]"){if(B.value=="theme"){a("#save-as-pdf-pdfcrowd-custom-button").hide();t.prop("disabled",true);if(!initial_set){t.prop("checked",false).change()}return}else{a("#save-as-pdf-pdfcrowd-custom-button").show();t.prop("disabled",false);if(!initial_set){t.prop("checked",true).change()}}}if(!preview_wanted){return}function y(C){return C.replace(/[&<"']/g,function(D){return{"&":"&amp;","<":"&lt;",'"':"&quot;","'":"&#39;"}[D]})}function z(){var D=a("#save-as-pdf-pdfcrowd-appearance :input").serializeArray();var C={};a.map(D,function(G,E){const F=/button_(custom|indicator)_html/.test(G.name)?G.value:y(G.value);C[G.name.match(/\[(.*)\]/)[1]]=F});return C}var A=z();a.ajax({type:"post",url:ajaxurl,data:{action:"save_as_pdf_pdfcrowd_create_button",style:A,nonce:a("#save-as-pdf-pdfcrowd-options").data("nonce")},success:function(C){a("#save-as-pdf-pdfcrowd-button-preview-content").html(C);window.SaveAsPDFPdfcrowdIndicators.init()},error:function(C){if(C.status){alert("Error "+C.status+" - "+C.statusText)}}})};a("#save-as-pdf-pdfcrowd-contact-submit").click(function(){alert("Ajax POST to our site");a("#TB_overlay").click()});var f=a("input[name='save-as-pdf-pdfcrowd[button_styling]']:checked");if(f.length){window.SaveAsPDFPdfcrowdShowButtonPreview(f[0])}const p=e(window.SaveAsPDFPdfcrowdShowButtonPreview,200);a("#save-as-pdf-pdfcrowd-appearance :input").change(function(){p(this)});a('#save-as-pdf-pdfcrowd-appearance input[type="text"], #save-as-pdf-pdfcrowd-appearance textarea').on("input",function(){p(this)});a(".save-as-pdf-pdfcrowd-text-for-radio").click(function(){a(this).prevAll(":radio").prop("checked",true);return false});function s(y){if(y==="email"){a(".save-as-pdf-pdfcrowd-email-details").addClass("save-as-pdf-pdfcrowd-show-email")}else{a(".save-as-pdf-pdfcrowd-email-details").removeClass("save-as-pdf-pdfcrowd-show-email")}}a('input:radio[name="save-as-pdf-pdfcrowd[button_disposition]"]').change(function(){s(a(this).val())});s(a('input:radio[name="save-as-pdf-pdfcrowd[button_disposition]"]:checked').val());function w(z){var y=a("#save-as-pdf-pdfcrowd-cm-content-options input:checkbox");if(z!="content"){y.prop("checked",false).change();y.prop("disabled",true)}else{y.prop("disabled",false).change()}}a('input:radio[name="save-as-pdf-pdfcrowd[conversion_mode]"]').change(function(){w(a(this).val())});w(a('input:radio[name="save-as-pdf-pdfcrowd[conversion_mode]"]:checked').val());function b(y){if(y=="regular"){a("#save-as-pdf-pdfcrowd-lic-cred").show()}else{a("#save-as-pdf-pdfcrowd-lic-cred").hide()}}a('input:radio[name="save-as-pdf-pdfcrowd[license_type]"]').change(function(){b(a(this).val())});b(a('input:radio[name="save-as-pdf-pdfcrowd[license_type]"]:checked').val());a("#save-as-pdf-pdfcrowd-use-predefined-h-html").click(function(){a("#save-as-pdf-pdfcrowd-header_html").val(a("#save-as-pdf-pdfcrowd-hidden-header").val()).change()});a("#save-as-pdf-pdfcrowd-use-predefined-f-html").click(function(){a("#save-as-pdf-pdfcrowd-footer_html").val(a("#save-as-pdf-pdfcrowd-hidden-footer").val()).change()});if(a("#save-as-pdf-pdfcrowd-wizard")){a("#save-as-pdf-pdfcrowd-wizard-done").click(function(){let mode;switch(a('input:radio[name="save-as-pdf-pdfcrowd-wizard-cm"]:checked').val()){case"canvas":mode="#save-as-pdf-pdfcrowd-conversion-mode-content";a("#save-as-pdf-pdfcrowd-button-user-drawings").prop("disabled",false).prop("checked",true).change();break;case"data":mode="#save-as-pdf-pdfcrowd-conversion-mode-content";a("#save-as-pdf-pdfcrowd-button-user-drawings").prop("disabled",false).prop("checked",false).change();break;case"pp":case"private":mode="#save-as-pdf-pdfcrowd-conversion-mode-upload";break;default:mode="#save-as-pdf-pdfcrowd-conversion-mode-url"}a(mode).prop("checked",true).change();a("#pdfcrowd-save").click()});a("#save-as-pdf-pdfcrowd-wizard-next").click(function(){let step=a(this).data("step");a("#save-as-pdf-pdfcrowd-wizard-step-"+step).hide();step++;if(step==3){a("#save-as-pdf-pdfcrowd-wizard-next").hide()}a("#save-as-pdf-pdfcrowd-wizard-step-"+step).show();a(this).data("step",step)});a("#save-as-pdf-pdfcrowd-page_size").appendTo("#save-as-pdf-pdfcrowd-wizard-page_size");a("#save-as-pdf-pdfcrowd-orientation").appendTo("#save-as-pdf-pdfcrowd-wizard-orientation");a("#save-as-pdf-pdfcrowd-no_margins").appendTo("#save-as-pdf-pdfcrowd-wizard-no_margins");a("#save-as-pdf-pdfcrowd-button-text").appendTo("#save-as-pdf-pdfcrowd-wizard-button-text");a("#save-as-pdf-pdfcrowd-public").appendTo("#save-as-pdf-pdfcrowd-wizard-public");a("#save-as-pdf-pdfcrowd-private").appendTo("#save-as-pdf-pdfcrowd-wizard-private");a("#save-as-pdf-pdfcrowd-pp").appendTo("#save-as-pdf-pdfcrowd-wizard-pp");a("#save-as-pdf-pdfcrowd-data").appendTo("#save-as-pdf-pdfcrowd-wizard-data");a("#save-as-pdf-pdfcrowd-canvas").appendTo("#save-as-pdf-pdfcrowd-wizard-canvas");a("#save-as-pdf-pdfcrowd-wizard-step-1").show()}a("#save-as-pdf-pdfcrowd-pg-link").click(function(z){z.preventDefault();let api_params="";const y=/\[(.*?)\]/;a("#save-as-pdf-pdfcrowd-api-settings :input").each(function(){const B=a(this);const C=B.attr("type");let value="";if(C==="checkbox"){if(B.is(":checked")){value="true"}}else{if(C!=="radio"||B.is(":checked")){value=B.val()}}if(value){let name=B.attr("name");const A=name.match(y);if(A){name=A[1]}if(name!=="converter_version"||value!=="20.10"){api_params+="&"+name+"="+encodeURIComponent(value)}}});window.open(a(this).attr("href")+api_params,"_blank")});initial_set=false})})(jQuery);