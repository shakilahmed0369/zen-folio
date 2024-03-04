import { resolveDirective, mergeProps, useSSRContext, ref, onMounted, onBeforeUnmount } from "vue";
import { ssrRenderAttrs, ssrRenderStyle, ssrGetDirectiveProps, ssrRenderComponent, ssrRenderSlot } from "vue/server-renderer";
import { _ as _export_sfc } from "./_plugin-vue_export-helper-cc2b3d55.js";
const style = "";
const _sfc_main$2 = {
  __name: "Header",
  __ssrInlineRender: true,
  props: {
    isNavBarHidden: {
      type: Boolean,
      required: true
    }
  },
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      const _directive_smooth_scroll = resolveDirective("smooth-scroll");
      _push(`<header${ssrRenderAttrs(mergeProps({
        class: { "navbar--hidden": __props.isNavBarHidden }
      }, _attrs))}><div style="${ssrRenderStyle({ "padding": "25px 25px" })}" class="container"><div class="header"><div class="logo"><h1><a aria-current="page" class="" href="/"><img style="${ssrRenderStyle({ "width": "160px" })}" src=""></a></h1></div><div class="mobile-nav"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg></div><ul class="menubar"><li><a${ssrRenderAttrs(mergeProps({ href: "#about" }, ssrGetDirectiveProps(_ctx, _directive_smooth_scroll)))}>About</a></li><li><a${ssrRenderAttrs(mergeProps({ href: "#skill" }, ssrGetDirectiveProps(_ctx, _directive_smooth_scroll)))}>Skill</a></li><li><a${ssrRenderAttrs(mergeProps({ href: "#portfolio" }, ssrGetDirectiveProps(_ctx, _directive_smooth_scroll)))}>Portfolio</a></li><li><a${ssrRenderAttrs(mergeProps({ href: "#contact" }, ssrGetDirectiveProps(_ctx, _directive_smooth_scroll)))}>Contact</a></li><li><a class="btn-download" target="_blank" rel="noopener noreferrer" href="https://raw.githubusercontent.com/shakilahmed0369/protfolio/master/src/data/file/MyResume.pdf">Resume</a></li></ul></div></div></header>`);
    };
  }
};
const _sfc_setup$2 = _sfc_main$2.setup;
_sfc_main$2.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Components/Header.vue");
  return _sfc_setup$2 ? _sfc_setup$2(props, ctx) : void 0;
};
const _sfc_main$1 = {};
function _sfc_ssrRender(_ctx, _push, _parent, _attrs) {
  _push(`<footer${ssrRenderAttrs(mergeProps({ class: "footer-area" }, _attrs))}><div style="${ssrRenderStyle({ "padding": "50px 25px" })}" class="container"><div class="footer"><div class="language"><ul><li><p>ধন্যবাদ</p><div style="${ssrRenderStyle({ "width": "99%" })}" class="progress"></div></li><li><p>Thanks</p><div style="${ssrRenderStyle({ "width": "75%" })}" class="progress"></div></li><li><p>ありがとう</p><div style="${ssrRenderStyle({ "width": "60%" })}" class="progress"></div></li><li><p>شکریہ</p><div style="${ssrRenderStyle({ "width": "50%" })}" class="progress"></div></li><li><p>धन्यवाद</p><div style="${ssrRenderStyle({ "width": "50%" })}" class="progress"></div></li><li><p>ਧੰਨਵਾਦ</p><div style="${ssrRenderStyle({ "width": "20%" })}" class="progress"></div></li></ul></div><div class="copyright"></div></div></div></footer>`);
}
const _sfc_setup$1 = _sfc_main$1.setup;
_sfc_main$1.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Components/Footer.vue");
  return _sfc_setup$1 ? _sfc_setup$1(props, ctx) : void 0;
};
const Footer = /* @__PURE__ */ _export_sfc(_sfc_main$1, [["ssrRender", _sfc_ssrRender]]);
const _sfc_main = {
  __name: "App",
  __ssrInlineRender: true,
  setup(__props) {
    const isNavBarHidden = ref(false);
    const prevScrollPosition = ref(0);
    const handleScroll = () => {
      const scrollPosition = window.scrollY || window.pageYOffset;
      if (scrollPosition < 100) {
        isNavBarHidden.value = false;
      } else {
        isNavBarHidden.value = scrollPosition > prevScrollPosition.value;
      }
      prevScrollPosition.value = scrollPosition;
      console.log(scrollPosition);
    };
    onMounted(() => {
      window.addEventListener("scroll", handleScroll);
    });
    onBeforeUnmount(() => {
      window.removeEventListener("scroll", handleScroll);
    });
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<div${ssrRenderAttrs(mergeProps({ id: "___gatsby" }, _attrs))}><div style="${ssrRenderStyle({ "outline": "none" })}" tabindex="-1" id="gatsby-focus-wrapper">`);
      _push(ssrRenderComponent(_sfc_main$2, { isNavBarHidden: isNavBarHidden.value }, null, _parent));
      _push(`<div><main>`);
      ssrRenderSlot(_ctx.$slots, "default", {}, null, _push, _parent);
      _push(`</main>`);
      _push(ssrRenderComponent(Footer, null, null, _parent));
      _push(`</div></div><div id="gatsby-announcer" style="${ssrRenderStyle({ "position": "absolute", "top": "0", "width": "1px", "height": "1px", "padding": "0", "overflow": "hidden", "clip": "rect(0, 0, 0, 0)", "white-space": "nowrap", "border": "0" })}" aria-live="assertive" aria-atomic="true"></div></div>`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Layouts/App.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as _
};
