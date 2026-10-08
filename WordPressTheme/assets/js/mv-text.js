"use strict";

/**
 * MVコピー：1文字ずつフェード＋スライドイン（GSAP）
 * 参照: https://pragmateches.com/ のファーストビューに近い質感
 */
(function () {
  function rebuildCharContent(sourceEl) {
    var fragment = document.createDocumentFragment();
    Array.prototype.forEach.call(sourceEl.childNodes, function (child) {
      if (child.nodeType === Node.TEXT_NODE) {
        Array.prototype.forEach.call(child.textContent, function (ch) {
          if (ch === "\n" || ch === "\r") return;
          var s = document.createElement("span");
          s.className = "mv__char";
          s.textContent = ch;
          fragment.appendChild(s);
        });
      } else if (child.nodeType === Node.ELEMENT_NODE) {
        if (child.tagName === "BR") {
          fragment.appendChild(document.createElement("br"));
        } else {
          var wrapper = child.cloneNode(false);
          var innerFrag = rebuildCharContent(child);
          while (innerFrag.firstChild) {
            wrapper.appendChild(innerFrag.firstChild);
          }
          fragment.appendChild(wrapper);
        }
      }
    });
    return fragment;
  }
  function initMvText() {
    var root = document.querySelector(".js-mv-text");
    if (!root || typeof gsap === "undefined") return;
    var frag = rebuildCharContent(root);
    root.innerHTML = "";
    root.appendChild(frag);
    var chars = root.querySelectorAll(".mv__char");
    if (!chars.length) return;
    if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
      gsap.set(chars, {
        opacity: 1,
        y: 0
      });
      return;
    }
    gsap.set(chars, {
      opacity: 0,
      y: "0.35em"
    });
    gsap.to(chars, {
      opacity: 1,
      y: 0,
      duration: 0.55,
      stagger: 0.05,
      ease: "power2.out",
      delay: 0.4
    });
  }
  function run() {
    if (document.fonts && document.fonts.ready) {
      document.fonts.ready.then(initMvText);
    } else {
      initMvText();
    }
  }
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", run);
  } else {
    run();
  }
})();