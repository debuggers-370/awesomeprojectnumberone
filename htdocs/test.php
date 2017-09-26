
<div><div style="color:#FF6600;">
        <HTML>
        <HEAD>
            <TITLE>Emory Math/CS Planner</TITLE>
        </HEAD>
        <div style="text-align: center;"><IMG SRC = "footerlogo2.png" style="width:250px;height:250px;"></div>
        <BODY>
        <div><HR data-brackets-id='2149'>
            <H1 data-brackets-id='2150'><span data-brackets-id='2151'
                                              style="color: #FFFFFF; ">Tell us about your academic career</span></H1>
            <H3 data-brackets-id='2152'><span data-brackets-id='2153' style="color:#FFFFFF; ">We'll use the information provided to suggest courses to fulfill your remaining requirements.</span></H3>
            <HR data-brackets-id='2154'>
        </div>
        <div style="color:#ffffff;">
            <form method="post" id = "acadinfo" action= "<?php echo $pg ?>">
                <h2><label>Major(s)/Minor - Select up to 2 majors, or a major and a minor</label></h2>
                <?php foreach ($majors as $row): ?>
                <br> <input type="checkbox" name="majors[]" value='<?=$row['planID']?>'<b><?=$row['planName']?><br/>
                    <?php endforeach ?>
                    <br/>
                    <HR data-brackets-id='2000'>
                    <h2><label>Which of the following courses have you completed (or anticipate completing)?</label></h2>
                    <?php foreach ($courses as $row): ?>
                        <br> <input type="checkbox" name="course[]" value='<?=$row['cID']?>'<br><?=$row['cID']?><br/>
                    <?php endforeach ?>

                    <HR data-brackets-id='2141'>
                    <div style="color:#ffffff;" >
                        <label>Current Semester:</label>
                        <select name = "sem" >
                            <option value="F">Fall</option>
                            <option value="S">Spring</option>
                        </select>
                        <HR data-brackets-id='2142'>
                        <label>Current Year:</label>
                        <select name = "cYear">
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                        </select>
                        <HR data-brackets-id='2143'>
                        <label>Desired Graduation Date (must be after Current Semester and Year):</label>
                        <input placeholder="Date (MM/DD/YYYY)" class="form-control input-lg" type="text" onfocus="(this.type='date')"
                               id="date-input" value="<?=$_POST['date']?>" >
                        <HR data-brackets-id='2144'>
                    </div>
                    <input type = 'submit' name = "submitForm" class='buttons'>
            </form>
            <?php
            mysqli_close($dbcon); //end connection after retrieving data
            ?>
        </HTML>

        <BODY BGCOLOR="00304C">