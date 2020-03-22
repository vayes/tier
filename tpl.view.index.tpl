{% set useMDL = true %}
{% extends 'base.html.twig' %}

{% block content %}
<header class="content__title">
    <h1>{{ "@viewFolder"|trans }}</h1>
</header>

<div class="card bg-transparent mdl-shadow--0dp">
    <div class="tab-container">
        {{ primeTabList({
            list: "list view",
            new: "create view",
            edit: "edit view"
        }, {ul_class: "d-none"}) }}

        <div class="tab-content pt-0 pb-0">
            {{ primeTabPanelOpen('list', true) }}
                {% include '@viewFolder/_list.html.twig' %}
            {{ primeTabPanelClose() }}

            {{ primeTabPanelOpen('new') }}
                {% include '@viewFolder/_new.html.twig' %}
            {{ primeTabPanelClose() }}

            {{ primeTabPanelOpen('edit') }}
                {% include '@viewFolder/_edit.html.twig' %}
            {{ primeTabPanelClose() }}
        </div>
    </div>
</div>

<button class="btn btn-danger btn--action zmdi zmdi-plus" id="js_action_new_form_view"></button>
{% endblock %}

{% block javascripts %}

{{ parent() }}

<script src="{{ asset('app/dist/js/com.grid.vayes.min.js') }}"></script>

{% include '@viewFolder/_template.html.twig' %}
{% include 'js_templates/grid.html.twig' %}

<script type="text/javascript">
    $(function () {
        window._grid = window._grid || {};
        window._grid.route = "{{ route }}";

        Vayes.Grid.init();
        loadGridViewEvents();
    });

</script>
{% endblock %}

