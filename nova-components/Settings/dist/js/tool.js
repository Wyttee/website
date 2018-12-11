/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports) {

/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file.
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier /* server only */
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = injectStyles
  }

  if (hook) {
    var functional = options.functional
    var existing = functional
      ? options.render
      : options.beforeCreate

    if (!functional) {
      // inject component registration as beforeCreate hook
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    } else {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functioal component in vue file
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return existing(h, context)
      }
    }
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(2);
module.exports = __webpack_require__(12);


/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

Nova.booting(function (Vue, router) {
    router.addRoutes([{
        name: 'settings',
        path: '/settings',
        component: __webpack_require__(3)
    }, {
        name: 'settings-create',
        path: '/settings/create',
        component: __webpack_require__(6)
    }, {
        name: 'settings-edit',
        path: '/settings/:id/edit',
        component: __webpack_require__(9),
        props: true
    }]);
});

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(0)
/* script */
var __vue_script__ = __webpack_require__(4)
/* template */
var __vue_template__ = __webpack_require__(5)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/components/List.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-1856aeee", Component.options)
  } else {
    hotAPI.reload("data-v-1856aeee", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 4 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    data: function data() {
        return {
            search: '',
            list: []
        };
    },
    filters: {
        truncate: function truncate(text, stop, clamp) {
            return text.slice(0, stop) + (stop < text.length ? clamp || '...' : '');
        }
    },
    computed: {
        filtered: function filtered() {
            var _this = this;

            if (this.search === '') {
                return this.list;
            }

            return this.list.filter(function (item) {
                return _this.isInKey(item, 'key') || _this.isInKey(item, 'value');
            });
        }
    },
    methods: {
        isInKey: function isInKey(item, field) {
            return item[field].toLowerCase().search(this.search.toLowerCase()) !== -1;
        },
        create: function create() {
            this.$router.push({
                name: 'settings-create'
            });
        },
        edit: function edit(item) {
            this.$router.push({
                name: 'settings-edit',
                params: {
                    id: item.id,
                    item: item
                } });
        },
        remove: function remove(item, index) {
            var _this2 = this;

            axios.delete('/nova-vendor/settings/' + item.id).then(function () {
                _this2.$delete(_this2.list, index);
                _this2.$toasted.show("The setting has been delete successfully", {
                    position: 'top-right',
                    type: 'success',
                    duration: 2000
                });
            }).catch(function (error) {
                _this2.$toasted.show(error, {
                    position: 'top-right',
                    type: 'error',
                    duration: 3000
                });
            });
        }
    },
    mounted: function mounted() {
        var _this3 = this;

        axios.get('/nova-vendor/settings/all').then(function (response) {
            _this3.list = response.data;
        }).catch(function (error) {
            return _this3.$toasted.show(error, { type: 'error' });
        });
    }
});

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "relative" },
    [
      _c("heading", { staticClass: "mb-6" }, [_vm._v("Settings")]),
      _vm._v(" "),
      _c("div", { staticClass: "flex justify-between" }, [
        _c("div", { staticClass: "relative h-9 mb-6" }, [
          _c(
            "svg",
            {
              staticClass:
                "fill-current absolute search-icon-center ml-3 text-70",
              attrs: {
                xmlns: "http://www.w3.org/2000/svg",
                width: "20",
                height: "20",
                viewBox: "0 0 20 20",
                "aria-labelledby": "search",
                role: "presentation"
              }
            },
            [
              _c("path", {
                attrs: {
                  "fill-rule": "nonzero",
                  d:
                    "M14.32 12.906l5.387 5.387a1 1 0 0 1-1.414 1.414l-5.387-5.387a8 8 0 1 1 1.414-1.414zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"
                }
              })
            ]
          ),
          _vm._v(" "),
          _c("input", {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.search,
                expression: "search"
              }
            ],
            staticClass:
              "appearance-none form-control form-input w-search pl-search",
            attrs: {
              "data-testid": "search-input",
              dusk: "search",
              placeholder: "Search",
              type: "search"
            },
            domProps: { value: _vm.search },
            on: {
              input: function($event) {
                if ($event.target.composing) {
                  return
                }
                _vm.search = $event.target.value
              }
            }
          })
        ]),
        _vm._v(" "),
        _c("span", { staticClass: "ml-auto mb-6" }, [
          _c(
            "button",
            {
              staticClass: "btn btn-default btn-primary",
              attrs: { dusk: "create-button" },
              on: { click: _vm.create }
            },
            [_vm._v("Create new")]
          )
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "card relative" }, [
        _c("div", { staticClass: "overflow-hidden overflow-x-auto relative" }, [
          _c(
            "table",
            {
              staticClass: "table w-full",
              attrs: {
                cellpadding: "0",
                cellspacing: "0",
                "data-testid": "resource-table"
              }
            },
            [
              _vm._m(0),
              _vm._v(" "),
              _vm._l(_vm.filtered, function(item, index) {
                return _c("tbody", { key: index }, [
                  _c("tr", { attrs: { dusk: "id-row" } }, [
                    _c("td", [_vm._v(_vm._s(item.id))]),
                    _vm._v(" "),
                    _c("td"),
                    _vm._v(" "),
                    _c("td", [
                      _c(
                        "span",
                        {
                          staticClass: "whitespace-no-wrap text-left",
                          attrs: { "via-resource": "", "via-resource-id": "" }
                        },
                        [_vm._v(_vm._s(item.key))]
                      )
                    ]),
                    _vm._v(" "),
                    _c("td", [
                      _c(
                        "span",
                        {
                          staticClass: "whitespace-no-wrap text-left",
                          attrs: { "via-resource": "", "via-resource-id": "" }
                        },
                        [
                          _vm._v(
                            _vm._s(_vm._f("truncate")(item.value, 30, "..."))
                          )
                        ]
                      )
                    ]),
                    _vm._v(" "),
                    _c("td", { staticClass: "td-fit text-right pr-6" }, [
                      _c("span", [
                        _c(
                          "a",
                          {
                            staticClass:
                              "cursor-pointer text-70 hover:text-primary mr-3",
                            attrs: { dusk: "2-edit-button", title: "Edit" },
                            on: {
                              click: function($event) {
                                _vm.edit(item)
                              }
                            }
                          },
                          [
                            _c(
                              "svg",
                              {
                                staticClass: "fill-current",
                                attrs: {
                                  xmlns: "http://www.w3.org/2000/svg",
                                  width: "20",
                                  height: "20",
                                  viewBox: "0 0 20 20",
                                  "aria-labelledby": "edit",
                                  role: "presentation"
                                }
                              },
                              [
                                _c("path", {
                                  attrs: {
                                    d:
                                      "M4.3 10.3l10-10a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-10 10a1 1 0 0 1-.7.3H5a1 1 0 0 1-1-1v-4a1 1 0 0 1 .3-.7zM6 14h2.59l9-9L15 2.41l-9 9V14zm10-2a1 1 0 0 1 2 0v6a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h6a1 1 0 1 1 0 2H2v14h14v-6z"
                                  }
                                })
                              ]
                            )
                          ]
                        )
                      ]),
                      _vm._v(" "),
                      _c(
                        "button",
                        {
                          staticClass:
                            "appearance-none cursor-pointer text-70 hover:text-primary mr-3",
                          attrs: {
                            "data-testid": "users-items-0-delete-button",
                            dusk: "2-delete-button",
                            title: "Delete"
                          },
                          on: {
                            click: function($event) {
                              _vm.remove(item, index)
                            }
                          }
                        },
                        [
                          _c(
                            "svg",
                            {
                              staticClass: "fill-current",
                              attrs: {
                                xmlns: "http://www.w3.org/2000/svg",
                                width: "20",
                                height: "20",
                                viewBox: "0 0 20 20",
                                "aria-labelledby": "delete",
                                role: "presentation"
                              }
                            },
                            [
                              _c("path", {
                                attrs: {
                                  "fill-rule": "nonzero",
                                  d:
                                    "M6 4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6H1a1 1 0 1 1 0-2h5zM4 6v12h12V6H4zm8-2V2H8v2h4zM8 8a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1z"
                                }
                              })
                            ]
                          )
                        ]
                      )
                    ])
                  ])
                ])
              })
            ],
            2
          )
        ])
      ])
    ],
    1
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", [
      _c("tr", [
        _c("th", { staticClass: "text-left" }, [
          _c(
            "span",
            {
              staticClass: "cursor-pointer inline-flex items-center",
              attrs: { dusk: "sort-id" }
            },
            [_vm._v("ID")]
          )
        ]),
        _vm._v(" "),
        _c("th", { staticClass: "text-center" }, [_c("span")]),
        _vm._v(" "),
        _c("th", { staticClass: "text-left" }, [
          _c(
            "span",
            {
              staticClass: "cursor-pointer inline-flex items-center",
              attrs: { dusk: "sort-name" }
            },
            [_vm._v("KEY")]
          )
        ]),
        _vm._v(" "),
        _c("th", { staticClass: "text-left" }, [
          _c(
            "span",
            {
              staticClass: "cursor-pointer inline-flex items-center",
              attrs: { dusk: "sort-email" }
            },
            [_vm._v("VALUE")]
          )
        ]),
        _vm._v(" "),
        _c("th", [_vm._v(" ")])
      ])
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-1856aeee", module.exports)
  }
}

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(0)
/* script */
var __vue_script__ = __webpack_require__(7)
/* template */
var __vue_template__ = __webpack_require__(8)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/components/Create.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-67c71db2", Component.options)
  } else {
    hotAPI.reload("data-v-67c71db2", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 7 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__Previous__ = __webpack_require__(22);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__Previous___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__Previous__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//



/* harmony default export */ __webpack_exports__["default"] = ({
    components: {
        Previous: __WEBPACK_IMPORTED_MODULE_0__Previous___default.a
    },
    data: function data() {
        return {
            item: {}
        };
    },
    methods: {
        create: function create() {
            var _this = this;

            axios.post('/nova-vendor/settings/create', {
                key: this.item.key,
                value: this.item.value
            }).then(function () {
                _this.$toasted.show("The " + _this.item.key + " key has been created successfully", {
                    position: 'top-right',
                    type: 'success',
                    duration: 2000
                });

                _this.$router.push({
                    name: 'settings'
                });
            }).catch(function (error) {
                var errors = error.response.data.errors;

                Object.keys(errors).forEach(function (field) {
                    _this.$toasted.show(errors[field][0], {
                        position: 'top-right',
                        type: 'error',
                        duration: 3000
                    });
                });
            });
        }
    }
});

/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("h1", { staticClass: "mb-3 text-90 font-normal text-2xl" }, [
      _vm._v("Create")
    ]),
    _vm._v(" "),
    _c(
      "div",
      { staticClass: "card overflow-hidden" },
      [
        _c(
          "form",
          {
            on: {
              submit: function($event) {
                $event.preventDefault()
                return _vm.create($event)
              }
            }
          },
          [
            _c("div", { staticClass: "flex border-b border-40" }, [
              _vm._m(0),
              _vm._v(" "),
              _c("div", { staticClass: "w-1/2 px-8 py-6" }, [
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.item.key,
                      expression: "item.key"
                    }
                  ],
                  staticClass:
                    "w-full form-control form-input form-input-bordered",
                  attrs: {
                    id: "name",
                    dusk: "name",
                    placeholder: "Name",
                    type: "text"
                  },
                  domProps: { value: _vm.item.key },
                  on: {
                    input: function($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.$set(_vm.item, "key", $event.target.value)
                    }
                  }
                })
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "flex border-b border-40" }, [
              _vm._m(1),
              _vm._v(" "),
              _c("div", { staticClass: "w-1/2 px-8 py-6" }, [
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.item.value,
                      expression: "item.value"
                    }
                  ],
                  staticClass:
                    "w-full form-control form-input form-input-bordered",
                  attrs: {
                    id: "value",
                    dusk: "value",
                    placeholder: "value",
                    type: "text"
                  },
                  domProps: { value: _vm.item.value },
                  on: {
                    input: function($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.$set(_vm.item, "value", $event.target.value)
                    }
                  }
                })
              ])
            ]),
            _vm._v(" "),
            _vm._m(2)
          ]
        ),
        _vm._v(" "),
        _c("Previous")
      ],
      1
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "w-1/5 px-8 py-6" }, [
      _c("label", { staticClass: "inline-block text-80 h-9 pt-2" }, [
        _vm._v("Name")
      ]),
      _vm._v(" "),
      _c("p", { staticClass: "text-sm leading-normal text-80 italic" })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "w-1/5 px-8 py-6" }, [
      _c("label", { staticClass: "inline-block text-80 h-9 pt-2" }, [
        _vm._v("Value")
      ]),
      _vm._v(" "),
      _c("p", { staticClass: "text-sm leading-normal text-80 italic" })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "bg-30 flex px-8 py-4" }, [
      _c(
        "button",
        {
          staticClass: "ml-auto btn btn-default btn-primary mr-3",
          attrs: { dusk: "update-button" }
        },
        [_vm._v("Create")]
      )
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-67c71db2", module.exports)
  }
}

/***/ }),
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(0)
/* script */
var __vue_script__ = __webpack_require__(10)
/* template */
var __vue_template__ = __webpack_require__(11)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/components/Edit.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-031ccff5", Component.options)
  } else {
    hotAPI.reload("data-v-031ccff5", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 10 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__Previous__ = __webpack_require__(22);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__Previous___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__Previous__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//



/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['id'],
    components: {
        Previous: __WEBPACK_IMPORTED_MODULE_0__Previous___default.a
    },
    data: function data() {
        return {
            item: {}
        };
    },
    methods: {
        update: function update() {
            var _this = this;

            axios.patch('/nova-vendor/settings/' + this.id, {
                id: this.item.id,
                key: this.item.key,
                value: this.item.value
            }).then(function () {
                _this.$toasted.show("The " + _this.item.key + " key has been updated successfully", {
                    position: 'top-right',
                    type: 'success',
                    duration: 2000
                });

                _this.$router.push({
                    name: 'settings'
                });
            }).catch(function (error) {
                var errors = error.response.data.errors;

                Object.keys(errors).forEach(function (field) {
                    _this.$toasted.show(errors[field][0], {
                        position: 'top-right',
                        type: 'error',
                        duration: 3000
                    });
                });
            });
        }
    },
    mounted: function mounted() {
        var _this2 = this;

        axios.get('/nova-vendor/settings/' + this.id).then(function (response) {
            return _this2.item = response.data;
        }).catch(function (error) {
            return console.log(error);
        });
    }
});

/***/ }),
/* 11 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("h1", { staticClass: "mb-3 text-90 font-normal text-2xl" }, [
      _vm._v("Edit")
    ]),
    _vm._v(" "),
    _c(
      "div",
      { staticClass: "card overflow-hidden" },
      [
        _c(
          "form",
          {
            on: {
              submit: function($event) {
                $event.preventDefault()
                return _vm.update($event)
              }
            }
          },
          [
            _c("div", { staticClass: "flex border-b border-40" }, [
              _vm._m(0),
              _vm._v(" "),
              _c("div", { staticClass: "w-1/2 px-8 py-6" }, [
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.item.key,
                      expression: "item.key"
                    }
                  ],
                  staticClass:
                    "w-full form-control form-input form-input-bordered",
                  attrs: {
                    id: "name",
                    dusk: "name",
                    placeholder: "Name",
                    type: "text"
                  },
                  domProps: { value: _vm.item.key },
                  on: {
                    input: function($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.$set(_vm.item, "key", $event.target.value)
                    }
                  }
                })
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "flex border-b border-40" }, [
              _vm._m(1),
              _vm._v(" "),
              _c("div", { staticClass: "w-1/2 px-8 py-6" }, [
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.item.value,
                      expression: "item.value"
                    }
                  ],
                  staticClass:
                    "w-full form-control form-input form-input-bordered",
                  attrs: {
                    id: "value",
                    dusk: "value",
                    placeholder: "value",
                    type: "text"
                  },
                  domProps: { value: _vm.item.value },
                  on: {
                    input: function($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.$set(_vm.item, "value", $event.target.value)
                    }
                  }
                })
              ])
            ]),
            _vm._v(" "),
            _vm._m(2)
          ]
        ),
        _vm._v(" "),
        _c("Previous")
      ],
      1
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "w-1/5 px-8 py-6" }, [
      _c("label", { staticClass: "inline-block text-80 h-9 pt-2" }, [
        _vm._v("Name")
      ]),
      _vm._v(" "),
      _c("p", { staticClass: "text-sm leading-normal text-80 italic" })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "w-1/5 px-8 py-6" }, [
      _c("label", { staticClass: "inline-block text-80 h-9 pt-2" }, [
        _vm._v("Value")
      ]),
      _vm._v(" "),
      _c("p", { staticClass: "text-sm leading-normal text-80 italic" })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "bg-30 flex px-8 py-4" }, [
      _c(
        "button",
        {
          staticClass: "ml-auto btn btn-default btn-primary mr-3",
          attrs: { dusk: "update-button" }
        },
        [_vm._v("Update")]
      )
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-031ccff5", module.exports)
  }
}

/***/ }),
/* 12 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 13 */,
/* 14 */,
/* 15 */,
/* 16 */,
/* 17 */,
/* 18 */,
/* 19 */,
/* 20 */,
/* 21 */,
/* 22 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(0)
/* script */
var __vue_script__ = __webpack_require__(23)
/* template */
var __vue_template__ = __webpack_require__(24)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/components/Previous.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-50d3063c", Component.options)
  } else {
    hotAPI.reload("data-v-50d3063c", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 23 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    methods: {
        previous: function previous() {
            this.$router.push({
                name: 'settings'
            });
        }
    }
});

/***/ }),
/* 24 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c(
      "button",
      {
        staticClass: "btn btn-link py-3 px-4 text-80 opacity-50",
        attrs: { rel: "prev", dusk: "previous" },
        on: { click: _vm.previous }
      },
      [_vm._v("\n        Previous\n    ")]
    )
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-50d3063c", module.exports)
  }
}

/***/ })
/******/ ]);