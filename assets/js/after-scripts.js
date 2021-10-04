function startEffectBg() {
  const q = document.getElementById("animation");
  if (q) {
    q.style.position = "absolute";
    q.style.zIndex = "0";
    q.style.maxWidth = "100%";
    const s = window.screen;
    const w = (q.width = s.width);
    const h = (q.height = s.height);
    const ctx = q.getContext("2d");

    const p = Array(Math.floor(w / 10) + 1).fill(0);

    const random = (items) => items[Math.floor(Math.random() * items.length)];

    const hex = "0123456789ABCDEF".split("");

    setInterval(() => {
      ctx.fillStyle = "rgba(255,255,255,.05)";
      ctx.fillRect(0, 0, w, h);
      ctx.fillStyle = "rgba(0,0,0,.2)";
      p.map((v, i) => {
        ctx.fillText(random(hex), i * 10, v);
        p[i] = v >= h || v > 50 + 10000 * Math.random() ? 0 : v + 10;
      });
    }, 1000 / 30);
  }
}

function changeWord() {
  const words = ["conecta", "melhora", "move", "interliga"];

  const element = document.getElementById("change-word");
  element.innerText = words[Math.floor(Math.random() * words.length)];
}

function onloadPage() {
  startEffectBg();
  AOS.init();
  feather.replace();
  setInterval(() => changeWord(), 3000);
}

window.onresize = onloadPage();
window.onload = onloadPage();
