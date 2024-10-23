<?php
class Editor
{
    public function render()
    {
        ?>
        <div class="editor-container">
            <form method="post" action="">
                <button type="button" onclick="execCommandWithArg('bold')">Bold</button>
                <button type="button" onclick="execCommandWithArg('italic')">Italic</button>
                <button type="button" onclick="execCommandWithArg('underline')">Underline</button>
                <select id="fontSizeSelect" onchange="execCommandWithArg('fontSize', this.value)">
                    <option value="1">Small</option>
                    <option value="3">Normal</option>
                    <option value="5">Large</option>
                </select>
                <button type="button" onclick="execCommandWithArg('insertOrderedList')">Numbered List</button>
                <button type="button" onclick="givePoints()">Give Points</button>
                <input type="file" id="uploadBtn" onchange="handleFileUpload()">
                <div id="editor" contenteditable="true"></div>
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

            function givePoints() {
                const points = prompt('Enter points:');
                if (points !== null && points !== '') {
                    const span = document.createElement('span');
                    span.innerText = `(${points} points) `;
                    document.execCommand('insertHTML', false, span.outerHTML);
                }
            }

            document.querySelector('form').addEventListener('submit', function () {
                const content = document.getElementById('editor').innerHTML;
                document.getElementById('editorContent').value = content;
            });
        </script>
        <?php
    }
}
?>
