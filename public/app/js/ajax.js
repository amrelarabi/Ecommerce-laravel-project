$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function rateStar(event, e) {
    event.preventDefault();
    rate = $(e).data('rate');
    product = $(e).data('product');
    $.ajax({
        type:'post',
        url:'/rate',
        data: {id: product, rate: rate},
        success:function(data) {
            if(data.success){
                toastr.success(data.success);
            }
            if(data.info){
                toastr.info(data.info);
            }
        }
    });
}