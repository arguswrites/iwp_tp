<!DOCTYPE>
<html>
	<head>
		<title>
			Prelim Exam IWP
		</title>
		<link rel="stylesheet" href="files/the.css">
		<script src="files/the.js"></script>
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
                                if(isset($_POST['submit'])){
                                    $fn = $_POST['fName'];
                                    $mn = $_POST['mName'];
                                    $ln = $_POST['lName'];

                                    $name = $ln . ", " . $fn . " " . $mn;

                                    $bd_day = $_POST['day'];
                                    $bd_mon = $_POST['month'];
                                    $bd_yr = $_POST['year'];
                                    $bday = $bd_day . $bd_mon . $bd_yr;

                                    print "";
                                
                                    echo $name;
                                }
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
                    </div>
                </div>
		    </form>
        </div>
	</body>

</html>