Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'settings',
            path: '/settings',
            component: require('./components/List'),
        },
        {
            name: 'settings-create',
            path: '/settings/create',
            component: require('./components/Create'),
        },
        {
            name: 'settings-edit',
            path: '/settings/:id/edit',
            component: require('./components/Edit'),
            props: true
        }
    ])
});
