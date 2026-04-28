const marqueeItems = ["Livraison sous 48h", "Pièces authentifiées", "Retours gratuits sous 30 jours", "Service conciergerie", "Emballage cadeau offert", "Paiement en 3x sans frais"];
const track = document.getElementById('marquee');
const doubled = [...marqueeItems, ...marqueeItems];
track.innerHTML = doubled.map(t => `<span class="marquee-item"><span class="marquee-dot"></span>${t}</span>`).join('');

const svgs = {
  Mode: `<svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="#c9a84c" stroke-width="1"><path d="M20.38 3.46L16 2a4 4 0 01-8 0L3.62 3.46a2 2 0 00-1.34 2.23l.58 3.57a1 1 0 00.99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 002-2V10h2.15a1 1 0 00.99-.84l.58-3.57a2 2 0 00-1.34-2.23z"/></svg>`,
  Joaillerie: `<svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="#c9a84c" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>`,
  Maison: `<svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="#c9a84c" stroke-width="1"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>`,
  Beauté: `<svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="#c9a84c" stroke-width="1"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>`,
  Parfum: `<svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="#c9a84c" stroke-width="1"><path d="M9 3h6v2H9z"/><rect x="5" y="5" width="14" height="16" rx="2"/><line x1="12" y1="9" x2="12" y2="17"/><line x1="8" y1="13" x2="16" y2="13"/></svg>`,
};

const products = [
  { id: 'veste-cachemire-noir', name: 'Veste Cachemire Noir', cat: 'Mode', price: "285 000", old: "340 000", badge: "sale", stars: 5, image: "../public/images/hero.jpg", bg: "#111" },
  { id: 'sac-cuir-grain-nappa', name: 'Sac Cuir Grain Nappa', cat: 'Mode', price: "420 000", old: "", badge: "new", stars: 5, image: "../public/images/hero.jpg", bg: "#111" },
  { id: 'chemise-soie-sauvage', name: 'Chemise Soie Sauvage', cat: 'Mode', price: "195 000", old: "", badge: "", stars: 4, image: "../public/images/hero.jpg", bg: "#111" },
  { id: 'pantalon-laine-m-rinos', name: 'Pantalon Laine Mérinos', cat: 'Mode', price: "320 000", old: "380 000", badge: "sale", stars: 5, image: "../public/images/hero.jpg", bg: "#111" },
  { id: 'blazer-laine-vierge', name: 'Blazer Laine Vierge', cat: 'Mode', price: "650 000", old: "", badge: "new", stars: 5, image: "../public/images/hero.jpg", bg: "#111" },
  { id: 'robe-soie-empire', name: 'Robe Soie Empire', cat: 'Mode', price: "480 000", old: "", badge: "", stars: 4, image: "../public/images/hero.jpg", bg: "#111" },
  { id: 'manteau-cachemire-beige', name: 'Manteau Cachemire Beige', cat: 'Mode', price: "890 000", old: "1 050 000", badge: "sale", stars: 5, image: "../public/images/hero.jpg", bg: "#111" },
  { id: 'charpe-soie-herm-s', name: 'Écharpe Soie Hermès', cat: 'Mode', price: "380 000", old: "", badge: "new", stars: 5, image: "../public/images/hero.jpg", bg: "#111" },
  { id: 'ceinture-cuir-crocodile', name: 'Ceinture Cuir Crocodile', cat: 'Mode', price: "295 000", old: "", badge: "", stars: 4, image: "../public/images/hero.jpg", bg: "#111" },
  { id: 'chapeau-feutre-borsalino', name: 'Chapeau Feutre Borsalino', cat: 'Mode', price: "450 000", old: "", badge: "", stars: 5, image: "../public/images/hero.jpg", bg: "#111" },
  { id: 'gants-cuir-nappa', name: 'Gants Cuir Nappa', cat: 'Mode', price: "180 000", old: "", badge: "new", stars: 4, image: "../public/images/hero.jpg", bg: "#111" },
  { id: 'pull-cachemire-col-v', name: 'Pull Cachemire Col V', cat: 'Mode', price: "420 000", old: "520 000", badge: "sale", stars: 5, image: "../public/images/hero.jpg", bg: "#111" },
];

let cart = 0;
const grid = document.getElementById('grid');

products.forEach(p => {
  const icon = svgs[p.cat] || svgs['Mode'];
  const stars = Array.from({ length: 5 }, (_, i) =>
    `<span style="font-size:11px;color:${i < p.stars ? '#c9a84c' : 'rgba(201,168,76,0.2)'}">★</span>`
  ).join('');
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
          <img src="${p.image}" alt="${p.name}" />
          <div class="pcard-img-inner">${icon}</div>
          ${badgeHTML}
        </div>
        <div class="pcard-body">
          <div>
            <div class="pcard-cat">${p.cat}</div>
            <div class="pcard-name">${p.name}</div>
            <div class="pcard-stars">${stars}</div>
          </div>
          <div class="pcard-footer">
            <div><span class="pcard-price">${p.price} F</span>${oldHTML}</div>
            <button class="add-circle" data-product-id="${p.id}" data-product-name="${p.name}" data-product-price="${p.price}" data-product-image="${p.image || ''}" data-product-cat="${p.cat}" data-product-badge="${p.badge}" data-product-old="${p.old}" onclick="handleAddCart(this)">+</button>
          </div>
        </div>`;
  grid.appendChild(card);
});

// Cart updates are handled by cart-storage.js
