var mobiMenuFlag = false

function openMobiMenu() {
    $('.header').addClass('mobile_menu_on')
    $('.header .white_bg').show(300)
    $('html, body').addClass('mobile_scroll_disbled')
    mobiMenuFlag = true
}

function closedMobiMenu() {
    $('.header').removeClass('mobile_menu_on')
    $('.header .white_bg').hide(300)
    $('html, body').removeClass('mobile_scroll_disbled')
    mobiMenuFlag = false
}

function layer_on(file) {
    $('.common_layer_field').html('')
    $('.common_layer_field').load('/include/'+file+'.php')
}

function layer_off() {
    $('.common_layer_field').html('')
}

function headWrapperResize() {
    $('.head_wrapper').css('height', $(window).height())
}

$(document).on('click', '.common_layer', function(e) {
    var is_bg = e.target.className.indexOf('common_layer') > -1
    if (is_bg) {
        $('.common_layer_field').html('')
    }
})

$(function() {
    $(document).on('click', '.mobile_menu_btn', function() {
        if (!mobiMenuFlag)  openMobiMenu()
        else closedMobiMenu()
    })
    $(document).on('click', '.header .white_bg', function() {
        closedMobiMenu()
    })
    $('#family_site').change(function(e) {
        var value = this.value
        if (!value) return
        window.open(value, '_blank')
    })
    headWrapperResize()
})

$(window).resize(function() {
    if (window.innerWidth > 768) {
        closedMobiMenu()
    } else {
        headWrapperResize()
    }
})