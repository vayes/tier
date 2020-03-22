
<script type="text/template" id="row_template">
    <div class="listview__item bg-white mdl-shadow--2dp" data-row="<%= item.id %>" data-raw='<%=json%>'>
        <i class="avatar-char <%= mdlColor(600) %>">
            <%= typeof(item.name) !== 'undefined' ?  Vayes.String.firstLetter(item.name) : ' ℑ ' %>
        </i>
        <div class="listview__content">
            <div class="listview__heading"><%= item.name %></div>
            <div class="listview__content--extra pt-2 d-none">
                <dl class="row listview__item--details animated fadeIn"></dl>
            </div>
            <div class="listview__attrs">
                <span><i class="zmdi zmdi-account-o mr-1"></i>
                    <%= typeof(item.creator) !== 'undefined' ?  item.creator.full_name : ' - ' %>
                </span>
            </div>
        </div>
        <div class="actions listview__actions">
            <i class="actions__item zmdi zmdi-file-text js-item-action-view" title="{{ "view"|trans }}"></i>
            <i class="actions__item zmdi zmdi-edit js-item-action-edit animated infinite" title="{{ "edit"|trans }}"></i>
            <div class="dropdown actions__item">
                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="" class="dropdown-item js-item-action-delete">{{ "delete"|trans }}</a>
                </div>
            </div>
        </div>
    </div>
</script>

<script type="text/template" id="row_details_template">
    <dt class="col-sm-3 text-truncate"><%= _.upperFirst(_.lowerCase(item.prop)) %></dt>
    <dd class="col-sm-9 text-truncate"><%= item.val %></dd>
</script>
