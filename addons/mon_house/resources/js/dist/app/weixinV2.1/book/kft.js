define("app/weixinV2.1/book/kft", ["gallery/zepto/1.1.3/zepto", "app/weixinV2.1/book/utilities", "app/weixinV2.1/book/language"], function (a) {
    var b = a("gallery/zepto/1.1.3/zepto"), c = a("app/weixinV2.1/book/utilities"), d = a("app/weixinV2.1/book/language");
    b(function () {
        function a() {
            var a = b.trim(m.val()), c = b.trim(n.val()), e = /^1[3|4|5|7|8][0-9]\d{8}$/;
            return a ? c && !isNaN(c) && e.test(c) ? (f(), !1) : (g(d.invalidPhoneNumber), !1) : (g(d.invalideName), !1)
        }

        function e() {
            return b("#succ").hide(), b("#mobileModal").hide(), !1
        }

        function f() {


            b.ajax({
                type: "post",
                dataType: "json",
                url: b("#kft_form").attr("action"),
                data: b("#kft_form").serialize(),
                success: function (a) {
                    "succ" === a.result ? (h(), i()) : g(a.info)
                },
                error: function () {
                }
            })




        }

        function g(a) {

            return c.showErrorMessage(a), !1
        }

        function h() {
            k.find(".ybgfu").show()
        }

        function i() {
            m.val(""), n.val("")
        }

        var j = b("#kft_form"), k = j.parent(), l = j.find(".sBtn01Box"), m = j.find("#name"), n = j.find("#mobile"), o = k.find(".guan");
        l.on("click", a), o.on("click", e)
    })
});