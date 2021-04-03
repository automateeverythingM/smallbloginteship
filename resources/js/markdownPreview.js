import marked from "marked";

(function () {
    const value = $("#blog_body").attr("data-blog");
    if (value) $("#blog_body").append(marked(value));
})();
