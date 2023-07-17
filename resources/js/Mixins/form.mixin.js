export default {
    data() {
        return {
            input_email: ''
        }
    },

    methods: {
        setEmail: function () {
            axios.post('/email', {
                email: this.input_email
            })
                .then(() => {
                    this.input_email = ''
                })
        }
    }
}
