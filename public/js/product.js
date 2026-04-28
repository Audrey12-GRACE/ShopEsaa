const marqueeItems = ["Livraison sous 48h", "Pièces authentifiées", "Retours gratuits sous 30 jours", "Service conciergerie", "Emballage cadeau offert", "Paiement en 3x sans frais"];
const track = document.getElementById('marquee');
const doubled = [...marqueeItems, ...marqueeItems];
track.innerHTML = doubled.map(t => `<span class="marquee-item"><span class="marquee-dot"></span>${t}</span>`).join('');



const products = [
  { id: 'veste-cachemire-noir', name: 'Veste Cachemire Noir', cat: 'Mode', price: "285 000", old: "340 000", badge: "sale", stars: 5, image: "../public/images/hero.jpg" },
  { id: 'sac-cuir-grain-nappa', name: 'Sac Cuir Grain Nappa', cat: 'Mode', price: "420 000", old: "", badge: "new", stars: 5, image: "../public/images/hero.jpg" },
  { id: 'chemise-soie-sauvage', name: 'Chemise Soie Sauvage', cat: 'Mode', price: "195 000", old: "", badge: "", stars: 4, image: "../public/images/hero.jpg" },
  { id: 'pantalon-laine-m-rinos', name: 'Pantalon Laine Mérinos', cat: 'Mode', price: "320 000", old: "380 000", badge: "sale", stars: 5, image: "../public/images/hero.jpg" },
  { id: 'blazer-laine-vierge', name: 'Blazer Laine Vierge', cat: 'Mode', price: "650 000", old: "", badge: "new", stars: 5, image: "../public/images/hero.jpg" },
  { id: 'robe-soie-empire', name: 'Robe Soie Empire', cat: 'Mode', price: "480 000", old: "", badge: "", stars: 4, image: "../public/images/hero.jpg" },
  { id: 'manteau-cachemire-beige', name: 'Manteau Cachemire Beige', cat: 'Mode', price: "890 000", old: "1 050 000", badge: "sale", stars: 5, image: "../public/images/hero.jpg" },
  { id: 'charpe-soie-herm-s', name: 'Écharpe Soie Hermès', cat: 'Mode', price: "380 000", old: "", badge: "new", stars: 5, image: "../public/images/hero.jpg" },
  { id: 'ceinture-cuir-crocodile', name: 'Ceinture Cuir Crocodile', cat: 'Mode', price: "295 000", old: "", badge: "", stars: 4, image: "../public/images/hero.jpg" },
  { id: 'chapeau-feutre-borsalino', name: 'Chapeau Feutre Borsalino', cat: 'Mode', price: "450 000", old: "", badge: "", stars: 5, image: "../public/images/hero.jpg" },
  { id: 'gants-cuir-nappa', name: 'Gants Cuir Nappa', cat: 'Mode', price: "180 000", old: "", badge: "new", stars: 4, image: "../public/images/hero.jpg" },
  { id: 'pull-cachemire-col-v', name: 'Pull Cachemire Col V', cat: 'Mode', price: "420 000", old: "520 000", badge: "sale", stars: 5, image: "../public/images/hero.jpg" },
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
<<<<<<< HEAD
        <div class="pcard-img">
          <img src="${p.image}" alt="${p.name}" />
          <div class="pcard-img-inner">${icon}</div>
=======
        <div class="pcard-img" style="background:${p.bg}">
          <div class="pcard-img-inner"><img src="../public/images/hero.jpg" alt="" srcset=""></div>
>>>>>>> 1afc6f546fe01cf5498a687f1d7a6cba3182306b
          ${badgeHTML}
        </div>
        <div class="pcard-body">
          <div>
            <div class="pcard-cat">${p.cat}</div>
            <div class="pcard-name">${p.name}</div>
            
          </div>
          <div class="pcard-footer">
            <div><span class="pcard-price">${p.price} F</span>${oldHTML}</div>
            <button class="add-circle" data-product-id="${p.id}" data-product-name="${p.name}" data-product-price="${p.price}" data-product-image="${p.image || ''}" data-product-cat="${p.cat}" data-product-badge="${p.badge}" data-product-old="${p.old}" onclick="handleAddCart(this)">+</button>
          </div>
        </div>`;
  grid.appendChild(card);
});

// Cart updates are handled by cart-storage.js
