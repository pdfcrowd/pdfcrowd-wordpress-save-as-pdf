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

<div id="save-as-pdf-pdfcrowd-appearance" class="wrap metabox-holder columns-2 save-as-pdf-pdfcrowd-metaboxes hidden">
    <h2>Appearance</h2>
    <a href='#' class='save-as-pdf-pdfcrowd-expert button-secondary'>Show Parameters</a>

    <table class="form-table">
        <tbody>
            <tr>
                <th>
                    Show Button on
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-button-on-home" name="save-as-pdf-pdfcrowd[button_on_home]" value="1" <?php checked( $button_on_home, 1 ); ?> autocomplete="off" />
                    <label for="save-as-pdf-pdfcrowd-button-on-home">
                        Home page<br/>
                    </label>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-button-on-front" name="save-as-pdf-pdfcrowd[button_on_front]" value="1" <?php checked( $button_on_front, 1 ); ?> autocomplete="off" />
                    <label for="save-as-pdf-pdfcrowd-button-on-front">
                        Front page<br/>
                    </label>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-button-on-pages" name="save-as-pdf-pdfcrowd[button_on_pages]" value="1" <?php checked( $button_on_pages, 1 ); ?> autocomplete="off" />
                    <label for="save-as-pdf-pdfcrowd-button-on-pages">
                        Other pages<br/>
                    </label>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-button-on-posts" name="save-as-pdf-pdfcrowd[button_on_posts]" value="1" <?php checked( $button_on_posts, 1 ); ?> autocomplete="off" />
                    <label for="save-as-pdf-pdfcrowd-button-on-posts">
                        Posts<br/>
                    </label>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-button-on-categories" name="save-as-pdf-pdfcrowd[button_on_categories]" value="1" <?php checked( $button_on_categories, 1 ); ?> autocomplete="off" />
                    <label for="save-as-pdf-pdfcrowd-button-on-categories">
                        Category pages<br/>
                    </label>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-button-on-taxonomies" name="save-as-pdf-pdfcrowd[button_on_taxonomies]" value="1" <?php checked( $button_on_taxonomies, 1 ); ?> autocomplete="off" />
                    <label for="save-as-pdf-pdfcrowd-button-on-taxonomies">
                        Taxonomy pages<br/>
                    </label>
                    <div style='margin-top: 1em'>
                        <p>
                            or use shortcode
                            <strong>[save_as_pdf_pdfcrowd]</strong> in your page,
                            <a href='https://pdfcrowd.com/save-as-pdf-image-wordpress-plugin/#shortcodes' target='_blank'>
                                details
                            </a>
                        </p>
                        <p>
                            or use function call,
                            <strong>create_save_as_pdf_pdfcrowd_button</strong> in your PHP code
                            <a href='https://pdfcrowd.com/save-as-pdf-image-wordpress-plugin/#functions' target='_blank'>
                                details
                            </a>
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th>
                    Hide Button in Output PDF
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-button-hidden" name="save-as-pdf-pdfcrowd[button_hidden]" value="1" <?php checked( $button_hidden, 1 ); ?> autocomplete="off" />
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_hidden</strong>"<br>Possible values: 0, 1
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
                        <label for="save-as-pdf-pdfcrowd-pdf1.svg">
                            <input type="radio" id="save-as-pdf-pdfcrowd-pdf1.svg" name="save-as-pdf-pdfcrowd[button_image]" value="pdf1.svg" <?php checked( $button_image, "pdf1.svg" ); ?> autocomplete="off" />
                            <img src='data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwcHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSIzMHB4IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48cG9seWxpbmUgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjRUE0QzNBIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHBvaW50cz0iMzAsMzAgMCwzMCAwLDAgMzAsMCAzMCwzMCAiLz48cGF0aCBkPSJNMTUuMzcyLDQuMzc3ICBjMC40NTIsMC4yMTMsMC4zNTgsMC40ODksMC4yMTksMS43OTNjLTAuMTQyLDEuMzQ1LTAuNjE4LDMuODAyLTEuNTM1LDYuMjE5Yy0wLjkxOCwyLjQxMy0yLjI4LDQuNzg0LTMuNDY3LDYuNTM5ICBjLTEuMTg2LDEuNzU2LTIuMjAxLDIuODk3LTIuOTc1LDMuNTU2Yy0wLjc3NywwLjY1OS0xLjMxNCwwLjgzNS0xLjY2NSwwLjg5M2MtMC4zNDgsMC4wNTgtMC41MDYsMC0wLjYtMC4xNzcgIGMtMC4wOTQtMC4xNzYtMC4xMjctMC40NjYtMC4wNDYtMC44MmMwLjA3OS0wLjM1LDAuMjY4LTAuNzYsMC44MDQtMS4yODVjMC41NDEtMC41MjcsMS40MjYtMS4xNzIsMi42NjEtMS43NzEgIGMxLjIzNS0wLjYsMi44MTctMS4xNTYsNC4xMTYtMS41MzdjMS4yOTktMC4zNzksMi4zMTEtMC41ODUsMy4xOTctMC43NDZjMC44ODgtMC4xNjIsMS42NDctMC4yNzcsMi4zOTEtMC4zMzcgIGMwLjc0NC0wLjA1NiwxLjQ3NC0wLjA1NiwyLjE4NiwwYzAuNzEyLDAuMDYsMS40MDgsMC4xNzUsMi4wMTEsMC4zMjNjMC42LDAuMTQ2LDEuMTA4LDAuMzIxLDEuNTUxLDAuNjAxICBjMC40NDIsMC4yNzYsMC44MjMsMC42NTcsMS4wMTIsMS4wODNjMC4xOTIsMC40MjMsMC4xOTIsMC44OTMsMC4wMzMsMS4yMjhjLTAuMTU4LDAuMzM3LTAuNDc2LDAuNTQxLTAuODM5LDAuNjYgIGMtMC4zNjQsMC4xMTUtMC43NzUsMC4xNDQtMS4yNjcsMGMtMC40OS0wLjE0OC0xLjA2Mi0wLjQ3LTEuNjYyLTAuODk0Yy0wLjYwMS0wLjQyNS0xLjIzNS0wLjk1Mi0yLjA1Ny0xLjc3MSAgYy0wLjgyNC0wLjgxOS0xLjgzOC0xLjkzLTIuNjkyLTMuMDEzYy0wLjg1NC0xLjA4My0xLjU1My0yLjEzNi0yLjAyOC0zLjAyOWMtMC40NzMtMC44OTMtMC43MjctMS42MjQtMC45MzMtMi4zNTUgIGMtMC4yMDYtMC43MzMtMC4zNjQtMS40NjQtMC40MjctMi4xMjJTMTMuMzI2LDYuMTcsMTMuMzksNS43MDFjMC4wNjMtMC40NjYsMC4xNi0wLjgyLDAuMzE3LTEuMDU1ICBjMC4xNTgtMC4yMywwLjM4MS0wLjM1LDAuNTM5LTAuNDA4czAuMjU0LTAuMDU4LDAuMzQ4LTAuMDczYzAuMDk0LTAuMDE1LDAuMTg4LTAuMDQ0LDAuMzMzLDBjMC4xMzgsMC4wNDIsMC4zMjEsMC4xNTQsMC41MDQsMC4yNjgiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0ZGRkZGRiIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjEuNCIvPjwvc3ZnPgo='/>
                        </label>&nbsp;&nbsp;&nbsp;
                        <label for="save-as-pdf-pdfcrowd-pdf2.svg">
                            <input type="radio" id="save-as-pdf-pdfcrowd-pdf2.svg" name="save-as-pdf-pdfcrowd[button_image]" value="pdf2.svg" <?php checked( $button_image, "pdf2.svg" ); ?> autocomplete="off" />
                            <img src='data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwcHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSIzMHB4IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48cG9seWxpbmUgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjRkZGRkZGIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHBvaW50cz0iMjgsMjggMSwyOCAxLDEgMjgsMSAyOCwyOCAiLz48Zz48cGF0aCBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0zMC4wMTUsMjguNjY3SDBWMGgzMC4wMTVWMjguNjY3IE0yLjg4NCwyNS43ODNoMjQuMjQ0VjIuODg2ICAgSDIuODg0IiBmaWxsPSIjRUE0QzNBIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48cGF0aCBkPSJNMTUuNDAxLDQuNDA4ICAgYzAuNDIxLDAuMTgzLDAuMzI3LDAuNDYsMC4xODgsMS43NjJjLTAuMTQzLDEuMzQ5LTAuNjE4LDMuODA2LTEuNTM1LDYuMjE4Yy0wLjkxOCwyLjQxNS0yLjI4LDQuNzg1LTMuNDY3LDYuNTQyICAgYy0xLjE4NSwxLjc1NS0yLjIwMSwyLjg5Ni0yLjk3NCwzLjU1NGMtMC43NzcsMC42NTgtMS4zMTQsMC44MzMtMS42NjUsMC44OTNjLTAuMzQ4LDAuMDYtMC41MDYsMC0wLjYtMC4xNzUgICBzLTAuMTI3LTAuNDctMC4wNDYtMC44MTljMC4wNzktMC4zNTMsMC4yNjgtMC43NjMsMC44MDQtMS4yODdjMC41NDEtMC41MjcsMS40MjYtMS4xNywyLjY2MS0xLjc3MiAgIGMxLjIzNS0wLjU5OSwyLjgxNi0xLjE1Niw0LjExNS0xLjUzNWMxLjI5OS0wLjM4MSwyLjMxMS0wLjU4NSwzLjE5Ny0wLjc0NWMwLjg4OC0wLjE2MSwxLjY0Ny0wLjI3OCwyLjM5LTAuMzM2ICAgYzAuNzQ1LTAuMDYsMS40NzQtMC4wNiwyLjE4NiwwYzAuNzEyLDAuMDU4LDEuNDA5LDAuMTc1LDIuMDExLDAuMzE5YzAuNjAxLDAuMTQ3LDEuMTA4LDAuMzIzLDEuNTUxLDAuNjAyICAgYzAuNDQyLDAuMjc3LDAuODIzLDAuNjU4LDEuMDEyLDEuMDgyYzAuMTkyLDAuNDI1LDAuMTkyLDAuODkzLDAuMDMzLDEuMjI5Yy0wLjE1OCwwLjMzNi0wLjQ3NiwwLjU0Mi0wLjgzOSwwLjY1NyAgIGMtMC4zNjMsMC4xMTctMC43NzUsMC4xNDYtMS4yNjYsMGMtMC40OTEtMC4xNDYtMS4wNjMtMC40NjctMS42NjMtMC44OTNjLTAuNi0wLjQyMy0xLjIzNC0wLjk0OC0yLjA1Ny0xLjc2OCAgIGMtMC44MjMtMC44Mi0xLjgzNy0xLjkzNC0yLjY5MS0zLjAxNWMtMC44NTQtMS4wODMtMS41NTMtMi4xMzYtMi4wMjgtMy4wMjhjLTAuNDczLTAuODkzLTAuNzI3LTEuNjI0LTAuOTMzLTIuMzU3ICAgYy0wLjIwNi0wLjczMS0wLjM2NC0xLjQ2Mi0wLjQyNy0yLjEyYy0wLjA2My0wLjY2LTAuMDMzLTEuMjQ1LDAuMDMxLTEuNzFjMC4wNjMtMC40NywwLjE2LTAuODIsMC4zMTctMS4wNTQgICBjMC4xNTgtMC4yMzUsMC4zODEtMC4zNTIsMC41MzktMC40MWMwLjE1OC0wLjA2LDAuMjU0LTAuMDYsMC4zNDgtMC4wNzNjMC4wOTQtMC4wMTQsMC4xODgtMC4wNDQsMC4zMzMsMCAgIEMxNS4wNjQsNC4yMDksMTUuMjQ4LDQuMzIxLDE1LjQwMSw0LjQwOHoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0VBNEMzQSIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjEuNTciLz48L2c+PC9zdmc+Cg=='/>
                        </label>&nbsp;&nbsp;&nbsp;
                        <label for="save-as-pdf-pdfcrowd-pdf3.svg">
                            <input type="radio" id="save-as-pdf-pdfcrowd-pdf3.svg" name="save-as-pdf-pdfcrowd[button_image]" value="pdf3.svg" <?php checked( $button_image, "pdf3.svg" ); ?> autocomplete="off" />
                            <img src='data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwcHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSIzMHB4IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48cG9seWxpbmUgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjRkZGRkZGIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHBvaW50cz0iMjgsMjggNywyOCA3LDI1IDEsMjUgMSw3IDcsNyA3LDEgMjIsMSAyOCwxMCAyOCwyOCAiLz48Zz48cGF0aCBkPSJNMjguNTk1LDcuNTYybC01LjQzOC02LjMwOWwtMS4wNzgtMS4yNUg5LjIyOGMtMS43MjcsMC0zLjEyNCwxLjM5Ny0zLjEyNCwzLjEyNHYzLjk3MUg4LjA0bC0wLjAwMS0zLjIxICAgYzAuMDA0LTAuOTcxLDAuNzg0LTEuNzU2LDEuNzUyLTEuNzU2bDEwLjk5NC0wLjAxdjUuMjA4YzAuMDAxLDEuOTM5LDEuNTY3LDMuNTEsMy41MDcsMy41MWgzLjgwN0wyNy45MSwyNS44NiAgIGMtMC4wMDQsMC45NjctMC43ODQsMS43NDctMS43NTIsMS43NTRMOS42NTIsMjcuNjA2Yy0wLjg4MywwLTEuNTk0LTAuODY2LTEuNi0xLjkzNVYyNC40SDYuMTE0djEuODk2ICAgYzAsMS45MDcsMS4yNzcsMy40NTUsMi44NDUsMy40NTVsMTcuNzYzLTAuMDA1YzEuNzI2LDAsMy4xMjQtMS40MDQsMy4xMjQtMy4xMjZWOS4wMTZMMjguNTk1LDcuNTYyIiBmaWxsPSIjNDM0NDQwIi8+PHBhdGggZD0iTTIwLjE0NSwyNS4zNjhIMFY2LjEyOWgyMC4xNDVWMjUuMzY4IE0xLjkzNCwyMy40MzJoMTYuMjc0VjguMDY1SDEuOTM0IiBmaWxsPSIjRUE0QzNBIi8+PHBhdGggZD0iTTEwLjMxNCw5LjA2OSAgIGMwLjMwNSwwLjE0MSwwLjI0MiwwLjMyOCwwLjE0OCwxLjIwMWMtMC4wOTcsMC45MDUtMC40MTQsMi41NTQtMS4wMzIsNC4xNzNjLTAuNjE2LDEuNjIyLTEuNTI5LDMuMjEtMi4zMjUsNC4zOSAgIGMtMC43OTcsMS4xNzgtMS40NzgsMS45NDMtMS45OTgsMi4zODZjLTAuNTE5LDAuNDQxLTAuODgyLDAuNTU5LTEuMTE1LDAuNTk5Yy0wLjIzMywwLjA0LTAuMzM5LDAtMC40MDUtMC4xMTcgICBjLTAuMDYzLTAuMTE4LTAuMDg0LTAuMzE1LTAuMDMxLTAuNTUxYzAuMDUzLTAuMjM0LDAuMTgxLTAuNTEsMC41NDItMC44NjNjMC4zNi0wLjM1NCwwLjk1Ni0wLjc4NSwxLjc4NS0xLjE4OCAgIGMwLjgyOS0wLjQwMiwxLjg5MS0wLjc3NSwyLjc2Mi0xLjAzMXMxLjU1MS0wLjM5MywyLjE0Ni0wLjVjMC41OTUtMC4xMDgsMS4xMDQtMC4xODcsMS42MDQtMC4yMjZjMC41LTAuMDQsMC45ODgtMC4wNCwxLjQ2NywwICAgYzAuNDc4LDAuMDM5LDAuOTQ1LDAuMTE3LDEuMzQ4LDAuMjE2YzAuNDA2LDAuMDk3LDAuNzQ1LDAuMjE3LDEuMDQyLDAuNDAyYzAuMjk5LDAuMTg3LDAuNTUyLDAuNDQxLDAuNjgxLDAuNzI2ICAgYzAuMTI3LDAuMjg2LDAuMTI3LDAuNiwwLjAyMSwwLjgyNWMtMC4xMDUsMC4yMjctMC4zMTgsMC4zNjQtMC41NjMsMC40NDFjLTAuMjQ2LDAuMDgtMC41MjIsMC4wOTktMC44NTEsMCAgIGMtMC4zMy0wLjA5OC0wLjcxMi0wLjMxNC0xLjExNS0wLjU5OWMtMC40MDQtMC4yODQtMC44MjktMC42MzgtMS4zODEtMS4xODdjLTAuNTUzLTAuNTUxLTEuMjMyLTEuMjk4LTEuODA3LTIuMDIzICAgYy0wLjU3My0wLjcyNy0xLjA0MS0xLjQzNC0xLjM1OC0yLjAzM2MtMC4zMTktMC41OTktMC40ODktMS4wOS0wLjYyNy0xLjU4MmMtMC4xMzgtMC40OTEtMC4yNDQtMC45OC0wLjI4Ny0xLjQyMiAgIGMtMC4wNDMtMC40NDMtMC4wMjEtMC44MzcsMC4wMjEtMS4xNDljMC4wNDItMC4zMTUsMC4xMDYtMC41NSwwLjIxMy0wLjcwOGMwLjEwNi0wLjE1NywwLjI1Ni0wLjIzNSwwLjM2Mi0wLjI3NSAgIHMwLjE2OS0wLjA0LDAuMjM0LTAuMDQ5YzAuMDYzLTAuMDA5LDAuMTI2LTAuMDI5LDAuMjIyLDBjMC4wOTQsMC4wMywwLjIxNiwwLjEwNCwwLjM0LDAuMTgiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0VBNEMzQSIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjAuNzUiLz48L2c+PC9zdmc+Cg=='/>
                        </label>&nbsp;&nbsp;&nbsp;
                        <label for="save-as-pdf-pdfcrowd-pdf4.svg">
                            <input type="radio" id="save-as-pdf-pdfcrowd-pdf4.svg" name="save-as-pdf-pdfcrowd[button_image]" value="pdf4.svg" <?php checked( $button_image, "pdf4.svg" ); ?> autocomplete="off" />
                            <img src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAiIGhlaWdodD0iMjciIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMTIuNTA5IDAuODR2Ni4yNjU3bDUuNzU0MSAwLjEwNDE0eiIgZmlsbD0iIzY5Njk2OSIgc3Ryb2tlLXdpZHRoPSIwIi8+PGcgdHJhbnNmb3JtPSJtYXRyaXgoMS4wMTE4IDAgMCAxLjAxMDYgLTIuMTYyMSAtMy4yMDI0KSIgZmlsbC1ydWxlPSJldmVub2RkIj48cG9seWxpbmUgcG9pbnRzPSIyMC41IDI5IDMgMjkgMyA0IDE0LjUgNCAxNC41IDEwLjIgMjAuNSAxMC4yIDIwLjUgMjkiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI2ZmZiIgZmlsbC1ydWxlPSJldmVub2RkIi8+PHBvbHlsaW5lIHBvaW50cz0iMjAgMTQgMzEgMTQgMzEgMjUgMjAgMjUiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI2ZmZiIgZmlsbC1ydWxlPSJldmVub2RkIi8+PGcgaWQ9Imljb24tNzAtZG9jdW1lbnQtZmlsZS1wZGYiIGZpbGw9IiM5MjkyOTIiPjxwYXRoIGlkPSJkb2N1bWVudC1maWxlLXBkZiIgZD0ibTI1IDE5di0yaDR2LTFoLTV2N2gxdi0zaDN2LTF6bS0xMy0xdjVoMXYtM2gxLjk5NTFjMS4xMDczIDAgMi4wMDQ5LTAuODg3NzMgMi4wMDQ5LTIgMC0xLjEwNDYtMC44OTM5LTItMi4wMDQ5LTJoLTIuOTk1MXptMS0xdjJoMi4wMDFjMC41NTE3MSAwIDAuOTk4OTYtMC40NDM4NiAwLjk5ODk2LTEgMC0wLjU1MjI4LTAuNDQyNjYtMS0wLjk5ODk2LTF6bTUtMXY3aDIuOTk1MWMxLjEwNzMgMCAyLjAwNDktMC44ODY1NiAyLjAwNDktMi4wMDU5di0yLjk4ODJjMC0xLjEwNzgtMC44OTM5LTIuMDA1OS0yLjAwNDktMi4wMDU5em0xIDF2NWgyLjAwMWMwLjU1MTcxIDAgMC45OTg5Ni0wLjQ0MzcyIDAuOTk4OTYtMC45OTk4MXYtMy4wMDA0YzAtMC41NTIxOC0wLjQ0MjY2LTAuOTk5ODEtMC45OTg5Ni0wLjk5OTgxeiIgZmlsbD0iI2VhNGMzYSIvPjwvZz48L2c+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjkuNjc1IC0uMSkiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PGcgZmlsbD0iIzkyOTI5MiI+PHBhdGggZD0ibS0xMC42NzUgMTAuMXYtM2wtNi03aC0xMC45OTdjLTEuMTA2MSAwLTIuMDAyOCAwLjg5ODM0LTIuMDAyOCAyLjAwNzN2MjIuOTg1YzAgMS4xMDg2IDAuODkwOTIgMi4wMDczIDEuOTk3NCAyLjAwNzNoMTUuMDA1YzEuMTAzMSAwIDEuOTk3NC0wLjg5ODIxIDEuOTk3NC0xLjk5MDh2LTIuMDA5Mmg3Ljk5MzJjMS42NjA2IDAgMy4wMDY4LTEuMzQyMyAzLjAwNjgtMi45OTg4di03LjAwMjRjMC0xLjY1NjItMS4zMzYtMi45OTg4LTMuMDA2OC0yLjk5ODh6bS0xIDEzdjIuMDA2NmMwIDAuNTQ4NDUtMC40NDc3IDAuOTkzNC0wLjk5OTk2IDAuOTkzNGgtMTVjLTAuNTQ1MjUgMC0wLjk5OTk2LTAuNDQ1NjgtMC45OTk5Ni0wLjk5NTQ2di0yMy4wMDljMC0wLjU0MDE5IDAuNDQ1NzQtMC45OTU0NiAwLjk5NTU4LTAuOTk1NDZoMTAuMDA0djQuOTk0MWMwIDEuMTE5NCAwLjg5NDUgMi4wMDU5IDEuOTk3OSAyLjAwNTloNC4wMDIxdjJoLTcuOTkzMmMtMS42NjA2IDAtMy4wMDY4IDEuMzQyMy0zLjAwNjggMi45OTg4djcuMDAyNGMwIDEuNjU2MiAxLjMzNiAyLjk5ODggMy4wMDY4IDIuOTk4OHptLTUtMjEuNXY0LjQ5MTJjMCAwLjU1NzE0IDAuNDUwNjUgMS4wMDg4IDAuOTk2NzQgMS4wMDg4aDMuNzAzMnptLTMuMDA1NCA5LjVjLTEuMTAxNiAwLTEuOTk0NiAwLjkwMDE4LTEuOTk0NiAxLjk5MnY3LjAxNmMwIDEuMTAwMiAwLjkwMjM0IDEuOTkyIDEuOTk0NiAxLjk5MmgxNy4wMTFjMS4xMDE2IDAgMS45OTQ2LTAuOTAwMTggMS45OTQ2LTEuOTkydi03LjAxNmMwLTEuMTAwMi0wLjkwMjM0LTEuOTkyLTEuOTk0Ni0xLjk5MnoiLz48L2c+PC9nPjxwYXRoIGQ9Im0zLjE1OTggNC4xMzY3aDciIGZpbGw9IiM2OTY5NjkiIHN0cm9rZT0iIzY5Njk2OSIgc3Ryb2tlLXdpZHRoPSIxcHgiLz48cGF0aCBkPSJtNC4xNTk4IDcuMTM2N2g2IiBmaWxsPSIjNjk2OTY5IiBzdHJva2U9IiM2OTY5NjkiIHN0cm9rZS13aWR0aD0iMXB4Ii8+PC9zdmc+Cg=='/>
                        </label>&nbsp;&nbsp;&nbsp;
                        <label for="save-as-pdf-pdfcrowd-pdfcrowd.svg">
                            <input type="radio" id="save-as-pdf-pdfcrowd-pdfcrowd.svg" name="save-as-pdf-pdfcrowd[button_image]" value="pdfcrowd.svg" <?php checked( $button_image, "pdfcrowd.svg" ); ?> autocomplete="off" />
                            <img src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTkuMjI3IiBoZWlnaHQ9IjQzLjI1NiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC03My44MDIgLTM4Ni4wNikiPjxnIHRyYW5zZm9ybT0ibWF0cml4KDEuNzk0OCAwIDAgMS43OTQ4IC0yNjI2LjUgLTIxMi4wNikiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmOTUwMCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+PHBhdGggZD0ibTE1MTQuNSAzMzUuODZjMC40NDI2IDAuMDU0IDEuMjM2Ni0wLjI0MzM2IDEuMDAwMiAwLjQ4OTY1djE4LjUxMWMtMC40NDI2LTAuMDU0LTEuMjM2NiAwLjI0MzM3LTEuMDAwMi0wLjQ4OTY1di0xOC41MTF6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC45OTk4Ii8+PHBhdGggZD0ibTE1MDYuMyAzNDQuNTRoMS40NzQ4djEwLjU1NWgtMS40NzQ4di0xMC41NTV6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC41MjUxIi8+PHBhdGggZD0ibTE1MjIuNCAzMzkuNzhjMC4zNzU1IDAuMTIzMSAxLjI5ODYtMC4zMDEzMyAxLjE2OTQgMC4zMjY0M3YxNC44NDNjLTAuMzc1NS0wLjEyMzExLTEuMjk4NiAwLjMwMTMzLTEuMTY5NC0wLjMyNjQzdi0xNC44NDN6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC44MzA2Ii8+PHBhdGggZD0ibTE1MzUuMSAzNTMuMjh2Mi4xNjQ5aC01LjE2NDl2LTIuMTY0OWg1LjE2NDl6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iMy44MzUxIi8+PC9nPjwvZz48L3N2Zz4K'/>
                        </label>&nbsp;&nbsp;&nbsp;
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>button_image</strong>"<br>Possible values: "pdf1.svg", "pdf2.svg", "pdf3.svg", "pdf4.svg", "pdfcrowd.svg", "custom_image", "custom_html"
                        </p>
                        <br/>
                        <label for="save-as-pdf-pdfcrowd-custom-image">
                            <input type="radio" id="save-as-pdf-pdfcrowd-custom-image" name="save-as-pdf-pdfcrowd[button_image]" value="custom_image" <?php checked( $button_image, "custom_image" ); ?> autocomplete="off" />
                            Custom image URL
                            <input id="save-as-pdf-pdfcrowd-custom-image-url" type="text" class="clear regular-text save-as-pdf-pdfcrowd-text-for-radio" name="save-as-pdf-pdfcrowd[button_image_url]" value="<?php echo($button_image_url);?>"  autocomplete="off" />
                            <p class='save-as-pdf-pdfcrowd-devi'>
                                Shortcode & function parameter: "<strong>button_image_url</strong>"
                            </p>
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
                        </label>
                        <br/>
                        <label for="save-as-pdf-pdfcrowd-custom-image-h">
                            <input type="radio" id="save-as-pdf-pdfcrowd-custom-image-h" name="save-as-pdf-pdfcrowd[button_image]" value="custom_html" <?php checked( $button_image, "custom_html" ); ?> autocomplete="off" />
                            Custom HTML
                            <br/>
                            <textarea class="save-as-pdf-pdfcrowd-text-for-radio" id="save-as-pdf-pdfcrowd-custom-html" name="save-as-pdf-pdfcrowd[button_custom_html]" rows=5 style='margin-left: 2em' cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php echo($button_custom_html); ?></textarea>
                            <p class='save-as-pdf-pdfcrowd-devi'>
                                Shortcode & function parameter: "<strong>button_custom_html</strong>"
                            </p>
                            <div class='save-as-pdf-pdfcrowd-m-description' style='padding-left: 2em'>
                                <p class='description'>
                                    Examples:
                                    <ul>
                                        <li>
                                            &lt;div style='width: 20pt; height: 20pt; background-color: red;'&gt;PDF&lt;/div&gt;
                                        </li>
                                        <li>
                                            &lt;svg style='width: 20pt; height: 20pt;'&gt;&lt;rect style='fill:red;inline-size:20px;block-size:20px;' /&gt;&lt;/svg&gt;
                                        </li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        </label>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-button-image-width">
                        Button Image Width
                    </label>
                </th>
                <td>
                    <input type="number" class="small-text" min="6" id="save-as-pdf-pdfcrowd-button-image-width" name="save-as-pdf-pdfcrowd[button_image_width]" value="<?php echo $button_image_width ?>" autocomplete="off" />px
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_image_width</strong>"<br>Possible values: any numeric value
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
                    <input type="number" class="small-text" min="6" id="save-as-pdf-pdfcrowd-button-image-height" name="save-as-pdf-pdfcrowd[button_image_height]" value="<?php echo $button_image_height ?>" autocomplete="off" />px
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_image_height</strong>"<br>Possible values: any numeric value
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
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-button-text" name="save-as-pdf-pdfcrowd[button_text]" value="<?php echo($button_text);?>" placeholder="<?php esc_attr_e('Your text', $this->plugin_name);?>" autocomplete="off" />
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_text</strong>"
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    Button Text Translation
                </th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span>Button Translation</span>
                        </legend>
                        <label for="save-as-pdf-pdfcrowd-button-translation-">
                            <input type="radio" id="save-as-pdf-pdfcrowd-button-translation-" name="save-as-pdf-pdfcrowd[button_translation]" value="" <?php checked($button_translation, ""); ?> autocomplete="off" />
                            No translation
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-button-translation-auto">
                            <input type="radio" id="save-as-pdf-pdfcrowd-button-translation-auto" name="save-as-pdf-pdfcrowd[button_translation]" value="auto" <?php checked($button_translation, "auto"); ?> autocomplete="off" />
                            Automatic - look up in your internationalization files
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-button-translation-domain">
                            <input type="radio" id="save-as-pdf-pdfcrowd-button-translation-domain" name="save-as-pdf-pdfcrowd[button_translation]" value="domain" <?php checked($button_translation, "domain"); ?> autocomplete="off" />
                            Look up in the <a href="https://developer.wordpress.org/themes/functionality/internationalization/#text-domain">text domain</a>
                            <input type="text" class="regular-text save-as-pdf-pdfcrowd-text-for-radio" name="save-as-pdf-pdfcrowd[button_translation_domain]" value="<?php echo($button_translation_domain);?>" placeholder="<?php esc_attr_e('default, the slug of your theme or plugin', $this->plugin_name);?>" autocomplete="off" />
                            <div class="save-as-pdf-pdfcrowd-m-description" style="padding-left: 2em">
                                <p class='save-as-pdf-pdfcrowd-devi'>
                                    Shortcode & function parameter: "<strong>button_translation_domain</strong>"<br>Possible values: "default", the slug of your theme or plugin
                                </p>
                            </div>
                        </label><br>
                    </fieldset>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_translation</strong>"<br>Possible values: "", "auto", "domain"
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
                        <label for="save-as-pdf-pdfcrowd-Icon on the left and text">
                            <input type="radio" id="save-as-pdf-pdfcrowd-Icon on the left and text" name="save-as-pdf-pdfcrowd[button_format]" value="image-text" <?php checked( $button_format, "image-text" ); ?> autocomplete="off" />
                            Icon on the left and text
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-Text on the left and icon">
                            <input type="radio" id="save-as-pdf-pdfcrowd-Text on the left and icon" name="save-as-pdf-pdfcrowd[button_format]" value="text-image" <?php checked( $button_format, "text-image" ); ?> autocomplete="off" />
                            Text on the left and icon
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-Icon only">
                            <input type="radio" id="save-as-pdf-pdfcrowd-Icon only" name="save-as-pdf-pdfcrowd[button_format]" value="image" <?php checked( $button_format, "image" ); ?> autocomplete="off" />
                            Icon only
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-Text only">
                            <input type="radio" id="save-as-pdf-pdfcrowd-Text only" name="save-as-pdf-pdfcrowd[button_format]" value="text" <?php checked( $button_format, "text" ); ?> autocomplete="off" />
                            Text only
                        </label><br>
                    </fieldset>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_format</strong>"<br>Possible values: "image-text", "text-image", "image", "text"
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="save-as-pdf-pdfcrowd-button-id">
                        Button Id
                    </label>
                </th>
                <td>
                    <input type="text" class="regular-text" id="save-as-pdf-pdfcrowd-button-id" name="save-as-pdf-pdfcrowd[button_id]" value="<?php echo($button_id);?>" placeholder="<?php esc_attr_e('Your id for the button', $this->plugin_name);?>" autocomplete="off">
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_id</strong>"
                    </p>
                    <p class='description'>
                        It is useful for custom button styling of JavaScript event handler.
                    </p>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="save-as-pdf-pdfcrowd-button-html-hidden">
                        Hide Button in HTML
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-pdf-pdfcrowd-button-html-hidden" name="save-as-pdf-pdfcrowd[button_html_hidden]" value="1" <?php checked( $button_html_hidden, 1 ); ?> autocomplete="off">
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_html_hidden</strong>"<br>Possible values: 0, 1
                    </p>
                    <p class='description'>
                        It is useful together with Button Id for triggering a conversion from your JavaScript.
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    <hr/>
    <h2>Conversion in Progress Indicator</h2>
    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    Type
                </th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span>Indicator Type</span>
                        </legend>
                        <label>
                            <input type="radio" name="save-as-pdf-pdfcrowd[button_indicator]" value="ellipsis" <?php checked( $button_indicator, "ellipsis" ); ?> autocomplete="off" />
                            Ellipsis
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="save-as-pdf-pdfcrowd[button_indicator]" value="ring" <?php checked( $button_indicator, "ring" ); ?> autocomplete="off" />
                            Ring
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="save-as-pdf-pdfcrowd[button_indicator]" value="dualRing" <?php checked( $button_indicator, "dualRing" ); ?> autocomplete="off" />
                            Dual ring
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="save-as-pdf-pdfcrowd[button_indicator]" value="html" <?php checked( $button_indicator, "html" ); ?> autocomplete="off" />
                            Custom HTML
                            <br>
                            <textarea class="save-as-pdf-pdfcrowd-text-for-radio" id="save-as-pdf-pdfcrowd-custom-indicator-html" name="save-as-pdf-pdfcrowd[button_indicator_html]" rows=3 style='margin-left: 2em' cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php echo(esc_html($button_indicator_html));?></textarea>
                            <div style="padding-left: 2em;">
                                <p class='save-as-pdf-pdfcrowd-devi'>
                                    Shortcode & function parameter: "<strong>button_indicator_html</strong>"<br>Possible values: your HTML code
                                </p>
                            </div>
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="save-as-pdf-pdfcrowd[button_indicator]" value="custom" <?php checked( $button_indicator, "custom" ); ?> autocomplete="off" />
                            Custom function
                            <input type="text" class="regular-text save-as-pdf-pdfcrowd-text-for-radio" id="save-as-pdf-pdfcrowd-button-custom-indicator" name="save-as-pdf-pdfcrowd[button_custom_indicator]" value="<?php echo($button_custom_indicator);?>" placeholder="<?php esc_attr_e('Your JavaScript function name', $this->plugin_name);?>" autocomplete="off" />
                            <div class="save-as-pdf-pdfcrowd-m-description" style="padding-left: 2em">
                                <p class='save-as-pdf-pdfcrowd-devi'>
                                    Shortcode & function parameter: "<strong>button_custom_indicator</strong>"<br>Possible values: your JavaScript function name
                                </p>
                                <p class="description">
                                    The name of the function which will handle the appearance of the conversion indicator. The function must accept 2 parameters:
                                </p>
                                <ul>
                                    <li>isStart - true if the conversion has started, false if it has finished</li>
                                    <li>button - an HTML element representing the pressed button</li>
                                </ul>
                                <p class="description" style="">
                                    Example:
                                </p>
                                <pre>function mySaveAsPDFPdfcrowdIndicator(isStart, button) {
    if(isStart) {
        button.textContent = 'running....';
        button.style.border = '4px dotted red';
        document.body.style.cursor = 'wait';
    } else {
        button.textContent = 'finished';
        button.style.border = '';
        document.body.style.cursor = 'auto';
    }
}</pre>
                            </div>
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="save-as-pdf-pdfcrowd[button_indicator]" value="" <?php checked( $button_indicator, "" ); ?> autocomplete="off" />
                            No indicator
                        </label>
                        <br>
                    </fieldset>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_indicator</strong>"<br>Possible values: "ellipsis", "ring", "dualRing", "html", "custom", ""
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
                    <option value="inline" <?php selected($button_position, 'inline');?>>inline</option>
                    </select>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_position</strong>"<br>Possible values: "below", "above", "left", "right", "inline"
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
                        Shortcode & function parameter: "<strong>button_alignment</strong>"<br>Possible values: "", "start", "center", "left", "right", "end"
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
                                Top <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-margin-top" name="save-as-pdf-pdfcrowd[button_margin_top]" value="<?php echo $button_margin_top ?>" autocomplete="off" />px
                            </td>
                            <td>
                                Right <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-margin-right" name="save-as-pdf-pdfcrowd[button_margin_right]" value="<?php echo $button_margin_right ?>" autocomplete="off" />px
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Bottom <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-margin-bottom" name="save-as-pdf-pdfcrowd[button_margin_bottom]" value="<?php echo $button_margin_bottom ?>" autocomplete="off" />px
                            </td>
                            <td>
                                Left <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-margin-left" name="save-as-pdf-pdfcrowd[button_margin_left]" value="<?php echo $button_margin_left ?>" autocomplete="off" />px
                            </td>
                        </tr>
                    </table>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_margin_left", "button_margin_right", "button_margin_top", "button_margin_bottom</strong>"<br>Possible values: any numeric value
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
                            <input type="radio" id="save-as-pdf-pdfcrowd-st-theme" name="save-as-pdf-pdfcrowd[button_styling]" value="theme" <?php checked( $button_styling, "theme" ); ?> autocomplete="off" />
                            Defined by your theme
                        </label><br>
                        <label for="save-as-pdf-pdfcrowd-st-custom">
                            <input type="radio" id="save-as-pdf-pdfcrowd-st-custom" name="save-as-pdf-pdfcrowd[button_styling]" value="custom" <?php checked( $button_styling, "custom" ); ?> autocomplete="off" />
                            Custom
                        </label>
                    </fieldset>
                    <p class='save-as-pdf-pdfcrowd-devi'>
                        Shortcode & function parameter: "<strong>button_styling</strong>"<br>Possible values: "theme", "custom"
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
                        <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-text-size" name="save-as-pdf-pdfcrowd[button_text_size]" value="<?php echo $button_text_size ?>" autocomplete="off" />px
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>button_text_size</strong>"<br>Possible values: any numeric value
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
                            Shortcode & function parameter: "<strong>button_text_weight</strong>"<br>Possible values: any CSS font-weight
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
                        <input type="text" class="save-as-pdf-pdfcrowd-color-field" id="save-as-pdf-pdfcrowd-button-text-color" name="save-as-pdf-pdfcrowd[button_text_color]" value="<?php echo $button_text_color;?>" data-default-color="#fff" autocomplete="off" />
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>button_text_color</strong>"<br>Possible values: any HTML color code
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
                        <input type="text" class="save-as-pdf-pdfcrowd-color-field" id="save-as-pdf-pdfcrowd-button-background-color" name="save-as-pdf-pdfcrowd[button_background_color]" value="<?php echo($button_background_color);?>" data-default-color="#007bff" autocomplete="off" />
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>button_background_color</strong>"<br>Possible values: any HTML color code
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
                        <input type="text" class="save-as-pdf-pdfcrowd-color-field" id="save-as-pdf-pdfcrowd-button-border-color" name="save-as-pdf-pdfcrowd[button_border_color]" value="<?php echo($button_border_color);?>" data-default-color="#007bff" autocomplete="off" />
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>button_border_color</strong>"<br>Possible values: any HTML color code
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
                            Shortcode & function parameter: "<strong>button_border_style</strong>"<br>Possible values: "dotted", "dashed", "solid", "double", "groove", "ridge", "inset", "outset", "none", "hidden"
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
                        <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-border-width" name="save-as-pdf-pdfcrowd[button_border_width]" value="<?php echo $button_border_width ?>" autocomplete="off" />px
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>button_border_width</strong>"<br>Possible values: any numeric value
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
                                    Top <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-padding-top" name="save-as-pdf-pdfcrowd[button_padding_top]" value="<?php echo $button_padding_top ?>" autocomplete="off" />px
                                </td>
                                <td>
                                    Right <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-padding-right" name="save-as-pdf-pdfcrowd[button_padding_right]" value="<?php echo $button_padding_right ?>" autocomplete="off" />px
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Bottom <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-padding-bottom" name="save-as-pdf-pdfcrowd[button_padding_bottom]" value="<?php echo $button_padding_bottom ?>" autocomplete="off" />px
                                </td>
                                <td>
                                    Left <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-padding-left" name="save-as-pdf-pdfcrowd[button_padding_left]" value="<?php echo $button_padding_left ?>" autocomplete="off" />px
                                </td>
                            </tr>
                        </table>
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>button_padding_left", "button_padding_right", "button_padding_top", "button_padding_bottom</strong>"<br>Possible values: any numeric value
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
                        <input type="number" class="small-text" min="0" id="save-as-pdf-pdfcrowd-button-radius" name="save-as-pdf-pdfcrowd[button_radius]" value="<?php echo $button_radius ?>" autocomplete="off" />px
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>button_radius</strong>"<br>Possible values: any numeric value
                        </p>
                    </td>
                </tr>
                <tr>
                    <th>
                        Change on Mouse Over
                    </th>
                    <td>
                        <input type="checkbox" id="save-as-pdf-pdfcrowd-button-hover" name="save-as-pdf-pdfcrowd[button_hover]" value="1" <?php checked( $button_hover, 1 ); ?> autocomplete="off" />
                        <p class='save-as-pdf-pdfcrowd-devi'>
                            Shortcode & function parameter: "<strong>button_hover</strong>"<br>Possible values: 0, 1
                        </p>
                        <p class='description'>
                            The mouse over default style may be altered by CSS, e.g.
                            <pre>
.save-as-pdf-pdfcrowd-button-hover, .save-as-pdf-pdfcrowd-has-indicator-func:hover {
    filter: invert(100%) !important;
}</pre>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>

        <hr/>
        <h3>Button Quick Preview</h3>
        <div id='save-as-pdf-pdfcrowd-button-preview-content'>
        </div>
        <div style='clear: both'>
            Tip: click on the conversion button to see the conversion idicator preview
        </div>
        <hr/>
    </div>
</div>
