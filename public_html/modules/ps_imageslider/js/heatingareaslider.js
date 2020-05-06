jQuery(document).ready(function ($) {
    const min = 0;
    const max = 22;
    const step = 0.5;
    const slider = $("#slider-range_heating_area");

    slider.slider({
        range: true,
        min: min,
        max: max,
        values: [min, max],
        step: step,
        slide: function (event, ui) {
            $("#amount").text(ui.values[0] + ' м.кв. - ' + ui.values[1] + ' м.кв.');
        },
        change: function (event, ui) {
            $("#show-heating").on('click', function () {
                window.location = '/10-tyoplyj-pol?q=Площадь+обогрева-м.кв.-'+ ui.values[0] + '-' + ui.values[1];
            });
        }
    });
    $("#amount").text(slider.slider('values', 0) + ' м.кв. - ' + slider.slider('values', 1) + ' м.кв.');
    $("#show-heating").on('click', function () {
        window.location = '/10-tyoplyj-pol?q=Площадь+обогрева-м.кв.-'+ slider.slider('values', 0) + '-' + slider.slider('values', 1);
    });
    const steps = range(min, max);
    const spans = steps.map(function (step) {
        return $('<span/>').html(step).css({'left': (100 / max * step) + '%'});
    });
    $("#heating-steps").html(spans);
});

function range(start, end) {
    let foo = [];
    for (let i = start; i <= end; i++) {
        foo.push(i);
    }
    return foo;
}