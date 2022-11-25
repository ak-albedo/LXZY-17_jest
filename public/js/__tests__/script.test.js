/**
 * @jest-environment jsdom
 */

const $ = require('jquery');
const { phoneMask } = require('../script')

test('Test phoneMask function', () => {
    document.body.innerHTML =
        '<div>' +
        '  <input type="tel" value="33333333333" />' +
        '</div>';

    $('[type="tel"]').keyup(phoneMask);
    $('[type="tel"]').keyup();

    expect($('[type="tel"]').val()).toBe('+3 (333) 333-3333');
});