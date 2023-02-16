import { useSSRContext, mergeProps, resolveComponent, withCtx, createVNode, openBlock, createBlock, toDisplayString, createCommentVNode, Fragment, renderList, createSSRApp, h } from "vue";
import { ssrRenderAttrs, ssrInterpolate, ssrRenderComponent, ssrRenderAttr, ssrRenderStyle, ssrRenderSlot, ssrRenderList } from "vue/server-renderer";
import $$1 from "jquery";
import { Swiper, SwiperSlide } from "swiper/vue";
import { EffectFade, Pagination, Navigation, Autoplay } from "swiper";
import { createInertiaApp } from "@inertiajs/vue3";
import createServer from "@inertiajs/vue3/server";
import { renderToString } from "@vue/server-renderer";
const _export_sfc = (sfc, props) => {
  const target = sfc.__vccOpts || sfc;
  for (const [key, val] of props) {
    target[key] = val;
  }
  return target;
};
const _sfc_main$6 = {
  name: "Loading"
};
function _sfc_ssrRender$6(_ctx, _push, _parent, _attrs, $props, $setup, $data, $options) {
  _push(`<div${ssrRenderAttrs(mergeProps({ class: "st-perloader" }, _attrs))}><div class="st-perloader-in"><div class="st-wave-first"><svg enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08" xmlns="http://www.w3.org/2000/svg"><g><path d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z"></path></g></svg></div><div class="st-wave-second"><svg enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08" xmlns="http://www.w3.org/2000/svg"><g><path d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z"></path></g></svg></div></div></div>`);
}
const _sfc_setup$6 = _sfc_main$6.setup;
_sfc_main$6.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Components/Loading.vue");
  return _sfc_setup$6 ? _sfc_setup$6(props, ctx) : void 0;
};
const Loading = /* @__PURE__ */ _export_sfc(_sfc_main$6, [["ssrRender", _sfc_ssrRender$6]]);
const _sfc_main$5 = {
  name: "HeaderApp"
};
function _sfc_ssrRender$5(_ctx, _push, _parent, _attrs, $props, $setup, $data, $options) {
  const _component_Link = resolveComponent("Link");
  _push(`<header${ssrRenderAttrs(mergeProps({ class: "st-site-header st-style1 st-sticky-header" }, _attrs))}><div class="st-top-header"><div class="container"><div class="st-top-header-in"><ul class="st-top-header-list"><li><svg enable-background="new 0 0 479.058 479.058" viewBox="0 0 479.058 479.058" xmlns="http://www.w3.org/2000/svg"><path d="m434.146 59.882h-389.234c-24.766 0-44.912 20.146-44.912 44.912v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159l-200.355 173.649-200.356-173.649c1.769-.736 3.704-1.159 5.738-1.159zm0 299.411h-389.234c-8.26 0-14.971-6.71-14.971-14.971v-251.648l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"></path></svg><a href="#">${ssrInterpolate(_ctx.__("general.email"))}</a></li><li><svg enable-background="new 0 0 512.021 512.021" viewBox="0 0 512.021 512.021" xmlns="http://www.w3.org/2000/svg"><g><path d="m367.988 512.021c-16.528 0-32.916-2.922-48.941-8.744-70.598-25.646-136.128-67.416-189.508-120.795s-95.15-118.91-120.795-189.508c-8.241-22.688-10.673-46.108-7.226-69.612 3.229-22.016 11.757-43.389 24.663-61.809 12.963-18.501 30.245-33.889 49.977-44.5 21.042-11.315 44.009-17.053 68.265-17.053 7.544 0 14.064 5.271 15.645 12.647l25.114 117.199c1.137 5.307-.494 10.829-4.331 14.667l-42.913 42.912c40.482 80.486 106.17 146.174 186.656 186.656l42.912-42.913c3.837-3.837 9.36-5.466 14.667-4.331l117.199 25.114c7.377 1.581 12.647 8.101 12.647 15.645 0 24.256-5.738 47.224-17.054 68.266-10.611 19.732-25.999 37.014-44.5 49.977-18.419 12.906-39.792 21.434-61.809 24.663-6.899 1.013-13.797 1.518-20.668 1.519zm-236.349-479.321c-31.995 3.532-60.393 20.302-79.251 47.217-21.206 30.265-26.151 67.49-13.567 102.132 49.304 135.726 155.425 241.847 291.151 291.151 34.641 12.584 71.867 7.64 102.132-13.567 26.915-18.858 43.685-47.256 47.217-79.251l-95.341-20.43-44.816 44.816c-4.769 4.769-12.015 6.036-18.117 3.168-95.19-44.72-172.242-121.772-216.962-216.962-2.867-6.103-1.601-13.349 3.168-18.117l44.816-44.816z"></path><path d="m496.02 272c-8.836 0-16-7.164-16-16 0-123.514-100.486-224-224-224-8.836 0-16-7.164-16-16s7.164-16 16-16c68.381 0 132.668 26.628 181.02 74.98s74.98 112.639 74.98 181.02c0 8.836-7.163 16-16 16z"></path><path d="m432.02 272c-8.836 0-16-7.164-16-16 0-88.224-71.776-160-160-160-8.836 0-16-7.164-16-16s7.164-16 16-16c105.869 0 192 86.131 192 192 0 8.836-7.163 16-16 16z"></path><path d="m368.02 272c-8.836 0-16-7.164-16-16 0-52.935-43.065-96-96-96-8.836 0-16-7.164-16-16s7.164-16 16-16c70.58 0 128 57.42 128 128 0 8.836-7.163 16-16 16z"></path></g></svg><a href="#">${ssrInterpolate(_ctx.__("general.phone"))}</a></li></ul><a href="#appointment" class="st-top-header-btn st-smooth-move">${ssrInterpolate(_ctx.__("general.title"))}</a></div></div></div><div class="st-main-header"><div class="container"><div class="st-main-header-in"><div class="st-main-header-left">`);
  _push(ssrRenderComponent(_component_Link, {
    class: "st-site-branding",
    href: _ctx.route("index")
  }, {
    default: withCtx((_, _push2, _parent2, _scopeId) => {
      if (_push2) {
        _push2(`<img${ssrRenderAttr("src", _ctx.asset_url("assets/img/logo.png"))} style="${ssrRenderStyle({ "width": "68px" })}" alt="Nischinto"${_scopeId}>`);
      } else {
        return [
          createVNode("img", {
            src: _ctx.asset_url("assets/img/logo.png"),
            style: { "width": "68px" },
            alt: "Nischinto"
          }, null, 8, ["src"])
        ];
      }
    }),
    _: 1
  }, _parent));
  _push(`</div><div class="st-main-header-right"><div class="st-nav"><ul class="st-nav-list st-onepage-nav"><li><a href="#home" class="st-smooth-move">${ssrInterpolate(_ctx.__("Navbar.Home"))}</a></li><li><a href="#about" class="st-smooth-move">${ssrInterpolate(_ctx.__("Navbar.About"))}</a></li><li><a href="#department" class="st-smooth-move">${ssrInterpolate(_ctx.__("Navbar.department"))}</a></li><li><a href="#doctors" class="st-smooth-move">${ssrInterpolate(_ctx.__("Navbar.Doctors"))}</a></li><li><a href="#gallery" class="st-smooth-move">${ssrInterpolate(_ctx.__("Navbar.Gallery"))}</a></li><li><a href="#contact" class="st-smooth-move">${ssrInterpolate(_ctx.__("Navbar.Contact Us"))}</a></li></ul></div></div></div></div></div></header>`);
}
const _sfc_setup$5 = _sfc_main$5.setup;
_sfc_main$5.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Layouts/HeaderApp.vue");
  return _sfc_setup$5 ? _sfc_setup$5(props, ctx) : void 0;
};
const HeaderApp = /* @__PURE__ */ _export_sfc(_sfc_main$5, [["ssrRender", _sfc_ssrRender$5]]);
const _sfc_main$4 = {
  name: "FooterApp"
};
function _sfc_ssrRender$4(_ctx, _push, _parent, _attrs, $props, $setup, $data, $options) {
  _push(`<footer${ssrRenderAttrs(mergeProps({
    class: "st-site-footer st-sticky-footer st-dynamic-bg",
    "data-src": "assets/img/footer-bg.png"
  }, _attrs))}><div class="st-main-footer"><div class="container"><div class="row"><div class="col-lg-4"><div class="st-footer-widget"><div class="st-text-field"><img${ssrRenderAttr("src", _ctx.asset_url("assets/img/footer-logo.png"))} alt="Nischinto" style="${ssrRenderStyle({ "width": "60px" })}" class="st-footer-logo"><div class="st-height-b25 st-height-lg-b25"></div><div class="st-footer-text">${ssrInterpolate(_ctx.__("Footer.Sub Title"))}</div><div class="st-height-b25 st-height-lg-b25"></div><ul class="st-social-btn st-style1 st-mp0"><li><a href="#"><i class="fab fa-facebook-square"></i></a></li><li><a href="#"><i class="fab fa-linkedin"></i></a></li><li><a href="#"><i class="fab fa-pinterest-square"></i></a></li><li><a href="#"><i class="fab fa-twitter-square"></i></a></li></ul></div></div></div><div class="col-lg-4"><div class="st-footer-widget"><h2 class="st-footer-widget-title">روابط مفيدة</h2><ul class="st-footer-widget-nav st-mp0"><li><a href="#"><i class="fas fa-chevron-right"></i>من نحن</a></li><li><a href="#"><i class="fas fa-chevron-right"></i>الاقسام</a></li><li><a href="#"><i class="fas fa-chevron-right"></i>معرض الصور</a></li><li><a href="#"><i class="fas fa-chevron-right"></i>تواصل معنا</a></li></ul></div></div><div class="col-lg-4"><div class="st-footer-widget"><h2 class="st-footer-widget-title">تواصل معنا</h2><ul class="st-footer-contact-list st-mp0"><li><span class="st-footer-contact-title">العنوان:</span> المملكة العربية السعوديه , الرياض</li><li><span class="st-footer-contact-title">البريد:</span> skyview@Gmail.Com</li><li><span class="st-footer-contact-title">الهاتف:</span> (+966) - 123 456 789 <br>(+966) - 123 456 789</li></ul></div></div></div></div></div><div class="st-copyright-wrap"><div class="container"><div class="st-copyright-in"><div class="st-left-copyright"><div class="st-copyright-text">جميع حقوق التصميم <a href="#">Skyview</a></div></div><div class="st-right-copyright"><div id="st-backtotop"><i class="fas fa-angle-up"></i></div></div></div></div></div></footer>`);
}
const _sfc_setup$4 = _sfc_main$4.setup;
_sfc_main$4.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Layouts/FooterApp.vue");
  return _sfc_setup$4 ? _sfc_setup$4(props, ctx) : void 0;
};
const FooterApp = /* @__PURE__ */ _export_sfc(_sfc_main$4, [["ssrRender", _sfc_ssrRender$4]]);
const _sfc_main$3 = {
  name: "App",
  components: { FooterApp, HeaderApp, Loading },
  props: ["title"],
  mounted() {
    $("#st-backtotop").on("click", function(e) {
      e.preventDefault();
      $("html,body").animate({
        scrollTop: 0
      }, 1e3);
    });
  }
};
function _sfc_ssrRender$3(_ctx, _push, _parent, _attrs, $props, $setup, $data, $options) {
  const _component_Head = resolveComponent("Head");
  const _component_Loading = resolveComponent("Loading");
  const _component_header_app = resolveComponent("header-app");
  const _component_footer_app = resolveComponent("footer-app");
  _push(`<!--[-->`);
  _push(ssrRenderComponent(_component_Head, { title: $props.title }, null, _parent));
  _push(ssrRenderComponent(_component_Loading, null, null, _parent));
  _push(ssrRenderComponent(_component_header_app, null, null, _parent));
  ssrRenderSlot(_ctx.$slots, "default", {}, null, _push, _parent);
  _push(ssrRenderComponent(_component_footer_app, null, null, _parent));
  _push(`<!--]-->`);
}
const _sfc_setup$3 = _sfc_main$3.setup;
_sfc_main$3.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Layouts/App.vue");
  return _sfc_setup$3 ? _sfc_setup$3(props, ctx) : void 0;
};
const App = /* @__PURE__ */ _export_sfc(_sfc_main$3, [["ssrRender", _sfc_ssrRender$3]]);
const swiper_min = "";
const _sfc_main$2 = {
  name: "Slider",
  props: ["sliders"],
  components: {
    Swiper,
    SwiperSlide
  },
  setup() {
    const onSwiper = (swiper) => {
      $$1(".slick-slide-in").removeClass("slick-active");
      let $wrapper = $$1(".swiper-wrapper .swiper-slide").eq(swiper.activeIndex);
      $wrapper.find(".slick-slide-in").addClass("slick-active");
    };
    const onSlideChange = (swiper) => {
      $$1(".slick-slide-in").removeClass("slick-active");
      let $wrapper = $$1(".swiper-wrapper .swiper-slide").eq(swiper.activeIndex);
      $wrapper.find(".slick-slide-in").addClass("slick-active");
    };
    return {
      onSwiper,
      onSlideChange
    };
  }
};
function _sfc_ssrRender$2(_ctx, _push, _parent, _attrs, $props, $setup, $data, $options) {
  const _component_swiper = resolveComponent("swiper");
  const _component_swiper_slide = resolveComponent("swiper-slide");
  _push(`<!--[--><div class="st-height-b125 st-height-lg-b80"></div><div class="st-slider st-style1 st-slider-animation1"><div class="slick-container" data-autoplay="0" data-loop="1" data-speed="800" data-autoplay-timeout="1000" data-center="0" data-slides-per-view="1"><div class="slick-wrapper">`);
  _push(ssrRenderComponent(_component_swiper, {
    "slides-per-view": 1,
    "space-between": 50,
    onSwiper: $setup.onSwiper,
    onSlideChange: $setup.onSlideChange
  }, {
    default: withCtx((_, _push2, _parent2, _scopeId) => {
      if (_push2) {
        _push2(`<!--[-->`);
        ssrRenderList($props.sliders, (slide) => {
          _push2(ssrRenderComponent(_component_swiper_slide, null, {
            default: withCtx((_2, _push3, _parent3, _scopeId2) => {
              if (_push3) {
                _push3(`<div class="slick-slide-in"${_scopeId2}><div class="st-hero st-style1 st-size1"${_scopeId2}><img class="st-hero-bg st-dynamic-bg st-bg"${ssrRenderAttr("src", _ctx.asset_url(slide.image))}${_scopeId2}><div class="container"${_scopeId2}><div class="st-hero-text"${_scopeId2}>`);
                if (slide.text.title) {
                  _push3(`<h1 class="st-hero-title"${_scopeId2}>${ssrInterpolate(slide.text.title)}</h1>`);
                } else {
                  _push3(`<!---->`);
                }
                if (slide.text.content) {
                  _push3(`<div class="st-hero-subtitle"${_scopeId2}>${ssrInterpolate(slide.text.content)}</div>`);
                } else {
                  _push3(`<!---->`);
                }
                if (slide.text.link) {
                  _push3(`<div class="st-hero-btn-group"${_scopeId2}><a${ssrRenderAttr("href", slide.text.link)} class="st-btn st-style1 st-size-medium st-color1 st-smooth-move"${_scopeId2}>مشاهدة</a></div>`);
                } else {
                  _push3(`<!---->`);
                }
                _push3(`<div class="st-height-b15 st-height-lg-b15"${_scopeId2}></div></div></div></div></div>`);
              } else {
                return [
                  createVNode("div", { class: "slick-slide-in" }, [
                    createVNode("div", { class: "st-hero st-style1 st-size1" }, [
                      createVNode("img", {
                        class: "st-hero-bg st-dynamic-bg st-bg",
                        src: _ctx.asset_url(slide.image)
                      }, null, 8, ["src"]),
                      createVNode("div", { class: "container" }, [
                        createVNode("div", { class: "st-hero-text" }, [
                          slide.text.title ? (openBlock(), createBlock("h1", {
                            key: 0,
                            class: "st-hero-title"
                          }, toDisplayString(slide.text.title), 1)) : createCommentVNode("", true),
                          slide.text.content ? (openBlock(), createBlock("div", {
                            key: 1,
                            class: "st-hero-subtitle"
                          }, toDisplayString(slide.text.content), 1)) : createCommentVNode("", true),
                          slide.text.link ? (openBlock(), createBlock("div", {
                            key: 2,
                            class: "st-hero-btn-group"
                          }, [
                            createVNode("a", {
                              href: slide.text.link,
                              class: "st-btn st-style1 st-size-medium st-color1 st-smooth-move"
                            }, "مشاهدة", 8, ["href"])
                          ])) : createCommentVNode("", true),
                          createVNode("div", { class: "st-height-b15 st-height-lg-b15" })
                        ])
                      ])
                    ])
                  ])
                ];
              }
            }),
            _: 2
          }, _parent2, _scopeId));
        });
        _push2(`<!--]-->`);
      } else {
        return [
          (openBlock(true), createBlock(Fragment, null, renderList($props.sliders, (slide) => {
            return openBlock(), createBlock(_component_swiper_slide, null, {
              default: withCtx(() => [
                createVNode("div", { class: "slick-slide-in" }, [
                  createVNode("div", { class: "st-hero st-style1 st-size1" }, [
                    createVNode("img", {
                      class: "st-hero-bg st-dynamic-bg st-bg",
                      src: _ctx.asset_url(slide.image)
                    }, null, 8, ["src"]),
                    createVNode("div", { class: "container" }, [
                      createVNode("div", { class: "st-hero-text" }, [
                        slide.text.title ? (openBlock(), createBlock("h1", {
                          key: 0,
                          class: "st-hero-title"
                        }, toDisplayString(slide.text.title), 1)) : createCommentVNode("", true),
                        slide.text.content ? (openBlock(), createBlock("div", {
                          key: 1,
                          class: "st-hero-subtitle"
                        }, toDisplayString(slide.text.content), 1)) : createCommentVNode("", true),
                        slide.text.link ? (openBlock(), createBlock("div", {
                          key: 2,
                          class: "st-hero-btn-group"
                        }, [
                          createVNode("a", {
                            href: slide.text.link,
                            class: "st-btn st-style1 st-size-medium st-color1 st-smooth-move"
                          }, "مشاهدة", 8, ["href"])
                        ])) : createCommentVNode("", true),
                        createVNode("div", { class: "st-height-b15 st-height-lg-b15" })
                      ])
                    ])
                  ])
                ])
              ]),
              _: 2
            }, 1024);
          }), 256))
        ];
      }
    }),
    _: 1
  }, _parent));
  _push(`</div></div></div><!--]-->`);
}
const _sfc_setup$2 = _sfc_main$2.setup;
_sfc_main$2.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Components/Slider.vue");
  return _sfc_setup$2 ? _sfc_setup$2(props, ctx) : void 0;
};
const Slider = /* @__PURE__ */ _export_sfc(_sfc_main$2, [["ssrRender", _sfc_ssrRender$2]]);
const effectFade_min = "";
const pagination_min = "";
const navigation_min = "";
const _sfc_main$1 = {
  name: "SliderComments",
  props: ["opinions"],
  components: {
    Swiper,
    SwiperSlide
  },
  setup() {
    return {
      EffectFade,
      modules: [Pagination, Navigation, Autoplay]
    };
  }
};
function _sfc_ssrRender$1(_ctx, _push, _parent, _attrs, $props, $setup, $data, $options) {
  const _component_swiper = resolveComponent("swiper");
  const _component_swiper_slide = resolveComponent("swiper-slide");
  _push(ssrRenderComponent(_component_swiper, mergeProps({
    speed: 800,
    autoplay: {
      "delay": 5e3,
      "speed": 1e3,
      "disableOnInteraction": false
    },
    "slides-per-view": 3,
    navigation: true,
    centeredSlides: true,
    roundLengths: true,
    loop: true,
    loopAdditionalSlides: 30,
    "space-between": 10,
    modules: $setup.modules
  }, _attrs), {
    default: withCtx((_, _push2, _parent2, _scopeId) => {
      if (_push2) {
        _push2(`<!--[-->`);
        ssrRenderList($props.opinions, (opinion) => {
          _push2(ssrRenderComponent(_component_swiper_slide, null, {
            default: withCtx((_2, _push3, _parent3, _scopeId2) => {
              if (_push3) {
                _push3(`<div class="slick-slide-in"${_scopeId2}><div class="st-testimonial st-style1 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s"${_scopeId2}><div class="st-testimonial-info"${_scopeId2}><div class="st-testimonial-img"${_scopeId2}><img class="rounded-full"${ssrRenderAttr("src", _ctx.asset_url(opinion.image))}${ssrRenderAttr("alt", opinion.text.title)}${_scopeId2}></div><div class="st-testimonial-meta"${_scopeId2}><h4 class="st-testimonial-name"${_scopeId2}>${ssrInterpolate(opinion.text.title)}</h4></div></div><div class="st-testimonial-text"${_scopeId2}>${ssrInterpolate(opinion.text.content)}</div><div class="st-quote"${_scopeId2}><i class="fas fa-quote-right"${_scopeId2}></i></div></div></div>`);
              } else {
                return [
                  createVNode("div", { class: "slick-slide-in" }, [
                    createVNode("div", {
                      class: "st-testimonial st-style1 wow fadeInLeft",
                      "data-wow-duration": "0.8s",
                      "data-wow-delay": "0.2s"
                    }, [
                      createVNode("div", { class: "st-testimonial-info" }, [
                        createVNode("div", { class: "st-testimonial-img" }, [
                          createVNode("img", {
                            class: "rounded-full",
                            src: _ctx.asset_url(opinion.image),
                            alt: opinion.text.title
                          }, null, 8, ["src", "alt"])
                        ]),
                        createVNode("div", { class: "st-testimonial-meta" }, [
                          createVNode("h4", { class: "st-testimonial-name" }, toDisplayString(opinion.text.title), 1)
                        ])
                      ]),
                      createVNode("div", { class: "st-testimonial-text" }, toDisplayString(opinion.text.content), 1),
                      createVNode("div", { class: "st-quote" }, [
                        createVNode("i", { class: "fas fa-quote-right" })
                      ])
                    ])
                  ])
                ];
              }
            }),
            _: 2
          }, _parent2, _scopeId));
        });
        _push2(`<!--]-->`);
      } else {
        return [
          (openBlock(true), createBlock(Fragment, null, renderList($props.opinions, (opinion) => {
            return openBlock(), createBlock(_component_swiper_slide, null, {
              default: withCtx(() => [
                createVNode("div", { class: "slick-slide-in" }, [
                  createVNode("div", {
                    class: "st-testimonial st-style1 wow fadeInLeft",
                    "data-wow-duration": "0.8s",
                    "data-wow-delay": "0.2s"
                  }, [
                    createVNode("div", { class: "st-testimonial-info" }, [
                      createVNode("div", { class: "st-testimonial-img" }, [
                        createVNode("img", {
                          class: "rounded-full",
                          src: _ctx.asset_url(opinion.image),
                          alt: opinion.text.title
                        }, null, 8, ["src", "alt"])
                      ]),
                      createVNode("div", { class: "st-testimonial-meta" }, [
                        createVNode("h4", { class: "st-testimonial-name" }, toDisplayString(opinion.text.title), 1)
                      ])
                    ]),
                    createVNode("div", { class: "st-testimonial-text" }, toDisplayString(opinion.text.content), 1),
                    createVNode("div", { class: "st-quote" }, [
                      createVNode("i", { class: "fas fa-quote-right" })
                    ])
                  ])
                ])
              ]),
              _: 2
            }, 1024);
          }), 256))
        ];
      }
    }),
    _: 1
  }, _parent));
}
const _sfc_setup$1 = _sfc_main$1.setup;
_sfc_main$1.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Components/SliderComments.vue");
  return _sfc_setup$1 ? _sfc_setup$1(props, ctx) : void 0;
};
const SliderComments = /* @__PURE__ */ _export_sfc(_sfc_main$1, [["ssrRender", _sfc_ssrRender$1]]);
const Welcome_vue_vue_type_style_index_0_scoped_95c8e9f1_lang = "";
const _sfc_main = {
  name: "Welcome",
  props: ["sliders", "opinions"],
  components: { SliderComments, Slider, App },
  mounted() {
    $$1(document).on("click", ".st-video-open", function(e) {
      e.preventDefault();
      var video = $$1(this).attr("href");
      $$1(".st-video-popup-container iframe").attr("src", video);
      $$1(".st-video-popup").addClass("active");
    });
    $$1(".st-video-popup-close, .st-video-popup-layer").on("click", function(e) {
      $$1(".st-video-popup").removeClass("active");
      $$1("html").removeClass("overflow-hidden");
      $$1(".st-video-popup-container iframe").attr("src", "about:blank");
      e.preventDefault();
    });
  }
};
function _sfc_ssrRender(_ctx, _push, _parent, _attrs, $props, $setup, $data, $options) {
  const _component_app = resolveComponent("app");
  const _component_slider = resolveComponent("slider");
  const _component_slider_comments = resolveComponent("slider-comments");
  _push(ssrRenderComponent(_component_app, mergeProps({
    title: _ctx.__("Navbar.Home")
  }, _attrs), {
    default: withCtx((_, _push2, _parent2, _scopeId) => {
      if (_push2) {
        _push2(`<div class="st-content" data-v-95c8e9f1${_scopeId}>`);
        _push2(ssrRenderComponent(_component_slider, { sliders: $props.sliders }, null, _parent2, _scopeId));
        _push2(`<section data-v-95c8e9f1${_scopeId}><div class="st-height-b120 st-height-lg-b80" data-v-95c8e9f1${_scopeId}></div><div class="container" data-v-95c8e9f1${_scopeId}><div class="row" data-v-95c8e9f1${_scopeId}><div class="col-lg-4" data-v-95c8e9f1${_scopeId}><div class="st-iconbox st-style1" data-v-95c8e9f1${_scopeId}><div class="st-iconbox-icon st-purple-box" data-v-95c8e9f1${_scopeId}><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve" data-v-95c8e9f1${_scopeId}><g data-v-95c8e9f1${_scopeId}><path d="M482.726,485.783l-22.65-132.603c-2.441-14.287-12.576-25.764-26.453-29.95l-61.092-18.433
                      c-1.265-14.934-7.388-29.023-17.578-40.175c-8.151-8.92-18.403-15.415-29.704-18.999c1.934-2.146,3.727-4.285,5.372-6.377
                      c14.528-18.477,22.306-38.833,24.286-52.724h4.713c12.258,0,22.231-9.972,22.231-22.231v-11.396
                      c0-8.181-4.602-15.594-11.523-19.441V106.05c0-4.141-3.357-7.498-7.498-7.498s-7.497,3.356-7.497,7.498v30.764
                      c-2.92,0.507-6.404,1.383-9.968,2.884c-0.365,0.133-0.72,0.287-1.056,0.472c-0.805,0.367-1.611,0.754-2.414,1.19V80.938
                      c0-16.693-13.58-30.273-30.273-30.273h-20.695c-7.138,0-14.111,2.487-19.637,7.005l-2.031,1.66c-3.73,3.05-8.438,4.73-13.257,4.73
                      c-4.819,0-9.528-1.68-13.258-4.73l-2.03-1.66c-5.526-4.517-12.499-7.005-19.637-7.005H200.38
                      c-16.693,0-30.273,13.58-30.273,30.273v60.422c-0.803-0.436-1.609-0.823-2.414-1.19c-0.336-0.185-0.69-0.339-1.055-0.472
                      c-3.564-1.501-7.049-2.377-9.968-2.884V59.025c0-24.278,19.752-44.03,44.03-44.03h110.601c24.279,0,44.03,19.752,44.03,44.03
                      v11.786c0,4.141,3.357,7.498,7.497,7.498s7.498-3.356,7.498-7.498V59.025C370.326,26.479,343.847,0,311.301,0H200.7
                      c-32.547,0-59.025,26.479-59.025,59.025v74.43c-6.921,3.847-11.523,11.259-11.523,19.441v11.396
                      c0,12.259,9.973,22.231,22.231,22.231h4.713c1.979,13.891,9.758,34.247,24.286,52.724c1.643,2.09,3.435,4.227,5.367,6.371
                      c-25.98,8.252-44.926,31.61-47.277,59.179L78.378,323.23c-13.877,4.186-24.013,15.663-26.453,29.95l-9.198,53.849
                      c-0.697,4.082,2.047,7.955,6.128,8.652c4.08,0.699,7.955-2.046,8.653-6.128l9.198-53.849c1.476-8.644,7.608-15.586,16.003-18.118
                      l56.505-17.049v14.831c-12.952,2.384-23.973,11.281-28.512,23.608c-1.205,3.272-1.954,6.698-2.226,10.182l-5.461,70.095
                      c-0.412,5.28,1.415,10.538,5.01,14.423c3.595,3.886,8.694,6.116,13.989,6.116h9.348c4.141,0,7.498-3.356,7.498-7.498
                      c0-4.142-3.357-7.497-7.498-7.497h-9.348c-1.129,0-2.215-0.474-2.982-1.304c-0.766-0.828-1.155-1.948-1.067-3.073l5.461-70.096
                      c0.165-2.111,0.618-4.186,1.348-6.167c3.158-8.575,11.686-14.382,21.223-14.449l1.235-0.009c0.058-0.001,0.115-0.001,0.172-0.001
                      c9.269,0,17.474,5.256,20.935,13.427c0.971,2.291,1.561,4.713,1.755,7.199l5.463,70.097c0.087,1.124-0.302,2.244-1.068,3.073
                      c-0.766,0.828-1.853,1.303-2.982,1.303h-9.348c-4.141,0-7.498,3.356-7.498,7.497c0,4.141,3.357,7.498,7.498,7.498h9.348
                      c5.295,0,10.395-2.229,13.989-6.116c3.596-3.887,5.423-9.144,5.011-14.422l-5.463-70.096c-0.32-4.102-1.295-8.101-2.898-11.884
                      c-4.939-11.657-15.5-19.762-27.938-21.955v-19.306l25.774-7.777c2.345,4.939,6.992,15.612,16.197,38.619
                      c9.277,23.214,20.808,52.969,31.867,81.895c0.079,0.243,0.17,0.48,0.272,0.712c7.38,19.311,14.539,38.225,20.662,54.541
                      c1.098,2.926,3.895,4.864,7.02,4.864c3.125,0,5.922-1.938,7.02-4.864c6.122-16.316,13.281-35.23,20.662-54.541
                      c0.103-0.232,0.193-0.47,0.272-0.712c11.051-28.909,22.576-58.645,31.849-81.852c9.217-23.037,13.868-33.719,16.214-38.662
                      l25.774,7.777v44.285c-17.858,3.469-31.385,19.219-31.385,38.077c0,21.391,17.403,38.795,38.795,38.795
                      c21.392,0,38.795-17.403,38.795-38.795c0-18.796-13.438-34.508-31.21-38.045v-39.792l56.506,17.049
                      c8.395,2.532,14.526,9.474,16.003,18.118l22.65,132.603c0.376,2.199-0.209,4.349-1.648,6.054c-1.438,1.704-3.459,2.644-5.69,2.644
                      H51.393c-2.231,0-4.251-0.939-5.69-2.644c-1.438-1.705-2.024-3.854-1.648-6.054l7.475-43.762c0.697-4.082-2.047-7.955-6.128-8.652
                      c-4.08-0.7-7.955,2.047-8.653,6.128l-7.475,43.762c-1.115,6.532,0.696,13.183,4.968,18.248C38.516,509.096,44.767,512,51.393,512
                      h409.214c6.626,0,12.878-2.904,17.151-7.969C482.03,498.966,483.841,492.315,482.726,485.783z M355.421,152.089
                      c3.995-0.996,7.202-0.978,7.238-0.977c1.292,0.017,2.548-0.285,3.664-0.87c0.334,0.831,0.531,1.724,0.531,2.654v11.396
                      c0,3.99-3.246,7.236-7.236,7.236h-4.197V152.089z M156.579,171.528L156.579,171.528h-4.197c-3.99,0-7.236-3.246-7.236-7.236
                      v-11.396c0-0.93,0.198-1.823,0.531-2.653c1.115,0.585,2.371,0.887,3.664,0.869c0.057,0.01,3.255-0.008,7.238,0.981V171.528z
                       M171.574,179.935v-19.698c2.272,0.681,4.757,0.588,7.051-0.369c3.935-1.642,6.477-5.455,6.477-9.716V80.938
                      c0-8.424,6.854-15.278,15.278-15.278h20.695c3.688,0,7.291,1.285,10.146,3.619l2.03,1.66c6.401,5.234,14.48,8.115,22.749,8.115
                      c8.269,0,16.348-2.882,22.749-8.115l2.03-1.66c2.854-2.334,6.458-3.619,10.146-3.619h20.695c8.424,0,15.278,6.854,15.278,15.278
                      v69.215c0,4.26,2.542,8.074,6.477,9.716c1.314,0.548,2.69,0.814,4.054,0.814c1.017,0,2.026-0.149,2.997-0.439v19.691
                      c0,10.947-7.568,32.205-21.594,50.043c-4.646,5.909-10.618,12.257-17.971,17.805c-0.233,0.156-0.456,0.325-0.669,0.505
                      c-11.391,8.422-26.038,14.874-44.192,14.874s-32.801-6.452-44.193-14.875c-0.213-0.179-0.435-0.348-0.667-0.503
                      c-7.353-5.549-13.325-11.897-17.972-17.806C179.143,212.141,171.574,190.882,171.574,179.935z M305.12,301.07L256,337.784
                      l-49.12-36.714c4.871-6.191,7.6-14.138,7.6-21.23v-12.086c11.551,6.212,25.334,10.404,41.52,10.404s29.97-4.192,41.52-10.404
                      v12.086C297.52,286.932,300.249,294.879,305.12,301.07z M194.367,292.701c-4.004-1.525-8.443-1.775-12.642-0.636
                      c-0.184,0.043-0.364,0.092-0.539,0.144l-25.903,7.816c4.381-21.542,21.873-38.688,44.202-42.009v21.824
                      C199.485,284.544,197.385,289.407,194.367,292.701z M214.716,352.889c-0.014-0.035-0.028-0.07-0.041-0.104
                      c-0.38-0.961-0.755-1.909-1.127-2.846c-0.067-0.17-0.134-0.339-0.201-0.507c-0.364-0.917-0.725-1.827-1.081-2.722
                      c-0.025-0.063-0.05-0.125-0.075-0.189c-1.111-2.793-2.182-5.472-3.212-8.039c-0.075-0.186-0.15-0.375-0.225-0.56
                      c-0.296-0.736-0.587-1.461-0.876-2.177c-0.106-0.263-0.211-0.523-0.316-0.783c-0.28-0.694-0.558-1.384-0.832-2.059
                      c-0.082-0.202-0.162-0.398-0.243-0.599c-0.497-1.226-0.983-2.421-1.457-3.586c-0.128-0.315-0.259-0.636-0.386-0.947
                      c-0.186-0.454-0.367-0.896-0.549-1.341c-0.196-0.48-0.392-0.956-0.584-1.424c-0.072-0.175-0.147-0.36-0.219-0.534
                      c-0.058-0.14-0.111-0.269-0.168-0.408c-0.866-2.104-1.689-4.087-2.47-5.952c-0.006-0.015-0.013-0.03-0.019-0.045
                      c-0.416-0.993-0.823-1.963-1.214-2.887c-0.203-0.479-0.403-0.95-0.599-1.412l42.245,31.574l-17.652,7.499
                      c-0.031,0.013-0.063,0.026-0.094,0.04l-7.37,3.131C215.533,354.955,215.124,353.919,214.716,352.889z M232.606,398.797
                      c-1.481-3.843-2.973-7.708-4.468-11.569c-2.338-6.039-4.571-11.781-6.708-17.251l2.798-1.189l11.432,13.289L232.606,398.797z
                       M256.145,459.735c-0.215-0.446-0.471-0.867-0.767-1.259c-3.388-8.955-7.688-20.286-12.447-32.753l7-38.325h12.138l7,38.325
                      C264.082,438.784,259.603,450.594,256.145,459.735z M264.881,372.404h-17.762l-8.405-9.77L256,355.291l17.286,7.343
                      L264.881,372.404z M283.862,387.228c-1.495,3.861-2.987,7.726-4.468,11.569l-3.054-16.721l11.432-13.289l2.798,1.189
                      C288.433,375.446,286.2,381.189,283.862,387.228z M312.58,315.18c-0.371,0.876-0.757,1.795-1.15,2.733
                      c-0.051,0.122-0.103,0.245-0.154,0.368c-0.389,0.93-0.785,1.88-1.195,2.869c-0.027,0.065-0.055,0.134-0.082,0.2
                      c-0.354,0.853-0.717,1.733-1.086,2.63c-0.069,0.168-0.134,0.323-0.203,0.492c-0.082,0.201-0.17,0.414-0.253,0.617
                      c-0.164,0.4-0.331,0.808-0.499,1.216c-0.206,0.503-0.411,1.004-0.622,1.519c-0.067,0.164-0.136,0.335-0.204,0.5
                      c-0.522,1.279-1.058,2.597-1.606,3.951c-0.086,0.212-0.171,0.42-0.257,0.635c-0.271,0.669-0.547,1.352-0.824,2.039
                      c-0.108,0.269-0.217,0.537-0.326,0.809c-0.286,0.709-0.575,1.427-0.867,2.155c-0.082,0.203-0.165,0.411-0.247,0.615
                      c-1.017,2.532-2.072,5.173-3.167,7.925c-0.036,0.091-0.072,0.18-0.108,0.272c-0.354,0.889-0.712,1.793-1.074,2.704
                      c-0.067,0.17-0.135,0.34-0.203,0.511c-0.374,0.942-0.751,1.894-1.133,2.861c-0.007,0.018-0.014,0.036-0.021,0.053
                      c-0.412,1.042-0.826,2.09-1.248,3.16l-7.377-3.134c-0.026-0.011-0.052-0.022-0.077-0.033l-17.662-7.503l42.245-31.574
                      C312.982,314.23,312.782,314.7,312.58,315.18z M330.814,292.21c-0.001,0-0.003-0.001-0.004-0.001
                      c-0.006-0.002-0.013-0.003-0.019-0.006c-4.35-1.305-8.99-1.089-13.157,0.498c-3.019-3.294-5.118-8.157-5.118-12.861v-21.835
                      c22.469,3.312,39.908,20.297,44.232,42.029L330.814,292.21z M389.001,398.375c0,13.124-10.677,23.8-23.8,23.8
                      s-23.8-10.676-23.8-23.8c0-13.124,10.677-23.8,23.8-23.8S389.001,385.251,389.001,398.375z" data-v-95c8e9f1${_scopeId}></path></g></svg></div><h2 class="st-iconbox-title" data-v-95c8e9f1${_scopeId}>تواصل مع مختصين</h2><div class="st-iconbox-text" data-v-95c8e9f1${_scopeId}>تواصل مع جميع الاطباء المختصين في العلاج الطبيعي.</div></div><div class="st-height-b0 st-height-lg-b30" data-v-95c8e9f1${_scopeId}></div></div><div class="col-lg-4" data-v-95c8e9f1${_scopeId}><div class="st-iconbox st-style1" data-v-95c8e9f1${_scopeId}><div class="st-iconbox-icon st-green-box" data-v-95c8e9f1${_scopeId}><svg enable-background="new 0 0 511.988 511.988" viewBox="0 0 511.988 511.988" xmlns="http://www.w3.org/2000/svg" data-v-95c8e9f1${_scopeId}><g data-v-95c8e9f1${_scopeId}><path d="m511.988 227.658c0-60.096-23.44-116.593-66.004-159.085-42.559-42.489-99.142-65.888-159.327-65.888-62.806 0-122.954 26.329-165.547 72.348-7.616-2.821-15.75-4.293-24.108-4.293-.001 0 .001 0 0 0-18.539 0-35.977 7.24-49.098 20.385-.274.275-.532.565-.772.87l-15.678 19.868c-14.987 18.993-25.114 41.58-29.285 65.318-4.207 23.943-2.269 48.627 5.605 71.384 5.707 16.494 12.887 29.151 21.342 37.622l193.83 194.143c6.704 6.717 16.109 12.686 27.956 17.74 17.668 7.539 36.431 11.233 55.167 11.232 31.195-.001 62.309-10.246 88.105-30.047l22.298-17.116c.348-.268.679-.558.989-.868 17.59-17.623 23.745-42.431 18.464-65.082 48.367-42.732 76.063-104.032 76.063-168.531zm-108.241 219.036-21.75 16.696c-35.571 27.305-82.795 33.545-123.246 16.285-9.479-4.044-16.763-8.578-21.65-13.474l-193.831-194.144c-6.301-6.313-11.885-16.418-16.596-30.032-13.829-39.97-6.173-83.997 20.48-117.773l15.301-19.391c9.295-9.111 21.541-14.121 34.546-14.121 13.19 0 25.599 5.155 34.941 14.514l32.021 32.081c18.41 18.444 18.41 48.454-.002 66.9l-35.863 35.951c-3.895 3.905-3.894 10.226.003 14.128l126.446 126.631c1.876 1.878 4.421 2.934 7.076 2.934h.003c2.656 0 5.202-1.058 7.077-2.938l35.86-35.948c8.919-8.936 20.767-13.857 33.36-13.857s24.44 4.921 33.36 13.857l32.021 32.081c19.135 19.17 19.282 50.268.443 69.62zm-15.287-112.803-3.021-3.026c-12.698-12.722-29.573-19.728-47.515-19.728-17.943 0-34.817 7.006-47.518 19.73l-28.786 28.857-112.313-112.479 28.812-28.883c25.359-25.407 26.159-66.243 2.401-92.624 27.711-28.735 66.034-45.095 106.137-45.095 81.209 0 147.276 65.95 147.276 147.014 0 40.189-16.496 78.547-45.473 106.234zm29.001 29.055-14.869-14.897c32.721-31.428 51.341-74.875 51.341-120.392 0-92.092-75.04-167.014-167.276-167.014-45.385 0-88.762 18.449-120.206 50.873l-20.353-20.391c-2.191-2.195-4.502-4.225-6.918-6.084 38.582-39.723 91.887-62.356 147.477-62.356 113.22 0 205.331 91.95 205.331 204.972 0 56.381-23.234 110.084-64.048 148.736-2.866-4.796-6.359-9.319-10.479-13.447z" data-v-95c8e9f1${_scopeId}></path><path d="m355.669 228.279h-1.121c.121-21.045.184-43.537-.076-46.664-.586-7.056-4.823-12.807-10.796-14.65-5.923-1.828-12.211.471-16.822 6.152-4.979 6.136-27.961 47.742-34.886 60.347-1.702 3.098-1.642 6.864.158 9.907 1.8 3.042 5.072 4.908 8.606 4.908h33.681c-.041 5.609-.084 10.986-.125 15.844-.047 5.523 4.391 10.038 9.914 10.085.029.001.059.001.088.001 5.482 0 9.951-4.421 9.997-9.914.026-2.999.074-8.807.128-16.016h1.253c5.523 0 10-4.477 10-10 .001-5.523-4.477-10-9.999-10zm-21.125 0h-16.853c6.251-11.227 12.345-21.998 16.965-29.943-.004 8.206-.048 18.878-.112 29.943z" data-v-95c8e9f1${_scopeId}></path><path d="m277.116 256.998c-8.794.111-18.124.184-25.861.199 4.857-6.523 11.614-15.793 20.75-28.902 5.593-8.025 9.24-15.609 10.84-22.541.375-1.584.688-4.6.689-5.647.018-17.91-14.528-32.48-32.385-32.48-15.444 0-28.809 11.02-31.779 26.204-1.06 5.42 2.474 10.673 7.895 11.733 5.419 1.059 10.673-2.475 11.733-7.895 1.138-5.819 6.248-10.042 12.151-10.042 6.649 0 12.09 5.307 12.373 11.938l-.272 2.136c-1.091 4.338-3.664 9.436-7.654 15.16-13.857 19.883-22.126 30.756-26.567 36.598-5.489 7.217-7.994 10.511-6.29 16.041 1.001 3.249 3.461 5.744 6.749 6.844 1.337.448 2.619.877 19.628.877 6.676 0 15.777-.066 28.251-.224 5.522-.069 9.943-4.603 9.873-10.125-.068-5.523-4.619-9.93-10.124-9.874z" data-v-95c8e9f1${_scopeId}></path></g></svg></div><h2 class="st-iconbox-title" data-v-95c8e9f1${_scopeId}>الخدمة 24 ساعه</h2><div class="st-iconbox-text" data-v-95c8e9f1${_scopeId}>متاحين 24 ساعه في اوقات العمل.</div></div><div class="st-height-b0 st-height-lg-b30" data-v-95c8e9f1${_scopeId}></div></div><div class="col-lg-4" data-v-95c8e9f1${_scopeId}><div class="st-iconbox st-style1" data-v-95c8e9f1${_scopeId}><div class="st-iconbox-icon st-red-box" data-v-95c8e9f1${_scopeId}><svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" data-v-95c8e9f1${_scopeId}><g data-v-95c8e9f1${_scopeId}><g data-v-95c8e9f1${_scopeId}><g data-v-95c8e9f1${_scopeId}><path d="m256 38.397c5.522 0 10-4.477 10-10v-18.397c0-5.523-4.478-10-10-10-5.523 0-10 4.477-10 10v18.397c0 5.523 4.477 10 10 10z" data-v-95c8e9f1${_scopeId}></path><path d="m342.609 62.764c1.556.88 3.246 1.298 4.915 1.298 3.486 0 6.874-1.827 8.713-5.079l9.655-17.069c2.719-4.807 1.026-10.908-3.78-13.628-4.806-2.718-10.909-1.027-13.628 3.781l-9.655 17.069c-2.719 4.807-1.026 10.908 3.78 13.628z" data-v-95c8e9f1${_scopeId}></path><path d="m409.789 128.753c1.634 0 3.292-.401 4.823-1.247l18.457-10.187c4.835-2.668 6.592-8.752 3.923-13.587-2.669-4.836-8.754-6.592-13.587-3.923l-18.457 10.187c-4.835 2.668-6.592 8.752-3.923 13.587 1.824 3.304 5.241 5.17 8.764 5.17z" data-v-95c8e9f1${_scopeId}></path><path d="m455.027 199.147h-19.524c-5.522 0-10 4.477-10 10s4.478 10 10 10h19.524c5.522 0 10-4.477 10-10s-4.477-10-10-10z" data-v-95c8e9f1${_scopeId}></path><path d="m155.763 58.983c1.84 3.252 5.227 5.079 8.713 5.079 1.668 0 3.359-.418 4.915-1.298 4.807-2.719 6.499-8.82 3.78-13.627l-9.655-17.069c-2.721-4.808-8.821-6.499-13.628-3.781-4.807 2.719-6.499 8.82-3.78 13.628z" data-v-95c8e9f1${_scopeId}></path><path d="m78.931 117.319 18.457 10.187c1.532.846 3.188 1.247 4.823 1.247 3.523 0 6.94-1.867 8.764-5.17 2.669-4.835.912-10.918-3.923-13.587l-18.457-10.187c-4.835-2.668-10.918-.913-13.587 3.923-2.669 4.835-.912 10.918 3.923 13.587z" data-v-95c8e9f1${_scopeId}></path><path d="m76.497 219.147c5.522 0 10-4.477 10-10s-4.478-10-10-10h-19.524c-5.522 0-10 4.477-10 10s4.478 10 10 10z" data-v-95c8e9f1${_scopeId}></path><path d="m448.091 446.815h-24.502v-61.428c0-5.523-4.478-10-10-10h-20.807v-171.08c0-75.405-61.347-136.752-136.813-136.752-75.405 0-136.752 61.347-136.752 136.752v171.081h-20.806c-5.522 0-10 4.477-10 10v61.428h-24.502c-5.522 0-10 4.477-10 10v45.184c0 5.523 4.478 10 10 10h384.182c5.523 0 10-4.477 10-10v-45.185c0-5.522-4.478-10-10-10zm-308.873-242.508c0-64.377 52.375-116.752 116.813-116.752 64.377 0 116.752 52.374 116.752 116.752v171.081h-86.683v-94.379c14.468-9.871 23.231-26.229 23.231-44.02 0-29.396-23.924-53.311-53.331-53.311s-53.331 23.915-53.331 53.311c0 17.79 8.764 34.148 23.232 44.02v94.379h-86.683zm101.326 62.204c-11.025-5.781-17.875-17.093-17.875-29.522 0-18.368 14.952-33.311 33.331-33.311s33.331 14.943 33.331 33.311c0 12.43-6.85 23.742-17.875 29.522-3.293 1.727-5.356 5.138-5.356 8.856v100.02h-20.2v-100.02c0-3.719-2.063-7.13-5.356-8.856zm197.547 225.489h-364.182v-25.185h136.885c5.523 0 10-4.477 10-10s-4.477-10-10-10h-102.383v-51.428h295.178v51.428h-102.383c-5.522 0-10 4.477-10 10s4.478 10 10 10h136.885z" data-v-95c8e9f1${_scopeId}></path><path d="m265.42 452.99c-1.61-3.865-5.581-6.387-9.771-6.16-4.161.225-7.816 3.098-9.029 7.08-1.212 3.978.243 8.471 3.606 10.938 3.284 2.409 7.764 2.601 11.23.458 4.105-2.538 5.822-7.856 3.964-12.316z" data-v-95c8e9f1${_scopeId}></path></g></g></g></svg></div><h2 class="st-iconbox-title" data-v-95c8e9f1${_scopeId}>الحالات الطارئية</h2><div class="st-iconbox-text" data-v-95c8e9f1${_scopeId}>مختصين بمعالجة الحالات الطارئة والعاجلة .</div></div><div class="st-height-b0 st-height-lg-b30" data-v-95c8e9f1${_scopeId}></div></div></div></div></section><section class="st-about-wrap" id="about" data-v-95c8e9f1${_scopeId}><div class="st-shape-bg" data-v-95c8e9f1${_scopeId}><img${ssrRenderAttr("src", _ctx.asset_url("assets/img/shape/about-bg-shape.svg"))} alt="shape" data-v-95c8e9f1${_scopeId}></div><div class="st-height-b120 st-height-lg-b50" data-v-95c8e9f1${_scopeId}></div><div class="container" data-v-95c8e9f1${_scopeId}><div class="st-section-heading st-style1" data-v-95c8e9f1${_scopeId}><h2 class="st-section-heading-title" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Home.Who We Are"))}</h2><div class="st-seperator" data-v-95c8e9f1${_scopeId}><div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" data-v-95c8e9f1${_scopeId}></div><div class="st-seperator-center" data-v-95c8e9f1${_scopeId}><img src="assets/img/icons/4.png" alt="icon" data-v-95c8e9f1${_scopeId}></div><div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" data-v-95c8e9f1${_scopeId}></div></div><div class="st-section-heading-subtitle" data-v-95c8e9f1${_scopeId}><span data-v-95c8e9f1${_scopeId}>${_ctx.__("Home.Text About Us")}</span></div></div><div class="st-height-b40 st-height-lg-b40" data-v-95c8e9f1${_scopeId}></div></div><div class="container" data-v-95c8e9f1${_scopeId}><div class="row" data-v-95c8e9f1${_scopeId}><div class="col-lg-7" data-v-95c8e9f1${_scopeId}><div class="st-vertical-middle" data-v-95c8e9f1${_scopeId}><div class="st-vertical-middle-in" data-v-95c8e9f1${_scopeId}><div class="st-text-block st-style1" data-v-95c8e9f1${_scopeId}><h2 class="st-text-block-title" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Home.Title About us-text"))}</h2><div class="st-height-b20 st-height-lg-b20" data-v-95c8e9f1${_scopeId}></div><div class="st-text-block-text" data-v-95c8e9f1${_scopeId}>${_ctx.__("Home.Sub About us-text")}</div><div class="st-height-b25 st-height-lg-b25" data-v-95c8e9f1${_scopeId}></div><div class="st-text-block-avatar" data-v-95c8e9f1${_scopeId}><div class="st-avatar-img" data-v-95c8e9f1${_scopeId}><img src="assets/img/avatar1.png" alt="avatar" data-v-95c8e9f1${_scopeId}></div><div class="st-avatar-info" data-v-95c8e9f1${_scopeId}><h4 class="st-avatar-name" data-v-95c8e9f1${_scopeId}>د . حامد</h4><div class="st-avatar-designation" data-v-95c8e9f1${_scopeId}>خبير العلاج الطبي</div></div></div></div></div></div><div class="st-height-b0 st-height-lg-b30" data-v-95c8e9f1${_scopeId}></div></div><div class="col-lg-5 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s" data-v-95c8e9f1${_scopeId}><div class="st-shedule-wrap" data-v-95c8e9f1${_scopeId}><div class="st-shedule" data-v-95c8e9f1${_scopeId}><h2 class="st-shedule-title" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Timetable.Title"))}</h2><ul class="st-shedule-list" data-v-95c8e9f1${_scopeId}><li data-v-95c8e9f1${_scopeId}><div class="st-shedule-left" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Timetable.Saturday"))}</div><div class="st-shedule-right" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Timetable.Saturday_1"))}</div></li><li data-v-95c8e9f1${_scopeId}><div class="st-shedule-left" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Timetable.Sunday"))}</div><div class="st-shedule-right" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Timetable.Sunday_1"))}</div></li><li data-v-95c8e9f1${_scopeId}><div class="st-shedule-left" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Timetable.Monday"))}</div><div class="st-shedule-right" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Timetable.Monday_1"))}</div></li><li data-v-95c8e9f1${_scopeId}><div class="st-shedule-left" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Timetable.Tuesday"))}</div><div class="st-shedule-right" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Timetable.Tuesday_1"))}</div></li><li data-v-95c8e9f1${_scopeId}><div class="st-shedule-left" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Timetable.Wednesday"))}</div><div class="st-shedule-right" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Timetable.Wednesday_1"))}</div></li><li data-v-95c8e9f1${_scopeId}><div class="st-shedule-left" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Timetable.Thursday"))}</div><div class="st-shedule-right" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Timetable.Thursday_1"))}</div></li><li data-v-95c8e9f1${_scopeId}><div class="st-shedule-left" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Timetable.Friday"))}</div><div class="st-shedule-right" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Timetable.Friday_1"))}</div></li></ul><div class="st-height-b25 st-height-lg-b25" data-v-95c8e9f1${_scopeId}></div><div class="st-call st-style1" data-v-95c8e9f1${_scopeId}><div class="st-call-icon" data-v-95c8e9f1${_scopeId}><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve" data-v-95c8e9f1${_scopeId}><g data-v-95c8e9f1${_scopeId}><path d="M492.557,400.56L392.234,300.238c-11.976-11.975-31.458-11.975-43.435,0l-26.088,26.088
                                                      c-8.174,8.174-10.758,19.845-7.773,30.241l-9.843,9.843c-0.003,0.003-0.005,0.005-0.008,0.008
                                                      c-6.99,6.998-50.523-3.741-103.145-56.363c-52.614-52.613-63.356-96.139-56.366-103.142c0-0.002,0.002-0.002,0.002-0.002
                                                      l9.852-9.851c2.781,0.799,5.651,1.207,8.523,1.207c7.865,0,15.729-2.993,21.718-8.98l26.088-26.088
                                                      c11.975-11.975,11.975-31.458,0-43.434L111.436,19.441c-5.8-5.8-13.513-8.994-21.716-8.994c-8.205,0-15.915,3.196-21.716,8.994
                                                      l-26.09,26.09c-8.174,8.174-10.758,19.846-7.773,30.241c0,0-8.344,8.424-8.759,8.956c-27.753,30.849-32.96,79.418-14.561,137.487
                                                      c18.017,56.857,56.857,117.088,109.367,169.595c52.508,52.508,112.739,91.348,169.596,109.367
                                                      C312.624,508.414,333.991,512,353.394,512c31.813,0,58.337-9.648,77.35-28.66l5.474-5.474c2.74,0.788,5.602,1.213,8.532,1.213
                                                      c8.205,0,15.917-3.196,21.716-8.994l26.09-26.09C504.531,432.02,504.531,412.536,492.557,400.56z M89.72,41.157l100.324,100.325
                                                      l-26.074,26.102c0,0-0.005-0.005-0.014-0.014l-0.375-0.375l-49.787-49.787L63.631,67.247L89.72,41.157z M409.029,461.623
                                                      c-0.002,0.002-0.003,0.003-0.005,0.005c-22.094,22.091-61.146,25.74-109.961,10.27c-52.252-16.558-108.065-52.714-157.156-101.806
                                                      C92.814,321,56.658,265.189,40.101,212.936c-15.47-48.817-11.821-87.87,10.275-109.967l0.002-0.002l2.77-2.77l77.857,77.856
                                                      l-7.141,7.141c-0.005,0.005-0.009,0.011-0.015,0.017c-29.585,29.622,5.963,96.147,56.378,146.562
                                                      c37.734,37.734,84.493,67.14,118.051,67.14c11.284,0,21.076-3.325,28.528-10.778c0.003-0.003,0.005-0.005,0.008-0.008l7.133-7.133
                                                      l77.857,77.856L409.029,461.623z M444.752,448.368L344.428,348.044l26.088-26.088L470.84,422.278
                                                      C470.84,422.278,444.761,448.377,444.752,448.368z" data-v-95c8e9f1${_scopeId}></path></g><g data-v-95c8e9f1${_scopeId}><path d="M388.818,123.184c-29.209-29.209-68.042-45.294-109.344-45.293c-8.481,0-15.356,6.875-15.356,15.356
                                                      c0,8.481,6.876,15.356,15.356,15.356c33.1-0.002,64.219,12.89,87.628,36.297c23.406,23.406,36.295,54.525,36.294,87.624
                                                      c0,8.481,6.875,15.358,15.356,15.358c8.48,0,15.356-6.875,15.356-15.354C434.109,191.224,418.023,152.393,388.818,123.184z" data-v-95c8e9f1${_scopeId}></path></g><g data-v-95c8e9f1${_scopeId}><path d="M443.895,68.107C399.972,24.186,341.578-0.002,279.468,0c-8.481,0-15.356,6.876-15.356,15.356
                                                      c0,8.481,6.876,15.356,15.356,15.356c53.907-0.002,104.588,20.992,142.709,59.111c38.118,38.118,59.111,88.799,59.11,142.706
                                                      c0,8.481,6.875,15.356,15.356,15.356c8.48,0,15.356-6.875,15.356-15.354C512.001,170.419,487.813,112.027,443.895,68.107z" data-v-95c8e9f1${_scopeId}></path></g><g data-v-95c8e9f1${_scopeId}><path d="M333.737,178.26c-14.706-14.706-33.465-22.477-54.256-22.477c0,0-0.005,0-0.006,0
                                                      c-8.481,0.002-15.356,6.876-15.354,15.358c0.002,8.481,6.878,15.356,15.358,15.354c0.002,0,0.003,0,0.005,0
                                                      c12.644,0,23.593,4.536,32.539,13.481c8.819,8.82,13.481,20.075,13.479,32.544c-0.002,8.481,6.875,15.356,15.354,15.358h0.002
                                                      c8.481,0,15.354-6.875,15.356-15.354C356.215,211.732,348.444,192.968,333.737,178.26z" data-v-95c8e9f1${_scopeId}></path></g></svg></div><div class="st-call-text" data-v-95c8e9f1${_scopeId}><div class="st-call-title" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Timetable.Call Now"))}</div><div class="st-call-number" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Timetable.phone"))}</div></div></div></div></div></div></div></div></section><section class="st-before-after-section st-dynamic-bg st-bg" style="${ssrRenderStyle({ "background-image": "url('/assets/img/before-after-bg.jpg')" })}" data-v-95c8e9f1${_scopeId}><div class="st-height-b120 st-height-lg-b80" data-v-95c8e9f1${_scopeId}></div><div class="container" data-v-95c8e9f1${_scopeId}><div class="st-section-heading st-style1" data-v-95c8e9f1${_scopeId}><h2 class="st-section-heading-title" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Home.Before and after procedures"))}</h2><div class="st-seperator" data-v-95c8e9f1${_scopeId}><div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" data-v-95c8e9f1${_scopeId}></div><div class="st-seperator-center" data-v-95c8e9f1${_scopeId}><img src="/assets/img/icons/4.png" alt="icon" data-v-95c8e9f1${_scopeId}></div><div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" data-v-95c8e9f1${_scopeId}></div></div><div class="st-section-heading-subtitle" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Home.Before and after procedures_sub"))}</div></div><div class="st-height-b40 st-height-lg-b40" data-v-95c8e9f1${_scopeId}></div></div><div class="st-before-after-wrap" data-v-95c8e9f1${_scopeId}><div class="container" data-v-95c8e9f1${_scopeId}><div class="st-before-after-in" data-v-95c8e9f1${_scopeId}><div class="st-before-after" data-v-95c8e9f1${_scopeId}><div class="st-after st-single-slide st-dynamic-bg" style="${ssrRenderStyle({ "background-image": "url('/assets/img/after.jpg')" })}" data-v-95c8e9f1${_scopeId}></div><div class="st-before st-single-slide st-dynamic-bg" style="${ssrRenderStyle({ "background-image": "url('/assets/img/before.jpg')" })}" data-v-95c8e9f1${_scopeId}></div><div class="st-handle-before-after" data-v-95c8e9f1${_scopeId}><span data-v-95c8e9f1${_scopeId}></span></div></div></div></div></div></section><section data-v-95c8e9f1${_scopeId}><div class="st-height-b120 st-height-lg-b80" data-v-95c8e9f1${_scopeId}></div><div class="container" data-v-95c8e9f1${_scopeId}><div class="st-section-heading st-style1" data-v-95c8e9f1${_scopeId}><h2 class="st-section-heading-title" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Home.What peoble say"))}</h2><div class="st-seperator" data-v-95c8e9f1${_scopeId}><div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" data-v-95c8e9f1${_scopeId}></div><div class="st-seperator-center" data-v-95c8e9f1${_scopeId}><img src="assets/img/icons/4.png" alt="icon" data-v-95c8e9f1${_scopeId}></div><div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" data-v-95c8e9f1${_scopeId}></div></div><div class="st-section-heading-subtitle" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Home.What peoble say Sub"))}</div></div><div class="st-height-b40 st-height-lg-b40" data-v-95c8e9f1${_scopeId}></div></div><div class="container" data-v-95c8e9f1${_scopeId}>`);
        _push2(ssrRenderComponent(_component_slider_comments, { opinions: $props.opinions }, null, _parent2, _scopeId));
        _push2(`</div><div class="st-height-b120 st-height-lg-b80" data-v-95c8e9f1${_scopeId}></div></section><section class="st-gray-bg st-shape-wrap" data-v-95c8e9f1${_scopeId}><div class="st-shape4" data-v-95c8e9f1${_scopeId}><img src="/assets/img/shape/section_shape.png" alt="shape1" data-v-95c8e9f1${_scopeId}></div><div class="st-height-b120 st-height-lg-b80" data-v-95c8e9f1${_scopeId}></div><div class="container" data-v-95c8e9f1${_scopeId}><div class="row" data-v-95c8e9f1${_scopeId}><div class="col-xl-6" data-v-95c8e9f1${_scopeId}><div class="row" data-v-95c8e9f1${_scopeId}><div class="col-lg-6" data-v-95c8e9f1${_scopeId}><div class="st-funfact st-style1" data-v-95c8e9f1${_scopeId}><div class="st-funfact-icon st-purple-box" data-v-95c8e9f1${_scopeId}><svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" data-v-95c8e9f1${_scopeId}><g data-v-95c8e9f1${_scopeId}><path d="m316 76c0-33.084-26.916-60-60-60s-60 26.916-60 60 26.916 60 60 60 60-26.916 60-60zm-60 40c-22.056 0-40-17.944-40-40s17.944-40 40-40 40 17.944 40 40-17.944 40-40 40z" data-v-95c8e9f1${_scopeId}></path><path d="m346 266v-40c0-49.626-40.374-90-90-90s-90 40.374-90 90v40c0 5.523 4.478 10 10 10h160c5.522 0 10-4.477 10-10zm-20-10h-140v-30c0-38.598 31.402-70 70-70s70 31.402 70 70z" data-v-95c8e9f1${_scopeId}></path><path d="m71.858 408.114 48.142 24.067v53.819c0 5.523 4.478 10 10 10h106c5.522 0 10-4.477 10-10v-127.22c0-31.783-23.452-59.203-53.391-62.423-.795-.15-38.649-2.971-56.948-21.258l-27.38-27.379c-7.556-7.558-17.6-11.72-28.281-11.72v-80c0-22.056-17.944-40-40-40s-40 17.944-40 40v135.84c0 49.212 27.798 94.239 71.858 116.274zm-51.858-252.114c0-11.028 8.972-20 20-20s20 8.972 20 20v85.361c-12.196 7.052-20 20.2-20 34.639 0 10.68 4.162 20.723 11.719 28.28l51.21 51.22c3.903 3.905 10.236 3.907 14.142.001 3.905-3.905 3.906-10.236.001-14.142l-51.21-51.221c-3.78-3.779-5.862-8.8-5.862-14.138 0-8.464 5.357-16.044 13.332-18.861.003-.001.006-.003.009-.004h.001c6.88-2.439 15.066-1.005 20.797 4.726l27.383 27.383c18.65 18.637 45.831 23.879 68.836 26.986.037.004.075.009.113.013 19.923 2.142 35.529 20.827 35.529 42.537v117.22h-86v-50c0-3.788-2.141-7.251-5.528-8.944l-53.669-26.83c-37.504-18.757-60.803-56.456-60.803-98.386z" data-v-95c8e9f1${_scopeId}></path><circle cx="459" cy="384" r="10" data-v-95c8e9f1${_scopeId}></circle><path d="m472 116c-22.056 0-40 17.944-40 40v80c-10.681 0-20.725 4.162-28.281 11.719l-27.377 27.377c-15.96 15.949-41.848 18.608-56.951 21.262-29.939 3.22-53.391 30.639-53.391 62.422v127.22c0 5.523 4.478 10 10 10h106c5.522 0 10-4.477 10-10v-53.819l32.73-16.362c4.939-2.47 6.942-8.476 4.473-13.417-2.469-4.939-8.474-6.942-13.416-4.473l-38.259 19.125c-3.387 1.695-5.528 5.158-5.528 8.946v50h-86v-117.22c0-21.71 15.606-40.395 35.529-42.538.038-.004.076-.008.113-.013 23.361-3.155 50.206-8.368 68.839-26.988l27.38-27.38c5.724-5.724 13.913-7.166 20.797-4.726h.001c.003.001.006.003.009.004 7.975 2.817 13.332 10.397 13.332 18.861 0 5.338-2.082 10.359-5.861 14.14l-51.21 51.22c-3.905 3.906-3.904 10.237.001 14.142 3.904 3.904 10.237 3.905 14.142-.001l51.21-51.22c7.556-7.558 11.718-17.601 11.718-28.281 0-14.439-7.804-27.587-20-34.639v-85.361c0-11.028 8.972-20 20-20s20 8.972 20 20v135.84c0 18.296-4.617 36.46-13.353 52.528-2.639 4.852-.844 10.924 4.009 13.562 4.851 2.637 10.924.843 13.562-4.009 10.325-18.99 15.782-40.458 15.782-62.081v-135.84c0-22.056-17.944-40-40-40z" data-v-95c8e9f1${_scopeId}></path></g></svg></div><h2 class="st-funfact-number st-counter" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Home.Years of experience Number"))}</h2><div class="st-funfact-title" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Home.Years of experience"))}</div></div><div class="st-height-b30 st-height-lg-b30" data-v-95c8e9f1${_scopeId}></div></div><div class="col-lg-6" data-v-95c8e9f1${_scopeId}><div class="st-funfact st-style1" data-v-95c8e9f1${_scopeId}><div class="st-funfact-icon st-green-box" data-v-95c8e9f1${_scopeId}><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve" data-v-95c8e9f1${_scopeId}><g data-v-95c8e9f1${_scopeId}><path d="M107.972,291.258c-1.861-1.861-4.432-2.932-7.073-2.932c-2.631,0-5.213,1.071-7.073,2.932
                        c-1.861,1.86-2.931,4.441-2.931,7.072c0,2.642,1.071,5.213,2.931,7.083c1.861,1.861,4.442,2.921,7.073,2.921
                        s5.213-1.06,7.073-2.921c1.861-1.871,2.931-4.441,2.931-7.083C110.903,295.699,109.833,293.118,107.972,291.258z" data-v-95c8e9f1${_scopeId}></path></g><g data-v-95c8e9f1${_scopeId}><path d="M202.317,291.258c-1.86-1.861-4.441-2.932-7.073-2.932c-2.631,0-5.213,1.071-7.073,2.932
                        c-1.861,1.86-2.931,4.441-2.931,7.072c0,2.642,1.07,5.213,2.931,7.083c1.861,1.861,4.442,2.921,7.073,2.921
                        s5.213-1.06,7.073-2.921c1.861-1.871,2.931-4.452,2.931-7.083C205.248,295.699,204.178,293.118,202.317,291.258z" data-v-95c8e9f1${_scopeId}></path></g><g data-v-95c8e9f1${_scopeId}><path d="M183.966,346.195c-5.338-1.43-10.821,1.746-12.248,7.083c-2.859,10.702-12.582,18.178-23.646,18.178
                        c-11.063,0-20.786-7.476-23.646-18.178c-1.426-5.339-6.909-8.515-12.248-7.083c-5.338,1.427-8.509,6.909-7.083,12.248
                        c5.194,19.443,22.867,33.023,42.978,33.023c20.11,0,37.783-13.58,42.977-33.023C192.475,353.105,189.303,347.621,183.966,346.195z
                        " data-v-95c8e9f1${_scopeId}></path></g><g data-v-95c8e9f1${_scopeId}><path d="M256.121,39.995c-5.526,0-10.005,4.479-10.005,10.005v63.514c0,5.526,4.479,10.005,10.005,10.005
                        c5.526,0,10.005-4.479,10.005-10.005V50C266.126,44.474,261.647,39.995,256.121,39.995z" data-v-95c8e9f1${_scopeId}></path></g><g data-v-95c8e9f1${_scopeId}><path d="M263.198,141.795c-1.862-1.871-4.443-2.931-7.073-2.931c-2.641,0-5.213,1.061-7.083,2.931
                        c-1.861,1.861-2.921,4.442-2.921,7.073s1.061,5.213,2.921,7.073c1.871,1.861,4.442,2.931,7.083,2.931
                        c2.631,0,5.213-1.07,7.073-2.931s2.931-4.442,2.931-7.073S265.058,143.656,263.198,141.795z" data-v-95c8e9f1${_scopeId}></path></g><g data-v-95c8e9f1${_scopeId}><path d="M195.152,130.95L169.61,105.43c-3.908-3.905-10.244-3.903-14.149,0.006c-3.905,3.909-3.903,10.243,0.006,14.149
                        l25.542,25.521c1.953,1.952,4.512,2.927,7.071,2.927c2.562,0,5.125-0.979,7.078-2.933
                        C199.063,141.19,199.061,134.856,195.152,130.95z" data-v-95c8e9f1${_scopeId}></path></g><g data-v-95c8e9f1${_scopeId}><path d="M356.801,105.456c-3.909-3.906-10.244-3.903-14.149,0.005l-27.155,27.177c-3.906,3.909-3.903,10.244,0.005,14.149
                        c1.953,1.953,4.512,2.928,7.071,2.928c2.562,0,5.124-0.978,7.077-2.933l27.155-27.177
                        C360.712,115.696,360.709,109.361,356.801,105.456z" data-v-95c8e9f1${_scopeId}></path></g><g data-v-95c8e9f1${_scopeId}><path d="M506.938,285.54c-21.132-78.867-102.486-125.836-181.351-104.702c-27.068,7.253-50.981,21.674-69.659,41.643
                        c-27.946-29.764-66.622-46.621-107.856-46.621C66.425,175.86,0,242.286,0,323.933s66.425,148.072,148.072,148.072
                        c41.273,0,80.011-16.909,107.967-46.745c27.682,29.351,66.721,46.694,107.906,46.694c12.649,0,25.505-1.637,38.29-5.062
                        C481.1,445.759,528.07,364.404,506.938,285.54z M148.072,451.995c-70.615,0-128.063-57.449-128.063-128.063
                        c0-70.614,57.448-128.063,128.063-128.063c36.555,0,70.791,15.319,95.088,42.282c-2.654,3.754-5.156,7.645-7.484,11.676
                        c-19.776,34.253-25.029,74.157-14.792,112.36c4.697,17.533,12.371,33.487,22.332,47.469
                        C218.914,436.654,184.64,451.995,148.072,451.995z M397.056,447.564c-68.207,18.271-138.568-22.347-156.844-90.554
                        c-8.853-33.041-4.31-67.553,12.793-97.176c3.156-5.466,6.671-10.642,10.51-15.509c0.166-0.191,0.32-0.389,0.47-0.59
                        c16.93-21.203,40.082-36.415,66.78-43.569c11.061-2.963,22.173-4.378,33.116-4.378c56.536,0,108.415,37.785,123.727,94.931
                        C505.886,358.927,465.263,429.287,397.056,447.564z" data-v-95c8e9f1${_scopeId}></path></g><g data-v-95c8e9f1${_scopeId}><path d="M334.605,304.249c-3.096-11.558-15.014-18.444-26.577-15.345c-11.558,3.098-18.441,15.019-15.344,26.577
                        c1.198,4.47,5.24,7.419,9.658,7.419c0.856,0,1.729-0.111,2.595-0.344c5.338-1.431,8.505-6.915,7.074-12.253
                        c-0.241-0.9,0.295-1.83,1.195-2.071c0.558-0.148,1.006,0.01,1.283,0.169c0.276,0.16,0.638,0.468,0.788,1.026
                        c1.43,5.337,6.914,8.506,12.253,7.074C332.869,315.072,336.035,309.587,334.605,304.249z" data-v-95c8e9f1${_scopeId}></path></g><g data-v-95c8e9f1${_scopeId}><path d="M425.169,279.982c-1.501-5.599-5.091-10.278-10.111-13.177c-5.02-2.897-10.868-3.668-16.466-2.167
                        c-5.599,1.5-10.279,5.09-13.176,10.11c-2.898,5.02-3.669,10.867-2.168,16.467c1.198,4.47,5.24,7.418,9.658,7.418
                        c0.856-0.001,1.729-0.111,2.596-0.344c5.337-1.431,8.504-6.916,7.074-12.254c-0.149-0.558,0.009-1.005,0.169-1.282
                        s0.467-0.638,1.026-0.787c0.558-0.149,1.007,0.01,1.283,0.169s0.637,0.467,0.787,1.026c1.43,5.337,6.914,8.505,12.253,7.074
                        C423.432,290.805,426.599,285.32,425.169,279.982z" data-v-95c8e9f1${_scopeId}></path></g><g data-v-95c8e9f1${_scopeId}><path d="M416.404,342.76c-1.431-5.337-6.917-8.506-12.254-7.075c-5.338,1.431-8.504,6.915-7.074,12.253
                        c3.404,12.705-4.163,25.812-16.868,29.216c-6.156,1.65-12.584,0.802-18.101-2.383c-5.519-3.187-9.466-8.33-11.114-14.485
                        c-1.431-5.337-6.916-8.508-12.254-7.074c-5.337,1.431-8.504,6.916-7.074,12.253c3.033,11.318,10.291,20.777,20.438,26.635
                        c6.758,3.902,14.26,5.896,21.861,5.896c3.811,0,7.646-0.5,11.425-1.514C408.75,390.222,422.663,366.121,416.404,342.76z" data-v-95c8e9f1${_scopeId}></path></g></svg></div><h2 class="st-funfact-number st-counter" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Home.Happy Patients Number"))}</h2><div class="st-funfact-title" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Home.Happy Patients"))}</div></div><div class="st-height-b30 st-height-lg-b30" data-v-95c8e9f1${_scopeId}></div></div><div class="col-lg-6" data-v-95c8e9f1${_scopeId}><div class="st-funfact st-style1" data-v-95c8e9f1${_scopeId}><div class="st-funfact-icon st-orange-box" data-v-95c8e9f1${_scopeId}><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve" data-v-95c8e9f1${_scopeId}><g data-v-95c8e9f1${_scopeId}><path d="M482.726,485.783l-22.65-132.603c-2.441-14.287-12.576-25.764-26.453-29.95l-61.092-18.433
                      c-1.265-14.934-7.388-29.023-17.578-40.175c-8.151-8.92-18.403-15.415-29.704-18.999c1.934-2.146,3.727-4.285,5.372-6.377
                      c14.528-18.477,22.306-38.833,24.286-52.724h4.713c12.258,0,22.231-9.972,22.231-22.231v-11.396
                      c0-8.181-4.602-15.594-11.523-19.441V106.05c0-4.141-3.357-7.498-7.498-7.498s-7.497,3.356-7.497,7.498v30.764
                      c-2.92,0.507-6.404,1.383-9.968,2.884c-0.365,0.133-0.72,0.287-1.056,0.472c-0.805,0.367-1.611,0.754-2.414,1.19V80.938
                      c0-16.693-13.58-30.273-30.273-30.273h-20.695c-7.138,0-14.111,2.487-19.637,7.005l-2.031,1.66c-3.73,3.05-8.438,4.73-13.257,4.73
                      c-4.819,0-9.528-1.68-13.258-4.73l-2.03-1.66c-5.526-4.517-12.499-7.005-19.637-7.005H200.38
                      c-16.693,0-30.273,13.58-30.273,30.273v60.422c-0.803-0.436-1.609-0.823-2.414-1.19c-0.336-0.185-0.69-0.339-1.055-0.472
                      c-3.564-1.501-7.049-2.377-9.968-2.884V59.025c0-24.278,19.752-44.03,44.03-44.03h110.601c24.279,0,44.03,19.752,44.03,44.03
                      v11.786c0,4.141,3.357,7.498,7.497,7.498s7.498-3.356,7.498-7.498V59.025C370.326,26.479,343.847,0,311.301,0H200.7
                      c-32.547,0-59.025,26.479-59.025,59.025v74.43c-6.921,3.847-11.523,11.259-11.523,19.441v11.396
                      c0,12.259,9.973,22.231,22.231,22.231h4.713c1.979,13.891,9.758,34.247,24.286,52.724c1.643,2.09,3.435,4.227,5.367,6.371
                      c-25.98,8.252-44.926,31.61-47.277,59.179L78.378,323.23c-13.877,4.186-24.013,15.663-26.453,29.95l-9.198,53.849
                      c-0.697,4.082,2.047,7.955,6.128,8.652c4.08,0.699,7.955-2.046,8.653-6.128l9.198-53.849c1.476-8.644,7.608-15.586,16.003-18.118
                      l56.505-17.049v14.831c-12.952,2.384-23.973,11.281-28.512,23.608c-1.205,3.272-1.954,6.698-2.226,10.182l-5.461,70.095
                      c-0.412,5.28,1.415,10.538,5.01,14.423c3.595,3.886,8.694,6.116,13.989,6.116h9.348c4.141,0,7.498-3.356,7.498-7.498
                      c0-4.142-3.357-7.497-7.498-7.497h-9.348c-1.129,0-2.215-0.474-2.982-1.304c-0.766-0.828-1.155-1.948-1.067-3.073l5.461-70.096
                      c0.165-2.111,0.618-4.186,1.348-6.167c3.158-8.575,11.686-14.382,21.223-14.449l1.235-0.009c0.058-0.001,0.115-0.001,0.172-0.001
                      c9.269,0,17.474,5.256,20.935,13.427c0.971,2.291,1.561,4.713,1.755,7.199l5.463,70.097c0.087,1.124-0.302,2.244-1.068,3.073
                      c-0.766,0.828-1.853,1.303-2.982,1.303h-9.348c-4.141,0-7.498,3.356-7.498,7.497c0,4.141,3.357,7.498,7.498,7.498h9.348
                      c5.295,0,10.395-2.229,13.989-6.116c3.596-3.887,5.423-9.144,5.011-14.422l-5.463-70.096c-0.32-4.102-1.295-8.101-2.898-11.884
                      c-4.939-11.657-15.5-19.762-27.938-21.955v-19.306l25.774-7.777c2.345,4.939,6.992,15.612,16.197,38.619
                      c9.277,23.214,20.808,52.969,31.867,81.895c0.079,0.243,0.17,0.48,0.272,0.712c7.38,19.311,14.539,38.225,20.662,54.541
                      c1.098,2.926,3.895,4.864,7.02,4.864c3.125,0,5.922-1.938,7.02-4.864c6.122-16.316,13.281-35.23,20.662-54.541
                      c0.103-0.232,0.193-0.47,0.272-0.712c11.051-28.909,22.576-58.645,31.849-81.852c9.217-23.037,13.868-33.719,16.214-38.662
                      l25.774,7.777v44.285c-17.858,3.469-31.385,19.219-31.385,38.077c0,21.391,17.403,38.795,38.795,38.795
                      c21.392,0,38.795-17.403,38.795-38.795c0-18.796-13.438-34.508-31.21-38.045v-39.792l56.506,17.049
                      c8.395,2.532,14.526,9.474,16.003,18.118l22.65,132.603c0.376,2.199-0.209,4.349-1.648,6.054c-1.438,1.704-3.459,2.644-5.69,2.644
                      H51.393c-2.231,0-4.251-0.939-5.69-2.644c-1.438-1.705-2.024-3.854-1.648-6.054l7.475-43.762c0.697-4.082-2.047-7.955-6.128-8.652
                      c-4.08-0.7-7.955,2.047-8.653,6.128l-7.475,43.762c-1.115,6.532,0.696,13.183,4.968,18.248C38.516,509.096,44.767,512,51.393,512
                      h409.214c6.626,0,12.878-2.904,17.151-7.969C482.03,498.966,483.841,492.315,482.726,485.783z M355.421,152.089
                      c3.995-0.996,7.202-0.978,7.238-0.977c1.292,0.017,2.548-0.285,3.664-0.87c0.334,0.831,0.531,1.724,0.531,2.654v11.396
                      c0,3.99-3.246,7.236-7.236,7.236h-4.197V152.089z M156.579,171.528L156.579,171.528h-4.197c-3.99,0-7.236-3.246-7.236-7.236
                      v-11.396c0-0.93,0.198-1.823,0.531-2.653c1.115,0.585,2.371,0.887,3.664,0.869c0.057,0.01,3.255-0.008,7.238,0.981V171.528z
                      M171.574,179.935v-19.698c2.272,0.681,4.757,0.588,7.051-0.369c3.935-1.642,6.477-5.455,6.477-9.716V80.938
                      c0-8.424,6.854-15.278,15.278-15.278h20.695c3.688,0,7.291,1.285,10.146,3.619l2.03,1.66c6.401,5.234,14.48,8.115,22.749,8.115
                      c8.269,0,16.348-2.882,22.749-8.115l2.03-1.66c2.854-2.334,6.458-3.619,10.146-3.619h20.695c8.424,0,15.278,6.854,15.278,15.278
                      v69.215c0,4.26,2.542,8.074,6.477,9.716c1.314,0.548,2.69,0.814,4.054,0.814c1.017,0,2.026-0.149,2.997-0.439v19.691
                      c0,10.947-7.568,32.205-21.594,50.043c-4.646,5.909-10.618,12.257-17.971,17.805c-0.233,0.156-0.456,0.325-0.669,0.505
                      c-11.391,8.422-26.038,14.874-44.192,14.874s-32.801-6.452-44.193-14.875c-0.213-0.179-0.435-0.348-0.667-0.503
                      c-7.353-5.549-13.325-11.897-17.972-17.806C179.143,212.141,171.574,190.882,171.574,179.935z M305.12,301.07L256,337.784
                      l-49.12-36.714c4.871-6.191,7.6-14.138,7.6-21.23v-12.086c11.551,6.212,25.334,10.404,41.52,10.404s29.97-4.192,41.52-10.404
                      v12.086C297.52,286.932,300.249,294.879,305.12,301.07z M194.367,292.701c-4.004-1.525-8.443-1.775-12.642-0.636
                      c-0.184,0.043-0.364,0.092-0.539,0.144l-25.903,7.816c4.381-21.542,21.873-38.688,44.202-42.009v21.824
                      C199.485,284.544,197.385,289.407,194.367,292.701z M214.716,352.889c-0.014-0.035-0.028-0.07-0.041-0.104
                      c-0.38-0.961-0.755-1.909-1.127-2.846c-0.067-0.17-0.134-0.339-0.201-0.507c-0.364-0.917-0.725-1.827-1.081-2.722
                      c-0.025-0.063-0.05-0.125-0.075-0.189c-1.111-2.793-2.182-5.472-3.212-8.039c-0.075-0.186-0.15-0.375-0.225-0.56
                      c-0.296-0.736-0.587-1.461-0.876-2.177c-0.106-0.263-0.211-0.523-0.316-0.783c-0.28-0.694-0.558-1.384-0.832-2.059
                      c-0.082-0.202-0.162-0.398-0.243-0.599c-0.497-1.226-0.983-2.421-1.457-3.586c-0.128-0.315-0.259-0.636-0.386-0.947
                      c-0.186-0.454-0.367-0.896-0.549-1.341c-0.196-0.48-0.392-0.956-0.584-1.424c-0.072-0.175-0.147-0.36-0.219-0.534
                      c-0.058-0.14-0.111-0.269-0.168-0.408c-0.866-2.104-1.689-4.087-2.47-5.952c-0.006-0.015-0.013-0.03-0.019-0.045
                      c-0.416-0.993-0.823-1.963-1.214-2.887c-0.203-0.479-0.403-0.95-0.599-1.412l42.245,31.574l-17.652,7.499
                      c-0.031,0.013-0.063,0.026-0.094,0.04l-7.37,3.131C215.533,354.955,215.124,353.919,214.716,352.889z M232.606,398.797
                      c-1.481-3.843-2.973-7.708-4.468-11.569c-2.338-6.039-4.571-11.781-6.708-17.251l2.798-1.189l11.432,13.289L232.606,398.797z
                      M256.145,459.735c-0.215-0.446-0.471-0.867-0.767-1.259c-3.388-8.955-7.688-20.286-12.447-32.753l7-38.325h12.138l7,38.325
                      C264.082,438.784,259.603,450.594,256.145,459.735z M264.881,372.404h-17.762l-8.405-9.77L256,355.291l17.286,7.343
                      L264.881,372.404z M283.862,387.228c-1.495,3.861-2.987,7.726-4.468,11.569l-3.054-16.721l11.432-13.289l2.798,1.189
                      C288.433,375.446,286.2,381.189,283.862,387.228z M312.58,315.18c-0.371,0.876-0.757,1.795-1.15,2.733
                      c-0.051,0.122-0.103,0.245-0.154,0.368c-0.389,0.93-0.785,1.88-1.195,2.869c-0.027,0.065-0.055,0.134-0.082,0.2
                      c-0.354,0.853-0.717,1.733-1.086,2.63c-0.069,0.168-0.134,0.323-0.203,0.492c-0.082,0.201-0.17,0.414-0.253,0.617
                      c-0.164,0.4-0.331,0.808-0.499,1.216c-0.206,0.503-0.411,1.004-0.622,1.519c-0.067,0.164-0.136,0.335-0.204,0.5
                      c-0.522,1.279-1.058,2.597-1.606,3.951c-0.086,0.212-0.171,0.42-0.257,0.635c-0.271,0.669-0.547,1.352-0.824,2.039
                      c-0.108,0.269-0.217,0.537-0.326,0.809c-0.286,0.709-0.575,1.427-0.867,2.155c-0.082,0.203-0.165,0.411-0.247,0.615
                      c-1.017,2.532-2.072,5.173-3.167,7.925c-0.036,0.091-0.072,0.18-0.108,0.272c-0.354,0.889-0.712,1.793-1.074,2.704
                      c-0.067,0.17-0.135,0.34-0.203,0.511c-0.374,0.942-0.751,1.894-1.133,2.861c-0.007,0.018-0.014,0.036-0.021,0.053
                      c-0.412,1.042-0.826,2.09-1.248,3.16l-7.377-3.134c-0.026-0.011-0.052-0.022-0.077-0.033l-17.662-7.503l42.245-31.574
                      C312.982,314.23,312.782,314.7,312.58,315.18z M330.814,292.21c-0.001,0-0.003-0.001-0.004-0.001
                      c-0.006-0.002-0.013-0.003-0.019-0.006c-4.35-1.305-8.99-1.089-13.157,0.498c-3.019-3.294-5.118-8.157-5.118-12.861v-21.835
                      c22.469,3.312,39.908,20.297,44.232,42.029L330.814,292.21z M389.001,398.375c0,13.124-10.677,23.8-23.8,23.8
                      s-23.8-10.676-23.8-23.8c0-13.124,10.677-23.8,23.8-23.8S389.001,385.251,389.001,398.375z" data-v-95c8e9f1${_scopeId}></path></g></svg></div><h2 class="st-funfact-number st-counter" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Home.Qualified Doctors Number"))}</h2><div class="st-funfact-title" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Home.Qualified Doctors"))}</div></div><div class="st-height-b30 st-height-lg-b30" data-v-95c8e9f1${_scopeId}></div></div><div class="col-lg-6" data-v-95c8e9f1${_scopeId}><div class="st-funfact st-style1" data-v-95c8e9f1${_scopeId}><div class="st-funfact-icon st-dip-blue-box" data-v-95c8e9f1${_scopeId}><svg enable-background="new 0 0 511.619 511.619" viewBox="0 0 511.619 511.619" xmlns="http://www.w3.org/2000/svg" data-v-95c8e9f1${_scopeId}><g data-v-95c8e9f1${_scopeId}><path d="m504.12 423.958c-.003 0-.006 0-.009 0l-28.68.033-.031-24.191c-.005-4.139-3.362-7.491-7.5-7.491-.003 0-.006 0-.009 0-4.143.005-7.496 3.367-7.491 7.509l.031 24.19-112.203.13-.111-96.11 77.654-.09c3.963-.004 7.686-1.551 10.484-4.355s4.336-6.531 4.331-10.493l-.09-78.359c-.005-3.962-1.552-7.686-4.356-10.483-2.8-2.793-6.519-4.331-10.475-4.331-.006 0-.012 0-.019 0l-77.655.089-.036-31.016 112.203-.128.201 176.954c.005 4.14 3.361 7.492 7.5 7.492h.009c4.143-.005 7.497-3.366 7.492-7.508l-.201-176.955 14.762-.017c11.396-.016 20.654-9.298 20.639-20.688l-.02-19.672c-.015-11.393-9.286-20.65-20.669-20.65-.009 0-.02 0-.028 0l-48.04.05c-4.142.004-7.497 3.366-7.492 7.508.004 4.14 3.361 7.492 7.5 7.492h.008l48.042-.05h.007c3.124 0 5.668 2.542 5.672 5.668l.02 19.672c.004 3.122-2.535 5.666-5.658 5.67l-141.964.161-.036-31.01 59.917-.071c4.142-.005 7.496-3.367 7.491-7.509-.005-4.139-3.362-7.491-7.5-7.491-.003 0-.006 0-.009 0l-59.916.071-.041-35.216c-.006-5.53-2.166-10.727-6.081-14.632-3.909-3.9-9.101-6.046-14.622-6.046-.008 0-.017 0-.024 0l-143.451.166c-5.53.006-10.727 2.166-14.632 6.081s-6.053 9.116-6.046 14.646l.041 35.217-141.967.165c-5.521.006-10.709 2.164-14.608 6.076-3.896 3.909-6.038 9.102-6.031 14.621l.022 19.675c.006 5.52 2.162 10.707 6.068 14.604 3.901 3.892 9.083 6.034 14.593 6.034h.026l14.847-.017v22.456c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-22.474l112.119-.13.036 31.014-77.65.09c-3.963.004-7.686 1.551-10.484 4.355s-4.336 6.531-4.331 10.494l.09 78.359c.005 3.962 1.552 7.686 4.356 10.483 2.8 2.793 6.519 4.331 10.475 4.331h.019l77.651-.089.111 96.11-112.391.13v-178.672c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v178.69l-28.488.033c-4.143.005-7.497 3.367-7.492 7.509.005 4.139 3.361 7.491 7.5 7.491h.009l496.619-.575c4.142-.005 7.496-3.367 7.491-7.509-.005-4.138-3.361-7.491-7.499-7.491zm-78.625-189.041.09 78.022-77.486.09-.09-78.022zm-404.38-60.546c-.002 0-.004 0-.007 0-1.511 0-2.931-.587-4-1.653-1.07-1.068-1.661-2.489-1.663-4.003l-.022-19.675c-.002-1.516.586-2.941 1.656-4.015 1.068-1.072 2.489-1.663 4.001-1.665l141.966-.164.036 31.011zm64.645 138.962-.09-78.022 77.482-.09.09 78.022zm92.227-220.372c-.002-1.523.59-2.956 1.666-4.034s2.507-1.673 4.03-1.675l143.451-.166h.007c3.141 0 5.699 2.554 5.703 5.696l.383 331.375-18.744.022-.153-132.263c-.007-6.323-2.435-12.271-6.835-16.749-4.434-4.511-10.334-6.994-16.618-6.994-.009 0-.019 0-.028 0l-70.459.082c-6.294.007-12.2 2.505-16.629 7.033-4.39 4.488-6.804 10.441-6.796 16.765l.153 132.263-18.748.022zm33.978 199.072c-.003-2.372.892-4.595 2.519-6.258 1.588-1.624 3.692-2.52 5.924-2.522l70.459-.082h.01c2.228 0 4.33.891 5.919 2.508 1.631 1.66 2.531 3.88 2.534 6.252l.153 132.263-87.365.101z" data-v-95c8e9f1${_scopeId}></path><path d="m207.012 200.158h.018l25.008-.029.029 25.008c.009 7.715 6.289 13.985 14 13.985h.018l19.004-.022c3.74-.004 7.255-1.464 9.896-4.112 2.642-2.647 4.094-6.166 4.089-9.906l-.029-25.008 25.007-.029c7.72-.008 13.994-6.296 13.986-14.018l-.022-19.005c-.004-3.74-1.465-7.254-4.113-9.896-2.644-2.638-6.154-4.089-9.888-4.089-.005 0-.012 0-.018 0l-25.008.029-.029-25.007c-.004-3.74-1.464-7.254-4.112-9.896-2.644-2.638-6.155-4.09-9.888-4.09-.005 0-.012 0-.018 0l-19.005.022c-3.74.004-7.254 1.465-9.896 4.113-2.641 2.647-4.093 6.166-4.089 9.905l.029 25.008-25.007.029c-3.74.004-7.255 1.464-9.896 4.112-2.642 2.648-4.094 6.166-4.089 9.906l.022 19.004c.004 3.74 1.464 7.255 4.112 9.896 2.645 2.639 6.156 4.09 9.889 4.09zm32.489-32.045c4.142-.005 7.496-3.367 7.491-7.509l-.037-31.509 17.007-.02.037 31.51c0 .259.014.514.04.766.388 3.779 3.58 6.725 7.46 6.725h.009l31.509-.037.02 17.007-31.51.037c-4.142.005-7.496 3.367-7.491 7.509l.037 31.509-17.008.02-.037-31.51c-.005-4.139-3.361-7.491-7.5-7.491-.002 0-.006 0-.009 0l-31.509.037-.02-17.007z" data-v-95c8e9f1${_scopeId}></path></g></svg></div><h2 class="st-funfact-number st-counter" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Home.Hospital Rooms Number"))}</h2><div class="st-funfact-title" data-v-95c8e9f1${_scopeId}>${ssrInterpolate(_ctx.__("Home.Hospital Rooms"))}</div></div><div class="st-height-b30 st-height-lg-b30" data-v-95c8e9f1${_scopeId}></div></div></div></div><div class="col-xl-6 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s" data-v-95c8e9f1${_scopeId}><div class="st-video-block st-style1 st-zoom" data-v-95c8e9f1${_scopeId}><div class="st-video-block-img st-zoom-in st-dynamic-bg" style="${ssrRenderStyle({ "background-image": "url('/assets/img/video-block-img.jpg')" })}" data-v-95c8e9f1${_scopeId}></div><a href="https://www.youtube.com/embed/jRcfE2xxSAw?autoplay=1" class="st-play-btn st-style1 st-video-open" data-v-95c8e9f1${_scopeId}><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 336 336" xml:space="preserve" data-v-95c8e9f1${_scopeId}><g data-v-95c8e9f1${_scopeId}><path d="M286.8,49.2C256.4,18.8,214.4,0,168,0C121.6,0,79.6,18.8,49.2,49.2C18.8,79.6,0,121.6,0,168c0,46.4,18.8,88.4,49.2,118.8
                      C79.6,317.2,121.6,336,168,336c46.4,0,88.4-18.8,118.8-49.2C317.2,256.4,336,214.4,336,168C336,121.6,317.2,79.6,286.8,49.2z
                       M272.4,272.4c-26.8,26.8-63.6,43.2-104.4,43.2s-77.6-16.4-104.4-43.2C37.2,245.6,20.4,208.8,20.4,168S36.8,90.4,63.6,63.6
                      C90.4,36.8,127.2,20.4,168,20.4s77.6,16.4,104.4,43.2c26.8,26.8,43.2,63.6,43.2,104.4S298.8,245.6,272.4,272.4z" data-v-95c8e9f1${_scopeId}></path></g><g data-v-95c8e9f1${_scopeId}><path d="M261.2,156c-0.8-0.8-2-2.4-3.2-4c-0.4-0.4-0.4-0.4-0.8-0.8c-1.2-1.2-2.4-2-4-2.8l-59.2-34c0,0-0.4,0-0.4-0.4L134,79.6
                      c-5.2-3.2-11.2-3.6-16.8-2.4c-5.6,1.6-10.4,5.2-13.6,10.4c-1.2,1.6-1.6,3.6-2.4,5.2c-0.4,1.2-0.4,2.8-0.8,4.4c0,0.4,0,1.2,0,1.6
                      V168v68.8c0,6,2.4,11.6,6.4,15.6s9.6,6.4,15.6,6.4c2,0,4.4-0.4,6.4-1.2s4-1.6,5.6-2.8l58.8-34l0.8-0.4l59.2-34
                      c0.4,0,0.4-0.4,0.8-0.4c4.8-3.2,8.4-8,9.6-13.2C265.2,167.2,264.4,161.2,261.2,156z M244,168.4c0,0.4-0.4,0.8-0.8,0.8h-0.4
                      L184,203.6l-0.4,0.4l-58.8,34c-0.4,0-0.4,0.4-0.8,0.4c0,0-0.4,0-0.4,0.4h-0.4c-0.4,0-0.8-0.4-1.2-0.4c-0.4-0.4-0.4-0.8-0.4-1.2
                      V168V99.2v-0.4v-0.4c0.4-0.4,0.8-0.8,1.2-0.8c0.4,0,0.8,0,1.2,0l59.2,34l0.4,0.4l59.6,34.4l0.4,0.4l0.4,0.4
                      C244,167.6,244,168,244,168.4z" data-v-95c8e9f1${_scopeId}></path></g></svg><span class="st-video-animaiton" data-v-95c8e9f1${_scopeId}><span data-v-95c8e9f1${_scopeId}></span></span></a></div></div></div></div></section><div class="st-google-map" data-v-95c8e9f1${_scopeId}><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd" allowfullscreen data-v-95c8e9f1${_scopeId}></iframe></div></div><div class="st-video-popup" data-v-95c8e9f1${_scopeId}><div class="st-video-popup-overlay" data-v-95c8e9f1${_scopeId}></div><div class="st-video-popup-content" data-v-95c8e9f1${_scopeId}><div class="st-video-popup-layer" data-v-95c8e9f1${_scopeId}></div><div class="st-video-popup-container" data-v-95c8e9f1${_scopeId}><div class="st-video-popup-align" data-v-95c8e9f1${_scopeId}><div class="embed-responsive embed-responsive-16by9" data-v-95c8e9f1${_scopeId}><iframe class="embed-responsive-item" src="about:blank" data-v-95c8e9f1${_scopeId}></iframe></div></div><div class="st-video-popup-close" data-v-95c8e9f1${_scopeId}></div></div></div></div>`);
      } else {
        return [
          createVNode("div", { class: "st-content" }, [
            createVNode(_component_slider, { sliders: $props.sliders }, null, 8, ["sliders"]),
            createVNode("section", null, [
              createVNode("div", { class: "st-height-b120 st-height-lg-b80" }),
              createVNode("div", { class: "container" }, [
                createVNode("div", { class: "row" }, [
                  createVNode("div", { class: "col-lg-4" }, [
                    createVNode("div", { class: "st-iconbox st-style1" }, [
                      createVNode("div", { class: "st-iconbox-icon st-purple-box" }, [
                        (openBlock(), createBlock("svg", {
                          version: "1.1",
                          xmlns: "http://www.w3.org/2000/svg",
                          "xmlns:xlink": "http://www.w3.org/1999/xlink",
                          x: "0px",
                          y: "0px",
                          viewBox: "0 0 512 512",
                          "xml:space": "preserve"
                        }, [
                          createVNode("g", null, [
                            createVNode("path", { d: "M482.726,485.783l-22.65-132.603c-2.441-14.287-12.576-25.764-26.453-29.95l-61.092-18.433\n                      c-1.265-14.934-7.388-29.023-17.578-40.175c-8.151-8.92-18.403-15.415-29.704-18.999c1.934-2.146,3.727-4.285,5.372-6.377\n                      c14.528-18.477,22.306-38.833,24.286-52.724h4.713c12.258,0,22.231-9.972,22.231-22.231v-11.396\n                      c0-8.181-4.602-15.594-11.523-19.441V106.05c0-4.141-3.357-7.498-7.498-7.498s-7.497,3.356-7.497,7.498v30.764\n                      c-2.92,0.507-6.404,1.383-9.968,2.884c-0.365,0.133-0.72,0.287-1.056,0.472c-0.805,0.367-1.611,0.754-2.414,1.19V80.938\n                      c0-16.693-13.58-30.273-30.273-30.273h-20.695c-7.138,0-14.111,2.487-19.637,7.005l-2.031,1.66c-3.73,3.05-8.438,4.73-13.257,4.73\n                      c-4.819,0-9.528-1.68-13.258-4.73l-2.03-1.66c-5.526-4.517-12.499-7.005-19.637-7.005H200.38\n                      c-16.693,0-30.273,13.58-30.273,30.273v60.422c-0.803-0.436-1.609-0.823-2.414-1.19c-0.336-0.185-0.69-0.339-1.055-0.472\n                      c-3.564-1.501-7.049-2.377-9.968-2.884V59.025c0-24.278,19.752-44.03,44.03-44.03h110.601c24.279,0,44.03,19.752,44.03,44.03\n                      v11.786c0,4.141,3.357,7.498,7.497,7.498s7.498-3.356,7.498-7.498V59.025C370.326,26.479,343.847,0,311.301,0H200.7\n                      c-32.547,0-59.025,26.479-59.025,59.025v74.43c-6.921,3.847-11.523,11.259-11.523,19.441v11.396\n                      c0,12.259,9.973,22.231,22.231,22.231h4.713c1.979,13.891,9.758,34.247,24.286,52.724c1.643,2.09,3.435,4.227,5.367,6.371\n                      c-25.98,8.252-44.926,31.61-47.277,59.179L78.378,323.23c-13.877,4.186-24.013,15.663-26.453,29.95l-9.198,53.849\n                      c-0.697,4.082,2.047,7.955,6.128,8.652c4.08,0.699,7.955-2.046,8.653-6.128l9.198-53.849c1.476-8.644,7.608-15.586,16.003-18.118\n                      l56.505-17.049v14.831c-12.952,2.384-23.973,11.281-28.512,23.608c-1.205,3.272-1.954,6.698-2.226,10.182l-5.461,70.095\n                      c-0.412,5.28,1.415,10.538,5.01,14.423c3.595,3.886,8.694,6.116,13.989,6.116h9.348c4.141,0,7.498-3.356,7.498-7.498\n                      c0-4.142-3.357-7.497-7.498-7.497h-9.348c-1.129,0-2.215-0.474-2.982-1.304c-0.766-0.828-1.155-1.948-1.067-3.073l5.461-70.096\n                      c0.165-2.111,0.618-4.186,1.348-6.167c3.158-8.575,11.686-14.382,21.223-14.449l1.235-0.009c0.058-0.001,0.115-0.001,0.172-0.001\n                      c9.269,0,17.474,5.256,20.935,13.427c0.971,2.291,1.561,4.713,1.755,7.199l5.463,70.097c0.087,1.124-0.302,2.244-1.068,3.073\n                      c-0.766,0.828-1.853,1.303-2.982,1.303h-9.348c-4.141,0-7.498,3.356-7.498,7.497c0,4.141,3.357,7.498,7.498,7.498h9.348\n                      c5.295,0,10.395-2.229,13.989-6.116c3.596-3.887,5.423-9.144,5.011-14.422l-5.463-70.096c-0.32-4.102-1.295-8.101-2.898-11.884\n                      c-4.939-11.657-15.5-19.762-27.938-21.955v-19.306l25.774-7.777c2.345,4.939,6.992,15.612,16.197,38.619\n                      c9.277,23.214,20.808,52.969,31.867,81.895c0.079,0.243,0.17,0.48,0.272,0.712c7.38,19.311,14.539,38.225,20.662,54.541\n                      c1.098,2.926,3.895,4.864,7.02,4.864c3.125,0,5.922-1.938,7.02-4.864c6.122-16.316,13.281-35.23,20.662-54.541\n                      c0.103-0.232,0.193-0.47,0.272-0.712c11.051-28.909,22.576-58.645,31.849-81.852c9.217-23.037,13.868-33.719,16.214-38.662\n                      l25.774,7.777v44.285c-17.858,3.469-31.385,19.219-31.385,38.077c0,21.391,17.403,38.795,38.795,38.795\n                      c21.392,0,38.795-17.403,38.795-38.795c0-18.796-13.438-34.508-31.21-38.045v-39.792l56.506,17.049\n                      c8.395,2.532,14.526,9.474,16.003,18.118l22.65,132.603c0.376,2.199-0.209,4.349-1.648,6.054c-1.438,1.704-3.459,2.644-5.69,2.644\n                      H51.393c-2.231,0-4.251-0.939-5.69-2.644c-1.438-1.705-2.024-3.854-1.648-6.054l7.475-43.762c0.697-4.082-2.047-7.955-6.128-8.652\n                      c-4.08-0.7-7.955,2.047-8.653,6.128l-7.475,43.762c-1.115,6.532,0.696,13.183,4.968,18.248C38.516,509.096,44.767,512,51.393,512\n                      h409.214c6.626,0,12.878-2.904,17.151-7.969C482.03,498.966,483.841,492.315,482.726,485.783z M355.421,152.089\n                      c3.995-0.996,7.202-0.978,7.238-0.977c1.292,0.017,2.548-0.285,3.664-0.87c0.334,0.831,0.531,1.724,0.531,2.654v11.396\n                      c0,3.99-3.246,7.236-7.236,7.236h-4.197V152.089z M156.579,171.528L156.579,171.528h-4.197c-3.99,0-7.236-3.246-7.236-7.236\n                      v-11.396c0-0.93,0.198-1.823,0.531-2.653c1.115,0.585,2.371,0.887,3.664,0.869c0.057,0.01,3.255-0.008,7.238,0.981V171.528z\n                       M171.574,179.935v-19.698c2.272,0.681,4.757,0.588,7.051-0.369c3.935-1.642,6.477-5.455,6.477-9.716V80.938\n                      c0-8.424,6.854-15.278,15.278-15.278h20.695c3.688,0,7.291,1.285,10.146,3.619l2.03,1.66c6.401,5.234,14.48,8.115,22.749,8.115\n                      c8.269,0,16.348-2.882,22.749-8.115l2.03-1.66c2.854-2.334,6.458-3.619,10.146-3.619h20.695c8.424,0,15.278,6.854,15.278,15.278\n                      v69.215c0,4.26,2.542,8.074,6.477,9.716c1.314,0.548,2.69,0.814,4.054,0.814c1.017,0,2.026-0.149,2.997-0.439v19.691\n                      c0,10.947-7.568,32.205-21.594,50.043c-4.646,5.909-10.618,12.257-17.971,17.805c-0.233,0.156-0.456,0.325-0.669,0.505\n                      c-11.391,8.422-26.038,14.874-44.192,14.874s-32.801-6.452-44.193-14.875c-0.213-0.179-0.435-0.348-0.667-0.503\n                      c-7.353-5.549-13.325-11.897-17.972-17.806C179.143,212.141,171.574,190.882,171.574,179.935z M305.12,301.07L256,337.784\n                      l-49.12-36.714c4.871-6.191,7.6-14.138,7.6-21.23v-12.086c11.551,6.212,25.334,10.404,41.52,10.404s29.97-4.192,41.52-10.404\n                      v12.086C297.52,286.932,300.249,294.879,305.12,301.07z M194.367,292.701c-4.004-1.525-8.443-1.775-12.642-0.636\n                      c-0.184,0.043-0.364,0.092-0.539,0.144l-25.903,7.816c4.381-21.542,21.873-38.688,44.202-42.009v21.824\n                      C199.485,284.544,197.385,289.407,194.367,292.701z M214.716,352.889c-0.014-0.035-0.028-0.07-0.041-0.104\n                      c-0.38-0.961-0.755-1.909-1.127-2.846c-0.067-0.17-0.134-0.339-0.201-0.507c-0.364-0.917-0.725-1.827-1.081-2.722\n                      c-0.025-0.063-0.05-0.125-0.075-0.189c-1.111-2.793-2.182-5.472-3.212-8.039c-0.075-0.186-0.15-0.375-0.225-0.56\n                      c-0.296-0.736-0.587-1.461-0.876-2.177c-0.106-0.263-0.211-0.523-0.316-0.783c-0.28-0.694-0.558-1.384-0.832-2.059\n                      c-0.082-0.202-0.162-0.398-0.243-0.599c-0.497-1.226-0.983-2.421-1.457-3.586c-0.128-0.315-0.259-0.636-0.386-0.947\n                      c-0.186-0.454-0.367-0.896-0.549-1.341c-0.196-0.48-0.392-0.956-0.584-1.424c-0.072-0.175-0.147-0.36-0.219-0.534\n                      c-0.058-0.14-0.111-0.269-0.168-0.408c-0.866-2.104-1.689-4.087-2.47-5.952c-0.006-0.015-0.013-0.03-0.019-0.045\n                      c-0.416-0.993-0.823-1.963-1.214-2.887c-0.203-0.479-0.403-0.95-0.599-1.412l42.245,31.574l-17.652,7.499\n                      c-0.031,0.013-0.063,0.026-0.094,0.04l-7.37,3.131C215.533,354.955,215.124,353.919,214.716,352.889z M232.606,398.797\n                      c-1.481-3.843-2.973-7.708-4.468-11.569c-2.338-6.039-4.571-11.781-6.708-17.251l2.798-1.189l11.432,13.289L232.606,398.797z\n                       M256.145,459.735c-0.215-0.446-0.471-0.867-0.767-1.259c-3.388-8.955-7.688-20.286-12.447-32.753l7-38.325h12.138l7,38.325\n                      C264.082,438.784,259.603,450.594,256.145,459.735z M264.881,372.404h-17.762l-8.405-9.77L256,355.291l17.286,7.343\n                      L264.881,372.404z M283.862,387.228c-1.495,3.861-2.987,7.726-4.468,11.569l-3.054-16.721l11.432-13.289l2.798,1.189\n                      C288.433,375.446,286.2,381.189,283.862,387.228z M312.58,315.18c-0.371,0.876-0.757,1.795-1.15,2.733\n                      c-0.051,0.122-0.103,0.245-0.154,0.368c-0.389,0.93-0.785,1.88-1.195,2.869c-0.027,0.065-0.055,0.134-0.082,0.2\n                      c-0.354,0.853-0.717,1.733-1.086,2.63c-0.069,0.168-0.134,0.323-0.203,0.492c-0.082,0.201-0.17,0.414-0.253,0.617\n                      c-0.164,0.4-0.331,0.808-0.499,1.216c-0.206,0.503-0.411,1.004-0.622,1.519c-0.067,0.164-0.136,0.335-0.204,0.5\n                      c-0.522,1.279-1.058,2.597-1.606,3.951c-0.086,0.212-0.171,0.42-0.257,0.635c-0.271,0.669-0.547,1.352-0.824,2.039\n                      c-0.108,0.269-0.217,0.537-0.326,0.809c-0.286,0.709-0.575,1.427-0.867,2.155c-0.082,0.203-0.165,0.411-0.247,0.615\n                      c-1.017,2.532-2.072,5.173-3.167,7.925c-0.036,0.091-0.072,0.18-0.108,0.272c-0.354,0.889-0.712,1.793-1.074,2.704\n                      c-0.067,0.17-0.135,0.34-0.203,0.511c-0.374,0.942-0.751,1.894-1.133,2.861c-0.007,0.018-0.014,0.036-0.021,0.053\n                      c-0.412,1.042-0.826,2.09-1.248,3.16l-7.377-3.134c-0.026-0.011-0.052-0.022-0.077-0.033l-17.662-7.503l42.245-31.574\n                      C312.982,314.23,312.782,314.7,312.58,315.18z M330.814,292.21c-0.001,0-0.003-0.001-0.004-0.001\n                      c-0.006-0.002-0.013-0.003-0.019-0.006c-4.35-1.305-8.99-1.089-13.157,0.498c-3.019-3.294-5.118-8.157-5.118-12.861v-21.835\n                      c22.469,3.312,39.908,20.297,44.232,42.029L330.814,292.21z M389.001,398.375c0,13.124-10.677,23.8-23.8,23.8\n                      s-23.8-10.676-23.8-23.8c0-13.124,10.677-23.8,23.8-23.8S389.001,385.251,389.001,398.375z" })
                          ])
                        ]))
                      ]),
                      createVNode("h2", { class: "st-iconbox-title" }, "تواصل مع مختصين"),
                      createVNode("div", { class: "st-iconbox-text" }, "تواصل مع جميع الاطباء المختصين في العلاج الطبيعي.")
                    ]),
                    createVNode("div", { class: "st-height-b0 st-height-lg-b30" })
                  ]),
                  createVNode("div", { class: "col-lg-4" }, [
                    createVNode("div", { class: "st-iconbox st-style1" }, [
                      createVNode("div", { class: "st-iconbox-icon st-green-box" }, [
                        (openBlock(), createBlock("svg", {
                          "enable-background": "new 0 0 511.988 511.988",
                          viewBox: "0 0 511.988 511.988",
                          xmlns: "http://www.w3.org/2000/svg"
                        }, [
                          createVNode("g", null, [
                            createVNode("path", { d: "m511.988 227.658c0-60.096-23.44-116.593-66.004-159.085-42.559-42.489-99.142-65.888-159.327-65.888-62.806 0-122.954 26.329-165.547 72.348-7.616-2.821-15.75-4.293-24.108-4.293-.001 0 .001 0 0 0-18.539 0-35.977 7.24-49.098 20.385-.274.275-.532.565-.772.87l-15.678 19.868c-14.987 18.993-25.114 41.58-29.285 65.318-4.207 23.943-2.269 48.627 5.605 71.384 5.707 16.494 12.887 29.151 21.342 37.622l193.83 194.143c6.704 6.717 16.109 12.686 27.956 17.74 17.668 7.539 36.431 11.233 55.167 11.232 31.195-.001 62.309-10.246 88.105-30.047l22.298-17.116c.348-.268.679-.558.989-.868 17.59-17.623 23.745-42.431 18.464-65.082 48.367-42.732 76.063-104.032 76.063-168.531zm-108.241 219.036-21.75 16.696c-35.571 27.305-82.795 33.545-123.246 16.285-9.479-4.044-16.763-8.578-21.65-13.474l-193.831-194.144c-6.301-6.313-11.885-16.418-16.596-30.032-13.829-39.97-6.173-83.997 20.48-117.773l15.301-19.391c9.295-9.111 21.541-14.121 34.546-14.121 13.19 0 25.599 5.155 34.941 14.514l32.021 32.081c18.41 18.444 18.41 48.454-.002 66.9l-35.863 35.951c-3.895 3.905-3.894 10.226.003 14.128l126.446 126.631c1.876 1.878 4.421 2.934 7.076 2.934h.003c2.656 0 5.202-1.058 7.077-2.938l35.86-35.948c8.919-8.936 20.767-13.857 33.36-13.857s24.44 4.921 33.36 13.857l32.021 32.081c19.135 19.17 19.282 50.268.443 69.62zm-15.287-112.803-3.021-3.026c-12.698-12.722-29.573-19.728-47.515-19.728-17.943 0-34.817 7.006-47.518 19.73l-28.786 28.857-112.313-112.479 28.812-28.883c25.359-25.407 26.159-66.243 2.401-92.624 27.711-28.735 66.034-45.095 106.137-45.095 81.209 0 147.276 65.95 147.276 147.014 0 40.189-16.496 78.547-45.473 106.234zm29.001 29.055-14.869-14.897c32.721-31.428 51.341-74.875 51.341-120.392 0-92.092-75.04-167.014-167.276-167.014-45.385 0-88.762 18.449-120.206 50.873l-20.353-20.391c-2.191-2.195-4.502-4.225-6.918-6.084 38.582-39.723 91.887-62.356 147.477-62.356 113.22 0 205.331 91.95 205.331 204.972 0 56.381-23.234 110.084-64.048 148.736-2.866-4.796-6.359-9.319-10.479-13.447z" }),
                            createVNode("path", { d: "m355.669 228.279h-1.121c.121-21.045.184-43.537-.076-46.664-.586-7.056-4.823-12.807-10.796-14.65-5.923-1.828-12.211.471-16.822 6.152-4.979 6.136-27.961 47.742-34.886 60.347-1.702 3.098-1.642 6.864.158 9.907 1.8 3.042 5.072 4.908 8.606 4.908h33.681c-.041 5.609-.084 10.986-.125 15.844-.047 5.523 4.391 10.038 9.914 10.085.029.001.059.001.088.001 5.482 0 9.951-4.421 9.997-9.914.026-2.999.074-8.807.128-16.016h1.253c5.523 0 10-4.477 10-10 .001-5.523-4.477-10-9.999-10zm-21.125 0h-16.853c6.251-11.227 12.345-21.998 16.965-29.943-.004 8.206-.048 18.878-.112 29.943z" }),
                            createVNode("path", { d: "m277.116 256.998c-8.794.111-18.124.184-25.861.199 4.857-6.523 11.614-15.793 20.75-28.902 5.593-8.025 9.24-15.609 10.84-22.541.375-1.584.688-4.6.689-5.647.018-17.91-14.528-32.48-32.385-32.48-15.444 0-28.809 11.02-31.779 26.204-1.06 5.42 2.474 10.673 7.895 11.733 5.419 1.059 10.673-2.475 11.733-7.895 1.138-5.819 6.248-10.042 12.151-10.042 6.649 0 12.09 5.307 12.373 11.938l-.272 2.136c-1.091 4.338-3.664 9.436-7.654 15.16-13.857 19.883-22.126 30.756-26.567 36.598-5.489 7.217-7.994 10.511-6.29 16.041 1.001 3.249 3.461 5.744 6.749 6.844 1.337.448 2.619.877 19.628.877 6.676 0 15.777-.066 28.251-.224 5.522-.069 9.943-4.603 9.873-10.125-.068-5.523-4.619-9.93-10.124-9.874z" })
                          ])
                        ]))
                      ]),
                      createVNode("h2", { class: "st-iconbox-title" }, "الخدمة 24 ساعه"),
                      createVNode("div", { class: "st-iconbox-text" }, "متاحين 24 ساعه في اوقات العمل.")
                    ]),
                    createVNode("div", { class: "st-height-b0 st-height-lg-b30" })
                  ]),
                  createVNode("div", { class: "col-lg-4" }, [
                    createVNode("div", { class: "st-iconbox st-style1" }, [
                      createVNode("div", { class: "st-iconbox-icon st-red-box" }, [
                        (openBlock(), createBlock("svg", {
                          "enable-background": "new 0 0 512 512",
                          viewBox: "0 0 512 512",
                          xmlns: "http://www.w3.org/2000/svg"
                        }, [
                          createVNode("g", null, [
                            createVNode("g", null, [
                              createVNode("g", null, [
                                createVNode("path", { d: "m256 38.397c5.522 0 10-4.477 10-10v-18.397c0-5.523-4.478-10-10-10-5.523 0-10 4.477-10 10v18.397c0 5.523 4.477 10 10 10z" }),
                                createVNode("path", { d: "m342.609 62.764c1.556.88 3.246 1.298 4.915 1.298 3.486 0 6.874-1.827 8.713-5.079l9.655-17.069c2.719-4.807 1.026-10.908-3.78-13.628-4.806-2.718-10.909-1.027-13.628 3.781l-9.655 17.069c-2.719 4.807-1.026 10.908 3.78 13.628z" }),
                                createVNode("path", { d: "m409.789 128.753c1.634 0 3.292-.401 4.823-1.247l18.457-10.187c4.835-2.668 6.592-8.752 3.923-13.587-2.669-4.836-8.754-6.592-13.587-3.923l-18.457 10.187c-4.835 2.668-6.592 8.752-3.923 13.587 1.824 3.304 5.241 5.17 8.764 5.17z" }),
                                createVNode("path", { d: "m455.027 199.147h-19.524c-5.522 0-10 4.477-10 10s4.478 10 10 10h19.524c5.522 0 10-4.477 10-10s-4.477-10-10-10z" }),
                                createVNode("path", { d: "m155.763 58.983c1.84 3.252 5.227 5.079 8.713 5.079 1.668 0 3.359-.418 4.915-1.298 4.807-2.719 6.499-8.82 3.78-13.627l-9.655-17.069c-2.721-4.808-8.821-6.499-13.628-3.781-4.807 2.719-6.499 8.82-3.78 13.628z" }),
                                createVNode("path", { d: "m78.931 117.319 18.457 10.187c1.532.846 3.188 1.247 4.823 1.247 3.523 0 6.94-1.867 8.764-5.17 2.669-4.835.912-10.918-3.923-13.587l-18.457-10.187c-4.835-2.668-10.918-.913-13.587 3.923-2.669 4.835-.912 10.918 3.923 13.587z" }),
                                createVNode("path", { d: "m76.497 219.147c5.522 0 10-4.477 10-10s-4.478-10-10-10h-19.524c-5.522 0-10 4.477-10 10s4.478 10 10 10z" }),
                                createVNode("path", { d: "m448.091 446.815h-24.502v-61.428c0-5.523-4.478-10-10-10h-20.807v-171.08c0-75.405-61.347-136.752-136.813-136.752-75.405 0-136.752 61.347-136.752 136.752v171.081h-20.806c-5.522 0-10 4.477-10 10v61.428h-24.502c-5.522 0-10 4.477-10 10v45.184c0 5.523 4.478 10 10 10h384.182c5.523 0 10-4.477 10-10v-45.185c0-5.522-4.478-10-10-10zm-308.873-242.508c0-64.377 52.375-116.752 116.813-116.752 64.377 0 116.752 52.374 116.752 116.752v171.081h-86.683v-94.379c14.468-9.871 23.231-26.229 23.231-44.02 0-29.396-23.924-53.311-53.331-53.311s-53.331 23.915-53.331 53.311c0 17.79 8.764 34.148 23.232 44.02v94.379h-86.683zm101.326 62.204c-11.025-5.781-17.875-17.093-17.875-29.522 0-18.368 14.952-33.311 33.331-33.311s33.331 14.943 33.331 33.311c0 12.43-6.85 23.742-17.875 29.522-3.293 1.727-5.356 5.138-5.356 8.856v100.02h-20.2v-100.02c0-3.719-2.063-7.13-5.356-8.856zm197.547 225.489h-364.182v-25.185h136.885c5.523 0 10-4.477 10-10s-4.477-10-10-10h-102.383v-51.428h295.178v51.428h-102.383c-5.522 0-10 4.477-10 10s4.478 10 10 10h136.885z" }),
                                createVNode("path", { d: "m265.42 452.99c-1.61-3.865-5.581-6.387-9.771-6.16-4.161.225-7.816 3.098-9.029 7.08-1.212 3.978.243 8.471 3.606 10.938 3.284 2.409 7.764 2.601 11.23.458 4.105-2.538 5.822-7.856 3.964-12.316z" })
                              ])
                            ])
                          ])
                        ]))
                      ]),
                      createVNode("h2", { class: "st-iconbox-title" }, "الحالات الطارئية"),
                      createVNode("div", { class: "st-iconbox-text" }, "مختصين بمعالجة الحالات الطارئة والعاجلة .")
                    ]),
                    createVNode("div", { class: "st-height-b0 st-height-lg-b30" })
                  ])
                ])
              ])
            ]),
            createVNode("section", {
              class: "st-about-wrap",
              id: "about"
            }, [
              createVNode("div", { class: "st-shape-bg" }, [
                createVNode("img", {
                  src: _ctx.asset_url("assets/img/shape/about-bg-shape.svg"),
                  alt: "shape"
                }, null, 8, ["src"])
              ]),
              createVNode("div", { class: "st-height-b120 st-height-lg-b50" }),
              createVNode("div", { class: "container" }, [
                createVNode("div", { class: "st-section-heading st-style1" }, [
                  createVNode("h2", { class: "st-section-heading-title" }, toDisplayString(_ctx.__("Home.Who We Are")), 1),
                  createVNode("div", { class: "st-seperator" }, [
                    createVNode("div", {
                      class: "st-seperator-left wow fadeInLeft",
                      "data-wow-duration": "1s",
                      "data-wow-delay": "0.2s"
                    }),
                    createVNode("div", { class: "st-seperator-center" }, [
                      createVNode("img", {
                        src: "assets/img/icons/4.png",
                        alt: "icon"
                      })
                    ]),
                    createVNode("div", {
                      class: "st-seperator-right wow fadeInRight",
                      "data-wow-duration": "1s",
                      "data-wow-delay": "0.2s"
                    })
                  ]),
                  createVNode("div", { class: "st-section-heading-subtitle" }, [
                    createVNode("span", {
                      innerHTML: _ctx.__("Home.Text About Us")
                    }, null, 8, ["innerHTML"])
                  ])
                ]),
                createVNode("div", { class: "st-height-b40 st-height-lg-b40" })
              ]),
              createVNode("div", { class: "container" }, [
                createVNode("div", { class: "row" }, [
                  createVNode("div", { class: "col-lg-7" }, [
                    createVNode("div", { class: "st-vertical-middle" }, [
                      createVNode("div", { class: "st-vertical-middle-in" }, [
                        createVNode("div", { class: "st-text-block st-style1" }, [
                          createVNode("h2", { class: "st-text-block-title" }, toDisplayString(_ctx.__("Home.Title About us-text")), 1),
                          createVNode("div", { class: "st-height-b20 st-height-lg-b20" }),
                          createVNode("div", {
                            class: "st-text-block-text",
                            innerHTML: _ctx.__("Home.Sub About us-text")
                          }, null, 8, ["innerHTML"]),
                          createVNode("div", { class: "st-height-b25 st-height-lg-b25" }),
                          createVNode("div", { class: "st-text-block-avatar" }, [
                            createVNode("div", { class: "st-avatar-img" }, [
                              createVNode("img", {
                                src: "assets/img/avatar1.png",
                                alt: "avatar"
                              })
                            ]),
                            createVNode("div", { class: "st-avatar-info" }, [
                              createVNode("h4", { class: "st-avatar-name" }, "د . حامد"),
                              createVNode("div", { class: "st-avatar-designation" }, "خبير العلاج الطبي")
                            ])
                          ])
                        ])
                      ])
                    ]),
                    createVNode("div", { class: "st-height-b0 st-height-lg-b30" })
                  ]),
                  createVNode("div", {
                    class: "col-lg-5 wow fadeInRight",
                    "data-wow-duration": "0.8s",
                    "data-wow-delay": "0.2s"
                  }, [
                    createVNode("div", { class: "st-shedule-wrap" }, [
                      createVNode("div", { class: "st-shedule" }, [
                        createVNode("h2", { class: "st-shedule-title" }, toDisplayString(_ctx.__("Timetable.Title")), 1),
                        createVNode("ul", { class: "st-shedule-list" }, [
                          createVNode("li", null, [
                            createVNode("div", { class: "st-shedule-left" }, toDisplayString(_ctx.__("Timetable.Saturday")), 1),
                            createVNode("div", { class: "st-shedule-right" }, toDisplayString(_ctx.__("Timetable.Saturday_1")), 1)
                          ]),
                          createVNode("li", null, [
                            createVNode("div", { class: "st-shedule-left" }, toDisplayString(_ctx.__("Timetable.Sunday")), 1),
                            createVNode("div", { class: "st-shedule-right" }, toDisplayString(_ctx.__("Timetable.Sunday_1")), 1)
                          ]),
                          createVNode("li", null, [
                            createVNode("div", { class: "st-shedule-left" }, toDisplayString(_ctx.__("Timetable.Monday")), 1),
                            createVNode("div", { class: "st-shedule-right" }, toDisplayString(_ctx.__("Timetable.Monday_1")), 1)
                          ]),
                          createVNode("li", null, [
                            createVNode("div", { class: "st-shedule-left" }, toDisplayString(_ctx.__("Timetable.Tuesday")), 1),
                            createVNode("div", { class: "st-shedule-right" }, toDisplayString(_ctx.__("Timetable.Tuesday_1")), 1)
                          ]),
                          createVNode("li", null, [
                            createVNode("div", { class: "st-shedule-left" }, toDisplayString(_ctx.__("Timetable.Wednesday")), 1),
                            createVNode("div", { class: "st-shedule-right" }, toDisplayString(_ctx.__("Timetable.Wednesday_1")), 1)
                          ]),
                          createVNode("li", null, [
                            createVNode("div", { class: "st-shedule-left" }, toDisplayString(_ctx.__("Timetable.Thursday")), 1),
                            createVNode("div", { class: "st-shedule-right" }, toDisplayString(_ctx.__("Timetable.Thursday_1")), 1)
                          ]),
                          createVNode("li", null, [
                            createVNode("div", { class: "st-shedule-left" }, toDisplayString(_ctx.__("Timetable.Friday")), 1),
                            createVNode("div", { class: "st-shedule-right" }, toDisplayString(_ctx.__("Timetable.Friday_1")), 1)
                          ])
                        ]),
                        createVNode("div", { class: "st-height-b25 st-height-lg-b25" }),
                        createVNode("div", { class: "st-call st-style1" }, [
                          createVNode("div", { class: "st-call-icon" }, [
                            (openBlock(), createBlock("svg", {
                              version: "1.1",
                              xmlns: "http://www.w3.org/2000/svg",
                              "xmlns:xlink": "http://www.w3.org/1999/xlink",
                              x: "0px",
                              y: "0px",
                              viewBox: "0 0 512 512",
                              "xml:space": "preserve"
                            }, [
                              createVNode("g", null, [
                                createVNode("path", { d: "M492.557,400.56L392.234,300.238c-11.976-11.975-31.458-11.975-43.435,0l-26.088,26.088\n                                                      c-8.174,8.174-10.758,19.845-7.773,30.241l-9.843,9.843c-0.003,0.003-0.005,0.005-0.008,0.008\n                                                      c-6.99,6.998-50.523-3.741-103.145-56.363c-52.614-52.613-63.356-96.139-56.366-103.142c0-0.002,0.002-0.002,0.002-0.002\n                                                      l9.852-9.851c2.781,0.799,5.651,1.207,8.523,1.207c7.865,0,15.729-2.993,21.718-8.98l26.088-26.088\n                                                      c11.975-11.975,11.975-31.458,0-43.434L111.436,19.441c-5.8-5.8-13.513-8.994-21.716-8.994c-8.205,0-15.915,3.196-21.716,8.994\n                                                      l-26.09,26.09c-8.174,8.174-10.758,19.846-7.773,30.241c0,0-8.344,8.424-8.759,8.956c-27.753,30.849-32.96,79.418-14.561,137.487\n                                                      c18.017,56.857,56.857,117.088,109.367,169.595c52.508,52.508,112.739,91.348,169.596,109.367\n                                                      C312.624,508.414,333.991,512,353.394,512c31.813,0,58.337-9.648,77.35-28.66l5.474-5.474c2.74,0.788,5.602,1.213,8.532,1.213\n                                                      c8.205,0,15.917-3.196,21.716-8.994l26.09-26.09C504.531,432.02,504.531,412.536,492.557,400.56z M89.72,41.157l100.324,100.325\n                                                      l-26.074,26.102c0,0-0.005-0.005-0.014-0.014l-0.375-0.375l-49.787-49.787L63.631,67.247L89.72,41.157z M409.029,461.623\n                                                      c-0.002,0.002-0.003,0.003-0.005,0.005c-22.094,22.091-61.146,25.74-109.961,10.27c-52.252-16.558-108.065-52.714-157.156-101.806\n                                                      C92.814,321,56.658,265.189,40.101,212.936c-15.47-48.817-11.821-87.87,10.275-109.967l0.002-0.002l2.77-2.77l77.857,77.856\n                                                      l-7.141,7.141c-0.005,0.005-0.009,0.011-0.015,0.017c-29.585,29.622,5.963,96.147,56.378,146.562\n                                                      c37.734,37.734,84.493,67.14,118.051,67.14c11.284,0,21.076-3.325,28.528-10.778c0.003-0.003,0.005-0.005,0.008-0.008l7.133-7.133\n                                                      l77.857,77.856L409.029,461.623z M444.752,448.368L344.428,348.044l26.088-26.088L470.84,422.278\n                                                      C470.84,422.278,444.761,448.377,444.752,448.368z" })
                              ]),
                              createVNode("g", null, [
                                createVNode("path", { d: "M388.818,123.184c-29.209-29.209-68.042-45.294-109.344-45.293c-8.481,0-15.356,6.875-15.356,15.356\n                                                      c0,8.481,6.876,15.356,15.356,15.356c33.1-0.002,64.219,12.89,87.628,36.297c23.406,23.406,36.295,54.525,36.294,87.624\n                                                      c0,8.481,6.875,15.358,15.356,15.358c8.48,0,15.356-6.875,15.356-15.354C434.109,191.224,418.023,152.393,388.818,123.184z" })
                              ]),
                              createVNode("g", null, [
                                createVNode("path", { d: "M443.895,68.107C399.972,24.186,341.578-0.002,279.468,0c-8.481,0-15.356,6.876-15.356,15.356\n                                                      c0,8.481,6.876,15.356,15.356,15.356c53.907-0.002,104.588,20.992,142.709,59.111c38.118,38.118,59.111,88.799,59.11,142.706\n                                                      c0,8.481,6.875,15.356,15.356,15.356c8.48,0,15.356-6.875,15.356-15.354C512.001,170.419,487.813,112.027,443.895,68.107z" })
                              ]),
                              createVNode("g", null, [
                                createVNode("path", { d: "M333.737,178.26c-14.706-14.706-33.465-22.477-54.256-22.477c0,0-0.005,0-0.006,0\n                                                      c-8.481,0.002-15.356,6.876-15.354,15.358c0.002,8.481,6.878,15.356,15.358,15.354c0.002,0,0.003,0,0.005,0\n                                                      c12.644,0,23.593,4.536,32.539,13.481c8.819,8.82,13.481,20.075,13.479,32.544c-0.002,8.481,6.875,15.356,15.354,15.358h0.002\n                                                      c8.481,0,15.354-6.875,15.356-15.354C356.215,211.732,348.444,192.968,333.737,178.26z" })
                              ])
                            ]))
                          ]),
                          createVNode("div", { class: "st-call-text" }, [
                            createVNode("div", { class: "st-call-title" }, toDisplayString(_ctx.__("Timetable.Call Now")), 1),
                            createVNode("div", { class: "st-call-number" }, toDisplayString(_ctx.__("Timetable.phone")), 1)
                          ])
                        ])
                      ])
                    ])
                  ])
                ])
              ])
            ]),
            createVNode("section", {
              class: "st-before-after-section st-dynamic-bg st-bg",
              style: { "background-image": "url('/assets/img/before-after-bg.jpg')" }
            }, [
              createVNode("div", { class: "st-height-b120 st-height-lg-b80" }),
              createVNode("div", { class: "container" }, [
                createVNode("div", { class: "st-section-heading st-style1" }, [
                  createVNode("h2", { class: "st-section-heading-title" }, toDisplayString(_ctx.__("Home.Before and after procedures")), 1),
                  createVNode("div", { class: "st-seperator" }, [
                    createVNode("div", {
                      class: "st-seperator-left wow fadeInLeft",
                      "data-wow-duration": "1s",
                      "data-wow-delay": "0.2s"
                    }),
                    createVNode("div", { class: "st-seperator-center" }, [
                      createVNode("img", {
                        src: "/assets/img/icons/4.png",
                        alt: "icon"
                      })
                    ]),
                    createVNode("div", {
                      class: "st-seperator-right wow fadeInRight",
                      "data-wow-duration": "1s",
                      "data-wow-delay": "0.2s"
                    })
                  ]),
                  createVNode("div", { class: "st-section-heading-subtitle" }, toDisplayString(_ctx.__("Home.Before and after procedures_sub")), 1)
                ]),
                createVNode("div", { class: "st-height-b40 st-height-lg-b40" })
              ]),
              createVNode("div", { class: "st-before-after-wrap" }, [
                createVNode("div", { class: "container" }, [
                  createVNode("div", { class: "st-before-after-in" }, [
                    createVNode("div", { class: "st-before-after" }, [
                      createVNode("div", {
                        class: "st-after st-single-slide st-dynamic-bg",
                        style: { "background-image": "url('/assets/img/after.jpg')" }
                      }),
                      createVNode("div", {
                        class: "st-before st-single-slide st-dynamic-bg",
                        style: { "background-image": "url('/assets/img/before.jpg')" }
                      }),
                      createVNode("div", { class: "st-handle-before-after" }, [
                        createVNode("span")
                      ])
                    ])
                  ])
                ])
              ])
            ]),
            createVNode("section", null, [
              createVNode("div", { class: "st-height-b120 st-height-lg-b80" }),
              createVNode("div", { class: "container" }, [
                createVNode("div", { class: "st-section-heading st-style1" }, [
                  createVNode("h2", { class: "st-section-heading-title" }, toDisplayString(_ctx.__("Home.What peoble say")), 1),
                  createVNode("div", { class: "st-seperator" }, [
                    createVNode("div", {
                      class: "st-seperator-left wow fadeInLeft",
                      "data-wow-duration": "1s",
                      "data-wow-delay": "0.2s"
                    }),
                    createVNode("div", { class: "st-seperator-center" }, [
                      createVNode("img", {
                        src: "assets/img/icons/4.png",
                        alt: "icon"
                      })
                    ]),
                    createVNode("div", {
                      class: "st-seperator-right wow fadeInRight",
                      "data-wow-duration": "1s",
                      "data-wow-delay": "0.2s"
                    })
                  ]),
                  createVNode("div", { class: "st-section-heading-subtitle" }, toDisplayString(_ctx.__("Home.What peoble say Sub")), 1)
                ]),
                createVNode("div", { class: "st-height-b40 st-height-lg-b40" })
              ]),
              createVNode("div", { class: "container" }, [
                createVNode(_component_slider_comments, { opinions: $props.opinions }, null, 8, ["opinions"])
              ]),
              createVNode("div", { class: "st-height-b120 st-height-lg-b80" })
            ]),
            createVNode("section", { class: "st-gray-bg st-shape-wrap" }, [
              createVNode("div", { class: "st-shape4" }, [
                createVNode("img", {
                  src: "/assets/img/shape/section_shape.png",
                  alt: "shape1"
                })
              ]),
              createVNode("div", { class: "st-height-b120 st-height-lg-b80" }),
              createVNode("div", { class: "container" }, [
                createVNode("div", { class: "row" }, [
                  createVNode("div", { class: "col-xl-6" }, [
                    createVNode("div", { class: "row" }, [
                      createVNode("div", { class: "col-lg-6" }, [
                        createVNode("div", { class: "st-funfact st-style1" }, [
                          createVNode("div", { class: "st-funfact-icon st-purple-box" }, [
                            (openBlock(), createBlock("svg", {
                              "enable-background": "new 0 0 512 512",
                              viewBox: "0 0 512 512",
                              xmlns: "http://www.w3.org/2000/svg"
                            }, [
                              createVNode("g", null, [
                                createVNode("path", { d: "m316 76c0-33.084-26.916-60-60-60s-60 26.916-60 60 26.916 60 60 60 60-26.916 60-60zm-60 40c-22.056 0-40-17.944-40-40s17.944-40 40-40 40 17.944 40 40-17.944 40-40 40z" }),
                                createVNode("path", { d: "m346 266v-40c0-49.626-40.374-90-90-90s-90 40.374-90 90v40c0 5.523 4.478 10 10 10h160c5.522 0 10-4.477 10-10zm-20-10h-140v-30c0-38.598 31.402-70 70-70s70 31.402 70 70z" }),
                                createVNode("path", { d: "m71.858 408.114 48.142 24.067v53.819c0 5.523 4.478 10 10 10h106c5.522 0 10-4.477 10-10v-127.22c0-31.783-23.452-59.203-53.391-62.423-.795-.15-38.649-2.971-56.948-21.258l-27.38-27.379c-7.556-7.558-17.6-11.72-28.281-11.72v-80c0-22.056-17.944-40-40-40s-40 17.944-40 40v135.84c0 49.212 27.798 94.239 71.858 116.274zm-51.858-252.114c0-11.028 8.972-20 20-20s20 8.972 20 20v85.361c-12.196 7.052-20 20.2-20 34.639 0 10.68 4.162 20.723 11.719 28.28l51.21 51.22c3.903 3.905 10.236 3.907 14.142.001 3.905-3.905 3.906-10.236.001-14.142l-51.21-51.221c-3.78-3.779-5.862-8.8-5.862-14.138 0-8.464 5.357-16.044 13.332-18.861.003-.001.006-.003.009-.004h.001c6.88-2.439 15.066-1.005 20.797 4.726l27.383 27.383c18.65 18.637 45.831 23.879 68.836 26.986.037.004.075.009.113.013 19.923 2.142 35.529 20.827 35.529 42.537v117.22h-86v-50c0-3.788-2.141-7.251-5.528-8.944l-53.669-26.83c-37.504-18.757-60.803-56.456-60.803-98.386z" }),
                                createVNode("circle", {
                                  cx: "459",
                                  cy: "384",
                                  r: "10"
                                }),
                                createVNode("path", { d: "m472 116c-22.056 0-40 17.944-40 40v80c-10.681 0-20.725 4.162-28.281 11.719l-27.377 27.377c-15.96 15.949-41.848 18.608-56.951 21.262-29.939 3.22-53.391 30.639-53.391 62.422v127.22c0 5.523 4.478 10 10 10h106c5.522 0 10-4.477 10-10v-53.819l32.73-16.362c4.939-2.47 6.942-8.476 4.473-13.417-2.469-4.939-8.474-6.942-13.416-4.473l-38.259 19.125c-3.387 1.695-5.528 5.158-5.528 8.946v50h-86v-117.22c0-21.71 15.606-40.395 35.529-42.538.038-.004.076-.008.113-.013 23.361-3.155 50.206-8.368 68.839-26.988l27.38-27.38c5.724-5.724 13.913-7.166 20.797-4.726h.001c.003.001.006.003.009.004 7.975 2.817 13.332 10.397 13.332 18.861 0 5.338-2.082 10.359-5.861 14.14l-51.21 51.22c-3.905 3.906-3.904 10.237.001 14.142 3.904 3.904 10.237 3.905 14.142-.001l51.21-51.22c7.556-7.558 11.718-17.601 11.718-28.281 0-14.439-7.804-27.587-20-34.639v-85.361c0-11.028 8.972-20 20-20s20 8.972 20 20v135.84c0 18.296-4.617 36.46-13.353 52.528-2.639 4.852-.844 10.924 4.009 13.562 4.851 2.637 10.924.843 13.562-4.009 10.325-18.99 15.782-40.458 15.782-62.081v-135.84c0-22.056-17.944-40-40-40z" })
                              ])
                            ]))
                          ]),
                          createVNode("h2", { class: "st-funfact-number st-counter" }, toDisplayString(_ctx.__("Home.Years of experience Number")), 1),
                          createVNode("div", { class: "st-funfact-title" }, toDisplayString(_ctx.__("Home.Years of experience")), 1)
                        ]),
                        createVNode("div", { class: "st-height-b30 st-height-lg-b30" })
                      ]),
                      createVNode("div", { class: "col-lg-6" }, [
                        createVNode("div", { class: "st-funfact st-style1" }, [
                          createVNode("div", { class: "st-funfact-icon st-green-box" }, [
                            (openBlock(), createBlock("svg", {
                              version: "1.1",
                              xmlns: "http://www.w3.org/2000/svg",
                              "xmlns:xlink": "http://www.w3.org/1999/xlink",
                              x: "0px",
                              y: "0px",
                              viewBox: "0 0 512 512",
                              "xml:space": "preserve"
                            }, [
                              createVNode("g", null, [
                                createVNode("path", { d: "M107.972,291.258c-1.861-1.861-4.432-2.932-7.073-2.932c-2.631,0-5.213,1.071-7.073,2.932\n                        c-1.861,1.86-2.931,4.441-2.931,7.072c0,2.642,1.071,5.213,2.931,7.083c1.861,1.861,4.442,2.921,7.073,2.921\n                        s5.213-1.06,7.073-2.921c1.861-1.871,2.931-4.441,2.931-7.083C110.903,295.699,109.833,293.118,107.972,291.258z" })
                              ]),
                              createVNode("g", null, [
                                createVNode("path", { d: "M202.317,291.258c-1.86-1.861-4.441-2.932-7.073-2.932c-2.631,0-5.213,1.071-7.073,2.932\n                        c-1.861,1.86-2.931,4.441-2.931,7.072c0,2.642,1.07,5.213,2.931,7.083c1.861,1.861,4.442,2.921,7.073,2.921\n                        s5.213-1.06,7.073-2.921c1.861-1.871,2.931-4.452,2.931-7.083C205.248,295.699,204.178,293.118,202.317,291.258z" })
                              ]),
                              createVNode("g", null, [
                                createVNode("path", { d: "M183.966,346.195c-5.338-1.43-10.821,1.746-12.248,7.083c-2.859,10.702-12.582,18.178-23.646,18.178\n                        c-11.063,0-20.786-7.476-23.646-18.178c-1.426-5.339-6.909-8.515-12.248-7.083c-5.338,1.427-8.509,6.909-7.083,12.248\n                        c5.194,19.443,22.867,33.023,42.978,33.023c20.11,0,37.783-13.58,42.977-33.023C192.475,353.105,189.303,347.621,183.966,346.195z\n                        " })
                              ]),
                              createVNode("g", null, [
                                createVNode("path", { d: "M256.121,39.995c-5.526,0-10.005,4.479-10.005,10.005v63.514c0,5.526,4.479,10.005,10.005,10.005\n                        c5.526,0,10.005-4.479,10.005-10.005V50C266.126,44.474,261.647,39.995,256.121,39.995z" })
                              ]),
                              createVNode("g", null, [
                                createVNode("path", { d: "M263.198,141.795c-1.862-1.871-4.443-2.931-7.073-2.931c-2.641,0-5.213,1.061-7.083,2.931\n                        c-1.861,1.861-2.921,4.442-2.921,7.073s1.061,5.213,2.921,7.073c1.871,1.861,4.442,2.931,7.083,2.931\n                        c2.631,0,5.213-1.07,7.073-2.931s2.931-4.442,2.931-7.073S265.058,143.656,263.198,141.795z" })
                              ]),
                              createVNode("g", null, [
                                createVNode("path", { d: "M195.152,130.95L169.61,105.43c-3.908-3.905-10.244-3.903-14.149,0.006c-3.905,3.909-3.903,10.243,0.006,14.149\n                        l25.542,25.521c1.953,1.952,4.512,2.927,7.071,2.927c2.562,0,5.125-0.979,7.078-2.933\n                        C199.063,141.19,199.061,134.856,195.152,130.95z" })
                              ]),
                              createVNode("g", null, [
                                createVNode("path", { d: "M356.801,105.456c-3.909-3.906-10.244-3.903-14.149,0.005l-27.155,27.177c-3.906,3.909-3.903,10.244,0.005,14.149\n                        c1.953,1.953,4.512,2.928,7.071,2.928c2.562,0,5.124-0.978,7.077-2.933l27.155-27.177\n                        C360.712,115.696,360.709,109.361,356.801,105.456z" })
                              ]),
                              createVNode("g", null, [
                                createVNode("path", { d: "M506.938,285.54c-21.132-78.867-102.486-125.836-181.351-104.702c-27.068,7.253-50.981,21.674-69.659,41.643\n                        c-27.946-29.764-66.622-46.621-107.856-46.621C66.425,175.86,0,242.286,0,323.933s66.425,148.072,148.072,148.072\n                        c41.273,0,80.011-16.909,107.967-46.745c27.682,29.351,66.721,46.694,107.906,46.694c12.649,0,25.505-1.637,38.29-5.062\n                        C481.1,445.759,528.07,364.404,506.938,285.54z M148.072,451.995c-70.615,0-128.063-57.449-128.063-128.063\n                        c0-70.614,57.448-128.063,128.063-128.063c36.555,0,70.791,15.319,95.088,42.282c-2.654,3.754-5.156,7.645-7.484,11.676\n                        c-19.776,34.253-25.029,74.157-14.792,112.36c4.697,17.533,12.371,33.487,22.332,47.469\n                        C218.914,436.654,184.64,451.995,148.072,451.995z M397.056,447.564c-68.207,18.271-138.568-22.347-156.844-90.554\n                        c-8.853-33.041-4.31-67.553,12.793-97.176c3.156-5.466,6.671-10.642,10.51-15.509c0.166-0.191,0.32-0.389,0.47-0.59\n                        c16.93-21.203,40.082-36.415,66.78-43.569c11.061-2.963,22.173-4.378,33.116-4.378c56.536,0,108.415,37.785,123.727,94.931\n                        C505.886,358.927,465.263,429.287,397.056,447.564z" })
                              ]),
                              createVNode("g", null, [
                                createVNode("path", { d: "M334.605,304.249c-3.096-11.558-15.014-18.444-26.577-15.345c-11.558,3.098-18.441,15.019-15.344,26.577\n                        c1.198,4.47,5.24,7.419,9.658,7.419c0.856,0,1.729-0.111,2.595-0.344c5.338-1.431,8.505-6.915,7.074-12.253\n                        c-0.241-0.9,0.295-1.83,1.195-2.071c0.558-0.148,1.006,0.01,1.283,0.169c0.276,0.16,0.638,0.468,0.788,1.026\n                        c1.43,5.337,6.914,8.506,12.253,7.074C332.869,315.072,336.035,309.587,334.605,304.249z" })
                              ]),
                              createVNode("g", null, [
                                createVNode("path", { d: "M425.169,279.982c-1.501-5.599-5.091-10.278-10.111-13.177c-5.02-2.897-10.868-3.668-16.466-2.167\n                        c-5.599,1.5-10.279,5.09-13.176,10.11c-2.898,5.02-3.669,10.867-2.168,16.467c1.198,4.47,5.24,7.418,9.658,7.418\n                        c0.856-0.001,1.729-0.111,2.596-0.344c5.337-1.431,8.504-6.916,7.074-12.254c-0.149-0.558,0.009-1.005,0.169-1.282\n                        s0.467-0.638,1.026-0.787c0.558-0.149,1.007,0.01,1.283,0.169s0.637,0.467,0.787,1.026c1.43,5.337,6.914,8.505,12.253,7.074\n                        C423.432,290.805,426.599,285.32,425.169,279.982z" })
                              ]),
                              createVNode("g", null, [
                                createVNode("path", { d: "M416.404,342.76c-1.431-5.337-6.917-8.506-12.254-7.075c-5.338,1.431-8.504,6.915-7.074,12.253\n                        c3.404,12.705-4.163,25.812-16.868,29.216c-6.156,1.65-12.584,0.802-18.101-2.383c-5.519-3.187-9.466-8.33-11.114-14.485\n                        c-1.431-5.337-6.916-8.508-12.254-7.074c-5.337,1.431-8.504,6.916-7.074,12.253c3.033,11.318,10.291,20.777,20.438,26.635\n                        c6.758,3.902,14.26,5.896,21.861,5.896c3.811,0,7.646-0.5,11.425-1.514C408.75,390.222,422.663,366.121,416.404,342.76z" })
                              ])
                            ]))
                          ]),
                          createVNode("h2", { class: "st-funfact-number st-counter" }, toDisplayString(_ctx.__("Home.Happy Patients Number")), 1),
                          createVNode("div", { class: "st-funfact-title" }, toDisplayString(_ctx.__("Home.Happy Patients")), 1)
                        ]),
                        createVNode("div", { class: "st-height-b30 st-height-lg-b30" })
                      ]),
                      createVNode("div", { class: "col-lg-6" }, [
                        createVNode("div", { class: "st-funfact st-style1" }, [
                          createVNode("div", { class: "st-funfact-icon st-orange-box" }, [
                            (openBlock(), createBlock("svg", {
                              version: "1.1",
                              xmlns: "http://www.w3.org/2000/svg",
                              "xmlns:xlink": "http://www.w3.org/1999/xlink",
                              x: "0px",
                              y: "0px",
                              viewBox: "0 0 512 512",
                              "xml:space": "preserve"
                            }, [
                              createVNode("g", null, [
                                createVNode("path", { d: "M482.726,485.783l-22.65-132.603c-2.441-14.287-12.576-25.764-26.453-29.95l-61.092-18.433\n                      c-1.265-14.934-7.388-29.023-17.578-40.175c-8.151-8.92-18.403-15.415-29.704-18.999c1.934-2.146,3.727-4.285,5.372-6.377\n                      c14.528-18.477,22.306-38.833,24.286-52.724h4.713c12.258,0,22.231-9.972,22.231-22.231v-11.396\n                      c0-8.181-4.602-15.594-11.523-19.441V106.05c0-4.141-3.357-7.498-7.498-7.498s-7.497,3.356-7.497,7.498v30.764\n                      c-2.92,0.507-6.404,1.383-9.968,2.884c-0.365,0.133-0.72,0.287-1.056,0.472c-0.805,0.367-1.611,0.754-2.414,1.19V80.938\n                      c0-16.693-13.58-30.273-30.273-30.273h-20.695c-7.138,0-14.111,2.487-19.637,7.005l-2.031,1.66c-3.73,3.05-8.438,4.73-13.257,4.73\n                      c-4.819,0-9.528-1.68-13.258-4.73l-2.03-1.66c-5.526-4.517-12.499-7.005-19.637-7.005H200.38\n                      c-16.693,0-30.273,13.58-30.273,30.273v60.422c-0.803-0.436-1.609-0.823-2.414-1.19c-0.336-0.185-0.69-0.339-1.055-0.472\n                      c-3.564-1.501-7.049-2.377-9.968-2.884V59.025c0-24.278,19.752-44.03,44.03-44.03h110.601c24.279,0,44.03,19.752,44.03,44.03\n                      v11.786c0,4.141,3.357,7.498,7.497,7.498s7.498-3.356,7.498-7.498V59.025C370.326,26.479,343.847,0,311.301,0H200.7\n                      c-32.547,0-59.025,26.479-59.025,59.025v74.43c-6.921,3.847-11.523,11.259-11.523,19.441v11.396\n                      c0,12.259,9.973,22.231,22.231,22.231h4.713c1.979,13.891,9.758,34.247,24.286,52.724c1.643,2.09,3.435,4.227,5.367,6.371\n                      c-25.98,8.252-44.926,31.61-47.277,59.179L78.378,323.23c-13.877,4.186-24.013,15.663-26.453,29.95l-9.198,53.849\n                      c-0.697,4.082,2.047,7.955,6.128,8.652c4.08,0.699,7.955-2.046,8.653-6.128l9.198-53.849c1.476-8.644,7.608-15.586,16.003-18.118\n                      l56.505-17.049v14.831c-12.952,2.384-23.973,11.281-28.512,23.608c-1.205,3.272-1.954,6.698-2.226,10.182l-5.461,70.095\n                      c-0.412,5.28,1.415,10.538,5.01,14.423c3.595,3.886,8.694,6.116,13.989,6.116h9.348c4.141,0,7.498-3.356,7.498-7.498\n                      c0-4.142-3.357-7.497-7.498-7.497h-9.348c-1.129,0-2.215-0.474-2.982-1.304c-0.766-0.828-1.155-1.948-1.067-3.073l5.461-70.096\n                      c0.165-2.111,0.618-4.186,1.348-6.167c3.158-8.575,11.686-14.382,21.223-14.449l1.235-0.009c0.058-0.001,0.115-0.001,0.172-0.001\n                      c9.269,0,17.474,5.256,20.935,13.427c0.971,2.291,1.561,4.713,1.755,7.199l5.463,70.097c0.087,1.124-0.302,2.244-1.068,3.073\n                      c-0.766,0.828-1.853,1.303-2.982,1.303h-9.348c-4.141,0-7.498,3.356-7.498,7.497c0,4.141,3.357,7.498,7.498,7.498h9.348\n                      c5.295,0,10.395-2.229,13.989-6.116c3.596-3.887,5.423-9.144,5.011-14.422l-5.463-70.096c-0.32-4.102-1.295-8.101-2.898-11.884\n                      c-4.939-11.657-15.5-19.762-27.938-21.955v-19.306l25.774-7.777c2.345,4.939,6.992,15.612,16.197,38.619\n                      c9.277,23.214,20.808,52.969,31.867,81.895c0.079,0.243,0.17,0.48,0.272,0.712c7.38,19.311,14.539,38.225,20.662,54.541\n                      c1.098,2.926,3.895,4.864,7.02,4.864c3.125,0,5.922-1.938,7.02-4.864c6.122-16.316,13.281-35.23,20.662-54.541\n                      c0.103-0.232,0.193-0.47,0.272-0.712c11.051-28.909,22.576-58.645,31.849-81.852c9.217-23.037,13.868-33.719,16.214-38.662\n                      l25.774,7.777v44.285c-17.858,3.469-31.385,19.219-31.385,38.077c0,21.391,17.403,38.795,38.795,38.795\n                      c21.392,0,38.795-17.403,38.795-38.795c0-18.796-13.438-34.508-31.21-38.045v-39.792l56.506,17.049\n                      c8.395,2.532,14.526,9.474,16.003,18.118l22.65,132.603c0.376,2.199-0.209,4.349-1.648,6.054c-1.438,1.704-3.459,2.644-5.69,2.644\n                      H51.393c-2.231,0-4.251-0.939-5.69-2.644c-1.438-1.705-2.024-3.854-1.648-6.054l7.475-43.762c0.697-4.082-2.047-7.955-6.128-8.652\n                      c-4.08-0.7-7.955,2.047-8.653,6.128l-7.475,43.762c-1.115,6.532,0.696,13.183,4.968,18.248C38.516,509.096,44.767,512,51.393,512\n                      h409.214c6.626,0,12.878-2.904,17.151-7.969C482.03,498.966,483.841,492.315,482.726,485.783z M355.421,152.089\n                      c3.995-0.996,7.202-0.978,7.238-0.977c1.292,0.017,2.548-0.285,3.664-0.87c0.334,0.831,0.531,1.724,0.531,2.654v11.396\n                      c0,3.99-3.246,7.236-7.236,7.236h-4.197V152.089z M156.579,171.528L156.579,171.528h-4.197c-3.99,0-7.236-3.246-7.236-7.236\n                      v-11.396c0-0.93,0.198-1.823,0.531-2.653c1.115,0.585,2.371,0.887,3.664,0.869c0.057,0.01,3.255-0.008,7.238,0.981V171.528z\n                      M171.574,179.935v-19.698c2.272,0.681,4.757,0.588,7.051-0.369c3.935-1.642,6.477-5.455,6.477-9.716V80.938\n                      c0-8.424,6.854-15.278,15.278-15.278h20.695c3.688,0,7.291,1.285,10.146,3.619l2.03,1.66c6.401,5.234,14.48,8.115,22.749,8.115\n                      c8.269,0,16.348-2.882,22.749-8.115l2.03-1.66c2.854-2.334,6.458-3.619,10.146-3.619h20.695c8.424,0,15.278,6.854,15.278,15.278\n                      v69.215c0,4.26,2.542,8.074,6.477,9.716c1.314,0.548,2.69,0.814,4.054,0.814c1.017,0,2.026-0.149,2.997-0.439v19.691\n                      c0,10.947-7.568,32.205-21.594,50.043c-4.646,5.909-10.618,12.257-17.971,17.805c-0.233,0.156-0.456,0.325-0.669,0.505\n                      c-11.391,8.422-26.038,14.874-44.192,14.874s-32.801-6.452-44.193-14.875c-0.213-0.179-0.435-0.348-0.667-0.503\n                      c-7.353-5.549-13.325-11.897-17.972-17.806C179.143,212.141,171.574,190.882,171.574,179.935z M305.12,301.07L256,337.784\n                      l-49.12-36.714c4.871-6.191,7.6-14.138,7.6-21.23v-12.086c11.551,6.212,25.334,10.404,41.52,10.404s29.97-4.192,41.52-10.404\n                      v12.086C297.52,286.932,300.249,294.879,305.12,301.07z M194.367,292.701c-4.004-1.525-8.443-1.775-12.642-0.636\n                      c-0.184,0.043-0.364,0.092-0.539,0.144l-25.903,7.816c4.381-21.542,21.873-38.688,44.202-42.009v21.824\n                      C199.485,284.544,197.385,289.407,194.367,292.701z M214.716,352.889c-0.014-0.035-0.028-0.07-0.041-0.104\n                      c-0.38-0.961-0.755-1.909-1.127-2.846c-0.067-0.17-0.134-0.339-0.201-0.507c-0.364-0.917-0.725-1.827-1.081-2.722\n                      c-0.025-0.063-0.05-0.125-0.075-0.189c-1.111-2.793-2.182-5.472-3.212-8.039c-0.075-0.186-0.15-0.375-0.225-0.56\n                      c-0.296-0.736-0.587-1.461-0.876-2.177c-0.106-0.263-0.211-0.523-0.316-0.783c-0.28-0.694-0.558-1.384-0.832-2.059\n                      c-0.082-0.202-0.162-0.398-0.243-0.599c-0.497-1.226-0.983-2.421-1.457-3.586c-0.128-0.315-0.259-0.636-0.386-0.947\n                      c-0.186-0.454-0.367-0.896-0.549-1.341c-0.196-0.48-0.392-0.956-0.584-1.424c-0.072-0.175-0.147-0.36-0.219-0.534\n                      c-0.058-0.14-0.111-0.269-0.168-0.408c-0.866-2.104-1.689-4.087-2.47-5.952c-0.006-0.015-0.013-0.03-0.019-0.045\n                      c-0.416-0.993-0.823-1.963-1.214-2.887c-0.203-0.479-0.403-0.95-0.599-1.412l42.245,31.574l-17.652,7.499\n                      c-0.031,0.013-0.063,0.026-0.094,0.04l-7.37,3.131C215.533,354.955,215.124,353.919,214.716,352.889z M232.606,398.797\n                      c-1.481-3.843-2.973-7.708-4.468-11.569c-2.338-6.039-4.571-11.781-6.708-17.251l2.798-1.189l11.432,13.289L232.606,398.797z\n                      M256.145,459.735c-0.215-0.446-0.471-0.867-0.767-1.259c-3.388-8.955-7.688-20.286-12.447-32.753l7-38.325h12.138l7,38.325\n                      C264.082,438.784,259.603,450.594,256.145,459.735z M264.881,372.404h-17.762l-8.405-9.77L256,355.291l17.286,7.343\n                      L264.881,372.404z M283.862,387.228c-1.495,3.861-2.987,7.726-4.468,11.569l-3.054-16.721l11.432-13.289l2.798,1.189\n                      C288.433,375.446,286.2,381.189,283.862,387.228z M312.58,315.18c-0.371,0.876-0.757,1.795-1.15,2.733\n                      c-0.051,0.122-0.103,0.245-0.154,0.368c-0.389,0.93-0.785,1.88-1.195,2.869c-0.027,0.065-0.055,0.134-0.082,0.2\n                      c-0.354,0.853-0.717,1.733-1.086,2.63c-0.069,0.168-0.134,0.323-0.203,0.492c-0.082,0.201-0.17,0.414-0.253,0.617\n                      c-0.164,0.4-0.331,0.808-0.499,1.216c-0.206,0.503-0.411,1.004-0.622,1.519c-0.067,0.164-0.136,0.335-0.204,0.5\n                      c-0.522,1.279-1.058,2.597-1.606,3.951c-0.086,0.212-0.171,0.42-0.257,0.635c-0.271,0.669-0.547,1.352-0.824,2.039\n                      c-0.108,0.269-0.217,0.537-0.326,0.809c-0.286,0.709-0.575,1.427-0.867,2.155c-0.082,0.203-0.165,0.411-0.247,0.615\n                      c-1.017,2.532-2.072,5.173-3.167,7.925c-0.036,0.091-0.072,0.18-0.108,0.272c-0.354,0.889-0.712,1.793-1.074,2.704\n                      c-0.067,0.17-0.135,0.34-0.203,0.511c-0.374,0.942-0.751,1.894-1.133,2.861c-0.007,0.018-0.014,0.036-0.021,0.053\n                      c-0.412,1.042-0.826,2.09-1.248,3.16l-7.377-3.134c-0.026-0.011-0.052-0.022-0.077-0.033l-17.662-7.503l42.245-31.574\n                      C312.982,314.23,312.782,314.7,312.58,315.18z M330.814,292.21c-0.001,0-0.003-0.001-0.004-0.001\n                      c-0.006-0.002-0.013-0.003-0.019-0.006c-4.35-1.305-8.99-1.089-13.157,0.498c-3.019-3.294-5.118-8.157-5.118-12.861v-21.835\n                      c22.469,3.312,39.908,20.297,44.232,42.029L330.814,292.21z M389.001,398.375c0,13.124-10.677,23.8-23.8,23.8\n                      s-23.8-10.676-23.8-23.8c0-13.124,10.677-23.8,23.8-23.8S389.001,385.251,389.001,398.375z" })
                              ])
                            ]))
                          ]),
                          createVNode("h2", { class: "st-funfact-number st-counter" }, toDisplayString(_ctx.__("Home.Qualified Doctors Number")), 1),
                          createVNode("div", { class: "st-funfact-title" }, toDisplayString(_ctx.__("Home.Qualified Doctors")), 1)
                        ]),
                        createVNode("div", { class: "st-height-b30 st-height-lg-b30" })
                      ]),
                      createVNode("div", { class: "col-lg-6" }, [
                        createVNode("div", { class: "st-funfact st-style1" }, [
                          createVNode("div", { class: "st-funfact-icon st-dip-blue-box" }, [
                            (openBlock(), createBlock("svg", {
                              "enable-background": "new 0 0 511.619 511.619",
                              viewBox: "0 0 511.619 511.619",
                              xmlns: "http://www.w3.org/2000/svg"
                            }, [
                              createVNode("g", null, [
                                createVNode("path", { d: "m504.12 423.958c-.003 0-.006 0-.009 0l-28.68.033-.031-24.191c-.005-4.139-3.362-7.491-7.5-7.491-.003 0-.006 0-.009 0-4.143.005-7.496 3.367-7.491 7.509l.031 24.19-112.203.13-.111-96.11 77.654-.09c3.963-.004 7.686-1.551 10.484-4.355s4.336-6.531 4.331-10.493l-.09-78.359c-.005-3.962-1.552-7.686-4.356-10.483-2.8-2.793-6.519-4.331-10.475-4.331-.006 0-.012 0-.019 0l-77.655.089-.036-31.016 112.203-.128.201 176.954c.005 4.14 3.361 7.492 7.5 7.492h.009c4.143-.005 7.497-3.366 7.492-7.508l-.201-176.955 14.762-.017c11.396-.016 20.654-9.298 20.639-20.688l-.02-19.672c-.015-11.393-9.286-20.65-20.669-20.65-.009 0-.02 0-.028 0l-48.04.05c-4.142.004-7.497 3.366-7.492 7.508.004 4.14 3.361 7.492 7.5 7.492h.008l48.042-.05h.007c3.124 0 5.668 2.542 5.672 5.668l.02 19.672c.004 3.122-2.535 5.666-5.658 5.67l-141.964.161-.036-31.01 59.917-.071c4.142-.005 7.496-3.367 7.491-7.509-.005-4.139-3.362-7.491-7.5-7.491-.003 0-.006 0-.009 0l-59.916.071-.041-35.216c-.006-5.53-2.166-10.727-6.081-14.632-3.909-3.9-9.101-6.046-14.622-6.046-.008 0-.017 0-.024 0l-143.451.166c-5.53.006-10.727 2.166-14.632 6.081s-6.053 9.116-6.046 14.646l.041 35.217-141.967.165c-5.521.006-10.709 2.164-14.608 6.076-3.896 3.909-6.038 9.102-6.031 14.621l.022 19.675c.006 5.52 2.162 10.707 6.068 14.604 3.901 3.892 9.083 6.034 14.593 6.034h.026l14.847-.017v22.456c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-22.474l112.119-.13.036 31.014-77.65.09c-3.963.004-7.686 1.551-10.484 4.355s-4.336 6.531-4.331 10.494l.09 78.359c.005 3.962 1.552 7.686 4.356 10.483 2.8 2.793 6.519 4.331 10.475 4.331h.019l77.651-.089.111 96.11-112.391.13v-178.672c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v178.69l-28.488.033c-4.143.005-7.497 3.367-7.492 7.509.005 4.139 3.361 7.491 7.5 7.491h.009l496.619-.575c4.142-.005 7.496-3.367 7.491-7.509-.005-4.138-3.361-7.491-7.499-7.491zm-78.625-189.041.09 78.022-77.486.09-.09-78.022zm-404.38-60.546c-.002 0-.004 0-.007 0-1.511 0-2.931-.587-4-1.653-1.07-1.068-1.661-2.489-1.663-4.003l-.022-19.675c-.002-1.516.586-2.941 1.656-4.015 1.068-1.072 2.489-1.663 4.001-1.665l141.966-.164.036 31.011zm64.645 138.962-.09-78.022 77.482-.09.09 78.022zm92.227-220.372c-.002-1.523.59-2.956 1.666-4.034s2.507-1.673 4.03-1.675l143.451-.166h.007c3.141 0 5.699 2.554 5.703 5.696l.383 331.375-18.744.022-.153-132.263c-.007-6.323-2.435-12.271-6.835-16.749-4.434-4.511-10.334-6.994-16.618-6.994-.009 0-.019 0-.028 0l-70.459.082c-6.294.007-12.2 2.505-16.629 7.033-4.39 4.488-6.804 10.441-6.796 16.765l.153 132.263-18.748.022zm33.978 199.072c-.003-2.372.892-4.595 2.519-6.258 1.588-1.624 3.692-2.52 5.924-2.522l70.459-.082h.01c2.228 0 4.33.891 5.919 2.508 1.631 1.66 2.531 3.88 2.534 6.252l.153 132.263-87.365.101z" }),
                                createVNode("path", { d: "m207.012 200.158h.018l25.008-.029.029 25.008c.009 7.715 6.289 13.985 14 13.985h.018l19.004-.022c3.74-.004 7.255-1.464 9.896-4.112 2.642-2.647 4.094-6.166 4.089-9.906l-.029-25.008 25.007-.029c7.72-.008 13.994-6.296 13.986-14.018l-.022-19.005c-.004-3.74-1.465-7.254-4.113-9.896-2.644-2.638-6.154-4.089-9.888-4.089-.005 0-.012 0-.018 0l-25.008.029-.029-25.007c-.004-3.74-1.464-7.254-4.112-9.896-2.644-2.638-6.155-4.09-9.888-4.09-.005 0-.012 0-.018 0l-19.005.022c-3.74.004-7.254 1.465-9.896 4.113-2.641 2.647-4.093 6.166-4.089 9.905l.029 25.008-25.007.029c-3.74.004-7.255 1.464-9.896 4.112-2.642 2.648-4.094 6.166-4.089 9.906l.022 19.004c.004 3.74 1.464 7.255 4.112 9.896 2.645 2.639 6.156 4.09 9.889 4.09zm32.489-32.045c4.142-.005 7.496-3.367 7.491-7.509l-.037-31.509 17.007-.02.037 31.51c0 .259.014.514.04.766.388 3.779 3.58 6.725 7.46 6.725h.009l31.509-.037.02 17.007-31.51.037c-4.142.005-7.496 3.367-7.491 7.509l.037 31.509-17.008.02-.037-31.51c-.005-4.139-3.361-7.491-7.5-7.491-.002 0-.006 0-.009 0l-31.509.037-.02-17.007z" })
                              ])
                            ]))
                          ]),
                          createVNode("h2", { class: "st-funfact-number st-counter" }, toDisplayString(_ctx.__("Home.Hospital Rooms Number")), 1),
                          createVNode("div", { class: "st-funfact-title" }, toDisplayString(_ctx.__("Home.Hospital Rooms")), 1)
                        ]),
                        createVNode("div", { class: "st-height-b30 st-height-lg-b30" })
                      ])
                    ])
                  ]),
                  createVNode("div", {
                    class: "col-xl-6 wow fadeInRight",
                    "data-wow-duration": "0.8s",
                    "data-wow-delay": "0.2s"
                  }, [
                    createVNode("div", { class: "st-video-block st-style1 st-zoom" }, [
                      createVNode("div", {
                        class: "st-video-block-img st-zoom-in st-dynamic-bg",
                        style: { "background-image": "url('/assets/img/video-block-img.jpg')" }
                      }),
                      createVNode("a", {
                        href: "https://www.youtube.com/embed/jRcfE2xxSAw?autoplay=1",
                        class: "st-play-btn st-style1 st-video-open"
                      }, [
                        (openBlock(), createBlock("svg", {
                          version: "1.1",
                          xmlns: "http://www.w3.org/2000/svg",
                          "xmlns:xlink": "http://www.w3.org/1999/xlink",
                          x: "0px",
                          y: "0px",
                          viewBox: "0 0 336 336",
                          "xml:space": "preserve"
                        }, [
                          createVNode("g", null, [
                            createVNode("path", { d: "M286.8,49.2C256.4,18.8,214.4,0,168,0C121.6,0,79.6,18.8,49.2,49.2C18.8,79.6,0,121.6,0,168c0,46.4,18.8,88.4,49.2,118.8\n                      C79.6,317.2,121.6,336,168,336c46.4,0,88.4-18.8,118.8-49.2C317.2,256.4,336,214.4,336,168C336,121.6,317.2,79.6,286.8,49.2z\n                       M272.4,272.4c-26.8,26.8-63.6,43.2-104.4,43.2s-77.6-16.4-104.4-43.2C37.2,245.6,20.4,208.8,20.4,168S36.8,90.4,63.6,63.6\n                      C90.4,36.8,127.2,20.4,168,20.4s77.6,16.4,104.4,43.2c26.8,26.8,43.2,63.6,43.2,104.4S298.8,245.6,272.4,272.4z" })
                          ]),
                          createVNode("g", null, [
                            createVNode("path", { d: "M261.2,156c-0.8-0.8-2-2.4-3.2-4c-0.4-0.4-0.4-0.4-0.8-0.8c-1.2-1.2-2.4-2-4-2.8l-59.2-34c0,0-0.4,0-0.4-0.4L134,79.6\n                      c-5.2-3.2-11.2-3.6-16.8-2.4c-5.6,1.6-10.4,5.2-13.6,10.4c-1.2,1.6-1.6,3.6-2.4,5.2c-0.4,1.2-0.4,2.8-0.8,4.4c0,0.4,0,1.2,0,1.6\n                      V168v68.8c0,6,2.4,11.6,6.4,15.6s9.6,6.4,15.6,6.4c2,0,4.4-0.4,6.4-1.2s4-1.6,5.6-2.8l58.8-34l0.8-0.4l59.2-34\n                      c0.4,0,0.4-0.4,0.8-0.4c4.8-3.2,8.4-8,9.6-13.2C265.2,167.2,264.4,161.2,261.2,156z M244,168.4c0,0.4-0.4,0.8-0.8,0.8h-0.4\n                      L184,203.6l-0.4,0.4l-58.8,34c-0.4,0-0.4,0.4-0.8,0.4c0,0-0.4,0-0.4,0.4h-0.4c-0.4,0-0.8-0.4-1.2-0.4c-0.4-0.4-0.4-0.8-0.4-1.2\n                      V168V99.2v-0.4v-0.4c0.4-0.4,0.8-0.8,1.2-0.8c0.4,0,0.8,0,1.2,0l59.2,34l0.4,0.4l59.6,34.4l0.4,0.4l0.4,0.4\n                      C244,167.6,244,168,244,168.4z" })
                          ])
                        ])),
                        createVNode("span", { class: "st-video-animaiton" }, [
                          createVNode("span")
                        ])
                      ])
                    ])
                  ])
                ])
              ])
            ]),
            createVNode("div", { class: "st-google-map" }, [
              createVNode("iframe", {
                src: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd",
                allowfullscreen: ""
              })
            ])
          ]),
          createVNode("div", { class: "st-video-popup" }, [
            createVNode("div", { class: "st-video-popup-overlay" }),
            createVNode("div", { class: "st-video-popup-content" }, [
              createVNode("div", { class: "st-video-popup-layer" }),
              createVNode("div", { class: "st-video-popup-container" }, [
                createVNode("div", { class: "st-video-popup-align" }, [
                  createVNode("div", { class: "embed-responsive embed-responsive-16by9" }, [
                    createVNode("iframe", {
                      class: "embed-responsive-item",
                      src: "about:blank"
                    })
                  ])
                ]),
                createVNode("div", { class: "st-video-popup-close" })
              ])
            ])
          ])
        ];
      }
    }),
    _: 1
  }, _parent));
}
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Welcome.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
const Welcome = /* @__PURE__ */ _export_sfc(_sfc_main, [["ssrRender", _sfc_ssrRender], ["__scopeId", "data-v-95c8e9f1"]]);
const __vite_glob_0_0 = /* @__PURE__ */ Object.freeze(/* @__PURE__ */ Object.defineProperty({
  __proto__: null,
  default: Welcome
}, Symbol.toStringTag, { value: "Module" }));
createServer(
  (page) => createInertiaApp({
    page,
    render: renderToString,
    resolve: (name) => {
      const pages = /* @__PURE__ */ Object.assign({ "./Pages/Welcome.vue": __vite_glob_0_0 });
      return pages[`./Pages/${name}.vue`];
    },
    setup({ App: App2, props, plugin }) {
      return createSSRApp({
        render: () => h(App2, props)
      }).use(plugin);
    }
  })
);
