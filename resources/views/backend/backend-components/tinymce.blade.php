<script>
    $(function(){
        tinymce.init({
            selector: ".mcetext",
            theme: "modern",
            plugins: "link code",
            height: 400,
            setup: function(editor) {
                var inp = $('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
                $(editor.getElement()).parent().append(inp);

                inp.on("change",function(){
                    var input = inp.get(0);
                    var file = input.files[0];
                    var fr = new FileReader();
                    fr.onload = function() {
                        var img = new Image();
                        img.src = fr.result;
                        editor.insertContent('<img src="'+img.src+'"/>');
                        inp.val('');
                    }
                    fr.readAsDataURL(file);
                });
                editor.addMenuItem("imageupload", {
                    text: "Photo (Upload)",
                    context: "insert",
                    onclick: function() {
                        inp.trigger("click");
                    }
                });
            }
        });
    });
</script>
