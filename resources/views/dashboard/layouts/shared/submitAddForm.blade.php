<script>
    $(document).ready(function () {
        $(document).on('submit', '.store', function (e) {
            e.preventDefault();
            var url = $(this).attr('action')
            $.ajax({
                url: url,
                method: 'post',
                data: new FormData($(this)[0]),
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function () {
                    // Show image container
                    $("#preloader").show();
                },
                success: function (response) {
                    console.log(response);
                    toastr.success(response.message);
                    setTimeout(function () {
                        window.location.replace(response.url)
                    }, 1000);
                },
                complete: function (data) {
                    // Hide image container
                    $("#preloader").hide();
                },
                error: function (xhr) {
                    $.each(xhr.responseJSON.errors, function (key, value) {
                        toastr.error(value);
                    });
                },
            });

        });
    });
</script>
