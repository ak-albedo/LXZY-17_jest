/**
 * @jest-environment jsdom
 */

const $ = require('jquery');
const { phoneMask, userValidateField } = require('../script');

describe('Test phoneMask function:', () => {
    test('correct value format', () => {
        document.body.innerHTML =
            '<div>' +
            '  <input type="tel" value="33333333333" />' +
            '</div>';

        $('[type="tel"]').keyup(phoneMask);
        $('[type="tel"]').keyup();

        expect($('[type="tel"]').val()).toBe('+3 (333) 333-3333');
    })
});

describe('Test userValidateField function:', () => {
    beforeEach(() => {
        $.ajax = jest.fn().mockImplementation(() => {
            const fakeResponse = {
                id: 1,
                name: "All",
                value: "Dummy Data"
            };
            return Promise.resolve(fakeResponse);
        });
    })

    test('', () => {

    })
});