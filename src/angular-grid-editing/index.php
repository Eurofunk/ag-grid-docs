<?php
$key = "Editing";
$pageTitle = "AngularJS Angular Grid Editing";
$pageDescription = "AngularJS Angular Grid Editing";
$pageKeyboards = "AngularJS Angular Grid Editing";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h2>Editing</h2>

    <p>
        You have two options for editing, one is use the default built-in editor (easy but limited),
        or bake your own custom cell editors (powerful but more difficult).
    </p>

    <div class="bigTitle">Default Editing</div>

    <p>
        ag-Grid provides functionality for editing text values out of the box. To enable
        editing for a column, set the value 'editable' to 'true' in the column definition.
    </p>

    <p>
        By default, the grid will treat values as string values, and update the row with the
        new string.
    </p>

    <h4>Callback: New Value Handlers</h4>

    <p>
        If you want to use the simple text editing, but want to format the result in some way
        before inserting into the row, then you can provide a <i>newValueHandler</i> to the column.
        This will allow you to add additional validation or conversation to the value. The example
        below shows the newValueHandler in action in the 'Upper Case Only' column.
    </p>

    <p>
        newValueHandler is provided a params object with attributes:<br/>
        <b>node: </b>The grid node in question.<br/>
        <b>data: </b>The row data in question.<br/>
        <b>oldValue: </b>If 'field' is in the column definition, contains the value in the data before the edit.<br/>
        <b>newValue: </b>The string value entered into the default editor.<br/>
        <b>rowIndex: </b>The index of the virtualised row.<br/>
        <b>colDef: </b>The column definition.<br/>
        <b>context: </b>The context as set in the gridOptions.<br/>
        <b>api: </b>A reference to the ag-Grid API.<br/>
    </p>

    <h4>Callback: Cell Value Changed</h4>

    <p>
        After a cell has been changed with default editing (ie not your own custom cell renderer),
        then <i>onCellValueChanged</i>, if provided, is called on the column def. This is used if
        your application needs to do something after a value has been changed.
    </p>
    <p>
        onCellValueChanged is provided with the same parameters as newValueHandler with one difference,
        the <i>newValue</i>. If 'field' is in the column definition, the newValue contains the value
        in the data after the edit. So for example, if the onCellValueChanged converts the provided
        string value into a number, then newValue for newValueHandler will have the string, and
        newValue for onCellValueChanged will have the number.
    </p>

    <div class="bigTitle">Custom Editing</div>

    <p>
        For more details editing, beyond a simple text editor, you need to provide the cell
        editing yourself (in which case, do not set 'editable' to true for the column, as
        your renderer will do the editing).
    </p>

    <h4>Example</h4>

    <p>
        The example below shows editing in the following ways:
    </p>

    <table class="table">
        <tr>
            <th>Column</th>
            <th>Description</th>
        </tr>
        <tr>
            <th>Default String</th>
            <td>No custom editing or handling, allows the grid to manage the editing
                using simple strings.</td>
        </tr>
        <tr>
            <th>Upper Case Only</th>
            <td>Allows the grid to manage the editing, however a custom newValueHandler is
                used to make the text upper case before attaching to the row.</td>
        </tr>
        <tr>
            <th>Number</th>
            <td>Allows the grid to manage the editing, however a custom 'new value handler'
                is used to convert the string to a number before attaching to the row.</td>
        </tr>
        <tr>
            <th>Custom</th>
            <td>Custom editing. The cellRenderer provides a drop down selection.</td>
        </tr>
    </table>

    <show-example example="example1"></show-example>

    <h4>Advanced Pop Editing</h4>

    <p>
        If you need an advanced popup for editing (for example, providing a complex user search), then
        you will soon realise that the cell renderer is restricted to the cell, overflow will be clipped.
        To get around this, have the cell renderer create a GUI widget who's parent is outside the table,
        and hence not restricted by the cell bounding box. The renderer can work out the best place to
        display the popup using the screen coordinates of the cell.
    </p>

</div>

<?php include '../documentation-main/documentation_footer.php';?>
