<script>
    $(document).on('click', '.delete-row', function (e) {
        console.log($(this).data('url'));
        e.preventDefault()
        var _token = $("meta[name='csrf-token']").attr("content");
        Swal.fire({
            title: "{{__('هل تريد الاستمرار ؟')}}",
            text: "{{__('هل انت متأكد انك تريد استكمال عملية الحذف')}}",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "{{__('siteTrans.confirm')}}",
            confirmButtonClass: 'btn btn-primary',
            cancelButtonText: "{{__('siteTrans.cancel')}}",
            cancelButtonClass: 'btn btn-danger ml-1',
            buttonsStyling: false,
        }).then((result) => {
            if (result.isConfirmed) {
                console.log(_token);
                $.ajax({
                    type: "delete",
                    url: $(this).data('url'),
                    data: {
                        _token: _token
                    },
                    dataType: "json",
                    success: (response) => {
                        Swal.fire(
                            {
                                position: 'top-start',
                                type: 'success',
                                title: "{{__('siteTrans.deleted_successfully')}}",
                                showConfirmButton: false,
                                timer: 1500,
                                confirmButtonClass: 'btn btn-primary',
                                buttonsStyling: false,
                            })
                        // toastr.error()
                        $(this).closest('td').parent('tr').remove().draw();
                    }
                });
            }
        })

    });

    $(document).on('click', '.delete-ob', function (e) {
        console.log($(this).data('url'));
        e.preventDefault()
        var _token = $("meta[name='csrf-token']").attr("content");
        Swal.fire({
            title: "{{__('هل تريد الاستمرار ؟')}}",
            text: "{{__('هل انت متأكد انك تريد استكمال عملية الحذف')}}",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "{{__('siteTrans.confirm')}}",
            confirmButtonClass: 'btn btn-primary',
            cancelButtonText: "{{__('siteTrans.cancel')}}",
            cancelButtonClass: 'btn btn-danger ml-1',
            buttonsStyling: false,
        }).then((result) => {
            if (result) {
                console.log(_token);
                $.ajax({
                    type: "delete",
                    url: $(this).data('url'),
                    data: {
                        _token: _token
                    },
                    dataType: "json",
                    success: (response) => {
                        Swal.fire(
                            {
                                position: 'top-start',
                                type: 'success',
                                title: "{{__('siteTrans.deleted_successfully')}}",
                                showConfirmButton: false,
                                timer: 1500,
                                confirmButtonClass: 'btn btn-primary',
                                buttonsStyling: false,
                            })
                        // toastr.error()
                        $(this).closest('.targetOb').remove().draw();
                    }
                });
            }
        })

    });

    // FQS
    $(document).on('click', '.delete-fqsRow', function (e) {
        console.log($(this).data('url'));
        e.preventDefault()
        var _token = $("meta[name='csrf-token']").attr("content");
        Swal.fire({
            title: "{{__('هل تريد الاستمرار ؟')}}",
            text: "{{__('هل انت متأكد انك تريد استكمال عملية الحذف')}}",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "{{__('siteTrans.confirm')}}",
            confirmButtonClass: 'btn btn-primary',
            cancelButtonText: "{{__('siteTrans.cancel')}}",
            cancelButtonClass: 'btn btn-danger ml-1',
            buttonsStyling: false,
        }).then((result) => {
            if (result.isConfirmed) {
                console.log(_token);
                $.ajax({
                    type: "delete",
                    url: $(this).data('url'),
                    data: {
                        _token: _token
                    },
                    dataType: "json",
                    success: (response) => {
                        Swal.fire(
                            {
                                position: 'top-start',
                                type: 'success',
                                title: "{{__('siteTrans.deleted_successfully')}}",
                                showConfirmButton: false,
                                timer: 1500,
                                confirmButtonClass: 'btn btn-primary',
                                buttonsStyling: false,
                            })
                        // toastr.error()
                        $(this).closest('.deletedFqsRow').remove().draw();
                    }
                });
            }
        })

    });


</script>
