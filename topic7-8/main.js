Vue.component('task-list', {
    template: `
	<div>
		<task v-for="mask in tasks">{{ mask.task }}</task>
	</div>
	`,


    data() {
        return {
            tasks: [
                { task: 'Go to store', complete: true },
                { task: 'Go to email', complete: false },
                { task: 'Go to farm', complete: true },
                { task: 'Go to work', complete: false }
            ]
        };
    }
});


Vue.component('task', {
    template: '<li><slot></slot></li>'
});

new Vue({
    el: '#root'
});