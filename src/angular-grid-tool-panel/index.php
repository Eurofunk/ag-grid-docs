<?php
$key = "Tool Panel";
$pageTitle = "AngularJS Angular Grid Tool Panel";
$pageDescription = "The tool panel allows you to work with the columns at run time, but showing and hiding, and grouping.";
$pageKeyboards = "AngularJS Angular Grid Show Hide Column Tool Panel";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h2>Tool Panel</h2>

    <p>
        <?php include '../enterprise.php';?>
        &nbsp;
        Tool panel is available in ag-Grid Enterprise.
    </p>

    <p>
        The tool panel is where you can change the state of the columns. This includes show / hide, move and group.
    </p>

    <p>
        The tool panel panel can be shown be default by setting 'showToolPanel=true' property,
        or after the grid is initialised by calling the api function showToolPanel(show). You can query if
        the tool panel is showing with the api isToolPanelShowing().
    </p>

    <h4>Suppress Values</h4>

    <p>
        If you don't want to show the values list in the tool panel, set <i><b>toolPanelSuppressValues=true</b></i>
        property. This is useful if you don't want aggregation, or you have provided your own
        aggregation function (which would then not use the values selected here).
    </p>

    <h4>Suppress Group</h4>

    <p>
        If you don't want to show the group row, set <i><b>toolPanelSuppressGroups=true</b></i> property.
        This is used if you just want simple column visibility and reordering functionality
        in the tool panel. Note that hiding the group has the impact of also hiding the values, as it
        doesn't make sense to have values if you are not grouping.
    </p>

    <h3>Tool Panel Actions</h3>

    <h4>Show / Hide Columns</h4>
    <p>
        All columns are visible by default. To hide a column when first displaying the grid, mark
        the column definition with <i>hide = true</i>.
    </p>

    <p>
        To hide a column using the tool panel, click the icon beside the columns name.
    </p>

    <h4>Reorder Columns</h4>
    <p>
        To reorder the columns (either the displayed columns or the groups)
        drag the column to a new location in the list.
    </p>

    <h4>Group by Columns</h4>
    <p>
        To group by a column, drag the column down to the group GUI. The order of the column
        in the group list can be changed by dragging, with the first value been the top most
        group.
    </p>

    <h4>Aggregate Columns</h4>
    <p>
        To mark a column as a value (for aggregation), drag the column down to the value
        GUI. From here you can select the aggregation function (sum, min or max). This
        aggregation function will only work when you are using the default aggregation
        (ie you are not providing your own aggregation function).
    </p>

    <h3>Example</h3>

    <p>
        The example below demonstrates the tool panel. It also shows usage of properties
        <i>suppressRowGroup</i> and <i>suppressAggregation</i> so that the 'number of wins'
        columns cannot be grouped and the other columns cannot be aggregated (as doing
        either of these just wouldn't make sense).
    </p>

    <show-example example="toolPanelExample"></show-example>
</div>

<?php include '../documentation-main/documentation_footer.php';?>
