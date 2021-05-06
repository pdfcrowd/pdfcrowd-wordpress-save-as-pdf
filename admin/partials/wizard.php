<div id="save-as-pdf-pdfcrowd-wizard">
    <h2></h2>
    <h2>
        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTkuMjI3IiBoZWlnaHQ9IjQzLjI1NiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC03My44MDIgLTM4Ni4wNikiPjxnIHRyYW5zZm9ybT0ibWF0cml4KDEuNzk0OCAwIDAgMS43OTQ4IC0yNjI2LjUgLTIxMi4wNikiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmOTUwMCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+PHBhdGggZD0ibTE1MTQuNSAzMzUuODZjMC40NDI2IDAuMDU0IDEuMjM2Ni0wLjI0MzM2IDEuMDAwMiAwLjQ4OTY1djE4LjUxMWMtMC40NDI2LTAuMDU0LTEuMjM2NiAwLjI0MzM3LTEuMDAwMi0wLjQ4OTY1di0xOC41MTF6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC45OTk4Ii8+PHBhdGggZD0ibTE1MDYuMyAzNDQuNTRoMS40NzQ4djEwLjU1NWgtMS40NzQ4di0xMC41NTV6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC41MjUxIi8+PHBhdGggZD0ibTE1MjIuNCAzMzkuNzhjMC4zNzU1IDAuMTIzMSAxLjI5ODYtMC4zMDEzMyAxLjE2OTQgMC4zMjY0M3YxNC44NDNjLTAuMzc1NS0wLjEyMzExLTEuMjk4NiAwLjMwMTMzLTEuMTY5NC0wLjMyNjQzdi0xNC44NDN6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC44MzA2Ii8+PHBhdGggZD0ibTE1MzUuMSAzNTMuMjh2Mi4xNjQ5aC01LjE2NDl2LTIuMTY0OWg1LjE2NDl6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iMy44MzUxIi8+PC9nPjwvZz48L3N2Zz4K" style="height: 24px;"/>
        <?php echo esc_html( get_admin_page_title() ); ?> Wizard
    </h2>
    <div id="save-as-pdf-pdfcrowd-wizard-step-1" class="save-as-pdf-pdfcrowd-wizard-step">
        <h2>Page Setup</h2>
        <div class="save-as-pdf-pdfcrowd-wizard-step-container">
            <p>
                <span class="save-as-pdf-pdfcrowd-wizard-step-title">
                    <label for="save-as-pdf-pdfcrowd-page_size">
                        Output page size
                    </label>
                </span>
                <span id="save-as-pdf-pdfcrowd-wizard-page_size" class="save-as-pdf-pdfcrowd-wizard-step-span">
                </span>
            </p>
            <p>
                <span class="save-as-pdf-pdfcrowd-wizard-step-title">
                    <label for="save-as-pdf-pdfcrowd-orientation">
                        Page orientation
                    </label>
                </span>
                <span id="save-as-pdf-pdfcrowd-wizard-orientation" class="save-as-pdf-pdfcrowd-wizard-step-span">
                </span>
            </p>
            <p>
                <span class="save-as-pdf-pdfcrowd-wizard-step-title">
                    <label for="save-as-pdf-pdfcrowd-no_margins">
                        No margins
                    </label>
                </span>
                <span id="save-as-pdf-pdfcrowd-wizard-no_margins" class="save-as-pdf-pdfcrowd-wizard-step-span">
                </span>
            </p>
        </div>
    </div>
    <div id="save-as-pdf-pdfcrowd-wizard-step-2" class="save-as-pdf-pdfcrowd-wizard-step">
        <h2>Appearance</h2>
        <div class="save-as-pdf-pdfcrowd-wizard-step-container">
            <p>
                <span class="save-as-pdf-pdfcrowd-wizard-step-title">
                    <label for="save-as-pdf-pdfcrowd-button-text">
                        Conversion button label
                    </label>
                </span>
                <p id="save-as-pdf-pdfcrowd-wizard-button-text" class="save-as-pdf-pdfcrowd-wizard-step-p">
                </p>
            </p>
        </div>
    </div>
    <div id="save-as-pdf-pdfcrowd-wizard-step-3" class="save-as-pdf-pdfcrowd-wizard-step">
        <h2>Conversion Mode</h2>
        <div class="save-as-pdf-pdfcrowd-wizard-step-container">
            Configure the conversion mode or use the automatic one.
            <div id="save-as-pdf-pdfcrowd-wizard-cm">
                <fieldset>
                    <legend class="screen-reader-text">
                        <span>Conversion mode setup</span>
                    </legend>
                    <p>
                        <label>
                            <input type="radio"
                                   name="save-as-pdf-pdfcrowd-wizard-cm"
                                   checked value="0">
                            Automatic
                        </input>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input type="radio"
                                   name="save-as-pdf-pdfcrowd-wizard-cm"
                                   id="save-as-pdf-pdfcrowd-wizard-cm-cfg"
                                   value="1">
                            Configure
                            </input>
                        </label>
                    </p>
                </fieldset>
            </div>
            <div id="save-as-pdf-pdfcrowd-wizard-cm-conf">
                Check one or more items which describe your web pages.
                <p>
                    <input type="checkbox"
       id="save-as-pdf-pdfcrowd-wizard_cm_public"
       name="save-as-pdf-pdfcrowd-wizard_cm_public"
       value="1" autocomplete="off">

                    <label for="save-as-pdf-pdfcrowd-wizard_cm_public">
                        Publicly accessible pages
                    </label>
                </p>
                <p>
                    <input type="checkbox"
       id="save-as-pdf-pdfcrowd-wizard_cm_pp"
       name="save-as-pdf-pdfcrowd-wizard_cm_pp"
       value="1" autocomplete="off">

                    <label for="save-as-pdf-pdfcrowd-wizard_cm_pp">
                        Password protected pages
                    </label>
                </p>
                <p>
                    <input type="checkbox"
       id="save-as-pdf-pdfcrowd-wizard_cm_data"
       name="save-as-pdf-pdfcrowd-wizard_cm_data"
       value="1" autocomplete="off">

                    <label for="save-as-pdf-pdfcrowd-wizard_cm_data">
                        Pages with data entered by users (web forms)
                    </label>
                </p>
                <p>
                    <input type="checkbox"
       id="save-as-pdf-pdfcrowd-wizard_cm_canvas"
       name="save-as-pdf-pdfcrowd-wizard_cm_canvas"
       value="1" autocomplete="off">

                    <label for="save-as-pdf-pdfcrowd-wizard_cm_canvas">
                        Pages with canvas drawings created by users
                    </label>
                </p>
            </div>
        </div>
    </div>
    <div style='margin-top: 2em'>
        <div id="save-as-pdf-pdfcrowd-wizard-done" class="button-primary">
            Finish
        </div>
        <div id="save-as-pdf-pdfcrowd-wizard-next" data-step="1" class="button-primary">
            Next
        </div>
    </div>
</div>

<style>
 .save-as-pdf-pdfcrowd-admin-settings {
     display: none;
 }
</style>
