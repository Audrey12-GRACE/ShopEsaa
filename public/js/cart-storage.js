const cartKey = 'shopesa_cart';

function getCartItems() {
  const raw = localStorage.getItem(cartKey);
  if (!raw) return [];
  try {
    const items = JSON.parse(raw);
    return Array.isArray(items) ? items : [];
  } catch (err) {
    localStorage.removeItem(cartKey);
    return [];
  }
}

function saveCartItems(items) {
  localStorage.setItem(cartKey, JSON.stringify(items));
  renderCartCount();
}

function parsePriceValue(value) {
  if (typeof value === 'number') return value;
  return Number(String(value).replace(/\s+/g, '')) || 0;
}

function formatPrice(value) {
  const amount = parsePriceValue(value);
  return new Intl.NumberFormat('fr-FR').format(amount) + ' F';
}

function getCartCount() {
  return getCartItems().reduce((sum, item) => sum + (item.qty || 0), 0);
}

function renderCartCount() {
  const badge = document.getElementById('cart-num');
  if (badge) {
    badge.textContent = getCartCount();
  }
}

function addCartItem(product) {
  const items = getCartItems();
  const existing = items.find(it => it.id === product.id);
  if (existing) {
    existing.qty = (existing.qty || 0) + 1;
  } else {
    items.push({
      id: product.id,
      name: product.name,
      cat: product.cat,
      price: parsePriceValue(product.price),
      image: product.image || '',
      badge: product.badge || '',
      old: product.old || '',
      qty: 1
    });
  }
  saveCartItems(items);
  return items;
}

function removeCartItem(id) {
  const items = getCartItems().filter(item => item.id !== id);
  saveCartItems(items);
  renderCartPage();
}

function changeCartQuantity(id, delta) {
  const items = getCartItems().map(item => {
    if (item.id === id) {
      item.qty = Math.max(1, (item.qty || 1) + delta);
    }
    return item;
  }).filter(item => item.qty > 0);
  saveCartItems(items);
  renderCartPage();
}

function clearCart() {
  saveCartItems([]);
  renderCartPage();
}

function handleAddCart(btn) {
  const product = {
    id: btn.dataset.productId,
    name: btn.dataset.productName,
    cat: btn.dataset.productCat,
    price: btn.dataset.productPrice,
    image: btn.dataset.productImage,
    badge: btn.dataset.productBadge,
    old: btn.dataset.productOld
  };
  addCartItem(product);
  btn.classList.add('added-to-cart');
  btn.textContent = '✓';
  setTimeout(() => {
    btn.classList.remove('added-to-cart');
    btn.textContent = '+';
  }, 800);
}

function renderCartPage() {
  const container = document.getElementById('cart-content');
  if (!container) return;

  const items = getCartItems();
  if (!items.length) {
    container.innerHTML = `
      <div class="cart-empty">
        <h3>Votre panier est vide</h3>
        <p>Ajoutez des produits depuis la boutique pour les retrouver ici.</p>
        <a href="product.php" class="button primary">Voir la boutique</a>
      </div>
    `;
    return;
  }

  const totalItems = items.reduce((sum, item) => sum + item.qty, 0);
  const totalPrice = items.reduce((sum, item) => sum + item.price * item.qty, 0);

  container.innerHTML = `
    <div class="cart-grid">
      <div class="cart-items">
        ${items.map(item => `
          <div class="cart-item">
            <div class="item-image" style="background-image:url('${item.image || '../public/images/hero.jpg'}')"></div>
            <div class="item-details">
              <span class="item-cat">${item.cat}</span>
              <h3>${item.name}</h3>
              <div class="item-price">${formatPrice(item.price)} ${item.old ? `<span class="item-old">${formatPrice(item.old)}</span>` : ''}</div>
              <div class="item-actions">
                <button class="qty-btn" onclick="changeCartQuantity('${item.id}', -1)">-</button>
                <span class="item-qty">${item.qty}</span>
                <button class="qty-btn" onclick="changeCartQuantity('${item.id}', 1)">+</button>
                <button class="remove-btn" onclick="removeCartItem('${item.id}')">Supprimer</button>
              </div>
            </div>
          </div>
        `).join('')}
      </div>
      <aside class="checkout-panel">
        <div class="checkout-card">
          <h3>Résumé de la commande</h3>
          <p>${totalItems} article(s) dans le panier</p>
          <div class="checkout-total">
            <span>Total</span>
            <strong>${formatPrice(totalPrice)}</strong>
          </div>
          <button class="button primary checkout-btn">Valider la commande</button>
          <button class="button secondary clear-btn" onclick="clearCart()">Vider le panier</button>
        </div>
      </aside>
    </div>
  `;
}

window.handleAddCart = handleAddCart;
window.removeCartItem = removeCartItem;
window.changeCartQuantity = changeCartQuantity;
window.clearCart = clearCart;

window.addEventListener('DOMContentLoaded', () => {
  renderCartCount();
  renderCartPage();
});
