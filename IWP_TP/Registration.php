<!DOCTYPE>
<html>
	<head>
		<title>
			Prelim Exam IWP
		</title>
		<script src="files/the.js"></script>
        <style>
            *{
                font-family: Century Gothic;
                font-size: 24px;
            }
            body{
                background-color: #701070;
            }

            .form_frame{
                background-color:#fff;
                border: solid 4px #000;	
                border-radius: 40px;
                padding: 2.5%;
                width: 60%;
                margin: auto;
            }

                #header h2{
                    font-size: 34px;
                    text-align:center;
                    padding:35px 0px;
                }

                input{
                    font-size:20px;	
                    padding: 5px 10px;
                    margin:4px 0px;
                    border-radius: 5px;
                }
                
                
                #head {
                    margin:0 150px;
                    text-align:center;
                }

                    #head img{
                        display:hidden;
                    }
                
                .bar{
                    margin:20px;
                    padding:10px;
                }
                    #bar{
                        width: 80%;
                        border: 2px solid black;
                        background-color:black;
                        margin:auto;
                    }

                [class*="field_"]{
                    margin: 50px 20px 80px;
                }

                    #lName{
                        width: 30%;
                    } 
                    #fName, #eMail{
                        width: 69%;
                    }
                    #mName,#month{
                        width: 25%;
                    }

                    #mobNo{
                        width: 40%;
                    }
                    #age, #day{
                        width:15%;
                    }
                    #height, #weight{
                        width:10%;
                    }
                    
                    #year{
                        width:20%;
                    }
                    #natl, #rlg{
                        width: 30%;
                    }
                    #address, #pob, #lng{
                        width: 100%;
                        height: 40px;
                    }
                    #momName, #dadName{
                        width: 100%;
                    }

                    .field_3 input[type=number]{
                        text-align:right;
                    }

                #btn{
                    padding: 0 5% 0% 25%;
                }
                    #submit, #update, #delete, #clear{
                        padding:10px 20px;
                        border-radius: 15px;
                        margin:auto;
                        background-color: #ddf;
                    }

                .field_4{
                    background-color: #ededed;
                    padding: 10px;
                }

                    table{
                        border-radius: 2px;
                    }
                    table, td, th{
                        border: 2px black solid;
                    }
        </style>
	</head>
	
	<body>
        <div class=form_frame id=frame>
            <div id=header>
                <h2> Registration </h2>
            </div>
            <form method="POST">
                <div class=form_field id=field>
                    
                    <div id=head>
                        <h3 id="fullName">
                            <?php 

                                $user='root';
                                $pass='';
                                $database='db_registration';
                                $servername="localhost";
                                $mysqli=new mysqli($servername, $user, $pass, $database);

                                if($mysqli->connect_error){
                                    die('Connect Error ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
                                }

                                $sql = "SELECT * from tbl_info";
                                $result = $mysqli->query($sql);
                                $mysqli -> close();

        /*                                

                                if(isset($_POST['submit'])){
                                    $fn = $_POST['fName'];
                                    $mn = $_POST['mName'];
                                    $ln = $_POST['lName'];

                                    $name = $ln . ", " . $fn . " " . $mn;

                                    $bd_day = $_POST['day'];
                                    $bd_mon = $_POST['month'];
                                    $bd_yr = $_POST['year'];
                                    $bday = $bd_day . $bd_mon . $bd_yr;
                                
                                    echo $name;
                                }
        
        */

                            ?>
                            
                            <?php                                
                                $sql = "INSERT INTO tbl_info() VALUES ()";
                                $result = $mysqli->query($sql);
                                $mysqli -> close();
                            ?>
                        </h3>
                        <img id="dp" >  
                    </div>
                    <div class=bar>
                        <div id=bar></div>
                    </div>
                    
                    <div class=field_1>
                        <input type=text name=lName class=tf id=lName placeholder="Last Name">
                        <input type=text name=fName class=tf id=fName  placeholder="First Name" >
                        <input type=text name=mName class=tf id=mName  placeholder="Middle Name">
                        <br>
                        <input type=text name=eMail class=tf id=eMail  placeholder=Email>
                        <input type=number name=mobNo class=tf id=mobNo  placeholder="Mobile Number">						
                    </div>			
                    
                    <div class=field_2>
                        <p>Gender: </p>
                            <label><input type=radio name=rd_gen class=rd id=rd_Male value="Male">
                            Male</label>	
                            <label><input type=radio name=rd_gen class=rd id=rd_Female value="Female"> Female</label>
                            
                        <p>Age: 
                            <select name=age class=dd id=age>
                                <option value="0">Age</option>
                                <option value="31">31</option>
                                <option value="30">30</option>
                                <option value="29">29</option>
                                <option value="28">28</option>
                                <option value="27">27</option>
                                <option value="26">26</option>
                                <option value="25">25</option>
                                <option value="24">24</option>
                                <option value="23">23</option>
                                <option value="22">22</option>
                                <option value="21">21</option>
                                <option value="20">20</option>
                                <option value="19">19</option>
                                <option value="18">18</option>
                                <option value="17">17</option>
                                <option value="16">16</option>
                                <option value="15">15</option>								
                                <option value="14">14</option>
                                <option value="13">13</option>
                                <option value="12">12</option>
                            </select>
                        </p>
                        <p>Birthday:
                            <select name=day class=dd id=day>
                                <option value="0">Day</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            
                            <select name=month class=dd id=month>
                                <option value="0">Month</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        
                            <select name=year class=dd id=year>								
                                <option value="0">Year</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                            </select>
                        </p>	
                        <p>Address:</p>
                            <input type=text name=address class=tf id=address>
                        <p>Place of Birth:</p>
                            <input type=text name=pob class=tf id=pob>
                    </div>	
                    
                    <div class=field_3>
                        <p>Nationality:
                            <input type=text name=natl class=tf id=natl>
                        </p>
                        <p>Civil Status: 
                            <label><input type=radio name=rd_cs class=rd id=rd_Single value="Single">
                            Single</label>
                            <label><input type=radio name=rd_cs class=rd id=rd_Married value="Married">
                            Married</label>
                            <label><input type=radio name=rd_cs class=rd id=rd_Widow value="Widow">
                            Widow</label>
                        </p>
                        <p>Height:
                            <input type=number name=height class=tf id=height min="0.01" step="0.01"> cm
                        </p>
                        <p>Weight:
                            <input type=number name=weight class=tf id=weight min="0.01" step="0.01"> kg
                        </p>
                        <p>Language/s Spoken:</p>
                            <input type=text name=lng class=tf id=lng>
                        
                        <p>Religion:
                            <input type=text name=rlg class=tf id=rlg>
                        </p>
                        <p> Mother's Name: </p>
                            <input type=text name=momName class=tf id=momName>		
                        <p> Father's Name: </p>
                            <input type=text name=dadName class=tf id=dadName>		
                    </div>	
                    <div id="btn">
                        <button id=submit name="submit" onclick=disp()>Submit	</button>
                        <button id=update name="update">Update	</button>
                        <button id=delete name="delete">Delete	</button>
                        <button id=clear name="clear">Clear	</button>
                    </div>                   
                </div>
		    </form>
        </div>
        <div class=field_4>
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Day</th>
                                <th>Month</th>
                                <th>Year</th>
                                <th>Address</th>
                                <th>Place of Birth</th>
                                <th>Nationality</th>
                                <th>Civil Status</th>
                                <th>Language</th>
                                <th>Religion</th>
                                <th>Height</th>
                                <th>Weight</th>
                                <th>Mother's Name</th>
                                <th>Father's Name</th>
                            </tr>
                            <?php
                                while($row = $result->fetch_assoc())
                                {
                            ?>
                                    <tr>
                                        <td> <?php echo $row['ID']?> </td>
                                        <td> <?php echo $row['LName']?> </td>
                                        <td> <?php echo $row['FName']?> </td>
                                        <td> <?php echo $row['MName']?> </td>
                                        <td> <?php echo $row['Email']?> </td>
                                        <td> <?php echo $row['MobNo']?> </td>
                                        <td> <?php echo $row['Gender']?> </td>
                                        <td> <?php echo $row['Age']?> </td>
                                        <td> <?php echo $row['Day']?> </td>
                                        <td> <?php echo $row['Month']?> </td>
                                        <td> <?php echo $row['Year']?> </td>
                                        <td> <?php echo $row['Address']?> </td>
                                        <td> <?php echo $row['PoBirth']?> </td>
                                        <td> <?php echo $row['Natl']?> </td>
                                        <td> <?php echo $row['CivStat']?> </td>
                                        <td> <?php echo $row['Lng']?> </td>
                                        <td> <?php echo $row['Rlg']?> </td>
                                        <td> <?php echo $row['Ht']?> </td>
                                        <td> <?php echo $row['Wt']?> </td>
                                        <td> <?php echo $row['MomName']?> </td>
                                        <td> <?php echo $row['DadName']?> </td>
                                    </tr>
                            <?php
                                }
                            ?>
                        </table>
                    </div>
	</body>

</html>