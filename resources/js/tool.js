Nova.booting((Vue, router, store) => {
    Vue.component('action-selector', require('./components/ActionSelector'));
    Vue.component('filter-menu', require('./components/EmptyComponent'));
    Vue.component('delete-menu', require('./components/EmptyComponent'));
})
