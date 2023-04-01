$(function() {
    create_modal("#demo", "<h4>Hello World</h4>", "Hello Web World")

    function create_modal(_after, header, content) {
        var modal = '\
        <div class="modal fade" id="my_modal">\
            <div class="modal-dialog modal-scrollable">\
                <div class="modal-content">\
                    <div class="modal-header">\
                        ' + header + 
                        '<button type="button" class="btn-close" \
                            data-bs-dismiss="modal"></button>\
                    </div>\
                    <div class="modal-body">\
                        ' + content + 
                    '</div>\
                    <div class="modal-footer">\
                        <button type="button" class="btn btn-danger" \
                            data-bs-dismiss="modal">Close</button>\
                    </div>\
                </div>\
            </div>'
        $(_after).after(modal)
    }
})