# jQuery.goTop.js 插件说明

## 简介

`这是一个依赖于jQuery的返回顶部插件，正好项目中需要用到，而且功能要求比较简单，就写了一个，简单封装了一下`

## 使用方法

```js
$(function () {
  // 获取按钮元素
  $('#go-top').goTop({
    scrollTop: 100, // 显示返回按钮时离顶部的距离（单位：px），默认100px
    scrollSpeed: 1000, // 点击按钮返回顶部的速度（单位：ms），默认1000ms
    fadeInSpeed: 1000, // 按钮缓动进入的速度（单位：ms），默认1000ms
    fadeOutSpeed: 500 // 按钮缓动消失的速度（单位：ms），默认500ms
  })
})
```

`具体案例可以参考demo文件，箭头使用的字体图标从Iconfont上下载而来`