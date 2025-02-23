(
    document.querySelectorAll("[toast-list]")||document.querySelectorAll("[data-choices]")||document.querySelectorAll("[data-provider]"))&&(document.writeln("<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/toastify-js'><\/script>"),
    document.writeln(`<script type='text/javascript' src='${PATH_ROOT}/assets/libs/choices.js/public/assets/scripts/choices.min.js'><\/script>`),
    document.writeln(`<script type='text/javascript' src='${PATH_ROOT}/assets/libs/flatpickr/flatpickr.min.js'><\/script>`)
);
$(document).ready(function(){
    // Khởi tạo Isotope
    var $grid = $('#product-grid').isotope({
        itemSelector: '.product-item',
        layoutMode: 'fitRows'
    });

    // Bắt sự kiện click vào nút lọc
    $('.filter-btns button').on('click', function(){
        $('.filter-btns button').removeClass('active');
        $(this).addClass('active');
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });
});