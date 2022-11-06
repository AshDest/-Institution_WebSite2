!(function (i) {
    "use strict";
    function e() {
        this.$body = i("body");
    }
    (e.prototype.init = function () {
        i("#jstree-1").jstree({
            core: { themes: { responsive: !1 } },
            types: {
                default: { icon: "dripicons-folder" },
                file: { icon: "dripicons-document" },
            },
            plugins: ["types"],
        }),
            i("#jstree-1").on("select_node.jstree", function (e, t) {
                var n = i("#" + t.selected).find("a");
                if (
                    "#" != n.attr("href") &&
                    "javascript:;" != n.attr("href") &&
                    "" != n.attr("href")
                )
                    return (
                        "_blank" == n.attr("target") &&
                            (n.attr("href").target = "_blank"),
                        (document.location.href = n.attr("href")),
                        !1
                    );
            }),
            i("#jstree-2").jstree({
                core: { themes: { responsive: !1 } },
                types: {
                    default: { icon: "dripicons-folder text-warning" },
                    file: { icon: "dripicons-document  text-warning" },
                },
                plugins: ["types"],
            }),
            i("#jstree-2").on("select_node.jstree", function (e, t) {
                var n = i("#" + t.selected).find("a");
                if (
                    "#" != n.attr("href") &&
                    "javascript:;" != n.attr("href") &&
                    "" != n.attr("href")
                )
                    return (
                        "_blank" == n.attr("target") &&
                            (n.attr("href").target = "_blank"),
                        (document.location.href = n.attr("href")),
                        !1
                    );
            }),
            i("#jstree-3").jstree({
                plugins: ["wholerow", "checkbox", "types"],
                core: {
                    themes: { responsive: !1 },
                    data: [
                        {
                            text: "Same but with checkboxes",
                            children: [
                                {
                                    text: "initially selected",
                                    state: { selected: !0 },
                                },
                                {
                                    text: "custom icon",
                                    icon: "dripicons-feed text-danger",
                                },
                                {
                                    text: "initially open",
                                    icon: "dripicons-folder text-default",
                                    state: { opened: !0 },
                                    children: ["Another node"],
                                },
                                {
                                    text: "custom icon",
                                    icon: "dripicons-hourglass text-warning",
                                },
                                {
                                    text: "disabled node",
                                    icon: "dripicons-wrong text-success",
                                    state: { disabled: !0 },
                                },
                            ],
                        },
                        "And wholerow selection",
                    ],
                },
                types: {
                    default: { icon: "dripicons-folder text-warning" },
                    file: { icon: "dripicons-document  text-warning" },
                },
            }),
            i("#jstree-4").jstree({
                core: {
                    themes: { responsive: !1 },
                    check_callback: !0,
                    data: [
                        {
                            text: "Parent Node",
                            children: [
                                {
                                    text: "Initially selected",
                                    state: { selected: !0 },
                                },
                                {
                                    text: "Custom Icon",
                                    icon: "dripicons-feed text-danger",
                                },
                                {
                                    text: "Initially open",
                                    icon: "dripicons-folder text-success",
                                    state: { opened: !0 },
                                    children: [
                                        {
                                            text: "Another node",
                                            icon: "dripicons-document text-warning",
                                        },
                                    ],
                                },
                                {
                                    text: "Another Custom Icon",
                                    icon: "dripicons-hourglass text-warning",
                                },
                                {
                                    text: "Disabled Node",
                                    icon: "dripicons-wrong text-success",
                                    state: { disabled: !0 },
                                },
                                {
                                    text: "Sub Nodes",
                                    icon: "dripicons-folder text-danger",
                                    children: [
                                        {
                                            text: "Item 1",
                                            icon: "dripicons-document text-warning",
                                        },
                                        {
                                            text: "Item 2",
                                            icon: "dripicons-document text-success",
                                        },
                                        {
                                            text: "Item 3",
                                            icon: "dripicons-document text-default",
                                        },
                                        {
                                            text: "Item 4",
                                            icon: "dripicons-document text-danger",
                                        },
                                        {
                                            text: "Item 5",
                                            icon: "dripicons-document text-info",
                                        },
                                    ],
                                },
                            ],
                        },
                        "Another Node",
                    ],
                },
                types: {
                    default: { icon: "dripicons-folder text-primary" },
                    file: { icon: "dripicons-document  text-primary" },
                },
                state: { key: "demo2" },
                plugins: ["contextmenu", "state", "types"],
            }),
            i("#jstree-5").jstree({
                core: {
                    themes: { responsive: !1 },
                    check_callback: !0,
                    data: [
                        {
                            text: "Parent Node",
                            children: [
                                {
                                    text: "Initially selected",
                                    state: { selected: !0 },
                                },
                                {
                                    text: "Custom Icon",
                                    icon: "dripicons-hourglass text-danger",
                                },
                                {
                                    text: "Initially open",
                                    icon: "dripicons-folder text-success",
                                    state: { opened: !0 },
                                    children: [
                                        {
                                            text: "Another node",
                                            icon: "dripicons-document text-warning",
                                        },
                                    ],
                                },
                                {
                                    text: "Another Custom Icon",
                                    icon: "dripicons-graph-line text-warning",
                                },
                                {
                                    text: "Disabled Node",
                                    icon: "dripicons-wrong text-success",
                                    state: { disabled: !0 },
                                },
                                {
                                    text: "Sub Nodes",
                                    icon: "dripicons-folder text-danger",
                                    children: [
                                        {
                                            text: "Item 1",
                                            icon: "dripicons-document text-warning",
                                        },
                                        {
                                            text: "Item 2",
                                            icon: "dripicons-document text-success",
                                        },
                                        {
                                            text: "Item 3",
                                            icon: "dripicons-document text-default",
                                        },
                                        {
                                            text: "Item 4",
                                            icon: "dripicons-document text-danger",
                                        },
                                        {
                                            text: "Item 5",
                                            icon: "dripicons-document text-info",
                                        },
                                    ],
                                },
                            ],
                        },
                        "Another Node",
                    ],
                },
                types: {
                    default: { icon: "dripicons-folder text-success" },
                    file: { icon: "dripicons-document  text-success" },
                },
                state: { key: "demo2" },
                plugins: ["dnd", "state", "types"],
            }),
            i("#jstree-6").jstree({
                core: {
                    themes: { responsive: !1 },
                    check_callback: !0,
                    data: {
                        url: function (e) {
                            return (
                                e.id,
                                "assets/data/vendor/ajax_demo_children.json"
                            );
                        },
                        data: function (e) {
                            return { id: e.id };
                        },
                    },
                },
                types: {
                    default: { icon: "dripicons-folder text-primary" },
                    file: { icon: "dripicons-document  text-primary" },
                },
                state: { key: "demo3" },
                plugins: ["dnd", "state", "types"],
            });
    }),
        (i.JSTree = new e()),
        (i.JSTree.Constructor = e);
})(window.jQuery),
    (function () {
        "use strict";
        window.jQuery.JSTree.init();
    })();
