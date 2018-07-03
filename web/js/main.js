var agreeEmail = '';
var agreeName = '';
var agreeINN = '';
var agreeOGRN = '';
var agreeAdres = '';
//--form
    var $popUpForm = $('.form_callBack');
    var $popUpBtn = $('.callback__button');
    var $form = $('.form');
    var $personalPopUp = $('.persPopUp');
    var $closeForm;

    agre = new AgreAddCompInfo(agreeName, agreeEmail);
    agre.addInnOgrn(agreeINN+agreeOGRN?','+agreeOGRN:'');
    agre.addAdres(agreeAdres);
    var checkbox;

    $('.form_check').on('click', function () {
        if ($('div').is('#agre')) {
            $('#agre').remove()
        }
        var id = $(this).data('id');
        agre.render(id);
        checkbox = id;
    });

    $form.on('click', '.btn_agre', function (e) {
        e.preventDefault();
        var id = $(this).attr('id');
        var check;
        if (id === 'agre_ok') {
            check = true;
        } else if (id === 'agre_no') {
            check = false;
        }
        $(checkbox + ' ' + '.form_check').prop('checked', check);
        $('#agre').remove()
    });

    $personalPopUp.on('click', function () {
        var openForm = $(this).data('action');
        $closeForm = $(openForm);
        $(openForm).show('fade', 400).addClass('panel-open');
        $('.page').addClass('panel-open');
        return false;
    });
    $popUpBtn.on('click', function () {
        $closeForm = $popUpForm;
        $popUpForm.show('fade', 400).addClass('panel-open');
        $('.page').addClass('panel-open');
        return false;
    });
    $('.close').on('click', function () {
        $closeForm.css('display', 'none');
        $('.page').removeClass('panel-open')
    });

    $(document).on('click', function (event) {
        if ($(event.target).closest(".noneClose").length
            || $(event.target).closest("#mess_block").length
            || !$(event.target).hasClass('panel-open')) {
            return;
        }
        $closeForm.find('.close').trigger('click');
        $('#ok').trigger('click');
        event.stopPropagation();
    });
//--ajax
    $.fn.runAjax = function () {
        var form_data = $(this).serialize();
        var $clear = $(this).find('.clear');
        $('.loadMask').css('display', 'flex');

        $.ajax({
            type: "POST",
            url: "send.php",
            data: form_data,
            dataType: 'json',
            error: function () {
                $('.loadMask').hide();
                popup = false;
                $('#mess').html('Что то пошло не так, попробуйте повторить позже');
                $('#mess_block').css('display', 'flex');
                $('.page').addClass('panel-open');
            },
            success: function (data) {
                $('.loadMask').hide();
                if (data.res) {
                    $clear.val('');
                    popup = false;
                } else if (close) {
                    $popUpBtn.trigger('click');
                }
                $('#mess').html(data.mess);
                $('#mess_block').css('display', 'flex');
                $('.page').addClass('panel-open')
            }
        })
    };

    var id;
    var close;
    var popup = false;

    function closeForm() {
        $('.close').trigger('click');
        load = false;
        popup = true;
    }

    $form.on('submit', function (event) {
        event.preventDefault();
        id = $(this).find('.btn_form').data('id');
        close = !!($(this).find('.btn_form').data('close'));
        checkbox = id;

        if ($(checkbox + ' ' + '.form_check').prop('checked')) {
            if (close) {
                closeForm();
            } else {
                popup = false;
            }
            $(this).runAjax();
        }
        else {
            agre.render(id);
            $('#agre_ok').addClass('preSubmit');
            $('.preSubmit').on('click', function () {
                $(this).removeClass('preSubmit');
                $(checkbox + ' ' + '.form_check').prop('checked', true);
                if (close) closeForm();
                $(id + '_form').runAjax();
            })
        }
    });

    $('.formStandart').on('submit', function (event) {
        event.preventDefault();
        close = !!($(this).find('.btn_form').data('close'));
        load = true;
        popup = false;
        form_data = $(this).serialize();
        $(this).runAjax();
    });

    $('#ok').click(function () {
        $('#mess_block').css('display', 'none');
        if (!popup) $('.page').removeClass('panel-open')
    });

$(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
        $('#buttonUp').fadeIn().addClass('active');
    } else {
        $('#buttonUp').fadeOut().removeClass('active');
    }
});

$('#buttonUp').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
    return false;
});

//Галерея документов
// var popUpLink = jQuery('.image-popup-no-margins');

// popUpLink.each(function () {
//     var paths = (jQuery(this).attr('href'));
//     jQuery('<img />').attr("src", paths);
// });


// popUpLink.magnificPopup({
//     type: 'image',
//     closeOnContentClick: true,
//     closeBtnInside: false,
//     fixedContentPos: true,
//     mainClass: 'mfp-no-margins mfp-with-zoom',
//     image: {
//         verticalFit: true
//     },
//     zoom: {
//         enabled: true,
//         duration: 300
//     }
// });

slide();

$('.news__karuselWrap').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: '<button class="navBtn prev slick-arrow" type="button">&larr;</button>',
    nextArrow: '<button class="navBtn next slick-arrow" type="button">→</button>',
    appendArrows: $('.newsNavWrap'),
    responsive:[
        {
            breakpoint: 1199.98,
            settings:{
                slidesToShow: 2
            }
        },
        {
            breakpoint: 767.98,
            settings:{
                slidesToShow: 1
            }
        }
    ]
});
$('#course_select').on('change', function () {
    $('.courseTiming').removeClass('active');
    $($('#course_select').val()).addClass('active')
});
