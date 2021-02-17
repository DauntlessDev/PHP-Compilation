<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Student Registration Form</title>
    <!-- Mobile Specific Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/opensans-font.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"
    />
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
          <?php 
          
          //General Strings
          $developerfooter = "DauntlessDev &copy; 2021";
          $section1= "Enrollment Information";
          $section2 = "Student Information";
          $section3 = "School Information";
          $section4 = "Health Information";
          $section5 = "Citizenship Information";
          $yes = "Yes";
          $yes = "No";


          //Header Instrcutions
          $instruction1 = "Please enter your information and proceed to the next step
          so we can process it.";
          $instruction2 = "Please enter your student information and proceed to the next step.";
          $instruction3 = "Please enter the infomation of your previous school and
          proceed to the next step.";
          $instruction4 = "Please answer concerns related to your health and proceed to the last step.";
          $instruction5 = "Please enter the required information and you are done.";



          //Enrollment Information Variables
          $permission = "AI.";
          $stud_num = 2018125222;
          $month = "Jan";
          $day = "11";
          $year = "2018";
          $entrydate = "11/11/20";
          $entrytype = "A";
          $grade = "3rd Year";
          $oen = 94324249;

          //Student Information Variables
          $legal_lastname = "Leuterio";
          $legal_firsttname= "Rom Braveheart";
          $legal_middlename= "Palenzuela";
          $preferred_name = "Brave Leuterio";
          $siblings = "Romarie Leuterio";
          $proof_of_birth = "Birth Certificate";
          $birthmonth = "Feb";
          $birthday = "05";
          $birthyear = "1990";

          //Previous School Information Variables
          $school_board = "Chamachile";
          $school_name = "Claremont ";
          $reason = "Shorter Travel";
          $date_attended = "3/3/2017";
          $school_grade = "2nd Year";
          $languange = "English, Filipino";
          $yes_schools = "NA";
          
          //Health Information Variables
          $medical_conditions = "Asthma";

          //Citizenship Information Variables
          $birth_country = "Philippines";
          $citizenship_country = "Philippines";
          $province = "NA";
          $live_month = "11";
          $live_day= "11";
          $live_year = "2022";
          $status = "Single";

        ?>

    <footer>DauntlessDev &copy; 2021</footer>
    <div class="page-content">
      <div class="form-v1-content">
        <div class="wizard-form">
          <form class="form-register" action="#" method="post">
            <div id="form-total">
              <!-- SECTION 1 -->
              <h2>
                <p class="step-icon"><span>01</span></p>
                <span class="step-text">Enrollment Information</span>
              </h2>
              <section>
                <div class="inner">
                  <div class="wizard-header">
                    <h3 class="heading">Enrollment Information</h3>
                    <p>
                      Please enter your information and proceed to the next step
                      so we can process it.
                    </p>
                  </div>
                  <div class="form-row form-row-date">
                    <div class="form-holder form-holder-2">
                      <legend>Date:</legend>
                      <select name="month" id="month">
                        <!-- <option value="MM" disabled selected>MM</option> -->
                        <option value="15" selected><?php 
                          $format = "%s";
                          echo sprintf($format, $month); 
                        ?></option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                      </select>
                      <select name="date" id="date">
                        <!-- <option value="DD" disabled selected>DD</option> -->
                        <option value="Jan" selected><?php 
                          $format = "%s";
                          echo sprintf($format, $day); 
                        ?></option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                      </select>
                      <select name="year" id="year">
                        <!-- <option value="YYYY" disabled selected>YYYY</option> -->
                        <option value="2018" selected><?php 
                          $format = "%s";
                          echo sprintf($format, $year); 
                        ?></option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-holder form-holder-2">
                      <fieldset>
                        <legend>Permission to Register</legend>
                        <input
                          type="text"
                          class="form-control"
                          placeholder=" Admin Initials"
                          value="<?php 
                          $format = "%s";
                          echo sprintf($format, $permission); 
                          ?>"
                          required
                        />
                      </fieldset>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-holder form-holder-2">
                      <fieldset>
                        <legend>Student Number</legend>
                        <input
                          type="text"
                          class="form-control"
                          placeholder=" 201******"
                          value="<?php echo strval($stud_num); ?>"
                          required
                        />
                      </fieldset>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-holder">
                      <fieldset>
                        <legend>Entry Date</legend>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Entry Date"
                          value="<?php echo $entrydate; ?>"
                          required
                        />
                      </fieldset>
                    </div>
                    <div class="form-holder">
                      <fieldset>
                        <legend>Entry Type</legend>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Entry Type"
                          value="<?php echo $entrytype; ?>"
                          required
                        />
                      </fieldset>
                    </div>

                    <div class="form-holder">
                      <fieldset>
                        <legend>Grade</legend>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Grade"
                          value="<?php echo $grade; ?>"
                          required
                        />
                      </fieldset>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-holder form-holder-2">
                      <legend>OEN</legend>
                      <input
                        type="text"
                        class="form-control input-border"
                        placeholder="OEN"
                          value="<?php echo strval($oen); ?>"
                        required
                      />
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="checkfield">
                      <label for="esl">
                        <input type="checkbox" checked/>ESL
                        <span class="checkmark"></span>
                      </label>

                      <label for="esl">
                        <input type="checkbox" />SPED
                        <span class="checkmark"></span>
                      </label>
                      <label for="esl">
                        <input type="checkbox" />IPRSC
                        <span class="checkmark"></span>
                      </label>
                      <label for="esl">
                        <input type="checkbox" />ISA
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </section>
              <!-- SECTION 2 -->
              <h2>
                <p class="step-icon"><span>02</span></p>
                <span class="step-text">Student Information</span>
              </h2>
              <section>
                <div class="inner">
                  <div class="wizard-header">
                    <h3 class="heading">Student Information</h3>
                    <p>
                      Please enter your student information and proceed to the
                      next step.
                    </p>
                  </div>
                  <div class="form-row form-row-date">
                    <div class="form-holder form-holder-2">
                      <legend>Date of Birth:</legend>
                      <select name="month" id="month">
                        <!-- <option value="MM" disabled selected>MM</option> -->
                        <option value="15" selected><?php echo $birthmonth?></option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                      </select>
                      <select name="date" id="date">
                        <!-- <option value="DD" disabled selected>DD</option> -->
                        <option value="Jan" selected><?php echo $birthday?></option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                      </select>
                      <select name="year" id="year">
                        <!-- <option value="YYYY" disabled selected>YYYY</option> -->
                        <option value="2018" selected><?php echo $birthyear?></option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-holder">
                      <fieldset>
                        <legend>Legal Last Name</legend>
                        <input
                          type="text"
                          class="form-control"
                          id="first-name"
                          name="first-name"
                          placeholder="Last Name"
                          value="<?php echo $legal_lastname; ?>"
                          required
                        />
                      </fieldset>
                    </div>
                    <div class="form-holder">
                      <fieldset>
                        <legend>Legal First Name</legend>
                        <input
                          type="text"
                          class="form-control"
                          id="last-name"
                          name="last-name"
                          placeholder="First Name"
                          value="<?php echo $legal_firsttname; ?>"
                          required
                        />
                      </fieldset>
                    </div>
                    <div class="form-holder">
                      <fieldset>
                        <legend>Legal Middle Name</legend>
                        <input
                          type="text"
                          class="form-control"
                          id="last-name"
                          name="last-name"
                          placeholder="Middle Name"
                          value="<?php echo $legal_middlename; ?>"
                          required
                        />
                      </fieldset>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-holder form-holder-2">
                      <fieldset>
                        <legend>Preferred Name (Optional)</legend>
                        <input
                          type="text"
                          class="form-control"
                          placeholder=" Preferred Full Name"
                          value="<?php echo $preferred_name; ?>"
                          required
                        />
                      </fieldset>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-holder form-holder-2">
                      <fieldset>
                        <legend>Siblings in the School (Optional)</legend>
                        <input
                          type="text"
                          placeholder="Sibling's Name"
                          value="<?php echo $siblings; ?>"
                          required
                        />
                      </fieldset>
                    </div>
                    <div class="form-holder form-holder-2">
                      <fieldset>
                        <legend>Proof of Birth (Can be more than 1)</legend>
                        <input type="text" placeholder="Document Type" 
                          value="<?php echo $proof_of_birth; ?>"/>
                      </fieldset>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="checkfield">
                      <label for="esl">
                        <input type="checkbox" checked/>Male
                        <span class="checkmark"></span>
                      </label>
                      <label for="esl">
                        <input type="checkbox" />Female
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </section>
              <!-- SECTION 3 -->
              <h2>
                <p class="step-icon"><span>03</span></p>
                <span class="step-text">School Information</span>
              </h2>
              <section>
                <div class="inner">
                  <div class="wizard-header">
                    <h3 class="heading">Previous School Information</h3>
                    <p>
                      Please enter the infomation of your previous school and
                      proceed to the next step.
                    </p>
                  </div>
                  <div class="form-row">
                    <div class="form-holder form-holder-2">
                      <fieldset>
                        <legend>Name of Previous School Board/ Municipality</legend>
                        <input
                          type="text"
                          class="form-control"
                          placeholder=" Board/ Muni"
                          value="<?php echo $school_board; ?>"
                          required
                        />
                      </fieldset>
					</div>
					<div class="form-holder form-holder-2">
						<fieldset>
						  <legend>Last date attended</legend>
						  <input
							type="text"
							class="form-control"
							placeholder="mm/d/yy"
              value="<?php echo $date_attended; ?>"
							required
						  />
						</fieldset>
					  </div>
                  </div>
                  <div class="form-row">
                    <div class="form-holder form-holder-2">
                      <fieldset>
                        <legend>Name of Previous School</legend>
                        <input
                          type="text"
                          class="form-control"
                          placeholder=" School Name"
                          value="<?php echo $school_name; ?>"
                          required
                        />
                      </fieldset>
                    </div>
					<div class="form-holder form-holder-2">
						<fieldset>
						  <legend>Grade at previous School</legend>
						  <input
							type="text"
							class="form-control"
              placeholder=" Grade"
              value="<?php echo $school_grade; ?>"
							required
						  />
						</fieldset>
					  </div>
				     </div>
                  <div class="form-row">
                    <div class="form-holder form-holder-2">
                      <fieldset>
                        <legend>Reason for Transfer</legend>
                        <input
                          type="text"
                          class="form-control"
                          placeholder=" Because ..."
                          value="<?php echo $reason; ?>"
                          required
                        />
                      </fieldset>
                    </div>
                    <div class="form-holder form-holder-2">
                      <fieldset>
                        <legend>Languange of Instruction </legend>
                        <input
                          type="text"
                          class="form-control"
                          placeholder=" English, Filipino, Etc."
                          value="<?php echo $languange; ?>"
                          required
                        />
                      </fieldset>
                    </div>
                  </div>
				  <div class="form-row">
                    <div class="checkfield">
						<p class="last-question">Did the student ever attend Waterloo Region Disctrict School Board school in the past? If yes, please list schools.</p>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="checkfield">
                      <label for="esl">
                        <input type="checkbox" />Yes
                        <span class="checkmark"></span>
                      </label>
                      <label for="esl">
                        <input type="checkbox" checked/>No
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-holder form-holder-2">
                      <fieldset>
                        <legend>School(s) </legend>
                        <input
                          type="text"
                          class="form-control"
                          placeholder=" "
                          value="<?php echo $yes_schools; ?>"
                          required
                        />
                      </fieldset>
                    </div>
				  </div> 
                </div>
			  </section>
			  
              <!-- SECTION 4 -->
              <h2>
                <p class="step-icon"><span>04</span></p>
                <span class="step-text">Health Information</span>
              </h2>
              <section>
                <div class="inner">
                  <div class="wizard-header">
                    <h3 class="heading">Health Information</h3>
                    <p>
                      Please answer concerns related to your health and proceed to the last step.
                    </p>
                  </div>
				  <div class="form-row"><div class="added-padding"> </div></div>
                  <div class="form-row">
                    <div class="form-holder form-holder-2">
                      <fieldset>
                        <legend>Medical Conditions(Optional)</legend>
                        <input
                          type="text"
                          class="form-control"
                          placeholder=" "
                          value="<?php echo $medical_conditions; ?>"
                          required
                        />
                      </fieldset>
                    </div>
				  </div> 
				  <div class="form-row">
                    <div class="checkfield">Immunization Record Provided</p>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="checkfield">
                      <label for="esl">
                        <input type="checkbox" />Yes
                        <span class="checkmark"></span>
                      </label>
                      <label for="esl">
                        <input type="checkbox" checked/>No
                        <span class="checkmark"></span>
                      </label>
                    </div>
				  </div> 
				  <div class="form-row"><div class="added-small-padding"> </div></div>
				  <div class="form-row">
                    <div class="checkfield">Does the student require an epi-pen?</p>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="checkfield">
                      <label for="esl">
                        <input type="checkbox" />Yes
                        <span class="checkmark"></span>
                      </label>
                      <label for="esl">
                        <input type="checkbox" checked/>No
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
				  <div class="form-row"><div class="added-padding"> </div></div>
                </div>
              </section>
              <!-- SECTION 5 -->
              <h2>
                <p class="step-icon"><span>05</span></p>
                <span class="step-text">Citizenship Information</span>
              </h2>
              <section>
                <div class="inner">
                  <div class="wizard-header">
                    <h3 class="heading">Citizenship Information</h3>
                    <p>
                      Please enter the required information and you are done.
                    </p>
		          		  </div>
			          	  <div class="form-row">
                    <div class="form-holder form-holder-2">
                      <fieldset>
                        <legend>Birth Country</legend>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Country Name"
                          value="<?php echo $birth_country; ?>"
                          required
                        />
                      </fieldset>
                    </div>
                    <div class="form-holder form-holder-2">
                      <fieldset>
                        <legend>If Canada, Province of Birth </legend>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Province Name"
                          value="<?php echo $province; ?>"
                          required
                        />
                      </fieldset>
                    </div>
				          </div>   
			             <div class="form-row">
                    <div class="form-holder form-holder-2">
                      <fieldset>
                        <legend>Country of Cizitenship</legend>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Country Name"
                          value="<?php echo $citizenship_country; ?>"
                          required
                        />
                      </fieldset>
                    </div>
				          </div> 
				  
                  <div class="form-row form-row-date">
                    <div class="form-holder form-holder-2">
                      <p> If student is not born in Canada, provide the date when the student entered Canada to live for the first time:</p>
                      <select name="month" id="month">
                      <!-- <option value="MM" disabled selected>MM</option> -->
                      <option value="15" selected><?php echo $live_month?></option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                      </select>
                      <select name="date" id="date">
                        <!-- <option value="DD" disabled selected>DD</option> -->
                        <option value="Jan" selected><?php echo $live_day?></option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                      </select>
                      <select name="year" id="year">
                        <!-- <option value="YYYY" disabled selected>YYYY</option> -->
                        <option value="2018" selected><?php echo $live_year?></option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                      </select>
                    </div>
                  </div>
				  
				           <div class="form-row">
                    <div class="form-holder form-holder-2">
                      <fieldset>
                        <legend>Status in Canada (For School)</legend>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Current Status"
                          value="<?php echo $status; ?>"
                          required
                        />
                      </fieldset>
                    </div>
				         </div> 
                </div>
              </section>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.steps.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
