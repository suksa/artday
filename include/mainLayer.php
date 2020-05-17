<div class="main_layer_popup popup1">
    <div class="content">
        <div class="title">배송정책 안내</div>
        <p>2020년 4월부터 낙찰작품 배송정책이 변경되었습니다.</p>
        <p>배송료에 대한 보다 자세한 내용은 각 작품의 상세 설명 페이지에서 확인할 수 있습니다.</p>
    </div>
    <div class="under">
        <label for="same1">
            <input type="checkbox" id="same1"> 오늘은 그만보기
        </label>
        <button class="closed">닫기</button>
    </div>
</div>

<script>
    $(function() {
        $('.main_layer_popup').each(function(i, e) {
            var name = e.classList[1]
            if (!$.cookie(name)) {
                $('.'+name).show(0)
            }
        })
    })
    $(document).on('click', '.main_layer_popup .closed', function() {
        if ($(this).prev().children('input').is(':checked')) {
            var name = $(this).parents('.main_layer_popup')[0].classList[1]
            $.cookie(name, 1, {expires: 1})
        }
        $(this).parents('.main_layer_popup').hide(0)
    })
</script>