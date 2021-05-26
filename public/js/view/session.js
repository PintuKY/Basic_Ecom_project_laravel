$(document).on('click', '.book-now ', function() {
    console.log('Clicked on button.');

    var form_filed = [{
            'label': 'First Name',
            'default': '',
            'type': 'text',
            'name': 'first',
            'required': true,
            'col': '12',
            'order': 0,
            'class': 'form-group-inline'
        },
        { 'label': 'Middle Name', 'default': '', 'type': 'text', 'name': 'middle', 'required': false, 'col': '12', 'order': 0, 'class': 'form-group-inline' },
        { 'label': 'Last Name', 'default': '', 'type': 'text', 'name': 'last', 'required': true, 'col': '12', 'order': 0, 'class': 'form-group' },
        { 'label': 'Phone', 'default': '', 'type': 'number', 'name': 'phone', 'required': true, 'col': '12', 'order': 1, 'class': 'form-group' },
        { 'label': 'Email', 'default': '', 'type': 'email', 'name': 'email', 'required': true, 'col': '12', 'order': 1, 'class': 'form-group' },
        { 'label': 'Skype', 'default': '', 'type': 'text', 'name': 'skype', 'required': false, 'col': '12', 'order': 1, 'class': 'form-group' },
        { 'label': 'Teligram', 'default': '', 'type': 'text', 'name': 'telegram', 'required': false, 'col': '12', 'order': 1, 'class': 'form-group' },

        //{ 'label': 'Session Title', 'default': 'Session Title', 'type': 'text', 'name': 'session_title', 'required': true, 'col': '12', 'order': 3, 'class': 'form-group' }
        {
            'label': 'Time Zone',
            'default': '',
            'type': 'select',
            'name': 'time_zone',
            'required': true,
            'col': '12',
            'order': 3,
            'class': 'form-group',
            'options': window.timezone
        },
        { 'label': 'Preferred Date', 'default': '', 'type': 'datepicker', 'name': 'p_date', 'required': true, 'col': '12', 'order': 3, 'class': 'form-group' },
        {
            'label': 'Preferred Time',
            'default': '',
            'type': 'timepicker',
            'name': 'p_time',
            'required': true,
            'col': '12',
            'order': 3,
            'class': 'form-group'
        },
        {
            'label': 'Currency',
            'default': 'IND',
            'type': 'select',
            'name': 'currency',
            'required': true,
            'col': '12',
            'order': 3,
            'class': 'form-group',
            "options": window.currency
        },
        { 'label': 'price', 'default': '', 'type': 'text', 'name': 'price', 'required': true, 'col': '12', 'order': 3, 'class': 'form-group' },
        { 'label': 'Files', 'default': '', 'type': 'file', 'name': 'files', 'required': true, 'col': '12', 'order': 3, 'class': 'form-group' },
    ];

    var cat_id = $(this).attr('id');
    var title = $("#title" + cat_id).text();
    var desc = $("#desc" + cat_id).text();
    $.ajax({
            method: "GET",
            url: "sessions/form",
            data: { "name": form_filed, "cat_id": cat_id, 'title': title, 'desc': desc },
        })
        .done(function(msg) {
            //console.log(msg);
            $('.subject-body').empty();
            $('.subject-body').append(msg);
        });
});


$(document).on('mouseenter', '.categoty-list', function() {
    $(this).removeClass('bg-transparent');
});

$(document).on('mouseleave', '.categoty-list', function() {
    $(this).addClass('bg-transparent');
});