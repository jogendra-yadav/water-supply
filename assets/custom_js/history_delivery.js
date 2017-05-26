//$('.dataTables-example').DataTable({
//    pageLength: 10,
//    responsive: true
//});
var history_date = js_data.history_date;

var table = $('.dataTables-example').dataTable({
    "bProcessing": true,
    "bServerSide": true,
    "autoclose": true,
    "sAjaxSource": js_data.url,
    "fnServerParams": function (aoData) {
        aoData.push({"name": "history_date", "value": history_date})
    },
    "aoColumns": [
        {mData: 'Name'},
        {mData: 'Address'},
        {mData: 'Date'},
        {mData: 'Present(P)'},
        {mData: 'Absent(A)'},
        {mData: 'Repeat(R)'},
        {mData: 'Return(L)'}
    ]
});



$('.datepicker').datepicker().on("changeDate", function (e) {
    var temp_history_date = $('.datepicker').val().split('/');
    history_date = temp_history_date[2] + '-' + temp_history_date[1] + '-' + temp_history_date[0];
    table.fnDraw();
});