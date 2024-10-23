<?php
class Editor
{
    public function render()
    {
        ?>
        <div>
            <form method="post" action="">
            
                <button type="button" class="btn btn-info" onclick="execCommandWithArg('bold')">Bold</button>
                <button type="button" class="btn btn-primary" onclick="execCommandWithArg('italic')">Italic</button>
                <button type="button" class="btn btn-secondary" onclick="execCommandWithArg('underline')">Underline</button>
                <select id="fontSizeSelect" onchange="execCommandWithArg('fontSize', this.value)">
                    <option value="1">Small</option>
                    <option value="3">Normal</option>
                    <option value="5">Large</option>
                </select>
                <button type="button" class="btn btn-success" onclick="execCommandWithArg('insertOrderedList')">Numbered List</button>
                <!-- <button type="button" onclick="insertBulletPoint()">Bullet Point</button> -->
                <!-- <input type="file" id="uploadBtn" onchange="handleFileUpload()"> -->
                <div id="editor" class="mt-3" contenteditable="true">
                </div>
                <div class="form-text mt-2 mb-5" style="font-size: 15px;">Description should have minimum 200 words.</div>
                <input type="hidden" name="editor_content" id="editorContent">

                <button type="submit">Save</button>
            </form>
        </div>

        <script>
            function execCommandWithArg(command, arg) {
                document.execCommand(command, false, arg);
            }

            function handleFileUpload() {
                const fileInput = document.getElementById('uploadBtn');
                const file = fileInput.files[0];

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        document.getElementById('editor').appendChild(img);
                    };
                    reader.readAsDataURL(file);
                }
            }

            function insertBulletPoint() {
                const selectedText = getSelectedText();
                if (selectedText) {
                    // Wrap the selected text with a list item
                    const listItem = document.createElement('li');
                    listItem.innerText = selectedText;

                    // Replace the selected text with the list item
                    document.execCommand('insertHTML', false, listItem.outerHTML);
                }
            }

            function getSelectedText() {
                let selectedText = '';
                if (window.getSelection) {
                    selectedText = window.getSelection().toString();
                } else if (document.selection && document.selection.type !== 'Control') {
                    selectedText = document.selection.createRange().text;
                }
                return selectedText.trim();
            }

            document.querySelector('form').addEventListener('submit', function () {
                const contentt = document.getElementById('editor').innerHTML;
                document.getElementById('editorContent').value = content;
            });
        </script>
        <?php
    }
}
?>
