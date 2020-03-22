<div class="card-body bg-white">

    <h4 class="card-title" id="js_form_new_card_title">{{ 'create view'|trans }}</h4>

    <form name="new_form">
        <div class="row">
            <div class="{{ col("1-3") }}">
                {{ formHidden('_method', {value:"PUT", action: "new"}) }}
                {#{{ formInput('name', {action:"new", "label_class": "mb-0"}) }}#}
            </div>
        </div>
        <div class="row">
            <div class="{{ col("1-1") }}">
                {{ buttonDiscard('new') }}
                {{ buttonSave('new', {"data-v-uri": route}) }}
                {{ buttonMore('new', {"save_close":"~", "divider":"~", "save_new":"~"}) }}
            </div>
        </div>
    </form>

</div>
