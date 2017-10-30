<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <title>FIND ID/PW</title>
</head>
<body>

<div>
    <div class="w3-container w3-display-middle" id="loginform">
        <img class="w3-center" src="../public/img/ManageIT.jpg" alt="Logo" style="width: 250px;">
        <form action="#" class=" w3-panel w3-padding-32 w3-card-4 w3-light-grey">
            <h1>FIND ID/PASSWORD</h1>
            <div class="w3-container">
            <div class="w3-bar w3-black">
                <button class="w3-bar-item w3-button tablink w3-red" onclick="openTab()(event,'ID')">USERNAME</button>
                <button class="w3-bar-item w3-button tablink" onclick="openTab(event,'PW')">PASSWORD</button>

            </div>

                <div id="ID" class="w3-container w3-border tab">
                    <label class="w3-padding-32"><b>Username</b></label>
                    <input class="w3-input " type="text">
                    <button class="w3-button w3-gray w3-section" style="width:100%">Send email</button>

                </div>

                <div id="PW" class="w3-container w3-border tab" style="display:none">
                    <label class="w3-padding-32"><b>Username</b></label>
                    <input class="w3-input " type="text">

                    <label><b>Password</b></label>
                    <input class="w3-input" type="text">
                    <button class="w3-button w3-gray w3-section" style="width:100%">Send email</button>
                </div>
            </div>
        </form>

    </div>

</div>

<script>
    function openTab(evt, tabName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("tab");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " w3-red";
    }
</script>
</body>



</html>