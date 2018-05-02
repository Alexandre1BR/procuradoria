// noinspection BadExpressionStatementJS JSLint
/**
 * Select2
 */

$(() => { // jshint ignore:line
    $(document).ready(function() {
        $('.select2').select2({
            theme: "bootstrap",
            tags: false,
            width: "100%",
            //minimumResultsForSearch: Infinity,
        });

        $('.select2-tag').select2({
            theme: "bootstrap",
            tags: true,
            width: "100%",
        });
    });
})
