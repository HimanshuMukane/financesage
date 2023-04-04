<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blogs</title>
    <link rel="stylesheet" href="css/blog.css" />

    <style>          
        .simple-pagination ul {
            margin: 12vh 0 4vh 0;
            bottom: 0;
            padding: 0;
            list-style: none;
            text-align: center;
        }

        .simple-pagination li {
            display: inline-block;
            margin-right: 5px;
        }

        .simple-pagination li a,
        .simple-pagination li span {
            color: var(--message-self-color);
            padding: 5px 10px;
            text-decoration: none;
            border: 1px solid #EEE;
            background-color: var(--sidenavbar-color);
        }

        .simple-pagination .current {
            color: var(--text-color);
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .simple-pagination .prev.current,
        .simple-pagination .next.current {
            background: var(--primary-color);
        }
    </style>
</head>

<body style="background-color: #171717;">
    <div class="kaypan"><div class="pagecontain">
        <?php
require 'classes/db1.php';
        $result = mysqli_query($con, "SELECT * FROM events");
                if (mysqli_num_rows($result) > 0) {
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        include 'events.php';
                        $i++;
                    }
                }
            ?>
        <!-- <a class="btn btn-default" href="index.php">
            <span class="glyphicon glyphicon-circle-arrow-left"></span>
            Back
        </a> -->
    </div>
    <div id="pagination-pagecontain"></div>
            </div>
    
    
    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.js'></script>
    <script id="rendered-js">
        // jQuery Plugin: http://flaviusmatis.github.io/simplePagination.js/

        var items = $(".pagecontain .card");
        var numItems = items.length;
        var perPage = 6;

        items.slice(perPage).hide();

        $('#pagination-pagecontain').pagination({
            items: numItems,
            itemsOnPage: perPage,
            prevText: "&laquo;",
            nextText: "&raquo;",
            onPageClick: function (pageNumber) {
                var showFrom = perPage * (pageNumber - 1);
                var showTo = showFrom + perPage;
                items.hide().slice(showFrom, showTo).show();
            }
        });
    </script>
</body>

</html>