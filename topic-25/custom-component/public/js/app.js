Vue.component('coupon', {
    props: ['code'],
    template: `
    <input type="text" :value="code" @input="updateCode($event.target.value)" ref="input">
`,
    data() {
        return {
            invalids: ['ALLFREE', 'SOMETHING']
        }
    },
    methods: {
        updateCode(code) {

            if (this.invalids.includes(code)) {
                alert('This code is no longer Valid.')

                this.$refs.input.value = code = '';
            }

            //Validation
            this.$emit('input', code);
        }
    }
});

new Vue({
    el: '#app',

    data: {
        coupon: 'FREEBIE'
    }
});