<div class="card-body bg-white">

    <h4 class="card-title" id="js_form_edit_card_title">{{ 'edit view'|trans }}</h4>

    <form name="edit_form">
        <div class="row">
            <div class="{{ col("1-3") }}">
                {{ formHidden('_method', {value:"PUT", action: "edit"}) }}
                {#{{ formInput('name', {action:"edit", "label_class": "mb-0"}) }}#}
            </div>
        </div>
        <div class="row">
            <div class="{{ col("1-1") }}">
                {{ buttonDiscard('edit') }}
                {{ buttonSave('edit', {"data-v-uri": route}) }}
                {{ buttonMore('edit', {"save_close":"~", "divider":"~", "save_new":"~"}) }}
            </div>
        </div>
    </form>
</div>
