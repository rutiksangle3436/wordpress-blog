!function(e,t){for(var n in t)e[n]=t[n]}(window,function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}return n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=9)}([function(e,t){!function(){e.exports=this.wp.element}()},function(e,t){!function(){e.exports=this.wp.i18n}()},function(e,t){!function(){e.exports=this.wp.blocks}()},function(e,t){!function(){e.exports=this.wp.components}()},function(e,t){!function(){e.exports=this.wp.data}()},function(e){e.exports=JSON.parse('{"b":"a8c/posts-list","a":{"postsPerPage":{"type":"number","default":10}}}')},function(e,t){!function(){e.exports=this.wp.blockEditor}()},function(e,t,n){},function(e,t,n){},function(e,t,n){"use strict";n.r(t);var o=n(0),r=n(2),i=n(1),l=n(3),s=n(6),c=n(4),a=n(5),u=(n(7),n(8),["a8c/blog-posts","newspack-blocks/homepage-articles"]),f=function(e){return function(t){var n=t.postsPerPage;return Object(r.createBlock)(e,{postsToShow:n,showAvatar:!1,displayPostDate:!0,displayPostContent:!0})}},p={to:u.map((function(e){return{type:"block",blocks:[e],transform:f(e)}}))},b=Object(o.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24",viewBox:"0 0 24 24"},Object(o.createElement)("path",{opacity:".87",fill:"none",d:"M0 0h24v24H0V0z"}),Object(o.createElement)("path",{d:"M3 5v14h17V5H3zm4 2v2H5V7h2zm-2 6v-2h2v2H5zm0 2h2v2H5v-2zm13 2H9v-2h9v2zm0-4H9v-2h9v2zm0-4H9V7h9v2z"}));Object(r.registerBlockType)(a.b,{title:Object(i.__)("Blog Posts Listing","full-site-editing"),description:Object(i.__)("Displays your latest Blog Posts.","full-site-editing"),icon:b,category:"layout",supports:{html:!1,multiple:!1,reusable:!1,inserter:!1},attributes:a.a,edit:function(e){var t=e.attributes,n=e.setAttributes,a=e.clientId,f=e.isSelected,p=Object(c.select)("core/block-editor").getBlock(a),d=Object(r.getPossibleBlockTransformations)([p]).find((function(e){return e&&(t=e.name,u.indexOf(t)>-1);var t})),m=!!d;return Object(o.createElement)(o.Fragment,null,m&&Object(o.createElement)(l.Notice,{actions:[{label:Object(i.__)("Update Block","full-site-editing"),onClick:function(){Object(c.dispatch)("core/block-editor").replaceBlocks(p.clientId,Object(r.switchToBlockType)(p,d.name))}}],className:"posts-list__notice",isDismissible:!1},Object(i.__)("An improved version of this block is available. Update for a better, more natural way to manage your blog post listings. There may be small visual changes.","full-site-editing")),Object(o.createElement)(l.Placeholder,{icon:b,label:Object(i.__)("Your recent blog posts will be displayed here.","full-site-editing")},f?Object(o.createElement)(l.RangeControl,{label:Object(i.__)("Number of posts to show","full-site-editing"),value:t.postsPerPage,onChange:function(e){return n({postsPerPage:e})},min:1,max:50}):null),Object(o.createElement)(s.InspectorControls,null,Object(o.createElement)(l.PanelBody,null,Object(o.createElement)(l.RangeControl,{label:Object(i.__)("Number of posts","full-site-editing"),value:t.postsPerPage,onChange:function(e){return n({postsPerPage:e})},min:1,max:50}))))},save:function(){return null},transforms:p})}]));
