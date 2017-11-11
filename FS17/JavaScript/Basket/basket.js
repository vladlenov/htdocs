class Basket {
    constructor() {
        this._itemsArray = [];
        this._totalPrice = 0;
    }

    /**
     * Add new Item
     * @param item
     */
    addNewItem(item) {
        if (!item || !item.name) throw new TypeError('Invalid param');

        item['domElement'] = this._createNewDomElement(item);

        this._itemsArray.push(item);
        this._totalPrice = item.price;

        console.log(this._itemsArray);
    }

    /**
     * Generate new Total Price
     * @set
     * @param itemPrice
     * @private
     */
    set _totalPrice(itemPrice) {
        if (itemPrice === undefined || itemPrice === null) {
            throw new TypeError('Invalid param itemPrice');
        }

        var totalCostEl = document.querySelector('.total-cost');

        if (!totalCostEl) throw new Error('Element with class total-cost is not found!');

        totalCostEl.innerText = parseInt(totalCostEl.innerText) + parseInt(itemPrice);
    }

    _createNewDomElement(item) {
        if (!item || !item.name) throw new TypeError('Invalid param');

        if (document) {
            var createElement = document.createElement('div');

            createElement.innerHTML = '\t\t' +
                '<img src="' + item.image + '">\n' +
                '\t\t<div class="title">' + item.name + '</div>\n' +
                '\t\t<input type="number" class="count" value="' + item.count + '">\n' +
                '\t\t<span class="price">' + item.price + '</span>';

            createElement.className = 'item';

            document.querySelector('.basket-elements').appendChild(createElement);

            return createElement;
        }
    }
}

var basket = new Basket();

for (var i = 0; i < 5; i++) {
    basket.addNewItem({
        name: 'First',
        image: 'https://monosnap.com/file/pC91jOb15fY9EUaqeHMmrRa2pu7dLC',
        count: i,
        price: 500
    });
}