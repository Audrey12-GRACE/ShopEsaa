const marqueeItems = ["Livraison sous 48h", "Pièces authentifiées", "Retours gratuits sous 30 jours", "Service conciergerie", "Emballage cadeau offert", "Paiement en 3x sans frais"];
const track = document.getElementById('marquee');
const doubled = [...marqueeItems, ...marqueeItems];
track.innerHTML = doubled.map(t => `<span class="marquee-item"><span class="marquee-dot"></span>${t}</span>`).join('');



const products = [
  { name: "Veste Cachemire Noir", cat: "Mode", price: "285 000", old: "340 000", badge: "sale", stars: 5, bg: "#111" },
  { name: "Bague Diamant Solitaire", cat: "Joaillerie", price: "1 200 000", old: "", badge: "new", stars: 5, bg: "#0d0d0d" },
  { name: "Bougie Santal Noir 450g", cat: "Maison", price: "42 000", old: "", badge: "", stars: 4, bg: "#111" },
  { name: "Eau de Parfum Oud Royal", cat: "Parfum", price: "95 000", old: "120 000", badge: "sale", stars: 5, bg: "#0d0d0d" },
  { name: "Sac Cuir Grain Nappa", cat: "Mode", price: "420 000", old: "", badge: "new", stars: 5, bg: "#111" },
  { name: "Montre Automatique Or", cat: "Joaillerie", price: "980 000", old: "", badge: "", stars: 5, bg: "#0d0d0d" },
  { name: "Carafe en Cristal Taillé", cat: "Maison", price: "78 000", old: "95 000", badge: "sale", stars: 4, bg: "#111" },
  { name: "Sérum Visage Caviar", cat: "Beauté", price: "68 000", old: "", badge: "new", stars: 4, bg: "#0d0d0d" },
];

let cart = 0;
const grid = document.getElementById('grid');

products.forEach(p => {
  /*const icon = svgs[p.cat] || svgs['Mode'];
  const stars = Array.from({ length: 5 }, (_, i) =>
    `<span style="font-size:11px;color:${i < p.stars ? '#c9a84c' : 'rgba(201,168,76,0.2)'}">★</span>`
  ).join('');*/
  const badgeHTML = p.badge === 'new'
    ? `<div class="pcard-badge badge-new">Nouveauté</div>`
    : p.badge === 'sale'
      ? `<div class="pcard-badge badge-sale">Promo</div>`
      : '';
  const oldHTML = p.old ? `<span class="pcard-old">${p.old} F</span>` : '';

  const card = document.createElement('div');
  card.className = 'pcard';
  card.innerHTML = `
        <div class="pcard-img" style="background:${p.bg}">
          <div class="pcard-img-inner"><img src="../public/images/hero.jpg" alt="" srcset=""></div>
          ${badgeHTML}
        </div>
        <div class="pcard-body">
          <div>
            <div class="pcard-cat">${p.cat}</div>
            <div class="pcard-name">${p.name}</div>
            
          </div>
          <div class="pcard-footer">
            <div><span class="pcard-price">${p.price} F</span>${oldHTML}</div>
            <button class="add-circle" onclick="addCart(this)">+</button>
          </div>
        </div>`;
  grid.appendChild(card);
});

function addCart(btn) {
  cart++;
  document.getElementById('cart-num').textContent = cart;
  btn.style.background = '#c9a84c';
  btn.style.color = '#080808';
  btn.style.borderColor = '#c9a84c';
  btn.textContent = '✓';
  setTimeout(() => {
    btn.style.background = '';
    btn.style.color = '';
    btn.style.borderColor = '';
    btn.textContent = '+';
  }, 8000);
}