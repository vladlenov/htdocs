'use strict'

export default class Doors {

    constructor(doorsAmount) {
        this.doorsAmount = doorsAmount;
    }

     type() {
         this.wheelsAmount = 2 ? 'coupe' :
         this.wheelsAmount = 3 ? 'hatchback' :
         this.wheelsAmount = 4 ? 'sedan' :
         'station wagon';
     }

}