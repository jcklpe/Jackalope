! function() {
    "use strict";

    function e(e) {
        (console.error ? console.error : console.log).call(console, e)
    }

    function r(e) {
        return l.innerHTML = '<a href="' + e.replace(/"/g, "&quot;") + '"></a>', l.childNodes[0].getAttribute("href") || ""
    }

    function t(e, r) {
        var t = e.substr(r, 2);
        return parseInt(t, 16)
    }

    function n(e, n) {
        for (var o = "", c = t(e, n), a = n + 2; a < e.length; a += 2) {
            var l = t(e, a) ^ c;
            o += String.fromCharCode(l)
        }
        return r(o)
    }
    var o = "/cdn-cgi/l/email-protection#",
        c = ".__cf_email__",
        a = "data-cfemail",
        l = document.createElement("div");
    ! function() {
        for (var r = document.getElementsByTagName("a"), t = 0; t < r.length; t++) try {
            var c = r[t],
                a = c.href.indexOf(o);
            a > -1 && (c.href = "mailto:" + n(c.href, a + o.length))
        } catch (r) {
            e(r)
        }
    }(),
        function() {
            for (var r = document.querySelectorAll(c), t = 0; t < r.length; t++) try {
                var o = r[t],
                    l = o.parentNode,
                    i = o.getAttribute(a);
                if (i) {
                    var f = n(i, 0),
                        u = document.createTextNode(f);
                    l.replaceChild(u, o)
                }
            } catch (r) {
                e(r)
            }
        }()
}();