import { unref, withCtx, createTextVNode, useSSRContext, mergeProps } from "vue";
import { ssrRenderAttrs, ssrRenderStyle, ssrInterpolate, ssrRenderList, ssrRenderAttr, ssrRenderComponent } from "vue/server-renderer";
import "./App-bf23dbcd.js";
import { Link } from "@inertiajs/vue3";
import "./_plugin-vue_export-helper-cc2b3d55.js";
const _sfc_main$1 = {
  __name: "ProjectShow",
  __ssrInlineRender: true,
  props: {
    project: Array,
    projectImages: Array
  },
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<div${ssrRenderAttrs(_attrs)}><div><div class="container"><div style="${ssrRenderStyle({ "height": "160px" })}" class="title left"><p>Project view</p></div><div style="${ssrRenderStyle({ "padding-left": "50px", "padding-right": "0px" })}" class="love-to-do"><div class="stickpad"><h4>${ssrInterpolate(__props.project.name)}</h4><p style="${ssrRenderStyle({ "margin-top": "5px" })}">${ssrInterpolate(__props.project.short_description)}</p><!--[-->`);
      ssrRenderList(__props.projectImages, (image, index) => {
        _push(`<img style="${ssrRenderStyle({ "width": "100%", "margin-top": "20px", "border-radius": "5px" })}"${ssrRenderAttr("src", "/" + image.image)} alt="galaxtelicom.jpg">`);
      });
      _push(`<!--]--></div></div></div>`);
      _push(ssrRenderComponent(unref(Link), {
        href: _ctx.route("home") + "#portfolio",
        class: "go-back"
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(` go back`);
          } else {
            return [
              createTextVNode(" go back")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</div></div>`);
    };
  }
};
const _sfc_setup$1 = _sfc_main$1.setup;
_sfc_main$1.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Components/ProjectShow.vue");
  return _sfc_setup$1 ? _sfc_setup$1(props, ctx) : void 0;
};
const _sfc_main = {
  __name: "Project",
  __ssrInlineRender: true,
  props: {
    project: Array,
    projectImages: Array
  },
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(ssrRenderComponent(_sfc_main$1, mergeProps({
        project: __props.project,
        projectImages: __props.projectImages
      }, _attrs), null, _parent));
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Project.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
