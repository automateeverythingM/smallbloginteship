import SimpleMDE from "simplemde";

const simpleMDE = (function ($) {
    const simpleMDE = new SimpleMDE({ element: $("#markdown")[0] });
    const values = $("#markdown").attr("data-blog");
    if (values) simpleMDE.value(values);
    return simpleMDE;
})(window.$);

function passValueToTextArea(e) {
    $("#markdown").val(simpleMDE.value());
}
