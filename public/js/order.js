var order = {};
order.removeItemCart = function (orderItemId) {
    if (window.confirm('Bạn có muốn xóa sản phẩm này khỏi đơn hàng') == true) {
        $.ajax({
            url: ajaxBase + 'admin/orders/removeProduct',
            method : 'POST',
            dataType : 'json',
            contentType : 'application/x-www-form-urlencoded',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data : {
                orderItemId: orderItemId
            },
            success:function(result){

                window.alert('Xóa sản phẩm thành công');
                location.reload();
            },
            error:function(err){
                alert(err);
            }
        });
    }
}
