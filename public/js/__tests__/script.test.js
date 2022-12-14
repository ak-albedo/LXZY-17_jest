/**
 * @jest-environment jsdom
 */

const $ = require('jquery');
const axios = require("axios");
jest.mock('axios');

const { phoneMask, userValidateField, contains } = require('../script');

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
        response = {data: todos};
    })

    test('Error has to be showed', () => {
        let field = "first_name";
        document.body.innerHTML =
            '<div className="mb-3">' +
                '<input type="text" name="first_name" className="form-control" id="first_name" required="">' +
                    '<div className="validation-error" id="first_name-error"></div>' +
            '</div>';
        window.errorFields = [];

        axios.post.mockResolvedValue(response);

        return userValidateField(field, "test4").then(data => {
            expect(data).toEqual(todos);
            expect(window.errorFields.length).toBe(1);
            expect($("#" + field + "-error").html()).toBe(todos);
            expect($("#" + field).attr("aria-invalid")).toBe("true");
            expect($("#" + field).hasClass('is-invalid')).toBe(true);
        });
    });
});

describe('Test contains function:', () => {
    test('check', () => {
        const arr = ["test1", "test2", "test3"];
        const result = contains(arr, "test3");
        const result2 = contains(arr, "test4");

        expect(result).toBe(true);
        expect(result2).toBe(false);
    })
});