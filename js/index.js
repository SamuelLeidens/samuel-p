$(".btn").tooltip({
    content: function() {
        return "Tool Tip Content";
    }
});

$(function() {
    $(".btn").button();
    $("[type=button]").buttonset();
});
