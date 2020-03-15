<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>plan</title>
    <style>
        body {
            background-color: orange;
        }

        @media print {
            .noprint {
                display: none;
            }

            table {
                display: block;
            }
        }

        .list-group-item {
            margin-bottom: 20px;
            text-align: center;
            border-radius: 50px;
            font-family: cursive;
            font-size: 30px;
            font-style: italic;
            transition-duration: 0.4s;
        }

        .list-group-item:hover {
            background-color: white;
            color: aqua;
        }

        .list-group-item:focus {
            background-color: aqua;
            color: orange;
        }

        .container {
            border-radius: 8px;
        }


        #one {
            display: block;
        }

        .fixed {
            position: fixed;
            bottom: 0;
            right: 10;
            width: 300px;
            border: 3px;
        }

        h1 {
            color: black;
            font-family: default;
            text-align: center;
            font-size: 40px;
        }

        .main {
            top: 0px;
            left: 500px;
            bottom: 1000px;

        }

    </style>
</head>

<body>
    <div class="noprint">
        <image src="anits.jpg" height=250px width=100%> </image>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3" style="  height: 500px;">
                    <div class="list-group" style="margin-top: 50px;">
                        <div style="margin-bottom:   10px;"></div>
                        <button class="list-group-item list-group-item-action" onclick="seatingplan();">Seating Plan</button>
                        <button class="list-group-item list-group-item-action" onclick="Question();">Question</button>
                        <button class="list-group-item list-group-item-action" onclick="rulesandregulations();">Rules & Regulations</button>
                        <button class="list-group-item list-group-item-action" onclick="feedback();">Feedback</button>


                        <div style="margin-top: 10px;"></div>
                    </div>
                </div>
                <div class="col-md-9" style="height: 100%; padding: 100px;border-radius:8px;">
                    <div class="container" style="background-color: #f3f3f3;">
                        <div id="one">
                            <h1>Rules and Regulations</h1>
                            <h5>
                                <ol start="1">
                                    <li>
                                        Students will not allowed in the examination hall after grace period
                                    </li>
                                    <li>Students should carry identity card and hall ticket issued by the institute </li>
                                    <li>Students should
                                        sit according to seating plan </li>
                                    <li>
                                        Students shall not leave the examination room temporarily during the period of the examination.
                                        A student who leaves the examination hall before the expiration of examination must surrender
                                        his/her answer script to the instructor/invigilator otherwise will be considered as cheating.
                                    </li>
                                    <li>The use of mobile phones is not permitted in the examination hall and students must switch off
                                        their mobile phones before entering the examination hall.</li>
                                    <li>Students are not allowed to keep books, papers or other aids </li>

                                </ol>
                            </h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
