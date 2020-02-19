<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php require_once("include/library.php"); ?>
    <style>
        .contain-header {
            text-align:center;
            width: 15%;
            float:left;
            clear: right;
            border: 2px solid black;
            /*margin-left:1%;*/
            /*margin-right:2%;*/
            /*margin-top:1%;*/
            margin: 1% 2% 1% 0%;
            border-radius: 5px;
        }
        .contain-detail {
            text-align:center;
            width: 50%;
            float:left;
            clear: right;
            border: 2px solid black;
            /*margin-left:1%;*/
            margin-right:1%;
            border-radius: 5px;
        }
        #sortable1, #sortable2 { 
            list-style-type: none; 
            margin: 0 5% 5% 5%; 
            padding: 0; 
            border: 1px solid red;
        }
        #sortable1 li, #sortable2 li { 
            /*margin: top right bottom left */
            margin: 5%;            
            /*padding: 0.4em;*/
            /*padding: 0;*/
            /*padding-left: 0em;*/
            /*font-size: 1em;*/
            /*height: 25px; */
            /*height: 3em;*/
            border: 1px solid green;
        }
        #sortable1 li span, #sortable2 li span { 
            position: absolute; 
            margin-left: -1.3em;
        }
        #sortable1 li:hover, #sortable2 li:hover {
            cursor: pointer;
        }
        #sortable1 li.ui-sortable-helper, #sortable2 li.ui-sortable-helper {
            cursor: move;
        }
    </style>

    <script>
        $( function() {
            $( "#sortable1, #sortable2" ).sortable({
                opacity: '0.5',
                items: 'li[data-value="typeA"]',
                //connectWith: '#sortable1, #sortable2'
                connectWith: 'ul[data-value="connect"]'
            });
            //$( "#sortable1 ,#sortable2" ).disableSelection();
        } );
    </script>
</head>

<body>
    <div class="container">
        <br>
        <!-- Begin Static navbar -->
        <?php require_once("include/submenu_navbar.php"); ?>
        <!-- End Static navbar -->

        <!-- Begin content page-->                    
        <div class="row">
            <div class="col-lg-12" style='border:1px solid silver;'>
                <p></p>
                <h1>-- Approve QC Page --</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12" style='border:1px solid silver;'>
                <div class='contain-header'>
                    <h1>Col1</h1>
                    <ul id="sortable1" data-value='connect'>
                        <li class="ui-state-default" data-value='typeA'>Item 1</li>
                        <li class="ui-state-default" data-value='typeA'>Item 2</li>
                        <li class="ui-state-default" data-value='typeA'>Item 3</li>
                        <li class="ui-state-default" data-value='typeA'>Item 4</li>
                        <li class="ui-state-default" data-value='typeA'>Item 5</li>
                        <li data-value='typeB'>Item 6</li>
                        <li data-value='typeB'>Item 7</li>
                    </ul>
                </div>
                <div class='contain-header'>
                    <h1>Col2</h1>
                    <ul id="sortable2" data-value='connect'>
                        <li class="ui-state-highlight" data-value='typeA'>Item 1</li>
                        <li class="ui-state-highlight" data-value='typeA'>Item 2</li>
                        <li class="ui-state-highlight" data-value='typeA'>Item 3</li>
                        <li class="ui-state-highlight" data-value='typeA'>Item 4</li>
                        <li class="ui-state-highlight" data-value='typeA'>Item 5</li>
                        <li class="ui-state-highlight" data-value='typeA'>Item 6</li>
                        <li class="ui-state-highlight" data-value='typeA'>Item 7</li>
                    </ul>
                </div>
                <div class='contain-detail'>
                    <h1>Col3</h1>
                    <ul>
                        <li>Detail</li>
                    </ul>
                </div>
            </div>            
        </div>
    </div>
</body>
</html>