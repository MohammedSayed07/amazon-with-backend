// let HTML = ''
//
// products.forEach((product) => {
//   HTML += `
//   <div class="product-container">
//   <div class="product-image-container">
//     <img class="product-image"
//       src="${product.image}">
//   </div>
//
//   <div class="product-name limit-text-to-2-lines">
//     ${product.name}
//   </div>
//
//   <div class="product-rating-container">
//     <img class="product-rating-stars"
//       src="images/ratings/rating-${product.rating.stars * 10}.png">
//     <div class="product-rating-count link-primary">
//       ${product.rating.count}
//     </div>
//   </div>
//
//   <div class="product-price">
//     $${(product.priceCents / 100).toFixed(2)}
//   </div>
//
//   <div class="product-quantity-container">
//     <select id="${product.id}/selected">
//       <option selected value="1">1</option>
//       <option value="2">2</option>
//       <option value="3">3</option>
//       <option value="4">4</option>
//       <option value="5">5</option>
//       <option value="6">6</option>
//       <option value="7">7</option>
//       <option value="8">8</option>
//       <option value="9">9</option>
//       <option value="10">10</option>
//     </select>
//   </div>
//
//   <div class="product-spacer"></div>
//
//   <div class="added-to-cart"
//   id="${product.id}/product">
//     <img src="images/icons/checkmark.png">
//     Added
//   </div>
//   <a>
//   <button class="add-to-cart-button button-primary"
//   id="${product.id}"
//   data-product-id="${product.id}">
//     Add to Cart
//   </button>
//   </a>
// </div>
// `
//   document.querySelector('.products-grid').innerHTML = HTML
//
// });
//
// document.querySelectorAll('.add-to-cart-button').forEach((button) => {
//   button.addEventListener('click', () => {
//     const productId = String(button.dataset.productId);
//     let matchingItem;
//     let quantity = 0;
//     const element = button.getAttribute('id')
//
//     let quantityAdded = Number(document.getElementById(element + '/selected').value)
//
//     cart.forEach((item)=> {
//       if (item.productId === productId) {
//         matchingItem = item;
//       }
//     })
//     if(matchingItem) {
//       matchingItem.quantity += quantityAdded;
//     } else {
//       cart.push({
//         productId: productId,
//         quantity: quantityAdded
//       })
//     }
//
//     cart.forEach((item) => {
//       quantity += item.quantity
//     })
//
//     document.querySelector('.cart-quantity').innerText = quantity
//
//     document.getElementById(element + '/product').classList.add('added-to-cart-css')
//
//   })
// })
