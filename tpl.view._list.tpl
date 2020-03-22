
{{ primeToolbar({
    class: "toolbar--inner mb-2 bg-white mdl-shadow--2dp",
    navLinks: {
        'dashboard': "app_dashboard"
    },
    actionLinks: {
        'search': 'search',
        'sort' : {
            'icon': 'sort',
            'Sort by name A-Z': {"data-grid-sort-param":"@slug|name", "data-grid-sort-value":"asc"},
            'Sort by name Z-A': {"data-grid-sort-param":"@slug|name", "data-grid-sort-value":"desc"},
        },
        'help': 'help',
    }
}) }}

{% include 'js_templates/grid.shared._list.html.twig' %}
