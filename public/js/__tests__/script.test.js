/**
 * @jest-environment jsdom
 */

const $ = require('jquery');
const axios = require("axios");
jest.mock('axios');

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
    let response;
    let todos;

    beforeEach(() => {
        todos = "Test message"

        response = {
            data: todos
        }
    })

    test('test', () => {
        axios.post.mockReturnValue(response);

        return userValidateField().then(data => {
            expect(data).toEqual(todos)
        });
    });
});