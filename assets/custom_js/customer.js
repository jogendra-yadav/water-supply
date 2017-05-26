$('.dataTables-example').DataTable({
    pageLength: 10,
    responsive: true
});

$(".delete_customer_btn").click(function () {
    var temp_this = $(this);
    var post_url = temp_this.attr('path');
    var confirm_status = confirm("Are you sure?");
    if (confirm_status == true) {
        $.ajax({
            type: 'POST',
            url: post_url,
            success: function (data) {
                if (data) {
                    window.location.href = window.location.href;
                }
            }
        });
    }
});