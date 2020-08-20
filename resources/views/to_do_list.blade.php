<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('/assets/css/to_do_list.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div id="myDIV" class="header">
                    <h2 style="margin:5px">My To Do List</h2>
                    <input type="text" id="myInput" placeholder="Title...">
                    <span onclick="newElement()" class="addBtn">Add</span>
                </div>
                <ul id="myUL">
                    <li>Hit the gym</li>
                    <li class="checked">Pay bills</li>
                    <li>Meet George</li>
                    <li>Buy eggs</li>
                    <li>Read a book</li>
                    <li>Organize office</li>
                </ul>
            </div>
        </div>
        
        <!-- added scripts -->
        <script src="{{ asset('/assets/js/to_do_list.js') }}"></script>
    </body>
</html>
