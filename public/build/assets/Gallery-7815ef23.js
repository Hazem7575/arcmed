import{_ as b,A as C,$ as g}from"./App-a710d4c0.js";import{c as E,w as k,r as w,o as I,y as j,z as B,a as e}from"./app-459636ac.js";var u={LEFT:37,RIGHT:39,ESC:27},z={props:{images:{type:Array,default:function(){return[]}},index:{type:Number,default:1},disableScroll:{type:Boolean,default:!1},background:{type:String,default:"rgba(0, 0, 0, 0.8)"},interfaceColor:{type:String,default:"rgba(255, 255, 255, 0.8)"}},data:function(){return{currentIndex:this.index,isImageLoaded:!1,bodyOverflowStyle:"",touch:{count:0,x:0,y:0,multitouch:!1,flag:!1}}},computed:{formattedImages:function(){return this.images.map(function(i){return typeof i=="string"?{url:i}:i})}},watch:{index:function(i){document&&(this.currentIndex=i,this.disableScroll&&typeof i=="number"?document.body.style.overflow="hidden":this.disableScroll&&!i&&(document.body.style.overflow=this.bodyOverflowStyle))},currentIndex:function(i){this.setImageLoaded(i)}},mounted:function(){document&&(this.bodyOverflowStyle=document.body.style.overflow,this.bindEvents())},beforeDestroy:function(){document&&(this.disableScroll&&(document.body.style.overflow=this.bodyOverflowStyle),this.unbindEvents())},methods:{close:function(){this.$emit("close")},prev:function(){this.currentIndex!==0&&(this.currentIndex-=1,this.$emit("slide",{index:this.currentIndex}))},next:function(){this.currentIndex!==this.images.length-1&&(this.currentIndex+=1,this.$emit("slide",{index:this.currentIndex}))},imageLoaded:function(i,t){var a=i.target;a.classList.add("loaded"),t===this.currentIndex&&this.setImageLoaded(t)},getImageElByIndex:function(i){var t=this.$refs["lg-img-"+i]||[];return t[0]},setImageLoaded:function(i){var t=this.getImageElByIndex(i);this.isImageLoaded=t?t.classList.contains("loaded"):!1},shouldPreload:function(i){var t=this.getImageElByIndex(i)||{},a=t.src;return!!a||i===this.currentIndex||i===this.currentIndex-1||i===this.currentIndex+1},bindEvents:function(){document.addEventListener("keydown",this.keyDownHandler,!1)},unbindEvents:function(){document.removeEventListener("keydown",this.keyDownHandler,!1)},touchstartHandler:function(i){this.touch.count+=1,this.touch.count>1&&(this.touch.multitouch=!0),this.touch.x=i.changedTouches[0].pageX,this.touch.y=i.changedTouches[0].pageY},touchmoveHandler:function(i){if(!(this.touch.flag||this.touch.multitouch)){var t=i.touches[0]||i.changedTouches[0];t.pageX-this.touch.x>40?(this.touch.flag=!0,this.prev()):t.pageX-this.touch.x<-40&&(this.touch.flag=!0,this.next())}},touchendHandler:function(){this.touch.count-=1,this.touch.count<=0&&(this.touch.multitouch=!1),this.touch.flag=!1},keyDownHandler:function(i){switch(i.keyCode){case u.LEFT:this.prev();break;case u.RIGHT:this.next();break;case u.ESC:this.close();break}}}};function S(n,i,t,a,o,r,d,A,p,_){typeof d!="boolean"&&(p=A,A=d,d=!1);var s=typeof t=="function"?t.options:t;n&&n.render&&(s.render=n.render,s.staticRenderFns=n.staticRenderFns,s._compiled=!0,o&&(s.functional=!0)),a&&(s._scopeId=a);var c;if(r?(c=function(l){l=l||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext,!l&&typeof __VUE_SSR_CONTEXT__<"u"&&(l=__VUE_SSR_CONTEXT__),i&&i.call(this,p(l)),l&&l._registeredComponents&&l._registeredComponents.add(r)},s._ssrRegister=c):i&&(c=d?function(){i.call(this,_(this.$root.$options.shadowRoot))}:function(h){i.call(this,A(h))}),c)if(s.functional){var x=s.render;s.render=function(l,f){return c.call(f),x(l,f)}}else{var m=s.beforeCreate;s.beforeCreate=m?[].concat(m,c):[c]}return t}var L=S,$=typeof navigator<"u"&&/msie [6-9]\\b/.test(navigator.userAgent.toLowerCase());function H(n){return function(i,t){return G(i,t)}}var T=document.head||document.getElementsByTagName("head")[0],v={};function G(n,i){var t=$?i.media||"default":n,a=v[t]||(v[t]={ids:new Set,styles:[]});if(!a.ids.has(n)){a.ids.add(n);var o=i.source;if(i.map&&(o+=`
/*# sourceURL=`+i.map.sources[0]+" */",o+=`
/*# sourceMappingURL=data:application/json;base64,`+btoa(unescape(encodeURIComponent(JSON.stringify(i.map))))+" */"),a.element||(a.element=document.createElement("style"),a.element.type="text/css",i.media&&a.element.setAttribute("media",i.media),T.appendChild(a.element)),"styleSheet"in a.element)a.styles.push(o),a.element.styleSheet.cssText=a.styles.filter(Boolean).join(`
`);else{var r=a.ids.size-1,d=document.createTextNode(o),A=a.element.childNodes;A[r]&&a.element.removeChild(A[r]),A.length?a.element.insertBefore(d,A[r]):a.element.appendChild(d)}}}var R=H,D=z,y=function(){var n=this,i=n.$createElement,t=n._self._c||i;return t("transition",{attrs:{name:"fade"}},[typeof n.index=="number"?t("div",{staticClass:"light-gallery",on:{touchstart:n.touchstartHandler,touchmove:n.touchmoveHandler,touchend:n.touchendHandler}},[t("div",{staticClass:"light-gallery__modal",style:"background: "+n.background},[t("div",{class:["light-gallery__spinner",!n.isImageLoaded||"hide"]},[t("div",{staticClass:"light-gallery__dot",style:"border-color: "+n.interfaceColor}),n._v(" "),t("div",{staticClass:"light-gallery__dot",style:"border-color: "+n.interfaceColor}),n._v(" "),t("div",{staticClass:"light-gallery__dot",style:"border-color: "+n.interfaceColor})]),n._v(" "),t("div",{staticClass:"light-gallery__container"},[t("ul",{staticClass:"light-gallery__content"},n._l(n.formattedImages,function(a,o){return t("li",{key:o,staticClass:"light-gallery__image-container",style:"transform: translate3d("+n.currentIndex*-100+"%, 0px, 0px);"},[t("div",{staticClass:"light-gallery__image"},[t("div",{directives:[{name:"show",rawName:"v-show",value:a.title&&n.isImageLoaded,expression:"image.title && isImageLoaded"}],staticClass:"light-gallery__text",style:"background: "+n.background+"; color: "+n.interfaceColor},[n._v(`
                `+n._s(a.title)+`
              `)]),n._v(" "),t("img",{ref:"lg-img-"+o,refInFor:!0,attrs:{src:n.shouldPreload(o)?a.url:!1},on:{load:function(r){return n.imageLoaded(r,o)}}})])])}),0)]),n._v(" "),n.currentIndex>0?t("button",{staticClass:"light-gallery__prev",style:"background: "+n.background,on:{click:function(a){return n.prev()}}},[t("svg",{attrs:{width:"25",height:"40",viewBox:"0 0 25 40"}},[t("polyline",{attrs:{points:"19 5 5 20 19 35","stroke-width":"3","stroke-linecap":"butt",fill:"none","stroke-linejoin":"round",stroke:n.interfaceColor}})])]):n._e(),n._v(" "),n.currentIndex+1<n.images.length?t("button",{staticClass:"light-gallery__next",style:"background: "+n.background,on:{click:function(a){return n.next()}}},[t("svg",{attrs:{width:"25",height:"40",viewBox:"0 0 25 40"}},[t("polyline",{attrs:{points:"6 5 20 20 6 35","stroke-width":"3","stroke-linecap":"butt",fill:"none","stroke-linejoin":"round",stroke:n.interfaceColor}})])]):n._e(),n._v(" "),t("button",{staticClass:"light-gallery__close",style:"background: "+n.background,on:{click:function(a){return n.close()}}},[t("svg",{attrs:{width:"30",height:"30"}},[t("g",{attrs:{"stroke-width":"3",stroke:n.interfaceColor}},[t("line",{attrs:{x1:"5",y1:"5",x2:"25",y2:"25"}}),n._v(" "),t("line",{attrs:{x1:"5",y1:"25",x2:"25",y2:"5"}})])])])])]):n._e()])},U=[];y._withStripped=!0;var O=function(n){n&&n("data-v-2951e615_0",{source:`.light-gallery__modal[data-v-2951e615] {
  position: fixed;
  display: block;
  z-index: 1001;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.light-gallery__content[data-v-2951e615] {
  height: 100%;
  width: 100%;
  white-space: nowrap;
  padding: 0;
  margin: 0;
}
.light-gallery__container[data-v-2951e615] {
  position: absolute;
  z-index: 1002;
  display: block;
  width: 100%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.light-gallery__image-container[data-v-2951e615] {
  display: inline-table;
  vertical-align: middle;
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: left .4s ease, transform .4s ease, -webkit-transform .4s ease;
}
.light-gallery__image[data-v-2951e615] {
  display: inline-block;
  position: relative;
  margin: 0 auto;
  max-width: 100%;
  max-height: 100vh;
}
.light-gallery__image img[data-v-2951e615] {
  max-width: 100%;
  max-height: 100vh;
  opacity: 0;
  transition: opacity .2s;
}
.light-gallery__image img.loaded[data-v-2951e615] {
  opacity: 1;
}
.light-gallery__text[data-v-2951e615] {
  position: absolute;
  z-index: 1000;
  bottom: 0;
  display: block;
  margin: 0 auto;
  padding: 12px 30px;
  width: 100%;
  box-sizing: border-box;
}
.light-gallery__next[data-v-2951e615], .light-gallery__prev[data-v-2951e615], .light-gallery__close[data-v-2951e615] {
  position: absolute;
  z-index: 1002;
  display: block;
  background: transparent;
  border: 0;
  line-height: 0;
  outline: none;
  padding: 7px;
  cursor: pointer;
}
.light-gallery__next[data-v-2951e615] {
  top: 50%;
  transform: translate(0, -50%);
  right: 1.5%;
  vertical-align: middle;
}
.light-gallery__prev[data-v-2951e615] {
  top: 50%;
  transform: translate(0, -50%);
  left: 1.5%;
}
.light-gallery__close[data-v-2951e615] {
  right: 0;
  padding: 12px;
}
.light-gallery__spinner[data-v-2951e615] {
  position: absolute;
  z-index: 1003;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  margin: 0 auto;
  display: block;
  height: 15px;
  width: auto;
  box-sizing: border-box;
  text-align: center;
}
.light-gallery__spinner.hide[data-v-2951e615] {
  display: none;
}
.light-gallery__dot[data-v-2951e615] {
  float: left;
  margin: 0 calc(15px / 2);
  width: 15px;
  height: 15px;
  border: calc(15px / 5) solid rgba(255, 255, 255, 0.8);
  border-radius: 50%;
  transform: scale(0);
  box-sizing: border-box;
  animation: spinner-animation-data-v-2951e615 1000ms ease infinite 0ms;
}
.light-gallery__dot[data-v-2951e615]:nth-child(1) {
  animation-delay: calc(300ms * 1);
}
.light-gallery__dot[data-v-2951e615]:nth-child(2) {
  animation-delay: calc(300ms * 2);
}
.light-gallery__dot[data-v-2951e615]:nth-child(3) {
  animation-delay: calc(300ms * 3);
}
.fade-enter-active[data-v-2951e615], .fade-leave-active[data-v-2951e615] {
  position: fixed;
  z-index: 1000;
  transition: opacity .2s;
}
.fade-enter[data-v-2951e615], .fade-leave-to[data-v-2951e615] {
  position: fixed;
  opacity: 0;
  z-index: 1000;
}
@keyframes spinner-animation-data-v-2951e615 {
50% {
    transform: scale(1);
    opacity: 1;
}
100% {
    opacity: 0;
}
}

/*# sourceMappingURL=light-gallery.vue.map */`,map:{version:3,sources:["/home/pere.monfort/code/vue-light-gallery/src/light-gallery.vue","light-gallery.vue"],names:[],mappings:"AAgTA;EACA,eAAA;EACA,cAAA;EACA,aAAA;EACA,MAAA;EACA,OAAA;EACA,WAAA;EACA,YAAA;EACA,gBAAA;AAAA;AAGA;EACA,YAAA;EACA,WAAA;EACA,mBAAA;EACA,UAAA;EACA,SAAA;AAAA;AAGA;EACA,kBAAA;EACA,aAAA;EACA,cAAA;EACA,WAAA;EACA,QAAA;EACA,SAAA;EACA,gCAAA;EACA,kBAAA;AAAA;AAGA;EACA,qBAAA;EACA,sBAAA;EACA,kBAAA;EACA,WAAA;EACA,YAAA;EACA,kBAAA;EACA,yEAAA;AAAA;AAGA;EAEA,qBAAA;EACA,kBAAA;EACA,cAAA;EACA,eAAA;EACA,iBAAA;AAAA;AANA;EAYA,eAAA;EACA,iBAAA;EACA,UAAA;EACA,uBAAA;AAAA;AAfA;EAmBA,UAAA;AAAA;AAMA;EACA,kBAAA;EACA,aAAA;EACA,SAAA;EACA,cAAA;EACA,cAAA;EACA,kBAAA;EACA,WAAA;EACA,sBAAA;AAAA;AAGA;EAGA,kBAAA;EACA,aAAA;EACA,cAAA;EACA,uBAAA;EACA,SAAA;EACA,cAAA;EACA,aAAA;EACA,YAAA;EACA,eAAA;AAAA;AAGA;EACA,QAAA;EACA,6BAAA;EACA,WAAA;EACA,sBAAA;AAAA;AAGA;EACA,QAAA;EACA,6BAAA;EACA,UAAA;AAAA;AAGA;EACA,QAAA;EACA,aAAA;AAAA;AAGA;EAEA,kBAAA;EACA,aAAA;EACA,QAAA;EACA,SAAA;EACA,gCAAA;EACA,cAAA;EACA,cAAA;EACA,YAAA;EACA,WAAA;EACA,sBAAA;EACA,kBAAA;AAAA;AAZA;EAgBA,aAAA;AAAA;AAIA;EAEA,WAAA;EACA,wBAAA;EACA,WAAA;EACA,YAAA;EACA,qDAAA;EACA,kBAAA;EACA,mBAAA;EACA,sBAAA;EACA,qEAAA;AAAA;AAVA;EAcA,gCAAA;AAAA;AAdA;EAkBA,gCAAA;AAAA;AAlBA;EAsBA,gCAAA;AAAA;AAKA;EACA,eAAA;EACA,aAAA;EACA,uBAAA;AAAA;AAGA;EACA,eAAA;EACA,UAAA;EACA,aAAA;AAAA;AAGA;AACA;IACA,mBAAA;IACA,UAAA;AAAA;AAEA;IACA,UAAA;AAAA;AAAA;;AChVA,4CAA4C",file:"light-gallery.vue",sourcesContent:[`<template>
  <transition name="fade">
    <div
      v-if="typeof index === 'number'"
      class="light-gallery"
      @touchstart="touchstartHandler"
      @touchmove="touchmoveHandler"
      @touchend="touchendHandler"
    >
      <div
        class="light-gallery__modal"
        :style="\`background: \${background}\`"
      >
        <div
          :class="['light-gallery__spinner', !isImageLoaded || 'hide']"
        >
          <div
            class="light-gallery__dot"
            :style="\`border-color: \${interfaceColor}\`"
          />
          <div
            class="light-gallery__dot"
            :style="\`border-color: \${interfaceColor}\`"
          />
          <div
            class="light-gallery__dot"
            :style="\`border-color: \${interfaceColor}\`"
          />
        </div>
        <div class="light-gallery__container">
          <ul class="light-gallery__content">
            <li
              v-for="(image, imageIndex) in formattedImages"
              :key="imageIndex"
              :style="\`transform: translate3d(\${currentIndex * -100}%, 0px, 0px);\`"
              class="light-gallery__image-container"
            >
              <div class="light-gallery__image">
                <div
                  v-show="image.title && isImageLoaded"
                  class="light-gallery__text"
                  :style="\`background: \${background}; color: \${interfaceColor}\`"
                >
                  {{ image.title }}
                </div>
                <img
                  :ref="\`lg-img-\${imageIndex}\`"
                  :src="shouldPreload(imageIndex) ? image.url : false"
                  @load="imageLoaded($event, imageIndex)"
                >
              </div>
            </li>
          </ul>
        </div>
        <button
          v-if="currentIndex > 0"
          class="light-gallery__prev"
          :style="\`background: \${background}\`"
          @click="prev()"
        >
          <svg
            width="25"
            height="40"
            viewBox="0 0 25 40"
          >
            <polyline
              points="19 5 5 20 19 35"
              stroke-width="3"
              stroke-linecap="butt"
              fill="none"
              stroke-linejoin="round"
              :stroke="interfaceColor"
            />
          </svg>
        </button>
        <button
          v-if="currentIndex + 1 < images.length"
          class="light-gallery__next"
          :style="\`background: \${background}\`"
          @click="next()"
        >
          <svg
            width="25"
            height="40"
            viewBox="0 0 25 40"
          >
            <polyline
              points="6 5 20 20 6 35"
              stroke-width="3"
              stroke-linecap="butt"
              fill="none"
              stroke-linejoin="round"
              :stroke="interfaceColor"
            />
          </svg>
        </button>
        <button
          class="light-gallery__close"
          :style="\`background: \${background}\`"
          @click="close()"
        >
          <svg
            width="30"
            height="30"
          >
            <g
              stroke-width="3"
              :stroke="interfaceColor"
            >
              <line
                x1="5"
                y1="5"
                x2="25"
                y2="25"
              />
              <line
                x1="5"
                y1="25"
                x2="25"
                y2="5"
              />
            </g>
          </svg>
        </button>
      </div>
    </div>
  </transition>
</template>

<script>
const keyMap = {
  LEFT: 37,
  RIGHT: 39,
  ESC: 27,
};

export default {
  props: {
    images: {
      type: Array,
      default: () => [],
    },
    index: {
      type: Number,
      default: 1,
    },
    disableScroll: {
      type: Boolean,
      default: false,
    },
    background: {
      type: String,
      default: 'rgba(0, 0, 0, 0.8)',
    },
    interfaceColor: {
      type: String,
      default: 'rgba(255, 255, 255, 0.8)',
    },
  },
  data() {
    return {
      currentIndex: this.index,
      isImageLoaded: false,
      bodyOverflowStyle: '',
      touch: {
        count: 0,
        x: 0,
        y: 0,
        multitouch: false,
        flag: false,
      },
    };
  },
  computed: {
    formattedImages() {
      return this.images.map(image => (typeof image === 'string'
        ? { url: image } : image
      ));
    },
  },
  watch: {
    index(val) {
      if (!document) return;

      this.currentIndex = val;

      if (this.disableScroll && typeof val === 'number') {
        document.body.style.overflow = 'hidden';
      } else if (this.disableScroll && !val) {
        document.body.style.overflow = this.bodyOverflowStyle;
      }
    },
    currentIndex(val) {
      this.setImageLoaded(val);
    },
  },
  mounted() {
    if (!document) return;

    this.bodyOverflowStyle = document.body.style.overflow;
    this.bindEvents();
  },
  beforeDestroy() {
    if (!document) return;

    if (this.disableScroll) {
      document.body.style.overflow = this.bodyOverflowStyle;
    }
    this.unbindEvents();
  },
  methods: {
    close() {
      this.$emit('close');
    },
    prev() {
      if (this.currentIndex === 0) return;
      this.currentIndex -= 1;
      this.$emit('slide', { index: this.currentIndex });
    },
    next() {
      if (this.currentIndex === this.images.length - 1) return;
      this.currentIndex += 1;
      this.$emit('slide', { index: this.currentIndex });
    },
    imageLoaded($event, imageIndex) {
      const { target } = $event;
      target.classList.add('loaded');

      if (imageIndex === this.currentIndex) {
        this.setImageLoaded(imageIndex);
      }
    },
    getImageElByIndex(index) {
      const elements = this.$refs[\`lg-img-\${index}\`] || [];
      return elements[0];
    },
    setImageLoaded(index) {
      const el = this.getImageElByIndex(index);
      this.isImageLoaded = !el ? false : el.classList.contains('loaded');
    },
    shouldPreload(index) {
      const el = this.getImageElByIndex(index) || {};
      const { src } = el;

      return !!src
       || index === this.currentIndex
       || index === this.currentIndex - 1
       || index === this.currentIndex + 1;
    },
    bindEvents() {
      document.addEventListener('keydown', this.keyDownHandler, false);
    },
    unbindEvents() {
      document.removeEventListener('keydown', this.keyDownHandler, false);
    },
    touchstartHandler(event) {
      this.touch.count += 1;
      if (this.touch.count > 1) {
        this.touch.multitouch = true;
      }
      this.touch.x = event.changedTouches[0].pageX;
      this.touch.y = event.changedTouches[0].pageY;
    },
    touchmoveHandler(event) {
      if (this.touch.flag || this.touch.multitouch) return;

      const touchEvent = event.touches[0] || event.changedTouches[0];

      if (touchEvent.pageX - this.touch.x > 40) {
        this.touch.flag = true;
        this.prev();
      } else if (touchEvent.pageX - this.touch.x < -40) {
        this.touch.flag = true;
        this.next();
      }
    },
    touchendHandler() {
      this.touch.count -= 1;
      if (this.touch.count <= 0) {
        this.touch.multitouch = false;
      }
      this.touch.flag = false;
    },
    keyDownHandler(event) {
      switch (event.keyCode) {
        case keyMap.LEFT:
          this.prev();
          break;
        case keyMap.RIGHT:
          this.next();
          break;
        case keyMap.ESC:
          this.close();
          break;
        default:
          break;
      }
    },
  },
};
<\/script>

<style lang="scss" scoped>
.light-gallery {
  &__modal {
    position: fixed;
    display: block;
    z-index: 1001;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
  }

  &__content {
    height: 100%;
    width: 100%;
    white-space: nowrap;
    padding: 0;
    margin: 0;
  }

  &__container {
    position: absolute;
    z-index: 1002;
    display: block;
    width: 100%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
  }

  &__image-container {
    display: inline-table;
    vertical-align: middle;
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: left .4s ease, transform .4s ease, -webkit-transform .4s ease;
  }

  &__image {
    & {
      display: inline-block;
      position: relative;
      margin: 0 auto;
      max-width: 100%;
      max-height: 100vh;
      // opacity: 0;
    }

    & img {
      & {
        max-width: 100%;
        max-height: 100vh;
        opacity: 0;
        transition: opacity .2s;
      }

      &.loaded{
        opacity: 1;
      }
    }

  }

  &__text {
    position: absolute;
    z-index: 1000;
    bottom: 0;
    display: block;
    margin: 0 auto;
    padding: 12px 30px;
    width: 100%;
    box-sizing: border-box;
  }

  &__next,
  &__prev,
  &__close {
    position: absolute;
    z-index: 1002;
    display: block;
    background: transparent;
    border: 0;
    line-height: 0;
    outline: none;
    padding: 7px;
    cursor: pointer;
  }

  &__next {
    top: 50%;
    transform: translate(0, -50%);
    right: 1.5%;
    vertical-align: middle;
  }

  &__prev {
    top: 50%;
    transform: translate(0, -50%);
    left: 1.5%;
  }

  &__close {
    right: 0;
    padding: 12px;
  }

  &__spinner {
    & {
      position: absolute;
      z-index: 1003;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      margin: 0 auto;
      display: block;
      height: 15px;
      width: auto;
      box-sizing: border-box;
      text-align: center;
    }

    &.hide {
      display: none;
    }
  }

  &__dot {
    & {
      float: left;
      margin: 0 calc(15px / 2);
      width: 15px;
      height: 15px;
      border: calc(15px / 5) solid rgba(255, 255, 255, 0.8);
      border-radius: 50%;
      transform: scale(0);
      box-sizing: border-box;
      animation: spinner-animation 1000ms ease infinite 0ms;
    }

    &:nth-child(1) {
      animation-delay: calc(300ms * 1);
    }

    &:nth-child(2) {
      animation-delay: calc(300ms * 2);
    }

    &:nth-child(3) {
      animation-delay: calc(300ms * 3);
    }
  }
}

.fade-enter-active, .fade-leave-active {
  position: fixed;
  z-index: 1000;
  transition: opacity .2s;
}

.fade-enter, .fade-leave-to {
  position: fixed;
  opacity: 0;
  z-index: 1000;
}

@keyframes spinner-animation {
  50% {
    transform: scale(1);
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
</style>
`,`.light-gallery__modal {
  position: fixed;
  display: block;
  z-index: 1001;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden; }

.light-gallery__content {
  height: 100%;
  width: 100%;
  white-space: nowrap;
  padding: 0;
  margin: 0; }

.light-gallery__container {
  position: absolute;
  z-index: 1002;
  display: block;
  width: 100%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center; }

.light-gallery__image-container {
  display: inline-table;
  vertical-align: middle;
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: left .4s ease, transform .4s ease, -webkit-transform .4s ease; }

.light-gallery__image {
  display: inline-block;
  position: relative;
  margin: 0 auto;
  max-width: 100%;
  max-height: 100vh; }

.light-gallery__image img {
  max-width: 100%;
  max-height: 100vh;
  opacity: 0;
  transition: opacity .2s; }

.light-gallery__image img.loaded {
  opacity: 1; }

.light-gallery__text {
  position: absolute;
  z-index: 1000;
  bottom: 0;
  display: block;
  margin: 0 auto;
  padding: 12px 30px;
  width: 100%;
  box-sizing: border-box; }

.light-gallery__next, .light-gallery__prev, .light-gallery__close {
  position: absolute;
  z-index: 1002;
  display: block;
  background: transparent;
  border: 0;
  line-height: 0;
  outline: none;
  padding: 7px;
  cursor: pointer; }

.light-gallery__next {
  top: 50%;
  transform: translate(0, -50%);
  right: 1.5%;
  vertical-align: middle; }

.light-gallery__prev {
  top: 50%;
  transform: translate(0, -50%);
  left: 1.5%; }

.light-gallery__close {
  right: 0;
  padding: 12px; }

.light-gallery__spinner {
  position: absolute;
  z-index: 1003;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  margin: 0 auto;
  display: block;
  height: 15px;
  width: auto;
  box-sizing: border-box;
  text-align: center; }

.light-gallery__spinner.hide {
  display: none; }

.light-gallery__dot {
  float: left;
  margin: 0 calc(15px / 2);
  width: 15px;
  height: 15px;
  border: calc(15px / 5) solid rgba(255, 255, 255, 0.8);
  border-radius: 50%;
  transform: scale(0);
  box-sizing: border-box;
  animation: spinner-animation 1000ms ease infinite 0ms; }

.light-gallery__dot:nth-child(1) {
  animation-delay: calc(300ms * 1); }

.light-gallery__dot:nth-child(2) {
  animation-delay: calc(300ms * 2); }

.light-gallery__dot:nth-child(3) {
  animation-delay: calc(300ms * 3); }

.fade-enter-active, .fade-leave-active {
  position: fixed;
  z-index: 1000;
  transition: opacity .2s; }

.fade-enter, .fade-leave-to {
  position: fixed;
  opacity: 0;
  z-index: 1000; }

@keyframes spinner-animation {
  50% {
    transform: scale(1);
    opacity: 1; }
  100% {
    opacity: 0; } }

/*# sourceMappingURL=light-gallery.vue.map */`]},media:void 0})},N="data-v-2951e615",W=void 0,F=!1,Y=L({render:y,staticRenderFns:U},O,D,N,F,W,R,void 0);const X={name:"Gallery",components:{App:C,LightGallery:Y},mounted(){g(".st-isotop").isotope({itemSelector:".st-isotop-item",transitionDuration:"0.60s",percentPosition:!0,masonry:{columnWidth:".st-grid-sizer"}}),g(".st-isotop-filter ul li").on("click",function(n){g(this).siblings(".active").removeClass("active"),g(this).addClass("active"),n.preventDefault()}),g(".st-isotop-filter ul").on("click","a",function(){var n=g(this).attr("data-filter");g(this).parents(".st-isotop-filter").next().isotope({filter:n})})}},M=n=>(j("data-v-8b822b03"),n=n(),B(),n),P=M(()=>e("div",{class:"st-content pages-content"},[e("section",{id:"gallery"},[e("div",{class:"st-height-b120 st-height-lg-b80"}),e("div",{class:"container"},[e("div",{class:"st-portfolio-wrapper"},[e("div",{class:"st-isotop-filter st-style1 text-center"},[e("ul",{class:"st-mp0"},[e("li",{class:"active"},[e("a",{href:"#","data-filter":"*"},"الكل")]),e("li",{class:""},[e("a",{href:"#","data-filter":".cardiology"},"التخصصات")])])]),e("div",{class:"st-isotop st-style1 st-port-col-3 st-has-gutter st-lightgallery"},[e("div",{class:"st-grid-sizer"}),e("div",{class:"st-isotop-item cardiology urology"},[e("a",{href:"/assets/img/project2.jpg",class:"st-project st-zoom st-lightbox-item st-link-hover-wrap"},[e("div",{class:"st-project-img st-zoom-in"},[e("img",{src:"/assets/img/project1.jpg",alt:"project1"})]),e("span",{class:"st-link-hover"},[e("i",{class:"fas fa-arrows-alt"})])])]),e("div",{class:"st-isotop-item cardiology neurology"},[e("a",{href:"/assets/img/project2.jpg",class:"st-project st-zoom st-lightbox-item st-link-hover-wrap"},[e("div",{class:"st-project-img st-zoom-in"},[e("img",{src:"/assets/img/project2.jpg",alt:"project2"})]),e("span",{class:"st-link-hover"},[e("i",{class:"fas fa-arrows-alt"})])])]),e("div",{class:"st-isotop-item urology pulmonary"},[e("a",{href:"/assets/img/project2.jpg",class:"st-project st-zoom st-lightbox-item st-link-hover-wrap"},[e("div",{class:"st-project-img st-zoom-in"},[e("img",{src:"/assets/img/project3.jpg",alt:"project3"})]),e("span",{class:"st-link-hover"},[e("i",{class:"fas fa-arrows-alt"})])])]),e("div",{class:"st-isotop-item neurology traumatology"},[e("a",{href:"/assets/img/project2.jpg",class:"st-project st-zoom st-lightbox-item st-link-hover-wrap"},[e("div",{class:"st-project-img st-zoom-in"},[e("img",{src:"/assets/img/project4.jpg",alt:"project4"})]),e("span",{class:"st-link-hover"},[e("i",{class:"fas fa-arrows-alt"})])])]),e("div",{class:"st-isotop-item cardiology pulmonary"},[e("a",{href:"/assets/img/project2.jpg",class:"st-project st-zoom st-lightbox-item st-link-hover-wrap"},[e("div",{class:"st-project-img st-zoom-in"},[e("img",{src:"/assets/img/project5.jpg",alt:"project5"})]),e("span",{class:"st-link-hover"},[e("i",{class:"fas fa-arrows-alt"})])])]),e("div",{class:"st-isotop-item neurology traumatology"},[e("a",{href:"/assets/img/project2.jpg",class:"st-project st-zoom st-lightbox-item st-link-hover-wrap"},[e("div",{class:"st-project-img st-zoom-in"},[e("img",{src:"/assets/img/project6.jpg",alt:"project6"})]),e("span",{class:"st-link-hover"},[e("i",{class:"fas fa-arrows-alt"})])])]),e("div",{class:"st-isotop-item urology pulmonary traumatology"},[e("a",{href:"/assets/img/project2.jpg",class:"st-project st-zoom st-lightbox-item st-link-hover-wrap"},[e("div",{class:"st-project-img st-zoom-in"},[e("img",{src:"/assets/img/project7.jpg",alt:"project6"})]),e("span",{class:"st-link-hover"},[e("i",{class:"fas fa-arrows-alt"})])])])])])]),e("div",{class:"st-height-b120 st-height-lg-b80"})])],-1));function Q(n,i,t,a,o,r){const d=w("app");return I(),E(d,{title:n.__("Navbar.department")},{default:k(()=>[P]),_:1},8,["title"])}const J=b(X,[["render",Q],["__scopeId","data-v-8b822b03"]]);export{J as default};
