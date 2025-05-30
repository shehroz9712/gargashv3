﻿/*
 Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
*/
(function () {
    function u() {
        return !1;
    }
    function x(a, b) {
        var c,
            d = [];
        a.filterChildren(b);
        for (c = a.children.length - 1; 0 <= c; c--)
            d.unshift(a.children[c]), a.children[c].remove();
        c = a.attributes;
        var e = a,
            g = !0,
            h;
        for (h in c)
            if (g) g = !1;
            else {
                var l = new CKEDITOR.htmlParser.element(a.name);
                l.attributes[h] = c[h];
                e.add(l);
                e = l;
                delete c[h];
            }
        for (c = 0; c < d.length; c++) e.add(d[c]);
    }
    var f,
        k,
        t,
        p,
        m = CKEDITOR.tools,
        y = ["o:p", "xml", "script", "meta", "link"],
        z =
            "v:arc v:curve v:line v:oval v:polyline v:rect v:roundrect v:group".split(
                " "
            ),
        w = {},
        v = 0;
    CKEDITOR.plugins.pastefromword = {};
    CKEDITOR.cleanWord = function (a, b) {
        function c(a) {
            (a.attributes["o:gfxdata"] || "v:group" === a.parent.name) &&
                e.push(a.attributes.id);
        }
        var d = Boolean(a.match(/mso-list:\s*l\d+\s+level\d+\s+lfo\d+/)),
            e = [];
        CKEDITOR.plugins.clipboard.isCustomDataTypesSupported &&
            (a = CKEDITOR.plugins.pastefromword.styles.inliner
                .inline(a)
                .getBody()
                .getHtml());
        a = a.replace(/<!\[/g, "\x3c!--[").replace(/\]>/g, "]--\x3e");
        var g = CKEDITOR.htmlParser.fragment.fromHtml(a),
            h = {
                root: function (a) {
                    a.filterChildren(p);
                    CKEDITOR.plugins.pastefromword.lists.cleanup(
                        f.createLists(a)
                    );
                },
                elementNames: [
                    [/^\?xml:namespace$/, ""],
                    [/^v:shapetype/, ""],
                    [new RegExp(y.join("|")), ""],
                ],
                elements: {
                    a: function (a) {
                        if (a.attributes.name) {
                            if ("_GoBack" == a.attributes.name) {
                                delete a.name;
                                return;
                            }
                            if (a.attributes.name.match(/^OLE_LINK\d+$/)) {
                                delete a.name;
                                return;
                            }
                        }
                        if (
                            a.attributes.href &&
                            a.attributes.href.match(/#.+$/)
                        ) {
                            var b = a.attributes.href.match(/#(.+)$/)[1];
                            w[b] = a;
                        }
                        a.attributes.name &&
                            w[a.attributes.name] &&
                            ((a = w[a.attributes.name]),
                            (a.attributes.href = a.attributes.href.replace(
                                /.*#(.*)$/,
                                "#$1"
                            )));
                    },
                    div: function (a) {
                        k.createStyleStack(a, p, b);
                    },
                    img: function (a) {
                        if (a.parent && a.parent.attributes) {
                            var b = a.parent.attributes;
                            (b = b.style || b.STYLE) &&
                                b.match(/mso\-list:\s?Ignore/) &&
                                (a.attributes["cke-ignored"] = !0);
                        }
                        k.mapStyles(a, {
                            width: function (b) {
                                k.setStyle(a, "width", b + "px");
                            },
                            height: function (b) {
                                k.setStyle(a, "height", b + "px");
                            },
                        });
                        a.attributes.src &&
                            a.attributes.src.match(/^file:\/\//) &&
                            a.attributes.alt &&
                            a.attributes.alt.match(/^https?:\/\//) &&
                            (a.attributes.src = a.attributes.alt);
                        var b = a.attributes["v:shapes"]
                                ? a.attributes["v:shapes"].split(" ")
                                : [],
                            c = CKEDITOR.tools.array.every(b, function (a) {
                                return -1 < e.indexOf(a);
                            });
                        if (b.length && c) return !1;
                    },
                    p: function (a) {
                        a.filterChildren(p);
                        if (
                            a.attributes.style &&
                            a.attributes.style.match(/display:\s*none/i)
                        )
                            return !1;
                        if (f.thisIsAListItem(b, a))
                            t.isEdgeListItem(b, a) && t.cleanupEdgeListItem(a),
                                f.convertToFakeListItem(b, a),
                                m.array.reduce(
                                    a.children,
                                    function (a, b) {
                                        "p" === b.name &&
                                            (0 < a &&
                                                new CKEDITOR.htmlParser.element(
                                                    "br"
                                                ).insertBefore(b),
                                            b.replaceWithChildren(),
                                            (a += 1));
                                        return a;
                                    },
                                    0
                                );
                        else {
                            var c = a.getAscendant(function (a) {
                                    return "ul" == a.name || "ol" == a.name;
                                }),
                                d = m.parseCssText(a.attributes.style);
                            c &&
                                !c.attributes["cke-list-level"] &&
                                d["mso-list"] &&
                                d["mso-list"].match(/level/) &&
                                (c.attributes["cke-list-level"] =
                                    d["mso-list"].match(/level(\d+)/)[1]);
                            b.config.enterMode == CKEDITOR.ENTER_BR &&
                                (delete a.name,
                                a.add(new CKEDITOR.htmlParser.element("br")));
                        }
                        k.createStyleStack(a, p, b);
                    },
                    pre: function (a) {
                        f.thisIsAListItem(b, a) &&
                            f.convertToFakeListItem(b, a);
                        k.createStyleStack(a, p, b);
                    },
                    h1: function (a) {
                        f.thisIsAListItem(b, a) &&
                            f.convertToFakeListItem(b, a);
                        k.createStyleStack(a, p, b);
                    },
                    h2: function (a) {
                        f.thisIsAListItem(b, a) &&
                            f.convertToFakeListItem(b, a);
                        k.createStyleStack(a, p, b);
                    },
                    h3: function (a) {
                        f.thisIsAListItem(b, a) &&
                            f.convertToFakeListItem(b, a);
                        k.createStyleStack(a, p, b);
                    },
                    h4: function (a) {
                        f.thisIsAListItem(b, a) &&
                            f.convertToFakeListItem(b, a);
                        k.createStyleStack(a, p, b);
                    },
                    h5: function (a) {
                        f.thisIsAListItem(b, a) &&
                            f.convertToFakeListItem(b, a);
                        k.createStyleStack(a, p, b);
                    },
                    h6: function (a) {
                        f.thisIsAListItem(b, a) &&
                            f.convertToFakeListItem(b, a);
                        k.createStyleStack(a, p, b);
                    },
                    font: function (a) {
                        if (a.getHtml().match(/^\s*$/))
                            return (
                                new CKEDITOR.htmlParser.text(" ").insertAfter(
                                    a
                                ),
                                !1
                            );
                        b &&
                            !0 === b.config.pasteFromWordRemoveFontStyles &&
                            a.attributes.size &&
                            delete a.attributes.size;
                        CKEDITOR.dtd.tr[a.parent.name] &&
                        CKEDITOR.tools.arrayCompare(
                            CKEDITOR.tools.objectKeys(a.attributes),
                            ["class", "style"]
                        )
                            ? k.createStyleStack(a, p, b)
                            : x(a, p);
                    },
                    ul: function (a) {
                        if (d)
                            return (
                                "li" == a.parent.name &&
                                    0 === m.indexOf(a.parent.children, a) &&
                                    k.setStyle(
                                        a.parent,
                                        "list-style-type",
                                        "none"
                                    ),
                                f.dissolveList(a),
                                !1
                            );
                    },
                    li: function (a) {
                        t.correctLevelShift(a);
                        d &&
                            ((a.attributes.style = k.normalizedStyles(a, b)),
                            k.pushStylesLower(a));
                    },
                    ol: function (a) {
                        if (d)
                            return (
                                "li" == a.parent.name &&
                                    0 === m.indexOf(a.parent.children, a) &&
                                    k.setStyle(
                                        a.parent,
                                        "list-style-type",
                                        "none"
                                    ),
                                f.dissolveList(a),
                                !1
                            );
                    },
                    span: function (a) {
                        a.filterChildren(p);
                        a.attributes.style = k.normalizedStyles(a, b);
                        if (
                            !a.attributes.style ||
                            a.attributes.style.match(
                                /^mso\-bookmark:OLE_LINK\d+$/
                            ) ||
                            a.getHtml().match(/^(\s|&nbsp;)+$/)
                        ) {
                            for (var c = a.children.length - 1; 0 <= c; c--)
                                a.children[c].insertAfter(a);
                            return !1;
                        }
                        a.attributes.style.match(/FONT-FAMILY:\s*Symbol/i) &&
                            a.forEach(
                                function (a) {
                                    a.value = a.value.replace(/&nbsp;/g, "");
                                },
                                CKEDITOR.NODE_TEXT,
                                !0
                            );
                        k.createStyleStack(a, p, b);
                    },
                    table: function (a) {
                        a._tdBorders = {};
                        a.filterChildren(p);
                        var b,
                            c = 0,
                            d;
                        for (d in a._tdBorders)
                            a._tdBorders[d] > c &&
                                ((c = a._tdBorders[d]), (b = d));
                        k.setStyle(a, "border", b);
                        c = (b = a.parent) && b.parent;
                        if (
                            b.name &&
                            "div" === b.name &&
                            b.attributes.align &&
                            1 === m.objectKeys(b.attributes).length &&
                            1 === b.children.length
                        ) {
                            a.attributes.align = b.attributes.align;
                            d = b.children.splice(0);
                            a.remove();
                            for (a = d.length - 1; 0 <= a; a--)
                                c.add(d[a], b.getIndex());
                            b.remove();
                        }
                    },
                    td: function (a) {
                        var c = a.getAscendant("table"),
                            d = c._tdBorders,
                            e = [
                                "border",
                                "border-top",
                                "border-right",
                                "border-bottom",
                                "border-left",
                            ],
                            c = m.parseCssText(c.attributes.style),
                            g = c.background || c.BACKGROUND;
                        g && k.setStyle(a, "background", g, !0);
                        (c = c["background-color"] || c["BACKGROUND-COLOR"]) &&
                            k.setStyle(a, "background-color", c, !0);
                        var c = m.parseCssText(a.attributes.style),
                            h;
                        for (h in c)
                            (g = c[h]), delete c[h], (c[h.toLowerCase()] = g);
                        for (h = 0; h < e.length; h++)
                            c[e[h]] &&
                                ((g = c[e[h]]), (d[g] = d[g] ? d[g] + 1 : 1));
                        k.createStyleStack(
                            a,
                            p,
                            b,
                            /margin|text\-align|padding|list\-style\-type|width|height|border|white\-space|vertical\-align|background/i
                        );
                    },
                    "v:imagedata": u,
                    "v:shape": function (a) {
                        var b = !1;
                        if (null === a.getFirst("v:imagedata")) c(a);
                        else {
                            a.parent.find(function (c) {
                                "img" == c.name &&
                                    c.attributes &&
                                    c.attributes["v:shapes"] ==
                                        a.attributes.id &&
                                    (b = !0);
                            }, !0);
                            if (b) return !1;
                            var d = "";
                            "v:group" === a.parent.name
                                ? c(a)
                                : (a.forEach(
                                      function (a) {
                                          a.attributes &&
                                              a.attributes.src &&
                                              (d = a.attributes.src);
                                      },
                                      CKEDITOR.NODE_ELEMENT,
                                      !0
                                  ),
                                  a.filterChildren(p),
                                  (a.name = "img"),
                                  (a.attributes.src = a.attributes.src || d),
                                  delete a.attributes.type);
                        }
                    },
                    style: function () {
                        return !1;
                    },
                    object: function (a) {
                        return !(!a.attributes || !a.attributes.data);
                    },
                },
                attributes: {
                    style: function (a, c) {
                        return k.normalizedStyles(c, b) || !1;
                    },
                    class: function (a) {
                        a = a.replace(
                            /(el\d+)|(font\d+)|msonormal|msolistparagraph\w*/gi,
                            ""
                        );
                        return "" === a ? !1 : a;
                    },
                    cellspacing: u,
                    cellpadding: u,
                    border: u,
                    "v:shapes": u,
                    "o:spid": u,
                },
                comment: function (a) {
                    a.match(/\[if.* supportFields.*\]/) && v++;
                    "[endif]" == a && (v = 0 < v ? v - 1 : 0);
                    return !1;
                },
                text: function (a, b) {
                    if (v) return "";
                    var c = b.parent && b.parent.parent;
                    return c &&
                        c.attributes &&
                        c.attributes.style &&
                        c.attributes.style.match(/mso-list:\s*ignore/i)
                        ? a.replace(/&nbsp;/g, " ")
                        : a;
                },
            };
        CKEDITOR.tools.array.forEach(z, function (a) {
            h.elements[a] = c;
        });
        p = new CKEDITOR.htmlParser.filter(h);
        var l = new CKEDITOR.htmlParser.basicWriter();
        p.applyTo(g);
        g.writeHtml(l);
        return l.getHtml();
    };
    CKEDITOR.plugins.pastefromword.styles = {
        setStyle: function (a, b, c, d) {
            var e = m.parseCssText(a.attributes.style);
            (d && e[b]) ||
                ("" === c ? delete e[b] : (e[b] = c),
                (a.attributes.style = CKEDITOR.tools.writeCssText(e)));
        },
        mapStyles: function (a, b) {
            for (var c in b)
                if (a.attributes[c]) {
                    if ("function" === typeof b[c]) b[c](a.attributes[c]);
                    else k.setStyle(a, b[c], a.attributes[c]);
                    delete a.attributes[c];
                }
        },
        normalizedStyles: function (a, b) {
            var c =
                    "background-color:transparent border-image:none color:windowtext direction:ltr mso- text-indent visibility:visible div:border:none".split(
                        " "
                    ),
                d =
                    "font-family font font-size color background-color line-height text-decoration".split(
                        " "
                    ),
                e = function () {
                    for (var a = [], b = 0; b < arguments.length; b++)
                        arguments[b] && a.push(arguments[b]);
                    return -1 !== m.indexOf(c, a.join(":"));
                },
                g = b && !0 === b.config.pasteFromWordRemoveFontStyles,
                h = m.parseCssText(a.attributes.style);
            "cke:li" == a.name &&
                h["TEXT-INDENT"] &&
                h.MARGIN &&
                ((a.attributes["cke-indentation"] = f.getElementIndentation(a)),
                (h.MARGIN = h.MARGIN.replace(
                    /(([\w\.]+ ){3,3})[\d\.]+(\w+$)/,
                    "$10$3"
                )));
            for (var l = m.objectKeys(h), q = 0; q < l.length; q++) {
                var n = l[q].toLowerCase(),
                    r = h[l[q]],
                    k = CKEDITOR.tools.indexOf;
                ((g && -1 !== k(d, n.toLowerCase())) ||
                    e(null, n, r) ||
                    e(null, n.replace(/\-.*$/, "-")) ||
                    e(null, n) ||
                    e(a.name, n, r) ||
                    e(a.name, n.replace(/\-.*$/, "-")) ||
                    e(a.name, n) ||
                    e(r)) &&
                    delete h[l[q]];
            }
            return CKEDITOR.tools.writeCssText(h);
        },
        createStyleStack: function (a, b, c, d) {
            var e = [];
            a.filterChildren(b);
            for (b = a.children.length - 1; 0 <= b; b--)
                e.unshift(a.children[b]), a.children[b].remove();
            k.sortStyles(a);
            b = m.parseCssText(k.normalizedStyles(a, c));
            c = a;
            var g = "span" === a.name,
                h;
            for (h in b)
                if (!h.match(d || /margin|text\-align|width|border|padding/i))
                    if (g) g = !1;
                    else {
                        var l = new CKEDITOR.htmlParser.element("span");
                        l.attributes.style = h + ":" + b[h];
                        c.add(l);
                        c = l;
                        delete b[h];
                    }
            CKEDITOR.tools.isEmpty(b)
                ? delete a.attributes.style
                : (a.attributes.style = CKEDITOR.tools.writeCssText(b));
            for (b = 0; b < e.length; b++) c.add(e[b]);
        },
        sortStyles: function (a) {
            for (
                var b = ["border", "border-bottom", "font-size", "background"],
                    c = m.parseCssText(a.attributes.style),
                    d = m.objectKeys(c),
                    e = [],
                    g = [],
                    h = 0;
                h < d.length;
                h++
            )
                -1 !== m.indexOf(b, d[h].toLowerCase())
                    ? e.push(d[h])
                    : g.push(d[h]);
            e.sort(function (a, c) {
                var d = m.indexOf(b, a.toLowerCase()),
                    e = m.indexOf(b, c.toLowerCase());
                return d - e;
            });
            d = [].concat(e, g);
            e = {};
            for (h = 0; h < d.length; h++) e[d[h]] = c[d[h]];
            a.attributes.style = CKEDITOR.tools.writeCssText(e);
        },
        pushStylesLower: function (a, b, c) {
            if (!a.attributes.style || 0 === a.children.length) return !1;
            b = b || {};
            var d = {
                    "list-style-type": !0,
                    width: !0,
                    height: !0,
                    border: !0,
                    "border-": !0,
                },
                e = m.parseCssText(a.attributes.style),
                g;
            for (g in e)
                if (
                    !(
                        g.toLowerCase() in d ||
                        d[g.toLowerCase().replace(/\-.*$/, "-")] ||
                        g.toLowerCase() in b
                    )
                ) {
                    for (var h = !1, l = 0; l < a.children.length; l++) {
                        var f = a.children[l];
                        if (f.type === CKEDITOR.NODE_TEXT && c) {
                            var n = new CKEDITOR.htmlParser.element("span");
                            n.setHtml(f.value);
                            f.replaceWith(n);
                            f = n;
                        }
                        f.type === CKEDITOR.NODE_ELEMENT &&
                            ((h = !0), k.setStyle(f, g, e[g]));
                    }
                    h && delete e[g];
                }
            a.attributes.style = CKEDITOR.tools.writeCssText(e);
            return !0;
        },
        inliner: {
            filtered:
                "break-before break-after break-inside page-break page-break-before page-break-after page-break-inside".split(
                    " "
                ),
            parse: function (a) {
                function b(a) {
                    var b = new CKEDITOR.dom.element("style"),
                        c = new CKEDITOR.dom.element("iframe");
                    c.hide();
                    CKEDITOR.document.getBody().append(c);
                    c.$.contentDocument.documentElement.appendChild(b.$);
                    b.$.textContent = a;
                    c.remove();
                    return b.$.sheet;
                }
                function c(a) {
                    var b = a.indexOf("{"),
                        c = a.indexOf("}");
                    return d(a.substring(b + 1, c), !0);
                }
                var d = CKEDITOR.tools.parseCssText,
                    e = CKEDITOR.plugins.pastefromword.styles.inliner.filter,
                    g = a.is ? a.$.sheet : b(a);
                a = [];
                var h;
                if (g)
                    for (g = g.cssRules, h = 0; h < g.length; h++)
                        g[h].type === window.CSSRule.STYLE_RULE &&
                            a.push({
                                selector: g[h].selectorText,
                                styles: e(c(g[h].cssText)),
                            });
                return a;
            },
            filter: function (a) {
                var b = CKEDITOR.plugins.pastefromword.styles.inliner.filtered,
                    c = m.array.indexOf,
                    d = {},
                    e;
                for (e in a) -1 === c(b, e) && (d[e] = a[e]);
                return d;
            },
            sort: function (a) {
                return a.sort(
                    (function (a) {
                        var c = CKEDITOR.tools.array.map(a, function (a) {
                            return a.selector;
                        });
                        return function (a, b) {
                            var g =
                                    -1 !== ("" + a.selector).indexOf(".")
                                        ? 1
                                        : 0,
                                g =
                                    (-1 !== ("" + b.selector).indexOf(".")
                                        ? 1
                                        : 0) - g;
                            return 0 !== g
                                ? g
                                : c.indexOf(b.selector) - c.indexOf(a.selector);
                        };
                    })(a)
                );
            },
            inline: function (a) {
                var b = CKEDITOR.plugins.pastefromword.styles.inliner.parse,
                    c = CKEDITOR.plugins.pastefromword.styles.inliner.sort,
                    d = (function (a) {
                        a = new DOMParser().parseFromString(a, "text/html");
                        return new CKEDITOR.dom.document(a);
                    })(a);
                a = d.find("style");
                c = c(
                    (function (a) {
                        var c = [],
                            d;
                        for (d = 0; d < a.count(); d++)
                            c = c.concat(b(a.getItem(d)));
                        return c;
                    })(a)
                );
                CKEDITOR.tools.array.forEach(c, function (a) {
                    var b = a.styles;
                    a = d.find(a.selector);
                    var c, f, q;
                    for (q = 0; q < a.count(); q++)
                        (c = a.getItem(q)),
                            (f = CKEDITOR.tools.parseCssText(
                                c.getAttribute("style")
                            )),
                            (f = CKEDITOR.tools.extend({}, f, b)),
                            c.setAttribute(
                                "style",
                                CKEDITOR.tools.writeCssText(f)
                            );
                });
                return d;
            },
        },
    };
    k = CKEDITOR.plugins.pastefromword.styles;
    CKEDITOR.plugins.pastefromword.lists = {
        thisIsAListItem: function (a, b) {
            return t.isEdgeListItem(a, b) ||
                (b.attributes.style &&
                    b.attributes.style.match(/mso\-list:\s?l\d/) &&
                    "li" !== b.parent.name) ||
                b.attributes["cke-dissolved"] ||
                b.getHtml().match(/<!\-\-\[if !supportLists]\-\->/)
                ? !0
                : !1;
        },
        convertToFakeListItem: function (a, b) {
            t.isDegenerateListItem(a, b) && t.assignListLevels(a, b);
            this.getListItemInfo(b);
            if (!b.attributes["cke-dissolved"]) {
                var c;
                b.forEach(function (a) {
                    !c &&
                        "img" == a.name &&
                        a.attributes["cke-ignored"] &&
                        "*" == a.attributes.alt &&
                        ((c = "·"), a.remove());
                }, CKEDITOR.NODE_ELEMENT);
                b.forEach(function (a) {
                    c || a.value.match(/^ /) || (c = a.value);
                }, CKEDITOR.NODE_TEXT);
                if ("undefined" == typeof c) return;
                b.attributes["cke-symbol"] = c.replace(/(?: |&nbsp;).*$/, "");
                f.removeSymbolText(b);
            }
            if (b.attributes.style) {
                var d = m.parseCssText(b.attributes.style);
                d["margin-left"] &&
                    (delete d["margin-left"],
                    (b.attributes.style = CKEDITOR.tools.writeCssText(d)));
            }
            b.name = "cke:li";
        },
        convertToRealListItems: function (a) {
            var b = [];
            a.forEach(
                function (a) {
                    "cke:li" == a.name && ((a.name = "li"), b.push(a));
                },
                CKEDITOR.NODE_ELEMENT,
                !1
            );
            return b;
        },
        removeSymbolText: function (a) {
            var b,
                c = a.attributes["cke-symbol"];
            a.forEach(function (d) {
                !b &&
                    -1 < d.value.indexOf(c) &&
                    ((d.value = d.value.replace(c, "")),
                    d.parent.getHtml().match(/^(\s|&nbsp;)*$/) &&
                        (b = d.parent !== a ? d.parent : null));
            }, CKEDITOR.NODE_TEXT);
            b && b.remove();
        },
        setListSymbol: function (a, b, c) {
            c = c || 1;
            var d = m.parseCssText(a.attributes.style);
            if ("ol" == a.name) {
                if (a.attributes.type || d["list-style-type"]) return;
                var e = {
                        "[ivx]": "lower-roman",
                        "[IVX]": "upper-roman",
                        "[a-z]": "lower-alpha",
                        "[A-Z]": "upper-alpha",
                        "\\d": "decimal",
                    },
                    g;
                for (g in e)
                    if (f.getSubsectionSymbol(b).match(new RegExp(g))) {
                        d["list-style-type"] = e[g];
                        break;
                    }
                a.attributes["cke-list-style-type"] = d["list-style-type"];
            } else
                (e = { "·": "disc", o: "circle", "§": "square" }),
                    !d["list-style-type"] &&
                        e[b] &&
                        (d["list-style-type"] = e[b]);
            f.setListSymbol.removeRedundancies(d, c);
            (a.attributes.style = CKEDITOR.tools.writeCssText(d)) ||
                delete a.attributes.style;
        },
        setListStart: function (a) {
            for (var b = [], c = 0, d = 0; d < a.children.length; d++)
                b.push(a.children[d].attributes["cke-symbol"] || "");
            b[0] || c++;
            switch (a.attributes["cke-list-style-type"]) {
                case "lower-roman":
                case "upper-roman":
                    a.attributes.start =
                        f.toArabic(f.getSubsectionSymbol(b[c])) - c;
                    break;
                case "lower-alpha":
                case "upper-alpha":
                    a.attributes.start =
                        f
                            .getSubsectionSymbol(b[c])
                            .replace(/\W/g, "")
                            .toLowerCase()
                            .charCodeAt(0) -
                        96 -
                        c;
                    break;
                case "decimal":
                    a.attributes.start =
                        parseInt(f.getSubsectionSymbol(b[c]), 10) - c || 1;
            }
            "1" == a.attributes.start && delete a.attributes.start;
            delete a.attributes["cke-list-style-type"];
        },
        numbering: {
            toNumber: function (a, b) {
                function c(a) {
                    a = a.toUpperCase();
                    for (var b = 1, c = 1; 0 < a.length; c *= 26)
                        (b +=
                            "ABCDEFGHIJKLMNOPQRSTUVWXYZ".indexOf(
                                a.charAt(a.length - 1)
                            ) * c),
                            (a = a.substr(0, a.length - 1));
                    return b;
                }
                function d(a) {
                    var b = [
                        [1e3, "M"],
                        [900, "CM"],
                        [500, "D"],
                        [400, "CD"],
                        [100, "C"],
                        [90, "XC"],
                        [50, "L"],
                        [40, "XL"],
                        [10, "X"],
                        [9, "IX"],
                        [5, "V"],
                        [4, "IV"],
                        [1, "I"],
                    ];
                    a = a.toUpperCase();
                    for (var c = b.length, d = 0, f = 0; f < c; ++f)
                        for (
                            var n = b[f], r = n[1].length;
                            a.substr(0, r) == n[1];
                            a = a.substr(r)
                        )
                            d += n[0];
                    return d;
                }
                return "decimal" == b
                    ? Number(a)
                    : "upper-roman" == b || "lower-roman" == b
                    ? d(a.toUpperCase())
                    : "lower-alpha" == b || "upper-alpha" == b
                    ? c(a)
                    : 1;
            },
            getStyle: function (a) {
                a = a.slice(0, 1);
                var b = {
                    i: "lower-roman",
                    v: "lower-roman",
                    x: "lower-roman",
                    l: "lower-roman",
                    m: "lower-roman",
                    I: "upper-roman",
                    V: "upper-roman",
                    X: "upper-roman",
                    L: "upper-roman",
                    M: "upper-roman",
                }[a];
                b ||
                    ((b = "decimal"),
                    a.match(/[a-z]/) && (b = "lower-alpha"),
                    a.match(/[A-Z]/) && (b = "upper-alpha"));
                return b;
            },
        },
        getSubsectionSymbol: function (a) {
            return (a.match(/([\da-zA-Z]+).?$/) || ["placeholder", "1"])[1];
        },
        setListDir: function (a) {
            var b = 0,
                c = 0;
            a.forEach(function (a) {
                "li" == a.name &&
                    ("rtl" ==
                    (a.attributes.dir || a.attributes.DIR || "").toLowerCase()
                        ? c++
                        : b++);
            }, CKEDITOR.ELEMENT_NODE);
            c > b && (a.attributes.dir = "rtl");
        },
        createList: function (a) {
            return (a.attributes["cke-symbol"].match(/([\da-np-zA-NP-Z]).?/) ||
                [])[1]
                ? new CKEDITOR.htmlParser.element("ol")
                : new CKEDITOR.htmlParser.element("ul");
        },
        createLists: function (a) {
            var b,
                c,
                d,
                e = f.convertToRealListItems(a);
            if (0 === e.length) return [];
            var g = f.groupLists(e);
            for (a = 0; a < g.length; a++) {
                var h = g[a],
                    l = h[0];
                for (d = 0; d < h.length; d++)
                    if (1 == h[d].attributes["cke-list-level"]) {
                        l = h[d];
                        break;
                    }
                var l = [f.createList(l)],
                    k = l[0],
                    n = [l[0]];
                k.insertBefore(h[0]);
                for (d = 0; d < h.length; d++) {
                    b = h[d];
                    for (c = b.attributes["cke-list-level"]; c > l.length; ) {
                        var r = f.createList(b),
                            m = k.children;
                        0 < m.length
                            ? m[m.length - 1].add(r)
                            : ((m = new CKEDITOR.htmlParser.element("li", {
                                  style: "list-style-type:none",
                              })),
                              m.add(r),
                              k.add(m));
                        l.push(r);
                        n.push(r);
                        k = r;
                        c == l.length &&
                            f.setListSymbol(r, b.attributes["cke-symbol"], c);
                    }
                    for (; c < l.length; )
                        l.pop(),
                            (k = l[l.length - 1]),
                            c == l.length &&
                                f.setListSymbol(
                                    k,
                                    b.attributes["cke-symbol"],
                                    c
                                );
                    b.remove();
                    k.add(b);
                }
                l[0].children.length &&
                    ((d = l[0].children[0].attributes["cke-symbol"]),
                    !d &&
                        1 < l[0].children.length &&
                        (d = l[0].children[1].attributes["cke-symbol"]),
                    d && f.setListSymbol(l[0], d));
                for (d = 0; d < n.length; d++) f.setListStart(n[d]);
                for (d = 0; d < h.length; d++)
                    this.determineListItemValue(h[d]);
            }
            return e;
        },
        cleanup: function (a) {
            var b = [
                    "cke-list-level",
                    "cke-symbol",
                    "cke-list-id",
                    "cke-indentation",
                    "cke-dissolved",
                ],
                c,
                d;
            for (c = 0; c < a.length; c++)
                for (d = 0; d < b.length; d++) delete a[c].attributes[b[d]];
        },
        determineListItemValue: function (a) {
            if ("ol" === a.parent.name) {
                var b = this.calculateValue(a),
                    c = a.attributes["cke-symbol"].match(/[a-z0-9]+/gi),
                    d;
                c &&
                    ((c = c[c.length - 1]),
                    (d =
                        a.parent.attributes["cke-list-style-type"] ||
                        this.numbering.getStyle(c)),
                    (c = this.numbering.toNumber(c, d)),
                    c !== b && (a.attributes.value = c));
            }
        },
        calculateValue: function (a) {
            if (!a.parent) return 1;
            var b = a.parent;
            a = a.getIndex();
            var c = null,
                d,
                e,
                g;
            for (g = a; 0 <= g && null === c; g--)
                (e = b.children[g]),
                    e.attributes &&
                        void 0 !== e.attributes.value &&
                        ((d = g), (c = parseInt(e.attributes.value, 10)));
            null === c &&
                ((c =
                    void 0 !== b.attributes.start
                        ? parseInt(b.attributes.start, 10)
                        : 1),
                (d = 0));
            return c + (a - d);
        },
        dissolveList: function (a) {
            function b(a) {
                return 50 <= a
                    ? "l" + b(a - 50)
                    : 40 <= a
                    ? "xl" + b(a - 40)
                    : 10 <= a
                    ? "x" + b(a - 10)
                    : 9 == a
                    ? "ix"
                    : 5 <= a
                    ? "v" + b(a - 5)
                    : 4 == a
                    ? "iv"
                    : 1 <= a
                    ? "i" + b(a - 1)
                    : "";
            }
            function c(a, b) {
                function c(b, d) {
                    return b && b.parent
                        ? a(b.parent)
                            ? c(b.parent, d + 1)
                            : c(b.parent, d)
                        : d;
                }
                return c(b, 0);
            }
            var d = function (a) {
                    return function (b) {
                        return b.name == a;
                    };
                },
                e = function (a) {
                    return d("ul")(a) || d("ol")(a);
                },
                g = CKEDITOR.tools.array,
                h = [],
                f,
                q;
            a.forEach(
                function (a) {
                    h.push(a);
                },
                CKEDITOR.NODE_ELEMENT,
                !1
            );
            f = g.filter(h, d("li"));
            var n = g.filter(h, e);
            g.forEach(n, function (a) {
                var h = a.attributes.type,
                    f = parseInt(a.attributes.start, 10) || 1,
                    l = c(e, a) + 1;
                h ||
                    (h = m.parseCssText(a.attributes.style)["list-style-type"]);
                g.forEach(g.filter(a.children, d("li")), function (c, d) {
                    var e;
                    switch (h) {
                        case "disc":
                            e = "·";
                            break;
                        case "circle":
                            e = "o";
                            break;
                        case "square":
                            e = "§";
                            break;
                        case "1":
                        case "decimal":
                            e = f + d + ".";
                            break;
                        case "a":
                        case "lower-alpha":
                            e = String.fromCharCode(97 + f - 1 + d) + ".";
                            break;
                        case "A":
                        case "upper-alpha":
                            e = String.fromCharCode(65 + f - 1 + d) + ".";
                            break;
                        case "i":
                        case "lower-roman":
                            e = b(f + d) + ".";
                            break;
                        case "I":
                        case "upper-roman":
                            e = b(f + d).toUpperCase() + ".";
                            break;
                        default:
                            e = "ul" == a.name ? "·" : f + d + ".";
                    }
                    c.attributes["cke-symbol"] = e;
                    c.attributes["cke-list-level"] = l;
                });
            });
            f = g.reduce(
                f,
                function (a, b) {
                    var c = b.children[0];
                    if (
                        c &&
                        c.name &&
                        c.attributes.style &&
                        c.attributes.style.match(/mso-list:/i)
                    ) {
                        k.pushStylesLower(b, {
                            "list-style-type": !0,
                            display: !0,
                        });
                        var d = m.parseCssText(c.attributes.style, !0);
                        k.setStyle(b, "mso-list", d["mso-list"], !0);
                        k.setStyle(c, "mso-list", "");
                        delete b["cke-list-level"];
                        (c = d.display
                            ? "display"
                            : d.DISPLAY
                            ? "DISPLAY"
                            : "") && k.setStyle(b, "display", d[c], !0);
                    }
                    if (1 === b.children.length && e(b.children[0])) return a;
                    b.name = "p";
                    b.attributes["cke-dissolved"] = !0;
                    a.push(b);
                    return a;
                },
                []
            );
            for (q = f.length - 1; 0 <= q; q--) f[q].insertAfter(a);
            for (q = n.length - 1; 0 <= q; q--) delete n[q].name;
        },
        groupLists: function (a) {
            var b,
                c,
                d = [[a[0]]],
                e = d[0];
            c = a[0];
            c.attributes["cke-indentation"] =
                c.attributes["cke-indentation"] || f.getElementIndentation(c);
            for (b = 1; b < a.length; b++) {
                c = a[b];
                var g = a[b - 1];
                c.attributes["cke-indentation"] =
                    c.attributes["cke-indentation"] ||
                    f.getElementIndentation(c);
                c.previous !== g &&
                    (f.chopDiscontinuousLists(e, d), d.push((e = [])));
                e.push(c);
            }
            f.chopDiscontinuousLists(e, d);
            return d;
        },
        chopDiscontinuousLists: function (a, b) {
            for (var c = {}, d = [[]], e, g = 0; g < a.length; g++) {
                var h = c[a[g].attributes["cke-list-level"]],
                    l = this.getListItemInfo(a[g]),
                    k,
                    n;
                h
                    ? ((n =
                          h.type.match(/alpha/) && 7 == h.index ? "alpha" : n),
                      (n =
                          "o" == a[g].attributes["cke-symbol"] && 14 == h.index
                              ? "alpha"
                              : n),
                      (k = f.getSymbolInfo(a[g].attributes["cke-symbol"], n)),
                      (l = this.getListItemInfo(a[g])),
                      (h.type != k.type ||
                          (e &&
                              l.id != e.id &&
                              !this.isAListContinuation(a[g]))) &&
                          d.push([]))
                    : (k = f.getSymbolInfo(a[g].attributes["cke-symbol"]));
                for (
                    e = parseInt(a[g].attributes["cke-list-level"], 10) + 1;
                    20 > e;
                    e++
                )
                    c[e] && delete c[e];
                c[a[g].attributes["cke-list-level"]] = k;
                d[d.length - 1].push(a[g]);
                e = l;
            }
            [].splice.apply(b, [].concat([m.indexOf(b, a), 1], d));
        },
        isAListContinuation: function (a) {
            var b = a;
            do
                if ((b = b.previous) && b.type === CKEDITOR.NODE_ELEMENT) {
                    if (void 0 === b.attributes["cke-list-level"]) break;
                    if (
                        b.attributes["cke-list-level"] ===
                        a.attributes["cke-list-level"]
                    )
                        return (
                            b.attributes["cke-list-id"] ===
                            a.attributes["cke-list-id"]
                        );
                }
            while (b);
            return !1;
        },
        getElementIndentation: function (a) {
            a = m.parseCssText(a.attributes.style);
            if (a.margin || a.MARGIN) {
                a.margin = a.margin || a.MARGIN;
                var b = { styles: { margin: a.margin } };
                CKEDITOR.filter.transformationsTools.splitMarginShorthand(b);
                a["margin-left"] = b.styles["margin-left"];
            }
            return parseInt(m.convertToPx(a["margin-left"] || "0px"), 10);
        },
        toArabic: function (a) {
            return a.match(/[ivxl]/i)
                ? a.match(/^l/i)
                    ? 50 + f.toArabic(a.slice(1))
                    : a.match(/^lx/i)
                    ? 40 + f.toArabic(a.slice(1))
                    : a.match(/^x/i)
                    ? 10 + f.toArabic(a.slice(1))
                    : a.match(/^ix/i)
                    ? 9 + f.toArabic(a.slice(2))
                    : a.match(/^v/i)
                    ? 5 + f.toArabic(a.slice(1))
                    : a.match(/^iv/i)
                    ? 4 + f.toArabic(a.slice(2))
                    : a.match(/^i/i)
                    ? 1 + f.toArabic(a.slice(1))
                    : f.toArabic(a.slice(1))
                : 0;
        },
        getSymbolInfo: function (a, b) {
            var c = a.toUpperCase() == a ? "upper-" : "lower-",
                d = {
                    "·": ["disc", -1],
                    o: ["circle", -2],
                    "§": ["square", -3],
                };
            if (a in d || (b && b.match(/(disc|circle|square)/)))
                return { index: d[a][1], type: d[a][0] };
            if (a.match(/\d/))
                return {
                    index: a ? parseInt(f.getSubsectionSymbol(a), 10) : 0,
                    type: "decimal",
                };
            a = a.replace(/\W/g, "").toLowerCase();
            return (!b && a.match(/[ivxl]+/i)) ||
                (b && "alpha" != b) ||
                "roman" == b
                ? { index: f.toArabic(a), type: c + "roman" }
                : a.match(/[a-z]/i)
                ? { index: a.charCodeAt(0) - 97, type: c + "alpha" }
                : { index: -1, type: "disc" };
        },
        getListItemInfo: function (a) {
            if (void 0 !== a.attributes["cke-list-id"])
                return {
                    id: a.attributes["cke-list-id"],
                    level: a.attributes["cke-list-level"],
                };
            var b = m.parseCssText(a.attributes.style)["mso-list"],
                c = { id: "0", level: "1" };
            b &&
                ((b += " "),
                (c.level = b.match(/level(.+?)\s+/)[1]),
                (c.id = b.match(/l(\d+?)\s+/)[1]));
            a.attributes["cke-list-level"] =
                void 0 !== a.attributes["cke-list-level"]
                    ? a.attributes["cke-list-level"]
                    : c.level;
            a.attributes["cke-list-id"] = c.id;
            return c;
        },
    };
    f = CKEDITOR.plugins.pastefromword.lists;
    CKEDITOR.plugins.pastefromword.images = {
        extractFromRtf: function (a) {
            var b = [],
                c =
                    /\{\\pict[\s\S]+?\\bliptag\-?\d+(\\blipupi\-?\d+)?(\{\\\*\\blipuid\s?[\da-fA-F]+)?[\s\}]*?/,
                d;
            a = a.match(
                new RegExp("(?:(" + c.source + "))([\\da-fA-F\\s]+)\\}", "g")
            );
            if (!a) return b;
            for (var e = 0; e < a.length; e++)
                if (c.test(a[e])) {
                    if (-1 !== a[e].indexOf("\\pngblip")) d = "image/png";
                    else if (-1 !== a[e].indexOf("\\jpegblip"))
                        d = "image/jpeg";
                    else continue;
                    b.push({
                        hex: d
                            ? a[e].replace(c, "").replace(/[^\da-fA-F]/g, "")
                            : null,
                        type: d,
                    });
                }
            return b;
        },
        extractTagsFromHtml: function (a) {
            for (
                var b = /<img  [^>]+src="([^"]+)[^>]+/g, c = [], d;
                (d = b.exec(a));

            )
                c.push(d[1]);
            return c;
        },
    };
    CKEDITOR.plugins.pastefromword.heuristics = {
        isEdgeListItem: function (a, b) {
            if (
                !CKEDITOR.env.edge ||
                !a.config.pasteFromWord_heuristicsEdgeList
            )
                return !1;
            var c = "";
            b.forEach &&
                b.forEach(function (a) {
                    c += a.value;
                }, CKEDITOR.NODE_TEXT);
            return c.match(
                /^(?: |&nbsp;)*\(?[a-zA-Z0-9]+?[\.\)](?: |&nbsp;){2,}/
            )
                ? !0
                : t.isDegenerateListItem(a, b);
        },
        cleanupEdgeListItem: function (a) {
            var b = !1;
            a.forEach(function (a) {
                b ||
                    ((a.value = a.value.replace(/^(?:&nbsp;|[\s])+/, "")),
                    a.value.length && (b = !0));
            }, CKEDITOR.NODE_TEXT);
        },
        isDegenerateListItem: function (a, b) {
            return (
                !!b.attributes["cke-list-level"] ||
                (b.attributes.style &&
                    !b.attributes.style.match(/mso\-list/) &&
                    !!b.find(function (a) {
                        if (
                            a.type == CKEDITOR.NODE_ELEMENT &&
                            b.name.match(/h\d/i) &&
                            a.getHtml().match(/^[a-zA-Z0-9]+?[\.\)]$/)
                        )
                            return !0;
                        var d = m.parseCssText(
                            a.attributes && a.attributes.style,
                            !0
                        );
                        if (!d) return !1;
                        var e = d["font-family"] || "";
                        return (
                            ((d.font || d["font-size"] || "").match(/7pt/i) &&
                                !!a.previous) ||
                            e.match(/symbol/i)
                        );
                    }, !0).length)
            );
        },
        assignListLevels: function (a, b) {
            if (!b.attributes || void 0 === b.attributes["cke-list-level"]) {
                for (
                    var c = [f.getElementIndentation(b)],
                        d = [b],
                        e = [],
                        g = CKEDITOR.tools.array,
                        h = g.map;
                    b.next &&
                    b.next.attributes &&
                    !b.next.attributes["cke-list-level"] &&
                    t.isDegenerateListItem(a, b.next);

                )
                    (b = b.next), c.push(f.getElementIndentation(b)), d.push(b);
                var k = h(c, function (a, b) {
                        return 0 === b ? 0 : a - c[b - 1];
                    }),
                    m = this.guessIndentationStep(
                        g.filter(c, function (a) {
                            return 0 !== a;
                        })
                    ),
                    e = h(c, function (a) {
                        return Math.round(a / m);
                    });
                -1 !== g.indexOf(e, 0) &&
                    (e = h(e, function (a) {
                        return a + 1;
                    }));
                g.forEach(d, function (a, b) {
                    a.attributes["cke-list-level"] = e[b];
                });
                return { indents: c, levels: e, diffs: k };
            }
        },
        guessIndentationStep: function (a) {
            return a.length ? Math.min.apply(null, a) : null;
        },
        correctLevelShift: function (a) {
            if (this.isShifted(a)) {
                var b = CKEDITOR.tools.array.filter(a.children, function (a) {
                        return "ul" == a.name || "ol" == a.name;
                    }),
                    c = CKEDITOR.tools.array.reduce(
                        b,
                        function (a, b) {
                            return (
                                b.children &&
                                1 == b.children.length &&
                                t.isShifted(b.children[0])
                                    ? [b]
                                    : b.children
                            ).concat(a);
                        },
                        []
                    );
                CKEDITOR.tools.array.forEach(b, function (a) {
                    a.remove();
                });
                CKEDITOR.tools.array.forEach(c, function (b) {
                    a.add(b);
                });
                delete a.name;
            }
        },
        isShifted: function (a) {
            return "li" !== a.name
                ? !1
                : 0 ===
                      CKEDITOR.tools.array.filter(a.children, function (a) {
                          return a.name &&
                              ("ul" == a.name ||
                                  "ol" == a.name ||
                                  ("p" == a.name && 0 === a.children.length))
                              ? !1
                              : !0;
                      }).length;
        },
    };
    t = CKEDITOR.plugins.pastefromword.heuristics;
    f.setListSymbol.removeRedundancies = function (a, b) {
        ((1 === b && "disc" === a["list-style-type"]) ||
            "decimal" === a["list-style-type"]) &&
            delete a["list-style-type"];
    };
    CKEDITOR.plugins.pastefromword.createAttributeStack = x;
    CKEDITOR.config.pasteFromWord_heuristicsEdgeList = !0;
})();
