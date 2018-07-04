$('.main').on('click','.checkAll',function (ev) {
    ev.preventDefault();
    $('.productCheck').each(function () {
        $(this).prop('checked', true);
    })
});

$('.main').on('click','.deleteAll',function (ev) {
    var btn = $(this);
    var arr = [];
    var href = btn.attr('href');
    $('.productCheck').each(function () {
        if($(this).prop('checked')){
            arr.push($(this).val());
            btn.attr('href', href+'?id='+JSON.stringify(arr));
        }
    });
    if(arr.length === 0){
        alert('Необходимо выбрать запись');
        ev.preventDefault();
    }else{
        if(!confirm('Вы уверены, что хотите удалить выбранное?')){
            return false;
        }
    }
});
// $('.main').on('change','#category_list', function () {
//     var id = $(this).val();
//     $.ajax({
//         url: '/admin/product/index',
//         type:'GET',
//         data:{
//             categoryId:id
//         },
//         success:function (data) {
//             $('.product-index').replaceWith(data);
//         }
//     })
// });