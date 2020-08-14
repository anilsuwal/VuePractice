new Vue({
    el: '#app',

    data: {
        skills: []
    },

    mounted() {
        //Make an ajax request to an server    
        axios.get('/skills').then(response => this.skills = response.data);
    }
});