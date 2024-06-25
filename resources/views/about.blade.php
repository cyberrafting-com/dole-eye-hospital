@php($title = "About Dr. Kuldeep Suhas Dole | Expert Pune Eye Specialist")  
@section('meta_desc')Discover the background and expertise of Dr. Kuldeep Suhas Dole, an acclaimed Pune eye specialist. Learn about his qualifications and commitment to eye care. @endsection

@extends('layouts.default')      
@section('content')

   
<!-- banner design -->
<div class="tm-breadcrumb-area tm-padding-section tm-padding-section-banner bg-grey" data-bgimage="{{ asset('/resources/assets/img/breadcrumb-bg.jpg')}}">
    <div class="container">
        <div class="tm-breadcrumb">
            <h2>Dole Eye Clinic</h2>
            <ul>
                <li><a href="{{ route('home')}}">Home</a></li>
                <li>About</li>
            </ul>
        </div>
    </div>
</div>

<!-- about 2 -->
<section class="about-one mt-5">
	<div class="about-one_pattern mt-5">
		<div class="container">
			<div class="row clearfix">				
				<!-- Image Column -->
				<div class="about-one_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-one_image-inner-column">
						<div class="about-one_image">
							<img src="{{ asset('/resources/assets/img/about-ot.jpg')}}" alt="about-ot">
						</div>
						<div class="about-one_image-two">
							<img src="{{ asset('/resources/assets/img/doctor-about-page-img.JPG')}}" alt="doctor-about-page-img">
						</div>
					</div>
				</div>				
				<!-- Content Column -->
				<div class="about-one_content-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-one_content-inner-column">
                        <div class="cat-about mt-4 mt-lg-0 mt-md-0">
                            <h1>Dr. Kuldeep Suhas Dole</h1> 
                            <h4>MBBS, M.S (Ophthalmology)</h4>
                            <h4>Ophthalmologist/ Eye Surgeon</h4>
                            <p class="pt-2">Dr. Kuldeep Suhas Dole, a highly skilled and experienced general physician, boasts over 26 years of working experience. Renowned for his exceptional medical expertise and compassionate patient care, he has devoted his career to diagnosing and treating a wide range of medical conditions while providing personalized healthcare services to his patients. Characterized by compassion and personalization, Dr. Dole patient care approach involves attentively listening to his patients' concerns and collaborating closely with them to create customized treatment plans that cater to their specific needs. Furthermore, he remains committed to advancing healthcare services and has significantly contributed to the field of medicine. Actively participating in medical conferences and workshops, Dr. Dole stays abreast of the latest advancements in medical research and technology. Additionally, he conducts research studies on various medical conditions and publishes his findings in reputable medical journals, thereby contributing to the overall knowledge of the medical community.</p>
                        </div>
			        </div>
		        </div>
				
			</div>
		</div>
    </div>
</section>

<!-- doctor record design -->
<section class="sec-doctor-info">
    <div class="container">
        <div class="row">'
            <div class="col-lg-12 col-md-12 col-12">
                <div class="cat-question panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <!-- 1st accordian -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Work Experience
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <main class="page-content">
                                    <div class="tm-section shopping-cart-area bg-white tm-padding-section">
                                        <div class="container">
                                            <div class="tm-cart-table table-responsive">
                                                <table class="table table-bordered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="tm-cart-col-image" scope="col">Name of Organization</th>
                                                            <th class="tm-cart-col-productname" scope="col">Period</th>
                                                            <th class="tm-cart-col-price" scope="col">Position Held</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                LCIF – SIGHT First Department, USA
                                                            </td>
                                                            <td>
                                                                Oct 2016 till date
                                                            </td>
                                                            <td class="tm-cart-price">
                                                                Technical Advisor – Western India
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>H.V Desai Eye Hospital, Pune, India</td>
                                                            <td>Sep 2003 till date</td>
                                                            <td>Consulting ophthalmologist Medical Director and Head of Department Lions Jehu Community ophthalmology Institute</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dole eye Clinic</td>
                                                            <td>Jan 2006 till date</td>
                                                            <td>Consulting ophthalmologist</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ORBIS, CBM, SIGHTSAVERS</td>
                                                            <td>2009 till date </td>
                                                            <td>Program and project evaluator</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sahyadri Superspeciality Hospital, Pune</td>
                                                            <td>2009 till date</td>
                                                            <td>Consulting ophthalmologistand HOD</td>
                                                        </tr>
                                                        <tr>
                                                            <td>LAICO- AEH</td>
                                                            <td>2013 till date</td>
                                                            <td>Faculty program mangers course on DR module</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Diplomate of NationalBoard</td>
                                                            <td>2009 till date</td>
                                                            <td>Post graduate teacher in ophthalmology -degree course</td>
                                                        </tr>
                                                        <tr>
                                                            <td>College of physician Surgeon</td>
                                                            <td>2009 till date </td>
                                                            <td>Post graduate teacher Diploma course</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ethics Committee , H V Desai eye Hospital</td>
                                                            <td>2010 till date</td>
                                                            <td>Member secretary</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Journal of Community EyeHealth, India Edition</td>
                                                            <td>2012-2013</td>
                                                            <td>Editor</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ICARE- LVPEI</td>
                                                            <td>2005-2009</td>
                                                            <td>Faculty diploma in Community ophthalmology- Vit A module</td>
                                                        </tr>
                                                        <tr>
                                                            <td>University of Pune Clinical research and data management course</td>
                                                            <td>2007-2010</td>
                                                            <td>Faculty</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Maharashtra University of health Sciences</td>
                                                            <td>2012-2014</td>
                                                            <td>Principal Diploma in optometry course</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Public Health Foundation of India</td>
                                                            <td>2016</td>
                                                            <td>Lead faculty certificate course – DR</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hindu Union Hospital Mwanza,Tanzania</td>
                                                            <td>20 March to 20 august 2002</td>
                                                            <td>Consulting ophthalmologist</td>
                                                        </tr>
                                                        <tr>
                                                            <td>H.V Desai Eye Hospital Pune, India.</td>
                                                            <td>May 2001 to March 2002</td>
                                                            <td>Consulting Ophthalmologist</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sassoon General Hospital Pune, India</td>
                                                            <td>Jan 1998 to Jan2001</td>
                                                            <td>Resident in ophthalmology (postgraduate Training)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Primary Health Center,Surgana Nashik India</td>
                                                            <td>April 1997 to Jan 1998</td>
                                                            <td>Class II medical officer</td>
                                                        </tr>
                                                        <tr>
                                                            <td>K.E.M Hospital Pune India</td>
                                                            <td>Jan 1997 to April 1997</td>
                                                            <td>Resident in ophthalmology</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Diamond Jubilee Hospital, Baramati</td>
                                                            <td>Jan 1996 to Jan 1997</td>
                                                            <td>Intern</td>
                                                        </tr>
                                                    </tbody> 
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd accordian -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Academic Record
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <main class="page-content">
                                    <div class="tm-section shopping-cart-area bg-white tm-padding-section">
                                        <div class="container">
                                            <div class="tm-cart-table table-responsive">
                                                <table class="table table-bordered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="tm-cart-col-image" scope="col">Course</th>
                                                            <th class="tm-cart-col-productname" scope="col">Institute</th>
                                                            <th class="tm-cart-col-price" scope="col">Unversity</th>
                                                            <th class="tm-cart-col-price" scope="col">Marks</th>
                                                            <th class="tm-cart-col-price" scope="col">Year</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Long term Medical Retina</td>
                                                            <td>HV Desai Eye Hospital, Pune India</td>
                                                            <td></td>
                                                            <td>Certificate course</td>
                                                            <td>2006</td>
                                                        </tr>
                                                        <tr>
                                                            <td>International Postgraduate Training Programmer</td>
                                                            <td>Tel Aviv Medical Center, Israel</td>
                                                            <td>Tel Aviv</td>
                                                            <td>Certificate course</td>
                                                            <td>2005</td>
                                                        </tr>
                                                        <tr>
                                                            <td>M.Sc</td>
                                                            <td>London School of Hygiene & Tropical Medicine</td>
                                                            <td>London</td>
                                                            <td>Grade B</td>
                                                            <td>2003</td>
                                                        </tr>
                                                        <tr>
                                                            <td>M.S (OPHTH)</td>
                                                            <td>B.J Medical College Pune</td>
                                                            <td>Pune</td>
                                                            <td>60.62%</td>
                                                            <td>2001</td>
                                                        </tr>
                                                        <tr>
                                                            <td>MBBS I II II</td>
                                                            <td>Bharati Vidyapeeths Medical college Pune</td>
                                                            <td>Pune</td>
                                                            <td>63% 64% 63%</td>
                                                            <td>1997</td>
                                                        </tr>
                                                    </tbody> 
                                                </table>
                                            </div>
                                        </div>
                                    </div>  
                                </main>
                            </div>
                        </div>
                    </div>
                    <!-- 3rd accordian -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Research Work Supervised As Teacher Post Graduate Ophthalmology
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <main class="page-content">
                                    <div class="tm-section shopping-cart-area bg-white tm-padding-section">
                                        <div class="container">
                                            <div class="tm-cart-table table-responsive">
                                                <table class="table table-bordered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="tm-cart-col-image" scope="col">Sr No.</th>
                                                            <th class="tm-cart-col-productname" scope="col">Research Work Details</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1.</td>
                                                            <td>Prevalence and presentation patterns of ARMD in hospital base population and assessment of management outcomes.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.</td>
                                                            <td>Clinical Study retinal degeneration in high myopias and children with family of myopia.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3.</td>
                                                            <td>Clinical study of ocular problem in preschool children and evaluation of strategies employed.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.</td>
                                                            <td>Clinical Study to evaluate presentation and might outcomes of ROP in premature new bornbabies in Pune region.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5.</td>
                                                            <td>Study to evaluate utilization of eye care services at various levels of eye care services with respect to gender at all ages.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6.</td>
                                                            <td>Clinical study of diabetic vitrectomies to evaluate role of intravitreal Anti VEGF injectiongiven preoperatively & intra operatively on per operative and post-operative vitreous hemorrhage.</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>7.</td>
                                                            <td>Rapid assessment of visual impairment (RAVI) study in Pune district of Maharashtra.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>8.</td>
                                                            <td>Evaluation of factors influencing patient compliance and cost in management of Diabeticretinopathy</td>
                                                        </tr>
                                                        <tr>
                                                            <td>9.</td>
                                                            <td>Evaluation of factors affecting visual outcome and acceptance of surgical technique in patients undergoing cataract surgery at a tertiary eye care institute.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>10.</td>
                                                            <td>Title of Project: A clinical study of patient’s expectations and satisfaction undergoing
                                                            cataractsurgery with various intraocular lenses in relation to visual outcome and hospital service delivery in a tertiaryeye care center.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>11.</td>
                                                            <td>Evaluation of role of post corneal astigmatism in toric IOL Implantation.</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>12.</td>
                                                            <td>Comparative evaluation of quantitative and qualitative performance technical human resource invariousstages of school eye health programme.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>13.</td>
                                                            <td>Evaluation of impact of School eye health program on prevalence of visual impairment, access toservices and quality of life.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>14.</td>
                                                            <td>Comparison of various postoperative treatment protocols for control of postoperative inflammation and patient’s satisfaction in patients undergoing phacoemulsification cataractsurgery</td>
                                                        </tr>
                                                        <tr>
                                                            <td>15.</td>
                                                            <td>A Comparative clinical study of post-operative care by teleophthalmology and in personconsultation at hospital OPD after an uncomplicated cataract surgery.s</td>
                                                        </tr>     
                                                    </tbody>     
                                                </table>
                                            </div>
                                        </div>
                                    </div>  
                                </main>
                            </div>
                        </div>
                    </div>
                    <!-- 4th accordian -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Optometry
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <main class="page-content">
                                    <div class="tm-section shopping-cart-area bg-white tm-padding-section">
                                        <div class="container">
                                            <div class="tm-cart-table table-responsive">
                                                <table class="table table-bordered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="tm-cart-col-image" scope="col">Sr No.</th>
                                                            <th class="tm-cart-col-productname" scope="col">Academic year</th>
                                                            <th class="tm-cart-col-productname" scope="col">Projects</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1.</td>
                                                            <td>2012-13</td>
                                                            <td>Comparison of partial coherence laser interferometry & ultrasound Ascanin measurement of axial length.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.</td>
                                                            <td>2014-15</td>
                                                            <td>Evaluation of factors affecting visual outcome in camp patients undergoing cataract surgery at tertiary eye care centre.</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>3.</td>
                                                            <td>2014-15</td>
                                                            <td>To evaluate the importance of biometry in visual outcome after cataract surgery</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>4.</td>
                                                            <td>2014-15</td>
                                                            <td>Clinical study of patients expectations & satisfaction undergoing cataract surgery wid various intraocular lenses in retina</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>5.</td>
                                                            <td>2014-15</td>
                                                            <td>To identity the reasons for borderline and poor outcome presenting and best corrected visualacutiy after 6 hours and 4 weeks of cataract surgery</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>6.</td>
                                                            <td>2015-16</td>
                                                            <td>Surgical induce astigmatism in phaco foldable lens</td>
                                                        </tr>   
                                                        <tr>
                                                            <td>7.</td>
                                                            <td>2016-17</td>
                                                            <td>Prevalence of ambloypia in school going children</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>8.</td>
                                                            <td>2016-17</td>
                                                            <td>Non compliance to the referral</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>9.</td>
                                                            <td>2016-17</td>
                                                            <td>KAP ( Kowledge, attitude and practice) question of refractive error for children parents and teachers</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>10.</td>
                                                            <td>2016-17</td>
                                                            <td>Compliance and non-compliance to the spectacle wear</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>11.</td>
                                                            <td>2017-18</td>
                                                            <td>to study the effectiveness of outreach services programmes held by HVDEH</td>
                                                        </tr>  
                                                    </tbody>     
                                                </table>
                                            </div>
                                        </div>
                                    </div>  
                                </main>
                            </div>
                        </div>
                    </div>
                    <!-- 5th accordian -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    Successful Grant Applications With Lions Hospitals
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <main class="page-content">
                                    <div class="tm-section shopping-cart-area bg-white tm-padding-section">
                                        <div class="container">
                                            <div class="tm-cart-table table-responsive">
                                                <table class="table table-bordered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="tm-cart-col-image" scope="col">Sr No.</th>
                                                            <th class="tm-cart-col-productname" scope="col">Grant No & Date</th>
                                                            <th class="tm-cart-col-productname" scope="col">Grant Administrator & Project Chairperson</th>
                                                            <th class="tm-cart-col-productname" scope="col">Name Of Project</th>
                                                            <th class="tm-cart-col-productname" scope="col">Approved Grant (USD)</th>  
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1.</td>
                                                            <td>SFP2112/323 4- D1, January 2020</td>
                                                            <td>Lion Jitendra Doshi (GA)</td>
                                                            <td>Upgrade Lions Eye Hospital, Islampur</td>
                                                            <td>1,46,250.00</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>2.</td>
                                                            <td>SFP2077/323 1 A2, August 2019</td>
                                                            <td>Lion Anil Jadhav (PC)</td>
                                                            <td>Upgrade Comprehensive Eye CareUnit in Alibaug</td>
                                                            <td>57,606.00</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>3.</td>
                                                            <td>1607/ 323 A3, January 2012</td>
                                                            <td>Lion Umesh Gandhi, Lion Milan Ajmera (PC), Ln Ashish Seth LC Juhu -9820044096</td>
                                                            <td>Centre, Bhaktivedanta Hospital Mira Road, Mumbai</td>
                                                            <td>7,00,958.00</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>4.</td>
                                                            <td>SFP1992/ 323 C, January 2018</td>
                                                            <td>PDG Lion Ashok Gupta (GA), Lion Pooran Rajlani (PC)</td>
                                                            <td>Upgrade Lions Eye Hospital, Parasia</td>
                                                            <td>1,08,670.00</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>5.</td>
                                                            <td>SFP1914 / 323D1, January 2017</td>
                                                            <td>Lion Keshav Pathak (GA), Lion Pandurang Shinde (PC)</td>
                                                            <td>Upgrade the Satara Camp Lions NAB Eye Hospital</td>
                                                            <td>94,860.00</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>6.</td>
                                                            <td>SFP1917/ 323 D1, August 2017</td>
                                                            <td>Lion Jagdish Purohit (GA), Lion R.K. Chavan (PC)</td>
                                                            <td>Upgrade Diwaliben Mohanlal Mehta Lions Eye Hospital, Ratnagiri</td>
                                                            <td>1,33,338.00</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>7.</td>
                                                            <td>SFP2021/ 323 D1, January 2018</td>
                                                            <td>LionR. K. Chavan (PC) & Lion Dr. Shekar Kovale (PC)</td>
                                                            <td>Supplemental for SFP 1917/ 323 D1 in Ratnagiri</td>
                                                            <td>27,830.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>8.</td>
                                                            <td>SFP1997/ 323 E1, August 2018</td>
                                                            <td>Lion Sakuntala Goyal (GA), Lion Ramniwas Goyal (PC)</td>
                                                            <td>Upgrade the Lions Eye Hospital, Mandawar</td>
                                                            <td>1,39,041.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>9.</td>
                                                            <td>SFP1916/ 323 F2, April 2018</td>
                                                            <td>PDG Lion P D Khedkar (GA), Lion Dr. Ajay Acharya (PC)</td>
                                                            <td>Upgrade the Lions Eye Hospital, Vapi</td>
                                                            <td>1,36,483.00</td>
                                                        </tr>   
                                                        <tr>
                                                            <td>10.</td>
                                                            <td>August 2018</td>
                                                            <td>PDG Lion Girishbhai V Patel, Lion Yogesh Doshi not PC anymore</td>
                                                            <td>Upgrade the RM Eye Hospital, Chikhodra</td>
                                                            <td>1,36,483.00</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>11.</td>
                                                            <td>SFP2094/323 3 G2, August 2019 </td>
                                                            <td>Lion Anil Kumar Jha (GA), Lion Kamal Bhandari (PC)</td>
                                                            <td>Upgrade DR Services, Sewa Sadan Eye Hospital, Bhopal</td>
                                                            <td>48,326.00</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>12.</td>
                                                            <td>SFP2066/ 3234H2, January 2019</td>
                                                            <td>Lion Sandeep Malu (GA), Lion Mohinder Kumar Aggarwal (PC)</td>
                                                            <td>Upgrade Aurangabad Chikalthana Lions Eye Hospital</td>
                                                            <td>6,17,143.00</td>    
                                                        </tr> 
                                                        <tr>
                                                            <td>13.</td>
                                                            <td>SFP1994/ 323, August 2018</td>
                                                            <td>Lion Jitendra Jain, Lion Subhash Dasani</td>
                                                            <td>Upgrade the Lions Karnavati Vishnubhai Patel Eye Hospital - Ahmedabad</td>
                                                            <td>2,08,906.00</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>14.</td>
                                                            <td>1717/ 323 D2, August 2013</td>
                                                            <td>Lion B.L. Joshi, Lion Vinod Kapoor (PC)</td>
                                                            <td>Develop the Comprehensive Eye Care, Kalpataru Lions Eye Hospital in Nashik</td>
                                                            <td>2,70,316.00</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>15.</td>
                                                            <td>SF1804/ 323E2, January 2015</td>
                                                            <td>Lion Suresh Goyal (GA), Lion R. K. Ojha (PC)</td>
                                                            <td>Upgrade Lions Eye Hospital, Jodhpur West</td>
                                                            <td>2,92,736.00</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>16.</td>
                                                            <td>SFP1908/ 323 E2, August 2016</td>
                                                            <td>PDG Lion Badri VishalMaheshwari (GA), Lion J K Bagrodia (PC)</td>
                                                            <td>Upgrade the Lions Eye Hospital, Bhilwara</td>
                                                            <td>68,523.00</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>17.</td>
                                                            <td>1803/ 323 H2, Jan-15</td>
                                                            <td>Ln Dr. Gopalrao Patil - GA, Ln H. T. Karad - PC</td>
                                                            <td>Lions Netra Pratishthan I- CareProject, Latur</td>
                                                            <td>1,67,902.00</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>18.</td>
                                                            <td>SFP1918/ 323 H2, January 2017</td>
                                                            <td>Lion Kamal Mansingka, Lion R. K. Lakhotia</td>
                                                            <td>Upgrade Udayagiri Lions Eye Hospital</td>
                                                            <td>4,51,534.00</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>19.</td>
                                                            <td>SF1860 / 323 H2, January 2016</td>
                                                            <td>Lion Jayesh Thakkar</td>
                                                            <td>Poly Eye Care Project at Lions 'Netra Rugnalaya Eye Hospital, Nanded</td>
                                                            <td>1,34,950.00</td>
                                                        </tr> 
                                                    </tbody>     
                                                   
                                                </table>
                                            </div>
                                        </div>
                                    </div>  
                                </main>
                            </div>
                        </div>
                    </div>
                    <!-- 6th accordian -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    Community Ophthalmology Projects Implemented At H V Desai Eye Hospital
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <main class="page-content">
                                    <div class="tm-section shopping-cart-area bg-white tm-padding-section">
                                        <div class="container">
                                            <div class="tm-cart-table table-responsive">
                                                <table class="table table-bordered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="tm-cart-col-image" scope="col">Sr No.</th>
                                                            <th class="tm-cart-col-productname" scope="col">Supporting Agency</th>
                                                            <th class="tm-cart-col-productname" scope="col">Project Name</th>
                                                            <th class="tm-cart-col-productname" scope="col">Project Aims & Objectives</th>
                                                            <th class="tm-cart-col-productname" scope="col">Status</th>
                                                            <th class="tm-cart-col-productname" scope="col">Budget</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1.</td>
                                                            <td>Orbis International</td>
                                                            <td>Strengthening of H. V.  To reduce avoidable Completed (2004-2006) Desai Eye Hospital’s (HVDEH) pediatric eye careservices with outreach   childhood blindness in Western India by establishing a dedicated program for Maharashtra,    centre of excellence in Goa and part of Karnataka   pediatric eye care at HV Desai Eye Hospital, Pune India</td>
                                                            <td>To reduce avoidable childhood blindness in Western India by establishing a dedicated centre of excellence in pediatric eye care at HV Desai Eye Hospital, Pune, India</td>
                                                            <td>Completed (2004-2006)</td>
                                                            <td></td> 
                                                        </tr> 
                                                        <tr>
                                                            <td>2.</td>
                                                            <td>Orbis International</td>
                                                            <td>SAVE YOUR SIGHT – Diabetic Retinopathy Project</td>
                                                            <td>To develop capacity to create demand fordiabeticretinopathy services in the catchment areas.</td>
                                                            <td>Completed (2008-2012)</td>
                                                            <td>81,00,000</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>3.</td>
                                                            <td>Seva Foundation</td>
                                                            <td>Buy A Frame, Help a child tosee –Paediatric Eye Care Project</td>
                                                            <td>To provide comprehensive eye careservices to the school going children in Pune and adjoining districts</td>
                                                            <td>Completed (2016-2018)</td>
                                                            <td>66,63,000</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>4.</td>
                                                            <td>Orbis International</td>
                                                            <td>REACH Project – Refractive Error AmongChildren</td>
                                                            <td>To provide comprehensive eye care servicesto 3.5 lakh school going children in Satara districts.</td>
                                                            <td>Completed (July 2016 to June 2019)</td>
                                                            <td>2,78,14,400</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>5.</td>
                                                            <td>Sightsaves International</td>
                                                            <td>National Tuckers Eye Health Program</td>
                                                            <td>To provide comprehensiveeye careservices to the truck drivers in the catchment area</td>
                                                            <td>Completed (November 2018 to March 2020)</td>
                                                            <td>2,50,000</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>6.</td>
                                                            <td>CBM International</td>
                                                            <td>Facilitating and implementing an inclusivecomprehensive eye health services</td>
                                                            <td>Facilitating and implementing an inclusivecomprehensive eye health services in the identified taluks of the Northern districts of Maharastra, India</td>
                                                            <td>Completed (2015 to 2019)</td>
                                                            <td>2,31,01,158</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>7.</td>
                                                            <td>Orbis International</td>
                                                            <td>PRISSM (Perfecting Refraction in India with Superior Service Models)</td>
                                                            <td>A cluster- randomized controlled trial of threemodels of school-based spectacleservice delivery in India</td>
                                                            <td>Completed ( 2019-20)</td>
                                                            <td>11,11,000</td>
                                                        </tr>    
                                                        <tr>
                                                            <td>8.</td>
                                                            <td>Seva Foundation</td>
                                                            <td>Buy A Frame, Help a child tosee –Paediatric Eye Care Project</td>
                                                            <td>To provide comprehensive eye care services to the pre school, special schools and school going children in Pune and joining districts</td>
                                                            <td>Ongoing 2018-2020</td>
                                                            <td>88,35,000</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>9.</td>
                                                            <td>Mission For Vision</td>
                                                            <td>Mission Roshni</td>
                                                            <td>Eradication of avoidable blindness amongstschool children in Ranjangaon area of Pune district</td>
                                                            <td>Ongoing 2019-2021</td>
                                                            <td>16,00,000</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>10.</td>
                                                            <td>Mission For Vision</td>
                                                            <td>Mission Seva</td>
                                                            <td>To provide comprehensiveeye services tocommunity people in identified villagesin Ranjangaon area (Pune region, Maharashtra)</td>
                                                            <td>Complet ed (2019-2021)</td>
                                                            <td>18,00,000</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>11.</td>
                                                            <td>Mission For Vision</td>
                                                            <td>Mission Jyot</td>
                                                            <td>Eradication of Avoidable Blindness and Enablement of Primary Eye Care Through 4 Vision Centres</td>
                                                            <td>Ongoing 2019-2023</td>
                                                            <td>32,06,000</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>12.</td>
                                                            <td>Ministry of Electroni cs & IT, Govt of India</td>
                                                            <td>Digital India Project</td>
                                                            <td>Design, Development and Deployment of‘Interactive Mobile Enabled Centralized Remote Eye Care Delivery System</td>
                                                            <td>Ongoing 2019-2022</td>
                                                            <td>73,92,000</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>13.</td>
                                                            <td>CBM International</td>
                                                            <td>Inclusive vision Centre for primary eye care inthree states of India</td>
                                                            <td>Delivering accessible andaffordable primary eye care services at communitylevel by setting up 10 vision centers in Maharashtra, India.</td>
                                                            <td>1st April 2020to 31st March 2023</td>
                                                            <td>3,17,56,293</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>14.</td>
                                                            <td>CBM International</td>
                                                            <td>CBM-H. V. Desai Eye Hospital Phaco Training Center (January 2020 – December 2023)</td>
                                                            <td>Bring out Quality & Safety in Operative Skills in Post – Graduate students</td>
                                                            <td>January 2020 – December 2023</td>
                                                            <td></td>
                                                        </tr> 
                                                        <tr>
                                                            <td>15.</td>
                                                            <td>Orbis International</td>
                                                            <td>Orbis-Santen-HVDEH Capacity Building Project (Vision2030 Program)</td>
                                                            <td>Accelerate ophthalmic care capacity growth through establishment of a regional digital training hub in western India</td>
                                                            <td>1st May 2021 to 31st October 2023</td>
                                                            <td></td>
                                                        </tr> 
                                                        <tr>
                                                            <td>16.</td>
                                                            <td>SEVA Foundation</td>
                                                            <td>Capacity Building Project</td>
                                                            <td>Increase the provision of comprehensive, quality eye care by building the capacity of 12 hospitals through training, coaching, demand generation and systems strengthening.</td>
                                                            <td>1 July 2016 – 30 June 2024</td>
                                                            <td></td>
                                                        </tr> 
                                                        <tr>
                                                            <td>17.</td>
                                                            <td>Eicher & Dr. Shroff Charity Eye Hospital</td>
                                                            <td>Eicher Driver Care Programme Mobile Van Project</td>
                                                            <td>Provide accessibility of affordable & advanced quality primary eye and ear healthcare services to the truck drivers at major transport hubs along the golden quadrilateral and national highway route across the country to support road safety and safe driving</td>
                                                            <td>January to December 2022</td>
                                                            <td></td>
                                                        </tr> 
                                                        <tr>
                                                            <td>18.</td>
                                                            <td>CBM-SCB, Mission for Vision & SEVA Foundation</td>
                                                            <td>Primary Vision Centers</td>
                                                            <td>Delivering Comprehensive Primary Eye Care Through Vision Centre Approach with Use of Tele Ophthalmology</td>
                                                            <td>1st July – 31st March 2023</td>
                                                            <td></td>
                                                        </tr> 
                                                    </tbody>        
                                                </table>
                                            </div>
                                        </div>
                                    </div>  
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  

<!-- doctor detail info design -->
<section class="sec-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="service-item">
                    <h2>Research</h2>
                    <div class="s-icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                    <ul>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Training on Risk and benefit assessment at PBMA’s H. V. Desai Eye Hospital, Pune, 14 June 2021</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Training in ICMR national guidelines for Ethics Committee reviewing Biomedical Health Research duringCOVID-19 Pandemic at PBMA’s H. V. Desai Eye Hospital, Pune, 14 June 2021.</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Training on IEC SOP version 10 dt 27 Dec 2020 attended at PBMA’s H. V. Desai Eye Hospital, Pune on 24 March 2021.</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>ICH- GCP- E6-R2 training attended at PBMA’s H. V. Desai Eye Hospital, Pune, 23 Dec2020</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>On line GCP training completed, 22 September 2020</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>ICH-GCP-E6-R2 and New Drugs Clinical Trials rules 2019 training attended at PBMA’s H. V. Desai Eye Hospital, Pune, 20th May 2019.</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>GCP & Schedule Training attended at PBMA’s H. V. Desai Eye Hospital, Pune, 15th Dec.2018.</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Training on EC accreditation & resent regulation on medical device at PBMA’s H. V.  DesaiEye Hospital. Pune, 20 May 2017.</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>GCP & Schedule Training attended at PBMA’s H. V. Desai Eye Hospital, Pune, 16 th July 2016</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Emerging issue in ethics & regulation of medical research, Pune 12th Jan.2013.</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>ISCR GCP workshop held at KEM Hospital, Pune, 2011</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="service-item">
                    <h2>Paper Published</h2>
                    <div class="s-icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
                    <ul>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Ophthalmic Epidemiol. 2009 Jan-Feb;16(1):8-14. Prevalence and Determinants of Xerophthalmia in Preschool Children in Urban Slums, Pune, India-A Preliminary Assessment. Dole K1, Gilbert C, Deshpande M, Khandekar R.</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Ophthalmic Epidemiol. 2009 Jul-Aug;16(4):212-7. The pattern of childhood blindness in Karnataka, South India. Gogate P1, Kishore H, Dole K, Shetty J, Gilbert C, Ranade S, Kumar M, Srihari, Deshpande M</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Middle East Afr J Ophthalmol. 2009 Apr;16(2):69-74. Prevalence of uncorrected refractive error and other eye problems among urban and rural schoolchildren. Padhye AS1, Khandekar R, Dharmadhikari S, Dole K, Gogate P, Deshpande M.</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Int J Ophthalmol. 2010;3(2):182-6.
                        Cost of pediatric cataract surgery in Maharashtra, IndiaGogate P1, Dole K, Ranade S, Deshpande M.</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Ophthalmic Epidemiol. 2010 Jan-Feb;17(1):25-33. Delayed presentation of cataracts in children: are they worth operating upon?
                        Gogate P1, Khandekar R, Shrishrimal M, Dole K, Taras S, Kulkarni S, Ranade S, Deshpande M</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Oman J Ophthalmol. 2011 Sep;4(3):129-34. doi: 10.4103/0974-620X.91269. Prevalence and causes of avoidable blindness and severe visual impairment in a tribal district ofMaharashtra, India. Dhake PV1, Dole K, Khandekar R, Deshpande M.
                        </li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Oman J Ophthalmol. 2012 Sep;5(3):150-6..
                        Visual outcome and impact on quality of life after surgeries differ in children operated for unilateraland bilateral cataract (Pune study 2011). Paryani M1, Khandekar RB, Dole K, Dharmadhikari S, Rishikeshi N</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Indian J Ophthalmol. 2014 Sep; 62(9): 927–930. Comparison of clinical outcome, patient and surgeon satisfaction following topical verses peribulbar anesthesia for phoecmusification and intraocular lens implantation: A randomized, controlled trial Kuldeep Dole, Sucheta Kulkarni, Kavita D Shisode, Rahul Deshpande, Nilesh Kakade, Rajiv Khandekar,1 and Madan Deshpande</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Oman J Ophthalmol. 2015 Jan-Apr;8(1):19-23. doi: 10.4103/0974-620X.149858. Magnitude and determinants of glaucoma in type II diabetics a hospital base cross–sectional study in Maharashtra. Dharmadhikari S1, Lohiya K1, Chelkar V1, Kalyani VK1, Dole K1, Deshpande M1, Khandekar R2,Kulkarni S1</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Middle East Afr J Ophthalmol. 2015 Jan-Mar; 22(1): 80–85. Impact of Cataract Surgery in Reducing Visual Impairment: A Review. Middle east African Journalof ophthalmology Rajiv Khandekar, Anand Sudhan, B. K. Jain, Madan Deshpande, Kuldeep Dole, Mahul Shah, andShreya Shah</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Indian J Ophthalmol. 2014 Jul; 62(7): 824–826. Spontaneous resorption of subretinal cortical lens material. Salil S Gadkari, Sucheta R Kulkarni, and Kuldeep Dole
                        </li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>National Journal Of Medical Research 2 July – Dec 2018 Magnitude and Determinants of Noncompliance for Screening and Management of DiabeticRetinopathy. Khurshed M Bharucha, Kuldeep Dole, Kunal Bhadbhade, Rahul Deshpand, Madan Deshpande</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Oman Journal of Ophthalmology Volume 12, Issue 1, January-April 2019 Ocular outcomes and comorbidities in preterm infants enrolled for retinopathy of prematurityscreening: A cohort study from western India. Sucheta Kulkarni, Mukti Shah, Kuldeep Dole, Sudhir Taras, Rahul Deshpande, Madan Deshpande</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>IP International Journal of Ocular Oncology and Oculoplasty, 2018 Volume 4: Issue 1 A clinical study of post-cataract surgery epiphora in relation to the type of cataract surgery anddifferent types of post-operative topical medication. Rahul Deshpande, Madan Deshpande, Kuldeep Dole, Khurshed Bharucha, Richa Dharap
                        </li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>BMJ Open Ophth 2019;4 Estimating the magnitude of diabetes mellitus and diabetic retinopathy in an older age urbanpopulation in Pune, western India. Sucheta Kulkarni, Shridevi Kondalkar, Islay Mactaggart, B R Shamanna, Azher Lodhi, Rohit Mendke, JiteshKharat, Rajesh Kapse, Kuldeep Dole, Madan Deshpande.
                        </li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Indian J Ophthalmol. 2020 Feb;68(2):333-39. Primary eye care in India - The vision center model Rohit C Khanna 1, Shalinder Sabherwal 2, Asim Sil 3, Mohammed Gowth 4, Kuldeep Dole 5, SubeeshKuyyadiyil 6, Heidi Chase 7
                        </li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Indian J Ophthalmol. 2020 Nov;68(11):2421-2426. A clinical study to assess feasibility, acceptance, and outcome of multifocal intraocular lens in patients with bilateral immature cataract at a tertiary eye care institute Rahul Deshpande 1, Varsha Mangiraj 1, Madan Deshpande 1, Kuldeep Dole 1, Khurshed Bharucha 1, Nirali Sanghavi 1</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>J Healthc Qual Res. Jul-Aug 2021;36(4):225-230. Assessment of quality of life of the patients with diabetic retinopathy using National Eye InstituteVisual Functioning Questionnaire (VFQ-25) S Pawar 1, A Parkar 2, Menon 2, N Desai 2, D Namrata 2, K Dole 3</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Indian J Ophthalmol . 2021 Jun;69(6):1409-1413. Can the postoperative follow-up visit be deferred up to four weeks after an uneventful cataractsurgery? - A randomized controlled trial Rahul Deshpande 1, Ushma Vora 2, Varsha Mangiraj 2, Kuldeep Dole 3.</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Indian J Ophthalmol . 2021 Jan;69(1):123-126. Comparative evaluation of qualitative performance of technical human resource in school eye health program. Kuldeep S Dole 1</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Indian J Ophthalmol 2022 Feb;70(2):420-424.
                        Cost analysis of pediatric cataract surgery in a tertiary eye care hospital in Western India Rajesh R Kapse 1, Stuti S Agarwal 2, Nikhil Rishikeshi 3, Madan Deshpande 3, Sucheta Kulkarni 3, Rahul Deshpande 3, Kuldeep Dole 3</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Indian Journal of Ophthalmology February 2022 - Volume 70 - Issue 2 Visual impairment and blindness among children from schools for the blind in Maharashtra state, India: Changing trendsover the last decade Kulkarni, Sucheta,; Gilbert, Clare1; Giri, Nilesh; Hankare, Pravin; Dole, Kuldeep; Deshpande, M</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Indian J Ophthalmol. 2021 Dec; 69(12): 3697–3702. Impact of a structured training program to enhance skills in phacoemulsification surgeryAnuprita Gandhi Bhatt, Kuldeep S Dole, Madan Deshpande, Khurshed Bharucha, and VKS Kalyani</li>  
                    </ul>   
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="service-item">
                    <h2>Presented Paper</h2>
                    <div class="s-icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
                    <ul>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>World ophthalmology conference (WOC)</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>European Society of cataract and refractive Surgery (ESC</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Middle East African conference (MEACO)</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>IAPB global and regional assemblies</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Vision 2020 India annual conferences</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>All India ophthalmology annual conferences</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Maharashtra ophthalmology annual conference</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Pune ophthalmological Society annual conferences</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="service-item">
                    <h2>Awards</h2>
                    <div class="s-icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>
                    <ul>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Distinction in Ophthalmology (MBBS course)- 1995</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Award for best paper in Surgery –2000 at Research society meeting of B.J Medical college and Sassoon General Hospital Pune Conference 2000.</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Best Papers in prevention of blindness category in APAO-AIOS, Hyderbad 2013</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Refractive errors – Prevalence and Barriers to Service delivery Best paper in MOSCON 2014, Solapur.</li>
                        <li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Best paper award in Contributing to the treatment or prevention of blindness in the developing world”. In XXXII congress of the European society of cataract and refractive surgeons Barcelona 2015</li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- consulting hospitals -->
<section class="sec-consulting">
    <div class="container">
        <div class="tm-sectiontitle text-center">
            <h2>Consulting Hospital</h2>
            <span class="tm-sectiontitle-divider">
            <img alt="section divider" src="{{ asset('/resources/assets/img/icons/eye-border-icon.png')}}" alt="eye-border-icon">
            </span>
        </div>
        <div class="row
         d-flex justify-content-center">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="consulting-box">
                    <div class="consulting-box-inner">
                        <div class="clients-name">
                            <!-- <h3>Dole Eye Clinic</h3> -->
                            <img src="{{ asset('/resources/assets/img/sahyadri-hospital-consulting-logo.png')}}" alt="sahyadri-hospital-consulting-logo" class="sahyadri-hospital-consulting-logo">
                        </div>
                    </div>
                    <h2>Sahyadri Hospital</h2>
                    <div class="d-flex">
                        <div>
                            <h5>Address</h5>
                        </div>
                        <div>
                            <p class="pb-4">Plot No. 30-C, Erandvane, Karve Rd, Deccan Gymkhana, Pune, Maharashtra 411004</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-5 mt-lg-0 mt-md-0">
                <div class="consulting-box">
                    <div class="consulting-box-inner">
                        <div class="clients-name">
                            <!-- <h3>Dole Eye Clinic</h3> -->
                            <img src="{{ asset('/resources/assets/img/hv-desai-eye-clinic-consulting-logo.png')}}" alt="hv-desai-eye-clinic-consulting-logo" class="sahyadri-hospital-consulting-logo">
                        </div>
                    </div>
                    <h2>H. V. Desai Eye Hospital</h2>
                    <div class="d-flex">  
                        <div>
                            <h5>Address</h5>
                        </div>
                        <div>
                            <p class="pb-3">93, Tarawade Vasti, Mohammadwadi, Hadapsar, Pune MH 411060 India</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop  