$('.dataTables-example').DataTable({
    pageLength: 10,
    responsive: true
});

$(".delivery_table").on('click', '.action_button', function () {
    var temp_this = $(this);
    var action_for = $(this).data('action_for');
    var id_customer = $(this).data('id_customer');
    var action_url = $(this).data('action_url');

    $.ajax({
        type: "POST",
        url: action_url,
        beforeSend: function () {
            temp_this.attr('disabled', 'disabled');
        },
        data: {
            action_for: action_for,
            id_customer: id_customer
        },
        success: function (data) {
            temp_this.removeAttr('disabled', 'disabled');

            if (action_for === 'present') {
                $(".delivery_table .present_count_span_" + id_customer).text(data);
            } else if (action_for === 'absent') {
                $(".delivery_table .absent_count_span_" + id_customer).text(data);
            } else if (action_for === 'repeat') {
                $(".delivery_table .repeat_count_span_" + id_customer).text(data);
            } else if (action_for === 'return_empty') {
                $(".delivery_table .return_empty_count_span_" + id_customer).text(data);
            }
        }
    });
});

$(".delivery_table").on('click', '.reset_count', function () {
    var temp_this = $(this);
    var action_for = $(this).data('action_for');
    var id_customer = $(this).data('id_customer');
    var action_url = $(this).data('action_url');

    $.ajax({
        type: "POST",
        url: action_url,
        beforeSend: function () {
            temp_this.attr('disabled', 'disabled');
        },
        data: {
            action_for: action_for,
            id_customer: id_customer
        },
        success: function (data) {
            temp_this.removeAttr('disabled', 'disabled');

            if (action_for === 'present') {
                $(".delivery_table .present_count_span_" + id_customer).text(data);
            } else if (action_for === 'absent') {
                $(".delivery_table .absent_count_span_" + id_customer).text(data);
            } else if (action_for === 'repeat') {
                $(".delivery_table .repeat_count_span_" + id_customer).text(data);
            } else if (action_for === 'return_empty') {
                $(".delivery_table .return_empty_count_span_" + id_customer).text(data);
            }
        }
    });
});