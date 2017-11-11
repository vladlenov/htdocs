function join(separator) {
    if (!this.length) return '';

    var str = this[0];

    for (var i = 1; i < this.length; i++) {
        str += separator + this[i];
    }

    return str;
}