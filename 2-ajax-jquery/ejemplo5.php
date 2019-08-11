<html>
<head>
<title>Predator/Prey Example</title>
</head>
    <script type="text/javascript" src="jquery.min.js" ></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#predator").click(function(){
                $("#response").load("predator_prey.php?type=predator");
            });
            $("#prey").click(function(){
                $("#response").load("predator_prey.php?type=prey");
            });
        });
    </script>
<body>
<button id="predator">Predator</button>
<button id="prey">Prey</button>
<p><strong>Ajax response from PHP:</strong></p>
<div id="response">&nbsp;</div>
</body>
</html>