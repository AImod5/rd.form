const app = new Vue({
    el: '#app',
    data: {
        errors: [],
        field1: null,
        field12: null,
        field13: null,
        field3: null,
        field4: null
    },
    methods:{
        checkForm: function (e) {
            if (this.field1 && this.field12 && this.field13 && this.field3 && this.field4) {
                return true;
            }

            this.errors = [];

            if (!this.field1) {
                this.errors.push('Full name required.');
            }

            if (!this.field12) {
                this.errors.push('Date of birth required.');
            }

            if (!this.field13) {
                this.errors.push('Phone number required.');
            }

            if (!this.field3) {
                this.errors.push('E-mail required.');
            }

            if (!this.field4) {
                this.errors.push('Answer required.');
            }

            e.preventDefault();
        }
    }
})