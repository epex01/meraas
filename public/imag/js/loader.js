!function (t, e) {
    var n = function (t, e) {
            return t instanceof (e || Array)
        }, r = document, i = r.getElementsByTagName("script"), a = i[i.length - 1],
        s = a.innerHTML.replace(/^\s+|\s+$/g, "");
    if (!t.ljs) {
        var c = a.src.match(/checkLoaded/) ? 1 : 0, l = r.getElementsByTagName("body")[0] || r.documentElement,
            o = function (t) {
                var e = {};
                return e.u = t.replace(/#(=)?([^#]*)?/g, function (t, n, r) {
                    return e[n ? "f" : "i"] = r, ""
                }), e
            }, u = function (t, e, n) {
                var i, a = r.createElement(t);
                n && (a.readyState ? a.onreadystatechange = function () {
                    "loaded" !== a.readyState && "complete" !== a.readyState || (a.onreadystatechange = null, n())
                } : a.onload = n);
                for (i in e) e[i] && (a[i] = e[i]);
                l.appendChild(a)
            }, h = function (t, e) {
                if (this.aliases && this.aliases[t]) {
                    var r = this.aliases[t].slice(0);
                    return n(r) || (r = [r]), e && r.push(e), this.load.apply(this, r)
                }
                if (n(t)) {
                    for (var i = t.length; i--;) this.load(t[i]);
                    return e && t.push(e), this.load.apply(this, t)
                }
                return t.match(/\.css\b/) ? this.loadcss(t, e) : this.loadjs(t, e)
            }, d = {}, f = {
                aliases: {}, loadjs: function (t, e) {
                    var n = o(t);
                    return t = n.u, d[t] === !0 ? (e && e(), this) : void 0 !== d[t] ? (e && (d[t] = function (t, e) {
                        return function () {
                            t && t(), e && e()
                        }
                    }(d[t], e)), this) : (d[t] = function (e) {
                        return function () {
                            d[t] = !0, e && e()
                        }
                    }(e), e = function () {
                        d[t]()
                    }, u("script", {
                        type: "text/javascript", src: t, id: n.i, onerror: function (t) {
                            if (n.f) {
                                var r = t.currentTarget;
                                r.parentNode.removeChild(r), u("script", {
                                    type: "text/javascript",
                                    src: n.f,
                                    id: n.i
                                }, e)
                            }
                        }
                    }, e), this)
                }, loadcss: function (t, e) {
                    var n = o(t);
                    return t = n.u, d[t] || u("link", {
                        type: "text/css",
                        rel: "stylesheet",
                        href: t,
                        id: n.i
                    }), d[t] = !0, e && e(), this
                }, load: function () {
                    var t = arguments, e = t.length;
                    return 1 === e && n(t[0], Function) ? (t[0](), this) : (h.call(this, t[0], e <= 1 ? void 0 : function () {
                        f.load.apply(f, [].slice.call(t, 1))
                    }), this)
                }, addAliases: function (t) {
                    for (var e in t) this.aliases[e] = n(t[e]) ? t[e].slice(0) : t[e];
                    return this
                }
            };
        if (c) {
            var p, y, g, v;
            for (p = 0, y = i.length; p < y; p++) (v = i[p].getAttribute("src")) && (d[v.replace(/#.*$/, "")] = !0);
            for (g = r.getElementsByTagName("link"), p = 0, y = g.length; p < y; p++) ("stylesheet" === g[p].rel || "text/css" === g[p].type) && (d[g[p].getAttribute("href").replace(/#.*$/, "")] = !0)
        }
        t.ljs = f
    }
    a.src && s && u("script", {innerHTML: s})
}(window);

;(function ($window, loader) {
    console.log('Initialize nfp loader...');
    var hashes = {
        styles: "3222f097c5bb044f74b3",
        runtime: "c54f7305ce81e314e43b",
        polyfills: "4949262c8f62046a1c59",
        scripts: "eb54c7e0ba2d1aff853f",
        vendor: "68f5d5d6b5d4dda46f7d",
        main: "1e6a918ff552a124339f"
    };
    $window["_nfpFilesManifest"] = {"OneSignalSDKUpdaterWorker":"js","OneSignalSDKWorker":"js","loader":"css","main":"1e6a918ff552a124339f","nfp-messaging-sw":"js","polyfills":"4949262c8f62046a1c59","runtime":"c54f7305ce81e314e43b","scripts":"eb54c7e0ba2d1aff853f","vendor":"68f5d5d6b5d4dda46f7d","styles":"3222f097c5bb044f74b3","theme-blue-crypto":"a1c11452f3c8d265057e","theme-dark-axia":"5b6aaf753dd55624e450","theme-dark-crypto":"b32f5ffe92ae5b2aa9af","theme-dark-highlow":"238a40ecf3dec900c1ef","theme-dark-monokai":"c6e0d90aa78435c4431f","theme-dark":"8cb35cfa35c5fbe24840","theme-light-blue":"8a64ee89bf21b054d75e","theme-white-axia":"f20069e61d5babc5dc68","theme-white-crypto":"14304790a98f38e3b88d","theme-white":"9d8aa6bec1e75701c695"};
    var deployUrl = "https://nfp.pandats.com/static/";
    var loadProgress = createLoadProgress();

    function createLoadProgress() {
        var wrapper = document.createElement('div');
        wrapper.classList = "wrapper-spinner-pandats";

        var loader = document.createElement('div');
        loader.classList = "loader-spinner-pandats";

        wrapper.appendChild(loader);
        Array(9).fill(null).forEach(function () {
            loader.appendChild(document.createElement('div'));
        });

        return wrapper;
    }

    function hideLoadProgress(el) {
        el.style.display = 'none';
        document.getElementsByTagName('body')[0].removeChild(el);
    }

    function invalidateCache(filename) {
        var extRegex = new RegExp(/\.(css|js)$/),
            ext = filename.match(extRegex).shift(),
            newFile = filename.replace(extRegex, '');

        return hashes[newFile] && hashes[newFile].length > 0
            ? [deployUrl, newFile, '.', hashes[newFile], ext].join('')
            : deployUrl + filename;
    }

    function loadCss(url) {
        var link = document.createElement('link');
        link.type = 'text/css';
        link.rel = 'stylesheet';
        link.href = url;
        return link;
    }

    function load() {
        var body = document.getElementsByTagName('body')[0],
            firstChild = body.firstElementChild;

        //append empty <script> to the <head> specially for 'yepnope' strange behaviour in firefox
        var emptyScript = document.createElement('script');
        document.getElementsByTagName('head')[0].appendChild(emptyScript);
        //

        body.insertBefore(loadProgress, firstChild);
        loader.loadcss(deployUrl + 'loader.css');

        var themeEl = document.getElementsByTagName('panda-forex-theme-switch')[0];
        if (themeEl && themeEl.parentElement) {
            var cssLoader = loadCss(invalidateCache('styles.css'));
            themeEl.parentElement.insertBefore(cssLoader, themeEl);
        } else {
            loader.loadcss(invalidateCache('styles.css'));
        }

        if ($window["isPluginMobile"]) {
            hideLoadProgress(loadProgress);
            return;
        }

        loader.load(invalidateCache('runtime.js'))
            .load(
                invalidateCache('polyfills.js'),
                invalidateCache('scripts.js'),
                invalidateCache('vendor.js'),
                invalidateCache('main.js'),
                function () {
                    hideLoadProgress(loadProgress);
                }
            );
    }

    $window.document.addEventListener('DOMContentLoaded', load);

})(window, window.ljs);
