'use strict'

function delay(ms) {
    return new Promise((resolve, reject) =>
    {
        setTimeout(resolve, ms);
    });
}

delay(500).then(() => alert("Прошло 0,5 сек!"));